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
	


 
 if($res1=="1"){
	 $x=$x+1;	
 }
 else if($res1=="2"){
    $x=$x+2;	
 }
 else if($res1=="3"){
    $x=$x+3;	
 }
 else if($res1=="4"){
    $x=$x+4;	
 }



 if($res2=="1"){
    $x=$x+1;
 }
 else if($res2=="2"){
    $x=$x+2;
 }
 else if($res2=="3"){
    $x=$x+3;	
 }
 else if($res2=="4"){
    $x=$x+4;
 }



 if($res3=="1"){
	$x=$x+1;
 }
 else if($res3=="2"){
    $x=$x+2;	
 }
 else if($res3=="3"){
    $x=$x+3;	
 }
 else if($res3=="4"){
    $x=$x+4;	
 }	
 




  if($res4=="1"){
    $x=$x+1;
 }
 else if($res4=="2"){
    $x=$x+2;	
 }
 else if($res4=="3"){
	$x=$x+3;
 }
 else if($res4=="4"){
    $x=$x+4;	
 }




 if($res5=="1"){
    $x=$x+1;
 }
 else if($res5=="2"){
    $x=$x+2;	
 }
 else if($res5=="3"){
    $x=$x+3;
 }
 else if($res5=="4"){
    $x=$x+4;	
 }



  if($res6=="1"){
    $x=$x+1;
 }
 else if($res6=="2"){
    $x=$x+2;	
 }
 else if($res6=="3"){
    $x=$x+3;
 }
else if($res6=="4"){
    $x=$x+4;	
 }





 if($res7=="1"){
    $x=$x+1;
 }
 else if($res7=="2"){
    $x=$x+2;	
 }
 else if($res7=="3"){
    $x=$x+3;	
 }
 else if($res7=="4"){
    $x=$x+4;
 }




 if($res8=="1"){
	$x=$x+1;	
 }
 else if($res8=="2"){
    $x=$x+2;	
 }
 else if($res8=="3"){
    $x=$x+3;	
 }
 else if($res8=="4"){
    $x=$x+4;
 }





 if($res9=="1"){
	$x=$x+1;
 }
 else if($res9=="2"){
    $x=$x+2;
 }
 else if($res9=="3"){
    $x=$x+3;	
 }
 else if($res9=="4"){
    $x=$x+4;	
 }



 if($res10=="1"){
    $x=$x+1;	
 }
 else if($res10=="2"){
    $x=$x+2;	
 }
 else if($res10=="3"){
	$x=$x+3;
 }
 else if($res10=="4"){
    $x=$x+4;
 }
 

	

	
	
  if($x>=20 ){
$y="يوجد هوس ";
}
else {
   $y="  لا يوجد هوس"; 
}


$name=$_POST["name"];

$sql="INSERT INTO mania_exam(exam_mark,exam,names,branch,sname ) VALUES ('$x','$y','$name','$branch','$sname')";
mysqli_query($con,$sql);
    $extra="../";
    echo "<script>window.location.href='".$extra."'</script>";

}
?>