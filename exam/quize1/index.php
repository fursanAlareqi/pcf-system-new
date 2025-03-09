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
	<title>اختبر بيك للاكتئاب</title>
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
            <h2> اختبار <br> بيك للاكتئاب</h2>
    </Center>
        
        </div>
				
			



	<form action="index.php" method="post" name="fff">
    <input class="name" type="number" name="name" value="" id="name" placeholder="ادخل الكود" required ><hr>
		<p><center><big>(1)</big></center><Br>
        <input type="radio" name="res1" value="1" id="res1"  required>
        1. انني لا اشعر بالحزن. <br>
        
	<input type="radio" name="res1" value="2" id="res1" required >
    2. انني أشعر بالحزن في بعض الاوقات<br>
    <input type="radio" name="res1" value="3" id="res1" required >
    3.	أشعر بالحزن طيلة الوقت ولا أستطيع التخلص من هذا الشعور . <br>
        
	<input type="radio" name="res1" value="4" id="res1" required >
    4.	أنني أشعر بالحزن والتعاسة لدرجة لا استطيع احتمالها. <br>

    </p><hr>

    <p><center><big>(2)</big></center><Br>
        <input type="radio" name="res2" value="1" id="res1" required >
        1.	أنني لست متشائم بشأن المستقبل . <br>
        
	<input type="radio" name="res2" value="2" id="res1" required >
   2.	أشعر بالتشائم بشأن المستقبل.<br>
    <input type="radio" name="res2" value="3" id="res1" required >
    3.	أشعر انة لايوجد لدي ما اطمح للوصول الية . <br>
        
	<input type="radio" name="res2" value="4" id="res1" required >
    4.	أشعر بأن المستقبل لا أمل فيه و ان هذا الوضع من غير الممكن تغييرة . <br>
   
</p><hr>

<p>  <center><big>(3)</big></center> <br>
        <input type="radio" name="res3" value="1" id="res1" required >
        1.	لا أشعر باني شخص فاشل بشكل عام  . <br>
        
	<input type="radio" name="res3" value="2" id="res1" required >
    2.	أشعر بانني اواجه من الفشل أكثر مما يواجهه الانسان العادي .<br>
    <input type="radio" name="res3" value="3" id="res1" required >
    3.	عندما انظر الى حياتي الماضية فان كل ما اراة الكثير من الفشل. <br>
        
	<input type="radio" name="res3" value="4" id="res1" required >
    4.	أشعر بأني انسان فاشل فشلاً تاماً . <br>
   
</p><hr>



<p>   <center><big>(4)</big></center> <br>
<input type="radio" name="res4" value="1" id="res1" required >
        1.	مازالت الاشياء تعطيني شعورا بالرضا كما كانت عاده  . <br>
        
	<input type="radio" name="res4" value="2" id="res1" required >
    2.لا اشعر بمتعه في الاشياء على النحو الذي كنت اشعر به عاده .<br>
    <input type="radio" name="res4" value="3" id="res1" required >
    3.لم اعد اشعر بأية متعه حقيقيه في اي شيء على الاطلاق. <br>
        
	<input type="radio" name="res4" value="4" id="res1" required >
    4.	لدي شعور بعدم الرضا والملل من كل شيء . <br>
   
</p><hr>

<p>   <center><big>(5)</big></center> <br>
<input type="radio" name="res5" value="1" id="res1" required >
        1.	لا يوجد لدي شعور بالذنب . <br>
        
	<input type="radio" name="res5" value="2" id="res1" required >
    2.اشعر بالذنب في بعض الاوقات  .<br>
    <input type="radio" name="res5" value="3" id="res1" required >
    3.اشعر بالذنب في معظم الاوقات. <br>
        
	<input type="radio" name="res5" value="4" id="res1" required >
    4.	اشعر بالذنب في كافه الاوقات . <br>
   
</p><hr>
       


<p>   <center><big>(6)</big></center> <br>
<input type="radio" name="res6" value="1" id="res1" required >
        1.	لا اشعر بانني استحق عقابا من اي نوع   . <br>
        
	<input type="radio" name="res6" value="2" id="res1" required >
    2.اشعر بأنني استحق العقاب احيانا .<br>
    <input type="radio" name="res6" value="3" id="res1" required >
    3.كثير ما اشعر بأنني استحق العقاب. <br>
        
	<input type="radio" name="res6" value="4" id="res1" required >
    4.	احس بأنني اعاقب واعذب في حياتي وانني استحق ذلك . <br>
   
</p><hr>
       



<p>   <center><big>(7)</big></center> <br>
<input type="radio" name="res7" value="1" id="res1" required >
        1.	لا اشعر بخيبة امل في نفسي . <br>
        
	<input type="radio" name="res7" value="2" id="res1" required >
    2.اشعر بخيبة الامل في نفسي .<br>
    <input type="radio" name="res7" value="3" id="res1" required >
    3.اشعر احيانا باني اكره نفسي. <br>
        
	<input type="radio" name="res7" value="4" id="res1" required >
    4.	انني اكره نفسي في كل الاوقات  . <br>
   
</p><hr>
       

<p>   <center><big>(8)</big></center> <br>
<input type="radio" name="res8" value="1" id="res1" required >
        1.	لا اشعر بانني اسوء من الاخرين  . <br>
        
	<input type="radio" name="res8" value="2" id="res1" required >
    2.انني انتقد نفسي بسبب ما لدي من اخطاء و ضعف  .<br>
    <input type="radio" name="res8" value="3" id="res1" required >
    3.الوم نفسي طيلة الوقت بسبب اخطائي . <br>
        
	<input type="radio" name="res8" value="4" id="res1" required >
    4.	الوم نفسي على كل شيء يحدث حتى لولم يكن لي علاقه مباشر . <br>
   
</p><hr>
       



<p>   <center><big>(9)</big></center> <br>
<input type="radio" name="res9" value="1" id="res1" required >
        1.لا يوجد لدي ايه افكار انتحاريه   . <br>
        
	<input type="radio" name="res9" value="2" id="res1" required >
    2.توجد لدي بعض الافكار الانتحارية ولكنني لن اقوم بتنفيذها.<br>
    <input type="radio" name="res9" value="3" id="res1" required >
    3.ارغب بقتل نفسي. <br>
        
	<input type="radio" name="res9" value="4" id="res1" required >
    4.	سأقتل نفسي اذا ماتوا فرات لي الفرصة السانحة لذلك  . <br>
   
</p><hr>
       


<p>   <center><big>(10)</big></center> <br>
<input type="radio" name="res10" value="1" id="res1" required >
        1.	لا ابكي اكثر من المعتاد. <br>
        
	<input type="radio" name="res10" value="2" id="res1" required >
    2.ابكي  هذه الايام اكثر من اكثر من المعتاد .<br>
    <input type="radio" name="res10" value="3" id="res1" required >
    3.انني ابكي طيلة الوقت هذه الايام . <br>
        
	<input type="radio" name="res10" value="4" id="res1" required >
    4.لقد كانت لدي القدرة على البكاء ولكنني في هذه الايام لا استطيع البكاء مع انني اريد ذلك. <br>
   
</p><hr>
       



<p>   <center><big>(11)</big></center> <br>
<input type="radio" name="res11" value="1" id="res1" required >
        1.لا أشعر في هذه الايام اني سريع الغضب اكثر من المعتاد . <br>
        
	<input type="radio" name="res11" value="2" id="res1" required >
    2.اصبح غضبي يستثار بسهوله اكثر من المعتاد في هذه الايام  .<br>
    <input type="radio" name="res11" value="3" id="res1" required >
    3.اشعر بسرعه الاستثارة طيلة الوقت هذه الايام . <br>
        
	<input type="radio" name="res11" value="4" id="res1" required >
    4.	 احس بأن مشاعري قد تبدلت ولم يعد شيء يغضبني . <br>
   
</p><hr>
       



<p>   <center><big>(12)</big></center> <br>
<input type="radio" name="res12" value="1" id="res1" required >
        1.	لا اشعر بأنني قد فقدت اهتمامي بالناس الاخرين. <br>
        
	<input type="radio" name="res12" value="2" id="res1" required >
    2.اصبحت اقل اهتماما بالناس الاخرين مما كنت عليه.<br>
    <input type="radio" name="res12" value="3" id="res1" required >
    3.فقدت معظم اهتمامي بالناس الاخرين . <br>
        
	<input type="radio" name="res12" value="4" id="res1" required >
    4.	فقدت كل اهتمامي بالناس الاخرين . <br>
   
</p><hr>
       



<p>   <center><big>(13)</big></center> <br>
<input type="radio" name="res13" value="1" id="res1" required >
        1.	اقوم باتخاذ قرارتي على افضل ما استطيع القيام به . <br>
        
	<input type="radio" name="res13" value="2" id="res1" required >
    2.اميل الى تأجيل اتخاذ القرارات اكثر مما كنت افعل عاده .<br>
    <input type="radio" name="res13" value="3" id="res1" required >
    3.اصبحت اجد صعوبة كبيره في اتخاذ القرارات عما قبل. <br>
        
	<input type="radio" name="res13" value="4" id="res1" required >
    4.	لم تعد لدي اي قدره على اتخاذ قرارات في هذه الايام  . <br>
   
</p><hr>
       



<p>   <center><big>(14)</big></center> <br>
<input type="radio" name="res14" value="1" id="res1" required >
        1.	اشعر بأن مظهري مناسب كما كان عاده. <br>
        
	<input type="radio" name="res14" value="2" id="res1" required >
    2.يزعجني الشعور بأنني كهلا او غير جذاب .<br>
    <input type="radio" name="res14" value="3" id="res1" required >
    3.اشعر ان هناك تغيرات دائمه تطرا على مظهري تجعلني ابدو غير جذاب . <br>
        
	<input type="radio" name="res14" value="4" id="res1" required >
    4.	اعتقد بأنني ابدو قبيحا . <br>
   
</p><hr>
       



<p>   <center><big>(15)</big></center> <br>
<input type="radio" name="res15" value="1" id="res1" required >
        1.استطيع العمل بنفس الكفاءة كما كنت افعل  عادة . <br>
        
	<input type="radio" name="res15" value="2" id="res1" required >
    2.احتاج جهد اضافي كي ابدأ العمل في اي شيء  .<br>
    <input type="radio" name="res15" value="3" id="res1" required >
    3.عي ان احدث نفسي بشده كي اقوم بعمل اي شيء. <br>
        
	<input type="radio" name="res15" value="4" id="res1" required >
    4.	لا استطيع عمل او انجاز اي شيء على الاطلاق  . <br>
   
</p><hr>
       
       
<p>   <center><big>(16)</big></center> <br>
<input type="radio" name="res16" value="1" id="res1" required >
        1.	استطيع النوم جيدا كا لمعتاد. <br>
        
	<input type="radio" name="res16" value="2" id="res1" required >
    2.لا انام جيد كا لمعتاد .<br>
    <input type="radio" name="res16" value="3" id="res1" required >
    3.استيقظ من النوم ابكر بساعه او ساعتين. <br>
        
	<input type="radio" name="res16" value="4" id="res1" required >
    4.	استيقظ من النوم ابكر بساعات عديده من المعتاد ولا استطيع العودة ثانيه الى النوم  . <br>
   
</p><hr>
       
       
<p>   <center><big>(17)</big></center> <br>
<input type="radio" name="res17" value="1" id="res1" required >
        1.	لا اجد انني اصبحت اكثر تعبا من المعتاد. <br>
        
	<input type="radio" name="res17" value="2" id="res1" required >
    2.اصبحت اتعب اكثر من المعتاد .<br>
    <input type="radio" name="res17" value="3" id="res1" required >
    3.اصبحت اتعب من عمل اي شيء تقريبا. <br>
        
	<input type="radio" name="res17" value="4" id="res1" required >
    4.	انا متعب لدرجه لا استطيع معها عمل اي شيء  . <br>
   
</p><hr>
       
       
<p>   <center><big>(18)</big></center> <br>
<input type="radio" name="res18" value="1" id="res1" required >
        1.	شهيتي لطعام هي كا المعتاد. <br>
        
	<input type="radio" name="res18" value="2" id="res1" required >
    2.شهيتي لطعام ليست جيده كما هي العادة .<br>
    <input type="radio" name="res18" value="3" id="res1" required >
    3.شهيتي لطعام سيئة جدا هذه الايام . <br>
        
	<input type="radio" name="res18" value="4" id="res1" required >
    4.	ليس لدي شهيه للطعام على الاطلاق في هذه الايام . <br>
   
</p><hr>
       
       
<p>   <center><big>(19)</big></center> <br>
<input type="radio" name="res19" value="1" id="res1" required >
        1.لم افقد كثير من وزني مؤخرا، او وزني كما هو . <br>
        
	<input type="radio" name="res19" value="2" id="res1" required >
    2.فقدت من وزني حوالي 2كيلوغرام.<br>
    <input type="radio" name="res19" value="3" id="res1" required >
    3.فقدت من مزني حوالي 4غرام. <br>
        
	<input type="radio" name="res19" value="4" id="res1" required >
    4.	فقدت من وزني حوالي 6 كيلو غرام . <br>
   
</p><hr>
       
       

<p>   <center><big>(20)</big></center> <br>
<input type="radio" name="res20" value="1" id="res1" required >
        1.ليس لدى انزعاج يتعلق بصحتي اكثر من المعتاد. <br>
        
	<input type="radio" name="res20" value="2" id="res1" required >
    2.انني منزعج بشأن المشكلات الصحية مثل الألم المعدة او الامساك او الآلام والاوجاع الجسمية عامه .<br>
    <input type="radio" name="res20" value="3" id="res1" required >
    3.انني متضايق منا لمشكلات الصحية ومن الصعب ان افكر في شيء اخر. <br>
        
	<input type="radio" name="res20" value="4" id="res1" required >
    4.	نني قلق للغاية بسبب وضعي الصحي بحيث لا استطيع التفكير في شيء اخر  . <br>
   
</p><hr>
       
       

<p>   <center><big>(21)</big></center> <br>
<input type="radio" name="res21" value="1" id="res1" required >
        1.لم الاحظ ايه تغيرات تتعلق في اهتماماتي الجنسية  . <br>
        
	<input type="radio" name="res21" value="2" id="res1" required >
    2.اصبحت اقل اهتماما بالأمور الجنسية مما كنت عليه من قبل .<br>
    <input type="radio" name="res21" value="3" id="res1" required >
    3.اهتمامي قليل جدا بالأمور الجنسية في هذه الايام . <br>
        
	<input type="radio" name="res21" value="4" id="res1" required >
    4.	فقدت اهتمامي بالأمور الجنسية. <br>
   
</p><hr>
       
<center>

<input class="exite1"  type="submit" name="submit"  value=" انهاء الاختبار"  id="submit">
</center>
	
	   



   


    </body>
    </html>