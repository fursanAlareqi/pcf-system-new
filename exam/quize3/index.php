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


  <script type="text/javascript" >

function prevrnBack(){
	window.history.forward();
}
setTimeout(prevrnBack(),0);
window.onunload=function(){null};
</script>





  <meta name="description" content="my app">
	<script type="text/javascript" src="school_quize.js"></script>
	<link rel="stylesheet" type="text/css" href="../style/styles.css">
	<title>مقياس الهوس</title>
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
            <h2> اختبار <br> مقياس الهوس</h2>
    </Center>
        
        </div>
				
			



	<form action="index.php" method="post" name="fff">
    <input class="name" type="number" name="name" value="" id="name" placeholder="ادخل الكود" required ><hr>
		<p>(أ) إرتفاع المزاج :  <br>
        <input type="radio" name="res1" value="1" id="res1"  required>
        1.متفائل وتصرفاته مناسبة للموقف . <br>
        
	<input type="radio" name="res1" value="2" id="res1" required >
    2.	ينكت ويضحك خارج إطار الموقف أحياناً .<br>
    <input type="radio" name="res1" value="3" id="res1" required >
    3.	ملئ بالحيوية والنشاط خارج إطار الموقف تماماً . <br>
        
	<input type="radio" name="res1" value="4" id="res1" required >
    4.	بصورة مفرطة <br>

    </p><hr>

    <p>(ب) توتر وعصبي المزاج :   <br>
        <input type="radio" name="res2" value="1" id="res1" required >
        1.	غير صبور ومتوتر أحياناً ولكنه قادر على التحكم . <br>
        
	<input type="radio" name="res2" value="2" id="res1" required >
   2.	غير صبور ومتوتر أحياناً لا يتحمل الاستفزاز .<br>
    <input type="radio" name="res2" value="3" id="res1" required >
    3.	يستفز الآخرين ويهدد ولكن يمكن تهدئته . <br>
        
	<input type="radio" name="res2" value="4" id="res1" required >
    4.	عنف حسدي وعدوانية . <br>
   
</p><hr>

<p>(ج) ازدياد تقدير الذات :    <br>
        <input type="radio" name="res3" value="1" id="res1" required >
        1.	يقيم زيادة بعض القدرات الاعتيادية . <br>
        
	<input type="radio" name="res3" value="2" id="res1" required >
    2.	يلمح بقدرات غير اعتيادية .<br>
    <input type="radio" name="res3" value="3" id="res1" required >
    3.	يدعي بامتلاكه قدرات قوى علم غير طبيعي ولكنه يتراجع بسرعة . <br>
        
	<input type="radio" name="res3" value="4" id="res1" required >
    4.	أوهام العظمة . <br>
   
</p><hr>


<p>(د) اضطراب النوم :    <br>
        <input type="radio" name="res4" value="1" id="res1" required >
         
         1.	   	  25%    أقل من المعتاد .<br>
	<input type="radio" name="res4" value="2" id="res1" required >
    2.	     	  50%   أقل من المعتاد .<br>
    <input type="radio" name="res4" value="3" id="res1" required >
    3.	    	  75%   أقل من المعتاد .<br>
        
	<input type="radio" name="res4" value="4" id="res1" required >
    4.لم ينم . <br>
   
</p><hr>
<p>(ر) الثرثرة :     <br>
        <input type="radio" name="res5" value="1" id="res1"required >
        1.	زيادة في الكلام .<br>
	<input type="radio" name="res5" value="2" id="res1" required>
    2.	قلة الفترات التلقائية فيه الكلام ولكنه لا يصعب إيقافه أو مقاطعته .<br>
    <input type="radio" name="res5" value="3" id="res1"required >
    3.	لا توجد فترات بين الكلام وصعب إيقافه أو مقاطعته .<br>
        
	<input type="radio" name="res5" value="4" id="res1"required >
    4.	مسيطر على الحوار لوحده . <br>
   
</p><hr>




<p>(ز) تطاير الأفكار :      <br>
        <input type="radio" name="res6" value="1" id="res1" required >
        1.	زيادة في الوصف والشرح والتفصيل والاستطراد ولكن الكلام مترابط <br>
	<input type="radio" name="res6" value="2" id="res1" required >
    2.	تشتت الأفكار أحياناً بالجناس والتورية والطباق والقافية <br>
    <input type="radio" name="res6" value="3" id="res1" required >
    3.	تشتت الأفكار بصورة منتظمة بالجناس والتورية والطباق والقافية .<br>
        
	<input type="radio" name="res6" value="4" id="res1"  required>
    4.	صعب جداً أو مستحيل تتبع أفكار المريض لكثرة ما يخرج من موضوع إلى آخر . <br>
   
</p><hr>

<p>(س) الإلهاء :       <br>
        <input type="radio" name="res7" value="1" id="res1" required >
        1.	يتأثر عمله قليلاً نتيجة الإلهاء .<br>
	<input type="radio" name="res7" value="2" id="res1" required >
    2.	يتأثر عمله بوضوح نتيجة الإلهاء . <br>
    <input type="radio" name="res7" value="3" id="res1" required >
    3.	يفتقد قدرته على العمل والتحكم فيه أحياناً .<br>
        
	<input type="radio" name="res7" value="4" id="res1"  required>
    4.	يفتقد قدرته على العمل تماماً دون مساعدة .<br>
   
</p><hr>
<center>

<p>النشاط :     </p>
</center>
   

<p>أ ـ الإجتماعي :     </p>
        <input type="radio" name="res8" value="1" id="res1" required >
        1.	يتطفل قليلاً ويتدخل فيما لا يعنيه .<br>
	<input type="radio" name="res8" value="2" id="res1" required >
    2.	يتطفل كثيراً ويتدخل فيما لا يعنيه . <br>
    <input type="radio" name="res8" value="3" id="res1" required >
    3.	يتطفل كثيراً ويسيطر وينظم ويوجه الغير ولكنه مازال مناسب للموقف <br>
        
	<input type="radio" name="res8" value="4" id="res1"  required>
    4.	يتطفل كثيراً ويسيطر وينظم ويوجه الغير ولكنه غير مناسب للموقف <br>
   
</p>
<p>ب ـ العضلي :   </p>
        <input type="radio" name="res9" value="1" id="res1" required >
        1.	زيادة في الحركة ولكنه قادر على الجلوس في الكرسي .<br>
	<input type="radio" name="res9" value="2" id="res1" required >
    2.	غير قادر على الجلوس بهدوء في الكرسي . <br>
    <input type="radio" name="res9" value="3" id="res1" required >
    3.	إذا ألح عليه الجلوس فإنه يقوم مرة واحدة خلال المقابلة .<br>
        
	<input type="radio" name="res9" value="4" id="res1"  required>
    4.	لا يمكن أن يجلس حتى مع الإلحاح .<br>
   
</p><hr>
<p>(و)السلوكيات الخطرة ( خمور ــ جنس ــ صفقات خاسرة ) :</p>
        <input type="radio" name="res10" value="1" id="res1" required >
        1.	قليل<br>
	<input type="radio" name="res10" value="2" id="res1" required >
    2.	متوسط <br>
    <input type="radio" name="res10" value="3" id="res1" required >
    3.	كثير<br>
        
	<input type="radio" name="res10" value="4" id="res1"  required>
    4.	مفرط<br>
   
</p><hr>

<center>

<input class="exite1"  type="submit" name="submit"  value=" انهاء الاختبار"  id="submit">
</center>
	
	
	
    	
</form>
	
</div>

</div>

</body>	
</html>
