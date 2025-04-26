<?php

include "include/header.php";
if (!isset($_SESSION['user'])) {

	echo "<script> window.open('logout.php','_self')</script>";
	// header("location:login.php");

}if($_SESSION['user']['rule_id']==2 ||$_SESSION['user']['rule_id']==6){
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
												
														<div class="form-group form-floating-label">
															<label>رقم الكود</label>
															<input type="number" value="<?php echo $row['code']; ?>" disabled class="form-control input-border-bottom" id="inputFloatingLabel" required>
															<input type="hidden" value="<?php echo $row['code']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="code" required>
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
														<label>الاسم الرباعي</label>
														<input type="text" value="<?php echo $row['name']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="name" required>
													</div>
												</div>



												<div class="col-md-6 col-lg-4">
                                                    
													<div class="form-group form-floating-label">
														<label>تاريخ الميلاد</label>
														<input type="date" value="<?php echo $row['brithday']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="brithday" required>
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
	if (isset($_POST['save']) ) {
		function test_input($data)
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		$sex = test_input($_POST['sex']);
		$name = test_input($_POST["name"]);
		$brithday = test_input($_POST["brithday"]);
		$code = test_input($_POST["code"]);




		
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
		} elseif (!$_SESSION['user']['rule_id'] == 2 || !$_SESSION['user']['rule_id'] == 6) {


			echo '<script>swal("يرجاء ادخال اسم الطبيب ", "لم يتم رفع البيانات", {
				icon : "warning",
				buttons: {        			
					confirm: {
						className : "btn btn-warning"
					}
				},
			});</script>';
		} 
		elseif (empty($name)) {


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
		}   elseif (empty($brithday)) {


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
			

			$query = "UPDATE  sana set sex=?,name=?,
				  brithday=? Where code=?
				 ";
			$stm = $con->prepare($query);
			$stm->execute(array(
				$sex,
				$name,
				$brithday,
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