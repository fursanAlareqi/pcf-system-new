<?php

include "include/header.php";
if (!isset($_SESSION['user'])) {

	echo "<script> window.open('logout.php','_self')</script>";
	// header("location:login.php");
}
if ($_SESSION['user']['rule_id'] == 7 || $_SESSION['user']['rule_id'] == 15 || $_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6 || $_SESSION['user']['rule_id'] == 16 || $_SESSION['user']['rule_id'] == 18) {
?>


	<?php
	include_once "include/query.php";
	include_once "include/table_actions.php";
	delete($con, 'group_sessions');
	?>

	<div class="content">
		<div class="page-inner">


			<div class="row">
				<div class="col-md-12">
					<form action="" method="post">
						<div class="card">
							<div class="card-header">
								<div class="card-title">البيانات المدخلة لليوم جلسات جماعية</div>

							</div>
							<div class="card-body">



								<?php
								$stmu = queryWithPagination($con, "group_sessions");
								// // find branch
								// $branch = $_SESSION['user']['branch_id'];

								// //end find branch 

								// $date = date('Y-m-d');
								// $user = $_SESSION['user']['id'];
								// $sql = "SELECT * FROM group_sessions where sender_name =? and date_data_come=?     ";
								// $stmu = $con->prepare($sql);
								// $stmu->execute(array($user, $date));
								//عدد الحالات الكلية
								if ($stmu->rowCount() > 0) {



								?>
									<div class="table-responsive">
										<table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4">
											<thead>
												<tr>

													<th>الفرع</th>

													<th> رقم اكواد الحالات</th>
													<th> نوع المشكلة</th>
													<th>اسم الجلسة</th>
													<th> نوع الجلسة</th>
													<th> المواضيع التي تم مناقشتها</th>
													<th>عدد الحضور</th>
													<th> الاساليب العلاجية المستخدمة</th>
													<th> المهام والواجبات</th>



													<th>التاريخ</th>
													<th>تعديل</th>




												</tr>
											</thead>
											<tfoot>

												<th>الفرع</th>

												<th> رقم اكواد الحالات</th>
												<th> نوع المشكلة</th>
												<th>اسم الجلسة</th>
												<th> نوع الجلسة</th>
												<th> المواضيع التي تم مناقشتها</th>
												<th>عدد الحضور</th>
												<th> الاساليب العلاجية المستخدمة</th>
												<th> المهام والواجبات</th>



												<th>التاريخ</th>
												<th>تعديل</th>

											</tfoot>
											<tbody>
												<?php {
													foreach ($stmu->fetchAll() as $row) {

												?>

														<tr>

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

															<td>
																<?php $code_explode = explode(",", $row['code']);
																foreach ($code_explode as $code) {
																	echo $code . '<br>';
																}
																?>
															</td>
															<td><?php echo $row['problem_many']; ?></td>
															<td><?php echo $row['section_name']; ?></td>
															<td><?php echo $row['section_type']; ?></td>
															<td><?php echo $row['projict']; ?></td>
															<td><?php echo $row['attendance']; ?></td>
															<td><?php echo $row['techniques']; ?></td>
															<td><?php echo $row['task_andduties']; ?></td>



															<td><?php echo $row['date']; ?></td>
															<td>
																<a href="group_sessions_edit.php?action=edit&ids=<?php echo $row['id'] ?>">
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