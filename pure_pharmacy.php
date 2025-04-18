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


// --- Handle the lookup form at top (unchanged) ---
if (isset($_POST['search'])) {
    $code   = $_POST['code'];
    $branch = $_SESSION['user']['branch_id'];
    // ... your existing lookup code to display the table ...
}

?>
<div class="content">
  <div class="page-inner">
    <div class="row">

      <!-- Lookup card omitted for brevity -->

      <!-- Medicine dispatch card -->
      <div class="col-md-12">
        <div class="card">
          <div class="card-header"><h4 class="card-title">صرف دواء</h4></div>
          <div class="card-body">
            <!-- Step 1: Choose how many medicines -->
            <form method="post" class="mb-4">
              <div class="form-group">
                <label>عدد الأدوية</label>
                <select name="medicine_number" class="form-control" required>
                  <option value="">اختر عددًا</option>
                  <?php for ($i = 1; $i <= 10; $i++): ?>
                    <option value="<?= $i ?>" <?= (isset($_POST['medicine_n']) && $_POST['medicine_number']==$i)?'selected':'' ?>>
                      <?= $i ?>
                    </option>
                  <?php endfor; ?>
                </select>
              </div>
              <button name="medicine_n" class="btn btn-success">عرض الحقول</button>
            </form>

            <?php if (isset($_POST['medicine_n'])):
              // sanitize common inputs
              function test_input($d){ return htmlspecialchars(stripslashes(trim($d))); }
              $medicine_number = intval($_POST['medicine_number']);
            ?>
              <!-- Step 2: Show dynamic fields -->
              <form method="post">
                <input type="hidden" name="medicine_number" value="<?= $medicine_number ?>">

                <div class="form-group">
                  <label>تاريخ إدخال البيانات</label>
                  <input name="date" type="date" class="form-control" required>
                </div>
                <div class="form-group">
                  <label>رقم الكود</label>
                  <select name="code" class="form-control" data-live-search="true" required>
                    <option value=""></option>
                    <?php
                    $branch = $_SESSION['user']['branch_id'];
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
                // Preload all available medicines once
                $meds = $con->query("SELECT id,name,type,residual,exporter FROM pharmacy WHERE branch = $branch AND residual > 0 AND date > '2022-12-31' ORDER BY name")->fetchAll();
                for ($i = 1; $i <= $medicine_number; $i++): ?>
                  <div class="row">
                    <div class="col-md-8">
                      <div class="form-group">
                        <label>اسم العلاج <?= $i ?></label>
                        <select name="medicine_name_<?= $i ?>" class="form-control" required>
                          <option value=""></option>
                          <?php foreach ($meds as $m): ?>
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
            // Step 3: Handle the dynamic save
            if (isset($_POST['save'])) {
				function test_input($data)
				{
					$data = trim($data);
					$data = stripslashes($data);
					$data = htmlspecialchars($data);
					return $data;
				}
                // sanitize basics
                $medicine_number = intval(test_input($_POST['medicine_number']));
                $date            = test_input($_POST['date']);
                $code            = test_input($_POST['code']);
                $branch          = $_SESSION['user']['branch_id'];
                $user            = $_SESSION['user']['id'];
                $Epilepsy        = $branch == 6 ? test_input($_POST['Epilepsy']) : '';

                // get last 'type' from resption
                $stm = $con->prepare("SELECT type FROM resption WHERE code = ? AND branch = ? ORDER BY date DESC LIMIT 1");
                $stm->execute([$code, $branch]);
                $type = $stm->fetchColumn();

                // prepare arrays
                $quantities      = [];
                $residualUpdates = [];

                for ($i = 1; $i <= $medicine_number; $i++) {
                    $medId = test_input($_POST["medicine_name_$i"]);
                    $qty   = intval(test_input($_POST["medicine_quantity_$i"]));

                    // fetch pharmacy info
                    $stm = $con->prepare("SELECT name,type,residual FROM pharmacy WHERE id = ?");
                    $stm->execute([$medId]);
                    $info = $stm->fetch(PDO::FETCH_ASSOC);

                    $unit = $info['type'] === 'old' ? 'شريط' : 'حبة';
                    $quantities[] = "{$info['name']} {$qty} ({$unit})";

                    $residualNew = $info['residual'] - $qty;
                    $residualUpdates[] = ['id'=>$medId,'residual'=>$residualNew];
                }

                $quantity_name = implode(',', $quantities);

                // prevent duplicate same day
                $check = $con->prepare("SELECT 1 FROM pure_pharmacy WHERE date = ? AND code = ? AND branch = ?");
                $check->execute([$date, $code, $branch]);
                if ($check->fetch()) {
                    echo '<script>swal("لا يمكن صرف العلاج مرتين في نفس اليوم لنفس الحالة","", "warning");</script>';
                } else {
                    // insert
                    $ins = $con->prepare("
                      INSERT INTO pure_pharmacy
                        (branch,name,code,date,quantity,sender_name,type,Epilepsy)
                      VALUES (?,?,?,?,?,?,?,?)
                    ");
                    $ins->execute([
                        $branch,
                        $quantity_name,
                        $code,
                        $date,
                        $quantity_name,
                        $user,
                        $type,
                        $Epilepsy
                    ]);

                    if ($ins->rowCount()) {
                        // update pharmacy residuals
                        $upd = $con->prepare("UPDATE pharmacy SET residual = ? WHERE id = ?");
                        foreach ($residualUpdates as $u) {
                            $upd->execute([$u['residual'], $u['id']]);
                        }
                        echo '<script src="js/send_success.js"></script>';
                    } else {
                        echo '<script src="js/send_error.js"></script>';
                    }
                }
            }
            ?>
          </div>
        </div>
      </div><!-- end col -->
    </div><!-- end row -->
  </div><!-- end page-inner -->
</div><!-- end content -->

<?php include "include/footer.php"; ?>
