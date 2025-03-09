<?php

include "include/header.php";
if (!isset($_SESSION['user'])) {

	echo "<script> window.open('logout.php','_self')</script>";
	// header("location:login.php");
}
if ($_SESSION['user']['rule_id'] == 16 || $_SESSION['user']['rule_id'] == 4 || $_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6 || $_SESSION['user']['rule_id'] == 20) {
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
								<div class="row">


									<div class="col-md-6 col-lg-4">


										<div class="form-group form-floating-label">
											<label>تاريخ تسجيل الحالة</label>
											<input type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="date" required>
										</div>
										<div class="form-group form-floating-label">

											<div class="form-group form-floating-label">

												<label for="tokens">رقم الكود</label>
												<select class="selectpicker form-control" name="code" id="tokens" data-live-search="true">
													<option value=""></option>
													<?php
													// find branch
													$branch = $_SESSION['user']['branch_id'];

													//end find branch 
													if ($_SESSION['user']['rule_id'] == 16) {
														$sql = "select DISTINCT(code) from hotline where branch=? ";
													} else {
														$sql = "select DISTINCT(code) from resption where branch=? ";
													}
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
											<div class="form-group form-floating-label">
												<label>اسم المشروع </label>
												<input type="text" value="مركز الدعم النفسي " class="form-control input-border-bottom" id="inputFloatingLabel" name="project_name">
											</div>
											<div class="form-group form-floating-label">
												<label>الشخص المسؤول </label>
												<input type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="person_name">
											</div>
											<div class="form-group form-floating-label">
												<label>رقم الشخص المسؤؤول</label>
												<input type="tel" class="form-control input-border-bottom" id="inputFloatingLabel" name="person_phone" pattern="[7]{1}[7,1,3,0,8]{1}[0-9]{7}">
											</div>

											<label>دعم نفسي اولي</label>
											<select class="selectpicker form-control" id="tokens ddd" data-live-search="true" name="find" required>
												<option></option>
												<option> لم يحصل على خدمات دعم نفسي اولي </option>
												<option> حصل على خدمات دعم نفسي اولي </option>
											</select>
											<label class="form-label">نوع العنف</label>
											<div class="selectgroup selectgroup-pills">
												<label class="selectgroup-item">
													<input type="checkbox" name="violense[]" value="intimate partner violence" class="selectgroup-input">
													<span class="selectgroup-button">intimate partner violence</span>
												</label>
												<label class="selectgroup-item">
													<input type="checkbox" name="violense[]" value="Forced Marriage" class="selectgroup-input">
													<span class="selectgroup-button">Forced Marriage</span>
												</label>
												<label class="selectgroup-item">
													<input type="checkbox" name="violense[]" value="Psychological \Emotional Abuse" class="selectgroup-input">
													<span class="selectgroup-button">Psychological \Emotional Abuse</span>
												</label>
												<label class="selectgroup-item">
													<input type="checkbox" name="violense[]" value="Physical Assault" class="selectgroup-input">
													<span class="selectgroup-button">Physical Assault</span>
												</label>
												<label class="selectgroup-item">
													<input type="checkbox" name="violense[]" value="Denial of recourse - opportunities or services" class="selectgroup-input">
													<span class="selectgroup-button">Denial of recourse - opportunities or services</span>
												</label>
												<label class="selectgroup-item">
													<input type="checkbox" name="violense[]" value="Sexual Assault" class="selectgroup-input">
													<span class="selectgroup-button">Sexual Assault</span>
												</label>
												<label class="selectgroup-item">
													<input type="checkbox" name="violense[]" value="Rape" class="selectgroup-input">
													<span class="selectgroup-button">Rape</span>
												</label>
												<label class="selectgroup-item">
													<input type="checkbox" name="violense[]" value="Having a mental disorder" class="selectgroup-input">
													<span class="selectgroup-button">Having a mental disorder</span>
												</label>

											</div>


										</div>










									</div>
									<div class="col-md-6 col-lg-4">
										<h2> الاحالة الداخلية</h2>
										<div class="form-group form-floating-label">
											<label>الاحالة داخلية وارد</label>
											<select class="selectpicker form-control" id="tokens ddd" data-live-search="true" name="type_con_from">
												<option></option>
												<option>احالة داخلية وارد</option>
											</select>

										</div>
										<div class="form-group form-floating-label">
											<label>جهة الاحالة داخلية وارد </label>
											<select class="selectpicker form-control" id="tokens ddd" data-live-search="true" name="side_con_from">
												<option></option>
												<option>مؤسسة الرعاية النفسية التنموية - الخط الساخن</option>
												<option>مركز الدعم النفسي - إب</option>
												<option>مركز الدعم النفسي - تعز</option>
												<option>مركز الدعم النفسي - عدن</option>

											</select>
										</div>
										<div class="form-group form-floating-label">
											<label>الاحالة داخلية صادرة </label>
											<select class="selectpicker form-control" id="tokens ddd" data-live-search="true" name="type_con_to">
												<option></option>
												<option>احالة داخلية صادر</option>
											</select>

										</div>
										<div class="form-group form-floating-label">
											<label>جهة الاحالة داخلية صادرة </label>
											<select class="selectpicker form-control" id="tokens ddd" data-live-search="true" name="side_con_to">
												<option></option>
												<option>مؤسسة الرعاية النفسية التنموية - الخط الساخن</option>
												<option>مركز الدعم النفسي - إب</option>
												<option>مركز الدعم النفسي - تعز</option>
												<option>مركز الدعم النفسي - عدن</option>


											</select>

										</div>

									</div>
									<div class="col-md-6 col-lg-4">
										<h2> الاحالة الخارجية </h2>
										<div class="form-group form-floating-label">
											<label> الاحالة خارجية واردة </label>
											<select class="selectpicker form-control" id="tokens ddd" data-live-search="true" name="type_con_out">
												<option></option>
												<option>احالة خارجية وارد</option>

											</select>
										</div>
										<div class="form-group form-floating-label">
											<label> جهة الاحالة خارجية وارد </label>
											<select class="selectpicker form-control" id="tokens ddd" data-live-search="true" name="side_con_out">
												<option></option>

												<?php
												$sql = "SELECT * FROM mange_convert_ex_side";
												$stm = $con->query($sql);
												foreach ($stm->fetchAll() as $row) {
												?>
													<option> <?php echo $row['name'] ?></option>

												<?php } ?>

											</select>
										</div>
										<div class="form-group form-floating-label">
											<label> الاحالة خارجية صادر</label>
											<select class="selectpicker form-control" id="tokens ddd" data-live-search="true" name="type_con_come_out">
												<option></option>
												<option>احالة خارجية صادر</option>

											</select>
										</div>
										<div class="form-group form-floating-label">
											<label> جهة الاحالة خارجية صادر </label>
											<select class="selectpicker form-control" id="tokens ddd" data-live-search="true" name="side_con_come_out">
												<option></option>

												<?php
												$sql = "SELECT * FROM mange_convert_ex_side";
												$stm = $con->query($sql);
												foreach ($stm->fetchAll() as $row) {
												?>
													<option> <?php echo $row['name'] ?></option>

												<?php } ?>
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


		$code = test_input($_POST["code"]);
		$today = date('Y-m-d');
		$date = test_input($_POST["date"]);
		$type_con_from = test_input($_POST["type_con_from"]);
		$side_con_from = test_input($_POST["side_con_from"]);
		$type_con_to = test_input($_POST["type_con_to"]);
		$side_con_to = test_input($_POST["side_con_to"]);
		$type_con_out = test_input($_POST["type_con_out"]);
		$side_con_out = test_input($_POST["side_con_out"]);
		$type_con_come_out = test_input($_POST["type_con_come_out"]);
		$side_con_come_out = test_input($_POST["side_con_come_out"]);
		$person_name = test_input($_POST["person_name"]);
		$person_phone = $_POST["person_phone"] ? test_input($_POST["person_phone"]) : 0;
		$project_name = test_input($_POST["project_name"]);
		$find = test_input($_POST["find"]);
		if (empty($_POST["violense"])) {
			$violense = "";
		} else {
			$violense = $_POST["violense"];
			$violense = implode(',', $violense);
		}


		$user = $_SESSION['user']['id'];
		// find branch
		$branch = $_SESSION['user']['branch_id'];


		//end find branch 



		//التحقق ان اسم المنتج موجود وليس ارقام





		if ($_SESSION['user']['rule_id'] == 16) {
			$sql = "select type from hotline where  code=? ORDER BY `hotline`.`date` desc ";
		} else {
			$sql = "select type from resption where  code=? ORDER BY `resption`.`date` desc ";
		}

		$stmp = $con->prepare($sql);
		$stmp->execute(array($code));
		$type = $stmp->fetch();
		$type = $type['type'];


		if ($_SESSION['user']['rule_id'] == 16) {
			$sql = "select type from hotline where  code=?  and date=? ";
		} else {
			$sql = "select type from resption where  code=?  and date=? ";
		}


		$stmps = $con->prepare($sql);
		$stmps->execute(array($code, $date));

		if ($stmps->rowCount() == 0) {

			echo '<script>swal("لم يتم تسجيل الحاله  اليوم في الاستقبال", "لم يتم رفع البيانات", {
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





		/////////////////////////////////////////////////////////////////////////////////////تذكير الشرط حق الايميل

		//اذا لايوجد اي مشكلة يقوم بارسال الملف
		else {
			$sql = "select * from mange_convert where  code=? and date=? ";
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
				$query = "INSERT INTO mange_convert(branch,code,type_con_from,side_con_from,type_con_to,side_con_to,project_name,violense,date,sender_name,type_con_out,side_con_out,type_con_come_out,side_con_come_out,find,type,person_name,person_phone)
					values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ";
				$stm = $con->prepare($query);
				$stm->execute(array($branch, $code, $type_con_from, $side_con_from, $type_con_to, $side_con_to, $project_name, $violense, $date, $user, $type_con_out, $side_con_out, $type_con_come_out, $side_con_come_out, $find, 'جديد', $person_name, $person_phone));
				if ($stm->rowCount()) {
					echo '<script src="js/send_success.js"></script>';
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