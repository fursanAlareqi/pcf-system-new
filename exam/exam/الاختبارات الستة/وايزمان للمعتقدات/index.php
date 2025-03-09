<?php $x=0;session_start();
		require_once('../../dbconnection.php');
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







	<link rel="stylesheet" type="text/css" href="style.css">
	<title>اختبار وايزمان للمعتقدات</title>
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
			
        <div ><img style="width: 200px;" src="../../img/1.png" alt=""></div>
			



	<form action="index.php" method="post" name="fff">
    <input class="name" type="number" name="name" value="" id="name" placeholder="ادخل الكود" required ><hr>
	
<p>  1.من الصعب ان يكون المرء سعيدا مالم يكن مظهر جيد   او ذكي او غني او مبتكر  |  :  <br>
<input type="radio" name="res1" value="1" id="res1" required >
        لا اوافق ابدا. <br>
        
	<input type="radio" name="res1" value="2" id="res1" required >
    موافق بشكل بسيط .<br>
    <input type="radio" name="res1" value="3" id="res1" required >
        موافق باقل من متوسط. <br>
        
	<input type="radio" name="res1" value="4" id="res1" required >
    موافق بشكل متوسط.<br>
    <input type="radio" name="res1" value="5" id="res1" required >
    موافق باكثر من المتوسط.<br>
    <input type="radio" name="res1" value="6" id="res1" required >
    موافق بشكل كبير .<br>
    <input type="radio" name="res1" value="7" id="res1" required >
    موافق تماما.<br>
   
    
   
   
</p><hr>
    



<p>  2.		تتعلق السعادة بشعوري نحو نفسي اكثر من الاخرين نحوي :  <br>
<input type="radio" name="res2" value="1" id="res1" required >
        لا اوافق ابدا. <br>
        
	<input type="radio" name="res2" value="2" id="res1" required >
    موافق بشكل بسيط .<br>
    <input type="radio" name="res2" value="3" id="res1" required >
        موافق باقل من متوسط. <br>
        
	<input type="radio" name="res2" value="4" id="res1" required >
    موافق بشكل متوسط.<br>
    <input type="radio" name="res2" value="5" id="res1" required >
    موافق باكثر من المتوسط.<br>
    <input type="radio" name="res2" value="6" id="res1" required >
    موافق بشكل كبير .<br>
    <input type="radio" name="res2" value="7" id="res1" required >
    موافق تماما.<br>
   
   
</p><hr>
    



<p> 3.		اذا اخطئت قد يعتقد الناس باني ناقص  :  <br>
<input type="radio" name="res3" value="1" id="res1" required >
        لا اوافق ابدا. <br>
        
	<input type="radio" name="res3" value="2" id="res1" required >
    موافق بشكل بسيط .<br>
    <input type="radio" name="res3" value="3" id="res1" required >
        موافق باقل من متوسط. <br>
        
	<input type="radio" name="res3" value="4" id="res1" required >
    موافق بشكل متوسط.<br>
    <input type="radio" name="res3" value="5" id="res1" required >
    موافق باكثر من المتوسط.<br>
    <input type="radio" name="res3" value="6" id="res1" required >
    موافق بشكل كبير .<br>
    <input type="radio" name="res3" value="7" id="res1" required >
    موافق تماما.<br>
   
</p><hr>
       
    



<p>  4.		 لن يحترمني الناس اذا لم تكن اعمالي صحيحة     <br>
<input type="radio" name="res4" value="1" id="res1" required >
        لا اوافق ابدا. <br>
        
	<input type="radio" name="res4" value="2" id="res1" required >
    موافق بشكل بسيط .<br>
    <input type="radio" name="res4" value="3" id="res1" required >
        موافق باقل من متوسط. <br>
        
	<input type="radio" name="res4" value="4" id="res1" required >
    موافق بشكل متوسط.<br>
    <input type="radio" name="res4" value="5" id="res1" required >
    موافق باكثر من المتوسط.<br>
    <input type="radio" name="res4" value="6" id="res1" required >
    موافق بشكل كبير .<br>
    <input type="radio" name="res4" value="7" id="res1" required >
    موافق تماما.<br>
   
</p><hr>
       
    



<p>  5.		 الان الخسارة سوف تكون كارثة فمن الحماقة المخاطرة ولو بشكل بسيط :  <br>
<input type="radio" name="res5" value="1" id="res1" required >
        لا اوافق ابدا. <br>
        
	<input type="radio" name="res5" value="2" id="res1" required >
    موافق بشكل بسيط .<br>
    <input type="radio" name="res5" value="3" id="res1" required >
        موافق باقل من متوسط. <br>
        
	<input type="radio" name="res5" value="4" id="res1" required >
    موافق بشكل متوسط.<br>
    <input type="radio" name="res5" value="5" id="res1" required >
    موافق باكثر من المتوسط.<br>
    <input type="radio" name="res5" value="6" id="res1" required >
    موافق بشكل كبير .<br>
    <input type="radio" name="res5" value="7" id="res1" required >
    موافق تماما.<br>
   
</p><hr>
       
    



<p>  6.		من الممكن ان تنال احترام  الناس دون ان تكون موهوب في اي شيء   :  <br>
<input type="radio" name="res6" value="1" id="res1" required >
        لا اوافق ابدا. <br>
        
	<input type="radio" name="res6" value="2" id="res1" required >
    موافق بشكل بسيط .<br>
    <input type="radio" name="res6" value="3" id="res1" required >
        موافق باقل من متوسط. <br>
        
	<input type="radio" name="res6" value="4" id="res1" required >
    موافق بشكل متوسط.<br>
    <input type="radio" name="res6" value="5" id="res1" required >
    موافق باكثر من المتوسط.<br>
    <input type="radio" name="res6" value="6" id="res1" required >
    موافق بشكل كبير .<br>
    <input type="radio" name="res6" value="7" id="res1" required >
    موافق تماما.<br>
   
</p><hr>
       
    



<p>  7.	مالم يعجب بي اغلب من اعرفهم فلن اكون سعيدا :  <br>
<input type="radio" name="res7" value="1" id="res1" required >
        لا اوافق ابدا. <br>
        
	<input type="radio" name="res7" value="2" id="res1" required >
    موافق بشكل بسيط .<br>
    <input type="radio" name="res7" value="3" id="res1" required >
        موافق باقل من متوسط. <br>
        
	<input type="radio" name="res7" value="4" id="res1" required >
    موافق بشكل متوسط.<br>
    <input type="radio" name="res7" value="5" id="res1" required >
    موافق باكثر من المتوسط.<br>
    <input type="radio" name="res7" value="6" id="res1" required >
    موافق بشكل كبير .<br>
    <input type="radio" name="res7" value="7" id="res1" required >
    موافق تماما.<br>
   
   
</p><hr>
       
    



<p> 8.		من علامة الضعف ان يطلب الشخص المساعدة :  <br>
<input type="radio" name="res8" value="1" id="res1" required >
        لا اوافق ابدا. <br>
        
	<input type="radio" name="res8" value="2" id="res1" required >
    موافق بشكل بسيط .<br>
    <input type="radio" name="res8" value="3" id="res1" required >
        موافق باقل من متوسط. <br>
        
	<input type="radio" name="res8" value="4" id="res1" required >
    موافق بشكل متوسط.<br>
    <input type="radio" name="res8" value="5" id="res1" required >
    موافق باكثر من المتوسط.<br>
    <input type="radio" name="res8" value="6" id="res1" required >
    موافق بشكل كبير .<br>
    <input type="radio" name="res8" value="7" id="res1" required >
    موافق تماما.<br>
   
</p><hr>
       
    



<p>  9.		سوف اكون اقل من الاخرين اذا لم اعمل بنفس كفاءتهم :  <br>
<input type="radio" name="res9" value="1" id="res1" required >
        لا اوافق ابدا. <br>
        
	<input type="radio" name="res9" value="2" id="res1" required >
    موافق بشكل بسيط .<br>
    <input type="radio" name="res9" value="3" id="res1" required >
        موافق باقل من متوسط. <br>
        
	<input type="radio" name="res9" value="4" id="res1" required >
    موافق بشكل متوسط.<br>
    <input type="radio" name="res9" value="5" id="res1" required >
    موافق باكثر من المتوسط.<br>
    <input type="radio" name="res9" value="6" id="res1" required >
    موافق بشكل كبير .<br>
    <input type="radio" name="res9" value="7" id="res1" required >
    موافق تماما.<br>
   
</p><hr>
       
           



<p>  10.		اذا فشلت في عملي فانا فاشل    <br>
<input type="radio" name="res10" value="1" id="res1" required >
        لا اوافق ابدا. <br>
        
	<input type="radio" name="res10" value="2" id="res1" required >
    موافق بشكل بسيط .<br>
    <input type="radio" name="res10" value="3" id="res1" required >
        موافق باقل من متوسط. <br>
        
	<input type="radio" name="res10" value="4" id="res1" required >
    موافق بشكل متوسط.<br>
    <input type="radio" name="res10" value="5" id="res1" required >
    موافق باكثر من المتوسط.<br>
    <input type="radio" name="res10" value="6" id="res1" required >
    موافق بشكل كبير .<br>
    <input type="radio" name="res10" value="7" id="res1" required >
    موافق تماما.<br>
   
</p><hr>
       
    



<p>  11.	لا معنا لعمل الشيء اطلاقا اذا لم نعمله صحيحا  :  <br>
<input type="radio" name="res11" value="1" id="res1" required >
        لا اوافق ابدا. <br>
        
	<input type="radio" name="res11" value="2" id="res1" required >
    موافق بشكل بسيط .<br>
    <input type="radio" name="res11" value="3" id="res1" required >
        موافق باقل من متوسط. <br>
        
	<input type="radio" name="res11" value="4" id="res1" required >
    موافق بشكل متوسط.<br>
    <input type="radio" name="res11" value="5" id="res1" required >
    موافق باكثر من المتوسط.<br>
    <input type="radio" name="res11" value="6" id="res1" required >
    موافق بشكل كبير .<br>
    <input type="radio" name="res11" value="7" id="res1" required >
    موافق تماما.<br>
   
</p><hr>
       
    



<p> 12.		عمل الاخطاء شيء جميل لاني اتعلم منها :  <br>
<input type="radio" name="res12" value="1" id="res1" required >
        لا اوافق ابدا. <br>
        
	<input type="radio" name="res12" value="2" id="res1" required >
    موافق بشكل بسيط .<br>
    <input type="radio" name="res12" value="3" id="res1" required >
        موافق باقل من متوسط. <br>
        
	<input type="radio" name="res12" value="4" id="res1" required >
    موافق بشكل متوسط.<br>
    <input type="radio" name="res12" value="5" id="res1" required >
    موافق باكثر من المتوسط.<br>
    <input type="radio" name="res12" value="6" id="res1" required >
    موافق بشكل كبير .<br>
    <input type="radio" name="res12" value="7" id="res1" required >
    موافق تماما.<br>
   
</p><hr>
       
    



<p> 13.		دليل عدم حب اي شخص لي هو اختلافه معي :  <br>
<input type="radio" name="res13" value="1" id="res1" required >
        لا اوافق ابدا. <br>
        
	<input type="radio" name="res13" value="2" id="res1" required >
    موافق بشكل بسيط .<br>
    <input type="radio" name="res13" value="3" id="res1" required >
        موافق باقل من متوسط. <br>
        
	<input type="radio" name="res13" value="4" id="res1" required >
    موافق بشكل متوسط.<br>
    <input type="radio" name="res13" value="5" id="res1" required >
    موافق باكثر من المتوسط.<br>
    <input type="radio" name="res13" value="6" id="res1" required >
    موافق بشكل كبير .<br>
    <input type="radio" name="res13" value="7" id="res1" required >
    موافق تماما.<br>
   
</p><hr>
       
    



<p> 14.		مهما كان الفشل كليا او جزئيا فهو سيىء بنفس القدر  :  <br>
<input type="radio" name="res14" value="1" id="res1" required >
        لا اوافق ابدا. <br>
        
	<input type="radio" name="res14" value="2" id="res1" required >
    موافق بشكل بسيط .<br>
    <input type="radio" name="res14" value="3" id="res1" required >
        موافق باقل من متوسط. <br>
        
	<input type="radio" name="res14" value="4" id="res1" required >
    موافق بشكل متوسط.<br>
    <input type="radio" name="res14" value="5" id="res1" required >
    موافق باكثر من المتوسط.<br>
    <input type="radio" name="res14" value="6" id="res1" required >
    موافق بشكل كبير .<br>
    <input type="radio" name="res14" value="7" id="res1" required >
    موافق تماما.<br>
</p><hr>
       
    



<p>  15.		سوف يستخفوا بك الناس اذا عرفوا حقيقتك  :  <br>
<input type="radio" name="res15" value="1" id="res1" required >
        لا اوافق ابدا. <br>
        
	<input type="radio" name="res15" value="2" id="res1" required >
    موافق بشكل بسيط .<br>
    <input type="radio" name="res15" value="3" id="res1" required >
        موافق باقل من متوسط. <br>
        
	<input type="radio" name="res15" value="4" id="res1" required >
    موافق بشكل متوسط.<br>
    <input type="radio" name="res15" value="5" id="res1" required >
    موافق باكثر من المتوسط.<br>
    <input type="radio" name="res15" value="6" id="res1" required >
    موافق بشكل كبير .<br>
    <input type="radio" name="res15" value="7" id="res1" required >
    موافق تماما.<br>
   
</p><hr>
       
    



<p>  16.		اذا لم يعجبني الشخص الذي احبه فما قيمتي في الحياة :  <br>
<input type="radio" name="res16" value="1" id="res1" required >
        لا اوافق ابدا. <br>
        
	<input type="radio" name="res16" value="2" id="res1" required >
    موافق بشكل بسيط .<br>
    <input type="radio" name="res16" value="3" id="res1" required >
        موافق باقل من متوسط. <br>
        
	<input type="radio" name="res16" value="4" id="res1" required >
    موافق بشكل متوسط.<br>
    <input type="radio" name="res16" value="5" id="res1" required >
    موافق باكثر من المتوسط.<br>
    <input type="radio" name="res16" value="6" id="res1" required >
    موافق بشكل كبير .<br>
    <input type="radio" name="res16" value="7" id="res1" required >
    موافق تماما.<br>
   
</p><hr>
       
    



<p>  17.		استمتع باي نشاط بغض النظر عن النتيجة  :  <br>
<<input type="radio" name="res17" value="1" id="res1" required >
        لا اوافق ابدا. <br>
        
	<input type="radio" name="res17" value="2" id="res1" required >
    موافق بشكل بسيط .<br>
    <input type="radio" name="res17" value="3" id="res1" required >
        موافق باقل من متوسط. <br>
        
	<input type="radio" name="res17" value="4" id="res1" required >
    موافق بشكل متوسط.<br>
    <input type="radio" name="res17" value="5" id="res1" required >
    موافق باكثر من المتوسط.<br>
    <input type="radio" name="res17" value="6" id="res1" required >
    موافق بشكل كبير .<br>
    <input type="radio" name="res17" value="7" id="res1" required >
    موافق تماما.<br>
   
</p><hr>
       
    



<p>  18.		قيل ان يقدم الناس على اي شيء يجب ان تكون هناك فرصة للنجاح  :  <br>
<input type="radio" name="res18" value="1" id="res1" required >
        لا اوافق ابدا. <br>
        
	<input type="radio" name="res18" value="2" id="res1" required >
    موافق بشكل بسيط .<br>
    <input type="radio" name="res18" value="3" id="res1" required >
        موافق باقل من متوسط. <br>
        
	<input type="radio" name="res18" value="4" id="res1" required >
    موافق بشكل متوسط.<br>
    <input type="radio" name="res18" value="5" id="res1" required >
    موافق باكثر من المتوسط.<br>
    <input type="radio" name="res18" value="6" id="res1" required >
    موافق بشكل كبير .<br>
    <input type="radio" name="res18" value="7" id="res1" required >
    موافق تماما.<br>
   
</p><hr>
       
    



<p> 19.		قيمتي الشخصية تعتمد كثيرا على ما يعتقده الاخرين بي   :  <br>
<input type="radio" name="res19" value="1" id="res1" required >
        لا اوافق ابدا. <br>
        
	<input type="radio" name="res19" value="2" id="res1" required >
    موافق بشكل بسيط .<br>
    <input type="radio" name="res19" value="3" id="res1" required >
        موافق باقل من متوسط. <br>
        
	<input type="radio" name="res19" value="4" id="res1" required >
    موافق بشكل متوسط.<br>
    <input type="radio" name="res19" value="5" id="res1" required >
    موافق باكثر من المتوسط.<br>
    <input type="radio" name="res19" value="6" id="res1" required >
    موافق بشكل كبير .<br>
    <input type="radio" name="res19" value="7" id="res1" required >
    موافق تماما.<br>
   
</p><hr>
       
    



<p> 20.		سوف ينتهي بي الامر ان اكون شخص من الدرجة الثانية اذا لم اضع لنفسي اعلى هدف		 :  <br>
<input type="radio" name="res20" value="1" id="res1" required >
        لا اوافق ابدا. <br>
        
	<input type="radio" name="res20" value="2" id="res1" required >
    موافق بشكل بسيط .<br>
    <input type="radio" name="res20" value="3" id="res1" required >
        موافق باقل من متوسط. <br>
        
	<input type="radio" name="res20" value="4" id="res1" required >
    موافق بشكل متوسط.<br>
    <input type="radio" name="res20" value="5" id="res1" required >
    موافق باكثر من المتوسط.<br>
    <input type="radio" name="res20" value="6" id="res1" required >
    موافق بشكل كبير .<br>
    <input type="radio" name="res20" value="7" id="res1" required >
    موافق تماما.<br>
   
</p><hr>
       
    



<p>  21.		يجب ان اكون بارزا في احد الجوانب حتى تكون لي قيمتي الشخصية  :  <br>
<input type="radio" name="res21" value="1" id="res1" required >
        لا اوافق ابدا. <br>
        
	<input type="radio" name="res21" value="2" id="res1" required >
    موافق بشكل بسيط .<br>
    <input type="radio" name="res21" value="3" id="res1" required >
        موافق باقل من متوسط. <br>
        
	<input type="radio" name="res21" value="4" id="res1" required >
    موافق بشكل متوسط.<br>
    <input type="radio" name="res21" value="5" id="res1" required >
    موافق باكثر من المتوسط.<br>
    <input type="radio" name="res21" value="6" id="res1" required >
    موافق بشكل كبير .<br>
    <input type="radio" name="res21" value="7" id="res1" required >
    موافق تماما.<br>
   
</p><hr>
       
    



<p>  22.		الناس الذين لهم افكار جيده لهم قيمة افضل من غيرهم   :  <br>
<input type="radio" name="res22" value="1" id="res1" required >
        لا اوافق ابدا. <br>
        
	<input type="radio" name="res22" value="2" id="res1" required >
    موافق بشكل بسيط .<br>
    <input type="radio" name="res22" value="3" id="res1" required >
        موافق باقل من متوسط. <br>
        
	<input type="radio" name="res22" value="4" id="res1" required >
    موافق بشكل متوسط.<br>
    <input type="radio" name="res22" value="5" id="res1" required >
    موافق باكثر من المتوسط.<br>
    <input type="radio" name="res22" value="6" id="res1" required >
    موافق بشكل كبير .<br>
    <input type="radio" name="res22" value="7" id="res1" required >
    موافق تماما.<br>
</p><hr>
       
    



<p>  23.		اذا اخطات فلا بد ان اتضايق :  <br>
<input type="radio" name="res23" value="1" id="res1" required >
        لا اوافق ابدا. <br>
        
	<input type="radio" name="res23" value="2" id="res1" required >
    موافق بشكل بسيط .<br>
    <input type="radio" name="res23" value="3" id="res1" required >
        موافق باقل من متوسط. <br>
        
	<input type="radio" name="res23" value="4" id="res1" required >
    موافق بشكل متوسط.<br>
    <input type="radio" name="res23" value="5" id="res1" required >
    موافق باكثر من المتوسط.<br>
    <input type="radio" name="res23" value="6" id="res1" required >
    موافق بشكل كبير .<br>
    <input type="radio" name="res23" value="7" id="res1" required >
    موافق تماما.<br>
   
</p><hr>
       
    



<p> 24.		راى عن نفسي اهم من ارى الاخرين عني :  <br>
<input type="radio" name="res24" value="1" id="res1" required >
        لا اوافق ابدا. <br>
        
	<input type="radio" name="res24" value="2" id="res1" required >
    موافق بشكل بسيط .<br>
    <input type="radio" name="res24" value="3" id="res1" required >
        موافق باقل من متوسط. <br>
        
	<input type="radio" name="res24" value="4" id="res1" required >
    موافق بشكل متوسط.<br>
    <input type="radio" name="res24" value="5" id="res1" required >
    موافق باكثر من المتوسط.<br>
    <input type="radio" name="res24" value="6" id="res1" required >
    موافق بشكل كبير .<br>
    <input type="radio" name="res24" value="7" id="res1" required >
    موافق تماما.<br>
   
</p><hr>
       

    



<p>  25.		يجب ان اساعد كل محتاج  حتى اكون من الصالحين ولي قيمتي  :  <br>
<input type="radio" name="res25" value="1" id="res1" required >
        لا اوافق ابدا. <br>
        
	<input type="radio" name="res25" value="2" id="res1" required >
    موافق بشكل بسيط .<br>
    <input type="radio" name="res25" value="3" id="res1" required >
        موافق باقل من متوسط. <br>
        
	<input type="radio" name="res25" value="4" id="res1" required >
    موافق بشكل متوسط.<br>
    <input type="radio" name="res25" value="5" id="res1" required >
    موافق باكثر من المتوسط.<br>
    <input type="radio" name="res25" value="6" id="res1" required >
    موافق بشكل كبير .<br>
    <input type="radio" name="res25" value="7" id="res1" required >
    موافق تماما.<br>
   
</p><hr>
       
    



<p>  26.	اذا سالت سؤال سابدو اقل شان من الاخرين:  <br>
<input type="radio" name="res26" value="1" id="res1" required >
        لا اوافق ابدا. <br>
        
	<input type="radio" name="res26" value="2" id="res1" required >
    موافق بشكل بسيط .<br>
    <input type="radio" name="res26" value="3" id="res1" required >
        موافق باقل من متوسط. <br>
        
	<input type="radio" name="res26" value="4" id="res1" required >
    موافق بشكل متوسط.<br>
    <input type="radio" name="res26" value="5" id="res1" required >
    موافق باكثر من المتوسط.<br>
    <input type="radio" name="res26" value="6" id="res1" required >
    موافق بشكل كبير .<br>
    <input type="radio" name="res26" value="7" id="res1" required >
    موافق تماما.<br>
   
</p><hr>
       
    



<p>  27.	شيء فظيع ان ترفض من قبل الناس الذين يهمونك .  :  <br>
<input type="radio" name="res27" value="1" id="res1" required >
        لا اوافق ابدا. <br>
        
	<input type="radio" name="res27" value="2" id="res1" required >
    موافق بشكل بسيط .<br>
    <input type="radio" name="res27" value="3" id="res1" required >
        موافق باقل من متوسط. <br>
        
	<input type="radio" name="res27" value="4" id="res1" required >
    موافق بشكل متوسط.<br>
    <input type="radio" name="res27" value="5" id="res1" required >
    موافق باكثر من المتوسط.<br>
    <input type="radio" name="res27" value="6" id="res1" required >
    موافق بشكل كبير .<br>
    <input type="radio" name="res27" value="7" id="res1" required >
    موافق تماما.<br>
   
</p><hr>
       
    



<p> 28.	 موكد ان تكون حزننا اذا لم يكن لديك اشخاص تستند اليهم  :  <br>
<input type="radio" name="res28" value="1" id="res1" required >
        لا اوافق ابدا. <br>
        
	<input type="radio" name="res28" value="2" id="res1" required >
    موافق بشكل بسيط .<br>
    <input type="radio" name="res28" value="3" id="res1" required >
        موافق باقل من متوسط. <br>
        
	<input type="radio" name="res28" value="4" id="res1" required >
    موافق بشكل متوسط.<br>
    <input type="radio" name="res28" value="5" id="res1" required >
    موافق باكثر من المتوسط.<br>
    <input type="radio" name="res28" value="6" id="res1" required >
    موافق بشكل كبير .<br>
    <input type="radio" name="res28" value="7" id="res1" required >
    موافق تماما.<br>
   
</p><hr>
       
    



<p> 29.	يمكن الوصول الى اهداف هامة دون اجهاد  :  <br>
<input type="radio" name="res29" value="1" id="res1" required >
        لا اوافق ابدا. <br>
        
	<input type="radio" name="res29" value="2" id="res1" required >
    موافق بشكل بسيط .<br>
    <input type="radio" name="res29" value="3" id="res1" required >
        موافق باقل من متوسط. <br>
        
	<input type="radio" name="res29" value="4" id="res1" required >
    موافق بشكل متوسط.<br>
    <input type="radio" name="res29" value="5" id="res1" required >
    موافق باكثر من المتوسط.<br>
    <input type="radio" name="res29" value="6" id="res1" required >
    موافق بشكل كبير .<br>
    <input type="radio" name="res29" value="7" id="res1" required >
    موافق تماما.<br>
   
   
</p><hr>
       
    



<p>  30.		يمكن لشخص ان يعنف (يوبخ) دون ان اتضايق :  <br>
<input type="radio" name="res30" value="1" id="res1" required >
        لا اوافق ابدا. <br>
        
	<input type="radio" name="res30" value="2" id="res1" required >
    موافق بشكل بسيط .<br>
    <input type="radio" name="res30" value="3" id="res1" required >
        موافق باقل من متوسط. <br>
        
	<input type="radio" name="res30" value="4" id="res1" required >
    موافق بشكل متوسط.<br>
    <input type="radio" name="res30" value="5" id="res1" required >
    موافق باكثر من المتوسط.<br>
    <input type="radio" name="res30" value="6" id="res1" required >
    موافق بشكل كبير .<br>
    <input type="radio" name="res30" value="7" id="res1" required >
    موافق تماما.<br>
   
   
</p><hr>
       
    



<p> 31.		لا اثق في الاخرين لانهم ربما يستغلوني :  <br>
<input type="radio" name="res31" value="1" id="res1" required >
        لا اوافق ابدا. <br>
        
	<input type="radio" name="res31" value="2" id="res1" required >
    موافق بشكل بسيط .<br>
    <input type="radio" name="res31" value="3" id="res1" required >
        موافق باقل من متوسط. <br>
        
	<input type="radio" name="res31" value="4" id="res1" required >
    موافق بشكل متوسط.<br>
    <input type="radio" name="res31" value="5" id="res1" required >
    موافق باكثر من المتوسط.<br>
    <input type="radio" name="res31" value="6" id="res1" required >
    موافق بشكل كبير .<br>
    <input type="radio" name="res31" value="7" id="res1" required >
    موافق تماما.<br>
   
</p><hr>
       
    



<p>  32.		لن تكون سعيدا اذا لم يحبونك الاخرين  :  <br>
<input type="radio" name="res32" value="1" id="res1" required >
        لا اوافق ابدا. <br>
        
	<input type="radio" name="res32" value="2" id="res1" required >
    موافق بشكل بسيط .<br>
    <input type="radio" name="res32" value="3" id="res1" required >
        موافق باقل من متوسط. <br>
        
	<input type="radio" name="res32" value="4" id="res1" required >
    موافق بشكل متوسط.<br>
    <input type="radio" name="res32" value="5" id="res1" required >
    موافق باكثر من المتوسط.<br>
    <input type="radio" name="res32" value="6" id="res1" required >
    موافق بشكل كبير .<br>
    <input type="radio" name="res32" value="7" id="res1" required >
    موافق تماما.<br>
   
   
</p><hr>
       
    



<p>  33.		من الافضل ان تؤثر الاخرين على نفسك من اجل ارضائهم  :  <br>
<input type="radio" name="res33" value="1" id="res1" required >
        لا اوافق ابدا. <br>
        
	<input type="radio" name="res33" value="2" id="res1" required >
    موافق بشكل بسيط .<br>
    <input type="radio" name="res33" value="3" id="res1" required >
        موافق باقل من متوسط. <br>
        
	<input type="radio" name="res33" value="4" id="res1" required >
    موافق بشكل متوسط.<br>
    <input type="radio" name="res33" value="5" id="res1" required >
    موافق باكثر من المتوسط.<br>
    <input type="radio" name="res33" value="6" id="res1" required >
    موافق بشكل كبير .<br>
    <input type="radio" name="res33" value="7" id="res1" required >
    موافق تماما.<br>
   
   
</p><hr>
       
    



<p>  34.		لا احتاج اطراء الاخرين حتى اكون سعيدا :  <br>
<input type="radio" name="res34" value="1" id="res1" required >
        لا اوافق ابدا. <br>
        
	<input type="radio" name="res34" value="2" id="res1" required >
    موافق بشكل بسيط .<br>
    <input type="radio" name="res34" value="3" id="res1" required >
        موافق باقل من متوسط. <br>
        
	<input type="radio" name="res34" value="4" id="res1" required >
    موافق بشكل متوسط.<br>
    <input type="radio" name="res34" value="5" id="res1" required >
    موافق باكثر من المتوسط.<br>
    <input type="radio" name="res34" value="6" id="res1" required >
    موافق بشكل كبير .<br>
    <input type="radio" name="res34" value="7" id="res1" required >
    موافق تماما.<br>
   
   
</p><hr>
       
    



<p>  35.		سوف تبعد المشاكل كلما تجنبها الشخص   :  <br>
<input type="radio" name="res35" value="1" id="res1" required >
        لا اوافق ابدا. <br>
        
	<input type="radio" name="res35" value="2" id="res1" required >
    موافق بشكل بسيط .<br>
    <input type="radio" name="res35" value="3" id="res1" required >
        موافق باقل من متوسط. <br>
        
	<input type="radio" name="res35" value="4" id="res1" required >
    موافق بشكل متوسط.<br>
    <input type="radio" name="res35" value="5" id="res1" required >
    موافق باكثر من المتوسط.<br>
    <input type="radio" name="res35" value="6" id="res1" required >
    موافق بشكل كبير .<br>
    <input type="radio" name="res35" value="7" id="res1" required >
    موافق تماما.<br>
   
   
</p><hr>
       
    



<p>  36.		سعادتي تعتمد على غيري :  <br>
<input type="radio" name="res36" value="1" id="res1" required >
        لا اوافق ابدا. <br>
        
	<input type="radio" name="res36" value="2" id="res1" required >
    موافق بشكل بسيط .<br>
    <input type="radio" name="res36" value="3" id="res1" required >
        موافق باقل من متوسط. <br>
        
	<input type="radio" name="res36" value="4" id="res1" required >
    موافق بشكل متوسط.<br>
    <input type="radio" name="res36" value="5" id="res1" required >
    موافق باكثر من المتوسط.<br>
    <input type="radio" name="res36" value="6" id="res1" required >
    موافق بشكل كبير .<br>
    <input type="radio" name="res36" value="7" id="res1" required >
    موافق تماما.<br>
   
   
</p><hr>
       
    



<p>  37.		سوف اكون سعيدا حتى لو فقده كثيرا من الاشياء الجميلة  :  <br>
<input type="radio" name="res37" value="1" id="res1" required >
        لا اوافق ابدا. <br>
        
	<input type="radio" name="res37" value="2" id="res1" required >
    موافق بشكل بسيط .<br>
    <input type="radio" name="res37" value="3" id="res1" required >
        موافق باقل من متوسط. <br>
        
	<input type="radio" name="res37" value="4" id="res1" required >
    موافق بشكل متوسط.<br>
    <input type="radio" name="res37" value="5" id="res1" required >
    موافق باكثر من المتوسط.<br>
    <input type="radio" name="res37" value="6" id="res1" required >
    موافق بشكل كبير .<br>
    <input type="radio" name="res37" value="7" id="res1" required >
    موافق تماما.<br>
   
</p><hr>
       
    



<p>  38.		مهم بالنسبة لي ما يعتقده الناس عني   :  <br>
<input type="radio" name="res38" value="1" id="res1" required >
        لا اوافق ابدا. <br>
        
	<input type="radio" name="res38" value="2" id="res1" required >
    موافق بشكل بسيط .<br>
    <input type="radio" name="res38" value="3" id="res1" required >
        موافق باقل من متوسط. <br>
        
	<input type="radio" name="res38" value="4" id="res1" required >
    موافق بشكل متوسط.<br>
    <input type="radio" name="res38" value="5" id="res1" required >
    موافق باكثر من المتوسط.<br>
    <input type="radio" name="res38" value="6" id="res1" required >
    موافق بشكل كبير .<br>
    <input type="radio" name="res38" value="7" id="res1" required >
    موافق تماما.<br>
   
   
</p><hr>
       
    



<p>  39.	الانعزال عن الناس بالتاكيد يؤدي الى التعاسة  :  <br>
<input type="radio" name="res39" value="1" id="res1" required >
        لا اوافق ابدا. <br>
        
	<input type="radio" name="res39" value="2" id="res1" required >
    موافق بشكل بسيط .<br>
    <input type="radio" name="res39" value="3" id="res1" required >
        موافق باقل من متوسط. <br>
        
	<input type="radio" name="res39" value="4" id="res1" required >
    موافق بشكل متوسط.<br>
    <input type="radio" name="res39" value="5" id="res1" required >
    موافق باكثر من المتوسط.<br>
    <input type="radio" name="res39" value="6" id="res1" required >
    موافق بشكل كبير .<br>
    <input type="radio" name="res39" value="7" id="res1" required >
    موافق تماما.<br>
   
   
</p><hr>
       
    



<p>  40.	استطيع ان اسعد دون ان يحبني احد  :  <br>
<input type="radio" name="res40" value="1" id="res1" required >
        لا اوافق ابدا. <br>
        
	<input type="radio" name="res40" value="2" id="res1" required >
    موافق بشكل بسيط .<br>
    <input type="radio" name="res40" value="3" id="res1" required >
        موافق باقل من متوسط. <br>
        
	<input type="radio" name="res40" value="4" id="res1" required >
    موافق بشكل متوسط.<br>
    <input type="radio" name="res40" value="5" id="res1" required >
    موافق باكثر من المتوسط.<br>
    <input type="radio" name="res40" value="6" id="res1" required >
    موافق بشكل كبير .<br>
    <input type="radio" name="res40" value="7" id="res1" required >
    موافق تماما.<br>
   
   
   
</p><hr>
       
    



   



<center>

<input class="exite1"  type="submit" name="submit"  value=" انهاء الاختبار"  id="submit">
</center>
	
	   



   


    </body>
    </html>