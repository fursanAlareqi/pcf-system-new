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
    $res31=$_POST["res31"];
    $res32=$_POST["res32"];
    $res33=$_POST["res33"];
    $res34=$_POST["res34"];
    $res35=$_POST["res35"];
    $res36=$_POST["res36"];
    $res37=$_POST["res37"];
    $res38=$_POST["res38"];
    $res39=$_POST["res39"];
    $res40=$_POST["res40"];
    $res41=$_POST["res41"];
    $res42=$_POST["res42"];
    $res43=$_POST["res43"];
    $res44=$_POST["res44"];
    $res45=$_POST["res45"];
    $res46=$_POST["res46"];
    $res47=$_POST["res47"];
    $res48=$_POST["res48"];
    $res49=$_POST["res49"];
    $res50=$_POST["res50"];
	$res51=$_POST["res51"];
	$res52=$_POST["res52"];
	$res53=$_POST["res53"];
	$res54=$_POST["res54"];
	$res55=$_POST["res55"];
	$res56=$_POST["res56"];
	$res57=$_POST["res57"];
	$res58=$_POST["res58"];
	$res59=$_POST["res59"];
	$res60=$_POST["res60"];
	

	
    $name=$_POST["name"];
    

	
	$sql="INSERT INTO sakse_exam(
	res1,res2,res3,res4,res5,res6,res7,res8,res9,res10,
	res11,res12,res13,res14,res15,res16,res17,res18,res19,res20,
	res21,res22,res23,res24,res25,res26,res27,res28,res29,res30,
	res31,res32,res33,res34,res35,res36,res37,res38,res39,res40,
	res41,res42,res43,res44,res45,res46,res47,res48,res49,res50,
	res51,res52,res53,res54,res55,res56,res57,res58,res59,res60,names,branch,sname) VALUES (
	'$res1','$res2','$res3','$res4','$res5','$res6','$res7','$res8','$res9','$res10',
	'$res11','$res12','$res13','$res14','$res15','$res16','$res17','$res18','$res19','$res20',
	'$res21','$res22','$res23','$res24','$res25','$res26','$res27','$res28','$res29','$res30',
	'$res31','$res32','$res33','$res34','$res35','$res36','$res37','$res38','$res39','$res40',
	'$res41','$res42','$res43','$res44','$res45','$res46','$res47','$res48','$res49','$res50',
	'$res51','$res52','$res53','$res54','$res55','$res56','$res57','$res58','$res59','$res60',$name,'$branch','$sname')";

	mysqli_query($con,$sql);
    $extra="../";
    echo "<script>window.location.href='".$extra."'</script>";

}
?>