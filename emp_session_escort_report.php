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
								<div class="card-title"> التقرير اليومي الخاص بالمرافقين</div>
							</div>
							<div class="card-body">
								<div class="row">


									<div class="col-md-6 col-lg-4">

										<div class="form-group form-floating-label">
											<label>تاريخ التقرير</label>
											<input type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="date" required>
										</div>
										<h1>ذكور</h1>
										<br>
										<h3>مابين(1-17) سنه</h3>
										<div class="form-group form-floating-label">
											<label>جديد</label>
											<input type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="m_n_rebort_1_17" required>
										</div>
										<div class="form-group form-floating-label">
											<label>عودة</label>
											<input type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="m_b_rebort_1_17" required>
										</div>
										<h3>مافوق 18 سنه</h3>
										<div class="form-group form-floating-label">
											<label>جديد</label>
											<input type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="m_n_rebort_18" required>
										</div>
										<div class="form-group form-floating-label">
											<label>عودة</label>
											<input type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="m_b_rebort_18" required>
										</div>

									</div>



									<div class="col-md-6 col-lg-4">
										<br>
										<br>
										<br>
										<br>
										<br>
										<h1>اناث</h1>
										<br>
										<h3>مابين(1-17) سنه</h3>
										<div class="form-group form-floating-label">
											<label>جديد</label>
											<input type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="f_n_rebort_1_17" required>
										</div>
										<div class="form-group form-floating-label">
											<label>عودة</label>
											<input type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="f_b_rebort_1_17" required>
										</div>
										<h3>مافوق 18 سنه</h3>
										<div class="form-group form-floating-label">
											<label>جديد</label>
											<input type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="f_n_rebort_18" required>
										</div>
										<div class="form-group form-floating-label">
											<label>عودة</label>
											<input type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="f_b_rebort_18" required>
										</div>
									</div>
									<div class="col-md-6 col-lg-4">

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


		// $today= date('Y-m-d');
		$date = test_input($_POST["date"]);
		$m_n_rebort_1_17 = $_POST["m_n_rebort_1_17"];
		$m_b_rebort_1_17 = $_POST["m_b_rebort_1_17"];
		$m_n_rebort_18 = $_POST["m_n_rebort_18"];
		$m_b_rebort_18 = $_POST["m_b_rebort_18"];
		$f_n_rebort_1_17 = $_POST["f_n_rebort_1_17"];
		$f_b_rebort_1_17 = $_POST["f_b_rebort_1_17"];
		$f_n_rebort_18 = $_POST["f_n_rebort_18"];
		$f_b_rebort_18 = $_POST["f_b_rebort_18"];

		$m_n_rebort_1_17_selectd = 0;
		$m_b_rebort_1_17_selectd = 0;
		$m_n_rebort_18_selectd = 0;
		$m_b_rebort_18_selectd = 0;
		$f_n_rebort_1_17_selectd = 0;
		$f_b_rebort_1_17_selectd = 0;
		$f_n_rebort_18_selectd = 0;
		$f_b_rebort_18_selectd = 0;


		$user = $_SESSION['user']['id'];
		// find branch
		$branch = $_SESSION['user']['branch_id'];


		//end find branch 




		//التحقق ان اسم المنتج موجود وليس ارقام

		$error = 0;
		if (empty($user)) {


			echo '<script>swal("يرجاء اعادة تسجيل الدخول   ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
			$error == 1;
		} elseif (empty($date)) {


			echo '<script>swal("يرجاء ادخال  تاريخ دخول الحالة ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
			$error = 1;
		}
		$sql = "select escort_code from session where  date=? and sender_name=?";
		$stmu = $con->prepare($sql);
		$stmu->execute(array($date, $user));
		if ($stmu->rowCount()) {
			foreach ($stmu->fetchAll() as $row) {
				$all_code[] = $row['escort_code'];
			}
			$all_code = implode(',', $all_code);
			$all_code_explode = explode(",", $all_code);


			foreach ($all_code_explode as $code) {

				$sql = "select * from escort where code=? and  sex=? and type=? and TIMESTAMPDIFF(YEAR,brithday,CURDATE()) between 1 and 17 and date=?";
				$stm = $con->prepare($sql);
				$stm->execute(array($code, 'ذكر', 'جديد', $date));
				if ($stm->rowCount()) {
					$m_n_rebort_1_17_selectd = $m_n_rebort_1_17_selectd + $stm->rowCount();
					foreach ($stm->fetchAll() as $row) {
						echo $row['code'] . "   ";
					}
				}

				$sql = "select * from escort where code=? and  sex=? and type=? and TIMESTAMPDIFF(YEAR,brithday,CURDATE()) between 1 and 17 and date=?";
				$stm = $con->prepare($sql);
				$stm->execute(array($code, 'ذكر', 'عودة', $date));
				if ($stm->rowCount()) {
					$m_b_rebort_1_17_selectd = $m_b_rebort_1_17_selectd + $stm->rowCount();
				}

				$sql = "select * from escort where code=? and  sex=? and type=? and TIMESTAMPDIFF(YEAR,brithday,CURDATE()) >= 18 and date=?";
				$stm = $con->prepare($sql);
				$stm->execute(array($code, 'ذكر', 'جديد', $date));
				if ($stm->rowCount()) {
					$m_n_rebort_18_selectd = $m_n_rebort_18_selectd + $stm->rowCount();
					foreach ($stm->fetchAll() as $row) {
						echo $row['code'] . "   ";
					}
				}


				$sql = "select * from escort where code=? and  sex=? and type=? and TIMESTAMPDIFF(YEAR,brithday,CURDATE()) >= 18 and date=?";
				$stm = $con->prepare($sql);
				$stm->execute(array($code, 'ذكر', 'عودة', $date));
				if ($stm->rowCount()) {
					$m_b_rebort_18_selectd = $m_b_rebort_18_selectd + $stm->rowCount();
				}



				// مطابقه تقرير الاناث

				$sql = "select * from escort where code=? and sex=? and type=? and TIMESTAMPDIFF(YEAR,brithday,CURDATE()) between 1 and 17 and date=?";
				$stm = $con->prepare($sql);
				$stm->execute(array($code, 'انثى', 'جديد', $date));
				if ($stm->rowCount()) {
					$f_n_rebort_1_17_selectd = $f_n_rebort_1_17_selectd + $stm->rowCount();
				}



				$sql = "select * from escort where code=? and  sex=? and type=? and TIMESTAMPDIFF(YEAR,brithday,CURDATE()) between 1 and 17 and date=?";
				$stm = $con->prepare($sql);
				$stm->execute(array($code, 'انثى', 'عودة', $date));
				if ($stm->rowCount()) {
					$f_b_rebort_1_17_selectd = $f_b_rebort_1_17_selectd + $stm->rowCount();
				}

				$sql = "select * from escort where  code=? and sex=? and type=? and TIMESTAMPDIFF(YEAR,brithday,CURDATE()) >= 18 and date=?";
				$stm = $con->prepare($sql);
				$stm->execute(array($code, 'انثى', 'جديد', $date));
				if ($stm->rowCount()) {
					$f_n_rebort_18_selectd = $f_n_rebort_18_selectd + $stm->rowCount();
				}

				$sql = "select * from escort where code=? and  sex=? and type=? and TIMESTAMPDIFF(YEAR,brithday,CURDATE()) >= 18 and date=?";
				$stm = $con->prepare($sql);
				$stm->execute(array($code, 'انثى', 'عودة', $date));
				if ($stm->rowCount()) {
					$f_b_rebort_18_selectd = $f_b_rebort_18_selectd + $stm->rowCount();
				}
			}
		}


		if ($m_n_rebort_1_17_selectd != $m_n_rebort_1_17) {
			echo '<script>swal("  خانت الذكور مابين (1-17) جديد غير مطابقه ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
		} elseif ($m_b_rebort_1_17_selectd != $m_b_rebort_1_17) {
			echo '<script>swal("  خانت الذكور مابين (1-17) عودة غير مطابقه ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
		} elseif ($m_n_rebort_18_selectd != $m_n_rebort_18) {
			echo '<script>swal("  خانت الذكور  مافوق (18) جديد غير مطابقه ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
		} elseif ($m_b_rebort_18_selectd != $m_b_rebort_18) {
			echo '<script>swal("  خانت الذكور  مافوق (18) عودة غير مطابقه ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
		} elseif ($f_n_rebort_1_17_selectd != $f_n_rebort_1_17) {

			echo '<script>swal("  خانت انثى مابين (1-17) جديد غير مطابقه ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
		} elseif ($f_b_rebort_1_17_selectd != $f_b_rebort_1_17) {
			echo '<script>swal("  خانت انثى مابين (1-17) عودة غير مطابقه ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
		} elseif ($f_n_rebort_18_selectd != $f_n_rebort_18) {
			echo '<script>swal("  خانت انثى  مافوق (18) جديد غير مطابقه ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
		} elseif ($f_b_rebort_18_selectd != $f_b_rebort_18) {
			echo '<script>swal("  خانت انثى مافوق (18) عودة غير مطابقه ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
		} else {
			$type = 'جلسات التوعية مرافقين';
			$sql = "select * from emp_day_rebort where  sender_name=? and date=? and type=? ";
			$stm = $con->prepare($sql);
			$stm->execute(array($user, $date, $type));
			if ($stm->rowCount()) {

				echo '<script>swal("لقد تم ادخال هذاالتقرير في النظام من قبل", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} else {

				$query = "INSERT INTO emp_day_rebort(branch,date,sender_name,m_n_rebort_1_17,m_b_rebort_1_17,m_n_rebort_18,m_b_rebort_18,
						f_n_rebort_1_17,f_b_rebort_1_17,f_n_rebort_18,f_b_rebort_18,type)
						values (?,?,?,?,?,?,?,?,?,?,?,?) ";
				$stm = $con->prepare($query);
				$stm->execute(array(
					$branch, $date, $user, $m_n_rebort_1_17, $m_b_rebort_1_17, $m_n_rebort_18, $m_b_rebort_18,
					$f_n_rebort_1_17, $f_b_rebort_1_17, $f_n_rebort_18, $f_b_rebort_18, $type
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