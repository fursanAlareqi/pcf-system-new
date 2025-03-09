<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 }if($_SESSION['user']['rule_id']==7||$_SESSION['user']['rule_id']==15||$_SESSION['user']['rule_id']==2 ||$_SESSION['user']['rule_id']==6||$_SESSION['user']['rule_id']==16||$_SESSION['user']['rule_id']==18){
?>


		
			<div class="content">
				<div class="page-inner">
				

					<div class="row">
						<div class="col-md-12">
							<form action="" method="post">
								<div class="card">
									<div class="card-header">
										<div class="card-title">اختبار MMBI </div>
										
									</div>
									<div class="card-body">
										
											
										
								<?php
								// find branch
								$branch=$_SESSION['user']['branch_id'];
 
								$sql="select * from mmbi where   branch =?  ";	
								$stmu=$con->prepare($sql); 
								$stmu->execute(array($branch));
								//عدد الحالات الكلية
								if($stmu->rowCount()>0){

	
									
									?>
									<div class="table-responsive">
										<table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4" >
											<thead>
												<tr>
                                                    <th>Sno.</th>
                                                    <th>الكود الخاص بالحالة</th>
                                                    <th class="hidden-phone">الجنس</th>
                                                    <th> مجموع (س ك)</th>
                                                    <th> مجموع (ه ي)</th>
                                                    <th> مجموع (ه س)</th>
                                                    <th> مجموع (ك )</th>
                                                    <th> مجموع (ف )</th>
                                                    <th> مجموع (م ف)</th>
                                                    <th>مجموع (س ي) </th>
                                                    <th> مجموع (ب أ)</th>
                                                    <th> مجموع (ب ت)</th>
                                                    <th> مجموع (م أ)</th>
                                                    <th> مجموع (ب د)</th>
                                                    <th> مجموع ( د)</th>
                                                    <th> مجموع ( ل)</th>
                                                    <th> تكيفة معا الاعراض</th>
                                                    <th> التشخيص</th>
                                                    <th> الشخصية</th>
												</tr>
											</thead>
											<tfoot>
                                                <th>Sno.</th>
                                                <th>الكود الخاص بالحالة</th>
                                                <th class="hidden-phone">الجنس</th>
                                                <th> مجموع (س ك)</th>
                                                <th> مجموع (ه ي)</th>
                                                <th> مجموع (ه س)</th>
                                                <th> مجموع (ك )</th>
                                                <th> مجموع (ف )</th>
                                                <th> مجموع (م ف)</th>
                                                <th>مجموع (س ي) </th>
                                                <th> مجموع (ب أ)</th>
                                                <th> مجموع (ب ت)</th>
                                                <th> مجموع (م أ)</th>
                                                <th> مجموع (ب د)</th>
                                                <th> مجموع ( د)</th>
                                                <th> مجموع ( ل)</th>
                                                <th> تكيفة معا الاعراض</th>
                                                <th> التشخيص</th>
                                                <th> الشخصية</th>
											</tfoot>
											<tbody>
												<?php

												{
													$cnt=1;
													foreach($stmu->fetchAll() as $row) 
															{
															
															?>

															<tr>
																<td><?php echo $cnt;?></td>
																<td><?php echo $row['names'];?></td>
                                                                <td><?php echo $row['sex'];?></td>
                                                                <td><?php echo $row['s_k'];?></td>
                                                                <td><?php echo $row['h_i'];?></td>
                                                                <td><?php echo $row['h_s'];?></td>
                                                                <td><?php echo $row['k'];?></td>
                                                                <td><?php echo $row['f'];?></td>
                                                                <td><?php echo $row['m_f'];?></td>
                                                                <td><?php echo $row['s_i'];?></td>
                                                                <td><?php echo $row['b_a'];?></td>
                                                                <td><?php echo $row['b_t'];?></td>
                                                                <td><?php echo $row['m_a'];?></td>
                                                                <td><?php echo $row['b_d'];?></td>
                                                                <td><?php echo $row['d'];?></td>
                                                                <td><?php echo $row['l'];?></td>
                                                                <td><?php echo $row['y'];?></td>
                                                                <td><?php echo $row['v'];?></td>
                                                                <td><?php echo $row['u'];?></td>
															</tr>
															<?php
																	
																	$cnt=$cnt+1;
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
