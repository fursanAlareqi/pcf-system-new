<?php

include "include/header.php";
if (!isset($_SESSION['user'])) {

	echo "<script> window.open('logout.php','_self')</script>";
	// header("location:login.php");
}
if ($_SESSION['user']['rule_id'] == 9 || $_SESSION['user']['rule_id'] == 15 || $_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6 || $_SESSION['user']['rule_id'] == 18 || $_SESSION['user']['rule_id'] == 20 || $_SESSION['user']['rule_id'] == 25) {
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




								<div class="row row-demo-grid">

									<div class="form-group form-floating-label">

										<label for="tokens">رقم الكود</label>
										<select class="selectpicker form-control" name="code" id="tokens" data-live-search="true">
											<option value=""></option>
											<?php
											// find branch
											$branch = $_SESSION['user']['branch_id'];

											//end find branch 
											$sql = "select DISTINCT(code) from escort where branch=? and type=? ";
											$stm = $con->prepare($sql);
											$stm->execute(array($branch, 'جديد'));
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

						$sql = "SELECT * FROM escort where code=?  ORDER BY `escort`.`date` desc  ";
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

										<div class="form-group form-floating-label">
											<label>رقم الكود</label>
											<input type="number" disabled value="<?php echo $row['code']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" ] required>
											<input type="hidden" value="<?php echo $row['code']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="code" required>

										</div>







									</div>


								</div>
								<div class="col-md-6 col-lg-4">


									<div class="form-group form-floating-label">
										<label>تاريخ الميلاد</label>
										<input type="date" value="<?php echo $row['brithday']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="brithday" required>
									</div>
									<div class="form-group form-floating-label">
										<label>الجنس</label>
										<select class="selectpicker form-control" id="tokens ddd" data-live-search="true" name="sex" required>
											<option></option>
											<option value="ذكر" <?php if ($row['sex'] == "ذكر") echo "selected" ?>>ذكر</option>
											<option value="انثى" <?php if ($row['sex'] == "انثى") echo "selected" ?>>انثى</option>
										</select>

									</div>


								</div>
								<div class="col-md-6 col-lg-4">



									<div class="form-group form-floating-label">
										<label>الاسم الرباعي</label>
										<input type="text" value="<?php echo $row['name']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="name" required>
									</div>
									<div class="form-group form-floating-label">
										<label>نوع الاقامة </label>
										<select class="selectpicker form-control" id="tokens ddd" data-live-search="true" name="place" required>
											<option></option>
											<option value="مقيم/ة" <?php if ($row['place'] == "مقيم/ة") echo "selected" ?>>مقيم/ة</option>
											<option value="لاجى/ة" <?php if ($row['place'] == "لاجى/ة") echo "selected" ?>>لاجى/ة</option>
											<option value="نازح/ة" <?php if ($row['place'] == "نازح/ة") echo "selected" ?>>نازح/ة</option>
										</select>
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

		$sex = test_input($_POST['sex']);
		$code = test_input($_POST["code"]);
		// $date= date('Y-m-d');
		$date = test_input($_POST["date"]);


		$brithday = test_input($_POST["brithday"]);
		$name = test_input($_POST["name"]);
		$place = test_input($_POST["place"]);




		// age must be more than 5 year
		$c = date('Y');
		$y = date('Y', strtotime($brithday));
		$age = $c - $y;
		//end

		$user = $_SESSION['user']['id'];
		// find branch
		$branch = $_SESSION['user']['branch_id'];


		//end find branch 



		//التحقق ان اسم المنتج موجود وليس ارقام


		if (empty($user)) {


			echo '<script>swal("يرجاء اعادة تسجيل الدخول   ", "لم يتم رفع البيانات", {
				icon : "warning",
				buttons: {        			
					confirm: {
						className : "btn btn-warning"
					}
				},
			});</script>';
		} elseif (empty($name)) {


			echo '<script>swal("يرجاء ادخال اسم الطبيب ", "لم يتم رفع البيانات", {
				icon : "warning",
				buttons: {        			
					confirm: {
						className : "btn btn-warning"
					}
				},
			});</script>';
		} elseif (is_numeric($name)) {


			echo '<script>swal("اسم الطبيب لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
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
		} elseif (empty($brithday)) {


			echo '<script>swal("يرجاء ادخال  تاريخ ميلاد الحاله ", "لم يتم رفع البيانات", {
				icon : "warning",
				buttons: {        			
					confirm: {
						className : "btn btn-warning"
					}
				},
			});</script>';
		} elseif ($age < 5) {


			echo '<script>swal("العمر اقل من 5 سنين يرجاء مراجعة تاريخ الميلاد", "لم يتم رفع البيانات", {
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
			$sql = "select * from escort where  code=? and date=? ";
			$stm = $con->prepare($sql);
			$stm->execute(array($code, $date));
			if ($stm->rowCount()) {

				echo '<script>swal("لقد تم ادخال بيانات لنفس هذا المرافق في النظام من قبل", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
			} else {
				$query = "INSERT INTO escort(branch,name,code,brithday,date,sex,place,type,sender_name)
				values (?,?,?,?,?,?,?,?,?) ";
				$stm = $con->prepare($query);
				$stm->execute(array($branch, $name, $code, $brithday, $date, $sex, $place, 'عودة', $user));
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