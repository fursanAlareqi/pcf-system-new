<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 }if($_SESSION['user']['rule_id']==10||$_SESSION['user']['rule_id']==2 ||$_SESSION['user']['rule_id']==6){
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
												$sql="select DISTINCT(code) from doctor where branch=? ";
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
												<th>   </th>
												<th> رقم كود الحالة</th>
												<th> اسم الفحص</th>
												<th> تاريخ كتابة الدكتور للفحص </th>
													
													
												
													
												</tr>
											</thead>
											<tfoot>
											<th>   </th>
												<th> رقم كود الحالة</th>
												<th> اسم الفحص</th>
												<th> تاريخ كتابة الدكتور للفحص </th>
											</tfoot>
											<tbody>
												<?php
													$sql="select * from psyshological where code =? ORDER BY `psyshological`.`date` desc  ";	
													$stmu=$con->prepare($sql); 
													$stmu->execute(array($code));
													$row=$stmu->fetch();

													$sql="select * from doctor where code =? ORDER BY `doctor`.`date` desc  ";	
													$stm=$con->prepare($sql); 
													$stm->execute(array($code));
													$rows=$stm->fetch();
													if($row['date']>=$rows['date']){
												?>

															<tr>
																<td>الطبيب النفسي</td>
																<td><?php echo $row['code'];?></td>
																<td>
																	<?php $lap_explode =explode(",",$row['lap']);
																	foreach($lap_explode as $lap_name ){
																		echo $lap_name . '<br>';
																	}
																	 ?>
																</td>
																<td><?php echo $row['date'];?></td>
															</tr>

															<?php } if($rows['date']>=$row['date']){?>

																<tr>
																	<td>الطبيب العام</td>
																	<td><?php echo $rows['code'];?></td>
																	<td>
																		<?php $lap_explode =explode(",",$rows['lap']);
																		foreach($lap_explode as $lap_name ){
																			echo $lap_name . '<br>';
																		}
																		?>
																	</td>
																	<td><?php echo $rows['date'];?></td>
															</tr>

															<?php }?>
															
															
												
												
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
