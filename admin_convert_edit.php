<?php

include "include/header.php";
if (!isset($_SESSION['user'])) {

	echo "<script> window.open('logout.php','_self')</script>";
	// header("location:login.php");
}
if ($_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6) {
?>



	<div class="content">
		<div class="page-inner">


			<div class="row">
				<div class="col-md-12">
					<?php
					if (isset($_GET['action'], $_GET['ids']) && $_GET['action'] == 'edit') {
						$id = $_GET['ids'];
						$sql = "select * from mange_convert where id=?";
						$stm = $con->prepare($sql);
						$stm->execute(array($id));
						if ($stm->rowCount()) {
							foreach ($stm->fetchAll() as $row) {

					?>
								<form action="" method="post">
									<div class="card">
										<div class="card-header">
											<div class="card-title"> تعديل بيانات الاستقبال</div>
										</div>
										<div class="card-body">
											<div class="row">


												<div class="col-md-6 col-lg-4">


													<div class="form-group form-floating-label">
														<label>تاريخ تسجيل الحالة</label>
														<input type="date" value="<?php echo $row['date']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="date" required>
													</div>
													<div class="form-group form-floating-label">

														<div class="form-group form-floating-label">
															<label>رقم الكود</label>
															<input type="number" value="<?php echo $row['code']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="code" required>

														</div>
														<div class="form-group form-floating-label">
															<label>اسم المشروع </label>
															<input type="text" value="<?php echo $row['project_name']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="project_name">
														</div>
														<div class="form-group form-floating-label">
															<label>الشخص المسؤول </label>
															<input type="text" value="<?php echo $row['person_name']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="person_name">
														</div>
														<div class="form-group form-floating-label">
															<label>رقم الشخص المسؤؤول</label>
															<input type="tel" value="<?php echo $row['person_phone']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="person_phone" pattern="[7]{1}[7,1,3,0]{1}[0-9]{7}">
														</div>

														<label>دعم نفسي اولي</label>
														<select class="selectpicker form-control" id="tokens ddd" data-live-search="true" name="find" required>
															<option></option>
															<option <?php if ($row['find'] == "لم يحصل على خدمات دعم نفسي اولي") echo "selected" ?>>لم يحصل على خدمات دعم نفسي اولي</option>
															<option <?php if ($row['find'] == "حصل على خدمات دعم نفسي اولي") echo "selected" ?>>حصل على خدمات دعم نفسي اولي </option>
														</select>
														<label class="form-label">نوع العنف</label>
														<div class="selectgroup selectgroup-pills">
															<label class="selectgroup-item">
																<?php $violense_explode = explode(",", $row['violense']); ?>
																<input type="checkbox" <?php if (in_array("intimate partner violence", $violense_explode)) echo "checked"; ?> name="violense[]" value="intimate partner violence" class="selectgroup-input">
																<span class="selectgroup-button">intimate partner violence</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" <?php if (in_array("Forced Marriage", $violense_explode)) echo "checked"; ?> name="violense[]" value="Forced Marriage" class="selectgroup-input">
																<span class="selectgroup-button">Forced Marriage</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" <?php if (in_array("Psychological \Emotional Abuse", $violense_explode)) echo "checked"; ?> name="violense[]" value="Psychological \Emotional Abuse" class="selectgroup-input">
																<span class="selectgroup-button">Psychological \Emotional Abuse</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" <?php if (in_array("Physical Assault", $violense_explode)) echo "checked"; ?> name="violense[]" value="Physical Assault" class="selectgroup-input">
																<span class="selectgroup-button">Physical Assault</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" <?php if (in_array("Denial of recourse - opportunities or services", $violense_explode)) echo "checked"; ?> name="violense[]" value="Denial of recourse - opportunities or services" class="selectgroup-input">
																<span class="selectgroup-button">Denial of recourse - opportunities or services</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" <?php if (in_array("Sexual Assault", $violense_explode)) echo "checked"; ?> name="violense[]" value="Sexual Assault" class="selectgroup-input">
																<span class="selectgroup-button">Sexual Assault</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" <?php if (in_array("Rape", $violense_explode)) echo "checked"; ?> name="violense[]" value="Rape" class="selectgroup-input">
																<span class="selectgroup-button">Rape</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" <?php if (in_array("Having a mental disorder", $violense_explode)) echo "checked"; ?> name="violense[]" value="Having a mental disorder" class="selectgroup-input">
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
															<option <?php if ($row['type_con_from'] == "احالة داخلية وارد") echo "selected" ?>>احالة داخلية وارد</option>
														</select>

													</div>
													<div class="form-group form-floating-label">
														<label>جهة الاحالة داخلية وارد </label>
														<select class="selectpicker form-control" id="tokens ddd" data-live-search="true" name="side_con_from">
															<option></option>
															<option <?php if ($row['side_con_from'] == "مؤسسة الرعاية النفسية التنموية - الخط الساخن") echo "selected" ?>>مؤسسة الرعاية النفسية التنموية - الخط الساخن</option>
															<option <?php if ($row['side_con_from'] == "مركز الدعم النفسي - إب<") echo "selected" ?>>مركز الدعم النفسي - إب</option>
															<option <?php if ($row['side_con_from'] == "مركز الدعم النفسي - تعز") echo "selected" ?>>مركز الدعم النفسي - تعز</option>
														</select>

													</div>
													<div class="form-group form-floating-label">
														<label>الاحالة داخلية صادرة </label>
														<select class="selectpicker form-control" id="tokens ddd" data-live-search="true" name="type_con_to">
															<option></option>
															<option <?php if ($row['type_con_to'] == "احالة داخلية صادر") echo "selected" ?>>احالة داخلية صادر</option>
														</select>

													</div>
													<div class="form-group form-floating-label">
														<label>جهة الاحالة داخلية صادرة </label>
														<select class="selectpicker form-control" id="tokens ddd" data-live-search="true" name="side_con_to">
															<option></option>
															<option <?php if ($row['side_con_to'] == "مؤسسة الرعاية النفسية التنموية - الخط الساخن") echo "selected" ?>>مؤسسة الرعاية النفسية التنموية - الخط الساخن</option>
															<option <?php if ($row['side_con_to'] == "مركز الدعم النفسي - إب") echo "selected" ?>>مركز الدعم النفسي - إب</option>
															<option <?php if ($row['side_con_to'] == "مركز الدعم النفسي - تعز") echo "selected" ?>>مركز الدعم النفسي - تعز</option>

														</select>

													</div>

												</div>
												<div class="col-md-6 col-lg-4">
													<h2> الاحالة الخارجية </h2>
													<div class="form-group form-floating-label">
														<label> الاحالة خارجية واردة </label>
														<select class="selectpicker form-control" id="tokens ddd" data-live-search="true" name="type_con_out">
															<option></option>
															<option <?php if ($row['type_con_out'] == "احالة خارجية وارد") echo "selected" ?>>احالة خارجية وارد</option>

														</select>
													</div>
													<div class="form-group form-floating-label">
														<label> جهة الاحالة خارجية وارد </label>
														<select class="selectpicker form-control" id="tokens ddd" data-live-search="true" name="side_con_out">
															<option></option>

															<?php
															$sql = "SELECT * FROM mange_convert_ex_side";
															$stm = $con->query($sql);
															foreach ($stm->fetchAll() as $_row) {
															?>
																<option <?php if ($row['side_con_out'] == $_row['name']) echo "selected" ?>> <?php echo $_row['name'] ?></option>

															<?php } ?>

														</select>
													</div>
													<div class="form-group form-floating-label">
														<label> الاحالة خارجية صادر</label>
														<select class="selectpicker form-control" id="tokens ddd" data-live-search="true" name="type_con_come_out">
															<option></option>
															<option <?php if ($row['type_con_come_out'] == "احالة خارجية صادر") echo "selected" ?>>احالة خارجية صادر</option>

														</select>
													</div>
													<div class="form-group form-floating-label">
														<label> جهة الاحالة خارجية صادر </label>
														<select class="selectpicker form-control" id="tokens ddd" data-live-search="true" name="side_con_come_out">
															<option></option>

															<?php
															$sql = "SELECT * FROM mange_convert_ex_side";
															$stm = $con->query($sql);
															foreach ($stm->fetchAll() as $_row) {
															?>
																<option <?php if ($row['side_con_come_out'] == $_row['name']) echo "selected" ?>> <?php echo $_row['name'] ?></option>

															<?php } ?>


														</select>
													</div>




												</div>

											</div>

										</div>
									<?php  } ?>
									<div class="card-action">


										<input class="btn btn-success" type="submit" name="save" value="save">
										<input class="btn btn-danger" type="reset" value="Cancel">
									</div>
								</form>
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



		$today = date('Y-m-d');
		$date = test_input($_POST["date"]);
		$code = test_input($_POST["code"]);
		$type_con_from = test_input($_POST["type_con_from"]);
		$side_con_from = test_input($_POST["side_con_from"]);
		$type_con_to = test_input($_POST["type_con_to"]);
		$side_con_to = test_input($_POST["side_con_to"]);

		$type_con_out = test_input($_POST["type_con_out"]);
		$side_con_out = test_input($_POST["side_con_out"]);
		$type_con_come_out = test_input($_POST["type_con_come_out"]);
		$side_con_come_out = test_input($_POST["side_con_come_out"]);

		$person_name = test_input($_POST["person_name"]);
		$person_phone = test_input($_POST["person_phone"]);
		$project_name = test_input($_POST["project_name"]);
		$find = test_input($_POST["find"]);
		if (empty($_POST["violense"])) {
			$violense = "";
		} else {
			$violense = $_POST["violense"];
			$b = implode(',', $violense);
		}


		$user = $_SESSION['user']['id'];
		// find branch
		$branch = $_SESSION['user']['branch_id'];


		//end find branch 



		//التحقق ان اسم المنتج موجود وليس ارقام







		if (empty($date)) {


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


			$query = "UPDATE mange_convert SET branch=?,code=?,type_con_from=?,side_con_from=?,type_con_to=?,side_con_to=?,project_name=?,violense=?,date=?,type_con_out=?,side_con_out=?,type_con_come_out=?,side_con_come_out=?,find=?,person_name=?,person_phone=? where id=? ";
			$stm = $con->prepare($query);
			$stm->execute(array($branch, $code, $type_con_from, $side_con_from, $type_con_to, $side_con_to, $project_name, $b, $date, $type_con_out, $side_con_out, $type_con_come_out, $side_con_come_out, $find, $person_name, $person_phone, $id));
			if ($stm->rowCount()) {
				echo '<script src="js/send_success.js"></script>';
				echo "<script>
                                  window.open('admin_today_convert_data.php?num=7&id=3','_self')
                         </script>";
			} else {
				echo '<script src="js/send_error.js"></script>';
			}
		}
	}
} else {
	echo "<script> window.open('index.php','_self')</script>";
}
?>