<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 }if($_SESSION['user']['rule_id']==2 ||$_SESSION['user']['rule_id']==6||$_SESSION['user']['rule_id']==19 || $_SESSION['user']['id']==134 ){
?>


		
			<div class="content">
				<div class="page-inner">
				

					<div class="row">
						<div class="col-md-12">
							<form action="" method="post">
								<div class="card">
									<div class="card-header">
										<div class="card-title"> تقرير مؤشرات </div>
									</div>
									<div class="card-body">
								

                                       
								<form action="" method="post">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-4">

                                            <div class="form-group form-floating-label">
                                                <label >من تاريخ</label>
                                                <input  type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="from_date"   >
                                            </div>

                                           
                                            <div class="form-group form-floating-label">
                                                <label for="tokens">نوع التقرير</label>
                                                <select class="selectpicker form-control"  name="report_type" id="tokens"  data-live-search="true" required >
                                                   <?php  if($_SESSION['user']['rule_id']==2 ||$_SESSION['user']['rule_id']==6  ){ ?>
                                                    <option value=""></option>
                                                    <option value="1">الحالة الاجتماعية</option>
                                                    <option value="2">نوع الاقامة</option>
                                                    <option value="3">الوظيفة</option>
                                                    <option value="4">التشخيص</option>
                                                    <option value="5">انواع العنف</option>
                                                    <option value="6">جهة الاحالة</option>
                                                    <option value="7">GBV/non GBV </option>
                                                    <option value="8">معاينة</option>
                                                    <?php } if($_SESSION['user']['rule_id']==19 ||$_SESSION['user']['rule_id']==6 || $_SESSION['user']['id'] == 134){?>
                                                    <option value="9">الخط الساخن</option>
                                                    <option value="10">الخط الساخن حسب  الخدمات</option>
                                                    
                                                    <?php } if($_SESSION['user']['rule_id']==19 || $_SESSION['user']['rule_id']==6){?>
                                                    
                                                    <option value="11"> المكاتب حسب  الخدمات</option>
                                                    <?php } ?>
                                                    
                                                </select>	
                                            </div>

                                           

                                        </div>
                                        <div class="col-md-6 col-lg-4">

                                            

                                            <div class="form-group form-floating-label">
                                                <label >الى تاريخ</label>
                                                <input  type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="to_date"   >
                                            </div>
                                           

                                            <div class="form-group form-floating-label">
                                                <label for="tokens">الفرع</label>
                                                <select class="selectpicker form-control"  name="branch" id="tokens"  data-live-search="true" required >
                                                    <option value="الكل">الكل</option>
                                                    <?php 
                                                    
                                                        $sql="select * from branch  ";
                                                        $stm=$con->prepare($sql); 
                                                        $stm->execute();
                                                        if($stm->rowCount()>0)
                                                            {
                                                                foreach($stm->fetchAll() as $row) 
                                                                {
                                                    
                                                
                                                    

                                                    ?>
                                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['branch_name']; ?></option>
                                                    
                                                    <?php
                                                            }
                                                        }
                                                    ?>
                                                    
                                                </select>	
                                            </div>
                                           

                                        </div>
                                        <div class="col-md-6 col-lg-4">
                                            <div class="form-group form-floating-label">
                                                <label >المشروع</label>
                                                    <select class="selectpicker form-control"   id="tokens ddd"  data-live-search="true" name="project" required  >
                                                        <option value="مشروع مراكز الدعم النفسي">مشروع مراكز الدعم النفسي</option>
                                                        <option value="مشروع الاستجابة الطارئة لإنقاض امراض الصرع" >مشروع الاستجابة الطارئة لإنقاض امراض الصرع</option>
                                                        
                                                    </select>
 											</div>
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
                                        $report_type= test_input($_POST['report_type']);
                                        $branch= test_input($_POST['branch']);
                                        $project= test_input($_POST['project']);
										

										

	
										
											
									
									?>

                                    <div class="table-responsive">
                                        <?php 
                                        if($report_type==1 && $branch == "الكل" ){
                                            include "rebort/Marital_status_rebort_all.php";
                                        }
                                        elseif($report_type==1 && $branch <> "الكل"){ 
                                            include "rebort/Marital_status_rebort.php";
                                        }
                                        if($report_type==2 && $branch == "الكل" ){
                                            include "rebort/Accommodation_type_rebort_all.php";
                                        }
                                        elseif($report_type==2 && $branch <> "الكل"){ 
                                            include "rebort/Accommodation_type_rebort.php";
                                        }
                                        if($report_type==3 && $branch == "الكل" ){
                                            include "rebort/job_type_all.php";
                                        }
                                        elseif($report_type==3 && $branch <> "الكل"){ 
                                            include "rebort/job_type.php";
                                        }
                                        if($report_type==4 && $branch == "الكل" ){
                                            include "rebort/diagnosis_type_all.php";
                                        }
                                        elseif($report_type==4 && $branch <> "الكل"){ 
                                            include "rebort/diagnosis_type.php";
                                        }
                                        if($report_type==5 && $branch == "الكل" ){
                                            include "rebort/violense_type_all.php";
                                        }
                                        elseif($report_type==5 && $branch <> "الكل"){ 
                                            include "rebort/violense_type.php";
                                        }

                                        if($report_type==6 && $branch == "الكل" ){
                                            include "rebort/refer_type_all.php";
                                        }
                                        elseif($report_type==6 && $branch <> "الكل"){ 
                                            include "rebort/refer_type.php";
                                        }
                                        if($report_type==7 && $branch == "الكل" ){
                                            include "rebort/GBV_type_all.php";
                                        }
                                        elseif($report_type==7 && $branch <> "الكل"){ 
                                            include "rebort/GBV_type.php";
                                        }
                                     
                                        if($report_type==8 && $branch == "الكل" ){
                                            include "rebort/number_of_rebort_type_all.php";
                                        }
                                        elseif($report_type==8 && $branch <> "الكل"){ 
                                            include "rebort/number_of_rebort.php";
                                        }
                                        if($report_type==9 && $branch == "الكل" ){
                                            include "rebort/hotline_of_type_all.php";
                                        }
                                        elseif($report_type== 9 && $branch <> "الكل"){ 
                                            include "rebort/hotline_of_rebort.php";
                                        }
                                        if($report_type==10 && $branch == "الكل" ){
                                            include "rebort/hotlineService_of_type_all.php";
                                        }
                                        elseif($report_type== 10 && $branch <> "الكل"){ 
                                            include "rebort/hotlineService_of_rebort.php";
                                        }
                                        if($report_type==11 && $branch == "الكل" ){
                                            include "rebort/OfficeServise_of_type_all.php";
                                        }
                                        elseif($report_type== 11 && $branch <> "الكل"){ 
                                            include "rebort/OfficeServise_rebort.php";
                                        }
                                        ?>

                                           

                                    

                                            
                                    </div>
                                    <?php }?>

								
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
	
} 
else {
echo "<script> window.open('index.php','_self')</script>";
}
?>
