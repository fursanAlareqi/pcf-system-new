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
	<title> مقياس تايلور للقلق الصريح</title>
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
            <h2> اختبار <br> مقياس تايلور للقلق الصريح</h2>
    </Center>
        
        </div>
				
			



	<form action="index.php" method="post" name="fff">
    <input class="name" type="number" name="name" value="" id="name" placeholder="ادخل الكود" required ><hr>
	
<p>  1.نومي مضطرب ومتقطع :  <br>
<input type="radio" name="res1" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res1" value="2" id="res1" required >
    لا.<br>

   
    
   
   
</p><hr>
    



<p>  2.		مخاوفي كثيراً جداً بالمقارنة بأصدقائي  :  <br>
<input type="radio" name="res2" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res2" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
    



<p> 3.		يمر علي أيام لا انام بسبب القلق  :  <br>
<input type="radio" name="res3" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res3" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  4.		أعتقد أني أكثر عصبية من الاخرين   <br>
<input type="radio" name="res4" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res4" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  5.		أعاني كل عدة ليالي من كوابيس مزعجة :  <br>
<input type="radio" name="res5" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res5" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  6.		أعاني من الالام بالمعدة في كثير من الاحيان  :  <br>
<input type="radio" name="res6" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res6" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  7.		كثيرا جداً الاحظ أن يداي ترتعش عندما أقوم بأي عمل :  <br>
<input type="radio" name="res7" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res7" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 8.		أعاني كثيراً من الاسهال :  <br>
<input type="radio" name="res8" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res8" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  9.		تثير قلقي أمور العمل والمال  :  <br>
<input type="radio" name="res9" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res9" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
           



<p>  10.		تصيبني نوبات من الغثيان   <br>
<input type="radio" name="res10" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res10" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  11.		أخشى أن يحمر وجهي خجلاً  :  <br>
<input type="radio" name="res11" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res11" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 12.		دائماً اشهر بالجوع  :  <br>
<input type="radio" name="res12" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res12" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 13.		أنا لا اثق في نفسي  :  <br>
<input type="radio" name="res13" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res13" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 14.		أتعب بسهولة  :  <br>
<input type="radio" name="res14" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res14" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  15.		الانتظار يجعلني عصبي جداً  :  <br>
<input type="radio" name="res15" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res15" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  16.		كثيراً أشعر بالتوتر لدرجة أعجز عن النوم  :  <br>
<input type="radio" name="res16" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res16" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  17.		عادة لا اكون هادئاً , واي شيء يستثيرني  :  <br>
<input type="radio" name="res17" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res17" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  18.		تمر بي فترة من التوتر لا أستطيع الجلوس طويلاً  :  <br>
<input type="radio" name="res18" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res18" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 19.		أنا غير سعيد في كل وقت  :  <br>
<input type="radio" name="res19" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res19" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 20.		من الصعب علي جداً التركيز أثناء أداء العمل 		 :  <br>
<input type="radio" name="res20" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res20" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  21.		دائماً أشعر بالقلق دون مبرر  :  <br>
<input type="radio" name="res21" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res21" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  22.		عندما أشاهد مشاجرة أبتعد عنها  :  <br>
<input type="radio" name="res22" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res22" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  23.		أتمنى أن اكون سعيداً مثل الاخرين :  <br>
<input type="radio" name="res23" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res23" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 24.		دائماً ينتابني شعور بالقلق على أشياء غامضة  :  <br>
<input type="radio" name="res24" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res24" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       

    



<p>  25.		أشعر بأني عديم الفائدة  :  <br>
<input type="radio" name="res25" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res25" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  26.		كثيراً أشعر بأني سوف أنفجر من الضيق والضجر :  <br>
<input type="radio" name="res26" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res26" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  27.		أعرق كثيراً بسهولة حتى في الايام الباردة .  :  <br>
<input type="radio" name="res27" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res27" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 28.		الحياة بالنسبة لي تعب ومضايقات  :  <br>
<input type="radio" name="res28" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res28" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 29.		أنا مشغول دائماً أخاف من المجهول  :  <br>
<input type="radio" name="res29" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res29" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  30.		أنا بالعادة أشعر بالخجل من نفسي  :  <br>
<input type="radio" name="res30" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res30" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 31.		كثيراً ما أشعر أن قلبي يخفق بسرعه  :  <br>
<input type="radio" name="res31" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res31" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  32.		أبكي بسهولة  :  <br>
<input type="radio" name="res32" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res32" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  33.		خشيت أشياء وأشخاص لا يمكنهم إيذائي  :  <br>
<input type="radio" name="res33" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res33" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  34.		أتأثر كثيراً بالأحداث  :  <br>
<input type="radio" name="res34" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res34" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  35.		أعاني كثيراً من الصداع  :  <br>
<input type="radio" name="res35" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res35" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  36.		أشعر بالقلق على أمور وأشياء لا قيمة لها  :  <br>
<input type="radio" name="res36" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res36" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  37.		لا أستطيع التركيز في شيء واحد  :  <br>
<input type="radio" name="res37" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res37" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  38.		من السهل جداً ان ارتبك وأغلط لما أعمل شيء أرتبك بسهولة  :  <br>
<input type="radio" name="res38" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res38" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  39.		أشعر بأني عديم الفائدة , اعتقد أحياناً أني لا اصلح بالمرة  :  <br>
<input type="radio" name="res39" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res39" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  40.		أنا شخص متوتر جداً :  <br>
<input type="radio" name="res40" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res40" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 41.		عندما ارتبك أحياناً أعرق ويسقط العرق مني بصورة تضايقني  :  <br>
<input type="radio" name="res41" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res41" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 42.		يحمر وجهي خجلاً عندما أتحدث للأخرين  :  <br>
<input type="radio" name="res42" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res42" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  43.		أنا حساس أكثر من الاخرين   <br>
<input type="radio" name="res43" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res43" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  44.		مرت بي أوقات عصيبة لم أستطيع التغلب عليها  :  <br>
<input type="radio" name="res44" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res44" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 45.		أشعر بالتوتر أثناء قيامي في العادة  :  <br>
<input type="radio" name="res45" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res45" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  46.		يداي وقدماي باردتان في العادة  :  <br>
<input type="radio" name="res46" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res46" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  47.		أنا غالبا أحلم بحاجات من الافضل ألا أخبر أحد بها  :  <br>
<input type="radio" name="res47" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res47" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  48.		تنقصني الثقة بالنفس  :  <br>
<input type="radio" name="res48" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res48" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  49.		قليل ما يحصل لي حالات إمساك تضايقني  :  <br>
<input type="radio" name="res49" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res49" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  50.		يحمر وجهي من الخجل  :  <br>
<input type="radio" name="res50" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res50" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



   



<center>

<input class="exite1"  type="submit" name="submit"  value=" انهاء الاختبار"  id="submit">
</center>
	
	   



   


    </body>
    </html>