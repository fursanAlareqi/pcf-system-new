<?php

include "include/header.php";
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('logout.php','_self')</script>";
 // header("location:login.php");
 }if($_SESSION['user']['rule_id']==2 ||$_SESSION['user']['rule_id']==6){
	$user=$_SESSION['user']['id'];
?>


		
			<div class="content">
				<div class="page-inner">
				

					<div class="row">
						
						
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title"> جدول الطلبات لليوم</h4>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4" >
											<thead>
												<tr>
                                                    <th>المرسل</th>
                                                    <th>الفرع</th>
													<th>اسم الصنف</th>
													<th>نوع الكمية</th>
													<th>الكمية</th>
                                                    <th>التاريخ</th>
												
												
													
													
												</tr>
											</thead>
											<tfoot>
												<tr>
                                                    <th>المرسل</th>
                                                    <th>الفرع</th>
													<th>اسم الصنف</th>
													<th>نوع الكمية</th>
													<th>الكمية</th>
                                                    <th>التاريخ</th>
												
													
												</tr>
											</tfoot>
											<tbody>
												<?php
													$today= date('Y-m-d');
													$sql="select * from request";
													$stm=$con->prepare($sql); 
													$stm->execute();
													if($stm->rowCount()>0)
														{
															foreach($stm->fetchAll() as $row) 
															{

												?>

												<tr>
                                                    <td>
                                                        <?php
                                                            // find branch
                                                           
                                                            $sql="select name from user where  id=? ";
                                                            $stmu=$con->prepare($sql); 
                                                            $stmu->execute(array($row['sender_name']));
                                                            $user_name=$stmu->fetch();
                                                            echo $user_name['name'];

                                                            //end find branch 
                                                            
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php
                                                            // find branch
                                                           
                                                            $sql="select * from branch where  id=? ";
                                                            $stm=$con->prepare($sql); 
                                                            $stm->execute(array($row['branch']));
                                                            $branch=$stm->fetch();
                                                            echo $branch['branch_name'];

                                                            //end find branch 
                                                            
                                                        ?>
                                                    </td>
													<td><?php echo $row['name'] ?></td>
													<td><?php echo $row['type'] ?></td>
													<td><?php echo $row['num'] ?></td>
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
//تم وضع كود في الاخير من اجل تنفيذ رسالة التحدذير
	if(isset($_POST['save'])){
		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		  }

		
			$name=test_input($_POST["name"]);
			$type=test_input($_POST["type"]);
			$num=test_input($_POST["num"]);

		
		


		  
			// find branch
			$branch=$_SESSION['user']['branch_id'];


			//end find branch 
			
			
			
			//التحقق ان اسم المنتج موجود وليس ارقام
		
			
			


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
			}

			elseif(empty($name))
			{
				
				
				echo '<script>swal("يرجاء اختيار اسم الصنف ", "لم يتم رفع البيانات", {
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
				
				
				echo '<script>swal("يرجاء تحديد نوع الكمية   ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
			}
		
			
			elseif(empty($num))
			{
				
				
				echo '<script>swal("يرجاء تحديد الكمية   ", "لم يتم رفع البيانات", {
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
				$query="INSERT INTO request (branch,sender_name,name,type,num)
				values (?,?,?,?,?) ";
				$stm=$con->prepare($query);
				$stm->execute(array($branch,$user,$name,$type,$num));
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
else {
echo "<script> window.open('index.php','_self')</script>";
}
?>
