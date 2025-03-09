<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 }if($_SESSION['user']['rule_id']==2 ||$_SESSION['user']['rule_id']==6||$_SESSION['user']['rule_id']==22||$_SESSION['user']['rule_id']==23||$_SESSION['user']['rule_id']==24){
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
										<div class="row">
											
										
											<div class="col-md-6 col-lg-4">
											<div class="form-group form-floating-label">
															
															<label for="tokens">اسم الموظف </label>
															<select class="selectpicker form-control" name="code" id="tokens"  data-live-search="true" required >
																<option value=""></option>
																<?php 
																	// find branch
																	$branch=$_SESSION['user']['branch_id'];
																
																	//end find branch 
																	$user=$_SESSION['user']['rule_id'];
																	if($user==22){
																		$sql="select * from user where branch_id in (?,?)";
																		$stm=$con->prepare($sql); 
																		$stm->execute(array(5,4));
																	}elseif($user==23){
																		$sql="select * from user where branch_id in (?,?,?)";
																		$stm=$con->prepare($sql); 
																		$stm->execute(array(8,7,6));
																	}else{
																		$sql="select * from user  ";
																		$stm=$con->prepare($sql); 
																		$stm->execute();
																	}
																	
																	if($stm->rowCount()>0)
																		{
																			foreach($stm->fetchAll() as $row) 
																			{
																	
																
																	
															
																?>
																	<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
																	
																<?php
																			}
																		}
																?>
															
															</select>	
													  </div>
													 
											
											</div>
											<div class="col-md-6 col-lg-4">
												
												
												<div class="form-group form-floating-label">
														<label > من تاريخ</label>
														<input  type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="from_date"   >
		
												</div>
	
											</div>
											<div class="col-md-6 col-lg-4">
												
												<div class="form-group form-floating-label">
													<label >الى تاريخ</label>
													<input  type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="to_date"   >
												</div>
										
											</div>
											
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
										$code=test_input($_POST['code']);
										$to_date=test_input($_POST['to_date']);
										$from_date=test_input($_POST['from_date']);

									?>
									
									<div class="table-responsive">
										<table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4" >
										    <center>
										    <button id="export" class="btn btn-success">Export to excel</button>
										    </center>
										    <br>
											<thead>
												<tr>
												<th >اسم الموظف</th>
												<th >الفرع</th>
												<th >ذكر جديد مابين 1 -17</th>
												<th >ذكر عودة مابين 1 -17</th>
												<th >ذكر جديد اكبر من 18 </th>
												<th >ذكر عودة اكبر من 18 </th>
												<th >انثى جديد مابين 1 -17</th>
												<th >انثى عودة مابين 1 -17</th>
												<th >انثى جديد اكبر من 18 </th>
												<th >انثى عودة اكبر من 18 </th>
												<th>نوع التقرير</th>

												<th >التاريخ</th>
												
													
													
												
													
												</tr>
											</thead>
											<tfoot>
												<th >اسم الموظف</th>
												<th >الفرع</th>
												<th >ذكر جديد مابين 1 -17</th>
												<th >ذكر عودة مابين 1 -17</th>
												<th >ذكر جديد اكبر من 18 </th>
												<th >ذكر عودة اكبر من 18 </th>
												<th >انثى جديد مابين 1 -17</th>
												<th >انثى عودة مابين 1 -17</th>
												<th >انثى جديد اكبر من 18 </th>
												<th >انثى عودة اكبر من 18 </th>
												<th>نوع التقرير</th>

												<th >التاريخ</th>
												
											</tfoot>
											<tbody>
												<?php
												// find branch
												$branch=$_SESSION['user']['branch_id'];
											
												//end find branch 

												$sql="SELECT * FROM emp_day_rebort where sender_name =? and date BETWEEN ? and ?   ORDER BY `emp_day_rebort`.`date` desc  ";	
												$stmu=$con->prepare($sql); 
												$stmu->execute(array($code,$from_date,$to_date));
												//عدد الحالات الكلية
												if($stmu->rowCount()>0)
												{	
														foreach($stmu->fetchAll() as $row){
															?>

															<tr>
																<td>
																	<?php 
																	$sql="select * from user where  id=? ";
																	$stm=$con->prepare($sql); 
																	$stm->execute(array($row['sender_name']));
																	$sender_name=$stm->fetch();
																	$sender_name=$sender_name['name'];
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
																<td><?php echo $row['m_n_rebort_1_17'] ?></td>
																<td><?php echo $row['m_b_rebort_1_17'] ?></td>
																<td><?php echo $row['m_n_rebort_18'] ?></td>
																<td><?php echo $row['m_b_rebort_18'] ?></td>
																<td><?php echo $row['f_n_rebort_1_17'] ?></td>
																<td><?php echo $row['f_b_rebort_1_17'] ?></td>
																<td><?php echo $row['f_n_rebort_18'] ?></td>
																<td><?php echo $row['f_b_rebort_18'] ?></td>
																<td><?php echo $row['type'] ?></td>
																<td><?php echo $row['date'] ?></td>
																

																
															
															</tr>
															<?php
															}
																	
															
															
													}	
												
												
													
													?>
												
												
											</tbody>
											</table>
											
										
											<?php }?>	
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
