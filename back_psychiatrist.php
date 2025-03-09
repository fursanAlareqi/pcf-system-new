<?php

include "include/header.php";
if (!isset($_SESSION['user'])) {

	echo "<script> window.open('logout.php','_self')</script>";
	// header("location:login.php");
}
if ($_SESSION['user']['rule_id'] == 7 || $_SESSION['user']['rule_id'] == 15 || $_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6 || $_SESSION['user']['rule_id'] == 16 || $_SESSION['user']['rule_id'] == 18) {
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
											$sql = "select DISTINCT(code) from psychiatrist_talk where branch=? ";
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

						$sql = "SELECT * FROM psychiatrist_talk where code=?  ORDER BY `psychiatrist_talk`.`date` desc  ";
						$stmu = $con->prepare($sql);
						$stmu->execute(array($code));
						//عدد الحالات الكلية


						if ($stm->rowCount() > 0) {
							$row = $stmu->fetch();


					?>
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
															<input type="date" value="<?php echo $row['date']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="date">
														</div>
														<div class="form-group form-floating-label">

															<div class="form-group form-floating-label">
																<label>رقم الكود</label>
																<input type="number" value="<?php echo $row['code']; ?>" disabled class="form-control input-border-bottom" id="inputFloatingLabel" required>
																<input type="hidden" value="<?php echo $row['code']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="code" required>
															</div>
															<h2>الشكوى الحالية</h2>
															<div class="form-group">
																<label for="comment">كلام المريض</label>
																<textarea class="form-control" id="comment" name="sick" rows="5" required>
															<?php echo $row['sick']; ?>
														</textarea>
															</div>
															<div class="form-group">
																<label for="comment">كلام الاهل</label>
																<textarea class="form-control" id="comment" name="facilities" rows="5" required>
															<?php echo $row['facilities']; ?>
														</textarea>
															</div>
															<h2>التاريخ المرضي الحالي</h2>
															<div class="form-group">
																<label for="comment">الفترة</label>
																<textarea class="form-control" id="comment" name="slide" rows="5" required>
															<?php echo $row['slide']; ?>
														</textarea>
															</div>
															<div class="form-group">
																<label for="comment"> الاسباب</label>
																<textarea class="form-control" id="comment" name="note" rows="5" required>
															<?php echo $row['note']; ?>
														</textarea>
															</div>
															<div class="form-group">
																<label for="comment">العلاج</label>
																<textarea class="form-control" id="comment" name="note2" rows="5" required>
															<?php echo $row['note2']; ?>
														</textarea>
															</div>

															<div class="form-group">
																<label for="comment">الاعراض</label>
																<textarea class="form-control" id="comment" name="note1" rows="5" required>
																<?php echo $row['note1']; ?>
															</textarea>
															</div>
															<h2>التاريخ المرضي السابق</h2>
															<div class="form-group">
																<label for="comment">التاريخ النفسي</label>
																<textarea class="form-control" id="comment" name="psychological" rows="5" required>
																<?php echo $row['psychological']; ?>
															</textarea>
															</div>
															<div class="form-group">
																<label for="comment">التاريخ الطبي والجراحي</label>
																<textarea class="form-control" id="comment" name="mental" rows="5" required>
																<?php echo $row['mental']; ?>
															</textarea>
															</div>
															<div class="form-group">
																<label for="comment">الانتحار والعدوانية</label>
																<textarea class="form-control" id="comment" name="organic" rows="5" required>
																<?php echo $row['organic']; ?>
															</textarea>
															</div>
															<div class="form-group">
																<label for="comment">الإدمان</label>
																<textarea class="form-control" id="comment" name="operation" rows="5" required>
																<?php echo $row['operation']; ?>
															</textarea>
															</div>
															<div class="form-group">
																<label for="comment">التاريخ الجنائي</label>
																<textarea class="form-control" id="comment" name="anothe" rows="5" required>
																<?php echo $row['anothe']; ?>
															</textarea>
															</div>





														</div>







													</div>
													<div class="col-md-6 col-lg-4">
														<h2>التاريخ الاسري</h2>
														<div class="form-group form-floating-label">
															<label for="tokens">الاب</label>
															<select class="selectpicker form-control" name="father" id="tokens" data-live-search="true" required>
																<option value=""></option>
																<option <?php if ($row['father'] == "موجود") echo "selected" ?>>موجود</option>
																<option <?php if ($row['father'] == "متوفي") echo "selected" ?>>متوفي</option>
															</select>
														</div>
														<div class="form-group form-floating-label">
															<label for="tokens">الام</label>
															<select class="selectpicker form-control" name="mather" id="tokens" data-live-search="true" required>
																<option value=""></option>
																<option <?php if ($row['mather'] == "موجودة") echo "selected" ?>>موجودة</option>
																<option <?php if ($row['mather'] == "متوفية") echo "selected" ?>>متوفية</option>

															</select>
														</div>
														<div class="form-group">
															<label for="comment">الاخوة والاخوات</label>
															<textarea class="form-control" id="comment" name="brothers" rows="5" required>
																<?php echo $row['brothers']; ?>
															</textarea>
														</div>
														<div class="form-group">
															<label for="comment"> وجود تاريخ مرضي في الاسرة</label>
															<textarea class="form-control" id="comment" name="famlt_sick" rows="5" required>
																<?php echo $row['famlt_sick']; ?>
															</textarea>
														</div>
														<div class="form-group form-floating-label">
															<label for="tokens">الجو الاسري العام</label>
															<select class="selectpicker form-control" name="famly_live" id="tokens" data-live-search="true" required>
																<option value=""></option>
																<option <?php if ($row['famly_live'] == "متوتر") echo "selected" ?>>متوتر</option>
																<option <?php if ($row['famly_live'] == "مضطرب") echo "selected" ?>>مضطرب</option>
																<option <?php if ($row['famly_live'] == "هادئ") echo "selected" ?>>هادئ</option>
																<option <?php if ($row['famly_live'] == "مستقر") echo "selected" ?>>مستقر</option>


															</select>
														</div>
														<div class="form-group form-floating-label">
															<label for="tokens">المستوى الاقتصادي</label>
															<select class="selectpicker form-control" name="famly_mony" id="tokens" data-live-search="true" required>
																<option value=""></option>
																<option <?php if ($row['famly_mony'] == "ضعيف") echo "selected" ?>>ضعيف</option>
																<option <?php if ($row['famly_mony'] == "مقبول") echo "selected" ?>>مقبول</option>
																<option <?php if ($row['famly_mony'] == "متوسط") echo "selected" ?>>متوسط</option>
																<option <?php if ($row['famly_mony'] == "جيد") echo "selected" ?>>جيد</option>
																<option <?php if ($row['famly_mony'] == "ممتاز") echo "selected" ?>>ممتاز</option>


															</select>
														</div>
														<h2>التاريخ الشخصي</h2>
														<div class="form-group">
															<label for="comment">ظروف الحمل و الولادة</label>
															<textarea class="form-control" id="comment" name="born" rows="5" required>
																<?php echo $row['born']; ?>
															</textarea>
														</div>
														<h3>مرحلة الطفولة النمو النفسي والحركي</h3>
														<div class="form-group form-floating-label">
															<label for="tokens"> العلاقة معا الاطفال الاخرين</label>
															<select class="selectpicker form-control" name="releshinship_childern" id="tokens" data-live-search="true" required>
																<option value=""></option>
																<option <?php if ($row['releshinship_childern'] == "جيدة") echo "selected" ?>>جيدة</option>
																<option <?php if ($row['releshinship_childern'] == "لابأس") echo "selected" ?>>لابأس</option>
																<option <?php if ($row['releshinship_childern'] == "ضعيفة") echo "selected" ?>>ضعيفة</option>
																<option <?php if ($row['releshinship_childern'] == "لا توجد") echo "selected" ?>>لا توجد</option>



															</select>
														</div>
														<div class="form-group">
															<label for="comment">العلامات العصبية</label>
															<textarea class="form-control" id="tokens" value="" name="resinsh" rows="5" required>
																<?php echo $row['resinsh']; ?>
															</textarea>
														</div>
														<h3>مرحلة المراهقة النمو التفسي الحركي</h3>
														<div class="form-group form-floating-label">
															<label for="tokens"> العلاقة معاالاخرين</label>
															<select class="selectpicker form-control" name="releshinship_ather" id="tokens" data-live-search="true" required>
																<option value=""></option>
																<option <?php if ($row['releshinship_ather'] == "جيدة") echo "selected" ?>>جيدة</option>
																<option <?php if ($row['releshinship_ather'] == "لابأس") echo "selected" ?>>لابأس</option>
																<option <?php if ($row['releshinship_ather'] == "ضعيفة") echo "selected" ?>>ضعيفة</option>
																<option <?php if ($row['releshinship_ather'] == "لا توجد") echo "selected" ?>>لا توجد</option>



															</select>
														</div>
														<div class="form-group">
															<label for="comment"> المشكلات السلوكية</label>
															<textarea class="form-control" id="comment" name="problem" rows="5" required>
																<?php echo $row['problem']; ?>
															</textarea>
														</div>
														<h3>التاريخ الدراسي</h3>
														<div class="form-group form-floating-label">
															<label for="tokens">التحصيل الدراسي</label>
															<select class="selectpicker form-control" name="studing_level" id="tokens" data-live-search="true" required>
																<option value=""></option>
																<option <?php if ($row['studing_level'] == "أمي") echo "selected" ?>>أمي</option>
																<option <?php if ($row['studing_level'] == "ابتدائي") echo "selected" ?>>ابتدائي</option>
																<option <?php if ($row['studing_level'] == "أساسي") echo "selected" ?>>أساسي</option>
																<option <?php if ($row['studing_level'] == "ثانوي") echo "selected" ?>>ثانوي</option>
																<option <?php if ($row['studing_level'] == "دبلوم معلمين") echo "selected" ?>>دبلوم معلمين</option>
																<option <?php if ($row['studing_level'] == "دبلوم صحي") echo "selected" ?>>دبلوم صحي</option>
																<option <?php if ($row['studing_level'] == "جامعي") echo "selected" ?>>جامعي</option>
																<option <?php if ($row['studing_level'] == "دراسات عليا") echo "selected" ?>> دراسات عليا </option>



															</select>
														</div>
														<div class="form-group form-floating-label">
															<label for="tokens">العلاقة مع المدرسين والزملاء</label>
															<select class="selectpicker form-control" value="<?php echo $row['psychological']; ?>" name="releshinship_student" id="tokens" data-live-search="true" required>
																<option value=""></option>
																<option <?php if ($row['releshinship_student'] == "ممتازة") echo "selected" ?>>ممتازة</option>
																<option <?php if ($row['releshinship_student'] == "جيدة") echo "selected" ?>>جيدة</option>
																<option <?php if ($row['releshinship_student'] == "لا بأس") echo "selected" ?>>لا بأس</option>
																<option <?php if ($row['releshinship_student'] == "ضعيفة") echo "selected" ?>>ضعيفة</option>
																<option <?php if ($row['releshinship_student'] == "لا توجد") echo "selected" ?>>لا توجد</option>



															</select>
														</div>
														<div class="form-group">
															<label for="comment">المهنة</label>
															<textarea class="form-control" id="comment" name="work" rows="5" required>
																<?php echo $row['work']; ?>
															</textarea>
														</div>







													</div>
													<div class="col-md-6 col-lg-4">




														<h3>التاريخ الزواجي</h3>
														<div class="form-group form-floating-label">
															<label for="tokens">الزوجة</label>
															<select class="selectpicker form-control" value="<?php echo $row['wife']; ?>" name="wife" id="tokens" data-live-search="true" required>
																<option value=""></option>
																<option <?php if ($row['wife'] == "عازب") echo "selected" ?>>عازب</option>
																<option <?php if ($row['wife'] == "خاطب") echo "selected" ?>>خاطب</option>
																<option <?php if ($row['wife'] == "متزوج") echo "selected" ?>>متزوج</option>
																<option <?php if ($row['wife'] == "مطلق") echo "selected" ?>>مطلق</option>
																<option <?php if ($row['wife'] == "منفصل") echo "selected" ?>>منفصل</option>
																<option <?php if ($row['wife'] == "أرمل") echo "selected" ?>>أرمل</option>
															</select>
														</div>
														<div class="form-group">
															<label for="comment">الأبناء</label>
															<textarea class="form-control" id="comment" name="children" rows="5" required>
																<?php echo $row['children']; ?>
															</textarea>
														</div>
														<div class="form-group">
															<label for="comment">العلاقة الزوجية</label>
															<textarea class="form-control" id="comment" name="releshinship_wife" rows="5" required>
																<?php echo $row['releshinship_wife']; ?>
															</textarea>
														</div>
														<h2>الشخصية قبل المرض</h2>

														<div class="form-group form-floating-label">
															<label for="tokens">المزاج</label>
															<select class="selectpicker form-control" name="agitator" id="tokens" data-live-search="true" required>
																<option value=""></option>
																<option <?php if ($row['agitator'] == "متزن") echo "selected" ?>>متزن</option>
																<option <?php if ($row['agitator'] == "متقلب") echo "selected" ?>>متقلب</option>

															</select>
														</div>

														<div class="form-group form-floating-label">
															<label for="tokens">الأفكار</label>
															<select class="selectpicker form-control" name="ideas" id="tokens" data-live-search="true" required>
																<option value=""></option>
																<option <?php if ($row['ideas'] == "منطقية") echo "selected" ?>>منطقية</option>
																<option <?php if ($row['ideas'] == "غير منطقي") echo "selected" ?>>غير منطقي</option>

															</select>
														</div>

														<div class="form-group form-floating-label">
															<label for="tokens">الطباع</label>
															<select class="selectpicker form-control" name="copyright" id="tokens" data-live-search="true" required>
																<option value=""></option>
																<option <?php if ($row['copyright'] == "هادى") echo "selected" ?>>هادى</option>
																<option <?php if ($row['copyright'] == "عصبي") echo "selected" ?>>عصبي</option>
																<option <?php if ($row['copyright'] == "انطوائي") echo "selected" ?>>انطوائي</option>

															</select>
														</div>

														<div class="form-group form-floating-label">
															<label for="tokens">العلاقات</label>
															<select class="selectpicker form-control" name="releshinship" id="tokens" data-live-search="true" required>
																<option value=""></option>
																<option <?php if ($row['releshinship'] == "جيدة") echo "selected" ?>>جيدة</option>
																<option <?php if ($row['releshinship'] == "محدودة") echo "selected" ?>>محدودة</option>

															</select>
														</div>

														<div class="form-group">
															<label for="comment"> الأنشطة والهوايات</label>
															<textarea class="form-control" id="comment" name="activity" rows="5" required>
																<?php echo $row['activity']; ?>
															</textarea>
														</div>
														<div class="form-group">
															<label for="comment">العادات والإدمان</label>
															<textarea class="form-control" id="comment" name="adman" rows="5" required>
																<?php echo $row['adman']; ?>
															</textarea>
														</div>

														<div class="form-group">
															<label>هدف الجلسة</label>
															<textarea class="form-control" name="session_goal" rows="5">
																<?php echo $row['session_goal']; ?>
															</textarea>
														</div>

														<div class="form-group">
															<label>التدخل العلاجي</label>
															<textarea class="form-control" name="therapeutic_intervention" rows="5">
																<?php echo $row['therapeutic_intervention']; ?>
															</textarea>
														</div>

														<div class="form-group">
															<label>الواجب المنزلي </label>
															<textarea class="form-control" name="homework" rows="5">
																<?php echo $row['homework']; ?>
															</textarea>
														</div>

														<div class="form-group">
															<label> نسبة التحسن</label>
															<input type="text" class="form-control" name="improvement_percentage" value="<?php echo $row['improvement_percentage']; ?>">

														</div>


														<label class="form-label">المقاييس النفسية</label>
														<div class="selectgroup selectgroup-pills">
															<?php $violense_explode = explode(",", $row['violense']); ?>
															<label class="selectgroup-item">
																<input type="checkbox" <?php if (in_array("اختبار بيك للاكتئاب", $violense_explode)) echo "checked"; ?> name="violense[]" value="اختبار بيك للاكتئاب" class="selectgroup-input">
																<span class="selectgroup-button">اختبار بيك للاكتئاب</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" <?php if (in_array("مقياس تايلور للقلق الصريح", $violense_explode)) echo "checked"; ?> name="violense[]" value="مقياس تايلور للقلق الصريح" class="selectgroup-input">
																<span class="selectgroup-button"> مقياس تايلور للقلق الصريح</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" <?php if (in_array("مقياس الهوس", $violense_explode)) echo "checked"; ?> name="violense[]" value="مقياس الهوس" class="selectgroup-input">
																<span class="selectgroup-button">مقياس الهوس</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" <?php if (in_array("اختبار المعتقدات الشخصية", $violense_explode)) echo "checked"; ?> name="violense[]" value="اختبار المعتقدات الشخصية" class="selectgroup-input">
																<span class="selectgroup-button">اختبار المعتقدات الشخصية</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" <?php if (in_array("لاختبارات الستة", $violense_explode)) echo "checked"; ?> name="violense[]" value="لاختبارات الستة" class="selectgroup-input">
																<span class="selectgroup-button">لاختبارات الستة</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" <?php if (in_array("قائمة الرهاب الاجتماعي", $violense_explode)) echo "checked"; ?> name="violense[]" value="قائمة الرهاب الاجتماعي" class="selectgroup-input">
																<span class="selectgroup-button">قائمة الرهاب الاجتماعي</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" <?php if (in_array("مخاوف الاطفال", $violense_explode)) echo "checked"; ?> name="violense[]" value="مخاوف الاطفال" class="selectgroup-input">
																<span class="selectgroup-button">مخاوف الاطفال</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" <?php if (in_array("مقياس القلق الاجتماعي", $violense_explode)) echo "checked"; ?> name="violense[]" value="مقياس القلق الاجتماعي" class="selectgroup-input">
																<span class="selectgroup-button">مقياس القلق الاجتماعي</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" <?php if (in_array("اختبار MMPI", $violense_explode)) echo "checked"; ?> name="violense[]" value="اختبار MMPI" class="selectgroup-input">
																<span class="selectgroup-button">اختبار MMPI</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" <?php if (in_array("اختبار هاملتون", $violense_explode)) echo "checked"; ?> name="violense[]" value="اختبار هاملتون" class="selectgroup-input">
																<span class="selectgroup-button">اختبار هاملتون</span>
															</label>
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
			$today = date('Y-m-d');
			$date = test_input($_POST["date"]);
			$sick = test_input($_POST['sick']);
			$facilities = test_input($_POST["facilities"]);
			$slide = test_input($_POST["slide"]);
			$note = test_input($_POST["note"]);
			$note1 = test_input($_POST["note1"]);

			$note2 = test_input($_POST["note2"]);
			$psychological = test_input($_POST["psychological"]);
			$mental = test_input($_POST["mental"]);
			$organic = test_input($_POST["organic"]);
			$operation = test_input($_POST["operation"]);
			$anothe = test_input($_POST["anothe"]);
			$father = test_input($_POST["father"]);
			$mather = test_input($_POST["mather"]);
			$brothers = test_input($_POST["brothers"]);
			$famlt_sick = test_input($_POST["famlt_sick"]);
			$famly_live = test_input($_POST["famly_live"]);
			$famly_mony = test_input($_POST["famly_mony"]);
			$born = test_input($_POST["born"]);
			$releshinship_childern = test_input($_POST["releshinship_childern"]);
			$resinsh = test_input($_POST["resinsh"]);
			$releshinship_ather = test_input($_POST["releshinship_ather"]);
			$problem = test_input($_POST["problem"]);
			$studing_level = test_input($_POST["studing_level"]);
			$releshinship_student = test_input($_POST["releshinship_student"]);
			$work = test_input($_POST["work"]);
			$wife = test_input($_POST["wife"]);
			$children = test_input($_POST["children"]);
			$releshinship_wife = test_input($_POST["releshinship_wife"]);
			$releshinship = test_input($_POST["releshinship"]);
			$agitator = test_input($_POST["agitator"]);
			$ideas = test_input($_POST["ideas"]);
			$copyright = test_input($_POST["copyright"]);
			$activity = test_input($_POST["activity"]);
			$adman = test_input($_POST["adman"]);
			if (empty($_POST["violense"])) {
				$violense = "";
			} else {
				$violense = $_POST["violense"];
				$violense = implode(',', $violense);
			}

			$session_goal = test_input($_POST["session_goal"]);
			$therapeutic_intervention = test_input($_POST["therapeutic_intervention"]);
			$homework = test_input($_POST["homework"]);
			$improvement_percentage = test_input($_POST["improvement_percentage"]);

			$user = $_SESSION['user']['id'];
			// find branch
			$branch = $_SESSION['user']['branch_id'];
			//end find branch 










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
				$sql = "select * from psychiatrist_talk where  code=? and date=? ";
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
					$query = "INSERT INTO  psychiatrist_talk ( branch,code,sick,facilities,slide,date,
				note,note1,
				note2,psychological,mental,organic,operation,anothe,father,mather,brothers,
				famlt_sick,famly_live,famly_mony,born,releshinship_childern,
				resinsh,releshinship_ather,problem,studing_level,releshinship_student,work,
				wife,children,releshinship_wife,releshinship,agitator,ideas,copyright,activity,adman,violense,sender_name,type,session_goal,therapeutic_intervention,homework,improvement_percentage)
				VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)
				 ";
					$stm = $con->prepare($query);
					$stm->execute(array(
						$branch,
						$code,
						$sick,
						$facilities,
						$slide,
						$date,
						$note,
						$note1,
						$note2,
						$psychological,
						$mental,
						$organic,
						$operation,
						$anothe,
						$father,
						$mather,
						$brothers,
						$famlt_sick,
						$famly_live,
						$famly_mony,
						$born,
						$releshinship_childern,
						$resinsh,
						$releshinship_ather,
						$problem,
						$studing_level,
						$releshinship_student,
						$work,
						$wife,
						$children,
						$releshinship_wife,
						$releshinship,
						$agitator,
						$ideas,
						$copyright,
						$activity,
						$adman,
						$violense,
						$user,
						'عودة',
						$session_goal,
						$therapeutic_intervention,
						$homework,
						$improvement_percentage
					));
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