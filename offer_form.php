<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 }
 $sql="select * from forms where  sender_name=? and auth=? and step=? and send=?";
$stm=$con->prepare($sql); 
$stm->execute(array($_SESSION['user']['id'],'True',"التقديم",'False'));
if($stm->rowCount()==0){
?>


		
			<div class="content">
				<div class="page-inner">
				

					<div class="row">
						
						<div class="col-md-12">
							
								<div class="card">
									<div class="card-header">
										<div class="card-title">التقديم</div>
									</div>
									<div class="card-body">
                                    <form action="" method="post" enctype="multipart/form-data">

                                       	
                                            
                                            <bu class="col-sm-6 col-md-3">
                                                <button type="submit" name="send" class="card card-stats card-primary card-round">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-5">
                                                                <div class="icon-big text-center">
                                                                    <i class="fas fa-download"></i>
                                                                </div>
                                                            </div>
                                                            <div class="col-7 col-stats">
                                                                <div class="numbers">
                                                                    <h4 class="card-title">نموذج   التقديم </h4>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </button>
                                            </bu>
                                       
                                        
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
$user=$_SESSION['user']['id'];
$branch=$_SESSION['user']['branch_id'];
$today=date("Y-m-d h:i:sa");


    if(isset($_POST['send'])){
        
       
        $sql="select * from download_form where  sender_name=? and step=?   ";
        $stm=$con->prepare($sql); 
        $stm->execute(array($user,'التقديم'));
       

        if ($stm->rowCount()>0){
            $user_date=$stm->fetch();
            $user_date= $user_date['date'];
            $hours = (abs(strtotime($user_date)-strtotime($today)) / 60) / 60;
            if($hours>=24){

            
            echo '<script>swal("لقد انتهة المدة المسموحة  ", "  ", {
                icon : "warning",
                buttons: {        			
                    confirm: {
                        className : "btn btn-warning"
                    }
                },
            });</script>';
        }
        else{
            echo "<script> window.open('https://docs.google.com/forms/d/e/1FAIpQLSf1bR2nevJc0INF_UXhIzBAAztaQvfHhF-YWZ85PWK4B-3O_g/viewform?usp=pp_url','_self')</script>";
        }
        }
        else{
            echo '<script>swal(" اخي المتقدم مده انهاء هذه المهمه خلال 24 ساعة بعد هذه الوقت لن تستطيع  تحميل النمودج وبهذا تخلي المؤسسة مسؤوليتها القانونية علماً بـأن فتح النموذج بمثابة اشعار انهاء خدمة", "  ", {
                icon : "warning",
                buttons: {        			
                    confirm: {
                        className : "btn btn-warning"
                    }
                },
            });</script>';	
            $query="INSERT INTO download_form(sender_name,branch,step,date)
                values (?,?,?,?) ";
                $stm=$con->prepare($query);
                $stm->execute(array($user,$branch,'التقديم',$today));
                if($stm->rowCount())
                {
                    echo "<script> window.open('https://docs.google.com/forms/d/e/1FAIpQLSf1bR2nevJc0INF_UXhIzBAAztaQvfHhF-YWZ85PWK4B-3O_g/viewform?usp=pp_url','_self')</script>";
                    
                    
                }
                else
                {
                    echo'<script src="js/send_error.js"></script>';
                }
           
        }

        
        
    }
	
}else{
    echo "<script> window.open('index.php','_self')</script>";
}

?>
