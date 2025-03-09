<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 }if($_SESSION['user']['rule_id']==7||$_SESSION['user']['rule_id']==15||$_SESSION['user']['rule_id']==2 ||$_SESSION['user']['rule_id']==6||$_SESSION['user']['rule_id']==16||$_SESSION['user']['rule_id']==18){
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
												$today= date('Y-m-d');
								
												//end find branch 
												if($_SESSION['user']['rule_id']==16){
													$sql="select DISTINCT(code) from hotline where branch=? ";
												}
												else{
													$sql="select DISTINCT(code) from resption where branch=? ";
												}
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
									<div class="table-responsive">
									    <hr>
									    <h1>دراسة حالة</h1>
										<br>
										<br>
										<table class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4" >
											<thead>
												<tr>
																			<th >نوع التسجيل</th>
												<th >الفرع</th>
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


												<th >المقاييس النفسية</th>
												<th >التاريخ</th>
													
												
													
												</tr>
											</thead>
											
											<tbody>
												<?php
												// find branch
												$branch=$_SESSION['user']['branch_id'];
											
												//end find branch 

												$sql="SELECT * FROM psychiatrist_talk where code =? and branch=?   ORDER BY `psychiatrist_talk`.`date` desc  ";	
												$stmu=$con->prepare($sql); 
												$stmu->execute(array($code,$branch));
												//عدد الحالات الكلية
												if($stm->rowCount()>0)
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
																		if($_SESSION['user']['rule_id']==16){
																			$sql="SELECT brithday ,sex FROM hotline where code =?  and type=?    ";
																		}
																		else{
																			$sql="SELECT brithday ,sex FROM resption where code =?  and type=?    ";
																		}
																		
																	$stmu=$con->prepare($sql); 
																	$stmu->execute(array($row['code'],'جديد'));
																	$row_brithday_sex=$stmu->fetch();
																	$c= date('Y');
																	$y= date('Y',strtotime($row_brithday_sex['brithday']));
																	$age= $c-$y;
																	echo $age; ?>
																</td>
																<td><?php echo $row_brithday_sex['sex']?></td>
																<td><?php echo $row['code'];?></td>
																<td><?php echo $row['sick'];?></td>
																<td><?php echo $row['facilities'];?></td>
																<td><?php echo $row['slide'];?></td>
																<td><?php echo $row['note'];?></td>
																<td><?php echo $row['note2'];?></td>
																<td><?php echo $row['note1'];?></td>
																<td><?php echo $row['psychological'];?></td>
																<td><?php echo $row['mental'];?></td>
																<td><?php echo $row['organic'];?></td>
																<td><?php echo $row['operation'];?></td>
																<td><?php echo $row['anothe'];?></td>
																<td><?php echo $row['father'];?></td>
																<td><?php echo $row['mather'];?></td>
																<td><?php echo $row['brothers'];?></td>
																<td><?php echo $row['famlt_sick'];?></td>
																<td><?php echo $row['famly_live'];?></td>
																<td><?php echo $row['famly_mony'];?></td>
																<td><?php echo $row['born'];?></td>
																<td><?php echo $row['releshinship_childern'];?></td>
																<td><?php echo $row['resinsh'];?></td>
																<td><?php echo $row['releshinship_ather'];?></td>
																<td><?php echo $row['problem'];?></td>
																<td><?php echo $row['studing_level'];?></td>
																<td><?php echo $row['releshinship_student'];?></td>
																<td><?php echo $row['work'];?></td>
																<td><?php echo $row['wife'];?></td>
																<td><?php echo $row['children'];?></td>
																<td><?php echo $row['releshinship_wife'];?></td>
																<td><?php echo $row['agitator'];?></td>
																<td><?php echo $row['ideas'];?></td>
																<td><?php echo $row['copyright'];?></td>
																<td><?php echo $row['releshinship'];?></td>
																<td><?php echo $row['activity'];?></td>
																<td><?php echo $row['adman'];?></td>
																<td><?php echo $row['violense'];?></td>
																<td><?php echo $row['date'];?></td>


																
															
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
									    <h1>جلسات فردية</h1>
										<br>
										<br>
										<table class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4" >
											<thead>
												<tr>
													<th >نوع التسجيل</th>
													<th >الفرع</th>
													<th> العمر</th>
													<th> الجنس</th>
													<th> رقم كود الحالة</th>
													<th> الجلسة</th>
													<th> عنوان الجلسة</th>
													<th> الزمن من</th>
													<th> الزمن الى</th>
													<th> تحديد المشكلة</th>
													<th> أجرات الجلسة</th>
													<th> الاساليب العلاجية</th>
													<th> المهام والواجبات</th>
													<th> الاختبارات النفسية</th>
													<th >التاريخ</th>
													
												
													
												</tr>
											</thead>
											
											<tbody>
												<?php
												// find branch
												$branch=$_SESSION['user']['branch_id'];
											
												//end find branch 

												$sql="SELECT * FROM individual_sessions where code =? and branch=?   ORDER BY `individual_sessions`.`date` desc  ";	
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
																<td>
																	<?php
																	if($_SESSION['user']['rule_id']==16){
																		$sql="SELECT brithday ,sex FROM hotline where code =?  and type=?    ";
																	}
																	else{
																		$sql="SELECT brithday ,sex FROM resption where code =?  and type=?    ";
																	}
																	$stmu=$con->prepare($sql); 
																	$stmu->execute(array($row['code'],'جديد'));
																	$row_brithday_sex=$stmu->fetch();
																	$c= date('Y');
																	$y= date('Y',strtotime($row_brithday_sex['brithday']));
																	$age= $c-$y;
																	echo $age; ?>
																</td>
																<td><?php echo $row_brithday_sex['sex']?></td>
																<td><?php echo $row['code'];?></td>
																<td><?php echo $row['section'];?></td>
																<td><?php echo $row['address'];?></td>
																<td><?php echo $row['from_time'];?></td>
																<td><?php echo $row['to_time'];?></td>
																<td><?php echo $row['select_s'];?></td>
																<td><?php echo $row['agrat'];?></td>
																<td><?php echo $row['alasalib'];?></td>
																<td><?php echo $row['taks'];?></td>
															
																<td><?php echo $row['violense'];?></td>
																<td><?php echo $row['date'];?></td>


																
															
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
									    <h1> جلسات جماعية</h1>
										<br>
										<br>
										<table class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4" >
											<thead>
												<tr>
												<th >الفرع</th>
												<th> رقم اكواد الحالات</th>
												<th> نوع المشكلة</th>
												<th>اسم الجلسة</th>
												<th> نوع الجلسة</th>
												<th> المواضيع التي تم مناقشتها</th>
												<th>عدد الحضور</th>
												<th>  الاساليب العلاجية المستخدمة</th>
												<th>  المهام والواجبات</th>											
												<th >التاريخ</th>
													
												
													
												</tr>
											</thead>
											
											<tbody>
												<?php
												// find branch
												$branch=$_SESSION['user']['branch_id'];
											
												//end find branch 

												$sql="SELECT * FROM group_sessions where code like ? and branch=?   ORDER BY `group_sessions`.`date` desc  ";	
												$stmug=$con->prepare($sql); 
												$stmug->execute(array("%$code%",$branch));
												//عدد الحالات الكلية
												if($stmug->rowCount()>0)
												{
													foreach($stmug->fetchAll() as $row) 
															{
															
															?>

															<tr>
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
																	<?php $code_explode =explode(",",$row['code']);
																	foreach($code_explode as $codes ){
																		echo $codes . '<br>';
																	}
																	 ?>
																</td>
																<td><?php echo $row['problem_many'];?></td>
																<td><?php echo $row['section_name'];?></td>
																<td><?php echo $row['section_type'];?></td>
																<td><?php echo $row['projict'];?></td>
																<td><?php echo $row['attendance'];?></td>
																<td><?php echo $row['techniques'];?></td>
																<td><?php echo $row['task_andduties'];?></td>
																<td><?php echo $row['date'];?></td>


																
															
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
									    <h1>استشارة نفسية</h1>
										<br>
										<br>
										<table class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4" >
											<thead>
												<tr>
												<th >نوع التسجيل</th>
												<th >الفرع</th>
												<th> العمر</th>
												<th> الجنس</th>
												<th> رقم كود الحالة</th>
												<th> مقدم الاستشارة</th>
                                                <th> نوع الاستشارة</th>
                                                <th> الاجراء الذي تم</th>

												<th >التاريخ</th>
												
													
												
													
												</tr>
											</thead>
											
											<tbody>
												<?php
												// find branch
												$branch=$_SESSION['user']['branch_id'];
											
												//end find branch 

												$sql="SELECT * FROM consult_his_psychology where code =? and branch=?   ORDER BY `consult_his_psychology`.`date` desc  ";	
												$stmuc=$con->prepare($sql); 
												$stmuc->execute(array($code,$branch));
												//عدد الحالات الكلية
												if($stmuc->rowCount()>0)
												{
													foreach($stmuc->fetchAll() as $row) 
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
																	if($_SESSION['user']['rule_id']==16){
																		$sql="SELECT brithday ,sex FROM hotline where code =?  and type=?    ";
																	}
																	else{
																		$sql="SELECT brithday ,sex FROM resption where code =?  and type=?    ";
																	}	
																	$stmu=$con->prepare($sql); 
																	$stmu->execute(array($row['code'],'جديد'));
																	$row_brithday_sex=$stmu->fetch();
																	$c= date('Y');
																	$y= date('Y',strtotime($row_brithday_sex['brithday']));
																	$age= $c-$y;
																	echo $age; ?>
																</td>
																<td><?php echo $row_brithday_sex['sex']?></td>
																<td><?php echo $row['code'];?></td>
																<td><?php echo $row['intro_consulation'];?></td>
																<td><?php echo $row['type_consulation'];?></td>
																<td><?php echo $row['actions'];?></td>
																
																<td><?php echo $row['date'];?></td>


																
															
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
