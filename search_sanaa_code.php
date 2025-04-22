<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
}if($_SESSION['user']['rule_id']==22||$_SESSION['user']['rule_id']==2 ||$_SESSION['user']['rule_id']==6){
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
												
								
												//end find branch 
												$sql="select DISTINCT(code) from sana ";
												$stm=$con->prepare($sql); 
												$stm->execute();
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
													<th>نوع الزياره</th>
													<th>الفرع</th>
													<th>العمر</th>
													<th> الجنس</th>
													<th> رقم كود الحالة</th>
													<th>تاريخ الميلاد</th>
													<th>تاريخ تسجيل الحالة</th>
													<th>نوع الاقامة</th>
													<th>نوع العمل</th>
													<th>الحالة الاجتماعية</th>
													<th>نوع الاعاقة</th>
													<th> الخدمة</th>
													<th> التشخيص</th>
													<th> نوع الاحاله(وارد)</th>
													<th> الجهة المحال منها(وارد)</th>
													<th> نوع الاحاله(صادر)</th>
													<th> الجهة المحال اليها(صادر)</th>
													<th>تعديل</th>
													
												
													
												</tr>
											</thead>
											<tfoot>
												<th>نوع الزياره</th>
												<th>الفرع</th>
												<th>العمر</th>
												<th> الجنس</th>
												<th> رقم كود الحالة</th>
												<th>تاريخ الميلاد</th>
												<th>تاريخ تسجيل الحالة</th>
												<th>نوع الاقامة</th>
												<th>نوع العمل</th>
												<th>الحالة الاجتماعية</th>
												<th>نوع الاعاقة</th>
												<th> الخدمة</th>
												<th> التشخيص</th>
												<th> نوع الاحاله(وارد)</th>
												<th> الجهة المحال منها(وارد)</th>
												<th> نوع الاحاله(صادر)</th>
												<th> الجهة المحال اليها(صادر)</th>
												<th>تعديل</th>


											</tfoot>
											<tbody>
												<?php
												// find branch
												$branch=$_SESSION['user']['branch_id'];
											
												//end find branch 

												$sql="SELECT * FROM sana where code =?    ORDER BY `sana`.`date` desc  ";	
												$stmu=$con->prepare($sql); 
												$stmu->execute(array($code));
												//عدد الحالات الكلية
												if($stm->rowCount()>0)
												{
													foreach($stmu->fetchAll() as $row) 
															{
															
															?>

														<tr>
															<td><?php echo $row['type']; ?></td>
															<td>
																<?php
																$sql = "select * from branch where  id=? ";
																$stm = $con->prepare($sql);
																$stm->execute(array($row['branch']));
																$branch = $stm->fetch();
																$branch_name = $branch['branch_name'];
																echo $branch_name;
																?>
															</td>
															<td>
																<?php
																$sql = "SELECT 
																			YEAR(CURDATE()) - YEAR(brithday) - 
																			(DATE_FORMAT(CURDATE(), '%m-%d') < DATE_FORMAT(brithday, '%m-%d')) AS age ,sex
																		FROM sana
																		WHERE id = ?    ";
																$stmu = $con->prepare($sql);
																$stmu->execute(array($row['id']));
																$row_brithday_sex = $stmu->fetch();
																echo $row_brithday_sex['age']; ?>
															</td>
															<td><?php echo $row['sex']; ?></td>
															<td><?php echo $row['code']; ?></td>
															<td><?php echo $row['brithday']; ?></td>
															<td><?php echo $row['date']; ?></td>
															<td><?php echo $row['place']; ?></td>
															<td><?php echo $row['work']; ?></td>
															<td><?php echo $row['social_status']; ?></td>
															<td><?php echo $row['Disability']; ?></td>
															<td><?php echo $row['services']; ?></td>
															<td><?php echo $row['diagnosis']; ?></td>
															<td><?php echo $row['type_con_from']; ?></td>
															<td><?php echo $row['side_con_from']; ?></td>
															<td><?php echo $row['type_con_to']; ?></td>
															<td><?php echo $row['side_con_to']; ?></td>

															<td>
                                                                    <a href="sana_edit.php?action=edit&ids=<?php echo $row['id'] ?>" >  
                                                                        تعديل
                                                                    </a>
													        </td>
																
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
