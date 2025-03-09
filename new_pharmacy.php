<?php

include "include/header.php";
if (!isset($_SESSION['user'])) {

	echo "<script> window.open('logout.php','_self')</script>";
	// header("location:login.php");
}
if ($_SESSION['user']['rule_id'] == 11 || $_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6) {
?>



	<div class="content">
		<div class="page-inner">


			<div class="row">
				<div class="col-md-12">
					<form action="" method="post">
						<div class="card">
							<div class="card-header">
								<div class="card-title"> اضافة علاج</div>
							</div>
							<div class="card-body">
								<div class="row">

									<div class="col-md-6 col-lg-4">
										<div class="form-group form-floating-label">
											<label>تاريخ ادخال البيانات</label>
											<input id="inputFloatingLabel" type="date" name="date" class="form-control input-border-bottom" required>

										</div>


										<div class="form-group form-floating-label">
											<label>تاريخ الفاتورة</label>
											<input id="inputFloatingLabel" type="date" name="voucher_date" class="form-control input-border-bottom" required>
										</div>

										<div class="form-group form-floating-label">
											<label for="tokens">العلاج</label>
											<select class="selectpicker form-control" name="name" id="tokens" data-live-search="true" required>
												<option value=""></option>
												<?php
												$branch = $_SESSION['user']['branch_id'];
												$sql = "select * from scientific_pharmacy_name where branch =?  ORDER BY `scientific_pharmacy_name`.`name` ASC  ";
												$stm = $con->prepare($sql);
												$stm->execute(array($branch));
												if ($stm->rowCount() > 0) {
													foreach ($stm->fetchAll() as $row) {
												?>
														<option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
												<?php
													}
												}
												?>
											</select>
										</div>

										<div class="form-group form-floating-label">
											<label for="tokens">نوع العبوة</label>
											<select class="selectpicker form-control" name="package_type" id="tokens" data-live-search="true" required>
												<option value=""></option>
												<option value="1">باكت</option>
												<option value="2">شريط</option>
												<option value="3">حبة</option>
												<option value="4">أمبولة</option>
												<option value="5">شراب</option>
												<option value="6">قطرة</option>
												<option value="7">علبه</option>
											</select>
										</div>


									</div>

									<div class="col-md-6 col-lg-4">

										<div class="form-group form-floating-label">
											<label>رقم الفاتورة</label>
											<input id="inputFloatingLabel" type="text" name="voucher_number" class="form-control input-border-bottom" required>

										</div>
										<div class="form-group form-floating-label">
											<label>الكمية</label>
											<input id="inputFloatingLabel" type="number" name="quantity" placeholder="ملاحظة الكمية بالحبة" class="form-control input-border-bottom" required>

										</div>


										<div class="form-group form-floating-label">
											<label>الاسم العلمي</label>
											<input id="inputFloatingLabel" type="text" name="scientific_name" class="form-control input-border-bottom" required>

										</div>


									</div>

									<div class="col-md-6 col-lg-4">
										<div class="form-group form-floating-label">
											<label for="tokens">المصدر</label>

											<input class="form-control" list="exporter-options" name="exporter" placeholder="Type or select an option">



											<!-- <select class="selectpicker form-control" name="exporter" id="tokens" data-live-search="true" required> -->

											<datalist id="exporter-options">
												<!-- <option value=""></option> -->

												<?php if ($_SESSION['user']['branch_id'] == 6) { ?>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option>وزارة الصحة</option>
													<option>مكتب الصحة</option>
													<option>فاعل خير</option>
													<option> الصيدليه المتعاقد معها</option>
													<option>شريك محلي</option>
												<?php } ?>
												<?php if ($_SESSION['user']['branch_id'] == 5) { ?>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
												<?php } ?>
												<?php if ($_SESSION['user']['branch_id'] == 8) { ?>
													<option value="مجاني">مجاني</option>
													<option value="المؤسسة">المؤسسة</option>
												<?php } ?>
											</datalist>
											<!-- </select> -->

										</div>

										<div class="form-group form-floating-label">
											<label>تاريخ التوريد</label>
											<input id="inputFloatingLabel" type="date" name="date_of_production" class="form-control input-border-bottom" required>

										</div>

										<div class="form-group form-floating-label">
											<label>تاريخ الانتهاء</label>
											<input id="inputFloatingLabel" type="date" name="expiration_date" class="form-control input-border-bottom" required>

										</div>

										<div class="form-group form-floating-label">
											<label>الاسم التجاري</label>
											<input id="inputFloatingLabel" type="text" name="commercial_name" class="form-control input-border-bottom" required>

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

				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title"> بيانات العلاجات</h4>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4">
									<center>
										<button id="export" class="btn btn-success">Export to excel</button>
										<br>
									</center>
									<thead>
										<tr>
											<th>ID</th>
											<th>اسم العلاج</th>
											<th>تاريخ الانتهاء</th>
											<th>تاريخ التوريد</th>
											<th>تاريخ الفاتورة</th>
											<th>رقم الفاتوره</th>
											<th>الاسم العلمي</th>
											<th>الاسم التجاري</th>
											<th>نوع العبوة</th>
											<th>الكمية</th>
											<th>المتبقي</th>
											<th>حبة / شريط</th>
											<th>المصدر</th>
											<th>تاريخ ادخال الصنف</th>
											<th> تعديل المصدر </th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>ID</th>
											<th>اسم العلاج</th>
											<th>تاريخ الانتهاء</th>
											<th>تاريخ التوريد</th>
											<th>تاريخ الفاتورة</th>
											<th>رقم الفاتوره</th>
											<th>الاسم العلمي</th>
											<th>الاسم التجاري</th>
											<th>نوع العبوة</th>
											<th>الكمية</th>
											<th>المتبقي</th>
											<th>حبة / شريط</th>
											<th>المصدر</th>
											<th>تاريخ ادخال الصنف</th>
											<th> تعديل المصدر </th>

										</tr>
									</tfoot>
									<tbody>
										<?php
										$branch = $_SESSION['user']['branch_id'];
										$sql = "select * from pharmacy where branch=? and date > ? ";
										$stm = $con->prepare($sql);
										$stm->execute(array($branch, "2022-12-31"));
										if ($stm->rowCount() > 0) {
											foreach ($stm->fetchAll() as $row) {
										?>
												<tr>
													<td><?php echo $row['id'] ?></td>
													<td><?php echo $row['name'] ?></td>
													<td><?php echo $row['expiration_date'] ?></td>
													<td><?php echo $row['production_date'] ?></td>
													<td><?php echo $row['voucher_date'] ?></td>
													<td><?php echo $row['voucher_number'] ?></td>
													<td><?php echo $row['scientific_name'] ?></td>
													<td><?php echo $row['commercial_name'] ?></td>
													<td><?php
														if ($row['package_type'])
															echo "باكت";
														elseif ($row['package_type'] == 2)
															echo "شريط";
														elseif ($row['package_type'] == 3)
															echo "حبة";
														elseif ($row['package_type'] == 4)
															echo "أمبولة";
														elseif ($row['package_type'] == 5)
															echo "شراب";
														elseif ($row['package_type'] == 6)
															echo "قطرة";
														elseif ($row['package_type'] == 7)
															echo "علبه";
														?></td>
													<td><?php echo $row['quantity'] ?></td>
													<td><?php echo $row['residual'] ?></td>

													<td><?php echo $row['type'] == 'old' ? 'شريط' : 'حبة' ?></td>

													<td><?php echo $row['exporter'] ?></td>
													<td><?php echo $row['date'] ?></td>
													<td>
														<a href="pharmacy_exporter_edit.php?action=edit&ids=<?php echo $row['id'] ?>">
															<i class="fa fa-pencil"></i>تعديل
														</a>
													</td>
												</tr>
										<?php }
										}

										?>

									</tbody>
								</table>
							</div>
						</div>
					</div>
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

		$name = trim($_POST['name']);
		$date = trim($_POST['date']);
		$date_of_production = trim($_POST['date_of_production']);
		$expiration_date = trim($_POST['expiration_date']);
		$quantity = trim($_POST['quantity']);
		$exporter = trim($_POST['exporter']);

		$voucher_number = trim($_POST['voucher_number']);
		$voucher_date = trim($_POST['voucher_date']);
		$scientific_name = trim($_POST['scientific_name']);
		$commercial_name = trim($_POST['commercial_name']);
		$package_type = trim($_POST['package_type']);
		$type = 'new';


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
		} elseif ($date < "2023-01-01") {


			echo '<script>swal(" لايمكن ادخال البياتات لسنه تم اغلاقها ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
		} elseif (empty($name)) {


			echo '<script>swal("يرجاء ادخال اسم العلاج ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
		} elseif (is_numeric($name)) {


			echo '<script>swal("اسم العلاج لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
		} elseif (empty($expiration_date)) {


			echo '<script>swal("يرجاء ادخال تاريخ انتاج العلاج ", "لم يتم رفع البيانات", {
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
		} elseif (empty($exporter)) {


			echo '<script>swal("يرجاء اختيار مصدر  العلاج ", "لم يتم رفع البيانات", {
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
			$sql = "select * from pharmacy where  name=? and date=? and branch=?";
			$stm = $con->prepare($sql);
			$stm->execute(array($name, $date, $branch));
			if ($stm->rowCount()) {

				echo '<script>swal("لقد تم ادخال   هذا العلاج  في النظام من قبل اليوم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} else {
				$query = "INSERT INTO pharmacy(branch,name,date,date_of_production,expiration_date,quantity,residual,sender_name,exporter,voucher_number,voucher_date,scientific_name,commercial_name,package_type,type)
					values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ";
				$stm = $con->prepare($query);
				$stm->execute(array($branch, $name, $date, $date_of_production, $expiration_date, $quantity, $quantity, $user, $exporter, $voucher_number, $voucher_date, $scientific_name, $commercial_name, $package_type, $type));

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