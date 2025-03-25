<?php

include "include/header.php";
if (!isset($_SESSION['user'])) {

	echo "<script> window.open('logout.php','_self')</script>";
	// header("location:login.php");
}
if ($_SESSION['user']['rule_id'] == 3 || $_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6) {
?>



	<div class="content">
		<div class="page-inner">


			<div class="row">
				<div class="col-md-12">
					<?php
					if (isset($_GET['action'], $_GET['ids']) && $_GET['action'] == 'edit') {
						$id = $_GET['ids'];
						$sql = "select * from resption where id=?";
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
														<input type="date" value="<?php echo $row['date']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="date">
													</div>
													<div class="form-group form-floating-label">

														<div class="form-group form-floating-label">
															<label>رقم الكود</label>
															<input type="number" value="<?php echo $row['code']; ?>" disabled class="form-control input-border-bottom" id="inputFloatingLabel" required>
															<input type="hidden" value="<?php echo $row['code']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="code" required>
														</div>
														<div class="form-group form-floating-label">
															<label>رقم الهاتف</label>
															<input type="tel" value="<?php echo $row['phone']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="phone" pattern="[7]{1}[7,1,3,0,8]{1}[0-9]{7}" required>
														</div>
														<?php if($row['type'] == "جديد"){?>
															<div class="form-group form-floating-label">
																<label>تاريخ الميلاد</label>
																	<?php if($_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6){?>

																	<input type="date" value="<?php echo $row['brithday']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="brithday" required>
																<?php }else {?>
																	<input type="date" value="<?php echo $row['brithday']; ?>" disabled class="form-control input-border-bottom" id="inputFloatingLabel" required>
																<?php }?>

															</div>
														<?php }?>

														<div class="form-group form-floating-label">
															<label>الجنس</label>
															<select class="selectpicker form-control" id="tokens ddd" data-live-search="true" name="sex" required>
																<option></option>
																<option value="ذكر" <?php if ($row['sex'] == "ذكر") echo "selected" ?>>ذكر</option>
																<option value="انثى" <?php if ($row['sex'] == "انثى") echo "selected" ?>>انثى</option>
															</select>

														</div>
														<div class="form-group form-floating-label">
															<label>الاسم الرباعي</label>
															<input type="text" value="<?php echo $row['name']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="name" required>
														</div>
														<div class="form-group form-floating-label">
															<label>مكان الميلاد</label>
															<input type="text" value="<?php echo $row['brithday_blace']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="brithday_blace" required>
														</div>
														<div class="form-group form-floating-label">
															<label>عدد الاخوة الذكور </label>
															<input type="number" value="<?php echo $row['brother']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="brother" required>
														</div>
														<div class="form-group form-floating-label">
															<label>عدد الاخوة الاناث </label>
															<input type="number" value="<?php echo $row['sister']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="sister" required>
														</div>
														<div class="form-group form-floating-label">
															<label> ترتيبة بين الاخوة</label>
															<input type="text" value="<?php echo $row['laying']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="laying" required>

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
												<div class="col-md-6 col-lg-4">
													<div class="form-group form-floating-label">
														<label>المستوى التعليمي</label>
														<select class="selectpicker form-control" id="tokens ddd" data-live-search="true" name="studing" required>
															<option></option>
															<option value="امي" <?php if ($row['studing'] == "امي") echo "selected" ?>>امي</option>
															<option value="ابتدائي" <?php if ($row['studing'] == "ابتدائي") echo "selected" ?>>ابتدائي</option>
															<option value="اعدادي" <?php if ($row['studing'] == "اعدادي") echo "selected" ?>>اعدادي</option>
															<option value="ثانوي" <?php if ($row['studing'] == "ثانوي") echo "selected" ?>>ثانوي</option>
															<option value="دبلوم" <?php if ($row['studing'] == "دبلوم") echo "selected" ?>> دبلوم</option>
															<option value="جامعي" <?php if ($row['studing'] == "جامعي") echo "selected" ?>> جامعي</option>
															<option value="فوق الجامعي" <?php if ($row['studing'] == "فوق الجامعي") echo "selected" ?>> فوق الجامعي</option>
														</select>
													</div>
													<div class="form-group form-floating-label">
														<label>نوع البطاقة</label>
														<select class="selectpicker form-control" id="tokens ddd" data-live-search="true" name="identity" required>
															<option></option>
															<option value="بطاقة شخصية" <?php if ($row['identity'] == "بطاقة شخصية") echo "selected" ?>>بطاقة شخصية</option>
															<option value="بطاقة انتخابية" <?php if ($row['identity'] == "بطاقة انتخابية") echo "selected" ?>>بطاقة انتخابية</option>
															<option value="جواز سفر" <?php if ($row['identity'] == "جواز سفر") echo "selected" ?>>جواز سفر</option>
															<option value="بطاقة عائلية" <?php if ($row['identity'] == "بطاقة عائلية") echo "selected" ?>>بطاقة عائلية</optio>
															<option value="معرف" <?php if ($row['identity'] == "معرف") echo "selected" ?>>معرف </option>
															<option value="استبيان" <?php if ($row['identity'] == "استبيان") echo "selected" ?>>استبيان </option>
															<option value="اخرى" <?php if ($row['identity'] == "اخرى") echo "selected" ?>> اخرى</option>
														</select>
													</div>
													<div class="form-group form-floating-label">
														<label>رقم البطاقه</label>
														<input type="number" value="<?php echo $row['identity_number']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="identity_number" required>
													</div>
													<div class="form-group form-floating-label">
														<label>مكان صدورها</label>
														<input type="text" value="<?php echo $row['identity_place']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="identity_place" required>
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

													<div class="form-group form-floating-label">
														<label>المحافظه</label>
														<select class="selectpicker form-control" id="tokens ddd" data-live-search="true" name="briefness" required>
															<option></option>
															<option <?php if ($row['briefness'] == "صنعاء") echo "selected" ?>> صنعاء </option>
															<option <?php if ($row['briefness'] == "اب") echo "selected" ?>> اب</option>
															<option <?php if ($row['briefness'] == "تعز") echo "selected" ?>> تعز</option>
															<option <?php if ($row['briefness'] == "عدن") echo "selected" ?>> عدن</option>
															<option <?php if ($row['briefness'] == "حضرموت") echo "selected" ?>> حضرموت</option>
															<option <?php if ($row['briefness'] == "صعدة") echo "selected" ?>> صعدة</option>
															<option <?php if ($row['briefness'] == "عمران") echo "selected" ?>> عمران</option>
															<option <?php if ($row['briefness'] == "حجة") echo "selected" ?>> حجة</option>
															<option <?php if ($row['briefness'] == "الحديدة") echo "selected" ?>> الحديدة</option>
															<option <?php if ($row['briefness'] == "المحويت") echo "selected" ?>> المحويت</option>
															<option <?php if ($row['briefness'] == "ريمة") echo "selected" ?>> ريمة</option>
															<option <?php if ($row['briefness'] == "ذمار") echo "selected" ?>> ذمار</option>
															<option <?php if ($row['briefness'] == "البيضاء") echo "selected" ?>> البيضاء</option>
															<option <?php if ($row['briefness'] == "الضالع") echo "selected" ?>> الضالع</option>
															<option <?php if ($row['briefness'] == "المهرة") echo "selected" ?>> المهرة</option>
															<option <?php if ($row['briefness'] == "الجوف") echo "selected" ?>>الجوف </option>
															<option <?php if ($row['briefness'] == "شبوة") echo "selected" ?>> شبوة</option>
															<option <?php if ($row['briefness'] == "سقطرة") echo "selected" ?>>سقطرة </option>
															<option <?php if ($row['briefness'] == "ابين") echo "selected" ?>> ابين</option>
															<option <?php if ($row['briefness'] == "مارب") echo "selected" ?>>مارب </option>
														</select>
													</div>
													<div class="form-group form-floating-label">
														<label>المديريه </label>
														<input type="text" value="<?php echo $row['department']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="department" required>
													</div>
													<div class="form-group form-floating-label">
														<label>العزله</label>
														<input type="text" value="<?php echo $row['isolation']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="isolation" required>
													</div>
													<div class="form-group form-floating-label">
														<label>القريه</label>
														<input type="text" value="<?php echo $row['villag']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="villag" required>
													</div>
													<div class="form-group form-floating-label">
														<label>تاريخ النزوح</label>
														<input type="date" value="<?php echo $row['date_come']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="date_come">
													</div>
													<div class="form-group form-floating-label">
														<label>المحافظه التي نزح منها</label>
														<select class="selectpicker form-control" id="tokens ddd" data-live-search="true" name="plasce_from_come">
															<option></option>
															<option <?php if ($row['plasce_from_come'] == "صنعاء") echo "selected" ?>> صنعاء </option>
															<option <?php if ($row['plasce_from_come'] == "اب") echo "selected" ?>> اب</option>
															<option <?php if ($row['plasce_from_come'] == "تعز") echo "selected" ?>> تعز</option>
															<option <?php if ($row['plasce_from_come'] == "عدن") echo "selected" ?>> عدن</option>
															<option <?php if ($row['plasce_from_come'] == "حضرموت") echo "selected" ?>> حضرموت</option>
															<option <?php if ($row['plasce_from_come'] == "صعدة") echo "selected" ?>> صعدة</option>
															<option <?php if ($row['plasce_from_come'] == "عمران") echo "selected" ?>> عمران</option>
															<option <?php if ($row['plasce_from_come'] == "حجة") echo "selected" ?>> حجة</option>
															<option <?php if ($row['plasce_from_come'] == "الحديدة") echo "selected" ?>> الحديدة</option>
															<option <?php if ($row['plasce_from_come'] == "المحويت") echo "selected" ?>> المحويت</option>
															<option <?php if ($row['plasce_from_come'] == "ريمة") echo "selected" ?>> ريمة</option>
															<option <?php if ($row['plasce_from_come'] == "ذمار") echo "selected" ?>> ذمار</option>
															<option <?php if ($row['plasce_from_come'] == "البيضاء") echo "selected" ?>> البيضاء</option>
															<option <?php if ($row['plasce_from_come'] == "الضالع") echo "selected" ?>> الضالع</option>
															<option <?php if ($row['plasce_from_come'] == "المهرة") echo "selected" ?>> المهرة</option>
															<option <?php if ($row['plasce_from_come'] == "الجوف") echo "selected" ?>>الجوف </option>
															<option <?php if ($row['plasce_from_come'] == "شبوة") echo "selected" ?>> شبوة</option>
															<option <?php if ($row['plasce_from_come'] == "سقطرة") echo "selected" ?>>سقطرة </option>
															<option <?php if ($row['plasce_from_come'] == "ابين") echo "selected" ?>> ابين</option>
															<option <?php if ($row['plasce_from_come'] == "مارب") echo "selected" ?>>مارب </option>
														</select>
													</div>
													<div class="form-group form-floating-label">
														<label>سبب النزوح</label>
														<input type="text" value="<?php echo $row['becouse_come']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="becouse_come">
													</div>








												</div>
												<div class="col-md-6 col-lg-4">




													<div class="form-group form-floating-label">
														<label>استشاره/معاينة</label>
														<?php $view_explode = explode(",", $row['view']); ?>
														<select class="selectpicker form-control" id="tokens ddd" multiple data-live-search="true" name="view[]" required>
															<option></option>if(in_array("intimate partner violence",$violense_explode))
															<option value="استشارة" <?php if (in_array('استشارة', $view_explode)) echo "selected" ?>>استشارة</option>
															<option value="معاينة" <?php if (in_array('معاينة', $view_explode)) echo "selected" ?>>معاينة</option>
															<option value="جلسة دعم نفسي" <?php if (in_array('جلسة دعم نفسي', $view_explode)) echo "selected" ?>>جلسة دعم نفسي</option>
														</select>
													</div>



													<div class="form-group form-floating-label">
														<label>نوع العمل</label>
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
														<label>عدد الابناء الذكور</label>
														<input type="number" value="<?php echo $row['son']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="son">
													</div>
													<div class="form-group form-floating-label">
														<label>عدد الابناء الاناث </label>
														<input type="number" value="<?php echo $row['daughter']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="daughter">
													</div>
													<div class="form-group form-floating-label">
														<label>العمر عند الزواج </label>
														<input type="number" value="<?php echo $row['age_when_married']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="age_when_married">
													</div>


													<div class="form-group form-floating-label">
														<label>عدد الزوجات </label>
														<input type="number" value="<?php echo $row['number_of_wife']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="number_of_wife">
													</div>

													<div class="form-group form-floating-label">
														<label>نوع الاعاقة</label>
														<?php $Disability_explode = explode(",", $row['Disability']); ?>
														<select class="selectpicker form-control" multiple id="tokens ddd" data-live-search="true" name="Disability[]" required>
															<option value="لا توجد إعاقة" <?php if (in_array('لا توجد إعاقة', $Disability_explode)) echo "selected" ?>>لا توجد إعاقة</option>
															<option value="إعاقة سمعية" <?php if (in_array('إعاقة سمعية', $Disability_explode)) echo "selected" ?>>إعاقة سمعية</option>
															<option value="إعاقة بصرية" <?php if (in_array('إعاقة بصرية', $Disability_explode)) echo "selected" ?>>إعاقة بصرية</option>
															<option value="إعاقة حركية" <?php if (in_array('إعاقة حركية', $Disability_explode)) echo "selected" ?>>إعاقة حركية</option>
															<option value="إعاقة ذهنية" <?php if (in_array('إعاقة ذهنية', $Disability_explode)) echo "selected" ?>>إعاقة ذهنية</option>
														</select>
													</div>
													<?php if ($_SESSION['user']['branch_id'] == 6) { ?>
														<div class="form-group form-floating-label">
															<label>نوع الاعاقة</label>
															<?php $project_explode = explode(",", $row['project']); ?>
															<select class="selectpicker form-control" multiple id="tokens ddd" data-live-search="true" name="project[]" required>
																<option value="مشروع مراكز الدعم النفسي" <?php if (in_array('مشروع مراكز الدعم النفسي', $project_explode)) echo "selected" ?>>مشروع مراكز الدعم النفسي</option>
																<option value="مشروع الاستجابة الطارئة لإنقاض امراض الصرع" <?php if (in_array('مشروع الاستجابة الطارئة لإنقاض امراض الصرع', $project_explode)) echo "selected" ?>>مشروع الاستجابة الطارئة لإنقاض امراض الصرع</option>
															</select>
														</div>
													<?php } ?>

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
		// $date= date('Y-m-d');
		$date = test_input($_POST["date"]);
		$view = $_POST["view"];
		$view = implode(',', $view);
		$Disability = $_POST["Disability"];
		$Disability = implode(',', $Disability);
		$brithday = test_input($_POST["brithday"]);
		$phone = test_input($_POST["phone"]);
		$brithday_blace = test_input($_POST["brithday_blace"]);
		$name = test_input($_POST["name"]);
		$know_our = test_input($_POST["know_our"]);
		$place = test_input($_POST["place"]);
		$social_status = test_input($_POST["social_status"]);
		$department = test_input($_POST["department"]);
		$isolation = test_input($_POST["isolation"]);
		$villag = test_input($_POST["villag"]);
		$briefness = test_input($_POST["briefness"]);
		$date_come = test_input($_POST["date_come"]);
		$becouse_come = test_input($_POST["becouse_come"]);
		$studing = test_input($_POST["studing"]);
		$identity = test_input($_POST["identity"]);
		$identity_number = test_input($_POST["identity_number"]);
		$identity_place = test_input($_POST["identity_place"]);
		$laying = test_input($_POST["laying"]);
		$brother = test_input($_POST["brother"]);
		$work = test_input($_POST["work"]);
		$plasce_from_come = test_input($_POST["plasce_from_come"]);

		$son = test_input($_POST["son"]);
		$daughter = test_input($_POST["daughter"]);
		$number_of_wife = test_input($_POST["number_of_wife"]);
		$age_when_married = test_input($_POST["age_when_married"]);
		$sister = test_input($_POST["sister"]);

		$m_sex = 0;
		$f_sex = 0;

		$user = $_SESSION['user']['id'];
		// find branch
		$branch = $_SESSION['user']['branch_id'];


		//end find branch 

		// age must be more than 5 year
		$c = date('Y');
		$y = date('Y', strtotime($brithday));
		$age = $c - $y;
		//end
		if ($branch == 6) {
			$project = $_POST["project"];
			$project = implode(',', $project);
		} else {
			$project = "مشروع مراكز الدعم النفسي";
		}

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
		} elseif (empty($phone)) {


			echo '<script>swal("يرجاء ادخال رقم هاتف الحاله ", "لم يتم رفع البيانات", {
				icon : "warning",
				buttons: {        			
					confirm: {
						className : "btn btn-warning"
					}
				},
			});</script>';
		} elseif (!is_numeric($phone)) {


			echo '<script>swal("رقم هاتق الحاله لا يمكن ان يكون احرف", "لم يتم رفع البيانات", {
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

			if ($_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6){$query = "UPDATE  resption set branch=?,name=?,brithday=?,date=?,
				phone=?,brithday_blace=?,sex=?,
				place=?,social_status=?,department=?,isolation=?,villag=?,briefness=?,
				  becouse_come=?,date_come=?,studing=?,identity=?,
				   identity_number=?,identity_place=?,laying=?,brother=?,work=?,
					son=?,daughter=?,number_of_wife=?,age_when_married=?,
					sister=?,know_our=?,sender_name=?,view=?,plasce_from_come=?,Disability=?,project=? where id=?
				 ";
			$stm = $con->prepare($query);
			$stm->execute(array(
				$branch,
				$name,
				$brithday,
				$date,
				$phone,
				$brithday_blace,
				$sex,
				$place,
				$social_status,
				$department,
				$isolation,
				$villag,
				$briefness,
				$becouse_come,
				$date_come,
				$studing,
				$identity,
				$identity_number,
				$identity_place,
				$laying,
				$brother,
				$work,
				$son,
				$daughter,
				$number_of_wife,
				$age_when_married,
				$sister,
				$know_our,
				$user,
				$view,
				$plasce_from_come,
				$Disability,
				$project,
				$id
			));}
			else{
				$query = "UPDATE  resption set branch=?,name=?,date=?,
				phone=?,brithday_blace=?,sex=?,
				place=?,social_status=?,department=?,isolation=?,villag=?,briefness=?,
				  becouse_come=?,date_come=?,studing=?,identity=?,
				   identity_number=?,identity_place=?,laying=?,brother=?,work=?,
					son=?,daughter=?,number_of_wife=?,age_when_married=?,
					sister=?,know_our=?,sender_name=?,view=?,plasce_from_come=?,Disability=?,project=? where id=?
				 ";
			$stm = $con->prepare($query);
			$stm->execute(array(
				$branch,
				$name,
				$date,
				$phone,
				$brithday_blace,
				$sex,
				$place,
				$social_status,
				$department,
				$isolation,
				$villag,
				$briefness,
				$becouse_come,
				$date_come,
				$studing,
				$identity,
				$identity_number,
				$identity_place,
				$laying,
				$brother,
				$work,
				$son,
				$daughter,
				$number_of_wife,
				$age_when_married,
				$sister,
				$know_our,
				$user,
				$view,
				$plasce_from_come,
				$Disability,
				$project,
				$id
			));
			}
			
			if ($stm->rowCount()) {
				echo '<script src="js/send_success.js"></script>';
				echo "<script>
                                  window.open('today_reception_data.php?num=5&id=1','_self')
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