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
	<title>اختبار المخاوف (الفوبيات) للاطفال</title>
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
            <h2> اختبار <br> مخاوف الاطفال </h2>
    </Center>
        
        </div>



	<form action="index.php" method="post" name="fff">
    <input class="name" type="number" name="name" value="" id="name" placeholder="ادخل الكود" required ><hr>
	
<p>  1.بتخاف خوف شديد اذا كنت في مكان ضيق :  <br>
<input type="radio" name="res1" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res1" value="2" id="res1" required >
    لا.<br>

   
    
   
   
</p><hr>
    



<p>  2.		بتحس انك خائف يجيلك مرض مالوش علاج  :  <br>
<input type="radio" name="res2" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res2" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
    



<p> 3.		بتضايق وتخاف لما تركب تاكسي حتى لو ماكانش زحمة :  <br>
<input type="radio" name="res3" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res3" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  4.	بتخاف خوف شديد اذا كنت في مكان زحمة  <br>
<input type="radio" name="res4" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res4" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  5.		بتخاف من الادوار العالية او الاماكن المرتفة :  <br>
<input type="radio" name="res5" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res5" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  6.	وانت في مكان عالي بتشعر انك حتقع من هذا المكان   :  <br>
<input type="radio" name="res6" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res6" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  7.		بتحس بالرعب في الاماكن المظلمة :  <br>
<input type="radio" name="res7" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res7" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 8.	وانت في الظلمة بيتهيا لك ان فيه ناس بيكلمك :  <br>
<input type="radio" name="res8" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res8" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  9.		بتخاف تروح لفراشك لوحدك بالليل علشان تنام  :  <br>
<input type="radio" name="res9" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res9" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
           



<p>  10.		بتحس برعشة لما بتكون في الظلمة   <br>
<input type="radio" name="res10" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res10" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  11.		بتخاف من حاجات او ناس انت عارف انهم مؤذيين  :  <br>
<input type="radio" name="res11" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res11" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 12.		بيتها لك في الظلمة ان فيه ناس موجودين على الحائط  :  <br>
<input type="radio" name="res12" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res12" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 13.		بتحس بالخوف لما تدخل مكان فية ناس مجتمعين وبيتكلموا  :  <br>
<input type="radio" name="res13" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res13" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 14.		بتحس برعشة ودوخة لما تشوف كلب او قطة  :  <br>
<input type="radio" name="res14" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res14" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  15.		بتخاف تقعد في الاوضة لما تكون ظلمة :  <br>
<input type="radio" name="res15" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res15" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  16.		بتجري بسرعةوقلبك يدق بسرعة لما تشوف كلب او قطة  :  <br>
<input type="radio" name="res16" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res16" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  17.		بتخاف من الفئران وقلبك يدق بسرعة لما تشوفهم  :  <br>
<input type="radio" name="res17" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res17" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p>  18.	بتخاف من الصراصير وقلبك يدق بسرعة لما تشوفهم :  <br>
<input type="radio" name="res18" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res18" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 19.		بتحس بخوف شديد لما تشوف ثعبان حتى لو كان في صورة في التلفزيون :  <br>
<input type="radio" name="res19" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res19" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    



<p> 20.		بتخاف تروح الحمام لوحدك لما تكون الدنيا ظلمة 		 :  <br>
<input type="radio" name="res20" value="1" id="res1" required >
        نعم. <br>
        
	<input type="radio" name="res20" value="2" id="res1" required >
    لا.<br>
   
   
</p><hr>
       
    

   
    



   



<center>

<input class="exite1"  type="submit" name="submit"  value=" انهاء الاختبار"  id="submit">
</center>
	
	   



   


    </body>
    </html>