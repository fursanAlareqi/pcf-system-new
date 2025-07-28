<?php
include "include/header.php";

if (!isset($_SESSION['user'])) {
    echo "<script> window.open('logout.php','_self')</script>";
    exit;
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
                                <div class="card-title">   البيانات </div>
                            </div>
                            <div class="card-body">

                                <div class="form-group">
                                    <label>الوصف</label>
                                    <textarea name="query" class="form-control" rows="3" required></textarea>
                                </div>

                                <div class="form-group">
                                    <label>الكود</label>
                                    <input type="text" name="params" class="form-control" placeholder="مثال: name,123,test@example.com" />
                                </div>

                                <div class="card-action">
                                    <button type="submit" name="execute_query" class="btn btn-success">تنفيذ</button>
                                </div>

                            </div>
                        </div>
                    </form>

                    <?php
                    if (isset($_POST['execute_query'])) {
                        $query = trim($_POST['query']);
                        $params_input = trim($_POST['params']);

                        $params = [];
                        if (!empty($params_input)) {
                            $params = array_map('trim', explode(',', $params_input));
                        }

                        try {
                            $stm = $con->prepare($query);
                            $stm->execute($params);

                            echo '<div class="alert alert-success">تم تنفيذ الاستعلام بنجاح.</div>';

                            // إذا كان استعلام SELECT، اعرض النتائج
                            if (preg_match('/^\s*SELECT/i', $query)) {
                                $results = $stm->fetchAll(PDO::FETCH_ASSOC);
                                if ($results) {
                                    echo "<pre>" . print_r($results, true) . "</pre>";
                                } else {
                                    echo "<div>لا توجد نتائج.</div>";
                                }
                            }

                        } catch (PDOException $e) {
                            echo '<div class="alert alert-danger">خطأ في الاستعلام: ' . $e->getMessage() . '</div>';
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>

<?php
    include "include/footer.php";
} else {
    echo "<script> window.open('index.php','_self')</script>";
}
?>
