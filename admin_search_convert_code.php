<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 }if($_SESSION['user']['rule_id']==3||$_SESSION['user']['rule_id']==2 ||$_SESSION['user']['rule_id']==6){
?>


		
			<div class="content">
				<div class="page-inner">
				

					<div class="row">
						<div class="col-md-12">
							<form action="" method="post">
								<div class="card">
									<div class="card-header">
										<div class="card-title">عرض بيانات ادارة الحالة حسب تاريخ معين</div>
									</div>
									<div class="card-body">
									<?php

										if(isset($_GET['action'],$_GET['ids']) && $_GET['action']=='delete'){
										$id=$_GET['ids'];
										$sql="delete from mange_convert where id=? ";
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
											<input  type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="from_date"  required >
										</div>
										<div class="form-group form-floating-label">
											<label >الى تاريخ</label>
											<input  type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="to_date"  required >
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
										$sql="SELECT * FROM mange_convert where date BETWEEN ? and ?   ";	
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
												<th >Sno.</th>
												<th  >الفرع</th>
												<th > جديد/عودة</th>
												<th>العمر</th>
												<th>الجنس</th>
												<th > رقم كود الحالة</th>
												<th > الشخص المسؤول عن التواصل</th>
												<th > رقم هاتف الشخص المسؤول عن التواصل</th>
												<th >الاحالة داخلية وارد </th>
												<th >جهة الاحالة داخلية وارد </th>
												<th >الاحالة داخلية صادرة</th>
												<th >جهة الاحالة داخلية صادرة</th>
												<th >الاحالة خارجية واردة</th>
												<th >جهة الاحالة خارجية وارد</th>
												<th >الاحالة خارجية صادر</th>
												<th >جهة الاحالة خارجية صادر</th>
												<th >اسم المشروع</th>
												<th >الدعم النفسي الاولي </th>
												
												<th  >نوع العنف</th>
												<th >التاريخ </th>
												<th >تعديل</th>
                                                <th>حذف</th>
													
													
												
													
												</tr>
											</thead>
											<tfoot>
                                            <th >Sno.</th>
												<th  >الفرع</th>
												<th > جديد/عودة</th>
												<th>العمر</th>
												<th>الجنس</th>
												<th > رقم كود الحالة</th>
												<th > الشخص المسؤول عن التواصل</th>
												<th > رقم هاتف الشخص المسؤول عن التواصل</th>
												<th >الاحالة داخلية وارد </th>
												<th >جهة الاحالة داخلية وارد </th>
												<th >الاحالة داخلية صادرة</th>
												<th >جهة الاحالة داخلية صادرة</th>
												<th >الاحالة خارجية واردة</th>
												<th >جهة الاحالة خارجية وارد</th>
												<th >الاحالة خارجية صادر</th>
												<th >جهة الاحالة خارجية صادر</th>
												<th >اسم المشروع</th>
												<th >الدعم النفسي الاولي </th>
												
												<th  >نوع العنف</th>
												<th >التاريخ </th>
												<th >تعديل</th>
                                                <th>حذف</th>
												
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
																		$branch=$branch['branch_name'];
																		echo $branch;
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
																<td><?php echo $row['person_name'];?></td>
																<td><?php echo $row['person_phone'];?></td>
																<td><?php echo $row['type_con_from'];?></td>
																<td><?php echo $row['side_con_from'];?></td>
																<td><?php echo $row['type_con_to'];?></td>
																<td><?php echo $row['side_con_to'];?></td>
																<td><?php echo $row['type_con_out'];?></td>
																<td><?php echo $row['side_con_out'];?></td>
																<td><?php echo $row['type_con_come_out'];?></td>
																<td><?php echo $row['side_con_come_out'];?></td>
																<td><?php echo $row['project_name'];?></td>
																<td><?php echo $row['find'];?></td>
																<td><?php echo $row['violense'];?></td>
																
																
																<td><?php echo $row['date'];?></td>
																<td>
																	<a href="admin_convert_edit.php?action=edit&ids=<?php echo $row['id'] ?>" >  
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
