<?php



           
if (isset($_POST['submit'])) {
     $sname=$_SESSION['user']['id'];
  $branch=$_SESSION['user']['branch_id'];   
    
$x=0;
$y=0;
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
 

 
 if($res1=="1"){
	 $x=$x+0;	
 }
 else if($res1=="2"){
    $x=$x+1;	
 }
 else if($res1=="3"){
    $x=$x+2;	
 }
 else if($res1=="4"){
    $x=$x+3;	
 }



 if($res2=="1"){
    $x=$x+0;
 }
 else if($res2=="2"){
    $x=$x+1;
 }
 else if($res2=="3"){
    $x=$x+2;	
 }
 else if($res2=="4"){
    $x=$x+3;
 }



 if($res3=="1"){
	$x=$x+0;
 }
 else if($res3=="2"){
    $x=$x+1;	
 }
 else if($res3=="3"){
    $x=$x+2;	
 }
 else if($res3=="4"){
    $x=$x+3;	
 }	
 




  if($res4=="1"){
    $x=$x+0;
 }
 else if($res4=="2"){
    $x=$x+1;	
 }
 else if($res4=="3"){
	$x=$x+2;
 }
 else if($res4=="4"){
    $x=$x+3;	
 }




 if($res5=="1"){
    $x=$x+0;
 }
 else if($res5=="2"){
    $x=$x+1;	
 }
 else if($res5=="3"){
    $x=$x+2;
 }
 else if($res5=="4"){
    $x=$x+3;	
 }



  if($res6=="1"){
    $x=$x+0;
 }
 else if($res6=="2"){
    $x=$x+1;	
 }
 else if($res6=="3"){
    $x=$x+2;
 }
else if($res6=="4"){
    $x=$x+3;	
 }





 if($res7=="1"){
    $x=$x+0;
 }
 else if($res7=="2"){
    $x=$x+1;	
 }
 else if($res7=="3"){
    $x=$x+2;	
 }
 else if($res7=="4"){
    $x=$x+3;
 }




 if($res8=="1"){
	$x=$x+0;	
 }
 else if($res8=="2"){
    $x=$x+1;	
 }
 else if($res8=="3"){
    $x=$x+2;	
 }
 else if($res8=="4"){
    $x=$x+3;
 }





 if($res9=="1"){
	$x=$x+0;
 }
 else if($res9=="2"){
    $x=$x+1;
 }
 else if($res9=="3"){
    $x=$x+2;	
 }
 else if($res9=="4"){
    $x=$x+3;	
 }



 if($res10=="1"){
    $x=$x+0;	
 }
 else if($res10=="2"){
    $x=$x+1;	
 }
 else if($res10=="3"){
	$x=$x+2;
 }
 else if($res10=="4"){
    $x=$x+3;
 }
 


 if($res11=="1"){
    $x=$x+0;	
 }
 else if($res11=="2"){
    $x=$x+1;	
 }
 else if($res11=="3"){
	$x=$x+2;
 }
 else if($res11=="4"){
    $x=$x+3;
 }
 


 if($res12=="1"){
    $x=$x+0;	
 }
 else if($res12=="2"){
    $x=$x+1;	
 }
 else if($res12=="3"){
	$x=$x+2;
 }
 else if($res12=="4"){
    $x=$x+3;
 }
 


 if($res13=="1"){
    $x=$x+0;	
 }
 else if($res13=="2"){
    $x=$x+1;	
 }
 else if($res13=="3"){
	$x=$x+2;
 }
 else if($res13=="4"){
    $x=$x+3;
 }
 


 if($res14=="1"){
    $x=$x+0;	
 }
 else if($res14=="2"){
    $x=$x+1;	
 }
 else if($res14=="3"){
	$x=$x+2;
 }
 else if($res14=="4"){
    $x=$x+3;
 }
 


 if($res15=="1"){
    $x=$x+0;	
 }
 else if($res15=="2"){
    $x=$x+1;	
 }
 else if($res15=="3"){
	$x=$x+2;
 }
 else if($res15=="4"){
    $x=$x+3;
 }
 


 if($res16=="1"){
    $x=$x+0;	
 }
 else if($res16=="2"){
    $x=$x+1;	
 }
 else if($res16=="3"){
	$x=$x+2;
 }
 else if($res16=="4"){
    $x=$x+3;
 }
 


 if($res17=="1"){
    $x=$x+0;	
 }
 else if($res17=="2"){
    $x=$x+1;	
 }
 else if($res17=="3"){
	$x=$x+2;
 }
 else if($res17=="4"){
    $x=$x+3;
 }
 


 if($res18=="1"){
    $x=$x+0;	
 }
 else if($res18=="2"){
    $x=$x+1;	
 }
 else if($res18=="3"){
	$x=$x+2;
 }
 else if($res18=="4"){
    $x=$x+3;
 }
 


 if($res19=="1"){
    $x=$x+0;	
 }
 else if($res19=="2"){
    $x=$x+1;	
 }
 else if($res19=="3"){
	$x=$x+2;
 }
 else if($res19=="4"){
    $x=$x+3;
 }
 


 if($res20=="1"){
    $x=$x+0;	
 }
 else if($res20=="2"){
    $x=$x+1;	
 }
 else if($res20=="3"){
	$x=$x+2;
 }
 else if($res20=="4"){
    $x=$x+3;
 }
 


 if($res21=="1"){
    $x=$x+0;	
 }
 else if($res21=="2"){
    $x=$x+1;	
 }
 else if($res21=="3"){
	$x=$x+2;
 }
 else if($res21=="4"){
   $x=$x+3;
}

if($x>=0 && $x<=5){
$y="لايوجد اكتئاب";
}
else if($x>=6 && $x<=11){
   $y=" اكتئاب هامشي"; 
}
else if($x>=12 && $x<=22){
   $y=" اكتئاب بسيط";
}
else if($x>=23 && $x<=30){
   $y=" اكتئاب متوسط";
}
else if($x>=31 && $x<=40){
   $y=" اكتئاب شديد";
}
else if($x>=40 && $x<=60){
   $y=" اكتئاب بالغ الشدة";
}



$name=$_POST["name"];

$sql="INSERT INTO bike_exam(exam_mark,exam,names,branch,sname ) VALUES ('$x','$y','$name','$branch','$sname')";
mysqli_query($con,$sql);
$extra="../";
echo "<script>window.location.href='".$extra."'</script>";














}