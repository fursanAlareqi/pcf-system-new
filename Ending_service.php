<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 }
 $sql="select * from forms where  sender_name=? and auth=? and step=? and send=?";
$stm=$con->prepare($sql); 
$stm->execute(array($_SESSION['user']['id'],'True',"انهاء خدمة",'False'));
if($stm->rowCount()==0){
?>


		
			<div class="content">
				<div class="page-inner">
				

					<div class="row">
						
						<div class="col-md-12">
							
								<div class="card">
									<div class="card-header">
										<div class="card-title">نموذج اشعار انهاء خدمة </div>
									</div>
									<div class="card-body">
                                    <form action="" method="post" enctype="multipart/form-data">

                                       	
                                            
                                            <bu class="col-sm-6 col-md-3">

                                                <button type="submit" name="send" class="card card-stats card-primary card-round">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-5">
                                                                <div class="icon-big text-center">
                                                                    <i class="fas fa-download"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-7 col-stats">
                                                                <div class="numbers">
                                                                    <h4 class="card-title">نموذج اشعار انهاء خدمة </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </button>
                                            </bu>
                                       
                                        
									</div>
									
								</div>
							
							
							
						</div>
					</div>
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">  رفع ملف اشعار انهاء خدمة  </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    
                                
                                    <div class="col-md-6 col-lg-4">

                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">رفع ملف اشعار انهاء خدمة </label>
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
$user=$_SESSION['user']['id'];
$branch=$_SESSION['user']['branch_id'];
$today=date("Y-m-d h:i:sa");


    if(isset($_POST['send'])){
        
       
        $sql="select * from download_form where  sender_name=? and step=?   ";
        $stm=$con->prepare($sql); 
        $stm->execute(array($user,'انهاء خدمة'));
       

        if ($stm->rowCount()>0){
            $user_date=$stm->fetch();
            $user_date= $user_date['date'];
            $hours = (abs(strtotime($user_date)-strtotime($today)) / 60) / 60;
            if($hours>=24){

            
            echo '<script>swal("لقد انتهة المدة المسموحة لتحميل الملف", "لايمكن تحميل الملف", {
                icon : "warning",
                buttons: {        			
                    confirm: {
                        className : "btn btn-warning"
                    }
                },
            });</script>';
        }
        else{
            
            echo "<script> window.open('forms/اشعار نهاية خدمة نموذج.pdf','_self')</script>";


        }
        }
        else{
            echo '<script>swal(" اخي المتقدم مده انهاء هذه المهمه خلال 24 ساعة بعد هذه الوقت لن تستطيع  تحميل النمودج وبهذا تخلي المؤسسة مسؤوليتها القانونية علماً بـأن فتح النموذج بمثابة اشعار انهاء خدمة", "  ", {
                icon : "warning",
                buttons: {        			
                    confirm: {
                        className : "btn btn-warning"
                    }
                },
            });</script>';	
            $query="INSERT INTO download_form(sender_name,branch,step,date)
                values (?,?,?,?) ";
                $stm=$con->prepare($query);
                $stm->execute(array($user,$branch,'انهاء خدمة',$today));
                if($stm->rowCount())
                {
                           echo "<script> window.open('forms/اشعار نهاية خدمة نموذج.pdf','_self')</script>";



                }
                else
                {
                    echo'<script src="js/send_error.js"></script>';
                }
           
        }

        
        
    }
	if(isset($_POST['save'])){

		$date= date('Y-m-d');
        $sql="select * from user where  id=? ";
        $stm=$con->prepare($sql); 
        $stm->execute(array($user));
        $name=$stm->fetch();
        $sender_name=$name['name'];
			//التحصقق من الوقت الذي تم فيه رفع الملف اذا تجاور ال24 ساعة
            $sql="select * from download_form where  sender_name=? and step=?   ";
            $stmd=$con->prepare($sql); 
            $stmd->execute(array($user,'انهاء خدمة'));
            $user_date=$stmd->fetch();
            $user_date= $user_date['date'];
            $hours = (abs(strtotime($user_date)-strtotime($today)) / 60) / 60;
			//اضافة صورة
			$exti = array('pdf');
			$file1=$_FILES["file"];
			$file_name1=$sender_name.$date.$file1["name"];
			$file_tmp1=$file1["tmp_name"];
			$file_name_expload1 = explode('.', $file_name1);
			$file_name_expload_end1 = strtolower(end($file_name_expload1));
			//التحقق انه تم اختيار ملف

            $sql="select * from forms where  sender_name=? and step=? and send=?  ";
            $stm=$con->prepare($sql); 
            $stm->execute(array($user,'انهاء خدمة','False'));
	        if ($stm->rowCount()>0){
                echo '<script>swal("  لايمكن ارسال الطلب مرتين  ", "لم يتم رفع البيانات", {
                    icon : "warning",
                    buttons: {        			
                        confirm: {
                            className : "btn btn-warning"
                        }
                    },
                });</script>';
            }
            else if ($stmd->rowCount()==0){
                echo '<script>swal("يجب تحميل ملف النموذج اولاً", "لم يتم رفع البيانات", {
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
           else if($hours>=24){

            
                echo '<script>swal("لقد انتهة المدة المسموحة لتحميل الملف", "لايمكن تحميل الملف", {
                    icon : "warning",
                    buttons: {        			
                        confirm: {
                            className : "btn btn-warning"
                        }
                    },
                });</script>';
            }
            else {
move_uploaded_file($file_tmp1,"step_forms/".$file_name1);
                
                $query="INSERT INTO forms(sender_name,branch,file,step,send)
                values (?,?,?,?,?) ";
                $stm=$con->prepare($query);
                $stm->execute(array($user,$branch,$file_name1,'انهاء خدمة','False'));
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
}else{
    echo "<script> window.open('index.php','_self')</script>";
}

?>
