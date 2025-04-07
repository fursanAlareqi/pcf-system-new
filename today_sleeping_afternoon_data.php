<?php

include "include/header.php";
if (!isset($_SESSION['user'])) {

	echo "<script> window.open('logout.php','_self')</script>";
	// header("location:login.php");
}
if ($_SESSION['user']['rule_id'] == 8 || $_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6) {
?>

	<?php
	include_once "include/query.php";
	include_once "include/table_actions.php";
	delete($con, 'sleeping_afternoon');
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
								$stmu = queryWithPagination($con, "sleeping_afternoon");
								// find branch
								// $branch = $_SESSION['user']['branch_id'];

								// //end find branch 

								// $today = date('Y-m-d');
								// $user = $_SESSION['user']['id'];
								// $sql = "SELECT * FROM sleeping_afternoon where sender_name =? and date_data_come=?     ";
								// $stmu = $con->prepare($sql);
								// $stmu->execute(array($user, $today));
								//عدد الحالات الكلية
								if ($stmu->rowCount() > 0) {



								?>
									<div class="table-responsive">
										<table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4">
											<thead>
												<tr>
													<th>جديد/عودة</th>
													<th>الفرع</th>
													<th>رقم الكود</th>
													<th>العمر</th>
													<th>الجنس</th>
													<th>ناريخ تسجيل الحالة</th>
													<th>تاريخ خروج الحالة</th>
													<th>متابعة الحالة التمريضية</th>
													<th>قياس الضغط</th>
													<th>قياس النبض</th>
													<th>قياس الحرارة</th>
													<th>قياس التنفس</th>
													<th>السوائل الداخلية</th>
													<th>السوائل الخارجية</th>
													<th>اسم العلاج</th>
													<th>برنامج اعادة التاهيل</th>
													<th>تعديل</th>





												</tr>
											</thead>
											<tfoot>
												<th>جديد/عودة</th>
												<th>الفرع</th>
												<th>رقم الكود</th>
												<th>العمر</th>
												<th>الجنس</th>
												<th>ناريخ تسجيل الحالة</th>
												<th>تاريخ خروج الحالة</th>
												<th>متابعة الحالة التمريضية</th>
												<th>قياس الضغط</th>
												<th>قياس النبض</th>
												<th>قياس الحرارة</th>
												<th>قياس التنفس</th>
												<th>السوائل الداخلية</th>
												<th>السوائل الخارجية</th>
												<th>اسم العلاج</th>
												<th>برنامج اعادة التاهيل</th>
												<th>تعديل</th>
											</tfoot>
											<tbody>
												<?php {
													foreach ($stmu->fetchAll() as $row) {

												?>

														<tr>
															<td><?php echo $row['type']; ?></td>
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
															<td><?php echo $row['code']; ?></td>
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
															<td><?php echo $row['date']; ?></td>
															<td><?php echo $row['exit_date']; ?></td>
															<td><?php echo $row['visites']; ?></td>
															<td><?php echo $row['medicin_m']; ?></td>
															<td><?php echo $row['hart_m']; ?></td>
															<td><?php echo $row['heat_m']; ?></td>
															<td><?php echo $row['breathe_m']; ?></td>
															<td><?php echo $row['inside_m']; ?></td>
															<td><?php echo $row['outside_m']; ?></td>
															<td><?php echo $row['medical']; ?></td>
															<td><?php echo $row['program']; ?></td>


															<td>
																<a href="sleeping_afternoon_edit.php?action=edit&ids=<?php echo $row['id'] ?>">
																	<i class="fa fa-pencil"></i>تعديل
																</a>
															</td>

															<?php
															deleteAction($row['id']) ?>



														</tr>
											<?php


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