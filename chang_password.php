<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 }if($_SESSION['user']['rule_id']==4||$_SESSION['user']['rule_id']==2 ||$_SESSION['user']['rule_id']==6){
?>


		
			<div class="content">
				<div class="page-inner">
				

					<div class="row">
						<div class="col-md-12">
						<?php 
                if(isset($_GET['action'],$_GET['id']) && $_GET['action']=='edit'){
                  $id=$_GET['id'];
                  $sql="select * from user where id=?";
                  $stm=$con->prepare($sql); 
                  $stm->execute(array($id));
                  if($stm->rowCount())
                      {
                  foreach($stm->fetchAll() as $row) {
				    $name=$row['name'];
					$user_pass=$row['password'];
				  }
					  	?>
							<form action="" method="post" enctype="multipart/form-data">
								<div class="card">
									<div class="card-header">
										<div class="card-title">  تغيير كلمة السر لي <?php echo $name; ?></div>
									</div>
									<div class="card-body">
										<div class="row">
											
										
										<div class="col-md-6 col-lg-4">
												
												
										
												<div class="form-group form-floating-label">
												<input id="inputFloatingLabel" type="password" name="new_password"  class="form-control input-border-bottom" id="nmbrone" required >
													<label for="inputFloatingLabel" class="placeholder">new password</label>
												</div>
											
												
												
											</div>
									
											
										</div>
											
									</div>
									<div class="card-action">
										
										
										<input class="btn btn-success" type="submit" name="update" value="save">
										<input class="btn btn-danger" type="reset" value="Cancel">
									</div>
								</div>
							</form>
					<?php
                        }
                        else { 

                         echo' <div class="alert alert-danger">NO Row</div>';
                           }
                      }
                   ?>
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
	if(isset($_POST['update'])){

		
	
		$new_password=trim($_POST['new_password']);
		$password=password_hash($new_password,PASSWORD_DEFAULT);
		
	
		

		
		
		
		//التحقق انه تم اختيار ملف
		
		
		//التحقق ان اسم المنتج موجود وليس ارقام
	
		
		


		
		if(empty($new_password))
		{
			
			
			echo '<script>swal("يرجاء ادخال ادخال كلمة السر الجديدة   ", "لم يتم رفع البيانات ", {
				icon : "warning",
				buttons: {        			
					confirm: {
						className : "btn btn-warning"
					}
				},
			});</script>';
		}
		
	


		
		else
		{
			
			

			$query="UPDATE user SET password=? where id=?";          
			$stm=$con->prepare($query);
			$stm->execute(array($password,$id));
				if($stm->rowCount())
					{
						echo '<script src="js/send_success.js"></script>';
						echo "<script>
                                window.open('add_user.php','_self')
                             </script>";
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
