<?php
include "include/header.php";

if (!isset($_SESSION['user'])) {

	echo "<script> window.open('logout.php','_self')</script>";
	// header("location:login.php");
} else {
?>

	<!-- End Sidebar -->

	<?php $today = date('Y-m-d'); ?>

	<div class="content">
		<div class="panel-header bg-primary-gradient">
			<div class="page-inner py-5">
				<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
					<div>
						<h2 class="text-white pb-2 fw-bold">مؤسسة الرعاية النفسية التنموية</h2>
						<h5 class="text-white op-7 mb-2">PSYCHIATRIC CARE DEVELOPMENTAL FOUNDATION</h5>

					</div>

				</div>
			</div>
		</div>
		<?php if ($_SESSION['user']['rule_id'] == 2 || $_SESSION['user']['rule_id'] == 6) { ?>
			<div class="page-inner mt--5">

				<div class="row row-card-no-pd">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<div class="card-head-row card-tools-still-right">
									<h4 class="card-title">Users Geolocation</h4>


								</div>
								<script type="text/javascript">


								</script>
							</div>
							<div class="card-body">
								<div class="row">
									<div class="col-sm-6 col-md-3">
										<div class="card card-stats  card-round">
											<div class="card-body">
												<div class="row">
													<div class="col-5">
														<div class="icon-big text-center icon-primary bubble-shadow-small">
															<i class="flaticon-user"></i>
														</div>
													</div>
													<div class="col-7 col-stats">
														<div class="numbers">
															<p class="card-category">Employee</p>
															<h4 class="card-title">
																<?php
																$sql = "select count(*) as num from user ";
																$stm = $con->prepare($sql);
																$stm->execute();
																$num = $stm->fetch();
																echo $num['num'];
																?>

															</h4>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="card card-stats  card-round">
											<div class="card-body">
												<div class="row">
													<div class="col-5">
														<div class="icon-big text-center icon-info bubble-shadow-small">
															<i class="flaticon-users"></i>
														</div>
													</div>
													<div class="col-7 col-stats">
														<div class="numbers">
															<p class="card-category">Number of cases</p>
															<h4 class="card-title">
																<?php
																$sql = "select count(DISTINCT(code)) as num from resption ";
																$stm = $con->prepare($sql);
																$stm->execute();
																$num = $stm->fetch();
																echo $num['num'];
																?>
															</h4>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="card card-stats card-round">
											<div class="card-body">
												<div class="row">
													<div class="col-5">
														<div class="icon-big text-center icon-success bubble-shadow-small">
															<i class="flaticon-users"></i>
														</div>
													</div>
													<div class="col-7 col-stats">
														<div class="numbers">
															<p class="card-category"> cases in IBB</p>
															<h4 class="card-title">
																<?php
																$sql = "select count(DISTINCT(code)) as num from resption where branch=? ";
																$stm = $con->prepare($sql);
																$stm->execute(array("5"));
																$num = $stm->fetch();
																echo $num['num'];
																?>
															</h4>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="card card-stats  card-round">
											<div class="card-body">
												<div class="row">
													<div class="col-5">
														<div class="icon-big text-center icon-secondary bubble-shadow-small">
															<i class="flaticon-users"></i>
														</div>
													</div>
													<div class="col-7 col-stats">
														<div class="numbers">
															<p class="card-category"> cases in TAIZ</p>
															<h4 class="card-title">
																<?php
																$sql = "select count(DISTINCT(code)) as num from resption where branch=? ";
																$stm = $con->prepare($sql);
																$stm->execute(array("6"));
																$num = $stm->fetch();
																echo $num['num'];
																?>
															</h4>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="card-body">
								<div class="row">
									<div class="col-sm-6 col-md-3">
										<div class="card card-stats card-success card-round">
											<div class="card-body ">
												<div class="row">
													<div class="col-5">
														<div class="icon-big text-center">
															<i class="flaticon-interface-6"></i>
														</div>
													</div>
													<div class="col-7 col-stats">
														<div class="numbers">
															<p class="card-category">Reception IBB</p>
															<h4 class="card-title" id="div_refresh_ab">
																<h1></h1>

															</h4>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="card card-stats card-success card-round">
											<div class="card-body ">
												<div class="row">
													<div class="col-5">
														<div class="icon-big text-center">
															<i class="flaticon-interface-6"></i>
														</div>
													</div>
													<div class="col-7 col-stats">
														<div class="numbers">
															<p class="card-category">Reception TAIZ</p>
															<h4 class="card-title" id="div_refresh_taiz">

															</h4>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>


									<div class="col-sm-6 col-md-3">
										<div class="card card-stats card-secondary card-round">
											<div class="card-body ">
												<div class="row">
													<div class="col-5">
														<div class="icon-big text-center">
															<i class="flaticon-chat-8"></i>
														</div>
													</div>
													<div class="col-7 col-stats">
														<div class="numbers">
															<p class="card-category">Psyshological IBB</p>
															<h4 class="card-title" id="div_refresh_psyshological_ab">
																<h1></h1>

															</h4>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="card card-stats card-secondary card-round">
											<div class="card-body ">
												<div class="row">
													<div class="col-5">
														<div class="icon-big text-center">
															<i class="flaticon-chat-8"></i>
														</div>
													</div>
													<div class="col-7 col-stats">
														<div class="numbers">
															<p class="card-category">Psyshological TAIZ</p>
															<h4 class="card-title" id="div_refresh_psyshological_taiz">

															</h4>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>


								</div>
							</div>

							<div class="card-body">
								<div class="row">


									<div class="col-sm-6 col-md-3">
										<div class="card card-stats card-info card-round">
											<div class="card-body ">
												<div class="row">
													<div class="col-5">
														<div class="icon-big text-center">
															<i class="fas fa-user-md"></i>
														</div>
													</div>
													<div class="col-7 col-stats">
														<div class="numbers">
															<p class="card-category">Doctor TAIZ</p>
															<h4 class="card-title" id="">
																39
															</h4>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="card card-stats card-primary card-round">
											<div class="card-body ">
												<div class="row align-items-center">
													<div class="col-5">
														<div class="icon-big text-center ">
															<i class="flaticon-agenda-1"></i>
														</div>
													</div>
													<div class="col-7 col-stats">
														<div class="numbers">
															<p class="card-category">Case Management IBB</p>
															<h4 class="card-title" id="div_refresh_Case_stude_ab">
																<h1></h1>

															</h4>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6 col-md-3">
										<div class="card card-stats card-primary card-round">
											<div class="card-body ">
												<div class="row">
													<div class="col-5">
														<div class="icon-big text-center">
															<i class="flaticon-agenda-1"></i>
														</div>
													</div>
													<div class="col-7 col-stats">
														<div class="numbers">
															<p class="card-category">Case Management TAIZ</p>
															<h4 class="card-title" id="div_refresh_Case_stude_taiz">

															</h4>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row mt--2">
					<div class="col-md-6">
						<div class="card full-height">
							<div class="card-body">
								<div class="card-title">Overall statistics</div>
								<div class="card-category">Information about statistics in system</div>
								<div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
									<div class="px-2 pb-2 pb-md-0 text-center">
										<div id="circles-m"></div>
										<h6 class="fw-bold mt-3 mb-0">Man</h6>
									</div>
									<div class="px-2 pb-2 pb-md-0 text-center">
										<div id="circles-w"></div>
										<h6 class="fw-bold mt-3 mb-0">Woman</h6>
									</div>
									<div class="px-2 pb-2 pb-md-0 text-center">
										<div id="circles-b"></div>
										<h6 class="fw-bold mt-3 mb-0">Boy</h6>
									</div>
									<div class="px-2 pb-2 pb-md-0 text-center">
										<div id="circles-g"></div>
										<h6 class="fw-bold mt-3 mb-0">Girl</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="card full-height">
							<div class="card-body">
								<div class="card-title">Total GBV & NON GBV statistics</div>
								<div class="row py-3">
									<div class="col-md-4 d-flex flex-column justify-content-around">
										<div>
											<h6 class="fw-bold text-uppercase text-success op-8">Total GBV</h6>
											<h3 class="fw-bold">
												<?php
												$sql = "SELECT count(id) as num from  mange_convert  where violense <> ?  ";
												$stm = $con->prepare($sql);
												$stm->execute(array(""));
												$violense_num = $stm->fetch();
												echo $violense_num['num'];
												?>
											</h3>
										</div>
										<div>
											<h6 class="fw-bold text-uppercase text-danger op-8">Total NON GBV</h6>
											<h3 class="fw-bold">
												<?php
												$sql = "SELECT count(id) as num from  mange_convert  where violense = ?  ";
												$stm = $con->prepare($sql);
												$stm->execute(array(""));
												$violense_num = $stm->fetch();
												echo $violense_num['num'];
												?>

											</h3>
										</div>
									</div>
									<div class="col-md-8">
										<div id="chart-container">
											<canvas id="totalIncomeChart"></canvas>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="page-inner">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<div class="card-title" align="center">عدد الحالات المستقبلة في كل شهر</div>
							</div>
							<div class="card-body">

								<div class="chart-container">
									<canvas id="lineChart"></canvas>
								</div>
								<div id="myChartLegend"></div>
							</div>
						</div>
					</div>



					<div class="col-md-6">
						<div class="card">
							<div class="card-header">
								<div class="card-title" align="center">نوع الاقامة</div>
							</div>
							<div class="card-body">
								<div class="chart-container">
									<canvas id="doughnutChart" style="width: 50%; height: 50%"></canvas>
								</div>
							</div>
						</div>
					</div>



				</div>
			</div>

	</div>

<?php } ?>


<!-- Custom template | don't include it in your project! -->

<!-- End Custom template -->

<!-- refresh_bag.js -->
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script src="js/refresh_resption_taiz.js"></script>
<script src="js/refresh_resption_ab.js"></script>
<script src="js/refresh_resption_Doctor_taiz.js"></script>
<script src="js/refresh_resption_Doctor_ab.js"></script>
<script src="js/refresh_resption_psyshological_taiz.js"></script>
<script src="js/refresh_resption_psyshological_ab.js"></script>
<script src="js/refresh_resption_Case_stude_taiz.js"></script>
<script src="js/refresh_resption_Case_stude_ab.js"></script>
<!-- end refresh_bag.js -->
<!--   Core JS Files   -->
<?php

	include "include/footer.php";
}
?>