<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 }if($_SESSION['user']['rule_id']==2 ||$_SESSION['user']['rule_id']==19||$_SESSION['user']['rule_id']==6||$_SESSION['user']['rule_id']==22||$_SESSION['user']['rule_id']==23||$_SESSION['user']['rule_id']==24){
?>


		
			<div class="content">
				<div class="page-inner">
				

					<div class="row">
						<div class="col-md-12">
							<form action="" method="post">
								<div class="card">
									<div class="card-header">
										<div class="card-title">عرض بيانات  حسب تاريخ معين</div>
									</div>
									<div class="card-body">
									

											
										<form action="" method="post">
								
								<div class="row">
                                	<div class="col-md-6 col-lg-4">

										<div class="form-group form-floating-label">
											<label >من تاريخ</label>
											<input  type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="from_date"   >
										</div>
										

									</div>
									<div class="col-md-6 col-lg-4">

									<div class="form-group form-floating-label">
										<label >الى تاريخ</label>
										<input  type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="to_date"   >
									</div>

									</div>
									<div class="col-md-6 col-lg-4">

									<div class="form-group form-floating-label">
										<label for="tokens">القسم</label>
										
                                       
                                        
										<select class="selectpicker form-control"  name="report_type" id="tokens"  data-live-search="true" required >
										<?php  if($_SESSION['user']['rule_id']==2 ||$_SESSION['user']['rule_id']==6 ||$_SESSION['user']['rule_id']==24   ||$_SESSION['user']['rule_id']==22 ||$_SESSION['user']['rule_id']==23 ){ ?>
											<option value=""></option>
											<option value="15">صنعاء</option>
											<option value="1">الاستقبال</option>
											<option value="2"> ادارة الحالة</option>
											<option value="3">الطبيب العام</option>
											<option value="4">الطبيب النفسي</option>
											<option value="5"> دراسة حالة</option>
											<option value="6"> الجلسات الفردية</option>
											<option value="7">الجلسات الجماعية</option>
											<option value="8">استشارة النفسية</option>
											<option value="9">جلسات التوعية</option>
											<option value="10"> الصيدلية</option>
											
										<!-- البيانات الخاضة بالمراكز -->
												<?php } if($_SESSION['user']['rule_id']==19 || $_SESSION['user']['rule_id']== 6 ||$_SESSION['user']['rule_id']==24 ){ ?>
													<option value="11"> الخط الساخن</option>
													<option value="12">  الاستفسار</option>
													<option value="13">  تثقيف نفسي </option>
													<option value="14">  فيسبوك</option>
												<?php }?>
										</select>	
									
									</div>

									</div>
								</div>
                              
								<div class="card-action">
									<input class="btn btn-success" type="submit" name="search" value="search">
								</div>		
													
													
											
											
									
									
								</form>
								<?php if(isset($_POST['search'])){

										function test_input($data) {
											$data = trim($data);
											$data = stripslashes($data);
											$data = htmlspecialchars($data);
											return $data;
										  }
										
										$from_date =test_input($_POST['from_date']);
										$to_date= test_input($_POST['to_date']);
										// find branch
										$branch=$_SESSION['user']['branch_id'];
										$report_type= test_input($_POST['report_type']);
										$cnt=1;
									
										//end find branch 

										

	
										
											
									
									?>
								<div class="table-responsive">
								<?php 
                                        if($report_type==1  ){
                                            include "report_data/resption_data.php";
                                        }
										elseif($report_type==2  ){
                                            include "report_data/convert_data.php";
                                        }
										elseif($report_type==3  ){
                                            include "report_data/doctor_data.php";
                                        }
										elseif($report_type==4  ){
                                            include "report_data/psyshological_data.php";
                                        }
										elseif($report_type==5  ){
                                            include "report_data/psychiatrist_data.php";
                                        }
                                        elseif($report_type==6  ){
                                            include "report_data/individual_sessions_data.php";
                                        }
										elseif($report_type==7  ){
                                            include "report_data/group_sessions_data.php";
                                        }
										elseif($report_type==8  ){
                                            include "report_data/consult_his_psychology_data.php";
                                        }
										elseif($report_type==9  ){
                                            include "report_data/session_data.php";
                                        }
                                        elseif($report_type==10  ){
                                            include "report_data/pharmcy_data.php";
                                        }
                                         elseif($report_type==11  ){
                                            include "report_data/hotline_data.php";
                                        }
										elseif($report_type==12  ){
                                            include "report_data/inquiry_hotline_data.php";
                                        }
										elseif($report_type==13  ){
                                            include "report_data/eduction_session_data.php";
                                        }
										elseif($report_type==14  ){
                                            include "report_data/facebook_data.php";
                                        }
										elseif($report_type==15  ){
                                            include "report_data/sanaa_data.php";
                                        }
                                        
                                        ?>


								
										
									</div>

								
								</div>
                                <?php }?>
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
	
} 
else {
echo "<script> window.open('index.php','_self')</script>";
}
?>
