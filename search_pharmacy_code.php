<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
}if($_SESSION['user']['rule_id']==11 ||$_SESSION['user']['rule_id']==2 ||$_SESSION['user']['rule_id']==6){
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
												$sql="select DISTINCT(code) from pure_pharmacy where branch=? ";
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
									    <h1>بيانات الاستقبال</h1>
										<br>
										<br>
										<table class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4" >
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
												<th>المشروع</th>
													
												
													
												</tr>
											</thead>
											
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
																<td><?php echo $row['project'];?></td>


																
															
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
									    <h1>بيانات الصرف</h1>
										<br>
										<br>
										<table class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4" >
											<thead>
												<tr>
												<th class="hidden-phone">الفرع</th>
												<th>عودة/جديدة</th>`
												<th>العمر</th>
												<th>الجنس</th>
												<th> رقم كود الحالة</th>
												<th>اسم العلاج </th>
												<th>الكمية </th>
												<th>Epilepsy</th>
												<th>التاريخ </th>
													
												
													
												</tr>
											</thead>
											
											<tbody>
												<?php
												// find branch
												$branch=$_SESSION['user']['branch_id'];
											
												//end find branch 

												$sql="SELECT * FROM pure_pharmacy where code =? and branch=?   ORDER BY `pure_pharmacy`.`date` desc  ";	
												$stmu=$con->prepare($sql); 
												$stmu->execute(array($code,$branch));
												//عدد الحالات الكلية
												if($stmu->rowCount()>0)
												{
													foreach($stmu->fetchAll() as $row) 
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
																<td><?php echo $row['type'];?></td>
																<td>
																	<?php
																	$sql="SELECT 
    YEAR(CURDATE()) - YEAR(brithday) - 
    (DATE_FORMAT(CURDATE(), '%m-%d') < DATE_FORMAT(brithday, '%m-%d')) AS age ,sex
FROM resption
WHERE code = ? AND type = ?    ";	
																	$stmu=$con->prepare($sql); 
																	$stmu->execute(array($row['code'],'جديد'));
																	$row_brithday_sex=$stmu->fetch();
																	echo $row_brithday_sex['age']; ?>
																</td>
																<td><?php echo $row_brithday_sex['sex']?></td>
																<td><?php echo $row['code'];?></td>
																<td>
																	<?php 
																		$pharmacy_name_explode =explode(",",$row['name']);
																		foreach($pharmacy_name_explode as $medical_id ){
	
																			$sql="select * from pharmacy where  id=? ";
																			$stm=$con->prepare($sql); 
																			$stm->execute(array($medical_id));
																			$medical_name=$stm->fetch();
																			echo $medical_name['name'] . '<br>';
																		}
																		
																
																		
																	?>
																</td>
																<td>
																	<?php
																		$quantity_explode =explode(",",$row['quantity']);
																		foreach($quantity_explode as $quantity ){
																			echo $quantity . '<br>';
																		}
																	?>
																</td>
																<td><?php echo $row['Epilepsy'];?></td>
																<td><?php echo $row['date'];?></td>
															

																
															
															</tr>
															<?php
																	
															
														}		
													}	
													
												
													
													?>
												
												
											</tbody>
										</table>
									
									</div>
									<?php }?>

								
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
