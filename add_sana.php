<?php
include "include/header.php";
if(!isset($_SESSION['user'])){
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 }if($_SESSION['user']['rule_id']==22||$_SESSION['user']['rule_id']==2 ||$_SESSION['user']['rule_id']==6){
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
												
														<div class="form-group form-floating-label">
															<label >رقم الكود</label>
															<input  type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="code"  required >
															
														</div>
                                                        <div class="form-group form-floating-label">
															<label >الاسم الرباعي</label>
															<input  type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="name"  required >
														</div>
														
														<div class="form-group form-floating-label">
															<label >تاريخ الميلاد</label>
															<input  type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="brithday"  required >
														</div>

														<div class="form-group form-floating-label">
															<label >الجنس</label>
															<select class="selectpicker form-control"  id="tokens ddd"  data-live-search="true" name="sex" required >
																<option ></option>
																<option value="ذكر">ذكر</option>
																<option value="انثى">انثى</option>
															</select>
														</div>
                                                        
                                                        
													</div>
											    </div>
											
										
											    <div class="col-md-6 col-lg-4">
                                                    <div class="form-group form-floating-label">
                                                        <label >الخدمه </label>
                                                        <select class="selectpicker form-control" multiple  id="tokens ddd"  data-live-search="true" name="services[]" required  >
                                                            <option value="إحالة المستفيدة للخدمات">إحالة المستفيدة للخدمات</option>
                                                            <option value="استشارة نفسية" >استشارة نفسية</option>
                                                            <option value="بيانات المستفيدة ">بيانات المستفيدة </option>                                                  
                                                            <option value="معاينه طبية">معاينه طبية  </option>
                                                            <option value=" دعم نفسي أولي" > دعم نفسي أولي</option>
                                                            <option value="جلسة دعم نفسي فردي" >جلسة دعم نفسي فردي</option>
                                                            <option value="جلسة دعم نفسي جماعي" >جلسة دعم نفسي جماعي</option>
                                                            <option value="دعم نفسي توعوي" >دعم نفسي توعوي</option>
                                                            <option value="صرف العلاج" >صرف العلاج</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group form-floating-label">
                                                        <label > الحاله الاجتماعيه</label>
                                                        <select class="selectpicker form-control"  id="tokens ddd"  data-live-search="true" name="social_status"  >
                                                        <option ></option>
                                                        <option value="عازب">عازب</option>
                                                        <option value="مخطوب/ة">مخطوب/ة</option>
                                                        <option value="مطلق/ة">مطلق/ة</option>
                                                        <option value="متزوج/ة"> متزوج/ة</option>
                                                        <option value="أرمل/ة"> أرمل/ة</option>
                                                        <option value="طفل/ة"> طفل/ة</option>
                                                        <option value="منفصل بشكل غير رسمي">منفصل بشكل غير رسمي </option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group form-floating-label">
                                                        <label >نوع العمل</label>
                                                            <select class="selectpicker form-control"  id="tokens ddd"  data-live-search="true" name="work"   >
                                                            <option ></option>
                                                            <option value="طالب/ة">طالب/ة</option>
                                                            <option value="ربة بيت">ربة بيت</option>
                                                            <option value="معيل/ة">معيل/ة</option>
                                                            <option value="عسكري/ة"> عسكري/ة</option>
                                                            <option value="عاطل عن العمل"> عاطل عن العمل</option>
                                                            <option value="طفل/ة"> طفل/ة</option>
                                                            <option value="مدرس/ة"> مدرس/ة</option>
                                                            <option value=" عامل/ة"> عامل/ة</option>
                                                            <option value="اخر"> اخر</option>
                                                            </select>
                                                    </div>
                                                    <div class="form-group form-floating-label">
                                                        <label >نوع الاقامة </label>
                                                        <select class="selectpicker form-control"  id="tokens ddd"  data-live-search="true" name="place"  >
                                                        <option ></option>
                                                        <option value="مقيم/ة">مقيم/ة</option>
                                                        <option value="لاجى/ة">لاجى/ة</option>
                                                        <option value="نازح/ة">نازح/ة</option>
                                                        </select>
                                                    </div>
                                                
                                                    <div class="form-group form-floating-label">
                                                        <label >نوع الاعاقة</label>
                                                        <select class="selectpicker form-control" multiple  id="tokens ddd"  data-live-search="true" name="Disability[]" required  >
                                                            <option value="لا توجد إعاقة">لا توجد إعاقة</option>
                                                            <option value="إعاقة سمعية" >إعاقة سمعية</option>
                                                            <option value="إعاقة بصرية">إعاقة بصرية</option>
                                                            <option value="إعاقة حركية" >إعاقة حركية</option>
                                                            <option value="إعاقة ذهنية" >إعاقة ذهنية</option>
                                                        </select>
                                                    </div>
                                                   
											    </div>
											
                                                <div class="col-md-6 col-lg-4">
                                                    <div class="form-group form-floating-label">	
                                                        <label for="tokens">تشخيص رئيسي </label>
                                                        <select class="form-control input-border-bottom" name="diagnosis" id="tokens"   required >
                                                            <option> لا يوجد تشخيص رئيسي</option>
                                                            <option >Acute Stress (ACU)  /الإجهاد الحاد (ACU)</option>
                                                            <option >Grief (GRI)  /  الحزن</option>
                                                            <option >Moderate-severe Depressive Disorder (DEP)  /اضطراب الاكتئاب المتوسط الشديد</option>
                                                            <option >Post-traumatic Stress Disorder (PTSD) / اضطراب ما بعد الصدمة</option>
                                                            <option >Psychosis (PSY)  /  الذهان</option>
                                                            <option >Epilepsy/Seizures (EPI)  /الصرع / النوبات</option>
                                                            <option >Intellectual Disability (ID)  /الإعاقة الذهنية</option>
                                                            <option >Harmful Use of Alcohol and Drugs (SUB) /الاستخدام الضار للكحول والمخدرات</option>
                                                            <option >Suicide (SUI) /الانتحار </option>
                                                            <option >Other Significant Mental Health Complaints/شكاوى أخرى هامة تتعلق بالصحة العقلية</option>
                                                        </select>	
                                                    </div>
                                                    <div class="form-group form-floating-label">
                                                        <label >الاحالة  وارد</label>
                                                        <select class="selectpicker form-control"  id="tokens ddd"  data-live-search="true" name="type_con_from"  >
                                                            <option ></option>
                                                            <option  >احالة  وارد</option>
                                                        </select>
                                                    </div>

                                                    <div class="form-group form-floating-label">
                                                        <label >جهة الاحالة  وارد </label>
                                                        <select class="selectpicker form-control"  id="tokens ddd"  data-live-search="true" name="side_con_from"  >
															<?php
																$sql = "SELECT * FROM mange_convert_ex_side";
																$stm = $con->query($sql);
																foreach ($stm->fetchAll() as $row) {
																?>
																	<option> <?php echo $row['name'] ?></option>

															<?php } ?>

                                                        </select>	
                                                    </div>
                                                    <div class="form-group form-floating-label">
                                                        <label >الاحالة  صادرة </label>
                                                        <select class="selectpicker form-control"  id="tokens ddd"  data-live-search="true" name="type_con_to"  >
                                                            <option ></option>
                                                            <option  >احالة  صادر</option>
                                                        </select>
                                                            
                                                    </div>
                                                    <div class="form-group form-floating-label">
                                                        <label >جهة الاحالة  صادرة </label>
                                                        <select class="selectpicker form-control"  id="tokens ddd"  data-live-search="true" name="side_con_to"  >
                                                            <option ></option>
															<?php
																$sql = "SELECT * FROM mange_convert_ex_side";
																$stm = $con->query($sql);
																foreach ($stm->fetchAll() as $row) {
																?>
																	<option> <?php echo $row['name'] ?></option>

															<?php } ?>
                                                        </select>    
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
		$services=$_POST["services"];
		$services=implode(',',$services);
		$Disability=$_POST["Disability"];
		$Disability=implode(',',$Disability);
		$brithday=test_input($_POST["brithday"]);
		$name=test_input($_POST["name"]);
		$place=test_input($_POST["place"]);
		$social_status=test_input($_POST["social_status"]);
		$work=test_input($_POST["work"]);
        $diagnosis=test_input($_POST["diagnosis"]);
        $type_con_from=test_input($_POST["type_con_from"]);
        $side_con_from=test_input($_POST["side_con_from"]);
        $type_con_to=test_input($_POST["type_con_to"]);
        $side_con_to=test_input($_POST["side_con_to"]);



		// age must be more than 5 year
		$c= date('Y');
		$y= date('Y',strtotime($brithday));
		$age= $c-$y;
		//end

		    $user=$_SESSION['user']['id'];
			// find branch
			$branch=$_SESSION['user']['branch_id'];

			
			
			
			
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


			elseif(empty($name))
			{
				
				
				echo '<script>swal("يرجاء ادخال اسم الطبيب ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
			}
			elseif(is_numeric($name))
			{
				
				
				echo '<script>swal("اسم الطبيب لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
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
		


			




			elseif(empty($brithday))
			{
			
				
				echo '<script>swal("يرجاء ادخال  تاريخ ميلاد الحاله ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
			}
			elseif($age<5&&!$branch==6)
			{
			
				echo '<script>swal("العمر اقل من 5 سنين يرجاء مراجعة تاريخ الميلاد", "لم يتم رفع البيانات", {
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
				$sql="select * from sana where  code=? ";
				$stm=$con->prepare($sql); 
				$stm->execute(array($code));
				if($stm->rowCount()>0){

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
                   
					$query="INSERT INTO sana(branch,sex,code,date,services,Disability,brithday,name,place,social_status,work,diagnosis,type_con_from,side_con_from,type_con_to,side_con_to,sender_name,type)
					values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ";
					$stm=$con->prepare($query);
					$stm->execute(array($branch,$sex,$code,$date,$services,$Disability,$brithday,$name,$place,$social_status,$work,$diagnosis,$type_con_from,$side_con_from,$type_con_to,$side_con_to,$user,"جديد"));
					if($stm->rowCount())
					{
						include("print_resption_ticket.php");
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
