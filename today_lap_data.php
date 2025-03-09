<?php

include "include/header.php";
if (!isset($_SESSION['user'])) {

	echo "<script> window.open('logout.php','_self')</script>";
	// header("location:login.php");
}
if ($_SESSION['user']['rule_id'] == 10 || $_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6) {
?>

	<?php
	include_once "include/query.php";
	include_once "include/table_actions.php";
	delete($con, 'lap');
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
								$stmu = queryWithPagination($con, "lap");
								// // find branch
								// $branch = $_SESSION['user']['branch_id'];

								// //end find branch 

								// $today = date('Y-m-d');
								// $user = $_SESSION['user']['id'];
								// $sql = "SELECT * FROM lap where sender_name =?   and date_data_come=?  ";
								// $stmu = $con->prepare($sql);
								// $stmu->execute(array($user, $today));
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
													<th>العمر</th>
													<th>الجنس</th>
													<th>عودة/جديدة</th>
													<th>رقم الكود</th>

													<td>T_WBC</td>
													<td>Neutrophil</td>
													<td>Lymphocyte</td>
													<td>Monocyte</td>
													<td>Eosinophil</td>
													<td>Basophil</td>
													<td>Platelats</td>
													<td>Hb</td>
													<td>PCV</td>
													<td>GPT</td>
													<td>GOT</td>
													<td>ALP</td>
													<td>T_B</td>
													<td>D_B</td>
													<td>Urea</td>
													<td>Creatinine</td>
													<td>HBsAg</td>
													<td>HIV1_2</td>
													<td>Prolactine</td>
													<td>HCVAb</td>
													<td>TSH</td>
													<td>FT3 </td>
													<td>FT4</td>
													<td>RBS</td>
													<td>FBS</td>
													<td>HbA1C</td>
													<td>Cocaine</td>
													<td>Opiate</td>
													<td>Morphine</td>
													<td>Cannabis</td>
													<td>Heroin</td>
													<td>Benzodiazepine</td>
													<td>Tramadol</td>
													<td>Pethidine</td>

													<th>التاريخ </th>
													<th>تعديل</th>




												</tr>
											</thead>
											<tfoot>
												<th>Sno.</th>
												<th>الفرع</th>
												<th>العمر</th>
												<th>الجنس</th>
												<th>عودة/جديدة</th>
												<th>رقم الكود</th>
												<td> T_WBC</td>
												<td> Neutrophil</td>
												<td> Lymphocyte</td>
												<td>Monocyte</td>
												<td>Eosinophil</td>
												<td>Basophil</td>
												<td>Platelats</td>
												<td>Hb</td>
												<td>PCV</td>
												<td>GPT</td>
												<td>GOT</td>
												<td>ALP</td>
												<td>T_B</td>
												<td>D_B</td>
												<td>Urea</td>
												<td>Creatinine</td>
												<td>HBsAg</td>
												<td>HIV1_2</td>
												<td>Prolactine</td>
												<td>HCVAb</td>
												<td>TSH</td>
												<td>FT3 </td>
												<td>FT4</td>
												<td>RBS</td>
												<td>FBS</td>
												<td>HbA1C</td>
												<td>Cocaine</td>
												<td>Opiate</td>
												<td>Morphine</td>
												<td>Cannabis</td>
												<td>Heroin</td>
												<td>Benzodiazepine</td>
												<td>Tramadol</td>
												<td>Pethidine</td>
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

															<td><?php echo $row_brithday_sex['sex'] ?></td>
															<td><?php echo $row['type']; ?></td>

															<td><?php echo $row['code']; ?></td>
															<td> <?php echo $row['T_WBC']; ?> </td>
															<td> <?php echo $row['Neutrophil']; ?> </td>
															<td> <?php echo $row['Lymphocyte']; ?> </td>
															<td> <?php echo $row['Monocyte']; ?></td>
															<td><?php echo $row['Eosinophil']; ?></td>
															<td><?php echo $row['Basophil']; ?></td>
															<td><?php echo $row['Platelats']; ?></td>
															<td><?php echo $row['Hb']; ?></td>
															<td><?php echo $row['PCV']; ?></td>
															<td><?php echo $row['GPT']; ?></td>
															<td><?php echo $row['GOT']; ?></td>
															<td><?php echo $row['ALP']; ?></td>
															<td><?php echo $row['T_B']; ?></td>
															<td><?php echo $row['D_B']; ?></td>
															<td><?php echo $row['Urea']; ?></td>
															<td><?php echo $row['Creatinine']; ?></td>
															<td><?php echo $row['HBsAg']; ?></td>
															<td><?php echo $row['HIV1_2']; ?></td>
															<td><?php echo $row['Prolactine']; ?></td>
															<td><?php echo $row['HCVAb']; ?></td>
															<td><?php echo $row['TSH']; ?></td>
															<td><?php echo $row['FT3']; ?> </td>
															<td><?php echo $row['FT4']; ?></td>
															<td><?php echo $row['RBS']; ?></td>
															<td><?php echo $row['FBS']; ?></td>
															<td><?php echo $row['HbA1C']; ?></td>
															<td><?php echo $row['Cocaine']; ?></td>
															<td><?php echo $row['Opiate']; ?></td>
															<td><?php echo $row['Morphine']; ?></td>
															<td><?php echo $row['Cannabis']; ?></td>
															<td><?php echo $row['Heroin']; ?></td>
															<td><?php echo $row['Benzodiazepine']; ?></td>
															<td><?php echo $row['Tramadol']; ?></td>
															<td><?php echo $row['Pethidine']; ?></td>
															<td><?php echo $row['date']; ?></td>
															<td>
																<a href="lap_edit.php?action=edit&ids=<?php echo $row['id'] ?>">
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