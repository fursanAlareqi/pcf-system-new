<?php

include "include/header.php";
if (!isset($_SESSION['user'])) {

	echo "<script> window.open('logout.php','_self')</script>";
	// header("location:login.php");
}
if ($_SESSION['user']['rule_id'] == 12 || $_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6) {
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

											<label for="tokens">رقم الكود</label>
											<select class="selectpicker form-control" name="code" id="tokens" data-live-search="true" required>
												<option value=""></option>
												<?php
												// find branch
												$branch = $_SESSION['user']['branch_id'];

												//end find branch 
												$sql = "select DISTINCT(code) from resption where branch=? ";
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
											<label for="tokens">رقم الزيارة</label>
											<select class="selectpicker form-control" name="visites" id="tokens" data-live-search="true" required>
												<option value=""></option>
												<option>الزيارة الاولى </option>

											</select>
										</div>


										<div class="form-group form-floating-label">
											<label> Consciousness </label>
											<input type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="Consciousness" required>
										</div>
										<div class="form-group form-floating-label">
											<label> Orientations </label>
											<input type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="Orientations" required>
										</div>
										<div class="form-group form-floating-label">
											<label> Attention_Concentration </label>
											<input type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="Attention_Concentration" required>
										</div>
										<div class="form-group form-floating-label">
											<label> Memory </label>
											<input type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="Memory" required>
										</div>
										<div class="form-group form-floating-label">
											<label> Appearance and Behavior </label>
											<input type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="Appearance" required>
										</div>









									</div>
									<div class="col-md-6 col-lg-4">



										<div class="form-group form-floating-label">
											<label> Affect & Mood </label>
											<input type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="Affect_Mood" required>
										</div>
										<div class="form-group form-floating-label">
											<label> Suicide & Homicide </label>
											<input type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="Suicide_Homicide" required>
										</div>


										<div class="form-group form-floating-label">
											<label> Speech </label>
											<input type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="Speech" required>
										</div>
										<div class="form-group form-floating-label">
											<label> Thinking </label>
											<input type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="Thinking" required>
										</div>
										<div class="form-group form-floating-label">
											<label> Perception </label>
											<input type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="Perception" required>
										</div>
										<div class="form-group form-floating-label">
											<label> Insight </label>
											<input type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="Insight" required>
										</div>









										<div class="form-group form-floating-label">
											<label for="tokens">تشخيص رئيسي </label>
											<select class="form-control input-border-bottom" name="diagnosis" id="tokens" required>
												<option> لا يوجد تشخيص رئيسي</option>
												<option>Acute Stress (ACU) /الإجهاد الحاد (ACU)</option>
												<option>Grief (GRI) / الحزن</option>
												<option>Moderate-severe Depressive Disorder (DEP) /اضطراب الاكتئاب المتوسط الشديد</option>
												<option>Post-traumatic Stress Disorder (PTSD) / اضطراب ما بعد الصدمة</option>
												<option>Psychosis (PSY) / الذهان</option>
												<option>Epilepsy/Seizures (EPI) /الصرع / النوبات</option>
												<option>Intellectual Disability (ID) /الإعاقة الذهنية</option>
												<option>Harmful Use of Alcohol and Drugs (SUB) /الاستخدام الضار للكحول والمخدرات</option>
												<option>Suicide (SUI) /الانتحار </option>
												<option>Other Significant Mental Health Complaints/شكاوى أخرى هامة تتعلق بالصحة العقلية</option>
											</select>
										</div>
										<!--<div class="form-group form-floating-label">	-->
										<!--	<label for="tokens">تشخيص فرعي</label>-->
										<!--	<select class="form-control input-border-bottom" name="sub_diagnosis" id="tokens"  data-live-search="true" required >-->
										<!--		<option> لا يوجد تشخيص فرعي</option>-->
										<!--		<optgroup label="Neurodevelopmental Disorders /إضطرابات النمو العصبية " >-->
										<!--		<option>Intellectual Disabilities / الإعاقة الذهنية </option>-->
										<!--		<option> Communication Disorders / إضطرابات التواصل</option>-->
										<!--		<option>Autism Spectrum Disorder / إضطراب طيف التوحد </option>-->
										<!--		<option> Attention-Deficit/Hyperactivity Disorder/ إضطراب نقص الانتباه - فرط الحركة </option>-->
										<!--		<option> Specific Learning Disorder /إضطراب التعلم المحدد </option>-->
										<!--		<option>Motor Disorders / الإضطرابات الحركية </option>-->
										<!--		</optgroup>	-->
										<!--		<optgroup label="Schizophrenia Spectrum and Other Psychotic Disorders /  طيف الفصام والإضطرابات الذهانية الأخرى " >-->
										<!--			<option> Schizotypal (Personality) Disorder / إضطراب الفصام(الشخصية)  </option>-->
										<!--			<option> Delusional Disorder /الإضطراب التوهمي </option>-->
										<!--			<option> Brief Psychotic Disorder / الإضطراب الذهاني الوجيز  </option>-->
										<!--			<option> Schizophreniform Disorder/ إضطراب الفصام </option>-->
										<!--			<option> Schizophrenia / الفصام </option>-->
										<!--			<option> Schizoaffective Disorder/ إضطراب الفصام الوجداني </option>-->
										<!--			<option> Substance/Medication-Induced Psychotic Disorder /  الاضطراب الذهاني المحدث بالمواد  </option>-->
										<!--			<option> Psychotic Disorder Due to Another Medical Condition/  اضطراب ذهاني بسبب حالة طبية أخرى  </option>-->
										<!--			<option> Catatonia Associated With Another Mental Disorder (Catatonia Specifier)/ الكاتاتونيا المرافقة لاضطراب عقلي آخر -محدد الكاتاتونيا  </option>-->
										<!--			<option> Catatonic Disorder Due to Another Medical Condition / كاتاتونيا بسبب حالة طبية أخرى  </option>-->
										<!--			<option> Unspecified Catatonia /الكاتاتونيا غير المحددة  </option>-->
										<!--		</optgroup>	-->
										<!--		<optgroup label="Bipolar and Related Disorders / ثنائي القطب والاضطرابات ذات الصلة " >-->
										<!--			<option>Bipolar I Disorder /  اضطراب ثنائي القطب النوع الأول </option>-->
										<!--			<option> Bipolar II Disorder/اضطراب ثنائي القطب النوع الثاني </option>-->
										<!--		</optgroup>	-->
										<!--		<optgroup label="Sleep-Wake Disorders / اضطرابات النوم واليقظة " >-->
										<!--			<option>Insomnia Disorder/  اضطراب الأرق  </option>-->
										<!--			<option>Hypersoninolence Disorder/ اضطراب فرط النعاس </option>-->
										<!--			<option> Breathing-Related Sleep Disorders/  اضطرابات النوم ذات الصلة بالتنفس</option>-->
										<!--		</optgroup>	-->
										<!--		<optgroup label="Substance-Related and Addictive Disorders / الاضطرابات المتعلقة بمادة والإدمانية " >-->
										<!--			<option> Alcohol-Related Disorders/  الاضطرابات المتعلقة بالكحول</option>-->
										<!--			<option> Caffeine-Related Disorders /الاضطرابات المتعلقة بالكافيين</option>-->
										<!--			<option> Cannabis-Related Disorders / الاضطرابات المتعلقة بالحشيش </option>-->
										<!--		</optgroup>	-->
										<!--	</select>	-->
										<!--</div>-->



									</div>
									<div class="col-md-6 col-lg-4">

										<div class="form-group">
											<label for="comment">ملخص الحالة</label>
											<textarea class="form-control" id="comment" name="summerie" rows="5">
													</textarea>
										</div>
										<div class="form-group">
											<label for="comment">التوصيات</label>
											<textarea class="form-control" id="comment" name="recommendation" rows="5">
													</textarea>
										</div>
										<?php if ($_SESSION['user']['branch_id'] == 6 || $_SESSION['user']['branch_id'] == 8) { ?>

											<div class="form-group form-floating-label">

												<label for="tokens">العلاج</label>
												<select class="selectpicker form-control" name="medical[]" multiple id="tokens" data-live-search="true" required>
													<option value=""></option>
													<?php
													$branch = $_SESSION['user']['branch_id'];
													$sql = "select * from scientific_pharmacy_name where  branch=?  ORDER BY `scientific_pharmacy_name`.`name` ASC  ";
													$stm = $con->prepare($sql);
													$stm->execute(array($_SESSION['user']['branch_id']));
													if ($stm->rowCount() > 0) {
														foreach ($stm->fetchAll() as $row) {



													?>

															<option value="<?php echo $row['name'] . ' ' . '1x1'; ?>"><?php echo $row['name'] . ' ' . '1x1'; ?></option>
															<option value="<?php echo $row['name'] . ' ' . '1x2'; ?>"><?php echo $row['name'] . ' ' . '1x2'; ?></option>
															<option value="<?php echo $row['name'] . ' ' . '1x3'; ?>"><?php echo $row['name'] . ' ' . '1x3'; ?></option>
															<option value="<?php echo $row['name'] . ' ' . '1x0.5'; ?>"><?php echo $row['name'] . ' ' . '1x0.5'; ?></option>


													<?php

														}
													}
													?>

												</select>
											</div>
											<div class="form-group">
												<label for="comment">الكمية</label>
												<textarea class="form-control" id="comment" name="quantity" rows="5">
															</textarea>
											</div>
										<?php } else { ?>
											<div class="form-group">
												<label for="comment">العلاج</label>
												<textarea class="form-control" id="comment" name="medical" rows="5">

														</textarea>
											</div>
										<?php } ?>

										<label class="form-label">الفحوصات المطلوبة</label>
										<div class="selectgroup selectgroup-pills">
											<label class="selectgroup-item">
												<input type="checkbox" name="violense[]" value="CBC" class="selectgroup-input">
												<span class="selectgroup-button">CBC</span>
											</label>
											<label class="selectgroup-item">
												<input type="checkbox" name="violense[]" value="GPT" class="selectgroup-input">
												<span class="selectgroup-button">GPT</span>
											</label>
											<label class="selectgroup-item">
												<input type="checkbox" name="violense[]" value="GOT" class="selectgroup-input">
												<span class="selectgroup-button">GOT</span>
											</label>
											<label class="selectgroup-item">
												<input type="checkbox" name="violense[]" value="ALT" class="selectgroup-input">
												<span class="selectgroup-button">ALT</span>
											</label>
											<label class="selectgroup-item">
												<input type="checkbox" name="violense[]" value="T.B" class="selectgroup-input">
												<span class="selectgroup-button">T.B</span>
											</label>
											<label class="selectgroup-item">
												<input type="checkbox" name="violense[]" value="D.B" class="selectgroup-input">
												<span class="selectgroup-button">D.B</span>
											</label>
											<label class="selectgroup-item">
												<input type="checkbox" name="violense[]" value="Urea" class="selectgroup-input">
												<span class="selectgroup-button">Urea</span>
											</label>
											<label class="selectgroup-item">
												<input type="checkbox" name="violense[]" value="Creatinine" class="selectgroup-input">
												<span class="selectgroup-button">Creatinine</span>
											</label>
											<label class="selectgroup-item">
												<input type="checkbox" name="violense[]" value="HBSAG" class="selectgroup-input">
												<span class="selectgroup-button">HBSAG</span>
											</label>
											<label class="selectgroup-item">
												<input type="checkbox" name="violense[]" value="HIVIe2" class="selectgroup-input">
												<span class="selectgroup-button">HIVIe2</span>
											</label>
											<label class="selectgroup-item">
												<input type="checkbox" name="violense[]" value="Prolactine" class="selectgroup-input">
												<span class="selectgroup-button">Prolactine</span>
											</label>
											<label class="selectgroup-item">
												<input type="checkbox" name="violense[]" value="HCVAB" class="selectgroup-input">
												<span class="selectgroup-button">HCVAB</span>
											</label>
											<label class="selectgroup-item">
												<input type="checkbox" name="violense[]" value="TSH" class="selectgroup-input">
												<span class="selectgroup-button">TSH</span>
											</label>
											<label class="selectgroup-item">
												<input type="checkbox" name="violense[]" value="FT3" class="selectgroup-input">
												<span class="selectgroup-button">FT3</span>
											</label>
											<label class="selectgroup-item">
												<input type="checkbox" name="violense[]" value="FT4" class="selectgroup-input">
												<span class="selectgroup-button">FT4</span>
											</label>
											<label class="selectgroup-item">
												<input type="checkbox" name="violense[]" value="RBS" class="selectgroup-input">
												<span class="selectgroup-button">RBS</span>
											</label>
											<label class="selectgroup-item">
												<input type="checkbox" name="violense[]" value="FBS" class="selectgroup-input">
												<span class="selectgroup-button">FBS</span>
											</label>
											<label class="selectgroup-item">
												<input type="checkbox" name="violense[]" value="HbA1C" class="selectgroup-input">
												<span class="selectgroup-button">HbA1C</span>
											</label>
											<label class="selectgroup-item">
												<input type="checkbox" name="violense[]" value="Addication Screen" class="selectgroup-input">
												<span class="selectgroup-button">Addication Screen</span>
											</label>
											<label class="selectgroup-item">
												<input type="checkbox" name="violense[]" value="EEG" class="selectgroup-input">
												<span class="selectgroup-button">EEG</span>
											</label>
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





		$diagnosis = test_input($_POST["diagnosis"]);
		$recommendation = test_input($_POST["recommendation"]);
		$visites = test_input($_POST["visites"]);
		$summerie = test_input($_POST["summerie"]);
		$sub_diagnosis = test_input($_POST["sub_diagnosis"]);
		$Consciousness = test_input($_POST["Consciousness"]);
		$Orientations = test_input($_POST["Orientations"]);
		$Attention_Concentration = test_input($_POST["Attention_Concentration"]);
		$Memory = test_input($_POST["Memory"]);
		$Appearance = test_input($_POST["Appearance"]);
		$Affect_Mood = test_input($_POST["Affect_Mood"]);
		$Suicide_Homicide = test_input($_POST["Suicide_Homicide"]);
		$Speech = test_input($_POST["Speech"]);
		$Thinking = test_input($_POST["Thinking"]);
		$Perception = test_input($_POST["Perception"]);
		$Insight = test_input($_POST["Insight"]);
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

		// elseif($diagnosis == "لا يوجد تشخيص رئيسي" && $sub_diagnosis != "لا يوجد تشخيص فرعي")
		// {


		// 	echo '<script>swal("   لايمكن اختيار تشخيص فرعي من دون اختيار تشخيص اساسي ", "لم يتم رفع البيانات", {
		// 		icon : "warning",
		// 		buttons: {        			
		// 			confirm: {
		// 				className : "btn btn-warning"
		// 			}
		// 		},
		// 	});</script>';
		// }


		/////////////////////////////////////////////////////////////////////////////////////تذكير الشرط حق الايميل

		//اذا لايوجد اي مشكلة يقوم بارسال الملف
		else {
			$sql = "select * from psyshological where  code=?  ";
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
				$query = "INSERT INTO psyshological(branch,code,diagnosis,end_diagnosis,visites,medical,summerie, date
					,Consciousness,Orientations,Attention_Concentration
					,Memory,Appearance,Affect_Mood,
					Suicide_Homicide,Speech,Thinking,Perception,Insight,sender_name,lap,sub_diagnosis,type,quantity)
					values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ";
				$stm = $con->prepare($query);
				$stm->execute(array(
					$branch,
					$code,
					$diagnosis,
					$recommendation,
					$visites,
					$medical,
					$summerie,
					$date,
					$Consciousness,
					$Orientations,
					$Attention_Concentration,
					$Memory,
					$Appearance,
					$Affect_Mood,
					$Suicide_Homicide,
					$Speech,
					$Thinking,
					$Perception,
					$Insight,
					$user,
					$b,
					$sub_diagnosis,
					'جديد',
					$quantity
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
} else {
	echo "<script> window.open('index.php','_self')</script>";
}
?>