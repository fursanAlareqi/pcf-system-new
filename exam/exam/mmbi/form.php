<?php

if (isset($_POST['submit'])) {
    
	$sname=$_SESSION['user']['id'];
	$branch=$_SESSION['user']['branch_id'];  	 
	//s_k=س.ك
	$s_k=0;
	$u1=" ";
	$u2=" ";
	$u3=" ";
	$u4=" ";
	$u5=" ";
	$u6=" ";
	$u7=" ";
	$v1=" ";
	$v2=" ";
	$v3=" ";
	$v4=" ";
	$v5=" ";
	$v6=" ";
	$v7=" ";
	$v8=" ";
	$v9=" ";
	$v10=" ";
	$v11=" ";
	$v12=" ";
	$v13=" ";

	$res1=$_POST["res1"];
	$res2=$_POST["res2"];
	$res3=$_POST["res3"];
	$res4=$_POST["res4"];
	$res5=$_POST["res5"];
	$res6=$_POST["res6"];
	$res7=$_POST["res7"];
	$res8=$_POST["res8"];
	$res9=$_POST["res9"];
	$res10=$_POST["res10"];
	$res11=$_POST["res11"];
    $res12=$_POST["res12"];
    $res13=$_POST["res13"];
    $res14=$_POST["res14"];
    $res15=$_POST["res15"];
    $res16=$_POST["res16"];
    $res17=$_POST["res17"];
    $res18=$_POST["res18"];
    $res19=$_POST["res19"];
    $res20=$_POST["res20"];
    $res21=$_POST["res21"];
    $res22=$_POST["res22"];
    $res23=$_POST["res23"];
    $res24=$_POST["res24"];
    $res25=$_POST["res25"];
    $res26=$_POST["res26"];
    $res27=$_POST["res27"];
    $res28=$_POST["res28"];
    $res29=$_POST["res29"];
    $res30=$_POST["res30"];
    $res31=$_POST["res31"];
    $res32=$_POST["res32"];
    $res33=$_POST["res33"];
    $res34=$_POST["res34"];
    $res35=$_POST["res35"];
    $res36=$_POST["res36"];
    $res37=$_POST["res37"];
    $res38=$_POST["res38"];
    $res39=$_POST["res39"];
    $res40=$_POST["res40"];
    $res41=$_POST["res41"];
    $res42=$_POST["res42"];
    $res43=$_POST["res43"];
    $res44=$_POST["res44"];
    $res45=$_POST["res45"];
    $res46=$_POST["res46"];
    $res47=$_POST["res47"];
    $res48=$_POST["res48"];
    $res49=$_POST["res49"];
	$res50=$_POST["res50"];
	$res51=$_POST["res51"];
	$res52=$_POST["res52"];
	$res53=$_POST["res53"];
	$res54=$_POST["res54"];
    $res55=$_POST["res55"];
    $res56=$_POST["res56"];
    $res57=$_POST["res57"];
    $res58=$_POST["res58"];
    $res59=$_POST["res59"];
    $res60=$_POST["res60"];
    $res61=$_POST["res61"];
    $res62=$_POST["res62"];
    $res63=$_POST["res63"];
    $res64=$_POST["res64"];
    $res65=$_POST["res65"];
    $res66=$_POST["res66"];
    $res67=$_POST["res67"];
    $res68=$_POST["res68"];
    $res69=$_POST["res69"];
    $res70=$_POST["res70"];
    $res71=$_POST["res71"];
    $res72=$_POST["res72"];
    $res73=$_POST["res73"];
    $res74=$_POST["res74"];
    $res75=$_POST["res75"];
    $res76=$_POST["res76"];
    $res77=$_POST["res77"];
    $res78=$_POST["res78"];
    $res79=$_POST["res79"];
    $res80=$_POST["res80"];
    $res81=$_POST["res81"];
    $res82=$_POST["res82"];
    $res83=$_POST["res83"];
    $res84=$_POST["res84"];
    $res85=$_POST["res85"];
    $res86=$_POST["res86"];
    $res87=$_POST["res87"];
    $res88=$_POST["res88"];
    $res89=$_POST["res89"];
    $res90=$_POST["res90"];
    $res91=$_POST["res91"];
    $res92=$_POST["res92"];
    $res93=$_POST["res93"];
    $res94=$_POST["res94"];
    $res95=$_POST["res95"];
    $res96=$_POST["res96"];
    $res97=$_POST["res97"];
    $res98=$_POST["res98"];
    $res99=$_POST["res99"];
    $res100=$_POST["res100"];
    $res101=$_POST["res101"];
    $res102=$_POST["res102"];
    $res103=$_POST["res103"];
    $res104=$_POST["res104"];
    $res105=$_POST["res105"];
    $res106=$_POST["res106"];
    $res107=$_POST["res107"];
    $res108=$_POST["res108"];
    $res109=$_POST["res109"];
    $res110=$_POST["res110"];
    $res111=$_POST["res111"];
    $res112=$_POST["res112"];
    $res113=$_POST["res113"];
    $res114=$_POST["res114"];
    $res115=$_POST["res115"];
    $res116=$_POST["res116"];
    $res117=$_POST["res117"];
    $res118=$_POST["res118"];
    $res119=$_POST["res119"];
    $res120=$_POST["res120"];
    $res121=$_POST["res121"];
    $res122=$_POST["res122"];
    $res123=$_POST["res123"];
    $res124=$_POST["res124"];
    $res125=$_POST["res125"];
    $res126=$_POST["res126"];
    $res127=$_POST["res127"];
    $res128=$_POST["res128"];
    $res129=$_POST["res129"];
    $res130=$_POST["res130"];
    $res131=$_POST["res131"];
    $res132=$_POST["res132"];
    $res133=$_POST["res133"];
    $res134=$_POST["res134"];
    $res135=$_POST["res135"];
    $res136=$_POST["res136"];
    $res137=$_POST["res137"];
    $res138=$_POST["res138"];
    $res139=$_POST["res139"];
    $res140=$_POST["res140"];
    $res141=$_POST["res141"];
    $res142=$_POST["res142"];
    $res143=$_POST["res143"];
    $res144=$_POST["res144"];
    $res145=$_POST["res145"];
    $res146=$_POST["res146"];
    $res147=$_POST["res147"];
    $res148=$_POST["res148"];
    $res149=$_POST["res149"];
    $res150=$_POST["res150"];
    $res151=$_POST["res151"];
    $res152=$_POST["res152"];
    $res153=$_POST["res153"];
    $res154=$_POST["res154"];
    $res155=$_POST["res155"];
    $res156=$_POST["res156"];
    $res157=$_POST["res157"];
    $res158=$_POST["res158"];
    $res159=$_POST["res159"];
    $res160=$_POST["res160"];
    $res161=$_POST["res161"];
    $res162=$_POST["res162"];
    $res163=$_POST["res163"];
    $res164=$_POST["res164"];
    $res165=$_POST["res165"];
    $res166=$_POST["res166"];
    $res167=$_POST["res167"];
    $res168=$_POST["res168"];
    $res169=$_POST["res169"];
    $res170=$_POST["res170"];
    $res171=$_POST["res171"];
    $res172=$_POST["res172"];
    $res173=$_POST["res173"];
    $res174=$_POST["res174"];
    $res175=$_POST["res175"];
    $res176=$_POST["res176"];
    $res177=$_POST["res177"];
    $res178=$_POST["res178"];
    $res179=$_POST["res179"];
    $res180=$_POST["res180"];
    $res181=$_POST["res181"];
    $res182=$_POST["res182"];
    $res183=$_POST["res183"];
    $res184=$_POST["res184"];
    $res185=$_POST["res185"];
    $res186=$_POST["res186"];
    $res187=$_POST["res187"];
    $res188=$_POST["res188"];
    $res189=$_POST["res189"];
    $res190=$_POST["res190"];
    $res191=$_POST["res191"];
    $res192=$_POST["res192"];
    $res193=$_POST["res193"];
    $res194=$_POST["res194"];
    $res195=$_POST["res195"];
    $res196=$_POST["res196"];
    $res197=$_POST["res197"];
    $res198=$_POST["res198"];
    $res199=$_POST["res199"];
    $res200=$_POST["res200"];
    $res201=$_POST["res201"];
    $res202=$_POST["res202"];
    $res203=$_POST["res203"];
    $res204=$_POST["res204"];
    $res205=$_POST["res205"];
    $res206=$_POST["res206"];
    $res207=$_POST["res207"];
    $res208=$_POST["res208"];
    $res209=$_POST["res209"];
    $res210=$_POST["res210"];
    $res211=$_POST["res211"];
    $res212=$_POST["res212"];
    $res213=$_POST["res213"];
    $res214=$_POST["res214"];
    $res215=$_POST["res215"];
    $res216=$_POST["res216"];
    $res217=$_POST["res217"];
    $res218=$_POST["res218"];
    $res219=$_POST["res219"];
    $res220=$_POST["res220"];
    $res221=$_POST["res221"];
    $res222=$_POST["res222"];
    $res223=$_POST["res223"];
    $res224=$_POST["res224"];
    $res225=$_POST["res225"];
    $res226=$_POST["res226"];
	$res227=$_POST["res227"];
    $res228=$_POST["res228"];
    $res229=$_POST["res229"];
    $res230=$_POST["res230"];
    $res231=$_POST["res231"];
    $res232=$_POST["res232"];
    $res233=$_POST["res233"];
    $res234=$_POST["res234"];
    $res235=$_POST["res235"];
    $res236=$_POST["res236"];
    $res237=$_POST["res237"];
    $res238=$_POST["res238"];
    $res239=$_POST["res239"];
    $res240=$_POST["res240"];
    $res241=$_POST["res241"];
    $res242=$_POST["res242"];
    $res243=$_POST["res243"];
    $res244=$_POST["res244"];
    $res245=$_POST["res245"];
    $res246=$_POST["res246"];
    $res247=$_POST["res247"];
    $res248=$_POST["res248"];
    $res249=$_POST["res249"];
    $res250=$_POST["res250"];
    $res251=$_POST["res251"];
    $res252=$_POST["res252"];
    $res253=$_POST["res253"];
    $res254=$_POST["res254"];
    $res255=$_POST["res255"];
    $res256=$_POST["res256"];
    $res257=$_POST["res257"];
    $res258=$_POST["res258"];
    $res259=$_POST["res259"];
    $res260=$_POST["res260"];
    $res261=$_POST["res261"];
    $res262=$_POST["res262"];
    $res263=$_POST["res263"];
    $res264=$_POST["res264"];
    $res265=$_POST["res265"];
    $res266=$_POST["res266"];
    $res267=$_POST["res267"];
    $res268=$_POST["res268"];
    $res269=$_POST["res269"];
    $res270=$_POST["res270"];
    $res271=$_POST["res271"];
    $res272=$_POST["res272"];
    $res273=$_POST["res273"];
    $res274=$_POST["res274"];
    $res275=$_POST["res275"];
    $res276=$_POST["res276"];
    $res277=$_POST["res277"];
    $res278=$_POST["res278"];
    $res279=$_POST["res279"];
    $res280=$_POST["res280"];
    $res281=$_POST["res281"];
    $res282=$_POST["res282"];
    $res283=$_POST["res283"];
    $res284=$_POST["res284"];
    $res285=$_POST["res285"];
    $res286=$_POST["res286"];
    $res287=$_POST["res287"];
    $res288=$_POST["res288"];
    $res289=$_POST["res289"];
    $res290=$_POST["res290"];
    $res291=$_POST["res291"];
    $res292=$_POST["res292"];
    $res293=$_POST["res293"];
    $res294=$_POST["res294"];
    $res295=$_POST["res295"];
    $res296=$_POST["res296"];
    $res297=$_POST["res297"];
    $res298=$_POST["res298"];
    $res299=$_POST["res299"];
    $res300=$_POST["res300"];
    $res301=$_POST["res301"];
    $res302=$_POST["res302"];
    $res303=$_POST["res303"];
    $res304=$_POST["res304"];
    $res305=$_POST["res305"];
    $res306=$_POST["res306"];
    $res307=$_POST["res307"];
    $res308=$_POST["res308"];
    $res309=$_POST["res309"];
    $res310=$_POST["res310"];
    $res311=$_POST["res311"];
    $res312=$_POST["res312"];
    $res313=$_POST["res313"];
    $res314=$_POST["res314"];
    $res315=$_POST["res315"];
    $res316=$_POST["res316"];
    $res317=$_POST["res317"];
    $res318=$_POST["res318"];
    $res319=$_POST["res319"];
    $res320=$_POST["res320"];
    $res321=$_POST["res321"];
    $res322=$_POST["res322"];
    $res323=$_POST["res323"];
    $res324=$_POST["res324"];
    $res325=$_POST["res325"];
    $res326=$_POST["res326"];
    $res327=$_POST["res327"];
    $res328=$_POST["res328"];
    $res329=$_POST["res329"];
    $res330=$_POST["res330"];
    $res331=$_POST["res331"];
    $res332=$_POST["res332"];
    $res333=$_POST["res333"];
    $res334=$_POST["res334"];
    $res335=$_POST["res335"];
    $res336=$_POST["res336"];
    $res337=$_POST["res337"];
    $res338=$_POST["res338"];
    $res339=$_POST["res339"];
    $res340=$_POST["res340"];
    $res341=$_POST["res341"];
    $res342=$_POST["res342"];
    $res343=$_POST["res343"];
    $res344=$_POST["res344"];
    $res345=$_POST["res345"];
    $res346=$_POST["res346"];
    $res347=$_POST["res347"];
    $res348=$_POST["res348"];
    $res349=$_POST["res349"];
    $res350=$_POST["res350"];
    $res351=$_POST["res351"];
    $res352=$_POST["res352"];
    $res353=$_POST["res353"];
    $res354=$_POST["res354"];
    $res355=$_POST["res355"];
    $res356=$_POST["res356"];
    $res357=$_POST["res357"];
    $res358=$_POST["res358"];
    $res359=$_POST["res359"];
    $res360=$_POST["res360"];
    $res361=$_POST["res361"];
    $res362=$_POST["res362"];
    $res363=$_POST["res363"];
    $res364=$_POST["res364"];
    $res365=$_POST["res365"];
    $res366=$_POST["res366"];
    $res367=$_POST["res367"];
    $res368=$_POST["res368"];
    $res369=$_POST["res369"];
    $res370=$_POST["res370"];
    $res371=$_POST["res371"];
    $res372=$_POST["res372"];
    $res373=$_POST["res373"];
    $res374=$_POST["res374"];
    $res375=$_POST["res375"];
    $res376=$_POST["res376"];
    $res377=$_POST["res377"];
    $res378=$_POST["res378"];
    $res379=$_POST["res379"];
    $res380=$_POST["res380"];
    $res381=$_POST["res381"];
    $res382=$_POST["res382"];
    $res383=$_POST["res383"];
    $res384=$_POST["res384"];
    $res385=$_POST["res385"];
    $res386=$_POST["res386"];
    $res387=$_POST["res387"];
    $res388=$_POST["res388"];
    $res389=$_POST["res389"];
    $res390=$_POST["res390"];
    $res391=$_POST["res391"];
    $res392=$_POST["res392"];
    $res393=$_POST["res393"];
    $res394=$_POST["res394"];
    $res395=$_POST["res395"];
    $res396=$_POST["res396"];
    $res397=$_POST["res397"];
    $res398=$_POST["res398"];
    $res399=$_POST["res399"];
    $res400=$_POST["res400"];



    
    //ك س
	$s_k=0;
    $l=0;
	$b_d=0;
	
	

    $h_i=0;
    

    $h_s=0;
    
    
    $k=0;


    $f=0;
	$m_f=0;


    $s_i=0;
    

    $b_a=0;
    
	
	$b_t=0;
    
	
	
	$m_a=0;
	
	
    $d=0;
    $sex=$_POST['sex'];


  
	if($sex==1){
		$sex='ذكر';


    
		if($res1=="1"){
		
			
		}
	
		elseif($res1=="2"){
			$m_f=$m_f+1;
		}
		
	
	
		if($res2=="1"){
			
				
		}
	
		elseif($res2=="2"){
			$h_i=$h_i+1;
			$h_s=$h_s+1;
			$d=$d+1;
		}
		
	
	  
	
	
		if($res3=="1"){
			
				
		}
	
		elseif($res3=="2"){
			$h_i=$h_i+1;
			$h_s=$h_s+1;
			$b_t=$b_t+1;
		}
		
	  
	
	
		if($res4=="1"){
			$m_f=$m_f+1;
				
		}
	
		elseif($res4=="2"){
	
		}
		
	  
	
	
		if($res5=="1"){
			$d=$d+1;
				
		}
	
		elseif($res5=="2"){
	
		}
		
	  
	
	
		if($res6=="1"){
			
				
		}
	
		elseif($res6=="2"){
			$h_i=$h_i+1;
		}
		
	  
	
	
		if($res7=="1"){
			
				
		}
	
		elseif($res7=="2"){
			$h_i=$h_i+1;
			$h_s=$h_s+1;
		}
		
	  
	
	
		if($res8=="1"){
			
				
		}
	
		elseif($res8=="2"){
			$h_i=$h_i+1;
			$b_t=$b_t+1;
			$d=$d+1;
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res9=="1"){
			
				
		}
	
		elseif($res9=="2"){
			$h_i=$h_i+1;
			$h_s=$h_s+1;
			$d=$d+1;
		}
		
	  
	
	
		if($res10=="1"){
			$h_i=$h_i+1;
			$b_t=$b_t+1;
				
		}
	
		elseif($res10=="2"){
	
		}
		
	  
	
	
		if($res11=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res11=="2"){
	
		}
		
	  
	
	
		if($res12=="1"){
			
				
		}
	
		elseif($res12=="2"){
			$h_i=$h_i+1;
		}
		
	  
	
	
		if($res13=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res13=="2"){
	
		}
		
	  
	
	
		if($res14=="1"){
			$f=$f+1;
				
		}
	
		elseif($res14=="2"){
	
		}
		
	  
	
	
		if($res15=="1"){
			$s_k=$s_k+1;
			$b_t=$b_t+1;
				
		}
	
		elseif($res15=="2"){
			$l=$l+1;
	
		}
		
	  
	
	
		if($res16=="1"){
			$b_a=$b_a+1;
			$b_d=$b_d+1;
				
		}
	
		elseif($res16=="2"){
	
		}
		
	  
	
	
		if($res17=="1"){
			
				
		}
	
		elseif($res17=="2"){
			$s_k=$s_k+1;
			$f=$f+1;
		}
		
	  
	
	
		if($res18=="1"){
			
				
		}
	
		elseif($res18=="2"){
			$h_s=$h_s+1;
			$d=$d+1;
		}
		
	  
	
	
		if($res19=="1"){
			
				
		}
	
		elseif($res19=="2"){
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res20=="1"){
			
				
		}
	
		elseif($res20=="2"){
			$f=$f+1;
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res21=="1"){
			$m_a=$m_a+1;
			$b_d=$b_d+1;
				
		}
	
		elseif($res21=="2"){
	
		}
		
	  
	
	
		if($res22=="1"){
			$s_k=$s_k+1;
	
				
		}
	
		elseif($res22=="2"){
	
		}
		
	  
	
	
		if($res23=="1"){
			$h_i=$h_i+1;
			$h_s=$h_s+1;	
		}
	
		elseif($res23=="2"){
	
		}
		
	  
		
	  
	
	
		if($res24=="1"){
			$b_a=$b_a+1;
			$b_d=$b_d+1;
		}
	
		elseif($res24=="2"){
	
		}
		
	  
	
		if($res25=="1"){
			$m_f=$m_f+1;
				
		}
	
		elseif($res25=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res26=="1"){
			
				
		}
	
		elseif($res26=="2"){
			$h_i=$h_i+1;
			$b_t=$b_t+1;
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res27=="1"){
			$f=$f+1;
			$b_a=$b_a+1;	
		}
	
		elseif($res27=="2"){
	
		}
		
	  
	
	
		if($res28=="1"){
			
				
		}
	
		elseif($res28=="2"){
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res29=="1"){
			$h_s=$h_s+1;
				
		}
	
		elseif($res29=="2"){
	
		}
		
	  
	
	
		if($res30=="1"){
			
				
		}
	
		elseif($res30=="2"){
			$h_i=$h_i+1;
			
			$k=$k+1;
			$l=$l+1;
			$d=$d+1;
		}
		
	  
	
	
		if($res31=="1"){
			$f=$f+1;
				
		}
	
		elseif($res31=="2"){
	
		}
		
	  
	
	
		if($res32=="1"){
			$h_i=$h_i+1;
				$s_i=$s_i+1;
				$b_t=$b_t+1;
				$d=$d+1;
				$b_d=$b_d+1;	
		}
	
		elseif($res32=="2"){
	
		}
		
	  
	
	
		if($res33=="1"){
			$b_d=$b_d+1;
				
		}
	
		elseif($res33=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res34=="1"){
			$f=$f+1;
				
		}
	
		elseif($res34=="2"){
	
		}
		
	  
	
	
		if($res35=="1"){
			$f=$f+1;
			$b_a=$b_a+1;
			$b_d=$b_d+1;
		}
	
		elseif($res35=="2"){
	
		}
		
	  
	
	
		if($res36=="1"){
			
				
		}
	
		elseif($res36=="2"){
			$d=$d+1;
		}
		
	  
	
	
		if($res37=="1"){
			
				
		}
	
		elseif($res37=="2"){
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res38=="1"){
			
			$b_d=$b_d+1;	
		}
	
		elseif($res38=="2"){
	
		}
		
	  
	
	
		if($res39=="1"){
			
				
		}
	
		elseif($res39=="2"){
			$k=$k+1;
			$d=$d+1;
		}
		
	  
	
	
		if($res40=="1"){
			$s_k=$s_k+1;
			$f=$f+1;
				
		}
	
		elseif($res40=="2"){
	
		}
		
	  
	
	
		if($res41=="1"){
			$s_k=$s_k+1;
			$b_t=$b_t+1;
			$d=$d+1;
		}
	
		elseif($res41=="2"){
	
		}
		
	  
	
	
		if($res42=="1"){
			$f=$f+1;
			$b_d=$b_d+1;
				
		}
	
		elseif($res42=="2"){
	
		}
		
	  
	
	
		if($res43=="1"){
			$h_i=$h_i+1;
			$h_s=$h_s+1;
			$d=$d+1;
		}
	
		elseif($res43=="2"){
	
		}
		
	  
	
	
		if($res44=="1"){
			$h_i=$h_i+1;
				
		}
	
		elseif($res44=="2"){
	
		}
		
	  
	
	
		if($res45=="1"){
			
				
		}
	
		elseif($res45=="2"){
			$l=$l+1;
		}
		
	  
	
	
		if($res46=="1"){
			
				
		}
	
		elseif($res46=="2"){
			$d=$d+1;
		}
		
	  
	
	
		if($res47=="1"){
			$s_k=$s_k+1;
			$h_i=$h_i+1;
	
				
		}
	
		elseif($res47=="2"){
	
		}
		
	  
	
	
		if($res48=="1"){
			$f=$f+1;
				
		}
	
		elseif($res48=="2"){
	
		}
		
	  
	
	
		if($res49=="1"){
			$f=$f+1;
				
		}
	
		elseif($res49=="2"){
	
		}
		
	  
	
	
		if($res50=="1"){
			$f=$f+1;
				
		}
	
		elseif($res50=="2"){
		
		}
		
	  
	
	
		if($res51=="1"){
			
				
		}
	
		elseif($res51=="2"){
			$h_i=$h_i+1;
			$d=$d+1;
			$h_s=$h_s+1;
		}
		
	  
	
	
		if($res52=="1"){
			$s_k=$s_k+1;
			$d=$d+1;
				
		}
	
		elseif($res52=="2"){
	
		}
		
	  
	
	
		if($res53=="1"){
			$f=$f+1;
				
		}
	
		elseif($res53=="2"){
	
		}
		
	  
	
	
		if($res54=="1"){
			
				
		}
	
		elseif($res54=="2"){
			$f=$f+1;
		}
		
	  
	
	
		if($res55=="1"){
			
				
		}
	
		elseif($res55=="2"){
			$h_i=$h_i+1;
			$h_s=$h_s+1;
		}
		
	  
	
	
		if($res56=="1"){
			$f=$f+1;	
				
		}
	
		elseif($res56=="2"){
	
		}
		
	  
	
	
		if($res57=="1"){
			
				
		}
	
		elseif($res57=="2"){
			$s_i=$s_i+1;
			$d=$d+1;
		}
		
	  
	
	
		if($res58=="1"){
			
				
		}
	
		elseif($res58=="2"){
			$d=$d+1;
		}
		
	  
	
	
		if($res59=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res59=="2"){
	
		}
		
	  
	
	
		if($res60=="1"){
			
				
		}
	
		elseif($res60=="2"){
			$l=$l+1;
		}
		
	  
	
	
		if($res61=="1"){
			$b_d=$b_d+1;
				
		}
	
		elseif($res61=="2"){
	
		}
		
	  
	
	
		if($res62=="1"){
			$h_s=$h_s+1;
				
		}
	
		elseif($res62=="2"){
	
		}
		
	  
	
	
		if($res63=="1"){
			
				
		}
	
		elseif($res63=="2"){
			$h_s=$h_s+1;
		}
		
	  
	
	
		if($res64=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res64=="2"){
			$d=$d+1;
		}
		
	  
	
	
		if($res65=="1"){
			
				
		}
	
		elseif($res65=="2"){
			$s_k=$s_k+1;
			$f=$f+1;
		}
		
	  
	
	
		if($res66=="1"){
			$f=$f+1;	
				
		}
	
		elseif($res66=="2"){
	
		}
		
	  
	
	
		if($res67=="1"){
			$s_i=$s_i+1;
			$b_d=$b_d+1;
			$b_t=$b_t+1;
			$d=$d+1;
		}
	
		elseif($res67=="2"){
	
		}
		
	  
	
	
		if($res68=="1"){
			
				
		}
	
		elseif($res68=="2"){
			$h_s=$h_s+1;
		}
		
	  
	
	
		if($res69=="1"){
			$m_f=$m_f+1;
				
		}
	
		elseif($res69=="2"){
	
		}
		
	  
	
	
		if($res70=="1"){
			$m_f=$m_f+1;
				
		}
	
		elseif($res70=="2"){
	
		}
		
	  
	
	
		if($res71=="1"){
			
				
		}
	
		elseif($res71=="2"){
			$h_i=$h_i+1;
			$k=$k+1;
		}
		
	  
	
	
		if($res72=="1"){
			$h_s=$h_s+1;
			
				
		}
	
		elseif($res72=="2"){
	
		}
		
	  
	
	
		if($res73=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res73=="2"){
	
		}
		
	  
	
	
		if($res74=="1"){
			$m_f=$m_f+1;
				
		}
	
		elseif($res74=="2"){
	
		}
		
	  
	
	
		if($res75=="1"){
			
				
		}
	
		elseif($res75=="2"){
			$f=$f+1;
			$l=$l+1;
		}
		
	  
	
	
		if($res76=="1"){
			$s_k=$s_k+1;
			$h_i=$h_i+1;
			$b_t=$b_t+1;
				
		}
	
		elseif($res76=="2"){
	
		}
		
	  
	
	
		if($res77=="1"){
			
			$m_f=$m_f+1;
		}
	
		elseif($res77=="2"){
	
		}
		
	  
	
	
		if($res78=="1"){
			
			$m_f=$m_f+1;
		}
	
		elseif($res78=="2"){
	
		}
		
	  
	
	
		if($res79=="1"){
			
				
		}
	
		elseif($res79=="2"){
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res80=="1"){
			
				
		}
	
		elseif($res80=="2"){
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res81=="1"){
			
				
		}
	
		elseif($res81=="2"){
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res82=="1"){
			$s_i=$s_i+1;
				
		}
	
		elseif($res82=="2"){
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res83=="1"){
			
				
		}
	
		elseif($res83=="2"){
			$f=$f+1;
		}
		
	  
	
	
		if($res84=="1"){
			$b_d=$b_d+1;
				
		}
	
		elseif($res84=="2"){
	
		}
		
	  
	
	
		if($res85=="1"){
			$f=$f+1;	
				
		}
	
		elseif($res85=="2"){
	
		}
		
	  
	
	
		if($res86=="1"){
			$b_t=$b_t+1;
			$d=$d+1;
		}
	
		elseif($res86=="2"){
	
		}
		
	  
	
	
		if($res87=="1"){
			
			$m_f=$m_f+1;
		}
	
		elseif($res87=="2"){
	
		}
		
	  
	
	
		if($res88=="1"){
			
				
		}
	
		elseif($res88=="2"){
			$d=$d+1;
		}
		
	  
	
	
		if($res89=="1"){
			
				
		}
	
		elseif($res89=="2"){
			$h_i=$h_i+1;
			$k=$k+1;
			$m_f=$m_f+1;
		}
		
	  
	
	
	
		if($res90=="1"){
			
				
		}
	
		elseif($res90=="2"){
			$l=$l+1;
		}
		
	  
	
	
		if($res91=="1"){
			
				
		}
	
		elseif($res91=="2"){
			$s_i=$s_i+1;
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res92=="1"){
			
			$m_f=$m_f+1;
		}
	
		elseif($res92=="2"){
	
		}
		
	  
	
	
		if($res93=="1"){
			
				
		}
	
		elseif($res93=="2"){
			$h_i=$h_i+1;
			$b_a=$b_a+1;
		}
		
	  
	
	
		if($res94=="1"){
			$b_t=$b_t+1;
			$b_d=$b_d+1;	
				
		}
	
		elseif($res94=="2"){
	
		}
		
	  
	
	
		if($res95=="1"){
			
				
		}
	
		elseif($res95=="2"){
			$d=$d+1;
		}
		
	  
	
	
		if($res96=="1"){
			$k=$k+1;
				
		}
	
		elseif($res96=="2"){
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res97=="1"){
			$s_k=$s_k+1;
			$m_a=$m_a+1;
				
		}
	
		elseif($res97=="2"){
	
		}
		
	  
	
	
		if($res98=="1"){
			
				
		}
	
		elseif($res98=="2"){
			$d=$d+1;
		}
		
	  
	
	
		if($res99=="1"){
			
				
		}
	
		elseif($res99=="2"){
			$s_i=$s_i+1;
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res100=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res100=="2"){
	
		}
		
	  
	
	
		if($res101=="1"){
			
				
		}
	
		elseif($res101=="2"){
			$m_a=$m_a+1;
		}
		
	  
	
	
		if($res102=="1"){
			$b_t=$b_t+1;
			$b_d=$b_d+1;
				
		}
	
		elseif($res102=="2"){
	
		}
		
	  
	
	
		if($res103=="1"){
			
				
		}
	
		elseif($res103=="2"){
			$s_k=$s_k+1;
			$h_i=$h_i+1;
			$h_s=$h_s+1;
		}
		
		  
	
	
		if($res104=="1"){
			$s_k=$s_k+1;
			$d=$d+1;
				
		}
	
		elseif($res104=="2"){
	
		}
		
	  
	
	
		if($res105=="1"){
			
				
		}
	
		elseif($res105=="2"){
			$m_a=$m_a+1;
			$l=$l+1;
		}
		
	  
	
	
		if($res106=="1"){
			$b_t=$b_t+1;
			$b_d=$b_d+1;
				
		}
	
		elseif($res106=="2"){
	
		}
		
	  
	
	
		if($res107=="1"){
			
				
		}
	
		elseif($res107=="2"){
			$h_i=$h_i+1;
			$b_a=$b_a+1;
			$d=$d+1;
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res108=="1"){
			$h_s=$h_s+1;
				
		}
	
		elseif($res108=="2"){
	
		}
		
	  
	
	
		if($res109=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res109=="2"){
			$h_i=$h_i+1;
			$b_a=$b_a+1;
			
		}
		
	  
	
	
		if($res110=="1"){
			$b_a=$b_a+1;
				
		}
	
		elseif($res110=="2"){
	
		}
		
	  
	
	
		if($res111=="1"){
			$s_i=$s_i+1;	
			
		}
	
		elseif($res111=="2"){
			$m_a=$m_a+1;
			$b_a=$b_a+1;
		}
		
	  
	
	
		if($res112=="1"){
			
				
		}
	
		elseif($res112=="2"){
			$f=$f+1;
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res113=="1"){
			
				
		}
	
		elseif($res113=="2"){
			$f=$f+1;
		}
		
	  
	
	
		if($res114=="1"){
			$h_i=$h_i+1;
			$h_s=$h_s+1;
				
		}
	
		elseif($res114=="2"){
	
		}
		
	  
	
	
		if($res115=="1"){
			
				
		}
	
		elseif($res115=="2"){
			$f=$f+1;
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res116=="1"){
			
				
		}
	
		elseif($res116=="2"){
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res117=="1"){
			$s_i=$s_i+1;
				
		}
	
		elseif($res117=="2"){
	
		}
		
	  
	
	
		if($res118=="1"){
			
			$b_d=$b_d+1;		
		}
	
		elseif($res118=="2"){
	
		}
		
	  
	
	
		if($res119=="1"){
			
				
		}
	
		elseif($res119=="2"){
			$s_k=$s_k+1;
			$s_i=$s_i+1;
			$m_a=$m_a+1;
		}
		
	  
	
	
		if($res120=="1"){
			
				
		}
	
		elseif($res120=="2"){
			$m_a=$m_a+1;
			$m_f=$m_f+1;
			$l=$l+1;
		}
		
	  
	
	
		if($res121=="1"){
			$s_k=$s_k+1;
			$f=$f+1;
			$b_a=$b_a+1;
		}
	
		elseif($res121=="2"){
	
		}
		
	  
	
	
		if($res122=="1"){
			
				
		}
	
		elseif($res122=="2"){
			$b_t=$b_t+1;
			$d=$d+1;
		}
		
	  
	
	
		if($res123=="1"){
			$f=$f+1;
			$b_a=$b_a+1;	
		}
	
		elseif($res123=="2"){
	
		}
		
	  
	
	
		if($res124=="1"){
			$s_i=$s_i+1;
				
		}
	
		elseif($res124=="2"){
			$h_i=$h_i+1;
			$k=$k+1;
			$b_a=$b_a+1;
		}
		
	  
	
	
		if($res125=="1"){
			$h_s=$h_s+1;
				
		}
	
		elseif($res125=="2"){
	
		}
		
	  
	
	
		if($res126=="1"){
			
			$m_f=$m_f+1;	
		}
	
		elseif($res126=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res127=="1"){
			$b_a=$b_a+1;
			$m_a=$m_a+1;
			$b_d=$b_d+1;
		}
	
		elseif($res127=="2"){
	
		}
		
	  
	
	
		if($res128=="1"){
			
				
		}
	
		elseif($res128=="2"){
			$h_i=$h_i+1;
		}
		
	  
	
	
		if($res129=="1"){
			
				
		}
	
		elseif($res129=="2"){
			$h_i=$h_i+1;
			$k=$k+1;
		}
		
	  
	
	
		if($res130=="1"){
			$d=$d+1;
				
		}
	
		elseif($res130=="2"){
			$h_s=$h_s+1;
		}
		
	  
	
	
		if($res131=="1"){
			
				
		}
	
		elseif($res131=="2"){
			$d=$d+1;
		}
		
	  
	
	
		if($res132=="1"){
			
			$m_f=$m_f+1;
		}
	
		elseif($res132=="2"){
	
		}
		
	  
	
	
		if($res133=="1"){
			
				
		}
	
		elseif($res133=="2"){
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res134=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res134=="2"){
			$k=$k+1;
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res135=="1"){
			
				
		}
	
		elseif($res135=="2"){
			$l=$l+1;
	
		}
		
	  
	
	
		if($res136=="1"){
			
				
		}
	
		elseif($res136=="2"){
			$h_i=$h_i+1;
		}
		
	  
	
	
		if($res137=="1"){
			
				
		}
	
		elseif($res137=="2"){
			$h_i=$h_i+1;
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res138=="1"){
			$s_i=$s_i+1;
			$d=$d+1;
		}
	
		elseif($res138=="2"){
			$k=$k+1;
		}
		
	  
	
	
		if($res139=="1"){
			$f=$f+1;	
				
		}
	
		elseif($res139=="2"){
	
		}
		
	  
	
	
		if($res140=="1"){
			$m_f=$m_f+1;
				
		}
	
		elseif($res140=="2"){
	
		}
		
	  
	
	
		if($res141=="1"){
			
				
		}
	
		elseif($res141=="2"){
			$h_i=$h_i+1;
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res142=="1"){
			$b_t=$b_t+1;
			$d=$d+1;
		}
	
		elseif($res142=="2"){
			$k=$k+1;
		}
		
	  
	
	
		if($res143=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res143=="2"){
			$s_i=$s_i+1;
			
		}
		
	  
	
	
		if($res144=="1"){
			
				
		}
	
		elseif($res144=="2"){
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res145=="1"){
			
				
		}
	
		elseif($res145=="2"){
			$d=$d+1;
		}
		
	  
	
	
		if($res146=="1"){
			$f=$f+1;
				
		}
	
		elseif($res146=="2"){
	
		}
		
	  
	
	
		if($res147=="1"){
			$s_i=$s_i+1;
				
		}
	
		elseif($res147=="2"){
			$h_i=$h_i+1;
		}
		
	  
	
	
		if($res148=="1"){
			
				
		}
	
		elseif($res148=="2"){
			$k=$k+1;
			$m_a=$m_a+1;
		}
		
	  
	
	
		if($res149=="1"){
			$m_f=$m_f+1;
				
		}
	
		elseif($res149=="2"){
	
		}
		
	  
	
	
		if($res150=="1"){
			
				
		}
	
		elseif($res150=="2"){
			$l=$l+1;
		}
		
	  
	
	
		if($res151=="1"){
			$f=$f+1;	
			$b_a=$b_a+1;	
		}
	
		elseif($res151=="2"){
	
		}
		
	  
	
	
		if($res152=="1"){
			
				
		}
	
		elseif($res152=="2"){
			$b_t=$b_t+1;
			$d=$d+1;
		}
		
	  
	
	
		if($res153=="1"){
			
				
		}
	
		elseif($res153=="2"){
			$h_i=$h_i+1;
			$h_s=$h_s+1;
			$d=$d+1;
		}
		
	  
	
	
		if($res154=="1"){
			
				
		}
	
		elseif($res154=="2"){
			$d=$d+1;
		}
		
	  
	
	
		if($res155=="1"){
			
				
		}
	
		elseif($res155=="2"){
			$h_s=$h_s+1;
			$d=$d+1;
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res156=="1"){
			$s_k=$s_k+1;
			$f=$f+1;
			$m_a=$m_a+1;
		}
	
		elseif($res156=="2"){
	
		}
		
	  
	
	
		if($res157=="1"){
			$s_k=$s_k+1;
			$b_a=$b_a+1;
			$m_a=$m_a+1;
		}
	
		elseif($res157=="2"){
	
		}
		
	  
	
	
		if($res158=="1"){
			$b_a=$b_a+1;
			$d=$d+1;
		}
		
		elseif($res158=="2"){
	
		}
		
	  
	
	
		if($res159=="1"){
			$s_k=$s_k+1;
			$b_t=$b_t+1;
			$d=$d+1;
		}
	
		elseif($res159=="2"){
	
		}
		
	  
	
	
		if($res160=="1"){
			
				
		}
	
		elseif($res160=="2"){
			$h_i=$h_i+1;
			$k=$k+1;
			$d=$d+1;
		}
		
	  
	
	
		if($res161=="1"){
			$h_s=$h_s+1;	
				
		}
	
		elseif($res161=="2"){
	
		}
		
	  
	
	
		if($res162=="1"){
			
				
		}
	
		elseif($res162=="2"){
			$h_i=$h_i+1;
		}
		
	  
	
	
		if($res163=="1"){
			
				
		}
	
		elseif($res163=="2"){
			$h_i=$h_i+1;
			$h_s=$h_s+1;
		}
		
	  
	
	
		if($res164=="1"){
			
				
		}
	
		elseif($res164=="2"){
			$f=$f+1;
			$b_t=$b_t+1;
		}
		
	  
	
	
		if($res165=="1"){
			
				
		}
	
		elseif($res165=="2"){
			$l=$l+1;
		}
		
	  
	
	
		if($res166=="1"){
			
				
		}
	
		elseif($res166=="2"){
			$m_a=$m_a+1;
		}
		
	  
	
	
		if($res167=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res167=="2"){
	
		}
		
	  
	
	
		if($res168=="1"){
			$s_k=$s_k+1;
			$f=$f+1;
				
		}
	
		elseif($res168=="2"){
			
			
		}
		
	  
	
	
		if($res169=="1"){
			
				
		}
	
		elseif($res169=="2"){
			$f=$f+1;
		}
		
	  
	
	
		if($res170=="1"){
			
				
		}
	
		elseif($res170=="2"){
			$h_i=$h_i+1;
			$k=$k+1;
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res171=="1"){
			$s_i=$s_i+1;
				
		}
	
		elseif($res171=="2"){
			$k=$k+1;
			$m_a=$m_a+1;
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res172=="1"){
			$s_i=$s_i+1;
				
		}
	
		elseif($res172=="2"){
			$h_i=$h_i+1;
		}
		
	  
	
	
		if($res173=="1"){
			
				
		}
	
		elseif($res173=="2"){
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res174=="1"){
			
				
		}
	
		elseif($res174=="2"){
			$h_i=$h_i+1;
		}
		
	  
	
	
		if($res175=="1"){
			
				
		}
	
		elseif($res175=="2"){
			$h_i=$h_i+1;
			$h_s=$h_s+1;
		}
		
	  
	
	
		if($res176=="1"){
			
				
		}
	
		elseif($res176=="2"){
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res177=="1"){
			
				
		}
	
		elseif($res177=="2"){
			$s_k=$s_k+1;
			$f=$f+1;
			
		}
		
	  
	
	
		if($res178=="1"){
			
				
		}
	
		elseif($res178=="2"){
			$s_k=$s_k+1;
			$b_t=$b_t+1;
			$d=$d+1;
		}
		
	  
	
	
		if($res179=="1"){
			$s_k=$s_k+1;
			$h_i=$h_i+1;
			$m_f=$m_f+1;
				
		}
	
		elseif($res179=="2"){
	
		}
		
	  
	
	
		if($res180=="1"){
			$s_i=$s_i+1;
				
		}
	
		elseif($res180=="2"){
			$h_i=$h_i+1;
			$k=$k+1;
			$m_a=$m_a+1;
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res181=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res181=="2"){
	
		}
		
	  
	
	
		if($res182=="1"){
			$s_k=$s_k+1;
			$b_t=$b_t+1;
			$d=$d+1;	
		}
	
		elseif($res182=="2"){
	
		}
		
	  
	
	
		if($res183=="1"){
			
				
		}
	
		elseif($res183=="2"){
			$k=$k+1;
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res184=="1"){
			$f=$f+1;	
				
		}
	
		elseif($res184=="2"){
	
		}
		
	  
	
	
		if($res185=="1"){
			
				
		}
	
		elseif($res185=="2"){
			$f=$f+1;
		}
		
	  
	
	
		if($res186=="1"){
			$h_i=$h_i+1;
				
		}
	
		elseif($res186=="2"){
	
		}
		
	  
	
	
		if($res187=="1"){
			$m_f=$m_f+1;
				
		}
	
		elseif($res187=="2"){
			$s_k=$s_k+1;
	
		}
		
	  
	
	
		if($res188=="1"){
			
				
		}
	
		elseif($res188=="2"){
			$h_i=$h_i+1;
			$h_s=$h_s+1;
		}
		
	  
	
	
		if($res189=="1"){
			$h_i=$h_i+1;
			$h_s=$h_s+1;
			$b_t=$b_t+1;
			$d=$d+1;		
		}
	
		elseif($res189=="2"){
	
		}
		
	  
	
	
		if($res190=="1"){
			
				
		}
	
		elseif($res190=="2"){
			$h_i=$h_i+1;
			$h_s=$h_s+1;
		}
		
	  
	
	
		if($res191=="1"){
			
				
		}
	
		elseif($res191=="2"){
			$d=$d+1;
		}
		
	  
	
	
		if($res192=="1"){
			
				
		}
	
		elseif($res192=="2"){
			$s_k=$s_k+1;
			$h_i=$h_i+1;
			$h_s=$h_s+1;
		}
		
	  
	
	
		if($res193=="1"){
			$d=$d+1;
				
		}
	
		elseif($res193=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res194=="1"){
			$s_k=$s_k+1;
			$m_a=$m_a+1;
				
		}
	
		elseif($res194=="2"){
	
		}
		
	  
	
	
		if($res195=="1"){
			
				
		}
	
		elseif($res195=="2"){
			$l=$l+1;
		}
		
	  
	
	
		if($res196=="1"){
			
				
		}
	
		elseif($res196=="2"){
			$s_k=$s_k+1;
			$f=$f+1;
		}
		
	  
	
	
		if($res197=="1"){
			$f=$f+1;
				
		}
	
		elseif($res197=="2"){
	
		}
		
	  
	
	
		if($res198=="1"){
			
				
		}
	
		elseif($res198=="2"){
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res199=="1"){
			
				
		}
	
		elseif($res199=="2"){
			$f=$f+1;
		}
		
	  
	
	
		if($res200=="1"){
			$f=$f+1;
				
		}
	
		elseif($res200=="2"){
	
		}
		
	  
	
	
		if($res201=="1"){
			$s_i=$s_i+1;
				
		}
	
		elseif($res201=="2"){
			$h_i=$h_i+1;
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res202=="1"){
			$s_k=$s_k+1;
			$f=$f+1;
			$b_a=$b_a+1;	
		}
	
		elseif($res202=="2"){
	
		}
		
	  
	
	
		if($res203=="1"){
			
			$m_f=$m_f+1;
		}
	
		elseif($res203=="2"){
	
		}
		
	  
	
	
		if($res204=="1"){
			
			$m_f=$m_f+1;
		}
	
		elseif($res204=="2"){
	
		}
		
	  
	
	
		if($res205=="1"){
			$f=$f+1;	
				
		}
	
		elseif($res205=="2"){
	
		}
		
	  
	
	
		if($res206=="1"){
			$f=$f+1;	
				
		}
	
		elseif($res206=="2"){
	
		}
		
	  
	
	
		if($res207=="1"){
			
				
		}
	
		elseif($res207=="2"){
			$d=$d+1;
		}
		
	  
	
	
		if($res208=="1"){
			
				
		}
	
		elseif($res208=="2"){
			$s_i=$s_i+1;
			$d=$d+1;
		}
		
	  
	
	
		if($res209=="1"){
			$f=$f+1;	
				
		}
	
		elseif($res209=="2"){
	
		}
		
	  
	
	
		if($res210=="1"){
			$s_k=$s_k+1;
			$f=$f+1;
				
		}
	
		elseif($res210=="2"){
	
		}
		
	  
	
	
		if($res211=="1"){
			$f=$f+1;	
				
		}
	
		elseif($res211=="2"){
	
		}
		
	  
	
	
		if($res212=="1"){
			$s_k=$s_k+1;
			$m_a=$m_a+1;
				
		}
	
		elseif($res212=="2"){
	
		}
		
	  
	
	
		if($res213=="1"){
			
				
		}
	
		elseif($res213=="2"){
			$h_i=$h_i+1;
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res214=="1"){
			
				
		}
	
		elseif($res214=="2"){
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res215=="1"){
			$f=$f+1;	
			$b_d=$b_d+1;
		}
	
		elseif($res215=="2"){
	
		}
		
	  
	
	
		if($res216=="1"){
			$b_d=$b_d+1;
				
		}
	
		elseif($res216=="2"){
	
		}
		
	  
	
	
		if($res217=="1"){
			$b_t=$b_t+1;
			$m_f=$m_f+1;
		}
	
		elseif($res217=="2"){
			$k=$k+1;
		}
		
	  
	
	
		if($res218=="1"){
			$f=$f+1;	
				
		}
	
		elseif($res218=="2"){
	
		}
		
	  
	
	
		if($res219=="1"){
			
				
		}
	
		elseif($res219=="2"){
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res220=="1"){
			
				
		}
	
		elseif($res220=="2"){
			$s_k=$s_k+1;
			$f=$f+1;
		}
		
	  
	
	
		if($res221=="1"){
			
				
		}
	
		elseif($res221=="2"){
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res222=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res222=="2"){
	
		}
		
	  
	
	
		if($res223=="1"){
			
				
		}
	
		elseif($res223=="2"){
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res224=="1"){
			
			$b_d=$b_d+1;
		}
	
		elseif($res224=="2"){
	
		}
		
	  
	
	
		if($res225=="1"){
			
				
		}
	
		elseif($res225=="2"){
			$l=$l+1;
		}
		
	  
	
	
		if($res226=="1"){
			$m_a=$m_a+1;
			$m_f=$m_f+1;
		}
	
		elseif($res226=="2"){
	
		}
		
	  
	
	
		if($res227=="1"){
			$f=$f+1;	
				
		}
	
		elseif($res227=="2"){
	
		}
		
	  
	
	
		if($res228=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res228=="2"){
	
		}
		
	  
	
	
		if($res229=="1"){
			
				
		}
	
		elseif($res229=="2"){
			$s_i=$s_i+1;
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res230=="1"){
			
				
		}
	
		elseif($res230=="2"){
			$h_i=$h_i+1;
			$h_s=$h_s+1;
			
		}
		
	  
	
	
		if($res231=="1"){
			
			$m_f=$m_f+1;
		}
	
		elseif($res231=="2"){
			$s_i=$s_i+1;
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res232=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res232=="2"){
	
		}
		
	  
	
	
		if($res233=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res233=="2"){
			$d=$d+1;
		}
		
	  
	
	
		if($res234=="1"){
			
				
		}
	
		elseif($res234=="2"){
			$h_i=$h_i+1;
			$k=$k+1;
		}
		
	  
	
	
		if($res235=="1"){
			
				
		}
	
		elseif($res235=="2"){
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res236=="1"){
			$s_i=$s_i+1;	
			$d=$d+1;	
		}
	
		elseif($res236=="2"){
	
		}
		
	  
	
	
		if($res237=="1"){
			
				
		}
	
		elseif($res237=="2"){
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res238=="1"){
			$s_k=$s_k+1;
			$h_i=$h_i+1;
	
				
		}
	
		elseif($res238=="2"){
	
		}
		
	  
	
	
		if($res239=="1"){
			
			$m_f=$m_f+1;
			$b_d=$b_d+1;
		}
	
		elseif($res239=="2"){
	
		}
		
	  
	
	
		if($res240=="1"){
			$m_a=$m_a+1;	
				
		}
	
		elseif($res240=="2"){
	
		}
		
	  
	
	
		if($res241=="1"){
			$s_k=$s_k+1;
	
				
		}
	
		elseif($res241=="2"){
			$d=$d+1;
		}
		
	  
	
	
		if($res242=="1"){
			
				
		}
	
		elseif($res242=="2"){
			$d=$d+1;
		}
		
	  
	
	
		if($res243=="1"){
			
				
		}
	
		elseif($res243=="2"){
			$h_i=$h_i+1;
			$h_s=$h_s+1;
		}
		
	  
	
	
		if($res244=="1"){
			$b_d=$b_d+1;
				
		}
	
		elseif($res244=="2"){
	
		}
		
	  
	
	
		if($res245=="1"){
			$f=$f+1;
			$b_d=$b_d+1;
				
		}
	
		elseif($res245=="2"){
	
		}
		
	  
	
	
		if($res246=="1"){
			$f=$f+1;	
				
		}
	
		elseif($res246=="2"){
	
		}
		
	  
	
	
		if($res247=="1"){
			$f=$f+1;
				
		}
	
		elseif($res247=="2"){
	
		}
		
	  
	
	
		if($res248=="1"){
			
				
		}
	
		elseif($res248=="2"){
			$d=$d+1;
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res249=="1"){
			
				
		}
	
		elseif($res249=="2"){
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res250=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res250=="2"){
	
		}
		
	  
	
	
		if($res251=="1"){
			$s_k=$s_k+1;
			$m_a=$m_a+1;
				
		}
	
		elseif($res251=="2"){
	
		}
		
	  
	
	
		if($res252=="1"){
			
			$f=$f+1;
				
		}
	
		elseif($res252=="2"){
	
		}
		
	  
	
	
		if($res253=="1"){
			$h_i=$h_i+1;
				
		}
	
		elseif($res253=="2"){
	
		}
		
	  
	
	
		if($res254=="1"){
			
				
		}
	
		elseif($res254=="2"){
			$s_i=$s_i+1;
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res255=="1"){
			
				
		}
	
		elseif($res255=="2"){
			$l=$l+1;
		}
		
	  
	
	
		if($res256=="1"){
			$f=$f+1;
				
		}
	
		elseif($res256=="2"){
	
		}
		
	  
	
	
		if($res257=="1"){
			
				
		}
	
		elseif($res257=="2"){
			$f=$f+1;
		}
		
	  
	
	
		if($res258=="1"){
			
				
		}
	
		elseif($res258=="2"){
			$f=$f+1;
		}
		
	  
	
	
		if($res259=="1"){
			$s_k=$s_k+1;
			$d=$d+1;
				
		}
	
		elseif($res259=="2"){
	
		}
		
	  
	
	
		if($res260=="1"){
			
				
		}
	
		elseif($res260=="2"){
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res261=="1"){
			
			$m_f=$m_f+1;
		}
	
		elseif($res261=="2"){
	
		}
		
	  
	
	
		if($res262=="1"){
			
				
		}
	
		elseif($res262=="2"){
			$s_i=$s_i+1;
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res263=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res263=="2"){
			$d=$d+1;
		}
		
	  
	
	
		if($res264=="1"){
			
				
		}
	
		elseif($res264=="2"){
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res265=="1"){
			
				
		}
	
		elseif($res265=="2"){
			$h_i=$h_i+1;
		}
		
	  
	
	
		if($res266=="1"){
			$s_k=$s_k+1;
	
				
		}
	
		elseif($res266=="2"){
	
		}
		
	  
	
	
		if($res267=="1"){
			$s_i=$s_i+1;
				
		}
	
		elseif($res267=="2"){
			$h_i=$h_i+1;
			$b_d=$b_d+1;
			$k=$k+1;
			$m_a=$m_a+1;
		}
		
	  
	
	
		if($res268=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res268=="2"){
			$b_a=$b_a+1;
		}
		
	  
	
	
		if($res269=="1"){
			$f=$f+1;	
				
		}
	
		elseif($res269=="2"){
	
		}
		
	  
	
	
		if($res270=="1"){
			
				
		}
	
		elseif($res270=="2"){
			$d=$d+1;
		}
		
	  
	
	
		if($res271=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res271=="2"){
			$d=$d+1;
		}
		
	  
	
	
		if($res272=="1"){
			
				
		}
	
		elseif($res272=="2"){
			$k=$k+1;
			$f=$f+1;
			$d=$d+1;
		}
		
	  
	
	
		if($res273=="1"){
			$s_k=$s_k+1;
			$h_s=$h_s+1;
	
				
		}
	
		elseif($res273=="2"){
	
		}
		
	  
	
	
		if($res274=="1"){
			
				
		}
	
		elseif($res274=="2"){
			$h_i=$h_i+1;
			$h_s=$h_s+1;
		}
		
	  
	
	
		if($res275=="1"){
			$f=$f+1;	
			$b_a=$b_a+1;	
		}
	
		elseif($res275=="2"){
	
		}
		
	  
	
	
		if($res276=="1"){
			
				
		}
	
		elseif($res276=="2"){
			$s_k=$s_k+1;
			$f=$f+1;
		}
		
	  
	
	
		if($res277=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res277=="2"){
	
		}
		
	  
	
	
		if($res278=="1"){
			$s_i=$s_i+1;
			$m_f=$m_f+1;
		}
	
		elseif($res278=="2"){
	
		}
		
	  
	
	
		if($res279=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res279=="2"){
			$h_i=$h_i+1;
			
		}
		
	  
	  
	
	
		if($res280=="1"){
			
				
		}
	
		elseif($res280=="2"){
			
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res281=="1"){
			
				
		}
	
		elseif($res281=="2"){
			$s_k=$s_k+1;
			$h_s=$h_s+1;
			$s_i=$s_i+1;
			$b_a=$b_a+1;
		}
		
	  
	
	
		if($res282=="1"){
			$s_k=$s_k+1;
			$m_f=$m_f+1;
		}
	
		elseif($res282=="2"){
	
		}
		
	  
	
	
		if($res283=="1"){
			
				
		}
	
		elseif($res283=="2"){
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res284=="1"){
			$b_a=$b_a+1;
			$b_d=$b_d+1;
				
		}
	
		elseif($res284=="2"){
	
		}
		
	  
	
	
		if($res285=="1"){
			
				
		}
	
		elseif($res285="2"){
			$d=$d+1;
			$l=$l+1;
		}
		
	  
	
	
		if($res286=="1"){
			$f=$f+1;
				
		}
	
		elseif($res286=="2"){
	
		}
		
	  
	
	
		if($res287=="1"){
			
				
		}
	
		elseif($res287=="2"){
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res288=="1"){
			$f=$f+1;	
			$d=$d+1;
		}
	
		elseif($res288=="2"){
	
		}
		
	  
	
	
		if($res289=="1"){
			
				
		}
	
		elseif($res289=="2"){
			$h_i=$h_i+1;
			$m_a=$m_a+1;
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res290=="1"){
			$d=$d+1;
				
		}
	
		elseif($res290=="2"){
	
		}
		
	  
	
	
		if($res291=="1"){
			$s_k=$s_k+1;
			$f=$f+1;
			$b_a=$b_a+1;	
		}
	
		elseif($res291=="2"){
	
		}
		
	  
	
	
		if($res292=="1"){
			$s_i=$s_i+1;
				
		}
	
		elseif($res292=="2"){
			$h_i=$h_i+1;
		}
		
	  
	
	
		if($res293=="1"){
			$f=$f+1;
			$b_a=$b_a+1;	
		}
	
		elseif($res293=="2"){
	
		}
		
	  
	
	
		if($res294=="1"){
			
				
		}
	
		elseif($res294=="2"){
			$b_a=$b_a+1;
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res295=="1"){
			
			$m_f=$m_f+1;
		}
	
		elseif($res295=="2"){
	
		}
		
	  
	
	
		if($res296=="1"){
			
				
		}
	
		elseif($res296=="2"){
			$k=$k+1;
			$s_i=$s_i+1;
			$d=$d+1;
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res297=="1"){
			$s_k=$s_k+1;
	
			$m_f=$m_f+1;
		}
	
		elseif($res297=="2"){
	
		}
		
	  
	
	
		if($res298=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res298=="2"){
	
		}
		
	  
	
	
		if($res299=="1"){
			
				
		}
	
		elseif($res299=="2"){
	
		}
		
	
	
		if($res300=="1"){
			
				
		}
	
		elseif($res300=="2"){
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res301=="1"){
			$s_k=$s_k+1;
			$b_t=$b_t+1;
				
		}
	
		elseif($res301=="2"){
	
		}
		
	  
	
	
		if($res302=="1"){
			
				
		}
	
		elseif($res302=="2"){
			$s_k=$s_k+1;
	
		}
		
	  
	
	
		if($res303=="1"){
			$s_k=$s_k+1;
	
				
		}
	
		elseif($res303=="2"){
	
		}
		
	  
	
	
		if($res304=="1"){
			$s_i=$s_i+1;
			$b_t=$b_t+1;		
		}
	
		elseif($res304=="2"){
	
		}
		
	  
	
	
		if($res305=="1"){
			$b_a=$b_a+1;	
				
		}
	
		elseif($res305=="2"){
	
		}
		
	  
	
	
		if($res306=="1"){
			
				
		}
	
		elseif($res306=="2"){
			$s_k=$s_k+1;
	
		}
		
	  
	
	
		if($res307=="1"){
			$s_k=$s_k+1;
				
		}
	
		elseif($res307=="2"){
	
		}
		
	  
	
	
		if($res308=="1"){
			$s_k=$s_k+1;
	
				
		}
	
		elseif($res308=="2"){
	
		}
		
	  
	
	
		if($res309=="1"){
			
				
		}
	
		elseif($res309=="2"){
			$s_k=$s_k+1;
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res310=="1"){
			
				
		}
	
		elseif($res310=="2"){
			$s_k=$s_k+1;
	
		}
		
	  
	
	
		if($res311=="1"){
			$s_k=$s_k+1;
	
				
		}
	
		elseif($res311=="2"){
	
		}
		
	  
	
	
		if($res312=="1"){
			$s_k=$s_k+1;
	
				
		}
	
		elseif($res312=="2"){
	
		}
		
	  
	
	
		if($res313=="1"){
			
				
		}
	
		elseif($res313=="2"){
			$b_a=$b_a+1;
		}
		
	  
	
	
		if($res314=="1"){
			$b_a=$b_a+1;
				
		}
	
		elseif($res314=="2"){
	
		}
		
	  
	
	
		if($res315=="1"){
			$s_k=$s_k+1;
	
				
		}
	
		elseif($res315=="2"){
	
		}
		
	  
	
	
		if($res316=="1"){
			$s_i=$s_i+1;
				
		}
	
		elseif($res316=="2"){
			$k=$k+1;
			$b_a=$b_a+1;
		}
		
	  
	
	
		if($res317=="1"){
			$b_a=$b_a+1;
				
		}
	
		elseif($res317=="2"){
	
		}
		
	  
	
	
		if($res318=="1"){
			
				
		}
	
		elseif($res318=="2"){
			$s_k=$s_k+1;
	
		}
		
	  
	
	
		if($res319=="1"){
			
				
		}
	
		elseif($res319=="2"){
			$b_a=$b_a+1;
		}
		
	  
	
	
		if($res320=="1"){
			$s_k=$s_k+1;
	
				
		}
	
		elseif($res320=="2"){
	
		}
		
	  
	
	
		if($res321=="1"){
			$s_i=$s_i+1;	
			$b_t=$b_t+1;	
		}
	
		elseif($res321=="2"){
	
		}
		
	  
	
	
		if($res322=="1"){
			
				
		}
	
		elseif($res322=="2"){
			$s_k=$s_k+1;
			$k=$k+1;
	
		}
		
	  
	
	
		if($res323=="1"){
			$s_k=$s_k+1;
				
		}
	
		elseif($res323=="2"){
			
	
		}
		
	  
	
	
		if($res324=="1"){
			
			$s_k=$s_k+1;	
		}
	
		elseif($res324=="2"){
			
	
		}
		
	  
	
	
		if($res325=="1"){
			$s_k=$s_k+1;
				
		}
	
		elseif($res325=="2"){
		
	
		}
		
	  
	
	
		if($res326=="1"){
			$b_a=$b_a+1;
				
		}
	
		elseif($res326=="2"){
	
		}
		
	  
	
	
		if($res327=="1"){
			
				
		}
	
		elseif($res327=="2"){
			$b_a=$b_a+1;
		}
		
	  
	
	
		if($res328=="1"){
			$s_k=$s_k+1;
				
		}
	
		elseif($res328=="2"){
			
	
		}
		
	  
	
	
		if($res329=="1"){
			
				
		}
	
		elseif($res329=="2"){
			$b_t=$b_t+1;
		}
		
	  
	
	
		if($res330=="1"){
			
				
		}
	
		elseif($res330=="2"){
			$s_k=$s_k+1;
	
		}
		
	  
	
	
		if($res331=="1"){
			$s_k=$s_k+1;
				
		}
	
		elseif($res331=="2"){
			
	
		}
		
	  
	
	
		if($res332=="1"){
			$s_i=$s_i+1;
			$s_k=$s_k+1;
				
		}
	
		elseif($res332=="2"){
			
	
		}
		
	  
	
	
		if($res333=="1"){
			
			$s_k=$s_k+1;
				
		}
	
		elseif($res333=="2"){
			
	
		}
		
	  
	
	
		if($res334=="1"){
			
			$s_k=$s_k+1;	
		}
	
		elseif($res334=="2"){
			
	
		}
		
	  
	
	
		if($res335=="1"){
			$s_k=$s_k+1;
				
		}
	
		elseif($res335=="2"){
			
	
		}
		
	  
	
	
		if($res336=="1"){
			$s_i=$s_i+1;
			$b_t=$b_t+1;	
		}
	
		elseif($res336=="2"){
	
		}
		
	  
	
	
		if($res337=="1"){
			$b_t=$b_t+1;
				
		}
	
		elseif($res337=="2"){
	
		}
		
	  
	
	
		if($res338=="1"){
			$b_a=$b_a+1;	
				
		}
	
		elseif($res338=="2"){
	
		}
		
	  
	
	
		if($res339=="1"){
			$s_k=$s_k+1;
				
		}
	
		elseif($res339=="2"){
		
	
		}
		
	  
	
	
		if($res340=="1"){
			$b_t=$b_t+1;
			
		}
	
		elseif($res340=="2"){
	
		}
		
	  
	
	
		if($res341=="1"){
			$s_k=$s_k+1;
			$b_a=$b_a+1;
				
		}
	
		elseif($res341=="2"){
	
		}
		
	  
	
	
		if($res342=="1"){
			$s_i=$s_i+1;	
			$b_t=$b_t+1;	
		}
	
		elseif($res342=="2"){
	
		}
		
	  
	
	
		if($res343=="1"){
			$b_t=$b_t+1;
				
		}
	
		elseif($res343=="2"){
	
		}
		
	  
	
	
		if($res344=="1"){
			$b_t=$b_t+1;
				
		}
	
		elseif($res344=="2"){
	
		}
		
	  
	
	
		if($res345=="1"){
			$s_k=$s_k+1;
	
				
		}
	
		elseif($res345=="2"){
	
		}
		
	  
	
	
		if($res346=="1"){
			$b_t=$b_t+1;
				
		}
	
		elseif($res346=="2"){
	
		}
		
	  
	
	
		if($res347=="1"){
			
				
		}
	
		elseif($res347=="2"){
			$b_a=$b_a+1;
		}
		
	  
	
	
		if($res348=="1"){
			
				
		}
	
		elseif($res348=="2"){
			$b_a=$b_a+1;
		}
		
	  
	
	
		if($res349=="1"){
			$s_k=$s_k+1;
			$b_t=$b_t+1;
				
		}
	
		elseif($res349=="2"){
	
		}
		
	  
	
	
		if($res350=="1"){
			$s_k=$s_k+1;
	
				
		}
	
		elseif($res350=="2"){
	
		}
		
	  
	
	
		if($res351=="1"){
			$b_t=$b_t+1;	
				
		}
	
		elseif($res351=="2"){
	
		}
		
	  
	
	
		if($res352=="1"){
			$s_k=$s_k+1;
			$b_t=$b_t+1;
				
		}
	
		elseif($res352=="2"){
	
		}
		
	  
	
	
		if($res353=="1"){
			
				
		}
	
		elseif($res353=="2"){
			$s_i=$s_i+1;
			$b_t=$b_t+1;
		}
		
	  
	
	
		if($res354=="1"){
			$s_k=$s_k+1;
	
				
		}
	
		elseif($res354=="2"){
	
		}
		
	  
	
	
		if($res355=="1"){
			$s_k=$s_k+1;
	
				
		}
	
		elseif($res355=="2"){
	
		}
		
	  
	
	
		if($res356=="1"){
			$s_k=$s_k+1;
			$b_t=$b_t+1;
				
		}
	
		elseif($res356=="2"){
	
		}
		
	  
	
	
		if($res357=="1"){
			$s_i=$s_i+1;
			$b_t=$b_t+1;	
		}
	
		elseif($res357=="2"){
	
		}
		
	  
	
	
		if($res358=="1"){
			$b_t=$b_t+1;
				
		}
	
		elseif($res358=="2"){
	
		}
		
	  
	
	
		if($res359=="1"){
			$b_t=$b_t+1;
				
		}
	
		elseif($res359=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res360=="1"){
			$s_k=$s_k+1;
			$b_t=$b_t+1;
				
		}
	
		elseif($res360=="2"){
	
		}
		
	  
	
	
		if($res361=="1"){
			$b_t=$b_t+1;	
				
		}
	
		elseif($res361=="2"){
	
		}
		
	  
	
	
		if($res362=="1"){
			$b_t=$b_t+1;	
				
		}
	
		elseif($res362=="2"){
	
		}
		
	  
	
	
		if($res363=="1"){
			$s_k=$s_k+1;
	
				
		}
	
		elseif($res363=="2"){
	
		}
		
	  
	
	
		if($res364=="1"){
			$s_k=$s_k+1;
			$b_a=$b_a+1;
				
		}
	
		elseif($res364=="2"){
	
		}
		
	  
	
	
		if($res365=="1"){
			$b_a=$b_a+1;
				
		}
	
		elseif($res365=="2"){
	
		}
		
	  
	
	
		if($res366=="1"){
			$s_k=$s_k+1;
			$b_t=$b_t+1;
				
		}
	
		elseif($res366=="2"){
	
		}
		
	  
	
	
		if($res367=="1"){
			
				
		}
	
		elseif($res367=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res368=="1"){
			
				
		}
	
		elseif($res368=="2"){
			$k=$k+1;
		}
		
	  
	
	
		if($res369=="1"){
			$s_i=$s_i+1;
				
		}
	
		elseif($res369=="2"){
	
		}
		
	  
	
	
		if($res370=="1"){
			
				
		}
	
		elseif($res370=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res371=="1"){
			
				
		}
	
		elseif($res371=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res372=="1"){
			$s_i=$s_i+1;
				
		}
	
		elseif($res372=="2"){
	
		}
		
	  
	
	
		if($res373=="1"){
			$s_i=$s_i+1;	
				
		}
	
		elseif($res373=="2"){
	
		}
		
	  
	
	
		if($res374=="1"){
			
				
		}
	
		elseif($res374=="2"){
			$k=$k+1;
		}
		
	  
	
	
		if($res375=="1"){
			
				
		}
	
		elseif($res375=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res376=="1"){
			
				
		}
	
		elseif($res376=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res377=="1"){
			$s_i=$s_i+1;	
				
		}
	
		elseif($res377=="2"){
	
		}
		
	  
	
	
		if($res378=="1"){
			
				
		}
	
		elseif($res378=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res379=="1"){
			
				
		}
	
		elseif($res379=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res380=="1"){
			
				
		}
	
		elseif($res380=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res381=="1"){
			$s_i=$s_i+1;
				
		}
	
		elseif($res381=="2"){
	
		}
		
	  
	
	
		if($res382=="1"){
			
				
		}
	
		elseif($res382=="2"){
			$k=$k+1;
		}
		
	  
	
	
		if($res383=="1"){
			$s_i=$s_i+1;	
				
		}
	
		elseif($res383=="2"){
			$k=$k+1;
		}
		
	  
	
	
		if($res384=="1"){
			
				
		}
	
		elseif($res384=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res385=="1"){
			
				
		}
	
		elseif($res385=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res386=="1"){
			$s_i=$s_i+1;	
				
		}
	
		elseif($res386=="2"){
	
		}
		
	  
	
	
		if($res387=="1"){
			
				
		}
	
		elseif($res387=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res388=="1"){
			$s_i=$s_i+1;	
				
		}
	
		elseif($res388=="2"){
	
		}
		
	  
	
	
		if($res389=="1"){
			
				
		}
	
		elseif($res389=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res390=="1"){
			$s_i=$s_i+1;	
				
		}
	
		elseif($res390=="2"){
	
		}
		
	  
	
	
		if($res391=="1"){
			
				
		}
	
		elseif($res391=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res392=="1"){
			
				
		}
	
		elseif($res392=="2"){
			$k=$k+1;
		}
		
	  
	
	
		if($res393=="1"){
			
				
		}
	
		elseif($res393=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res394=="1"){
			
				
		}
	
		elseif($res394=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res395=="1"){
			
				
		}
	
		elseif($res395=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res396=="1"){
			$s_i=$s_i+1;	
				
		}
	
		elseif($res396=="2"){
	
		}
		
	  
	
	
		if($res397=="1"){
			
				
		}
	
		elseif($res397=="2"){
			$k=$k+1;
		}
		
	  
	
	
		if($res398=="1"){
			$s_i=$s_i+1;
				
		}
	
		elseif($res398=="2"){
			$k=$k+1;
		}
		
	  
	
	
		if($res399=="1"){
			
				
		}
	
		elseif($res399=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res400=="1"){
			
				
		}
	
		elseif($res400=="2"){
	
		}
		


	}


	if($sex==2){
		
		$sex='انثى';

    
		if($res1=="1"){
		
			
		}
	
		elseif($res1=="2"){
			$m_f=$m_f+1;
		}
		
	
	
		if($res2=="1"){
			
				
		}
	
		elseif($res2=="2"){
			$h_i=$h_i+1;
			$h_s=$h_s+1;
			$d=$d+1;
		}
		
	
	  
	
	
		if($res3=="1"){
			
				
		}
	
		elseif($res3=="2"){
			$h_i=$h_i+1;
			$h_s=$h_s+1;
			$b_t=$b_t+1;
		}
		
	  
	
	
		if($res4=="1"){
			$m_f=$m_f+1;
				
		}
	
		elseif($res4=="2"){
	
		}
		
	  
	
	
		if($res5=="1"){
			$d=$d+1;
				
		}
	
		elseif($res5=="2"){
	
		}
		
	  
	
	
		if($res6=="1"){
			
				
		}
	
		elseif($res6=="2"){
			$h_i=$h_i+1;
		}
		
	  
	
	
		if($res7=="1"){
			
				
		}
	
		elseif($res7=="2"){
			$h_i=$h_i+1;
			$h_s=$h_s+1;
		}
		
	  
	
	
		if($res8=="1"){
			
				
		}
	
		elseif($res8=="2"){
			$h_i=$h_i+1;
			$b_t=$b_t+1;
			$d=$d+1;
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res9=="1"){
			
				
		}
	
		elseif($res9=="2"){
			$h_i=$h_i+1;
			$h_s=$h_s+1;
			$d=$d+1;
		}
		
	  
	
	
		if($res10=="1"){
			$h_i=$h_i+1;
			$b_t=$b_t+1;
				
		}
	
		elseif($res10=="2"){
	
		}
		
	  
	
	
		if($res11=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res11=="2"){
	
		}
		
	  
	
	
		if($res12=="1"){
			
				
		}
	
		elseif($res12=="2"){
			$h_i=$h_i+1;
		}
		
	  
	
	
		if($res13=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res13=="2"){
	
		}
		
	  
	
	
		if($res14=="1"){
			$f=$f+1;
				
		}
	
		elseif($res14=="2"){
	
		}
		
	  
	
	
		if($res15=="1"){
			$s_k=$s_k+1;
			$b_t=$b_t+1;
				
		}
	
		elseif($res15=="2"){
			$l=$l+1;
	
		}
		
	  
	
	
		if($res16=="1"){
			$b_a=$b_a+1;
			$b_d=$b_d+1;
				
		}
	
		elseif($res16=="2"){
	
		}
		
	  
	
	
		if($res17=="1"){
			
				
		}
	
		elseif($res17=="2"){
			$s_k=$s_k+1;
			$f=$f+1;
		}
		
	  
	
	
		if($res18=="1"){
			
				
		}
	
		elseif($res18=="2"){
			$h_s=$h_s+1;
			$d=$d+1;
		}
		
	  
	
	
		if($res19=="1"){
			
				
		}
	
		elseif($res19=="2"){
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res20=="1"){
			
				
		}
	
		elseif($res20=="2"){
			$f=$f+1;
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res21=="1"){
			$m_a=$m_a+1;
			$b_d=$b_d+1;
				
		}
	
		elseif($res21=="2"){
	
		}
		
	  
	
	
		if($res22=="1"){
			$s_k=$s_k+1;
	
				
		}
	
		elseif($res22=="2"){
	
		}
		
	  
	
	
		if($res23=="1"){
			$h_i=$h_i+1;
			$h_s=$h_s+1;	
		}
	
		elseif($res23=="2"){
	
		}
		
	  
		
	  
	
	
		if($res24=="1"){
			$b_a=$b_a+1;
			$b_d=$b_d+1;
		}
	
		elseif($res24=="2"){
	
		}
		
	  
	
		if($res25=="1"){
			$m_f=$m_f+1;
				
		}
	
		elseif($res25=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res26=="1"){
			
				
		}
	
		elseif($res26=="2"){
			$h_i=$h_i+1;
			$b_t=$b_t+1;
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res27=="1"){
			$f=$f+1;
			$b_a=$b_a+1;	
		}
	
		elseif($res27=="2"){
	
		}
		
	  
	
	
		if($res28=="1"){
			
				
		}
	
		elseif($res28=="2"){
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res29=="1"){
			$h_s=$h_s+1;
				
		}
	
		elseif($res29=="2"){
	
		}
		
	  
	
	
		if($res30=="1"){
			
				
		}
	
		elseif($res30=="2"){
			$h_i=$h_i+1;
			
			$k=$k+1;
			$l=$l+1;
			$d=$d+1;
		}
		
	  
	
	
		if($res31=="1"){
			$f=$f+1;
				
		}
	
		elseif($res31=="2"){
	
		}
		
	  
	
	
		if($res32=="1"){
			$h_i=$h_i+1;
				$s_i=$s_i+1;
				$b_t=$b_t+1;
				$d=$d+1;
				$b_d=$b_d+1;	
		}
	
		elseif($res32=="2"){
	
		}
		
	  
	
	
		if($res33=="1"){
			$b_d=$b_d+1;
				
		}
	
		elseif($res33=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res34=="1"){
			$f=$f+1;
				
		}
	
		elseif($res34=="2"){
	
		}
		
	  
	
	
		if($res35=="1"){
			$f=$f+1;
			$b_a=$b_a+1;
			$b_d=$b_d+1;
		}
	
		elseif($res35=="2"){
	
		}
		
	  
	
	
		if($res36=="1"){
			
				
		}
	
		elseif($res36=="2"){
			$d=$d+1;
		}
		
	  
	
	
		if($res37=="1"){
			
				
		}
	
		elseif($res37=="2"){
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res38=="1"){
			
			$b_d=$b_d+1;	
		}
	
		elseif($res38=="2"){
	
		}
		
	  
	
	
		if($res39=="1"){
			
				
		}
	
		elseif($res39=="2"){
			$k=$k+1;
			$d=$d+1;
		}
		
	  
	
	
		if($res40=="1"){
			$s_k=$s_k+1;
			$f=$f+1;
				
		}
	
		elseif($res40=="2"){
	
		}
		
	  
	
	
		if($res41=="1"){
			$s_k=$s_k+1;
			$b_t=$b_t+1;
			$d=$d+1;
		}
	
		elseif($res41=="2"){
	
		}
		
	  
	
	
		if($res42=="1"){
			$f=$f+1;
			$b_d=$b_d+1;
				
		}
	
		elseif($res42=="2"){
	
		}
		
	  
	
	
		if($res43=="1"){
			$h_i=$h_i+1;
			$h_s=$h_s+1;
			$d=$d+1;
		}
	
		elseif($res43=="2"){
	
		}
		
	  
	
	
		if($res44=="1"){
			$h_i=$h_i+1;
				
		}
	
		elseif($res44=="2"){
	
		}
		
	  
	
	
		if($res45=="1"){
			
				
		}
	
		elseif($res45=="2"){
			$l=$l+1;
		}
		
	  
	
	
		if($res46=="1"){
			
				
		}
	
		elseif($res46=="2"){
			$d=$d+1;
		}
		
	  
	
	
		if($res47=="1"){
			$s_k=$s_k+1;
			$h_i=$h_i+1;
	
				
		}
	
		elseif($res47=="2"){
	
		}
		
	  
	
	
		if($res48=="1"){
			$f=$f+1;
				
		}
	
		elseif($res48=="2"){
	
		}
		
	  
	
	
		if($res49=="1"){
			$f=$f+1;
				
		}
	
		elseif($res49=="2"){
	
		}
		
	  
	
	
		if($res50=="1"){
			$f=$f+1;
				
		}
	
		elseif($res50=="2"){
		
		}
		
	  
	
	
		if($res51=="1"){
			
				
		}
	
		elseif($res51=="2"){
			$h_i=$h_i+1;
			$d=$d+1;
			$h_s=$h_s+1;
		}
		
	  
	
	
		if($res52=="1"){
			$s_k=$s_k+1;
			$d=$d+1;
				
		}
	
		elseif($res52=="2"){
	
		}
		
	  
	
	
		if($res53=="1"){
			$f=$f+1;
				
		}
	
		elseif($res53=="2"){
	
		}
		
	  
	
	
		if($res54=="1"){
			
				
		}
	
		elseif($res54=="2"){
			$f=$f+1;
		}
		
	  
	
	
		if($res55=="1"){
			
				
		}
	
		elseif($res55=="2"){
			$h_i=$h_i+1;
			$h_s=$h_s+1;
		}
		
	  
	
	
		if($res56=="1"){
			$f=$f+1;	
				
		}
	
		elseif($res56=="2"){
	
		}
		
	  
	
	
		if($res57=="1"){
			
				
		}
	
		elseif($res57=="2"){
			$s_i=$s_i+1;
			$d=$d+1;
		}
		
	  
	
	
		if($res58=="1"){
			
				
		}
	
		elseif($res58=="2"){
			$d=$d+1;
		}
		
	  
	
	
		if($res59=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res59=="2"){
	
		}
		
	  
	
	
		if($res60=="1"){
			
				
		}
	
		elseif($res60=="2"){
			$l=$l+1;
		}
		
	  
	
	
		if($res61=="1"){
			$b_d=$b_d+1;
				
		}
	
		elseif($res61=="2"){
	
		}
		
	  
	
	
		if($res62=="1"){
			$h_s=$h_s+1;
				
		}
	
		elseif($res62=="2"){
	
		}
		
	  
	
	
		if($res63=="1"){
			
				
		}
	
		elseif($res63=="2"){
			$h_s=$h_s+1;
		}
		
	  
	
	
		if($res64=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res64=="2"){
			$d=$d+1;
		}
		
	  
	
	
		if($res65=="1"){
			
				
		}
	
		elseif($res65=="2"){
			$s_k=$s_k+1;
			$f=$f+1;
		}
		
	  
	
	
		if($res66=="1"){
			$f=$f+1;	
				
		}
	
		elseif($res66=="2"){
	
		}
		
	  
	
	
		if($res67=="1"){
			$s_i=$s_i+1;
			$b_d=$b_d+1;
			$b_t=$b_t+1;
			$d=$d+1;
		}
	
		elseif($res67=="2"){
	
		}
		
	  
	
	
		if($res68=="1"){
			
				
		}
	
		elseif($res68=="2"){
			$h_s=$h_s+1;
		}
		
	  
	
	
		if($res69=="1"){
			
				
		}
	
		elseif($res69=="2"){
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res70=="1"){
			$m_f=$m_f+1;
				
		}
	
		elseif($res70=="2"){
	
		}
		
	  
	
	
		if($res71=="1"){
			
				
		}
	
		elseif($res71=="2"){
			$h_i=$h_i+1;
			$k=$k+1;
		}
		
	  
	
	
		if($res72=="1"){
			$h_s=$h_s+1;
			
				
		}
	
		elseif($res72=="2"){
	
		}
		
	  
	
	
		if($res73=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res73=="2"){
	
		}
		
	  
	
	
		if($res74=="1"){
			$m_f=$m_f+1;
				
		}
	
		elseif($res74=="2"){
	
		}
		
	  
	
	
		if($res75=="1"){
			
				
		}
	
		elseif($res75=="2"){
			$f=$f+1;
			$l=$l+1;
		}
		
	  
	
	
		if($res76=="1"){
			$s_k=$s_k+1;
			$h_i=$h_i+1;
			$b_t=$b_t+1;
				
		}
	
		elseif($res76=="2"){
	
		}
		
	  
	
	
		if($res77=="1"){
			
			$m_f=$m_f+1;
		}
	
		elseif($res77=="2"){
	
		}
		
	  
	
	
		if($res78=="1"){
			
			$m_f=$m_f+1;
		}
	
		elseif($res78=="2"){
	
		}
		
	  
	
	
		if($res79=="1"){
			
				
		}
	
		elseif($res79=="2"){
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res80=="1"){
			
				
		}
	
		elseif($res80=="2"){
			
		}
		
	  
	
	
		if($res81=="1"){
			
				
		}
	
		elseif($res81=="2"){
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res82=="1"){
			$s_i=$s_i+1;
				
		}
	
		elseif($res82=="2"){
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res83=="1"){
			
				
		}
	
		elseif($res83=="2"){
			$f=$f+1;
		}
		
	  
	
	
		if($res84=="1"){
			$b_d=$b_d+1;
				
		}
	
		elseif($res84=="2"){
	
		}
		
	  
	
	
		if($res85=="1"){
			$f=$f+1;	
				
		}
	
		elseif($res85=="2"){
	
		}
		
	  
	
	
		if($res86=="1"){
			$b_t=$b_t+1;
			$d=$d+1;
		}
	
		elseif($res86=="2"){
	
		}
		
	  
	
	
		if($res87=="1"){
			
			$m_f=$m_f+1;
		}
	
		elseif($res87=="2"){
	
		}
		
	  
	
	
		if($res88=="1"){
			
				
		}
	
		elseif($res88=="2"){
			$d=$d+1;
		}
		
	  
	
	
		if($res89=="1"){
			
				
		}
	
		elseif($res89=="2"){
			$h_i=$h_i+1;
			$k=$k+1;
			
		}
		
	  
	
	
	
		if($res90=="1"){
			
				
		}
	
		elseif($res90=="2"){
			$l=$l+1;
		}
		
	  
	
	
		if($res91=="1"){
			
				
		}
	
		elseif($res91=="2"){
			$s_i=$s_i+1;
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res92=="1"){
			
			$m_f=$m_f+1;
		}
	
		elseif($res92=="2"){
	
		}
		
	  
	
	
		if($res93=="1"){
			
				
		}
	
		elseif($res93=="2"){
			$h_i=$h_i+1;
			$b_a=$b_a+1;
		}
		
	  
	
	
		if($res94=="1"){
			$b_t=$b_t+1;
			$b_d=$b_d+1;	
				
		}
	
		elseif($res94=="2"){
	
		}
		
	  
	
	
		if($res95=="1"){
			
				
		}
	
		elseif($res95=="2"){
			$d=$d+1;
		}
		
	  
	
	
		if($res96=="1"){
			$k=$k+1;
				
		}
	
		elseif($res96=="2"){
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res97=="1"){
			$s_k=$s_k+1;
			$m_a=$m_a+1;
				
		}
	
		elseif($res97=="2"){
	
		}
		
	  
	
	
		if($res98=="1"){
			
				
		}
	
		elseif($res98=="2"){
			$d=$d+1;
		}
		
	  
	
	
		if($res99=="1"){
			
				
		}
	
		elseif($res99=="2"){
			$s_i=$s_i+1;
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res100=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res100=="2"){
	
		}
		
	  
	
	
		if($res101=="1"){
			
				
		}
	
		elseif($res101=="2"){
			$m_a=$m_a+1;
		}
		
	  
	
	
		if($res102=="1"){
			$b_t=$b_t+1;
			$b_d=$b_d+1;
				
		}
	
		elseif($res102=="2"){
	
		}
		
	  
	
	
		if($res103=="1"){
			
				
		}
	
		elseif($res103=="2"){
			$s_k=$s_k+1;
			$h_i=$h_i+1;
			$h_s=$h_s+1;
		}
		
		  
	
	
		if($res104=="1"){
			$s_k=$s_k+1;
			$d=$d+1;
				
		}
	
		elseif($res104=="2"){
	
		}
		
	  
	
	
		if($res105=="1"){
			
				
		}
	
		elseif($res105=="2"){
			$m_a=$m_a+1;
			$l=$l+1;
		}
		
	  
	
	
		if($res106=="1"){
			$b_t=$b_t+1;
			$b_d=$b_d+1;
				
		}
	
		elseif($res106=="2"){
	
		}
		
	  
	
	
		if($res107=="1"){
			
				
		}
	
		elseif($res107=="2"){
			$h_i=$h_i+1;
			$b_a=$b_a+1;
			$d=$d+1;
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res108=="1"){
			$h_s=$h_s+1;
				
		}
	
		elseif($res108=="2"){
	
		}
		
	  
	
	
		if($res109=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res109=="2"){
			$h_i=$h_i+1;
			$b_a=$b_a+1;
			
		}
		
	  
	
	
		if($res110=="1"){
			$b_a=$b_a+1;
				
		}
	
		elseif($res110=="2"){
	
		}
		
	  
	
	
		if($res111=="1"){
			$s_i=$s_i+1;	
			
		}
	
		elseif($res111=="2"){
			$m_a=$m_a+1;
			$b_a=$b_a+1;
		}
		
	  
	
	
		if($res112=="1"){
			
				
		}
	
		elseif($res112=="2"){
			$f=$f+1;
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res113=="1"){
			
				
		}
	
		elseif($res113=="2"){
			$f=$f+1;
		}
		
	  
	
	
		if($res114=="1"){
			$h_i=$h_i+1;
			$h_s=$h_s+1;
				
		}
	
		elseif($res114=="2"){
	
		}
		
	  
	
	
		if($res115=="1"){
			
				
		}
	
		elseif($res115=="2"){
			$f=$f+1;
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res116=="1"){
			
				
		}
	
		elseif($res116=="2"){
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res117=="1"){
			$s_i=$s_i+1;
				
		}
	
		elseif($res117=="2"){
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res118=="1"){
			
			$b_d=$b_d+1;		
		}
	
		elseif($res118=="2"){
	
		}
		
	  
	
	
		if($res119=="1"){
			
				
		}
	
		elseif($res119=="2"){
			$s_k=$s_k+1;
			$s_i=$s_i+1;
			$m_a=$m_a+1;
		}
		
	  
	
	
		if($res120=="1"){
			
				
		}
	
		elseif($res120=="2"){
			$m_a=$m_a+1;
			$m_f=$m_f+1;
			$l=$l+1;
		}
		
	  
	
	
		if($res121=="1"){
			$s_k=$s_k+1;
			$f=$f+1;
			$b_a=$b_a+1;
		}
	
		elseif($res121=="2"){
	
		}
		
	  
	
	
		if($res122=="1"){
			
				
		}
	
		elseif($res122=="2"){
			$b_t=$b_t+1;
			$d=$d+1;
		}
		
	  
	
	
		if($res123=="1"){
			$f=$f+1;
			$b_a=$b_a+1;	
		}
	
		elseif($res123=="2"){
	
		}
		
	  
	
	
		if($res124=="1"){
			$s_i=$s_i+1;
				
		}
	
		elseif($res124=="2"){
			$h_i=$h_i+1;
			$k=$k+1;
			$b_a=$b_a+1;
		}
		
	  
	
	
		if($res125=="1"){
			$h_s=$h_s+1;
				
		}
	
		elseif($res125=="2"){
	
		}
		
	  
	
	
		if($res126=="1"){
			
			$m_f=$m_f+1;	
		}
	
		elseif($res126=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res127=="1"){
			$b_a=$b_a+1;
			$m_a=$m_a+1;
			$b_d=$b_d+1;
		}
	
		elseif($res127=="2"){
	
		}
		
	  
	
	
		if($res128=="1"){
			
				
		}
	
		elseif($res128=="2"){
			$h_i=$h_i+1;
		}
		
	  
	
	
		if($res129=="1"){
			
				
		}
	
		elseif($res129=="2"){
			$h_i=$h_i+1;
			$k=$k+1;
		}
		
	  
	
	
		if($res130=="1"){
			$d=$d+1;
				
		}
	
		elseif($res130=="2"){
			$h_s=$h_s+1;
		}
		
	  
	
	
		if($res131=="1"){
			
				
		}
	
		elseif($res131=="2"){
			$d=$d+1;
		}
		
	  
	
	
		if($res132=="1"){
			
			$m_f=$m_f+1;
		}
	
		elseif($res132=="2"){
	
		}
		
	  
	
	
		if($res133=="1"){
			$m_f=$m_f+1;
				
		}
	
		elseif($res133=="2"){
			
		}
		
	  
	
	
		if($res134=="1"){
			$m_a=$m_a+1;
			$m_f=$m_f+1;
				
		}
	
		elseif($res134=="2"){
			$k=$k+1;
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res135=="1"){
			
				
		}
	
		elseif($res135=="2"){
			$l=$l+1;
	
		}
		
	  
	
	
		if($res136=="1"){
			
				
		}
	
		elseif($res136=="2"){
			$h_i=$h_i+1;
		}
		
	  
	
	
		if($res137=="1"){
			
				
		}
	
		elseif($res137=="2"){
			$h_i=$h_i+1;
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res138=="1"){
			$s_i=$s_i+1;
			$d=$d+1;
		}
	
		elseif($res138=="2"){
			$k=$k+1;
		}
		
	  
	
	
		if($res139=="1"){
			$f=$f+1;	
				
		}
	
		elseif($res139=="2"){
	
		}
		
	  
	
	
		if($res140=="1"){
			$m_f=$m_f+1;
				
		}
	
		elseif($res140=="2"){
	
		}
		
	  
	
	
		if($res141=="1"){
			
				
		}
	
		elseif($res141=="2"){
			$h_i=$h_i+1;
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res142=="1"){
			$b_t=$b_t+1;
			$d=$d+1;
		}
	
		elseif($res142=="2"){
			$k=$k+1;
		}
		
	  
	
	
		if($res143=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res143=="2"){
			$s_i=$s_i+1;
			
		}
		
	  
	
	
		if($res144=="1"){
			
				
		}
	
		elseif($res144=="2"){
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res145=="1"){
			
				
		}
	
		elseif($res145=="2"){
			$d=$d+1;
		}
		
	  
	
	
		if($res146=="1"){
			$f=$f+1;
				
		}
	
		elseif($res146=="2"){
	
		}
		
	  
	
	
		if($res147=="1"){
			$s_i=$s_i+1;
				
		}
	
		elseif($res147=="2"){
			$h_i=$h_i+1;
		}
		
	  
	
	
		if($res148=="1"){
			
				
		}
	
		elseif($res148=="2"){
			$k=$k+1;
			$m_a=$m_a+1;
		}
		
	  
	
	
		if($res149=="1"){
			$m_f=$m_f+1;
				
		}
	
		elseif($res149=="2"){
	
		}
		
	  
	
	
		if($res150=="1"){
			
				
		}
	
		elseif($res150=="2"){
			$l=$l+1;
		}
		
	  
	
	
		if($res151=="1"){
			$f=$f+1;	
			$b_a=$b_a+1;	
		}
	
		elseif($res151=="2"){
	
		}
		
	  
	
	
		if($res152=="1"){
			
				
		}
	
		elseif($res152=="2"){
			$b_t=$b_t+1;
			$d=$d+1;
		}
		
	  
	
	
		if($res153=="1"){
			
				
		}
	
		elseif($res153=="2"){
			$h_i=$h_i+1;
			$h_s=$h_s+1;
			$d=$d+1;
		}
		
	  
	
	
		if($res154=="1"){
			
				
		}
	
		elseif($res154=="2"){
			$d=$d+1;
		}
		
	  
	
	
		if($res155=="1"){
			
				
		}
	
		elseif($res155=="2"){
			$h_s=$h_s+1;
			$d=$d+1;
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res156=="1"){
			$s_k=$s_k+1;
			$f=$f+1;
			$m_a=$m_a+1;
		}
	
		elseif($res156=="2"){
	
		}
		
	  
	
	
		if($res157=="1"){
			$s_k=$s_k+1;
			$b_a=$b_a+1;
			$m_a=$m_a+1;
		}
	
		elseif($res157=="2"){
	
		}
		
	  
	
	
		if($res158=="1"){
			$b_a=$b_a+1;
			$d=$d+1;
		}
		
		elseif($res158=="2"){
	
		}
		
	  
	
	
		if($res159=="1"){
			$s_k=$s_k+1;
			$b_t=$b_t+1;
			$d=$d+1;
		}
	
		elseif($res159=="2"){
	
		}
		
	  
	
	
		if($res160=="1"){
			
				
		}
	
		elseif($res160=="2"){
			$h_i=$h_i+1;
			$k=$k+1;
			$d=$d+1;
		}
		
	  
	
	
		if($res161=="1"){
			$h_s=$h_s+1;	
				
		}
	
		elseif($res161=="2"){
	
		}
		
	  
	
	
		if($res162=="1"){
			
				
		}
	
		elseif($res162=="2"){
			$h_i=$h_i+1;
		}
		
	  
	
	
		if($res163=="1"){
			
				
		}
	
		elseif($res163=="2"){
			$h_i=$h_i+1;
			$h_s=$h_s+1;
		}
		
	  
	
	
		if($res164=="1"){
			
				
		}
	
		elseif($res164=="2"){
			$f=$f+1;
			$b_t=$b_t+1;
		}
		
	  
	
	
		if($res165=="1"){
			
				
		}
	
		elseif($res165=="2"){
			$l=$l+1;
		}
		
	  
	
	
		if($res166=="1"){
			
				
		}
	
		elseif($res166=="2"){
			$m_a=$m_a+1;
		}
		
	  
	
	
		if($res167=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res167=="2"){
	
		}
		
	  
	
	
		if($res168=="1"){
			$s_k=$s_k+1;
			$f=$f+1;
				
		}
	
		elseif($res168=="2"){
			
			
		}
		
	  
	
	
		if($res169=="1"){
			
				
		}
	
		elseif($res169=="2"){
			$f=$f+1;
		}
		
	  
	
	
		if($res170=="1"){
			
				
		}
	
		elseif($res170=="2"){
			$h_i=$h_i+1;
			$k=$k+1;
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res171=="1"){
			$s_i=$s_i+1;
				
		}
	
		elseif($res171=="2"){
			$k=$k+1;
			$m_a=$m_a+1;
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res172=="1"){
			$s_i=$s_i+1;
				
		}
	
		elseif($res172=="2"){
			$h_i=$h_i+1;
		}
		
	  
	
	
		if($res173=="1"){
			
				
		}
	
		elseif($res173=="2"){
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res174=="1"){
			
				
		}
	
		elseif($res174=="2"){
			$h_i=$h_i+1;
		}
		
	  
	
	
		if($res175=="1"){
			
				
		}
	
		elseif($res175=="2"){
			$h_i=$h_i+1;
			$h_s=$h_s+1;
		}
		
	  
	
	
		if($res176=="1"){
			
				
		}
	
		elseif($res176=="2"){
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res177=="1"){
			
				
		}
	
		elseif($res177=="2"){
			$s_k=$s_k+1;
			$f=$f+1;
			
		}
		
	  
	
	
		if($res178=="1"){
			
				
		}
	
		elseif($res178=="2"){
			$s_k=$s_k+1;
			$b_t=$b_t+1;
			$d=$d+1;
		}
		
	  
	
	
		if($res179=="1"){
			$s_k=$s_k+1;
			$h_i=$h_i+1;
			
				
		}
	
		elseif($res179=="2"){
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res180=="1"){
			$s_i=$s_i+1;
				
		}
	
		elseif($res180=="2"){
			$h_i=$h_i+1;
			$k=$k+1;
			$m_a=$m_a+1;
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res181=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res181=="2"){
	
		}
		
	  
	
	
		if($res182=="1"){
			$s_k=$s_k+1;
			$b_t=$b_t+1;
			$d=$d+1;	
		}
	
		elseif($res182=="2"){
	
		}
		
	  
	
	
		if($res183=="1"){
			
				
		}
	
		elseif($res183=="2"){
			$k=$k+1;
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res184=="1"){
			$f=$f+1;	
				
		}
	
		elseif($res184=="2"){
	
		}
		
	  
	
	
		if($res185=="1"){
			
				
		}
	
		elseif($res185=="2"){
			$f=$f+1;
		}
		
	  
	
	
		if($res186=="1"){
			$h_i=$h_i+1;
				
		}
	
		elseif($res186=="2"){
	
		}
		
	  
	
	
		if($res187=="1"){
			$m_f=$m_f+1;
				
		}
	
		elseif($res187=="2"){
			$s_k=$s_k+1;
	
		}
		
	  
	
	
		if($res188=="1"){
			
				
		}
	
		elseif($res188=="2"){
			$h_i=$h_i+1;
			$h_s=$h_s+1;
		}
		
	  
	
	
		if($res189=="1"){
			$h_i=$h_i+1;
			$h_s=$h_s+1;
			$b_t=$b_t+1;
			$d=$d+1;		
		}
	
		elseif($res189=="2"){
	
		}
		
	  
	
	
		if($res190=="1"){
			
				
		}
	
		elseif($res190=="2"){
			$h_i=$h_i+1;
			$h_s=$h_s+1;
		}
		
	  
	
	
		if($res191=="1"){
			
				
		}
	
		elseif($res191=="2"){
			$d=$d+1;
		}
		
	  
	
	
		if($res192=="1"){
			
				
		}
	
		elseif($res192=="2"){
			$s_k=$s_k+1;
			$h_i=$h_i+1;
			$h_s=$h_s+1;
		}
		
	  
	
	
		if($res193=="1"){
			$d=$d+1;
				
		}
	
		elseif($res193=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res194=="1"){
			$s_k=$s_k+1;
			$m_a=$m_a+1;
				
		}
	
		elseif($res194=="2"){
	
		}
		
	  
	
	
		if($res195=="1"){
			
				
		}
	
		elseif($res195=="2"){
			$l=$l+1;
		}
		
	  
	
	
		if($res196=="1"){
			
				
		}
	
		elseif($res196=="2"){
			$s_k=$s_k+1;
			$f=$f+1;
		}
		
	  
	
	
		if($res197=="1"){
			$f=$f+1;
				
		}
	
		elseif($res197=="2"){
	
		}
		
	  
	
	
		if($res198=="1"){
			
				
		}
	
		elseif($res198=="2"){
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res199=="1"){
			
				
		}
	
		elseif($res199=="2"){
			$f=$f+1;
		}
		
	  
	
	
		if($res200=="1"){
			$f=$f+1;
				
		}
	
		elseif($res200=="2"){
	
		}
		
	  
	
	
		if($res201=="1"){
			$s_i=$s_i+1;
				
		}
	
		elseif($res201=="2"){
			$h_i=$h_i+1;
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res202=="1"){
			$s_k=$s_k+1;
			$f=$f+1;
			$b_a=$b_a+1;	
		}
	
		elseif($res202=="2"){
	
		}
		
	  
	
	
		if($res203=="1"){
			
			$m_f=$m_f+1;
		}
	
		elseif($res203=="2"){
	
		}
		
	  
	
	
		if($res204=="1"){
			
			$m_f=$m_f+1;
		}
	
		elseif($res204=="2"){
	
		}
		
	  
	
	
		if($res205=="1"){
			$f=$f+1;	
				
		}
	
		elseif($res205=="2"){
	
		}
		
	  
	
	
		if($res206=="1"){
			$f=$f+1;	
				
		}
	
		elseif($res206=="2"){
	
		}
		
	  
	
	
		if($res207=="1"){
			
				
		}
	
		elseif($res207=="2"){
			$d=$d+1;
		}
		
	  
	
	
		if($res208=="1"){
			
				
		}
	
		elseif($res208=="2"){
			$s_i=$s_i+1;
			$d=$d+1;
		}
		
	  
	
	
		if($res209=="1"){
			$f=$f+1;	
				
		}
	
		elseif($res209=="2"){
	
		}
		
	  
	
	
		if($res210=="1"){
			$s_k=$s_k+1;
			$f=$f+1;
				
		}
	
		elseif($res210=="2"){
	
		}
		
	  
	
	
		if($res211=="1"){
			$f=$f+1;	
				
		}
	
		elseif($res211=="2"){
	
		}
		
	  
	
	
		if($res212=="1"){
			$s_k=$s_k+1;
			$m_a=$m_a+1;
				
		}
	
		elseif($res212=="2"){
	
		}
		
	  
	
	
		if($res213=="1"){
			
				
		}
	
		elseif($res213=="2"){
			$h_i=$h_i+1;
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res214=="1"){
			
				
		}
	
		elseif($res214=="2"){
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res215=="1"){
			$f=$f+1;	
			$b_d=$b_d+1;
		}
	
		elseif($res215=="2"){
	
		}
		
	  
	
	
		if($res216=="1"){
			$b_d=$b_d+1;
				
		}
	
		elseif($res216=="2"){
	
		}
		
	  
	
	
		if($res217=="1"){
			$b_t=$b_t+1;
			$m_f=$m_f+1;
		}
	
		elseif($res217=="2"){
			$k=$k+1;
		}
		
	  
	
	
		if($res218=="1"){
			$f=$f+1;	
				
		}
	
		elseif($res218=="2"){
	
		}
		
	  
	
	
		if($res219=="1"){
			
				
		}
	
		elseif($res219=="2"){
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res220=="1"){
			
				
		}
	
		elseif($res220=="2"){
			$s_k=$s_k+1;
			$f=$f+1;
		}
		
	  
	
	
		if($res221=="1"){
			
				
		}
	
		elseif($res221=="2"){
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res222=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res222=="2"){
	
		}
		
	  
	
	
		if($res223=="1"){
			
				
		}
	
		elseif($res223=="2"){
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res224=="1"){
			
			$b_d=$b_d+1;
		}
	
		elseif($res224=="2"){
	
		}
		
	  
	
	
		if($res225=="1"){
			
				
		}
	
		elseif($res225=="2"){
			$l=$l+1;
		}
		
	  
	
	
		if($res226=="1"){
			$m_a=$m_a+1;
			$m_f=$m_f+1;
		}
	
		elseif($res226=="2"){
	
		}
		
	  
	
	
		if($res227=="1"){
			$f=$f+1;	
				
		}
	
		elseif($res227=="2"){
	
		}
		
	  
	
	
		if($res228=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res228=="2"){
	
		}
		
	  
	
	
		if($res229=="1"){
			
				
		}
	
		elseif($res229=="2"){
			$s_i=$s_i+1;
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res230=="1"){
			
				
		}
	
		elseif($res230=="2"){
			$h_i=$h_i+1;
			$h_s=$h_s+1;
			
		}
		
	  
	
	
		if($res231=="1"){
			
			
		}
	
		elseif($res231=="2"){
			$s_i=$s_i+1;
			$b_d=$b_d+1;
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res232=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res232=="2"){
	
		}
		
	  
	
	
		if($res233=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res233=="2"){
			$d=$d+1;
		}
		
	  
	
	
		if($res234=="1"){
			
				
		}
	
		elseif($res234=="2"){
			$h_i=$h_i+1;
			$k=$k+1;
		}
		
	  
	
	
		if($res235=="1"){
			
				
		}
	
		elseif($res235=="2"){
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res236=="1"){
			$s_i=$s_i+1;	
			$d=$d+1;	
		}
	
		elseif($res236=="2"){
	
		}
		
	  
	
	
		if($res237=="1"){
			
				
		}
	
		elseif($res237=="2"){
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res238=="1"){
			$s_k=$s_k+1;
			$h_i=$h_i+1;
	
				
		}
	
		elseif($res238=="2"){
	
		}
		
	  
	
	
		if($res239=="1"){
			
			$m_f=$m_f+1;
			$b_d=$b_d+1;
		}
	
		elseif($res239=="2"){
	
		}
		
	  
	
	
		if($res240=="1"){
			$m_a=$m_a+1;	
				
		}
	
		elseif($res240=="2"){
	
		}
		
	  
	
	
		if($res241=="1"){
			$s_k=$s_k+1;
	
				
		}
	
		elseif($res241=="2"){
			$d=$d+1;
		}
		
	  
	
	
		if($res242=="1"){
			
				
		}
	
		elseif($res242=="2"){
			$d=$d+1;
		}
		
	  
	
	
		if($res243=="1"){
			
				
		}
	
		elseif($res243=="2"){
			$h_i=$h_i+1;
			$h_s=$h_s+1;
		}
		
	  
	
	
		if($res244=="1"){
			$b_d=$b_d+1;
				
		}
	
		elseif($res244=="2"){
	
		}
		
	  
	
	
		if($res245=="1"){
			$f=$f+1;
			$b_d=$b_d+1;
				
		}
	
		elseif($res245=="2"){
	
		}
		
	  
	
	
		if($res246=="1"){
			$f=$f+1;	
				
		}
	
		elseif($res246=="2"){
	
		}
		
	  
	
	
		if($res247=="1"){
			$f=$f+1;
				
		}
	
		elseif($res247=="2"){
	
		}
		
	  
	
	
		if($res248=="1"){
			
				
		}
	
		elseif($res248=="2"){
			$d=$d+1;
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res249=="1"){
			
				
		}
	
		elseif($res249=="2"){
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res250=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res250=="2"){
	
		}
		
	  
	
	
		if($res251=="1"){
			$s_k=$s_k+1;
			$m_a=$m_a+1;
				
		}
	
		elseif($res251=="2"){
	
		}
		
	  
	
	
		if($res252=="1"){
			
			$f=$f+1;
				
		}
	
		elseif($res252=="2"){
	
		}
		
	  
	
	
		if($res253=="1"){
			$h_i=$h_i+1;
				
		}
	
		elseif($res253=="2"){
	
		}
		
	  
	
	
		if($res254=="1"){
			
				
		}
	
		elseif($res254=="2"){
			$s_i=$s_i+1;
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res255=="1"){
			
				
		}
	
		elseif($res255=="2"){
			$l=$l+1;
		}
		
	  
	
	
		if($res256=="1"){
			$f=$f+1;
				
		}
	
		elseif($res256=="2"){
	
		}
		
	  
	
	
		if($res257=="1"){
			
				
		}
	
		elseif($res257=="2"){
			$f=$f+1;
		}
		
	  
	
	
		if($res258=="1"){
			
				
		}
	
		elseif($res258=="2"){
			$f=$f+1;
		}
		
	  
	
	
		if($res259=="1"){
			$s_k=$s_k+1;
			$d=$d+1;
				
		}
	
		elseif($res259=="2"){
	
		}
		
	  
	
	
		if($res260=="1"){
			
				
		}
	
		elseif($res260=="2"){
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res261=="1"){
			
			$m_f=$m_f+1;
		}
	
		elseif($res261=="2"){
	
		}
		
	  
	
	
		if($res262=="1"){
			
				
		}
	
		elseif($res262=="2"){
			$s_i=$s_i+1;
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res263=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res263=="2"){
			$d=$d+1;
		}
		
	  
	
	
		if($res264=="1"){
			
				
		}
	
		elseif($res264=="2"){
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res265=="1"){
			
				
		}
	
		elseif($res265=="2"){
			$h_i=$h_i+1;
		}
		
	  
	
	
		if($res266=="1"){
			$s_k=$s_k+1;
	
				
		}
	
		elseif($res266=="2"){
	
		}
		
	  
	
	
		if($res267=="1"){
			$s_i=$s_i+1;
				
		}
	
		elseif($res267=="2"){
			$h_i=$h_i+1;
			$b_d=$b_d+1;
			$k=$k+1;
			$m_a=$m_a+1;
		}
		
	  
	
	
		if($res268=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res268=="2"){
			$b_a=$b_a+1;
		}
		
	  
	
	
		if($res269=="1"){
			$f=$f+1;	
				
		}
	
		elseif($res269=="2"){
	
		}
		
	  
	
	
		if($res270=="1"){
			
				
		}
	
		elseif($res270=="2"){
			$d=$d+1;
		}
		
	  
	
	
		if($res271=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res271=="2"){
			$d=$d+1;
		}
		
	  
	
	
		if($res272=="1"){
			
				
		}
	
		elseif($res272=="2"){
			$k=$k+1;
			$f=$f+1;
			$d=$d+1;
		}
		
	  
	
	
		if($res273=="1"){
			$s_k=$s_k+1;
			$h_s=$h_s+1;
	
				
		}
	
		elseif($res273=="2"){
	
		}
		
	  
	
	
		if($res274=="1"){
			
				
		}
	
		elseif($res274=="2"){
			$h_i=$h_i+1;
			$h_s=$h_s+1;
		}
		
	  
	
	
		if($res275=="1"){
			$f=$f+1;	
			$b_a=$b_a+1;	
		}
	
		elseif($res275=="2"){
	
		}
		
	  
	
	
		if($res276=="1"){
			
				
		}
	
		elseif($res276=="2"){
			$s_k=$s_k+1;
			$f=$f+1;
		}
		
	  
	
	
		if($res277=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res277=="2"){
	
		}
		
	  
	
	
		if($res278=="1"){
			$s_i=$s_i+1;
			$m_f=$m_f+1;
		}
	
		elseif($res278=="2"){
	
		}
		
	  
	
	
		if($res279=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res279=="2"){
			$h_i=$h_i+1;
			
		}
		
	  
	  
	
	
		if($res280=="1"){
			
				
		}
	
		elseif($res280=="2"){
			
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res281=="1"){
			
				
		}
	
		elseif($res281=="2"){
			$s_k=$s_k+1;
			$h_s=$h_s+1;
			$s_i=$s_i+1;
			$b_a=$b_a+1;
		}
		
	  
	
	
		if($res282=="1"){
			$s_k=$s_k+1;
			$m_f=$m_f+1;
		}
	
		elseif($res282=="2"){
	
		}
		
	  
	
	
		if($res283=="1"){
			
				
		}
	
		elseif($res283=="2"){
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res284=="1"){
			$b_a=$b_a+1;
			$b_d=$b_d+1;
				
		}
	
		elseif($res284=="2"){
	
		}
		
	  
	
	
		if($res285=="1"){
			
				
		}
	
		elseif($res285="2"){
			$d=$d+1;
			$l=$l+1;
		}
		
	  
	
	
		if($res286=="1"){
			$f=$f+1;
				
		}
	
		elseif($res286=="2"){
	
		}
		
	  
	
	
		if($res287=="1"){
			
				
		}
	
		elseif($res287=="2"){
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res288=="1"){
			$f=$f+1;	
			$d=$d+1;
		}
	
		elseif($res288=="2"){
	
		}
		
	  
	
	
		if($res289=="1"){
			
				
		}
	
		elseif($res289=="2"){
			$h_i=$h_i+1;
			$m_a=$m_a+1;
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res290=="1"){
			$d=$d+1;
				
		}
	
		elseif($res290=="2"){
	
		}
		
	  
	
	
		if($res291=="1"){
			$s_k=$s_k+1;
			$f=$f+1;
			$b_a=$b_a+1;	
		}
	
		elseif($res291=="2"){
	
		}
		
	  
	
	
		if($res292=="1"){
			$s_i=$s_i+1;
				
		}
	
		elseif($res292=="2"){
			$h_i=$h_i+1;
		}
		
	  
	
	
		if($res293=="1"){
			$f=$f+1;
			$b_a=$b_a+1;	
		}
	
		elseif($res293=="2"){
	
		}
		
	  
	
	
		if($res294=="1"){
			
				
		}
	
		elseif($res294=="2"){
			$b_a=$b_a+1;
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res295=="1"){
			
			$m_f=$m_f+1;
		}
	
		elseif($res295=="2"){
	
		}
		
	  
	
	
		if($res296=="1"){
			
				
		}
	
		elseif($res296=="2"){
			$k=$k+1;
			$s_i=$s_i+1;
			$d=$d+1;
			$b_d=$b_d+1;
		}
		
	  
	
	
		if($res297=="1"){
			$s_k=$s_k+1;
	
			
		}
	
		elseif($res297=="2"){
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res298=="1"){
			$m_a=$m_a+1;
				
		}
	
		elseif($res298=="2"){
	
		}
		
	  
	
	
		if($res299=="1"){
			$m_f=$m_f+1;
				
		}
	
		elseif($res299=="2"){
	
		}
		
	
	
		if($res300=="1"){
			
				
		}
	
		elseif($res300=="2"){
			$m_f=$m_f+1;
		}
		
	  
	
	
		if($res301=="1"){
			$s_k=$s_k+1;
			$b_t=$b_t+1;
				
		}
	
		elseif($res301=="2"){
	
		}
		
	  
	
	
		if($res302=="1"){
			
				
		}
	
		elseif($res302=="2"){
			$s_k=$s_k+1;
	
		}
		
	  
	
	
		if($res303=="1"){
			$s_k=$s_k+1;
	
				
		}
	
		elseif($res303=="2"){
	
		}
		
	  
	
	
		if($res304=="1"){
			$s_i=$s_i+1;
			$b_t=$b_t+1;		
		}
	
		elseif($res304=="2"){
	
		}
		
	  
	
	
		if($res305=="1"){
			$b_a=$b_a+1;	
				
		}
	
		elseif($res305=="2"){
	
		}
		
	  
	
	
		if($res306=="1"){
			
				
		}
	
		elseif($res306=="2"){
			$s_k=$s_k+1;
	
		}
		
	  
	
	
		if($res307=="1"){
			$s_k=$s_k+1;
				
		}
	
		elseif($res307=="2"){
	
		}
		
	  
	
	
		if($res308=="1"){
			$s_k=$s_k+1;
	
				
		}
	
		elseif($res308=="2"){
	
		}
		
	  
	
	
		if($res309=="1"){
			
				
		}
	
		elseif($res309=="2"){
			$s_k=$s_k+1;
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res310=="1"){
			
				
		}
	
		elseif($res310=="2"){
			$s_k=$s_k+1;
	
		}
		
	  
	
	
		if($res311=="1"){
			$s_k=$s_k+1;
	
				
		}
	
		elseif($res311=="2"){
	
		}
		
	  
	
	
		if($res312=="1"){
			$s_k=$s_k+1;
	
				
		}
	
		elseif($res312=="2"){
	
		}
		
	  
	
	
		if($res313=="1"){
			
				
		}
	
		elseif($res313=="2"){
			$b_a=$b_a+1;
		}
		
	  
	
	
		if($res314=="1"){
			$b_a=$b_a+1;
				
		}
	
		elseif($res314=="2"){
	
		}
		
	  
	
	
		if($res315=="1"){
			$s_k=$s_k+1;
	
				
		}
	
		elseif($res315=="2"){
	
		}
		
	  
	
	
		if($res316=="1"){
			$s_i=$s_i+1;
				
		}
	
		elseif($res316=="2"){
			$k=$k+1;
			$b_a=$b_a+1;
		}
		
	  
	
	
		if($res317=="1"){
			$b_a=$b_a+1;
				
		}
	
		elseif($res317=="2"){
	
		}
		
	  
	
	
		if($res318=="1"){
			
				
		}
	
		elseif($res318=="2"){
			$s_k=$s_k+1;
	
		}
		
	  
	
	
		if($res319=="1"){
			
				
		}
	
		elseif($res319=="2"){
			$b_a=$b_a+1;
		}
		
	  
	
	
		if($res320=="1"){
			$s_k=$s_k+1;
	
				
		}
	
		elseif($res320=="2"){
	
		}
		
	  
	
	
		if($res321=="1"){
			$s_i=$s_i+1;	
			$b_t=$b_t+1;	
		}
	
		elseif($res321=="2"){
	
		}
		
	  
	
	
		if($res322=="1"){
			
				
		}
	
		elseif($res322=="2"){
			$s_k=$s_k+1;
			$k=$k+1;
	
		}
		
	  
	
	
		if($res323=="1"){
			$s_k=$s_k+1;
				
		}
	
		elseif($res323=="2"){
			
	
		}
		
	  
	
	
		if($res324=="1"){
			
			$s_k=$s_k+1;	
		}
	
		elseif($res324=="2"){
			
	
		}
		
	  
	
	
		if($res325=="1"){
			$s_k=$s_k+1;
				
		}
	
		elseif($res325=="2"){
		
	
		}
		
	  
	
	
		if($res326=="1"){
			$b_a=$b_a+1;
				
		}
	
		elseif($res326=="2"){
	
		}
		
	  
	
	
		if($res327=="1"){
			
				
		}
	
		elseif($res327=="2"){
			$b_a=$b_a+1;
		}
		
	  
	
	
		if($res328=="1"){
			$s_k=$s_k+1;
				
		}
	
		elseif($res328=="2"){
			
	
		}
		
	  
	
	
		if($res329=="1"){
			
				
		}
	
		elseif($res329=="2"){
			$b_t=$b_t+1;
		}
		
	  
	
	
		if($res330=="1"){
			
				
		}
	
		elseif($res330=="2"){
			$s_k=$s_k+1;
	
		}
		
	  
	
	
		if($res331=="1"){
			$s_k=$s_k+1;
				
		}
	
		elseif($res331=="2"){
			
	
		}
		
	  
	
	
		if($res332=="1"){
			$s_i=$s_i+1;
			$s_k=$s_k+1;
				
		}
	
		elseif($res332=="2"){
			
	
		}
		
	  
	
	
		if($res333=="1"){
			
			$s_k=$s_k+1;
				
		}
	
		elseif($res333=="2"){
			
	
		}
		
	  
	
	
		if($res334=="1"){
			
			$s_k=$s_k+1;	
		}
	
		elseif($res334=="2"){
			
	
		}
		
	  
	
	
		if($res335=="1"){
			$s_k=$s_k+1;
				
		}
	
		elseif($res335=="2"){
			
	
		}
		
	  
	
	
		if($res336=="1"){
			$s_i=$s_i+1;
			$b_t=$b_t+1;	
		}
	
		elseif($res336=="2"){
	
		}
		
	  
	
	
		if($res337=="1"){
			$b_t=$b_t+1;
				
		}
	
		elseif($res337=="2"){
	
		}
		
	  
	
	
		if($res338=="1"){
			$b_a=$b_a+1;	
				
		}
	
		elseif($res338=="2"){
	
		}
		
	  
	
	
		if($res339=="1"){
			$s_k=$s_k+1;
				
		}
	
		elseif($res339=="2"){
		
	
		}
		
	  
	
	
		if($res340=="1"){
			$b_t=$b_t+1;
			
		}
	
		elseif($res340=="2"){
	
		}
		
	  
	
	
		if($res341=="1"){
			$s_k=$s_k+1;
			$b_a=$b_a+1;
				
		}
	
		elseif($res341=="2"){
	
		}
		
	  
	
	
		if($res342=="1"){
			$s_i=$s_i+1;	
			$b_t=$b_t+1;	
		}
	
		elseif($res342=="2"){
	
		}
		
	  
	
	
		if($res343=="1"){
			$b_t=$b_t+1;
				
		}
	
		elseif($res343=="2"){
	
		}
		
	  
	
	
		if($res344=="1"){
			$b_t=$b_t+1;
				
		}
	
		elseif($res344=="2"){
	
		}
		
	  
	
	
		if($res345=="1"){
			$s_k=$s_k+1;
	
				
		}
	
		elseif($res345=="2"){
	
		}
		
	  
	
	
		if($res346=="1"){
			$b_t=$b_t+1;
				
		}
	
		elseif($res346=="2"){
	
		}
		
	  
	
	
		if($res347=="1"){
			
				
		}
	
		elseif($res347=="2"){
			$b_a=$b_a+1;
		}
		
	  
	
	
		if($res348=="1"){
			
				
		}
	
		elseif($res348=="2"){
			$b_a=$b_a+1;
		}
		
	  
	
	
		if($res349=="1"){
			$s_k=$s_k+1;
			$b_t=$b_t+1;
				
		}
	
		elseif($res349=="2"){
	
		}
		
	  
	
	
		if($res350=="1"){
			$s_k=$s_k+1;
	
				
		}
	
		elseif($res350=="2"){
	
		}
		
	  
	
	
		if($res351=="1"){
			$b_t=$b_t+1;	
				
		}
	
		elseif($res351=="2"){
	
		}
		
	  
	
	
		if($res352=="1"){
			$s_k=$s_k+1;
			$b_t=$b_t+1;
				
		}
	
		elseif($res352=="2"){
	
		}
		
	  
	
	
		if($res353=="1"){
			
				
		}
	
		elseif($res353=="2"){
			$s_i=$s_i+1;
			$b_t=$b_t+1;
		}
		
	  
	
	
		if($res354=="1"){
			$s_k=$s_k+1;
	
				
		}
	
		elseif($res354=="2"){
	
		}
		
	  
	
	
		if($res355=="1"){
			$s_k=$s_k+1;
	
				
		}
	
		elseif($res355=="2"){
	
		}
		
	  
	
	
		if($res356=="1"){
			$s_k=$s_k+1;
			$b_t=$b_t+1;
				
		}
	
		elseif($res356=="2"){
	
		}
		
	  
	
	
		if($res357=="1"){
			$s_i=$s_i+1;
			$b_t=$b_t+1;	
		}
	
		elseif($res357=="2"){
	
		}
		
	  
	
	
		if($res358=="1"){
			$b_t=$b_t+1;
				
		}
	
		elseif($res358=="2"){
	
		}
		
	  
	
	
		if($res359=="1"){
			$b_t=$b_t+1;
				
		}
	
		elseif($res359=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res360=="1"){
			$s_k=$s_k+1;
			$b_t=$b_t+1;
				
		}
	
		elseif($res360=="2"){
	
		}
		
	  
	
	
		if($res361=="1"){
			$b_t=$b_t+1;	
				
		}
	
		elseif($res361=="2"){
	
		}
		
	  
	
	
		if($res362=="1"){
			$b_t=$b_t+1;	
				
		}
	
		elseif($res362=="2"){
	
		}
		
	  
	
	
		if($res363=="1"){
			$s_k=$s_k+1;
	
				
		}
	
		elseif($res363=="2"){
	
		}
		
	  
	
	
		if($res364=="1"){
			$s_k=$s_k+1;
			$b_a=$b_a+1;
				
		}
	
		elseif($res364=="2"){
	
		}
		
	  
	
	
		if($res365=="1"){
			$b_a=$b_a+1;
				
		}
	
		elseif($res365=="2"){
	
		}
		
	  
	
	
		if($res366=="1"){
			$s_k=$s_k+1;
			$b_t=$b_t+1;
				
		}
	
		elseif($res366=="2"){
	
		}
		
	  
	
	
		if($res367=="1"){
			
				
		}
	
		elseif($res367=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res368=="1"){
			
				
		}
	
		elseif($res368=="2"){
			$k=$k+1;
		}
		
	  
	
	
		if($res369=="1"){
			$s_i=$s_i+1;
				
		}
	
		elseif($res369=="2"){
	
		}
		
	  
	
	
		if($res370=="1"){
			
				
		}
	
		elseif($res370=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res371=="1"){
			
				
		}
	
		elseif($res371=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res372=="1"){
			$s_i=$s_i+1;
				
		}
	
		elseif($res372=="2"){
	
		}
		
	  
	
	
		if($res373=="1"){
			$s_i=$s_i+1;	
				
		}
	
		elseif($res373=="2"){
	
		}
		
	  
	
	
		if($res374=="1"){
			
				
		}
	
		elseif($res374=="2"){
			$k=$k+1;
		}
		
	  
	
	
		if($res375=="1"){
			
				
		}
	
		elseif($res375=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res376=="1"){
			
				
		}
	
		elseif($res376=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res377=="1"){
			$s_i=$s_i+1;	
				
		}
	
		elseif($res377=="2"){
	
		}
		
	  
	
	
		if($res378=="1"){
			
				
		}
	
		elseif($res378=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res379=="1"){
			
				
		}
	
		elseif($res379=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res380=="1"){
			
				
		}
	
		elseif($res380=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res381=="1"){
			$s_i=$s_i+1;
				
		}
	
		elseif($res381=="2"){
	
		}
		
	  
	
	
		if($res382=="1"){
			
				
		}
	
		elseif($res382=="2"){
			$k=$k+1;
		}
		
	  
	
	
		if($res383=="1"){
			$s_i=$s_i+1;	
				
		}
	
		elseif($res383=="2"){
			$k=$k+1;
		}
		
	  
	
	
		if($res384=="1"){
			
				
		}
	
		elseif($res384=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res385=="1"){
			
				
		}
	
		elseif($res385=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res386=="1"){
			$s_i=$s_i+1;	
				
		}
	
		elseif($res386=="2"){
	
		}
		
	  
	
	
		if($res387=="1"){
			
				
		}
	
		elseif($res387=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res388=="1"){
			$s_i=$s_i+1;	
				
		}
	
		elseif($res388=="2"){
	
		}
		
	  
	
	
		if($res389=="1"){
			
				
		}
	
		elseif($res389=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res390=="1"){
			$s_i=$s_i+1;	
				
		}
	
		elseif($res390=="2"){
	
		}
		
	  
	
	
		if($res391=="1"){
			
				
		}
	
		elseif($res391=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res392=="1"){
			
				
		}
	
		elseif($res392=="2"){
			$k=$k+1;
		}
		
	  
	
	
		if($res393=="1"){
			
				
		}
	
		elseif($res393=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res394=="1"){
			
				
		}
	
		elseif($res394=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res395=="1"){
			
				
		}
	
		elseif($res395=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res396=="1"){
			$s_i=$s_i+1;	
				
		}
	
		elseif($res396=="2"){
	
		}
		
	  
	
	
		if($res397=="1"){
			
				
		}
	
		elseif($res397=="2"){
			$k=$k+1;
		}
		
	  
	
	
		if($res398=="1"){
			$s_i=$s_i+1;
				
		}
	
		elseif($res398=="2"){
			$k=$k+1;
		}
		
	  
	
	
		if($res399=="1"){
			
				
		}
	
		elseif($res399=="2"){
			$s_i=$s_i+1;
		}
		
	  
	
	
		if($res400=="1"){
			
				
		}
	
		elseif($res400=="2"){
	
		}
		


	}

if($k==0){
$k_2= 0;
$k_4= 0;
$k_5= 0;
}
 else if($k==1){
	$k_2=0 ;
	$k_4= 1;
	$k_5= 1;	
}
else if($k==2){
	$k_2= 0;
	$k_4= 1;
	$k_5= 1;	
}
else if($k==3){
	$k_2= 1;
	$k_4= 2;
	$k_5= 2;	
}
else if($k==4){
	$k_2=1 ;
	$k_4= 2;
	$k_5= 2;	
}
else if($k==5){
	$k_2=1 ;
	$k_4= 2;
	$k_5= 3;	
}
else if($k==6){
	$k_2=1 ;
	$k_4=2 ;
	$k_5=3 ;	
}
else if($k==7){
	$k_2= 1;
	$k_4= 3;
	$k_5= 4;	
}
else if($k==8){
	$k_2= 2;
	$k_4= 3;
	$k_5= 4;	
}
else if($k==9){
	$k_2= 2;
	$k_4= 4;
	$k_5= 5;	
}
else if($k==10){
	$k_2= 1;
	$k_4= 4;
	$k_5= 5;	
}
else if($k==11){
	$k_2= 2;
	$k_4= 4;
	$k_5= 6;	
}
else if($k==12){
	$k_2= 2;
	$k_4= 5;
	$k_5= 6;	
}
else if($k==13){
	$k_2= 2;
	$k_4= 5;
	$k_5= 7;	
}
else if($k==14){
	$k_2= 3;
	$k_4= 6;
	$k_5= 7;	
}
else if($k==15){
	$k_2= 3;
	$k_4= 6;
	$k_5= 8;	
}
else if($k==16){
	$k_2= 3;
	$k_4= 6;
	$k_5= 8;	
}
else if($k==17){
	$k_2= 3;
	$k_4= 7;
	$k_5= 9;	
}
else if($k==18){
	$k_2= 4;
	$k_4= 7;
	$k_5= 9;	
}
else if($k==19){
	$k_2= 4;
	$k_4= 8;
	$k_5= 10;	
}
else if($k==20){
	$k_2= 4;
	$k_4= 8;
	$k_5= 10;	
}
else if($k==21){
	$k_2= 4;
	$k_4= 8;
	$k_5= 11;	
}
else if($k==22){
	$k_2= 4;
	$k_4= 9;
	$k_5= 11;	
}
else if($k==23){
	$k_2= 5;
	$k_4= 9;
	$k_5= 12;	
}
else if($k==24){
	$k_2= 5;
	$k_4= 10;
	$k_5= 12;	
}
else if($k==25){
	$k_2= 5;
	$k_4= 10;
	$k_5= 13;	
}
else if($k==26){
	$k_2= 5;
	$k_4= 10;
	$k_5= 13;	
}
else if($k==27){
	$k_2= 5;
	$k_4= 11;
	$k_5= 14;	
}
else if($k==28){
	$k_2=6 ;
	$k_4= 11;
	$k_5= 14;	
}
else if($k==29){
	$k_2= 6;
	$k_4= 12;
	$k_5= 15;	
}

else if($k==30){
	$k_2= 6;
	$k_4= 12;
	$k_5= 15;	
}
$h_s=$h_s+$k_5;
$b_d=$b_d+$k_4;
$b_t=$b_t+$k;
$s_k=$s_k+$k;
$m_a=$m_a+$k_2;


if($h_s>=10&&$h_s<=27&&  $d>=17&&$d<=32 &&  $h_i>=15 && $h_i<=32&&  $b_d>=20&&$b_d<=32&&  $m_f>=15&&$m_f<=40&&
  $b_a>=7&&$b_a<=20&&  $b_t>=22&&$b_t<=45&&  $s_k>=22&&$s_k<=50&&  $m_a>=17&&$m_a<=30&&  $s_i>=17&&$s_i<=42 ){
	  $y="  االمقاييس الااكلينيكية في الحدود الطبيعي وهذا يدل ان الحالة لا يوجد لديها مشاكل ";
  }
  else{
	$y=" لم يتكيف مع الاعراض  ";
  }
  if($b_a>20&&$b_d>32){
			$v21=" وجود مشاكل معا وجود حساسية";
			}
    if($d>32&&$s_i>42){
			$v22="  يدل على ان الحالة لديها اكتئاب ";
			}
			if($d>32&&$b_t>45){
			$v23=" يوجد لدية قلق معا اكتئاب ";
			}
			if($m_f>40){
			$v24=" يوجد لدية   اضطرابات جنسية ";
			}
			else if($m_f<15){
			$v24="   الحالة غير مقتنع او مقتنعة بجسده/ا او دوره/ا";
			}

  if($f>=20&&$s_k>=50){
	  $v1="لدية  فصام";
  }
  if($f>=20&&$s_k>=50&&$b_a>=20&&$s_i>=42){
	$v14="  يوجد لدى الحالة اخطاس تفكيرية ومشاكل اجتماعبة";
   }
   if($m_a>=30&&$b_a>=20){
	$v15="  يوجد لدى المريض اضطراب شخصي";
	}
	if($h_i>=32&&$s_i>=42){
		$v16="  يوجد لدى المريض  توهم مرض";
		}
		if($m_a>=30&&$b_t>=45){
			$v17="  يوجد لدى المريض  مشاكل اسرية ويوجد لدية اندفاعية";
			}
			if($f>=20&&$f<25){
				$v18="يوجد لدية مشاكل ";
				}
				else if($f<5){
					$v18=" انكار وجود مشاكل";
					}
				else if($f>=25&&$f<30){
				$v18="يوجد لدية ذهان ";
				}
					else if($f>=30){
				$v18="  مبالغ في عرض مشاكلة او غير فاهم اسئلة الاختبار ";
				}

  if($k<10){
	  $v2="توجد لدية مشاكل غير قادر على حله وضعف الاناء";
	  
  }
  else if($k>=14){
	$v2=" انكارة للمشكلات وقادر على حل مشكلاتة";
	
}


if($l<=4){
	$v3=" حالة تعرض نفسها بصوره سيئه (يدل على الاحباط) ";
}
else if($l>11){
	$v3="  الحالة تعرض نفسه بصورة مبالغة";
}
if($s_i>42){
	$v4="الحالة لديها انطواء وانسحاب اجتماعي";
}
else if($s_i<17){
	$v4=" الحالة اجتماعية";
}
else if($s_i>17&&$s_i<42){
	$v4="   الحالة علاقتها بالناس محدودة";
}

if($m_a>=30){
	$v5=" يوجد لدية اوهام عظمة وطاقة مرتفعة وعدم استقرار (كثير كلام او كثير حركة)";
}
else if($m_a>17&&$m_a<30){
	$v5="   يوجد لدية هيدومانيا";
}
if($m_a<17&&$d>33){
    $v20=" يعاني من فقدان متعة في الحياة";
    
}
if($m_a>30&&$d>33){
    $v20=" يوجد لدية هوس (ثنائي القطب)";
    
}
if($s_k>=50){
	$v6="يشكو من تشوش في التفكير";
}
else if($s_k<22){
	$v6="الحالة لديها اشياء مكبوتة";
}
if($b_a>=20){
	$v7=" شخص حساس ويوجد لدية هواجس";
}

if($b_d>=32){
	$v8="يدل على وجود سكوباث او قد يكون لدية مشاكل اسرية";
}
else if($b_d<=20){
	$v9="  شخص خاضع للقوانين والعادات";
}

if($h_i>=32){
	$v10="   يوجد لدية شكاوي جسدية مبالغ فيها";
}
else if($h_i<15){
	$v10="عدم وجود شكاوي جسدية";
}
if($d>32){
	$v11=" يوجد لدية  اكتئاب";
}
else if($d<=32 &&$d>=17){
	$v11=" يوجد لدية اكتئاب عابر او موقفي";
}
if($h_s>=27){
	$v12="يوج لدية توهم مرض و يشكوا من امراض جسدية";

}
else if($h_s<10){
	$v10=" يخلوا من المشاكل الاسرية";
}
if($b_t>=45){
	$v13="يدل على اجهاد وقد يكون لدية قلق نفسي";

}


$sumd=$d-$h_i;
$sumd2=$d-$h_s;

if($d>$h_i&&$d<=30 &&$d>$h_s&& $sumd>=5&&$sumd2>=10){
	$u1="شخصية اكتئابية";
}
else if($d>30&&$d<=37&&$d>$h_i&&$sumd2>=5&&$sumd>=5){
	$u1="شخصية اكتئابية";
}
else if($d>37&&$d<50&&$d>$h_i&&$sumd2>=5&&$sumd>=0){
	$u1="شخصية اكتئابية";
}

$sumh_i=$h_i-$d;
$sumh_i2=$h_i-$b_d;
if( $h_i>=0&& $h_i<=25&&  $sumh_i>=0&&$sumh_i2>=-4){
	$u2="شخصية هستيريا";
}
else if($h_i>25&& $h_i<=30&&$sumh_i>=3&&$sumh_i2>=1 ){
	$u2="شخصية هستيريا";
}
else if($h_i>30&& $h_i>$d&&$sumh_i>8&&$h_i>$d&&$sumh_i2>5){
	$u2="شخصية هستيريا";
}

$sumb_d=$b_d-$h_i;
$sumb_d2=$b_d-$m_f;
if($b_d>$h_i&&$b_d<20&&$b_d>$m_f&& $sumb_d2>=12&&$sumb_d2>=10){
	$u3="شخصية سيكوباثية";
}
else if($b_d>$h_i&&$b_d<22&&$b_d>=27&& $sumb_d2>=10&&$sumb_d2>=5){
	$u3="شخصية سيكوباثية";
}
else if($b_d>$h_i&&$b_d<27&&$sumb_d2>=12&&$sumb_d2>=-5){
	$u3="شخصية سيكوباثية";
}



$sumb_a=$b_a-$m_f;
$sumb_a2=$b_a-$b_t;
if( $b_a<=5 &&$sumb_a>=0&&$sumb_a2>=5){
	$u4="شخصية بارانودية";
}
elseif( $b_a<5 &&$b_a>=10&&$b_a<5&&$sumb_a>=-5&&$sumb_a2>=-10){
	$u4="شخصية بارانودية";
}

else if( $b_a<10&&$b_a>=20&& $sumb_a>=-10&&$sumb_a2>=-20){
	$u4="شخصية بارانودية";
}

else if( $b_a<20&&$b_a>=25 &&$sumb_a>=-20&&$sumb_a2>=-25){
	$u4="شخصية بارانودية";
}

else if( $b_a<25&&$b_a>=30&& $sumb_a>=-20&&$sumb_a2>=-30){
	$u4="شخصية بارانودية";
}
else if( $b_a<30&&$b_a>=35&& $sumb_a>=-15&&$sumb_a2>=-35){
	$u4="شخصية بارانودية";
}


$sumb_t=$b_t-$s_k;
$sumb_t2=$b_t-$b_a;
$sumb_t3=$b_a-$b_t;
if($b_t>$s_k&& $b_t>=30&& $sumb_t>=5&&$sumb_t2>=15&&$b_a<30){
	$u5="شخصية وسواسية";
}
else if($b_t>$s_k&& $b_t>30&& $b_t<40&&$sumb_t>=0&&$sumb_t2>=20&&$b_a<30){
	$u5="شخصية وسواسية";
}
else if($b_t>$s_k&& $b_t>=40&& $b_t<=57&&$sumb_t>=0&&$sumb_t2>35&&$b_a<30){
	$u5="شخصية وسواسية";
}





$sums_k=$s_k-$b_t;
$sums_k2=$s_k-$m_a;

if($s_k<=20&& $sums_k>=10&&$sums_k2>=7){
	$u6="شخصية فصامية";
}
else if($s_k>20&& $s_k<=35 &&$sums_k>=10&&$sums_k2>=11){
	$u6="شخصية فصامية";
}
else if($s_k>30&& $s_k<=62 &&$sums_k>=10&&$sums_k2>=25){
	$u6="شخصية فصامية";
}
else if($s_k>62 &&$s_k<=70 && $sums_k>=10&&$sums_k2>=32){
	$u6="شخصية فصامية";
}
else if($s_k>70 &&$s_k<=85 && $sums_k>=12&&$sums_k2>=40){
	$u6="شخصية فصامية";
}
else if($s_k>85 &&$s_k<=95 && $sums_k>=12&&$sums_k2>=48){
	$u6="شخصية فصامية";
}


$summ_a=$m_a-$s_k;
$summ_a2=$m_a-$s_i;

if($m_a>0&&$m_a<=10&& $summ_a>=10&&$summ_a2>=10){
	$u7="شخصية نرجسيه";
}
else if($m_a>10&&$m_a<=15&& $summ_a>=5&&$summ_a2>=10){
	$u7="شخصية نرجسيه";
}
else if($m_a>15&&$m_a<=20&& $summ_a>=-5&&$summ_a2>=5){
	$u7="شخصية نرجسيه";
}
else if($m_a>20&&$m_a<=25&& $summ_a>=-10&&$summ_a2>=-5){
	$u7="شخصية نرجسيه";
}
else if($m_a>25&&$m_a<=30&& $summ_a>=-21&&$summ_a2>=-10){
	$u7="شخصية نرجسيه";
}
else if($m_a>30&&$m_a<=35&& $summ_a>=-15&&$summ_a2>=-15){
	$u7="شخصية نرجسيه";
}
else if($m_a>35&&$m_a<=40&& $summ_a>=-30&&$summ_a2>=-20){
	$u7="شخصية نرجسيه";
}
else if($m_a>40&&$m_a<=45&& $summ_a>=-35&&$summ_a2>=-25){
	$u7="شخصية نرجسيه";
}
else if($m_a>45&&$m_a<=50&& $summ_a>=-39&&$summ_a2>=-20){
	$u7="شخصية نرجسيه";
}

	//////////////////////////////////////////////////
	
	
	
	
	  $name=$_POST["name"];

	  $sql="INSERT INTO mmbi(s_k,h_i,b_d,h_s,k,f,m_f,s_i,b_a,b_t,m_a,d,u,v,l,y,names,sex,branch,sname ) VALUES ('$s_k','$h_i','$b_d','$h_s','$k','$f','$m_f','$s_i','$b_a',
	  '$b_t','$m_a','$d','$u1 $u2 $u3$u4 $u5  $u6 $u7','$v1 $v2 $v3 $v4 $v5 $v6 $v7 $v8 $v9 $v10 $v11 $v12 $v13 $v14 $v15 $v16 $v17 $v18 $v21 $v22 $v23 $v24 $v20','$l','$y','$name','$sex','$branch','$sname')";
	  mysqli_query($con,$sql);
	  $extra="../";
echo "<script>window.location.href='".$extra."'</script>";


	 
	 
	  
	  

}
?>