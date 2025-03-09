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
										<div class="card-title">تقرير مشروع الصرع</div>
									</div>
									<div class="card-body">
										
											
										<form action="" method="post">
								
								<div class="row row-demo-grid">
							
								<div class="form-group form-floating-label">
                                    <label >من تاريخ</label>
                                    <input  type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="from_date"  required >
                                </div>
                                <div class="form-group form-floating-label">
                                    <label >الى تاريخ</label>
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
										<table  class="table table-bordered table-head-bg-info table-bordered-bd-info " >
										<center>
										    <button id="export" class="btn btn-success">Export to excel</button>
										    </center>
										    <br>	
                                        <thead>
												<tr>
												
													
                                                <th >م</th>
                                                <th> رقم كود الحالة</th>
                                                <th>  الاسم</th>
                                                <th>  العمر</th>
                                                <th> الجنس </th>
                                                <th>  عدد الذكور  </th>
                                                <th>  عدد الاناث  </th>
												<th>   الاجمالي  </th>
												<th> رقم الهاتف </th>	
                                                <th> الحالة الاجتماعيه </th>
                                                <th>توع العمل المستفيد او رب الاسره</th>
                                                <th>تشخيص المريض</th>
                                                <th>  التاريخ</th>
												</tr>
											</thead>
											
											<tbody>
												<?php
												// find branch
												$branch=$_SESSION['user']['branch_id'];
											
												//end find branch 

												$sql="SELECT *,TIMESTAMPDIFF(YEAR,brithday,CURDATE()) as age FROM resption where (date BETWEEN ? and ?) and branch=? and project like ?   ";	
												$stmu=$con->prepare($sql); 
												$stmu->execute(array($from_date,$to_date,'6','%مشروع الاستجابة الطارئة لإنقاض امراض الصرع%'));
												//عدد الحالات الكلية
												if($stmu->rowCount()>0)
												{
                                                    $num=1;
													foreach($stmu->fetchAll() as $row) 
															{
															
															?>

															<tr>
																
																<td><?php echo $num; ?></td>
																<td><?php echo $row['code']; ?></td>
                                                                <td><?php echo $row['name']; ?></td>
                                                                <td><?php echo $row['age']; ?></td>
                                                                <td><?php echo $row['sex']; ?></td>
                                                                <td><?php  ?></td>
                                                                <td><?php  ?></td>
                                                                <td><?php  ?></td>
                                                                <td><?php echo $row['phone']; ?></td>
                                                                <td><?php echo $row['social_status']; ?></td>
                                                                <td><?php echo $row['work']; ?></td>
                                                                <td>صرع</td>
                                                                <td><?php echo $row['date']; ?></td>
															</tr>
															<?php
																	
															$num+=1;
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
