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
			
        <div class="head" ><img style="width: 200px;" src="../../img/1.png" alt="">
            <Center>
            <h2>  اختبار ساكس</h2>
    </Center>
        
        </div>
				
			



	<form action="index.php" method="post" name="fff">
    <input class="name" type="number" name="name" value="" id="name" placeholder="ادخل الكود" required ><br>
    <br>
	<p>
    التعليمات : <blockquote>
فيما يلي ستون عبارة ناقصة اقرأ كل واحدة منها وأكملها بكتابة اول فكرة ترد الى ذهنك حاول أن تعمل هذا بأسرع ما تستطيع اذا لم تتمكن من تكملة جملة ما تصنع دائرة حول الرقم المقابل لها وانتقل الى الجملة التي تليها ثم عد اليها لا كمالها فيما بعد 
    </blockquote>
    <br>
    <hr>


    </p>

<p>  1.اشعر ان والدى قليلا ما   
<input type="text" name="res1"  id="res1" required >
</p><hr>



<p>  2.اذا كان الكل ضدي فأنا  
<input type="text" name="res2"  id="res1" required >
</p><hr>





<p>  3.لقد كنت ابغى دائماً ان  
<input type="text" name="res3"  id="res1" required >
</p><hr>







<p>  4.لو انني كنت المسئول الاول 
<input type="text" name="res4"  id="res1" required >
</p><hr>

<p>  5.يبدو لي المستقبل 
<input type="text" name="res5"  id="res1" required >
</p><hr>

<p>  6.رؤساء العمل الذين هم اعلى مني  
<input type="text" name="res6"  id="res1" required >
</p><hr>



<p>  7.انا اعلم انها حماقة ما ولكنني اخاف  
<input type="text" name="res7"  id="res1" required >
</p><hr>



<p>  8.أشعر بأن الصديق الحقيقي
<input type="text" name="res8"  id="res1" required >
</p><hr>



<p>  9.عندما كنت طفلاً 
<input type="text" name="res9"  id="res1" required >
</p><hr>



<p>  10.فكرت عن المراءة الكاملة هي(بالنسبة للرجل)  
<input type="text" name="res10"  id="res1" required >
</p><hr>



<p>  11.عندما اشاهد رجل وأمراءه معاً 
<input type="text" name="res11"  id="res1" required >
</p><hr>



<p>  12.اسرتي بالمقارنة بمعظم الاسر الاخرى   
<input type="text" name="res12"  id="res1" required >
</p><hr>



<p>  13.من الافضل لي أن أعمل مع    
<input type="text" name="res13"  id="res1" required >
</p><hr>



<p>  14.أمي   
<input type="text" name="res14"  id="res1" required >
</p><hr>



<p>  15.أنا على استعداد بأن اقوم بأي شيء ينسيني   
<input type="text" name="res15"  id="res1" required >
</p><hr>



<p>  16.بودي لو ان ابي اراد ان   
<input type="text" name="res16"  id="res1" required >
</p><hr>



<p>  17.اعتقد ان عندي القدرة على
<input type="text" name="res17"  id="res1" required >
</p><hr>



<p>  18.سأكون في سعادة تامة اذا  
<input type="text" name="res18"  id="res1" required >
</p><hr>



<p>  19.لو ان انسان يعمل تحت مسؤوليتي   
<input type="text" name="res19"  id="res1" required >
</p><hr>



<p>  20.إنني اتطلع الى  
<input type="text" name="res20"  id="res1" required >
</p><hr>



<p>  21.في المدرسة المدرسون الذين يدرسونني  :  
<input type="text" name="res21"  id="res1" required >
</p><hr>



<p>  22.أكثر اصدقائي لا يعلمون اني اخاف من  :  
<input type="text" name="res22"  id="res1" required >
</p><hr>



<p>  23.انا لا احب الناس الذين  :  
<input type="text" name="res23"  id="res1" required >
</p><hr>



<p>  24.فيما وقت ماكنت  
<input type="text" name="res24"  id="res1" required >
</p><hr>



<p>  25.أظن ان معظم البنات (بالنسبة للرجل)   
<input type="text" name="res25"  id="res1" required >
</p><hr>



<p>  26.شعوري نحو الحياة الزوجية أنها 
<input type="text" name="res26"  id="res1" required >
</p><hr>



<p>  27.أسرتي تعاملني كما لو  
<input type="text" name="res27"  id="res1" required >
</p><hr>



<p>  28.إن هؤلاء الذين أشتغل معهم 
<input type="text" name="res28"  id="res1" required >
</p><hr>



<p>  29.أنا وامي  
<input type="text" name="res29"  id="res1" required >
</p><hr>



<p>  30.كانت اكبر غلطة ارتكبتها :  
<input type="text" name="res30"  id="res1" required >
</p><hr>



<p>  31.أود لو أن والدي :  
<input type="text" name="res31"  id="res1" required >
</p><hr>



<p>  32.أكبر نقطة ضعف عندي في  
<input type="text" name="res32"  id="res1" required >
</p><hr>



<p>  33.الشيء الذي اطمح اليه سراً   
<input type="text" name="res33"  id="res1" required >
</p><hr>



<p>  34.الناس الذين يعملون تحت ادارتي  :  
<input type="text" name="res34"  id="res1" required >
</p><hr>



<p>  35.سيأتي ذلك اليوم الذي  :  
<input type="text" name="res35"  id="res1" required >
</p><hr>



<p>  36.عندما ارى رئيسي في  العمل قادماً  :  
<input type="text" name="res36"  id="res1" required >
</p><hr>



<p>  37.بودي لو تخلصت من الخوف من  :  
<input type="text" name="res37"  id="res37" required >
</p><hr>



<p>  38.أحب كثيراً الناس الذين  :  
<input type="text" name="res38"  id="res1" required >
</p><hr>



<p>  39.لو انني علت شاباً  :  
<input type="text" name="res39"  id="res1" required >
</p><hr>



<p>  40.اعتقد ان معظم النساء (بالنسبة للرجل)  
<input type="text" name="res40"  id="res1" required >
</p><hr>



<p>  41.لو كانت لي علاقة جنسية سليمه   
<input type="text" name="res41"  id="res1" required >
</p><hr>



<p>  42.معظم الاسر الذي اعرفها 
<input type="text" name="res42"  id="res1" required >
</p><hr>



<p>  43.احب ان اشتغل مع الناس الذين   
<input type="text" name="res43"  id="res1" required >
</p><hr>



<p>  44.أظن ان معظم الامهات   
<input type="text" name="res44"  id="res1" required >
</p><hr>


<p>  45.حينما كنت صغيراً كنت اشعر بالذنب اذا   
<input type="text" name="res45"  id="res1" required >
</p><hr>



<p>  46.اشعر ان والدي  
<input type="text" name="res46"  id="res1" required >
</p><hr>






<p>  47.عندما يكون الخط ضدي   
<input type="text" name="res47"  id="res1" required >
</p><hr>








<p>  48.ان أكثر ما أبتغيه من الحياة   
<input type="text" name="res48"  id="res1" required >
</p><hr>






<p>  49.عندما اصدر الاوامر للغير   
<input type="text" name="res49"  id="res1" required >
</p><hr>






<p>  50.عندما تتقدم بالسن   
<input type="text" name="res50"  id="res1" required >
</p><hr>






<p>  51.الناس الذين اعرفهم اعلى مني   
<input type="text" name="res51"  id="res1" required >
</p><hr>






<p>  52.تضطرني مخاوف احياناً الى ان   
<input type="text" name="res52"  id="res1" required >
</p><hr>






<p>  53.عندما لا اكون موجوداً اصدقائي   
<input type="text" name="res53"  id="res1" required >
</p><hr>






<p>  54.انا لا احب عنما لا يكون الرجال (بالنسبة للنساء)  
<input type="text" name="res54"  id="res1" required >
</p><hr>






<p>  55.اوضح ذكرياتي عن ايام الطفولة هي   
<input type="text" name="res55"  id="res1" required >
</p><hr>






<p>  56.حياتي الجنسية  
<input type="text" name="res56"  id="res1" required >
</p><hr>






<p>  57.عندما كنت طفلاً اسرتي   
<input type="text" name="res57"  id="res1" required >
</p><hr>






<p>  58.الناس الذين يشتغلون معي   
<input type="text" name="res58"  id="res1" required >
</p><hr>






<p>  59.اسوء ما فعلت في حياتي ان    
<input type="text" name="res59"  id="res1" required >
</p><hr>






<p>  60.اشعر ان والدي  
<input type="text" name="res60"  id="res1" required >
</p><hr>





    



   



<center>

<input class="exite1"  type="submit" name="submit"  value=" انهاء الاختبار"  id="submit">
</center>
	
	   



   


    </body>
    </html>