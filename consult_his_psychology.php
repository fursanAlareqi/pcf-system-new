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
													<select class="selectpicker form-control"  name="code" id="tokens"  data-live-search="true" required >
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
													<label >مقدم الاستشارة</label>
													<input  type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="intro_consulation"  required >
												</div>
										
												
													 
													
												
												
											</div>
											<div class="col-md-6 col-lg-4">
												<div class="form-group form-floating-label">
													<label >نوع الاستشارة</label>
													<input  type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="type_consulation"  required >
												</div>
										

												<div class="form-group">
													<label for="comment"> الاجراء الذي تم </label>
													<textarea class="form-control" name="actions" id="comment" rows="5">

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
			
			if($_SESSION['user']['rule_id']==16){
				$sql="select type from hotline where  code=? ORDER BY `hotline`.`date` desc ";
			}
			else{
				$sql="select type from resption where  code=? ORDER BY `resption`.`date` desc ";
			}
			
			$stmp=$con->prepare($sql); 
			$stmp->execute(array($code));
			$type=$stmp->fetch();
			$type=$type['type'];
			
			if($_SESSION['user']['rule_id']==16){
				$sql="select type from hotline where  code=?  and date=? ";
			}
			else{
				$sql="select type from resption where  code=?  and date=? ";
			}
		
		
			$stmps=$con->prepare($sql); 
			$stmps->execute(array($code,$date));
		
			if($stmps->rowCount()==0){

                echo '<script>swal("لم يتم تسجيل الحاله  اليوم في الاستقبال", "لم يتم رفع البيانات", {
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
				$sql="select * from consult_his_psychology where  code=? and date=?  ";
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
	
					$query="INSERT INTO consult_his_psychology(branch,code,intro_consulation,type_consulation,actions,date,sender_name,type)
					values (?,?,?,?,?,?,?,?) ";
					$stm=$con->prepare($query);
					$stm->execute(array($branch,$code,$intro_consulation,$type_consulation,$actions,$date,$user,$type));
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
