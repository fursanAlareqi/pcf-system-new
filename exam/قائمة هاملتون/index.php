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
	<title>قائمة هاملتون لاعراض مرض الاكتئاب</title>
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
            <h2> اختبار <br>   هاملتون لاعراض مرض الاكتئاب  </h2>
    </Center>
        
        </div>
			



	<form action="index.php" method="post" name="fff">
    <input class="name" type="number" name="name" value="" id="name" placeholder="ادخل الكود" required ><hr>
	
<p>  1.الابتئاس والغم والتشاؤم بشأن المستقبل ,مشساعر الحزن,الرغبة في البكاء :  <br>
<input type="radio" name="res1" value="1" id="res1" required >
       لايوجد . <br>
        
	<input type="radio" name="res1" value="2" id="res1" required >
    الحزن<br>

    <input type="radio" name="res1" value="3" id="3" required >
       البكاء من حين لاخر  . <br>
        
	<input type="radio" name="res1" value="4"id="res1" required >
    البكاء بشكل مستمر .<br>
    <input type="radio" name="res1" value="5" id="res1" required >
      اعراض حزن شديد.<br>
    
   
   
</p><hr>
    



    <p> 2.تـأنيب الضمير او الشعور بالذنب:  <br>
        <input type="radio" name="res2" value="1" id="res1" required >
            لا يوجد . <br>
            
        <input type="radio" name="res2" value="2" id="res1" required >
            لوم النفس و الشعور بانه خيب ظن الاخرين فيه.<br>

        <input type="radio" name="res2" value="3" id="3" required >
        افكار بشان انه مذنب و خاطى . <br>
            
        <input type="radio" name="res2" value="4"id="res1" required >
            مرضه الحالي عقاب نزل به ,ضلالات بشأن ارتكابة أثام مع الاحساس بالذنب.<br>
        <input type="radio" name="res2" value="5" id="res1" required >
         هلاوس بشان الإحساس بالذنب .<br>
        
    </p><hr>


    <p> 3.الانتحار :  <br>
        <input type="radio" name="res3" value="1" id="res1" required >
        لا يوجد . <br>
            
        <input type="radio" name="res3" value="2" id="res1" required >
            يشعر بان الحياة لاتستحق العيش .<br>

        <input type="radio" name="res3" value="3" id="3" required >
            يتمنى الموت . <br>
            
        <input type="radio" name="res3" value="4"id="res1" required >
            أفكار بشان الانتحار.<br>
        <input type="radio" name="res3" value="5" id="res1" required >
            محاولات انتحار .<br>
        
    </p><hr>


    <p> 4. العمل واهتمامات الحياة:  <br>
        <input type="radio" name="res4" value="1" id="res1" required >
        لا يوجد صعوبات . <br>
            
        <input type="radio" name="res4" value="2" id="res1" required >
            مشاعر بالعجز وعدم القدره , وفتور الهمة ,غير حاسم ولا يستطيع اتخاذ القرارات.<br>

        <input type="radio" name="res4" value="3" id="3" required >
            فقدان الاهتمام باي هوايات ,نقص الانشطه الجتماعبة . <br>
            
        <input type="radio" name="res4" value="4"id="res1" required >
            نقص الانتاج.<br>
        <input type="radio" name="res4" value="5" id="res1" required >
            عدم القدرة على العمل .<br>
        
    </p><hr>

    
    <p> 5. التكاسل والتثاقل  ,بطء التفكير والكلام والنشاط ,اللامبالاة والذهول:  <br>
        <input type="radio" name="res5" value="1" id="res1" required >
        لا يوجد . <br>
            
        <input type="radio" name="res5" value="2" id="res1" required >
            بطء طفبف خلال المقابلة .<br>

        <input type="radio" name="res5" value="3" id="3" required >
              تثاقل وتكاسل واضح خلال المقابلة . <br>
            
        <input type="radio" name="res5" value="4"id="res1" required >
            صعوبة اجراء المقابلة.<br>
        <input type="radio" name="res5" value="5" id="res1" required >
            الذهول الكامل.<br>
        
    </p><hr>

    
    <p> 6. القلق النفسي :  <br>
        <input type="radio" name="res6" value="1" id="res1" required >
        لا يوجد . <br>
            
        <input type="radio" name="res6" value="2" id="res1" required >
            التوتر وسهولة الاستثارة .<br>

        <input type="radio" name="res6" value="3" id="3" required >
           النشغال والقلق بالامور التافهة . <br>
            
        <input type="radio" name="res6" value="4"id="res1" required >
            التوجس وتوقع الشر.<br>
        <input type="radio" name="res6" value="5" id="res1" required >
            المخاوف  .<br>
        
    </p><hr>

    <p> 7. القلق الجسمي  اعراض معدية معوية: ارياح عسر هضم ,قلبية:خفقان وصداع,تنفسية    <br>
        <input type="radio" name="res7" value="1" id="res1" required >
        لا يوجد . <br>
            
        <input type="radio" name="res7" value="2" id="res1" required >
             بسيطة.<br>

        <input type="radio" name="res7" value="3" id="3" required >
              متوسطة . <br>
            
        <input type="radio" name="res7" value="4"id="res1" required >
             شديدة.<br>
        <input type="radio" name="res7" value="5" id="res1" required >
            معيقة  .<br>
        
    </p><hr>


    <p> 8. توهم المرض :  <br>
        <input type="radio" name="res8" value="1" id="res1" required >
        لا يوجد . <br>
            
        <input type="radio" name="res8" value="2" id="res1" required >
             الانشغال الزائد بالجسم.<br>

        <input type="radio" name="res8" value="3" id="3" required >
            الانشغال بالصحه  . <br>
            
        <input type="radio" name="res8" value="4"id="res1" required >
           سلوك متشكك.<br>
        <input type="radio" name="res8" value="5" id="res1" required >
           ضلالات بشأن الاصابة بالمرض.<br>
        
    </p><hr>


    <p> 9. الارق  في بداية الليل (صعوبةفي الدخول في النوم):  <br>
        <input type="radio" name="res9" value="1" id="res1" required >
        لا يوجد . <br>
            
        <input type="radio" name="res9" value="2" id="res1" required >
            احياناً.<br>

        <input type="radio" name="res9" value="3" id="3" required >
            بشكل متكرر . <br>
            
     
    </p><hr>


    <p> 10. الارق في منتصف الليل(نوم متقطع):  <br>
        <input type="radio" name="res10" value="1" id="res1" required >
        لا يوجد . <br>
            
        <input type="radio" name="res10" value="2" id="res1" required >
        احياناً.<br>

        <input type="radio" name="res10" value="3" id="3" required >
        بشكل متكرر . <br>
            
      
    </p><hr>


    <p> 11. الارق اخر الليل (الاستيقاظ ابكر من المعتاد,وعدم القدرة على النوم):  <br>
        <input type="radio" name="res11" value="1" id="res1" required >
        لا يوجد . <br>
            
        <input type="radio" name="res11" value="2" id="res1" required >
        احياناً.<br>

        <input type="radio" name="res11" value="3" id="3" required >
        بشكل متكرر . <br>
            
        
        
    </p><hr>



    <p> 12. البلبلة و الارتياح (فرك الأيادي و التمشي جيئة وذهاباً):  <br>
        <input type="radio" name="res12" value="1" id="res1" required >
        لا يوجد . <br>
            
        <input type="radio" name="res12" value="2" id="res1" required >
        احياناً.<br>

        <input type="radio" name="res12" value="3" id="3" required >
        بشكل متكرر . <br>
            
        
        
    </p><hr>


    <p> 13. أعراض جسمية(معدية معويه:فقدان الشهية,الاحساس بثقل في البطن,الامساك):  <br>
        <input type="radio" name="res13" value="1" id="res1" required >
        لا يوجد . <br>
            
        <input type="radio" name="res13" value="2" id="res1" required >
             بسيطه.<br>

        <input type="radio" name="res13" value="3" id="3" required >
              شديدة . <br>

    
        
    </p><hr>


    <p> 14.اعراض جسميه عامة(ثقل في الاطراف أو الظهر أو الرأس ,الام غير محددة في الظهر فقدان الحيوية وسهولة التعب):  <br>
        <input type="radio" name="res14" value="1" id="res1" required >
        لا يوجد . <br>
            
        <input type="radio" name="res14" value="2" id="res1" required >
        بسيطه.<br>

        <input type="radio" name="res14" value="3" id="3" required >
        شديدة . <br>
            
    
        
    </p><hr>


    <p> 15. اعراض جنسية (فقدان الرغبة الجنسية ,اضطرابات الطمث):  <br>
        <input type="radio" name="res15" value="1" id="res1" required >
        لا يوجد . <br>
            
        <input type="radio" name="res15" value="2" id="res1" required >
        بسيطه.<br>

        <input type="radio" name="res15" value="3" id="3" required >
        شديدة . <br>
            
 
        
    </p><hr>


    <p> 16.الاستبصار  :  <br>
        <input type="radio" name="res16" value="1" id="res1" required >
              لم يفقد استبصارة. <br>
            
        <input type="radio" name="res16" value="2" id="res1" required >
            فاقد للاستبصار جزئيا .<br>

        <input type="radio" name="res16" value="3" id="3" required >
             فاقد للاستبصار  . <br>
            
      
        
    </p><hr>


    <p> 17. نقص الوزن  :  <br>
        <input type="radio" name="res17" value="1" id="res1" required >
        لا يوجد . <br>
            
        <input type="radio" name="res17" value="2" id="res1" required >
            قليل .<br>

        <input type="radio" name="res17" value="3" id="3" required >
               واضح او شديد . <br>
            
      
        
    </p><hr>



   



<center>

<input class="exite1"  type="submit" name="submit"  value=" انهاء الاختبار"  id="submit">
</center>
	
	   
    </form>


   


    </body>
    </html>