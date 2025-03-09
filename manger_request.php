<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 }if($_SESSION['user']['rule_id']==13||$_SESSION['user']['rule_id']==2 ||$_SESSION['user']['rule_id']==6){
	$user=$_SESSION['user']['id'];
?>


		
			<div class="content">
				<div class="page-inner">
				

					<div class="row">
						
						<div class="col-md-12">
							<form action="" method="post">
								<div class="card">
									<div class="card-header">
										<div class="card-title"> قسم الطلب</div>
									</div>
									<div class="card-body">
										<div class="row">
											
										
											<div class="col-md-6 col-lg-4">

											<div class="form-group form-floating-label">
												<label for="tokens">اسم الصنف</label>
												<select class="selectpicker form-control" name="name" id="tokens"  data-live-search="true" required >
													<option value=""></option>
													<?php 
												
														$sql="select name from request_name  ";
														$stm=$con->prepare($sql); 
														$stm->execute();
														if($stm->rowCount()>0)
															{
																foreach($stm->fetchAll() as $row) 
																{
														
													
														
												
													?>
														<option value="<?php echo $row['name']; ?>"><?php echo $row['name']; ?></option>
														
													<?php
																}
															}
													?>
												
												</select>	
											</div>
												
												
											</div>
											<div class="col-md-6 col-lg-4">
												<div class="form-group form-floating-label">
													<label for="tokens">نوع الكمية</label>
													<select class="selectpicker form-control" name="type" id="tokens"  data-live-search="true" required >
														<option value=""></option>
														<option >حبة</option>
														<option >كرتون</option>
														
															
															
														
													</select>	
												</div>
													  
												
											</div>
											<div class="col-md-6 col-lg-4">
												<div class="form-group form-floating-label">
													<label > الكمية</label>
													<input  type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="num"  required >
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
									<h4 class="card-title"> جدول الطلبات لليوم</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4" >
											<thead>
												<tr>
													<th>اسم الصنف</th>
													<th>نوع الكمية</th>
													<th>الكمية</th>
												
												
													
													
												</tr>
											</thead>
											<tfoot>
												<tr>
													<th>اسم الصنف</th>
													<th>نوع الكمية</th>
													<th>الكمية</th>
												
													
												</tr>
											</tfoot>
											<tbody>
												<?php
													$today= date('Y-m-d');
													$sql="select * from request where sender_name=? and date=?";
													$stm=$con->prepare($sql); 
													$stm->execute(array($user,$today));
													if($stm->rowCount()>0)
														{
															foreach($stm->fetchAll() as $row) 
															{

												?>

												<tr>
													<td><?php echo $row['name'] ?></td>
													<td><?php echo $row['type'] ?></td>
													<td><?php echo $row['num'] ?></td>

													

												
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
		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		  }

		
			$name=test_input($_POST["name"]);
			$type=test_input($_POST["type"]);
			$num=test_input($_POST["num"]);

		
		


		  
			// find branch
			$branch=$_SESSION['user']['branch_id'];


			//end find branch 
			
			
			
			//التحقق ان اسم المنتج موجود وليس ارقام
		
			
			


			if(empty($user))
			{
				
				
				echo '<script>swal("يرجاء اعادة تسجيل الدخول   ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
			}

			elseif(empty($name))
			{
				
				
				echo '<script>swal("يرجاء اختيار اسم الصنف ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
			}

			elseif(empty($type))
			{
				
				
				echo '<script>swal("يرجاء تحديد نوع الكمية   ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
			}
		
			
			elseif(empty($num))
			{
				
				
				echo '<script>swal("يرجاء تحديد الكمية   ", "لم يتم رفع البيانات", {
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
				$query="INSERT INTO request (branch,sender_name,name,type,num)
				values (?,?,?,?,?) ";
				$stm=$con->prepare($query);
				$stm->execute(array($branch,$user,$name,$type,$num));
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
else {
echo "<script> window.open('index.php','_self')</script>";
}
?>
