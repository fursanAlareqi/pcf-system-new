<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 }
 if($_SESSION['user']['rule_id']==7||$_SESSION['user']['rule_id']==15||$_SESSION['user']['rule_id']==2||$_SESSION['user']['rule_id']==6||$_SESSION['user']['rule_id']==16){
?>


		
			<div class="content">
				<div class="page-inner">
				

					<div class="row">
						<div class="col-md-12">
						<?php 
                if(isset($_GET['action'],$_GET['ids']) && $_GET['action']=='edit'){
                  $id=$_GET['ids'];
                  $sql="select * from eduction_session where id=?";
                  $stm=$con->prepare($sql); 
                  $stm->execute(array($id));
                  if($stm->rowCount())
                      {
                  foreach($stm->fetchAll() as $row) {
                     
					  	?>
							<form action="" method="post">
								<div class="card">
									<div class="card-header">
										<div class="card-title"> تعديل بيانات   تثقيف النفسي</div>
									</div>
									<div class="card-body">
									<div class="row">
											<div class="col-md-6 col-lg-4">
												<div class="form-group form-floating-label">
													<label >رقم الكود</label>
													<input  type="number" value="<?php echo $row['code']; ?>" disabled class="form-control input-border-bottom" id="inputFloatingLabel"  required >
													<input  type="hidden" value="<?php echo $row['code']; ?>"  class="form-control input-border-bottom" id="inputFloatingLabel" name="code"  required >
												</div>
											
											
												
													

													
											
													
												
												
											</div>
											<div class="col-md-6 col-lg-4">
                                             
										
	
												<div class="form-group form-floating-label">
													<label >تاريخ تسجيل الحالة</label>
													<input  type="date" value="<?php echo $row['date']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="date"  required >
												</div>
                                               
											
												
												
											
											
											
										
											</div>
                                            <div class="col-md-6 col-lg-4">
                                                <div class="form-group">
													<label for="comment">الموضوع</label>
													<textarea class="form-control" id="comment" name="detals" rows="5" required>
                                                            <?php echo $row['detals']; ?>
													</textarea>
												</div>
                                            </div>

											
											
										</div>
									</div>
									</div>
									<?php  } ?>
									<div class="card-action">
										
										
										<input class="btn btn-success" type="submit" name="save" value="save">
										<input class="btn btn-danger" type="reset" value="Cancel">
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
if(isset($_POST['save'])){
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }

    
      $today= date('Y-m-d');
      $date=test_input($_POST["date"]);
      $code=test_input($_POST["code"]);
      $detals=test_input($_POST["detals"]);

      

      $user=$_SESSION['user']['id'];
      // find branch
      $branch=$_SESSION['user']['branch_id'];
      //end find branch 
      
        
        
        
    
        
        


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


        elseif(empty($date))
        {
            
            
            echo '<script>swal("يرجاء ادخال  تاريخ دخول الحالة ", "لم يتم رفع البيانات", {
                icon : "warning",
                buttons: {        			
                    confirm: {
                        className : "btn btn-warning"
                    }
                },
            });</script>';
        }

        elseif(empty($phone))
        {
            
            
            echo '<script>swal("يرجاء ادخال phone الحاله ", "لم يتم رفع البيانات", {
                icon : "warning",
                buttons: {        			
                    confirm: {
                        className : "btn btn-warning"
                    }
                },
            });</script>';
        }
    
        elseif(!is_numeric($phone))
        {
            
            
            echo '<script>swal("يرجاء ادخال رقم الحالة ", "لم يتم رفع البيانات", {
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
        
            

                $query="UPDATE eduction_session set date=?,code=,detals=? where id=? ";
                $stm=$con->prepare($query);
                $stm->execute(array($date,$code,$detals,$id));
                if($stm->rowCount())	
                {
                    echo '<script src="js/send_success.js"></script>';
                    echo "<script>
                          window.open('today_eduction_session_data.php?num=26&id=100','_self')
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
