<?php

include "include/header.php";
if (!isset($_SESSION['user'])) {

	echo "<script> window.open('logout.php','_self')</script>";
	// header("location:login.php");
}
if ($_SESSION['user']['rule_id'] == 3 || $_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6 || $_SESSION['user']['rule_id'] == 18) {

?>

	<?php
	include_once "include/query.php";
	include_once "include/table_actions.php";
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
								$stmu = queryWithPagination($con, "resption");

								// // find branch
								// $branch = $_SESSION['user']['branch_id'];

								// //end find branch 

								// $date = date('Y-m-d');
								// $user = $_SESSION['user']['id'];
								// // if($branch == 8){
								// // 	$date_before_3day= date('Y-m-d', strtotime($date. ' - 3 days'));
								// // 	$date=test_input($_POST["date"]);
								// //	$sql="SELECT * FROM resption where sender_name =? and date_data_come between ? and ?   ";	
								// // 	$stmu=$con->prepare($sql); 
								// //   	$stmu->execute(array($user,$date_before_3day,$date));
								// // }else{
								// if ($branch == 8) {
								// 	$date_before_3day = date('Y-m-d', strtotime($date . ' - 7 days'));
								// 	$sql = "SELECT * FROM resption where sender_name =? and Date(date_data_come) between ? and ?     ";
								// 	$stmu = $con->prepare($sql);
								// 	$stmu->execute(array($user, $date_before_3day, $date));
								// } else {
								// 	$sql = "SELECT * FROM resption where sender_name =? and Date(date_data_come)=?     ";
								// 	$stmu = $con->prepare($sql);
								// 	$stmu->execute(array($user, $date));
								// }




								//عدد الحالات الكلية
								if ($stmu->rowCount() > 0) {



								?>
									<div class="table-responsive">
										<table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4">
											<thead>
												<tr>
													<th>نوع التسجيل</th>
													<th>الفرع</th>
													<th>العمر</th>
													<th> الجنس</th>
													<th> رقم كود الحالة</th>
													<th>تاريخ الميلاد</th>
													<th>مكان الميلاد</th>
													<th>تاريخ تسجيل الحالة</th>
													<th>كيف عرف بخدمات المؤسسة</th>
													<th>نوع الاقامة</th>
													<th>المديرية</th>
													<th>العزلة</th>
													<th>القرية</th>
													<th>المحافظة</th>
													<th>سبب النزوح</th>
													<th>تاريخ النزوح</th>
													<th>مستوى الدراسة</th>
													<th>نوع الهوية</th>
													<th>رقم الهوية</th>
													<th>مكان صدور الهوية</th>
													<th>ترتبية بين الاخوة</th>
													<th>عدد الاخوة</th>
													<th>عدد الاخوات</th>
													<th>نوع العمل</th>
													<th>الحالة الاجتماعية</th>
													<th> عدد الابناءالذكور</th>
													<th> عدد الابناء الاناث</th>
													<th>عدد الزوجات</th>
													<th>تاريخ الزواج</th>
													<th>نوع الاعاقة</th>
													<th>استشارة او معاينة </th>
													<th>تعديل</th>
													<th>طباعية</th>




												</tr>
											</thead>
											<tfoot>
												<th>نوع التسجيل</th>
												<th>الفرع</th>
												<th>العمر</th>
												<th> الجنس</th>
												<th> رقم كود الحالة</th>
												<th>تاريخ الميلاد</th>
												<th>مكان الميلاد</th>
												<th>تاريخ تسجيل الحالة</th>
												<th>كيف عرف بخدمات المؤسسة</th>
												<th>نوع الاقامة</th>
												<th>المديرية</th>
												<th>العزلة</th>
												<th>القرية</th>
												<th>المحافظة</th>
												<th>سبب النزوح</th>
												<th>تاريخ النزوح</th>
												<th>مستوى الدراسة</th>
												<th>نوع الهوية</th>
												<th>رقم الهوية</th>
												<th>مكان صدور الهوية</th>
												<th>ترتبية بين الاخوة</th>
												<th>عدد الاخوة</th>
												<th>عدد الاخوات</th>
												<th>نوع العمل</th>
												<th>الحالة الاجتماعية</th>
												<th> عدد الابناءالذكور</th>
												<th> عدد الابناء الاناث</th>
												<th>عدد الزوجات</th>
												<th>تاريخ الزواج</th>
												<th>نوع الاعاقة</th>
												<th>استشارة او معاينة </th>
												<th>تعديل</th>
												<th>طباعية</th>

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
															<td><?php echo $row['brithday_blace']; ?></td>
															<td><?php echo $row['date']; ?></td>
															<td><?php echo $row['know_our']; ?></td>
															<td><?php echo $row['place']; ?></td>
															<td><?php echo $row['department']; ?></td>
															<td><?php echo $row['isolation']; ?></td>
															<td><?php echo $row['villag']; ?></td>
															<td><?php echo $row['briefness']; ?></td>
															<td><?php echo $row['becouse_come']; ?></td>
															<td><?php echo $row['date_come']; ?></td>
															<td><?php echo $row['studing']; ?></td>
															<td><?php echo $row['identity']; ?></td>
															<td><?php echo $row['identity_number']; ?></td>
															<td><?php echo $row['identity_place']; ?></td>
															<td><?php echo $row['laying']; ?></td>
															<td><?php echo $row['brother']; ?></td>
															<td><?php echo $row['sister']; ?></td>
															<td><?php echo $row['work']; ?></td>
															<td><?php echo $row['social_status']; ?></td>
															<td><?php echo $row['son']; ?></td>
															<td><?php echo $row['daughter']; ?></td>
															<td><?php echo $row['number_of_wife']; ?></td>
															<td><?php echo $row['age_when_married']; ?></td>
															<td><?php echo $row['Disability']; ?></td>
															<td><?php echo $row['view']; ?></td>
															<td>
																<a href="resption_edit.php?action=edit&ids=<?php echo $row['id'] ?>">
																	تعديل
																</a>

															</td>
															<?php
															$c = date('Y');
															$y = date('Y', strtotime($row['brithday']));
															$age = $c - $y;
															?>

															<td><a href="?action=print&code=<?php echo $row['code'] ?>&date=<?php echo $row['date'] ?>&name=<?php echo $row['name'] ?>&ticket=<?php echo $row['ticket_number'] ?>&age=<?php echo $age ?>&phone=<?php echo $row['phone'] ?>">
																	طباعة
																</a></td>



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
		$age = $_GET['age'];
		$phone = $_GET['phone'];
		$ticket_number = $_GET['ticket'];
		require("print_resption_ticket.php");
		echo "<script> window.print()</script>";
	}
} else {
	echo "<script> window.open('index.php','_self')</script>";
}
?>