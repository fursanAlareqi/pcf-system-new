<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 }if($_SESSION['user']['rule_id']==7||$_SESSION['user']['rule_id']==15||$_SESSION['user']['rule_id']==2 ||$_SESSION['user']['rule_id']==6||$_SESSION['user']['rule_id']==16||$_SESSION['user']['rule_id']==18){
?>


		
			<div class="content">
				<div class="page-inner">
				

					<div class="row">
						
						<div class="col-md-12">
							<form action="" method="post">
								<div class="card">
									<div class="card-header">
										<div class="card-title"> اضافة حالة</div>
									</div>
									<div class="card-body">
										<div class="row">
											
										
											<div class="col-md-6 col-lg-4">
												
												
												<div class="form-group form-floating-label">
													<label >تاريخ تسجيل الحالة</label>
													<input  type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="date"  required >
												</div>
												<div class="form-group form-floating-label">
															
													<label for="tokens">رقم اكواد الحالات</label>
													<select class="selectpicker form-control" multiple name="code[]" id="tokens"  data-live-search="true" required >
														<option value=""></option>
														<?php 
															// find branch
															$branch=$_SESSION['user']['branch_id'];
															
															//end find branch 
															if($_SESSION['user']['rule_id']==16){
																$sql="select DISTINCT(code) from hotline where branch=? ";
															}
															else{
																$sql="select DISTINCT(code) from resption where branch=? ";
															}
															$stm=$con->prepare($sql); 
															$stm->execute(array($branch));
															if($stm->rowCount()>0)
																{
																	foreach($stm->fetchAll() as $row) 
																	{
															
														
															
													
														?>
															<option value="<?php echo $row['code']; ?>"><?php echo $row['code']; ?></option>
															
														<?php
																	}
																}
														?>
													
													</select>	
												</div>
										
												<div class="form-group form-floating-label">
													<label >نوع المشكلة </label>
													<input  type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="problem_many"  required >
												</div>
										
												
													 
													
												
												
											</div>
											<div class="col-md-6 col-lg-4">
												<div class="form-group form-floating-label">
													<label >اسم الجلسة </label>
													<input  type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="section_name"  required >
												</div>
										
												<div class="form-group form-floating-label">
															
													<label for="tokens">نوع الجلسة </label>
													<select class="selectpicker form-control"  name="section_type" id="tokens"  data-live-search="true" required >
														<option value=""></option>
														<option >جلسة جماعية</option>
														<option >جلسة  اسرية</option>
														<option >جلسة ارشاد زواجي</option>

													</select>	
												</div>
												<div class="form-group form-floating-label">
													<label > المواضيع التي تم مناقشتها  </label>
													<input  type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="projict"  required >
												</div>
										
												
										
											</div>
											<div class="col-md-6 col-lg-4">
												
														

													<div class="form-group form-floating-label">
														<label > عدد الحضور  </label>
														<input  type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="attendance"  required >
													</div>
													
													<div class="form-group form-floating-label">
														<label >الاساليب العلاجية المستخدمة </label>
														<input  type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="techniques"  required >
													</div>
													<div class="form-group form-floating-label">
														<label >المهام والواجبات </label>
														<input  type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="task_andduties"  required >
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
        $error=false;


		    $user=$_SESSION['user']['id'];
			// find branch
			$branch=$_SESSION['user']['branch_id'];
	

			//end find branch 
			
			
			
			
			
		
			$code_explode =explode(",",$code);
			foreach($code_explode as $check_code ){
				
    			
				if($_SESSION['user']['rule_id']==16){
					$sql="select type from hotline where  code=?  and date=? ";
				}
				else{
					$sql="select type from resption where  code=?  and date=? ";
				}
    			$stmps=$con->prepare($sql); 
    			$stmps->execute(array($check_code,$date));
    		
    			if($stmps->rowCount()==0){
    
                   $error=true;
                   break;  ;
                }
    			
	        }
			

            if($error==true){
                  echo '<script>swal("لم يتم تسجيل احدى الحالات  اليوم في الاستقبال", "لم يتم رفع البيانات", {
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
				$sql="select * from group_sessions where  code=? and date=?  ";
				$stm=$con->prepare($sql); 
				$stm->execute(array($code,$date));
				if($stm->rowCount()){

					echo '<script>swal("لقد تم ادخال بيانات لنفس هذا الجلسة في النظام  اليوم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
				}
				else{
	
					$query="INSERT INTO group_sessions(branch,code,problem_many,section_name,section_type,projict,attendance,techniques,task_andduties,date,sender_name)
					values (?,?,?,?,?,?,?,?,?,?,?) ";
					$stm=$con->prepare($query);
					$stm->execute(array($branch,$code,$problem_many,$section_name,$section_type,$projict,$attendance,$techniques,$task_andduties,$date,$user));
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
} 
else {
echo "<script> window.open('index.php','_self')</script>";
}
?>
