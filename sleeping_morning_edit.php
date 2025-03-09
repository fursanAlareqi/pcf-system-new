<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 }
 if($_SESSION['user']['rule_id']==8||$_SESSION['user']['rule_id']==2||$_SESSION['user']['rule_id']==6){
?>


		
			<div class="content">
				<div class="page-inner">
				

					<div class="row">
						<div class="col-md-12">
						<?php 
                if(isset($_GET['action'],$_GET['ids']) && $_GET['action']=='edit'){
                  $id=$_GET['ids'];
                  $sql="select * from sleeping_morning where id=?";
                  $stm=$con->prepare($sql); 
                  $stm->execute(array($id));
                  if($stm->rowCount())
                      {
                  foreach($stm->fetchAll() as $row) {
                     
					  	?>
							<form action="" method="post">
								<div class="card">
									<div class="card-header">
										<div class="card-title"> تعديل البيانات </div>
									</div>
									<div class="card-body">
									<div class="row">
											
										
											<div class="col-md-6 col-lg-4">
												
												
													<div class="form-group form-floating-label">
														<label >تاريخ تسجيل الحالة</label>
														<input  type="date" value="<?php echo $row['date'] ?>"  class="form-control input-border-bottom" id="inputFloatingLabel" name="date"  required >
														
													</div>
													<div class="form-group form-floating-label">
														<label >تاريخ خروج الحالة</label>
														<input  type="date" value="<?php echo $row['exit_date'] ?>"  class="form-control input-border-bottom" id="inputFloatingLabel" name="exit_date"   >

													</div>
													<div class="form-group form-floating-label">

													<div class="form-group form-floating-label">
															<label >رقم الكود</label>
															<input  type="number" value="<?php echo $row['code']; ?>" disabled class="form-control input-border-bottom" id="inputFloatingLabel"  required >
															<input  type="hidden" value="<?php echo $row['code']; ?>"  class="form-control input-border-bottom" id="inputFloatingLabel" name="code"  required >
													</div>
													  <div class="form-group form-floating-label">
															
															<label for="tokens"> متابعة الحالة  التمريضية</label>
															<select class="selectpicker form-control"  name="visites" id="tokens"   data-live-search="true" required>
																<option value="">
																<option <?php if( $row['visites'] == "اليوم الاول") echo "selected" ?> > اليوم الاول </option>
																
																<option <?php if( $row['visites'] == "اليوم الثاني") echo "selected" ?> > اليوم الثاني </option>
																<option <?php if( $row['visites'] == "اليوم الثالث") echo "selected" ?>  > اليوم الثالث </option>
																<option <?php if( $row['visites'] == "اليوم الرابع") echo "selected" ?>  > اليوم الرابع  </option>
																<option <?php if( $row['visites'] == "اليوم الخامس") echo "selected" ?>  > اليوم الخامس </option>
																<option <?php if( $row['visites'] == "اليوم السادس") echo "selected" ?>  > اليوم السادس </option>
																<option <?php if( $row['visites'] == "اليوم السابع") echo "selected" ?>  > اليوم السابع </option>
																<option <?php if( $row['visites'] == "اليوم الثامن") echo "selected" ?>  > اليوم الثامن </option>
																<option <?php if( $row['visites'] == "اليوم التاسع") echo "selected" ?>  > اليوم التاسع  </option>
																<option <?php if( $row['visites'] == "اليوم العاشر") echo "selected" ?>  > اليوم العاشر  </option>
																<option <?php if( $row['visites'] == "اليوم الحادية عشر") echo "selected" ?>  > اليوم الحادية عشر </option>
																<option <?php if( $row['visites'] == "اليوم الثانية عشر") echo "selected" ?>  > اليوم الثانية عشر </option>
																<option <?php if( $row['visites'] == "اليوم الثالثة عشر") echo "selected" ?>  > اليوم الثالثة عشر </option>
																<option <?php if( $row['visites'] == "اليوم الرابعة عشر") echo "selected" ?>  > اليوم الرابعة عشر </option>
																<option <?php if( $row['visites'] == "اليوم الخامسة عشر") echo "selected" ?>  > اليوم الخامسة عشر </option>
																<option <?php if( $row['visites'] == "اليوم السادسة عشر") echo "selected" ?>  > اليوم السادسة عشر </option>
																<option <?php if( $row['visites'] == "اليوم السابعة عشر") echo "selected" ?>  > اليوم السابعة عشر </option>
																<option <?php if( $row['visites'] == "اليوم الثامنة عشر") echo "selected" ?>  > اليوم الثامنة عشر </option>
																<option <?php if( $row['visites'] == "اليوم التاسعة عشر") echo "selected" ?>  > اليوم التاسعة عشر </option>
																<option <?php if( $row['visites'] == "اليوم العشرون") echo "selected" ?>  > اليوم العشرون  </option>
																<option <?php if( $row['visites'] == "اليوم الواحد والعشرون") echo "selected" ?>  > اليوم الواحد والعشرون  </option>
																<option <?php if( $row['visites'] == "اليوم الثاني والعشرون") echo "selected" ?>  > اليوم الثاني والعشرون  </option>
																<option <?php if( $row['visites'] == "اليوم الثالث والعشرون") echo "selected" ?>  > اليوم الثالث والعشرون  </option>
																<option <?php if( $row['visites'] == "اليوم الرابع والعشرون") echo "selected" ?>  > اليوم الرابع والعشرون  </option>
																<option <?php if( $row['visites'] == "اليوم الخامس والعشرون") echo "selected" ?>  > اليوم الخامس والعشرون  </option>
																<option <?php if( $row['visites'] == "اليوم السادس والعشرون") echo "selected" ?>  > اليوم السادس والعشرون  </option>
																<option <?php if( $row['visites'] == "اليوم السابع والعشرون") echo "selected" ?>  > اليوم السابع والعشرون  </option>
																<option <?php if( $row['visites'] == "اليوم الثامن والعشرون") echo "selected" ?>  > اليوم الثامن والعشرون  </option>
																<option <?php if( $row['visites'] == "اليوم التاسع والعشرون") echo "selected" ?>  > اليوم التاسع والعشرون  </option>
																<option <?php if( $row['visites'] == "اليوم الثلاثون") echo "selected" ?>  > اليوم الثلاثون  </option>

															</select>	
													  </div>
													  
												
													
													
												

													
												</div>
												
												
												
												
											
										
											
													
												
												
											</div>
											<div class="col-md-6 col-lg-4">
												
											<h2>العلامات الحيويه</h2>
													<div class="form-group form-floating-label">
														<label >قياس الضغط</label>
														<input  type="text" value="<?php echo $row['medicin_m'] ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="medicin_m" required  >
													</div>
													<div class="form-group form-floating-label">
														<label >قياس النبض</label>
														<input  type="text" value="<?php echo $row['hart_m'] ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="hart_m"  required >
													</div>
													<div class="form-group form-floating-label">
														<label >قياس الحرارة</label>
														<input  type="text" value="<?php echo $row['heat_m'] ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="heat_m" required  >
													</div>
													<div class="form-group form-floating-label">
														<label >قياس التنفس</label>
														<input  type="text" value="<?php echo $row['breathe_m'] ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="breathe_m" required  >
													</div>
													<div class="form-group form-floating-label">
														<label >السوائل الداخلية</label>
														<input  type="text" value="<?php echo $row['inside_m'] ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="inside_m"  required >
													</div>
													<div class="form-group form-floating-label">
														<label >السوائل الخارجية</label>
														<input  type="text" value="<?php echo $row['outside_m'] ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="outside_m"  required >
													</div>
													
											
										
											</div>
											<div class="col-md-6 col-lg-4">
												
												
												<div class="form-group">
													<label for="comment"> اسم العلاج </label>
													<textarea class="form-control" id="comment" name="medical" rows="5" required>
													<?php echo $row['medical'] ?>
													</textarea>
												</div>
												<div class="form-group">
													<label for="comment">برنامج اعادة التاهيل</label>
													<textarea class="form-control" id="comment" name="program" rows="5" required>
													<?php echo $row['program'] ?>
													</textarea>
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
			
	
			$query="UPDATE  sleeping_morning SET branch=?,code=?,sender_name=?,date=?,exit_date=?,visites=?,medicin_m=?,hart_m=?,heat_m=?,breathe_m=?,inside_m=?,outside_m=?,medical=?,program=? where id=?";
			$stm=$con->prepare($query);
			$stm->execute(array($branch,$code,$user,$date,$exit_date,$visites,$medicin_m,$hart_m,$heat_m,$breathe_m,$inside_m,$outside_m,$medical,$program,$id));
			if($stm->rowCount())	
			{
				echo '<script src="js/send_success.js"></script>';
				echo "<script>
					window.open('today_sleeping_morning_data.php?num=3&id=8','_self')
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
