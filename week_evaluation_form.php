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
										<div class="card-title">  التقييم الاسبوعي</div>
									</div>
									<div class="card-body">
                                        <?php 
                                            $month= date('Y-m');
                                            $user=$_SESSION['user']['id'];
                                            $sql="SELECT * FROM week_evaluation_form where emp =?  ORDER BY `week_evaluation_form`.`id` DESC    ";
                                            $stmu=$con->prepare($sql); 
                                            $stmu->execute(array($user));

                                            
                                                if($stmu->rowCount()>0){ 
                                                    $data=$stmu->fetch() 
															
                                                    
                                            ?>
                                                                                      

                                        <a href="<?php echo "week_evaluation\\".$data['file'];?>" download >	
                                            <div class="col-sm-6 col-md-3">
                                                <div class="card card-stats card-primary card-round">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-5">
                                                                <div class="icon-big text-center">
                                                                    <i class="fas fa-download"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-7 col-stats">
                                                                <div class="numbers">
                                                                    <h4 class="card-title"> التقييم   </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <?php 
                                                             
                                                        }else{
                                                            echo' <div class="alert alert-danger">لايوجد تقييم</div>';
                                                        }  
                                        ?>
									</div>
									
								</div>
							
							
							
						</div>
					</div>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">  رفع ملف التقييم    </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    
                                
                                    <div class="col-md-6 col-lg-4">

                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">رفع ملف التقييم   </label>
                                            <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
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
			</div>
		
		
		
		<!-- Custom template | don't include it in your project! -->
		
		<!-- End Custom template -->
		<?php

include "include/footer.php";

							
?>

<?php
	
    if(isset($_POST['save'])){
        $user=$_SESSION['user']['id'];
        $branch=$_SESSION['user']['branch_id'];
        $today=date("Y-m-d h:i:sa");
		$date= date('Y-m-d');
	
        $sql="select * from user where  id=? ";
        $stm=$con->prepare($sql); 
        $stm->execute(array($user));
        $name=$stm->fetch();
        $sender_name=$name['name'];
            
			//اضافة صورة
			$exti = array('pdf');
			$file1=$_FILES["file"];
			$file_name1=$sender_name.$date.$file1["name"];
			$file_tmp1=$file1["tmp_name"];
			$file_name_expload1 = explode('.', $file_name1);
			$file_name_expload_end1 = strtolower(end($file_name_expload1));
			//التحقق انه تم اختيار ملف
			
            $sql="select * from week_evaluation_reply where  sender_name=? and date=? ";
            $stm=$con->prepare($sql); 
            $stm->execute(array($user,$date));
	        if ($stm->rowCount()>0){
                echo '<script>swal("  لايمكن ارسال الطلب مرتين لنفس الاسبوع ", "لم يتم رفع البيانات", {
                    icon : "warning",
                    buttons: {        			
                        confirm: {
                            className : "btn btn-warning"
                        }
                    },
                });</script>';
            }
            //التحقق من الامتداد
            elseif (!in_array($file_name_expload_end1, $exti)) {
                
                echo '<script>swal("PDF يرجاء التاكد ان صيغة الملف ", "لم يتم رفع البيانات", {
                    icon : "warning",
                    buttons: {        			
                        confirm: {
                            className : "btn btn-warning"
                        }
                    },
                });</script>';
            } 
          
           
            
            else {

                move_uploaded_file($file_tmp1,"week_evaluation_reply/".$file_name1);
                $query="INSERT INTO week_evaluation_reply(sender_name,branch,file)
                values (?,?,?) ";
                $stm=$con->prepare($query);
                $stm->execute(array($user,$branch,$file_name1));
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

?>
