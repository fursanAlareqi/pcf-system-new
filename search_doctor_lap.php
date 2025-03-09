<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 }if($_SESSION['user']['rule_id']==5||$_SESSION['user']['rule_id']==12||$_SESSION['user']['rule_id']==2 ||$_SESSION['user']['rule_id']==6){
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
												$sql="select DISTINCT(code) from lap where branch=? ";
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
										<br>
										<h2>(<?php echo $code  ?>) رقم الكود</h2>	
										<thead>
												<tr>
												<th>Test</th>
												<th class="hidden-phone">Result</th>
												<th>Reference values</th>
												<th>Date</th>
												
													
													
												
													
												</tr>
											</thead>
											<tfoot>
												<th>Test</th>
												<th class="hidden-phone">Result</th>
												<th>Reference values</th>
												<th>Date</th>
											</tfoot>
											<tbody>
												<?php
												// find branch
												$branch=$_SESSION['user']['branch_id'];
												
												//end find branch 

												$sql="SELECT * FROM lap where code =? and branch=?   ORDER BY `lap`.`date` desc  ";	
												$stmu=$con->prepare($sql); 
												$stmu->execute(array($code,$branch));
												//عدد الحالات الكلية
												if($stm->rowCount()>0)
												{ $cnt=1;
													foreach($stmu->fetchAll() as $row) 
															{
															
															?>
															<?php if(!empty($row['T_WBC'])) { ?> 
															<tr>
																<td> T_WBC</td>
																<td><?php echo $row['T_WBC'] ?></td>
																<td>4-10 *10^9 /L</td>
																<td><?php echo $row['date'];?></td>
															</tr>
															<?php }?>

															<?php if(!empty($row['Neutrophil'])) { ?> 
															<tr>
																<td> Neutrophil</td>
																<td><?php echo $row['Neutrophil'] ?></td>
																<td>40 - 70 %</td>
																<td><?php echo $row['date'];?></td>
															</tr>
															<?php }?>
															
															<?php if(!empty($row['Lymphocyte'])) { ?> 
															<tr>
																<td> Lymphocyte</td>
																<td><?php echo $row['Lymphocyte'] ?></td>
																<td>20 - 45 %</td>
																<td><?php echo $row['date'];?></td>
															</tr>
															<?php }?>
															
															<?php if(!empty($row['Monocyte'])) { ?> 
															<tr>
																<td> Monocyte</td>
																<td><?php echo $row['Monocyte'] ?></td>
																<td>2 - 10 %</td>
																<td><?php echo $row['date'];?></td>
															</tr>
															<?php }?>
															
															<?php if(!empty($row['Eosinophil'])) { ?> 
															<tr>
																<td> Eosinophil</td>
																<td><?php echo $row['Eosinophil'] ?></td>
																<td>0 - 6 %</td>
																<td><?php echo $row['date'];?></td>
															</tr>
															<?php }?>
															
															<?php if(!empty($row['Basophil'])) { ?> 
															<tr>
																<td> Basophil</td>
																<td><?php echo $row['Basophil'] ?></td>
																<td>0 - 1 %</td>
																<td><?php echo $row['date'];?></td>
															</tr>
															<?php }?>
															
															<?php if(!empty($row['Platelats'])) { ?> 
															<tr>
																<td> Platelats</td>
																<td><?php echo $row['Platelats'] ?></td>
																<td>150 - 450 *10^9 /L</td>
																<td><?php echo $row['date'];?></td>
															</tr>
															<?php }?>
															
															<?php if(!empty($row['Hb'])) { ?> 
															<tr>
																<td> Hb</td>
																<td><?php echo $row['Hb'] ?></td>
																<td>11.5 - 16.5 g/dl</td>
																<td><?php echo $row['date'];?></td>
															</tr>
															<?php }?>
															
															<?php if(!empty($row['PCV'])) { ?> 
															<tr>
																<td> PCV</td>
																<td><?php echo $row['PCV'] ?></td>
																<td>37 - 47 %</td>
																<td><?php echo $row['date'];?></td>
															</tr>
															<?php }?>
															
															<?php if(!empty($row['GPT'])) { ?> 
															<tr>
																<td> GPT</td>
																<td><?php echo $row['GPT'] ?></td>
																<td>up to 42 U/L</td>
																<td><?php echo $row['date'];?></td>
															</tr>
															<?php }?>
															
															<?php if(!empty($row['GOT'])) { ?> 
															<tr>
																<td> GOT</td>
																<td><?php echo $row['GOT'] ?></td>
																<td> up to 40 U/L</td>
																<td><?php echo $row['date'];?></td>
															</tr>
															<?php }?>
															
															<?php if(!empty($row['ALP'])) { ?> 
															<tr>
																<td> ALP</td>
																<td><?php echo $row['ALP'] ?></td>
																<td>Adult:64 - 306 U/L</td>
																<td><?php echo $row['date'];?></td>
															</tr>
															<?php }?>
															
															<?php if(!empty($row['T_B'])) { ?> 
															<tr>
																<td> T.B</td>
																<td><?php echo $row['T_B'] ?></td>
																<td>up to 1.1 mg/dl</td>
																<td><?php echo $row['date'];?></td>
															</tr>
															<?php }?>
															
															<?php if(!empty($row['D_B'])) { ?> 
															<tr>
																<td> D.B</td>
																<td><?php echo $row['D_B'] ?></td>
																<td>up to 0.25 mg/dl</td>
																<td><?php echo $row['date'];?></td>
															</tr>
															<?php }?>
															
															<?php if(!empty($row['Urea'])) { ?> 
															<tr>
																<td> Urea</td>
																<td><?php echo $row['Urea'] ?></td>
																<td>10 - 50 mg/dl</td>
																<td><?php echo $row['date'];?></td>
															</tr>
															<?php }?>
															
															<?php if(!empty($row['Creatinine'])) { ?> 
															<tr>
																<td> Creatinine</td>
																<td><?php echo $row['Creatinine'] ?></td>
																<td>Adult:0.6 - 1.2 <br> Children:0.2 - 0.7 mg/dl</td>
																<td><?php echo $row['date'];?></td>
															</tr>
															<?php }?>
															
															<?php if(!empty($row['HBsAg'])) { ?> 
															<tr>
																<td> HBsAg</td>
																<td><?php echo $row['HBsAg'] ?></td>
																<td>Reactive > 1.0 <br> Non-Reactive < 1.0 </td>
																<td><?php echo $row['date'];?></td>
															</tr>
															<?php }?>
															
															<?php if(!empty($row['HIV1_2'])) { ?> 
															<tr>
																<td> HIV1&2</td>
																<td><?php echo $row['HIV1_2'] ?></td>
																<td>Reactive > 1.0 <br> Non-Reactive < 1.0</td>
																<td><?php echo $row['date'];?></td>
															</tr>
															<?php }?>
															
															<?php if(!empty($row['Prolactine'])) { ?> 
															<tr>
																<td> Prolactine</td>
																<td><?php echo $row['Prolactine'] ?></td>
																<td>Male:4.1 - 18.4 ng/ml<br> Female:3.4 - 24.1 ng/ml</td>
																<td><?php echo $row['date'];?></td>
															</tr>
															<?php }?>
															
															<?php if(!empty($row['HCVAb'])) { ?> 
															<tr>
																<td> HCVAb</td>
																<td><?php echo $row['HCVAb'] ?></td>
																<td>Reactive Titer > 1.0 </td>
																<td><?php echo $row['date'];?></td>
															</tr>
															<?php }?>
															
															<?php if(!empty($row['TSH'])) { ?> 
															<tr>
																<td> TSH</td>
																<td><?php echo $row['TSH'] ?></td>
																<td>
																	 < 12 mth  1.4 - 8.8 
																	<br> 1 -6 yr 0.85 - 6.5 
																	<br>7 -12 yr 0.3 - 4.3 
																	<br> Adults 0.4 - 4.2 ulU/ml 
																</td>
																<td><?php echo $row['date'];?></td>
															</tr>
															<?php }?>
															
															<?php if(!empty($row['FT3'])) { ?> 
															<tr>
																<td> FT3</td>
																<td><?php echo $row['FT3'] ?></td>
																<td>
																	< 12 mth  2.9 - 6.8 
																	<br> 1 - 6 yr 2.5 - 5.3 
																	<br>7 - 12 yr 2.5 - 5.6
																	<br>13 - 17 yr 2.4 - 5.0
																	<br> Adults 2.0 - 4.4 pg/ml
																</td>
																<td><?php echo $row['date'];?></td>
															</tr>
															<?php }?>
															
															<?php if(!empty($row['FT4'])) { ?> 
															<tr>
																<td> FT4</td>
																<td><?php echo $row['FT4'] ?></td>
																<td>
																	< 12 mth  1.1 - 2.0 
																	<br> 1 - 6 yr 0.9 - 1.7 
																	<br>7 - 12 yr 1.1 - 1.7
																	<br>13 - 17 yr 1.1 - 1.8
																	<br> Adults 0.8 - 1.8 pg/ml
																</td>
																<td><?php echo $row['date'];?></td>
															</tr>
															<?php }?>
															
															<?php if(!empty($row['RBS'])) { ?> 
															<tr>
																<td> RBS</td>
																<td><?php echo $row['RBS'] ?></td>
																<td>
																	Normal 65 -140 
																	<br>Prediabetic 140 - 199
																	<br>Diabetic > 200 mg/dl
																</td>
																<td><?php echo $row['date'];?></td>
															</tr>
															<?php }?>
															
															<?php if(!empty($row['FBS'])) { ?> 
															<tr>
																<td> FBS</td>
																<td><?php echo $row['FBS'] ?></td>
																<td>
																	Normal 65 -100 
																	<br>Prediabetic 100 - 126
																	<br>Diabetic > 126 mg/dl
																</td>
																<td><?php echo $row['date'];?></td>
															</tr>
															<?php }?>
															
															<?php if(!empty($row['HbA1C'])) { ?> 
															<tr>
																<td> HbA1C</td>
																<td><?php echo $row['HbA1C'] ?></td>
																<td>
																	Normal < 5.5
																	<br>Prediabetic 5.5 - 6.5
																	<br>Diabetic > 6.5 
																	<br> Target 6.5 - 7.0 
																	<br> Uncontrol diabetic : higher than 10% 
																</td>
																<td><?php echo $row['date'];?></td>
															</tr>
															<?php }?>
															
															<?php if(!empty($row['Cocaine'])) { ?> 
															<tr>
																<td> Cocaine</td>
																<td><?php echo $row['Cocaine'] ?></td>
																<td></td>
																<td><?php echo $row['date'];?></td>
															</tr>
															<?php }?>
															
															<?php if(!empty($row['Opiate'])) { ?> 
															<tr>
																<td> Opiate</td>
																<td><?php echo $row['Opiate'] ?></td>
																<td></td>
																<td><?php echo $row['date'];?></td>
															</tr>
															<?php }?>
															
															<?php if(!empty($row['Morphine'])) { ?> 
															<tr>
																<td> Morphine</td>
																<td><?php echo $row['Morphine'] ?></td>
																<td></td>
																<td><?php echo $row['date'];?></td>
															</tr>
															<?php }?>
															
															<?php if(!empty($row['Cannabis'])) { ?> 
															<tr>
																<td> Cannabis</td>
																<td><?php echo $row['Cannabis'] ?></td>
																<td></td>
																<td><?php echo $row['date'];?></td>
															</tr>
															<?php }?>
															
															<?php if(!empty($row['Heroin'])) { ?> 
															<tr>
																<td> Heroin</td>
																<td><?php echo $row['Heroin'] ?></td>
																<td></td>
																<td><?php echo $row['date'];?></td>
															</tr>
															<?php }?>
															
															<?php if(!empty($row['Benzodiazepine'])) { ?> 
															<tr>
																<td> Benzodiazepine</td>
																<td><?php echo $row['Benzodiazepine'] ?></td>
																<td></td>
																<td><?php echo $row['date'];?></td>
															</tr>
															<?php }?>
															
															<?php if(!empty($row['Tramadol'])) { ?> 
															<tr>
																<td> Tramadol</td>
																<td><?php echo $row['Tramadol'] ?></td>
																<td></td>
																<td><?php echo $row['date'];?></td>
															</tr>
															<?php }?>
															
															<?php if(!empty($row['Pethidine'])) { ?> 
															<tr>
																<td> Pethidine</td>
																<td><?php echo $row['Pethidine'] ?></td>
																<td></td>
																<td><?php echo $row['date'];?></td>
															</tr>
															<?php }?>
															
									
															
															
															
															
															
															
															
															
															
															
															
															
															
															
															
															<?php $cnt=$cnt+1;
																	
															
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
