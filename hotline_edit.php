<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 }
 if($_SESSION['user']['rule_id']==16||$_SESSION['user']['rule_id']==2||$_SESSION['user']['rule_id']==6||$_SESSION['user']['rule_id']==19){
?>


		
			<div class="content">
				<div class="page-inner">
				

					<div class="row">
						<div class="col-md-12">
						<?php 
                if(isset($_GET['action'],$_GET['ids']) && $_GET['action']=='edit'){
                  $id=$_GET['ids'];
                  $sql="select * from hotline where id=?";
                  $stm=$con->prepare($sql); 
                  $stm->execute(array($id));
                  if($stm->rowCount())
                      {
                  foreach($stm->fetchAll() as $row) {
                     
					  	?>
							<form action="" method="post">
								<div class="card">
									<div class="card-header">
										<div class="card-title"> تعديل بيانات الخط الساخن</div>
									</div>
									<div class="card-body">
									<div class="row">
											<div class="col-md-6 col-lg-4">
												
												
												<div class="form-group form-floating-label">
													<label >تاريخ تسجيل الحالة</label>
													<input  type="date" value="<?php echo $row['date']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="date"   >
												</div>
												<div class="form-group form-floating-label">
												
													<div class="form-group form-floating-label">
														<label >رقم الكود</label>
														<input  type="number" value="<?php echo $row['code']; ?>" disabled class="form-control input-border-bottom" id="inputFloatingLabel"  required >
														<input  type="hidden" value="<?php echo $row['code']; ?>"  class="form-control input-border-bottom" id="inputFloatingLabel" name="code"  required >
													</div>
													<div class="form-group form-floating-label">
															<label >من التوقيت</label>
															<input  type="time"  value="<?php echo $row['frome_time']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="frome_time"   required >
														</div>
														<div class="form-group form-floating-label">
															<label >الى التوقيت</label>
															<input  type="time"  value="<?php echo $row['to_time']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="to_time"   required >
														</div>
													<div class="form-group form-floating-label">
														<label >تاريخ الميلاد</label>
														<input  type="date" value="<?php echo $row['brithday']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="brithday"  required >
													</div>
													<div class="form-group form-floating-label">
														<label >الجنس</label>
														<select class="selectpicker form-control"  id="tokens ddd"  data-live-search="true" name="sex" required >
															<option ></option>
															<option value="ذكر"<?php if( $row['sex'] == "ذكر") echo "selected" ?>>ذكر</option>
															<option value="انثى"<?php if( $row['sex'] == "انثى") echo "selected" ?>>انثى</option>
														</select>
															
													</div>
													<div class="form-group form-floating-label">
														<label >الاسم الرباعي</label>
														<input  type="text" value="<?php echo $row['name']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="name"  required >
													</div>
												
												
												
												
													

													
												</div>
												

													
											
													
												
												
											</div>

                                            <div class="col-md-6 col-lg-4">

												
													
													<div class="form-group form-floating-label">
														<label >كيف عرفت بخدمات المؤسسة</label>
														<select class="selectpicker form-control"  id="tokens ddd"  data-live-search="true" name="know_our" required  >
															<option ></option>
															
																<option <?php if( $row['briefness'] == "لم يصرح") echo "selected"?> value="لم يصرح">لم يصرح</option>
														
															<option <?php if( $row['know_our'] == "الفيس بوك") echo "selected" ?>>الفيس بوك</option>
															
														<option <?php if( $row['know_our'] == "مكتب تعز") echo "selected" ?>>مكتب تعز</option>
														
														<option <?php if( $row['know_our'] == "مكتب عدن") echo "selected" ?>>مكتب عدن</option>
															<option <?php if( $row['know_our'] == "صديق") echo "selected" ?>>صديق</option>
															<option <?php if( $row['know_our'] == "احالة خارجية واردة") echo "selected" ?>>احالة خارجية واردة</optio>
															<option <?php if( $row['know_our'] == "احالة داخلية واردة") echo "selected" ?>>احالة داخلية واردة</option>
															<option <?php if( $row['know_our'] == "طبيب") echo "selected" ?>>طبيب </option>
															<option <?php if( $row['know_our'] == "اخصائي نفسي") echo "selected" ?>>اخصائي نفسي </option>
															<option <?php if( $row['know_our'] == "اخرون") echo "selected" ?>>اخرون </option>
														</select>
													</div>
										
												
												
												
												<div class="form-group form-floating-label">
													<label >نوع العمل</label>
														<select class="selectpicker form-control"  id="tokens ddd"  data-live-search="true" name="work" required  >
														<option ></option>
													
																<option <?php if( $row['briefness'] == "لم يصرح") echo "selected"?> value="لم يصرح">لم يصرح</option>
														
														<option value="طالب/ة" <?php if( $row['work'] == "طالب/ة") echo "selected" ?>>طالب/ة</option>
														<option value="ربة بيت" <?php if( $row['work'] == "ربة بيت") echo "selected" ?>>ربة بيت</option>
														<option value="معيل/ة" <?php if( $row['work'] == "معيل/ة") echo "selected" ?>>معيل/ة</option>
														<option value="عسكري/ة" <?php if( $row['work'] == "عسكري/ة") echo "selected" ?>>عسكري/ة</option>
														<option value="عاطل عن العمل" <?php if( $row['work'] == "عاطل عن العمل") echo "selected" ?>>عاطل عن العمل</option>
														<option value="طفل/ة" <?php if( $row['work'] == "طفل/ة") echo "selected" ?>>طفل/ة</option>
														<option value="مدرس/ة" <?php if( $row['work'] == "مدرس/ة") echo "selected" ?>>مدرس/ة</option>
														<option value=" عامل/ة" <?php if( $row['work'] == "عامل/ة") echo "selected" ?>>عامل/ة</option>
														<option value="اخر" <?php if( $row['work'] == "اخر") echo "selected" ?>>اخر</option>
														</select>
												</div>
												<div class="form-group form-floating-label">
													<label > الحاله الاجتماعيه</label>
													<select class="selectpicker form-control"  id="tokens ddd"  data-live-search="true" name="social_status" required >
													<option ></option>
													
																<option <?php if( $row['briefness'] == "لم يصرح") echo "selected"?> value="لم يصرح">لم يصرح</option>
														
													<option value="عازب" <?php if( $row['social_status'] == "عازب") echo "selected" ?>>عازب</option>
													<option value="مخطوب/ة"<?php if( $row['social_status'] == "مخطوب/ة") echo "selected" ?>>مخطوب/ة</option>
													<option value="مطلق/ة"<?php if( $row['social_status'] == "مطلق/ة") echo "selected" ?>>مطلق/ة</option>
													<option value="متزوج/ة"<?php if( $row['social_status'] == "متزوج/ة") echo "selected" ?>> متزوج/ة</option>
													<option value="أرمل/ة"<?php if( $row['social_status'] == "أرمل/ة") echo "selected" ?>> أرمل/ة</option>
													<option value="طفل/ة"<?php if( $row['social_status'] == "طفل/ة") echo "selected" ?>> طفل/ة</option>
													</select>
												</div>
												
												<div class="form-group form-floating-label">
													<label >المستوى التعليمي</label>
														<select class="selectpicker form-control"  id="tokens ddd"  data-live-search="true" name="studing" required  >
														<option ></option>
														
																<option <?php if( $row['briefness'] == "لم يصرح") echo "selected"?> value="لم يصرح">لم يصرح</option>
														
														<option value="امي"<?php if( $row['studing'] == "امي") echo "selected" ?> >امي</option>
														<option value="ابتدائي" <?php if( $row['studing'] == "ابتدائي") echo "selected" ?>>ابتدائي</option>
														<option value="اعدادي" <?php if( $row['studing'] == "اعدادي") echo "selected" ?>>اعدادي</option>
														<option value="ثانوي" <?php if( $row['studing'] == "ثانوي") echo "selected" ?>>ثانوي</option>
														<option value="دبلوم" <?php if( $row['studing'] == "دبلوم") echo "selected" ?>> دبلوم</option>
														<option value="جامعي" <?php if( $row['studing'] == "جامعي") echo "selected" ?>> جامعي</option>
														<option value="فوق الجامعي" <?php if( $row['studing'] == "فوق الجامعي") echo "selected" ?>> فوق الجامعي</option>
														</select>
												</div>
												
										
											</div>
											<div class="col-md-6 col-lg-4">
												
												<div class="form-group form-floating-label">
													<label >نوع الاقامة </label>
														<select class="selectpicker form-control"  id="tokens ddd"  data-live-search="true" name="place" required >
															<option ></option>
															<option value="مقيم/ة"<?php if( $row['place'] == "مقيم/ة") echo "selected" ?>>مقيم/ة</option>
															<option value="لاجى/ة"<?php if( $row['place'] == "لاجى/ة") echo "selected" ?>>لاجى/ة</option>
															<option value="نازح/ة"<?php if( $row['place'] == "نازح/ة") echo "selected" ?> >نازح/ة</option>
														</select>
												</div>
											
												<div class="form-group form-floating-label">
													<label >المحافظه</label>
															<select class="selectpicker form-control"  id="tokens ddd"  data-live-search="true" name="briefness" required  >
															<option ></option>
																<option <?php if( $row['briefness'] == "لم يصرح") echo "selected"?> value="لم يصرح">لم يصرح</option>
															<option <?php if( $row['briefness'] == "صنعاء") echo "selected" ?> > صنعاء  </option>
															<option <?php if( $row['briefness'] == "اب") echo "selected" ?> > اب</option>
															<option <?php if( $row['briefness'] == "تعز") echo "selected" ?> > تعز</option>
															<option <?php if( $row['briefness'] == "عدن") echo "selected" ?> > عدن</option>
															<option <?php if( $row['briefness'] == "حضرموت") echo "selected" ?> > حضرموت</option>
															<option <?php if( $row['briefness'] == "صعدة") echo "selected" ?> > صعدة</option>
															<option <?php if( $row['briefness'] == "عمران") echo "selected" ?> > عمران</option>
															<option <?php if( $row['briefness'] == "حجة") echo "selected" ?> > حجة</option>
															<option <?php if( $row['briefness'] == "الحديدة") echo "selected" ?> > الحديدة</option>
															<option <?php if( $row['briefness'] == "المحويت") echo "selected" ?> > المحويت</option>
															<option <?php if( $row['briefness'] == "ريمة") echo "selected" ?> > ريمة</option>
															<option <?php if( $row['briefness'] == "ذمار") echo "selected" ?> > ذمار</option>
															<option <?php if( $row['briefness'] == "البيضاء") echo "selected" ?> > البيضاء</option>
															<option <?php if( $row['briefness'] == "الضالع") echo "selected" ?> >  الضالع</option>
															<option <?php if( $row['briefness'] == "المهرة") echo "selected" ?> > المهرة</option>
															<option <?php if( $row['briefness'] == "الجوف") echo "selected" ?> >الجوف </option>
															<option <?php if( $row['briefness'] == "شبوة") echo "selected" ?> > شبوة</option>
															<option <?php if( $row['briefness'] == "سقطرة") echo "selected" ?> >سقطرة </option>
															<option <?php if( $row['briefness'] == "ابين") echo "selected" ?> > ابين</option>
															<option	<?php if( $row['briefness'] == "مارب") echo "selected" ?> >مارب </option>
															</select>
												</div>
											
											
											
												
												
											
											
											
										
											</div>
										
											
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


      $sex=test_input($_POST['sex']);
      $code=test_input($_POST["code"]);
         // $date= date('Y-m-d');
      $date=test_input($_POST["date"]);
      
      $brithday=test_input($_POST["brithday"]);
      $frome_time=test_input($_POST["frome_time"]);
      $to_time=test_input($_POST["to_time"]);
      $brithday_blace=test_input($_POST["brithday_blace"]);
      $name=test_input($_POST["name"]);
      $know_our=test_input($_POST["know_our"]);
      $place=test_input($_POST["place"]);
      $social_status=test_input($_POST["social_status"]);
      $department=test_input($_POST["department"]);
      $briefness=test_input($_POST["briefness"]);
      $date_come=test_input($_POST["date_come"]);
      $becouse_come=test_input($_POST["becouse_come"]);
      $studing=test_input($_POST["studing"]);
      $work=test_input($_POST["work"]);
      $plasce_from_come=test_input($_POST["plasce_from_come"]);

      

      $m_sex=0;
      $f_sex=0;

      // age must be more than 5 year
      $c= date('Y');
      $y= date('Y',strtotime($brithday));
      $age= $c-$y;
      //end

          $user=$_SESSION['user']['id'];
          // find branch
          $branch=$_SESSION['user']['branch_id'];

          //end find branch 
		
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
		


		elseif($age<5)
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
			
			
				$query="UPDATE  hotline set name=?,brithday=?,date=?,sex=?,place=?,social_status=?,briefness=?,frome_time=?,to_time=? ,studing=?,work=?,	know_our=?,sender_name=? where id=?
				 ";
				$stm=$con->prepare($query);
				$stm->execute(array($name,$brithday,$date,$sex,$place,
				$social_status,$briefness,$frome_time,$to_time,$studing,$work,
				 $know_our,$user, $id));
				if($stm->rowCount())
				{
					echo '<script src="js/send_success.js"></script>';
					echo "<script>
                                  window.open('today_hotline_name.php?num=103&id=100','_self')
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
