<?php

include "include/header.php";
if (!isset($_SESSION['user'])) {

	echo "<script> window.open('logout.php','_self')</script>";
	// header("location:login.php");
}
if ($_SESSION['user']['rule_id'] == 5 || $_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6) {
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
											$sql = "select DISTINCT(code) from doctor where branch=? ";
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

						$sql = "SELECT * FROM doctor where code=?  ORDER BY `doctor`.`date` desc  ";
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


										<div class="form-group">
											<label for="comment">الحالة النفسيه العامة للمريض</label>
											<textarea class="form-control" name="diagnosis" id="comment" rows="5">
																<?php echo $row['diagnosis']; ?>
															</textarea>
										</div>
										<div class="form-group">
											<label for="comment">Physical Examination</label>
											<textarea class="form-control" name="Physical_Examination" id="comment" rows="5">
																<?php echo $row['Physical_Examination']; ?> 
															</textarea>
										</div>



									</div>










								</div>
								<div class="col-md-6 col-lg-4">
									<div class="form-group form-floating-label">
										<label>رقم الكود</label>
										<input type="number" value="<?php echo $row['code']; ?>" disabled class="form-control input-border-bottom" id="inputFloatingLabel" required>
										<input type="hidden" value="<?php echo $row['code']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="code" required>
									</div>
									<?php if ($_SESSION['user']['branch_id'] == 6) { ?>
										<div class="form-group form-floating-label">
											<label for="tokens">العلاج</label>
											<select class="selectpicker form-control" name="medical[]" multiple id="tokens" data-live-search="true">
												<option value=""></option>
												<?php

												$sql = "select * from scientific_pharmacy_name  ORDER BY `scientific_pharmacy_name`.`name` ASC  ";
												$stm = $con->prepare($sql);
												$stm->execute();
												if ($stm->rowCount() > 0) {
													$medical_explode = explode(",", $row['medical']);
													foreach ($stm->fetchAll() as $rows) {


												?>
														<option value="<?php echo $rows['name'] . ' ' . '1x1'; ?>" <?php if (in_array($rows['name'] . ' ' . '1x1', $medical_explode)) echo "selected" ?>><?php echo $rows['name'] . ' ' . '1x1'; ?> </option>
														<option value="<?php echo $rows['name'] . ' ' . '1x2'; ?>" <?php if (in_array($rows['name'] . ' ' . '1x2', $medical_explode)) echo "selected" ?>><?php echo $rows['name'] . ' ' . '1x2'; ?> </option>
														<option value="<?php echo $rows['name'] . ' ' . '1x3'; ?>" <?php if (in_array($rows['name'] . ' ' . '1x3', $medical_explode)) echo "selected" ?>><?php echo $rows['name'] . ' ' . '1x3'; ?> </option>
														<option value="<?php echo $rows['name'] . ' ' . '1x0.5'; ?>" <?php if (in_array($rows['name'] . ' ' . '1x0.5', $medical_explode)) echo "selected" ?>><?php echo $rows['name'] . ' ' . '1x0.5'; ?> </option>

												<?php
													}
												}
												?>

											</select>
										</div>
										<div class="form-group">
											<label for="comment">الكمية</label>
											<textarea class="form-control" id="comment" name="quantity" rows="5">
																<?php echo $row['quantity']; ?>
															</textarea>
										</div>
									<?php } else { ?>
										<div class="form-group">
											<label for="comment">العلاج</label>
											<textarea class="form-control" id="comment" name="medical" rows="5">
																<?php echo $row['medical']; ?>
															</textarea>
										</div>

									<?php } ?>
									<div class="form-group">
										<label for="comment">ملاحظات</label>
										<textarea class="form-control" id="comment" name="note" rows="5">
																<?php echo $row['note']; ?>
															</textarea>
									</div>

								</div>
								<div class="col-md-6 col-lg-4">
									<?php $violense_explode = explode(",", $row['lap']); ?>
									<label class="form-label">الفحوصات المطلوبة</label>
									<div class="selectgroup selectgroup-pills">
										<label class="selectgroup-item">
											<input type="checkbox" name="violense[]" <?php if (in_array("CBC", $violense_explode)) echo "checked"; ?> value="CBC" class="selectgroup-input">
											<span class="selectgroup-button">CBC</span>
										</label>
										<label class="selectgroup-item">
											<input type="checkbox" name="violense[]" <?php if (in_array("GPT", $violense_explode)) echo "checked"; ?> value="GPT" class="selectgroup-input">
											<span class="selectgroup-button">GPT</span>
										</label>
										<label class="selectgroup-item">
											<input type="checkbox" name="violense[]" <?php if (in_array("GOT", $violense_explode)) echo "checked"; ?> value="GOT" class="selectgroup-input">
											<span class="selectgroup-button">GOT</span>
										</label>
										<label class="selectgroup-item">
											<input type="checkbox" name="violense[]" <?php if (in_array("ALT", $violense_explode)) echo "checked"; ?> value="ALT" class="selectgroup-input">
											<span class="selectgroup-button">ALT</span>
										</label>
										<label class="selectgroup-item">
											<input type="checkbox" name="violense[]" <?php if (in_array("T.B", $violense_explode)) echo "checked"; ?> value="T.B" class="selectgroup-input">
											<span class="selectgroup-button">T.B</span>
										</label>
										<label class="selectgroup-item">
											<input type="checkbox" name="violense[]" <?php if (in_array("D.B", $violense_explode)) echo "checked"; ?> value="D.B" class="selectgroup-input">
											<span class="selectgroup-button">D.B</span>
										</label>
										<label class="selectgroup-item">
											<input type="checkbox" name="violense[]" <?php if (in_array("Urea", $violense_explode)) echo "checked"; ?> value="Urea" class="selectgroup-input">
											<span class="selectgroup-button">Urea</span>
										</label>
										<label class="selectgroup-item">
											<input type="checkbox" name="violense[]" <?php if (in_array("Creatinine", $violense_explode)) echo "checked"; ?> value="Creatinine" class="selectgroup-input">
											<span class="selectgroup-button">Creatinine</span>
										</label>
										<label class="selectgroup-item">
											<input type="checkbox" name="violense[]" <?php if (in_array("HBSAG", $violense_explode)) echo "checked"; ?> value="HBSAG" class="selectgroup-input">
											<span class="selectgroup-button">HBSAG</span>
										</label>
										<label class="selectgroup-item">
											<input type="checkbox" name="violense[]" <?php if (in_array("HIVIe2", $violense_explode)) echo "checked"; ?> value="HIVIe2" class="selectgroup-input">
											<span class="selectgroup-button">HIVIe2</span>
										</label>
										<label class="selectgroup-item">
											<input type="checkbox" name="violense[]" <?php if (in_array("Prolactine", $violense_explode)) echo "checked"; ?> value="Prolactine" class="selectgroup-input">
											<span class="selectgroup-button">Prolactine</span>
										</label>
										<label class="selectgroup-item">
											<input type="checkbox" name="violense[]" <?php if (in_array("HCVAB", $violense_explode)) echo "checked"; ?> value="HCVAB" class="selectgroup-input">
											<span class="selectgroup-button">HCVAB</span>
										</label>
										<label class="selectgroup-item">
											<input type="checkbox" name="violense[]" <?php if (in_array("TSH", $violense_explode)) echo "checked"; ?> value="TSH" class="selectgroup-input">
											<span class="selectgroup-button">TSH</span>
										</label>
										<label class="selectgroup-item">
											<input type="checkbox" name="violense[]" <?php if (in_array("FT3", $violense_explode)) echo "checked"; ?> value="FT3" class="selectgroup-input">
											<span class="selectgroup-button">FT3</span>
										</label>
										<label class="selectgroup-item">
											<input type="checkbox" name="violense[]" <?php if (in_array("FT4", $violense_explode)) echo "checked"; ?> value="FT4" class="selectgroup-input">
											<span class="selectgroup-button">FT4</span>
										</label>
										<label class="selectgroup-item">
											<input type="checkbox" name="violense[]" <?php if (in_array("RBS", $violense_explode)) echo "checked"; ?> value="RBS" class="selectgroup-input">
											<span class="selectgroup-button">RBS</span>
										</label>
										<label class="selectgroup-item">
											<input type="checkbox" name="violense[]" <?php if (in_array("FBS", $violense_explode)) echo "checked"; ?> value="FBS" class="selectgroup-input">
											<span class="selectgroup-button">FBS</span>
										</label>
										<label class="selectgroup-item">
											<input type="checkbox" name="violense[]" <?php if (in_array("HbA1C", $violense_explode)) echo "checked"; ?> value="HbA1C" class="selectgroup-input">
											<span class="selectgroup-button">HbA1C</span>
										</label>
										<label class="selectgroup-item">
											<input type="checkbox" name="violense[]" <?php if (in_array("Addication Screen", $violense_explode)) echo "checked"; ?> value="Addication Screen" class="selectgroup-input">
											<span class="selectgroup-button">Addication Screen</span>

											<label class="selectgroup-item">
												<input type="checkbox" name="violense[]" <?php if (in_array("EEG", $violense_explode)) echo "checked"; ?> value="EEG" class="selectgroup-input">
												<span class="selectgroup-button">EEG</span>
											</label>

									</div>
									<div class="form-group form-floating-label">
										<label>تقييم وضع الحالة</label>
										<select class="selectpicker form-control" id="tokens ddd" data-live-search="true" name="appraisal" required>
											<option></option>
											<option <?php if ($row['appraisal'] == "مستقرة") echo "selected" ?>>مستقرة</option>
											<option <?php if ($row['appraisal'] == "تحت المتابعة") echo "selected" ?>>تحت المتابعة</option>
											<option <?php if ($row['appraisal'] == "منتكسة") echo "selected" ?>>منتكسة</option>
										</select>
									</div>
									<div class="form-group form-floating-label">
										<label>مدى تحسن المريض</label>
										<select class="selectpicker form-control" id="tokens ddd" data-live-search="true" name="recover" required>
											<option></option>
											<option> جيد</option>
											<option> متوسط</option>
											<option>لاباس</option>
											<option> غير متحسن</optio>

										</select>
									</div>
									<div class="form-group form-floating-label">
										<label for="tokens">تشخيص رئيسي </label>
										<option value=""></option>
										<select class="form-control input-border-bottom" name="psyshological_diagnosis" id="tokens" required>
											<option <?php if ($row['psyshological_diagnosis'] == "لا يوجد تشخيص رئيسي") echo "selected" ?>> لا يوجد تشخيص رئيسي</option>
											<option <?php if ($row['psyshological_diagnosis'] == "Acute Stress (ACU)  /الإجهاد الحاد (ACU)") echo "selected" ?>>Acute Stress (ACU) /الإجهاد الحاد (ACU)</option>
											<option <?php if ($row['psyshological_diagnosis'] == "Grief (GRI)  /  الحزن") echo "selected" ?>>Grief (GRI) / الحزن</option>
											<option <?php if ($row['psyshological_diagnosis'] == "Moderate-severe Depressive Disorder (DEP)  /اضطراب الاكتئاب المتوسط الشديد") echo "selected" ?>>Moderate-severe Depressive Disorder (DEP) /اضطراب الاكتئاب المتوسط الشديد</option>
											<option <?php if ($row['psyshological_diagnosis'] == "Post-traumatic Stress Disorder (PTSD) / اضطراب ما بعد الصدمة") echo "selected" ?>>Post-traumatic Stress Disorder (PTSD) / اضطراب ما بعد الصدمة</option>
											<option <?php if ($row['psyshological_diagnosis'] == "Psychosis (PSY)  /  الذهان") echo "selected" ?>>Psychosis (PSY) / الذهان</option>
											<option <?php if ($row['psyshological_diagnosis'] == "Epilepsy/Seizures (EPI)  /الصرع / النوبات") echo "selected" ?>>Epilepsy/Seizures (EPI) /الصرع / النوبات</option>
											<option <?php if ($row['psyshological_diagnosis'] == "Intellectual Disability (ID)  /الإعاقة الذهنية") echo "selected" ?>>Intellectual Disability (ID) /الإعاقة الذهنية</option>
											<option <?php if ($row['psyshological_diagnosis'] == "Harmful Use of Alcohol and Drugs (SUB) /الاستخدام الضار للكحول والمخدرات") echo "selected" ?>>Harmful Use of Alcohol and Drugs (SUB) /الاستخدام الضار للكحول والمخدرات</option>
											<option <?php if ($row['psyshological_diagnosis'] == "Suicide (SUI) /الانتحار") echo "selected" ?>>Suicide (SUI) /الانتحار</option>
											<option <?php if ($row['psyshological_diagnosis'] == "Other Significant Mental Health Complaints/شكاوى أخرى هامة تتعلق بالصحة العقلية") echo "selected" ?>>Other Significant Mental Health Complaints/شكاوى أخرى هامة تتعلق بالصحة العقلية</option>
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


		$code = test_input($_POST["code"]);
		$psyshological_diagnosis = test_input($_POST["psyshological_diagnosis"]);
		$recover = test_input($_POST["recover"]);
		$today = date('Y-m-d');
		$date = test_input($_POST["date"]);

		$diagnosis = test_input($_POST["diagnosis"]);
		$note = test_input($_POST["note"]);
		$Physical_Examination = test_input($_POST['Physical_Examination']);
		$appraisal = $_POST["appraisal"];
		if ($_SESSION['user']['branch_id'] != 6) {
			$quantity = 0;
			$medical = $_POST["medical"];
		} else {
			$quantity = $_POST["quantity"];
			$medical = $_POST["medical"];
			$medical = implode(',', $medical);
		}
		if (empty($_POST["violense"])) {
			$b = 0;
		} else {
			$violense = $_POST["violense"];
			$b = implode(',', $violense);
		}




		$user = $_SESSION['user']['id'];
		// find branch
		$branch = $_SESSION['user']['branch_id'];


		//end find branch 



		//التحقق ان اسم المنتج موجود وليس ارقام




		$sql = "select type from resption where  code=? ORDER BY `resption`.`date` desc ";
		$stmp = $con->prepare($sql);
		$stmp->execute(array($code));
		$type = $stmp->fetch();
		$type = $type['type'];
		$sql = "select type from resption where  code=?  and date=? ";

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
		} else if (empty($date)) {


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
			$sql = "select * from doctor where  code=? and date=?  ";
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
				$query = "INSERT INTO doctor(branch,psyshological_diagnosis,code,diagnosis,note,date,Physical_Examination,sender_name,lap,medical,type,appraisal,quantity,recover)
				values (?,?,?,?,?,?,?,?,?,?,?,?,?,?) ";
				$stm = $con->prepare($query);
				$stm->execute(array($branch, $psyshological_diagnosis, $code, $diagnosis, $note, $date, $Physical_Examination, $user, $b, $medical, 'عودة', $appraisal, $quantity, $recover));
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