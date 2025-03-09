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
										<div class="card-title">  التقرير اليومي لقسم الرقود الفترة المسائية   </div>
									</div>
									<div class="card-body">
										<div class="row">
											
										
											<div class="col-md-6 col-lg-4">

												<div class="form-group form-floating-label">
													<label >تاريخ التقرير </label>
													<input  type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="date"  required >
												</div>
												<h1>ذكور</h1>
												<br>
												<h3>مابين(1-17) سنه</h3>
												<div class="form-group form-floating-label">
													<label >جديد</label>
													<input  type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="m_n_rebort_1_17"  required >
												</div>
												<div class="form-group form-floating-label">
													<label >عودة</label>
													<input  type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="m_b_rebort_1_17"  required >
												</div>
												<h3>مافوق 18 سنه</h3>
												<div class="form-group form-floating-label">
													<label >جديد</label>
													<input  type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="m_n_rebort_18"  required >
												</div>
												<div class="form-group form-floating-label">
													<label >عودة</label>
													<input  type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="m_b_rebort_18"  required >
												</div>

											</div>

												
											
											<div class="col-md-6 col-lg-4">
											<br>
											<br>
											<br>
											<br>
											<br>
											<h1>اناث</h1>
												<br>
												<h3>مابين(1-17) سنه</h3>
												<div class="form-group form-floating-label">
													<label >جديد</label>
													<input  type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="f_n_rebort_1_17"  required >
												</div>
												<div class="form-group form-floating-label">
													<label >عودة</label>
													<input  type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="f_b_rebort_1_17"  required >
												</div>
												<h3>مافوق 18 سنه</h3>
												<div class="form-group form-floating-label">
													<label >جديد</label>
													<input  type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="f_n_rebort_18"  required >
												</div>
												<div class="form-group form-floating-label">
													<label >عودة</label>
													<input  type="number" class="form-control input-border-bottom" id="inputFloatingLabel" name="f_b_rebort_18"  required >
												</div>
											</div>
											<div class="col-md-6 col-lg-4">
												
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
	function test_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
		}


	   // $today= date('Y-m-d');
		$date=test_input($_POST["date"]);
		$m_n_rebort_1_17=$_POST["m_n_rebort_1_17"];
		$m_b_rebort_1_17=$_POST["m_b_rebort_1_17"];
		$m_n_rebort_18=$_POST["m_n_rebort_18"];
		$m_b_rebort_18=$_POST["m_b_rebort_18"];
		$f_n_rebort_1_17=$_POST["f_n_rebort_1_17"];
		$f_b_rebort_1_17=$_POST["f_b_rebort_1_17"];
		$f_n_rebort_18=$_POST["f_n_rebort_18"];
		$f_b_rebort_18=$_POST["f_b_rebort_18"];

		$user=$_SESSION['user']['id'];
		// find branch
		$branch=$_SESSION['user']['branch_id'];
	

		//end find branch 
		
		
		
		
		//التحقق ان اسم المنتج موجود وليس ارقام
	
		$error=0;
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
			$error==1;
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
			$error=1;
		}
	
		$sql="select *  from resption as res join sleeping_afternoon as con on con.code=res.code  where res.type=? and res.sex=? and con.type=? and TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) between 1 and 17 and con.date=? and  con.sender_name=?";
		$stm=$con->prepare($sql); 
		$stm->execute(array('جديد','ذكر','جديد',$date,$user));
		if($stm->rowCount()!=$m_n_rebort_1_17){

			echo '<script>swal("  خانت الذكور مابين (1-17) جديد غير مطابقه ", "لم يتم رفع البيانات", {
				icon : "warning",
				buttons: {        			
					confirm: {
						className : "btn btn-warning"
					}
				},
			});</script>';
			$error=1;
		}



		$sql="select *  from resption as res join sleeping_afternoon as con on con.code=res.code  where res.type=? and res.sex=? and con.type=? and TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) between 1 and 17 and con.date=? and  con.sender_name=?";
		$stm=$con->prepare($sql); 
		$stm->execute(array('جديد','ذكر','عودة',$date,$user));
		if($stm->rowCount()!=$m_b_rebort_1_17){

			echo '<script>swal("  خانت الذكور مابين (1-17) عودة غير مطابقه ", "لم يتم رفع البيانات", {
				icon : "warning",
				buttons: {        			
					confirm: {
						className : "btn btn-warning"
					}
				},
			});</script>';
			$error=1;
		}

		$sql="select *  from resption as res join sleeping_afternoon as con on con.code=res.code  where res.type=? and res.sex=? and con.type=? and TIMESTAMPDIFF(YEAR,res.brithday,CURDATE())  >= 18 and con.date=? and  con.sender_name=? ";
		$stm=$con->prepare($sql); 
		$stm->execute(array('جديد','ذكر','جديد',$date,$user));
		if($stm->rowCount()!=$m_n_rebort_18){

			echo '<script>swal("  خانت الذكور  مافوق (18) جديد غير مطابقه ", "لم يتم رفع البيانات", {
				icon : "warning",
				buttons: {        			
					confirm: {
						className : "btn btn-warning"
					}
				},
			});</script>';
			$error=1;
		}
		

		$sql="select *  from resption as res join sleeping_afternoon as con on con.code=res.code  where res.type=? and res.sex=? and con.type=? and TIMESTAMPDIFF(YEAR,res.brithday,CURDATE())  >= 18 and con.date=? and  con.sender_name=?";
		$stm=$con->prepare($sql); 
		$stm->execute(array('جديد','ذكر','عودة',$date,$user));
		if($stm->rowCount()!=$m_b_rebort_18){

			echo '<script>swal("  خانت الذكور  مافوق (18) عودة غير مطابقه ", "لم يتم رفع البيانات", {
				icon : "warning",
				buttons: {        			
					confirm: {
						className : "btn btn-warning"
					}
				},
			});</script>';
			$error=1;
		}



		// مطابقه تقرير الاناث

		$sql="select *  from resption as res join sleeping_afternoon as con on con.code=res.code  where res.type=? and res.sex=? and con.type=? and TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) between 1 and 17 and con.date=? and  con.sender_name=?";
		$stm=$con->prepare($sql); 
		$stm->execute(array('جديد','انثى','جديد',$date,$user));
		if($stm->rowCount()!=$f_n_rebort_1_17){

			echo '<script>swal("  خانت انثى مابين (1-17) جديد غير مطابقه ", "لم يتم رفع البيانات", {
				icon : "warning",
				buttons: {        			
					confirm: {
						className : "btn btn-warning"
					}
				},
			});</script>';
			$error=1;
		}



		$sql="select *  from resption as res join sleeping_afternoon as con on con.code=res.code  where res.type=? and res.sex=? and con.type=? and TIMESTAMPDIFF(YEAR,res.brithday,CURDATE()) between 1 and 17 and con.date=? and  con.sender_name=?";
		$stm=$con->prepare($sql); 
		$stm->execute(array('جديد','انثى','عودة',$date,$user));
		if($stm->rowCount()!=$f_b_rebort_1_17){

			echo '<script>swal("  خانت انثى مابين (1-17) عودة غير مطابقه ", "لم يتم رفع البيانات", {
				icon : "warning",
				buttons: {        			
					confirm: {
						className : "btn btn-warning"
					}
				},
			});</script>';
			$error=1;
		}

		$sql="select *  from resption as res join sleeping_afternoon as con on con.code=res.code  where res.type=? and res.sex=? and con.type=? and TIMESTAMPDIFF(YEAR,res.brithday,CURDATE())  >= 18 and con.date=? and  con.sender_name=?";
		$stm=$con->prepare($sql); 
		$stm->execute(array('جديد','انثى','جديد',$date,$user));
		if($stm->rowCount()!=$f_n_rebort_18){

			echo '<script>swal("  خانت انثى  مافوق (18) جديد غير مطابقه ", "لم يتم رفع البيانات", {
				icon : "warning",
				buttons: {        			
					confirm: {
						className : "btn btn-warning"
					}
				},
			});</script>';
			$error=1;
		}
		

		$sql="select *  from resption as res join sleeping_afternoon as con on con.code=res.code  where res.type=? and res.sex=? and con.type=? and TIMESTAMPDIFF(YEAR,res.brithday,CURDATE())  >= 18 and con.date=? and  con.sender_name=?";
		$stm=$con->prepare($sql); 
		$stm->execute(array('جديد','انثى','عودة',$date,$user));
		if($stm->rowCount()!=$f_b_rebort_18){

			echo '<script>swal("  خانت انثى مافوق (18) عودة غير مطابقه ", "لم يتم رفع البيانات", {
				icon : "warning",
				buttons: {        			
					confirm: {
						className : "btn btn-warning"
					}
				},
			});</script>';
			$error=1;
		}


		
		/////////////////////////////////////////////////////////////////////////////////////تذكير الشرط حق الايميل

		//اذا لايوجد اي مشكلة يقوم بارسال الملف
		if($error==0)
		{
			$type='قسم الرقود مساء';
			$sql="select * from emp_day_rebort where  sender_name=? and date=? and type=? ";
			$stm=$con->prepare($sql); 
			$stm->execute(array($user,$date,$type));
			if($stm->rowCount()){

				echo '<script>swal("لقد تم ادخال هذاالتقرير في النظام من قبل", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
			}
			else{

				$query="INSERT INTO emp_day_rebort(branch,date,sender_name,m_n_rebort_1_17,m_b_rebort_1_17,m_n_rebort_18,m_b_rebort_18,
				f_n_rebort_1_17,f_b_rebort_1_17,f_n_rebort_18,f_b_rebort_18,type)
				values (?,?,?,?,?,?,?,?,?,?,?,?) ";
				$stm=$con->prepare($query);
				$stm->execute(array($branch,$date,$user,$m_n_rebort_1_17,$m_b_rebort_1_17,$m_n_rebort_18,$m_b_rebort_18,
				$f_n_rebort_1_17,$f_b_rebort_1_17,$f_n_rebort_18,$f_b_rebort_18,$type));
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
