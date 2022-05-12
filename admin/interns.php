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
						<li style="margin-top: 0px;">
							<a href="index" class="ttr-material-button">
								<span class="ttr-icon"><i class="fa fa-users" aria-hidden="true"></i></span>
								<span class="ttr-label">Employee Masterlist</span>
							</a>
						</li>
						<li class="show" class="" style="margin-top: 0px;">
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
					<h2 class="title-head">Interns<span> </span></h2>
				</div>

				<div class="row">
					<div class="col-lg-12 m-b30">
						<div class="widget-box">
							<div class="widget-inner">
								<button type="button" class="btn green radius-xl" style="float: right; background-color: #ff9566;" data-toggle="modal" data-target="#insert-account"><i class="ti-user"></i><span>&nbsp;&nbsp;ADD INTERN RECORD</span></button><br><br>

										<div id="insert-account" class="modal fade" role="dialog">
											<form class="edit-profile m-b30" method="POST" enctype="multipart/form-data">
												<div class="modal-dialog modal-xl">
													<div class="modal-content">
														<div class="modal-header">
															<h4 class="modal-title"><img src="../assets/images/icon.png" style="width: 30px; height: 30px;">&nbsp;Add Intern Record</h4>
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
																				<label class="col-form-label">University</label>
																				<input class="form-control" type="text" name="university" value="" required>
																			</div>
																			<div class="form-group col-6">
																				<label class="col-form-label">Status</label><br>
																				<input type="radio" id="inactive" name="status" value="Inactive" required>
																				<label for="inactive" style="font-weight: 400">INACTIVE</label>&nbsp;&nbsp;&nbsp;&nbsp;
																				<input type="radio" id="active" name="status" value="Active">
																				<label for="active" style="font-weight: 400">ACTIVE</label>&nbsp;&nbsp;&nbsp;&nbsp;
																				<input type="radio" id="drop" name="status" value="Drop">
																				<label for="drop" style="font-weight: 400">DROP</label>&nbsp;&nbsp;&nbsp;&nbsp;
																				<input type="radio" id="done" name="status" value="Done">
																				<label for="done" style="font-weight: 400">DONE</label>
																			</div>
																			<div class="form-group col-3">
																				<label class="col-form-label">Start Date</label>
																				<input class="form-control" type="date" name="start_date" required>
																			</div>
																			<div class="form-group col-3">
																				<label class="col-form-label">Hours to Render</label>
																				<input class="form-control" type="number" name="render_hours" min="0" value="0" required>
																			</div>
																			<div class="form-group col-4">
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
																			<div class="form-group col-4">
																				<label class="col-form-label">Resume Link</label>
																				<input class="form-control" type="text" name="resume_link" required>
																			</div>
																			<div class="form-group col-4">
																				<label class="col-form-label">Portfolio (optional)</label>
																				<input class="form-control" type="text" name="portfolio">
																			</div>
																			<div class="form-group col-4">
																				<label class="col-form-label">Moa (with signature)</label>
																				<input class="form-control" type="url" name="moa" value="" required>
																			</div>
																			<div class="form-group col-4">
																				<label class="col-form-label">Internship Agreement Form (KFCI)</label>
																				<input class="form-control" type="url" name="kfci" value="" required>
																			</div>
																			<div class="form-group col-4">
																				<label class="col-form-label">Waiver/permission</label>
																				<input class="form-control" type="url" name="waiver" value="" required>
																			</div>
																		</div>
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
										$int_status = $_POST['status'];
										$university = $_POST['university'];
										$start_date = $_POST['start_date'];
										$hours = $_POST['render_hours'];
										$department = $_POST['department'];
										$resume_link = $_POST['resume_link'];
										$portfolio = (!empty($_POST['portfolio'])) ? $_POST['portfolio'] : "N/A";

										$moa = $_POST['moa'];
										$agreement = $_POST['kfci'];
										$waiver = $_POST['waiver'];

										$path = '../assets/images/profile-img/';
										$unique = time().uniqid(rand());
										$destination = $path . $unique . '.jpg';
										$image = $_FILES["image"]["tmp_name"];
										move_uploaded_file($image, $destination);
										$photo = $unique;


										$model->insertIntern($photo, $first_name, $middle_name, $last_name, $int_status, $university, $start_date, $hours, $department, $resume_link, $portfolio, $moa, $agreement, $waiver);

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
												<th>Status</th>
												<th>University</th>
												<th width="100">Action</th>
											</tr>
										</thead>
										<tbody>
											<?php

												$rows = $model->displayInterns();

												if (!empty($rows)) {
													foreach ($rows as $row) {
													$account_id = $row['intern_id'];

													if ($row['photo'] == "") {
														$photo = "default";
													}
													else {
														$photo = $row['photo'];
													}
											?>
											<tr>
												<td><?php echo $row['intern_id']; ?></td>
												<td><a href="../assets/images/profile-img/<?php echo $photo; ?>.jpg" target="_blank"><img src="../assets/images/profile-img/<?php echo $photo; ?>.jpg" alt="User" style="width: 30px; height: 30px; border-radius: 50%;object-fit: cover;">&nbsp;</a>&nbsp;<?php echo trim($row['fname']).' '.trim($row['mname']).' '.trim($row['lname']); ?></td>
												<td><?php echo $row['int_status']; ?></td>
												<td><?php echo $row['university']; ?></td>
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
																	<input type="hidden" name="intern_id" value="<?php echo $row['intern_id']; ?>">
																	<div class="form-group col-3">
																		<center>
																			<img id="display-img-<?php echo $account_id; ?>" src="../assets/images/profile-img/<?php echo $photo; ?>.jpg" style="width: 100%;height: 240px;object-fit: cover;">
																			<label class="col-form-label">Image</label>
																			<input class="form-control" type="file" name="image" id="input-img-" onchange="readURL(this, '<?php echo $account_id; ?>')" accept="image/*" style="border: 0px; padding: 0px;">
																		</center>


																	</div>
																	<div class="form-group col-9" style="padding-bottom: 15px;">
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
																				<label class="col-form-label">University</label>
																				<input class="form-control" type="text" name="university" value="<?php echo $row['university']; ?>" required>
																			</div>
																			<div class="form-group col-6">
																				<label class="col-form-label">Status</label><br>
																				<input type="radio" id="inactive" name="status" value="Inactive" <?php if ($row['int_status'] == "Inactive") { echo 'checked'; } ?> required>
																				<label for="inactive" style="font-weight: 400">INACTIVE</label>&nbsp;&nbsp;&nbsp;&nbsp;
																				<input type="radio" id="active" name="status" value="Active" <?php if ($row['int_status'] == "Active") { echo 'checked'; } ?>>
																				<label for="active" style="font-weight: 400">ACTIVE</label>&nbsp;&nbsp;&nbsp;&nbsp;
																				<input type="radio" id="drop" name="status" value="Drop" <?php if ($row['int_status'] == "Drop") { echo 'checked'; } ?>>
																				<label for="drop" style="font-weight: 400">DROP</label>&nbsp;&nbsp;&nbsp;&nbsp;
																				<input type="radio" id="done" name="status" value="Done" <?php if ($row['int_status'] == "Done") { echo 'checked'; } ?>>
																				<label for="done" style="font-weight: 400">DONE</label>
																			</div>
																			<div class="form-group col-3">
																				<label class="col-form-label">Start Date</label>
																				<input class="form-control" type="date" name="start_date" value="<?php echo $row['start_date']; ?>" required>
																			</div>
																			<div class="form-group col-3">
																				<label class="col-form-label">Hours to Render</label>
																				<input class="form-control" type="number" name="render_hours" min="0" value="<?php echo $row['hours']; ?>" required>
																			</div>
																			<div class="form-group col-4">
																				<label class="col-form-label">Department</label>
																				<select class="form-control" name="department">
																					<option value="Finance, Admin, HR" <?php if ($row['department'] == "Finance, Admin, HR") { echo 'selected'; } ?>>Finance, Admin, HR</option>
																					<option value="Platforms" <?php if ($row['department'] == "Platforms") { echo 'selected'; } ?>>Platforms</option>
																					<option value="Executive" <?php if ($row['department'] == "Executive") { echo 'selected'; } ?>>Executive</option>
																					<option value="Content and Production" <?php if ($row['department'] == "Content and Production") { echo 'selected'; } ?>>Content and Production</option>
																					<option value="Resmob and Marcom" <?php if ($row['department'] == "Resmob and Marcom") { echo 'selected'; } ?>>Resmob and Marcom</option>
																					<option value="UEMR" <?php if ($row['department'] == "UEMR") { echo 'selected'; } ?>>UEMR</option>
																					<option value="HR" <?php if ($row['department'] == "HR") { echo 'selected'; } ?>>HR</option>
																					<option value="Admin" <?php if ($row['department'] == "Admin") { echo 'selected'; } ?>>Admin</option>
																				</select>
																			</div>
																			<div class="form-group col-4">
																				<label class="col-form-label">Resume Link</label>
																				<input class="form-control" type="text" name="resume_link" value="<?php echo $row['hours']; ?>" required>
																			</div>
																			<div class="form-group col-4">
																				<label class="col-form-label">Portfolio (optional)</label>
																				<input class="form-control" type="text" name="portfolio" value="<?php if ($row['portfolio'] != "N/A") { echo $row['portfolio']; } ?>">
																			</div>
																			<div class="form-group col-4">
																				<label class="col-form-label">Moa (with signature)</label>
																				<input class="form-control" type="url" name="moa" value="<?php echo $row['moa']; ?>" required>
																			</div>
																			<div class="form-group col-4">
																				<label class="col-form-label">Internship Agreement Form (KFCI)</label>
																				<input class="form-control" type="url" name="kfci" value="<?php echo $row['agreement']; ?>" required>
																			</div>
																			<div class="form-group col-4">
																				<label class="col-form-label">Waiver/permission</label>
																				<input class="form-control" type="url" name="waiver" value="<?php echo $row['waiver']; ?>" required>
																			</div>
																		</div>
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
																	<input type="hidden" name="intern_id" value="<?php echo $row['intern_id']; ?>">
																	<div class="form-group col-3">
																		<center>
																			<img id="display-img-<?php echo $account_id; ?>" src="../assets/images/profile-img/<?php echo $photo; ?>.jpg" style="width: 100%;height: 300px;object-fit: cover;">
																		</center>


																	</div>
																	<div class="form-group col-9" style="padding-bottom: 15px;">
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
																				<label class="col-form-label">University</label>
																				<input class="form-control" type="text" name="university" value="<?php echo $row['university']; ?>" readonly>
																			</div>
																			<div class="form-group col-6">
																				<label class="col-form-label">Status</label><br>
																				<input type="radio" id="inactive" name="status" value="Inactive" <?php if ($row['int_status'] == "Inactive") { echo 'checked'; } ?> disabled>
																				<label for="inactive" style="font-weight: 400">INACTIVE</label>&nbsp;&nbsp;&nbsp;&nbsp;
																				<input type="radio" id="active" name="status" value="Active" <?php if ($row['int_status'] == "Active") { echo 'checked'; } ?> disabled>
																				<label for="active" style="font-weight: 400">ACTIVE</label>&nbsp;&nbsp;&nbsp;&nbsp;
																				<input type="radio" id="drop" name="status" value="Drop" <?php if ($row['int_status'] == "Drop") { echo 'checked'; } ?> disabled>
																				<label for="drop" style="font-weight: 400">DROP</label>&nbsp;&nbsp;&nbsp;&nbsp;
																				<input type="radio" id="done" name="status" value="Done" <?php if ($row['int_status'] == "Done") { echo 'checked'; } ?> disabled>
																				<label for="done" style="font-weight: 400">DONE</label>
																			</div>
																			<div class="form-group col-3">
																				<label class="col-form-label">Start Date</label>
																				<input class="form-control" type="date" name="start_date" value="<?php echo $row['start_date']; ?>" readonly>
																			</div>
																			<div class="form-group col-3">
																				<label class="col-form-label">Hours to Render</label>
																				<input class="form-control" type="number" name="render_hours" min="0" value="<?php echo $row['hours']; ?>" readonly>
																			</div>
																			<div class="form-group col-4">
																				<label class="col-form-label">Department</label>
																				<select class="form-control" name="department" disabled>
																					<option value="Finance, Admin, HR" <?php if ($row['department'] == "Finance, Admin, HR") { echo 'selected'; } ?>>Finance, Admin, HR</option>
																					<option value="Platforms" <?php if ($row['department'] == "Platforms") { echo 'selected'; } ?>>Platforms</option>
																					<option value="Executive" <?php if ($row['department'] == "Executive") { echo 'selected'; } ?>>Executive</option>
																					<option value="Content and Production" <?php if ($row['department'] == "Content and Production") { echo 'selected'; } ?>>Content and Production</option>
																					<option value="Resmob and Marcom" <?php if ($row['department'] == "Resmob and Marcom") { echo 'selected'; } ?>>Resmob and Marcom</option>
																					<option value="UEMR" <?php if ($row['department'] == "UEMR") { echo 'selected'; } ?>>UEMR</option>
																					<option value="HR" <?php if ($row['department'] == "HR") { echo 'selected'; } ?>>HR</option>
																					<option value="Admin" <?php if ($row['department'] == "Admin") { echo 'selected'; } ?>>Admin</option>
																				</select>
																			</div>
																			<div class="form-group col-4">
																				<label class="col-form-label">Resume Link</label>
																				<input class="form-control" type="text" name="resume_link" value="<?php echo $row['hours']; ?>" readonly>
																			</div>
																			<div class="form-group col-4">
																				<label class="col-form-label">Portfolio (optional)</label>
																				<input class="form-control" type="text" name="portfolio" value="<?php if ($row['portfolio'] != "N/A") { echo $row['portfolio']; } ?>" readonly>
																			</div>
																		</div>
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
													$intern_id = $_POST['intern_id'];
													$first_name = $_POST['first_name'];
													$middle_name = $_POST['middle_name'];
													$last_name = $_POST['last_name'];
													$int_status = $_POST['status'];
													$university = $_POST['university'];
													$start_date = $_POST['start_date'];
													$hours = $_POST['render_hours'];
													$department = $_POST['department'];
													$resume_link = $_POST['resume_link'];
													$portfolio = (!empty($_POST['portfolio'])) ? $_POST['portfolio'] : "N/A";

													$moa = $_POST['moa'];
													$agreement = $_POST['kfci'];
													$waiver = $_POST['waiver'];
													$photo = '';

													if (!isset($_FILES['image']) || $_FILES['image']['error'] == UPLOAD_ERR_NO_FILE) {}

													else {
														$path = '../assets/images/profile-img/';
														$photo = time().uniqid(rand());
														$destination = $path . $photo . '.jpg';
														$base = basename($_FILES["image"]["name"]);
														$image = $_FILES["image"]["tmp_name"];
														move_uploaded_file($image, $destination);
														$model->updateInternPhoto($photo, $intern_id);
													}


													$model->updateIntern($first_name, $middle_name, $last_name, $int_status, $university, $start_date, $hours, $department, $resume_link, $portfolio, $moa, $agreement, $waiver, $intern_id);

													echo "<script>alert('Intern has been updated!');window.open('interns', '_self')</script>";
												}

												if (isset($_POST['delete'])) {
													$intern_id = $_POST['intern_id'];
													$model->deleteIntern($intern_id);	
													echo "<script>alert('Intern has been deleted!');window.open('interns', '_self')</script>";
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