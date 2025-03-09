<?php

include "include/header.php";
if (!isset($_SESSION['user'])) {

	echo "<script> window.open('logout.php','_self')</script>";
	// header("location:login.php");
}
if ($_SESSION['user']['rule_id'] == 23 || $_SESSION['user']['rule_id'] == 22 || $_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6) {

?>

	<?php
	include_once "include/query.php";

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
								// find branch
								//end find branc
								$stmu = queryWithPagination($con, "sana");

								//عدد الحالات الكلية
								if ($stmu->rowCount() > 0) {
								?>
									<div class="table-responsive">
										<table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4">
											<thead>
												<tr>
													<th>نوع الزياره</th>
													<th>الفرع</th>
													<th>العمر</th>
													<th> الجنس</th>
													<th> رقم كود الحالة</th>
													<th>تاريخ الميلاد</th>
													<th>تاريخ تسجيل الحالة</th>
													<th>نوع الاقامة</th>
													<th>نوع العمل</th>
													<th>الحالة الاجتماعية</th>
													<th>نوع الاعاقة</th>
													<th> الخدمة</th>
													<th> التشخيص</th>
													<th> نوع الاحاله(وارد)</th>
													<th> الجهة المحال منها(وارد)</th>
													<th> نوع الاحاله(صادر)</th>
													<th> الجهة المحال اليها(صادر)</th>
													<!-- <th>تعديل</th> -->
												</tr>
											</thead>
											<tfoot>
												<th>نوع الزياره</th>
												<th>الفرع</th>
												<th>العمر</th>
												<th> الجنس</th>
												<th> رقم كود الحالة</th>
												<th>تاريخ الميلاد</th>
												<th>تاريخ تسجيل الحالة</th>
												<th>نوع الاقامة</th>
												<th>نوع العمل</th>
												<th>الحالة الاجتماعية</th>
												<th>نوع الاعاقة</th>
												<th> الخدمة</th>
												<th> التشخيص</th>
												<th> نوع الاحاله(وارد)</th>
												<th> الجهة المحال منها(وارد)</th>
												<th> نوع الاحاله(صادر)</th>
												<th> الجهة المحال اليها(صادر)</th>


												<!-- <th>تعديل</th> -->

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
															<td>
																<?php
																$sql = "SELECT TIMESTAMPDIFF(YEAR,brithday,CURDATE()) as age ,sex FROM resption where code =?  and type=?    ";
																$stmu = $con->prepare($sql);
																$stmu->execute(array($row['code'], 'جديد'));
																$row_brithday_sex = $stmu->fetch();
																echo $row_brithday_sex['age']; ?>
															</td>
															<td><?php echo $row['sex']; ?></td>
															<td><?php echo $row['code']; ?></td>
															<td><?php echo $row['brithday']; ?></td>
															<td><?php echo $row['date']; ?></td>
															<td><?php echo $row['place']; ?></td>
															<td><?php echo $row['work']; ?></td>
															<td><?php echo $row['social_status']; ?></td>
															<td><?php echo $row['Disability']; ?></td>
															<td><?php echo $row['services']; ?></td>
															<td><?php echo $row['diagnosis']; ?></td>
															<td><?php echo $row['type_con_from']; ?></td>
															<td><?php echo $row['side_con_from']; ?></td>
															<td><?php echo $row['type_con_to']; ?></td>
															<td><?php echo $row['side_con_to']; ?></td>

															<!-- <td>
                                                                    <a href="resption_edit.php?action=edit&ids=<?php echo $row['id'] ?>" >  
                                                                        تعديل
                                                                    </a>
													            </td> -->
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
	if (isset($_GET['action'], $_GET['code'], $_GET['name']) && $_GET['action'] == 'print') {
		$code = $_GET['code'];
		$name = $_GET['name'];
		$date = $_GET['date'];
		$ticket_number = $_GET['ticket'];
		require("print_resption_ticket.php");
		echo "<script> window.print()</script>";
	}
} else {
	echo "<script> window.open('index.php','_self')</script>";
}
?>