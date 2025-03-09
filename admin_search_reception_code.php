<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 }if($_SESSION['user']['rule_id']==2 ||$_SESSION['user']['rule_id']==6){
?>


		
			<div class="content">
				<div class="page-inner">
				

					<div class="row">
						<div class="col-md-12">
							<form action="" method="post">
								<div class="card">
									<div class="card-header">
										<div class="card-title">عرض بيانات الاستقبال حسب تاريخ معين</div>
									</div>
									<div class="card-body">
									<?php

										if(isset($_GET['action'],$_GET['ids']) && $_GET['action']=='delete'){
										$id=$_GET['ids'];
										$sql="delete from resption where id=? ";
										$stm=$con->prepare($sql); 
										$stm->execute(array($id));
										if($stm->rowCount() > 0 )
											{
												echo "<div class='alert alert-success'>One Row  Deleted</div>";
												echo "<script>
												window.open('admin_search_reception_code.php','_self')
											</script>";
											}
										else
											{
												echo "<div class='alert alert-danger'>One Row Not Deleted</div>"; 
											}

											}
									?>

											
										<form action="" method="post">
								
                                <div class="col-md-6 col-lg-4">

										<div class="form-group form-floating-label">
											<label >من تاريخ</label>
											<input  type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="from_date"   >
										</div>
										<div class="form-group form-floating-label">
											<label >الى تاريخ</label>
											<input  type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="to_date"   >
										</div>

								</div>
                              
                                <div class="card-action">
						        	<input class="btn btn-success" type="submit" name="search" value="search">
                                 </div>		
													
													
											
											
									
									
								</form>
								<?php if(isset($_POST['search'])){

										function test_input($data) {
											$data = trim($data);
											$data = stripslashes($data);
											$data = htmlspecialchars($data);
											return $data;
										  }
										
										$from_date =test_input($_POST['from_date']);
										$to_date= test_input($_POST['to_date']);
										// find branch
										$branch=$_SESSION['user']['branch_id'];
									
										//end find branch 

										$date= date('Y-m-d');
										$user=$_SESSION['user']['id'];
										$sql="SELECT * FROM resption where date BETWEEN ? and ?   ";	
										$stmu=$con->prepare($sql); 
										$stmu->execute(array($from_date,$to_date));
										//عدد الحالات الكلية
										if($stm->rowCount()>0){

	
										
											
									
									?>
								<div class="table-responsive">
										<table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4" >
										      <center>
										    <button id="export" class="btn btn-success">Export to excel</button>
										    </center>
										    <br>
											<thead>
												<tr>
												<th >نوع التسجيل</th>
												<th>اسم الموظف</th>
												<th >الفرع</th>
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
												<th> عدد  الابناءالذكور</th>
												<th> عدد الابناء الاناث</th>
												<th>عدد الزوجات</th>
												<th>تاريخ الزواج</th>
												<th>استشارة او معاينة  </th>
												<th>تعديل</th>
												<th>حذف</th>
													
													
												
													
												</tr>
											</thead>
											<tfoot>
												<th >نوع التسجيل</th>
												<th>اسم الموظف</th>
												<th >الفرع</th>
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
												<th> عدد  الابناءالذكور</th>
												<th> عدد الابناء الاناث</th>
												<th>عدد الزوجات</th>
												<th>تاريخ الزواج</th>
												<th>استشارة او معاينة  </th>
												<th>تعديل</th>
												<th>حذف</th>
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
																	$sql="select * from user where  id=? ";
																	$stm=$con->prepare($sql); 
																	$stm->execute(array($row['sender_name']));
																	$name=$stm->fetch();
																	$sender_name=$name['name'];
																	echo $sender_name;
																	?>
																</td>
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
																	$sql="SELECT TIMESTAMPDIFF(YEAR,brithday,CURDATE()) as age ,sex FROM resption where code =?  and type=?    ";	
																	$stmu=$con->prepare($sql); 
																	$stmu->execute(array($row['code'],'جديد'));
																	$row_brithday_sex=$stmu->fetch();
																	echo $row_brithday_sex['age']; ?>
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
																<td>
																	<a href="admin_resption_edit.php?action=edit&ids=<?php echo $row['id'] ?>" >  
																		<i class="fa fa-pencil"></i>تعديل
																	</a>
																</td>
																<td>
																	<a href="?action=delete&ids=<?php echo $row['id'] ?>" class="delete"  id="delete">
																		<i class="fa fa-pencil"></i>حذف
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
                                <?php }?>
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
