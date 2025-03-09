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
                  $sql="select * from individual_sessions where id=?";
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
													<label >الجلسة</label>
													<input  type="text" class="form-control input-border-bottom" value="<?php echo $row['section'] ?>" id="inputFloatingLabel" name="section"  required >
												</div>
												<div class="form-group form-floating-label">
													<label >عنوان الجلسة</label>
													<input  type="text" class="form-control input-border-bottom" value="<?php echo $row['address'] ?>" id="inputFloatingLabel" name="address"  required >
												</div>

													
											
													
												
												
											</div>
											<div class="col-md-6 col-lg-4">
                                            <div class="form-group form-floating-label">
													<label > زمنها من</label>
													<input  type="time" class="form-control input-border-bottom" value="<?php echo $row['from_time'] ?>" id="inputFloatingLabel" name="from_time"  required >
												</div>
												<div class="form-group form-floating-label">
													<label >زمها الى</label>
													<input  type="time" class="form-control input-border-bottom" value="<?php echo $row['to_time'] ?>" id="inputFloatingLabel" name="to_time"  required >
												</div>
												
												<div class="form-group form-floating-label">
													<label >  تحديد المشكلة</label>
													<input  type="text" class="form-control input-border-bottom" value="<?php echo $row['select_s'] ?>" id="inputFloatingLabel" name="select_s"  required >
												</div>
												<div class="form-group form-floating-label">
													<label > اجرأت الجلسة</label>
													<input  type="text" class="form-control input-border-bottom" value="<?php echo $row['agrat'] ?>" id="inputFloatingLabel" name="agrat"  required >
												</div>
											
												
												
											
											
											
										
											</div>
											<div class="col-md-6 col-lg-4">

												
												
												
                                            <div class="form-group form-floating-label">
													<label >  الاساليب العلاجية المستخدمة</label>
													<input  type="text" value="<?php echo $row['alasalib'] ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="alasalib"  required >
												</div>
												<div class="form-group form-floating-label">
													<label >المهام والواجبات</label>
													<input  type="text" value="<?php echo $row['taks'] ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="taks"  required >
												</div>
														

											<label class="form-label">المقاييس النفسية</label>
                                            <div class="selectgroup selectgroup-pills">
													<?php $violense_explode =explode(",",$row['violense']);?>
														<label class="selectgroup-item">
															<input type="checkbox" <?php  if(in_array("اختبار بيك للاكتئاب",$violense_explode)) echo "checked";?> name="violense[]" value="اختبار بيك للاكتئاب" class="selectgroup-input" >
															<span class="selectgroup-button">اختبار بيك للاكتئاب</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" <?php  if(in_array("مقياس تايلور للقلق الصريح",$violense_explode)) echo "checked";?> name="violense[]" value="مقياس تايلور للقلق الصريح" class="selectgroup-input" >
															<span class="selectgroup-button"> مقياس تايلور للقلق الصريح</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" <?php  if(in_array("مقياس الهوس",$violense_explode)) echo "checked";?> name="violense[]" value="مقياس الهوس" class="selectgroup-input" >
															<span class="selectgroup-button">مقياس الهوس</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" <?php  if(in_array("اختبار المعتقدات الشخصية",$violense_explode)) echo "checked";?> name="violense[]" value="اختبار المعتقدات الشخصية" class="selectgroup-input" >
															<span class="selectgroup-button">اختبار المعتقدات الشخصية</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" <?php  if(in_array("لاختبارات الستة",$violense_explode)) echo "checked";?> name="violense[]" value="لاختبارات الستة" class="selectgroup-input" >
															<span class="selectgroup-button">لاختبارات الستة</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" <?php  if(in_array("قائمة الرهاب الاجتماعي",$violense_explode)) echo "checked";?> name="violense[]" value="قائمة الرهاب الاجتماعي" class="selectgroup-input" >
															<span class="selectgroup-button">قائمة الرهاب الاجتماعي</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" <?php  if(in_array("مخاوف الاطفال",$violense_explode)) echo "checked";?> name="violense[]" value="مخاوف الاطفال" class="selectgroup-input" >
															<span class="selectgroup-button">مخاوف الاطفال</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" <?php  if(in_array("مقياس القلق الاجتماعي",$violense_explode)) echo "checked";?> name="violense[]" value="مقياس القلق الاجتماعي" class="selectgroup-input" >
															<span class="selectgroup-button">مقياس القلق الاجتماعي</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" <?php  if(in_array("اختبار MMPI",$violense_explode)) echo "checked";?> name="violense[]" value="اختبار MMPI" class="selectgroup-input" >
															<span class="selectgroup-button">اختبار MMPI</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" <?php  if(in_array("اختبار هاملتون",$violense_explode)) echo "checked";?> name="violense[]" value="اختبار هاملتون" class="selectgroup-input" >
															<span class="selectgroup-button">اختبار هاملتون</span>
														</label>
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

    
    $code=test_input($_POST["code"]);
    $today= date('Y-m-d');
    $date=test_input($_POST["date"]);
    $section=test_input($_POST["section"]);
    $address=test_input($_POST["address"]);
    $from_time=test_input($_POST["from_time"]);
    $to_time=test_input($_POST["to_time"]);
    $select_s=test_input($_POST["select_s"]);
    $agrat=test_input($_POST["agrat"]);
    $alasalib=test_input($_POST["alasalib"]);
    $taks=test_input($_POST["taks"]);
	if(empty($_POST["violense"])){
	    $violense="";
		}
		else{
			$violense=$_POST["violense"];
			$violense=implode(',',$violense); 
		}


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
        
            

                $query="UPDATE individual_sessions set branch=?,code=?,section=?,address=?,from_time=?,to_time=?,select_s=?,agrat=?,alasalib=?,taks=?,violense=?,date=? where id=? ";
                $stm=$con->prepare($query);
                $stm->execute(array($branch,$code,$section,$address,$from_time,$to_time,$select_s,$agrat,$alasalib,$taks,$violense,$date,$id));
                if($stm->rowCount())	
                {
                    echo '<script src="js/send_success.js"></script>';
                    echo "<script>
                          window.open('today_individual_sessions_data.php?num=8&id=10','_self')
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
