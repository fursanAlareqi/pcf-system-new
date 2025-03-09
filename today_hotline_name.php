<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 } if($_SESSION['user']['rule_id']==16||$_SESSION['user']['rule_id']==2||$_SESSION['user']['rule_id']==6){
?>


		
			<div class="content">
				<div class="page-inner">
				

					<div class="row">
						<div class="col-md-12">
							<form action="" method="post">
								<div class="card">
									<div class="card-header">
										<div class="card-title">البيانات المدخلة لليوم </div>
										
									</div>
									<div class="card-body">
										
											
										
								<?php
								// find branch
								$branch=$_SESSION['user']['branch_id'];
							
								//end find branch  and date_data_come=? ,$date

								$date= date('Y-m-d');
								$user=$_SESSION['user']['id'];
								$sql="SELECT * FROM hotline where sender_name =? and date_data_come=?      ";	
								$stmu=$con->prepare($sql); 
								$stmu->execute(array($user,$date));
								//عدد الحالات الكلية
								if($stmu->rowCount()>0){

	
									
									?>
									<div class="table-responsive">
										<table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4" >
											<thead>
												<tr>
												<th >نوع التسجيل</th>
												<th >الفرع</th>
												<th>العمر</th>
												<th> الجنس</th>
												<th> رقم كود الحالة</th>
												<th>الاسم</th>
												<th>رقم الهاتف</th>
												<th>تاريخ الميلاد</th>
												<th>مكان الميلاد</th>
												<th>تاريخ تسجيل الحالة</th>
												<th>كيف عرف بخدمات المؤسسة</th>
												<th>نوع الاقامة</th>
												<th>المديرية</th>
												<th>المحافظة</th>
												<th>المحافظة التي نزح منها النزوح</th>
												<th>سبب النزوح</th>
												<th>مستوى الدراسة</th>
											
												<th>نوع العمل</th>
												<th>الحالة الاجتماعية</th>
												<th>تعديل</th>
													
													
												
													
												</tr>
											</thead>
											<tfoot>
                                            <th >نوع التسجيل</th>
												<th >الفرع</th>
												<th>العمر</th>
												<th> الجنس</th>
												<th> رقم كود الحالة</th>
												<th>الاسم</th>
												<th>رقم الهاتف</th>
												<th>تاريخ الميلاد</th>
												<th>مكان الميلاد</th>
												<th>تاريخ تسجيل الحالة</th>
												<th>كيف عرف بخدمات المؤسسة</th>
												<th>نوع الاقامة</th>
												<th>المديرية</th>
												<th>المحافظة</th>
												<th>المحافظة التي نزح منها النزوح</th>
												<th>سبب النزوح</th>
												<th>مستوى الدراسة</th>
									
												<th>نوع العمل</th>
												<th>الحالة الاجتماعية</th>
												<th>تعديل</th>
											</tfoot>
											<tbody>
												<?php

												{
													foreach($stmu->fetchAll() as $row) 
															{
															
															?>

															<tr>
																<td><?php echo $row['type'];?></td>
																<td>
																	<?php 
																	$sql="select * from branch where  id=? ";
																	$stm=$con->prepare($sql); 
																	$stm->execute(array($row['branch']));
																	$branch=$stm->fetch();
																	$branch_name=$branch['branch_name'];
																	echo $branch_name;
																	?>
																</td>
																<td>
																	<?php
																	$sql="SELECT TIMESTAMPDIFF(YEAR,brithday,CURDATE()) as age ,sex FROM hotline where code =?  and type=?    ";	
																	$stmu=$con->prepare($sql); 
																	$stmu->execute(array($row['code'],'جديد'));
																	$row_brithday_sex=$stmu->fetch();
																	echo $row_brithday_sex['age']; ?>
																</td>
																<td><?php echo $row['sex'];?></td>
																<td><?php echo $row['code'];?></td>
																<td><?php echo $row['name'];?></td>
																<td><?php echo $row['phone'];?></td>
																<td><?php echo $row['brithday'];?></td>
																<td><?php echo $row['brithday_blace'];?></td>
																<td><?php echo $row['date'];?></td>
																<td><?php echo $row['know_our'];?></td>
																<td><?php echo $row['place'];?></td>
																<td><?php echo $row['department'];?></td>
																<td><?php echo $row['briefness'];?></td>
																<td><?php echo $row['plasce_from_come'];?></td>
																<td><?php echo $row['becouse_come'];?></td>
																<td><?php echo $row['studing'];?></td>
																<td><?php echo $row['work'];?></td>
																<td><?php echo $row['social_status'];?></td>
																
																<td>
														<a href="hotline_edit.php?action=edit&ids=<?php echo $row['id'] ?>" >  
															<i class="fa fa-pencil"></i>تعديل
														</a>
													</td>

																
															
															</tr>
															<?php
																	
															
														}		
													}	
												}
												else{
													echo' <div class="alert alert-danger">NO Row</div>';
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
	
} 
else {
echo "<script> window.open('index.php','_self')</script>";
}
?>
