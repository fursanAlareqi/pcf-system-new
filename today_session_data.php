<?php

include "include/header.php";
if (!isset($_SESSION['user'])) {

	echo "<script> window.open('logout.php','_self')</script>";
	// header("location:login.php");
}
if ($_SESSION['user']['rule_id'] == 9 || $_SESSION['user']['rule_id'] == 15 || $_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6 || $_SESSION['user']['rule_id'] == 18 || $_SESSION['user']['rule_id'] == 20 || $_SESSION['user']['rule_id'] == 25) {
?>

	<?php
	include_once "include/query.php";
	include_once "include/table_actions.php";
	delete($con, 'session');
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
								$stmu = queryWithPagination($con, "session");
								// find branch
								// $branch = $_SESSION['user']['branch_id'];

								//end find branch 

								// $date = date('Y-m-d');
								// $user = $_SESSION['user']['id'];
								// $sql = "SELECT * FROM session where sender_name =? and date_data_come=?     ";
								// $stmu = $con->prepare($sql);
								// $stmu->execute(array($user, $date));
								//عدد الحالات الكلية
								if ($stmu->rowCount() > 0) {
									$cnt = 1;



								?>
									<div class="table-responsive">
										<table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4">
											<thead>
												<tr>

													<th>Sno.</th>
													<th>الفرع</th>
													<th class="hidden-phone">اسم المشروع</th>
													<th> نوع التوعية</th>
													<th> موضوع التوعية</th>
													<th>:التاريخ/الوقت</th>
													<th>المحافظة</th>
													<th>عدد الحظور</th>
													<th>عدد الجلسات</th>
													<th>القائم بالتوعية</th>
													<th>الموقع</th>
													<th>الاكواد الخاص بي الحالات</th>
													<th>الاكواد الخاصه بي المرافقين</th>
													<th>عدد حضور النساء من السكان</th>
													<th>عدد حضور البنات من السكان</th>
													<th>عدد حضور الرجال من السكان</th>
													<th>عدد حضور الاولاد من السكان</th>
													<th>عدد حضور النساء من النازحين</th>
													<th>عدد حضور النساء من النازحين</th>
													<th>عدد حضور النساء من النازحين</th>
													<th>عدد حضور النساء من النازحين</th>
													<th>عدد حضور النساء من لاجئين</th>
													<th>عدد حضور النساء من لاجئين</th>
													<th>عدد حضور النساء من لاجئين</th>
													<th>عدد حضور النساء من لاجئين</th>

													<th>موضوع التوعية</th>
													<th>المحور الاول</th>
													<th>المحور الثاني</th>
													<th>المحور الثالث</th>
													<th>المحور الرابع</th>
													<th>المحور الخامس</th>
													<th>اخر</th>
													<th>تعديل</th>




												</tr>
											</thead>
											<tfoot>
												<th>Sno.</th>
												<th>الفرع</th>
												<th class="hidden-phone">اسم المشروع</th>
												<th> نوع التوعية</th>
												<th> موضوع التوعية</th>
												<th>:التاريخ/الوقت</th>
												<th>المحافظة</th>
												<th>عدد الحظور</th>
												<th>عدد الجلسات</th>
												<th>القائم بالتوعية</th>
												<th>الموقع</th>
												<th>الاكواد الخاصه بي الحالات</th>
												<th>الاكواد الخاصه بي المرافقين</th>
												<th>عدد حضور النساء من السكان</th>
												<th>عدد حضور البنات من السكان</th>
												<th>عدد حضور الرجال من السكان</th>
												<th>عدد حضور الاولاد من السكان</th>
												<th>عدد حضور النساء من النازحين</th>
												<th>عدد حضور النساء من النازحين</th>
												<th>عدد حضور النساء من النازحين</th>
												<th>عدد حضور النساء من النازحين</th>
												<th>عدد حضور النساء من لاجئين</th>
												<th>عدد حضور النساء من لاجئين</th>
												<th>عدد حضور النساء من لاجئين</th>
												<th>عدد حضور النساء من لاجئين</th>

												<th>موضوع التوعية</th>
												<th>المحور الاول</th>
												<th>المحور الثاني</th>
												<th>المحور الثالث</th>
												<th>المحور الرابع</th>
												<th>المحور الخامس</th>
												<th>اخر</th>
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
																$branch_name = $branch['branch_name'];
																echo $branch_name;
																?>
															</td>

															<td><?php echo $row['project']; ?></td>
															<td><?php echo $row['awarness']; ?></td>
															<td><?php echo $row['theme']; ?></td>
															<td><?php echo $row['date']; ?></td>
															<td><?php echo $row['province']; ?></td>
															<td><?php echo $row['code']; ?></td>
															<td><?php echo $row['number_session']; ?></td>
															<td><?php echo $row['list']; ?></td>
															<td><?php echo $row['loction']; ?></td>

															<td>
																<?php $code_explode = explode(",", $row['code1']);
																foreach ($code_explode as $code) {
																	echo $code . '<br>';
																}
																?>
															</td>
															<td>
																<?php $escort_code_explode = explode(",", $row['escort_code']);
																foreach ($escort_code_explode as $escort_code) {
																	echo $escort_code . '<br>';
																}
																?>
															</td>



															<td><?php echo $row['femal']; ?></td>
															<td><?php echo $row['girl']; ?></td>
															<td><?php echo $row['mene']; ?></td>

															<td><?php echo $row['boy']; ?></td>
															<td><?php echo $row['s_femal']; ?></td>
															<td><?php echo $row['s_girl']; ?></td>
															<td><?php echo $row['s_mene']; ?></td>
															<td><?php echo $row['s_boy']; ?></td>
															<td><?php echo $row['l_femal']; ?></td>
															<td><?php echo $row['l_girl']; ?></td>
															<td><?php echo $row['l_mene']; ?></td>
															<td><?php echo $row['l_boy']; ?></td>


															<td><?php echo $row['broj']; ?></td>

															<td><?php echo $row['first_axis']; ?></td>
															<td><?php echo $row['secnd_axis']; ?></td>
															<td><?php echo $row['third_axis']; ?></td>
															<td><?php echo $row['forth_axis']; ?></td>

															<td><?php echo $row['fifth_axis']; ?></td>
															<td><?php echo $row['axis_project']; ?></td>



															<td>
																<a href="session_edit.php?action=edit&ids=<?php echo $row['id'] ?>">
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