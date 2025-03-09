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
                  $sql="select * from consult_his_psychology where id=?";
                  $stm=$con->prepare($sql); 
                  $stm->execute(array($id));
                  if($stm->rowCount())
                      {
                  foreach($stm->fetchAll() as $row) {
                     
					  	?>
							<form action="" method="post">
								<div class="card">
									<div class="card-header">
										<div class="card-title"> تعديل بيانات  جلسات فردية</div>
									</div>
									<div class="card-body">
									<div class="row">
											<div class="col-md-6 col-lg-4">
												
												
												<div class="form-group form-floating-label">
													<label >تاريخ تسجيل الحالة</label>
													<input  type="date" value="<?php echo $row['date']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="date"   >
												</div>
											
												
													<div class="form-group form-floating-label">
														
                                                        <?php if($_SESSION['user']['rule_id']==2||$_SESSION['user']['rule_id']==6){ ?>

                                                        <div class="form-group form-floating-label">
                                                            <label >رقم الكود</label>
                                                            <input  type="number" value="<?php echo $row['code']; ?>"  class="form-control input-border-bottom" id="inputFloatingLabel" name="code"  required >
                                                        </div>
                                                        <?php }else{ ?>
                                                        <div class="form-group form-floating-label">
                                                            <label >رقم الكود</label>
                                                            <input  type="number" value="<?php echo $row['code']; ?>" disabled class="form-control input-border-bottom" id="inputFloatingLabel"   required >
                                                            <input  type="hidden" value="<?php echo $row['code']; ?>"  class="form-control input-border-bottom" id="inputFloatingLabel" name="code"  required >
                                                        </div>
                                                        <?php } ?>
                                                    </div>
                                                    <div class="form-group form-floating-label">
													    <label >مقدم الاستشارة</label>
													    <input  type="text" class="form-control input-border-bottom" value="<?php echo $row['intro_consulation']; ?>" id="inputFloatingLabel" name="intro_consulation"  required >
											    	</div>

													
											
													
												
												
											</div>
											<div class="col-md-6 col-lg-4">
                                            <div class="form-group form-floating-label">
													<label >نوع الاستشارة</label>
													<input  type="text" class="form-control input-border-bottom" id="inputFloatingLabel" value="<?php echo $row['type_consulation']; ?>" name="type_consulation"  required >
												</div>
										

												<div class="form-group">
													<label for="comment"> الاجراء الذي تم </label>
													<textarea class="form-control" name="actions" id="comment" rows="5">
                                                        <?php echo $row['actions']; ?>
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

    
      $code=$_POST["code"];
      $today= date('Y-m-d');
      $date=test_input($_POST["date"]);

      $intro_consulation=test_input($_POST["intro_consulation"]);
      $type_consulation=test_input($_POST["type_consulation"]);
      $actions=test_input($_POST["actions"]);

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

        elseif(empty($code))
        {
            
            
            echo '<script>swal("يرجاء ادخال كود للحاله ", "لم يتم رفع البيانات", {
                icon : "warning",
                buttons: {        			
                    confirm: {
                        className : "btn btn-warning"
                    }
                },
            });</script>';
        }
    
        elseif(!is_numeric($code))
        {
            
            
            echo '<script>swal("يرجاء ادخال كود للحالة ", "لم يتم رفع البيانات", {
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
        
            

                $query="UPDATE consult_his_psychology set branch=?,code=?,intro_consulation=?,type_consulation=?,actions=?,date=? where id=? ";
                $stm=$con->prepare($query);
                $stm->execute(array($branch,$code,$intro_consulation,$type_consulation,$actions,$date,$id));
                if($stm->rowCount())	
                {
                    echo '<script src="js/send_success.js"></script>';
                    echo "<script>
                          window.open('today_consult_his_psychology_data.php?num=10&id=10','_self')
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
