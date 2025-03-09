<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 }if($_SESSION['user']['rule_id']==14 ||$_SESSION['user']['rule_id']==2 ||$_SESSION['user']['rule_id']==6){
?>


		
			<div class="content">
				<div class="page-inner">
				

					<div class="row">
						

						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title"> جدول الموظفين</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4" >
											<thead>
												<tr>
													<th>اسم الموظف</th>
													<th>الفرع</th>
													<th>الوظيفة</th>
													<th>عدد ايام الاجازة</th>
													<th>تعديل</th>
													
													
												</tr>
											</thead>
											<tfoot>
												<tr>
												<th>اسم الموظف</th>
													<th>الفرع</th>
													<th>الوظيفة</th>
													<th>عدد ايام الاجازة</th>
													<th>تعديل</th>
													
												</tr>
											</tfoot>
											<tbody>
												<?php
													$sql="select * from user u  join rule r  on u.rule_id=r.id_rule and rule_id<>6";
													$stm=$con->prepare($sql); 
													$stm->execute();
													if($stm->rowCount()>0)
														{
															foreach($stm->fetchAll() as $row) 
															{

												?>

												<tr>
													<td><?php echo $row['name'] ?></td>
													

													<td><?php  
													$id=$row['branch_id'];
													$sql="select branch_name from branch where id=? ";
													$stms=$con->prepare($sql); 
													$stms->execute(array($id));
													$t=$stms->fetch();
													echo $t['branch_name'];?>
													</td>
													<td><?php echo $row['rule_name'] ?></td>
													<td><?php echo $row['vacation'] ?></td>
													<td>
														<a href="hr_edit_user_vacation.php?action=edit&id=<?php echo $row['id'] ?>" >  
															<button class="btn btn-success"><i class="fa fa-pencil"></i>تعديل</button>
														</a>
														
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
