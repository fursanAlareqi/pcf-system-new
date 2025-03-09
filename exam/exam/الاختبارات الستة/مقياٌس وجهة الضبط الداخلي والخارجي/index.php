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
	<title>مقياس وجهة الضبط الداخلي و الخارجي</title>
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
	

<input type="radio" name="res1" value="1" id="res1" required >
        يقع الابناء في كثير من المشكلات لان الاباء يعاقبونهم اكثر من اللازم. <br>
        
	<input type="radio" name="res1" value="2" id="res1" required >
    مشكلة معظم الابناء هذه الايام هي الاباء يتساهلون معهم.<br>

   
    
   
   
<hr>
    




<input type="radio" name="res2" value="1" id="res1" required >
        كثير من الامور غير السارة التي تحدث للناس في حياتهم ترجع في جزء منها الى الحظ السيىء. <br>
        
	<input type="radio" name="res2" value="2" id="res1" required >
    يرحع سوء الحظ الذي يلاقية الى الاخطا الذي يرتكبونها.<br>
   
   
<hr>
    



<input type="radio" name="res3" value="1" id="res1" required >
         من الاسباب الرئيسة لاشتعال الحروب عدم اهتمام الناس بالامور السياسية . <br>
        
	<input type="radio" name="res3" value="2" id="res1" required >
    سوف تستمر الحروب وتبقى مهما حاول الناس ان يمنعوا وقوعها .<br>
   
   
<hr>
       
    




<input type="radio" name="res4" value="1" id="res1" required >
        بمرور الزمن يستطيع الفرد ان ينال الاحترام الذي يستحقة . <br>
        
	<input type="radio" name="res4" value="2" id="res1" required >
    من سوى الحظ ان جدارة الفرد وقيمة غالبا مالا يعترف بهما مهما جاهد الفرد في هذا السبيل .<br>
   
   
<hr>
       
    



<input type="radio" name="res5" value="1" id="res1" required >
        الاعتقاد بان المعلمين لا يعدلون بين الطلبة اعتقاد غير صحيح . <br>
        
	<input type="radio" name="res5" value="2" id="res1" required >
    معظم الطلبة لايرفون الى اي مدى تتاثر درجاتهم المدرسية بعوامل عارضة .<br>
   
   
<hr>
       
    



<input type="radio" name="res6" value="1" id="res1" required >
         بدون الفرص لايمكن للانسان ان يصبح غير صحيح  . <br>
        
	<input type="radio" name="res6" value="2" id="res1" required >
      عندما يفشل الافراد من ذوي الكفاءة في ان يصبحوا قادة فان ذلك يرجع الى انهم لم يحسنوا الاستفادة من الفرص التي اتيحت لهم  .<br>
   
   
<hr>
       
    




<input type="radio" name="res7" value="1" id="res1" required >
        مهما بذل الفرد من جهد فلن يستطيع ات يظفر بحب بعض الناس  . <br>
        
	<input type="radio" name="res7" value="2" id="res1" required >
    انما الذي يفشل في اكتساب ود الاخرين من لايعرف كيف يندمج معهم .<br>
   
   
<hr>
       
    



<input type="radio" name="res8" value="1" id="res1" required >
    تلعب الورثة الدور الكبير في تحديد شخصية الفرد  . <br>
        
	<input type="radio" name="res8" value="2" id="res1" required >
    خبرة الفرد في الحياة هي التي تحدد سلوكة.<br>
   
   
د<hr>
       
    



<input type="radio" name="res9" value="1" id="res1" required >
        اعتقد في الصحة المثل العامي القائل اللي مكتوب على الجبين لازم تشوفة العين. <br>
        
	<input type="radio" name="res9" value="2" id="res1" required >
    عندما اترك الامور تحدث تحت رحمة الظروف فان النتائج تكون اسوء مما لو  بادرت واتخذت قرارمعين.<br>
   
   
<hr>
       
           



<input type="radio" name="res10" value="1" id="res1" required >
        نادرا ما يقابل الطالب الذي احسن الاستعداد للامتحان اسئلة صعبة. <br>
        
	<input type="radio" name="res10" value="2" id="res1" required >
    في كثير من الاحيان تكون اسئلة الامتحانات غير ذات صلة بالمنهج بحيث تجد ان استذكار قد ضاع هباء .<br>
   
   
<hr>
       
    




<input type="radio" name="res11" value="1" id="res1" required >
        يعتمد النجاح على العمل الجاد اما الحظ فليس له الا دور بسيط جدا او لا دور له على الاطلاق. <br>
        
	<input type="radio" name="res11" value="2" id="res1" required >
    الوصول الى الوظائف المرموقة يتوقف بدرجة الاولى عاى ان تكون في المكان المناسب في الوقت المناسب.<br>
   
   
<hr>
       
    



<input type="radio" name="res12" value="1" id="res1" required >
        يستطيع المواطن العادي ان يكون لة تاثير في القرارت السياسية و الاجتماعية العامة. <br>
        
	<input type="radio" name="res12" value="2" id="res1" required >
    عالمنا هذا تتحكم فيه قلة من الاقوياء و لايستطيع البسطاء ان يفعلوا شيئا ازا ذلك.<br>
   
   
<hr>
       
    




<input type="radio" name="res13" value="1" id="res1" required >
        عندما اضع خططي غالبا ما اكون متاكد من قدراتي على تنفيذها بنجاح. <br>
        
	<input type="radio" name="res13" value="2" id="res1" required >
    ليس من الحكمة دائما ان نضع خططا طويلة المدى لان كثيرا من الامور يتضح فيما بعد ان احتمالات النجاح او الفشل فيها ترجع الى الحظ.<br>
   
   
<hr>
       
    




<input type="radio" name="res14" value="1" id="res1" required >
        هناك بعض الناس لايرجع منهم خيرا او نفعا. <br>
        
	<input type="radio" name="res14" value="2" id="res1" required >
    في كل واحد من الناس جانب من الخير.<br>
   
   
<hr>
       
    




<input type="radio" name="res15" value="1" id="res1" required >
        في حياتي ارى ان وصولي الى اهدافي لايعتمد على الحظ الاقليلا او لا يعتمد غبية مطلقا. <br>
        
	<input type="radio" name="res15" value="2" id="res1" required >
    في كثير من الحالات لايفيد التدبير او التعقيل شيئا بحيث يستوي اتخاذ القرار عن تدبير و تخطيطاو اتخاذ القرار عن طريق اجرلء القرعة.<br>
   
   

<hr>
       
    




<input type="radio" name="res16" value="1" id="res1" required >
        في اغلب الاحيان يظفر بالرئاسة من اسعده الحظ فكان اول من وصل الى المكان المناسب . <br>
        
	<input type="radio" name="res16" value="2" id="res1" required >
    او حمل الناس على عمل الاشياء الصحيحة امر يتوقف على القدرة وليس للحظ في ذلك الادور ضئيل او دور له على الاطلاق.<br>
   
   
<hr>
       
    



<input type="radio" name="res17" value="1" id="res1" required >
        في امور دنيانا نجد معظمنا ضحايالقوى لا نستطيع ان نفهما او نتحكم فيها. <br>
        
	<input type="radio" name="res17" value="2" id="res1" required >
    اذا قام النتس بادوار نشطة في الشئون السياسية والاجتماعية فانهم يستطيعون ان وثروا في احداث الدنيا حولهم.<br>
   
   
<hr>
       
    


<input type="radio" name="res18" value="1" id="res1" required >
        معظم الناس لايعرفون الى اي مدى تتاثر حياتهم باحداث عارضة. <br>
        
	<input type="radio" name="res18" value="2" id="res1" required >
    لا يوجد في الواقع شيئا اسمه الحظ.<br>
   
   
<hr>
       
    



<input type="radio" name="res19" value="1" id="res1" required >
        يجب ان يكون الانسان مستعد على الدوام للعتراف بالخطأ. <br>
        
	<input type="radio" name="res19" value="2" id="res1" required >
      من الافضل دائما ان انستمر في اخطائنا .<br>
   
 <hr>
       
    


<input type="radio" name="res20" value="1" id="res1" required >
        من الصب ان تعرف ما اذا كان الاخرون يحبونك ام لا. <br>
        
	<input type="radio" name="res20" value="2" id="res1" required >
    يتوقف عدد اصدقائك على مدى لطفك وجسن معشرك .<br>
   
  <hr>
       
    



<input type="radio" name="res21" value="1" id="res1" required >
        على المدى الطويل نجد انما يقع لنا من احداث سيئه تقابلها احداث اخرى طيبة. <br>
        
	<input type="radio" name="res21" value="2" id="res1" required >
    معظم الاحداث السيئة ينتج عن نقص القدره او الجهل او الكسل او كل اولئك.<br>
   
 <hr>
       
    



<input type="radio" name="res22" value="1" id="res1" required >
        لو اننا بذلنا مجهودا كافيا لامكننا القضاء على مختلف صور الفساد. <br>
        
	<input type="radio" name="res22" value="2" id="res1" required >
    من الصعب على الناس ان يتحكموا في ما يفعل اصحاب المناصب السياسية .<br>
   
 <hr>
       
    


<input type="radio" name="res23" value="1" id="res1" required >
        احيانا لا استطيع ان افهم كيف انتهاء المعلمون الى الدرجات التي يعطونها. <br>
        
	<input type="radio" name="res23" value="2" id="res1" required >
    هناك صلة مباشرة بين الجهد لبذي ابذلة في الاستذكار والدرجات التي احصل عليها.<br>
   
  <hr>
       
    


<input type="radio" name="res24" value="1" id="res1" required >
        الزعيم الناجحيتوقع من الناس ان يقرروا لانفسهم ما يجب ايفعلوه . <br>
        
	<input type="radio" name="res24" value="2" id="res1" required >
   الزعيم الناجح يوضح لكل فرد ما يجب ان يفعله .<br>
   
 <hr>
       

    


<input type="radio" name="res25" value="1" id="res1" required >
       كثيرا ما اشعر ان تاثيري ضعيف على الاحداث التي تقع لي . <br>
        
	<input type="radio" name="res25" value="2" id="res1" required >
  من المستحيل ان اصدق ان الصدفة او الحظ يلعب دورا كبيرا في حياتي.<br>
   
 <hr>
       
    


<input type="radio" name="res26" value="1" id="res1" required >
        يشعر الناس بالوحدة لانهم لا يستطيعون ان يتعاملون بروح الود و الصداقة. <br>
        
	<input type="radio" name="res26" value="2" id="res1" required >
    لي من المجد ان تحاول جاهدا لاكتساب مودة الاخرين لان هذا امرا ليس لك السيطرة علية .<br>
   
  <hr>
       
    

<input type="radio" name="res27" value="1" id="res1" required >
        هناك اهتمام مبالغ فيه في الالعاب الرياضية في المدارس الثانوية . <br>
        
	<input type="radio" name="res27" value="2" id="res1" required >
    الالعاب الرياضية الجماعية (التي تمارس في فريق)فرصة طيبة للتنمية الشخصية .<br>
   
 <hr>
       
    

<input type="radio" name="res28" value="1" id="res1" required >
        كل ما يحدث لي هو من صنع يدي . <br>
        
	<input type="radio" name="res28" value="2" id="res1" required >
    اشعر احيانا انه ليس سيطرة كافية على الوجهة التي تسير فيها حياتي .<br>
   
<hr>
       
    




<input type="radio" name="res29" value="1" id="res1" required >
        في اكثر الاحيان لااستطيع ان افهم لماذا يسلك السياسيون على النحو الذي سلكون علية . <br>
        
	<input type="radio" name="res29" value="2" id="res1" required >
    على المدى الطويل يمكننا القول ان الناس مسؤولون عن فساد الادارة سوى على المستوى المحلي او المستوى القومي .<br>
   
   
<hr>
       
    




   



<center>

<input class="exite1"  type="submit" name="submit"  value=" انهاء الاختبار"  id="submit">
</center>
	
	   



   


    </body>
    </html>