<?php

include "include/header.php";
if (!isset($_SESSION['user'])) {

	echo "<script> window.open('logout.php','_self')</script>";
	// header("location:login.php");
}
if ($_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6) {
?>

	<div class="content">
		<div class="page-inner">


			<div class="row">
				<div class="col-md-12">
					<form action="" method="post">
						<div class="card">
							<div class="card-header">
								<div class="card-title"> احصائيات جلسات التوعية </div>
							</div>
							<div class="card-body">
								<form action="" method="post">
									<div class="row">
										<div class="col-md-6">

											<div class="form-group form-floating-label">
												<label>من تاريخ</label>
												<input type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="from_date" required>
											</div>



										</div>
										<div class="col-md-6 ">
											<div class="form-group form-floating-label">
												<label>الى تاريخ</label>
												<input type="date" class="form-control input-border-bottom" id="inputFloatingLabel" name="to_date" required>
											</div>

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

						// 

						$sql = "select sum(m_n_rebort_1_17) as new_boys,sum(m_b_rebort_1_17) as back_boys, sum(f_n_rebort_1_17) as new_girls,sum(f_b_rebort_1_17) as back_girls 
						,sum(m_n_rebort_18) as new_men,sum(m_b_rebort_18) as back_men,sum(f_n_rebort_18) as new_women,sum(f_b_rebort_18) as back_women
						from emp_day_rebort where date BETWEEN ? and ? and type = ? ";
						$stmu = $con->prepare($sql);
						$type = 'جلسات التوعية الحالة';

						$stmu->execute(array($from_date, $to_date, $type));

						$respotion_report = $stmu->fetchAll();



						// 
						$sql = "select sum(m_n_rebort_1_17) as new_boys,sum(m_b_rebort_1_17) as back_boys, sum(f_n_rebort_1_17) as new_girls,sum(f_b_rebort_1_17) as back_girls 
						,sum(m_n_rebort_18) as new_men,sum(m_b_rebort_18) as back_men,sum(f_n_rebort_18) as new_women,sum(f_b_rebort_18) as back_women
						from emp_day_rebort where date BETWEEN ? and ? and type = ? ";
						$stmu = $con->prepare($sql);

						$type = 'جلسات التوعية مرافقين';

						$stmu->execute(array($from_date, $to_date, $type));

						$es_report = $stmu->fetchAll();


					?>

						<div class="table-responsive">

							<table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4">
								<thead>
									<tr>
										<th>مستفيد / مرافق</th>

										<th> جديد/عودة</th>
										<th>نساء</th>

										<th>فتيات</th>

										<th>رجال</th>

										<th>فتيان</th>
									</tr>
								</thead>
								<tfoot>
									<th>مستفيد / مرافق</th>

									<th> جديد/عودة</th>
									<th>نساء</th>

									<th>فتيات</th>

									<th>رجال</th>

									<th>فتيان</th>
								</tfoot>
								<tbody>
									<tr>
										<td>مستفيد</td>
										<td>جديد</td>
										<td>
											<?= $respotion_report[0]["new_women"]; ?>
										</td>
										<td>
											<?= $respotion_report[0]["new_girls"]; ?>
										</td>

										<td> <?= $respotion_report[0]["new_men"]; ?></td>
										<td> <?= $respotion_report[0]["new_boys"]; ?></td>
									</tr>
									<tr>

										<td>مستفيد</td>
										<td>عودة</td>

										<td>
											<?= $respotion_report[0]["back_women"]; ?>
										</td>
										<td>
											<?= $respotion_report[0]["back_girls"]; ?>
										</td>
										<td> <?= $respotion_report[0]["back_men"]; ?></td>
										<td> <?= $respotion_report[0]["back_boys"]; ?></td>

									</tr>


									<tr>

										<td>مرافق</td>
										<td>جديد</td>

										<td>
											<?= $es_report[0]["back_women"]; ?>
										</td>
										<td>
											<?= $es_report[0]["back_girls"]; ?>
										</td>
										<td> <?= $es_report[0]["back_men"]; ?></td>
										<td> <?= $es_report[0]["back_boys"]; ?></td>

									</tr>


									<tr>

										<td>مرافق</td>
										<td>عودة</td>

										<td>
											<?= $es_report[0]["back_women"]; ?>
										</td>
										<td>
											<?= $es_report[0]["back_girls"]; ?>
										</td>
										<td> <?= $es_report[0]["back_men"]; ?></td>
										<td> <?= $es_report[0]["back_boys"]; ?></td>

									</tr>

								</tbody>
							</table>

						</div>
					<?php } ?>


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