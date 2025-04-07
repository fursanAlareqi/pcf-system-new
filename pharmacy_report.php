<?php

include "include/header.php";
if (!isset($_SESSION['user'])) {

	echo "<script> window.open('logout.php','_self')</script>";
	// header("location:login.php");
}
if ($_SESSION['user']['rule_id'] == 11 || $_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6) {
?>



	<div class="content">
		<div class="page-inner">


			<div class="row">
				<div class="col-md-12">
					<form action="" method="post">
						<div class="card">
							<div class="card-header">
								<div class="card-title">تقرير الادوية المتبقية</div>
							</div>
							<div class="card-body">
								<?php

								// if(isset($_GET['action'],$_GET['ids']) && $_GET['action']=='delete'){
								// $id=$_GET['ids'];
								// $sql="delete from resption where id=? ";
								// $stm=$con->prepare($sql); 
								// $stm->execute(array($id));
								// if($stm->rowCount() > 0 )
								// 	{
								// 		echo "<div class='alert alert-success'>One Row  Deleted</div>";
								// 		echo "<script>
								// 		window.open('admin_search_reception_code.php','_self')
								// 	</script>";
								// 	}
								// else
								// 	{
								// 		echo "<div class='alert alert-danger'>One Row Not Deleted</div>"; 
								// 	}

								// 	}
								?>


								<form action="" method="post">
									<div class='row'>
										<div class="col-md-6 col-lg-6">



											<div class="form-group form-floating-label">
												<label>من تاريخ</label>
												<input type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="from_date">
											</div>


										</div>
										<div class="col-md-6 col-lg-6">

											<div class="form-group form-floating-label">
												<label>الى تاريخ</label>
												<input type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="to_date">
											</div>

										</div>
									</div>

									<div class="card-action">
										<input class="btn btn-success" type="submit" name="search" value="search">
									</div>






								</form>
								<?php if (isset($_POST['search'])) {

									function test_input($data)
									{
										$data = trim($data);
										$data = stripslashes($data);
										$data = htmlspecialchars($data);
										return $data;
									}


									$from_date = test_input($_POST['from_date']);

									$to_date = test_input($_POST['to_date']);
									// find branch
									$branch = $_SESSION['user']['branch_id'];

									//end find branch 

									$date = date('Y-m-d');
									$user = $_SESSION['user']['id'];
									if($_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6){
										$sql = "SELECT * FROM pharmacy where (date<=? and date <= ?)  and residual>?  and date >= ? ORDER BY `pharmacy`.`name` ASC  ";
										$stm = $con->prepare($sql);
										$stm->execute(array($from_date, $to_date, 0, '2023/1/1'));

									}else{
										$sql = "SELECT * FROM pharmacy where (date<=? and date <= ?)  and residual>? and branch=? and date >= ? ORDER BY `pharmacy`.`name` ASC  ";
										$stm = $con->prepare($sql);
										$stm->execute(array($from_date, $to_date, 0, $branch, '2023/1/1'));

									}
									
									//عدد الحالات الكلية
									if ($stm->rowCount() > 0) {



								?>
										<div class="table-responsive">
											<table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info ">
												<center>
													<button id="export" class="btn btn-success">Export to excel</button>
													<br>
												</center>
												<thead>
													<tr>
														<th>م</th>
														<th>اسم العلاج</th>
														<th>الاسم العلمي</th>
														<th>الاسم التجاري</th>
														<th>تاريخ الانتهاء</th>
														<th>الكمية الموردة</th>
														<th>الكمية المنصرفة</th>
														<th>المرتجع</th>
														<th>المتبقي</th>
														<th>حبة / شريط</th>
														<th>المصدر</th>
														<th>تاريخ ادخال الصنف</th>
														<?php 
															if($_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6){
																echo "<th>الفرع</th>" ;
															}

														?>
													</tr>
												</thead>

												<tbody>
													<?php

													$cnt = 1;
													foreach ($stm->fetchAll() as $row) {

														$sql = "SELECT sum(quantity) as quantity  FROM return_pharmacy where item_id =?";
														$stm = $con->prepare($sql);
														$stm->execute(array($row['id']));

														$return_quantity = $stm->fetch()['quantity'] ?? 0;

													?>

														<tr>
															<td><?php echo $cnt; ?></td>
															<td><?php echo $row['name'] ?></td>

															<td><?php echo $row['scientific_name'] ?></td>
															<td><?php echo $row['commercial_name'] ?></td>

															<td><?php echo $row['expiration_date'] ?></td>

															<td><?php echo $row['quantity'] ?></td>

															<td><?php echo $row['quantity'] - ($row['residual'] + $return_quantity) ?></td>

															<td><?php echo  $return_quantity ?></td>



															<td><?php echo $row['residual'] ?></td>
															<td> <?php echo $row['type'] == 'old' ? 'شريط' : 'حبة' ?> </td>
															<td><?php echo $row['exporter'] ?></td>
															<td><?php echo $row['date'] ?></td>
															<?php 
															
															if($_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6){
																$sql = "select * from branch where  id=? ";
																$stm = $con->prepare($sql);
																$stm->execute(array($row['branch']));
																$branch = $stm->fetch();
																$branch_name = $branch['branch_name'];
																 echo"<td>" ;
																 echo $branch_name;
																 echo"</td>";
															}

														?>



														</tr>
													<?php $cnt = $cnt + 1;
													}


													?>

												</tbody>
											</table>
										</div>
								<?php } else {
										echo ' <div class="alert alert-danger">NO Row</div>';
									}
								} ?>

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

} else {
	echo "<script> window.open('index.php','_self')</script>";
}
?>