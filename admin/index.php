<?php
	session_start(); 
	include('../global/model.php');

	if (empty($_SESSION['sess'])) {
		echo "<script>window.open('../','_self');</script>";
	}		

	$department_id = $_SESSION['sess'];
	$model = new Model();
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="keywords" content="" />
		<meta name="author" content="" />
		<meta name="robots" content="" />

		<meta name="description" content="" />

		<meta property="og:title" content="" />
		<meta property="og:description" content="" />
		<meta property="og:image" content="" />
		<meta name="format-detection" content="telephone=no">

		<link rel="icon" href="../assets/images/icon.png" type="image/x-icon" />
		<link rel="shortcut icon" type="image/x-icon" href="../assets/images/icon.png" />

		<title>KCFI Employee</title>

		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" type="text/css" href="../dashboard/assets/css/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" type="text/css" href="../dashboard/assets/css/assets.css">
		<link rel="stylesheet" type="text/css" href="../dashboard/assets/vendors/calendar/fullcalendar.css">

		<link rel="stylesheet" type="text/css" href="../dashboard/assets/css/typography.css">

		<link rel="stylesheet" type="text/css" href="../dashboard/assets/css/shortcodes/shortcodes.css">

		<link rel="stylesheet" type="text/css" href="../dashboard/assets/css/style.css">
		<link rel="stylesheet" type="text/css" href="../dashboard/assets/css/dashboard.css">

		<style type="text/css">
			.btn.dropdown-toggle.btn-default:hover {
			color: #000!important;
		}

		.btn.dropdown-toggle.btn-default:focus {
			color: #000!important;
		}

		tbody tr:hover {
			background-color: #d4d4d4;
		}
		.widget-card .icon {
			position: absolute;
			top: auto;
			bottom: -20px;
			right: 5px;
			z-index: 0;
			font-size: 65px;
			color: rgba(0, 0, 0, 0.15);
		}

		.ttr-sidebar-navi ul li.show > a {
			background-color: #C8A23C!important;
		}

		.ttr-material-button:hover {
			background-color: #C8A23C!important;
		}

		.ttr-label, .ttr-icon > i {
			color: white;
		}
		.widget-card .icon {
			position: absolute;
			top: auto;
			bottom: -20px;
			right: 5px;
			z-index: 0;
			font-size: 65px;
			color: rgba(0, 0, 0, 0.15);
		}
		.borderless td, .borderless th {
		    border: none;
		}
		@media (min-width: 768px) {
		  .modal-xl {
		    width: 90%;
		   max-width:1120px;
		  }
		}
		</style>
		<link class="skin" rel="stylesheet" type="text/css" href="../dashboard/assets/css/color/color-1.css">
	</head>
	<body class="ttr-opened-sidebar ttr-pinned-sidebar" style="background-color: #F3F3F3;">

			<header class="ttr-header" style="background: #ff9566!important;">
		<div class="ttr-header-wrapper">
			<div class="ttr-toggle-sidebar ttr-material-button">
				<i class="ti-close ttr-open-icon"></i>
				<i class="ti-menu ttr-close-icon"></i>
			</div>
			<div class="ttr-header-menu">
			</div>
			<div class="ttr-header-right ttr-with-seperator">
				<ul class="ttr-header-navigation">
					<li>
						<a href="#" class="ttr-material-button ttr-submenu-toggle"><span class="ttr-user-avatar"><i class="fa fa-cog fa-spinn" style="font-size: 32px;"></i></span></a>
						<div class="ttr-header-submenu">
							<ul>
								<li><a href="logout">Logout</a></li>
							</ul>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</header>

		<div class="ttr-sidebar" style="background-color: #ff9566;">
			<div class="ttr-sidebar-wrapper content-scroll">
				
				<div class="ttr-sidebar-logo" style="background-image: url('../assets/images/background.png');background-position: center;background-repeat: no-repeat;background-size: cover;height: 135px;border-color: #222831;">
					<div class="ttr-sidebar-toggle-button">
						<i class="ti-arrow-left"></i>
					</div>
					<div style="padding-left: 12px; padding-top: 12px;">
						<div class="image">
							<img src="../assets/images/profile-img/default.jpg" alt="User" style="width: 50px; height: 50px; border-radius: 50%;object-fit: cover;cover;border: 1px solid #E2E2E2;">
						</div>
						<div style="height: 8px;">
						</div>
						<div class="info-container">
							<div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white; font-size: 15px;"><b>KCFI</b></div>
							<div class="email" style="color: white; font-size: 12px;">Administrator</div>
						</div>
					</div>
				</div>

				<nav class="ttr-sidebar-navi">
					<ul>
						<li style="padding-left: 20px; padding-top: 5px; padding-bottom: 5px; margin-top: 0px; margin-bottom: 0px;">
							<span class="ttr-label" style="color: #D5D6D8; font-weight: 500;">Menu</span>
						</li>
						<li class="show" style="margin-top: 0px;">
							<a href="index" class="ttr-material-button">
								<span class="ttr-icon"><i class="fa fa-users" aria-hidden="true"></i></span>
								<span class="ttr-label">Employee Masterlist</span>
							</a>
						</li>
						<li class="" style="margin-top: 0px;">
							<a href="interns" class="ttr-material-button">
								<span class="ttr-icon"><i class="fa fa-user" aria-hidden="true"></i></span>
								<span class="ttr-label">Interns</span>
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<main class="ttr-wrapper" style="background-color: #F3F3F3;">
			<div class="container-fluid">
				<div class="heading-bx left">
					<h2 class="title-head">Employee<span> Masterlist</span></h2>
				</div>

				<div class="row">
					<div class="col-lg-12 m-b30">
						<div class="widget-box">
							<div class="widget-inner">
								<button type="button" class="btn green radius-xl" style="float: right; background-color: #FFE0A36;" data-toggle="modal" data-target="#insert-account"><i class="ti-user"></i><span>&nbsp;&nbsp;ADD EMPLOYEE RECORD</span></button><br><br>

										<div id="insert-account" class="modal fade" role="dialog">
											<form class="edit-profile m-b30" method="POST" enctype="multipart/form-data">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<h4 class="modal-title"><img src="../assets/images/icon.png" style="width: 30px; height: 30px;">&nbsp;Add Employee Record</h4>
															<button type="button" class="close" data-dismiss="modal">&times;</button>
														</div>
														<div class="modal-body">
															<div class="row">
																	<div class="form-group col-3">
																		<center>
																			<img id="display-img-X" src="../assets/images/profile-img/default.jpg" style="width: 100%;height: 240px;object-fit: cover;">
																			<label class="col-form-label">Image</label>
																			<input class="form-control" type="file" name="image" id="input-img-X" onchange="readURL(this, 'X')" accept="image/*" style="border: 0px; padding: 0px;" required>
																		</center>
																	</div>
																	<div class="form-group col-9" style="padding-bottom: 15px;">
																		<div class="row">
																			<div class="form-group col-3">
																				<label class="col-form-label">First Name</label>
																				<input class="form-control" type="text" name="first_name" value="" required>
																			</div>
																			<div class="form-group col-3">
																				<label class="col-form-label">Middle Name</label>
																				<input class="form-control" type="text" name="middle_name" value="" required>
																			</div>
																			<div class="form-group col-3">
																				<label class="col-form-label">Last Name</label>
																				<input class="form-control" type="text" name="last_name" value="" required>
																			</div>
																			<div class="form-group col-3">
																				<label class="col-form-label">Position</label>
																				<input class="form-control" type="text" name="position" value="" required>
																			</div>

																			<div class="form-group col-3">
																				<label class="col-form-label">Gender</label>
																				<select class="form-control" name="gender">
																					<option value="Male">Male</option>
																					<option value="Female">Female</option>
																				</select>
																			</div>
																			<div class="form-group col-3">
																				<label class="col-form-label">Status</label>
																				<select class="form-control" name="status">
																					<option value="dawdaw">Active</option>
																					<option value="dawdaw">Resigned</option>
																				</select>
																			</div>
																			<div class="form-group col-3">
																				<label class="col-form-label">Email</label>
																				<input class="form-control" type="email" name="email" value="" required>
																			</div>
																			<div class="form-group col-3">
																				<label class="col-form-label">Department</label>
																				<select class="form-control" name="department">
																					<option value="Finance, Admin, HR">Finance, Admin, HR</option>
																					<option value="Platforms">Platforms</option>
																					<option value="Executive">Executive</option>
																					<option value="Content and Production">Content and Production</option>
																					<option value="Resmob and Marcom">Resmob and Marcom</option>
																					<option value="UEMR">UEMR</option>
																					<option value="HR">HR</option>
																					<option value="Admin">Admin</option>
																				</select>
																			</div>
																			<div class="form-group col-3">
																				<label class="col-form-label">Date Hired</label>
																				<input class="form-control" type="date" name="date_hired" value="" required>
																			</div>
																			<div class="form-group col-3">
																				<label class="col-form-label">Emp. Status</label>
																				<select class="form-control" name="emp_status">
																					<option value="Regular">Regular</option>
																					<option value="Contractual">Contractual</option>
																					<option value="Probationary">Probationary</option>
																					<option value="Contractual">Contractual</option>
																					<option value="Project">Project</option>
																				</select>
																			</div>
																			<div class="form-group col-3">
																				<label class="col-form-label">Regularization</label>
																				<input class="form-control" type="date" name="regularization" value="" required>
																			</div>
																			<div class="form-group col-3">
																				<label class="col-form-label">Service</label>
																				<input class="form-control" type="text" name="service" value="" required>
																			</div>
																		</div>
																	</div>
																	
																	<div class="form-group col-3">
																		<label class="col-form-label">Birth Date</label>
																		<input class="form-control" type="date" name="birth_date" value="" required>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Rice Subsidy</label>
																		<input class="form-control" type="text" name="rice_subsidy" value="" required>
																	</div>

																	<div class="form-group col-3">
																		<label class="col-form-label">ECC Share</label>
																		<input class="form-control" type="text" name="ecc_share" value="" required>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">SSS Premium</label>
																		<input class="form-control" type="text" name="sss_premium" value="" required>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Philhealth</label>
																		<input class="form-control" type="text" name="philhealth" value="" required>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Pag-ibig</label>
																		<input class="form-control" type="text" name="pagibig" value="" required>
																	</div>

																	<div class="form-group col-3">
																		<label class="col-form-label">Health Insurance Premium</label>
																		<input class="form-control" type="text" name="health_insurance" value="" required>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Dependents HMO</label>
																		<input class="form-control" type="text" name="dependents_hmo" value="" required>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Group Life Insurance Premium</label>
																		<input class="form-control" type="text" name="group_premium" value="" required>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Group Life Insurance Coverage</label>
																		<input class="form-control" type="text" name="group_coverage" value="" required>
																	</div>

																	<div class="form-group col-3">
																		<label class="col-form-label">HMO</label>
																		<input class="form-control" type="text" name="hmo" value="" required>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">SSS #</label>
																		<input class="form-control" type="text" name="sss" value="" required>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Philhealth #</label>
																		<input class="form-control" type="text" name="philhealth_no" value="" required>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Pag-ibig #</label>
																		<input class="form-control" type="text" name="pagibig_no" value="" required>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">TIN #</label>
																		<input class="form-control" type="text" name="tin_no" value="" required>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Contact #</label>
																		<input class="form-control" type="text" name="contact_no" value="" required>
																	</div>

																	<div class="form-group col-3">
																		<label class="col-form-label">Bank Account</label>
																		<input class="form-control" type="text" name="bank_account" value="" required>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Emergency Contact</label>
																		<input class="form-control" type="text" name="emergency_name" value="" required>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Relationship</label>
																		<input class="form-control" type="text" name="emergency_relationship" value="" required>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Contact #</label>
																		<input class="form-control" type="text" name="emergency_contact" value="" required>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Spouse</label>
																		<input class="form-control" type="text" name="spouse" value="" required>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Children</label>
																		<input class="form-control" type="text" name="children" value="" required>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Father</label>
																		<input class="form-control" type="text" name="father" value="" required>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Mother</label>
																		<input class="form-control" type="text" name="mother" value="" required>
																	</div>

																	<div class="form-group col-4">
																		<label class="col-form-label">Address</label>
																		<input class="form-control" type="text" name="address" value="" required>
																	</div>
																	<div class="form-group col-5">
																		<label class="col-form-label">Provincial Address</label>
																		<input class="form-control" type="text" name="provincial_address" value="" required>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Resignation Date</label>
																		<input class="form-control" type="date" name="resignation_date" value="" required>
																	</div>
																</div>
															</div>
															<div class="modal-footer">
																<input type="submit" class="btn green radius-xl outline" name="insert" value="Save Changes">
																<button type="button" class="btn red outline radius-xl" data-dismiss="modal">Close</button>
															</div>
														</div>
													</div>
												</form>
											</div>
								<?php

									if (isset($_POST['insert'])) {
										$first_name = $_POST['first_name'];
										$middle_name = $_POST['middle_name'];
										$last_name = $_POST['last_name'];
										$position = $_POST['position'];
										$gender = $_POST['gender'];
										$status = $_POST['status'];
										$email = $_POST['email'];
										$department = $_POST['department'];
										$date_hired = $_POST['date_hired'];
										$emp_status = $_POST['emp_status'];
										$regularization = $_POST['regularization'];
										$service = $_POST['service'];
										$birth_date = $_POST['birth_date'];
										$rice_subsidy = $_POST['rice_subsidy'];
										$ecc_share = $_POST['ecc_share'];
										$sss_premium = $_POST['sss_premium'];
										$philhealth = $_POST['philhealth'];
										$pagibig = $_POST['pagibig'];
										$health_insurance = $_POST['health_insurance'];
										$dependents_hmo = $_POST['dependents_hmo'];
										$group_premium = $_POST['group_premium'];
										$group_coverage = $_POST['group_coverage'];
										$hmo = $_POST['hmo'];
										$sss = $_POST['sss'];
										$philhealth_no = $_POST['philhealth_no'];
										$pagibig_no = $_POST['pagibig_no'];
										$tin_no = $_POST['tin_no'];
										$contact_no = $_POST['contact_no'];
										$bank_account = $_POST['bank_account'];
										$emergency_name = $_POST['emergency_name'];
										$emergency_relationship = $_POST['emergency_relationship'];
										$emergency_contact = $_POST['emergency_contact'];
										$spouse = $_POST['spouse'];
										$children = $_POST['children'];
										$father = $_POST['father'];
										$mother = $_POST['mother'];
										$address = $_POST['address'];
										$provincial_address = $_POST['provincial_address'];
										$resignation_date = $_POST['resignation_date'];
										//$photo = '';

										$path = '../assets/images/profile-img/';
										$unique = time().uniqid(rand());
										$destination = $path . $unique . '.jpg';
										$base = basename($_FILES["image"]["name"]);
										$image = $_FILES["image"]["tmp_name"];
										move_uploaded_file($image, $destination);
										$photo = $unique;


										$model->insertAccount($first_name, $middle_name, $last_name, $position, $gender, $status, $email, $department, $date_hired, $emp_status, $regularization, $service, $birth_date, $rice_subsidy, $ecc_share, $sss_premium, $philhealth, $pagibig, $health_insurance, $dependents_hmo, $group_premium, $group_coverage, $hmo, $sss, $philhealth_no, $pagibig_no, $tin_no, $contact_no, $bank_account, $emergency_name, $emergency_relationship, $emergency_contact, $spouse, $children, $father, $mother, $address, $provincial_address, $resignation_date, $photo);

										//echo "<script>alert('Employee has been added!');window.open('index', '_self')</script>";
									}

								?>
								<div style="padding: 25px;"></div>
								<div class="table-responsive">
									<table id="table" class="table hover" style="width:100%">
										<thead>
											<tr>
												<th>ID</th>
												<th>Name</th>
												<th>Position</th>
												<th>Gender</th>
												<th>Status</th>
												<th>Email</th>
												<th>Department</th>
												<th width="100">Action</th>
											</tr>
										</thead>
										<tbody>
											<?php

												$rows = $model->displayAccounts();

												if (!empty($rows)) {
													foreach ($rows as $row) {
													$account_id = $row['emp_id'];

													if ($row['photo'] == "") {
														$photo = "default";
													}
													else {
														$photo = $row['photo'];
													}
											?>
											<tr>
												<td><?php echo $row['emp_id']; ?></td>
												<td><a href="../assets/images/profile-img/<?php echo $photo; ?>.jpg" target="_blank"><img src="../assets/images/profile-img/<?php echo $photo; ?>.jpg" alt="User" style="width: 30px; height: 30px; border-radius: 50%;object-fit: cover;">&nbsp;</a>&nbsp;<?php echo trim($row['fname']).' '.trim($row['mname']).' '.trim($row['lname']); ?></td>
												<td><?php echo $row['position']; ?></td>
												<td><?php echo $row['gender']; ?></td>
												<td><?php echo $row['work_status']; ?></td>
												<td><?php echo $row['email']; ?></td>
												<td><?php echo $row['department']; ?></td>
												<td>
													<center>
														<button data-toggle="modal" data-target="#update-<?php echo $account_id; ?>" class="btn blue" style="width: 50px; height: 37px;">
															<span data-toggle="tooltip" title="Update">
																<i class="ti-marker-alt" style="font-size: 12px;"></i>
															</span>
														</button>&nbsp;
														<button data-toggle="modal" data-target="#delete-<?php echo $account_id; ?>" class="btn red" style="width: 50px; height: 37px;">
															<span data-toggle="tooltip" title="Delete">
																<i class="ti-archive" style="font-size: 12px;"></i>
															</span>
														</button>
													</center>
												</td>
											</tr>

											<div id="update-<?php echo $account_id; ?>" class="modal fade" role="dialog">
												<form class="edit-profile m-b30" method="POST" enctype="multipart/form-data">
													<div class="modal-dialog modal-xl">
														<div class="modal-content">
															<div class="modal-header">
																<h4 class="modal-title"><img src="../assets/images/icon.png" style="width: 30px; height: 30px;">&nbsp;Update Record</h4>
																<button type="button" class="close" data-dismiss="modal">&times;</button>
															</div>
															<div class="modal-body">
																<div class="row">
																	<input type="hidden" name="account_id" value="<?php echo $account_id; ?>">
																	<div class="form-group col-3">
																		<center>
																			<img id="display-img-<?php echo $account_id; ?>" src="../assets/images/profile-img/<?php echo $photo; ?>.jpg" style="width: 100%;height: 240px;object-fit: cover;">
																			<label class="col-form-label">Image</label>
																			<input class="form-control" type="file" name="image" id="input-img-" onchange="readURL(this, '<?php echo $account_id; ?>')" accept="image/*" style="border: 0px; padding: 0px;">
																		</center>


																	</div>
																	<div class="form-group col-9" style="padding-bottom: 15px;">
																		<input type="hidden" name="employee_id" value="<?php echo $row['emp_id']; ?>">
																		<div class="row">
																			<div class="form-group col-3">
																				<label class="col-form-label">First Name</label>
																				<input class="form-control" type="text" name="first_name" value="<?php echo $row['fname']; ?>" required>
																			</div>
																			<div class="form-group col-3">
																				<label class="col-form-label">Middle Name</label>
																				<input class="form-control" type="text" name="middle_name" value="<?php echo $row['mname']; ?>" required>
																			</div>
																			<div class="form-group col-3">
																				<label class="col-form-label">Last Name</label>
																				<input class="form-control" type="text" name="last_name" value="<?php echo $row['lname']; ?>" required>
																			</div>
																			<div class="form-group col-3">
																				<label class="col-form-label">Position</label>
																				<input class="form-control" type="text" name="position" value="<?php echo $row['position']; ?>" required>
																			</div>

																			<div class="form-group col-3">
																				<label class="col-form-label">Gender</label>
																				<select class="form-control" name="gender">
																					<option value="Male" <?php if ($row['gender'] == "Male") {echo 'selected';} else {} ?>>Male</option>
																					<option value="Female" <?php if ($row['gender'] == "Female") {echo 'selected';} else {} ?>>Female</option>
																				</select>
																			</div>
																			<div class="form-group col-3">
																				<label class="col-form-label">Status</label>
																				<select class="form-control" name="status">
																					<option value="Active" <?php if ($row['work_status'] == "Active") {echo 'selected';} else {} ?>>Active</option>
																					<option value="Resigned" <?php if ($row['work_status'] == "Resigned") {echo 'selected';} else {} ?>>Resigned</option>
																				</select>
																			</div>
																			<div class="form-group col-3">
																				<label class="col-form-label">Email</label>
																				<input class="form-control" type="email" name="email" value="<?php echo $row['email']; ?>" required>
																			</div>
																			<div class="form-group col-3">
																				<label class="col-form-label">Department</label>
																				<select class="form-control" name="department">
																					<option value="Finance, Admin, HR" <?php if ($row['department'] == "Finance, Admin, HR") {echo 'selected';} else {} ?>>Finance, Admin, HR</option>
																					<option value="Platforms" <?php if ($row['department'] == "Platforms") {echo 'selected';} else {} ?>>Platforms</option>
																					<option value="Executive" <?php if ($row['department'] == "Executive") {echo 'selected';} else {} ?>>Executive</option>
																					<option value="Content and Production" <?php if ($row['department'] == "Content and Production") {echo 'selected';} else {} ?>>Content and Production</option>
																					<option value="Resmob and Marcom" <?php if ($row['department'] == "Resmob and Marcom") {echo 'selected';} else {} ?>>Resmob and Marcom</option>
																					<option value="UEMR" <?php if ($row['department'] == "UEMR") {echo 'selected';} else {} ?>>UEMR</option>
																					<option value="HR" <?php if ($row['department'] == "HR") {echo 'selected';} else {} ?>>HR</option>
																					<option value="Admin" <?php if ($row['department'] == "Admin") {echo 'selected';} else {} ?>>Admin</option>
																				</select>
																			</div>
																			<div class="form-group col-3">
																				<label class="col-form-label">Date Hired</label>
																				<input class="form-control" type="date" name="date_hired" value="<?php echo $row['date_hired']; ?>" required>
																			</div>
																			<div class="form-group col-3">
																				<label class="col-form-label">Emp. Status</label>
																				<select class="form-control" name="emp_status">
																					<option value="Regular" <?php if ($row['emp_status'] == "Regular") {echo 'selected';} else {} ?>>Regular</option>
																					<option value="Contractual" <?php if ($row['emp_status'] == "Contractual") {echo 'selected';} else {} ?>>Contractual</option>
																					<option value="Probationary" <?php if ($row['emp_status'] == "Probationary") {echo 'selected';} else {} ?>>Probationary</option>
																					<option value="Project" <?php if ($row['emp_status'] == "Project") {echo 'selected';} else {} ?>>Project</option>
																				</select>
																			</div>
																			<div class="form-group col-3">
																				<label class="col-form-label">Regularization</label>
																				<input class="form-control" type="date" name="regularization" value="<?php echo $row['date_regular']; ?>" required>
																			</div>
																			<div class="form-group col-3">
																				<label class="col-form-label">Service</label>
																				<input class="form-control" type="text" name="service" value="<?php echo $row['length_service']; ?>" required>
																			</div>
																		</div>
																	</div>
																	
																	<div class="form-group col-3">
																		<label class="col-form-label">Birth Date</label>
																		<input class="form-control" type="date" name="birth_date" value="<?php echo $row['date_birth']; ?>" required>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Rice Subsidy</label>
																		<input class="form-control" type="text" name="rice_subsidy" value="<?php echo $row['rice_subsidy']; ?>" required>
																	</div>

																	<div class="form-group col-3">
																		<label class="col-form-label">ECC Share</label>
																		<input class="form-control" type="text" name="ecc_share" value="<?php echo $row['ecc_share']; ?>" required>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">SSS Premium</label>
																		<input class="form-control" type="text" name="sss_premium" value="<?php echo $row['sss']; ?>" required>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Philhealth</label>
																		<input class="form-control" type="text" name="philhealth" value="<?php echo $row['philhealth']; ?>" required>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Pag-ibig</label>
																		<input class="form-control" type="text" name="pagibig" value="<?php echo $row['pagibig']; ?>" required>
																	</div>

																	<div class="form-group col-3">
																		<label class="col-form-label">Health Insurance Premium</label>
																		<input class="form-control" type="text" name="health_insurance" value="<?php echo $row['hip']; ?>" required>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Dependents HMO</label>
																		<input class="form-control" type="text" name="dependents_hmo" value="<?php echo $row['dependents']; ?>" required>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Group Life Insurance Premium</label>
																		<input class="form-control" type="text" name="group_premium" value="<?php echo $row['group_life_premium']; ?>" required>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Group Life Insurance Coverage</label>
																		<input class="form-control" type="text" name="group_coverage" value="<?php echo $row['group_life_coverage']; ?>" required>
																	</div>

																	<div class="form-group col-3">
																		<label class="col-form-label">HMO</label>
																		<input class="form-control" type="text" name="hmo" value="<?php echo $row['hmo']; ?>" required>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">SSS #</label>
																		<input class="form-control" type="text" name="sss" value="<?php echo $row['sss_num']; ?>" required>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Philhealth #</label>
																		<input class="form-control" type="text" name="philhealth_no" value="<?php echo $row['philhealth_num']; ?>" required>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Pag-ibig #</label>
																		<input class="form-control" type="text" name="pagibig_no" value="<?php echo $row['pagibig_num']; ?>" required>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">TIN #</label>
																		<input class="form-control" type="text" name="tin_no" value="<?php echo $row['tin_num']; ?>" required>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Contact #</label>
																		<input class="form-control" type="text" name="contact_no" value="<?php echo $row['contact']; ?>" required>
																	</div>

																	<div class="form-group col-3">
																		<label class="col-form-label">Bank Account</label>
																		<input class="form-control" type="text" name="bank_account" value="<?php echo $row['bank_account']; ?>" required>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Emergency Contact</label>
																		<input class="form-control" type="text" name="emergency_name" value="<?php echo $row['emergency_name']; ?>" required>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Relationship</label>
																		<input class="form-control" type="text" name="emergency_relationship" value="<?php echo $row['relationship']; ?>" required>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Contact #</label>
																		<input class="form-control" type="text" name="emergency_contact" value="<?php echo $row['emergency_contact']; ?>" required>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Spouse</label>
																		<input class="form-control" type="text" name="spouse" value="<?php echo $row['spouse']; ?>" required>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Children</label>
																		<input class="form-control" type="text" name="children" value="<?php echo $row['children']; ?>" required>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Father</label>
																		<input class="form-control" type="text" name="father" value="<?php echo $row['father']; ?>" required>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Mother</label>
																		<input class="form-control" type="text" name="mother" value="<?php echo $row['mother']; ?>" required>
																	</div>

																	<div class="form-group col-4">
																		<label class="col-form-label">Address</label>
																		<input class="form-control" type="text" name="address" value="<?php echo $row['address']; ?>" required>
																	</div>
																	<div class="form-group col-5">
																		<label class="col-form-label">Provincial Address</label>
																		<input class="form-control" type="text" name="provincial_address" value="<?php echo $row['provincial_address']; ?>" required>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Resignation Date</label>
																		<input class="form-control" type="date" name="resignation_date" value="<?php echo $row['resignation_date']; ?>" required>
																	</div>
																</div>
															</div>
															<div class="modal-footer">
																<input type="submit" class="btn green radius-xl outline" name="update" value="Save Changes">
																<button type="button" class="btn red outline radius-xl" data-dismiss="modal">Close</button>
															</div>
														</div>
													</div>
												</form>
											</div>

											<div id="delete-<?php echo $account_id; ?>" class="modal fade" role="dialog">
												<form class="edit-profile m-b30" method="POST">
													<div class="modal-dialog modal-xl">
														<div class="modal-content">
															<div class="modal-header">
																<h4 class="modal-title"><img src="../assets/images/icon.png" style="width: 30px; height: 30px;">&nbsp;Delete Record</h4>
																<button type="button" class="close" data-dismiss="modal">&times;</button>
															</div><input type="hidden" name="account_id" value="<?php echo $account_id; ?>">
															<div class="modal-body">
																<div class="row">
																	<input type="hidden" name="account_id" value="<?php echo $account_id; ?>">
																	<div class="form-group col-3">
																		<center>
																			<img id="display-img-<?php echo $account_id; ?>" src="../assets/images/profile-img/<?php echo $photo; ?>.jpg" style="width: 100%;height: 300px;object-fit: cover;">
																		</center>


																	</div>
																	<div class="form-group col-9" style="padding-bottom: 15px;">
																		<input type="hidden" name="employee_id" value="<?php echo $row['emp_id']; ?>">
																		<div class="row">
																			<div class="form-group col-3">
																				<label class="col-form-label">First Name</label>
																				<input class="form-control" type="text" name="first_name" value="<?php echo $row['fname']; ?>" readonly>
																			</div>
																			<div class="form-group col-3">
																				<label class="col-form-label">Middle Name</label>
																				<input class="form-control" type="text" name="middle_name" value="<?php echo $row['mname']; ?>" readonly>
																			</div>
																			<div class="form-group col-3">
																				<label class="col-form-label">Last Name</label>
																				<input class="form-control" type="text" name="last_name" value="<?php echo $row['lname']; ?>" readonly>
																			</div>
																			<div class="form-group col-3">
																				<label class="col-form-label">Position</label>
																				<input class="form-control" type="text" name="position" value="<?php echo $row['position']; ?>" readonly>
																			</div>

																			<div class="form-group col-3">
																				<label class="col-form-label">Gender</label>
																				<input class="form-control" type="text" name="position" value="<?php echo $row['gender']; ?>" readonly>
																			</div>
																			<div class="form-group col-3">
																				<label class="col-form-label">Status</label>
																				<input class="form-control" type="text" name="position" value="<?php echo $row['work_status']; ?>" readonly>
																			</div>
																			<div class="form-group col-3">
																				<label class="col-form-label">Email</label>
																				<input class="form-control" type="email" name="email" value="<?php echo $row['email']; ?>" readonly>
																			</div>
																			<div class="form-group col-3">
																				<label class="col-form-label">Department</label>
																				<input class="form-control" type="text" name="position" value="<?php echo $row['department']; ?>" readonly>
																			</div>
																			<div class="form-group col-3">
																				<label class="col-form-label">Date Hired</label>
																				<input class="form-control" type="date" name="date_hired" value="<?php echo $row['date_hired']; ?>" readonly>
																			</div>
																			<div class="form-group col-3">
																				<label class="col-form-label">Emp. Status</label>
																				<input class="form-control" type="text" name="position" value="<?php echo $row['emp_status']; ?>" readonly>
																			</div>
																			<div class="form-group col-3">
																				<label class="col-form-label">Regularization</label>
																				<input class="form-control" type="date" name="regularization" value="<?php echo $row['date_regular']; ?>" readonly>
																			</div>
																			<div class="form-group col-3">
																				<label class="col-form-label">Service</label>
																				<input class="form-control" type="text" name="service" value="<?php echo $row['length_service']; ?>" readonly>
																			</div>
																		</div>
																	</div>
																	
																	<div class="form-group col-3">
																		<label class="col-form-label">Birth Date</label>
																		<input class="form-control" type="date" name="birth_date" value="<?php echo $row['date_birth']; ?>" readonly>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Rice Subsidy</label>
																		<input class="form-control" type="text" name="rice_subsidy" value="<?php echo $row['rice_subsidy']; ?>" readonly>
																	</div>

																	<div class="form-group col-3">
																		<label class="col-form-label">ECC Share</label>
																		<input class="form-control" type="text" name="ecc_share" value="<?php echo $row['ecc_share']; ?>" readonly>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">SSS Premium</label>
																		<input class="form-control" type="text" name="sss_premium" value="<?php echo $row['sss']; ?>" readonly>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Philhealth</label>
																		<input class="form-control" type="text" name="philhealth" value="<?php echo $row['philhealth']; ?>" readonly>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Pag-ibig</label>
																		<input class="form-control" type="text" name="pagibig" value="<?php echo $row['pagibig']; ?>" readonly>
																	</div>

																	<div class="form-group col-3">
																		<label class="col-form-label">Health Insurance Premium</label>
																		<input class="form-control" type="text" name="health_insurance" value="<?php echo $row['hip']; ?>" readonly>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Dependents HMO</label>
																		<input class="form-control" type="text" name="dependents_hmo" value="<?php echo $row['dependents']; ?>" readonly>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Group Life Insurance Premium</label>
																		<input class="form-control" type="text" name="group_premium" value="<?php echo $row['group_life_premium']; ?>" readonly>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Group Life Insurance Coverage</label>
																		<input class="form-control" type="text" name="group_coverage" value="<?php echo $row['group_life_coverage']; ?>" readonly>
																	</div>

																	<div class="form-group col-3">
																		<label class="col-form-label">HMO</label>
																		<input class="form-control" type="text" name="hmo" value="<?php echo $row['hmo']; ?>" readonly>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">SSS #</label>
																		<input class="form-control" type="text" name="sss" value="<?php echo $row['sss_num']; ?>" readonly>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Philhealth #</label>
																		<input class="form-control" type="text" name="philhealth_no" value="<?php echo $row['philhealth_num']; ?>" readonly>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Pag-ibig #</label>
																		<input class="form-control" type="text" name="pagibig_no" value="<?php echo $row['pagibig_num']; ?>" readonly>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">TIN #</label>
																		<input class="form-control" type="text" name="tin_no" value="<?php echo $row['tin_num']; ?>" readonly>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Contact #</label>
																		<input class="form-control" type="text" name="contact_no" value="<?php echo $row['contact']; ?>" readonly>
																	</div>

																	<div class="form-group col-3">
																		<label class="col-form-label">Bank Account</label>
																		<input class="form-control" type="text" name="bank_account" value="<?php echo $row['bank_account']; ?>" readonly>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Emergency Contact</label>
																		<input class="form-control" type="text" name="emergency_name" value="<?php echo $row['emergency_name']; ?>" readonly>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Relationship</label>
																		<input class="form-control" type="text" name="emergency_relationship" value="<?php echo $row['relationship']; ?>" readonly>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Contact #</label>
																		<input class="form-control" type="text" name="emergency_contact" value="<?php echo $row['emergency_contact']; ?>" readonly>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Spouse</label>
																		<input class="form-control" type="text" name="spouse" value="<?php echo $row['spouse']; ?>" readonly>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Children</label>
																		<input class="form-control" type="text" name="children" value="<?php echo $row['children']; ?>" readonly>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Father</label>
																		<input class="form-control" type="text" name="father" value="<?php echo $row['father']; ?>" readonly>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Mother</label>
																		<input class="form-control" type="text" name="mother" value="<?php echo $row['mother']; ?>" readonly>
																	</div>

																	<div class="form-group col-4">
																		<label class="col-form-label">Address</label>
																		<input class="form-control" type="text" name="address" value="<?php echo $row['address']; ?>" readonly>
																	</div>
																	<div class="form-group col-5">
																		<label class="col-form-label">Provincial Address</label>
																		<input class="form-control" type="text" name="provincial_address" value="<?php echo $row['provincial_address']; ?>" readonly>
																	</div>
																	<div class="form-group col-3">
																		<label class="col-form-label">Resignation Date</label>
																		<input class="form-control" type="date" name="resignation_date" value="<?php echo $row['resignation_date']; ?>" readonly>
																	</div>
																</div>
															</div>
															<div class="modal-footer">
																<input type="submit" class="btn green radius-xl outline" name="delete" value="Delete">
																<button type="button" class="btn red outline radius-xl" data-dismiss="modal">Close</button>
															</div>
														</div>
													</div>
												</form>
											</div>
											<?php

													}
												}

												if (isset($_POST['update'])) {
													$emp_id = $_POST['employee_id'];
													$first_name = $_POST['first_name'];
													$middle_name = $_POST['middle_name'];
													$last_name = $_POST['last_name'];
													$position = $_POST['position'];
													$gender = $_POST['gender'];
													$status = $_POST['status'];
													$email = $_POST['email'];
													$department = $_POST['department'];
													$date_hired = $_POST['date_hired'];
													$emp_status = $_POST['emp_status'];
													$regularization = $_POST['regularization'];
													$service = $_POST['service'];
													$birth_date = $_POST['birth_date'];
													$rice_subsidy = $_POST['rice_subsidy'];
													$ecc_share = $_POST['ecc_share'];
													$sss_premium = $_POST['sss_premium'];
													$philhealth = $_POST['philhealth'];
													$pagibig = $_POST['pagibig'];
													$health_insurance = $_POST['health_insurance'];
													$dependents_hmo = $_POST['dependents_hmo'];
													$group_premium = $_POST['group_premium'];
													$group_coverage = $_POST['group_coverage'];
													$hmo = $_POST['hmo'];
													$sss = $_POST['sss'];
													$philhealth_no = $_POST['philhealth_no'];
													$pagibig_no = $_POST['pagibig_no'];
													$tin_no = $_POST['tin_no'];
													$contact_no = $_POST['contact_no'];
													$bank_account = $_POST['bank_account'];
													$emergency_name = $_POST['emergency_name'];
													$emergency_relationship = $_POST['emergency_relationship'];
													$emergency_contact = $_POST['emergency_contact'];
													$spouse = $_POST['spouse'];
													$children = $_POST['children'];
													$father = $_POST['father'];
													$mother = $_POST['mother'];
													$address = $_POST['address'];
													$provincial_address = $_POST['provincial_address'];
													$resignation_date = $_POST['resignation_date'];

													$model->updateAccount($first_name, $middle_name, $last_name, $position, $gender, $status, $email, $department, $date_hired, $emp_status, $regularization, $service, $birth_date, $rice_subsidy, $ecc_share, $sss_premium, $philhealth, $pagibig, $health_insurance, $dependents_hmo, $group_premium, $group_coverage, $hmo, $sss, $philhealth_no, $pagibig_no, $tin_no, $contact_no, $bank_account, $emergency_name, $emergency_relationship, $emergency_contact, $spouse, $children, $father, $mother, $address, $provincial_address, $resignation_date, $photo, $emp_id);

													if (!isset($_FILES['image']) || $_FILES['image']['error'] == UPLOAD_ERR_NO_FILE) {}

													else {
														$path = '../assets/images/profile-img/';
														$unique = time().uniqid(rand());
														$destination = $path . $unique . '.jpg';
														$base = basename($_FILES["image"]["name"]);
														$image = $_FILES["image"]["tmp_name"];
														move_uploaded_file($image, $destination);
														$model->updateEmployeePhoto($unique, $emp_id);
													}

													echo "<script>alert('Employee has been updated!');window.open('index', '_self')</script>";
												}

												if (isset($_POST['delete'])) {
													$account_id = $_POST['account_id'];
													$model->deleteAccount($account_id);	
													echo "<script>alert('Employee has been deleted!');window.open('index', '_self')</script>";
												}

											?>
										</tbody>
									</table>
								</div><br>
							</div>
						</div>
					</div>
				</div>
			</div>
		</main>
		<div class="ttr-overlay"></div>

		<script src="../dashboard/assets/js/jquery.min.js"></script>
		<script src="../dashboard/assets/vendors/bootstrap/js/popper.min.js"></script>
		<script src="../dashboard/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
		<script src="../dashboard/assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
		<script src="../dashboard/assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
		<script src="../dashboard/assets/vendors/magnific-popup/magnific-popup.js"></script>
		<script src="../dashboard/assets/vendors/counter/waypoints-min.js"></script>
		<script src="../dashboard/assets/vendors/counter/counterup.min.js"></script>
		<script src="../dashboard/assets/vendors/imagesloaded/imagesloaded.js"></script>
		<script src="../dashboard/assets/vendors/masonry/masonry.js"></script>
		<script src="../dashboard/assets/vendors/masonry/filter.js"></script>
		<script src="../dashboard/assets/vendors/owl-carousel/owl.carousel.js"></script>
		<script src='../dashboard/assets/vendors/scroll/scrollbar.min.js'></script>
		<script src="../dashboard/assets/js/functions.js"></script>
		<script src="../dashboard/assets/vendors/chart/chart.min.js"></script>
		<script src="../dashboard/assets/js/admin.js"></script>
		<script src='../dashboard/assets/vendors/calendar/moment.min.js'></script>   
		<script src="../dashboard/assets/js/jquery.dataTables.min.js"></script>
		<script src="../dashboard/assets/js/dataTables.bootstrap4.min.js"></script>

		<script type="text/javascript">
			$(document).ready(function() {
				$('#table').DataTable();
			});

			$(document).ready(function(){
				$('[data-toggle="tooltip"]').tooltip();
			});
		</script>
		<script type="text/javascript">
			function readURL(input, id) {
				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function (e) {
						$('#display-img-' + id).attr('src', e.target.result);
					}

					reader.readAsDataURL(input.files[0]);
				}
			}
		</script>
		<script type="text/javascript">
			function readURL2(input, id) {
				if (input.files && input.files[0]) {
					var reader = new FileReader();

					reader.onload = function (e) {
						$('#display-img2-' + id).attr('src', e.target.result);
					}

					reader.readAsDataURL(input.files[0]);
				}
			}

			$(document).ready(function() {
				$('#table').DataTable();
			});

			$(document).ready(function(){
				$('[data-toggle="tooltip"]').tooltip();
			});
		</script>
	</body>

</html>