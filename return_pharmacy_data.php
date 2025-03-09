<?php

include "include/header.php";
if (!isset($_SESSION['user'])) {

	echo "<script> window.open('logout.php','_self')</script>";
	// header("location:login.php");
}
if ($_SESSION['user']['rule_id'] == 11 || $_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6) {

?>

	<?php
	include_once "include/query.php";

	?>



	<div class="content">
		<div class="page-inner">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title"> بيانات المرتجعات</h4>
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
											<th>التاريخ</th>
											<?php
											if ($_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6) {
												echo '<th>اسم المستخدم</th>';
											} ?>
											<th>الصنف</th>
											<th>الكمية بالحبة</th>
											<th>شريط / حبة</th>
											<th>كود الحالة</th>
											<th>رقم استمارة المرتجع</th>
											<th>السبب</th>
											<th>تعديل</th>

										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>ID</th>
											<th>التاريخ</th>

											<?php
											if ($_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6) {
												echo '<th>اسم المستخدم</th>';
											} ?>

											<th>الصنف</th>
											<th>الكمية بالحبة</th>
											<th>شريط / حبة</th>
											<th>كود الحالة</th>
											<th>رقم استمارة المرتجع</th>
											<th>السبب</th>
											<th>تعديل</th>

										</tr>
									</tfoot>
									<tbody>
										<?php
										// ! ($_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6)
										$stm = queryWithPagination(
											$con,
											"return_pharmacy",
											false,
											function ($sql) {
												// echo $sql;
												if (strpos($sql, 'where')) {
													$where = substr($sql, strpos($sql, 'where'));
												}
												$sql = 'SELECT * FROM  return_pharmacy cross join user  on user.id=return_pharmacy.sender_name ' . $where ?? " " . '  order by id desc  LIMIT :limit OFFSET :offset';

												return $sql;
											}
										);

										if ($stm->rowCount() > 0) {
											foreach ($stm->fetchAll() as $row) {

										?>

												<tr>
													<td><?php echo $row['id'] ?></td>
													<td><?php echo $row['date'] ?></td>

													<?php
													if ($_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6) {
														echo '<td>' . $row['name'] . '</td>';
													} ?>

													<td>
														<?php
														$sql = "select name,type from pharmacy where id=? ";
														$stm = $con->prepare($sql);
														$stm->execute(array($row['item_id']));
														$phar = $stm->fetch();
														$name = $phar['name'];

														echo $name;
														?>
													</td>
													<td><?php echo $row['quantity'] ?></td>
													<td><?php echo $phar['type'] == 'old' ? 'شريط' : 'حبة' ?></td>
													<td><?php echo $row['code'] ?></td>
													<td><?php echo $row['number'] ?></td>
													<td><?php echo $row['reason'] ?></td>
													<td>
														<a href="return_pharmacy.php?returnPharmcyId=<?php echo $row['id'] ?>">
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

			$query = "INSERT INTO return_pharmacy(code,number,item_id,date,quantity,reason,sender_name,branch)
					values (?,?,?,?,?,?,?,?) ";
			$stm = $con->prepare($query);
			$stm->execute(array($code, $number, $item_id, $date, $quantity, $reason, $user, $branch));
			if ($stm->rowCount()) {
				echo '<script src="js/send_success.js"></script>';
			} else {
				print_r($stm->errorInfo());

				echo '<script src="js/send_error.js"></script>';
			}
		}
	}
} else {

	echo "<script> window.open('index.php','_self')</script>";
}
?>