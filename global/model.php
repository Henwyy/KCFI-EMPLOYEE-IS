<?php

	use PHPMailer\PHPMailer\PHPMailer;

	date_default_timezone_set('Asia/Manila');
	Class Model {
		private $server = "localhost";
		private $username = "root";
		private $password = "";
		private $dbname = "employee";
		private $conn;

		public function __construct() {
			try {
				$this->conn = new mysqli($this->server, $this->username, $this->password, $this->dbname);	
			} catch (Exception $e) {
				echo "Connection failed" . $e->getMessage();
			}
		}

		//ADMIN - SIGN IN
		public function signIn($uname, $pword) {
			$query = "SELECT id, pword FROM admin WHERE uname = ?";
			if($stmt = $this->conn->prepare($query)) {
				$stmt->bind_param("s", $uname);
				$stmt->execute();
				$stmt->bind_result($id, $hashed_pass);
				$stmt->store_result();
				if($stmt->num_rows > 0) {
					if($stmt->fetch()) {
						if (password_verify($pword, $hashed_pass)) {
							$_SESSION['sess'] = $id;
							echo "<script>window.open('admin/index','_self');</script>";
							exit();
						}

						else {
							echo "<center><br><h5 style='color: red;'>Incorrect Password</h5></center>";
						}
					}
				}
				else {
					echo "<center><br><h5 style='color: red;'>Email not found</h5></center>";
				}
				$stmt->close();
			}
			$this->conn->close();
		}

		//ADD EMPLOYEE RECORD
		public function insertAccount($fname, $mname, $lname, $position, $gender, $work_status, $email, $department, $date_hired, $emp_status, $date_regular, $length_service, $date_birth, $rice_subsidy, $ecc_share, $sss, $philhealth, $pagibig, $hip, $dependents, $group_life_premium, $group_life_coverage, $hmo, $sss_num, $philhealth_num, $pagibig_num, $tin_num, $contact, $bank_account, $emergency_name, $relationship, $emergency_contact, $spouse, $children, $father, $mother, $address, $provincial_address, $resignation_date, $photo) {
			$query = "INSERT INTO employee (fname, mname, lname, position, gender, work_status, email, department, date_hired, emp_status, date_regular, length_service, date_birth, rice_subsidy, ecc_share, sss, philhealth, pagibig, hip, dependents, group_life_premium, group_life_coverage, hmo, sss_num, philhealth_num, pagibig_num, tin_num, contact, bank_account, emergency_name, relationship, emergency_contact, spouse, children, father, mother, address, provincial_address, resignation_date, photo, date_added, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

			if ($stmt = $this->conn->prepare($query)) {
				$date_added = date("Y-m-d H:i:s");
				$status = 1;

				$stmt->bind_param("sssssssssssssssssssssssssssssssssssssssssi", $fname, $mname, $lname, $position, $gender, $work_status, $email, $department, $date_hired, $emp_status, $date_regular, $length_service, $date_birth, $rice_subsidy, $ecc_share, $sss, $philhealth, $pagibig, $hip, $dependents, $group_life_premium, $group_life_coverage, $hmo, $sss_num, $philhealth_num, $pagibig_num, $tin_num, $contact, $bank_account, $emergency_name, $relationship, $emergency_contact, $spouse, $children, $father, $mother, $address, $provincial_address, $resignation_date, $photo, $date_added, $status);
				$stmt->execute();
				$stmt->close();
			}
		}

		//DISPLAY EMPLOYEE RECORDS
		public function displayAccounts() {
			$data = null;
			$query = "SELECT * FROM employee ORDER BY date_added DESC";
			if ($stmt = $this->conn->prepare($query)) {
				$stmt->execute();
				$result = $stmt->get_result();
				$num_of_rows = $stmt->num_rows;
				while ($row = $result->fetch_assoc()) {
					$data[] = $row;
				}
				$stmt->close();
			}
			return $data;
		}

		//UPDATE EMPLOYEE RECORD
		public function updateAccount($fname, $mname, $lname, $position, $gender, $work_status, $email, $department, $date_hired, $emp_status, $date_regular, $length_service, $date_birth, $rice_subsidy, $ecc_share, $sss, $philhealth, $pagibig, $hip, $dependents, $group_life_premium, $group_life_coverage, $hmo, $sss_num, $philhealth_num, $pagibig_num, $tin_num, $contact, $bank_account, $emergency_name, $relationship, $emergency_contact, $spouse, $children, $father, $mother, $address, $provincial_address, $resignation_date, $photo, $emp_id) {
			$query = "UPDATE employee SET fname = ?, mname = ?, lname = ?, position = ?, gender = ?, work_status = ?, email = ?, department = ?, date_hired = ?, emp_status = ?, date_regular = ?, length_service = ?, date_birth = ?, rice_subsidy = ?, ecc_share = ?, sss = ?, philhealth = ?, pagibig = ?, hip = ?, dependents = ?, group_life_premium = ?, group_life_coverage = ?, hmo = ?, sss_num = ?, philhealth_num = ?, pagibig_num = ?, tin_num = ?, contact = ?, bank_account = ?, emergency_name = ?, relationship = ?, emergency_contact = ?, spouse = ?, children = ?, father = ?, mother = ?, address = ?, provincial_address = ?, resignation_date = ? WHERE emp_id = ?";

			if ($stmt = $this->conn->prepare($query)) {
				$stmt->bind_param("sssssssssssssssssssssssssssssssssssssssi", $fname, $mname, $lname, $position, $gender, $work_status, $email, $department, $date_hired, $emp_status, $date_regular, $length_service, $date_birth, $rice_subsidy, $ecc_share, $sss, $philhealth, $pagibig, $hip, $dependents, $group_life_premium, $group_life_coverage, $hmo, $sss_num, $philhealth_num, $pagibig_num, $tin_num, $contact, $bank_account, $emergency_name, $relationship, $emergency_contact, $spouse, $children, $father, $mother, $address, $provincial_address, $resignation_date, $emp_id);
				$stmt->execute();
				$stmt->close();
			}
		}

		//UPDATE EMPLOYEE PHOTO
		public function updateEmployeePhoto($unique, $id) {
			$query = "UPDATE employee SET photo = ? WHERE emp_id = ?";
			if ($stmt = $this->conn->prepare($query)) {
				$stmt->bind_param('si', $unique, $id);
				$stmt->execute();
				$stmt->close();
			}
		}

		//DELETE EMPLOYEE RECORD
		public function deleteAccount($id) {
			$query = "DELETE FROM employee WHERE emp_id = ?";

			if ($stmt = $this->conn->prepare($query)) {
				$stmt->bind_param("i", $id);
				$stmt->execute();
				$stmt->close();
			}
		}


		//ADD INTERN RECORD
		public function insertIntern($photo, $fname, $mname, $lname, $int_status, $university, $start_date, $hours, $department, $resume_link, $portfolio, $moa, $agreement, $waiver) {
			$query = "INSERT INTO intern (photo, fname, mname, lname, int_status, university, start_date, hours, department, resume_link, portfolio, moa, agreement, waiver, status, date_added) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

			if ($stmt = $this->conn->prepare($query)) {
				$date_added = date("Y-m-d H:i:s");
				$status = 1;

				$stmt->bind_param("ssssssssssssssis", $photo, $fname, $mname, $lname, $int_status, $university, $start_date, $hours, $department, $resume_link, $portfolio, $moa, $agreement, $waiver, $status, $date_added);
				$stmt->execute();
				$stmt->close();
			}
		}

		//DISPLAY INTERNS RECORDS
		public function displayInterns() {
			$data = null;
			$query = "SELECT * FROM intern ORDER BY date_added DESC";
			if ($stmt = $this->conn->prepare($query)) {
				$stmt->execute();
				$result = $stmt->get_result();
				$num_of_rows = $stmt->num_rows;
				while ($row = $result->fetch_assoc()) {
					$data[] = $row;
				}
				$stmt->close();
			}
			return $data;
		}

		//UPDATE INTERN RECORD
		public function updateIntern($fname, $mname, $lname, $int_status, $university, $start_date, $hours, $department, $resume_link, $portfolio, $moa, $agreement, $waiver, $intern_id) {
			$query = "UPDATE intern SET fname = ?, mname = ?, lname = ?, int_status = ?, university = ?, start_date = ?, hours = ?, department = ?, resume_link = ?, portfolio = ?, moa = ?, agreement = ?, waiver = ? WHERE intern_id = ?";

			if ($stmt = $this->conn->prepare($query)) {
				$stmt->bind_param("sssssssssssssi", $fname, $mname, $lname, $int_status, $university, $start_date, $hours, $department, $resume_link, $portfolio, $moa, $agreement, $waiver, $intern_id);
				$stmt->execute();
				$stmt->close();
			}
		}

		//UPDATE INTERN PHOTO
		public function updateInternPhoto($unique, $id) {
			$query = "UPDATE intern SET photo = ? WHERE intern_id = ?";
			if ($stmt = $this->conn->prepare($query)) {
				$stmt->bind_param('si', $unique, $id);
				$stmt->execute();
				$stmt->close();
			}
		}

		//DELETE INTERN RECORD
		public function deleteIntern($id) {
			$query = "DELETE FROM intern WHERE intern_id = ?";

			if ($stmt = $this->conn->prepare($query)) {
				$stmt->bind_param("i", $id);
				$stmt->execute();
				$stmt->close();
			}
		}
	}
?>