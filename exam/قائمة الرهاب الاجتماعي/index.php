<?php $x=0;session_start();
		require_once('../dbconnection.php');
            include 'form.php';






	
	

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="text.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
  <meta name="description" content="my app">
	<script type="text/javascript" src="school_quize.js"></script>



    <script type="text/javascript" >

function prevrnBack(){
	window.history.forward();
}
setTimeout(prevrnBack(),0);
window.onunload=function(){null};
</script>







<link rel="stylesheet" type="text/css" href="../style/styles.css">
	<title>قائمة الرهاب الاجتماعي</title>
	<style type="text/css">
		body{
			direction: rtl;
		}
        @media screen ( max-width: 700px) {
             .continer{
                width: 50px;
	height: 70px;
            }
        }
	</style>
</head>
<body>

	<div class="first">
		
			
        	<div class="continer" id="continer">
			
        <div class="head" ><img style="width: 200px;" src="../img/1.png" alt="">
        <Center>
        <h2> اختبار <br> قائمة الرهاب الاجتماعي </h2>
</Center>
    
    </div>

	<form action="index.php" method="post" name="fff">
    <input class="name" type="number" name="name" value="" id="name" placeholder="ادخل الكود" required ><hr>
	
<p>  1.أخاف من الاشخاص في مراكز السلطة :  <br>
<input type="radio" name="res1" value="1" id="res1" required >
        لا ابداً. <br>
        
	<input type="radio" name="res1" value="2" id="res1" required >
    قليلاً.<br>

    <input type="radio" name="res1" value="3" id="res1" required >
    نوعاً ما.<br>

   <input type="radio" name="res1" value="4" id="res1" required >
   كثيراً.<br>
   <input type="radio" name="res1" value="5" id="res1" required >
   غالياً.<br>

    
   
   
</p><hr>



<p>  2.أنزعج من احمرار وجهي أمام الآخرين :  <br>
<input type="radio" name="res2" value="1" id="res2" required >
        لا ابداً. <br>
        
	<input type="radio" name="res2" value="2" id="res2" required >
    قليلاً.<br>

    <input type="radio" name="res2" value="3" id="res2" required >
    نوعاً ما.<br>

   <input type="radio" name="res2" value="4" id="res2" required >
   كثيراً.<br>
   <input type="radio" name="res2" value="5" id="res1" required >
   غالياً.<br>

    
   
   
</p><hr>




<p>  3.تخيفني الحفلات والمناسمات الاجتماعية :  <br>
<input type="radio" name="res3" value="1" id="res3" required >
        لا ابداً. <br>
        
	<input type="radio" name="res3" value="2" id="res3" required >
    قليلاً.<br>

    <input type="radio" name="res3" value="3" id="res3" required >
    نوعاً ما.<br>

   <input type="radio" name="res3" value="4" id="res3" required >
   كثيراً.<br>
   <input type="radio" name="res3" value="5" id="res1" required >
   غالياً.<br>

    
   
   
</p><hr>





<p>  4.أتجنب الحديث إلى أشخاص غرباء لا أعرفهم :  <br>
<input type="radio" name="res4" value="1" id="res4" required >
        لا ابداً. <br>
        
	<input type="radio" name="res4" value="2" id="res4" required >
    قليلاً.<br>

    <input type="radio" name="res4" value="3" id="res4" required >
    نوعاً ما.<br>

   <input type="radio" name="res4" value="4" id="res4" required >
   كثيراً.<br>
   <input type="radio" name="res4" value="5" id="res1" required >
   غالياً.<br>

    
   
   
   
</p><hr>
    
    
    
    
<p>  5.النقد يخيفني جداً :  <br>
<input type="radio" name="res5" value="1" id="res5" required >
        لا ابداً. <br>
        
	<input type="radio" name="res5" value="2" id="res5" required >
    قليلاً.<br>

    <input type="radio" name="res5" value="3" id="res5" required >
    نوعاً ما.<br>

   <input type="radio" name="res5" value="4" id="res5" required >
   كثيراً.<br>
   <input type="radio" name="res5" value="5" id="res1" required >
   غالياً.<br>

    
   
   
   
</p><hr>


<p>  6.الخوف من الارتباك ولالاحرج يجعلني اتجنب القيام بأشياء او التحدث مع الاخرين :  <br>
<input type="radio" name="res6" value="1" id="res6" required >
        لا ابداً. <br>
        
	<input type="radio" name="res6" value="2" id="res6" required >
    قليلاً.<br>

    <input type="radio" name="res6" value="3" id="res6" required >
    نوعاً ما.<br>

   <input type="radio" name="res6" value="4" id="res6" required >
   كثيراً.<br>
   <input type="radio" name="res6" value="5" id="res1" required >
   غالياً.<br>

    
   
   
   
</p><hr>


<p>  7.التعرق أمام الآخرين يسبب لي توتراً وانزعاجاً :  <br>
<input type="radio" name="res7" value="1" id="res7" required >
        لا ابداً. <br>
        
	<input type="radio" name="res7" value="2" id="res7" required >
    قليلاً.<br>

    <input type="radio" name="res7" value="3" id="res7" required >
    نوعاً ما.<br>

   <input type="radio" name="res7" value="4" id="res7" required >
   كثيراً.<br>
   <input type="radio" name="res7" value="5" id="res1" required >
   غالياً.<br>

    
   
   
   
</p><hr>
    

<p>  8.أتجنب الذهاب إلى الحفلات :  <br>
<input type="radio" name="res8" value="1" id="res8" required >
        لا ابداً. <br>
        
	<input type="radio" name="res8" value="2" id="res8" required >
    قليلاً.<br>

    <input type="radio" name="res8" value="3" id="res8" required >
    نوعاً ما.<br>

   <input type="radio" name="res8" value="4" id="res8" required >
   كثيراً.<br>
   <input type="radio" name="res8" value="5" id="res1" required >
   غالياً.<br>

    
   
   
   
</p><hr>


<p>  9.أتجنب النشاطات التي أكون فيها محط الانتباه :  <br>
<input type="radio" name="res9" value="1" id="res9" required >
        لا ابداً. <br>
        
	<input type="radio" name="res9" value="2" id="res9" required >
    قليلاً.<br>

    <input type="radio" name="res9" value="3" id="res9" required >
    نوعاً ما.<br>

   <input type="radio" name="res9" value="4" id="res9" required >
   كثيراً.<br>
   <input type="radio" name="res9" value="5" id="res1" required >
   غالياً.<br>

    
   
   
   
</p><hr>
    

<p>  10.يخيفني الحديث مع الغرباء :  <br>
<input type="radio" name="res10" value="1" id="res10" required >
        لا ابداً. <br>
        
	<input type="radio" name="res10" value="2" id="res10" required >
    قليلاً.<br>

    <input type="radio" name="res10" value="3" id="res10" required >
    نوعاً ما.<br>

   <input type="radio" name="res10" value="4" id="res10" required >
   كثيراً.<br>
   <input type="radio" name="res10" value="5" id="res1" required >
   غالياً.<br>

    
   
   
   
</p><hr>



<p>  11.أتجنب إلقاء كلمة :  <br>
<input type="radio" name="res11" value="1" id="res11" required >
        لا ابداً. <br>
        
	<input type="radio" name="res11" value="2" id="res11" required >
    قليلاً.<br>

    <input type="radio" name="res11" value="3" id="res11" required >
    نوعاً ما.<br>

   <input type="radio" name="res11" value="4" id="res11" required >
   كثيراً.<br>
   <input type="radio" name="res11" value="5" id="res1" required >
   غالياً.<br>

    
   
   
   
</p><hr>



<p>  12.أفعل أي شيء كي أتجنب الانتقاد :  <br>
<input type="radio" name="res12" value="1" id="res12" required >
        لا ابداً. <br>
        
	<input type="radio" name="res12" value="2" id="res12" required >
    قليلاً.<br>

    <input type="radio" name="res12" value="3" id="res12" required >
    نوعاً ما.<br>

   <input type="radio" name="res12" value="4" id="res12" required >
   كثيراً.<br>
   <input type="radio" name="res12" value="5" id="res1" required >
   غالياً.<br>

    
   
   
   
</p><hr>
    
<p>  13.  يزعجني ازدياد ضربات قلبي عندما أكون بين الناس :  <br>

<input type="radio" name="res13" value="1" id="res13" required >
        لا ابداً. <br>
        
	<input type="radio" name="res13" value="2" id="res13" required >
    قليلاً.<br>

    <input type="radio" name="res13" value="3" id="res13" required >
    نوعاً ما.<br>

   <input type="radio" name="res13" value="4" id="res13" required >
   كثيراً.<br>
   <input type="radio" name="res13" value="5" id="res1" required >
   غالياً.<br>

    
   
   
   
</p><hr>
    
<p>  14.  أخاف من القيام بأعمال معينة إذا كان الناس ينظرون الي <br>


<input type="radio" name="res14" value="1" id="res14" required >
        لا ابداً. <br>
        
	<input type="radio" name="res14" value="2" id="res14" required >
    قليلاً.<br>

    <input type="radio" name="res14" value="3" id="res14" required >
    نوعاً ما.<br>

   <input type="radio" name="res14" value="4" id="res14" required >
   كثيراً.<br>
   <input type="radio" name="res14" value="5" id="res1" required >
   غالياً.<br>

    
   
   
   
</p><hr>
    
<p>  15.  من اشد مخاوفي ان اكون محرجا مرتبكا او ان ابدو غبيا<br>


<input type="radio" name="res15" value="1" id="res14" required >
        لا ابداً. <br>
        
	<input type="radio" name="res15" value="2" id="res14" required >
    قليلاً.<br>

    <input type="radio" name="res15" value="3" id="res14" required >
    نوعاً ما.<br>

   <input type="radio" name="res15" value="4" id="res14" required >
   كثيراً.<br>
   <input type="radio" name="res15" value="5" id="res1" required >
   غالياً.<br>

    
   
   
   
</p><hr>

<p>  16. أتجنب الحايث إلى أي شخص له سلطة<br>


<input type="radio" name="res16" value="1" id="res14" required >
        لا ابداً. <br>
        
	<input type="radio" name="res16" value="2" id="res14" required >
    قليلاً.<br>

    <input type="radio" name="res16" value="3" id="res14" required >
    نوعاً ما.<br>

   <input type="radio" name="res16" value="4" id="res14" required >
   كثيراً.<br>
   <input type="radio" name="res16" value="5" id="res1" required >
   غالياً.<br>

    
   
   
   
</p><hr>

     
</p><hr>

<p>  17. نتزعجني الرجفة أو الرعشة أمام الآخري<br>


<input type="radio" name="res17" value="1" id="res14" required >
        لا ابداً. <br>
        
	<input type="radio" name="res17" value="2" id="res14" required >
    قليلاً.<br>

    <input type="radio" name="res17" value="3" id="res14" required >
    نوعاً ما.<br>

   <input type="radio" name="res17" value="4" id="res14" required >
   كثيراً.<br>
   <input type="radio" name="res17" value="5" id="res1" required >
   غالياً.<br>

    
   
   
   
</p><hr> 
    
    
    
    
    





       
    



   



<center>

<input class="exite1"  type="submit" name="submit"  value=" انهاء الاختبار"  id="submit">
</center>
	
	   



   


    </body>
    </html>