<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 }
?>


		
			<div class="content">
				<div class="page-inner">
				

					<div class="row">
					

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">جدول الاجازات</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4" >
											<thead>
												<tr>
													
													<th> اسم البديل</th>
													<th>نوع الاجازة</th>
													<th>تاريخ الاجازة</th>
													<th>الموافقة</th>
													
													
													
												</tr>
											</thead>
											<tfoot>
												<tr>
                                                   
													<th> اسم البديل</th>
													<th>نوع الاجازة</th>
													<th>تاريخ الاجازة</th>
													<th>الموافقة</th>
													
												</tr>
											</tfoot>
											<tbody>
												<?php
                                                    $user_id=$_SESSION['user']['id'];
													$sql="select * from vacation_request where sender_name=?";
													$stm=$con->prepare($sql); 
													$stm->execute(array($user_id));
													if($stm->rowCount()>0)
														{
															foreach($stm->fetchAll() as $row) 
															{

												?>

												<tr>
													<td>
                                                        <?php
                                                            $sql="select * from user where id=?";
                                                            $stm=$con->prepare($sql); 
                                                            $stm->execute(array($row['emp']));
                                                            $empx_name=$stm->fetch();
                                                            echo  $empx_name['name']
                                                        ?>
                                                    </td>
													<td><?php echo $row['type'] ?></td>
													<td><?php echo $row['date'] ?></td>

													<td>
                                                         <?php 
                                                         if($row['request']==0){
                                                             echo "جاري الموافقة على الطلب";
                                                             
                                                         }
                                                         elseif($row['request'] ==1){
                                                             echo "تم الموافقة على الطلب";
                                                         }
                                                         elseif($row['request']==2){
                                                             echo "لم يتم الموافقة على طلبك";
                                                         }
                                                         
                                                         ?>
                                                    </td>

												
												</tr>
												<?php }
														}

												?>

												
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
				
			</div>
		
		
		
		<!-- Custom template | don't include it in your project! -->
		
		<!-- End Custom template -->
		<?php

include "include/footer.php";

							
?>

