<?php

include "include/header.php";
if (!isset($_SESSION['user'])) {

	echo "<script> window.open('logout.php','_self')</script>";
	// header("location:login.php");
}
if ($_SESSION['user']['rule_id'] == 11 || $_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6) {


	$returnPharmcyId = $_GET['returnPharmcyId'];

	if ($returnPharmcyId) {
		$sql = "select * from return_pharmacy where id=?";
		$stm = $con->prepare($sql);
		$stm->execute(array($returnPharmcyId));
		if ($stm->rowCount() > 0) {
			$record = array_values($stm->fetchAll())[0];
		}
	}
	$code = $record['code'] ?? $_POST['code'];


?>



	<div class="content">
		<div class="page-inner">



			<div class="card">
				<div class="card-body">
					<form action="" method="post">
						<div class="row row-demo-grid">
							<div class="form-group form-floating-label">
								<label for="tokens">رقم الكود</label>
								<select class="selectpicker form-control" name="code" id="tokens" data-live-search="true">
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
						</div>
						<input class="btn btn-success" type="submit" name="search" value="search">
					</form>
				</div>
			</div>

			<div class="row">
				<?php

				if ($code) {
				?>

					<div class="col-md-12">
						<form action="" method="post">
							<div class="card">
								<div class="card-header">

									<?php if ($returnPharmcyId != null) { ?>
										<div class="card-title"> تعديل مرتجع علاج</div>
									<?php } else { ?>

										<div class="card-title"> اضافة مرتجع علاج</div>
									<?php } ?>

								</div>
								<div class="card-body">
									<div class="row">


										<div class="col-md-6 col-lg-4">



											<div class="form-group form-floating-label">
												<label>الكود</label>
												<input id="inputFloatingLabel" type="text" name="code" value="<?php echo $_POST['code']; ?>" class="form-control input-border-bottom" required readonly>
											</div>

											<div class="form-group form-floating-label">
												<label>رقم استمارة الصرف المرتجعة</label>

												<input id="inputFloatingLabel" type="text" name="number" value="<?php echo ($record['number'] ?? null) ?>" class="form-control input-border-bottom" required>
											</div>

											<div class="form-group form-floating-label">

												<label for="tokens">الصنف</label>




												<select class="selectpicker form-control" name="item_id" id="tokens" data-live-search="true" required
													onchange="{let option=$(this).find(':selected'); $('.quantity').val('');$('.quantity').attr('placeholder', 'ملاحظة كمية العلاج ب ال '+option.data('type'));}">

													<option value=""></option>
													<?php

													//			
													$branch = $_SESSION['user']['branch_id'];
													$sql = "select * from pharmacy where branch=?  ORDER BY `id` DESC";
													$stm = $con->prepare($sql);
													$stm->execute(array($branch));

													if ($stm->rowCount() > 0) {
														foreach ($stm->fetchAll() as $row) { ?>
															<option
																data-type="<?php echo $row['type'] == 'old' ? 'شريط' : 'حبة'; ?>" value="<?php echo $row['id']; ?>">exporter:<?php echo $row['exporter']; ?> & <?php echo $row['name']; ?> </option>

													<?php
														}
													}
													?>

												</select>
											</div>
										</div>

										<div class="col-md-6 col-lg-4">

											<div class="form-group form-floating-label">
												<label>تاريخ المرتجع</label>
												<input id="inputFloatingLabel" type="date" value="<?php echo $record['date'] ?? null; ?>" name="date" class="form-control input-border-bottom" required>

											</div>

											<div class="form-group form-floating-label">
												<label>الكمية</label>
												<input id="inputFloatingLabel" type="number" value="<?php echo $record['quantity'] ?? null; ?>" name="quantity" class="form-control input-border-bottom quantity" required>

											</div>



										</div>
										<div class="col-md-6 col-lg-4">

											<div class="form-group form-floating-label">
												<label for="tokens">السبب</label>
												<textarea class="form-control" name="reason" rows="5"><?php echo $record['reason'] ?? null;  ?></textarea>
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

				<?php } ?>


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

		$code = trim($_POST['code']);
		$number = trim($_POST['number']);
		$item_id = trim($_POST['item_id']);

		$date = trim($_POST['date']);
		$quantity = trim($_POST['quantity']);

		$reason = trim($_POST['reason']);

		$branch = $_SESSION['user']['branch_id'];

		$user = $_SESSION['user']['id'];

		// find branch
		//end find branch 
		//التحقق ان اسم المنتج موجود وليس ارقام

		if (empty($user)) {


			echo '<script>swal("يرجاء اعادة تسجيل الدخول   ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
		} elseif (empty($date)) {


			echo '<script>swal("يرجاء ادخال  تاريخ ادخال البيانات ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
		} elseif (empty($item_id)) {


			echo '<script>swal("dn["يرجاء ادخال  العلاج ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
		} elseif (empty($quantity)) {


			echo '<script>swal("يرجاء ادخال كمية العلاج ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
		} elseif (!is_numeric($quantity)) {


			echo '<script>swal("كمية العلاج  يجب ان يكون اراقم", "لم يتم رفع البيانات", {
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

			if ($returnPharmcyId) {

				$query = "UPDATE return_pharmacy SET code=?,number=?,item_id=?,date=?,quantity=?,reason=?,sender_name=?,branch=? WHERE id=?";
				$stm = $con->prepare($query);
				$stm->execute(array($code, $number, $item_id, $date, $quantity, $reason, $user, $branch, $returnPharmcyId));
				if ($stm->rowCount()) {
					echo '<script src="js/send_success.js"></script>';
				} else {
					print_r($stm->errorInfo());
					echo '<script src="js/send_error.js"></script>';
				}
			} else {

				$query = "INSERT INTO return_pharmacy(code,number,item_id,date,quantity,reason,sender_name,branch)
					values (?,?,?,?,?,?,?,?) ";
				$stm = $con->prepare($query);
				$stm->execute(array($code, $number, $item_id, $date, $quantity, $reason, $user, $branch));
				if ($stm->rowCount()) {
					//update residual
					$sql = "select * from pharmacy where id=?   ";
					$stmq = $con->prepare($sql);
					$stmq->execute(array($item_id));
					$pharmacy_info = $stmq->fetch();
					$residual_pharmacy = $pharmacy_info['residual'];

					if ($returnPharmcyId) {
						$residual = ($residual_pharmacy - $record['quantity']) + $quantity;
					} else {

						$residual = ($residual_pharmacy + $quantity);
					}
					$query = "UPDATE  pharmacy set residual=? where id=?  ";
					$stm = $con->prepare($query);
					$stm->execute(array($residual, $item_id));

					$item = $pharmacy_info['name'];

					include "print_return_pharmcy.php";

					echo '<script> window.print() </script>';
					// print_r($stm->errorInfo());

					// echo '<script src="js/send_success.js"></script>';
				} else {
					// print_r($stm->errorInfo());

					echo '<script src="js/send_error.js"></script>';
				}
			}
		}
	}
} else {

	echo "<script> window.open('index.php','_self')</script>";
}
?>