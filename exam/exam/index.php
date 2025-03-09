<?php

session_start();
if(!isset($_SESSION['user'])){
	
	echo "<script> window.open('../logout.php','_self')</script>";
 // header("location:login.php");
 }if($_SESSION['user']['rule_id']==7||$_SESSION['user']['rule_id']==15||$_SESSION['user']['rule_id']==2 ||$_SESSION['user']['rule_id']==6||$_SESSION['user']['rule_id']==16||$_SESSION['user']['rule_id']==18){
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="description" content="my app">
	<script type="text/javascript" src="jquery-3.6.0.min.js"></script>
	<script type="text/javascript" src="jquery.cycle2.min.js"></script>
	<script type="text/javascript" >


function prevrnBack(){
	window.history.forward();
}
setTimeout(prevrnBack(),0);
window.onunload=function(){null};
</script>









<title>مؤسسة الرعاية النفسية التنموية</title>
<link rel="stylesheet" type="text/css" href="styl.css">
	<style type="text/css">
	

	@media screen and (max-width: 500px){

.head{
	font-size: 25px;
	margin: auto;
	margin-top: 10px;
	margin-bottom: 100px;
}


		.continer .card .box .contente .number{
	top: 25px;
}

	}
	</style> 

</head>
<body>

<div class="image">
    <img src="1.png" width="20%" height="20%">
		<h1>مراكز الدعم النفسي <br> الاختبارات </h1>
    <a href="../">  خروج </a>
    </div>


	   	<div class="first">
	   	<div class="continer">
	   		<div class="card">
	   			<div>
	   				<div class="box">
	   					<div class="contente">
	   						<h2 class="number">01</h2>
	   						<h3>اختبار بيك للاكتئاب</h3>
							   <a href="quize1">ابدا الاختبار</a>
	   					</div>
	   					
	   				</div>
	   			</div>
	   		</div>
	   		<div class="card">
	   			
				<div class="box">
					<div class="contente">
						<h2 class="number">02</h2>
						<h3>مقياس تايلور للقلق الصريح </h3>
						
						<a href="quize2">ابدا الاختبار</a>
					</div>
					
				</div>
			</div>
	   		<div class="card">
	   			<div>
	   				<div class="box">
	   					<div class="contente">
	   						<h2>03</h2>
	   						<h3>مقياس الهوس</h3>
	   						
	   						<a href="quize3">ابدا الاختبار</a>
	   					</div>

	   					
	   				</div>
	   			</div>
	   		</div>
	   	</div>
	</div>
	<div class="first">
	   	<div class="continer">
			<div class="card">
				<div>
					<div class="box">
						<div class="contente">
							<h2>04</h2>
							<h3>اختبار المعتقدات الشخصية</h3>
							
							<a href="quize4">ابدا الاختبار</a>
						</div>

						
					</div>
				</div>
				
			</div>
		
			<div class="card">
				<div>
					<div class="box">
						<div class="contente">
							<h2>05</h2>
							<h1>MMBI  </h1>
							
							<a href="mmbi">ابدا الاختبار</a>
						</div>

						
					</div>
				</div>
				
			</div>
			<div class="card">
				<div>
					<div class="box">
						<div class="contente">
							<h2>06</h2>
							<h3>قائمة الرهاب الاجتماعي</h3>
							
							<a href="قائمة الرهاب الاجتماعي">ابدا الاختبار</a>
						</div>

						
					</div>
				</div>
				
			</div>
	   		
	   		
	   		</div>
			   </div>

			   <div class="first">
	   	<div class="continer">
			<div class="card">
				<div>
					<div class="box">
						<div class="contente">
							<h2>07</h2>
							<h3>مخاوف الاطفال</h3>
							
							<a href="مخاوف الاطفال">ابدا الاختبار</a>
						</div>

						
					</div>
				</div>
				
			</div>
			<div class="card">
				<div>
					<div class="box">
						<div class="contente">
							<h2>08</h2>
							<h3>مقياس القلق الاجتماعي</h3>
							
							<a href="مقياس القلق الاجتماعي">ابدا الاختبار</a>
						</div>

						
					</div>
				</div>
				
			</div>
	   		
			<div class="card">
				<div>
					<div class="box">
						<div class="contente">
							<h2>09</h2>
							<h3>الاختبارات الستة</h3>
							
							<a href="الاختبارات الستة">ابدا الاختبار</a>
						</div>

						
					</div>
				</div>
			</div>
				
					<div class="card">
				<div>
					<div class="box">
						<div class="contente">
							<h2>10</h2>
							<h3>قائمة هاملتون لا عراض مرض الأكتئاب</h3>
							
							<a href="قائمة هاملتون">ابدا الاختبار</a>
						</div>

						
					</div>
				</div>
	   		
	   		</div>
			   </div>
</body>
</html>	
<?php }
else {
	echo "<script> window.open('../index.php','_self')</script>";
	}
?>
