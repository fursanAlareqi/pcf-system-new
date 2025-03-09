<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 }if($_SESSION['user']['rule_id']==16||$_SESSION['user']['rule_id']==2 ||$_SESSION['user']['rule_id']==6){
?>


		
			<div class="content">
				<div class="page-inner">
				

					<div class="row">
						
						<div class="col-md-12">
							<form action="" method="post">
								<div class="card">
									<div class="card-header">
										<div class="card-title"> اضافة استفسار</div>
									</div>
									<div class="card-body">
										<div class="row">
											
										
											<div class="col-md-6 col-lg-4">
												
												
												<div class="form-group form-floating-label">
													<label >تاريخ تسجيل الاستفسار</label>
													<input  type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="date"  required >
												</div>
                                                <div class="form-group form-floating-label">
                                                    <label >رقم الهاتف</label>
                                                    <input  type="tel" class="form-control input-border-bottom" id="inputFloatingLabel" name="phone"   required >
                                                </div>
                                            
												
	
											</div>
                                            <div class="col-md-6 col-lg-4">

                                                    
                                                <div class="form-group form-floating-label">
                                                    <label >الجنس</label>
                                                    <select class="selectpicker form-control"  id="tokens ddd"  data-live-search="true" name="sex" required >
                                                        <option ></option>
                                                        <option value="ذكر">ذكر</option>
                                                        <option value="انثى">انثى</option>
                                                    </select>
                                            
                                                </div>
                                                
                                            
		
										
											</div>
											<div class="col-md-6 col-lg-4">
											
											    <div class="form-group">
													<label for="comment">الاستفسار</label>
													<textarea class="form-control" id="comment" name="inquiry" rows="5">

													</textarea>
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

		$sex=test_input($_POST['sex']);
		$code=test_input($_POST["code"]);
		   // $date= date('Y-m-d');
		$date=test_input($_POST["date"]);
		$phone=test_input($_POST["phone"]);
		$inquiry=test_input($_POST["inquiry"]);


		
		$m_sex=0;
		$f_sex=0;

	

		    $user=$_SESSION['user']['id'];
			// find branch
			$branch=$_SESSION['user']['branch_id'];

			//end find branch 
			
			
			//phone number 
		
			//phone number end
			
		
			
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
				
				
				echo '<script>swal("يرجاء ادخال  تاريخ  الاستفسار ", "لم يتم رفع البيانات", {
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
				
				
				echo '<script>swal("يرجاء ادخال رقم هاتف   ", "لم يتم رفع البيانات", {
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
				
				
				echo '<script>swal("رقم هاتق  لا يمكن ان يكون احرف", "لم يتم رفع البيانات", {
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
				
					$query="INSERT INTO inquiry_hotline(branch,date,
					phone,sex,sender_name,inquiry)
					values (?,?,?,?,?,?) ";
					$stm=$con->prepare($query);
					$stm->execute(array($branch,$date,$phone,$sex,$user,$inquiry ));
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
else {
echo "<script> window.open('index.php','_self')</script>";
}
?>
