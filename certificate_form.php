<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 }
?>


		
			<div class="content">
				<div class="page-inner">
				

					<div class="row">
						
						<div class="col-md-12">
							
								<div class="card">
									<div class="card-header">
										<div class="card-title">  الشهادة </div>
									</div>
									<div class="card-body">
                                        <?php 
                                            $user=$_SESSION['user']['id'];
                                            $sql="SELECT * FROM certificate_form where emp =?      ";
                                            $stmu=$con->prepare($sql); 
                                            $stmu->execute(array($user));
                                                if($stmu->rowCount()>0){ 
                                                    foreach($stmu->fetchAll() as $row) 
															{
                                                    
                                            ?>
                                                                                      

                                        <a href="<?php echo "certificate\\".$row['file'];?>" download>	
                                            <div class="col-sm-6 col-md-3">
                                                <div class="card card-stats card-primary card-round">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-5">
                                                                <div class="icon-big text-center">
                                                                    <i class="fas fa-download"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-7 col-stats">
                                                                <div class="numbers">
                                                                    <h4 class="card-title"> الشهادة   </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        <?php 
                                                            }   
                                                        }else{
                                                            echo' <div class="alert alert-danger">لاتوجد شهادة</div>';
                                                        }  
                                        ?>
									</div>
									
								</div>
							
							
							
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
	


?>
