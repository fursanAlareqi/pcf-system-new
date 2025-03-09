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
										<div class="card-title"> زيارة قسم الرقود </div>
									</div>
									<div class="card-body">
										<div class="row">
											
										
											<div class="col-md-6 col-lg-4">
												
												
												<div class="form-group form-floating-label">
													<label >تاريخ زيارة الحالة</label>
													<input  type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="date"  required >
												</div>
												<div class="form-group form-floating-label">
															
															<label for="tokens">رقم الكود</label>
															<select class="selectpicker form-control" name="code" id="tokens"  data-live-search="true" required >
																<option value="600">600</option>
																<?php 
																	// find branch
																	$branch=$_SESSION['user']['branch_id'];
																	
																	//end find branch 
																	$sql="select DISTINCT(code) from sleeping_morning where branch=? ";
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
											<div class="col-md-6 col-lg-4">
														
											<div class="form-group">
													<label for="comment">progren notes</label>
													<textarea class="form-control" id="comment" name="summerie" rows="5">
													</textarea>
												</div>
												
											
											</div>
											<div class="col-md-6 col-lg-4">
											
											
												
										
											</div>
											
										</div>
									</div>
									<div class="card-action">
										
										
										<input class="btn btn-success" type="submit" name="save" value="save">
										<input class="btn btn-danger" type="reset" value="Cancel">
									</div>
								</div>
							</form>
							
							
						</div>
						
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
												$sql="select DISTINCT(code) from psyshological_visit_sleeping where branch=? ";
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
										<table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4" >
											<thead>
												<tr>
												<th>Sno.</th>
												<th >الفرع</th>
												<th >رقم الكود</th>
												<th>العمر</th>
												<th>الجنس</th>
												<th >progren notes</th>
												<th >التاريخ</th>
												
													
													
												
													
												</tr>
											</thead>
											<tfoot>
												<th>Sno.</th>
												<th >الفرع</th>
												<th >رقم الكود</th>
												<th>العمر</th>
												<th>الجنس</th>
												<th >progren notes</th>
												<th >التاريخ</th>
											</tfoot>
											<tbody>
												<?php
												// find branch
												$branch=$_SESSION['user']['branch_id'];
												
												//end find branch 

												$sql="SELECT * FROM psyshological_visit_sleeping where code =? and branch=?   ORDER BY `psyshological_visit_sleeping`.`date` desc  ";	
												$stmu=$con->prepare($sql); 
												$stmu->execute(array($code,$branch));
												//عدد الحالات الكلية
												if($stm->rowCount()>0)
												{
													$cnt=1;
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
																<td><?php echo $row['summerie'];?></td>
																<td><?php echo $row['date'];?></td>
															

																
															
															</tr>
															
															<?php
																 $cnt=$cnt+1;		
															
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
	if(isset($_POST['save'])){
		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		  }

		
		$code=test_input($_POST["code"]);
		$today= date('Y-m-d');
		$date=test_input($_POST["date"]);
		$summerie=test_input($_POST["summerie"]);
		

		
		
		
	
	
		

		    $user=$_SESSION['user']['id'];
			// find branch
			$branch=$_SESSION['user']['branch_id'];
			

			//end find branch 
			
			
			
			//التحقق ان اسم المنتج موجود وليس ارقام
		
			
			


			

			if(empty($date))
			{
				
				
				echo '<script>swal("يرجاء ادخال  تاريخ دخول الحالة ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
			}

			elseif(empty($code))
			{
				
				
				echo '<script>swal("يرجاء ادخال كود للحاله ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
			}
		
			elseif(!is_numeric($code))
			{
				
				
				echo '<script>swal("يرجاء ادخال كود للحالة ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
			}
	



			
			/////////////////////////////////////////////////////////////////////////////////////تذكير الشرط حق الايميل

			//اذا لايوجد اي مشكلة يقوم بارسال الملف
			else
			{
				$sql="select * from psyshological_visit_sleeping where  code=? and date=?  ";
				$stm=$con->prepare($sql); 
				$stm->execute(array($code,$date));
				if($stm->rowCount()){

					echo '<script>swal("لقد تم ادخال بيانات لنفس هذا الحاله في النظام من قبل", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
				}
				else{
					$query="INSERT INTO psyshological_visit_sleeping(branch,code,date,summerie,sender_name)
					values (?,?,?,?,?) ";
					$stm=$con->prepare($query);
					$stm->execute(array($branch,$code,$date,$summerie,$user));
					if($stm->rowCount())	
					{
						echo '<script src="js/send_success.js"></script>';
					}
					else
					{
						echo'<script src="js/send_error.js"></script>';
					}
				}
				}
			


		

		
	}
} 
else {
echo "<script> window.open('index.php','_self')</script>";
}
?>
