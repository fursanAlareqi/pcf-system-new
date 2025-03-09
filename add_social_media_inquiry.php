<?php

include "include/header.php";
if (!isset($_SESSION['user'])) {

	echo "<script> window.open('logout.php','_self')</script>";
	// header("location:login.php");
}
if (
	$_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6 || $_SESSION['user']['rule_id'] == 16
	|| $_SESSION['user']['rule_id'] == 26
) {
?>



	<div class="content">
		<div class="page-inner">


			<div class="row">

				<div class="col-md-12">
					<form action="" method="post">
						<div class="card">
							<div class="card-header">
								<div class="card-title">استفسار جديد</div>
							</div>
							<div class="card-body">
								<div class="row">


									<div class="col-md-6 col-lg-4">


										<div class="form-group form-floating-label">
											<label>تاريخ الاستفسار</label>
											<input type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="date" required>
										</div>


										<div class="form-group form-floating-label">

											<label>الكود</label>
											<?php
											$sql = "select max(code) code  from social_media_channels ";
											$stmu = $con->prepare($sql);
											$stmu->execute();
											$row = 1;
											if ($stmu->rowCount() > 0) {
												$row = $stmu->fetch();
											}

											?>
											<input type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="code" value="<?php echo $row["code"] + 1 ?>" disabled required>
										</div>

										<div class="form-group form-floating-label">
											<label>نوع الاستشارة</label>
											<select class="selectpicker form-control" name="inquiry_type" data-live-search="true" required>
												<option value=""></option>
												<option value="1">عن المؤسسة وخدماتها</option>
												<option value="2">استشارة نفسية</option>
											</select>
										</div>




									</div>
									<div class="col-md-6 col-lg-4">

										<div class="form-group form-floating-label">
											<label>الاسم</label>
											<input type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="name" required>
										</div>

										<div class="form-group form-floating-label">
											<label>الجنس</label>
											<select class="selectpicker form-control" name="gender" data-live-search="true">

												<option value=""></option>

												<option value="1">ذكر</option>
												<option value="2">انثى</option>

											</select>
										</div>


										<div class="form-group form-floating-label">
											<label>نوع قناة التواصل</label>
											<select class="selectpicker form-control" name="channel_type" data-live-search="true" required>
												<option value=""></option>
												<option value="1">فيسبوك</option>
												<option value="2">واتس اب</option>
											</select>
										</div>

									</div>
									<div class="col-md-6 col-lg-4">

										<div class="form-group form-floating-label">
											<label>العمر</label>
											<input type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="age" required>
										</div>

										<div class="form-group form-floating-label">
											<label>المدينة</label>
											<input type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="city" required>
										</div>


										<div class="form-group form-floating-label">
											<label>نوع الخدمة</label>
											<select class="selectpicker form-control" name="service_type" data-live-search="true" required>
												<option value=""></option>
												<option value="1">تثقيف</option>
												<option value="2">استشارة نفسية</option>
												<option value="3">نوع اخر</option>

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

		$code = $row["code"] + 1;

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
		} elseif (empty($code)) {


			echo '<script>swal("يرجاء ادخال كود للحاله ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
		} elseif (!is_numeric($code)) {


			echo '<script>swal("يرجاء ادخال كود للحالة ", "لم يتم رفع البيانات", {
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


			$query = "INSERT INTO social_media_channels(
				name,date,age,gender,inquiry_type,channel_type,service_type,city,code,sender_name)
					values (?,?,?,?,?,?,?,?,?,?) ";
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
				$code,
				$user
			));
			if ($stm->rowCount()) {
				echo '<script src="js/send_success.js"></script>';
			} else {
				print_r($stm->errorInfo());

				echo '<script src="js/send_error.js"></script>';
			}
		}
	}
} else {
	echo "<script> window.open('index.php','_self')</script>";
}
?>