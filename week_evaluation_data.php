<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 }if($_SESSION['user']['rule_id']==14 ||$_SESSION['user']['rule_id']==2 ||$_SESSION['user']['rule_id']==6||$_SESSION['user']['rule_id']==22||$_SESSION['user']['rule_id']==23){
?>


		
			<div class="content">
				<div class="page-inner">
				

					<div class="row">
						
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title"> جدول بيانات التقييم الاسبوع</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4" >
											<thead>
												<tr>
													<th>اسم الموظف</th>
													<th>الفرع</th>
													<th>ملف التقييم</th>

													<th>تاريخ التقديم</th>



													
													
												</tr>
											</thead>
											<tfoot>
												<tr>
												    <th>اسم الموظف</th>
													<th>الفرع</th>
													<th>ملف التقييم</th>
													<th>تاريخ التقديم</th>

												</tr>
											</tfoot>
											<tbody>
												<?php
													$sql="select * from  week_evaluation_reply  ";
													$stm=$con->prepare($sql); 
													$stm->execute();
													if($stm->rowCount()>0)
														{
															foreach($stm->fetchAll() as $row) 
															{

												?>

												<tr>
													<?php 
                                                        $sql="select * from user where  id=? ";
                                                        $stm=$con->prepare($sql); 
                                                        $stm->execute(array($row['sender_name']));
                                                        $name=$stm->fetch();
                                                        $sender_name=$name['name'];
                                                        echo "<td>$sender_name</td>";
                                                    ?>
													<td>
                                                        <?php  
                                                        $sql="select branch_name from branch where id=? ";
                                                        $stms=$con->prepare($sql); 
                                                        $stms->execute(array($row['branch']));
                                                        $t=$stms->fetch();
                                                        echo $t['branch_name'];
                                                        ?>
													</td>
													<td><a class="btn btn-primary" href="week_evaluation_reply/<?php echo $row['file'] ?>">ملف التقييم</a> </td>
                                             
													<td><?php echo $row['date'] ?></td>
													
													
													

												
												</tr>
												<?php }
														}

												?>

												
											</tbody>
										</table>
									</div>
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
if(isset($_GET['action'],$_GET['ids']) && $_GET['action']=='auth'){
        $id=$_GET['ids'];
        $date= date('Y-m-d');
        $user=$_SESSION['user']['id'];
        $sql="update forms set auth=?,auth_date=?,auth_user=?  where id=? ";
        $stm=$con->prepare($sql); 
        $stm->execute(array('True',$date,$user,$id));
        if($stm->rowCount() > 0 )
            {
                echo '<script>swal(" تمت المصادقة بنجاح", "   ", {
                    icon : "success",
                    buttons: {        			
                        confirm: {
                            className : "btn btn-success"
                        }
                    },
                });</script>';
				echo "<script> window.open('Auth_various_form.php?num=3&id=13','_self')</script>";
            }
        else
            {
                echo'<script src="js/send_error.js"></script>';
            }
} 

if(isset($_GET['action'],$_GET['ids']) && $_GET['action']=='denial'){
	$id=$_GET['ids'];
	$date= date('Y-m-d');
	$user=$_SESSION['user']['id'];
	$sql="update forms set send=?,auth_date=?,auth_user=?,falidemessage=?  where id=? ";
	$stm=$con->prepare($sql); 
	$stm->execute(array('True',$date,$user,'False',$id));
	if($stm->rowCount() > 0 )
		{
			echo '<script>swal(" تمت الرفض بنجاح", "   ", {
				icon : "success",
				buttons: {        			
					confirm: {
						className : "btn btn-success"
					}
				},
			});</script>';
			
			echo "<script> window.open('Auth_various_form.php?num=3&id=13','_self')</script>";


		}
	else
		{
			echo'<script src="js/send_error.js"></script>';
			
		}
}



}
else {
	echo "<script> window.open('Auth_various_form.php?num=3&id=13','_self')</script>";
}
?>
