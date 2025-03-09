<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 }if($_SESSION['user']['rule_id']==4||$_SESSION['user']['rule_id']==2 ||$_SESSION['user']['rule_id']==6){
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
														<label >تاريخ الميلاد</label>
														<input  type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="brithday"  required >
													</div>
													
													<label >نوع الاقامة </label>
													<select class="selectpicker form-control"  id="tokens ddd"  data-live-search="true" name="place" required >
													<option ></option>
													<option value="مقيم/ة">مقيم/ة</option>
													<option value="لاجى/ة">لاجى/ة</option>
													<option value="نازح/ة">نازح/ة</option>
													</select>

													
												</div>
												
												
												
												
												
												<div class="form-group form-floating-label">
													<label >العزله</label>
													<input  type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="isolation"  required >
												</div>
												
													
												
												<div class="form-group form-floating-label">
													<label>تاريخ النزوح</label>
													<input  type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="date_come"  required >
												</div>
												
												

													
												<div class="form-group form-floating-label">
													<label>رقم البطاقه</label>
													<input  type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="identity_number"  required >
												</div>
												

												
												<div class="form-group form-floating-label">
												<label>عدد الاخوة الذكور </label>
													<input  type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="brother"  required >
												</div>
												
												
													<label > الحاله الاجتماعيه</label>
													<select class="selectpicker form-control"  id="tokens ddd"  data-live-search="true" name="social_status" required >
													<option ></option>
													<option value="عازب">عازب</option>
													<option value="مخطوب/ة">مخطوب/ة</option>
													<option value="مطلق/ة">مطلق/ة</option>
													<option value="متزوج/ة"> متزوج/ة</option>
													<option value="أرمل/ة"> أرمل/ة</option>
													<option value="طفل/ة"> طفل/ة</option>
													</select>
												
											
												<div class="form-group form-floating-label">
													<label >عدد الزوجات </label>
													<input  type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="number_of_wife"   >
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
											
											<div class="form-group form-floating-label">
											<label >الاسم الرباعي</label>
												<input  type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="name"  required >
											</div>
											<div class="form-group form-floating-label">
												<label>مكان الميلاد</label>
												<input  type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="brithday_blace"  required >
													
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
											<div class="form-group form-floating-label">
												<label >القريه</label>
												<input  type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="villag"  required >
											</div>
											<div class="form-group form-floating-label">
												<label >المستوى التعليمي</label>
													<select class="selectpicker form-control"  id="tokens ddd"  data-live-search="true" name="studing" required  >
													<option ></option>
													<option value="امي">امي</option>
													<option value="ابتدائي">ابتدائي</option>
													<option value="اعدادي">اعدادي</option>
													<option value="ثانوي" >ثانوي</option>
													<option value="دبلوم" > دبلوم</option>
													<option value="جامعي"> جامعي</option>
													<option value="فوق الجامعي"> فوق الجامعي</option>
													</select>
											</div>
											<div class="form-group form-floating-label">
												<label >مكان صدورها</label>
												<input  type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="identity_place"  required >
													
											</div>
											<div class="form-group form-floating-label">
												<label >عدد الاخوة الاناث </label>
												<input  type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="sister"   required>
											</div>
											<div class="form-group form-floating-label">
												<label >عدد الابناء الذكور</label>
												<input  type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="son"   >
												
											</div>
											<div class="form-group form-floating-label">
												<label >العمر عند الزواج </label>
												<input  type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="age_when_married"   >
												
											</div>
											
											
										
											</div>
											<div class="col-md-6 col-lg-4">

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
												
												<div class="form-group form-floating-label">
													<label >رقم الهاتف</label>
													<input  type="tel" class="form-control input-border-bottom" id="inputFloatingLabel" name="phone" pattern="[7]{1}[7,1,3,0]{1}[0-9]{7}"  required >
												</div>
												<div class="form-group form-floating-label">
													<label >استشاره/معاينة</label>
														<select class="selectpicker form-control"  id="tokens ddd"  data-live-search="true" name="view" required  >
															<option ></option>
															<option value="استشارة" >استشارة</option>
															<option value="معاينة">معاينة</option>
															<option value="جلسة دعم نفسي" >جلسة دعم نفسي</option>
														</select>
 												</div>
												 <div class="form-group form-floating-label">
													 <label >المديريه </label>
													<input  type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="department"  required >
												</div>
												<div class="form-group form-floating-label">
													<label >سبب النزوح</label>
													<input  type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="becouse_come"  required >
												</div>
												
												<div class="form-group form-floating-label">
													<label >نوع البطاقة</label>
														<select class="selectpicker form-control"  id="tokens ddd"  data-live-search="true" name="identity" required >
														<option ></option>
														<option value="بطاقة شخصية">بطاقة شخصية</option>
														<option value="بطاقة انتخابية">بطاقة انتخابية</option>
														<option value="جواز سفر">جواز سفر</option>
														<option value="بطاقة عائلية">بطاقة عائلية</optio>
														<option value="معرف">معرف </option>
														<option value="استبيان">استبيان </option>
														<option value="اخرى"> اخرى</option>
														</select>
												</div>
												<div class="form-group form-floating-label">
												<label > ترتيبة بين الاخوة</label>
													<input  type="text" class="form-control input-border-bottom" id="inputFloatingLabel" name="laying"  required >
													
												</div>
												<div class="form-group form-floating-label">
													<label >نوع العمل</label>
														<select class="selectpicker form-control"  id="tokens ddd"  data-live-search="true" name="work" required  >
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
													<label >عدد الابناء الاناث </label>
													<input  type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="daughter"   >
													
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
		$view=test_input($_POST["view"]);
		$brithday=test_input($_POST["brithday"]);
		$phone=test_input($_POST["phone"]);
		$brithday_blace=test_input($_POST["brithday_blace"]);
		$name=test_input($_POST["name"]);
		$know_our=test_input($_POST["know_our"]);
		$place=test_input($_POST["place"]);
		$social_status=test_input($_POST["social_status"]);
		$department=test_input($_POST["department"]);
		$isolation=test_input($_POST["isolation"]);
		$villag=test_input($_POST["villag"]);
		$briefness=test_input($_POST["briefness"]);
		$date_come=test_input($_POST["date_come"]);
		$becouse_come=test_input($_POST["becouse_come"]);
		$studing=test_input($_POST["studing"]);
		$identity=test_input($_POST["identity"]);
		$identity_number=test_input($_POST["identity_number"]);
		$identity_place=test_input($_POST["identity_place"]);
		$laying=test_input($_POST["laying"]);
		$brother=test_input($_POST["brother"]);
		$work=test_input($_POST["work"]);

		$son=test_input($_POST["son"]);
		$daughter=test_input($_POST["daughter"]);
		$number_of_wife=test_input($_POST["number_of_wife"]);
		$age_when_married=test_input($_POST["age_when_married"]);
		$sister=test_input($_POST["sister"]);
		
		$m_sex=0;
		$f_sex=0;

		    $user=$_SESSION['user']['id'];
			// find branch
			$branch=$_SESSION['user']['branch_id'];
			$sql="select * from branch where  id=? ";
			$stm=$con->prepare($sql); 
			$stm->execute(array($branch));
			$branch=$stm->fetch();
			$branch=$branch['branch_name'];

			//end find branch 
			
			
			
			//التحقق ان اسم المنتج موجود وليس ارقام
		
			
			


			if(empty($name))
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
		


			elseif(empty($phone))
			{
				
				
				echo '<script>swal("يرجاء ادخال رقم هاتف الحاله ", "لم يتم رفع البيانات", {
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
				
				
				echo '<script>swal("رقم هاتق الحاله لا يمكن ان يكون احرف", "لم يتم رفع البيانات", {
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
			




			
			/////////////////////////////////////////////////////////////////////////////////////تذكير الشرط حق الايميل

			//اذا لايوجد اي مشكلة يقوم بارسال الملف
			else
			{
				$sql="select * from resption where  code=? ";
				$stm=$con->prepare($sql); 
				$stm->execute(array($code));
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
					$query="INSERT INTO resption(branch,name,code,brithday,date,
					phone,brithday_blace,sex,
					place,social_status,department,isolation,villag,briefness,
					  becouse_come,date_come,studing,identity,
					   identity_number,identity_place,laying,brother,work,
						son,daughter,number_of_wife,age_when_married,
						sister,know_our,sender_name,view,type)
					values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?) ";
					$stm=$con->prepare($query);
					$stm->execute(array($branch,$name,$code,$brithday,$date,$phone,$brithday_blace,$sex,$place,
					$social_status,$department,$isolation,$villag,$briefness
					  ,$becouse_come,$date_come,$studing,$identity
					   ,$identity_number,$identity_place,$laying,$brother,
						$work,$son,$daughter,$number_of_wife,
						$age_when_married,$sister,
					 $know_our,$user,$view,'جديد'));
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
