<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 }if($_SESSION['user']['rule_id']==12||$_SESSION['user']['rule_id']==2 ||$_SESSION['user']['rule_id']==6){
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
												$sql="select DISTINCT(code) from psyshological where branch=? ";
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
											<h2> بيانات الاستقبال</h2>
									</center>
									<div class="table-responsive">
										<table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4" >
											<thead>
												<tr>
												<th >نوع التسجيل</th>
												<th >الفرع</th>
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
												<th> عدد  الابناءالذكور</th>
												<th> عدد الابناء الاناث</th>
												<th>عدد الزوجات</th>
												<th>تاريخ الزواج</th>
												<th>استشارة او معاينة  </th>
													
													
												
													
												</tr>
											</thead>
											<tfoot>
												<th >نوع التسجيل</th>
												<th >الفرع</th>
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
												<th> عدد  الابناءالذكور</th>
												<th> عدد الابناء الاناث</th>
												<th>عدد الزوجات</th>
												<th>تاريخ الزواج</th>
												<th>استشارة او معاينة  </th>
											</tfoot>
											<tbody>
												<?php
												// find branch
												$branch=$_SESSION['user']['branch_id'];
											
												//end find branch 

												$sql="SELECT * FROM resption where code =? and branch=?   ORDER BY `resption`.`date` desc  ";	
												$stmu=$con->prepare($sql); 
												$stmu->execute(array($code,$branch));
												//عدد الحالات الكلية
												if($stm->rowCount()>0)
												{	
													$row=$stmu->fetch();	
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
																<td><?php echo $row['sex'];?></td>
																<td><?php echo $row['code'];?></td>
																<td><?php echo $row['brithday'];?></td>
																<td><?php echo $row['brithday_blace'];?></td>
																<td><?php echo $row['date'];?></td>
																<td><?php echo $row['know_our'];?></td>
																<td><?php echo $row['place'];?></td>
																<td><?php echo $row['department'];?></td>
																<td><?php echo $row['isolation'];?></td>
																<td><?php echo $row['villag'];?></td>
																<td><?php echo $row['briefness'];?></td>
																<td><?php echo $row['becouse_come'];?></td>
																<td><?php echo $row['date_come'];?></td>
																<td><?php echo $row['studing'];?></td>
																<td><?php echo $row['identity'];?></td>
																<td><?php echo $row['identity_number'];?></td>
																<td><?php echo $row['identity_place'];?></td>
																<td><?php echo $row['laying'];?></td>
																<td><?php echo $row['brother'];?></td>
																<td><?php echo $row['sister'];?></td>
																<td><?php echo $row['work'];?></td>
																<td><?php echo $row['social_status'];?></td>
																<td><?php echo $row['son'];?></td>
																<td><?php echo $row['daughter'];?></td>
																<td><?php echo $row['number_of_wife'];?></td>
																<td><?php echo $row['age_when_married'];?></td>
																<td><?php echo $row['view'];?></td>

																
															
															</tr>
															<?php
																	
															
															
													}	
													
												
													
													?>
												
												
											</tbody>
											</table>
									</div>
								
									<center>
										<h2>بيانات  الطبيب العام</h2>
									</center>
									<div class="table-responsive">
										<table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4" >
											<thead>
												<tr>
												<th>Sno.</th>
												<th class="hidden-phone">الفرع</th>
												<th>عودة/جديدة</th>
												<th> رقم كود الحالة</th>
												<th>العمر</th>
												<th>الجنس</th>
												<th> الحالة النفسية العامة للمريض</th>
												<th>ملاحظات </th>
												<th>Physical Examination </th>
												<th>العلاج </th>
												<th>الفحص </th>
												<th>تقييم وضع الحالة</th>
												<th>التاريخ </th>
													
													
												
													
												</tr>
											</thead>
											<tfoot>
											<th>Sno.</th>
											<th class="hidden-phone">الفرع</th>
											<th>عودة/جديدة</th>
											<th> رقم كود الحالة</th>
											<th>العمر</th>
											<th>الجنس</th>
											<th> الحالة النفسية العامة للمريض</th>
											<th>ملاحظات </th>
											<th>Physical Examination </th>
											<th>العلاج </th>
											<th>الفحص </th>
											<th>تقييم وضع الحالة</th>
											<th>التاريخ </th>
											</tfoot>
											<tbody>
												<?php
												// find branch
												$branch=$_SESSION['user']['branch_id'];
												
												//end find branch 

												$sql="SELECT * FROM doctor where code =? and branch=?   ORDER BY `doctor`.`date` desc  ";	
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

																
															
															</tr>
															<?php $cnt=$cnt+1;
																	
															
														}		
													}	
													
												 
													
													?>
												
												
											</tbody>
											</table>
									</div>
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
											<h2>دراسة حالة</h2>
										</center>
									    
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
										<center>
											<h2>جلسات فردية</h2>
										</center>
									    
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
										<center>
											<h2>جلسات جماعية</h2>
										</center>
									
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
										<center>
											<h2>استشارة نفسية</h2>
										</center>
									    
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
																<td><?php echo $row['code'];?></td>
																<td><?php echo $row['intro_consulation'];?></td>
																<td><?php echo $row['type_consulation'];?></td>
																<td><?php echo $row['actions'];?></td>
																
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
