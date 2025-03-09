<?php

include "include/header.php";
if (!isset($_SESSION['user'])) {

	echo "<script> window.open('logout.php','_self')</script>";
	// header("location:login.php");
}
if ($_SESSION['user']['rule_id'] == 9 || $_SESSION['user']['rule_id'] == 15 || $_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6 || $_SESSION['user']['rule_id'] == 18 || $_SESSION['user']['rule_id'] == 20 || $_SESSION['user']['rule_id'] == 25) {
?>



	<div class="content">
		<div class="page-inner">
			<div class="row">


				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title"> بيانات المرافقين</h4>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4 print-container">
									<thead>
										<tr>
											<th>اسم المرافق</th>
											<th>رقم الكود</th>
											<th>الجنس</th>
											<th>العمر</th>
											<th>موع الاقامة</th>
											<th>التاريخ</th>


										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>اسم المرافق</th>
											<th>رقم الكود</th>
											<th>الجنس</th>
											<th>العمر</th>
											<th>موع الاقامة</th>
											<th>التاريخ</th>

										</tr>
									</tfoot>
									<tbody>
										<?php
										// find branch
										$branch = $_SESSION['user']['branch_id'];


										//end find branch 
										$sql = "select * from escort where branch=? and type=?";
										$stm = $con->prepare($sql);
										$stm->execute(array($branch, 'جديد'));
										if ($stm->rowCount() > 0) {
											foreach ($stm->fetchAll() as $row) {

										?>

												<tr>

													<td><?php echo $row['name'] ?></td>
													<td><?php echo $row['code'] ?></td>
													<td><?php echo $row['sex'] ?></td>
													<td>
														<?php $c = date('Y');
														$y = date('Y', strtotime($row['brithday']));
														$age = $c - $y;
														echo $age; ?>
													</td>
													<td><?php echo $row['place'] ?></td>
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
} else {
	echo "<script> window.open('index.php','_self')</script>";
}
?>