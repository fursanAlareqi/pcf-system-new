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

						$sql = "select code1 ,date from session where date BETWEEN ? and ? ";
						$stmu = $con->prepare($sql);
						$stmu->execute(array($from_date, $to_date));

						$sessions = $stmu->fetchAll();

						$new_boys = 0;
						$new_girls = 0;
						$new_men = 0;
						$new_women = 0;
						$back_boys = 0;
						$back_girls = 0;
						$back_men = 0;
						$back_women = 0;


						$sql = "select * from resption where code IN (select code1 from session where date BETWEEN ? and ?) ";

						// echo $sql;
						$stm = $con->prepare($sql);
						$stm->execute(array($from_date, $to_date));
						$resptions = $stm->fetchAll();


						// 
						foreach ($resptions as $resption) {
							foreach ($sessions as $session) {



								if ($session['date'] == $resption['date']) {
									$session_codes = explode(',', $session['code1']);
									if (in_array($resption['code'], $session_codes)) {


										$now = new DateTime();

										$difference = $now->diff(new DateTime($resption['brithday']));

										$age = $difference->y;


										if ($age <= 17 && $resption['sex'] == 'ذكر' && $resption['type'] == "جديد") {
											$new_boys += 1;
										} elseif ($age <= 17 && $resption['sex'] == 'انثى' && $resption['type'] == "جديد") {
											$new_girls += 1;
										} elseif ($age <= 17 && $resption['sex'] == 'ذكر' && $resption['type'] == "عودة") {
											$back_boys += 1;
										} elseif ($age <= 17 && $resption['sex'] == 'انثى' && $resption['type'] == "عودة") {
											$back_girls += 1;
										} elseif ($age > 17 && $resption['sex'] == 'ذكر' && $resption['type'] == "جديد") {
											$new_men += 1;
										} elseif ($age > 17 && $resption['sex'] == 'انثى' && $resption['type'] == "جديد") {
											$new_women += 1;
										} elseif ($age > 17 && $resption['sex'] == 'ذكر' && $resption['type'] == "عودة") {
											$back_men += 1;
										} elseif ($age > 17 && $resption['sex'] == 'انثى' && $resption['type'] == "عودة") {
											$back_women += 1;
										}
										break;
									}
								}
							}
						}



						// 
						$es_new_boys = 0;
						$es_new_girls = 0;
						$es_new_men = 0;
						$es_new_women = 0;
						$es_back_boys = 0;
						$es_back_girls = 0;
						$es_back_men = 0;
						$es_back_women = 0;


						$sql = "select * from escort where  code In(select escort_code from session where date BETWEEN ? and ?) ";
						$stm = $con->prepare($sql);
						$stm->execute(array($from_date, $to_date));
						$escorts = $stm->fetchAll();


						// 
						foreach ($escorts as $escort) {
							foreach ($sessions as $session) {
								if ($session['date'] == $escort['date']) {
									$session_codes = explode(',', $session['code1']);
									if (in_array($escort['code'], $session_codes)) {

										$now = new DateTime();

										$difference = (new DateTime($escort['brithday']))->diff($now);

										$age = $difference->y;

										if ($age <= 17 && $escort['sex'] == 'ذكر' && $escort['type'] == "جديد") {
											$es_new_boys += 1;
										} elseif ($age <= 17 && $escort['sex'] == 'انثى' && $escort['type'] == "جديد") {
											$es_new_girls += 1;
										} elseif ($age <= 17 && $escort['sex'] == 'ذكر' && $escort['type'] == "عودة") {
											$es_back_boys += 1;
										} elseif ($age <= 17 && $escort['sex'] == 'انثى' && $escort['type'] == "عودة") {
											$es_back_girls += 1;
										} elseif ($age > 17 && $escort['sex'] == 'ذكر' && $escort['type'] == "جديد") {
											$es_new_men += 1;
										} elseif ($age > 17 && $escort['sex'] == 'انثى' && $escort['type'] == "جديد") {
											$es_new_women += 1;
										} elseif ($age > 17 && $escort['sex'] == 'ذكر' && $escort['type'] == "عودة") {
											$es_back_men += 1;
										} elseif ($age > 17 && $escort['sex'] == 'انثى' && $escort['type'] == "عودة") {
											$es_back_women += 1;
										}

										break;
									}
								}
							}
						}


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
											<?= $new_women; ?>
										</td>
										<td>
											<?= $new_girls; ?>
										</td>

										<td> <?= $new_men; ?></td>
										<td> <?= $new_boys; ?></td>
									</tr>
									<tr>

										<td>مستفيد</td>
										<td>عودة</td>
										<td>
											<?= $back_women; ?>
										</td>
										<td>
											<?= $back_girls; ?>
										</td>
										<td> <?= $back_men; ?></td>
										<td> <?= $back_boys; ?></td>
									</tr>



									<tr>

										<td>مرافق</td>
										<td>جديد</td>
										<td>
											<?= $es_new_women; ?>
										</td>
										<td>
											<?= $es_new_girls; ?>
										</td>
										<td> <?= $es_new_men; ?></td>
										<td> <?= $es_new_boys; ?></td>
									</tr>


									<tr>

										<td>مرافق</td>
										<td>عودة</td>
										<td>
											<?= $es_back_women; ?>
										</td>
										<td>
											<?= $es_back_girls; ?>
										</td>
										<td> <?= $es_back_men; ?></td>
										<td> <?= $es_back_boys; ?></td>
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