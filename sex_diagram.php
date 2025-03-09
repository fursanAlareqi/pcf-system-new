<style>
	.circles-text {
		font-size: 10px
	}
</style>
<?php
$sql = "SELECT count(id) as num from resption ";
$stm = $con->prepare($sql);
$stm->execute();
$all_count = $stm->fetch();
$all_count = $all_count['num'];


$sql = "SELECT count(id) as num from resption where (TIMESTAMPDIFF(YEAR,brithday,CURDATE()) >= ?) and sex=? ";
$stm = $con->prepare($sql);
$stm->execute(array(18, "ذكر"));
$Man_count = $stm->fetch();
$Man_text = $Man_count['num'];
$Man_value = ($Man_text / $all_count) * 100;



$sql = "SELECT count(id) as num from resption where (TIMESTAMPDIFF(YEAR,brithday,CURDATE()) >= ?) and sex=? ";
$stm = $con->prepare($sql);
$stm->execute(array(18, "انثى"));
$Woman_count = $stm->fetch();
$Woman_text = $Woman_count['num'];
$Woman_value = ($Woman_text / $all_count) * 100;


$sql = "SELECT count(id) as num from resption where (TIMESTAMPDIFF(YEAR,brithday,CURDATE()) < ?) and sex=? ";
$stm = $con->prepare($sql);
$stm->execute(array(18, "ذكر"));
$Boy_count = $stm->fetch();
$Boy_text = $Boy_count['num'];
$Boy_value = ($Boy_text / $all_count) * 100;


$sql = "SELECT count(id) as num from resption where (TIMESTAMPDIFF(YEAR,brithday,CURDATE()) < ?) and sex=? ";
$stm = $con->prepare($sql);
$stm->execute(array(18, "انثى"));
$Girl_count = $stm->fetch();
$Girl_text = $Girl_count['num'];
$Girl_value = ($Girl_text / $all_count) * 100;


?>
<script>
	Circles.create({
		id: 'circles-m',
		radius: 45,
		value: <?php echo $Man_value; ?>,
		maxValue: 100,
		width: 7,
		text: <?php echo $Man_text; ?>,
		colors: ['#f1f1f1', '#1572e8'],
		duration: 400,
		wrpClass: 'circles-wrp',
		textClass: 'circles-text',
		styleWrapper: true,
		styleText: true
	})

	Circles.create({
		id: 'circles-w',
		radius: 45,
		value: <?php echo $Woman_value; ?>,
		maxValue: 100,
		width: 7,
		text: <?php echo $Woman_text; ?>,
		colors: ['#f1f1f1', '#F25961'],
		duration: 400,
		textClass: 'circles-text',
		styleWrapper: true,
		styleText: true
	})

	Circles.create({
		id: 'circles-b',
		radius: 45,
		value: <?php echo $Boy_value; ?>,
		maxValue: 100,
		width: 7,
		text: <?php echo $Boy_text; ?>,
		colors: ['#f1f1f1', '#2BB930'],
		duration: 400,
		wrpClass: 'circles-wrp',
		textClass: 'circles-text',
		styleWrapper: true,
		styleText: true
	})
	Circles.create({
		id: 'circles-g',
		radius: 45,
		value: <?php echo $Girl_value; ?>,
		maxValue: 100,
		width: 7,
		text: <?php echo $Girl_text; ?>,
		colors: ['#f1f1f1', '#F251F1'],
		duration: 400,
		wrpClass: 'circles-wrp',
		textClass: 'circles-text',
		styleWrapper: true,
		styleText: true
	})

	<?php
	$total = 0;
	$violense_type = array("intimate partner violence", "Forced Marriage", "Psychological \Emotional Abuse", "Physical Assault", "Denial of recourse - opportunities or services", "Sexual Assault", "Rape", "Having a mental disorder");
	for ($i = 0; $i < sizeof($violense_type); $i++) {
		$sql = "SELECT count(id) as num from  mange_convert  where violense like ?  ";
		$stm = $con->prepare($sql);
		$stm->execute(array("%$violense_type[$i]%"));
		$total = $total + $stm->rowCount();
		$violense_num = $stm->fetch();
		$violense_diagram_value[$i] = $violense_num['num'];
	}
	?>
	var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

	var mytotalIncomeChart = new Chart(totalIncomeChart, {
		type: 'bar',
		data: {
			labels: ["In", "Fo", "Ps", "ph", "De", "Se", "Rape", "Ha"],
			datasets: [{
				label: "Total Income",
				backgroundColor: '#ff9e27',
				borderColor: 'rgb(23, 125, 255)',
				data: [<?php echo $violense_diagram_value[0] . "," . $violense_diagram_value[1] . "," . $violense_diagram_value[2] . "," . $violense_diagram_value[3] . "," . $violense_diagram_value[4] . "," . $violense_diagram_value[5] . "," . $violense_diagram_value[6] . "," . $violense_diagram_value[7]; ?>],
			}],
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			legend: {
				display: false,
			},
			scales: {
				yAxes: [{
					ticks: {
						display: false //this will remove only the label
					},
					gridLines: {
						drawBorder: false,
						display: false
					}
				}],
				xAxes: [{
					gridLines: {
						drawBorder: false,
						display: false
					}
				}]
			},
		}
	});

	$('#lineChart').sparkline([105, 103, 123, 100, 95, 105, 115], {
		type: 'line',
		height: '70',
		width: '100%',
		lineWidth: '2',
		lineColor: '#ffa534',
		fillColor: 'rgba(255, 165, 52, .14)'
	});
</script>





<?php
$Year = date("Y");
$sql = "SELECT count(id) as num from resption where   date LIKE ? ";
$stm = $con->prepare($sql);
$stm->execute(array("%$Year-01-%"));
$Jan_count = $stm->fetch();
$Jan_value = $Jan_count['num'];

$sql = "SELECT count(id) as num from resption where   date LIKE ? ";
$stm = $con->prepare($sql);
$stm->execute(array("%$Year-02-%"));
$Feb_count = $stm->fetch();
$Feb_value = $Feb_count['num'];

$sql = "SELECT count(id) as num from resption where   date LIKE ? ";
$stm = $con->prepare($sql);
$stm->execute(array("%$Year-03-%"));
$Mar_count = $stm->fetch();
$Mar_value = $Mar_count['num'];

$sql = "SELECT count(id) as num from resption where   date LIKE ? ";
$stm = $con->prepare($sql);
$stm->execute(array("%$Year-04-%"));
$Apr_count = $stm->fetch();
$Apr_value = $Apr_count['num'];

$sql = "SELECT count(id) as num from resption where   date LIKE ? ";
$stm = $con->prepare($sql);
$stm->execute(array("%$Year-05-%"));
$May_count = $stm->fetch();
$May_value = $May_count['num'];

$sql = "SELECT count(id) as num from resption where   date LIKE ? ";
$stm = $con->prepare($sql);
$stm->execute(array("%$Year-06-%"));
$Jun_count = $stm->fetch();
$Jun_value = $Jun_count['num'];

$sql = "SELECT count(id) as num from resption where   date LIKE ? ";
$stm = $con->prepare($sql);
$stm->execute(array("%$Year-07-%"));
$Jul_count = $stm->fetch();
$Jul_value = $Jul_count['num'];

$sql = "SELECT count(id) as num from resption where   date LIKE ? ";
$stm = $con->prepare($sql);
$stm->execute(array("%$Year-08-%"));
$Aug_count = $stm->fetch();
$Aug_value = $Aug_count['num'];

$sql = "SELECT count(id) as num from resption where   date LIKE ? ";
$stm = $con->prepare($sql);
$stm->execute(array("%$Year-09-%"));
$Sep_count = $stm->fetch();
$Sep_value = $Sep_count['num'];

$sql = "SELECT count(id) as num from resption where   date LIKE ? ";
$stm = $con->prepare($sql);
$stm->execute(array("%$Year-10-%"));
$Oct_count = $stm->fetch();
$Oct_value = $Oct_count['num'];

$sql = "SELECT count(id) as num from resption where   date LIKE ? ";
$stm = $con->prepare($sql);
$stm->execute(array("%$Year-11-%"));
$Nov_count = $stm->fetch();
$Nov_value = $Nov_count['num'];

$sql = "SELECT count(id) as num from resption where   date LIKE ? ";
$stm = $con->prepare($sql);
$stm->execute(array("%$Year-12-%"));
$Dec_count = $stm->fetch();
$Dec_value = $Dec_count['num'];




$sql = "SELECT count(id) as num from resption where    type=? and place=?";
$stm = $con->prepare($sql);
$stm->execute(array("جديد", "مقيم/ة"));
$Resident_count = $stm->fetch();
$Resident_value = $Resident_count['num'];




$sql = "SELECT count(id) as num from resption where    type=? and place=?";
$stm = $con->prepare($sql);
$stm->execute(array("جديد", "نازح/ة"));
$Displaced_persons_count = $stm->fetch();
$Displaced_persons_value = $Displaced_persons_count['num'];


$sql = "SELECT count(id) as num from resption where    type=? and place=?";
$stm = $con->prepare($sql);
$stm->execute(array("جديد", "لاجى/ة"));
$refugee_count = $stm->fetch();
$refugee_value = $refugee_count['num'];

?>











<script>
	var lineChart = document.getElementById('lineChart').getContext('2d'),
		doughnutChart = document.getElementById('doughnutChart').getContext('2d');


	var myLineChart = new Chart(lineChart, {
		type: 'line',
		data: {
			labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
			datasets: [{
				label: "Active Users",
				borderColor: "#1d7af3",
				pointBorderColor: "#FFF",
				pointBackgroundColor: "#1d7af3",
				pointBorderWidth: 2,
				pointHoverRadius: 4,
				pointHoverBorderWidth: 1,
				pointRadius: 4,
				backgroundColor: 'transparent',
				fill: true,
				borderWidth: 2,
				data: [<?php echo $Jan_value; ?>, <?php echo $Feb_value; ?>, <?php echo $Mar_value; ?>, <?php echo $Apr_value; ?>,
					<?php echo $May_value; ?>, <?php echo $Jun_value; ?>, <?php echo $Jul_value; ?>, <?php echo $Aug_value; ?>, <?php echo $Sep_value; ?>, <?php echo $Oct_value; ?>, <?php echo $Nov_value; ?>, <?php echo $Dec_value; ?>
				]
			}]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			legend: {
				position: 'bottom',
				labels: {
					padding: 10,
					fontColor: '#1d7af3',
				}
			},
			tooltips: {
				bodySpacing: 4,
				mode: "nearest",
				intersect: 0,
				position: "nearest",
				xPadding: 10,
				yPadding: 10,
				caretPadding: 10
			},
			layout: {
				padding: {
					left: 15,
					right: 15,
					top: 15,
					bottom: 15
				}
			}
		}
	});





	var myDoughnutChart = new Chart(doughnutChart, {
		type: 'doughnut',
		data: {
			datasets: [{
				data: [<?php echo $Resident_value; ?>, <?php echo $Displaced_persons_value; ?>, <?php echo $refugee_value; ?>],
				backgroundColor: ['#f3545d', '#fdaf4b', '#1d7af3']
			}],

			labels: [
				'مقيم',
				'نازح',
				'لاجئ'
			]
		},
		options: {
			responsive: true,
			maintainAspectRatio: false,
			legend: {
				position: 'bottom'
			},
			layout: {
				padding: {
					left: 20,
					right: 20,
					top: 20,
					bottom: 20
				}
			}
		}
	});



	// bind onClick event to all LI-tags of the legend
</script>