<?php

include "include/header.php";
if (!isset($_SESSION['user'])) {

	echo "<script> window.open('logout.php','_self')</script>";
	// header("location:login.php");

}if($_SESSION['user']['rule_id']==22||$_SESSION['user']['rule_id']==2 ||$_SESSION['user']['rule_id']==6){
	?>



	<div class="content">
		<div class="page-inner">


			<div class="row">
				<div class="col-md-12">
					<?php
					if (isset($_GET['action'], $_GET['ids']) && $_GET['action'] == 'edit') {
						$id = $_GET['ids'];
						$sql = "select * from sana where id=?";
						$stm = $con->prepare($sql);
						$stm->execute(array($id));
						if ($stm->rowCount()) {
							foreach ($stm->fetchAll() as $row) {

					?>
								<form action="" method="post">
									<div class="card">
										<div class="card-header">
											<div class="card-title"> تعديل بيانات الحالة</div>
										</div>
										<div class="card-body">
											<div class="row">
											<div class="col-md-6 col-lg-4">
												
												
												<div class="form-group form-floating-label">
													<label >تاريخ تسجيل الحالة</label>
													<input type="date" value="<?php echo $row['date']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="date">
												</div>
												<div class="form-group form-floating-label">
											
													<div class="form-group form-floating-label">
														<label>رقم الكود</label>
														<input type="number" value="<?php echo $row['code']; ?>" disabled class="form-control input-border-bottom" id="inputFloatingLabel" required>
														<input type="hidden" value="<?php echo $row['code']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="code" required>
													</div>
													<div class="form-group form-floating-label">
														<label>الاسم الرباعي</label>
														<input type="text" value="<?php echo $row['name']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="name" required>
													</div>
													
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
											</div>
























											<div class="col-md-6 col-lg-4">
                                                    <div class="form-group form-floating-label">
                                                        <label >الخدمه </label>
														<?php $services = explode(",", $row['services']); ?>
                                                        <select class="selectpicker form-control" multiple  id="tokens ddd"  data-live-search="true" name="services[]" required  >
															<option value="إحالة المستفيدة للخدمات" <?php if (in_array('إحالة المستفيدة للخدمات', $services)) echo "selected" ?>>إحالة المستفيدة للخدمات</option>

															<option value="استشارة نفسية" <?php if (in_array('استشارة نفسية', $services)) echo "selected" ?>>استشارة نفسية</option>

															<option value="بيانات المستفيدة " <?php if (in_array('بيانات المستفيدة ', $services)) echo "selected" ?>>بيانات المستفيدة </option>

															<option value="معاينه طبية" <?php if (in_array('معاينه طبية', $services)) echo "selected" ?>>معاينه طبية</option>
                                             
															<option value=" دعم نفسي أولي" <?php if (in_array(' دعم نفسي أولي', $services)) echo "selected" ?>> دعم نفسي أولي</option>

															<option value="جلسة دعم نفسي فردي" <?php if (in_array('جلسة دعم نفسي فردي', $services)) echo "selected" ?>>جلسة دعم نفسي فردي</option>

															<option value="جلسة دعم نفسي جماعي" <?php if (in_array('جلسة دعم نفسي جماعي', $services)) echo "selected" ?>>جلسة دعم نفسي جماعي</option>

															<option value="دعم نفسي توعوي" <?php if (in_array('دعم نفسي توعوي', $services)) echo "selected" ?>>دعم نفسي توعوي</option>

															<option value="صرف العلاج" <?php if (in_array('صرف العلاج', $services)) echo "selected" ?>>صرف العلاج</option>

                                                        </select>
                                                    </div>
													<div class="form-group form-floating-label">
														<label> الحاله الاجتماعيه</label>
														<select class="selectpicker form-control" id="tokens ddd" data-live-search="true" name="social_status" required>
															<option></option>
															<option value="عازب" <?php if ($row['social_status'] == "عازب") echo "selected" ?>>عازب</option>
															<option value="مخطوب/ة" <?php if ($row['social_status'] == "مخطوب/ة") echo "selected" ?>>مخطوب/ة</option>
															<option value="مطلق/ة" <?php if ($row['social_status'] == "مطلق/ة") echo "selected" ?>>مطلق/ة</option>
															<option value="متزوج/ة" <?php if ($row['social_status'] == "متزوج/ة") echo "selected" ?>> متزوج/ة</option>
															<option value="أرمل/ة" <?php if ($row['social_status'] == "أرمل/ة") echo "selected" ?>> أرمل/ة</option>
															<option value="طفل/ة" <?php if ($row['social_status'] == "طفل/ة") echo "selected" ?>> طفل/ة</option>
															<option value="منفصل بشكل غير رسمي" <?php if ($row['social_status'] == "منفصل بشكل غير رسمي") echo "selected" ?>> منفصل بشكل غير رسمي</option>
														</select>
													</div>
                                                    <div class="form-group form-floating-label">
                                                        <label >نوع العمل</label>
															<select class="selectpicker form-control" id="tokens ddd" data-live-search="true" name="work" required>
																<option></option>
																<option value="طالب/ة" <?php if ($row['work'] == "طالب/ة") echo "selected" ?>>طالب/ة</option>
																<option value="ربة بيت" <?php if ($row['work'] == "ربة بيت") echo "selected" ?>>ربة بيت</option>
																<option value="معيل/ة" <?php if ($row['work'] == "معيل/ة") echo "selected" ?>>معيل/ة</option>
																<option value="عسكري/ة" <?php if ($row['work'] == "عسكري/ة") echo "selected" ?>>عسكري/ة</option>
																<option value="عاطل عن العمل" <?php if ($row['work'] == "عاطل عن العمل") echo "selected" ?>>عاطل عن العمل</option>
																<option value="طفل/ة" <?php if ($row['work'] == "طفل/ة") echo "selected" ?>>طفل/ة</option>
																<option value="مدرس/ة" <?php if ($row['work'] == "مدرس/ة") echo "selected" ?>>مدرس/ة</option>
																<option value=" عامل/ة" <?php if ($row['work'] == "عامل/ة") echo "selected" ?>>عامل/ة</option>
																<option value="اخر" <?php if ($row['work'] == "اخر") echo "selected" ?>>اخر</option>
															</select>
                                                    </div>
                                                    <div class="form-group form-floating-label">
                                                        <label >نوع الاقامة </label>
                                                        <select class="selectpicker form-control" id="tokens ddd" data-live-search="true" name="place" required>
															<option></option>
															<option value="مقيم/ة" <?php if ($row['place'] == "مقيم/ة") echo "selected" ?>>مقيم/ة</option>
															<option value="لاجى/ة" <?php if ($row['place'] == "لاجى/ة") echo "selected" ?>>لاجى/ة</option>
															<option value="نازح/ة" <?php if ($row['place'] == "نازح/ة") echo "selected" ?>>نازح/ة</option>
														</select>
                                                    </div>
                                                
                                                    <div class="form-group form-floating-label">
                                                        <label >نوع الاعاقة</label>
														<?php $Disability_explode = explode(",", $row['Disability']); ?>
														<select class="selectpicker form-control" multiple id="tokens ddd" data-live-search="true" name="Disability[]" required>
															<option value="لا توجد إعاقة" <?php if (in_array('لا توجد إعاقة', $Disability_explode)) echo "selected" ?>>لا توجد إعاقة</option>
															<option value="إعاقة سمعية" <?php if (in_array('إعاقة سمعية', $Disability_explode)) echo "selected" ?>>إعاقة سمعية</option>
															<option value="إعاقة بصرية" <?php if (in_array('إعاقة بصرية', $Disability_explode)) echo "selected" ?>>إعاقة بصرية</option>
															<option value="إعاقة حركية" <?php if (in_array('إعاقة حركية', $Disability_explode)) echo "selected" ?>>إعاقة حركية</option>
															<option value="إعاقة ذهنية" <?php if (in_array('إعاقة ذهنية', $Disability_explode)) echo "selected" ?>>إعاقة ذهنية</option>
														</select>
                                                    </div>
                                                   
											</div>



















											<div class="col-md-6 col-lg-4">
                                                    <div class="form-group form-floating-label">	
                                                        <label for="tokens">تشخيص رئيسي </label>
                                                        <select class="form-control input-border-bottom" name="diagnosis" id="tokens"   required >
															
															<option <?php if ($row['diagnosis'] == "لا يوجد تشخيص رئيسي") echo "selected" ?>>لا يوجد تشخيص رئيسي</option>
															<option <?php if ($row['diagnosis'] == "Acute Stress (ACU) /الإجهاد الحاد (ACU)") echo "selected" ?>>Acute Stress (ACU) /الإجهاد الحاد (ACU)</option>
															<option <?php if ($row['diagnosis'] == "Grief (GRI) / الحزن") echo "selected" ?>>Grief (GRI) / الحزن</option>
															<option <?php if ($row['diagnosis'] == "Moderate-severe Depressive Disorder (DEP) /اضطراب الاكتئاب المتوسط الشديد") echo "selected" ?>>Moderate-severe Depressive Disorder (DEP) /اضطراب الاكتئاب المتوسط الشديد</option>
															<option <?php if ($row['diagnosis'] == "Post-traumatic Stress Disorder (PTSD) / اضطراب ما بعد الصدمة") echo "selected" ?>>Post-traumatic Stress Disorder (PTSD) / اضطراب ما بعد الصدمة</option>
															<option <?php if ($row['diagnosis'] == "Psychosis (PSY) / الذهان") echo "selected" ?>>Psychosis (PSY) / الذهان</option>
															<option <?php if ($row['diagnosis'] == "Epilepsy/Seizures (EPI) /الصرع / النوبات") echo "selected" ?>>Epilepsy/Seizures (EPI) /الصرع / النوبات</option>
															<option <?php if ($row['diagnosis'] == "Intellectual Disability (ID) /الإعاقة الذهنية") echo "selected" ?>>Intellectual Disability (ID) /الإعاقة الذهنية</option>
															<option <?php if ($row['diagnosis'] == "Harmful Use of Alcohol and Drugs (SUB) /الاستخدام الضار للكحول والمخدرات") echo "selected" ?>>Harmful Use of Alcohol and Drugs (SUB) /الاستخدام الضار للكحول والمخدرات</option>
															<option <?php if ($row['diagnosis'] == "Suicide (SUI) /الانتحار") echo "selected" ?>>Suicide (SUI) /الانتحار</option>
															<option <?php if ($row['diagnosis'] == "Other Significant Mental Health Complaints/شكاوى أخرى هامة تتعلق بالصحة العقلية") echo "selected" ?>>Other Significant Mental Health Complaints/شكاوى أخرى هامة تتعلق بالصحة العقلية</option>

                                                            <option >Acute Stress (ACU)  /الإجهاد الحاد (ACU)</option>
                                                            <option >Grief (GRI)  /  الحزن</option>
                                                            <option >Moderate-severe Depressive Disorder (DEP)  /اضطراب الاكتئاب المتوسط الشديد</option>
                                                            <option >Post-traumatic Stress Disorder (PTSD) / اضطراب ما بعد الصدمة</option>
                                                            <option >Psychosis (PSY)  /  الذهان</option>
                                                            <option >Epilepsy/Seizures (EPI)  /الصرع / النوبات</option>
                                                            <option >Intellectual Disability (ID)  /الإعاقة الذهنية</option>
                                                            <option >Harmful Use of Alcohol and Drugs (SUB) /الاستخدام الضار للكحول والمخدرات</option>
                                                            <option >Suicide (SUI) /الانتحار </option>
                                                            <option >Other Significant Mental Health Complaints/شكاوى أخرى هامة تتعلق بالصحة العقلية</option>
                                                        </select>	
                                                    </div>
                                                    <div class="form-group form-floating-label">
                                                        <label >الاحالة  وارد</label>
                                                        <select class="selectpicker form-control"  id="tokens ddd"  data-live-search="true" name="type_con_from"  >
                                                            <option ></option>
															<option <?php if ($row['type_con_from'] == "احالة وارد") echo "selected" ?>>احالة  وارد</option>

                                                        </select>
                                                    </div>

                                                    <div class="form-group form-floating-label">
                                                        <label >جهة الاحالة  وارد </label>
                                                        <select class="selectpicker form-control"  id="tokens ddd"  data-live-search="true" name="side_con_from"  >
														<option></option>

														<?php
														$sql = "SELECT * FROM mange_convert_ex_side";
														$stm = $con->query($sql);
														foreach ($stm->fetchAll() as $_row) {
														?>
															<option <?php if ($row['side_con_from'] == $_row['name']) echo "selected" ?>><?php echo $_row['name'] ?></option>

														<?php } ?>

                                                        </select>	
                                                    </div>
                                                    <div class="form-group form-floating-label">
                                                        <label >الاحالة  صادرة </label>
                                                        <select class="selectpicker form-control"  id="tokens ddd"  data-live-search="true" name="type_con_to"  >
                                                            <option ></option>
															<option <?php if ($row['type_con_to'] == "احالة صادر") echo "selected" ?>>احالة  صادر</option>

                                                        </select>
                                                            
                                                    </div>
                                                    <div class="form-group form-floating-label">
                                                        <label >جهة الاحالة  صادرة </label>
                                                        <select class="selectpicker form-control"  id="tokens ddd"  data-live-search="true" name="side_con_to"  >
														<option></option>

														<?php
														$sql = "SELECT * FROM mange_convert_ex_side";
														$stm = $con->query($sql);
														foreach ($stm->fetchAll() as $_row) {
														?>
															<option <?php if ($row['side_con_to'] == $_row['name']) echo "selected" ?>><?php echo $_row['name'] ?></option>

														<?php } ?>
                                                        </select>    
                                                    </div>
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

		$sex = test_input($_POST['sex']);
		$code = test_input($_POST['code']);

		$date = test_input($_POST["date"]);
		$name = test_input($_POST["name"]);
		$brithday = test_input($_POST["brithday"]);

		$services = $_POST["services"];
		$services = implode(',', $services);

		$work = test_input($_POST["work"]);
		$place = test_input($_POST["place"]);
		$social_status = test_input($_POST["social_status"]);
		$Disability = $_POST["Disability"];
		$Disability = implode(',', $Disability);


		$diagnosis = test_input($_POST["diagnosis"]);
		$side_con_to = test_input($_POST["side_con_to"]);
		$type_con_to = test_input($_POST["type_con_to"]);
		$side_con_from = test_input($_POST["side_con_from"]);
		$type_con_from = test_input($_POST["type_con_from"]);



		
		// $date= date('Y-m-d');
	

		$user = $_SESSION['user']['id'];
		// find branch
		$branch = $_SESSION['user']['branch_id'];


		//end find branch 

	
		

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
		}  elseif (empty($brithday)) {


			echo '<script>swal("يرجاء ادخال  تاريخ ميلاد الحاله ", "لم يتم رفع البيانات", {
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
			

			$query = "UPDATE  sana set sex=?,date=?,name=?,
				  brithday=?,services=?,work=?,
				  place=?,social_status=?,Disability=?,diagnosis=?,side_con_to=?,type_con_to=?,
				  side_con_from=?,type_con_from=? where code=?
				 ";
			$stm = $con->prepare($query);
			$stm->execute(array(
				$sex,
				$date,
				$name,
				$brithday,
				$services,
				$work,
				$place,
				$social_status,
				$Disability,
				$diagnosis,
				$side_con_to,
				$type_con_to,
				$side_con_from,
				$type_con_from,
				$code
			));
			if ($stm->rowCount()) {
				echo '<script src="js/send_success.js"></script>';
				echo "<script>
                                  window.open('today_sana_data.php?num=3&id=119','_self')
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