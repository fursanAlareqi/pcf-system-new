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
								<div class="card-title"> استعلام على العلاج الذي تم تحديدة للحالة</div>
							</div>
							<form action="" method="post">
								<div class="card-body">


									<form action="" method="post">

										<div class="row row-demo-grid">
											<div class="form-group form-floating-label">

												<label for="tokens">رقم الكود</label>
												<select class="selectpicker form-control" name="code" id="tokens" data-live-search="true">
													<option value=""></option>
													<?php
													// find branch
													$branch = $_SESSION['user']['branch_id'];

													//end find branch 
													$sql = "SELECT DISTINCT d.code, r.name FROM doctor d INNER JOIN resption r ON d.code = r.code  WHERE d.branch = ?";
													$stm = $con->prepare($sql);
													$stm->execute(array($branch));
													if ($stm->rowCount() > 0) {
														foreach ($stm->fetchAll() as $row) {




													?>
															<option value="<?php echo $row['code']; ?>"><?php echo $row['code'] . ' - ' . $row['name']; ?></option>

													<?php
														}
													}
													?>

												</select>
											</div>
										</div>



										<input class="btn btn-success" type="submit" name="search" value="search">



									</form>
									<?php if (isset($_POST['search'])) {

										$code = $_POST['code'];

									?>

										<div class="table-responsive">
											<table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4">
												<thead>
													<tr>
														<th> </th>
														<th> رقم كود الحالة</th>
														<th> اسم العلاج</th>
														<th>الكمية</th>
														<th> تاريخ الروشتة </th>




													</tr>
												</thead>
												<tfoot>
													<th> </th>
													<th> رقم كود الحالة</th>
													<th> اسم العلاج</th>
													<th>الكمية</th>
													<th> تاريخ الروشتة </th>
												</tfoot>
												<tbody>
													<?php
													$sql = "select * from psyshological where code =? and branch=? ORDER BY `psyshological`.`date` desc  ";
													$stmu = $con->prepare($sql);
													$stmu->execute(array($code, $branch));
													$row = $stmu->fetch();

													if ($stmu->rowCount() == 0) {
														$row['date'] = '';
													}

													$sql = "select * from doctor where code =? and branch=? ORDER BY `doctor`.`date` desc  ";
													$stm = $con->prepare($sql);
													$stm->execute(array($code, $branch));
													$rows = $stm->fetch();

													if ($stm->rowCount() == 0) {
														$rows['date'] = '';
													}

													if ($row['date'] >= $rows['date']) {
													?>

														<tr>
															<td>الطبيب النفسي</td>
															<td><?php echo $row['code']; ?></td>
															<td>
																<?php
																$medical_explode = explode(",", $row['medical']);
																foreach ($medical_explode as $medical_name) {
																	echo $medical_name . '<br>';
																}
																?>
															</td>
															<td><?php echo $row['quantity']; ?></td>
															<td><?php echo $row['date']; ?></td>
														</tr>

													<?php }
													if ($rows['date'] >= $row['date']) { ?>

														<tr>
															<td>الطبيب العام</td>
															<td><?php echo $rows['code']; ?></td>
															<td>
																<?php $medical_explode = explode(",", $rows['medical']);
																foreach ($medical_explode as $medical_name) {
																	echo $medical_name . '<br>';
																}
																?>
															</td>
															<td><?php echo $rows['quantity']; ?></td>
															<td><?php echo $rows['date']; ?></td>
														</tr>

													<?php } ?>




												</tbody>
											</table>
										</div>
									<?php } ?>
								</div>
						</div>
					</form>


				</div>


				<div class="col-md-12">

					<div class="card">
						<div class="card-header">
							<div class="card-title"> صرف دواء </div>
						</div>
						<div class="card-body">



							<form action="" method="post">
								<div class="row row-demo-grid">

									<div class="form-group form-floating-label">

										<label for="tokens">عدد الادوية </label>
										<select class="selectpicker form-control" name="medicine_number" id="tokens" data-live-search="true" required>
											<option></option>
											<?php

											for ($i = 1; $i <= 8; $i++) {
											?>
												<option value="<?php echo $i ?>"><?php echo $i ?></option>

											<?php

											}
											?>

										</select>
									</div>
								</div>



								<input class="btn btn-success" type="submit" name="medicine_n" value="search">

							</form>

							<?php if (isset($_POST['medicine_n'])) {

								$medicine_number = $_POST['medicine_number'];





							?>
								<form action="" method="post">
									<div class="row">


										<div class="col-md-6 col-lg-4">

											<div class="form-group form-floating-label">
												<label>عدد الادوية </label>
												<input type="number" value="<?php echo $medicine_number  ?>" disabled class="form-control input-border-bottom" id="inputFloatingLabel" required>
												<input type="hidden" value="<?php echo $medicine_number ?>" class="form-control input-border-bottom" id="inputFloatingLabel" name="medicine_number" required>
											</div>

											<div class="form-group form-floating-label">
												<label>تاريخ ادخال البيانات</label>
												<input id="inputFloatingLabel" type="date" name="date" class="form-control input-border-bottom" required>
											</div>




											<div class="form-group form-floating-label">

												<label for="tokens">رقم الكود</label>
												<select class="selectpicker form-control" name="code" id="tokens" data-live-search="true">
													<option value=""></option>
													<?php
													// find branch
													$branch = $_SESSION['user']['branch_id'];

													//end find branch 
													$sql = "select DISTINCT(code) from resption where branch=? ";
													$stm = $con->prepare($sql);
													$stm->execute(array($branch));
													if ($stm->rowCount() > 0) {
														foreach ($stm->fetchAll() as $row) {




													?>
															<option value="<?php echo $row['code']; ?>"><?php echo $row['code']; ?></option>

													<?php
														}
													}
													?>

												</select>
											</div>
											<div class="form-group form-floating-label">
												<?php if ($branch == 6) { ?>
													<label for="tokens">Epilepsy </label>
													<select class="selectpicker form-control" name="Epilepsy" id="tokens" data-live-search="true">
														<option value="psychological">psychological</option>
														<option value="Epilepsy">Epilepsy</option>


													</select>
												<?php } ?>
											</div>

											<!-- يتعرف على عدد الادوية ويظهر خانات حسب العدد -->
											<?php
											if (
												$medicine_number == 1 || $medicine_number == 2 || $medicine_number == 3 || $medicine_number == 4 || $medicine_number == 5 || $medicine_number == 6 ||
												$medicine_number == 7 || $medicine_number == 8 || $medicine_number == 9 || $medicine_number == 10
											) {

											?>

												<div class="form-group form-floating-label">

													<label for="tokens">اسم العلاج الاول</label>
													<select class="selectpicker form-control" name="medicine_name_1" id="tokens" data-live-search="true" required

														onchange="{let option=$(this).find(':selected'); $('.medicine_quantity_1').val('');$('.medicine_quantity_1').attr('placeholder', 'ملاحظة كمية العلاج ب ال '+option.data('type'));}">

														<option value=""></option>
														<?php
														$branch = $_SESSION['user']['branch_id'];
														$sql = "select * from pharmacy where branch=? and residual > 0 and date > ? ORDER BY `pharmacy`.`name` ASC  ";
														$stm = $con->prepare($sql);
														$stm->execute(array($branch, "2022-12-31"));
														if ($stm->rowCount() > 0) {
															foreach ($stm->fetchAll() as $row) {
														?>
																<option data-type="<?php echo $row['type'] == 'old' ? 'شريط' : 'حبة'; ?>" value="<?php echo $row['id']; ?>">exporter:<?php echo $row['exporter']; ?> & <?php echo $row['name']; ?>& ^<?php echo $row['residual']; ?> </option>
														<?php
															}
														}
														?>

													</select>
												</div>


												<div class="form-group form-floating-label">
													<label>كمية العلاج الاول</label>
													<input id="inputFloatingLabel" type="number" name="medicine_quantity_1" class="form-control input-border-bottom medicine_quantity_1" required>

												</div>





												<!-- **************************************************** -->
											<?php
											}
											if (
												$medicine_number == 2 || $medicine_number == 3 || $medicine_number == 4 || $medicine_number == 5 || $medicine_number == 6 ||
												$medicine_number == 7 || $medicine_number == 8 || $medicine_number == 9 || $medicine_number == 10
											) {

											?>

												<div class="form-group form-floating-label">

													<label for="tokens">اسم العلاج الثاني</label>
													<select class="selectpicker form-control" name="medicine_name_2" id="tokens" data-live-search="true" required
														onchange="{let option=$(this).find(':selected'); $('.medicine_quantity_2').val('');$('.medicine_quantity_2').attr('placeholder', 'ملاحظة كمية العلاج ب ال '+option.data('type'));}">
														<option value=""></option>
														<?php
														$branch = $_SESSION['user']['branch_id'];
														$sql = "select * from pharmacy where branch=? and residual > 0 and date > ? ORDER BY `pharmacy`.`name` ASC  ";
														$stm = $con->prepare($sql);
														$stm->execute(array($branch, "2022-12-31"));
														if ($stm->rowCount() > 0) {
															foreach ($stm->fetchAll() as $row) {

														?>
																<option data-type="<?php echo $row['type'] == 'old' ? 'شريط' : 'حبة'; ?>" value="<?php echo $row['id']; ?>">exporter:<?php echo $row['exporter']; ?> & <?php echo $row['name']; ?>& ^<?php echo $row['residual']; ?> </option>
														<?php

															}
														}
														?>

													</select>
												</div>


												<div class="form-group form-floating-label">
													<label>كمية العلاج الثاني</label>
													<input id="inputFloatingLabel" type="number" name="medicine_quantity_2" class="form-control input-border-bottom medicine_quantity_2" required>

												</div>





												<!-- **************************************************** -->

											<?php
											}
											if (
												$medicine_number == 3 || $medicine_number == 4 || $medicine_number == 5 || $medicine_number == 6 ||
												$medicine_number == 7 || $medicine_number == 8 || $medicine_number == 9 || $medicine_number == 10
											) {

											?>

												<div class="form-group form-floating-label">

													<label for="tokens">اسم العلاج الثالث</label>
													<select class="selectpicker form-control" name="medicine_name_3" id="tokens" data-live-search="true" required
														onchange="{let option=$(this).find(':selected'); $('.medicine_quantity_3').val('');$('.medicine_quantity_3').attr('placeholder', 'ملاحظة كمية العلاج ب ال '+option.data('type'));}">

														<option value=""></option>
														<?php
														$branch = $_SESSION['user']['branch_id'];
														$sql = "select * from pharmacy where branch=? and residual > 0 and date > ? ORDER BY `pharmacy`.`name` ASC  ";
														$stm = $con->prepare($sql);
														$stm->execute(array($branch, "2022-12-31"));
														if ($stm->rowCount() > 0) {
															foreach ($stm->fetchAll() as $row) {
														?>
																<option data-type="<?php echo $row['type'] == 'old' ? 'شريط' : 'حبة'; ?>" value="<?php echo $row['id']; ?>">exporter:<?php echo $row['exporter']; ?> & <?php echo $row['name']; ?>& ^<?php echo $row['residual']; ?> </option>


														<?php

															}
														}
														?>

													</select>
												</div>


												<div class="form-group form-floating-label">
													<label>كمية العلاج الثالث</label>
													<input id="inputFloatingLabel" type="number" name="medicine_quantity_3" class="form-control input-border-bottom medicine_quantity_3" required>

												</div>

												<!-- **************************************************** -->
											<?php
											}
											if (
												$medicine_number == 4 || $medicine_number == 5 || $medicine_number == 6 ||
												$medicine_number == 7 || $medicine_number == 8 || $medicine_number == 9 || $medicine_number == 10
											) {

											?>

												<div class="form-group form-floating-label">

													<label for="tokens">اسم العلاج الرابع</label>
													<select class="selectpicker form-control" name="medicine_name_4" id="tokens" data-live-search="true" required
														onchange="{let option=$(this).find(':selected'); $('.medicine_quantity_4').val('');$('.medicine_quantity_4').attr('placeholder', 'ملاحظة كمية العلاج ب ال '+option.data('type'));}">

														<option value=""></option>
														<?php
														$branch = $_SESSION['user']['branch_id'];
														$sql = "select * from pharmacy where branch=? and residual > 0 and date > ? ORDER BY `pharmacy`.`name` ASC  ";
														$stm = $con->prepare($sql);
														$stm->execute(array($branch, "2022-12-31"));
														if ($stm->rowCount() > 0) {
															foreach ($stm->fetchAll() as $row) {
														?>
																<option data-type="<?php echo $row['type'] == 'old' ? 'شريط' : 'حبة'; ?>" value="<?php echo $row['id']; ?>">exporter:<?php echo $row['exporter']; ?> & <?php echo $row['name']; ?>& ^<?php echo $row['residual']; ?> </option>

														<?php

															}
														}
														?>

													</select>
												</div>


												<div class="form-group form-floating-label">
													<label>كمية العلاج الرابع</label>
													<input id="inputFloatingLabel" type="number" name="medicine_quantity_4" class="form-control input-border-bottom medicine_quantity_4" required>

												</div>


												<!-- **************************************************** -->
											<?php
											}
											if ($medicine_number == 5 || $medicine_number == 6 || $medicine_number == 7 || $medicine_number == 8 || $medicine_number == 9 || $medicine_number == 10) {

											?>

												<div class="form-group form-floating-label">

													<label for="tokens">اسم العلاج الخامس</label>
													<select class="selectpicker form-control" name="medicine_name_5" id="tokens" data-live-search="true" required
														onchange="{let option=$(this).find(':selected'); $('.medicine_quantity_5').val('');$('.medicine_quantity_5').attr('placeholder', 'ملاحظة كمية العلاج ب ال '+option.data('type'));}">

														<option value=""></option>
														<?php
														$branch = $_SESSION['user']['branch_id'];
														$sql = "select * from pharmacy where branch=? and residual > 0 and date > ? ORDER BY `pharmacy`.`name` ASC  ";
														$stm = $con->prepare($sql);
														$stm->execute(array($branch, "2022-12-31"));
														if ($stm->rowCount() > 0) {
															foreach ($stm->fetchAll() as $row) {

														?>
																<option data-type="<?php echo $row['type'] == 'old' ? 'شريط' : 'حبة'; ?>" value="<?php echo $row['id']; ?>">exporter:<?php echo $row['exporter']; ?> & <?php echo $row['name']; ?>& ^<?php echo $row['residual']; ?> </option>


														<?php

															}
														}
														?>

													</select>
												</div>


												<div class="form-group form-floating-label">
													<label>كمية العلاج الخامس</label>
													<input id="inputFloatingLabel" type="number" name="medicine_quantity_5" class="form-control input-border-bottom medicine_quantity_5" required>

												</div>


												<!-- **************************************************** -->
											<?php
											}
											if ($medicine_number == 6 || $medicine_number == 7 || $medicine_number == 8 || $medicine_number == 9 || $medicine_number == 10) {

											?>

												<div class="form-group form-floating-label">

													<label for="tokens">اسم العلاج السادس</label>
													<select class="selectpicker form-control" name="medicine_name_6" id="tokens" data-live-search="true" required
														onchange="{let option=$(this).find(':selected'); $('.medicine_quantity_6').val('');$('.medicine_quantity_6').attr('placeholder', 'ملاحظة كمية العلاج ب ال '+option.data('type'));}">

														<option value=""></option>
														<?php
														$branch = $_SESSION['user']['branch_id'];
														$sql = "select * from pharmacy where branch=? and residual > 0 and date > ? ORDER BY `pharmacy`.`name` ASC  ";
														$stm = $con->prepare($sql);
														$stm->execute(array($branch, "2022-12-31"));
														if ($stm->rowCount() > 0) {
															foreach ($stm->fetchAll() as $row) {
														?>
																<option data-type="<?php echo $row['type'] == 'old' ? 'شريط' : 'حبة'; ?>" value="<?php echo $row['id']; ?>">exporter:<?php echo $row['exporter']; ?> & <?php echo $row['name']; ?>& ^<?php echo $row['residual']; ?> </option>

														<?php
															}
														}
														?>

													</select>
												</div>


												<div class="form-group form-floating-label">
													<label>كمية العلاج السادس</label>
													<input id="inputFloatingLabel" type="number" name="medicine_quantity_6" class="form-control input-border-bottom medicine_quantity_6" required>

												</div>


												<!-- **************************************************** -->
											<?php
											}
											if ($medicine_number == 7 || $medicine_number == 8 || $medicine_number == 9 || $medicine_number == 10) {

											?>

												<div class="form-group form-floating-label">

													<label for="tokens">اسم العلاج السابع</label>
													<select class="selectpicker form-control" name="medicine_name_7" id="tokens" data-live-search="true" required
														onchange="{let option=$(this).find(':selected'); $('.medicine_quantity_7').val('');$('.medicine_quantity_7').attr('placeholder', 'ملاحظة كمية العلاج ب ال '+option.data('type'));}">
														<option value=""></option>
														<?php
														$branch = $_SESSION['user']['branch_id'];
														$sql = "select * from pharmacy where branch=? and residual > 0 and date > ? ORDER BY `pharmacy`.`name` ASC  ";
														$stm = $con->prepare($sql);
														$stm->execute(array($branch, "2022-12-31"));
														if ($stm->rowCount() > 0) {
															foreach ($stm->fetchAll() as $row) {
														?>
																<option data-type="<?php echo $row['type'] == 'old' ? 'شريط' : 'حبة'; ?>" value="<?php echo $row['id']; ?>">exporter:<?php echo $row['exporter']; ?> & <?php echo $row['name']; ?>& ^<?php echo $row['residual']; ?> </option>
														<?php

															}
														}
														?>

													</select>
												</div>


												<div class="form-group form-floating-label">
													<label>كمية العلاج السابع</label>
													<input id="inputFloatingLabel" type="number" name="medicine_quantity_7" class="form-control input-border-bottom medicine_quantity_7" required>

												</div>


												<!-- **************************************************** -->
											<?php
											}
											if ($medicine_number == 8 || $medicine_number == 9 || $medicine_number == 10) {

											?>

												<div class="form-group form-floating-label">

													<label for="tokens">اسم العلاج الثامن</label>
													<select class="selectpicker form-control" name="medicine_name_8" id="tokens" data-live-search="true" required
														onchange="{let option=$(this).find(':selected'); $('.medicine_quantity_8').val('');$('.medicine_quantity_8').attr('placeholder', 'ملاحظة كمية العلاج ب ال '+option.data('type'));}">



														<option value=""></option>
														<?php
														$branch = $_SESSION['user']['branch_id'];
														$sql = "select * from pharmacy where branch=? and residual > 0 and date > ? ORDER BY `pharmacy`.`name` ASC  ";
														$stm = $con->prepare($sql);
														$stm->execute(array($branch, "2022-12-31"));
														if ($stm->rowCount() > 0) {
															foreach ($stm->fetchAll() as $row) {



														?>

																<option data-type="<?php echo $row['type'] == 'old' ? 'شريط' : 'حبة'; ?>" value="<?php echo $row['id']; ?>">exporter:<?php echo $row['exporter']; ?> & <?php echo $row['name']; ?>& ^<?php echo $row['residual']; ?> </option>


														<?php

															}
														}
														?>

													</select>
												</div>


												<div class="form-group form-floating-label">
													<label>كمية العلاج الثامن</label>
													<input id="inputFloatingLabel" type="number" name="medicine_quantity_8" class="form-control input-border-bottom medicine_quantity_8" required>

												</div>


												<!-- **************************************************** -->
											<?php
											}
											if ($medicine_number == 9 || $medicine_number == 10) {

											?>

												<div class="form-group form-floating-label">

													<label for="tokens">اسم العلاج التاسع</label>
													<select class="selectpicker form-control" name="medicine_name_9" id="tokens" data-live-search="true" required
														onchange="{let option=$(this).find(':selected'); $('.medicine_quantity_9').val('');$('.medicine_quantity_9').attr('placeholder', 'ملاحظة كمية العلاج ب ال '+option.data('type'));}">

														<option value=""></option>
														<?php
														$branch = $_SESSION['user']['branch_id'];
														$sql = "select * from pharmacy where branch=? and residual > 0 and date > ? ORDER BY `pharmacy`.`name` ASC  ";
														$stm = $con->prepare($sql);
														$stm->execute(array($branch, "2022-12-31"));
														if ($stm->rowCount() > 0) {
															foreach ($stm->fetchAll() as $row) {



														?>

																<option data-type="<?php echo $row['type'] == 'old' ? 'شريط' : 'حبة'; ?>" value="<?php echo $row['id']; ?>">exporter:<?php echo $row['exporter']; ?> & <?php echo $row['name']; ?>& ^<?php echo $row['residual']; ?> </option>


														<?php

															}
														}
														?>

													</select>
												</div>


												<div class="form-group form-floating-label">
													<label>كمية العلاج التاسع</label>
													<input id="inputFloatingLabel" type="number" name="medicine_quantity_9" class="form-control input-border-bottom medicine_quantity_9" required>

												</div>


												<!-- **************************************************** -->
											<?php
											}
											if ($medicine_number == 10) {

											?>

												<div class="form-group form-floating-label">

													<label for="tokens">اسم العلاج العاشر</label>
													<select class="selectpicker form-control" name="medicine_name_10" id="tokens" data-live-search="true" required
														onchange="{let option=$(this).find(':selected'); $('.medicine_quantity_10').val('');$('.medicine_quantity_10').attr('placeholder', 'ملاحظة كمية العلاج ب ال '+option.data('type'));}">

														<option value=""></option>
														<?php
														$branch = $_SESSION['user']['branch_id'];
														$sql = "select * from pharmacy where branch=? and residual > 0 and date > ? ORDER BY `pharmacy`.`name` ASC  ";
														$stm = $con->prepare($sql);
														$stm->execute(array($branch, "2022-12-31"));
														if ($stm->rowCount() > 0) {
															foreach ($stm->fetchAll() as $row) {
														?>
																<option data-type="<?php echo $row['type'] == 'old' ? 'شريط' : 'حبة'; ?>" value="<?php echo $row['id']; ?>">exporter:<?php echo $row['exporter']; ?> & <?php echo $row['name']; ?>& ^<?php echo $row['residual']; ?> </option>


														<?php

															}
														}
														?>

													</select>
												</div>


												<div class="form-group form-floating-label">
													<label>كمية العلاج العاشر</label>
													<input id="inputFloatingLabel" type="number" name="medicine_quantity_10" class="form-control input-border-bottom medicine_quantity_10" required>

												</div>


											<?php } ?>

										</div>
									</div>
									<div class="card-action">
										<input class="btn btn-success" type="submit" name="save" value="save">
										<input class="btn btn-danger" type="reset" value="Cancel">
									</div>
								</form>
							<?php } ?>

						</div>


					</div>

				</div>
			</div>
		</div>



		<!-- Custom template | don' t include it in your project! -->

		<!-- End Custom template -->
		<?php

		include "include/footer.php";


		?>

	<?php
	//تم وضع كود في الاخير من اجل تنفيذ رسالة التحدذير
	if (isset($_POST['save'])) {
		function test_input($data)
		{
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		$medicine_number = test_input($_POST['medicine_number']);
		$date = test_input($_POST['date']);
		$code = test_input($_POST['code']);
		$branch = $_SESSION['user']['branch_id'];

		if ($branch == 6) {
			$Epilepsy = test_input($_POST['Epilepsy']);
		} else {
			$Epilepsy = "";
		}

		$sql = "select type from resption where  code=? and branch=? ORDER BY `resption`.`date` desc ";
		$stmp = $con->prepare($sql);
		$stmp->execute(array($code, $branch));
		$type = $stmp->fetch();
		$type = $type['type'];


		$user = $_SESSION['user']['id'];
		//=========================================================================================================== 			
		//للتحقق من عدد الادوية التي تم رفعها 
		$sql = "select type from resption where  code=?   and date=? and branch=? ";

		$stmps = $con->prepare($sql);
		$stmps->execute(array($code, $date, $branch));

// 		if ($stmps->rowCount() == 0) {

// 			echo '<script>swal("لم يتم تسجيل الحاله  اليوم في الاستقبال", "لم يتم رفع البيانات", {
// 					icon : "warning",
// 					buttons: {        			
// 						confirm: {
// 							className : "btn btn-warning"
// 						}
// 					},
// 				});</script>';
// 		} else
		if ($medicine_number == 1) {
			$medicine_quantity_1 = test_input($_POST['medicine_quantity_1']);
			$medicine_name_1 = test_input($_POST['medicine_name_1']);



			$sql = "select * from pharmacy where id=?   ";
			$stmq = $con->prepare($sql);
			$stmq->execute(array($medicine_name_1));
			$pharmacy_info = $stmq->fetch();
			print_r($pharmacy_info);
			$residual_pharmacy = $pharmacy_info['residual'];
			$residual = $residual_pharmacy - $medicine_quantity_1;


			$medicine_name = $pharmacy_info['name'];
			
			
			$quantity_name = $medicine_name . "    " . $medicine_quantity_1 . " (" . ($pharmacy_info['type'] == 'old' ? 'شريط' : 'حبة') . ")";

echo $quantity_name;
			if ($residual_pharmacy < $medicine_quantity_1) {
				echo '<script>swal("لايمكن الصرف لان الكمية التي حددتها اكبر من الكمية الموجودة في المخازن", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($user)) {
				echo '<script>swal("يرجاء اعادة تسجيل الدخول   ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($medicine_quantity_1 < 0) {
				echo '<script>swal(" يرجاء ان تكون  كمية العلاج الاول  قيمة موجبة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($date)) {


				echo '<script>swal("يرجاء ادخال  تاريخ ادخال البيانات ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
			} elseif (empty($code)) {


				echo '<script>swal("يرجاء ادخال  كود الحالة ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
			} elseif (!is_numeric($code)) {


				echo '<script>swal("   رقم كود الحالة يجب  ان يكون اراقم", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
			} elseif (empty($medicine_name_1)) {


				echo '<script>swal("يرجاء ادخال اسم العلاج ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
			} elseif (!is_numeric($medicine_name_1)) {


				echo '<script>swal("اسم العلاج لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
			} elseif (empty($medicine_quantity_1)) {


				echo '<script>swal("يرجاء ادخال كمية العلاج ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
			} elseif (!is_numeric($medicine_quantity_1)) {


				echo '<script>swal("كمية العلاج  يجب ان يكون اراقم", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
			} else {
				$sql = "select * from pure_pharmacy where date=? and code=?";
				$stm = $con->prepare($sql);
				$stm->execute(array($date, $code));
				if ($stm->rowCount()) {

					echo '<script>swal("لا يمكن صرف العلاج مرتين في نفس اليوم لنفس الحالة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
				} else {
					$query = "INSERT INTO pure_pharmacy(branch,name,code,date,quantity,sender_name,type,Epilepsy)
					values (?,?,?,?,?,?,?,?) ";
					$stm = $con->prepare($query);
					$stm->execute(array($branch, $medicine_name_1, $code, $date, $quantity_name, $user, $type, $Epilepsy));
					if ($stm->rowCount()) {


						$query = "UPDATE  pharmacy set residual=? where id=?  ";
						$stm = $con->prepare($query);
						$stm->execute(array($residual, $medicine_name_1));

						if ($stm->rowCount()) {
							echo '<script src="js/send_success.js"></script>';
						} else {
							echo '<script src="js/send_error.js"></script>';
						}
					} else {
						echo '<script src="js/send_error.js"></script>';
					}
				}
			}


			//=========================================================================================================== 
		} elseif ($medicine_number == 2) {
			$medicine_quantity_1 = test_input($_POST['medicine_quantity_1']);
			$medicine_name_1 = test_input($_POST['medicine_name_1']);

			$medicine_quantity_2 = test_input($_POST['medicine_quantity_2']);
			$medicine_name_2 = test_input($_POST['medicine_name_2']);


			$sql = "select * from pharmacy where id=? ";
			$stmq = $con->prepare($sql);
			$stmq->execute(array($medicine_name_1));
			$pharmacy_info_1 = $stmq->fetch();
			$residual_pharmacy_1 = $pharmacy_info_1['residual'];
			// *************************************
			$sql = "select * from pharmacy where id=? ";
			$stmq = $con->prepare($sql);
			$stmq->execute(array($medicine_name_2));
			$pharmacy_info_2 = $stmq->fetch();
			$residual_pharmacy_2 = $pharmacy_info_2['residual'];
			// ***********************************************
			$residual_1 = $residual_pharmacy_1 - $medicine_quantity_1;
			$residual_2 = $residual_pharmacy_2 - $medicine_quantity_2;
			$name = $medicine_name_1 . "," . $medicine_name_2;


			$medicine_1 = $pharmacy_info_1['name'];
			$medicine_2 = $pharmacy_info_2['name'];
			$quantity_name = $medicine_1 . "    " . $medicine_quantity_1 . " (" . $pharmacy_info['type'] == 'old' ? 'شريط' : 'حبة' . ")" . "," . ($medicine_2 . "  " . $medicine_quantity_2 . " (" . $pharmacy_info_2['type'] == 'old' ? 'شريط' : 'حبة' . ")");

			if ($medicine_name_2 == $medicine_name_1) {
				echo '<script>swal("لا يمكن اختيار نفس العلاج مرتين لنفس الحالة", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($residual_pharmacy_1 < $medicine_quantity_1) {
				echo '<script>swal("لايمكن الصرف لان الكمية التي حددتها اكبر من الكمية الموجودة في المخازن  للعلاج الاول", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($residual_pharmacy_2 < $medicine_quantity_2) {
				echo '<script>swal("لايمكن الصرف لان الكمية التي حددتها اكبر من الكمية الموجودة في المخازن للعلاج الثاني", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($user)) {
				echo '<script>swal("يرجاء اعادة تسجيل الدخول   ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($medicine_quantity_1 < 0) {
				echo '<script>swal(" يرجاء ان تكون  كمية العلاج الاول  قيمة موجبة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($medicine_quantity_2 < 0) {
				echo '<script>swal(" يرجاء ان تكون  كمية العلاج الثاني  قيمة موجبة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($date)) {


				echo '<script>swal("يرجاء ادخال  تاريخ ادخال البيانات ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($code)) {


				echo '<script>swal("يرجاء ادخال  كود الحالة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($code)) {


				echo '<script>swal("   رقم كود الحالة يجب  ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_name_1)) {


				echo '<script>swal("يرجاء ادخال اسم العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_name_1)) {


				echo '<script>swal("اسم العلاج لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_quantity_1)) {


				echo '<script>swal("يرجاء ادخال كمية العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_quantity_1)) {


				echo '<script>swal("كمية العلاج  يجب ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_name_2)) {


				echo '<script>swal("يرجاء ادخال اسم العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_name_2)) {


				echo '<script>swal("اسم العلاج لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_quantity_2)) {


				echo '<script>swal("يرجاء ادخال كمية العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_quantity_2)) {


				echo '<script>swal("كمية العلاج  يجب ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} else {
				$sql = "select * from pure_pharmacy where date=? and code=? and branch=?";
				$stm = $con->prepare($sql);
				$stm->execute(array($date, $code, $branch));
				if ($stm->rowCount()) {

					echo '<script>swal("لا يمكن صرف العلاج مرتين في نفس اليوم لنفس الحالة ", "لم يتم رفع البيانات", {
							icon : "warning",
							buttons: {        			
								confirm: {
									className : "btn btn-warning"
								}
							},
						});</script>';
				} else {
					$query = "INSERT INTO pure_pharmacy(branch,name,code,date,quantity,sender_name,type,Epilepsy)
						values (?,?,?,?,?,?,?,?) ";
					$stm = $con->prepare($query);
					$stm->execute(array($branch, $name, $code, $date, $quantity_name, $user, $type, $Epilepsy));
					if ($stm->rowCount()) {


						$query = "UPDATE  pharmacy set residual=? where id=?  ";
						$stm = $con->prepare($query);
						$stm->execute(array($residual_1, $medicine_name_1));

						if ($stm->rowCount()) {
							echo '<script src="js/send_success.js"></script>';
						} else {
							echo '<script src="js/send_error.js"></script>';
						}

						$query = "UPDATE  pharmacy set residual=? where id=?  ";
						$stm = $con->prepare($query);
						$stm->execute(array($residual_2, $medicine_name_2));

						if ($stm->rowCount()) {
							echo '<script src="js/send_success.js"></script>';
						} else {
							echo '<script src="js/send_error.js"></script>';
						}
					} else {
						echo '<script src="js/send_error.js"></script>';
					}
				}
			}
		}
		//=========================================================================================================== 
		elseif ($medicine_number == 3) {
			$medicine_quantity_1 = test_input($_POST['medicine_quantity_1']);
			$medicine_name_1 = test_input($_POST['medicine_name_1']);

			$medicine_quantity_2 = test_input($_POST['medicine_quantity_2']);
			$medicine_name_2 = test_input($_POST['medicine_name_2']);

			$medicine_quantity_3 = test_input($_POST['medicine_quantity_3']);
			$medicine_name_3 = test_input($_POST['medicine_name_3']);

			$sql = "select * from pharmacy where id=? ";
			$stmq = $con->prepare($sql);
			$stmq->execute(array($medicine_name_1));
			$pharmacy_info_1 = $stmq->fetch();
			$residual_pharmacy_1 = $pharmacy_info_1['residual'];
			// *************************************
			$sql = "select * from pharmacy where id=? ";
			$stmq = $con->prepare($sql);
			$stmq->execute(array($medicine_name_2));
			$pharmacy_info_2 = $stmq->fetch();
			$residual_pharmacy_2 = $pharmacy_info_2['residual'];
			// ***********************************************
			$sql = "select * from pharmacy where id=? ";
			$stmq = $con->prepare($sql);
			$stmq->execute(array($medicine_name_3));
			$pharmacy_info_3 = $stmq->fetch();
			$residual_pharmacy_3 = $pharmacy_info_3['residual'];
			// ***********************************************
			$residual_1 = $residual_pharmacy_1 - $medicine_quantity_1;
			$residual_2 = $residual_pharmacy_2 - $medicine_quantity_2;
			$residual_3 = $residual_pharmacy_3 - $medicine_quantity_3;

			$name = $medicine_name_1 . "," . $medicine_name_2 . "," . $medicine_name_3;


			$medicine_1 = $pharmacy_info_1['name'];
			$medicine_2 = $pharmacy_info_2['name'];
			$medicine_3 = $pharmacy_info_3['name'];

			$quantity_name = ($medicine_1 . "    " . $medicine_quantity_1 . " (" . $pharmacy_info['type'] == 'old' ? 'شريط' : 'حبة' . ")") . "," . ($medicine_2 . "  " . $medicine_quantity_2 . " (" . $pharmacy_info_2['type'] == 'old' ? 'شريط' : 'حبة' . ")") . "," . ($medicine_3 . "  " . $medicine_quantity_3 . " (" . $pharmacy_info_3['type'] == 'old' ? 'شريط' : 'حبة' . ")");

			if ($medicine_name_1 == $medicine_name_2 || $medicine_name_1 == $medicine_name_3 || $medicine_name_2 == $medicine_name_3) {
				echo '<script>swal("لا يمكن اختيار نفس العلاج مرتين لنفس الحالة", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($residual_pharmacy_1 < $medicine_quantity_1) {
				echo '<script>swal("لايمكن الصرف لان الكمية التي حددتها اكبر من الكمية الموجودة في المخازن  للعلاج الاول", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($residual_pharmacy_2 < $medicine_quantity_2) {
				echo '<script>swal("لايمكن الصرف لان الكمية التي حددتها اكبر من الكمية الموجودة في المخازن للعلاج الثاني", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($residual_pharmacy_3 < $medicine_quantity_3) {
				echo '<script>swal("لايمكن الصرف لان الكمية التي حددتها اكبر من الكمية الموجودة في المخازن للعلاج الثالث", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($user)) {
				echo '<script>swal("يرجاء اعادة تسجيل الدخول   ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($medicine_quantity_1 < 0) {
				echo '<script>swal(" يرجاء ان تكون  كمية العلاج الاول  قيمة موجبة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($medicine_quantity_2 < 0) {
				echo '<script>swal(" يرجاء ان تكون  كمية العلاج الثاني  قيمة موجبة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($medicine_quantity_3 < 0) {
				echo '<script>swal(" يرجاء ان تكون  كمية العلاج الثالث  قيمة موجبة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($date)) {


				echo '<script>swal("يرجاء ادخال  تاريخ ادخال البيانات ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($code)) {


				echo '<script>swal("يرجاء ادخال  كود الحالة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($code)) {


				echo '<script>swal("   رقم كود الحالة يجب  ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_name_1)) {


				echo '<script>swal("يرجاء ادخال اسم العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_name_1)) {


				echo '<script>swal("اسم العلاج لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_quantity_1)) {


				echo '<script>swal("يرجاء ادخال كمية العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_quantity_1)) {


				echo '<script>swal("كمية العلاج  يجب ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_name_2)) {


				echo '<script>swal("يرجاء ادخال اسم العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_name_2)) {


				echo '<script>swal("اسم العلاج لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_quantity_2)) {


				echo '<script>swal("يرجاء ادخال كمية العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_quantity_2)) {


				echo '<script>swal("كمية العلاج  يجب ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_name_3)) {


				echo '<script>swal("يرجاء ادخال اسم العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_name_3)) {


				echo '<script>swal("اسم العلاج لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_quantity_3)) {


				echo '<script>swal("يرجاء ادخال كمية العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_quantity_3)) {


				echo '<script>swal("كمية العلاج  يجب ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} else {
				$sql = "select * from pure_pharmacy where date=? and code=? and branch=?";
				$stm = $con->prepare($sql);
				$stm->execute(array($date, $code, $branch));
				if ($stm->rowCount()) {

					echo '<script>swal("لا يمكن صرف العلاج مرتين في نفس اليوم لنفس الحالة ", "لم يتم رفع البيانات", {
							icon : "warning",
							buttons: {        			
								confirm: {
									className : "btn btn-warning"
								}
							},
						});</script>';
				} else {
					$query = "INSERT INTO pure_pharmacy(branch,name,code,date,quantity,sender_name,type,Epilepsy)
						values (?,?,?,?,?,?,?,?) ";
					$stm = $con->prepare($query);
					$stm->execute(array($branch, $name, $code, $date, $quantity_name, $user, $type, $Epilepsy));
					if ($stm->rowCount()) {


						$query = "UPDATE  pharmacy set residual=? where id=?  ";
						$stm = $con->prepare($query);
						$stm->execute(array($residual_1, $medicine_name_1));

						if ($stm->rowCount()) {
							echo '<script src="js/send_success.js"></script>';
						} else {
							echo '<script src="js/send_error.js"></script>';
						}

						$query = "UPDATE  pharmacy set residual=? where id=?  ";
						$stm = $con->prepare($query);
						$stm->execute(array($residual_2, $medicine_name_2));

						if ($stm->rowCount()) {
							echo '<script src="js/send_success.js"></script>';
						} else {
							echo '<script src="js/send_error.js"></script>';
						}

						$query = "UPDATE  pharmacy set residual=? where id=?  ";
						$stm = $con->prepare($query);
						$stm->execute(array($residual_3, $medicine_name_3));

						if ($stm->rowCount()) {
							echo '<script src="js/send_success.js"></script>';
						} else {
							echo '<script src="js/send_error.js"></script>';
						}
					} else {
						echo '<script src="js/send_error.js"></script>';
					}
				}
			}
		}
		//=========================================================================================================== 
		elseif ($medicine_number == 4) {
			$medicine_quantity_1 = test_input($_POST['medicine_quantity_1']);
			$medicine_name_1 = test_input($_POST['medicine_name_1']);

			$medicine_quantity_2 = test_input($_POST['medicine_quantity_2']);
			$medicine_name_2 = test_input($_POST['medicine_name_2']);

			$medicine_quantity_3 = test_input($_POST['medicine_quantity_3']);
			$medicine_name_3 = test_input($_POST['medicine_name_3']);

			$medicine_quantity_4 = test_input($_POST['medicine_quantity_4']);
			$medicine_name_4 = test_input($_POST['medicine_name_4']);




			$sql = "select * from pharmacy where id=? ";
			$stmq = $con->prepare($sql);
			$stmq->execute(array($medicine_name_1));
			$pharmacy_info_1 = $stmq->fetch();
			$residual_pharmacy_1 = $pharmacy_info_1['residual'];
			// *************************************
			$sql = "select * from pharmacy where id=? ";
			$stmq = $con->prepare($sql);
			$stmq->execute(array($medicine_name_2));
			$pharmacy_info_2 = $stmq->fetch();
			$residual_pharmacy_2 = $pharmacy_info_2['residual'];
			// ***********************************************
			$sql = "select * from pharmacy where id=? ";
			$stmq = $con->prepare($sql);
			$stmq->execute(array($medicine_name_3));
			$pharmacy_info_3 = $stmq->fetch();
			$residual_pharmacy_3 = $pharmacy_info_3['residual'];
			// ***********************************************
			$sql = "select * from pharmacy where id=? ";
			$stmq = $con->prepare($sql);
			$stmq->execute(array($medicine_name_4));
			$pharmacy_info_4 = $stmq->fetch();
			$residual_pharmacy_4 = $pharmacy_info_4['residual'];
			// ***********************************************
			$residual_1 = $residual_pharmacy_1 - $medicine_quantity_1;
			$residual_2 = $residual_pharmacy_2 - $medicine_quantity_2;
			$residual_3 = $residual_pharmacy_3 - $medicine_quantity_3;
			$residual_4 = $residual_pharmacy_4 - $medicine_quantity_4;

			$name = $medicine_name_1 . "," . $medicine_name_2 . "," . $medicine_name_3 . "," . $medicine_name_4;


			$medicine_1 = $pharmacy_info_1['name'];
			$medicine_2 = $pharmacy_info_2['name'];
			$medicine_3 = $pharmacy_info_3['name'];
			$medicine_4 = $pharmacy_info_4['name'];

			$quantity_name = ($medicine_1 . "    " . $medicine_quantity_1 . " (" . $pharmacy_info['type'] == 'old' ? 'شريط' : 'حبة' . ")") . "," . ($medicine_2 . "  " . $medicine_quantity_2 . " (" . $pharmacy_info_2['type'] == 'old' ? 'شريط' : 'حبة' . ")") . "," . ($medicine_3 . "  " . $medicine_quantity_3 . " (" . $pharmacy_info_3['type'] == 'old' ? 'شريط' : 'حبة' . ")") . "," . ($medicine_4 . "  " . $medicine_quantity_4 . " (" . $pharmacy_info_4['type'] == 'old' ? 'شريط' : 'حبة' . ")");

			if ($medicine_name_1 == $medicine_name_2 || $medicine_name_1 == $medicine_name_3 || $medicine_name_1 == $medicine_name_4 || $medicine_name_2 == $medicine_name_3 || $medicine_name_2 == $medicine_name_4 || $medicine_name_3 == $medicine_name_4) {
				echo '<script>swal("لا يمكن اختيار نفس العلاج مرتين لنفس الحالة", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($residual_pharmacy_1 < $medicine_quantity_1) {
				echo '<script>swal("لايمكن الصرف لان الكمية التي حددتها اكبر من الكمية الموجودة في المخازن  للعلاج الاول", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($residual_pharmacy_2 < $medicine_quantity_2) {
				echo '<script>swal("لايمكن الصرف لان الكمية التي حددتها اكبر من الكمية الموجودة في المخازن للعلاج الثاني", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($residual_pharmacy_3 < $medicine_quantity_3) {
				echo '<script>swal("لايمكن الصرف لان الكمية التي حددتها اكبر من الكمية الموجودة في المخازن للعلاج الثالث", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($residual_pharmacy_4 < $medicine_quantity_4) {
				echo '<script>swal("لايمكن الصرف لان الكمية التي حددتها اكبر من الكمية الموجودة في المخازن للعلاج الرابع", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($user)) {
				echo '<script>swal("يرجاء اعادة تسجيل الدخول   ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($medicine_quantity_1 < 0) {
				echo '<script>swal(" يرجاء ان تكون  كمية العلاج الاول  قيمة موجبة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($medicine_quantity_2 < 0) {
				echo '<script>swal(" يرجاء ان تكون  كمية العلاج الثاني  قيمة موجبة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($medicine_quantity_3 < 0) {
				echo '<script>swal(" يرجاء ان تكون  كمية العلاج الثالث  قيمة موجبة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($medicine_quantity_4 < 0) {
				echo '<script>swal(" يرجاء ان تكون  كمية العلاج الرابع  قيمة موجبة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($date)) {


				echo '<script>swal("يرجاء ادخال  تاريخ ادخال البيانات ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($code)) {


				echo '<script>swal("يرجاء ادخال  كود الحالة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($code)) {


				echo '<script>swal("   رقم كود الحالة يجب  ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_name_1)) {


				echo '<script>swal("يرجاء ادخال اسم العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_name_1)) {


				echo '<script>swal("اسم العلاج لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_quantity_1)) {


				echo '<script>swal("يرجاء ادخال كمية العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_quantity_1)) {


				echo '<script>swal("كمية العلاج  يجب ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_name_2)) {


				echo '<script>swal("يرجاء ادخال اسم العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_name_2)) {


				echo '<script>swal("اسم العلاج لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_quantity_2)) {


				echo '<script>swal("يرجاء ادخال كمية العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_quantity_2)) {


				echo '<script>swal("كمية العلاج  يجب ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_name_3)) {


				echo '<script>swal("يرجاء ادخال اسم العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_name_3)) {


				echo '<script>swal("اسم العلاج لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_quantity_3)) {


				echo '<script>swal("يرجاء ادخال كمية العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_quantity_3)) {


				echo '<script>swal("كمية العلاج  يجب ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_name_4)) {


				echo '<script>swal("يرجاء ادخال اسم العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_name_4)) {


				echo '<script>swal("اسم العلاج لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_quantity_4)) {


				echo '<script>swal("يرجاء ادخال كمية العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_quantity_4)) {


				echo '<script>swal("كمية العلاج  يجب ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} else {
				$sql = "select * from pure_pharmacy where date=? and code=? and branch=?";
				$stm = $con->prepare($sql);
				$stm->execute(array($date, $code, $branch));
				if ($stm->rowCount()) {

					echo '<script>swal("لا يمكن صرف العلاج مرتين في نفس اليوم لنفس الحالة ", "لم يتم رفع البيانات", {
							icon : "warning",
							buttons: {        			
								confirm: {
									className : "btn btn-warning"
								}
							},
						});</script>';
				} else {
					$query = "INSERT INTO pure_pharmacy(branch,name,code,date,quantity,sender_name,type,Epilepsy)
						values (?,?,?,?,?,?,?,?) ";
					$stm = $con->prepare($query);
					$stm->execute(array($branch, $name, $code, $date, $quantity_name, $user, $type, $Epilepsy));
					if ($stm->rowCount()) {


						$query = "UPDATE  pharmacy set residual=? where id=?  ";
						$stm = $con->prepare($query);
						$stm->execute(array($residual_1, $medicine_name_1));

						if ($stm->rowCount()) {
							echo '<script src="js/send_success.js"></script>';
						} else {
							echo '<script src="js/send_error.js"></script>';
						}

						$query = "UPDATE  pharmacy set residual=? where id=?  ";
						$stm = $con->prepare($query);
						$stm->execute(array($residual_2, $medicine_name_2));

						if ($stm->rowCount()) {
							echo '<script src="js/send_success.js"></script>';
						} else {
							echo '<script src="js/send_error.js"></script>';
						}

						$query = "UPDATE  pharmacy set residual=? where id=?  ";
						$stm = $con->prepare($query);
						$stm->execute(array($residual_3, $medicine_name_3));

						if ($stm->rowCount()) {
							echo '<script src="js/send_success.js"></script>';
						} else {
							echo '<script src="js/send_error.js"></script>';
						}
						$query = "UPDATE  pharmacy set residual=? where id=?  ";
						$stm = $con->prepare($query);
						$stm->execute(array($residual_4, $medicine_name_4));

						if ($stm->rowCount()) {
							echo '<script src="js/send_success.js"></script>';
						} else {
							echo '<script src="js/send_error.js"></script>';
						}
					} else {
						echo '<script src="js/send_error.js"></script>';
					}
				}
			}
		}
		//=========================================================================================================== 
		elseif ($medicine_number == 5) {
			$medicine_quantity_1 = test_input($_POST['medicine_quantity_1']);
			$medicine_name_1 = test_input($_POST['medicine_name_1']);

			$medicine_quantity_2 = test_input($_POST['medicine_quantity_2']);
			$medicine_name_2 = test_input($_POST['medicine_name_2']);

			$medicine_quantity_3 = test_input($_POST['medicine_quantity_3']);
			$medicine_name_3 = test_input($_POST['medicine_name_3']);

			$medicine_quantity_4 = test_input($_POST['medicine_quantity_4']);
			$medicine_name_4 = test_input($_POST['medicine_name_4']);

			$medicine_quantity_5 = test_input($_POST['medicine_quantity_5']);
			$medicine_name_5 = test_input($_POST['medicine_name_5']);


			$sql = "select * from pharmacy where id=? ";
			$stmq = $con->prepare($sql);
			$stmq->execute(array($medicine_name_1));
			$pharmacy_info_1 = $stmq->fetch();
			$residual_pharmacy_1 = $pharmacy_info_1['residual'];
			// *************************************
			$sql = "select * from pharmacy where id=? ";
			$stmq = $con->prepare($sql);
			$stmq->execute(array($medicine_name_2));
			$pharmacy_info_2 = $stmq->fetch();
			$residual_pharmacy_2 = $pharmacy_info_2['residual'];
			// ***********************************************
			$sql = "select * from pharmacy where id=? ";
			$stmq = $con->prepare($sql);
			$stmq->execute(array($medicine_name_3));
			$pharmacy_info_3 = $stmq->fetch();
			$residual_pharmacy_3 = $pharmacy_info_3['residual'];
			// ***********************************************
			$sql = "select * from pharmacy where id=? ";
			$stmq = $con->prepare($sql);
			$stmq->execute(array($medicine_name_4));
			$pharmacy_info_4 = $stmq->fetch();
			$residual_pharmacy_4 = $pharmacy_info_4['residual'];
			// ***********************************************
			$sql = "select * from pharmacy where id=? ";
			$stmq = $con->prepare($sql);
			$stmq->execute(array($medicine_name_5));
			$pharmacy_info_5 = $stmq->fetch();
			$residual_pharmacy_5 = $pharmacy_info_5['residual'];
			// ***********************************************
			$residual_1 = $residual_pharmacy_1 - $medicine_quantity_1;
			$residual_2 = $residual_pharmacy_2 - $medicine_quantity_2;
			$residual_3 = $residual_pharmacy_3 - $medicine_quantity_3;
			$residual_4 = $residual_pharmacy_4 - $medicine_quantity_4;
			$residual_5 = $residual_pharmacy_5 - $medicine_quantity_5;

			$name = $medicine_name_1 . "," . $medicine_name_2 . "," . $medicine_name_3 . "," . $medicine_name_4 . "," . $medicine_name_5;


			$medicine_1 = $pharmacy_info_1['name'];
			$medicine_2 = $pharmacy_info_2['name'];
			$medicine_3 = $pharmacy_info_3['name'];
			$medicine_4 = $pharmacy_info_4['name'];
			$medicine_5 = $pharmacy_info_5['name'];

			$quantity_name = ($medicine_1 . "    " . $medicine_quantity_1 . " (" . $pharmacy_info_1['type'] == 'old' ? 'شريط' : 'حبة' . ")") . "," . ($medicine_2 . "  " . $medicine_quantity_2 . " (" . $pharmacy_info_2['type'] == 'old' ? 'شريط' : 'حبة' . ")") . "," . ($medicine_3 . "  " . $medicine_quantity_3 . " (" . $pharmacy_info_3['type'] == 'old' ? 'شريط' : 'حبة' . ")") . "," . ($medicine_4 . "  " . $medicine_quantity_4 . " (" . $pharmacy_info_4['type'] == 'old' ? 'شريط' : 'حبة' . ")") . "," . ($medicine_5 . "  " . $medicine_quantity_5 . " (" . $pharmacy_info_5['type'] == 'old' ? 'شريط' : 'حبة' . ")");

			if (
				$medicine_name_1 == $medicine_name_2 || $medicine_name_1 == $medicine_name_3 || $medicine_name_1 == $medicine_name_4 || $medicine_name_1 == $medicine_name_5 ||
				$medicine_name_2 == $medicine_name_3 || $medicine_name_2 == $medicine_name_4 || $medicine_name_2 == $medicine_name_5 ||
				$medicine_name_3 == $medicine_name_4 || $medicine_name_3 == $medicine_name_5 ||
				$medicine_name_4 == $medicine_name_5
			) {
				echo '<script>swal("لا يمكن اختيار نفس العلاج مرتين لنفس الحالة", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($residual_pharmacy_1 < $medicine_quantity_1) {
				echo '<script>swal("لايمكن الصرف لان الكمية التي حددتها اكبر من الكمية الموجودة في المخازن  للعلاج الاول", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($residual_pharmacy_2 < $medicine_quantity_2) {
				echo '<script>swal("لايمكن الصرف لان الكمية التي حددتها اكبر من الكمية الموجودة في المخازن للعلاج الثاني", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($residual_pharmacy_3 < $medicine_quantity_3) {
				echo '<script>swal("لايمكن الصرف لان الكمية التي حددتها اكبر من الكمية الموجودة في المخازن للعلاج الثالث", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($residual_pharmacy_4 < $medicine_quantity_4) {
				echo '<script>swal("لايمكن الصرف لان الكمية التي حددتها اكبر من الكمية الموجودة في المخازن للعلاج الرابع", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($residual_pharmacy_5 < $medicine_quantity_5) {
				echo '<script>swal("لايمكن الصرف لان الكمية التي حددتها اكبر من الكمية الموجودة في المخازن للعلاج الخامس", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($user)) {
				echo '<script>swal("يرجاء اعادة تسجيل الدخول   ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($medicine_quantity_1 < 0) {
				echo '<script>swal(" يرجاء ان تكون  كمية العلاج الاول  قيمة موجبة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($medicine_quantity_2 < 0) {
				echo '<script>swal(" يرجاء ان تكون  كمية العلاج الثاني  قيمة موجبة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($medicine_quantity_3 < 0) {
				echo '<script>swal(" يرجاء ان تكون  كمية العلاج الثالث  قيمة موجبة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($medicine_quantity_4 < 0) {
				echo '<script>swal(" يرجاء ان تكون  كمية العلاج الرابع  قيمة موجبة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($medicine_quantity_5 < 0) {
				echo '<script>swal(" يرجاء ان تكون  كمية العلاج الخامس  قيمة موجبة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($date)) {


				echo '<script>swal("يرجاء ادخال  تاريخ ادخال البيانات ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($code)) {


				echo '<script>swal("يرجاء ادخال  كود الحالة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($code)) {


				echo '<script>swal("   رقم كود الحالة يجب  ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_name_1)) {


				echo '<script>swal("يرجاء ادخال اسم العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_name_1)) {


				echo '<script>swal("اسم العلاج لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_quantity_1)) {


				echo '<script>swal("يرجاء ادخال كمية العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_quantity_1)) {


				echo '<script>swal("كمية العلاج  يجب ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_name_2)) {


				echo '<script>swal("يرجاء ادخال اسم العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_name_2)) {


				echo '<script>swal("اسم العلاج لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_quantity_2)) {


				echo '<script>swal("يرجاء ادخال كمية العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_quantity_2)) {


				echo '<script>swal("كمية العلاج  يجب ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_name_3)) {


				echo '<script>swal("يرجاء ادخال اسم العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_name_3)) {


				echo '<script>swal("اسم العلاج لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_quantity_3)) {


				echo '<script>swal("يرجاء ادخال كمية العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_quantity_3)) {


				echo '<script>swal("كمية العلاج  يجب ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_name_4)) {


				echo '<script>swal("يرجاء ادخال اسم العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_name_4)) {


				echo '<script>swal("اسم العلاج لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_quantity_4)) {


				echo '<script>swal("يرجاء ادخال كمية العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_quantity_4)) {


				echo '<script>swal("كمية العلاج  يجب ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_name_5)) {


				echo '<script>swal("يرجاء ادخال اسم العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_name_5)) {


				echo '<script>swal("اسم العلاج لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_quantity_5)) {


				echo '<script>swal("يرجاء ادخال كمية العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_quantity_5)) {


				echo '<script>swal("كمية العلاج  يجب ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} else {
				$sql = "select * from pure_pharmacy where date=? and code=? and branch=?";
				$stm = $con->prepare($sql);
				$stm->execute(array($date, $code, $branch));
				if ($stm->rowCount()) {

					echo '<script>swal("لا يمكن صرف العلاج مرتين في نفس اليوم لنفس الحالة ", "لم يتم رفع البيانات", {
							icon : "warning",
							buttons: {        			
								confirm: {
									className : "btn btn-warning"
								}
							},
						});</script>';
				} else {
					$query = "INSERT INTO pure_pharmacy(branch,name,code,date,quantity,sender_name,type,Epilepsy)
						values (?,?,?,?,?,?,?,?) ";
					$stm = $con->prepare($query);
					$stm->execute(array($branch, $name, $code, $date, $quantity_name, $user, $type, $Epilepsy));
					if ($stm->rowCount()) {


						$query = "UPDATE  pharmacy set residual=? where id=?  ";
						$stm = $con->prepare($query);
						$stm->execute(array($residual_1, $medicine_name_1));

						if ($stm->rowCount()) {
							echo '<script src="js/send_success.js"></script>';
						} else {
							echo '<script src="js/send_error.js"></script>';
						}

						$query = "UPDATE  pharmacy set residual=? where id=?  ";
						$stm = $con->prepare($query);
						$stm->execute(array($residual_2, $medicine_name_2));

						if ($stm->rowCount()) {
							echo '<script src="js/send_success.js"></script>';
						} else {
							echo '<script src="js/send_error.js"></script>';
						}

						$query = "UPDATE  pharmacy set residual=? where id=?  ";
						$stm = $con->prepare($query);
						$stm->execute(array($residual_3, $medicine_name_3));

						if ($stm->rowCount()) {
							echo '<script src="js/send_success.js"></script>';
						} else {
							echo '<script src="js/send_error.js"></script>';
						}

						$query = "UPDATE  pharmacy set residual=? where id=?  ";
						$stm = $con->prepare($query);
						$stm->execute(array($residual_4, $medicine_name_4));

						if ($stm->rowCount()) {
							echo '<script src="js/send_success.js"></script>';
						} else {
							echo '<script src="js/send_error.js"></script>';
						}

						$query = "UPDATE  pharmacy set residual=? where id=?  ";
						$stm = $con->prepare($query);
						$stm->execute(array($residual_5, $medicine_name_5));

						if ($stm->rowCount()) {
							echo '<script src="js/send_success.js"></script>';
						} else {
							echo '<script src="js/send_error.js"></script>';
						}
					} else {
						echo '<script src="js/send_error.js"></script>';
					}
				}
			}
		}
		//=========================================================================================================== 
		elseif ($medicine_number == 6) {
			$medicine_quantity_1 = test_input($_POST['medicine_quantity_1']);
			$medicine_name_1 = test_input($_POST['medicine_name_1']);

			$medicine_quantity_2 = test_input($_POST['medicine_quantity_2']);
			$medicine_name_2 = test_input($_POST['medicine_name_2']);

			$medicine_quantity_3 = test_input($_POST['medicine_quantity_3']);
			$medicine_name_3 = test_input($_POST['medicine_name_3']);

			$medicine_quantity_4 = test_input($_POST['medicine_quantity_4']);
			$medicine_name_4 = test_input($_POST['medicine_name_4']);

			$medicine_quantity_5 = test_input($_POST['medicine_quantity_5']);
			$medicine_name_5 = test_input($_POST['medicine_name_5']);

			$medicine_quantity_6 = test_input($_POST['medicine_quantity_6']);
			$medicine_name_6 = test_input($_POST['medicine_name_6']);




			$sql = "select * from pharmacy where id=? ";
			$stmq = $con->prepare($sql);
			$stmq->execute(array($medicine_name_1));
			$pharmacy_info_1 = $stmq->fetch();
			$residual_pharmacy_1 = $pharmacy_info_1['residual'];
			// *************************************
			$sql = "select * from pharmacy where id=? ";
			$stmq = $con->prepare($sql);
			$stmq->execute(array($medicine_name_2));
			$pharmacy_info_2 = $stmq->fetch();
			$residual_pharmacy_2 = $pharmacy_info_2['residual'];
			// ***********************************************
			$sql = "select * from pharmacy where id=? ";
			$stmq = $con->prepare($sql);
			$stmq->execute(array($medicine_name_3));
			$pharmacy_info_3 = $stmq->fetch();
			$residual_pharmacy_3 = $pharmacy_info_3['residual'];
			// ***********************************************
			$sql = "select * from pharmacy where id=? ";
			$stmq = $con->prepare($sql);
			$stmq->execute(array($medicine_name_4));
			$pharmacy_info_4 = $stmq->fetch();
			$residual_pharmacy_4 = $pharmacy_info_4['residual'];
			// ***********************************************
			$sql = "select * from pharmacy where id=? ";
			$stmq = $con->prepare($sql);
			$stmq->execute(array($medicine_name_5));
			$pharmacy_info_5 = $stmq->fetch();
			$residual_pharmacy_5 = $pharmacy_info_5['residual'];
			// ***********************************************
			$sql = "select * from pharmacy where id=? ";
			$stmq = $con->prepare($sql);
			$stmq->execute(array($medicine_name_6));
			$pharmacy_info_6 = $stmq->fetch();
			$residual_pharmacy_6 = $pharmacy_info_6['residual'];
			// ***********************************************
			$residual_1 = $residual_pharmacy_1 - $medicine_quantity_1;
			$residual_2 = $residual_pharmacy_2 - $medicine_quantity_2;
			$residual_3 = $residual_pharmacy_3 - $medicine_quantity_3;
			$residual_4 = $residual_pharmacy_4 - $medicine_quantity_4;
			$residual_5 = $residual_pharmacy_5 - $medicine_quantity_5;
			$residual_6 = $residual_pharmacy_6 - $medicine_quantity_6;

			$name = $medicine_name_1 . "," . $medicine_name_2 . "," . $medicine_name_3 . "," . $medicine_name_4 . "," . $medicine_name_5 . "," . $medicine_name_6;


			$medicine_1 = $pharmacy_info_1['name'];
			$medicine_2 = $pharmacy_info_2['name'];
			$medicine_3 = $pharmacy_info_3['name'];
			$medicine_4 = $pharmacy_info_4['name'];
			$medicine_5 = $pharmacy_info_5['name'];
			$medicine_6 = $pharmacy_info_6['name'];

			$quantity_name =
				($medicine_1 . "    " . $medicine_quantity_1 . " (" . ($pharmacy_info_1['type'] == 'old' ? 'شريط' : 'حبة') . ")") . "," .
				($medicine_2 . "  " . $medicine_quantity_2 . " (" . ($pharmacy_info_2['type'] == 'old' ? 'شريط' : 'حبة') . ")") . "," .
				($medicine_3 . "  " . $medicine_quantity_3 . " (" . ($pharmacy_info_3['type'] == 'old' ? 'شريط' : 'حبة') . ")") . "," .
				($medicine_4 . "  " . $medicine_quantity_4 . " (" . ($pharmacy_info_4['type'] == 'old' ? 'شريط' : 'حبة') . ")") . "," .
				($medicine_5 . "  " . $medicine_quantity_5 . " (" . ($pharmacy_info_5['type'] == 'old' ? 'شريط' : 'حبة') . ")") . "," .
				($medicine_6 . "  " . $medicine_quantity_6 . " (" . ($pharmacy_info_6['type'] == 'old' ? 'شريط' : 'حبة') . ")");

			if (
				$medicine_name_1 == $medicine_name_2 || $medicine_name_1 == $medicine_name_3 || $medicine_name_1 == $medicine_name_4 || $medicine_name_1 == $medicine_name_5 || $medicine_name_1 == $medicine_name_6 ||
				$medicine_name_2 == $medicine_name_3 || $medicine_name_2 == $medicine_name_4 || $medicine_name_2 == $medicine_name_5 || $medicine_name_2 == $medicine_name_6 ||
				$medicine_name_3 == $medicine_name_4 || $medicine_name_3 == $medicine_name_5 || $medicine_name_3 == $medicine_name_6 ||
				$medicine_name_4 == $medicine_name_5 || $medicine_name_4 == $medicine_name_6 ||
				$medicine_name_5 == $medicine_name_6
			) {
				echo '<script>swal("لا يمكن اختيار نفس العلاج مرتين لنفس الحالة", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($residual_pharmacy_1 < $medicine_quantity_1) {
				echo '<script>swal("لايمكن الصرف لان الكمية التي حددتها اكبر من الكمية الموجودة في المخازن  للعلاج الاول", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($residual_pharmacy_2 < $medicine_quantity_2) {
				echo '<script>swal("لايمكن الصرف لان الكمية التي حددتها اكبر من الكمية الموجودة في المخازن للعلاج الثاني", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($residual_pharmacy_3 < $medicine_quantity_3) {
				echo '<script>swal("لايمكن الصرف لان الكمية التي حددتها اكبر من الكمية الموجودة في المخازن للعلاج الثالث", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($residual_pharmacy_4 < $medicine_quantity_4) {
				echo '<script>swal("لايمكن الصرف لان الكمية التي حددتها اكبر من الكمية الموجودة في المخازن للعلاج الرابع", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($residual_pharmacy_5 < $medicine_quantity_5) {
				echo '<script>swal("لايمكن الصرف لان الكمية التي حددتها اكبر من الكمية الموجودة في المخازن للعلاج الخامس", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($residual_pharmacy_6 < $medicine_quantity_6) {
				echo '<script>swal("لايمكن الصرف لان الكمية التي حددتها اكبر من الكمية الموجودة في المخازن للعلاج السادس", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($user)) {
				echo '<script>swal("يرجاء اعادة تسجيل الدخول   ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($medicine_quantity_1 < 0) {
				echo '<script>swal(" يرجاء ان تكون  كمية العلاج الاول  قيمة موجبة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($medicine_quantity_2 < 0) {
				echo '<script>swal(" يرجاء ان تكون  كمية العلاج الثاني  قيمة موجبة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($medicine_quantity_3 < 0) {
				echo '<script>swal(" يرجاء ان تكون  كمية العلاج الثالث  قيمة موجبة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($medicine_quantity_4 < 0) {
				echo '<script>swal(" يرجاء ان تكون  كمية العلاج الرابع  قيمة موجبة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($medicine_quantity_5 < 0) {
				echo '<script>swal(" يرجاء ان تكون  كمية العلاج الخامس  قيمة موجبة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($medicine_quantity_6 < 0) {
				echo '<script>swal(" يرجاء ان تكون  كمية العلاج السادس  قيمة موجبة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($date)) {


				echo '<script>swal("يرجاء ادخال  تاريخ ادخال البيانات ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($code)) {


				echo '<script>swal("يرجاء ادخال  كود الحالة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($code)) {


				echo '<script>swal("   رقم كود الحالة يجب  ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_name_1)) {


				echo '<script>swal("يرجاء ادخال اسم العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_name_1)) {


				echo '<script>swal("اسم العلاج لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_quantity_1)) {


				echo '<script>swal("يرجاء ادخال كمية العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_quantity_1)) {


				echo '<script>swal("كمية العلاج  يجب ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_name_2)) {


				echo '<script>swal("يرجاء ادخال اسم العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_name_2)) {


				echo '<script>swal("اسم العلاج لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_quantity_2)) {


				echo '<script>swal("يرجاء ادخال كمية العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_quantity_2)) {


				echo '<script>swal("كمية العلاج  يجب ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_name_3)) {


				echo '<script>swal("يرجاء ادخال اسم العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_name_3)) {


				echo '<script>swal("اسم العلاج لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_quantity_3)) {


				echo '<script>swal("يرجاء ادخال كمية العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_quantity_3)) {


				echo '<script>swal("كمية العلاج  يجب ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_name_4)) {


				echo '<script>swal("يرجاء ادخال اسم العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_name_4)) {


				echo '<script>swal("اسم العلاج لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_quantity_4)) {


				echo '<script>swal("يرجاء ادخال كمية العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_quantity_4)) {


				echo '<script>swal("كمية العلاج  يجب ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_name_5)) {


				echo '<script>swal("يرجاء ادخال اسم العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_name_5)) {


				echo '<script>swal("اسم العلاج لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_quantity_5)) {


				echo '<script>swal("يرجاء ادخال كمية العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_quantity_5)) {


				echo '<script>swal("كمية العلاج  يجب ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_name_6)) {


				echo '<script>swal("يرجاء ادخال اسم العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_name_6)) {


				echo '<script>swal("اسم العلاج لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_quantity_6)) {


				echo '<script>swal("يرجاء ادخال كمية العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_quantity_6)) {


				echo '<script>swal("كمية العلاج  يجب ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} else {
				$sql = "select * from pure_pharmacy where date=? and code=? and branch=?";
				$stm = $con->prepare($sql);
				$stm->execute(array($date, $code, $branch));
				if ($stm->rowCount()) {

					echo '<script>swal("لا يمكن صرف العلاج مرتين في نفس اليوم لنفس الحالة ", "لم يتم رفع البيانات", {
							icon : "warning",
							buttons: {        			
								confirm: {
									className : "btn btn-warning"
								}
							},
						});</script>';
				} else {
					$query = "INSERT INTO pure_pharmacy(branch,name,code,date,quantity,sender_name,type,Epilepsy)
						values (?,?,?,?,?,?,?,?) ";
					$stm = $con->prepare($query);
					$stm->execute(array($branch, $name, $code, $date, $quantity_name, $user, $type, $Epilepsy));
					if ($stm->rowCount()) {


						$query = "UPDATE  pharmacy set residual=? where id=?  ";
						$stm = $con->prepare($query);
						$stm->execute(array($residual_1, $medicine_name_1));

						if ($stm->rowCount()) {
							echo '<script src="js/send_success.js"></script>';
						} else {
							echo '<script src="js/send_error.js"></script>';
						}

						$query = "UPDATE  pharmacy set residual=? where id=?  ";
						$stm = $con->prepare($query);
						$stm->execute(array($residual_2, $medicine_name_2));

						if ($stm->rowCount()) {
							echo '<script src="js/send_success.js"></script>';
						} else {
							echo '<script src="js/send_error.js"></script>';
						}

						$query = "UPDATE  pharmacy set residual=? where id=?  ";
						$stm = $con->prepare($query);
						$stm->execute(array($residual_3, $medicine_name_3));

						if ($stm->rowCount()) {
							echo '<script src="js/send_success.js"></script>';
						} else {
							echo '<script src="js/send_error.js"></script>';
						}

						$query = "UPDATE  pharmacy set residual=? where id=?  ";
						$stm = $con->prepare($query);
						$stm->execute(array($residual_4, $medicine_name_4));

						if ($stm->rowCount()) {
							echo '<script src="js/send_success.js"></script>';
						} else {
							echo '<script src="js/send_error.js"></script>';
						}

						$query = "UPDATE  pharmacy set residual=? where id=?  ";
						$stm = $con->prepare($query);
						$stm->execute(array($residual_5, $medicine_name_5));

						if ($stm->rowCount()) {
							echo '<script src="js/send_success.js"></script>';
						} else {
							echo '<script src="js/send_error.js"></script>';
						}

						$query = "UPDATE  pharmacy set residual=? where id=?  ";
						$stm = $con->prepare($query);
						$stm->execute(array($residual_6, $medicine_name_6));

						if ($stm->rowCount()) {
							echo '<script src="js/send_success.js"></script>';
						} else {
							echo '<script src="js/send_error.js"></script>';
						}
					} else {
						echo '<script src="js/send_error.js"></script>';
					}
				}
			}
		}
		//=========================================================================================================== 
		elseif ($medicine_number == 7) {
			$medicine_quantity_1 = test_input($_POST['medicine_quantity_1']);
			$medicine_name_1 = test_input($_POST['medicine_name_1']);

			$medicine_quantity_2 = test_input($_POST['medicine_quantity_2']);
			$medicine_name_2 = test_input($_POST['medicine_name_2']);

			$medicine_quantity_3 = test_input($_POST['medicine_quantity_3']);
			$medicine_name_3 = test_input($_POST['medicine_name_3']);

			$medicine_quantity_4 = test_input($_POST['medicine_quantity_4']);
			$medicine_name_4 = test_input($_POST['medicine_name_4']);

			$medicine_quantity_5 = test_input($_POST['medicine_quantity_5']);
			$medicine_name_5 = test_input($_POST['medicine_name_5']);

			$medicine_quantity_6 = test_input($_POST['medicine_quantity_6']);
			$medicine_name_6 = test_input($_POST['medicine_name_6']);

			$medicine_quantity_7 = test_input($_POST['medicine_quantity_7']);
			$medicine_name_7 = test_input($_POST['medicine_name_7']);




			$sql = "select * from pharmacy where id=? ";
			$stmq = $con->prepare($sql);
			$stmq->execute(array($medicine_name_1));
			$pharmacy_info_1 = $stmq->fetch();
			$residual_pharmacy_1 = $pharmacy_info_1['residual'];
			// *************************************
			$sql = "select * from pharmacy where id=? ";
			$stmq = $con->prepare($sql);
			$stmq->execute(array($medicine_name_2));
			$pharmacy_info_2 = $stmq->fetch();
			$residual_pharmacy_2 = $pharmacy_info_2['residual'];
			// ***********************************************
			$sql = "select * from pharmacy where id=? ";
			$stmq = $con->prepare($sql);
			$stmq->execute(array($medicine_name_3));
			$pharmacy_info_3 = $stmq->fetch();
			$residual_pharmacy_3 = $pharmacy_info_3['residual'];
			// ***********************************************
			$sql = "select * from pharmacy where id=? ";
			$stmq = $con->prepare($sql);
			$stmq->execute(array($medicine_name_4));
			$pharmacy_info_4 = $stmq->fetch();
			$residual_pharmacy_4 = $pharmacy_info_4['residual'];
			// ***********************************************
			$sql = "select * from pharmacy where id=? ";
			$stmq = $con->prepare($sql);
			$stmq->execute(array($medicine_name_5));
			$pharmacy_info_5 = $stmq->fetch();
			$residual_pharmacy_5 = $pharmacy_info_5['residual'];
			// ***********************************************
			$sql = "select * from pharmacy where id=? ";
			$stmq = $con->prepare($sql);
			$stmq->execute(array($medicine_name_6));
			$pharmacy_info_6 = $stmq->fetch();
			$residual_pharmacy_6 = $pharmacy_info_6['residual'];
			// ***********************************************
			$sql = "select * from pharmacy where id=? ";
			$stmq = $con->prepare($sql);
			$stmq->execute(array($medicine_name_7));
			$pharmacy_info_7 = $stmq->fetch();
			$residual_pharmacy_7 = $pharmacy_info_7['residual'];
			// ***********************************************
			$residual_1 = $residual_pharmacy_1 - $medicine_quantity_1;
			$residual_2 = $residual_pharmacy_2 - $medicine_quantity_2;
			$residual_3 = $residual_pharmacy_3 - $medicine_quantity_3;
			$residual_4 = $residual_pharmacy_4 - $medicine_quantity_4;
			$residual_5 = $residual_pharmacy_5 - $medicine_quantity_5;
			$residual_6 = $residual_pharmacy_6 - $medicine_quantity_6;
			$residual_7 = $residual_pharmacy_7 - $medicine_quantity_7;

			$name = $medicine_name_1 . "," . $medicine_name_2 . "," . $medicine_name_3 . "," . $medicine_name_4 . "," . $medicine_name_5 . "," . $medicine_name_6 . "," . $medicine_name_7;


			$medicine_1 = $pharmacy_info_1['name'];
			$medicine_2 = $pharmacy_info_2['name'];
			$medicine_3 = $pharmacy_info_3['name'];
			$medicine_4 = $pharmacy_info_4['name'];
			$medicine_5 = $pharmacy_info_5['name'];
			$medicine_6 = $pharmacy_info_6['name'];
			$medicine_7 = $pharmacy_info_7['name'];

			$quantity_name =
				($medicine_1 . "    " . $medicine_quantity_1 . " (" . ($pharmacy_info_1['type'] == 'old' ? 'شريط' : 'حبة') . ")") . "," .
				($medicine_2 . "  " . $medicine_quantity_2 . " (" . ($pharmacy_info_2['type'] == 'old' ? 'شريط' : 'حبة') . ")") . "," .
				($medicine_3 . "  " . $medicine_quantity_3 . " (" . ($pharmacy_info_3['type'] == 'old' ? 'شريط' : 'حبة') . ")") . "," .
				($medicine_4 . "  " . $medicine_quantity_4 . " (" . ($pharmacy_info_4['type'] == 'old' ? 'شريط' : 'حبة') . ")") . "," .
				($medicine_5 . "  " . $medicine_quantity_5 . " (" . ($pharmacy_info_5['type'] == 'old' ? 'شريط' : 'حبة') . ")") . "," .
				($medicine_6 . "  " . $medicine_quantity_6 . " (" . ($pharmacy_info_6['type'] == 'old' ? 'شريط' : 'حبة') . ")") . "," .
				($medicine_7 . "  " . $medicine_quantity_7 . " (" . ($pharmacy_info_7['type'] == 'old' ? 'شريط' : 'حبة') . ")");


			if (
				$medicine_name_1 == $medicine_name_2 || $medicine_name_1 == $medicine_name_3 || $medicine_name_1 == $medicine_name_4 || $medicine_name_1 == $medicine_name_5 || $medicine_name_1 == $medicine_name_6 || $medicine_name_1 == $medicine_name_7 ||
				$medicine_name_2 == $medicine_name_3 || $medicine_name_2 == $medicine_name_4 || $medicine_name_2 == $medicine_name_5 || $medicine_name_2 == $medicine_name_6 || $medicine_name_2 == $medicine_name_7 ||
				$medicine_name_3 == $medicine_name_4 || $medicine_name_3 == $medicine_name_5 || $medicine_name_3 == $medicine_name_6 || $medicine_name_3 == $medicine_name_7 ||
				$medicine_name_4 == $medicine_name_5 || $medicine_name_4 == $medicine_name_6 || $medicine_name_4 == $medicine_name_7 ||
				$medicine_name_5 == $medicine_name_6 || $medicine_name_5 == $medicine_name_7 ||
				$medicine_name_6 == $medicine_name_7
			) {
				echo '<script>swal("لا يمكن اختيار نفس العلاج مرتين لنفس الحالة", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($residual_pharmacy_1 < $medicine_quantity_1) {
				echo '<script>swal("لايمكن الصرف لان الكمية التي حددتها اكبر من الكمية الموجودة في المخازن  للعلاج الاول", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($residual_pharmacy_2 < $medicine_quantity_2) {
				echo '<script>swal("لايمكن الصرف لان الكمية التي حددتها اكبر من الكمية الموجودة في المخازن للعلاج الثاني", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($residual_pharmacy_3 < $medicine_quantity_3) {
				echo '<script>swal("لايمكن الصرف لان الكمية التي حددتها اكبر من الكمية الموجودة في المخازن للعلاج الثالث", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($residual_pharmacy_4 < $medicine_quantity_4) {
				echo '<script>swal("لايمكن الصرف لان الكمية التي حددتها اكبر من الكمية الموجودة في المخازن للعلاج الرابع", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($residual_pharmacy_5 < $medicine_quantity_5) {
				echo '<script>swal("لايمكن الصرف لان الكمية التي حددتها اكبر من الكمية الموجودة في المخازن للعلاج الخامس", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($residual_pharmacy_6 < $medicine_quantity_6) {
				echo '<script>swal("لايمكن الصرف لان الكمية التي حددتها اكبر من الكمية الموجودة في المخازن للعلاج السادس", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($residual_pharmacy_7 < $medicine_quantity_7) {
				echo '<script>swal("لايمكن الصرف لان الكمية التي حددتها اكبر من الكمية الموجودة في المخازن للعلاج السابع", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($user)) {
				echo '<script>swal("يرجاء اعادة تسجيل الدخول   ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($medicine_quantity_1 < 0) {
				echo '<script>swal(" يرجاء ان تكون  كمية العلاج الاول  قيمة موجبة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($medicine_quantity_2 < 0) {
				echo '<script>swal(" يرجاء ان تكون  كمية العلاج الثاني  قيمة موجبة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($medicine_quantity_3 < 0) {
				echo '<script>swal(" يرجاء ان تكون  كمية العلاج الثالث  قيمة موجبة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($medicine_quantity_4 < 0) {
				echo '<script>swal(" يرجاء ان تكون  كمية العلاج الرابع  قيمة موجبة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($medicine_quantity_5 < 0) {
				echo '<script>swal(" يرجاء ان تكون  كمية العلاج الخامس  قيمة موجبة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($medicine_quantity_6 < 0) {
				echo '<script>swal(" يرجاء ان تكون  كمية العلاج السادس  قيمة موجبة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($medicine_quantity_7 < 0) {
				echo '<script>swal(" يرجاء ان تكون  كمية العلاج السابع  قيمة موجبة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($date)) {


				echo '<script>swal("يرجاء ادخال  تاريخ ادخال البيانات ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($code)) {


				echo '<script>swal("يرجاء ادخال  كود الحالة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($code)) {


				echo '<script>swal("   رقم كود الحالة يجب  ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_name_1)) {


				echo '<script>swal("يرجاء ادخال اسم العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_name_1)) {


				echo '<script>swal("اسم العلاج لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_quantity_1)) {


				echo '<script>swal("يرجاء ادخال كمية العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_quantity_1)) {


				echo '<script>swal("كمية العلاج  يجب ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_name_2)) {


				echo '<script>swal("يرجاء ادخال اسم العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_name_2)) {


				echo '<script>swal("اسم العلاج لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_quantity_2)) {


				echo '<script>swal("يرجاء ادخال كمية العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_quantity_2)) {


				echo '<script>swal("كمية العلاج  يجب ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_name_3)) {


				echo '<script>swal("يرجاء ادخال اسم العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_name_3)) {


				echo '<script>swal("اسم العلاج لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_quantity_3)) {


				echo '<script>swal("يرجاء ادخال كمية العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_quantity_3)) {


				echo '<script>swal("كمية العلاج  يجب ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_name_4)) {


				echo '<script>swal("يرجاء ادخال اسم العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_name_4)) {


				echo '<script>swal("اسم العلاج لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_quantity_4)) {


				echo '<script>swal("يرجاء ادخال كمية العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_quantity_4)) {


				echo '<script>swal("كمية العلاج  يجب ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_name_5)) {


				echo '<script>swal("يرجاء ادخال اسم العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_name_5)) {


				echo '<script>swal("اسم العلاج لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_quantity_5)) {


				echo '<script>swal("يرجاء ادخال كمية العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_quantity_5)) {


				echo '<script>swal("كمية العلاج  يجب ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_name_6)) {


				echo '<script>swal("يرجاء ادخال اسم العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_name_6)) {


				echo '<script>swal("اسم العلاج لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_quantity_6)) {


				echo '<script>swal("يرجاء ادخال كمية العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_quantity_6)) {


				echo '<script>swal("كمية العلاج  يجب ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_name_7)) {


				echo '<script>swal("يرجاء ادخال اسم العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_name_7)) {


				echo '<script>swal("اسم العلاج لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_quantity_7)) {


				echo '<script>swal("يرجاء ادخال كمية العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_quantity_7)) {


				echo '<script>swal("كمية العلاج  يجب ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} else {
				$sql = "select * from pure_pharmacy where date=? and code=? and branch=?";
				$stm = $con->prepare($sql);
				$stm->execute(array($date, $code, $branch));
				if ($stm->rowCount()) {

					echo '<script>swal("لا يمكن صرف العلاج مرتين في نفس اليوم لنفس الحالة ", "لم يتم رفع البيانات", {
							icon : "warning",
							buttons: {        			
								confirm: {
									className : "btn btn-warning"
								}
							},
						});</script>';
				} else {
					$query = "INSERT INTO pure_pharmacy(branch,name,code,date,quantity,sender_name,type,Epilepsy)
						values (?,?,?,?,?,?,?,?) ";
					$stm = $con->prepare($query);
					$stm->execute(array($branch, $name, $code, $date, $quantity_name, $user, $type, $Epilepsy));
					if ($stm->rowCount()) {


						$query = "UPDATE  pharmacy set residual=? where id=?  ";
						$stm = $con->prepare($query);
						$stm->execute(array($residual_1, $medicine_name_1));

						if ($stm->rowCount()) {
							echo '<script src="js/send_success.js"></script>';
						} else {
							echo '<script src="js/send_error.js"></script>';
						}

						$query = "UPDATE  pharmacy set residual=? where id=?  ";
						$stm = $con->prepare($query);
						$stm->execute(array($residual_2, $medicine_name_2));

						if ($stm->rowCount()) {
							echo '<script src="js/send_success.js"></script>';
						} else {
							echo '<script src="js/send_error.js"></script>';
						}

						$query = "UPDATE  pharmacy set residual=? where id=?  ";
						$stm = $con->prepare($query);
						$stm->execute(array($residual_3, $medicine_name_3));

						if ($stm->rowCount()) {
							echo '<script src="js/send_success.js"></script>';
						} else {
							echo '<script src="js/send_error.js"></script>';
						}

						$query = "UPDATE  pharmacy set residual=? where id=?  ";
						$stm = $con->prepare($query);
						$stm->execute(array($residual_4, $medicine_name_4));

						if ($stm->rowCount()) {
							echo '<script src="js/send_success.js"></script>';
						} else {
							echo '<script src="js/send_error.js"></script>';
						}

						$query = "UPDATE  pharmacy set residual=? where id=?  ";
						$stm = $con->prepare($query);
						$stm->execute(array($residual_5, $medicine_name_5));

						if ($stm->rowCount()) {
							echo '<script src="js/send_success.js"></script>';
						} else {
							echo '<script src="js/send_error.js"></script>';
						}

						$query = "UPDATE  pharmacy set residual=? where id=?  ";
						$stm = $con->prepare($query);
						$stm->execute(array($residual_6, $medicine_name_6));

						if ($stm->rowCount()) {
							echo '<script src="js/send_success.js"></script>';
						} else {
							echo '<script src="js/send_error.js"></script>';
						}
						$query = "UPDATE  pharmacy set residual=? where id=?  ";
						$stm = $con->prepare($query);
						$stm->execute(array($residual_7, $medicine_name_7));

						if ($stm->rowCount()) {
							echo '<script src="js/send_success.js"></script>';
						} else {
							echo '<script src="js/send_error.js"></script>';
						}
					} else {
						echo '<script src="js/send_error.js"></script>';
					}
				}
			}
		}
		//=========================================================================================================== 
		elseif ($medicine_number == 8) {
			$medicine_quantity_1 = test_input($_POST['medicine_quantity_1']);
			$medicine_name_1 = test_input($_POST['medicine_name_1']);

			$medicine_quantity_2 = test_input($_POST['medicine_quantity_2']);
			$medicine_name_2 = test_input($_POST['medicine_name_2']);

			$medicine_quantity_3 = test_input($_POST['medicine_quantity_3']);
			$medicine_name_3 = test_input($_POST['medicine_name_3']);

			$medicine_quantity_4 = test_input($_POST['medicine_quantity_4']);
			$medicine_name_4 = test_input($_POST['medicine_name_4']);

			$medicine_quantity_5 = test_input($_POST['medicine_quantity_5']);
			$medicine_name_5 = test_input($_POST['medicine_name_5']);

			$medicine_quantity_6 = test_input($_POST['medicine_quantity_6']);
			$medicine_name_6 = test_input($_POST['medicine_name_6']);

			$medicine_quantity_7 = test_input($_POST['medicine_quantity_7']);
			$medicine_name_7 = test_input($_POST['medicine_name_7']);

			$medicine_quantity_8 = test_input($_POST['medicine_quantity_8']);
			$medicine_name_8 = test_input($_POST['medicine_name_8']);





			$sql = "select * from pharmacy where id=? ";
			$stmq = $con->prepare($sql);
			$stmq->execute(array($medicine_name_1));
			$pharmacy_info_1 = $stmq->fetch();
			$residual_pharmacy_1 = $pharmacy_info_1['residual'];
			// *************************************
			$sql = "select * from pharmacy where id=? ";
			$stmq = $con->prepare($sql);
			$stmq->execute(array($medicine_name_2));
			$pharmacy_info_2 = $stmq->fetch();
			$residual_pharmacy_2 = $pharmacy_info_2['residual'];
			// ***********************************************
			$sql = "select * from pharmacy where id=? ";
			$stmq = $con->prepare($sql);
			$stmq->execute(array($medicine_name_3));
			$pharmacy_info_3 = $stmq->fetch();
			$residual_pharmacy_3 = $pharmacy_info_3['residual'];
			// ***********************************************
			$sql = "select * from pharmacy where id=? ";
			$stmq = $con->prepare($sql);
			$stmq->execute(array($medicine_name_4));
			$pharmacy_info_4 = $stmq->fetch();
			$residual_pharmacy_4 = $pharmacy_info_4['residual'];
			// ***********************************************
			$sql = "select * from pharmacy where id=? ";
			$stmq = $con->prepare($sql);
			$stmq->execute(array($medicine_name_5));
			$pharmacy_info_5 = $stmq->fetch();
			$residual_pharmacy_5 = $pharmacy_info_5['residual'];
			// ***********************************************
			$sql = "select * from pharmacy where id=? ";
			$stmq = $con->prepare($sql);
			$stmq->execute(array($medicine_name_6));
			$pharmacy_info_6 = $stmq->fetch();
			$residual_pharmacy_6 = $pharmacy_info_6['residual'];
			// ***********************************************
			$sql = "select * from pharmacy where id=? ";
			$stmq = $con->prepare($sql);
			$stmq->execute(array($medicine_name_7));
			$pharmacy_info_7 = $stmq->fetch();
			$residual_pharmacy_7 = $pharmacy_info_7['residual'];
			// ***********************************************
			$sql = "select * from pharmacy where id=? ";
			$stmq = $con->prepare($sql);
			$stmq->execute(array($medicine_name_8));
			$pharmacy_info_8 = $stmq->fetch();
			$residual_pharmacy_8 = $pharmacy_info_8['residual'];
			// ***********************************************
			$residual_1 = $residual_pharmacy_1 - $medicine_quantity_1;
			$residual_2 = $residual_pharmacy_2 - $medicine_quantity_2;
			$residual_3 = $residual_pharmacy_3 - $medicine_quantity_3;
			$residual_4 = $residual_pharmacy_4 - $medicine_quantity_4;
			$residual_5 = $residual_pharmacy_5 - $medicine_quantity_5;
			$residual_6 = $residual_pharmacy_6 - $medicine_quantity_6;
			$residual_7 = $residual_pharmacy_7 - $medicine_quantity_7;
			$residual_8 = $residual_pharmacy_8 - $medicine_quantity_8;

			$name = $medicine_name_1 . "," . $medicine_name_2 . "," . $medicine_name_3 . "," . $medicine_name_4 . "," . $medicine_name_5 . "," . $medicine_name_6 . "," . $medicine_name_7 . "," . $medicine_name_8;


			$medicine_1 = $pharmacy_info_1['name'];
			$medicine_2 = $pharmacy_info_2['name'];
			$medicine_3 = $pharmacy_info_3['name'];
			$medicine_4 = $pharmacy_info_4['name'];
			$medicine_5 = $pharmacy_info_5['name'];
			$medicine_6 = $pharmacy_info_6['name'];
			$medicine_7 = $pharmacy_info_7['name'];
			$medicine_8 = $pharmacy_info_8['name'];

			$quantity_name =
				($medicine_1 . "    " . $medicine_quantity_1 . " (" . ($pharmacy_info_1['type'] == 'old' ? 'شريط' : 'حبة') . ")") . "," .
				($medicine_2 . "  " . $medicine_quantity_2 . " (" . ($pharmacy_info_2['type'] == 'old' ? 'شريط' : 'حبة') . ")") . "," .
				($medicine_3 . "  " . $medicine_quantity_3 . " (" . ($pharmacy_info_3['type'] == 'old' ? 'شريط' : 'حبة') . ")") . "," .
				($medicine_4 . "  " . $medicine_quantity_4 . " (" . ($pharmacy_info_4['type'] == 'old' ? 'شريط' : 'حبة') . ")") . "," .
				($medicine_5 . "  " . $medicine_quantity_5 . " (" . ($pharmacy_info_5['type'] == 'old' ? 'شريط' : 'حبة') . ")") . "," .
				($medicine_6 . "  " . $medicine_quantity_6 . " (" . ($pharmacy_info_6['type'] == 'old' ? 'شريط' : 'حبة') . ")") . "," .
				($medicine_7 . "  " . $medicine_quantity_7 . " (" . ($pharmacy_info_7['type'] == 'old' ? 'شريط' : 'حبة') . ")") . "," .
				($medicine_8 . "  " . $medicine_quantity_8 . " (" . ($pharmacy_info_8['type'] == 'old' ? 'شريط' : 'حبة') . ")");

			if (
				$medicine_name_1 == $medicine_name_2 || $medicine_name_1 == $medicine_name_3 || $medicine_name_1 == $medicine_name_4 || $medicine_name_1 == $medicine_name_5 || $medicine_name_1 == $medicine_name_6 || $medicine_name_1 == $medicine_name_7 || $medicine_name_1 == $medicine_name_8 ||
				$medicine_name_2 == $medicine_name_3 || $medicine_name_2 == $medicine_name_4 || $medicine_name_2 == $medicine_name_5 || $medicine_name_2 == $medicine_name_6 || $medicine_name_2 == $medicine_name_7 || $medicine_name_2 == $medicine_name_8 ||
				$medicine_name_3 == $medicine_name_4 || $medicine_name_3 == $medicine_name_5 || $medicine_name_3 == $medicine_name_6 || $medicine_name_3 == $medicine_name_7 || $medicine_name_3 == $medicine_name_8 ||
				$medicine_name_4 == $medicine_name_5 || $medicine_name_4 == $medicine_name_6 || $medicine_name_4 == $medicine_name_7 || $medicine_name_4 == $medicine_name_8 ||
				$medicine_name_5 == $medicine_name_6 || $medicine_name_5 == $medicine_name_7 || $medicine_name_5 == $medicine_name_8 ||
				$medicine_name_6 == $medicine_name_7 || $medicine_name_6 == $medicine_name_8 || $medicine_name_7 == $medicine_name_8
			) {
				echo '<script>swal("لا يمكن اختيار نفس العلاج مرتين لنفس الحالة", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($residual_pharmacy_1 < $medicine_quantity_1) {
				echo '<script>swal("لايمكن الصرف لان الكمية التي حددتها اكبر من الكمية الموجودة في المخازن  للعلاج الاول", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($residual_pharmacy_2 < $medicine_quantity_2) {
				echo '<script>swal("لايمكن الصرف لان الكمية التي حددتها اكبر من الكمية الموجودة في المخازن للعلاج الثاني", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($residual_pharmacy_3 < $medicine_quantity_3) {
				echo '<script>swal("لايمكن الصرف لان الكمية التي حددتها اكبر من الكمية الموجودة في المخازن للعلاج الثالث", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($residual_pharmacy_4 < $medicine_quantity_4) {
				echo '<script>swal("لايمكن الصرف لان الكمية التي حددتها اكبر من الكمية الموجودة في المخازن للعلاج الرابع", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($residual_pharmacy_5 < $medicine_quantity_5) {
				echo '<script>swal("لايمكن الصرف لان الكمية التي حددتها اكبر من الكمية الموجودة في المخازن للعلاج الخامس", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($residual_pharmacy_6 < $medicine_quantity_6) {
				echo '<script>swal("لايمكن الصرف لان الكمية التي حددتها اكبر من الكمية الموجودة في المخازن للعلاج السادس", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($residual_pharmacy_7 < $medicine_quantity_7) {
				echo '<script>swal("لايمكن الصرف لان الكمية التي حددتها اكبر من الكمية الموجودة في المخازن للعلاج السابع", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($residual_pharmacy_8 < $medicine_quantity_8) {
				echo '<script>swal("لايمكن الصرف لان الكمية التي حددتها اكبر من الكمية الموجودة في المخازن للعلاج الثامن", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($user)) {
				echo '<script>swal("يرجاء اعادة تسجيل الدخول   ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($medicine_quantity_1 < 0) {
				echo '<script>swal(" يرجاء ان تكون  كمية العلاج الاول  قيمة موجبة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($medicine_quantity_2 < 0) {
				echo '<script>swal(" يرجاء ان تكون  كمية العلاج الثاني  قيمة موجبة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($medicine_quantity_3 < 0) {
				echo '<script>swal(" يرجاء ان تكون  كمية العلاج الثالث  قيمة موجبة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($medicine_quantity_4 < 0) {
				echo '<script>swal(" يرجاء ان تكون  كمية العلاج الرابع  قيمة موجبة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($medicine_quantity_5 < 0) {
				echo '<script>swal(" يرجاء ان تكون  كمية العلاج الخامس  قيمة موجبة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($medicine_quantity_6 < 0) {
				echo '<script>swal(" يرجاء ان تكون  كمية العلاج السادس  قيمة موجبة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($medicine_quantity_7 < 0) {
				echo '<script>swal(" يرجاء ان تكون  كمية العلاج السابع  قيمة موجبة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif ($medicine_quantity_8 < 0) {
				echo '<script>swal(" يرجاء ان تكون  كمية العلاج الثامن  قيمة موجبة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($date)) {


				echo '<script>swal("يرجاء ادخال  تاريخ ادخال البيانات ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($code)) {


				echo '<script>swal("يرجاء ادخال  كود الحالة ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($code)) {


				echo '<script>swal("   رقم كود الحالة يجب  ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_name_1)) {


				echo '<script>swal("يرجاء ادخال اسم العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_name_1)) {


				echo '<script>swal("اسم العلاج لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_quantity_1)) {


				echo '<script>swal("يرجاء ادخال كمية العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_quantity_1)) {


				echo '<script>swal("كمية العلاج  يجب ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_name_2)) {


				echo '<script>swal("يرجاء ادخال اسم العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_name_2)) {


				echo '<script>swal("اسم العلاج لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_quantity_2)) {


				echo '<script>swal("يرجاء ادخال كمية العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_quantity_2)) {


				echo '<script>swal("كمية العلاج  يجب ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_name_3)) {


				echo '<script>swal("يرجاء ادخال اسم العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_name_3)) {


				echo '<script>swal("اسم العلاج لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_quantity_3)) {


				echo '<script>swal("يرجاء ادخال كمية العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_quantity_3)) {


				echo '<script>swal("كمية العلاج  يجب ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_name_4)) {


				echo '<script>swal("يرجاء ادخال اسم العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_name_4)) {


				echo '<script>swal("اسم العلاج لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_quantity_4)) {


				echo '<script>swal("يرجاء ادخال كمية العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_quantity_4)) {


				echo '<script>swal("كمية العلاج  يجب ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_name_5)) {


				echo '<script>swal("يرجاء ادخال اسم العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_name_5)) {


				echo '<script>swal("اسم العلاج لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_quantity_5)) {


				echo '<script>swal("يرجاء ادخال كمية العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_quantity_5)) {


				echo '<script>swal("كمية العلاج  يجب ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_name_6)) {


				echo '<script>swal("يرجاء ادخال اسم العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_name_6)) {


				echo '<script>swal("اسم العلاج لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_quantity_6)) {


				echo '<script>swal("يرجاء ادخال كمية العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_quantity_6)) {


				echo '<script>swal("كمية العلاج  يجب ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_name_7)) {


				echo '<script>swal("يرجاء ادخال اسم العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_name_7)) {


				echo '<script>swal("اسم العلاج لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_quantity_7)) {


				echo '<script>swal("يرجاء ادخال كمية العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_quantity_7)) {


				echo '<script>swal("كمية العلاج  يجب ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_name_8)) {


				echo '<script>swal("يرجاء ادخال اسم العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_name_8)) {


				echo '<script>swal("اسم العلاج لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (empty($medicine_quantity_8)) {


				echo '<script>swal("يرجاء ادخال كمية العلاج ", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} elseif (!is_numeric($medicine_quantity_8)) {


				echo '<script>swal("كمية العلاج  يجب ان يكون اراقم", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} else {
				$sql = "select * from pure_pharmacy where date=? and code=? and branch=?";
				$stm = $con->prepare($sql);
				$stm->execute(array($date, $code, $branch));
				if ($stm->rowCount()) {

					echo '<script>swal("لا يمكن صرف العلاج مرتين في نفس اليوم لنفس الحالة ", "لم يتم رفع البيانات", {
							icon : "warning",
							buttons: {        			
								confirm: {
									className : "btn btn-warning"
								}
							},
						});</script>';
				} else {
					$query = "INSERT INTO pure_pharmacy(branch,name,code,date,quantity,sender_name,type,Epilepsy)
						values (?,?,?,?,?,?,?,?) ";
					$stm = $con->prepare($query);
					$stm->execute(array($branch, $name, $code, $date, $quantity_name, $user, $type, $Epilepsy));
					if ($stm->rowCount()) {


						$query = "UPDATE  pharmacy set residual=? where id=?  ";
						$stm = $con->prepare($query);
						$stm->execute(array($residual_1, $medicine_name_1));

						if ($stm->rowCount()) {
							echo '<script src="js/send_success.js"></script>';
						} else {
							echo '<script src="js/send_error.js"></script>';
						}

						$query = "UPDATE  pharmacy set residual=? where id=?  ";
						$stm = $con->prepare($query);
						$stm->execute(array($residual_2, $medicine_name_2));

						if ($stm->rowCount()) {
							echo '<script src="js/send_success.js"></script>';
						} else {
							echo '<script src="js/send_error.js"></script>';
						}

						$query = "UPDATE  pharmacy set residual=? where id=?  ";
						$stm = $con->prepare($query);
						$stm->execute(array($residual_3, $medicine_name_3));

						if ($stm->rowCount()) {
							echo '<script src="js/send_success.js"></script>';
						} else {
							echo '<script src="js/send_error.js"></script>';
						}

						$query = "UPDATE  pharmacy set residual=? where id=?  ";
						$stm = $con->prepare($query);
						$stm->execute(array($residual_4, $medicine_name_4));

						if ($stm->rowCount()) {
							echo '<script src="js/send_success.js"></script>';
						} else {
							echo '<script src="js/send_error.js"></script>';
						}

						$query = "UPDATE  pharmacy set residual=? where id=?  ";
						$stm = $con->prepare($query);
						$stm->execute(array($residual_5, $medicine_name_5));

						if ($stm->rowCount()) {
							echo '<script src="js/send_success.js"></script>';
						} else {
							echo '<script src="js/send_error.js"></script>';
						}

						$query = "UPDATE  pharmacy set residual=? where id=?  ";
						$stm = $con->prepare($query);
						$stm->execute(array($residual_6, $medicine_name_6));

						if ($stm->rowCount()) {
							echo '<script src="js/send_success.js"></script>';
						} else {
							echo '<script src="js/send_error.js"></script>';
						}

						$query = "UPDATE  pharmacy set residual=? where id=?  ";
						$stm = $con->prepare($query);
						$stm->execute(array($residual_7, $medicine_name_7));

						if ($stm->rowCount()) {
							echo '<script src="js/send_success.js"></script>';
						} else {
							echo '<script src="js/send_error.js"></script>';
						}

						$query = "UPDATE  pharmacy set residual=? where id=?  ";
						$stm = $con->prepare($query);
						$stm->execute(array($residual_8, $medicine_name_8));

						if ($stm->rowCount()) {
							echo '<script src="js/send_success.js"></script>';
						} else {
							echo '<script src="js/send_error.js"></script>';
						}
					} else {
						echo '<script src="js/send_error.js"></script>';
					}
				}
			}
		}
		//=========================================================================================================== 



























	}
} else {
	echo "<script> window.open('index.php','_self')</script>";
}
	?>