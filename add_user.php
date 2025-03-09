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
					<form action="" method="post" enctype="multipart/form-data">
						<div class="card">
							<div class="card-header">
								<div class="card-title"> اضافة موظف</div>
							</div>
							<div class="card-body">
								<div class="row">


									<div class="col-md-6 col-lg-4">



										<div class="form-group form-floating-label">

											<input id="inputFloatingLabel" type="text" name="name" class="form-control input-border-bottom" required>
											<label for="inputFloatingLabel" class="placeholder">اسم الموظف</label>
										</div>
										<div class="form-group form-floating-label">
											<input id="inputFloatingLabel" type="tel" name="mobile" class="form-control input-border-bottom" id="nmbrone" pattern="[7]{1}[7,1,3,0,8]{1}[0-9]{7}" required>
											<label for="inputFloatingLabel" class="placeholder">رقم الجوال</label>
										</div>
										<div class="form-group">
											<label for="exampleFormControlFile1">اضافة صورة</label>
											<input type="file" name="image_1" class="form-control-file" id="exampleFormControlFile1">
										</div>


									</div>
									<div class="col-md-6 col-lg-4">

										<div class="form-group form-floating-label">
											<input id="inputFloatingLabel" type="text" name="username" class="form-control input-border-bottom" required>
											<label for="inputFloatingLabel" class="placeholder">username</label>
										</div>

										<div class="form-group form-floating-label">
											<input id="inputFloatingLabel" type="password" name="password" class="form-control input-border-bottom" required>
											<label for="inputFloatingLabel" class="placeholder">password</label>
										</div>
										<div class="form-group form-floating-label">
											<select class="form-control input-border-bottom" name="type" id="selectFloatingLabel" required>

												<option value="مركز">مركز</option>
												<option value="مكتب">مكتب</option>

											</select>
											<label for="selectFloatingLabel" class="placeholder">مركز/مكتب</label>
										</div>

									</div>
									<div class="col-md-6 col-lg-4">


										<div class="form-group form-floating-label">
											<select class="form-control input-border-bottom" name="rule_id" id="selectFloatingLabel" required>
												<?php
												$sql = "select rule_name,id_rule from rule where id_rule<>2 and id_rule<>1 and id_rule<>6";
												$stm = $con->prepare($sql);
												$stm->execute();
												if ($stm->rowCount() > 0) {
													foreach ($stm->fetchAll() as $row) {




												?>
														<option value="<?php echo $row['id_rule']; ?>"><?php echo $row['rule_name']; ?></option>

												<?php
													}
												}
												?>
											</select>
											<label for="selectFloatingLabel" class="placeholder">الوظيفة</label>
										</div>



										<div class="form-group form-floating-label">
											<select class="form-control input-border-bottom" name="branch_id" id="selectFloatingLabel" required>
												<?php
												$sql = "select branch_name,id from branch";
												$stm = $con->prepare($sql);
												$stm->execute();
												if ($stm->rowCount() > 0) {
													foreach ($stm->fetchAll() as $row) {


												?>
														<option value="<?php echo $row['id']; ?>"><?php echo $row['branch_name']; ?></option>

												<?php
													}
												}
												?>
											</select>
											<label for="selectFloatingLabel" class="placeholder">الفرع</label>
										</div>


									</div>
								</div>
							</div>
							<div class="card-action">

								<input class="btn btn-success" type="submit" name="save" value="save">
								<input class="btn btn-danger" type="reset" value="Cancel">
							</div>






						</div>
					</form>
				</div>

				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h4 class="card-title"> جدول الموظفين</h4>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table id="multi-filter-select" class="table table-bordered table-head-bg-info table-bordered-bd-info mt-4">
									<thead>
										<tr>
											<th>اسم الموظف</th>
											<th> مركز/مكتب</th>
											<th>رقم الجوال</th>
											<th>username</th>
											<th>الفرع</th>
											<th>الوظيفة</th>
											<th>عدد ايام الاجازة</th>
											<th>تعديل</th>
											<th>تغيير كلمة السر</th>

										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>اسم الموظف</th>
											<th> مركز/مكتب</th>
											<th>رقم الجوال</th>
											<th>username</th>
											<th>الفرع</th>
											<th>الوظيفة</th>
											<th>عدد ايام الاجازة</th>
											<th>تعديل</th>
											<th>تغيير كلمة السر</th>


										</tr>
									</tfoot>
									<tbody>
										<?php
										$sql = "select * from user u  join rule r  on u.rule_id=r.id_rule and rule_id<>6";
										$stm = $con->prepare($sql);
										$stm->execute();
										if ($stm->rowCount() > 0) {
											foreach ($stm->fetchAll() as $row) {

										?>

												<tr>
													<td><?php echo $row['name'] ?></td>
													<td><?php echo $row['type'] ?></td>
													<td><?php echo $row['mobile'] ?></td>
													<td><?php echo $row['username'] ?></td>

													<td><?php
														$id = $row['branch_id'];
														$sql = "select branch_name from branch where id=? ";
														$stms = $con->prepare($sql);
														$stms->execute(array($id));
														$t = $stms->fetch();
														echo $t['branch_name']; ?>
													</td>
													<td><?php echo $row['rule_name'] ?></td>
													<td><?php echo $row['vacation'] ?></td>
													<td>
														<a href="user_edit.php?action=edit&id=<?php echo $row['id'] ?>">
															<button class="btn btn-success"><i class="fa fa-pencil"></i>تعديل</button>
														</a>

													</td>
													<td>

														<a href="chang_password.php?action=edit&id=<?php echo $row['id'] ?>">
															<button class="btn btn-danger"><i class="fa fa-pencil"></i>تغيير كلمة السر</button>
														</a>
													</td>


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
	if (isset($_POST['save'])) {

		$name = trim($_POST['name']);
		$mobile = trim($_POST['mobile']);
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$password = password_hash($password, PASSWORD_DEFAULT);
		$rule_id = trim($_POST['rule_id']);
		$branch_id = trim($_POST['branch_id']);
		$type = trim($_POST['type']);
		// $user=$_SESSION['user']['id'];

		//اضافة صورة
		$exti = array('jpg', 'png', 'gif', 'jpeg', 'ico');
		$file1 = $_FILES["image_1"];
		$file_name1 = $file1["name"];
		$file_tmp1 = $file1["tmp_name"];
		$file_name_expload1 = explode('.', $file_name1);
		$file_name_expload_end1 = strtolower(end($file_name_expload1));
		//التحقق انه تم اختيار ملف


		//التحقق ان اسم المنتج موجود وليس ارقام





		if (empty($name)) {


			echo '<script>swal("يرجاء ادخال اسم الطبيب ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
		} elseif (is_numeric($name)) {


			echo '<script>swal("اسم الطبيب لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
		} elseif (empty($username)) {


			echo '<script>swal("يرجاء ادخال username  ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
		} elseif (is_numeric($username)) {


			echo '<script>swal("username  لا يمكن ان يكون اراقم", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
		} elseif (empty($mobile)) {


			echo '<script>swal("يرجاء ادخال رقم هاتف الطبيب ", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
		} elseif (!is_numeric($mobile)) {


			echo '<script>swal("رقم الطبيب لا يمكن ان يكون احرف", "لم يتم رفع البيانات", {
					icon : "warning",
					buttons: {        			
						confirm: {
							className : "btn btn-warning"
						}
					},
				});</script>';
		} elseif (empty($password)) {


			echo '<script>swal("يرجاء ادخال عنوان الطبيب ", "لم يتم رفع البيانات", {
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
		else {
			$sql = "select * from user where username=? or mobile=?  ";
			$stm = $con->prepare($sql);
			$stm->execute(array($username, $mobile));
			if ($stm->rowCount()) {

				echo '<script>swal("username or phone يرجاء تغيير ال ", "لم يتم رفع البيانات ", {
						icon : "warning",
						buttons: {        			
							confirm: {
								className : "btn btn-warning"
							}
						},
					});</script>';
			} else {
				if ($_FILES['image_1']['error'] == 4) {

					$file_name1 = 'user.jpg';
					$query = "INSERT INTO user(name,mobile,username,password,rule_id,branch_id,image)
						values (?,?,?,?,?,?,?) ";
					$stm = $con->prepare($query);
					$stm->execute(array($name, $mobile, $username, $password, $rule_id, $branch_id, $file_name1));
					if ($stm->rowCount()) {
						echo '<script src="js/send_success.js"></script>';
					} else {
						echo '<script src="js/send_error.js"></script>';
					}
				} else {
					//التحقق من الامتداد
					if (!in_array($file_name_expload_end1, $exti)) {
						echo '<script>swal("   الملف الذي اخترة ليس صورة    ", "لم يتم رفع البيانات", {
								icon : "warning"
								buttons: {        			
									confirm: {
										className : "btn btn-warning"
									}
								},
							});</script>';
					} else {

						move_uploaded_file($file_tmp1, "user_img/" . $file_name1);
						$query = "INSERT INTO user(name,mobile,username,password,rule_id,branch_id,image)
							values (?,?,?,?,?,?,?) ";
						$stm = $con->prepare($query);
						$stm->execute(array($name, $mobile, $username, $password, $rule_id, $branch_id, $file_name1));
						if ($stm->rowCount()) {
							echo '<script src="js/send_success.js"></script>';
						} else {
							echo '<script src="js/send_error.js"></script>';
						}
					}
				}
			}
		}
	}
} else {
	echo "<script> window.open('index.php','_self')</script>";
}
?>