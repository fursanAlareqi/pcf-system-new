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
   
	$x=0;

	
	if($res1=="1"){
		$x=$x+1;	
	}
	if($res2=="1"){
		$x=$x+1;	
	}
	if($res3=="1"){
		$x=$x+1;	
	}
	if($res4=="1"){
		$x=$x+1;	
	}
	if($res5=="1"){
		$x=$x+1;	
	}
	if($res6=="1"){
		$x=$x+1;	
	}
	if($res7=="1"){
		$x=$x+1;	
	}
	if($res8=="1"){
		$x=$x+1;	
	}
	if($res9=="1"){
		$x=$x+1;	
	}
	if($res10=="1"){
		$x=$x+1;	
	}
	if($res11=="1"){
		$x=$x+1;	
	}
    if($res12=="1"){
		$x=$x+1;	
	}
    if($res13=="1"){
		$x=$x+1;	
	}
    if($res14=="1"){
		$x=$x+1;	
	}
    if($res15=="1"){
		$x=$x+1;	
	}
    if($res16=="1"){
		$x=$x+1;	
	}
    if($res17=="1"){
		$x=$x+1;	
	}
    if($res18=="1"){
		$x=$x+1;	
	}
    if($res19=="1"){
		$x=$x+1;	
	}
    if($res20=="1"){
		$x=$x+1;	
	}
  
	if($x<=9){
		$y="خوف منخفض ";
	}
     else if($x>=10&&$x<=20){
		$y="خوف مرتفع";
	}
	$name=$_POST["name"];
    

	
	$sql="INSERT INTO childe_phobia_exam(exam_marke,exam,names,branch,sname) VALUES ('$x','$y','$name','$branch','$sname')";
	mysqli_query($con,$sql);
    $extra="../";
    echo "<script>window.location.href='".$extra."'</script>";

}
?>