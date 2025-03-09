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
	delete($con, 'psychiatrist_talk');
	?>



	<div class="content">
		<div class="page-inner">


			<div class="row">
				<div class="col-md-12">
					<form action="" method="post">
						<div class="card">
							<div class="card-header">
								<div class="card-title">البيانات المدخلة لليوم دراسة حالة</div>

							</div>
							<div class="card-body">



								<?php
								$stmu = queryWithPagination($con, "psychiatrist_talk");
								// $stmu=null;

								// if($_SESSION['user']['rule_id']==2 ||$_SESSION['user']['rule_id']==6){

								// $date= date('Y-1-1');

								// $sql="SELECT * FROM psychiatrist_talk where Date(date_data_come) >= ?  order by date_data_come desc";	
								// $stmu=$con->prepare($sql); 
								// $stmu->execute(array($date));


								// }
								// else{

								//     // find branch
								// $branch=$_SESSION['user']['branch_id'];

								// //end find branch 


								// $date= date('Y-m-d');
								// $user=$_SESSION['user']['id'];
								// $sql="SELECT * FROM psychiatrist_talk where sender_name =? and Date(date_data_come)=?     ";	
								// $stmu=$con->prepare($sql); 
								// $stmu->execute(array($user,$date));

								// }


								//عدد الحالات الكلية
								if ($stmu->rowCount() > 0) {



								?>
									<div id="table-container">
										<div class="table-responsive">
											<table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4">
												<thead>
													<tr>
														<th>نوع التسجيل</th>
														<th>الفرع</th>
														<th> العمر</th>
														<th> الجنس</th>
														<th> رقم كود الحالة</th>
														<th>كلام المريض</th>
														<th>كلام الاهل</th>
														<th>الفترة</th>
														<th>الاسباب</th>
														<th>العلاج</th>
														<th>الاعراض</th>
														<th>التاريخ النفسي</th>
														<th>التاريخ الطبي والجراحي</th>
														<th>الانتحار والعدوانية</th>
														<th>الإدمان</th>
														<th>التاريخ الجنائي</th>
														<th>الاب</th>
														<th>الام</th>
														<th>الاخوة والاخوات</th>
														<th>وجود تاريخ مرضي في الاسرة</th>
														<th>الجو الاسري العام</th>
														<th>المستوى الاقتصادي</th>
														<th>ظروف الحمل و الولادة</th>
														<th>العلاقة معا الاطفال الاخرين</th>
														<th>العلامات العصبية</th>
														<th>العلاقة معاالاخرين</th>
														<th>المشكلات السلوكية</th>
														<th>التحصيل الدراسي</th>
														<th>العلاقة مع المدرسين والزملاء</th>
														<th>المهنة</th>
														<th>الزوجة</th>
														<th>الأبناء</th>
														<th>العلاقة الزوجية</th>
														<th>المزاج</th>
														<th>الأفكار</th>
														<th>الطباع</th>
														<th>العلاقات</th>
														<th>الأنشطة والهوايات</th>
														<th>العادات والإدمان</th>


														<th>المقاييس النفسية</th>
														<th>هدف الجلسة</th>

														<th>التدخل العلاجي</th>
														<th>الواجب المنزلي</th>
														<th>نسبة التحسن</th>

														<th>التاريخ</th>
														<th>تعديل</th>

													</tr>
												</thead>
												<tfoot>
													<th>نوع التسجيل</th>
													<th>الفرع</th>
													<th> العمر</th>
													<th> الجنس</th>
													<th> رقم كود الحالة</th>
													<th>كلام المريض</th>
													<th>كلام الاهل</th>
													<th>الفترة</th>
													<th>الاسباب</th>
													<th>العلاج</th>
													<th>الاعراض</th>
													<th>التاريخ النفسي</th>
													<th>التاريخ الطبي والجراحي</th>
													<th>الانتحار والعدوانية</th>
													<th>الإدمان</th>
													<th>التاريخ الجنائي</th>
													<th>الاب</th>
													<th>الام</th>
													<th>الاخوة والاخوات</th>
													<th>وجود تاريخ مرضي في الاسرة</th>
													<th>الجو الاسري العام</th>
													<th>المستوى الاقتصادي</th>
													<th>ظروف الحمل و الولادة</th>
													<th>العلاقة معا الاطفال الاخرين</th>
													<th>العلامات العصبية</th>
													<th>العلاقة معاالاخرين</th>
													<th>المشكلات السلوكية</th>
													<th>التحصيل الدراسي</th>
													<th>العلاقة مع المدرسين والزملاء</th>
													<th>المهنة</th>
													<th>الزوجة</th>
													<th>الأبناء</th>
													<th>العلاقة الزوجية</th>
													<th>المزاج</th>
													<th>الأفكار</th>
													<th>الطباع</th>
													<th>العلاقات</th>
													<th>الأنشطة والهوايات</th>
													<th>العادات والإدمان</th>
													<th>المقاييس النفسية</th>
													<th>هدف الجلسة</th>

													<th>التدخل العلاجي</th>
													<th>الواجب المنزلي</th>
													<th>نسبة التحسن</th>

													<th>التاريخ</th>
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
																<td>
																	<?php
																	$sql = "SELECT brithday ,sex FROM resption where code =?  and type=?    ";
																	$stmu = $con->prepare($sql);
																	$stmu->execute(array($row['code'], 'جديد'));
																	$row_brithday_sex = $stmu->fetch();
																	$c = date('Y');
																	$y = date('Y', strtotime($row_brithday_sex['brithday']));
																	$age = $c - $y;
																	echo $age; ?>
																</td>
																<td><?php echo $row_brithday_sex['sex'] ?></td>
																<td><?php echo $row['code']; ?></td>
																<td><?php echo $row['sick']; ?></td>
																<td><?php echo $row['facilities']; ?></td>
																<td><?php echo $row['slide']; ?></td>
																<td><?php echo $row['note']; ?></td>
																<td><?php echo $row['note2']; ?></td>
																<td><?php echo $row['note1']; ?></td>
																<td><?php echo $row['psychological']; ?></td>
																<td><?php echo $row['mental']; ?></td>
																<td><?php echo $row['organic']; ?></td>
																<td><?php echo $row['operation']; ?></td>
																<td><?php echo $row['anothe']; ?></td>
																<td><?php echo $row['father']; ?></td>
																<td><?php echo $row['mather']; ?></td>
																<td><?php echo $row['brothers']; ?></td>
																<td><?php echo $row['famlt_sick']; ?></td>
																<td><?php echo $row['famly_live']; ?></td>
																<td><?php echo $row['famly_mony']; ?></td>
																<td><?php echo $row['born']; ?></td>
																<td><?php echo $row['releshinship_childern']; ?></td>
																<td><?php echo $row['resinsh']; ?></td>
																<td><?php echo $row['releshinship_ather']; ?></td>
																<td><?php echo $row['problem']; ?></td>
																<td><?php echo $row['studing_level']; ?></td>
																<td><?php echo $row['releshinship_student']; ?></td>
																<td><?php echo $row['work']; ?></td>
																<td><?php echo $row['wife']; ?></td>
																<td><?php echo $row['children']; ?></td>
																<td><?php echo $row['releshinship_wife']; ?></td>
																<td><?php echo $row['agitator']; ?></td>
																<td><?php echo $row['ideas']; ?></td>
																<td><?php echo $row['copyright']; ?></td>
																<td><?php echo $row['releshinship']; ?></td>
																<td><?php echo $row['activity']; ?></td>
																<td><?php echo $row['adman']; ?></td>
																<td><?php echo $row['violense']; ?></td>

																<td><?php echo $row['session_goal']; ?></td>
																<td><?php echo $row['therapeutic_intervention']; ?></td>
																<td><?php echo $row['homework']; ?></td>
																<td><?php echo $row['improvement_percentage']; ?></td>

																<td><?php echo $row['date']; ?></td>
																<td>
																	<a href="psychiatrist_edit.php?action=edit&ids=<?php echo $row['id'] ?>">
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