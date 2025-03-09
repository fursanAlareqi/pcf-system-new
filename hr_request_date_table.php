<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 }if($_SESSION['user']['rule_id']==2 ||$_SESSION['user']['rule_id']==14 ||$_SESSION['user']['rule_id']==6){
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
													<th>الفرع</th>
                                                    <th> اسم طالب الاجازة</th>
                                                    <th> اسم البديل</th>
													<th>نوع الاجازة</th>
                                                    <th>الملف المرفق في حالة الاجازة المرضية</th>
													<th>تاريخ الاجازة</th>
													<th>الموافقة</th>
													
													
													
												</tr>
											</thead>
											<tfoot>
												<tr>
                                                    <th>الفرع</th>
                                                    <th> اسم طالب الاجازة</th>
                                                    <th> اسم البديل</th>
                                                    <th>نوع الاجازة</th>
                                                    <th>الملف المرفق في حالة الاجازة المرضية</th>
                                                    <th>تاريخ الاجازة</th>
                                                    <th>الموافقة</th>
													
												</tr>
											</tfoot>
											<tbody>
												<?php
                                                    $user_id=$_SESSION['user']['id'];
													$sql="select * from vacation_request";
													$stm=$con->prepare($sql); 
													$stm->execute();
													if($stm->rowCount()>0)
														{
															foreach($stm->fetchAll() as $row) 
															{

												?>

												<tr>
                                                <td>
        
                                                    <?php 
                                                    // find branch
                                                    $branch=$row['branch'];
                                                    $sql="select * from branch where  id=? ";
                                                    $stm=$con->prepare($sql); 
                                                    $stm->execute(array($branch));
                                                    $branch=$stm->fetch();
                                                    $branch=$branch['branch_name'];

                                                    //end find branch 
                                                    echo $branch;
                                                    ?>

                                                </td>
                                                <td>
                                                        <?php
                                                            $sql="select * from user where id=?";
                                                            $stm=$con->prepare($sql); 
                                                            $stm->execute(array($row['sender_name']));
                                                            $empx_name=$stm->fetch();
                                                            echo  $empx_name['name']
                                                        ?>
                                                    </td>
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
                                                    <td>
                                                        <?php if($row['type']=='مرضية'){?>

                                                        <a href="vacation_request_file/<?php echo $row['file'] ?>" target="_blank" >عرض الملف المرفق</a>

                                                        <?php }?>
                                                    </td>
													
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

<?php
//تم وضع كود في الاخير من اجل تنفيذ رسالة التحدذير
	
} 
else {
echo "<script> window.open('index.php','_self')</script>";
}
?>
