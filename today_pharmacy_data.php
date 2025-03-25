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
	include_once "include/table_actions.php";
	delete($con, 'pure_pharmacy');
	?>


	<div class="content">
		<div class="page-inner">


			<div class="row">
				<div class="col-md-12">
					<form action="" method="post">
						<div class="card">
							<div class="card-header">
								<div class="card-title">البيانات المدخلة لليوم</div>

							</div>
							<div class="card-body">



								<?php
								$stmu = queryWithPagination($con, "pure_pharmacy", false, function ($sql) {
									if (strpos($sql, 'where')) {
										$where = substr($sql, strpos($sql, 'where'));
									}
									if ($where) {
										$where .= ($where) . ' and record_type="new" ';
									} else {
										$where .=  ' where record_type="new" ';
									}
									$sql = "SELECT * FROM pure_pharmacy" . $where  . '  order by id desc  LIMIT :limit OFFSET :offset';
									return $sql;
								}, 'record_type="new"');
								// // find branch
								// $branch = $_SESSION['user']['branch_id'];

								// //end find branch 
								// $date = date('Y-m-d');
								// $today = date('Y-m-d');
								// $user = $_SESSION['user']['id'];
								// $sql = "SELECT * FROM pure_pharmacy where sender_name =? and branch=?  and date_data_come=?    ";
								// $stmu = $con->prepare($sql);
								// $stmu->execute(array($user, $branch, $date));
								//عدد الحالات الكلية
								if ($stmu->rowCount() > 0) {
									$cnt = 1;



								?>
									<div class="table-responsive">
										<table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4">
											<thead>
												<tr>
													<th>Sno.</th>
													<th class="hidden-phone">الفرع</th>
													<th>عودة/جديدة</th>`
													<th>العمر</th>
													<th>الجنس</th>
													<th> رقم كود الحالة</th>
													<th>اسم العلاج </th>
													<th>الكمية </th>
													<th>التاريخ </th>





												</tr>
											</thead>
											<tfoot>
												<th>Sno.</th>
												<th class="hidden-phone">الفرع</th>
												<th>عودة/جديدة</th>`
												<th>العمر</th>
												<th>الجنس</th>
												<th> رقم كود الحالة</th>
												<th>اسم العلاج </th>
												<th>الكمية </th>
												<th>التاريخ </th>

											</tfoot>
											<tbody>
												<?php {
													foreach ($stmu->fetchAll() as $row) {

												?>

														<tr>
															<td><?php echo $cnt; ?></td>
															<td>
																<?php
																$sql = "select * from branch where  id=? ";
																$stm = $con->prepare($sql);
																$stm->execute(array($row['branch']));
																$branch = $stm->fetch();
																$branch_name = $branch['branch_name'];
																echo $branch_name;
																?>
															</td>
															<td><?php echo $row['type']; ?></td>
															<td>
																<?php
																$sql = "SELECT 
    YEAR(CURDATE()) - YEAR(brithday) - 
    (DATE_FORMAT(CURDATE(), '%m-%d') < DATE_FORMAT(brithday, '%m-%d')) AS age ,sex
FROM resption
WHERE code = ? AND type = ?    ";
																$stmu = $con->prepare($sql);
																$stmu->execute(array($row['code'], 'جديد'));
																$row_brithday_sex = $stmu->fetch();
																echo $row_brithday_sex['age']; ?>
															</td>
															<td><?php echo $row_brithday_sex['sex'] ?></td>
															<td><?php echo $row['code']; ?></td>
															<td>
																<?php
																$pharmacy_name_explode = explode(",", $row['name']);
																foreach ($pharmacy_name_explode as $medical_id) {

																	$sql = "select * from pharmacy where  id=? ";
																	$stm = $con->prepare($sql);
																	$stm->execute(array($medical_id));
																	$medical_name = $stm->fetch();
																	echo $medical_name['name'] . '<br>';
																}



																?>
															</td>
															<td>
																<?php
																$quantity_explode = explode(",", $row['quantity']);
																foreach ($quantity_explode as $quantity) {
																	echo $quantity . '<br>';
																}
																?>
															</td>

															<td><?php echo $row['date']; ?></td>


															<?php
															deleteAction($row['id']) ?>


														</tr>

											<?php
														$cnt = $cnt + 1;
													}
												}
											} else {
												echo ' <div class="alert alert-danger">NO Row</div>';
											}


											?>


											</tbody>
										</table>
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

} else {
	echo "<script> window.open('index.php','_self')</script>";
}
?>