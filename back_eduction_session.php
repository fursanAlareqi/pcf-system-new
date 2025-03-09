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
										<div class="card-title">  جلسة تثقيفية </div>
									</div>
									<div class="card-body">
									
										<div class="row">
											
										
											<div class="col-md-6 col-lg-4">
												
												
												<div class="form-group form-floating-label">
													<label >تاريخ تسجيل الجلسة</label>
													<input  type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="date"  required >
												</div>
												<div class="form-group form-floating-label">
															
										<label for="tokens">رقم الكود</label>
										<select class="selectpicker form-control" name="code" id="tokens"  data-live-search="true" >
											<option value=""></option>
											<?php 
												// find branch
												$branch=$_SESSION['user']['branch_id'];
												
												//end find branch 
												$sql="select DISTINCT(code) from hotline where branch=? ";
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
                                                <!-- <div class="form-group form-floating-label">
                                                    <label >رقم الهاتف</label>
                                                    <input  type="tel" class="form-control input-border-bottom" id="inputFloatingLabel" name="phone"   required >
                                                </div> -->
												
												
												        
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
											<div class="form-group form-floating-label">
													<label >من التوقيت</label>
													<input  type="time" class="form-control input-border-bottom" id="inputFloatingLabel" name="frome_time"   required >
												</div>
												<div class="form-group form-floating-label">
													<label >الى التوقيت</label>
													<input  type="time" class="form-control input-border-bottom" id="inputFloatingLabel" name="to_time"   required >
												</div>
                                            
												<div class="form-group form-floating-label">
													<label >المحافظه</label>
															<select class="selectpicker form-control"  id="tokens ddd"  data-live-search="true" name="briefness" required  >
															<option ></option>
															<option  > صنعاء  </option>
															<option > اب</option>
															<option > تعز</option>
															<option > عدن</option>
															<option > حضرموت</option>
															<option > صعدة</option>
															<option > عمران</option>
															<option > حجة</option>
															<option > الحديدة</option>
															<option > المحويت</option>
															<option > ريمة</option>
															<option > ذمار</option>
															<option > البيضاء</option>
															<option >  الضالع</option>
															<option > المهرة</option>
															<option>الجوف </option>
															<option> شبوة</option>
															<option>سقطرة </option>
															<option> ابين</option>
															<option>مارب </option>
															</select>
												</div>
                                                
                                            
		
										
											</div>
											<div class="col-md-6 col-lg-4">
											
											    <div class="form-group">
													<label for="comment">الموضوع</label>
													<textarea class="form-control" id="comment" name="detals" rows="5" required>

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
		
		   // $date= date('Y-m-d');
		$date=test_input($_POST["date"]);
		$detals=test_input($_POST["detals"]);
		$briefness=test_input($_POST["briefness"]);
		$sql="select max(code) code  from hotline  ";
		$stmu=$con->prepare($sql); 
		$stmu->execute();
		if($stm->rowCount()>0)
			{
				$rowu=$stmu->fetch();
				$code=$rowu['code']+1;
			}
		$frome_time=test_input($_POST["frome_time"]);
		$to_time=test_input($_POST["to_time"]);
		$m_sex=0;
		$f_sex=0;

	

		    $user=$_SESSION['user']['id'];
			// find branch
			$branch=$_SESSION['user']['branch_id'];

			//end find branch 
			
			
			//phone number 
		
			//phone number end
			
			//phone number end
			$sql="select * from hotline where  date=? and sender_name =? and frome_time=? or to_time =? ";
			$stm=$con->prepare($sql); 
			$stm->execute(array($date,$user,$frome_time,$to_time));
			if($stm->rowCount()){

				echo '<script>swal("لقد تم ادخال بيانات في نفس التوقيت في النظام من قبل", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
			}
			elseif($frome_time>=$to_time){

				echo '<script>swal("لايمكن ان يكون الوقت اقل من دقيقه  ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
			}
			
			else if(empty($user))
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
				$sql="select * from hotline where  code=? and date=? and type=? ";
				$stm=$con->prepare($sql); 
				$stm->execute(array($code,$date,'عودة'));
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
					$query="INSERT INTO hotline(branch,code,date,sex,
					frome_time,to_time,briefness,sender_name,type)
					values (?,?,?,?,?,?,?,?) ";
					$stm=$con->prepare($query);
					$stm->execute(array($branch,$code,$date,$sex,$frome_time,$to_time,$briefness,$user,'عودة'));
					if($stm->rowCount())
					{
						$query="INSERT INTO new_eduction_session(code,branch,date,
						sender_name,detals)
						values (?,?,?,?,?) ";
						$stm=$con->prepare($query);
						$stm->execute(array($code,$branch,$date,$user,$detals));
						if($stm->rowCount())
						{
							echo '<script src="js/send_success.js"></script>';
						}
						else
						{
							echo'<script src="js/send_error.js"></script>';
						}
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
