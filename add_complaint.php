<?php

include "include/header.php";
if (!isset($_SESSION['user'])) {

	echo "<script> window.open('logout.php','_self')</script>";
	// header("location:login.php");
}
if (
	$_SESSION['user']['rule_id'] == 16 || $_SESSION['user']['rule_id'] == 26 || $_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6
) {
?>



	<div class="content">
		<div class="page-inner">


			<div class="row">

				<div class="col-md-12">
					<form action="" method="post">
						<div class="card">
							<div class="card-header">
								<div class="card-title"> شكوى جديدة</div>
							</div>
							<div class="card-body">
								<div class="row">


									<div class="col-md-6 col-lg-4">


										<div class="form-group form-floating-label">
											<label>تاريخ الشكوى</label>
											<input type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="date" required>
										</div>

										<div class="form-group form-floating-label">
											<label>رقم الشكوى</label>

											<?php
											$sql = "select max(complaint_number) complaint_number  from complaints ";
											$stmu = $con->prepare($sql);
											$stmu->execute();
											$row = 1;
											if ($stmu->rowCount() > 0) {
												$row = $stmu->fetch();
											}

											?>
											<input type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="complaint_number" value="<?php echo $row["complaint_number"] + 1 ?>" disabled required>

										</div>


										<div class="form-group form-floating-label">

											<label>المركز</label>
											<select class="selectpicker form-control" multiple name="center[]" data-live-search="true">
												<option value=""></option>

												<option>مركز الدعم النفسي -تعز</option>
												<option>مركز الدعم النفسي - إب </option>
											</select>
										</div>

										<div class="form-group form-floating-label">

											<label for="tokens">نوع الشكوى</label>
											<select class="selectpicker form-control" multiple name="type[]" id="tokens" data-live-search="true">
												<option value=""></option>

												<option>قضايا المستفيد</option>
												<option>شكوى كيدية</option>
												<option>قضايا الموظفين</option>
												<option>إستفسار</option>
												<option>تحديد موعد</option>
											</select>
										</div>


									</div>
									<div class="col-md-6 col-lg-4">

										<div class="form-group form-floating-label">

											<label>المرفق الصحي</label>
											<select class="selectpicker form-control" multiple name="health_facility[]" data-live-search="true">
												<option value=""></option>

												<option>مستشفى الامراض النفسية والعصبية – عدن</option>
												<option>مستشفى الثورة – قسم الأمراض النفسية والعصبية – صنعاء</option>
											</select>
										</div>

										<div class="form-group form-floating-label">
											<label>اسم مقدم الشكوى</label>
											<input type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="name" required>
										</div>


										<div class="form-group form-floating-label">
											<label>رقم تلفون مقدم الشكوى</label>
											<input type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="phone_number" required>
										</div>



									</div>
									<div class="col-md-6 col-lg-4">


										<div class="form-group form-floating-label">
											<label>محتوى الشكوى</label>
											<textarea type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="content" required></textarea>
										</div>


										<div class="form-group form-floating-label">
											<label>الاجراء الذي تم</label>
											<input type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="action" required>
										</div>

										<div class="form-group form-floating-label">
											<label> المعالجة التي تمت للشكوى</label>
											<input type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="process" required>
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


		$name = test_input($_POST["name"]);
		$date = test_input($_POST["date"]);



		$sql = "select max(complaint_number) complaint_number  from complaints ";
		$stmu = $con->prepare($sql);
		$stmu->execute();

		$row = 1;

		if ($stmu->rowCount() > 0) {
			$row = $stmu->fetch();
		}

		$complaint_number = $row["complaint_number"] + 1;

		$phone_number = test_input($_POST["phone_number"]);

		$content = test_input($_POST["content"]);

		$action = test_input($_POST["action"]);

		$process = test_input($_POST["process"]);



		if (empty($_POST["center"])) {
			$center = "";
		} else {
			$center = $_POST["center"];
			$center = implode(',', $center);
		}

		if (empty($_POST["type"])) {
			$type = "";
		} else {
			$type = $_POST["type"];
			$type = implode(',', $type);
		}

		if (empty($_POST["health_facility"])) {
			$health_facility = "";
		} else {
			$health_facility = $_POST["health_facility"];
			$health_facility = implode(',', $health_facility);
		}









		$user = $_SESSION['user']['id'];
		// find branch
		$branch = $_SESSION['user']['branch_id'];


		if (empty($date)) {


			echo '<script>swal("يرجاء ادخال  تاريخ دخول الشكوى ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
		} elseif (empty($complaint_number)) {


			echo '<script>swal("يرجاء ادخال رقم الشكوى", "لم يتم رفع البيانات", {
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
			$sql = "select * from complaints where  complaint_number=?";
			$stm = $con->prepare($sql);
			$stm->execute(array($complaint_number));
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
				$query = "INSERT INTO complaints(
				name,date,complaint_number,phone_number,content,action,process,center,type,health_facility,sender_name)
					values (?,?,?,?,?,?,?,?,?,?,?) ";
				$stm = $con->prepare($query);
				$stm->execute(array(
					$name, $date, $complaint_number, $phone_number, $content, $action, $process, $center, $type, $health_facility, $user
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