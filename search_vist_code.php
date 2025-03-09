<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 }if($_SESSION['user']['rule_id']==3||$_SESSION['user']['rule_id']==2 ||$_SESSION['user']['rule_id']==6||$_SESSION['user']['rule_id']==18){
?>


		
			<div class="content">
				<div class="page-inner">
				

					<div class="row">
						<div class="col-md-12">
							<form action="" method="post">
								<div class="card">
									<div class="card-header">
										<div class="card-title">البحث حسب التاريخ</div>
									</div>
									<div class="card-body">
										
											
										<form action="" method="post">
								
								<div class="row row-demo-grid">
							
								<div class="form-group form-floating-label">
                                    <label >من تاريخ</label>
                                    <input  type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="frome_date"  required >
                                </div>
                                <div class="form-group form-floating-label">
                                    <label >الى تاريخ</label>
                                    <input  type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="to_date"  required >
                                </div>
									
									
							</div>
							
											
										
							<input class="btn btn-success" type="submit" name="search" value="search">
							
										
													
													
											
											
									
									
								</form>
								<?php if(isset($_POST['search'])){
										
										$frome_date=$_POST['frome_date'];
										$to_date=$_POST['to_date'];
										
										
											
									
									?>
									<div class="table-responsive">
										<table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4" >
											<thead>
												<tr>
												
													
                                                <th >الفرع</th>
                                                <th> رقم كود الحالة</th>
                                                <th>  اسم الاب</th>
                                                <th> رقم التلفون</th>
                                                <th>  موعد الحجز </th>
												
													
												</tr>
											</thead>
											<tfoot>
												
												<th >الفرع</th>
                                                <th> رقم كود الحالة</th>
                                                <th>  اسم الاب</th>
                                                <th> رقم التلفون</th>
                                                <th>  موعد الحجز </th>
												
											</tfoot>
											<tbody>
												<?php
												// find branch
												$branch=$_SESSION['user']['branch_id'];
											
												//end find branch 

												$sql="SELECT * FROM vist where vist BETWEEN ?and ? and branch=?   ORDER BY `vist`.`date` desc  ";	
												$stmu=$con->prepare($sql); 
												$stmu->execute(array($frome_date,$to_date,$branch));
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
																<td><?php echo $row['code']; ?></td>
                                                                <td><?php echo $row['father']; ?></td>
                                                                <td><?php echo $row['phone']; ?></td>
                                                                <td><?php echo $row['vist']; ?></td>

																
															
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
												$sql="select DISTINCT(code) from vist where branch=? ";
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
							
											
										
							<input class="btn btn-success" type="submit" name="search2" value="search">
							
										
													
													
											
											
									
									
								</form>
								<?php if(isset($_POST['search2'])){
										
										$code=$_POST['code'];
										
										
											
									
									?>
									<div class="table-responsive">
										<table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4" >
											<thead>
												<tr>
												<th >الفرع</th>
                                                <th> رقم كود الحالة</th>
                                                <th>  اسم الاب</th>
                                                <th> رقم التلفون</th>
                                                <th>  موعد الحجز </th>
												
													
													
												
													
												</tr>
											</thead>
											<tfoot>
                                                <th >الفرع</th>
                                                <th> رقم كود الحالة</th>
                                                <th>  اسم الاب</th>
                                                <th> رقم التلفون</th>
                                                <th>  موعد الحجز </th>
											</tfoot>
											<tbody>
												<?php
												// find branch
												$branch=$_SESSION['user']['branch_id'];
											
												//end find branch 

												$sql="SELECT * FROM vist where code=? and branch=?   ORDER BY `vist`.`date` desc  ";	
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
																<td><?php echo $row['code']; ?></td>
                                                                <td><?php echo $row['father']; ?></td>
                                                                <td><?php echo $row['phone']; ?></td>
                                                                <td><?php echo $row['vist']; ?></td>

																
															
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
