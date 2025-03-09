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
	<title>اختبار ايزيك للشخصية</title>
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
	
<p>  1.هل تشتاق للاثارة في اكثر الاحيان  :  <br>
<input type="radio" name="res1" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res1" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
    



<p>  2.		هل تحتاج في احيان كثيره لاصدقاء يفهمونك لكي تشعر بالانشراح والارتياح   :  <br>
<input type="radio" name="res2" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res2" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
    



<p> 3.		هل تاخذ الامور عادة ببساطة وبغير تدقيق :  <br>
<input type="radio" name="res3" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res3" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  4.		هل يضايقك جدا ان يجاب طلبك بالرفض   <br>
<input type="radio" name="res4" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res4" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  5.		هل تتوقف كثيرا قبل الاقدام على عمل اي شيء :  <br>
<input type="radio" name="res5" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res5" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  6.		اذا وعدت فل تتمسك بوعدك دائما مهما كلفك من تعب ومشقة  :  <br>
<input type="radio" name="res6" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res6" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  7.		هل يتعكر مزاجك ويروق كثيرا:  <br>
<input type="radio" name="res7" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res7" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 8.	هل من عادتك ان تقود وتعمل بسرعة دون توقف للتفكير:  <br>
<input type="radio" name="res8" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res8" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  9.		هل حدث ذات مره ان شعرت بالتعاسة دون سبب كان لذلك  :  <br>
<input type="radio" name="res9" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res9" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
           



<p>  10.	  هل انت مستعد لعمل اي شيء لتكون جزئيا مغامرا <br>
<input type="radio" name="res10" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res10" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  11.	هل تشعر بالخجل اذاارت التحدث الى شخص غريب جذاب	  :  <br>
<input type="radio" name="res11" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res11" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 12.		هل تثور وتغضب احيانا  :  <br>
<input type="radio" name="res12" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res12" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 13.		هل تقوم باعمال في احيان كثيرة على نحو مباشر ودون ترو :  <br>
<input type="radio" name="res13" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res13" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 14.		هل يغلب ان تقلق على قول او عمل لم يكن من الواجب ان يصدر منك :  <br>
<input type="radio" name="res14" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res14" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  15.		هل تفضل القراءة والاطلاع على التحدث مع الاخرين بصفة عامة   :  <br>
<input type="radio" name="res15" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res15" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  16.	هل يسهل جرح احساسك   :  <br>
<input type="radio" name="res16" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res16" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  17.	هل تحب الخروج من المنزل كثيرا  :  <br>
<input type="radio" name="res17" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res17" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  18.		هل تراودك احيانا افكار وخواطر لاتحب ان يعرفها الاخرين :  <br>
<input type="radio" name="res18" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res18" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 19.		هل تشعر بنشاط زائد احيانا بينما يغلب عليك الخمول في اوقات اخرى :  <br>
<input type="radio" name="res19" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res19" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 20.		هل تفضل ان يكون لك عدد قليل من الاصدقاء بشرط ان يكونوا مخلصين		 :  <br>
<input type="radio" name="res20" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res20" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  21.	هل تكثر من احلام اليقظة  :  <br>
<input type="radio" name="res21" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res21" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  22.		اذا صرخ الناس في وجهك هل ترد عليهم بصراخة مثلها  :  <br>
<input type="radio" name="res22" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res22" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  23.		هل يضايقك بالشعور بالذنب كثيرا :  <br>
<input type="radio" name="res23" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res23" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 24.		هل عادتك طيبة ومرغوب فيها   :  <br>
<input type="radio" name="res24" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res24" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       

    



<p>  25.		هل تترك نفسك على طبيعتها عادة في الحفلوالمرح وتستمتع بع  :  <br>
<input type="radio" name="res25" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res25" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  26.	هل تعتقد انك متوتر الاعصاب :  <br>
<input type="radio" name="res26" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res26" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  27.		هل يتعقد الاخرون انك مملوء بالحيوية  .  :  <br>
<input type="radio" name="res27" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res27" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 28.		هل تشعر كثيرا بعد الانتهاء من عمل هام انك تستطيع القيام به على نحو افضل من ذلك :  <br>
<input type="radio" name="res28" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res28" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 29.		هل يغلب عليك الهدوء عندما تكون مع الاخرين  :  <br>
<input type="radio" name="res29" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res29" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  30.		هل تثرثر مع الناس وتتحدث عن الغير احيانا   :  <br>
<input type="radio" name="res30" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res30" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 31.		هل تدور الافكار في راسك لدرجة لاتستطيع معها النوم   :  <br>
<input type="radio" name="res31" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res31" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  32.		اذا كان هناك موضوع تريد ات تعرفه فهل تفضل معرفته من كتاب على ان تسال شخص اخر عنه  :  <br>
<input type="radio" name="res32" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res32" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  33.		هل يحدث لك خفقان في القلب وتسرع دقاته  :  <br>
<input type="radio" name="res33" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res33" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  34.		هل تحب نوع العمل الذي يحتاج منك الى انتباه دقيق  :  <br>
<input type="radio" name="res34" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res34" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  35.		هل تنتابك رعشة او رجفة :  <br>
<input type="radio" name="res35" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res35" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  36.		هل تعلن للجمارك عن جميع مافي حوزتك دائما حتى لو علمت انه من المستحيل الكشف عنها :  <br>
<input type="radio" name="res36" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res36" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  37.		هل فكرت ان تكون في مجموعة ينكت الواحد منهم على الاخر :  <br>
<input type="radio" name="res37" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res37" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  38.	هل انت شخص سهل اثارته واغضابة  :  <br>
<input type="radio" name="res38" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res38" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  39.		هل  تحب عمل الاشياء التي تنطلب منك التصرف السريع :  <br>
<input type="radio" name="res39" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res39" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  40.		هل تقلقك اشياء مخيفه قد تحدث من حولك :  <br>
<input type="radio" name="res40" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res40" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 41.		هل انت بطيىء في حركاتك  :  <br>
<input type="radio" name="res41" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res41" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 42.		هل حدث وتاخرت على موعد او عمل ذات مرة  :  <br>
<input type="radio" name="res42" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res42" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  43.		هل ترى احلام مزعجة (كوابيس بكثرة)   <br>
<input type="radio" name="res43" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res43" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  44.		هل تحب كثيرا التحدث مع الناس لدرجة انك لاتضيع فرصة للتحديث مع شخص غريب   :  <br>
<input type="radio" name="res44" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res44" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 45.		هل تقلقك الالام والاوجاع  :  <br>
<input type="radio" name="res45" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res45" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  46.		هل تشعر بتعاسة شديدة اذا لم ترى كثير من الناس في معظم اوقاتك  :  <br>
<input type="radio" name="res46" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res46" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  47.		هل تعتبر نفسك شخص عصبيا  :  <br>
<input type="radio" name="res47" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res47" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  48.		من بين جميع الناس الذي تعرفهم هل تجد بعض اشخاص لاتحبهم بكل تاكيد  :  <br>
<input type="radio" name="res48" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res48" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  49.		هل تعتقد انك واثقمن نفسك بصفة عامة  :  <br>
<input type="radio" name="res49" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res49" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  50.		هل يسهل ايلامك اذا كشف الناس عن عيب فيك او في عملك  :  <br>
<input type="radio" name="res50" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res50" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>



<p>  51.		هل يصعب عليك ان تستمتع حقيقة في حفل مرح  :  <br>
<input type="radio" name="res51" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res51" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>



<p>  52.	هل يضايقك شعورك بالنقص  :  <br>
<input type="radio" name="res52" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res52" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>



<p>  53.		هل يسهل عليك اذا الحيوية على حفل ممل  :  <br>
<input type="radio" name="res53" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res53" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>



<p>  54.		هل تتحدى احيانا عن امور لاتعلم عنها شيئا  :  <br>
<input type="radio" name="res54" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res54" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>



<p>  55.		هل تقلق على صحتك :  <br>
<input type="radio" name="res55" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res55" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>



<p>  56.		هل تحب ان تعطي الاخرين (مقلب)  :  <br>
<input type="radio" name="res56" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res56" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    


<p>  57.		هل تعاني من قلة النوم (الارق)  :  <br>
<input type="radio" name="res57" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res57" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>


   



<center>

<input class="exite1"  type="submit" name="submit"  value=" انهاء الاختبار"  id="submit">
</center>
	
	   



   


    </body>
    </html>