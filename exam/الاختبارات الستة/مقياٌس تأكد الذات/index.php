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







<link rel="stylesheet" type="text/css" href="../../style/styles.css">
	<title>مقياس تأكيد الذات</title>
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
			
            <div class="head" ><img style="width: 200px;" src="../../img/1.png" alt="">
            <Center>
            <h2> اختبار <br> مقياس تأكيد الذات </h2>
    </Center>
        
        </div>
			



	<form action="index.php" method="post" name="fff">
    <input class="name" type="number" name="name" value="" id="name" placeholder="ادخل الكود" required ><hr>
	
<p>  1.هل تحتج بصوت عالي اذا دفعك شخص معين لكي يسبقك في صف او طابور ؟ :  <br>
<input type="radio" name="res1" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res1" value="2" id="res1" required >
    لا.<br>

   
    
   
   
</p><hr>
    



<p>  2.		هل تجد صعوبة في تانيب شخص اقل منك في منزلك ؟  :  <br>
<input type="radio" name="res2" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res2" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
    



<p> 3.		هل انت تتجنب الشكوى من خدمة سيئة في مطعم او من عام ؟  :  <br>
<input type="radio" name="res3" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res3" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  4.		هل انت من النوع اللذي يعتذر بكثرة ؟   <br>
<input type="radio" name="res4" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res4" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  5.		هل تتردد في إجاع شيء اشتريته (قميص او ثوب) لنفس المحل بعد عدايام من شراءه بسبب عيب معين ؟:  <br>
<input type="radio" name="res5" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res5" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  6.		عندما ينتقدك صديق دون وجه حق هل تعبر عن ضيقك ومشاعرك بين الحين والاخر ؟ :  <br>
<input type="radio" name="res6" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res6" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  7.		هل تتجنب الأشخاص المحبين للتسلط والسيطرة؟ :  <br>
<input type="radio" name="res7" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res7" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 8.	إذا وصلت إلى اجتماع متأخر هل تفضل الوقوف عن الجلوس في كرسي في الصفوف الأمامية؟ :  <br>
<input type="radio" name="res8" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res8" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  9.		هل تستطيع أن تعارض شخصا مسيطراً؟  :  <br>
<input type="radio" name="res9" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res9" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
           



<p>  10.		   إذا وجدت سيارة في المكان المفروض أن تضع ف هٌا سيارتك فهل تبحث عن مكان آخر, بدلا من أن تستفسر او تحتج ؟   <br>
<input type="radio" name="res10" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res10" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  11.		هل تجد صعوبة ف رفض سلعة أو بضاعة عٌرضها عليك بائع لحوح؟ :  <br>
<input type="radio" name="res11" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res11" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 12.		هل تعبر عما تشعر به؟ :  <br>
<input type="radio" name="res12" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res12" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 13.		إذا سمعت بأن أحد الأصدقاء يشيع عنك أخبارا سئئة فهل تتردد في إ يقافه عن ذلك؟ :  <br>
<input type="radio" name="res13" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res13" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 14.	هل من الصعب عليك أن تتقدم بالتماس لطب معونة مادية لشيء مهم؟ :  <br>
<input type="radio" name="res14" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res14" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  15.	هل تحتفظ في الغالب بآرائك لنفسك؟  :  <br>
<input type="radio" name="res15" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res15" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  16.		هل تجد صعوبة في بدء مناقشة أو حديث مع شخص غريب عنك؟  :  <br>
<input type="radio" name="res16" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res16" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  17.	هل تستطيع أن تعبر عن حبك واستلطافك لبعض الأشياء أو الأشخاص بصورة واضحة ؟  :  <br>
<input type="radio" name="res17" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res17" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  18.		إذا شعرت بأن الطعام الذي قدم لك في المطعم لم يقدم بطريقة ترضيك هل تشكو من الجرسون؟ :  <br>
<input type="radio" name="res18" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res18" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 19.		هل تتجنب إيذاء مشاعر الآخر ين؟  :  <br>
<input type="radio" name="res19" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res19" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 20.		إذا حضرت محاضرة عامة هل ترد على المحاضر إذا شعرت ببعض التناقض ف كلامه؟		 :  <br>
<input type="radio" name="res20" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res20" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  21.	إذا عبر شخص محترم أو كبير السن عن رأي ما. هل تعبر عن وجهة نظرك حتى ولو كانت معارضة؟ :  <br>
<input type="radio" name="res21" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res21" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  22.		هل تحافظ أحياناً على هدوئك بحثا عن السلام؟  :  <br>
<input type="radio" name="res22" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res22" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  23.		إذا طلب منك صديقك طلبا غير معقول هل ترفض ذلك ببساطة؟ :  <br>
<input type="radio" name="res23" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res23" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 24.		إذا حدث أنك اكتشفت بأن باق النقود التي أعطيت لك في محل تجاري ناقصة, هل تعود من جديد لتوض يح ذلك؟  :  <br>
<input type="radio" name="res24" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res24" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       

    



<p>  25.		إذا منعك رجل الامن من الدخول لمكان هو في الحقيقة من حقك فهل تحتج؟  :  <br>
<input type="radio" name="res25" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res25" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  26.	إذا ضايقك قريب )أب أو أخ( تحترمه هل تخبئ مشاعرك بدلا من الكشف عن ضيقك الحقيق ؟ً:  <br>
<input type="radio" name="res26" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res26" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  27.	هل يظهر غضبك أكثر مع أفراد من نفس جنسك أكثر مما يظهر مع أفراد من الجنس الآخر؟ .  :  <br>
<input type="radio" name="res27" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res27" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 28.	هل تجد صعوبة في مدح أو تقريظ الآخرين؟  :  <br>
<input type="radio" name="res28" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res28" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 29.		هل لديك أشخاص موثوق فيهم تستطيع أن تناقش معهم مشاعرك الحقيقية؟  :  <br>
<input type="radio" name="res29" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res29" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  30.		هل تعجب بالأشخاص الذين يحتفظون بقدراتهم على المقاومة مهما حاول الاخرون تخطئتهم؟ :  <br>
<input type="radio" name="res30" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res30" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
      
    



   



<center>

<input class="exite1"  type="submit" name="submit"  value=" انهاء الاختبار"  id="submit">
</center>
	
	   



   


    </body>
    </html>