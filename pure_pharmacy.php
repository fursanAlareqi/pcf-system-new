<?php
include "include/header.php";
session_start();
if (!isset($_SESSION['user'])) {
    echo "<script> window.open('logout.php','_self')</script>";
    exit;
}
$allowed_rules = [11, 2, 6];
if (!in_array($_SESSION['user']['rule_id'], $allowed_rules)) {
    echo "<script> window.open('index.php','_self')</script>";
    exit;
}

// sanitization function
function test_input(string $data): string {
    return htmlspecialchars(stripslashes(trim($data)), ENT_QUOTES, 'UTF-8');
}

$branch = $_SESSION['user']['branch_id'];

// --------- Lookup dispensing history ----------


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
													$sql = "select * from psyshological where code =? and branch=? and Date(date)>=? ORDER BY `psyshological`.`date` desc  ";
													$stmu = $con->prepare($sql);
													$date = $branch == 5 ? date('Y-7-1') : date('Y-m-1');
													$stmu->execute(array($code, $branch, $date));
													$psyshological = $stmu->fetchAll();
													foreach ($psyshological as $row) {
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

													<?php } ?>

													<?php
													$sql = "select * from doctor where code =? and branch=? and Date(date)>=? ORDER BY `doctor`.`date` desc  ";
													$stm = $con->prepare($sql);
													$date = $branch == 5 ? date('Y-7-1') : date('Y-m-1');
													$stm->execute(array($code, $branch, $date));
													$doctors = $stm->fetchAll();
													foreach ($doctors as $row) {
													?>
														<tr>
															<td>الطبيب العام</td>
															<td><?php echo $row['code']; ?></td>
															<td>
																<?php $medical_explode = explode(",", $row['medical']);
																foreach ($medical_explode as $medical_name) {
																	echo $medical_name . '<br>';
																}
																?>
															</td>
															<td><?php echo $row['quantity']; ?></td>
															<td><?php echo $row['date']; ?></td>
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


      <!-- 2) Medicine Dispatch Card -->
      <div class="col-md-12">
        <div class="card">
          <div class="card-header"><h4 class="card-title">صرف دواء</h4></div>
          <div class="card-body">
            <!-- Step 1: Choose count -->
            <form method="post" class="mb-4">
              <div class="form-group">
                <label>عدد الأدوية</label>
                <select name="medicine_number" class="form-control" required>
                  <option value="">اختر عددًا</option>
                  <?php for ($i = 1; $i <= 10; $i++): ?>
                    <option value="<?= $i ?>"
                      <?= (isset($_POST['medicine_n']) && $_POST['medicine_number']==$i)?'selected':'' ?>>
                      <?= $i ?>
                    </option>
                  <?php endfor; ?>
                </select>
              </div>
              <button name="medicine_n" class="btn btn-success">عرض الحقول</button>
            </form>

            <?php if (isset($_POST['medicine_n'])):
              $medicine_number = intval(test_input($_POST['medicine_number']));
            ?>
              <!-- Step 2: Dynamic fields -->
              <form method="post">
                <input type="hidden" name="medicine_number" value="<?= $medicine_number ?>">

                <div class="form-group">
                  <label>تاريخ إدخال البيانات</label>
                  <input name="date" type="date" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>رقم الكود</label>
                  <select class="selectpicker form-control" name="code" id="tokens" data-live-search="true">
                  <option value=""></option>
                    <?php
                    $stm = $con->prepare("SELECT DISTINCT code FROM resption WHERE branch = ?");
                    $stm->execute([$branch]);
                    foreach ($stm->fetchAll() as $r): ?>
                      <option value="<?= $r['code'] ?>"><?= $r['code'] ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
                <?php if ($branch == 6): ?>
                  <div class="form-group">
                    <label>Epilepsy</label>
                    <select name="Epilepsy" class="form-control">
                      <option value="psychological">psychological</option>
                      <option value="Epilepsy">Epilepsy</option>
                    </select>
                  </div>
                <?php endif; ?>

                <?php
                // preload medicines
                $meds = $con->prepare("
                  SELECT id, exporter, name, type, residual 
                  FROM pharmacy 
                  WHERE branch = ? AND residual > 0 AND date > '2022-12-31' 
                  ORDER BY name
                ");
                $meds->execute([$branch]);
                $allMeds = $meds->fetchAll(PDO::FETCH_ASSOC);

                for ($i = 1; $i <= $medicine_number; $i++): ?>
                  <div class="row">
                    <div class="col-md-8">
                      <div class="form-group">
                        <label>اسم العلاج <?= $i ?></label>
                        <select name="medicine_name_<?= $i ?>" class="form-control" required>
                          <option value=""></option>
                          <?php foreach ($allMeds as $m): ?>
                            <option value="<?= $m['id'] ?>" data-type="<?= $m['type']=='old'?'شريط':'حبة' ?>">
                              <?= "{$m['exporter']} & {$m['name']} ({$m['residual']})" ?>
                            </option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="form-group">
                        <label>كمية العلاج <?= $i ?></label>
                        <input name="medicine_quantity_<?= $i ?>" type="number" class="form-control" required>
                      </div>
                    </div>
                  </div>
                <?php endfor; ?>

                <button name="save" class="btn btn-success">حفظ</button>
                <button type="reset" class="btn btn-danger">إلغاء</button>
              </form>
            <?php endif; ?>

            <?php
            // Step 3: Handle save
            if (isset($_POST['save'])) {
                // inputs
                $medicine_number = intval(test_input($_POST['medicine_number']));
                $date            = test_input($_POST['date']);
                $code            = test_input($_POST['code']);
                $user            = $_SESSION['user']['id'];
                $Epilepsy        = $branch == 6 ? test_input($_POST['Epilepsy']) : '';

                // basic validations
                if (empty($date)) {
					
					echo '<script>swal("يرجى إدخال تاريخ الصرف", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>'; exit;
                }
                if (empty($code) || !is_numeric($code)) {
                    echo '<script>swal("رقم الكود مطلوب ويجب أن يكون رقماً", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>'; exit;
                }
                // ensure there's a reception record
                $checkRec = $con->prepare("
                  SELECT 1 FROM resption 
                  WHERE code = ? AND branch = ? AND DATE(date) = ?
                ");
                $checkRec->execute([$code, $branch, $date]);
                if (!$checkRec->fetch()) {
					echo '<script>swal("لم يتم تسجيل الحالة في الاستقبال بتاريخ الصرف", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';exit;
                }

                // collect
                $quantities      = [];
                $residualUpdates = [];
                $names           = [];

                for ($i = 1; $i <= $medicine_number; $i++) {
                    $medId = test_input($_POST["medicine_name_$i"]);
                    $qty   = test_input($_POST["medicine_quantity_$i"]);

                    if (empty($medId) || !is_numeric($medId)) {
						echo '<script>swal("اختر الدواء رقم '.$i.'", "لم يتم رفع البيانات", {
							icon : "warning",
							buttons: {        			
								confirm: {
									className : "btn btn-warning"
								}
							},
						});</script>'; exit;
                    }
                    if ($qty === "" || !is_numeric($qty) || $qty < 1) {
						echo '<script>swal("أدخل كمية صحيحة للدواء رقم '.$i.'", "لم يتم رفع البيانات", {
							icon : "warning",
							buttons: {        			
								confirm: {
									className : "btn btn-warning"
								}
							},
						});</script>'; exit;
                    }
                    if (in_array($medId, $names)) {
						echo '<script>swal("لا يمكن تكرار نفس الدواء مرتين", "لم يتم رفع البيانات", {
							icon : "warning",
							buttons: {        			
								confirm: {
									className : "btn btn-warning"
								}
							},
						});</script>'; exit;
                    }
                    $names[] = $medId;

                    // fetch pharmacy info
                    $stm = $con->prepare("SELECT name,type,residual FROM pharmacy WHERE id = ?");
                    $stm->execute([$medId]);
                    $info = $stm->fetch(PDO::FETCH_ASSOC);

                    if ($qty > $info['residual']) {
						echo '<script>swal("الكمية للدواء '.$info['name'].' أكبر من المخزون", "لم يتم رفع البيانات", {
							icon : "warning",
							buttons: {        			
								confirm: {
									className : "btn btn-warning"
								}
							},
						});</script>'; exit;
                    }

                    $unit = $info['type']==='old'?'شريط':'حبة';
                    $quantities[]      = "{$info['name']} {$qty} ({$unit})";
                    $residualUpdates[] = ['id'=>$medId,'residual'=>$info['residual']-$qty];
                }

                // check duplicate same day
                $dup = $con->prepare("
                  SELECT 1 FROM pure_pharmacy 
                  WHERE code=? AND branch=? AND date=?
                ");
                $dup->execute([$code, $branch, $date]);
                if ($dup->fetch()) {
					echo '<script>swal("لقد صرفت دواءً لهذه الحالة اليوم بالفعل", "لم يتم رفع البيانات", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';exit;
                }

                // get type from last resption
                $stm = $con->prepare("
                  SELECT type FROM resption 
                  WHERE code=? AND branch=? ORDER BY date DESC LIMIT 1
                ");
                $stm->execute([$code,$branch]);
                $type = $stm->fetchColumn();

                // insert
                $quantity_name = implode(',', $quantities);
                $ins = $con->prepare("
                  INSERT INTO pure_pharmacy
                    (branch,name,code,date,quantity,sender_name,type,Epilepsy)
                  VALUES (?,?,?,?,?,?,?,?)
                ");
                $ins->execute([
                    $branch, $quantity_name, $code, $date,
                    $quantity_name, $user, $type, $Epilepsy
                ]);

                if ($ins->rowCount()) {
                    // update residuals
                    $upd = $con->prepare("UPDATE pharmacy SET residual=? WHERE id=?");
                    foreach ($residualUpdates as $u) {
                        $upd->execute([$u['residual'],$u['id']]);
                    }
                    echo '<script src="js/send_success.js"></script>';
                } else {
                    echo '<script src="js/send_error.js"></script>';
                }
            }
            ?>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

<?php include "include/footer.php"; ?>
