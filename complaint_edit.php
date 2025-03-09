<?php

include "include/header.php";
if (!isset($_SESSION['user'])) {

	echo "<script> window.open('logout.php','_self')</script>";
	// header("location:login.php");
}
if (
	$_SESSION['user']['rule_id'] == 16 || $_SESSION['user']['rule_id'] == 26 || $_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6
) {
?>



	<div class="content">
		<div class="page-inner">


			<div class="row">
				<div class="col-md-12">
					<?php
					if (isset($_GET['action'], $_GET['ids']) && $_GET['action'] == 'edit') {
						$id = $_GET['ids'];
						$sql = "select * from complaints where id=?";
						$stm = $con->prepare($sql);
						$stm->execute(array($id));
						if ($stm->rowCount()) {
							foreach ($stm->fetchAll() as $row) { ?>
								<form action="" method="post">
									<div class="">

										<div class="">
											<div class="row">
												<div class="row">

													<div class="col-md-12">
														<form action="" method="post">
															<div class="card">
																<div class="card-header">
																	<div class="card-title"> تعديل البيانات</div>
																</div>
																<div class="card-body">
																	<div class="row">


																		<div class="col-md-6 col-lg-4">


																			<div class="form-group form-floating-label">
																				<label>تاريخ الشكوى</label>
																				<input type="date" value="<?php echo $row['date']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="date" required>
																			</div>

																			<div class="form-group form-floating-label">
																				<label>رقم الشكوى</label>
																				<input type="number" value="<?php echo $row['complaint_number']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="complaint_number" disabled>
																			</div>


																			<div class="form-group form-floating-label">

																				<label>المركز</label>
																				<select class="selectpicker form-control" value="<?php echo  $row['center']; ?>" multiple name="center[]" data-live-search="true">
																					<option value=""></option>

																					<option <?php echo in_array('مركز الدعم النفسي -تعز', explode(',', $row['center'])) ?  'selected' : ''  ?>>مركز الدعم النفسي -تعز</option>
																					<option <?php echo in_array('مركز الدعم النفسي - أب', explode(',', $row['center'])) ?  'selected' : ''  ?>>مركز الدعم النفسي - إب </option>
																				</select>
																			</div>

																			<div class="form-group form-floating-label">

																				<label for="tokens">نوع الشكوى</label>
																				<select class="selectpicker form-control" value="<?php echo $row['type']; ?>" multiple name="type[]" id="tokens" data-live-search="true">
																					<option value=""></option>
																					<option <?php echo in_array('قضايا المستفيد', explode(',', $row['type'])) ?  'selected' : ''  ?>>قضايا المستفيد</option>
																					<option <?php echo in_array('شكوى كيدية', explode(',', $row['type'])) ?  'selected' : ''  ?>>شكوى كيدية</option>
																					<option <?php echo in_array('قضايا الموظفين', explode(',', $row['type'])) ?  'selected' : ''  ?>>قضايا الموظفين</option>
																					<option <?php echo in_array('إستفسار', explode(',', $row['type'])) ?  'selected' : ''  ?>>إستفسار</option>
																					<option <?php echo in_array('تحديد موعد', explode(',', $row['type'])) ?  'selected' : ''  ?>>تحديد موعد</option>
																				</select>
																			</div>


																		</div>
																		<div class="col-md-6 col-lg-4">

																			<div class="form-group form-floating-label">

																				<label>المرفق الصحي</label>
																				<select class="selectpicker form-control" value="<?php echo $row['health_facility']; ?>" multiple name="health_facility[]" data-live-search="true">
																					<option value=""></option>

																					<option <?php echo in_array('مستشفى الامراض النفسية والعصبية – عدن', explode(',', $row['health_facility'])) ?  'selected' : ''  ?>>مستشفى الامراض النفسية والعصبية – عدن</option>
																					<option <?php echo in_array('مستشفى الثورة – قسم الأمراض النفسية والعصبية – صنعاء', explode(',', $row['health_facility'])) ?  'selected' : ''  ?>>مستشفى الثورة – قسم الأمراض النفسية والعصبية – صنعاء</option>
																				</select>
																			</div>

																			<div class="form-group form-floating-label">
																				<label>اسم مقدم الشكوى</label>
																				<input type="text" value="<?php echo $row['name']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="name" required>
																			</div>


																			<div class="form-group form-floating-label">
																				<label>رقم تلفون مقدم الشكوى</label>
																				<input type="number" value="<?php echo $row['phone_number']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="phone_number" required>
																			</div>



																		</div>
																		<div class="col-md-6 col-lg-4">


																			<div class="form-group form-floating-label">
																				<label>محتوى الشكوى</label>
																				<textarea value="<?php echo $row['content']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="content" required><?php echo $row['content']; ?></textarea>
																			</div>


																			<div class="form-group form-floating-label">
																				<label>الاجراء الذي تم</label>
																				<input type="text" class="form-control input-border-bottom" value="<?php echo $row['action']; ?>" id="inputFloatingLabel" name="action" required>
																			</div>

																			<div class="form-group form-floating-label">
																				<label> المعالجة التي تمت للشكوى</label>
																				<input type="text" class="form-control input-border-bottom" value="<?php echo $row['process']; ?>" id="inputFloatingLabel" name="process" required>
																			</div>


																		</div>

																	</div>
																</div>
																<div class="card-action">


																	<input class="btn btn-success" type="submit" name="save" value="save">
																	<input class="btn btn-danger" type="reset" value="Cancel">
																</div>
															</div>
														</form>


													</div>




												<?php  } ?>

										<?php

									} else {
										echo ' <div class="alert alert-danger">NO Row</div>';
									}
								}

										?>
												</div>
											</div>
										</div>
									</div>



									<!-- Custom template | don't include it in your project! -->

									<!-- End Custom template -->
									<?php

									include "include/footer.php";


									?>

								<?php
								//تم وضع كود في الاخير من اجل تنفيذ رسالة التحدذير
								if (isset($_POST['save'])) {
									function test_input($data)
									{
										$data = trim($data);
										$data = stripslashes($data);
										$data = htmlspecialchars($data);
										return $data;
									}


									$name = test_input($_POST["name"]);
									$date = test_input($_POST["date"]);
									// $complaint_number = test_input($_POST["complaint_number"]);
									$phone_number = test_input($_POST["phone_number"]);

									$content = test_input($_POST["content"]);

									$action = test_input($_POST["action"]);

									$process = test_input($_POST["process"]);



									if (empty($_POST["center"])) {
										$center = "";
									} else {
										$center = $_POST["center"];
										$center = implode(',', $center);
									}

									if (empty($_POST["type"])) {
										$type = "";
									} else {
										$type = $_POST["type"];
										$type = implode(',', $type);
									}

									if (empty($_POST["health_facility"])) {
										$health_facility = "";
									} else {
										$health_facility = $_POST["health_facility"];
										$health_facility = implode(',', $health_facility);
									}


									$user = $_SESSION['user']['id'];
									// find branch
									$branch = $_SESSION['user']['branch_id'];


									//end find branch 

									if (empty($user)) {


										echo '<script>swal("يرجاء اعادة تسجيل الدخول   ", "لم يتم رفع البيانات", {	icon : "warning",	buttons: {confirm: {className : "btn btn-warning"}},});</script>';
									}

									//التحقق ان اسم المنتج موجود وليس ارقام

									elseif (empty($date)) {

										echo '<script>swal("يرجاء ادخال  تاريخ دخول الحالة ", "لم يتم رفع البيانات", {icon : "warning",buttons: {confirm: {className : "btn btn-warning"}},});</script>';
									}

									/////////////////////////////////////////////////////////////////////////////////////تذكير الشرط حق الايميل

									//اذا لايوجد اي مشكلة يقوم بارسال الملف
									else {
										$query = "UPDATE complaints set name=?,date=?,phone_number=?,content=?,action=?,process=?,center=?,type=?,health_facility=?,sender_name=? where id=? ";
										$_stm = $con->prepare($query);
										$_stm->execute(array(
											$name, $date, $phone_number, $content, $action, $process, $center, $type, $health_facility, $user, $id
										));

										if ($_stm->rowCount()) {
											echo '<script src="js/send_success.js"></script>';
											echo "<script>	window.open('today_complaint_data.php?num=2&id=500','_self') </script>";
										} else {
											// print_r($_stm->errorInfo());

											echo '<script src="js/send_error.js"></script>';
										}
									}
								}
							} else {
								echo "<script> window.open('index.php','_self')</script>";
							}
								?>

				</div>
			</div>
		</div>
	</div>