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

												<label for="tokens"> اكواد الحالات</label>
												<select class="selectpicker form-control" multiple name="code1[]" id="tokens" data-live-search="true">
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

												<label for="tokens"> اكواد المرافقين</label>
												<select class="selectpicker form-control" multiple name="escort_code[]" id="tokens" data-live-search="true">
													<option value=""></option>
													<?php
													// find branch
													$branch = $_SESSION['user']['branch_id'];

													//end find branch 
													$sql = "select DISTINCT(code) from escort where branch=? ";
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
												<label>اسم المشروع</label>
												<input type="text" value="مركز الدعم النفسي" class="form-control input-border-bottom" id="inputFloatingLabel" name="project" required>
											</div>
											<div class="form-group form-floating-label">
												<label>نوع التوعية</label>
												<input type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="awarness" required>
											</div>
											<div class="form-group form-floating-label">
												<label>موضوع التوعية</label>
												<input type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="theme" required>
											</div>
											<div class="form-group form-floating-label">
												<label>المحافظه</label>
												<input type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="province" required>
											</div>
											<div class="form-group form-floating-label">
												<label>عدد الحظور</label>
												<input type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="code" required>
											</div>
											<div class="form-group form-floating-label">
												<label>القائم بالتوعية</label>
												<input type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="list" required>
											</div>
											<div class="form-group form-floating-label">
												<label>الموقع</label>
												<input type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="loction" required>
											</div>
											<div class="form-group form-floating-label">
												<label>عدد الجلسات</label>
												<input type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="number_session" required>
											</div>






										</div>










									</div>
									<div class="col-md-6 col-lg-4">
										<div class="form-group form-floating-label">
											<label>عدد المستفيدين من المقيمين النساء</label>
											<input type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="femal" required>
										</div>
										<div class="form-group form-floating-label">
											<label>عدد المستفيدين من المقيمين الفتيات</label>
											<input type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="girl" required>
										</div>
										<div class="form-group form-floating-label">
											<label>عدد المستفيدين من المقيمين الرجال</label>
											<input type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="mene" required>
										</div>
										<div class="form-group form-floating-label">
											<label>عدد المستفيدين من المقيمين الفتيان</label>
											<input type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="boy" required>
										</div>
										<div class="form-group form-floating-label">
											<label>عدد المستفيدين من النازحين النساء</label>
											<input type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="s_femal" required>
										</div>
										<div class="form-group form-floating-label">
											<label>عدد المستفيدين من النازحين الفتيات</label>
											<input type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="s_girl" required>
										</div>
										<div class="form-group form-floating-label">
											<label>عدد المستفيدين من النازحين الرجال</label>
											<input type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="s_mene" required>
										</div>
										<div class="form-group form-floating-label">
											<label>عدد المستفيدين من النازحين الفتيان</label>
											<input type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="s_boy" required>
										</div>
										<div class="form-group form-floating-label">
											<label>عدد المستفيدين من لاجئين النساء</label>
											<input type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="l_femal" required>
										</div>
										<div class="form-group form-floating-label">
											<label>عدد المستفيدين من لاجئين الفتيات</label>
											<input type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="l_girl" required>
										</div>
										<div class="form-group form-floating-label">
											<label>عدد المستفيدين من لاجئين الرجال</label>
											<input type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="l_mene" required>
										</div>
										<div class="form-group form-floating-label">
											<label>عدد المستفيدين من لاجئين الفتيان</label>
											<input type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="l_boy" required>
										</div>





									</div>
									<div class="col-md-6 col-lg-4">
										<div class="form-group">
											<label for="comment">موضوع التوعية</label>
											<textarea class="form-control" id="comment" name="broj" rows="5" required>
													</textarea>
										</div>
										<div class="form-group form-floating-label">
											<label>المحور الاول</label>
											<input type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="first_axis" required>
										</div>
										<div class="form-group form-floating-label">
											<label>المحور الثاني</label>
											<input type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="secnd_axis" required>
										</div>
										<div class="form-group form-floating-label">
											<label>المحور الثالث</label>
											<input type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="third_axis" required>
										</div>
										<div class="form-group form-floating-label">
											<label>المحور الرابع</label>
											<input type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="forth_axis" required>
										</div>
										<div class="form-group form-floating-label">
											<label>المحور الخامس </label>
											<input type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="fifth_axis" required>
										</div>
										<div class="form-group">
											<label for="comment">موضوع........</label>
											<textarea class="form-control" id="comment" name="axis_project" rows="5">
													</textarea>
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

		$today = date('Y-m-d');
		$date = $_POST['date'];
		$error_1 = false;
		$error_2 = false;

		if (!empty($_POST["code1"])) {
			$code1 = $_POST["code1"];
			$code1 = implode(',', $code1);

			$code_explode = explode(",", $code1);
			foreach ($code_explode as $check_code) {

				$sql = "select type from resption where  code=?  and date=? ";
				$stmpc = $con->prepare($sql);
				$stmpc->execute(array($check_code, $date));

				if ($stmpc->rowCount() == 0) {

					$error_1 = true;
				}
			}
		} else {
			$code1 = '';
		}
		if (!empty($_POST["escort_code"])) {
			$date = $_POST['date'];
			$escort_code = $_POST["escort_code"];
			$escort_code = implode(',', $escort_code);

			$code_explode = explode(",", $escort_code);
			foreach ($code_explode as $check_code) {
				$sql = "select * from escort where  code=?  and date=? ";
				$stmps = $con->prepare($sql);
				$stmps->execute(array($check_code, $date));

				if ($stmps->rowCount() == 0) {

					$error_2 = true;
				}
			}
		} else {
			$escort_code = '';
		}



		$project = test_input($_POST["project"]);
		$awarness = test_input($_POST["awarness"]);
		$theme = test_input($_POST["theme"]);
		$province = test_input($_POST["province"]);
		$code = test_input($_POST["code"]);
		$list = test_input($_POST["list"]);
		$loction = test_input($_POST["loction"]);
		//المقيم
		$femal = test_input($_POST["femal"]);
		$girl = test_input($_POST["girl"]);
		$mene = test_input($_POST["mene"]);
		$boy = test_input($_POST["boy"]);
		//النازح
		$s_femal = test_input($_POST["s_femal"]);
		$s_girl = test_input($_POST["s_girl"]);
		$s_mene = test_input($_POST["s_mene"]);
		$s_boy = test_input($_POST["s_boy"]);
		//لاجئ
		$l_femal = test_input($_POST["l_femal"]);
		$l_girl = test_input($_POST["l_girl"]);
		$l_mene = test_input($_POST["l_mene"]);
		$l_boy = test_input($_POST["l_boy"]);
		$broj = test_input($_POST["broj"]);
		$first_axis = test_input($_POST["first_axis"]);
		$secnd_axis = test_input($_POST["secnd_axis"]);
		$third_axis = test_input($_POST["third_axis"]);
		$forth_axis = test_input($_POST["forth_axis"]);
		$fifth_axis = test_input($_POST["fifth_axis"]);
		$axis_project = test_input($_POST["axis_project"]);
		$number_session = test_input($_POST["number_session"]);





		$user = $_SESSION['user']['id'];
		// find branch
		$branch = $_SESSION['user']['branch_id'];


		//end find branch 



		//التحقق ان اسم المنتج موجود وليس ارقام









		if ($error_1 == true) {
			echo '<script>swal("لم يتم تسجيل احدى الحالات  اليوم في الاستقبال", "لم يتم رفع البيانات", {
    					icon : "warning",
    					buttons: {        			
    						confirm: {
    							className : "btn btn-warning"
    						}
    					},
    				});</script>';
		} elseif ($error_2 == true) {
			echo '<script>swal("لم يتم تسجيل احدى المرافقين  اليوم  ", "لم يتم رفع البيانات", {
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
		} elseif (empty($code1) && empty($escort_code)) {


			echo '<script>swal("يرجاء ادخال كود للحاله او للمرافق", "لم يتم رفع البيانات", {
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
			$sql = "select * from session where  code1=? and date=? ";
			$stm = $con->prepare($sql);
			$stm->execute(array($code1, $date));
			if ($stm->rowCount()) {

				echo '<script>swal("لقد تم ادخال بيانات لنفس هذا الجلسة في النظام من قبل", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} else {
				$query = "INSERT INTO session(branch,code1,project,awarness,
					theme,date,province,code,list,loction,femal,girl,mene,boy,s_femal,s_girl,s_mene,s_boy,l_femal,l_girl,l_mene,l_boy,
					broj,first_axis,secnd_axis,third_axis,forth_axis,fifth_axis,axis_project,sender_name
					,number_session,escort_code)
					values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ";
				$stm = $con->prepare($query);
				$stm->execute(array(
					$branch, $code1, $project, $awarness, $theme, $date, $province, $code, $list, $loction, $femal, $girl, $mene, $boy, $s_femal, $s_girl, $s_mene, $s_boy, $l_femal, $l_girl, $l_mene, $l_boy,
					$broj, $first_axis, $secnd_axis, $third_axis, $forth_axis, $fifth_axis, $axis_project, $user, $number_session, $escort_code
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