<?php

include "include/header.php";
if (!isset($_SESSION['user'])) {

	echo "<script> window.open('logout.php','_self')</script>";
	// header("location:login.php");
}
if ($_SESSION['user']['rule_id'] == 3 || $_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6 || $_SESSION['user']['rule_id'] == 18) {
?>



	<div class="content">
		<div class="page-inner">


			<div class="row">
				<div class="col-md-12">
					<form action="" method="post">
						<div class="card">
							<div class="card-header">
								<div class="card-title"> عودة حالة </div>
							</div>
							<div class="card-body">


								<form action="" method="post">

									<div class="row row-demo-grid">

										<div class="form-group form-floating-label">

											<label for="tokens">رقم الكود</label>
											<select class="selectpicker form-control" name="code" id="tokens" data-live-search="true">
												<option value=""></option>
												<?php
												// find branch
												$branch = $_SESSION['user']['branch_id'];

												//end find branch 
												$sql = "select DISTINCT(code) from vist where branch=? ";
												$stm = $con->prepare($sql);
												$stm->execute(array($branch));
												if ($stm->rowCount() > 0) {
													foreach ($stm->fetchAll() as $row) {




												?>
														<option value="<?php echo $row['code']; ?>"><?php echo $row['code']; ?></option>

												<?php
													}
												}
												?>

											</select>
										</div>

									</div>



									<input class="btn btn-success" type="submit" name="search" value="search">








								</form>
								<?php if (isset($_POST['search'])) {

									$code = $_POST['code'];

									$sql = "SELECT * FROM vist where code=?  ORDER BY `vist`.`date` desc  ";
									$stmu = $con->prepare($sql);
									$stmu->execute(array($code));
									//عدد الحالات الكلية


									if ($stm->rowCount() > 0) {
										$row = $stmu->fetch();



								?>
										<div class="row">

											<div class="col-md-6 col-lg-4">


												<div class="form-group form-floating-label">
													<label>تاريخ تسجيل الحالة</label>
													<input type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="date" required>
												</div>

												<div class="form-group form-floating-label">
													<label>رقم الكود</label>
													<input type="number" value="<?php echo $row['code']; ?>" disabled class="form-control input-border-bottom" id="inputFloatingLabel" required>
													<input type="hidden" value="<?php echo $row['code']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="code" required>

												</div>
												<div class="form-group form-floating-label">
													<label> اسم ولي امرة</label>
													<input type="text" value="<?php echo $row['father']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="father" required>
												</div>



											</div>
											<div class="col-md-6 col-lg-4">


												<div class="form-group form-floating-label">
													<label> مكان الاقامة </label>
													<input type="text" value="<?php echo $row['place']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="place" required>
												</div>
												<div class="form-group form-floating-label">
													<label>رقم الهاتف</label>
													<input type="tel" value="<?php echo $row['phone']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="phone" pattern="[7]{1}[7,1,3,0,8]{1}[0-9]{7}" required>
												</div>


												<div class="form-group form-floating-label">
													<label> العمر </label>
													<input type="number" value="<?php echo $row['brithday']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="brithday" required>
												</div>


											</div>
											<div class="col-md-6 col-lg-4">

												<div class="form-group form-floating-label">
													<label> رقم الزيارة</label>
													<input type="text" value="<?php echo $row['vist_number']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="vist_number" required>
												</div>
												<div class="form-group form-floating-label">
													<label> موعد الزيارة الطبية</label>
													<input type="date" value="<?php echo $row['vist']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="vist" required>
												</div>

												<div class="form-group form-floating-label">
													<label>كيف عرفت بخدمات المؤسسة</label>
													<select class="selectpicker form-control" id="tokens ddd" data-live-search="true" name="know_our" required>
														<option></option>
														<option <?php if ($row['know_our'] == "الفيس بوك") echo "selected" ?>>الفيس بوك</option>
														<option <?php if ($row['know_our'] == "الخط الساخن") echo "selected" ?>>الخط الساخن</option>
														<option <?php if ($row['know_our'] == "صديق") echo "selected" ?>>صديق</option>
														<option <?php if ($row['know_our'] == "احالة خارجية واردة") echo "selected" ?>>احالة خارجية واردة</optio>
														<option <?php if ($row['know_our'] == "احالة داخلية واردة") echo "selected" ?>>احالة داخلية واردة</option>
														<option <?php if ($row['know_our'] == "طبيب") echo "selected" ?>>طبيب </option>
														<option <?php if ($row['know_our'] == "اخصائي نفسي") echo "selected" ?>>اخصائي نفسي </option>
														<option <?php if ($row['know_our'] == "اخرون") echo "selected" ?>>اخرون </option>
													</select>
												</div>


											</div>







										</div>
							</div>
							<div class="card-action">


								<input class="btn btn-success" type="submit" name="save" value="save">
								<input class="btn btn-danger" type="reset" value="Cancel">
							</div>
					<?php } else {
										echo ' <div class="alert alert-danger">NO Row</div>';
									}
								} ?>
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


		$code = test_input($_POST["code"]);
		$date = test_input($_POST["date"]);
		$father = test_input($_POST["father"]);
		$place = test_input($_POST["place"]);
		$phone = test_input($_POST["phone"]);
		$vist_number = test_input($_POST["vist_number"]);
		$brithday = test_input($_POST["brithday"]);
		$know_our = test_input($_POST["know_our"]);
		$vist = test_input($_POST["vist"]);






		$user = $_SESSION['user']['id'];
		// find branch
		$branch = $_SESSION['user']['branch_id'];

		//end find branch 


		//phone number 

		//phone number end



		if (empty($user)) {


			echo '<script>swal("يرجاء اعادة تسجيل الدخول   ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
		} elseif (empty($date)) {


			echo '<script>swal("يرجاء ادخال  تاريخ دخول الحالة ", "لم يتم رفع البيانات", {
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




		//اذا لايوجد اي مشكلة يقوم بارسال الملف
		else {
			$sql = "select * from vist where code=? and date=? ";
			$stm = $con->prepare($sql);
			$stm->execute(array($code, $date));
			if ($stm->rowCount()) {

				echo '<script>swal("لقد تم ادخال بيانات لنفس هذا الحاله في النظام من قبل", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} else {
				$query = "INSERT INTO vist(branch,code,date,father,place,phone,vist_number,brithday,vist,know_our,sender_name)
					values (?,?,?,?,?,?,?,?,?,?,?) ";
				$stm = $con->prepare($query);
				$stm->execute(array($branch, $code, $date, $father, $place, $phone, $vist_number, $brithday, $vist, $know_our, $user));
				if ($stm->rowCount()) {
					echo '<script src="js/send_success.js"></script>';
				} else {
					echo '<script src="js/send_error.js"></script>';
				}
			}
		}
	}
} else {
	echo "<script> window.open('index.php','_self')</script>";
}
?>