<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 }if($_SESSION['user']['rule_id']==3||$_SESSION['user']['rule_id']==2 ||$_SESSION['user']['rule_id']==6||$_SESSION['user']['rule_id']==18){
?>


		
			<div class="content">
				<div class="page-inner">
				

					<div class="row">
						
						<div class="col-md-12">
							<form action="" method="post">
								<div class="card">
									<div class="card-header">
										<div class="card-title">حجز</div>
									</div>
									<div class="card-body">
										<div class="row">
											
										
											<div class="col-md-6 col-lg-4">
												
												
												<div class="form-group form-floating-label">
													<label >تاريخ تسجيل الحالة</label>
													<input  type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="date"  required >
												</div>

                                                <div class="form-group form-floating-label">
                                                    <label >رقم الكود</label>
                                                    <input  type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="code"  required >
                                                    
                                                </div>
                                                <div class="form-group form-floating-label">
                                                    <label > اسم ولي امرة</label>
                                                    <input  type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="father"   required >
                                                </div>
														
                                              
	
											</div>
											<div class="col-md-6 col-lg-4">
											
											
											    <div class="form-group form-floating-label">
                                                    <label > مكان الاقامة </label>
                                                    <input  type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="place"  required >
                                                </div>
                                                <div class="form-group form-floating-label">
                                                    <label >رقم الهاتف</label>
                                                    <input  type="tel" class="form-control input-border-bottom" id="inputFloatingLabel" name="phone" pattern="[7]{1}[7,1,3,0,8]{1}[0-9]{7}"  required >
                                                </div>
                                    
                                               
                                                <div class="form-group form-floating-label">
                                                    <label > العمر </label>
                                                    <input  type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="brithday"  required >
                                                </div>
											
										
											</div>
											<div class="col-md-6 col-lg-4">

                                                <div class="form-group form-floating-label">
                                                    <label > رقم الزيارة</label>
                                                    <input  type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="vist_number"  required >
                                                </div>
                                                <div class="form-group form-floating-label">
                                                    <label> موعد الزيارة الطبية</label>
                                                    <input  type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="vist"  required >	
                                                </div>
                                                
                                                <div class="form-group form-floating-label">
                                                    <label >كيف عرفت بخدمات المؤسسة</label>
                                                    <select class="selectpicker form-control"  id="tokens ddd"  data-live-search="true" name="know_our" required  >
                                                        <option ></option>
                                                        <option >الفيس بوك</option>
                                                        <option >الخط الساخن</option>
                                                        <option >صديق</option>
                                                        <option >احالة خارجية واردة</optio>
                                                        <option >احالة داخلية واردة</option>
                                                        <option >طبيب </option>
                                                        <option >اخصائي نفسي </option>
                                                        <option >اخرون </option>
                                                    </select>
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
//تم وضع كود في الاخير من اجل تنفيذ رسالة التحدذير
	if(isset($_POST['save'])){
		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		  }

	
		$code=test_input($_POST["code"]);
		$date=test_input($_POST["date"]);
        $father=test_input($_POST["father"]);
        $place=test_input($_POST["place"]);
        $phone=test_input($_POST["phone"]);
        $vist_number=test_input($_POST["vist_number"]);
        $brithday=test_input($_POST["brithday"]);
        $know_our=test_input($_POST["know_our"]);
        $vist=test_input($_POST["vist"]);

		
	

		

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
		
			
			

			//اذا لايوجد اي مشكلة يقوم بارسال الملف
			else
			{
				$sql="select * from vist where code=? and date=? ";
				$stm=$con->prepare($sql); 
				$stm->execute(array($code,$date));
				if($stm->rowCount()){

					echo '<script>swal("لقد تم ادخال بيانات لنفس هذا الحاله في النظام من قبل", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
				}
				else{
					$query="INSERT INTO vist(branch,code,date,father,place,phone,vist_number,brithday,vist,know_our,sender_name)
					values (?,?,?,?,?,?,?,?,?,?,?) ";
					$stm=$con->prepare($query);
					$stm->execute(array($branch,$code,$date,$father,$place,$phone,$vist_number,$brithday,$vist,$know_our,$user));
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
