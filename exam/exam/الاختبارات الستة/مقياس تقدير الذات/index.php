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
	<title>مقياس تقدير الذت</title>
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
            <h2> اختبار <br> مقياس تقدير الذات </h2>
    </Center>
        
        </div>
			



	<form action="index.php" method="post" name="fff">
    <input class="name" type="number" name="name" value="" id="name" placeholder="ادخل الكود" required ><hr>
	
<p>  1.أرغب كثيراً أن أكون شخص آخر :  <br>
<input type="radio" name="res1" value="1" id="res1" required >
       تنطبق . <br>
        
	<input type="radio" name="res1" value="2" id="res1" required >
    لا تنطبق.<br>

   
    
   
   
</p><hr>
    



<p>  2.		من الصعب جداً أن أتكلم عن زملائي  :  <br>
<input type="radio" name="res2" value="1" id="res1" required >
    تنطبق . <br>
        
	<input type="radio" name="res2" value="2" id="res1" required >
    لا تنطبق.<br>
   
   
</p><hr>
    



<p> 3.	توجد أشياء كثيرة تخصني أرغب في تغييرها إن استطعت :  <br>
<input type="radio" name="res3" value="1" id="res1" required >
    تنطبق . <br>
        
	<input type="radio" name="res3" value="2" id="res1" required >
    لا تنطبق.<br>
   
   
</p><hr>
       
    



<p>  4.		يمكن أن أتخذ القرارات في أي وقت دون مشكلة كبيرة :   <br>
<input type="radio" name="res4" value="1" id="res1" required >
    تنطبق . <br>
        
	<input type="radio" name="res4" value="2" id="res1" required >
    لا تنطبق.<br>
   
   
</p><hr>
       
    



<p>  5.		يفرح الآخرون بوجودي معهم :  <br>
<input type="radio" name="res5" value="1" id="res1" required >
     تنطبق . <br>
        
	<input type="radio" name="res5" value="2" id="res1" required >
    لا تنطبق.<br>
   
   
</p><hr>
       
    



<p>  6.		يمكن أن أتضايق بسهولة في المنزل  :  <br>
<input type="radio" name="res6" value="1" id="res1" required >
    تنطبق . <br>
        
	<input type="radio" name="res6" value="2" id="res1" required >
    لا تنطبق.<br>
   
   
</p><hr>
       
    



<p>  7.		التعود على شيء جديد يستغرق مني وقت طويلاً  :  <br>
<input type="radio" name="res7" value="1" id="res1" required >
    تنطبق . <br>
        
	<input type="radio" name="res7" value="2" id="res1" required >
    لا تنطبق.<br>
   
   
</p><hr>
       
    



<p> 8.		أنا محبوب بين زملائي الذين في نفس عمري :  <br>
<input type="radio" name="res8" value="1" id="res1" required >
    تنطبق . <br>
        
	<input type="radio" name="res8" value="2" id="res1" required >
    لا تنطبق.<br>>
   
   
</p><hr>
       
    



<p>  9.		يمكن أن استسلم بسهولة كبيرة  :  <br>
<input type="radio" name="res9" value="1" id="res1" required >
        ينطبق. <br>
        
	<input type="radio" name="res9" value="2" id="res1" required >
     لا ينطبق.<br>
   
   
</p><hr>
       
           



<p>  10.		يراعي والداي مشاعري  <br>
<input type="radio" name="res10" value="1" id="res1" required >
    ينطبق. <br>
        
	<input type="radio" name="res10" value="2" id="res1" required >
    لا ينطبق.<br>
   
   
</p><hr>
       
    



<p>  11.		يتوقع والداي أشياء كثيرة مني عادة   :  <br>
<input type="radio" name="res11" value="1" id="res1" required >
    ينطبق. <br>
        
	<input type="radio" name="res11" value="2" id="res1" required >
    لا ينطبق.<br>
   
   
</p><hr>
       
    



<p> 12.		من الصعب إلى حد ما أن أظل كما أنا   :  <br>
<input type="radio" name="res12" value="1" id="res1" required >
    ينطبق. <br>
        
	<input type="radio" name="res12" value="2" id="res1" required >
    لا ينطبق.<br>
   
   
</p><hr>
       
    



<p> 13.		تختلط كل الأشياء في حياتي  :  <br>
<input type="radio" name="res13" value="1" id="res1" required >
    ينطبق. <br>
        
	<input type="radio" name="res13" value="2" id="res1" required >
    لا ينطبق.<br>
   
   
</p><hr>
       
    



<p> 14.	يتبع زملائي أفكاري عادة  :  <br>
<input type="radio" name="res14" value="1" id="res1" required >
    ينطبق. <br>
        
	<input type="radio" name="res14" value="2" id="res1" required >
    لا ينطبق.<br>
   
   
</p><hr>
       
    



<p>  15.		رأيي في نفسي منخفض  :  <br>
<input type="radio" name="res15" value="1" id="res1" required >
    ينطبق. <br>
        
	<input type="radio" name="res15" value="2" id="res1" required >
    لا ينطبق.<br>
   
   
</p><hr>
       
    



<p>  16.		أفكر أحياناً كثيرة في ترك البيت :  <br>
<input type="radio" name="res16" value="1" id="res1" required >
    ينطبق. <br>
        
	<input type="radio" name="res16" value="2" id="res1" required >
    لا ينطبق.<br>
   
   
</p><hr>
       
    



<p>  17.		في كثير من الأحيان أشعر بالضيق  :  <br>
<input type="radio" name="res17" value="1" id="res1" required >
    ينطبق. <br>
        
	<input type="radio" name="res17" value="2" id="res1" required >
    لا ينطبق.<br>
   
   
</p><hr>
       
    



<p>  18.		لست جذاباً مثل كثير من الناس :  <br>
<input type="radio" name="res18" value="1" id="res1" required >
    ينطبق. <br>
        
	<input type="radio" name="res18" value="2" id="res1" required >
    لا ينطبق.<br>
   
   
</p><hr>
       
    



<p> 19.		إذا كان لدي شيء أريد أن أقوله فإني أقوله عادة  :  <br>
<input type="radio" name="res19" value="1" id="res1" required >
    ينطبق. <br>
        
	<input type="radio" name="res19" value="2" id="res1" required >
    لا ينطبق.<br>
   
   
</p><hr>
       
    



<p> 20.		يفهمني والداي		 :  <br>
<input type="radio" name="res20" value="1" id="res1" required >
    ينطبق. <br>
        
	<input type="radio" name="res20" value="2" id="res1" required >
    لا ينطبق.<br>
   
   
</p><hr>
       
    



<p>  21.		معظم الناس محبوبون أكثر مني :  <br>
<input type="radio" name="res21" value="1" id="res1" required >
    ينطبق. <br>
        
	<input type="radio" name="res21" value="2" id="res1" required >
    لا ينطبق.<br>
   
   
</p><hr>
       
    



<p>  22.		أشعر عادة كما لو كان والداي يدفعاني للعمل  :  <br>
<input type="radio" name="res22" value="1" id="res1" required >
    ينطبق. <br>
        
	<input type="radio" name="res22" value="2" id="res1" required >
    لا ينطبق.<br>
   
   
</p><hr>
       
    



<p>  23.		لا ألقى تشجيعاً في كثير من الأحيان :  <br>
<input type="radio" name="res23" value="1" id="res1" required >
    ينطبق. <br>
        
	<input type="radio" name="res23" value="2" id="res1" required >
    لا ينطبق.<br>
   
   
</p><hr>
       
    



<p> 24.		لا تضايقني الأشياء عادة :  <br>
<input type="radio" name="res24" value="1" id="res1" required >
    ينطبق. <br>
        
	<input type="radio" name="res24" value="2" id="res1" required >
    لا ينطبق.<br>
   
   
</p><hr>
       

    



<p>  25.		لا يعتمد لي الآخرون  :  <br>
<input type="radio" name="res25" value="1" id="res1" required >
    ينطبق. <br>
        
	<input type="radio" name="res25" value="2" id="res1" required >
    لا ينطبق.<br>
   
   
</p><hr>
       
    






   



<center>

<input class="exite1"  type="submit" name="submit"  value=" انهاء الاختبار"  id="submit">
</center>
	
	   



   


    </body>
    </html>