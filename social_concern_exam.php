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
										<div class="card-title"> مقياس القلق الاجتماعي</div>
										
									</div>
									<div class="card-body">
										
											
										
								<?php
								// find branch
								$branch=$_SESSION['user']['branch_id'];
 
								$sql="select * from social_concern_exam where   branch =?  ";	
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
                                                    <th class="hidden-phone">الكود الخاص بالحالة</th>
                                                    <th>  درجة الاختبار الكلية</th>
                                                    <th>درجة قلق التفاعل الاجتماعي </th>
                                                    <th>درجة قلق المواجهة في المواقف الاجتماعية </th>
                                                    <th>درجة الاعراض المصاحبة للقلق الاجتماعي</th>
                                 

												</tr>
											</thead>
											<tfoot>
                                                <th>Sno.</th>
                                                <th class="hidden-phone">الكود الخاص بالحالة</th>
                                                <th>  درجة الاختبار الكلية</th>
                                                <th>درجة قلق التفاعل الاجتماعي </th>
                                                <th>درجة قلق المواجهة في المواقف الاجتماعية </th>
                                                <th>درجة الاعراض المصاحبة للقلق الاجتماعي</th>
                                 
                                                
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
                                                                <td><?php echo $row['exam_mark'];?></td>
                                                                <td><?php echo $row['reactivity'];?></td>
                                                                <td><?php echo $row['concern'];?></td>
                                                                <td><?php echo $row['accompanying_symptoms'];?></td>
                                                                
															
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
