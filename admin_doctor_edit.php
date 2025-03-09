<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 }
 if($_SESSION['user']['rule_id']==2||$_SESSION['user']['rule_id']==6){
?>


		
			<div class="content">
				<div class="page-inner">
				

					<div class="row">
						<div class="col-md-12">
						<?php 
                if(isset($_GET['action'],$_GET['ids']) && $_GET['action']=='edit'){
                  $id=$_GET['ids'];
                  $sql="select * from doctor where id=?";
                  $stm=$con->prepare($sql); 
                  $stm->execute(array($id));
                  if($stm->rowCount())
                      {
                  foreach($stm->fetchAll() as $row) {
                     
					  	?>
							<form action="" method="post">
								<div class="card">
									<div class="card-header">
										<div class="card-title"> تعديل بيانات الطبيب العام</div>
									</div>
									<div class="card-body">
									<div class="row">
											
										
											<div class="col-md-6 col-lg-4">
												
												
												<div class="form-group form-floating-label">
													<label >تاريخ تسجيل الحالة</label>
													<input  type="date" value="<?php echo $row['date']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="date"  required >
												</div>
												<div class="form-group form-floating-label">
												
												
														<div class="form-group">
															<label for="comment">الحالة النفسيه العامة للمريض</label>
															<textarea class="form-control"  name="diagnosis" id="comment" rows="5">
																<?php echo $row['diagnosis']; ?>
															</textarea>
														</div>
														<div class="form-group">
															<label for="comment">Physical Examination</label>
															<textarea class="form-control" name="Physical_Examination" id="comment" rows="5">
																<?php echo $row['Physical_Examination']; ?> 
															</textarea>
														</div>
												

													
												</div>
												
												
												
												
											
										
											
													
												
												
											</div>
											<div class="col-md-6 col-lg-4">
													<div class="form-group form-floating-label">
														<label >رقم الكود</label>
														<input  type="number" value="<?php echo $row['code']; ?>"  class="form-control input-border-bottom" id="inputFloatingLabel" name="code"  required >
														
													</div>
													<?php if($_SESSION['user']['branch_id']==6){ ?>
													 	<div class="form-group form-floating-label">
															<label for="tokens">العلاج</label>
															<select class="selectpicker form-control" name="medical[]" multiple id="tokens"  data-live-search="true" >
																<option value=""></option>
																<?php 
																	
																	$sql="select * from pharmacy where branch=? ORDER BY `pharmacy`.`name` ASC  ";
																	$stm=$con->prepare($sql); 
																	$stm->execute(array($branch));
																	if($stm->rowCount()>0)
																		{
																			$medical_explode =explode(",",$row['medical']);
																			foreach($stm->fetchAll() as $rows) 
																			{

															
																?>
																	<option value="<?php echo $rows['name']; ?> 1x1" <?php if( in_array($rows['name']." 1x1",$medical_explode) ) echo "selected" ?>><?php echo $rows['name']; ?> 1x1 </option>
																	<option value="<?php echo $rows['name']; ?> 1x2" <?php if( in_array($rows['name']." 1x2",$medical_explode) ) echo "selected" ?>><?php echo $rows['name']; ?> 1x2 </option>
																	<option value="<?php echo $rows['name']; ?> 1x3" <?php if( in_array($rows['name']." 1x3",$medical_explode) ) echo "selected" ?>><?php echo $rows['name']; ?> 1x3 </option>
																	
																<?php
																			}
																		}
																?>
															
															</select>	
													  	</div>
														<div class="form-group">
															<label for="comment">الكمية</label>
															<textarea class="form-control" id="comment" name="quantity" rows="5" >
																<?php echo $row['quantity']; ?>
															</textarea>
														</div>
														<?php }else{?>
															<div class="form-group">
															<label for="comment">العلاج</label>
															<textarea class="form-control" id="comment" name="medical" rows="5">
																<?php echo $row['medical']; ?>
															</textarea>
														</div>

														<?php }?>
														<div class="form-group">
															<label for="comment">ملاحظات</label>
															<textarea class="form-control" id="comment" name="note" rows="5">
																<?php echo $row['note']; ?>
															</textarea>
														</div>
											
											</div>
											<div class="col-md-6 col-lg-4">
												<?php $violense_explode =explode(",",$row['lap']);?>
												<label class="form-label">الفحوصات المطلوبة</label>
														<div class="selectgroup selectgroup-pills">
															<label class="selectgroup-item">
																<input type="checkbox" name="violense[]"  <?php  if(in_array("CBC",$violense_explode)) echo "checked";?> value="CBC" class="selectgroup-input" >
																<span class="selectgroup-button">CBC</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" name="violense[]" <?php  if(in_array("GPT",$violense_explode)) echo "checked";?> value="GPT" class="selectgroup-input" >
																<span class="selectgroup-button">GPT</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" name="violense[]" <?php  if(in_array("GOT",$violense_explode)) echo "checked";?> value="GOT" class="selectgroup-input" >
																<span class="selectgroup-button">GOT</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" name="violense[]" <?php  if(in_array("ALT",$violense_explode)) echo "checked";?> value="ALT" class="selectgroup-input" >
																<span class="selectgroup-button">ALT</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" name="violense[]" <?php  if(in_array("T.B",$violense_explode)) echo "checked";?> value="T.B" class="selectgroup-input" >
																<span class="selectgroup-button">T.B</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" name="violense[]" <?php  if(in_array("D.B",$violense_explode)) echo "checked";?> value="D.B" class="selectgroup-input" >
																<span class="selectgroup-button">D.B</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" name="violense[]" <?php  if(in_array("Urea",$violense_explode)) echo "checked";?> value="Urea" class="selectgroup-input" >
																<span class="selectgroup-button">Urea</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" name="violense[]" <?php  if(in_array("Creatinine",$violense_explode)) echo "checked";?> value="Creatinine" class="selectgroup-input" >
																<span class="selectgroup-button">Creatinine</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" name="violense[]" <?php  if(in_array("HBSAG",$violense_explode)) echo "checked";?> value="HBSAG" class="selectgroup-input" >
																<span class="selectgroup-button">HBSAG</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" name="violense[]"  <?php  if(in_array("HIVIe2",$violense_explode)) echo "checked";?> value="HIVIe2" class="selectgroup-input" >
																<span class="selectgroup-button">HIVIe2</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" name="violense[]" <?php  if(in_array("Prolactine",$violense_explode)) echo "checked";?> value="Prolactine" class="selectgroup-input" >
																<span class="selectgroup-button">Prolactine</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" name="violense[]" <?php  if(in_array("HCVAB",$violense_explode)) echo "checked";?> value="HCVAB" class="selectgroup-input" >
																<span class="selectgroup-button">HCVAB</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" name="violense[]" <?php  if(in_array("TSH",$violense_explode)) echo "checked";?> value="TSH" class="selectgroup-input" >
																<span class="selectgroup-button">TSH</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" name="violense[]" <?php  if(in_array("FT3",$violense_explode)) echo "checked";?> value="FT3" class="selectgroup-input" >
																<span class="selectgroup-button">FT3</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" name="violense[]" <?php  if(in_array("FT4",$violense_explode)) echo "checked";?> value="FT4" class="selectgroup-input" >
																<span class="selectgroup-button">FT4</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" name="violense[]" <?php  if(in_array("RBS",$violense_explode)) echo "checked";?> value="RBS" class="selectgroup-input" >
																<span class="selectgroup-button">RBS</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" name="violense[]" <?php  if(in_array("FBS",$violense_explode)) echo "checked";?> value="FBS" class="selectgroup-input" >
																<span class="selectgroup-button">FBS</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" name="violense[]" <?php  if(in_array("HbA1C",$violense_explode)) echo "checked";?> value="HbA1C" class="selectgroup-input" >
																<span class="selectgroup-button">HbA1C</span>
															</label>
															<label class="selectgroup-item">
																<input type="checkbox" name="violense[]" <?php  if(in_array("Addication Screen",$violense_explode)) echo "checked";?> value="Addication Screen" class="selectgroup-input" >
																<span class="selectgroup-button">Addication Screen</span>
															</label><label class="selectgroup-item">
																<input type="checkbox" name="violense[]" <?php  if(in_array("EEG",$violense_explode)) echo "checked";?> value="EEG" class="selectgroup-input" >
																<span class="selectgroup-button">EEG</span>
															</label>
														
														</div>
														<?php if($row['type']=='عودة'){?>
														<div class="form-group form-floating-label">
															<label >تقييم وضع الحالة</label>
															<select class="selectpicker form-control"  id="tokens ddd"  data-live-search="true" name="appraisal" required >
																<option ></option>
																<option <?php if( $row['appraisal'] == "مستقرة") echo "selected" ?>>مستقرة</option>
																<option <?php if( $row['appraisal'] == "تحت المتابعة") echo "selected" ?>>تحت المتابعة</option>
																<option <?php if( $row['appraisal'] == "منتكسة") echo "selected" ?>>منتكسة</option>
															</select>
														</div>
														<?php }?>
										
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

	
	$code=test_input($row["code"]);
	$today= date('Y-m-d');
	$date=test_input($_POST["date"]);

	$diagnosis=test_input($_POST["diagnosis"]);
	$note=test_input($_POST["note"]);
	$Physical_Examination=test_input($_POST['Physical_Examination']);
    if($row['type']=='عودة'){
        $appraisal=$_POST["appraisal"];
    }
    else{
        $appraisal="";
    }
	
	if($_SESSION['user']['branch_id']!=6){ 
		$quantity=0;
		$medical=$_POST["medical"];
	}
	else{
		$quantity=$_POST["quantity"];
		$medical=$_POST["medical"];
		$medical=implode(',',$medical);
	}
	if(	empty($_POST["violense"])){
		$b=0;
		
	}
	else{
		$violense=$_POST["violense"];
		$b=implode(',',$violense);
		
	}


        $branch=$_SESSION['user']['branch_id'];

		$user=$_SESSION['user']['id'];
	
		
		
		
		//التحقق ان اسم المنتج موجود وليس ارقام
	
		
		


		

		if(empty($date))
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
			
			
			$query="UPDATE  doctor SET branch=?,code=?,diagnosis=?,note=?,date=?,Physical_Examination=?,sender_name=?,lap=?,medical=?,appraisal=?,quantity=? WHERE id=? ";
			$stm=$con->prepare($query);
			$stm->execute(array($branch,$code,$diagnosis,$note,$date,$Physical_Examination,$user,$b,$medical,$appraisal,$quantity,$id));
			if($stm->rowCount())	
			{
				echo '<script src="js/send_success.js"></script>';
				echo "<script>
                          window.open('admin_today_doctor_data.php?num=9&id=3','_self')
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
