<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 }if($_SESSION['user']['rule_id']==14||$_SESSION['user']['rule_id']==2 ||$_SESSION['user']['rule_id']==6){
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
					$image=$row['image'];
					$row_username=$row['username'];
					$row_mobile=$row['mobile'];
                     
					  	?>
							<form action="" method="post" enctype="multipart/form-data">
								<div class="card">
									<div class="card-header">
										<div class="card-title">اضافة اجازة</div>
									</div>
									<div class="card-body">
										<div class="row">
											
										
									
											<div class="col-md-6 col-lg-4">
                                                <h3><?php echo $row['name'] ?></h3>
                                                <div class="form-group form-floating-label">
                                                    <input id="inputFloatingLabel" type="number" name="vacation" value='<?php echo $row['vacation'] ?>' class="form-control input-border-bottom" id="nmbrone"  required >
                                                    <label for="inputFloatingLabel" class="placeholder">عدد ايام الاجازة</label>
                                                </div>
											</div>
											
										</div>
											<?php
                      						  }
               							 	?>
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

		$error=0;
		
		$vacation=trim($_POST['vacation']);
	    $user=$_SESSION['user']['id'];
	
	
		

		
		
		
		
		


		if(empty($vacation))
		{
			
			
			echo '<script>swal("يرجاء ادخال  عدد الاجازة للموظف ", "لم يتم رفع البيانات", {
				icon : "warning",
				buttons: {        			
					confirm: {
						className : "btn btn-warning"
					}
				},
			});</script>';
		}
        elseif(empty($user))
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

		elseif(!is_numeric($vacation))
		{
			
			
			echo '<script>swal(" الاجازة  يجب ان تكون اراقم", "لم يتم رفع البيانات", {
				icon : "warning",
				buttons: {        			
					confirm: {
						className : "btn btn-warning"
					}
				},
			});</script>';
			
		}



	    else{
                $query="UPDATE user SET vacation=? where id=?";          
                $stm=$con->prepare($query);
                $stm->execute(array($vacation,$id));
                if($stm->rowCount())
                {
                    echo '<script src="js/send_success.js"></script>';
                    echo "<script>
                                window.open('hr_add_user_vacation.php?num=2&id=13','_self')
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
