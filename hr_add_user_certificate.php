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
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="card-title"> اضافة شهادة للموظف</div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row">
                                                
                                            
                                                <div class="col-md-6 col-lg-4">
                                                    <div class="form-group form-floating-label">
                                                                
                                                        <label for="tokens">اسم الموظف </label>
                                                        <select class="selectpicker form-control" name="emp" id="tokens"  data-live-search="true" required >
                                                            <option value=""></option>
                                                            <?php 
                                                                // find branch
                                                                $branch=$_SESSION['user']['branch_id'];
                                                            
                                                                //end find branch 
                                                                $sql="select * from user ";
                                                                $stm=$con->prepare($sql); 
                                                                $stm->execute();
                                                                if($stm->rowCount()>0)
                                                                    {
                                                                        foreach($stm->fetchAll() as $row) 
                                                                        {
                                                                            $sql="select * from certificate_form where emp=? and send=? ";
                                                                            $stm=$con->prepare($sql); 
                                                                            $stm->execute(array($row['id'],'False'));
                                                                            if($stm->rowCount()==0)
                                                                                {
                                                            
                                                                
                                                        
                                                            ?>
                                                                <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
                                                                
                                                            <?php
                                                                                }
                                                                        }
                                                                    }
                                                            ?>
                                                        
                                                        </select>	
                                                    </div>
											    </div>
                                                <div class="col-md-6 col-lg-4">
                                                    <div class="form-group form-floating-label">
                                                        <div class="form-group">
                                                            <label for="exampleFormControlFile1">رفع الشهادة</label>
                                                            <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
                                                        </div>

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
                        
                    </div>
			</div>
		
		
		
		<!-- Custom template | don't include it in your project! -->
		
		<!-- End Custom template -->
		<?php

include "include/footer.php";

							
?>

<?php
	if(isset($_POST['save'])){
        $emp=$_POST['emp'];
		$today= date('Y-m-d');
		$user=$_SESSION['user']['id'];
        $branch=$_SESSION['user']['branch_id'];
        $sql="select * from user where  id=? ";
        $stm=$con->prepare($sql); 
        $stm->execute(array($user));
        $name=$stm->fetch();
        $sender_name=$name['name'];
			
			//اضافة صورة
			$exti = array('pdf');
			$file1=$_FILES["file"];
			$file_name1=$today.$file1["name"];
			$file_tmp1=$file1["tmp_name"];
			$file_name_expload1 = explode('.', $file_name1);
			$file_name_expload_end1 = strtolower(end($file_name_expload1));
			//التحقق انه تم اختيار ملف
			
            $sql="select * from certificate_form where  emp=? and  send=?  ";
            $stm=$con->prepare($sql); 
            $stm->execute(array($emp,'False'));
	        if ($stm->rowCount()>0){
                echo '<script>swal("  لايمكن ارسال الشهادة مرتين  ", "لم يتم رفع البيانات", {
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

               
                $query="INSERT INTO certificate_form(sender_name,branch,file,emp,send)
                values (?,?,?,?,?) ";
                $stm=$con->prepare($query);
                $stm->execute(array($user,$branch,$file_name1,$emp,'False'));
                if($stm->rowCount())
                {
                    move_uploaded_file($file_tmp1,"certificate/".$file_name1);
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
