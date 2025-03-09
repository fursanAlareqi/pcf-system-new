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
	<title>المعتقدات الشخصية</title>
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
        <script type="text/javascript" >

function prevrnBack(){
	window.history.forward();
}
setTimeout(prevrnBack(),0);
window.onunload=function(){null};
</script>

</head>
<body>

	<div class="first">
		<div class="continer" id="continer">
			
				
                <div class="head" ><img style="width: 200px;" src="../img/1.png" alt="">
            <Center>
            <h2> اختبار <br>  المعتقدات الشخصية</h2>
    </Center>
        
        </div>
				
    
				
			



	<form action="index.php" method="post" name="fff">
    <input class="name" type="number" name="name" value="" id="name" placeholder="ادخل الكود" required ><hr>
	
<p>  1.أعرف أن الناس سوف يستغلوني , أو يخدعونني إذا لم أحتاط وأكون على حذر منهم. :  <br>
<input type="radio" name="res1" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res1" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
    



<p>  2.	لا أستمتع بقضاء الوقت مع أسرتي أو أصدقائي.  :  <br>
<input type="radio" name="res2" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res2" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
    



<p> 3.		أعرف بحدسي الخاص ما يدور حولي من الأمور ( عندي الحاسة السادسة ).  :  <br>
<input type="radio" name="res3" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res3" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p>  4.		أحتاج لأن أكون موضع اهتمام الناس.   <br>
<input type="radio" name="res4" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res4" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p>  5.		أرى أنني أكثر قدرة وبراعة عن ما يعتقده الآخرون عني. :  <br>
<input type="radio" name="res5" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res5" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p>  6.		أتجنب العمل مع الناس الذين ينتقدونني .  :  <br>
<input type="radio" name="res6" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res6" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p>  7.		لا أستطيع اتخاذ قراراتي بدون ان استمع الى نصيحة الآخرين ومساعدتهم لي . :  <br>
<input type="radio" name="res7" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res7" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p> 8.		غالبا ما اهتم بالتفاصيل التافهة للأمور ولا انشغل بالموضوع ككل . :  <br>
<input type="radio" name="res8" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res8" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p>  9.	أشتكى الناس من أنني لا أوفي بوعودي والتزاماتي  . :  <br>
<input type="radio" name="res9" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res9" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
           



<p>  10.		أشعر عادة بالاكتئاب والانقباض .   <br>
<input type="radio" name="res10" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res10" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p>  11.		لا أتحمل أن يقطع أحد الذين أحبهم علاقته بي وإذا حدث ذلك أحاول أن امنعه بأي شكل .  :  <br>
<input type="radio" name="res11" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res11" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    


<p> 12.		قمت بعمل بعض الأشياء بشكل اندفاعي أو تهوري كان يمكن أن تسبب لي المشاكل ، وهي المكتوبة في القائمة التالية ، حدد كل تصرف ينطبق على حالتك   :</p><br>
<p>      أ_ـ  صرفت أموالا أكثر مما أملك .  <br>
<input type="radio" name="res12" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res12" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p>
<br>
    


<p>  ب ـ  قمت بأفعال جنسية مع ناس لا يوجد بيني وبينهم معرفة قديمة . <br>
<input type="radio" name="res100" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res100" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p>
<br>



<p>     ج ـ تعاطيت كمية كبيره من الخمور . <br>
<input type="radio" name="res101" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res101" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p>
<br>


<p>   د ـ تعاطيت المخدرات .    <br>
<input type="radio" name="res102" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res102" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p>
<br>


<p>  هـ ـ تناولت الطعام بشراهة غير طبيعية . <br>
<input type="radio" name="res103" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res103" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p>
<br>


<p>  و ـ قمت بقيادة سيارة بشكل متهور ، أو ركبت السيارة مع شخص اعرف أنه يقود السيارة بتهور . <br>
<input type="radio" name="res104" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res104" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p>
<hr>


<p> 13.		تعرضت كثيرا لمشكلات وصلت بي الى الشرطة أو المحكمة .  :  <br>
<input type="radio" name="res13" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res13" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p> 14.		غالبا ما أسأل نفسي إذا كان الناس الذين اعرفهم يستحقون ثقتي بهم .  :  <br>
<input type="radio" name="res14" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res14" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p>  15.		افضل ان أقوم بعمل الأشياء بمفردي عن أن اعملها بمشاركة الآخرين .   :  <br>
<input type="radio" name="res15" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res15" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p>  16.	لدي القدرة على معرفة أن أشياء ما سوف تحدث قبل حدوثها فعليا ( مكشوف عني الحجاب ) .  :  <br>
<input type="radio" name="res16" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res16" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p>  17.		أشعر بجاذبيتي الجنسية أكثر من معظم الناس .  :  <br>
<input type="radio" name="res17" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res17" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p>  18.		غالبا ما أجد نفسي أفكر في كوني شخص عظيم ، أو أنني سوف أكون عظيما .  :  <br>
<input type="radio" name="res18" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res18" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p> 19.		أصادق الناس وأخلص لهم حينما أتأكد من حبهم لي .  :  <br>
<input type="radio" name="res19" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res19" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p> 20.		أفضل أن يتحمل الناس المسئولية بدلا مني .		 :  <br>
<input type="radio" name="res20" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res20" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p>  21.		أضيع الكثير من الوقت كي أصل الى الكمال في عمل شيئا ما .  :  <br>
<input type="radio" name="res21" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res21" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p>  22.		أشعر بأن الآخرين لا يفهمونني أو لا يقدرونني .  :  <br>
<input type="radio" name="res22" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res22" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p>  23.		لدي الكثير من العيوب . :  <br>
<input type="radio" name="res23" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res23" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p> 24.		لا أعرف إلا الأبيض أو الأسود،  فأما أن أحب أو أكره   :  <br>
<input type="radio" name="res24" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res24" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       

    



<p>  25.		أتورط كثيرا في الخناقات والمشاجرات بالأيدي .  :  <br>
<input type="radio" name="res25" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res25" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p>  26.		سوف يستخدم الناس الأسرار التي أحكيها لهم ضدي . :  <br>
<input type="radio" name="res26" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res26" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p>  27.		لا أهتم بالأمور الجنسية .  :  <br>
<input type="radio" name="res27" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res27" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p> 28.		غالبا ما أحس أو أشعر لا يحس أو يشعر بها الآخرون . :  <br>
<input type="radio" name="res28" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res28" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p> 29.		تظهر انفعالاتي على وجهي بسهولة .  :  <br>
<input type="radio" name="res29" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res29" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p>  30.		أحتفظ بعلاقاتي ببعض الأشخاص المحددين الذين يمكنهم أن يقدرونني ويفهموني فعلا.   :  <br>
<input type="radio" name="res30" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res30" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p> 31.		أتحفظ لارتباطات بعلاقات حميمة لخوفي من أن أكون موضع سخرية . :  <br>
<input type="radio" name="res31" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res31" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p>  32.		أخاف من أن أفقد مساعدة الآخرين لي إذا اختلفت معهم .  :  <br>
<input type="radio" name="res32" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res32" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p>  33.		أهتم بعملي أكثر من أن أهتم بأن أكون مع اسرتي أو أصدقائي أو الراحة والنزهة.  :  <br>
<input type="radio" name="res33" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res33" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p>  34.		يعتبرني الناس متقلب المزاج وطبعي حامي .  :  <br>
<input type="radio" name="res34" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res34" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p>  35.		أنتقد نفسي بقسوة .  :  <br>
<input type="radio" name="res35" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res35" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p>  36.		غالبا ما أسأل نفسي : من أنا ؟   :  <br>
<input type="radio" name="res36" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res36" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p>  37.		أجد صعوبة في الوفاء بتسديد التزاماتي المالية لأنني لا أستمر في وظيفة أو عمل واحد لوقت طويل .  :  <br>
<input type="radio" name="res37" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res37" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p>  38.		أظل منتبها لمعرفة المعنى الحقيقي لما يقوله الآخرون . :  <br>
<input type="radio" name="res38" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res38" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p>  39.	هناك بعض الأنشطة التي أهتم بها بدرجة ما . :  <br>
<input type="radio" name="res39" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res39" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p>  40.		غالبا ما يجد الآخرون صعوبة في فهم ما أقول.  <br>
<input type="radio" name="res40" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res40" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p> 41.	أستخدم وسامتي ومظهري لأحصل على الاهتمام الذي أريد . :  <br>
<input type="radio" name="res41" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res41" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p> 42.		أحتاج الى استحسان ومدح الآخرين أكثر من معظم الناس .  :  <br>
<input type="radio" name="res42" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res42" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p>  43.		أنا أكثر حساسية للنقد أو اللوم من معظم الناس .   <br>
<input type="radio" name="res43" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res43" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p>  44.		أجد أنه من الصعب أن أبدأ شيء ما إذا كنت سأقوم بعملة بمفردي  .  :  <br>
<input type="radio" name="res44" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res44" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p> 45.		لدي حس أخلاقي أعلى من الآخرين .  :  <br>
<input type="radio" name="res45" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res45" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p>  46.		أعترض على رؤسائي الذين يحددون لي طريقة أداء عملي . :  <br>
<input type="radio" name="res46" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res46" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p>  47.	أقلق كثيرا بدرجة تختلف عن معظم معارفي .  :  <br>
<input type="radio" name="res47" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res47" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p>  48.	لقد حاولت أن أجرح أو أضر أو أقتل نفسي . :  <br>
<input type="radio" name="res48" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res48" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p>  49.		أفعل كثير من الأشياء دون أن أقدر عواقبها . :  <br>
<input type="radio" name="res49" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res49" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
    



<p>  50.		لا أنسى أو أغفر أبدا للناس الذين يخطئون في حقي .  :  <br>
<input type="radio" name="res50" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res50" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  51. لست مهتم بالحصول على أصدقاء مقربين :  <br>
<input type="radio" name="res51" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res51" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  52.غالبا ما أكون على حذر لخوفي من أن يستغلني الناس 		  :  <br>
<input type="radio" name="res52" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res52" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  53.		بالرغم من أنني كثير الكلام ، إلا أن الناس تقول بأنني أجد صعوبة في الدخول في صلب الموضوع .   :  <br>
<input type="radio" name="res53" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res53" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  54.	أتوقع من الآخرين أن يقدموا لي الخدمات بالرغم من أنني عالة لا أقدم لهم الخدمات 	  :  <br>
<input type="radio" name="res54" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res54" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  55.	أخاف من مقابلة الناس الغرباء لأنني أشعر بالنقص .	  :  <br>
<input type="radio" name="res55" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res55" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  56.	أتطوع في الغالب لعمل أشياء خارج عن الأصول لا أحبها لمجرد أن يحبني الآخرون.	  :  <br>
<input type="radio" name="res56" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res56" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  57.أميل الى تخزين الأشياء التي لا أحتاج اليها ولا أستطيع أن أرميها .		  :  <br>
<input type="radio" name="res57" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res57" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  58.	أغتاظ من الذين لديهم حظ أكبر من حظي .	  :  <br>
<input type="radio" name="res58" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res58" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  59.أنتقد الناس بكثرة .		  :  <br>
<input type="radio" name="res59" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res59" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  60.	أنا شخص متقلب المزاج للغاية .	  :  <br>
<input type="radio" name="res60" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res60" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  61.من السهل أن أكذب وغالبا ما أفعل ذلك .		  :  <br>
<input type="radio" name="res61" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res61" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  62.	أنا لا أضيع وقتي في عتاب الذين أهانوني .	  :  <br>
<input type="radio" name="res62" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res62" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  63.	لا أهتم بما يقوله الآخرون عني .	  :  <br>
<input type="radio" name="res63" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res63" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  64.أجد صعوبة في الاحتكاك والتعامل المباشر مع الناس .		  :  <br>
<input type="radio" name="res64" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res64" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  65.	عندي استعداد لأن أكون ممثلا .	  :  <br>
<input type="radio" name="res65" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res65" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  66.	بعض الناس يرون أنني أستغل الآخرين .	  :  <br>
<input type="radio" name="res66" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res66" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  67.أشعر بأنني لا أستحق التقدير .		  :  <br>
<input type="radio" name="res67" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res67" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  68.عندما أكون بمفردي أشعر بالعجز وعدم القدرة على العناية بنفسي .		  :  <br>
<input type="radio" name="res68" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res68" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  69.	إذا لم يكن الآخرين قادرين على عمل الأشياء بشكل صحيح فإنني أفضل من أن أفعلها بنفسي .	  :  <br>
<input type="radio" name="res69" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res69" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  70.أشتكي كثيرا من المصاعب التي أواجهها .		  :  <br>
<input type="radio" name="res70" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res70" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  71.	أنا متشائم 	  :  <br>
<input type="radio" name="res71" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res71" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  72.	أشعر أن حياتي مملة ولا معنى لها .	  :  <br>
<input type="radio" name="res72" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res72" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  73.	أستمتع بعمل أشياء خطيرة غير مأمونة العواقب .	  :  <br>
<input type="radio" name="res73" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res73" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  74.غالبا ما ينتابني الشك في إخلاص ( زوجتي - زوجي ) أو من أحب .		  :  <br>
<input type="radio" name="res74" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res74" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  75.أضع حدودا بيني وبين الناس ولا أسمح لأحد بتجاوزها .		  :  <br>
<input type="radio" name="res75" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res75" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  76.	من السهل على الناس أن يعرفوا أنني غريب الأطوار وشاذ من النظرة الاولى 	  :  <br>
<input type="radio" name="res76" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res76" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  77.من السهل أن يؤثر الآخرون علي .		  :  <br>
<input type="radio" name="res77" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res77" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  78.	غالبا ما أشتكي الآخرين من أنني أراعي أحوالهم السيئة  .	  :  <br>
<input type="radio" name="res78" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res78" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  79.	أخشى الإحراج في المواقف الجديدة .	  :  <br>
<input type="radio" name="res79" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res79" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  80.	عندما تنتهي علاقتي بصديق حميم ، أجد نفسي في حاجة للانخراط في صداقة مع شخص آخر فورا .	  :  <br>
<input type="radio" name="res80" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res80" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  81.	أرى نفسي مهما ، ويرى الآخرون أني وضيع .	  :  <br>
<input type="radio" name="res81" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res81" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



  
    



<p>  82.أتقلب في معاملتي مع الآخرين فقد أعاملهم بسوء للحظة ثم أعتذر لهم في الحق .		  :  <br>
<input type="radio" name="res82" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res82" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  83.	أشعر غالبا بالذنب .	  :  <br>
<input type="radio" name="res83" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res83" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  84.أجد صعوبة في السيطرة على غضبي .		  :  <br>
<input type="radio" name="res84" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res84" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  85.لا يهمني أن يتضرر الآخرين طالما حصلت على ما أريد .		  :  <br>
<input type="radio" name="res85" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res85" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  86.أشعر بالعصبية حينما أكون وسط الآخرين .		  :  <br>
<input type="radio" name="res86" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res86" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  87.	أقيم علاقتي بجدية أكثر من الآخرين .	  :  <br>
<input type="radio" name="res87" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res87" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  88. بعض الناس يغارون مني .		  :  <br>
<input type="radio" name="res88" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res88" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  89.أخاف أن يتركني الآخرين فأضطر أن ارعى نفسي .		  :  <br>
<input type="radio" name="res89" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res89" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  90.	يشتكي الآخرون من أنني عنيد .	  :  <br>
<input type="radio" name="res90" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res90" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  91.	حينما أتعرض لحالة نت الضغط أو الكرب تصيبني حالة من الشك والتوجس أو التبلد .	  :  <br>
<input type="radio" name="res91" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res91" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    


<p> 92.	عندما كان طفلا قبل سن الخامسة عشر كنت الى حد ما أمارس بعض السلوكيات الغريبة ، ضع علامة (   ) أمام العبارة التي ترى أنها تنطبق عليك :</p><br>
<p>  	1 - كان الناس يعتبرونني بلطجي .  :  <br>
<input type="radio" name="res92" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res92" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><br>
<p> 2 - تعودت ان أبدأ المشاجرات مع الأطفال الآخرين . 	  :  <br>
<input type="radio" name="res105" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res105" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><br>
<p>  3 - استخدمت الآلات الحادة مثل السكاكين والمطاوي في المشاجرات التي دخلت فيها .	  :  <br>
<input type="radio" name="res106" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res106" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><br>
<p>  4 - لقد نهبت أو اعتديت على الناس الآخرين .	  :  <br>
<input type="radio" name="res107" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res107" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><br>
<p>  5 - تسببت في التعذيب الجسدي لبعض الناس .	  :  <br>
<input type="radio" name="res108" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res108" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><br>
<p>  6 - قمت بتعذيب الحيوانات الأليفة .	  :  <br>
<input type="radio" name="res109" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res109" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><br>
<p> 7 - أرغمت شخص ما على ممارسة الجنس معي . 	  :  <br>
<input type="radio" name="res110" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res110" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><br>
<p>  8 - كذبت كثيرا .	  :  <br>
<input type="radio" name="res111" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res111" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><br>

<p>  	9 - سهرت خارج المنزل دون أذن والداي.  :  <br>
<input type="radio" name="res112" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res112" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><br>
<p>  10 - قمت بسرقة بعض الأشياء من أماكن بيعها .	  :  <br>
<input type="radio" name="res113" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res113" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><br>
<p>  11 - أشعلت الحرائق 	  :  <br>
<input type="radio" name="res114" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res114" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><br>
              
<p> 12 - قمت بتحطيم النوافذ أو اعتديت على الممتلكات العامة . 	  :  <br>
<input type="radio" name="res115" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res115" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><br>
              
    
<p>  13 - هربت من البيت طوال الليل أكثر من مره .	  :  <br>
<input type="radio" name="res116" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res116" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><br>
              
    
<p>  14 - كنت أهرب من المدرسة . 	  :  <br>
<input type="radio" name="res117" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res117" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><br>
              
    
<p>  15 - تهجمت بالقوة على بيوت الآخرين .	  :  <br>
<input type="radio" name="res118" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res118" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  93.يرى الآخرون أنني مغرور ومتكبر .		  :  <br>
<input type="radio" name="res93" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res93" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  94.	أشعر بالحزن أحيانا .	  :  <br>
<input type="radio" name="res94" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res94" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  95.	أتحدث عن الناس في غيبتهم .	  :  <br>
<input type="radio" name="res95" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res95" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  96.	هناك بعض الناس الذين لا أحبهم .	  :  <br>
<input type="radio" name="res96" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res96" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  97.	لا أكذب أبدا .	  :  <br>
<input type="radio" name="res97" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res97" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  98.	وقوع حرب نووية قد لا تكون فكرة سيئة .	  :  <br>
<input type="radio" name="res98" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res98" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    



<p>  99.	لقد كذبت كثيرا في إجابتي على هذا الاختبار.  	  :  <br>
<input type="radio" name="res99" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res99" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
              
    


    <center>

    <input class="exite1"  type="submit" name="submit"  value=" انهاء الاختبار"  id="submit">
    </center>
        
        
    </form>


   


    </body>
    </html>