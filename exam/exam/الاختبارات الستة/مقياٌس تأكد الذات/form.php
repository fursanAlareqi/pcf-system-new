<?php

if (isset($_POST['submit'])) {
 

	$sname=$_SESSION['user']['id'];
	$branch=$_SESSION['user']['branch_id'];  
	
	$res1=$_POST["res1"];
	$res2=$_POST["res2"];
	$res3=$_POST["res3"];
	$res4=$_POST["res4"];
	$res5=$_POST["res5"];
	$res6=$_POST["res6"];
	$res7=$_POST["res7"];
	$res8=$_POST["res8"];
	$res9=$_POST["res9"];
	$res10=$_POST["res10"];
	$res11=$_POST["res11"];
    $res12=$_POST["res12"];
    $res13=$_POST["res13"];
    $res14=$_POST["res14"];
    $res15=$_POST["res15"];
    $res16=$_POST["res16"];
    $res17=$_POST["res17"];
    $res18=$_POST["res18"];
    $res19=$_POST["res19"];
    $res20=$_POST["res20"];
    $res21=$_POST["res21"];
    $res22=$_POST["res22"];
    $res23=$_POST["res23"];
    $res24=$_POST["res24"];
    $res25=$_POST["res25"];
    $res26=$_POST["res26"];
    $res27=$_POST["res27"];
    $res28=$_POST["res28"];
    $res29=$_POST["res29"];
    $res30=$_POST["res30"];
   
	$x=0;

	
	if($res1=="1"){
		$x=$x+1;	
	}
	if($res2=="2"){
		$x=$x+1;	
	}
	if($res3=="2"){
		$x=$x+1;	
	}
	if($res4=="2"){
		$x=$x+1;	
	}
	if($res5=="2"){
		$x=$x+1;	
	}
	if($res6=="1"){
		$x=$x+1;	
	}
	if($res7=="2"){
		$x=$x+1;	
	}
	if($res8=="2"){
		$x=$x+1;	
	}
	if($res9=="1"){
		$x=$x+1;	
	}
	if($res10=="2"){
		$x=$x+1;	
	}
	if($res11=="2"){
		$x=$x+1;	
	}
    if($res12=="1"){
		$x=$x+1;	
	}
    if($res13=="2"){
		$x=$x+1;	
	}
    if($res14=="2"){
		$x=$x+1;	
	}
    if($res15=="2"){
		$x=$x+1;	
	}
    if($res16=="2"){
		$x=$x+1;	
	}
    if($res17=="1"){
		$x=$x+1;	
	}
    if($res18=="1"){
		$x=$x+1;	
	}
    if($res19=="2"){
		$x=$x+1;	
	}
    if($res20=="2"){
		$x=$x+1;	
	}
    if($res21=="2"){
		$x=$x+1;	
	}
    if($res22=="2"){
		$x=$x+1;	
	}
    if($res23=="2"){
		$x=$x+1;	
	}
    if($res24=="1"){
		$x=$x+1;	
	}
    if($res25=="2"){
		$x=$x+1;	
	}
    if($res26=="2"){
		$x=$x+1;	
	}
    if($res27=="2"){
		$x=$x+1;	
	}
    if($res28=="2"){
		$x=$x+1;	
	}
    if($res29=="1"){
		$x=$x+1;	
	}
    if($res30=="1"){
		$x=$x+1;	
	}

    $name=$_POST["name"];
   

	
	$sql="INSERT INTO self_confirmation_exam(exam_marke,names,branch,sname) VALUES ('$x','$name','$branch','$sname')";
	mysqli_query($con,$sql);
    $extra="../";
    echo "<script>window.location.href='".$extra."'</script>";

}
?>