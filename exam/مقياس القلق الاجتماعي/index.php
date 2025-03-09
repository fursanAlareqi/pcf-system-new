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
	<title>مقياس القلق الاجتماعي للمراهقين والشباب</title>
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
            <h2> اختبار <br>  مقياس القلق الاجتماعي </h2>
    </Center>
        
        </div>
			



	<form action="index.php" method="post" name="fff">
    <input class="name" type="number" name="name" value="" id="name" placeholder="ادخل الكود" required ><hr>
	
<p>  1.أواجه صعوبة في ابداء وجهة نظر معارضة لما يبديه الاخرون :  <br>
<input type="radio" name="res1" value="5" id="res1" required >
       تنطبق غالباً . <br>
        
	<input type="radio" name="res1" value="4" id="res1" required >
    تنطبق كثيراً.<br>

    <input type="radio" name="res1" value="3" id="3" required >
       تنطبق نوعاً ما . <br>
        
	<input type="radio" name="res1" value="2"id="res1" required >
    تنطبق قليلاً.<br>
    <input type="radio" name="res1" value="1" id="res1" required >
    لا تنطبق ابداً.<br>
    
   
   
</p><hr>
    



    <p> 2.تشرد افكاري اثناء مخالطي بالأخرين :  <br>
        <input type="radio" name="res2" value="5" id="res1" required >
            تنطبق غالباً . <br>
            
        <input type="radio" name="res2" value="4" id="res1" required >
            تنطبق كثيراً.<br>

        <input type="radio" name="res2" value="3" id="3" required >
            تنطبق نوعاً ما . <br>
            
        <input type="radio" name="res2" value="2"id="res1" required >
            تنطبق قليلاً.<br>
        <input type="radio" name="res2" value="1" id="res1" required >
            لا تنطبق ابداً.<br>
        
    </p><hr>


    <p> 3.اشعر بالصداع عند مواجهة موقف اجتماعي جديد :  <br>
        <input type="radio" name="res3" value="5" id="res1" required >
            تنطبق غالباً . <br>
            
        <input type="radio" name="res3" value="4" id="res1" required >
            تنطبق كثيراً.<br>

        <input type="radio" name="res3" value="3" id="3" required >
            تنطبق نوعاً ما . <br>
            
        <input type="radio" name="res3" value="2"id="res1" required >
            تنطبق قليلاً.<br>
        <input type="radio" name="res3" value="1" id="res1" required >
            لا تنطبق ابداً.<br>
        
    </p><hr>


    <p> 4. استمع للأخرين اكثر مما اتحدث معهم:  <br>
        <input type="radio" name="res4" value="5" id="res1" required >
            تنطبق غالباً . <br>
            
        <input type="radio" name="res4" value="4" id="res1" required >
            تنطبق كثيراً.<br>

        <input type="radio" name="res4" value="3" id="3" required >
            تنطبق نوعاً ما . <br>
            
        <input type="radio" name="res4" value="2"id="res1" required >
            تنطبق قليلاً.<br>
        <input type="radio" name="res4" value="1" id="res1" required >
            لا تنطبق ابداً.<br>
        
    </p><hr>

    
    <p> 5. افكر في اشياء ليس لها علاقة بالموقف الذي اكون فيه:  <br>
        <input type="radio" name="res5" value="5" id="res1" required >
            تنطبق غالباً . <br>
            
        <input type="radio" name="res5" value="4" id="res1" required >
            تنطبق كثيراً.<br>

        <input type="radio" name="res5" value="3" id="3" required >
            تنطبق نوعاً ما . <br>
            
        <input type="radio" name="res5" value="2"id="res1" required >
            تنطبق قليلاً.<br>
        <input type="radio" name="res5" value="1" id="res1" required >
            لا تنطبق ابداً.<br>
        
    </p><hr>

    
    <p> 6. اعاني من خوف شديد عندما اكون مع عدد كبير من الناس:  <br>
        <input type="radio" name="res6" value="5" id="res1" required >
            تنطبق غالباً . <br>
            
        <input type="radio" name="res6" value="4" id="res1" required >
            تنطبق كثيراً.<br>

        <input type="radio" name="res6" value="3" id="3" required >
            تنطبق نوعاً ما . <br>
            
        <input type="radio" name="res6" value="2"id="res1" required >
            تنطبق قليلاً.<br>
        <input type="radio" name="res6" value="1" id="res1" required >
            لا تنطبق ابداً.<br>
        
    </p><hr>

    <p> 7. اتوتر عدد اختلاطي بأفراد لا عرفهم:  <br>
        <input type="radio" name="res7" value="5" id="res1" required >
            تنطبق غالباً . <br>
            
        <input type="radio" name="res7" value="4" id="res1" required >
            تنطبق كثيراً.<br>

        <input type="radio" name="res7" value="3" id="3" required >
            تنطبق نوعاً ما . <br>
            
        <input type="radio" name="res7" value="2"id="res1" required >
            تنطبق قليلاً.<br>
        <input type="radio" name="res7" value="1" id="res1" required >
            لا تنطبق ابداً.<br>
        
    </p><hr>


    <p> 8. اجد صعوبة في التعبير عن رايي عند أي نقاش مع الاخرين:  <br>
        <input type="radio" name="res8" value="5" id="res1" required >
            تنطبق غالباً . <br>
            
        <input type="radio" name="res8" value="4" id="res1" required >
            تنطبق كثيراً.<br>

        <input type="radio" name="res8" value="3" id="3" required >
            تنطبق نوعاً ما . <br>
            
        <input type="radio" name="res8" value="2"id="res1" required >
            تنطبق قليلاً.<br>
        <input type="radio" name="res8" value="1" id="res1" required >
            لا تنطبق ابداً.<br>
        
    </p><hr>


    <p> 9. يجف حلقي عندما اتحدث مع الاخرين في موقف اجتماعي:  <br>
        <input type="radio" name="res9" value="5" id="res1" required >
            تنطبق غالباً . <br>
            
        <input type="radio" name="res9" value="4" id="res1" required >
            تنطبق كثيراً.<br>

        <input type="radio" name="res9" value="3" id="3" required >
            تنطبق نوعاً ما . <br>
            
        <input type="radio" name="res9" value="2"id="res1" required >
            تنطبق قليلاً.<br>
        <input type="radio" name="res9" value="1" id="res1" required >
            لا تنطبق ابداً.<br>
        
    </p><hr>


    <p> 10. اخاف التعامل مع الاشخاص وهم في مركز السلطة:  <br>
        <input type="radio" name="res10" value="5" id="res1" required >
            تنطبق غالباً . <br>
            
        <input type="radio" name="res10" value="4" id="res1" required >
            تنطبق كثيراً.<br>

        <input type="radio" name="res10" value="3" id="3" required >
            تنطبق نوعاً ما . <br>
            
        <input type="radio" name="res10" value="2"id="res1" required >
            تنطبق قليلاً.<br>
        <input type="radio" name="res10" value="1" id="res1" required >
            لا تنطبق ابداً.<br>
        
    </p><hr>


    <p> 11. ارتبك عندما يكون علي الحديث امام جمع من الناس:  <br>
        <input type="radio" name="res11" value="5" id="res1" required >
            تنطبق غالباً . <br>
            
        <input type="radio" name="res11" value="4" id="res1" required >
            تنطبق كثيراً.<br>

        <input type="radio" name="res11" value="3" id="3" required >
            تنطبق نوعاً ما . <br>
            
        <input type="radio" name="res11" value="2"id="res1" required >
            تنطبق قليلاً.<br>
        <input type="radio" name="res11" value="1" id="res1" required >
            لا تنطبق ابداً.<br>
        
    </p><hr>



    <p> 12. اشعر بالدوار عندما اتحدث مع جماعة:  <br>
        <input type="radio" name="res12" value="5" id="res1" required >
            تنطبق غالباً . <br>
            
        <input type="radio" name="res12" value="4" id="res1" required >
            تنطبق كثيراً.<br>

        <input type="radio" name="res12" value="3" id="3" required >
            تنطبق نوعاً ما . <br>
            
        <input type="radio" name="res12" value="2"id="res1" required >
            تنطبق قليلاً.<br>
        <input type="radio" name="res12" value="1" id="res1" required >
            لا تنطبق ابداً.<br>
        
    </p><hr>


    <p> 13. اخاف من الاحراج عندما اتعامل مع الغرباء:  <br>
        <input type="radio" name="res13" value="5" id="res1" required >
            تنطبق غالباً . <br>
            
        <input type="radio" name="res13" value="4" id="res1" required >
            تنطبق كثيراً.<br>

        <input type="radio" name="res13" value="3" id="3" required >
            تنطبق نوعاً ما . <br>
            
        <input type="radio" name="res13" value="2"id="res1" required >
            تنطبق قليلاً.<br>
        <input type="radio" name="res13" value="1" id="res1" required >
            لا تنطبق ابداً.<br>
        
    </p><hr>


    <p> 14.اشعر بالخجل عندما اتحدث مع الجنس الاخر :  <br>
        <input type="radio" name="res14" value="5" id="res1" required >
            تنطبق غالباً . <br>
            
        <input type="radio" name="res14" value="4" id="res1" required >
            تنطبق كثيراً.<br>

        <input type="radio" name="res14" value="3" id="3" required >
            تنطبق نوعاً ما . <br>
            
        <input type="radio" name="res14" value="2"id="res1" required >
            تنطبق قليلاً.<br>
        <input type="radio" name="res14" value="1" id="res1" required >
            لا تنطبق ابداً.<br>
        
    </p><hr>


    <p> 15. اتضايق من احمرار وجهي امام الاخرين عندما التقي بهم لأول :  <br>
        <input type="radio" name="res15" value="5" id="res1" required >
            تنطبق غالباً . <br>
            
        <input type="radio" name="res15" value="4" id="res1" required >
            تنطبق كثيراً.<br>

        <input type="radio" name="res15" value="3" id="3" required >
            تنطبق نوعاً ما . <br>
            
        <input type="radio" name="res15" value="2"id="res1" required >
            تنطبق قليلاً.<br>
        <input type="radio" name="res15" value="1" id="res1" required >
            لا تنطبق ابداً.<br>
        
    </p><hr>


    <p> 16.تزعجني نظرة الاخرين السالبة لي :  <br>
        <input type="radio" name="res16" value="5" id="res1" required >
            تنطبق غالباً . <br>
            
        <input type="radio" name="res16" value="4" id="res1" required >
            تنطبق كثيراً.<br>

        <input type="radio" name="res16" value="3" id="3" required >
            تنطبق نوعاً ما . <br>
            
        <input type="radio" name="res16" value="2"id="res1" required >
            تنطبق قليلاً.<br>
        <input type="radio" name="res16" value="1" id="res1" required >
            لا تنطبق ابداً.<br>
        
    </p><hr>


    <p> 17.يربكني القيام باي عمل عند مراقبه الاخرين لي:  <br>
        <input type="radio" name="res17" value="5" id="res1" required >
            تنطبق غالباً . <br>
            
        <input type="radio" name="res17" value="4" id="res1" required >
            تنطبق كثيراً.<br>

        <input type="radio" name="res17" value="3" id="3" required >
            تنطبق نوعاً ما . <br>
            
        <input type="radio" name="res17" value="2"id="res1" required >
            تنطبق قليلاً.<br>
        <input type="radio" name="res17" value="1" id="res1" required >
            لا تنطبق ابداً.<br>
        
    </p><hr>


    <p> 18. يضاقني زيادة افراز العرق عندما اكون مع الاخرين:  <br>
        <input type="radio" name="res18" value="5" id="res1" required >
            تنطبق غالباً . <br>
            
        <input type="radio" name="res18" value="4" id="res1" required >
            تنطبق كثيراً.<br>

        <input type="radio" name="res18" value="3" id="3" required >
            تنطبق نوعاً ما . <br>
            
        <input type="radio" name="res18" value="2"id="res1" required >
            تنطبق قليلاً.<br>
        <input type="radio" name="res18" value="1" id="res1" required >
            لا تنطبق ابداً.<br>
        
    </p><hr>



    <p> 19. اتردد عندما اسال شخصا عن امر من الامور:  <br>
        <input type="radio" name="res19" value="5" id="res1" required >
            تنطبق غالباً . <br>
            
        <input type="radio" name="res19" value="4" id="res1" required >
            تنطبق كثيراً.<br>

        <input type="radio" name="res19" value="3" id="3" required >
            تنطبق نوعاً ما . <br>
            
        <input type="radio" name="res19" value="2"id="res1" required >
            تنطبق قليلاً.<br>
        <input type="radio" name="res19" value="1" id="res1" required >
            لا تنطبق ابداً.<br>
        
    </p><hr>



    <p> 20.احتاج الي وقت اطول حتي اتغلب علي خجلي في المواقف الاجتماعية:  <br>
        <input type="radio" name="res20" value="5" id="res1" required >
            تنطبق غالباً . <br>
            
        <input type="radio" name="res20" value="4" id="res1" required >
            تنطبق كثيراً.<br>

        <input type="radio" name="res20" value="3" id="3" required >
            تنطبق نوعاً ما . <br>
            
        <input type="radio" name="res20" value="2"id="res1" required >
            تنطبق قليلاً.<br>
        <input type="radio" name="res20" value="1" id="res1" required >
            لا تنطبق ابداً.<br>
        
    </p><hr>



    <p> 21. تضايقني الرعشة اثناء الحديث مع الناس.:  <br>
        <input type="radio" name="res21" value="5" id="res1" required >
            تنطبق غالباً . <br>
            
        <input type="radio" name="res21" value="4" id="res1" required >
            تنطبق كثيراً.<br>

        <input type="radio" name="res21" value="3" id="3" required >
            تنطبق نوعاً ما . <br>
            
        <input type="radio" name="res21" value="2"id="res1" required >
            تنطبق قليلاً.<br>
        <input type="radio" name="res21" value="1" id="res1" required >
            لا تنطبق ابداً.<br>
        
    </p><hr>



    <p> 22. يخيفني التعرض لنقد الاخرين لتصرفاتي .:  <br>
        <input type="radio" name="res22" value="5" id="res1" required >
            تنطبق غالباً . <br>
            
        <input type="radio" name="res22" value="4" id="res1" required >
            تنطبق كثيراً.<br>

        <input type="radio" name="res22" value="3" id="3" required >
            تنطبق نوعاً ما . <br>
            
        <input type="radio" name="res22" value="2"id="res1" required >
            تنطبق قليلاً.<br>
        <input type="radio" name="res22" value="1" id="res1" required >
            لا تنطبق ابداً.<br>
        
    </p><hr>




    <p> 23. اجد صعوبة في الحديث بطلاقه امام الاخرين:  <br>
        <input type="radio" name="res23" value="5" id="res1" required >
            تنطبق غالباً . <br>
            
        <input type="radio" name="res23" value="4" id="res1" required >
            تنطبق كثيراً.<br>

        <input type="radio" name="res23" value="3" id="3" required >
            تنطبق نوعاً ما . <br>
            
        <input type="radio" name="res23" value="2"id="res1" required >
            تنطبق قليلاً.<br>
        <input type="radio" name="res23" value="1" id="res1" required >
            لا تنطبق ابداً.<br>
        
    </p><hr>


    <p> 24. اتضايق من سرعة دقات قلبي عندما اكون بين الناس:  <br>
        <input type="radio" name="res24" value="5" id="res1" required >
            تنطبق غالباً . <br>
            
        <input type="radio" name="res24" value="4" id="res1" required >
            تنطبق كثيراً.<br>

        <input type="radio" name="res24" value="3" id="3" required >
            تنطبق نوعاً ما . <br>
            
        <input type="radio" name="res24" value="2"id="res1" required >
            تنطبق قليلاً.<br>
        <input type="radio" name="res24" value="1" id="res1" required >
            لا تنطبق ابداً.<br>
        
    </p><hr>



    <p> 25. انزعج لوجودي في الحفلات الاجتماعية:  <br>
        <input type="radio" name="res25" value="5" id="res1" required >
            تنطبق غالباً . <br>
            
        <input type="radio" name="res25" value="4" id="res1" required >
            تنطبق كثيراً.<br>

        <input type="radio" name="res25" value="3" id="3" required >
            تنطبق نوعاً ما . <br>
            
        <input type="radio" name="res25" value="2"id="res1" required >
            تنطبق قليلاً.<br>
        <input type="radio" name="res25" value="1" id="res1" required >
            لا تنطبق ابداً.<br>
        
    </p><hr>


    <p> 26. اجد صعوبة عند النظر في وجه الاخرين مدة طويلة .:  <br>
        <input type="radio" name="res26" value="5" id="res1" required >
            تنطبق غالباً . <br>
            
        <input type="radio" name="res26" value="4" id="res1" required >
            تنطبق كثيراً.<br>

        <input type="radio" name="res26" value="3" id="3" required >
            تنطبق نوعاً ما . <br>
            
        <input type="radio" name="res26" value="2"id="res1" required >
            تنطبق قليلاً.<br>
        <input type="radio" name="res26" value="1" id="res1" required >
            لا تنطبق ابداً.<br>
        
    </p><hr>



    <p> 27. ارتبك عندما يتم اجراء مقابلة لي .:  <br>
        <input type="radio" name="res27" value="5" id="res1" required >
            تنطبق غالباً . <br>
            
        <input type="radio" name="res27" value="4" id="res1" required >
            تنطبق كثيراً.<br>

        <input type="radio" name="res27" value="3" id="3" required >
            تنطبق نوعاً ما . <br>
            
        <input type="radio" name="res27" value="2"id="res1" required >
            تنطبق قليلاً.<br>
        <input type="radio" name="res27" value="1" id="res1" required >
            لا تنطبق ابداً.<br>
        
    </p><hr>


    <p> 28. اخجل عندما اتناول الطعام امام الاخرين:  <br>
        <input type="radio" name="res28" value="5" id="res1" required >
            تنطبق غالباً . <br>
            
        <input type="radio" name="res28" value="4" id="res1" required >
            تنطبق كثيراً.<br>

        <input type="radio" name="res28" value="3" id="3" required >
            تنطبق نوعاً ما . <br>
            
        <input type="radio" name="res28" value="2"id="res1" required >
            تنطبق قليلاً.<br>
        <input type="radio" name="res28" value="1" id="res1" required >
            لا تنطبق ابداً.<br>
        
    </p><hr>


    <p> 29. اتمني ان اكون اكثر ثقة بنفسي اثناء المواقف الاجتماعية:  <br>
        <input type="radio" name="res29" value="5" id="res1" required >
            تنطبق غالباً . <br>
            
        <input type="radio" name="res29" value="4" id="res1" required >
            تنطبق كثيراً.<br>

        <input type="radio" name="res29" value="3" id="3" required >
            تنطبق نوعاً ما . <br>
            
        <input type="radio" name="res29" value="2"id="res1" required >
            تنطبق قليلاً.<br>
        <input type="radio" name="res29" value="1" id="res1" required >
            لا تنطبق ابداً.<br>
        
    </p><hr>


    <p> 30. اشعر بالرهبة عندما يطلب مني ان اخاطب جمع من الناس .:  <br>
        <input type="radio" name="res30" value="5" id="res1" required >
            تنطبق غالباً . <br>
            
        <input type="radio" name="res30" value="4" id="res1" required >
            تنطبق كثيراً.<br>

        <input type="radio" name="res30" value="3" id="3" required >
            تنطبق نوعاً ما . <br>
            
        <input type="radio" name="res30" value="2"id="res1" required >
            تنطبق قليلاً.<br>
        <input type="radio" name="res30" value="1" id="res1" required >
            لا تنطبق ابداً.<br>
        
    </p><hr>


    <p> 31.اتوقع الفشل عند مواجهة أي موقف اجتماعي جديد:  <br>
        <input type="radio" name="res31" value="5" id="res1" required >
            تنطبق غالباً . <br>
            
        <input type="radio" name="res31" value="4" id="res1" required >
            تنطبق كثيراً.<br>

        <input type="radio" name="res31" value="3" id="3" required >
            تنطبق نوعاً ما . <br>
            
        <input type="radio" name="res31" value="2"id="res1" required >
            تنطبق قليلاً.<br>
        <input type="radio" name="res31" value="1" id="res1" required >
            لا تنطبق ابداً.<br>
        
    </p><hr>


    <p> 32.اتوتر عندما يطلب مني عرض موضوع مرتبط بالدراسة امام زملائي .:  <br>
        <input type="radio" name="res32" value="5" id="res1" required >
            تنطبق غالباً . <br>
            
        <input type="radio" name="res32" value="4" id="res1" required >
            تنطبق كثيراً.<br>

        <input type="radio" name="res32" value="3" id="3" required >
            تنطبق نوعاً ما . <br>
            
        <input type="radio" name="res32" value="2"id="res1" required >
            تنطبق قليلاً.<br>
        <input type="radio" name="res32" value="1" id="res1" required >
            لا تنطبق ابداً.<br>
        
    </p><hr>


    <p> 33.ارتبك عند دخولي حجرة مليئة بالناس .:  <br>
        <input type="radio" name="res33" value="5" id="res1" required >
            تنطبق غالباً . <br>
            
        <input type="radio" name="res33" value="4" id="res1" required >
            تنطبق كثيراً.<br>

        <input type="radio" name="res33" value="3" id="3" required >
            تنطبق نوعاً ما . <br>
            
        <input type="radio" name="res33" value="2"id="res1" required >
            تنطبق قليلاً.<br>
        <input type="radio" name="res33" value="1" id="res1" required >
            لا تنطبق ابداً.<br>
        
    </p><hr>


    <p> 34.اتجنب ممارسه الأنشطة التي اكون فيها محط مراقبة الاخرين.:  <br>
        <input type="radio" name="res34" value="5" id="res1" required >
            تنطبق غالباً . <br>
            
        <input type="radio" name="res34" value="4" id="res1" required >
            تنطبق كثيراً.<br>

        <input type="radio" name="res34" value="3" id="3" required >
            تنطبق نوعاً ما . <br>
            
        <input type="radio" name="res34" value="2"id="res1" required >
            تنطبق قليلاً.<br>
        <input type="radio" name="res34" value="1" id="res1" required >
            لا تنطبق ابداً.<br>
        
    </p><hr>

   



<center>

<input class="exite1"  type="submit" name="submit"  value=" انهاء الاختبار"  id="submit">
</center>
	
	   
    </form>


   


    </body>
    </html>