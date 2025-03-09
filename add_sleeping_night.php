<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 }if($_SESSION['user']['rule_id']==8||$_SESSION['user']['rule_id']==2 ||$_SESSION['user']['rule_id']==6){
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
													<label >تاريخ خروج الحالة</label>
													<input  type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="exit_date"   >
												</div>
												<div class="form-group form-floating-label">

												<div class="form-group form-floating-label">
															
														<label for="tokens">رقم الكود</label>
														<select class="selectpicker form-control"  name="code" id="tokens" required  data-live-search="true" >
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
															
															<label for="tokens"> متابعة الحالة  التمريضية</label>
															<select class="selectpicker form-control"  name="visites" id="tokens"   data-live-search="true" required>
																<option value=""></option>
																<option>اليوم الاول </option>
																<option>اليوم الثاني </option>
																<option>اليوم الثالث </option>
																<option>اليوم الرابع  </option>
																<option>اليوم الخامس </option>
																<option>اليوم السادس </option>
																<option>اليوم السابع </option>
																<option>اليوم الثامن </option>
																<option>اليوم التاسع  </option>
																<option >اليوم العاشر  </option>
																<option >اليوم الحادية عشر </option>
																<option >اليوم الثانية عشر </option>
																<option >اليوم الثالثة عشر </option>
																<option >اليوم الرابعة عشر </option>
																<option >اليوم الخامسة عشر </option>
																<option >اليوم السادسة عشر </option>
																<option >اليوم السابعة عشر </option>
																<option >اليوم الثامنة عشر </option>
																<option >اليوم التاسعة عشر </option>
																<option >اليوم العشرون  </option>
																<option >اليوم الواحد والعشرون  </option>
																<option >اليوم الثاني والعشرون  </option>
																<option >اليوم الثالث والعشرون  </option>
																<option >اليوم الرابع والعشرون  </option>
																<option >اليوم الخامس والعشرون  </option>
																<option >اليوم السادس والعشرون  </option>
																<option >اليوم السابع والعشرون  </option>
																<option >اليوم الثامن والعشرون  </option>
																<option >اليوم التاسع والعشرون  </option>
																<option >اليوم الثلاثون  </option>
																
															</select>	
													  </div>
													  
												
													
													
												

													
												</div>
												
												
												
												
											
										
											
													
												
												
											</div>
											<div class="col-md-6 col-lg-4">
												
											<h2>العلامات الحيويه</h2>
													<div class="form-group form-floating-label">
														<label >قياس الضغط</label>
														<input  type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="medicin_m" required  >
													</div>
													<div class="form-group form-floating-label">
														<label >قياس النبض</label>
														<input  type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="hart_m"  required >
													</div>
													<div class="form-group form-floating-label">
														<label >قياس الحرارة</label>
														<input  type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="heat_m" required  >
													</div>
													<div class="form-group form-floating-label">
														<label >قياس التنفس</label>
														<input  type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="breathe_m" required  >
													</div>
													<div class="form-group form-floating-label">
														<label >السوائل الداخلية</label>
														<input  type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="inside_m"  required >
													</div>
													<div class="form-group form-floating-label">
														<label >السوائل الخارجية</label>
														<input  type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="outside_m"  required >
													</div>
													
											
										
											</div>
											<div class="col-md-6 col-lg-4">
												
												
												<div class="form-group">
													<label for="comment"> اسم العلاج </label>
													<textarea class="form-control" id="comment" name="medical" rows="5" required>

													</textarea>
												</div>
												<div class="form-group">
													<label for="comment">برنامج اعادة التاهيل</label>
													<textarea class="form-control" id="comment" name="program" rows="5" required>

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

		
		$code=test_input($_POST["code"]);
    	$date=test_input($_POST["date"]);
    	$exit_date=test_input($_POST["exit_date"]);
    	$visites=test_input($_POST["visites"]);
    	$medicin_m=test_input($_POST["medicin_m"]);
    	$hart_m=test_input($_POST["hart_m"]);
    	$heat_m=test_input($_POST["heat_m"]);
    	$breathe_m=test_input($_POST["breathe_m"]);
    	$inside_m=test_input($_POST["inside_m"]);
    	$outside_m=test_input($_POST["outside_m"]);
    	$medical=test_input($_POST["medical"]);
    	$program=test_input($_POST["program"]);
		$today= date('Y-m-d');

		
		
		
	


		    $user=$_SESSION['user']['id'];
			// find branch
			$branch=$_SESSION['user']['branch_id'];
	

			//end find branch 
			
			
			
			//التحقق ان اسم المنتج موجود وليس ارقام
		
			
			


// 			$sql="select type from resption where  code=? ORDER BY `resption`.`date` desc ";
// 			$stmp=$con->prepare($sql); 
// 			$stmp->execute(array($code));
// 			$type=$stmp->fetch();
// 			$type=$type['type'];
// 			$sql="select type from resption where  code=?  and date=? ";

// 			$stmps=$con->prepare($sql); 
// 			$stmps->execute(array($code,$date));
		
// 			if($stmps->rowCount()==0){

//                 echo '<script>swal("لم يتم تسجيل الحاله  اليوم في الاستقبال", "لم يتم رفع البيانات", {
// 					icon : "warning",
// 					buttons: {        			
// 						confirm: {
// 							className : "btn btn-warning"
// 						}
// 					},
// 				});</script>';
//             }
			

			 if(empty($date))
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
				$sql="select * from sleeping_night where  code=? and date=?  ";
				$stm=$con->prepare($sql); 
				$stm->execute(array($code,$date));
				if($stm->rowCount()){

					echo '<script>swal("لقد تم ادخال بيانات لنفس هذا الحالة في النظام من قبل", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
				}
				else{
		
					$query="INSERT INTO sleeping_night(branch,code,sender_name,date,exit_date,visites,medicin_m,hart_m,heat_m,breathe_m,inside_m,outside_m,medical,program,type)
					values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ";
					$stm=$con->prepare($query);
					$stm->execute(array($branch,$code,$user,$date,$exit_date,$visites,$medicin_m,$hart_m,$heat_m,$breathe_m,$inside_m,$outside_m,$medical,$program,'جديد'));
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
