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

   







<link rel="stylesheet" type="text/css" href="../style/styles.css">
	<title>اختبر  mmbr</title>
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
            <h2> اختبار <br>  IMBR</h2>
    </Center>
        
        </div>
				
			



	<form action="index.php" method="post" name="fff">
    <input class="name" type="number" name="name" value="" id="name" placeholder="ادخل الكود" required >
    <label> الجنس</label>
             
            <select name="sex" >
              <option value="1">ذكر</option>
              <option value="2">انثى</option>
            </select>
            <hr>
	<p> 1 احب قراءة المقالات المتعلقه بالميكانيكا
  <br>
<input type="radio" name="res1" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res1" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
    



<p>  2 شهيتى للطعام جيده
 <br>
<input type="radio" name="res2" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res2" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
    



<p> 3 استيقظ فى معظم الايام نشطا ومرتاحا
 <br>
  
<input type="radio" name="res3" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res3" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>4 افضل ان اعمل كأمين مكتبه

	   <br>
<input type="radio" name="res4" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res4" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>5 من السهل ان توقظنى الاصوات من نومى

  <br>
<input type="radio" name="res5" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res5" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>6 احب قراءة المقالات المتعلقه بالجرائم

<br>
<input type="radio" name="res6" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res6" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>7 يداى وقدماى دافئة فى العادة


 <br>
<input type="radio" name="res7" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res7" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>8 حياتى اليومية مليئة بما يثير اهتمامى

 <br>
<input type="radio" name="res8" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res8" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>9 قدرتى على العمل هى هى لم تتغير عما كانت عليه من قبل

<br>
<input type="radio" name="res9" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res9" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
           



<p>10 اشعر كأن شيئاً يقف فى حلقى معظم الوقت

 <br>
<input type="radio" name="res10" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res10" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>11 يجب أن يحاول الشخص أن يفهم أحلامه وأن يتخذ منها دليلا يرشده أو نذيرا يحذره

  <br>
<input type="radio" name="res11" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res11" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>12 استمتع بقراءة الروايات البوليسية

  <br>
<input type="radio" name="res12" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res12" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>13 عندما اؤدى عملى اكون فى حالة توتر شديد

 <br>
<input type="radio" name="res13" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res13" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>14 اصاب بالاسهال مرة فى الشهر أو أكثر

  <br>
<input type="radio" name="res14" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res14" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>15 افكر من حين لآخر فى اشياء هى من القبح بحيث لا يمكن التحدث عنها

  <br>
<input type="radio" name="res15" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res15" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>16 لاشك فى اننى مظلوم فى هذه الحياة

  <br>
<input type="radio" name="res16" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res16" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>17 والدى رجل طيب

 <br>
<input type="radio" name="res17" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res17" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>18 قليلا ما اصاب بالامساك

  <br>
<input type="radio" name="res18" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res18" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>19 عندما اتسلم عملا جديدا أحب أن اعرف من هو الشخص الذى اليه فى المركز

 <br>
<input type="radio" name="res19" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res19" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>20 اننى قانع بحياتى الجنسية كما هى الآن

<br>
<input type="radio" name="res20" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res20" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>21 تعاودنى رغبة شديدة احيانا فى ان اترك اسرتى وابتعد عنها

<br>
<input type="radio" name="res21" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res21" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>22 تنتابنى احيانا نوبات من الضحك والبكاء لا استطيع مقاومتها



<br>
<input type="radio" name="res22" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res22" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>23 اصاب احيانا بنوبات من الغثيان والقئ


<br>
<input type="radio" name="res23" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res23" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>24 يبدو انه لا يوجد من يفهمنى


<br>
<input type="radio" name="res24" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res24" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       

    



<p>25 أود ان أكون مغنياً


<br>
<input type="radio" name="res25" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res25" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>26 اشعر عندما أكون فى مأزق أن من الافضل لى الا اتكلم

<br>
<input type="radio" name="res26" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res26" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>27 تسيطر علىّ روح الشر فى بعض الاحيان


<br>
<input type="radio" name="res27" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res27" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>28 عندما يسئ الى أحد أشعر بأن من الواجب أن ارد الاساءة بالاساءة

<br>
<input type="radio" name="res28" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res28" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>29 اصاب بحموضة المعدة بشكل يضايقنى عدة ايام فى الاسبوع


<br>
<input type="radio" name="res29" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res29" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 30 اشعر احيانا برغبه فى السب

<br>
<input type="radio" name="res30" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res30" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>31 تنتابنى الاحلام المزعجة مرة كل عدة ليالى

<br>
<input type="radio" name="res31" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res31" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>32 أجد صعوبة فى ان اركز ذهنى فى عمل أو مهمة

<br>
<input type="radio" name="res32" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res32" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>33 مررت بخبرات فى منتهى العجب والغرابة

<br>
<input type="radio" name="res33" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res33" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>34 تنتابنى الكحة فى معظم الاوقات

<br>
<input type="radio" name="res34" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res34" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>35 لو لم يضمر لى الناس العداوة لكنت أكثر نجاحا بكثير مما انا عليه

<br>
<input type="radio" name="res35" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res35" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>36 قليلا ما ينتابنى القلق على صحتى

<br>
<input type="radio" name="res36" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res36" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>37 لم يحدث لى قط اى اشكال بسبب سلوكى الجنسى

<br>
<input type="radio" name="res37" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res37" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>38 ارتكبت بعض السرقات البسيطة فى فترة ما عندما كنت صغيراً فى السن

<br>
<input type="radio" name="res38" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res38" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>39 اشعر احيانا برغبة فى تحطيم الاشياء

<br>
<input type="radio" name="res39" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res39" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>40 افضل فى جميع الاوقات أن أجلس واسترسل فى احلام اليقظة على أن اقوم بأى عمل آخر

<br>
<input type="radio" name="res40" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res40" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>41 مرت بى فترات تقدر بالأيام وأحيانا بالأسابيع أو الاشهر فقدت فيها القدرة على الاهتمام بما حولى وذلك لأننى لم استطع مواصلة نشاطى

<br>
<input type="radio" name="res41" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res41" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>42 اسرتى لا تميل الى العمل الذى اخترته

<br>
<input type="radio" name="res42" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res42" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>43 نومى مضطرب وقلق
 
<br>
<input type="radio" name="res43" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res43" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>44 اشعر فى معظم الاوقات بالآم فى جميع اجزاء رأسى

<br>
<input type="radio" name="res44" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res44" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>45 لا اقول الصدق دائماً

<br>
<input type="radio" name="res45" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res45" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>46 حكمى على االامور الآن افضل منه فى اى وقت مضى

<br>
<input type="radio" name="res46" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res46" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>47 اشعر كل اسبوع أو أقل بسخونه تعم جسمى فجأه وذلك دون سبب ظاهر

<br>
<input type="radio" name="res47" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res47" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>48 عندما أكون مع الناس يضايقنى أن اسمع أشياء جد غريبه

<br>
<input type="radio" name="res48" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res48" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>49 حبذا لو تلغى معظ القوانين

<br>
<input type="radio" name="res49" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res49" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>50 أشعر فى بعض الاحيان بأن روحى تفارق جسدى

<br>
<input type="radio" name="res50" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res50" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    

   
<p>51 صحتى الجسمية كصحة معظم أصدقائى فى الجودة

<br>
<input type="radio" name="res51" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res51" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
    



<p>52 أفضل أن أتجاهل أصداقاء المدرسة أو المعارف الذين لم أرهم منذ مدة طويلة الا إذا بادرونى هم بالكلام

<br>
<input type="radio" name="res52" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res52" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
    



<p>53 أعتقد أن رجل الدين يستطيع أن يشفى الأمراض عن طريق الصلاة ووضع يده على رأس المريض

<br>
  
<input type="radio" name="res53" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res53" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>54 إن معظم الذين يعرفوننى يحبوننى


	   <br>
<input type="radio" name="res54" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res54" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>55 لا تكاد تنتابنى أية آلام فى القلب أو فى الصدر


  <br>
<input type="radio" name="res55" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res55" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>56 عندما كنت صغيراً، فصت من المدرسة مرة أو أكثر بسبب تمردى وعصيانى

<br>
<input type="radio" name="res56" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res56" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>57 اننى سهل الاختلاط بالناس



 <br>
<input type="radio" name="res57" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res57" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>58 اعتقد أن كل شئ يحدث وفقاً لما ذكره الأنبياء والرسل


 <br>
<input type="radio" name="res58" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res58" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>59 غالباً ما اضطررت إلى أن أتلقى أوامر ممن هو أقل منى معرفه


<br>
<input type="radio" name="res59" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res59" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
           



<p>60 لا اقرأ كل مقال افتتحاى فى الجريدة اليومية


 <br>
<input type="radio" name="res60" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res60" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>61 لم أعش الحياة الصحيحة التى كان يجب أن أعيشها


  <br>
<input type="radio" name="res61" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res61" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>62 كثيراً ما أشعر فى بعض أجزاء جسمى بما يشبه الإحتراق أو القشعريرة أو التنميل او التخدير


  <br>
<input type="radio" name="res62" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res62" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>63 لم يحدث أن وجدت أية صعوبة فى ضبط عملية التبرز


 <br>
<input type="radio" name="res63" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res63" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>64 أثابر أحياناً على القيام بعمل ما إلى أن يفقد الآخرون صبرهم معى


  <br>
<input type="radio" name="res64" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res64" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>65 أحب والدى


  <br>
<input type="radio" name="res65" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res65" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>66 أرى حولى أشياء وحيوانات وناس لا يراهم غيرى


  <br>
<input type="radio" name="res66" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res66" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>67 أتمنى لو كنت سعيداً كما يبدو الآخرون
 

 <br>
<input type="radio" name="res67" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res67" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>68 لم يحدث لى تقريباً أن شعرت بألم فى خلف العنق


  <br>
<input type="radio" name="res68" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res68" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>69 أفضل دائما أن أكون مع أفراد فى نفس جنسى
 

 <br>
<input type="radio" name="res69" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res69" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>70 أحب أن أجتذب أفراد الجنس الآخر

<br>
<input type="radio" name="res70" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res70" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>71 أعتقد أن كثيراً من الناس يبالغون فى تصوير سوء حظهم كى ينالوا عطف الآخرين ومساعدتهم


<br>
<input type="radio" name="res71" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res71" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>72 تنتابنى آلام فى المعدة كل بضعة أيام قلائل


<br>
<input type="radio" name="res72" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res72" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>73 أعتقد أننى شخص مهم


<br>
<input type="radio" name="res73" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res73" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>74 كثيراً ما وودت أن أكون بنتاً (وإذا كان المجيب أنثى: لم آسف أبداً على أننى خلقت بنتاً)


<br>
<input type="radio" name="res74" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res74" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       

    



<p>75 ينتابنى الغضب أحياناً


<br>
<input type="radio" name="res75" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res75" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>76 أشعر بالحزن والإنقباض فى معظم الأوقات


<br>
<input type="radio" name="res76" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res76" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>77 أحب قراءة القصص الغرامية


<br>
<input type="radio" name="res77" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res77" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>78 أحب الشعر


<br>
<input type="radio" name="res78" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res78" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>79 ليس من السهل أن يجرح أحد شعورى


<br>
<input type="radio" name="res79" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res79" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>80 أعاكس الحيوانات أحياناً


<br>
<input type="radio" name="res80" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res80" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>81 أميل إلى الأعمال الخشنة كالعمل فى الحقول والغابات


<br>
<input type="radio" name="res81" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res81" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>82 من السهل أن أهزم فى المناقشة


<br>
<input type="radio" name="res82" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res82" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>83 أعتقد أن هناك فرصة كبيرة للنجاح أمام كل شخص يستطيع أن يعمل بجد ويرغب فى ذلك


<br>
<input type="radio" name="res83" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res83" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>84 أجد من الصعب على فى هذه الأيام أن أظل محتفظاً بأملى فى أننى سأرتقى


<br>
<input type="radio" name="res84" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res84" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>85 أعجب إعجابا شديداً فى بعض الأحيان بالممتلكات الشخصية للآخرين الأحذية والقفازات الخ ..... لدرجة أننى أرغب فى العبث بها أو سرقتها بالرغم من أنها لا تصلح لى


<br>
<input type="radio" name="res85" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res85" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>86 من المؤكد اننى قليل الثقة بنفسى

<br>
<input type="radio" name="res86" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res86" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>87 أحب أن أكون بائع زهور


<br>
<input type="radio" name="res87" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res87" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>88 أشعر على وجه العموم أن الحياة لها قيمة


<br>
<input type="radio" name="res88" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res88" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>89 إقناع الناس بالصواب يتطلب مجهوداً كبيراً.


<br>
<input type="radio" name="res89" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res89" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>90 أؤجل إلى الغد فى بعض الأحيان ما يجب أن أعمله اليوم


<br>
<input type="radio" name="res90" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res90" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>91 لا يضيرنى أن أكون موضوع مزاح


<br>
<input type="radio" name="res91" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res91" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>92 أحب أن أشتغل بالتمريض


<br>
<input type="radio" name="res92" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res92" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>93 أعتقد أن معظم الناس مستعدون لأن يكذبوا فى سبيل التفوق على غيرهم


<br>
<input type="radio" name="res93" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res93" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>94 أعمل أشياء كثيرة أندم عليها فيما بعد

<br>
<input type="radio" name="res94" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res94" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>95 أتردد على أماكن العبادة كل اسبوع تقريباً


<br>
<input type="radio" name="res95" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res95" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>96 مشاجراتى قليلة جداً مع أفراد عائلتى


<br>
<input type="radio" name="res96" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res96" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>97 تنتابنى أحياناً رغبة جامحة فى القيام بعمل يضر الآخرين أو يصدمهم


<br>
<input type="radio" name="res97" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res97" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>98 أعتقد فى مجئ المهدى المنتظر أو فى عودة المسيح


<br>
<input type="radio" name="res98" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res98" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>99 أحب أن أذهب إلى الحفلات أو الإجتماعات الأخرى التى أجد فيها الكثير من اللهو والصخب


<br>
<input type="radio" name="res99" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res99" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>100 قابلت مشكلات لم استطع أن أقرر شيئاً بشأنها لكثرة ما كان لها من حلول


<br>
<input type="radio" name="res100" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res100" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
   




<p> 101 أعتقد أنه يجب أن يكون للمرأة من الحرية الجنسية مثل ما للرجل  <br>
<input type="radio" name="res101" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res101" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
    



<p> 102 أشد المعارك عندى هى المعركة بينى وبين نفسى  <br>
<input type="radio" name="res102" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res102" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
    



<p> 103 لا أشكو تقلصاً فى العضلات وإن فعلت فنادراً <br>
  
<input type="radio" name="res103" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res103" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  	104 يبدو أننى لا اهتم بما يحدث لى
	   <br>
<input type="radio" name="res104" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res104" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 105 يضايقنى أحياناً أن تسوء صحتى
  <br>
<input type="radio" name="res105" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res105" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>106 أشعر فى معظم الأحيان أننى قد ارتكبت خطأ أو أتيت شراً
<br>
<input type="radio" name="res106" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res106" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 107 أشعر بالسعادة فى معظم الأوقات

 <br>
<input type="radio" name="res107" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res107" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>108 أشعر معظم الوقت بأن رأسى على وشك الإنفجار
 <br>
<input type="radio" name="res108" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res108" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>109 بعض الناس يصل حبهم للسيطرة إلى درجة أشعر معها برغبة فى مخالفتهم حتى ولو كان على حق
<br>
<input type="radio" name="res109" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res109" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
           



<p>110 بعض الناس يضمر لى فى نفسه شيئاً
 <br>
<input type="radio" name="res110" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res110" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>111 لم أقم قط بعمل فيه خطر لمجرد الإثارة التى تترتب على ذلك
  <br>
<input type="radio" name="res111" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res111" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 112 غالباً ما أجد من الضرورى أن أدافع عما أعتقد أنه صواب
  <br>
<input type="radio" name="res112" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res112" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 113 أعتقد أنه من الواجب أن تفرض القوانين على الناس فرضاً
 <br>
<input type="radio" name="res113" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res113" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>114 أشعر غالباً بضغط شديد حول رأسى
  <br>
<input type="radio" name="res114" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res114" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 115 أعتقد فى الحياة الآخرة
  <br>
<input type="radio" name="res115" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res115" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 116 يزداد إستمتاعى بالمسابقات أو المبارايات عندما أراهن عليها
  <br>
<input type="radio" name="res116" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res116" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 117 أعتقد أن الناس أمناء لخوفهم أن يكتشف أمرهم
 <br>
<input type="radio" name="res117" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res117" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>118 كنت أحول إلى الناظر أحياناً بسبب تغيبى عن المدرسة
  <br>
<input type="radio" name="res118" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res118" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>119 لم يتغير صوتى عما كان عليه فلم يعد أسرع أو أبطاً أو أكثر حشرجة أو أحسن من ذى قبل
 <br>
<input type="radio" name="res119" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res119" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 120 لا أهتم بمراعاة آداب المائدة فى منزلى كما اهتم بمراعتها خارج المنزل
<br>
<input type="radio" name="res120" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res120" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>121 أعتقد أن هناك مؤامرة تدبر ضدى
<br>
<input type="radio" name="res121" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res121" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>122 يبدو إننى لا أقل نباهة أو قدرة عن معظم الناس المحيطين بى
<br>
<input type="radio" name="res122" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res122" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>123 أعتقد أن هناك من يتتبعنى
<br>
<input type="radio" name="res123" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res123" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>124 معظم الناس يستخدمون وسائل ملتوية للحصول على كسب أو منفعة بدلاً من أن يتركوا الفرصة تضيع عليهم
<br>
<input type="radio" name="res124" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res124" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       

    



<p>125 كثيراً ما تتعبنى معدتى
<br>
<input type="radio" name="res125" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res125" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>126 أحب الروايات العاطفية العنيفة
<br>
<input type="radio" name="res126" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res126" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>127 إننى أعرف من هو المسئول عن معظم متاعبى
<br>
<input type="radio" name="res127" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res127" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>128 رؤية الدم لا تسبب لى الرعب
<br>
<input type="radio" name="res128" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res128" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>129 لا أستطيع أن أرى فى أغلب الأحيان سبباً غضبى أو نقمتى على الحياة
<br>
<input type="radio" name="res129" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res129" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>130 لم يحدث أن تقيأت دماً او سعلت دماً
<br>
<input type="radio" name="res130" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res130" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>131 لا تقلقنى فكرة الاصابة بالمرض
<br>
<input type="radio" name="res131" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res131" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>132 أحب جمع الزهور وتربية النباتات المنزلية
<br>
<input type="radio" name="res132" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res132" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>133 لم يحدث أن انغمست فى عادة من العادات الجنسية الشاذة
<br>
<input type="radio" name="res133" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res133" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>134 تتوارد الأفكار فى ذهنى أحياناً بأسرع مما أستطع أن أعبر به
<br>
<input type="radio" name="res134" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res134" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>135 من الجائز أن أدخل السينما دون أن أدفع ثمن التذكرة إذا تأكدت من أن أحداً لن يرانى
<br>
<input type="radio" name="res135" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res135" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>136 غالباً ما أتساءل عن الأسباب المستترة التى تدفع الآخرين إلى معونتى
<br>
<input type="radio" name="res136" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res136" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>137 أعتقد أن حياتى المنزية تعادل من حيث السعادة حياة معظم الناس الآخرين الذين أعرفهم
<br>
<input type="radio" name="res137" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res137" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>138 النقد أو اللوم يجرحان شعورى إلى حد كبير
<br>
<input type="radio" name="res138" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res138" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>139 أشعر فى بعض الأحيان كما لو كان من الضرورى أن أؤذى نفسى أو أى شخص آخر
<br>
<input type="radio" name="res139" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res139" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>140 أحب أن أقوم بطهى الطعام
<br>
<input type="radio" name="res140" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res140" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>141 تحدد سلوكى إلى حد كبير التقاليد المحيطة بى
<br>
<input type="radio" name="res141" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res141" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>142 أشعر فى بعض الأحيان شعوراً قوياً أننى عديم الفائدة
<br>
<input type="radio" name="res142" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res142" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>143 كنت أنتمى فى طفولتى إلى جماعة (شلة) اتفقت على أن تتحد فى السراء والضراء
<br>
<input type="radio" name="res143" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res143" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>144 أود أن التحق بالجيش
<br>
<input type="radio" name="res144" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res144" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>145 أشعر أحياناً برغبة فى الاشتباك بالأيدى مع أى شخص
<br>
<input type="radio" name="res145" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res145" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>146 تنتابنى رغبة ملحة فى التجول بحيث لا أشعر بالسعادة إلا عندما أنفذ هذه الرغبة فأتجول أو أسافر
<br>
<input type="radio" name="res146" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res146" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>147 فقدت كثيراً من الفرص لأنى لم أستطع أن أبت فى الأمور بصورة قاطعة
<br>
<input type="radio" name="res147" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res147" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>148 إننى أفقد صبرى إذا ما قاطعنى الناس أثناء إشتغالى بأمر هام
<br>
<input type="radio" name="res148" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res148" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>149 من عاداتى ان أكب يومياتى
<br>
<input type="radio" name="res149" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res149" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>150 أفضل الكسب على الخسارة فى اللعب
<br>
<input type="radio" name="res150" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res150" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    

   
<p>151 أعتقد أن بعض الناس يحاول أن يدس السم لى
<br>
<input type="radio" name="res151" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res151" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
    



<p>152 أنام فى معظم الليالى دون أن تضايقنى الأفكار
<br>
<input type="radio" name="res152" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res152" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
    



<p>153 كانت صحتى فى خلال السنوات القليلة الماضية جيدة على وجه العموم
<br>
  
<input type="radio" name="res153" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res153" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>154 لم أصب مطلقاً بأية نوبة

	   <br>
<input type="radio" name="res154" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res154" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>155 وزنى لا يزيد ولا ينقص

  <br>
<input type="radio" name="res155" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res155" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>156 مرت بى فترات كنت أقوم فيها بأفعال دون أن أعرف بعد ذلك ماذا كنت أفعل

<br>
<input type="radio" name="res156" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res156" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>157 أشعر بأننى كثيراً ما عوقبت دون سبب


 <br>
<input type="radio" name="res157" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res157" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>158 أبكى بسهولة

 <br>
<input type="radio" name="res158" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res158" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 159 لم أعد أفهم ما أقرأ بنفس الدرجة التى كنت أفهم بها سابقاً

<br>
<input type="radio" name="res159" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res159" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
           



<p>160 لم أشعر فى يوم من الأيام بأننى أحسن مما أنا عليه الآن

 <br>
<input type="radio" name="res160" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res160" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>161 أشعر أحياناً أن قمة رأسى رخوة (طرية)

  <br>
<input type="radio" name="res161" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res161" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>162 لا أقبل أن يستغلنى أحد إلى الحد الذى لا أجد معه مفراً من أن أعترف بذلك

  <br>
<input type="radio" name="res162" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res162" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>163 لا أتعب بسرعة

 <br>
<input type="radio" name="res163" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res163" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>164 حب أن أدرس الأشياء التى أشتغل بها وأن أقرأ عنها

  <br>
<input type="radio" name="res164" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res164" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>165 أحب أن أتعرف على الناس المهمين لأن ذلك يشعرنى بالأهمية

  <br>
<input type="radio" name="res165" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res165" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>166 أخاف عندما أطل من مكان عالِ

  <br>
<input type="radio" name="res166" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res166" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>167 لا يثيرنى أن يقع أحد أفراد عائلتى فى مأزق بسبب مخالفته للقانون

 <br>
<input type="radio" name="res167" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res167" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>168 أشعر أن عقلى مختل

  <br>
<input type="radio" name="res168" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res168" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>169 لا أخشى التعامل بالنقود

 <br>
<input type="radio" name="res169" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res169" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>170 لا يهمنى ما يظنه الناس عنى

<br>
<input type="radio" name="res170" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res170" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>171 يضايقنى أن أقوم بدور المهرج فى حفلة حتى ولو كان الأخرون يقومون بنفس الشئ

<br>
<input type="radio" name="res171" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res171" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>172 كثيراً ما أضطر إلى أن أبذل مجهوداً كبيراً لأخفى ما قد يظهر من خجلى

<br>
<input type="radio" name="res172" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res172" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>173 أحب المدرسة

<br>
<input type="radio" name="res173" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res173" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>174 لم يحدث لى قط أن أغمى علىّ

<br>
<input type="radio" name="res174" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res174" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       

    



<p>175 قلما حدث أن أصبت بدوخه

<br>
<input type="radio" name="res175" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res175" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>176 لا أخاف الثعابين كثيراً

<br>
<input type="radio" name="res176" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res176" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>177 أمى سيدة طيبة

<br>
<input type="radio" name="res177" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res177" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>178 يبدو أن ذاكرتى لا بأس بها

<br>
<input type="radio" name="res178" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res178" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>179 الأمور الجنسية تثير عندى القلق

<br>
<input type="radio" name="res179" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res179" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>180 أجد صعوبة فى التحدث مع الناس إذا كانت معرفتى بهم حديثة

<br>
<input type="radio" name="res180" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res180" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>181 أشعر برغبة فى القيام بعمل مثير حين ينتابنى السأم أو الملل

<br>
<input type="radio" name="res181" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res181" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>182 أخشى أن يطير صوابى

<br>
<input type="radio" name="res182" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res182" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>183 إننى ضد مسألة إعطاء النقود للشحاذين

<br>
<input type="radio" name="res183" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res183" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>184 أسمع فى العادة أصواتاً دون أن أعرف مصدرها

<br>
<input type="radio" name="res184" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res184" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>185 سمعى لا يقل جودة عن سمع معظم الناس

<br>
<input type="radio" name="res185" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res185" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>186 غالباً ما ألاحظ أن يداى ترتجفان عندما أحاول أن أقوم بعمل ما

<br>
<input type="radio" name="res186" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res186" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>187 لم يحدث أن فقدت يداى إتزانهما أو مهارتهما

<br>
<input type="radio" name="res187" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res187" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>188 أستطيع القراءة مدة طويلة دون أن تتعب عيناى

<br>
<input type="radio" name="res188" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res188" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>189 أشعر فى معظم الأوقات بضعف عام

<br>
<input type="radio" name="res189" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res189" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>190 قليلاً ما أصاب بالصداع

<br>
<input type="radio" name="res190" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res190" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>191 إننى أتصبب عرقاً عندما أحرج فى بعض الأحيان

<br>
<input type="radio" name="res191" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res191" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>192 لم يحدث أن وجدت صعوبة فى حفظ توازنى فى المشى

<br>
<input type="radio" name="res192" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res192" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>193 لا أشكو من نوبات الربو أو نوبات الزكام

<br>
<input type="radio" name="res193" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res193" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>194 تحدث لى نوبات لا أستطيع فيها أن أسيطر على حركاتى أو على كلامى وإن كنت أشعر بما يدور حولى

<br>
<input type="radio" name="res194" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res194" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>195 ليس كل من أعرفه أحبه

<br>
<input type="radio" name="res195" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res195" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>196 أحب أن أزور الأماكن التى لم تسبق لى رؤيتها

<br>
<input type="radio" name="res196" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res196" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>197 يحاول بعض الناس أن ينهبنى

<br>
<input type="radio" name="res197" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res197" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>198 قليلاً ما أستغرق فى أحلام اليقظة

<br>
<input type="radio" name="res198" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res198" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>199 يجب أن يتعلم الأطفال جميع الحقائق المتعلقة بالنواحى الجنسية

<br>
<input type="radio" name="res199" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res199" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>200 أعتقد أن هناك من يحاول أن يسرق أفكارى أو نتائج أعمالى

<br>
<input type="radio" name="res200" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res200" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       

   
<p> 201 أتمنى لو لم أكن خجولاً إلى هذا الحد
 <br>
<input type="radio" name="res201" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res201" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
    



<p> 202 أعتقد أننى شخص منحوس
 <br>
<input type="radio" name="res202" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res202" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
    



<p> 203 إذا كنت صحفياً فإننى أحب أن أنقل أخبار الدوائر المسرحية
 <br>
  
<input type="radio" name="res203" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res203" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>204 أود أن أكون صحفياً

	   <br>
<input type="radio" name="res204" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res204" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 205 مرت على أوقات كان من المستحيل علىّ فيها أن أمنع نفسى عن سرقة أو خطف شئ
  <br>
<input type="radio" name="res205" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res205" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>206 أعتقد أننى أشد تديناً من معظم الناس

<br>
<input type="radio" name="res206" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res206" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>207 أجد متعة فى أنواع كثيرة من الألعاب ووسائل الترويح


 <br>
<input type="radio" name="res207" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res207" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>208 أحب أن أغازل الجنس الآخر

 <br>
<input type="radio" name="res208" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res208" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>209 أعتقد أن ذنوبى لا يمكن أن تغفر

<br>
<input type="radio" name="res209" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res209" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
           



<p>210 كل شئ فى نظرى سواء

 <br>
<input type="radio" name="res210" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res210" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>211 أستطيع أن أنام أثناء النهار ولكن ليس أثناء الليل

  <br>
<input type="radio" name="res211" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res211" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>212 أهلى يعاملونى كما يعامل الطفل لا كما يعامل الراشد

  <br>
<input type="radio" name="res212" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res212" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 213 أتحاشى أثناء المشى على رصيف الشارع مثلاً أن تسقط قدمى فى الشقوق الموجودة بين كل حجر وآخر

 <br>
<input type="radio" name="res213" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res213" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>214 لم يحدث أن أصبت بطفح جلدى سبب لى قلقاً

  <br>
<input type="radio" name="res214" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res214" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 215 تعاطيت المشروبات الروحية (الخمر) بكثرة

  <br>
<input type="radio" name="res215" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res215" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>216 هناك قليل جداً من الحب والتآخى فى عائلتى إذا قورنت بالعائلات الأخرى

  <br>
<input type="radio" name="res216" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res216" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>217 غالباً ما أجد نفسى قلقاً على أمر من الأمور

 <br>
<input type="radio" name="res217" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res217" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>218 لا يضايقنى أن أرى الحيوانات تتعذب

  <br>
<input type="radio" name="res218" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res218" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>219 أود أن اكون مقاول مبانى

 <br>
<input type="radio" name="res219" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res219" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>220 أحب والدتى

<br>
<input type="radio" name="res220" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res220" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>221 أحب العلوم

<br>
<input type="radio" name="res221" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res221" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>222 لا أجد صعوبة فى طلب المعونة من أصدقائى حتى ولو كنت لا أستطيع رد الجميل

<br>
<input type="radio" name="res222" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res222" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>223 أحب الصيد حباً شديداً

<br>
<input type="radio" name="res223" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res223" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>224 كثيراً ما اعترض والدى على نوع الأشخاص الذين أرافقهم
<br>
<input type="radio" name="res224" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res224" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       

    



<p> 225 أحب أن أدردش قليلاً من حين لآخر

<br>
<input type="radio" name="res225" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res225" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>226 بعض أفراد اسرتى لهم عادات تضايقنى مضايقة شديدة

<br>
<input type="radio" name="res226" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res226" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>227 قيل لى أننى أمشى أثناء النوم

<br>
<input type="radio" name="res227" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res227" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>228 أشعر أحياناً أننى استطيع أن اتخذ القرارات بسهولة غير عادية

<br>
<input type="radio" name="res228" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res228" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>229 أود الانتماء إلى أندية وهيئات عديدة

<br>
<input type="radio" name="res229" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res229" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>230 لم يحدث لى قط أن شعرت بشدة خفقان قلبى أو اصبت بضيق فى التنفس

<br>
<input type="radio" name="res230" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res230" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>231 أحب التحدث فى الأمور الجنسية

<br>
<input type="radio" name="res231" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res231" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>232 الهمت خطة فى الحياة تقوم على اساس أداء الواجب ولا أزال أتبعها بدقة

<br>
<input type="radio" name="res232" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res232" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>233 أحياناً ما اعترضت طريق بعض الناس ومنعتهم من القيام بأعمال معينة لا لشئ إلا المبدأ

<br>
<input type="radio" name="res233" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res233" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>234 أغضب بسهولة ولكن سرعان ما أعود إلى حالتى الطبيعية

<br>
<input type="radio" name="res234" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res234" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>235 نشأت مستقلاً تمام الاستقلال ومتحرراً من سلطة العائلة

<br>
<input type="radio" name="res235" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res235" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>236 كثيراً ما استغرق فى التفكير

<br>
<input type="radio" name="res236" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res236" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>237 جميع أقاربى تقريباً يعطفون علىّ

<br>
<input type="radio" name="res237" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res237" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>238 تمر بى فترات من عدم الاستقرار بحيث لا استطيع أن امكث طويلاً فى مقعدى

<br>
<input type="radio" name="res238" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res238" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>239 فشلت فى الحب

<br>
<input type="radio" name="res239" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res239" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>240 لا اهتم مطلقاً بمظهرى

<br>
<input type="radio" name="res240" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res240" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>241 أحلم عادة بأشياء أفضل أن احتفظ بها لنفسى

<br>
<input type="radio" name="res241" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res241" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>242 لست عصبياً بدرجة أكبر مما عليه معظم الناس

<br>
<input type="radio" name="res242" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res242" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>243 لا أشكو من آلام إلا قليلاً جداً لدرجة العدم

<br>
<input type="radio" name="res243" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res243" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>244 يسئ الآخرون عادة فهم طريقتى فى التصرف

<br>
<input type="radio" name="res244" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res244" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>245 والدى وعائلتى يبالغون فى تصوير عيوبى

<br>
<input type="radio" name="res245" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res245" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>246 تظهر حبوب حمراء على رقبتى فى معظم الأوقات

<br>
<input type="radio" name="res246" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res246" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>247 عندى من الأسباب ما يجعلنى أعارض بعض أفراد عائلتى

<br>
<input type="radio" name="res247" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res247" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>248 أحياناً أشعر بسعادة وانشراح عظيمين بدون أى سبب، بل وعندما تكون الأمور سائرة على غير ما أشتهى

<br>
<input type="radio" name="res248" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res248" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>249 أعتقد بوجود الشياطين ووجود الجحيم فى الحياة الأخرى
<br>
<input type="radio" name="res249" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res249" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>250 لا ألوم أى شخص يحاول أن يحصل لنفسه على ما يمكن أن تقع عليه يداه فى هذا العالم

<br>
<input type="radio" name="res250" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res250" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    

   
<p>251 تصيبنى نوبات يتوقف فيها نشاطى ولا أشعر فيها بما يدور حولى

<br>
<input type="radio" name="res251" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res251" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
    



<p>252 أعتقد أن الناس لا يعبأون بما يحدث للآخرين
<br>
<input type="radio" name="res252" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res252" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
    



<p>253 أستطيع أن أبقى صلتى بأولئك الذين تصدر منهم أفعال أعتبرها خطأ

<br>
  
<input type="radio" name="res253" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res253" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>254 أحب أن أكون مع مجموعة من الأشخاص يتبادل أفرادها النكات


	   <br>
<input type="radio" name="res254" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res254" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>255 قد يحدث أن أعطى صوتى أحياناً لأشخاص لا أعرف عنهم إلا القليل


  <br>
<input type="radio" name="res255" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res255" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>256 الشئ الوحيد الذى يثير اهتمامى فى الجرائد أو المجلات هو الجزء الفكاهى


<br>
<input type="radio" name="res256" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res256" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>257 أتوقع عادة أن أنجح فيما أقوم به

 <br>
<input type="radio" name="res257" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res257" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>258 أعتقد بوجود الله

 <br>
<input type="radio" name="res258" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res258" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>259 أجد من الصعب على أبدأ عملاً من الأعمال


<br>
<input type="radio" name="res259" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res259" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
           



<p>260 كنت  متأخراً فى دراستى


 <br>
<input type="radio" name="res260" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res260" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>261 لو كنت فناناً لوددت أن أرسم الزهور


  <br>
<input type="radio" name="res261" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res261" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>262 لا يضايقنى أننى لست أحسن شكلاً مما أنا عليه

  <br>
<input type="radio" name="res262" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res262" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>263 أعرق بسهولة حتى فى الجو البارد


 <br>
<input type="radio" name="res263" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res263" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>264 أنا واثق كل الثقة فى نفسى


  <br>
<input type="radio" name="res264" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res264" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>265 من الأسلم ألا يثق الانسان بأحد


  <br>
<input type="radio" name="res265" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res265" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>266 يهتاج شعورى مرة أو أكثر فى الاسبوع


  <br>
<input type="radio" name="res266" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res266" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>267 أجد صعوبة فى التفكير فى موضوعات مناسبة للحديث عندما أكون وسط مجموعة من الناس


 <br>
<input type="radio" name="res267" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res267" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>268 غالباً ما ينقذنى شئ مثير من حالات الانقباض التى أقع فيها


  <br>
<input type="radio" name="res268" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res268" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>269 يمكن بسهولة أن أخيف الناس منى وأفعل أحياناً ذلك للتسلية


 <br>
<input type="radio" name="res269" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res269" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>270 عندما أغادر المنزل لا ينتابنى الضيق أو الشك فى أن أكون قد تركت النوافذ مفتوحة أو الباب غير مغلق


<br>
<input type="radio" name="res270" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res270" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>271 إننى لا ألوم أى شخص يتسغل من يعرض نفسه للإستغلال


<br>
<input type="radio" name="res271" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res271" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>272 أشعر فى بعض الأحيان أننى مملوء نشاطاً
 

<br>
<input type="radio" name="res272" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res272" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>273 أفقد الاحساس فى منطقة أو أكثر من جلدى


<br>
<input type="radio" name="res273" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res273" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>274 لم يضعف بصرى عما كان عليه من عدة سنوات

<br>
<input type="radio" name="res274" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res274" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       

    



<p>275 أشعر أن شخصاً ما يسيطر على عقلى

<br>
<input type="radio" name="res275" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res275" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 276 أجد متعة كبيرة مع الأطفال


<br>
<input type="radio" name="res276" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res276" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>277 أعجب أحياناً بمهارة بعض النصابين لدرجة أننى أرجو لهم النجاح فيما يقومون به


<br>
<input type="radio" name="res277" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res277" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>278 غالباً ما أشعر أن بعض الغرباء ينظرون إلى بعين النقد


<br>
<input type="radio" name="res278" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res278" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>279 أشرب من الماء يومياً مقادير كبيرة بشكل غير عادى


<br>
<input type="radio" name="res279" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res279" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>280 معظم الناس يكونون صداقاتهم على أساس احتمال الإفادة من أصدقائهم

<br>
<input type="radio" name="res280" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res280" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>281 لا أشعر غالباً بطنين أو رنين فى أذنى


<br>
<input type="radio" name="res281" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res281" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>282 أشعر من حين لآخر بكراهية نحو أفراد أسرتى التى أحبها فى العادة


<br>
<input type="radio" name="res282" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res282" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>283 لو كنت مخبراً صحفياً لوددت أن أنقل أخبار الرياضة
 

<br>
<input type="radio" name="res283" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res283" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>284 إننى واثق من أن الناس يتكلمون عنى


<br>
<input type="radio" name="res284" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res284" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>285 أضحك أحياناً من النكت التى قد تخرج عن حدود اللياقة
 
<br>
<input type="radio" name="res285" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res285" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 286 إننى أسعد ما أكون عندما أكون وحيداً


<br>
<input type="radio" name="res286" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res286" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>287 مخاوفى قليلة إذا قورنت بمخاوف أصدقائى
   

<br>
<input type="radio" name="res287" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res287" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>288 تزعجنى نوبات من الإغماء والقئ


<br>
<input type="radio" name="res288" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res288" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>289 يزداد اشمئزازى من القانون كلما وجدت بعض المجرمين قد نجا بفضل مهارة محامٍ قدير
 

<br>
<input type="radio" name="res289" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res289" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>290 إننى أعمل تحت توتر عصبى عنيف


<br>
<input type="radio" name="res290" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res290" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>291 حدث أحياناً أن شعرت بأن شخصاً ما يدفعنى إلى القيام بأعمال عن طريق تنويمى


<br>
<input type="radio" name="res291" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res291" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>292 لا أبدأ الناس عادة بالحديث ما لم يبدأونى هم
 

<br>
<input type="radio" name="res292" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res292" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>293 أشعر أن شخصاً ما يحاول أن يؤثر على عقلى


<br>
<input type="radio" name="res293" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res293" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>294 لم يحدث قط أن أصطدمت بالقانون



<br>
<input type="radio" name="res294" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res294" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>295 أحب القصص الخيالية
  

<br>
<input type="radio" name="res295" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res295" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>296 تمر على فترات أشعر فيها بانشراح دون ما سبب ظاهر


<br>
<input type="radio" name="res296" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res296" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>297 أتمنى ألا تضايقنى الأفكار الجنسية


<br>
<input type="radio" name="res297" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res297" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>298 إذا وجدت مجموعة من الناس أنها فى مأزق فالأفضل أن يتفقوا على قصة واحدة ويلتزموها جميعاً


<br>
<input type="radio" name="res298" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res298" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>299 أعتقد أننى أعمق شعوراً من معظم الناس
 

<br>
<input type="radio" name="res299" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res299" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>300 لم أحب فى أى فترة من فترات حياتى أن ألعب بالعرائس
 

<br>
<input type="radio" name="res300" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res300" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
   


   
<p> 301 الحياة صعبة لى فى معظم الأحيان
 
 <br>
<input type="radio" name="res301" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res301" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
    



<p>   
 <br>302. لم يحدث أن وقعت فى مأزق لأسباب تتعلق بالسلوك الجنسى
 <br>
<input type="radio" name="res302" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res302" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
    



<p>303 إننى شديد الحساسية بالنسبة لبعض الموضوعات لدرجة لا أستطيع التحدث فيها
 
 <br>
  
<input type="radio" name="res303" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res303" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>304 كنت أجد وأنا فى المدرسة أن من الصعب على أن أتحدث أمام الفصل


	   <br>
<input type="radio" name="res304" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res304" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>305 أشعر فى معظم الأيام بالوحدة حتى ولو كنت مع آخرين

  <br>
<input type="radio" name="res305" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res305" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>306 إننى حاصل على كل ما أستحقه من العطف


<br>
<input type="radio" name="res306" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res306" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>307 أرفض الإشتراك فى بعض الألعاب التى لا أجيدها



 <br>
<input type="radio" name="res307" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res307" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>308 أرغب بشدة أحياناً فى مغادرة المنزل


 <br>
<input type="radio" name="res308" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res308" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>309 أشعر بأننى أكوّن صداقاتى بنفس السرعة التى يكون بها الآخرون صداقاتهم


<br>
<input type="radio" name="res309" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res309" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
           



<p>310 إننى راضِ عن حياتى الجنسية بوجه عام


 <br>
<input type="radio" name="res310" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res310" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>311 أرتكبت بعض السرقات البسيطة عندما كنت طفلاً صغيراً


  <br>
<input type="radio" name="res311" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res311" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>312 أكره وجود الناس حولى


  <br>
<input type="radio" name="res312" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res312" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 313 أعتقد أن الشخص الذى يترك أشياء ثمينة عرضة للسرقة يستحق من اللوم بقدر ما يستحقه اللص الذى يسرقها


 <br>
<input type="radio" name="res313" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res313" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>314 أفكر من حين لآخر فى أشياء من القبح بحيث لا يصح التحدث عنها


  <br>
<input type="radio" name="res314" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res314" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>315 أنا واثق من إننى مظلوم فى هذه الحياة


  <br>
<input type="radio" name="res315" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res315" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>316 أعتقد أن كل شخص تقريباً قد يكذب ليتجنب الوقوع فى المآزق


  <br>
<input type="radio" name="res316" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res316" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>317 إننى أكثر حساسية من معظم الناس


 <br>
<input type="radio" name="res317" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res317" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>318 حياتى اليومية مملوءة بما يثير اهتمامى


  <br>
<input type="radio" name="res318" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res318" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>319 معظم الناس يكره فى قرارة نفسه أن يساعد الآخرين


 <br>
<input type="radio" name="res319" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res319" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>320 كثير من أحلامى يتعلق بالأمور الجنسية


<br>
<input type="radio" name="res320" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res320" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>321 من السهل أن أحرج


<br>
<input type="radio" name="res321" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res321" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 322 المال والعمل يثيران القلق عندى


<br>
<input type="radio" name="res322" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res322" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>323 مررت بخبرات غاية فى الغرابة


<br>
<input type="radio" name="res323" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res323" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>324 لم أقع فى حب أى شخص

 <br>
<input type="radio" name="res324" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res324" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       

    



<p>325 إن ما قام به بعض أفراد أسرتى أثار فى الفزع


<br>
<input type="radio" name="res325" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res325" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>326 تعترينى من حين لآخر نوبات من الضحك والبكاء لا أستطيع السيطرة عيها


<br>
<input type="radio" name="res326" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res326" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>327 كان أبى أو أمى يرغمنى عى الطاعة حتى ولو كنت أعلم أن الأمر الذى أطيعه غير معقول


<br>
<input type="radio" name="res327" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res327" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>328 أجد صعوبة فى أن أركز ذهنى فى عمل او مهمة ما


<br>
<input type="radio" name="res328" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res328" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>329 أحياناً ما أفقد قدرتى على الكلام أو يتغير صوتى حتى ولو لم أكن مصاباً ببرد


<br>
<input type="radio" name="res329" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res329" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>330 لم يحدث أن أصبت بالشلل أو أصيبت عضلاتى بأى ضعف غير عادى


<br>
<input type="radio" name="res330" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res330" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>331 لو لم يضمر لى الناس العداوة لكنت أكثر نجاحاً بكثير مما أنا عليه الآن


<br>
<input type="radio" name="res331" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res331" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>332 أحياناً ما يحتبس صوتى أو يتغير حتى لو لم أكن مصاباً ببرد


<br>
<input type="radio" name="res332" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res332" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 333 يبدو أنه لا يوجد من يفهمنى


<br>
<input type="radio" name="res333" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res333" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>334 أشم أحياناً روائح غريبة

<br>
<input type="radio" name="res334" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res334" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>335 لا أستطيع أن أركز ذهنى فى موضوع واحد


<br>
<input type="radio" name="res335" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res335" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>336 من السهل أن ينفذ صبرى مع الناس


<br>
<input type="radio" name="res336" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res336" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>337 غالباً ما أشعر بالقلق على شئ أو شخص ما


<br>
<input type="radio" name="res337" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res337" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>338 لا شك فى أن نصيبى من الأشياء المسببة للقلق فى هذه الحياة كان كبيراً

<br>
<input type="radio" name="res338" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res338" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>339 أتمنى الموت فى معظم الأحيان


<br>
<input type="radio" name="res339" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res339" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>340 يتهيج شعورى فى بعض الأحيان لدرجة أنه يتعذر علىّ النوم


<br>
<input type="radio" name="res340" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res340" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>341 يصبح سمعى أحياناً مرهفة لدرجة تضايقنى


<br>
<input type="radio" name="res341" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res341" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>342 أنسى ما يقال لى فى الحال


<br>
<input type="radio" name="res342" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res342" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>343 غالباً ما أتوقف وأفكر قبل أن أعمل حتى فى الأمور التافهة


<br>
<input type="radio" name="res343" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res343" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>344 غالباً ما أعبر الطريق لاتحاشى مقابلة شخص ما


<br>
<input type="radio" name="res344" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res344" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>345 أشعر أحياناً أن الأشياء ليست حقيقة واقعة


<br>
<input type="radio" name="res345" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res345" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>346 عندى عادة عد الأشياء غير الهامة كلمات الكهرباء فى الطريق أو ما إلى ذلك


<br>
<input type="radio" name="res346" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res346" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>347 ليس لى أعداء يريدون ضررى


<br>
<input type="radio" name="res347" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res347" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>348 أميل إلى الحذر من الناس الذين يظهرون صداقة أكثر مما توقعت


<br>
<input type="radio" name="res348" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res348" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>349 عندى أفكار غريبة غير عادية

<br>
<input type="radio" name="res349" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res349" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>350 أسمع أصواتاً غريبة عندما أكون بمفردى


<br>
<input type="radio" name="res350" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res350" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    

   
<p>351 أقلق وأضطرب عندما أضطر إلى القيام برحلة صغيرة بعيداً عن المنزل


<br>
<input type="radio" name="res351" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res351" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
    



<p>352 حدث أن خفت من أمور أو من أشخاص كنت أعلم أنهم لا يستطيعون ان يضرونى

<br>
<input type="radio" name="res352" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res352" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
    



<p>353 لا أشعر بخوف من الدخول بمفردى فى حجرة بها أناس يتحدثون

<br>
  
<input type="radio" name="res353" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res353" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>354 أخاف أن أستخدم سكيناً أو أى شئ حاد أو مدبب



	   <br>
<input type="radio" name="res354" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res354" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>355 أجد متعة أحياناً فى إيذاء الأشخاص الذين أحبهم



  <br>
<input type="radio" name="res355" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res355" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>356 أجد صعوبة فى تركيز تفكيرى



<br>
<input type="radio" name="res356" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res356" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>357 حدث أن امتنعت عدة مرات عن القيام بعمل ما لاعتقادى بضعف قدرتى على القيام به


 <br>
<input type="radio" name="res357" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res357" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>358 تطرأ على فكرى أحياناً فكرة تافهة وتظل تضايقنى عدة أيام


 <br>
<input type="radio" name="res358" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res358" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>359 تستولي علي احياناً فكرة تافهة وتظل تضايقني عدة ايام 


<br>
<input type="radio" name="res359" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res359" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
           



<p>360 يحدث فى كل يوم تقريباً ما يسبب لى الفزع



 <br>
<input type="radio" name="res360" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res360" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>361 أميل إلى أن آخذ الأشياء مأخذ الجد



  <br>
<input type="radio" name="res361" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res361" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>362 إننى أكثر حساسية من معظم الناس


  <br>
<input type="radio" name="res362" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res362" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>363 حدث أحياناً أن استمتعت بإيذاء بعض أحيائى لى



 <br>
<input type="radio" name="res363" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res363" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>364 يقول الناس عنى أشياء مهينة ووضيعة



  <br>
<input type="radio" name="res364" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res364" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>365 لا أشعر بارتياح داخل المنزل



  <br>
<input type="radio" name="res365" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res365" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>366 أشعر فى معظم الآحيان بالوحدة حتى ولو كنت مع آخرين


  <br>
<input type="radio" name="res366" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res366" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>367 لو أعطيت الفرصة لاستطعت أن أقوم بأعمال جليلة الفائدة للعالم
 


 <br>
<input type="radio" name="res367" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res367" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>368 غالباً ما قابلت أشخاصاً من المفروض أنهم خبراء ولكنهم لم يكونوا أحسن منى



  <br>
<input type="radio" name="res368" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res368" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>369 عند سماعى بنجاح شخص أعرفه معرفة جيدة أشعر كما لو كان نجاحه فشلاً بانسبة لى



 <br>
<input type="radio" name="res369" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res369" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>370 لو أعطيت الفرصة لأصبحت زعيماً نافعاً للناس.
 

<br>
<input type="radio" name="res370" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res370" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>371 لست أكثر حساسية من المعتاد



<br>
<input type="radio" name="res371" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res371" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>372 يخجلنى سماع الحكايات القبيحة

 

<br>
<input type="radio" name="res372" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res372" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>373 يطلب الناس عادة أن تحترم حقوقهم بدرجة تفوق استعدادهم لاحترام حقوق الآخرين


<br>
<input type="radio" name="res373" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res373" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>374 يبدو أحياناً أن عقلى يعمل ببطء أكثر من المعتاد

<br>
<input type="radio" name="res374" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res374" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       

    



<p>375 أحاول أن أتذكر القصص المسلية لأرويها للآخرين


<br>
<input type="radio" name="res375" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res375" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>376 أحب أن أقوم بمراهنات على مبالغ صغيرة



<br>
<input type="radio" name="res376" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res376" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>377 فى الحفلات أميل إلى أن اكون بمفردى أو مع شخص واحد فقط بدلاً من أن أنضم إلى مجموعة كبيرة



<br>
<input type="radio" name="res377" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res377" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>378 استمتع بالاجتماعات لمجرد رغبتى فى الوجود مع الناس



<br>
<input type="radio" name="res378" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res378" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>379 استمتع بهياج الجماهير

<br>
<input type="radio" name="res379" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res379" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>380 يبدو أن قلقى يزول عندما أوجد مع جماعة من الأصدقاء المرحين


<br>
<input type="radio" name="res380" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res380" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>381 إننى لا أشارك الجماعة التى أنتمى اليها فى الكثير من الكلام أو الحديث عن الحديث

<br>
<input type="radio" name="res381" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res381" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>382 أجد من الصعب علىّ أن أتخلى ولو لفترة قصيرة عن عمل بدأته



<br>
<input type="radio" name="res382" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res382" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>383 يخيب الناس عادة ظنى أو رجائى
<br>
<input type="radio" name="res383" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res383" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>384 لا أجد صعوبة فى بدء التبول أو فى ضبطه

<br>
<input type="radio" name="res384" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res384" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>385 كثيراً ما وجدت الناس يغارون من أفكارى الجيدة لمجرد أنهم لم يكونوا أسبق منى فى الوصول إليها
 
<br>
<input type="radio" name="res385" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res385" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>386 أتحاشى قدر إمكانى أن أوجد وسط الجماهير

<br>
<input type="radio" name="res386" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res386" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>387 لا يضرني أن أقابل الغرباء  

<br>
<input type="radio" name="res387" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res387" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>388 أميل إلى ترك ما أريد أن أفعله، إذا رأى الآخرون أنه أمر لا يستحق التنفيذ

<br>
<input type="radio" name="res388" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res388" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>389 عندما أركب فى القطارات أو فى السيارات العامة فإننى أتحدث عادة إلى الركاب

 

<br>
<input type="radio" name="res389" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res389" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>390 أشعر برغبة فى التسليم بسرعة عندما تسوء الأمور



<br>
<input type="radio" name="res390" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res390" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>391 أحب الذهاب إلى حفلات الرقص
 


<br>
<input type="radio" name="res391" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res391" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>392 أحب أن أُعرف الناس بموقفى من الأمور

 

<br>
<input type="radio" name="res392" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res392" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>393 مرت علىّ فترات كنت أشعر فيها بنشاط زائد لدرجة أننى لم أكن أشعر بحاجة إلى النوم لمدة أيام



<br>
<input type="radio" name="res393" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res393" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>394 لا أشعر بحرج عندما أكون فى مجتمع ويطلب إلى أن أبدأ مناقشة أو أبدى رأيى فى شئ أعرفه معرفة جيدة




<br>
<input type="radio" name="res394" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res394" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>395 أحب الاجتماعات والحفلات

  

<br>
<input type="radio" name="res395" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res395" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>396 لا استطيع أو أواجه أزمة او صعوبة



<br>
<input type="radio" name="res396" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res396" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>397 مرت بى فترات شعرت فيها بأن المشكلات قد أخذت تتراكم بشكل تعذر معه حلها



<br>
<input type="radio" name="res397" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res397" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>398 كثيراً ما قلت لنفسى ياليتنى عدت طفلا مرة أخرى

<br>
<input type="radio" name="res398" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res398" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>399 أتذكر أننى كنت أتصنع المرض لأنقذ نفسى من بعض المآزق

<br>
<input type="radio" name="res399" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res399" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>400 أخاف من النار
<br>
<input type="radio" name="res400" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res400" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
   




    
<center>

<input class="exite1"  type="submit" name="submit"  value=" انهاء الاختبار"  id="submit">
</center>
	
	   



   


    </body>
    </html>