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
										<div class="card-title">اختبار  هاملتون لاعراض مرض الاكتئاب</div>
										
									</div>
									<div class="card-body">
										
											
										
								<?php
								// find branch
								$branch=$_SESSION['user']['branch_id'];
 
								$sql="select * from hamilton_exam where   branch =?  ";	
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
                                                    <th> رقم كود الحالة</th>
                                                    <th> الدرجة الكلية لشدة الاكتئاب</th>
                                                    <th> شدة الاكتئاب</th>
                                                    <th> المزاج الاكتئابي</th>
                                                    <th> تـأنيب الضمير او الشعور بالذنب</th>
                                                    <th> الانتحار</th>
                                                    <th> العمل واهتمامات الحياة</th>
                                                    <th> التكاسل والتثاقل</th>
                                                    <th> القلق النفسي</th>
                                                    <th> القلق الجسمي  اعراض معدية معوية: ارياح عسر هضم ,قلبية:خفقان وصداع,تنفسية</th>
                                                    <th> توهم المرض</th>
                                                    <th> الارق  في بداية الليل</th>
                                                    <th> الارق في منتصف الليل</th>
                                                    <th> الارق اخر الليل </th>
                                                    <th> البلبلة و الارتياح (فرك الأيادي و التمشي جيئة وذهاباً)</th>
                                                    <th> أعراض جسمية(معدية معويه:فقدان الشهية,الاحساس بثقل في البطن,الامساك)</th>
                                                    <th> اعراض جسميه عامة(ثقل في الاطراف أو الظهر أو الرأس ,الام غير محددة في الظهر فقدان الحيوية وسهولة التعب)</th>
                                                    <th> اعراض جنسية (فقدان الرغبة الجنسية ,اضطرابات الطمث)</th>
                                                    <th> الاستبصار</th>
                                                    <th> نقص الوزن</th>
												</tr>
											</thead>
											<tfoot>
                                                <th>Sno.</th>
                                                <th> رقم كود الحالة</th>
                                                <th> الدرجة الكلية لشدة الاكتئاب</th>
                                                <th> شدة الاكتئاب</th>
                                                <th> المزاج الاكتئابي</th>
                                                <th> تـأنيب الضمير او الشعور بالذنب</th>
                                                <th> الانتحار</th>
                                                <th> العمل واهتمامات الحياة</th>
                                                <th> التكاسل والتثاقل</th>
                                                <th> القلق النفسي</th>
                                                <th> القلق الجسمي  اعراض معدية معوية: ارياح عسر هضم ,قلبية:خفقان وصداع,تنفسية</th>
                                                <th> توهم المرض</th>
                                                <th> الارق  في بداية الليل</th>
                                                <th> الارق في منتصف الليل</th>
                                                <th> الارق اخر الليل </th>
                                                <th> البلبلة و الارتياح (فرك الأيادي و التمشي جيئة وذهاباً)</th>
                                                <th> أعراض جسمية(معدية معويه:فقدان الشهية,الاحساس بثقل في البطن,الامساك)</th>
                                                <th> اعراض جسميه عامة(ثقل في الاطراف أو الظهر أو الرأس ,الام غير محددة في الظهر فقدان الحيوية وسهولة التعب)</th>
                                                <th> اعراض جنسية (فقدان الرغبة الجنسية ,اضطرابات الطمث)</th>
                                                <th> الاستبصار</th>
                                                <th> نقص الوزن</th>
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
                                                                
                                                                <td><?php echo $row['all_exam'];?></td>
                                                                <td><?php echo $row['a1'];?></td>
                                                                <td><?php echo $row['a2'];?></td>
                                                                <td><?php echo $row['a3'];?></td>
                                                                <td><?php echo $row['a4'];?></td>
                                                                <td><?php echo $row['a5'];?></td>
                                                                <td><?php echo $row['a6'];?></td>
                                                                <td><?php echo $row['a7'];?></td>
                                                                <td><?php echo $row['a8'];?></td>
                                                                <td><?php echo $row['a9'];?></td>
                                                                <td><?php echo $row['a10'];?></td>
                                                                <td><?php echo $row['a11'];?></td>
                                                                <td><?php echo $row['a12'];?></td>
                                                                <td><?php echo $row['a13'];?></td>
                                                                <td><?php echo $row['a14'];?></td>
                                                                <td><?php echo $row['a15'];?></td>
                                                                <td><?php echo $row['a16'];?></td>
                                                                <td><?php echo $row['a17'];?></td>
                                                                
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
