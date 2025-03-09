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

	<?php
	include_once "include/query.php";
	include_once "include/table_actions.php";
	delete($con, 'complaints');
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
								$stmu = queryWithPagination($con, "complaints");
								// find branch
								// $branch = $_SESSION['user']['branch_id'];

								//end find branch 

								// $date = date('Y-m-d');
								// $user = $_SESSION['user']['id'];
								// $sql = "SELECT * FROM session where sender_name =? and date_data_come=?     ";
								// $stmu = $con->prepare($sql);
								// $stmu->execute(array($user, $date));
								//عدد الحالات الكلية
								if ($stmu->rowCount() > 0) {	?>
									<div class="table-responsive">
										<table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4">
											<thead>
												<tr>

													<th>Sno.</th>

													<th>تاريخ الشكوى</th>
													<th>المرفق الصحي</th>
													<th>رقم الشكوى</th>
													<th>اسم مقدم الشكوى</th>
													<th>رقم تلفون مقدم الشكوى</th>
													<th>المركز</th>
													<th>نوع الشكوى</th>
													<th>الاجراء الذي تم</th>
													<th>المعالجة التي تمت للشكوى</th>

													<th>تعديل</th>




												</tr>
											</thead>
											<tfoot>
												<th>Sno.</th>

												<th>تاريخ الشكوى</th>
												<th>المرفق الصحي</th>
												<th>رقم الشكوى</th>
												<th>اسم مقدم الشكوى</th>
												<th>رقم تلفون مقدم الشكوى</th>
												<th>المركز</th>
												<th>نوع الشكوى</th>
												<th>الاجراء الذي تم</th>
												<th>المعالجة التي تمت للشكوى</th>

												<th>تعديل</th>
											</tfoot>
											<tbody>
												<?php {
													foreach ($stmu->fetchAll() as $row) {

												?>

														<tr>

															<td><?php echo $row['id']; ?></td>
															<td><?php echo $row['date']; ?></td>
															<td><?php echo $row['heath_facility']; ?></td>
															<td><?php echo $row['complaint_number']; ?></td>
															<td><?php echo $row['name']; ?></td>
															<td><?php echo $row['phone_number']; ?></td>
															<td><?php echo $row['center']; ?></td>
															<td><?php echo $row['type']; ?></td>
															<td><?php echo $row['action']; ?></td>
															<td><?php echo $row['process']; ?></td>


															<td>
																<a href="complaint_edit.php?action=edit&ids=<?php echo $row['id'] ?>">
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