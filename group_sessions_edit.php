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
                  $sql="select * from group_sessions where id=?";
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
															
                                                            <label for="tokens">رقم اكواد الحالات</label>
                                                            <?php $code_explode =explode(",",$row['code']);?>
                                                            <select class="selectpicker form-control" multiple name="code[]" id="tokens"  data-live-search="true" required >
                                                                <option value=""></option>
                                                                <?php 
                                                                    // find branch
                                                                    $branch=$_SESSION['user']['branch_id'];
                                                                    
                                                                    //end find branch 
                                                                    $sql="select DISTINCT(code) from resption where branch=? ";
                                                                    $stm=$con->prepare($sql); 
                                                                    $stm->execute(array($branch));
                                                                    if($stm->rowCount()>0)
                                                                        {
                                                                            foreach($stm->fetchAll() as $rows) 
                                                                            {
                                                                    
                                                                
                                                                    
                                                            
                                                                ?>
                                                                    <option value="<?php echo $rows['code']; ?>" <?php  if(in_array($rows['code'],$code_explode)) echo "selected";?>><?php echo $rows['code']; ?> </option>
                                                                    
                                                                <?php
                                                                            }
                                                                        }
                                                                ?>
                                                            
                                                            </select>	
                                                        </div>
                                                
                                                        <div class="form-group form-floating-label">
                                                            <label >نوع المشكلة </label>
                                                            <input  type="text" class="form-control input-border-bottom" id="inputFloatingLabel" value="<?php echo $row['problem_many']; ?>" name="problem_many"  required >
                                                        </div>

													
											
													
												
												
											</div>
											<div class="col-md-6 col-lg-4">
                                                 <div class="form-group form-floating-label">
													<label >اسم الجلسة </label>
													<input  type="text" class="form-control input-border-bottom" id="inputFloatingLabel" value="<?php echo $row['section_name']; ?>" name="section_name"  required >
												</div>
										
												<div class="form-group form-floating-label">
															
													<label for="tokens">نوع الجلسة </label>
													<select class="selectpicker form-control"  name="section_type" id="tokens"  data-live-search="true" required >
														<option value=""></option>
														<option <?php if($row['section_type']=="جلسة جماعية") echo "selected" ?> >جلسة جماعية</option>
														<option <?php if($row['section_type']=="جلسة  اسرية") echo "selected" ?> >جلسة  اسرية</option>
														<option <?php if($row['section_type']=="جلسة ارشاد زواجي") echo "selected" ?> >جلسة ارشاد زواجي</option>

													</select>	
												</div>
												<div class="form-group form-floating-label">
													<label > المواضيع التي تم مناقشتها  </label>
													<input  type="text" class="form-control input-border-bottom" id="inputFloatingLabel" value="<?php echo $row['projict']; ?>" name="projict"  required >
												</div>
											
												
												
											
											
											
										
											</div>
											<div class="col-md-6 col-lg-4">
													<div class="form-group form-floating-label">
														<label > عدد الحضور  </label>
														<input  type="number" class="form-control input-border-bottom" id="inputFloatingLabel" value="<?php echo $row['attendance']; ?>" name="attendance"  required >
													</div>
													
													<div class="form-group form-floating-label">
														<label >الاساليب العلاجية المستخدمة </label>
														<input  type="text" class="form-control input-border-bottom" id="inputFloatingLabel" value="<?php echo $row['techniques']; ?>" name="techniques"  required >
													</div>
													<div class="form-group form-floating-label">
														<label >المهام والواجبات </label>
														<input  type="text" class="form-control input-border-bottom" id="inputFloatingLabel" value="<?php echo $row['task_andduties']; ?>" name="task_andduties"  required >
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
      $code=implode(',',$code);
      $today= date('Y-m-d');
      $date=test_input($_POST["date"]);
      $problem_many=test_input($_POST["problem_many"]);
      $section_name=test_input($_POST["section_name"]);
      $section_type=test_input($_POST["section_type"]);
      $projict=test_input($_POST["projict"]);
      $attendance=test_input($_POST["attendance"]);

      $techniques=test_input($_POST["techniques"]);
      $task_andduties=test_input($_POST["task_andduties"]);



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
    
        




        
        /////////////////////////////////////////////////////////////////////////////////////تذكير الشرط حق الايميل

        //اذا لايوجد اي مشكلة يقوم بارسال الملف
        else
        {
        
            

                $query="UPDATE  group_sessions set branch=?,code=?,problem_many=?,section_name=?,section_type=?,projict=?,attendance=?,techniques=?,task_andduties=?,date=?,sender_name=? where id=? ";
                $stm=$con->prepare($query);
                $stm->execute(array($branch,$code,$problem_many,$section_name,$section_type,$projict,$attendance,$techniques,$task_andduties,$date,$user,$id));
                if($stm->rowCount())	
                {
                    echo '<script src="js/send_success.js"></script>';
                    echo "<script>
                          window.open('today_group_sessions_data.php?num=9&id=10','_self')
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
