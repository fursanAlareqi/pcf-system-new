<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 }if($_SESSION['user']['rule_id']==13 ||$_SESSION['user']['rule_id']==6){
?>


		
			<div class="content">
				<div class="page-inner">
				

					<div class="row">
						<div class="col-md-12">
							<form action="" method="post">
								<div class="card">
									<div class="card-header">
										<div class="card-title"> اضافة  صنف من المطلوبات</div>
									</div>
									<div class="card-body">
										<div class="row">
											
										
											<div class="col-md-6 col-lg-4">
												
												
												
												<div class="form-group form-floating-label">
													
													<input id="inputFloatingLabel" type="text" name="specialty" class="form-control input-border-bottom"required >
													<label for="inputFloatingLabel" class="placeholder">اسم الصنف</label>
												</div>
											
												
											</div>
											
											
										</div>
									</div>
									<div class="card-action">
										
										
										<input class="btn btn-success" type="submit" name="save" value="save">
										<input class="btn btn-danger" type="reset" value="Cancel">
									</div>
								</div>
							</form>
						</div>
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title"> بيانات الصنف</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4" >
											<thead>
												<tr>
													<th>ID </th>
													<th>اسم الصنف</th>
													
												
													
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>ID </th>
													<th>اسم الصنف</th>
													
													
													
												</tr>
											</tfoot>
											<tbody>
												<?php
													$sql="select * from request_name";
													$stm=$con->prepare($sql); 
													$stm->execute();
													if($stm->rowCount()>0)
														{
															foreach($stm->fetchAll() as $row) 
															{

												?>

												<tr>
													<td><?php echo $row['id'] ?></td>
													<td><?php echo $row['name'] ?></td>
												

												
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
	if(isset($_POST['save'])){

			$specialty=trim($_POST['specialty']);
			

			
			//التحقق ان اسم المنتج موجود وليس ارقام
		
			
			


			if(empty($specialty))
			{
				
				
				echo '<script>swal("يرجاء ادخال اسم الصنف ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
			}
			elseif(is_numeric($name))
			{
				
				
				echo '<script>swal("اسم الصنف لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
				
			}






			
			/////////////////////////////////////////////////////////////////////////////////////تذكير الشرط حق الايميل

			//اذا لايوجد اي مشكلة يقوم بارسال الملف
			else
			{
				$sql="select * from request_name where  name=?";
				$stm=$con->prepare($sql); 
				$stm->execute(array($specialty));
				if($stm->rowCount()){

					echo '<script>swal("لقد تم ادخال   هذا الصنف  في النظام من قبل", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
				}
				else{
					$query="INSERT INTO request_name(name)
					values (?) ";
					$stm=$con->prepare($query);
					$stm->execute(array($specialty));
					if($stm->rowCount())
					{
						echo '<script src="js/send_success.js"></script>';
					}
					else
					{
						echo'<script src="js/send_error.js"></script>';
					}
				}
				}
			


		

		
	}
} 
else {
echo "<script> window.open('index.php','_self')</script>";
}
?>
