<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 }if($_SESSION['user']['rule_id']==13||$_SESSION['user']['rule_id']==2 ||$_SESSION['user']['rule_id']==6){
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
									<label>  من تاريخ   </label>
									<input  type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="from_date"  required >
								</div>
								<div class="form-group form-floating-label">
									<label> الى تاريخ   </label>
									<input  type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="to_date"  required >
								</div>
									
							</div>
							
											
										
							<input class="btn btn-success" type="submit" name="search" value="search">
							
										
													
													
											
											
									
									
								</form>
								<?php if(isset($_POST['search'])){
										
										$from_date=$_POST['from_date'];
										$to_date=$_POST['to_date'];
										
										
											
									
									?>
									<div class="table-responsive">
										<table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4" >
											<thead>
											
												<th> رقم كود الحالة</th>
												<th>من تاريخ</th>
												<th>الى تاريخ</th>
												<th>  الاستقبال جديد</th>
												<th>  الاستقبال عودة  </th>
												<th> الطبيب العام </th>
												<th> ادارة الحالة </th>
												<th> الطبيب النفسي </th>
												<th> دراسة حالة  </th>
												<th> جلسة فردية </th>
												<th>  استشارة نفسية  </th>
												<th>  الرقود صباحي</th>
												<th>  الرقود مسائي</th>
												<th>  الرقود مسائي</th>
													
	
												
											</thead>
											<tfoot>
												<th> رقم كود الحالة</th>
												<th>من تاريخ</th>
												<th>الى تاريخ</th>
												<th>  الاستقبال جديد</th>
												<th>  الاستقبال عودة  </th>
												<th> الطبيب العام </th>
												<th> ادارة الحالة </th>
												<th> الطبيب النفسي </th>
												<th> دراسة حالة  </th>
												<th> جلسة فردية </th>
												<th>  استشارة نفسية  </th>
												<th>  الرقود صباحي</th>
												<th>  الرقود مسائي</th>
												<th>  الرقود مسائي</th>
											</tfoot>
											<tbody>

                                                        <?php
                                                            // find branch
                                                            $branch=$_SESSION['user']['branch_id'];
                                                            
                                                            //end find branch
                                                            $sql="select DISTINCT(code) from resption where  date BETWEEN ? and ? and  branch=?   ";	
                                                            $stm=$con->prepare($sql); 
                                                            $stm->execute(array($from_date,$to_date,$branch));
                                                            if($stm->rowCount()>0){
                                                                foreach($stm->fetchAll() as $rows) 
                                                                {
                                                        
                                                        ?>
															<tr>
																<td><?php echo $rows['code']; ?></td>
																<td><?php echo $from_date; ?></td>
																<td><?php echo $to_date; ?></td>
																<td>
																	<?php 
																		$sql="select * from resption where code =? and type=?    ";	
																		$stm=$con->prepare($sql); 
																		$stm->execute(array($rows['code'],'جديد'));
																		if($stm->rowCount()>0){
																			echo "حصل على الخدمة";
																		}
																		else {
																			echo "لم يحصل على الخدمة";
																		}
																	?>
																</td>
																<td>
																	<?php 
																		$sql="select * from resption where code =? and date BETWEEN ? and ? and type=?   ";	
																		$stm=$con->prepare($sql); 
																		$stm->execute(array($rows['code'],$from_date,$to_date,'عودة'));
																		if($stm->rowCount()>0){
																			echo "حصل على الخدمة";
																		}
																		else{
																			echo "لم يحصل على الخدمة";
																		}
																	?>
																</td>
																<td>
																	<?php 
																		$sql="select * from doctor where code =? and date BETWEEN ? and ?    ";	
																		$stm=$con->prepare($sql); 
																		$stm->execute(array($rows['code'],$from_date,$to_date));
																		if($stm->rowCount()>0){
																			echo "حصل على الخدمة";
																		}
																		else{
																			echo "لم يحصل على الخدمة";
																		}
																	?>
																</td>
																<td>
																	<?php 
																		$sql="select * from mange_convert where code =? and date BETWEEN ? and ?    ";	
																		$stm=$con->prepare($sql); 
																		$stm->execute(array($rows['code'],$from_date,$to_date));
																		if($stm->rowCount()>0){
																			echo "حصل على الخدمة";
																		}
																		else{
																			echo "لم يحصل على الخدمة";
																		}
																	?>
																</td>
																<td>
																	<?php 
																		$sql="select * from psyshological where code =? and date BETWEEN ? and ?    ";	
																		$stm=$con->prepare($sql); 
																		$stm->execute(array($rows['code'],$from_date,$to_date));
																		if($stm->rowCount()>0){
																			echo "حصل على الخدمة";
																		}
																		else{
																			echo "لم يحصل على الخدمة";
																		}
																	?>
																</td>

																<td>
																	<?php 
																		$sql="select * from psychiatrist_talk where code =? and date BETWEEN ? and ?    ";	
																		$stm=$con->prepare($sql); 
																		$stm->execute(array($rows['code'],$from_date,$to_date));
																		if($stm->rowCount()>0){
																			echo "حصل على الخدمة";
																		}
																		else{
																			echo "لم يحصل على الخدمة";
																		}
																	?>
																</td>

																<td>
																	<?php 
																		$sql="select * from individual_sessions where code =? and date BETWEEN ? and ?    ";	
																		$stm=$con->prepare($sql); 
																		$stm->execute(array($rows['code'],$from_date,$to_date));
																		if($stm->rowCount()>0){
																			echo "حصل على الخدمة";
																		}
																		else{
																			echo "لم يحصل على الخدمة";
																		}
																	?>
																</td>

																<td>
																	<?php 
																		$sql="select * from consult_his_psychology where code =? and date BETWEEN ? and ?    ";	
																		$stm=$con->prepare($sql); 
																		$stm->execute(array($rows['code'],$from_date,$to_date));
																		if($stm->rowCount()>0){
																			echo "حصل على الخدمة";
																		}
																		else{
																			echo "لم يحصل على الخدمة";
																		}
																	?>
																</td>

																<td>
																	<?php 
																		$sql="select * from sleeping_morning where code =? and date BETWEEN ? and ?    ";	
																		$stm=$con->prepare($sql); 
																		$stm->execute(array($rows['code'],$from_date,$to_date));
																		if($stm->rowCount()>0){
																			echo "حصل على الخدمة";
																		}
																		else{
																			echo "لم يحصل على الخدمة";
																		}
																	?>
																</td>
																<td>
																	<?php 
																		$sql="select * from sleeping_afternoon where code =? and date BETWEEN ? and ?    ";	
																		$stm=$con->prepare($sql); 
																		$stm->execute(array($rows['code'],$from_date,$to_date));
																		if($stm->rowCount()>0){
																			echo "حصل على الخدمة";
																		}
																		else{
																			echo "لم يحصل على الخدمة";
																		}
																	?>
																</td>
																<td>
																	<?php 
																		$sql="select * from sleeping_night where code =? and date BETWEEN ? and ?    ";	
																		$stm=$con->prepare($sql); 
																		$stm->execute(array($rows['code'],$from_date,$to_date));
																		if($stm->rowCount()>0){
																			echo "حصل على الخدمة";
																		}
																		else{
																			echo "لم يحصل على الخدمة";
																		}
																	?>
																</td>
																
															</tr>

															<?php
                                                            }
                                                         } ?>
															
															
												
												
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
