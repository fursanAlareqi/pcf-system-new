<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 }
?>

	<script>
		function apper(){
		var text= document.getElementById("type");
		if(text.value == 'مرضية'){
			document.getElementById("file").style.display="block";
	
		}
		else {
			document.getElementById("file").style.display="none";
		
		}

		return;
		}

    </script>
	<style>
		#file{
			display:none;	
		}
	</style>
		
			<div class="content">
				<div class="page-inner">
				

					<div class="row">
						
						<div class="col-md-12">
							<form action="" method="post" enctype="multipart/form-data">
								<div class="card">
									<div class="card-header">
										<div class="card-title"> اضافة حالة</div>
									</div>
									<div class="card-body">
										<div class="row">
											
										
											<div class="col-md-6 col-lg-4">
												
												
												<div class="form-group form-floating-label">
													<label >تاريخ  الاجازة</label>
													<input  type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="date"  required >
												</div>
												
												
													
											</div>
												
												
												
												
											
										
											
													
												
												
											
											<div class="col-md-6 col-lg-4">
														
												<div class="form-group form-floating-label">
													<label >نوع الاجازة  </label>
													<select class="selectpicker form-control"  id="type" onchange="apper()"  data-live-search="true" name="type"  >
														<option ></option>
														<option value="مرضية" >مرضية</option>
														<option value="سنوية" >سنوية</option>
													</select>
												</div>
												<div class="form-group" id="file">
													<label for="exampleFormControlFile1">اضافة ملف</label>
													<input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
												</div>
													 	
												
											
											</div>
											<div class="col-md-6 col-lg-4">
												<div class="form-group form-floating-label" >
													
													<label for="tokens">اسم الموظف البديل</label>
													<select class="selectpicker form-control" name="emp" id="tokens"  data-live-search="true" >
														<option value=""></option>
														<?php 
															// find branch
															$branch=$_SESSION['user']['branch_id'];
															$user=$_SESSION['user']['id'];
															
															//end find branch 
															$sql="select * from  user where  branch_id=? and id <> ? ";
															$stm=$con->prepare($sql); 
															$stm->execute(array($branch,$user));
															if($stm->rowCount()>0)
																{
																	foreach($stm->fetchAll() as $row) 
																	{
															
														
															
													
														?>
															<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
															
														<?php
																	}
																}
														?>
													
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

		
		$today= date('Y-m-d');

		$date=test_input($_POST["date"]);
		$type=$_POST["type"];
		$emp=test_input($_POST["emp"]);
		
		
		if($type=="مرضية"){
			$file_erroe=0;
			$exti = array('pdf');
			$file=$_FILES["file"];
			$file_name=$file["name"];
			$file_tmp=$file["tmp_name"];
			$file_name_expload = explode('.', $file_name);
			$file_name_expload_end = strtolower(end($file_name_expload));

	
	
		}
		else{
			$file_erroe=1;
			$file_name='';
		}
		
			$sql="select vacation from user where id=?  ";
			$stm=$con->prepare($sql); 
			$stm->execute(array($user));
			$num_vacation=$stm->fetch();
			$num_vacation=$num_vacation['vacation'];
			if($num_vacation == 0 && $type == "سنوية" ){

				echo '<script>swal(" لم يتبقاء لديك اي اجازات", "لم يتم رفع طلب الاجازة ", {
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
			elseif(($date<$today) && ($type=="سنوية")){
				echo '<script>swal("لا يمكن رفع اجازة ليوم سابق", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
			}

			elseif(empty($type))
			{
				
				
				echo '<script>swal("يرجاء اختيار نوع الاجازة", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
			}

			elseif(empty($emp))
			{
				
				
				echo '<script>swal("يرجاء اختيار موظف بديل", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
			}
		
			
	

			elseif(($type=="مرضية") && ($_FILES['file']['error'] == 4) ){
				$file_erroe=1;
				echo '<script>swal("لم تقم بارفاق ملف يرجا ارفاق ملف", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
				
			}
			elseif($type=="مرضية" && !in_array($file_name_expload_end, $exti)){
				$file_erroe=1;
				echo '<script>swal("(pdf)الملف الئي قمت برفعهة ليس ملف   ", "لم يتم رفع البيانات", {
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
				$sql="select * from vacation_request where  sender_name=? and date=?  ";
				$stm=$con->prepare($sql); 
				$stm->execute(array($user,$date));

				$sqls="select * from vacation_request where  sender_name=? and request=?   ";
				$stmo=$con->prepare($sqls); 
				$stmo->execute(array($user,'0'));
				
				
				if($stm->rowCount()){

					echo '<script>swal("لايمكن طلب الاجازة مرتيت لنفس اليوم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
				}
				elseif($stmo->rowCount()){
					echo '<script>swal("لديك طلب اجازة جاري الموافقه علية", " لايمكن طلب اجازة حتى يتم الموافقه او الرفض على الطلب السابق", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
				}

				else{
					if($file_erroe==0){
						move_uploaded_file($file_tmp,"vacation_request_file/".$file_name);
					}
					
					$query="INSERT INTO vacation_request(branch,date,sender_name,emp,type,file,emp_ok,manger_branch_ok,manger_ok,request)
					values (?,?,?,?,?,?,?,?,?,?) ";
					$stm=$con->prepare($query);
					$stm->execute(array($branch,$date,$user,$emp,$type,$file_name,'0','0','0','0'));
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
 

?>
