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
										<h2>الشكوى الحالية</h2>
										<div class="form-group">
											<label for="comment">كلام المريض</label>
											<textarea class="form-control" id="comment" name="sick" rows="5" required>

														</textarea>
										</div>
										<div class="form-group">
											<label for="comment">كلام الاهل</label>
											<textarea class="form-control" id="comment" name="facilities" rows="5" required>

														</textarea>
										</div>
										<h2>التاريخ المرضي الحالي</h2>
										<div class="form-group">
											<label for="comment">الفترة</label>
											<textarea class="form-control" id="comment" name="slide" rows="5" required>

														</textarea>
										</div>
										<div class="form-group">
											<label for="comment"> الاسباب</label>
											<textarea class="form-control" id="comment" name="note" rows="5" required>

														</textarea>
										</div>
										<div class="form-group">
											<label for="comment">العلاج</label>
											<textarea class="form-control" id="comment" name="note2" rows="5" required>

														</textarea>
										</div>

										<div class="form-group">
											<label for="comment">الاعراض</label>
											<textarea class="form-control" id="comment" name="note1" rows="5" required>

															</textarea>
										</div>
										<h2>التاريخ المرضي السابق</h2>
										<div class="form-group">
											<label for="comment">التاريخ النفسي</label>
											<textarea class="form-control" id="comment" name="psychological" rows="5" required>

															</textarea>
										</div>
										<div class="form-group">
											<label for="comment">التاريخ الطبي والجراحي</label>
											<textarea class="form-control" id="comment" name="mental" rows="5" required>

															</textarea>
										</div>
										<div class="form-group">
											<label for="comment">الانتحار والعدوانية</label>
											<textarea class="form-control" id="comment" name="organic" rows="5" required>

															</textarea>
										</div>
										<div class="form-group">
											<label for="comment">الإدمان</label>
											<textarea class="form-control" id="comment" name="operation" rows="5" required>

															</textarea>
										</div>
										<div class="form-group">
											<label for="comment">التاريخ الجنائي</label>
											<textarea class="form-control" id="comment" name="anothe" rows="5" required>

															</textarea>
										</div>



									</div>
									<div class="col-md-6 col-lg-4">

										<h2>التاريخ الاسري</h2>
										<div class="form-group form-floating-label">
											<label for="tokens">الاب</label>
											<select class="selectpicker form-control" name="father" id="tokens" data-live-search="true" required>
												<option value=""></option>
												<option>موجود</option>
												<option>متوفي</option>


											</select>
										</div>
										<div class="form-group form-floating-label">
											<label for="tokens">الام</label>
											<select class="selectpicker form-control" name="mather" id="tokens" data-live-search="true" required>
												<option value=""></option>
												<option>موجودة</option>
												<option>متوفية</option>

											</select>
										</div>
										<div class="form-group">
											<label for="comment">الاخوة والاخوات</label>
											<textarea class="form-control" id="comment" name="brothers" rows="5" required>

															</textarea>
										</div>
										<div class="form-group">
											<label for="comment"> وجود تاريخ مرضي في الاسرة</label>
											<textarea class="form-control" id="comment" name="famlt_sick" rows="5" required>
															</textarea>
										</div>
										<div class="form-group form-floating-label">
											<label for="tokens">الجو الاسري العام</label>
											<select class="selectpicker form-control" name="famly_live" id="tokens" data-live-search="true" required>
												<option value=""></option>
												<option>متوتر</option>
												<option>مضطرب</option>
												<option>هادئ</option>
												<option>مستقر</option>


											</select>
										</div>
										<div class="form-group form-floating-label">
											<label for="tokens">المستوى الاقتصادي</label>
											<select class="selectpicker form-control" name="famly_mony" id="tokens" data-live-search="true" required>
												<option value=""></option>
												<option>ضعيف</option>
												<option>مقبول</option>
												<option>متوسط</option>
												<option>جيد</option>
												<option>ممتاز</option>


											</select>
										</div>
										<h2>التاريخ الشخصي</h2>
										<div class="form-group">
											<label for="comment">ظروف الحمل و الولادة</label>
											<textarea class="form-control" id="comment" name="born" rows="5" required>
															</textarea>
										</div>
										<h3>مرحلة الطفولة النمو النفسي والحركي</h3>
										<div class="form-group form-floating-label">
											<label for="tokens"> العلاقة معا الاطفال الاخرين</label>
											<select class="selectpicker form-control" name="releshinship_childern" id="tokens" data-live-search="true" required>
												<option value=""></option>
												<option>جيدة</option>
												<option>لابأس</option>
												<option>ضعيفة</option>
												<option>لا توجد</option>



											</select>
										</div>
										<div class="form-group">
											<label for="comment">العلامات العصبية</label>
											<textarea class="form-control" id="tokens" name="resinsh" rows="5" required>
															</textarea>
										</div>
										<h3>مرحلة المراهقة النمو التفسي الحركي</h3>
										<div class="form-group form-floating-label">
											<label for="tokens"> العلاقة معاالاخرين</label>
											<select class="selectpicker form-control" name="releshinship_ather" id="tokens" data-live-search="true" required>
												<option value=""></option>
												<option>جيدة</option>
												<option>لابأس</option>
												<option>ضعيفة</option>
												<option>لا توجد</option>



											</select>
										</div>
										<div class="form-group">
											<label for="comment"> المشكلات السلوكية</label>
											<textarea class="form-control" id="comment" name="problem" rows="5" required>
															</textarea>
										</div>
										<h3>التاريخ الدراسي</h3>
										<div class="form-group form-floating-label">
											<label for="tokens">التحصيل الدراسي</label>
											<select class="selectpicker form-control" name="studing_level" id="tokens" data-live-search="true" required>
												<option value=""></option>
												<option>أمي</option>
												<option>ابتدائي</option>
												<option>أساسي</option>
												<option>ثانوي</option>
												<option>دبلوم معلمين</option>
												<option>دبلوم صحي</option>
												<option>جامعي</option>
												<option>دراسات عليا</option>



											</select>
										</div>
										<div class="form-group form-floating-label">
											<label for="tokens">العلاقة مع المدرسين والزملاء</label>
											<select class="selectpicker form-control" name="releshinship_student" id="tokens" data-live-search="true" required>
												<option value=""></option>
												<option>ممتازة</option>
												<option>جيدة</option>
												<option>لا بأس</option>
												<option>ضعيفة</option>
												<option>لا توجد</option>



											</select>
										</div>
										<div class="form-group">
											<label for="comment">المهنة</label>
											<textarea class="form-control" id="comment" name="work" rows="5" required>
															</textarea>
										</div>


									</div>
									<div class="col-md-6 col-lg-4">
										<h3>التاريخ الزواجي</h3>
										<div class="form-group form-floating-label">
											<label for="tokens">الزوجة</label>
											<select class="selectpicker form-control" name="wife" id="tokens" data-live-search="true" required>
												<option value=""></option>
												<option>عازب</option>
												<option>خاطب</option>
												<option>متزوج</option>
												<option>مطلق</option>
												<option>منفصل</option>
												<option>أرمل</option>
											</select>
										</div>
										<div class="form-group">
											<label for="comment">الأبناء</label>
											<textarea class="form-control" id="comment" name="children" rows="5" required>
															</textarea>
										</div>
										<div class="form-group">
											<label for="comment">العلاقة الزوجية</label>
											<textarea class="form-control" id="comment" name="releshinship_wife" rows="5" required>
															</textarea>
										</div>
										<h2>الشخصية قبل المرض</h2>

										<div class="form-group form-floating-label">
											<label for="tokens">المزاج</label>
											<select class="selectpicker form-control" name="agitator" id="tokens" data-live-search="true" required>
												<option value=""></option>
												<option>متزن</option>
												<option>متقلب</option>

											</select>
										</div>

										<div class="form-group form-floating-label">
											<label for="tokens">الأفكار</label>
											<select class="selectpicker form-control" name="ideas" id="tokens" data-live-search="true" required>
												<option value=""></option>
												<option>منطقية</option>
												<option>غير منطقي</option>

											</select>
										</div>

										<div class="form-group form-floating-label">
											<label for="tokens">الطباع</label>
											<select class="selectpicker form-control" name="copyright" id="tokens" data-live-search="true" required>
												<option value=""></option>
												<option>هادى</option>
												<option>عصبي</option>
												<option>انطوائي</option>

											</select>
										</div>

										<div class="form-group form-floating-label">
											<label for="tokens">العلاقات</label>
											<select class="selectpicker form-control" name="releshinship" id="tokens" data-live-search="true" required>
												<option value=""></option>
												<option>جيدة</option>
												<option>محدودة</option>

											</select>
										</div>

										<div class="form-group">
											<label for="comment"> الأنشطة والهوايات</label>
											<textarea class="form-control" id="comment" name="activity" rows="5" required>

															</textarea>
										</div>
										<div class="form-group">
											<label for="comment">العادات والإدمان</label>
											<textarea class="form-control" id="comment" name="adman" rows="5" required>

															</textarea>
										</div>

										<label class="form-label">المقاييس النفسية</label>
										<div class="selectgroup selectgroup-pills">
											<label class="selectgroup-item">
												<input type="checkbox" name="violense[]" value="اختبار بيك للاكتئاب" class="selectgroup-input">
												<span class="selectgroup-button">اختبار بيك للاكتئاب</span>
											</label>
											<label class="selectgroup-item">
												<input type="checkbox" name="violense[]" value="مقياس تايلور للقلق الصريح" class="selectgroup-input">
												<span class="selectgroup-button"> مقياس تايلور للقلق الصريح</span>
											</label>
											<label class="selectgroup-item">
												<input type="checkbox" name="violense[]" value="مقياس الهوس" class="selectgroup-input">
												<span class="selectgroup-button">مقياس الهوس</span>
											</label>
											<label class="selectgroup-item">
												<input type="checkbox" name="violense[]" value="اختبار المعتقدات الشخصية" class="selectgroup-input">
												<span class="selectgroup-button">اختبار المعتقدات الشخصية</span>
											</label>
											<label class="selectgroup-item">
												<input type="checkbox" name="violense[]" value="لاختبارات الستة" class="selectgroup-input">
												<span class="selectgroup-button">لاختبارات الستة</span>
											</label>
											<label class="selectgroup-item">
												<input type="checkbox" name="violense[]" value="قائمة الرهاب الاجتماعي" class="selectgroup-input">
												<span class="selectgroup-button">قائمة الرهاب الاجتماعي</span>
											</label>
											<label class="selectgroup-item">
												<input type="checkbox" name="violense[]" value="مخاوف الاطفال" class="selectgroup-input">
												<span class="selectgroup-button">مخاوف الاطفال</span>
											</label>
											<label class="selectgroup-item">
												<input type="checkbox" name="violense[]" value="مقياس القلق الاجتماعي" class="selectgroup-input">
												<span class="selectgroup-button">مقياس القلق الاجتماعي</span>
											</label>
											<label class="selectgroup-item">
												<input type="checkbox" name="violense[]" value="اختبار MMPI" class="selectgroup-input">
												<span class="selectgroup-button">اختبار MMPI</span>
											</label>
											<label class="selectgroup-item">
												<input type="checkbox" name="violense[]" value="اختبار هاملتون" class="selectgroup-input">
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
			$sql = "select * from psychiatrist_talk where  code=?  ";
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
				$query = "INSERT INTO  psychiatrist_talk ( branch,code,sick,facilities,slide,date,
				note,note1,
				note2,psychological,mental,organic,operation,anothe,father,mather,brothers,
				famlt_sick,famly_live,famly_mony,born,releshinship_childern,
				resinsh,releshinship_ather,problem,studing_level,releshinship_student,work,
				wife,children,releshinship_wife,releshinship,agitator,ideas,copyright,activity,adman,violense,sender_name,type)
				VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)
				 ";
				$stm = $con->prepare($query);
				$stm->execute(array(
					$branch, $code, $sick, $facilities, $slide, $date, $note, $note1, $note2,
					$psychological, $mental, $organic, $operation, $anothe, $father, $mather,
					$brothers, $famlt_sick, $famly_live, $famly_mony, $born, $releshinship_childern, $resinsh, $releshinship_ather, $problem, $studing_level, $releshinship_student,
					$work, $wife,
					$children, $releshinship_wife, $releshinship, $agitator, $ideas, $copyright, $activity, $adman, $violense, $user, 'جديد'
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