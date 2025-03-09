<?php

include "include/header.php";
if (!isset($_SESSION['user'])) {

	echo "<script> window.open('logout.php','_self')</script>";
	// header("location:login.php");
}
if (
	$_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6 || $_SESSION['user']['rule_id'] == 16 || $_SESSION['user']['rule_id'] == 26
) {
?>


	<?php
	if (isset($_GET['action'], $_GET['ids']) && $_GET['action'] == 'edit') {
		$id = $_GET['ids'];
		$sql = "select * from social_media_channels where id=?";
		$stm = $con->prepare($sql);
		$stm->execute(array($id));
		if ($stm->rowCount()) {
			foreach ($stm->fetchAll() as $row) { ?>

				<div class="content">
					<div class="page-inner">
						<div class="row">

							<div class="col-md-12">
								<form action="" method="post">
									<div class="card">
										<div class="card-header">
											<div class="card-title">تعديل استفسار </div>
										</div>
										<div class="card-body">
											<div class="row">


												<div class="col-md-6 col-lg-4">


													<div class="form-group form-floating-label">
														<label>تاريخ الاستفسار</label>
														<input type="date" class="form-control input-border-bottom" id="inputFloatingLabel" value="<?= $row['date'] ?>" name="date" required>
													</div>


													<div class="form-group form-floating-label">

														<label>الكود</label>
														<input type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="code" value="<?= $row['code'] ?>" disabled required>
													</div>

													<div class="form-group form-floating-label">
														<label>نوع الاستشارة</label>
														<select class="selectpicker form-control" name="inquiry_type" data-live-search="true" value="<?= $row['inquiry_type'] ?>" required>
															<option value=""></option>
															<option value="1" <?php echo $row['service_type'] == 1 ? 'selected' : '' ?>>عن المؤسسة وخدماتها</option>
															<option value="2" <?php echo $row['service_type'] == 2 ? 'selected' : '' ?>>استشارة نفسية</option>
														</select>
													</div>




												</div>
												<div class="col-md-6 col-lg-4">

													<div class="form-group form-floating-label">
														<label>الاسم</label>
														<input type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="name" value="<?= $row['name'] ?>" required>
													</div>

													<div class="form-group form-floating-label">
														<label>الجنس</label>
														<select class="selectpicker form-control" name="gender" data-live-search="true" value="<?= $row['gender'] ?>">

															<option value=""></option>

															<option value="1" <?php echo $row['service_type'] == 1 ? 'selected' : '' ?>>ذكر</option>
															<option value="2" <?php echo $row['service_type'] == 2 ? 'selected' : '' ?>>انثى</option>

														</select>
													</div>


													<div class="form-group form-floating-label">
														<label>نوع قناة التواصل</label>
														<select class="selectpicker form-control" name="channel_type" value="<?= $row['channel_type'] ?>" data-live-search="true" required>
															<option value=""></option>
															<option value="1" <?php echo $row['service_type'] == 1 ? 'selected' : '' ?>>فيسبوك</option>
															<option value="2" <?php echo $row['service_type'] == 2 ? 'selected' : '' ?>>واتس اب</option>
														</select>
													</div>

												</div>
												<div class="col-md-6 col-lg-4">

													<div class="form-group form-floating-label">
														<label>العمر</label>
														<input type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="age" value="<?= $row['age'] ?>" required>
													</div>

													<div class="form-group form-floating-label">
														<label>المدينة</label>
														<input type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="city" value="<?= $row['city'] ?>" required>
													</div>


													<div class="form-group form-floating-label">
														<label>نوع الخدمة</label>
														<select class="selectpicker form-control" name="service_type" value="<?= $row['service_type'] ?>" data-live-search="true" required>
															<option value=""></option>
															<option value="1" <?php echo $row['service_type'] == 1 ? 'selected' : '' ?>>تثقيف</option>
															<option value="2" <?php echo $row['service_type'] == 2 ? 'selected' : '' ?>>استشارة نفسية</option>
															<option value="3" <?php echo $row['service_type'] == 3 ? 'selected' : '' ?>>نوع اخر</option>

														</select>
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
					$age = test_input($_POST["age"]);

					$gender = test_input($_POST["gender"]);

					$inquiry_type = test_input($_POST["inquiry_type"]);

					$channel_type = test_input($_POST["channel_type"]);

					$service_type = test_input($_POST["service_type"]);

					$city = test_input($_POST["city"]);



					$user = $_SESSION['user']['id'];
					// find branch
					$branch = $_SESSION['user']['branch_id'];


					if (empty($date)) {


						echo '<script>swal("يرجاء ادخال  تاريخ دخول الحالة ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
					} elseif (empty($channel_type)) {


						echo '<script>swal("يرجاء ادخال نوع قناة التواصل  ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
					}
					/////////////////////////////////////////////////////////////////////////////////////تذكير الشرط حق الايميل

					//اذا لايوجد اي مشكلة يقوم بارسال الملف
					else {


						$query = "UPDATE  social_media_channels set name=?,date=?,age=?,gender=?,inquiry_type=?,channel_type=?,service_type=?,city=? where id=?";
						$stm = $con->prepare($query);
						$stm->execute(array(
							$name,
							$date,
							$age,
							$gender,
							$inquiry_type,
							$channel_type,
							$service_type,
							$city,
							$id
						));

						if ($stm->rowCount()) {
							echo '<script src="js/send_success.js"></script>';
						} else {
							print_r($stm->errorInfo());

							echo '<script src="js/send_error.js"></script>';
						}
					}
				}
			}
		}
	}
} else {
	echo "<script> window.open('index.php','_self')</script>";
}
?>