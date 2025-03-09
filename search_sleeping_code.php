<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 }if($_SESSION['user']['rule_id']==8||$_SESSION['user']['rule_id']==2 ||$_SESSION['user']['rule_id']==6){
?>


		
			<div class="content">
				<div class="page-inner">
				

					<div class="row">
						<div class="col-md-12">
							<form action="" method="post">
								<div class="card">
									<div class="card-header">
										<div class="card-title">البحث برقم الكود</div>
									</div>
									<div class="card-body">
										
											
										<form action="" method="post">
								
								<div class="row row-demo-grid">
							
								<div class="form-group form-floating-label">
															
										<label for="tokens">رقم الكود</label>
										<select class="selectpicker form-control" name="code" id="tokens"  data-live-search="true" >
											<option value=""></option>
											<?php 
												// find branch
												$branch=$_SESSION['user']['branch_id'];
											
												//end find branch 
												$sql="select DISTINCT(code) from resption where branch=? ";
												$stm=$con->prepare($sql); 
												$stm->execute(array($branch));
												if($stm->rowCount()>0)
													{
														foreach($stm->fetchAll() as $row) 
														{
												
											
												
										
											?>
												<option value="<?php echo $row['code']; ?>"><?php echo $row['code']; ?></option>
												
											<?php
														}
													}
											?>
										
										</select>	
								  </div>
									
							</div>
							
											
										
							<input class="btn btn-success" type="submit" name="search" value="search">
							
										
													
													
											
											
									
									
								</form>
								<?php if(isset($_POST['search'])){
										
										$code=$_POST['code'];
										
										
											
									
									?>
									
									<center>
										<h2>بيانات  الطبيب النفسي</h2>
									</center>
									<div class="table-responsive">
										<table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4" >
											<thead>
												<tr>
												<th>Sno.</th>
												<th class="hidden-phone">الفرع</th>
												<th>جديد/عودة</th>
												<th> رقم كود الحالة</th>
												<th>العمر</th>
												<th>الجنس</th>
												<th> التاريخ</th>
												<th>تشخيص رئيسي </th>
												<th>تشخيص فرعي </th>
												<th>رقم الزيارة</th>
												<th>العلاج</th>
												<th>ملخص الحالة</th>
												<th>التوصيات</th>
												<th>Consciousness</th>
												<th>Orientations</th>
												<th>Attention_Concentration</th>
												<th>Memory</th>
												<th>Appearance and Behavior</th>
												<th>Affect_Mood</th>
												<th>Suicide_Homicide</th>
												<th>Speech</th>
												<th>Thinking</th>
												<th>Perception</th>
												<th>Insight</th>
												<th>الفحوصات</th>
												<th>تقييم وضع الحالة</th>
													
													
												
													
												</tr>
											</thead>
											<tfoot>
												<th>Sno.</th>
												<th class="hidden-phone">الفرع</th>
												<th>جديد/عودة</th>
												<th> رقم كود الحالة</th>
												<th>العمر</th>
												<th>الجنس</th>
												<th> التاريخ</th>
												<th>تشخيص رئيسي </th>
												<th>تشخيص فرعي </th>
												<th>رقم الزيارة</th>
												<th>العلاج</th>
												<th>ملخص الحالة</th>
												<th>التوصيات</th>
												<th>Consciousness</th>
												<th>Orientations</th>
												<th>Attention_Concentration</th>
												<th>Memory</th>
												<th>Appearance and Behavior </th>
												<th>Affect_Mood</th>
												<th>Suicide_Homicide</th>
												<th>Speech</th>
												<th>Thinking</th>
												<th>Perception</th>
												<th>Insight</th>
												<th>الفحوصات</th>
												<th>تقييم وضع الحالة</th>
											</tfoot>
											<tbody>
												<?php
												// find branch
												$branch=$_SESSION['user']['branch_id'];
										
												//end find branch 

												$sql="SELECT * FROM psyshological where code =? and branch=?   ORDER BY `psyshological`.`date` desc  ";	
												$stmu=$con->prepare($sql); 
												$stmu->execute(array($code,$branch));
												//عدد الحالات الكلية
												if($stm->rowCount()>0)
												{ $cnt=1;
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
																<td><?php echo $row['code'];?></td>
																<td>
																	<?php
																	$sql="SELECT brithday ,sex FROM resption where code =?  and type=?    ";	
																	$stmu=$con->prepare($sql); 
																	$stmu->execute(array($row['code'],'جديد'));
																	$row_brithday_sex=$stmu->fetch();
																	$c= date('Y');
																	$y= date('Y',strtotime($row_brithday_sex['brithday']));
																	$age= $c-$y;
																	echo $age; ?>
																</td>
																<td><?php echo $row_brithday_sex['sex']?></td>
																<td><?php echo $row['date'];?></td>
																<td><?php echo $row['diagnosis'];?></td>
																<td><?php echo $row['sub_diagnosis'];?></td>
																<td><?php echo $row['visites'];?></td>
																<td>
																	<?php $medical_explode =explode(",",$row['medical']);
																	foreach($medical_explode as $medical_name ){
																		echo $medical_name . '<br>';
																	}
																	 ?>
																</td>
																<td><?php echo $row['summerie'];?></td>
																<td><?php echo $row['end_diagnosis'];?></td>
																<td><?php echo $row['Consciousness'];?></td>
																<td><?php echo $row['Orientations'];?></td>
																<td><?php echo $row['Attention_Concentration'];?></td>
																<td><?php echo $row['Memory'];?></td>
																<td><?php echo $row['Appearance'];?></td>
																<td><?php echo $row['Affect_Mood'];?></td>
																<td><?php echo $row['Suicide_Homicide'];?></td>
																<td><?php echo $row['Speech'];?></td>
																<td><?php echo $row['Thinking'];?></td>
																<td><?php echo $row['Perception'];?></td>
																<td><?php echo $row['Insight'];?></td>
																<td>
																	<?php $lap_explode =explode(",",$row['lap']);
																	foreach($lap_explode as $lap_name ){
																		echo $lap_name . '<br>';
																	}
																	 ?>
																</td>
																<td><?php echo $row['appraisal'];?></td>

																
															
															</tr>
															<?php $cnt=$cnt+1;
																	
															
														}		
													}	
													
												 
													
													?>
												
												
											</tbody>
											</table>
									</div>
									
									<div class="table-responsive">
									    <hr>
										<center>
											<h2> بيانات الرقود صباح</h2>
										</center>
									
										<br>
										<br>
										<table class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4" >
											<thead>
												<tr>
                                                <th >جديد/عودة</th>
												<th >الفرع</th>
												<th>رقم الكود</th>
												<th>العمر</th>
												<th>الجنس</th>
												<th>ناريخ تسجيل الحالة</th>
												<th>تاريخ خروج الحالة</th>
												<th>متابعة الحالة التمريضية</th>
												<th>قياس الضغط</th>
												<th>قياس النبض</th>
												<th>قياس الحرارة</th>
												<th>قياس التنفس</th>
												<th>السوائل الداخلية</th>
												<th>السوائل الخارجية</th>
												<th>اسم العلاج</th>
												<th>برنامج اعادة التاهيل</th>	
												</tr>
											</thead>
                                            <tfoot>
											         <th >جديد/عودة</th>
												<th >الفرع</th>
												<th>رقم الكود</th>
												<th>العمر</th>
												<th>الجنس</th>
												<th>ناريخ تسجيل الحالة</th>
												<th>تاريخ خروج الحالة</th>
												<th>متابعة الحالة التمريضية</th>
												<th>قياس الضغط</th>
												<th>قياس النبض</th>
												<th>قياس الحرارة</th>
												<th>قياس التنفس</th>
												<th>السوائل الداخلية</th>
												<th>السوائل الخارجية</th>
												<th>اسم العلاج</th>
												<th>برنامج اعادة التاهيل</th>
											</tfoot>
											
											<tbody>
												<?php
												// find branch
												$branch=$_SESSION['user']['branch_id'];
											
												//end find branch 

												$sql="SELECT * FROM sleeping_morning where code =? and branch=?   ORDER BY `sleeping_morning`.`date` desc  ";	
												$stmu=$con->prepare($sql); 
												$stmu->execute(array($code,$branch));
												//عدد الحالات الكلية
												if($stmu->rowCount()>0)
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
																<td><?php echo $row['code'];?></td>
																<td>
																	<?php
																	$sql="SELECT brithday ,sex FROM resption where code =?  and type=?    ";	
																	$stmu=$con->prepare($sql); 
																	$stmu->execute(array($row['code'],'جديد'));
																	$row_brithday_sex=$stmu->fetch();
																	$c= date('Y');
																	$y= date('Y',strtotime($row_brithday_sex['brithday']));
																	$age= $c-$y;
																	echo $age; ?>
																</td>
																<td><?php echo $row_brithday_sex['sex']?></td>
																<td><?php echo $row['date'];?></td>
																<td><?php echo $row['exit_date'];?></td>
																<td><?php echo $row['visites'];?></td>
																<td><?php echo $row['medicin_m'];?></td>
																<td><?php echo $row['hart_m'];?></td>
																<td><?php echo $row['heat_m'];?></td>
																<td><?php echo $row['breathe_m'];?></td>
																<td><?php echo $row['inside_m'];?></td>
																<td><?php echo $row['outside_m'];?></td>
																<td><?php echo $row['medical'];?></td>
																<td><?php echo $row['program'];?></td>

																
															
															</tr>
															<?php
																	
															
														}		
													}	
													
												
													
													?>
												
												
											</tbody>
										</table>
									
									</div>
                                    <div class="table-responsive">
									    <hr>
										<center>
											<h2> بيانات الرقود  مساء</h2>
										</center>
									
										<br>
										<br>
										<table class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4" >
											<thead>
												<tr>
                                                <th >جديد/عودة</th>
												<th >الفرع</th>
												<th>رقم الكود</th>
												<th>العمر</th>
												<th>الجنس</th>
												<th>ناريخ تسجيل الحالة</th>
												<th>تاريخ خروج الحالة</th>
												<th>متابعة الحالة التمريضية</th>
												<th>قياس الضغط</th>
												<th>قياس النبض</th>
												<th>قياس الحرارة</th>
												<th>قياس التنفس</th>
												<th>السوائل الداخلية</th>
												<th>السوائل الخارجية</th>
												<th>اسم العلاج</th>
												<th>برنامج اعادة التاهيل</th>	
												</tr>
											</thead>
                                            <tfoot>
											         <th >جديد/عودة</th>
												<th >الفرع</th>
												<th>رقم الكود</th>
												<th>العمر</th>
												<th>الجنس</th>
												<th>ناريخ تسجيل الحالة</th>
												<th>تاريخ خروج الحالة</th>
												<th>متابعة الحالة التمريضية</th>
												<th>قياس الضغط</th>
												<th>قياس النبض</th>
												<th>قياس الحرارة</th>
												<th>قياس التنفس</th>
												<th>السوائل الداخلية</th>
												<th>السوائل الخارجية</th>
												<th>اسم العلاج</th>
												<th>برنامج اعادة التاهيل</th>
											</tfoot>
											
											<tbody>
												<?php
												// find branch
												$branch=$_SESSION['user']['branch_id'];
											
												//end find branch 

												$sql="SELECT * FROM sleeping_afternoon where code =? and branch=?   ORDER BY `sleeping_afternoon`.`date` desc  ";	
												$stmu=$con->prepare($sql); 
												$stmu->execute(array($code,$branch));
												//عدد الحالات الكلية
												if($stmu->rowCount()>0)
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
																<td><?php echo $row['code'];?></td>
																<td>
																	<?php
																	$sql="SELECT brithday ,sex FROM resption where code =?  and type=?    ";	
																	$stmu=$con->prepare($sql); 
																	$stmu->execute(array($row['code'],'جديد'));
																	$row_brithday_sex=$stmu->fetch();
																	$c= date('Y');
																	$y= date('Y',strtotime($row_brithday_sex['brithday']));
																	$age= $c-$y;
																	echo $age; ?>
																</td>
																<td><?php echo $row_brithday_sex['sex']?></td>
																<td><?php echo $row['date'];?></td>
																<td><?php echo $row['exit_date'];?></td>
																<td><?php echo $row['visites'];?></td>
																<td><?php echo $row['medicin_m'];?></td>
																<td><?php echo $row['hart_m'];?></td>
																<td><?php echo $row['heat_m'];?></td>
																<td><?php echo $row['breathe_m'];?></td>
																<td><?php echo $row['inside_m'];?></td>
																<td><?php echo $row['outside_m'];?></td>
																<td><?php echo $row['medical'];?></td>
																<td><?php echo $row['program'];?></td>

																
															
															</tr>
															<?php
																	
															
														}		
													}	
													
												
													
													?>
												
												
											</tbody>
										</table>
									
									</div>
                                    <div class="table-responsive">
									    <hr>
										<center>
											<h2> بيانات الرقود ليل</h2>
										</center>
									
										<br>
										<br>
										<table class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4" >
											<thead>
												<tr>
                                                <th >جديد/عودة</th>
												<th >الفرع</th>
												<th>رقم الكود</th>
												<th>العمر</th>
												<th>الجنس</th>
												<th>ناريخ تسجيل الحالة</th>
												<th>تاريخ خروج الحالة</th>
												<th>متابعة الحالة التمريضية</th>
												<th>قياس الضغط</th>
												<th>قياس النبض</th>
												<th>قياس الحرارة</th>
												<th>قياس التنفس</th>
												<th>السوائل الداخلية</th>
												<th>السوائل الخارجية</th>
												<th>اسم العلاج</th>
												<th>برنامج اعادة التاهيل</th>	
												</tr>
											</thead>
                                            <tfoot>
											         <th >جديد/عودة</th>
												<th >الفرع</th>
												<th>رقم الكود</th>
												<th>العمر</th>
												<th>الجنس</th>
												<th>ناريخ تسجيل الحالة</th>
												<th>تاريخ خروج الحالة</th>
												<th>متابعة الحالة التمريضية</th>
												<th>قياس الضغط</th>
												<th>قياس النبض</th>
												<th>قياس الحرارة</th>
												<th>قياس التنفس</th>
												<th>السوائل الداخلية</th>
												<th>السوائل الخارجية</th>
												<th>اسم العلاج</th>
												<th>برنامج اعادة التاهيل</th>
											</tfoot>
											
											<tbody>
												<?php
												// find branch
												$branch=$_SESSION['user']['branch_id'];
											
												//end find branch 

												$sql="SELECT * FROM sleeping_night where code =? and branch=?   ORDER BY `sleeping_night`.`date` desc  ";	
												$stmu=$con->prepare($sql); 
												$stmu->execute(array($code,$branch));
												//عدد الحالات الكلية
												if($stmu->rowCount()>0)
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
																<td><?php echo $row['code'];?></td>
																<td>
																	<?php
																	$sql="SELECT brithday ,sex FROM resption where code =?  and type=?    ";	
																	$stmu=$con->prepare($sql); 
																	$stmu->execute(array($row['code'],'جديد'));
																	$row_brithday_sex=$stmu->fetch();
																	$c= date('Y');
																	$y= date('Y',strtotime($row_brithday_sex['brithday']));
																	$age= $c-$y;
																	echo $age; ?>
																</td>
																<td><?php echo $row_brithday_sex['sex']?></td>
																<td><?php echo $row['date'];?></td>
																<td><?php echo $row['exit_date'];?></td>
																<td><?php echo $row['visites'];?></td>
																<td><?php echo $row['medicin_m'];?></td>
																<td><?php echo $row['hart_m'];?></td>
																<td><?php echo $row['heat_m'];?></td>
																<td><?php echo $row['breathe_m'];?></td>
																<td><?php echo $row['inside_m'];?></td>
																<td><?php echo $row['outside_m'];?></td>
																<td><?php echo $row['medical'];?></td>
																<td><?php echo $row['program'];?></td>

																
															
															</tr>
															<?php
																	
															
														}		
													}	
													
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
