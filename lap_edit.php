<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 }
 if($_SESSION['user']['rule_id']==10||$_SESSION['user']['rule_id']==2||$_SESSION['user']['rule_id']==6){
?>


		
			<div class="content">
				<div class="page-inner">
				

					<div class="row">
						<div class="col-md-12">
						<?php 
                if(isset($_GET['action'],$_GET['ids']) && $_GET['action']=='edit'){
                  $id=$_GET['ids'];
                  $sql="select * from lap where id=?";
                  $stm=$con->prepare($sql); 
                  $stm->execute(array($id));
                  if($stm->rowCount())
                      {
                  foreach($stm->fetchAll() as $row) {
                     
					  	?>
							<form action="" method="post">
								<div class="card">
									<div class="card-header">
										<div class="card-title"> تعديل بيانات الاستقبال</div>
									</div>
									<div class="card-body">
									<div class="row">
											
										
											<div class="col-md-6 col-lg-4">
												
												
												<div class="form-group form-floating-label">
													<label >تاريخ تسجيل الحالة</label>
													<input  type="date" value="<?php echo $row['date']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="date"  required >
												</div>
                                                <div class="form-group form-floating-label">
                                                    <label >رقم الكود</label>
                                                    <input  type="number" value="<?php echo $row['code']; ?>" disabled class="form-control input-border-bottom" id="inputFloatingLabel"  required >
                                                    <input  type="hidden" value="<?php echo $row['code']; ?>"  class="form-control input-border-bottom" id="inputFloatingLabel" name="code"  required >
                                                </div>
												




                                                
												<div class="form-group form-floating-label">
													<label > T.WBC</label>
													<input  type="number" value="<?php echo $row['T_WBC']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="T_WBC"   >
												</div>
												<div class="form-group form-floating-label">
													<label > Neutrophil </label>
													<input  type="number" value="<?php echo $row['Neutrophil']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="Neutrophil"   >
												</div>
												<div class="form-group form-floating-label">
													<label > Lymphocyte </label>
													<input  type="number" value="<?php echo $row['Lymphocyte']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="Lymphocyte"   >
												</div>
												<div class="form-group form-floating-label">
													<label > Monocyte </label>
													<input  type="number" value="<?php echo $row['Monocyte']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="Monocyte"   >
												</div>
												<div class="form-group form-floating-label">
													<label > Eosinophil </label>
													<input  type="number" value="<?php echo $row['Eosinophil']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="Eosinophil"   >
												</div>
												<div class="form-group form-floating-label">
													<label > Basophil </label>
													<input  type="number" value="<?php echo $row['Basophil']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="Basophil"   >
												</div>
												<div class="form-group form-floating-label">
													<label > Platelats </label>
													<input  type="number" value="<?php echo $row['Platelats']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="Platelats"   >
												</div>
												<div class="form-group form-floating-label">
													<label > Hb </label>
													<input  type="number" value="<?php echo $row['Hb']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="Hb"   >
												</div>
												<div class="form-group form-floating-label">
													<label > PCV </label>
													<input  type="number" value="<?php echo $row['PCV']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="PCV"   >
												</div>
												<div class="form-group form-floating-label">
															<label > GPT </label>
															<input  type="number" value="<?php echo $row['GPT']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="GPT"   >
												</div>
												
												
												
												
												
												
											
										
											
													
												
												
											</div>
											<div class="col-md-6 col-lg-4">
											       
										
													 
                                            <div class="form-group form-floating-label">
															<label > GOT </label>
															<input  type="number" value="<?php echo $row['GOT']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="GOT"   >
														</div>
														<div class="form-group form-floating-label">
															<label > ALP </label>
															<input  type="number" value="<?php echo $row['ALP']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="ALP"   >
														</div>
														<div class="form-group form-floating-label">
															<label >  T.B </label>
															<input  type="number" value="<?php echo $row['T_B']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="T_B"   >
														</div>
														<div class="form-group form-floating-label">
															<label > D.B </label>
															<input  type="number" value="<?php echo $row['D_B']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="D_B"   >
														</div>
													 
													 	 <div class="form-group form-floating-label">
															<label > Urea </label>
															<input  type="number" value="<?php echo $row['Urea']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="Urea"   >
														</div>
													 
														 <div class="form-group form-floating-label">
															<label > Creatinine </label>
															<input  type="number" value="<?php echo $row['Creatinine']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="Creatinine"   >
														</div>
														<div class="form-group form-floating-label">
															<label > HBsAg </label>
															<input  type="number" value="<?php echo $row['HBsAg']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="HBsAg"   >
														</div>
														<div class="form-group form-floating-label">
															<label > HIV1&2 </label>
															<input  type="number" value="<?php echo $row['HIV1_2']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="HIV1_2"   >
														</div>
														<div class="form-group form-floating-label">
															<label > Prolactine </label>
															<input  type="number" value="<?php echo $row['Prolactine']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="Prolactine"   >
														</div>
														<div class="form-group form-floating-label">
															<label > HCVAb </label>
															<input  type="number" value="<?php echo $row['HCVAb']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="HCVAb"   >
														</div>
														<div class="form-group form-floating-label">
															<label > TSH </label> 
															<input  type="number" value="<?php echo $row['TSH']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="TSH"   >
														</div>
														<div class="form-group form-floating-label">
															<label > FT3 </label>
															<input  type="number" value="<?php echo $row['FT3']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="FT3"   >
														</div>
											
											</div>
											<div class="col-md-6 col-lg-4">
                                            <div class="form-group form-floating-label">
													<label > FT4 </label>
													<input  type="number" value="<?php echo $row['FT4']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="FT4"   >
												</div>
												<div class="form-group form-floating-label">
													<label > RBS </label>
													<input  type="number" value="<?php echo $row['RBS']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="RBS"   >
												</div>
												<div class="form-group form-floating-label">
													<label > FBS </label>
													<input  type="number" value="<?php echo $row['FBS']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="FBS"   >
												</div>
												<div class="form-group form-floating-label">
													<label > HbA1C </label>
													<input  type="number" value="<?php echo $row['HbA1C']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="HbA1C"   >
												</div>
												<div class="form-group form-floating-label">
													<label >  Cocaine Test </label>
													<input  type="text" value="<?php echo $row['Cocaine']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="Cocaine"   >
												</div>
												<div class="form-group form-floating-label">
													<label > Opiate Test  </label>
													<input  type="text" value="<?php echo $row['Opiate']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="Opiate"   >
												</div>
												<div class="form-group form-floating-label">
													<label > Morphine Test  </label>
													<input  type="text" value="<?php echo $row['Morphine']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="Morphine"   >
												</div>
												<div class="form-group form-floating-label">
													<label > Cannabis </label>
													<input  type="text" value="<?php echo $row['Cannabis']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="Cannabis"   >
												</div>
												<div class="form-group form-floating-label">
													<label > Heroin  </label>
													<input  type="text" value="<?php echo $row['Heroin']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="Heroin"   >
												</div>
												<div class="form-group form-floating-label">
													<label > Benzodiazepine  </label>
													<input  type="text" value="<?php echo $row['Benzodiazepine']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="Benzodiazepine"   >
												</div>
												<div class="form-group form-floating-label">
													<label > Tramadol  </label>
													<input  type="text" value="<?php echo $row['Tramadol']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="Tramadol"   >
												</div>
												<div class="form-group form-floating-label">
													<label > Pethidine  </label>
													<input  type="text" value="<?php echo $row['Pethidine']; ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="Pethidine"   >
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

    
    $code=test_input($_POST["code"]);
    $today= date('Y-m-d');
    $date=test_input($_POST["date"]);
    

    $T_WBC=test_input($_POST["T_WBC"]);
    $Neutrophil=test_input($_POST["Neutrophil"]);
    $Lymphocyte=test_input($_POST["Lymphocyte"]);
    $Monocyte=test_input($_POST["Monocyte"]);
    $Eosinophil=test_input($_POST["Eosinophil"]);
    $Basophil=test_input($_POST["Basophil"]);
    $Platelats=test_input($_POST["Platelats"]);
    $Hb=test_input($_POST["Hb"]);
    $PCV=test_input($_POST["PCV"]);
    $GPT=test_input($_POST["GPT"]);
    $GOT=test_input($_POST["GOT"]);
    $ALP=test_input($_POST["ALP"]);
    $T_B=test_input($_POST["T_B"]);
    $D_B=test_input($_POST["D_B"]);
    $Urea=test_input($_POST["Urea"]);
    $Creatinine=test_input($_POST["Creatinine"]);
    $HBsAg=test_input($_POST["HBsAg"]);
    $HIV1_2=test_input($_POST["HIV1_2"]);
    $Prolactine=test_input($_POST["Prolactine"]);
    $HCVAb=test_input($_POST["HCVAb"]);
    $TSH=test_input($_POST["TSH"]);
    $FT3=test_input($_POST["FT3"]);
    $FT4=test_input($_POST["FT4"]);
    $RBS=test_input($_POST["RBS"]);
    $FBS=test_input($_POST["FBS"]);
    $HbA1C=test_input($_POST["HbA1C"]);
    $Cocaine=test_input($_POST["Cocaine"]);
    $Opiate=test_input($_POST["Opiate"]);
    $Morphine=test_input($_POST["Morphine"]);
    $Cannabis=test_input($_POST["Cannabis"]);
    $Heroin=test_input($_POST["Heroin"]);
    $Benzodiazepine=test_input($_POST["Benzodiazepine"]);
    $Tramadol=test_input($_POST["Tramadol"]);
    $Pethidine=test_input($_POST["Pethidine"]);



    
    
    


    

        $user=$_SESSION['user']['id'];
        // find branch
        $branch=$_SESSION['user']['branch_id'];
        

        //end find branch 
        
        // fine type (new/back)
        $sql="SELECT type FROM resption where code =? ORDER BY `resption`.`date` desc      ";	
        $stmu=$con->prepare($sql); 
        $stmu->execute(array($code));
        $row_type=$stmu->fetch();
        $type=$row_type['type'];
        // end fine type
    
    
        
        
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
           
           
                
                $query="UPDATE lap set branch=?,code=?,date=?,sender_name=?,T_WBC=?,Neutrophil=?,Lymphocyte=?,Monocyte=?,Eosinophil=?,Basophil=?
                ,Platelats=?,Hb=?,PCV=?,GPT=?,GOT=?,ALP=?,T_B=?,D_B=?,Urea=?,Creatinine=?,HBsAg=?,HIV1_2=?,Prolactine=?,HCVAb=?,
                TSH=?,FT3=?,FT4=?,RBS=?,FBS=?,HbA1C=?,Cocaine=?,Opiate=?,Morphine=?,Cannabis=?,Heroin=?,Benzodiazepine=?,Tramadol=?,Pethidine=?,type=? where id=? ";
                $stm=$con->prepare($query);
                $stm->execute(array($branch,$code,$date,$user,$T_WBC,$Neutrophil,$Lymphocyte,$Monocyte,$Eosinophil,$Basophil
                ,$Platelats,$Hb,$PCV,$GPT,$GOT,$ALP,$T_B,$D_B,$Urea,$Creatinine,$HBsAg,$HIV1_2,$Prolactine,$HCVAb,$TSH,$FT3
                ,$FT4,$RBS,$FBS,$HbA1C,$Cocaine,$Opiate,$Morphine,$Cannabis,$Heroin,$Benzodiazepine,$Tramadol,$Pethidine,$type,$id));
                if($stm->rowCount())	
                {
                    echo '<script src="js/send_success.js"></script>';
                    echo "<script>
                          window.open('today_lap_data.php?num=5&id=6','_self')
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
