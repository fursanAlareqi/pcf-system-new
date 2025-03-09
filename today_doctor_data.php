<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 }if($_SESSION['user']['rule_id']==5||$_SESSION['user']['rule_id']==2 ||$_SESSION['user']['rule_id']==6){
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
								$branch=$_SESSION['user']['branch_id'];
								
								//end find branch 

								$today= date('Y-m-d');
								$user=$_SESSION['user']['id'];
								$sql="SELECT * FROM doctor where sender_name =? and Date(date_data_come)=?     ";	
								$stmu=$con->prepare($sql); 
								$stmu->execute(array($user,$today));
								//عدد الحالات الكلية
								if($stmu->rowCount()>0){
									$cnt=1;

	
									
									?>
									<div class="table-responsive">
										<table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4" >
											<thead>
												<tr>
												<th >Sno.</th>
												<th class="hidden-phone">الفرع</th>
												<th>عودة/جديدة</th>
												<th>العمر</th>
												<th>الجنس</th>
												<th> رقم كود الحالة</th>
												<th> الحالة النفسية العامة للمريض</th>
												<th>ملاحظات </th>
												<th>Physical Examination </th>
												<th>العلاج </th>
												<th>الفحص </th>
												<th>تقييم وضع الحالة</th>
												<th>التاريخ </th>
												<th >تعديل</th>
													
													
												
													
												</tr>
											</thead>
											<tfoot>
											<th >Sno.</th>
											<th class="hidden-phone">الفرع</th>
												<th>عودة/جديدة</th>
												<th>العمر</th>
												<th>الجنس</th>
												<th> رقم كود الحالة</th>
												<th> الحالة النفسية العامة للمريض</th>
												<th>ملاحظات </th>
												<th>Physical Examination </th>
												<th>العلاج </th>
												<th>الفحص </th>
												<th>تقييم وضع الحالة</th>
												<th>التاريخ </th>
												<th >تعديل</th>
											</tfoot>
											<tbody>
												<?php

												{
													foreach($stmu->fetchAll() as $row) 
															{
															
															?>

															<tr>
																<td><?php echo $cnt;?></td>
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
																<td><?php echo $row['type'];?></td>
																<td>
																	<?php
																	$sql="SELECT TIMESTAMPDIFF(YEAR,brithday,CURDATE()) as age ,sex FROM resption where code =?  and type=?    ";	
																	$stmu=$con->prepare($sql); 
																	$stmu->execute(array($row['code'],'جديد'));
																	$row_brithday_sex=$stmu->fetch();
																	echo $row_brithday_sex['age']; ?>
																</td>
																<td><?php echo $row_brithday_sex['sex']?></td>
																<td><?php echo $row['code'];?></td>
																<td><?php echo $row['diagnosis'];?></td>
																<td><?php echo $row['note'];?></td>
																<td><?php echo $row['Physical_Examination'];?></td>
																<td>
																	<?php $medical_explode =explode(",",$row['medical']);
																	foreach($medical_explode as $medical_name ){
																		echo $medical_name . '<br>';
																	}
																	 ?>
																</td>
																
																<td>
																	<?php $lap_explode =explode(",",$row['lap']);
																	foreach($lap_explode as $lap_name ){
																		echo $lap_name . '<br>';
																	}
																	 ?>
																</td>
																<td><?php echo $row['appraisal'];?></td>
																<td><?php echo $row['date'];?></td>
																<td>
																	<a href="doctor_edit.php?action=edit&ids=<?php echo $row['id'] ?>" >  
																		<i class="fa fa-pencil"></i>تعديل
																	</a>
																</td>

																
															
															</tr>
														
															<?php
																 $cnt=$cnt+1;		
															
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
