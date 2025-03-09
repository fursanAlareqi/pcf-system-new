<?php

include "include/header.php";
if (!isset($_SESSION['user'])) {

	echo "<script> window.open('logout.php','_self')</script>";
	// header("location:login.php");
}
if (
	$_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6 || $_SESSION['user']['rule_id'] == 16 || $_SESSION['user']['rule_id'] == 26
) {
?>

	<?php
	include_once "include/query.php";
	include_once "include/table_actions.php";
	delete($con, 'social_media_channels');
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
								$stmu = queryWithPagination($con, "social_media_channels");

								if ($stmu->rowCount() > 0) {	?>
									<div class="table-responsive">
										<table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4">
											<thead>
												<tr>

													<th>Sno.</th>

													<th>كود الحالة</th>
													<th>التاريخ</th>
													<th> الاسم</th>
													<th>العمر</th>
													<th>الجنس</th>

													<th>المدينة</th>
													<th>نوع قناة التواصل</th>

													<th>نوع الاستشارة</th>
													<th>نوع الخدمة</th>
													<th>تعديل</th>
												</tr>

											</thead>
											<tfoot>
												<th>Sno.</th>

												<th>كود الحالة</th>
												<th>التاريخ</th>
												<th> الاسم</th>
												<th>العمر</th>
												<th>الجنس</th>

												<th>المدينة</th>
												<th>نوع قناة التواصل</th>

												<th>نوع الاستشارة</th>
												<th>نوع الخدمة</th>
												<th>تعديل</th>
											</tfoot>
											<tbody>
												<?php {
													foreach ($stmu->fetchAll() as $row) {

												?>

														<tr>

															<td><?php echo $row['id']; ?></td>
															<td><?php echo $row['code']; ?></td>
															<td><?php echo $row['date']; ?></td>

															<td><?php echo $row['name']; ?></td>
															<td><?php echo $row['age']; ?></td>
															<td><?php echo $row['gender']; ?></td>

															<td><?php echo $row['city']; ?></td>
															<td><?php echo $row['channel_type'] == 1 ? "فيسبوك" : "واتس اب"; ?></td>
															<td><?php echo $row['inquiry_type'] == 1 ? "عن المؤسسة وخدماته" : "استشارة نفسية"; ?></td>
															<td><?php

																if ($row['service_type'] == 1) {
																	echo "تثقيف";
																} elseif ($row['service_type'] == 2) {
																	echo "استشارة نفسية";
																} else {
																	echo "اخرى";
																}
																?></td>

															<td>
																<a href="edit_social_media_inquiry.php?action=edit&ids=<?php echo $row['id'] ?>">
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