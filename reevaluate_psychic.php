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
										<div class="card-title"> المراجعة الدوية</div>
									</div>
									<div class="card-body">
										<div class="row">
											
										
											<div class="col-md-6 col-lg-4">
												
												
												<div class="form-group form-floating-label">
													<label >تاريخ تسجيل الحالة</label>
													<input  type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="date"  required >
												</div>
												<div class="form-group form-floating-label">
															
													<label for="tokens">رقم الكود</label>
													<select class="selectpicker form-control" name="code" id="tokens"  data-live-search="true" required >
														<option value=""></option>
														<?php 
															// find branch
															$branch=$_SESSION['user']['branch_id'];
															
															//end find branch 
															$sql="select DISTINCT(code) from psychiatrist_talk where branch=? ";
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
                                               
													 
													
												
												
											</div>
											<div class="col-md-6 col-lg-4">
												
												
                                            <div class="form-group form-floating-label">
                                                <label >تاريخ  العودة </label>
                                                <input  type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="back_date"  required >
                                            </div>
                                            <div class="form-group form-floating-label">
                                                        
                                                <label for="tokens">الية التقييم</label>
                                                <select class="selectpicker form-control" name="evaluation[]" multiple id="tokens"  data-live-search="true" required >
                                                    <option value=""></option>
                                                    <option >الملاحظة المباشرة</option>
                                                    <option >قوائم التقييم</option>
                                                    <option >معلومات من الاسرة</option>
                                                    <option >تطبيق مقياس</option>

                                                    
                                                
                                                </select>	
                                            </div>
											
											</div>
											<div class="col-md-6 col-lg-4">
                                                <div class="form-group">
													<label for="comment">ملخص الحالة</label>
													<textarea class="form-control" id="comment" name="summary" rows="5">

													</textarea>
												</div>
												
                                          

											<label class="form-label">المقاييس النفسية</label>
													<div class="selectgroup selectgroup-pills">
														<label class="selectgroup-item">
															<input type="checkbox" name="violense[]" value="اختبار بيك للاكتئاب" class="selectgroup-input" >
															<span class="selectgroup-button">اختبار بيك للاكتئاب</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" name="violense[]" value="مقياس تايلور للقلق الصريح" class="selectgroup-input" >
															<span class="selectgroup-button"> مقياس تايلور للقلق الصريح</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" name="violense[]" value="مقياس الهوس" class="selectgroup-input" >
															<span class="selectgroup-button">مقياس الهوس</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" name="violense[]" value="اختبار المعتقدات الشخصية" class="selectgroup-input" >
															<span class="selectgroup-button">اختبار المعتقدات الشخصية</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" name="violense[]" value="لاختبارات الستة" class="selectgroup-input" >
															<span class="selectgroup-button">لاختبارات الستة</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" name="violense[]" value="قائمة الرهاب الاجتماعي" class="selectgroup-input" >
															<span class="selectgroup-button">قائمة الرهاب الاجتماعي</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" name="violense[]" value="مخاوف الاطفال" class="selectgroup-input" >
															<span class="selectgroup-button">مخاوف الاطفال</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" name="violense[]" value="مقياس القلق الاجتماعي" class="selectgroup-input" >
															<span class="selectgroup-button">مقياس القلق الاجتماعي</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" name="violense[]" value="اختبار MMPI" class="selectgroup-input" >
															<span class="selectgroup-button">اختبار MMPI</span>
														</label>
														<label class="selectgroup-item">
															<input type="checkbox" name="violense[]" value="اختبار هاملتون" class="selectgroup-input" >
															<span class="selectgroup-button">اختبار هاملتون</span>
														</label>
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
        $evaluation=$_POST["evaluation"];
		$evaluation=implode(',',$evaluation);
		$today= date('Y-m-d');
		$date=test_input($_POST["date"]);
		$back_date=test_input($_POST["back_date"]);
		$summary=test_input($_POST["summary"]);
		
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
			
			$sql="select type from resption where  code=?  and type = ? and date=? ";
			$stmps=$con->prepare($sql); 
			$stmps->execute(array($code,'عودة',$date));
		
			if($stmps->rowCount()==0){

                echo '<script>swal("لم يتم تسجيل الحاله كعودة اليوم في الاستقبال", "لم يتم رفع البيانات", {
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
				$sql="select * from reevaluate_psychic where  code=? and date=?  ";
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
	
					$query="INSERT INTO reevaluate_psychic(branch,code,evaluation,back_date,summary,violense,date,sender_name,type)
					values (?,?,?,?,?,?,?,?,?) ";
					$stm=$con->prepare($query);
					$stm->execute(array($branch,$code,$evaluation,$back_date,$summary,$violense,$date,$user,'عودة'));
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
