<?php

include "include/header.php";
if (!isset($_SESSION['user'])) {

	echo "<script> window.open('logout.php','_self')</script>";
	// header("location:login.php");
}
if ($_SESSION['user']['rule_id'] == 16 || $_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6) {
?>



	<div class="content">
		<div class="page-inner">


			<div class="row">

				<div class="col-md-12">
					<form action="" method="post">
						<div class="card">
							<div class="card-header">
								<div class="card-title"> اضافة حالة</div>
							</div>
							<div class="card-body">
								<?php
								$sql = "select max(code) code  from hotline  ";
								$stmu = $con->prepare($sql);
								$stmu->execute();
								if ($stmu->rowCount() > 0) {
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
													<input type="number" value="<?php echo $row['code'] + 1 ?>" disabled class="form-control input-border-bottom" id="inputFloatingLabel" name="code" required>
												</div>
												<!-- <div class="form-group form-floating-label">
															<label >رقم الهاتف</label>
															<input  type="tel" class="form-control input-border-bottom" id="inputFloatingLabel" name="phone"   required >
														</div> -->
												<div class="form-group form-floating-label">
													<label>من التوقيت</label>
													<input type="time" class="form-control input-border-bottom" id="inputFloatingLabel" name="frome_time" required>
												</div>
												<div class="form-group form-floating-label">
													<label>الى التوقيت</label>
													<input type="time" class="form-control input-border-bottom" id="inputFloatingLabel" name="to_time" required>
												</div>
												<div class="form-group form-floating-label">
													<label>تاريخ الميلاد</label>
													<input type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="brithday" required>
												</div>
												<div class="form-group form-floating-label">
													<label>الجنس</label>
													<select class="selectpicker form-control" id="tokens ddd" data-live-search="true" name="sex" required>
														<option></option>
														<option value="ذكر">ذكر</option>
														<option value="انثى">انثى</option>
													</select>

												</div>

												<div class="form-group form-floating-label">
													<label>الاسم الرباعي</label>
													<input type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="name" required>
												</div>



											</div>


										</div>
										<div class="col-md-6 col-lg-4">









											<div class="form-group form-floating-label">
												<label>كيف عرفت بخدمات المؤسسة</label>
												<select class="selectpicker form-control" id="tokens ddd" data-live-search="true" name="know_our" required>
													<option></option>
													<option value="لم يصرح">لم يصرح</option>
													<option>الفيس بوك</option>
													<option> مكتب تعز</option>
													<option> مكتب عدن</option>
													<option>صديق</option>
													<option>احالة خارجية واردة</optio>
													<option>احالة داخلية واردة</option>
													<option>طبيب </option>
													<option>اخصائي نفسي </option>
													<option>اخرون </option>
												</select>
											</div>


											<div class="form-group form-floating-label">
												<label>نوع العمل</label>
												<select class="selectpicker form-control" id="tokens ddd" data-live-search="true" name="work" required>
													<option></option>
													<option value="لم يصرح">لم يصرح</option>
													<option value="طالب/ة">طالب/ة</option>
													<option value="ربة بيت">ربة بيت</option>
													<option value="معيل/ة">معيل/ة</option>
													<option value="عسكري/ة"> عسكري/ة</option>
													<option value="عاطل عن العمل"> عاطل عن العمل</option>
													<option value="طفل/ة"> طفل/ة</option>
													<option value="مدرس/ة"> مدرس/ة</option>
													<option value=" عامل/ة"> عامل/ة</option>
													<option value="اخر"> اخر</option>
												</select>
											</div>
											<div class="form-group form-floating-label">
												<label> الحاله الاجتماعيه</label>
												<select class="selectpicker form-control" id="tokens ddd" data-live-search="true" name="social_status" required>
													<option></option>
													<option value="لم يصرح">لم يصرح</option>
													<option value="عازب">عازب</option>
													<option value="مخطوب/ة">مخطوب/ة</option>
													<option value="مطلق/ة">مطلق/ة</option>
													<option value="متزوج/ة"> متزوج/ة</option>
													<option value="أرمل/ة"> أرمل/ة</option>
													<option value="طفل/ة"> طفل/ة</option>
													<option value="منفصل بشكل غير رسمي">منفصل بشكل غير رسمي </option>
												</select>
											</div>

											<div class="form-group form-floating-label">
												<label>المستوى التعليمي</label>
												<select class="selectpicker form-control" id="tokens ddd" data-live-search="true" name="studing" required>
													<option></option>
													<option value="لم يصرح">لم يصرح</option>
													<option value="امي">امي</option>
													<option value="ابتدائي">ابتدائي</option>
													<option value="اعدادي">اعدادي</option>
													<option value="ثانوي">ثانوي</option>
													<option value="دبلوم"> دبلوم</option>
													<option value="جامعي"> جامعي</option>
													<option value="فوق الجامعي"> فوق الجامعي</option>
												</select>
											</div>

										</div>
										<div class="col-md-6 col-lg-4">






											<div class="form-group form-floating-label">
												<label>نوع الاقامة </label>
												<select class="selectpicker form-control" id="tokens ddd" data-live-search="true" name="place" required>
													<option></option>
													<option value="لم يصرح">لم يصرح</option>
													<option value="مقيم/ة">مقيم/ة</option>
													<option value="لاجى/ة">لاجى/ة</option>
													<option value="نازح/ة">نازح/ة</option>
												</select>
											</div>
											<div class="form-group form-floating-label">
												<label>المحافظه</label>
												<select class="selectpicker form-control" id="tokens ddd" data-live-search="true" name="briefness" required>
													<option></option>
													<option> صنعاء </option>
													<option> اب</option>
													<option> تعز</option>
													<option> عدن</option>
													<option> حضرموت</option>
													<option> صعدة</option>
													<option> عمران</option>
													<option> حجة</option>
													<option> الحديدة</option>
													<option> المحويت</option>
													<option> ريمة</option>
													<option> ذمار</option>
													<option> البيضاء</option>
													<option> الضالع</option>
													<option> المهرة</option>
													<option>الجوف </option>
													<option> شبوة</option>
													<option>سقطرة </option>
													<option> ابين</option>
													<option>مارب </option>
												</select>
											</div>







										</div>


									</div>
								<?php } ?>
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

		$sex = test_input($_POST['sex']);
		$sql = "select max(code) code  from hotline  ";
		$stmu = $con->prepare($sql);
		$stmu->execute();
		if ($stm->rowCount() > 0) {
			$rowu = $stmu->fetch();
			$code = $rowu['code'] + 1;
		}

		$today = date('Y-m-d');
		$date_before_2day = date('Y-m-d', strtotime($today . ' - 2 days'));
		$date = test_input($_POST["date"]);

		$brithday = test_input($_POST["brithday"]);
		// $phone=test_input($_POST["phone"]);
		//$brithday_blace=test_input($_POST["brithday_blace"]);
		$name = test_input($_POST["name"]);
		$know_our = test_input($_POST["know_our"]);
		$place = test_input($_POST["place"]);
		$social_status = test_input($_POST["social_status"]);
		//$department=test_input($_POST["department"]);
		$briefness = test_input($_POST["briefness"]);
		//$becouse_come=test_input($_POST["becouse_come"]);
		$studing = test_input($_POST["studing"]);
		$work = test_input($_POST["work"]);
		$frome_time = test_input($_POST["frome_time"]);
		$to_time = test_input($_POST["to_time"]);
		//$plasce_from_come=test_input($_POST["plasce_from_come"]);



		$m_sex = 0;
		$f_sex = 0;

		// age must be more than 5 year
		$c = date('Y');
		$y = date('Y', strtotime($brithday));
		$age = $c - $y;
		//end

		$user = $_SESSION['user']['id'];
		// find branch
		$branch = $_SESSION['user']['branch_id'];

		//end find branch 


		//phone number 

		//phone number end
		$sql = "select * from hotline where  date=? and sender_name =? and frome_time=? and to_time =? ";
		$stm = $con->prepare($sql);
		$stm->execute(array($date, $user, $frome_time, $to_time));
		if ($stm->rowCount()) {

			echo '<script>swal("لقد تم ادخال بيانات في نفس التوقيت في النظام من قبل", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
		} elseif ($frome_time >= $to_time) {

			echo '<script>swal("لايمكن ان يكون الوقت اقل من دقيقه  ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
		} else if ($date < $date_before_2day) {

			echo '<script>swal("لايمكن ادخال البيانات بتاريخ سابق", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
		} elseif (empty($user)) {


			echo '<script>swal("يرجاء اعادة تسجيل الدخول   ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
		} elseif (empty($user)) {


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
			$sql = "select * from hotline where  code=? ";
			$stm = $con->prepare($sql);
			$stm->execute(array($code));
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
				$query = "INSERT INTO hotline(branch,name,code,brithday,date,
					frome_time,to_time,sex,
					place,social_status,briefness,
					  studing,work,
						know_our,sender_name,type)
					values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ";
				$stm = $con->prepare($query);
				$stm->execute(array(
					$branch, $name, $code, $brithday, $date, $frome_time, $to_time, $sex, $place,
					$social_status, $briefness, $studing,
					$work,
					$know_our, $user, 'جديد'
				));
				if ($stm->rowCount()) {
					echo '<script src="js/send_success.js"></script>';
					echo "<script> window.open('add_Hotline.php?num=100&id=100','_self')</script>";
				} else {
					print_r($stm->errorInfo());
					echo '<script src="js/send_error.js"></script>';
				}
			}
		}
	}
} else {
	echo "<script> window.open('index.php','_self')</script>";
}
?>