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
															
													<label for="tokens">رقم الكود</label>
													<select class="selectpicker form-control" name="code" id="tokens"  data-live-search="true" required >
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
													<label >الجلسة</label>
													<input  type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="section"  required >
												</div>
												<div class="form-group form-floating-label">
													<label >عنوان الجلسة</label>
													<input  type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="address"  required >
												</div>
													 
													
												
												
											</div>
											<div class="col-md-6 col-lg-4">
												<div class="form-group form-floating-label">
													<label > زمنها من</label>
													<input  type="time" class="form-control input-border-bottom" id="inputFloatingLabel" name="from_time"  required >
												</div>
												<div class="form-group form-floating-label">
													<label >زمها الى</label>
													<input  type="time" class="form-control input-border-bottom" id="inputFloatingLabel" name="to_time"  required >
												</div>
												
												<div class="form-group form-floating-label">
													<label >  تحديد المشكلة</label>
													<input  type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="select_s"  required >
												</div>
												<div class="form-group form-floating-label">
													<label > اجرأت الجلسة</label>
													<input  type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="agrat"  required >
												</div>
											</div>
											<div class="col-md-6 col-lg-4">
												
												<div class="form-group form-floating-label">
													<label >  الاساليب العلاجية المستخدمة</label>
													<input  type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="alasalib"  required >
												</div>
												<div class="form-group form-floating-label">
													<label >المهام والواجبات</label>
													<input  type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="taks"  required >
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

											<div class="form-group form-floating-label">
												<label >مدى تحسن المريض</label>
												<select class="selectpicker form-control"  id="tokens ddd"  data-live-search="true" name="recover" required  >
													<option ></option>
													<option > جيد</option>
													<option > متوسط</option>
													<option >لاباس</option>
													<option > غير متحسن</optio>
													
												</select>
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
		$recover=test_input($_POST["recover"]);
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
				$sql="select * from individual_sessions where  code=? and date=?  ";
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
	
					$query="INSERT INTO individual_sessions(branch,code,section,address,from_time,to_time,select_s,agrat,alasalib,taks,violense,date,sender_name,type,recover)
					values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ";
					$stm=$con->prepare($query);
					$stm->execute(array($branch,$code,$section,$address,$from_time,$to_time,$select_s,$agrat,$alasalib,$taks,$violense,$date,$user,$type,$recover));
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
