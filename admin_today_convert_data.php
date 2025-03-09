<?php

include "include/header.php";
if (!isset($_SESSION['user'])) {

	echo "<script> window.open('logout.php','_self')</script>";
	// header("location:login.php");
}
if ($_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6) {
?>



	<div class="content">
		<div class="page-inner">


			<div class="row">
				<div class="col-md-12">
					<form action="" method="post">
						<div class="card">
							<div class="card-header">
								<div class="card-title">البيانات المدخلة لادارة الحالة</div>
								<?php
								include_once "include/query.php";
								include_once "include/table_actions.php";
								delete($con, 'mange_convert');
								?>
							</div>
							<div class="card-body">



								<?php
								$stmu = queryWithPagination($con, "mange_convert");
								// // find branch
								// $branch = $_SESSION['user']['branch_id'];

								// //end find branch 

								// $date = date('Y-1-1');
								// $user = $_SESSION['user']['id'];
								// $sql = "SELECT * FROM mange_convert where Date(date_data_come) >= ?   order by date_data_come desc";
								// $stmu = $con->prepare($sql);
								// $stmu->execute(array($date));

								// print_r($stmu);
								//عدد الحالات الكلية
								if ($stmu->rowCount() > 0) {
									$cnt = 1;



								?>
									<div class="table-responsive">
										<table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4">
											<center>
												<button id="export" class="btn btn-success">Export to excel</button>
											</center>
											<br>
											<thead>
												<tr>
													<th>Sno.</th>
													<th>الفرع</th>
													<th> جديد/عودة</th>
													<th>العمر</th>
													<th>الجنس</th>
													<th> رقم كود الحالة</th>
													<th> الشخص المسؤول عن التواصل</th>
													<th> رقم هاتف الشخص المسؤول عن التواصل</th>
													<th>الاحالة داخلية وارد </th>
													<th>جهة الاحالة داخلية وارد </th>
													<th>الاحالة داخلية صادرة</th>
													<th>جهة الاحالة داخلية صادرة</th>
													<th>الاحالة خارجية واردة</th>
													<th>جهة الاحالة خارجية وارد</th>
													<th>الاحالة خارجية صادر</th>
													<th>جهة الاحالة خارجية صادر</th>
													<th>اسم المشروع</th>
													<th>الدعم النفسي الاولي </th>

													<th>نوع العنف</th>
													<th>التاريخ </th>
													<th>تعديل</th>




												</tr>
											</thead>
											<tfoot>
												<th>Sno.</th>
												<th>الفرع</th>
												<th> جديد/عودة</th>
												<th>العمر</th>
												<th>الجنس</th>
												<th> رقم كود الحالة</th>
												<th> الشخص المسؤول عن التواصل</th>
												<th> رقم هاتف الشخص المسؤول عن التواصل</th>
												<th>الاحالة داخلية وارد </th>
												<th>جهة الاحالة داخلية وارد </th>
												<th>الاحالة داخلية صادرة</th>
												<th>جهة الاحالة داخلية صادرة</th>
												<th>الاحالة خارجية واردة</th>
												<th>جهة الاحالة خارجية وارد</th>
												<th>الاحالة خارجية صادر</th>
												<th>جهة الاحالة خارجية صادر</th>
												<th>اسم المشروع</th>
												<th>الدعم النفسي الاولي </th>

												<th>نوع العنف</th>
												<th>التاريخ </th>
												<th>تعديل</th>
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
																$branch = $branch['branch_name'];
																echo $branch;
																?>
															</td>
															<td><?php echo $row['type']; ?></td>
															<td>
																<?php
																$sql = "SELECT TIMESTAMPDIFF(YEAR,brithday,CURDATE()) as age ,sex FROM resption where code =?  and type=?    ";
																$stmu = $con->prepare($sql);
																$stmu->execute(array($row['code'], 'جديد'));
																$row_brithday_sex = $stmu->fetch();
																echo $row_brithday_sex['age']; ?>
															</td>
															<td><?php echo $row_brithday_sex['sex'] ?></td>
															<td><?php echo $row['code']; ?></td>
															<td><?php echo $row['person_name']; ?></td>
															<td><?php echo $row['person_phone']; ?></td>
															<td><?php echo $row['type_con_from']; ?></td>
															<td><?php echo $row['side_con_from']; ?></td>
															<td><?php echo $row['type_con_to']; ?></td>
															<td><?php echo $row['side_con_to']; ?></td>
															<td><?php echo $row['type_con_out']; ?></td>
															<td><?php echo $row['side_con_out']; ?></td>
															<td><?php echo $row['type_con_come_out']; ?></td>
															<td><?php echo $row['side_con_come_out']; ?></td>
															<td><?php echo $row['project_name']; ?></td>
															<td><?php echo $row['find']; ?></td>
															<td><?php echo $row['violense']; ?></td>


															<td><?php echo $row['date']; ?></td>
															<td>
																<a href="admin_convert_edit.php?action=edit&ids=<?php echo $row['id'] ?>">
																	<i class="fa fa-pencil"></i>تعديل
																</a>
															</td>

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