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
						<?php 
                if(isset($_GET['action'],$_GET['id']) && $_GET['action']=='edit'){
                  $id=$_GET['id'];
                  $sql="select * from user where id=?";
                  $stm=$con->prepare($sql); 
                  $stm->execute(array($id));
                  if($stm->rowCount())
                      {
                  foreach($stm->fetchAll() as $row) {
					$image=$row['image'];
					$row_username=$row['username'];
					$row_mobile=$row['mobile'];
                     
					  	?>
							<form action="" method="post" enctype="multipart/form-data">
								<div class="card">
									<div class="card-header">
										<div class="card-title"> تعديل  بيانات ألموظفين</div>
									</div>
									<div class="card-body">
										<div class="row">
											
										
										<div class="col-md-6 col-lg-4">
												
												
												
												<div class="form-group form-floating-label">
													
													<input id="inputFloatingLabel" type="text" name="name" value='<?php echo $row['name'] ?>' class="form-control input-border-bottom"required >
													<label for="inputFloatingLabel" class="placeholder">اسم الموظف</label>
												</div>
												<div class="form-group form-floating-label">
												<input id="inputFloatingLabel" type="tel" name="mobile" value='<?php echo $row['mobile'] ?>' class="form-control input-border-bottom" id="nmbrone" pattern="[7]{1}[7,1,3,0]{1}[0-9]{7}" required >
													<label for="inputFloatingLabel" class="placeholder">رقم الجوال</label>
												</div>
												<div class="form-group">
													<label for="exampleFormControlFile1">اضافة صورة</label>
													<input type="file" name="image_1" class="form-control-file" id="exampleFormControlFile1">
												</div>
												
												
											</div>
											<div class="col-md-6 col-lg-4">

												<div class="form-group form-floating-label">
													<input id="inputFloatingLabel" type="text" name="username" value='<?php echo $row['username'] ?>' class="form-control input-border-bottom" required>
													<label for="inputFloatingLabel" class="placeholder">username</label>
												</div>
												<div class="form-group form-floating-label">
															<select class="form-control input-border-bottom" name="branch_id" id="selectFloatingLabel" required>
															<?php 
																$branch=$row['branch_id'];
																$sql="select branch_name,id from branch where id=? ";
																$stmb=$con->prepare($sql); 
																$stmb->execute(array($branch));
																$real_branch_rule=$stmb->fetch();
																

															?>
															 <option value="<?php echo $real_branch_rule['id']; ?>"><?php echo $real_branch_rule['branch_name']; ?></option>
															
															<?php 
																
																$sql="select branch_name,id from branch where id <>?";
																$stms=$con->prepare($sql); 
																$stms->execute(array($branch));
																if($stms->rowCount()>0)
																	{
																		foreach($stms->fetchAll() as $rows) 
																		{

														
															?>
															    <option value="<?php echo $rows['id']; ?>"><?php echo $rows['branch_name']; ?></option>
																
															<?php
																		}
																	}
															?>
															</select>
														    <label for="selectFloatingLabel" class="placeholder">الفرع</label>
												    	</div>

														<div class="form-group form-floating-label">
															<select class="form-control input-border-bottom" name="type" id="selectFloatingLabel" required>
														
																<option <?php if( $row['type'] == "مركز") echo "selected" ?>  value="مركز">مركز</option>
																<option <?php if( $row['type'] == "مكتب") echo "selected" ?> value="مكتب">مكتب</option>

															</select>
															<label for="selectFloatingLabel" class="placeholder">مركز/مكتب</label>
														</div>
																
												
												
												
										
											</div>
											<div class="col-md-6 col-lg-4">
											
											
												     <div class="form-group form-floating-label">
															<select class="form-control input-border-bottom" name="rule_id" id="selectFloatingLabel" required>
															<?php 
																$user_ruel=$row['rule_id'];
																$sql="select rule_name,id_rule from rule where id_rule=? ";
																$stmr=$con->prepare($sql); 
																$stmr->execute(array($user_ruel));
																$real_user_rule=$stmr->fetch();
																

															?>
															 <option value="<?php echo $real_user_rule['id_rule']; ?>"><?php echo $real_user_rule['rule_name']; ?></option>
															<?php 
																
																$sql="select rule_name,id_rule from rule where id_rule<>? and id_rule<>?";
																$stmdr=$con->prepare($sql); 
																$stmdr->execute(array($user_ruel,6));
																if($stmdr->rowCount()>0)
																	{
																		foreach($stmdr->fetchAll() as $rowdr) 
																		{
																
															
																
														
															?>
															    <option value="<?php echo $rowdr['id_rule']; ?>"><?php echo $rowdr['rule_name']; ?></option>
																
															<?php
																		}
																	}
															?>
															</select>
														    <label for="selectFloatingLabel" class="placeholder"> نوع الوظيفة </label>
												    	</div>
														<div class="form-group form-floating-label">
															<input id="inputFloatingLabel" type="number" name="vacation" value='<?php echo $row['vacation'] ?>' class="form-control input-border-bottom" id="nmbrone" pattern="[7]{1}[7,1,3,0]{1}[0-9]{7}" required >
															<label for="inputFloatingLabel" class="placeholder">عدد ايام الاجازة</label>
														</div>



														
										
											</div>
											
										</div>
											<?php
                      						  }
               							 	?>
									</div>
									<div class="card-action">
										
										
										<input class="btn btn-success" type="submit" name="update" value="save">
										<input class="btn btn-danger" type="reset" value="Cancel">
									</div>
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
	if(isset($_POST['update'])){

		$error=0;
		$name=trim($_POST['name']);
		$mobile=trim($_POST['mobile']);
		$username=trim($_POST['username']);
		$rule_id=trim($_POST['rule_id']);
		$branch_id=trim($_POST['branch_id']);
		$vacation=trim($_POST['vacation']);
		$type=trim($_POST['type']);
	// $user=$_SESSION['user']['id'];
	if(!empty($_FILES['image_1']["name"])){
		$exti = array('jpg', 'png', 'gif', 'jpeg', 'ico');
		$file1=$_FILES["image_1"];
		$file_name1=$file1["name"];
		$file_tmp1=$file1["tmp_name"];
		$file_name_expload1 = explode('.', $file_name1);
		$file_name_expload_end1 = strtolower(end($file_name_expload1));
		//التحقق انه تم اختيار ملف
		if ($_FILES['image_1']['error'] == 4) {
			$error=1;

			echo '<script>swal("  ", "لم يتم رفع البيانات", {
				icon : "warning"
				buttons: {        			
					confirm: {
						className : "btn btn-warning"
					}
				},
			});</script>';
		} else {
		  //التحقق من الامتداد
			if (!in_array($file_name_expload_end1, $exti)) {
				$error=1;
				echo '<script>swal("   الملف الذي اخترة ليس صورة    ", "لم يتم رفع البيانات", {
					icon : "warning"
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
			} else {

				move_uploaded_file($file_tmp1,"user_img/".$file_name1);
			}
		}
	  } 
	  else{
		$file_name1=$image;
	  }
	
		

		
		
		
		//التحقق انه تم اختيار ملف
		
		
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



		elseif(empty($username))
		{
			
			
			echo '<script>swal("يرجاء ادخال username  ", "لم يتم رفع البيانات", {
				icon : "warning",
				buttons: {        			
					confirm: {
						className : "btn btn-warning"
					}
				},
			});</script>';
		}
		elseif(is_numeric($username))
		{
			
			
			echo '<script>swal("username  لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
				icon : "warning",
				buttons: {        			
					confirm: {
						className : "btn btn-warning"
					}
				},
			});</script>';
			
		}


	


		elseif(empty($mobile))
		{
			
			
			echo '<script>swal("يرجاء ادخال رقم هاتف الطبيب ", "لم يتم رفع البيانات", {
				icon : "warning",
				buttons: {        			
					confirm: {
						className : "btn btn-warning"
					}
				},
			});</script>';
		}
		elseif(!is_numeric($mobile))
		{
			
			
			echo '<script>swal("رقم الطبيب لا يمكن ان يكون احرف", "لم يتم رفع البيانات", {
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
			if($username != $row_username){
				$sql="select * from user where username=?  ";
				$stm=$con->prepare($sql); 
				$stm->execute(array($username));
				if($stm->rowCount()){
					$error=1;
					echo '<script>swal("username   يرجاء تغيير ال ", "لم يتم رفع البيانات ", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
				}
			}
		
			if($mobile != $row_mobile ){
				
				$sql="select * from user where  mobile=?  ";
				$stm=$con->prepare($sql); 
				$stm->execute(array($mobile));
				if($stm->rowCount()){
					$error=1;
					echo '<script>swal("  phone يرجاء تغيير ال ", "لم يتم رفع البيانات ", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
				}
			}
			
			
				
				if ($error==0) {

					$query="UPDATE user SET vacation=?, name=?,mobile=?,username=?,rule_id=?,branch_id=?,image=?,type=? where id=?";          
					$stm=$con->prepare($query);
					$stm->execute(array($vacation,$name,$mobile,$username,$rule_id,$branch_id,$file_name1,$type,$id));
					if($stm->rowCount())
					{
						echo '<script src="js/send_success.js"></script>';
						echo "<script>
                                  window.open('add_user.php','_self')
                                </script>";
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
