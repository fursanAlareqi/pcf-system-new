<?php

           
if (isset($_POST['submit'])) {
  
   $sname=$_SESSION['user']['id'];
   $branch=$_SESSION['user']['branch_id'];  
   //الكلي
   $x=0;
//قلق التفاعل الاجتماعي
$s=0;
//قلق المواجهة في المواقف الاجتماعية
$a=0;
//الاعراض المصاحبة للقلق الاجتماعي
$z=0;

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

 

 
 if($res1=="1"){
	 $x=$x+0;	
    $s=$s+0;
 }
 else if($res1=="2"){
    $x=$x+1;	
    $s=$s+1;
 }
 else if($res1=="3"){
    $x=$x+2;	
    $s=$s+2;
 }
 else if($res1=="4"){
    $x=$x+3;
    $s=$s+3;	
 }
 else if($res1=="5"){
   $x=$x+4;	
   $s=$s+4;
}



 if($res2=="1"){
    $x=$x+0;
    $a=$a+0;
 }
 else if($res2=="2"){
    $x=$x+1;
    $a=$a+1;
 }
 else if($res2=="3"){
    $x=$x+2;
    $a=$a+2;	
 }
 else if($res2=="4"){
    $x=$x+3;
    $a=$a+3;
 }
 else if($res2=="5"){
   $x=$x+4;
   $a=$a+4;
}




 if($res3=="1"){
	$x=$x+0;
   $z=$z+0;
 }
 else if($res3=="2"){
    $x=$x+1;
    $z=$z+1;	
 }
 else if($res3=="3"){
    $x=$x+2;
    $z=$z+2;	
 }
 else if($res3=="4"){
    $x=$x+3;
    $z=$z+3;	
 }	
 else if($res3=="5"){
   $x=$x+4;
   $z=$z+4;	
}	




  if($res4=="1"){
    $x=$x+0;
    $s=$s+0;
 }
 else if($res4=="2"){
    $x=$x+1;
    $s=$s+1;	
 }
 else if($res4=="3"){
	$x=$x+2;
   $s=$s+2;
 }
 else if($res4=="4"){
    $x=$x+3;
    $s=$s+3;	
 }
 else if($res4=="5"){
   $x=$x+4;
   $s=$s+4;	
}




 if($res5=="1"){
    $x=$x+0;
    $a=$a+0;
 }
 else if($res5=="2"){
    $x=$x+1;
    $a=$a+1;	
 }
 else if($res5=="3"){
    $x=$x+2;
    $a=$a+2;
 }
 else if($res5=="4"){
    $x=$x+3;
    $a=$a+3;	
 }
 else if($res5=="5"){
   $x=$x+4;	
   $a=$a+4;
}



  if($res6=="1"){
    $x=$x+0;
    $z=$z+0;
 }
 else if($res6=="2"){
    $x=$x+1;
    $z=$z+1;	
 }
 else if($res6=="3"){
    $x=$x+2;
    $z=$z+2;
 }
else if($res6=="4"){
    $x=$x+3;
    $z=$z+3;	
 }
 else if($res6=="5"){
   $x=$x+4;
   $z=$z+4;	
}





 if($res7=="1"){
    $x=$x+0;
    $s=$s+0;
 }
 else if($res7=="2"){
    $x=$x+1;	
    $s=$s+1;
 }
 else if($res7=="3"){
    $x=$x+2;	
    $s=$s+2;
 }
 else if($res7=="4"){
    $x=$x+3;
    $s=$s+3;
 }
 else if($res7=="5"){
   $x=$x+4;
   $s=$s+4;
}




 if($res8=="1"){
	$x=$x+0;	
   $a=$a+0;
 }
 else if($res8=="2"){
    $x=$x+1;
    $a=$a+1;	
 }
 else if($res8=="3"){
    $x=$x+2;
    $a=$a+2;	
 }
 else if($res8=="4"){
    $x=$x+3;
    $a=$a+3;
 }
 else if($res8=="5"){
   $x=$x+4;
   $a=$a+4;
}





 if($res9=="1"){
	$x=$x+0;
   $z=$z+0;
 }
 else if($res9=="2"){
    $x=$x+1;
    $z=$z+1;
 }
 else if($res9=="3"){
    $x=$x+2;
    $z=$z+2;	
 }
 else if($res9=="4"){
    $x=$x+3;
    $z=$z+3;	
 }
 else if($res9=="5"){
   $x=$x+4;
   $z=$z+4;	
}



 if($res10=="1"){
    $x=$x+0;
    $s=$s+0;	
 }
 else if($res10=="2"){
    $x=$x+1;
    $s=$s+1;	
 }
 else if($res10=="3"){
	$x=$x+2;
   $s=$s+2;
 }
 else if($res10=="4"){
    $x=$x+3;
    $s=$s+3;
 }
 else if($res10=="5"){
   $x=$x+4;
   $s=$s+4;
}
 


 if($res11=="1"){
    $x=$x+0;
    $a=$a+0;	
 }
 else if($res11=="2"){
    $x=$x+1;
    $a=$a+1;	
 }
 else if($res11=="3"){
	$x=$x+2;
   $a=$a+2;
 }
 else if($res11=="4"){
    $x=$x+3;
    $a=$a+3;
 }
 else if($res11=="5"){
   $x=$x+4;
   $a=$a+4;
}
 


 if($res12=="1"){
    $x=$x+0;	
    $z=$z+0;
 }
 else if($res12=="2"){
    $x=$x+1;
    $z=$z+1;	
 }
 else if($res12=="3"){
	$x=$x+2;
   $z=$z+2;
 }
 else if($res12=="4"){
    $x=$x+3;
    $z=$z+3;
 }
 else if($res12=="5"){
   $x=$x+4;
   $z=$z+4;
}
 


 if($res13=="1"){
    $x=$x+0;
    $s=$s+0;	
 }
 else if($res13=="2"){
    $x=$x+1;
    $s=$s+1;	
 }
 else if($res13=="3"){
	$x=$x+2;
   $s=$s+2;
 }
 else if($res13=="4"){
    $x=$x+3;
    $s=$s+3;
 }
 else if($res13=="5"){
   $x=$x+4;
   $s=$s+4;
}

 


 if($res14=="1"){
    $x=$x+0;	
    $a=$a+0;
 }
 else if($res14=="2"){
    $x=$x+1;
    $a=$a+1;	
 }
 else if($res14=="3"){
	$x=$x+2;
   $a=$a+2;
 }
 else if($res14=="4"){
    $x=$x+3;
    $a=$a+3;
 }
 else if($res14=="5"){
   $x=$x+4;
   $a=$a+4;
}

 


 if($res15=="1"){
    $x=$x+0;	
    $z=$z+0;
 }
 else if($res15=="2"){
    $x=$x+1;
    $z=$z+1;	
 }
 else if($res15=="3"){
	$x=$x+2;
   $z=$z+2;
 }
 else if($res15=="4"){
    $x=$x+3;
    $z=$z+3;
 }
 else if($res15=="5"){
   $x=$x+4;
   $z=$z+4;
}
 


 if($res16=="1"){
    $x=$x+0;
    $s=$s+0;	
 }
 else if($res16=="2"){
    $x=$x+1;
    $s=$s+1;	
 }
 else if($res16=="3"){
	$x=$x+2;
   $s=$s+2;
 }
 else if($res16=="4"){
    $x=$x+3;
    $s=$s+3;
 }
 else if($res16=="5"){
   $x=$x+4;
   $s=$s+4;
}
 


 if($res17=="1"){
    $x=$x+0;
    $a=$a+0;	
 }
 else if($res17=="2"){
    $x=$x+1;
    $a=$a+1;	
 }
 else if($res17=="3"){
	$x=$x+2;
   $a=$a+2;
 }
 else if($res17=="4"){
    $x=$x+3;
    $a=$a+3;
 }
 else if($res17=="5"){
   $x=$x+4;
   $a=$a+4;
}






if($res18=="1"){
   $x=$x+0;	
   $z=$z+0;
}
else if($res18=="2"){
   $x=$x+1;
   $z=$z+1;	
}
else if($res18=="3"){
  $x=$x+2;
  $z=$z+2;
}
else if($res18=="4"){
   $x=$x+3;
   $z=$z+3;
}
else if($res18=="5"){
  $x=$x+4;
  $z=$z+4;
}






if($res19=="1"){
   $x=$x+0;	
   $s=$s+0;
}
else if($res19=="2"){
   $x=$x+1;
   $s=$s+1;	
}
else if($res19=="3"){
  $x=$x+2;
  $s=$s+2;
}
else if($res19=="4"){
   $x=$x+3;
   $s=$s+3;
}
else if($res19=="5"){
  $x=$x+4;
  $s=$s+4;
}






if($res20=="1"){
   $x=$x+0;	
   $a=$a+0;
}
else if($res20=="2"){
   $x=$x+1;
   $a=$a+1;	
}
else if($res20=="3"){
  $x=$x+2;
  $a=$a+2;
}
else if($res20=="4"){
   $x=$x+3;
   $a=$a+3;
}
else if($res20=="5"){
  $x=$x+4;
  $a=$a+4;
}






if($res21=="1"){
   $x=$x+0;	
   $z=$z+0;
}
else if($res21=="2"){
   $x=$x+1;
   $z=$z+1;	
}
else if($res21=="3"){
  $x=$x+2;
  $z=$z+2;
}
else if($res21=="4"){
   $x=$x+3;
   $z=$z+3;
}
else if($res21=="5"){
  $x=$x+4;
  $z=$z+4;
}






if($res22=="1"){
   $x=$x+0;	
   $s=$s+0;
}
else if($res22=="2"){
   $x=$x+1;
   $s=$s+1;	
}
else if($res22=="3"){
  $x=$x+2;
  $s=$s+2;
}
else if($res22=="4"){
   $x=$x+3;
   $s=$s+3;
}
else if($res22=="5"){
  $x=$x+4;
  $s=$s+4;
}






if($res23=="1"){
   $x=$x+0;	
   $a=$a+0;
}
else if($res23=="2"){
   $x=$x+1;	
   $a=$a+1;
}
else if($res23=="3"){
  $x=$x+2;
  $a=$a+2;
}
else if($res23=="4"){
   $x=$x+3;
   $a=$a+3;
}
else if($res23=="5"){
  $x=$x+4;
  $a=$a+4;
}






if($res24=="1"){
   $x=$x+0;	
   $z=$z+0;
}
else if($res24=="2"){
   $x=$x+1;
   $z=$z+1;	
}
else if($res24=="3"){
  $x=$x+2;
  $z=$z+2;
}
else if($res24=="4"){
   $x=$x+3;
   $z=$z+3;
}
else if($res24=="5"){
  $x=$x+4;
  $z=$z+4;
}






if($res25=="1"){
   $x=$x+0;	
   $s=$s+0;
}
else if($res25=="2"){
   $x=$x+1;
   $s=$s+1;	
}
else if($res25=="3"){
  $x=$x+2;
  $s=$s+2;
}
else if($res25=="4"){
   $x=$x+3;
   $s=$s+3;
}
else if($res25=="5"){
  $x=$x+4;
  $s=$s+4;
}






if($res26=="1"){
   $x=$x+0;	
   $a=$a+0;
}
else if($res26=="2"){
   $x=$x+1;
   $a=$a+1;	
}
else if($res26=="3"){
  $x=$x+2;
  $a=$a+2;
}
else if($res26=="4"){
   $x=$x+3;
   $a=$a+3;
}
else if($res26=="5"){
  $x=$x+4;
  $a=$a+4;
}






if($res27=="1"){
   $x=$x+0;	
   $s=$s+0;
}
else if($res27=="2"){
   $x=$x+1;
   $s=$s+1;	
}
else if($res27=="3"){
  $x=$x+2;
  $s=$s+2;
}
else if($res27=="4"){
   $x=$x+3;
   $s=$s+3;
}
else if($res27=="5"){
  $x=$x+4;
  $s=$s+4;
}






if($res28=="1"){
   $x=$x+0;	
   $a=$a+0;
}
else if($res28=="2"){
   $x=$x+1;
   $a=$a+1;	
}
else if($res28=="3"){
  $x=$x+2;
  $a=$a+2;
}
else if($res28=="4"){
   $x=$x+3;
   $a=$a+3;
}
else if($res28=="5"){
  $x=$x+4;
  $a=$a+4;
}






if($res29=="1"){
   $x=$x+0;	
   $s=$s+0;
}
else if($res29=="2"){
   $x=$x+1;
   $s=$s+1;	
}
else if($res29=="3"){
  $x=$x+2;
  $s=$s+2;
}
else if($res29=="4"){
   $x=$x+3;
   $s=$s+3;
}
else if($res29=="5"){
  $x=$x+4;
  $s=$s+4;
}






if($res30=="1"){
   $x=$x+0;	
   $a=$a+0;
}
else if($res30=="2"){
   $x=$x+1;
   $a=$a+1;	
}
else if($res30=="3"){
  $x=$x+2;
  $a=$a+2;
}
else if($res30=="4"){
   $x=$x+3;
   $a=$a+3;
}
else if($res30=="5"){
  $x=$x+4;
  $a=$a+4;
}






if($res31=="1"){
   $x=$x+0;	
   $s=$s+0;
}
else if($res31=="2"){
   $x=$x+1;
   $s=$s+1;	
}
else if($res31=="3"){
  $x=$x+2;
  $s=$s+2;
}
else if($res31=="4"){
   $x=$x+3;
   $s=$s+3;
}
else if($res31=="5"){
  $x=$x+4;
  $s=$s+4;
}






if($res32=="1"){
   $x=$x+0;	
   $a=$a+0;
}
else if($res32=="2"){
   $x=$x+1;
   $a=$a+1;	
}
else if($res32=="3"){
  $x=$x+2;
  $a=$a+2;
}
else if($res32=="4"){
   $x=$x+3;
   $a=$a+3;
}
else if($res32=="5"){
  $x=$x+4;
  $a=$a+4;
}






if($res33=="1"){
   $x=$x+0;	
   $s=$s+0;
}
else if($res33=="2"){
   $x=$x+1;
   $s=$s+1;	
}
else if($res33=="3"){
  $x=$x+2;
  $s=$s+2;
}
else if($res33=="4"){
   $x=$x+3;
   $s=$s+3;
}
else if($res33=="5"){
  $x=$x+4;
  $s=$s+4;
}




if($res34=="1"){
   $x=$x+0;	
   $a=$a+0;
}
else if($res34=="2"){
   $x=$x+1;
   $a=$a+1;	
}
else if($res34=="3"){
  $x=$x+2;
  $a=$a+2;
}
else if($res34=="4"){
   $x=$x+3;
   $a=$a+3;
}
else if($res34=="5"){
  $x=$x+4;
  $a=$a+4;
}





 





$name=$_POST["name"];

$sql="INSERT INTO social_concern_exam(exam_mark,reactivity,concern,accompanying_symptoms,names,branch,sname ) VALUES ('$x','$s','$a','$z','$name','$branch','$sname')";
mysqli_query($con,$sql);
$extra="../";
echo "<script>window.location.href='".$extra."'</script>";















}