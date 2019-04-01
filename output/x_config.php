<?php
//$host="localhost"; $user="root"; $pwd="";$sys_dbname="eexam";
$host="localhost"; $user="root"; $pwd="gengmalay86"; $sys_dbname="eexam";	
$conn = mysqli_connect($host, $user, $pwd, $sys_dbname);

function gred($mark){
	
	if($mark=='TH'){
		$pangkat='TH';
	}else if($mark!='TH' && $mark<40){
		$pangkat='مساعدة '; 
	}else if($mark>=40 && $mark<60){
		$pangkat='مقبول';
	}else if($mark>=60 && $mark<75){
		$pangkat='جيد';
	}else if($mark>=75 && $mark<90){
		$pangkat='جيد جدا';
	}else if($mark>=90 ){
		$pangkat='ممتاز';
	}else{ $pangkat="";};
			
return $pangkat;	
};

function gredSijil($mark){
	
	if($mark=='TH'){
		$pangkat='TH';
	}else if($mark!='TH' && $mark<40){
		$pangkat='<img src="images/musaadah.png" height="25px" />';
	}else if($mark>=40 && $mark<60){
		$pangkat='<img src="images/maqbul.png" height="25px" />';
	}else if($mark>=60 && $mark<75){
		$pangkat='<img src="images/jayyid.png" height="25px" />';
	}else if($mark>=75 && $mark<90){
		$pangkat='<img src="images/jayyidjidan.png" height="25px" />';
	}else if($mark>=90 ){
		$pangkat='<img src="images/mumtaz.png"  height="25px" />';
	}else{ $pangkat="";};
			
return $pangkat;	
};						


function gredSidiul($mark){
	
	if($mark=='TH'){
		$pangkat='TH';
	}else if($mark!='TH' && $mark<40){
		$pangkat='<img src="images/musaadah.png" height="15px" />';
	}else if($mark>=40 && $mark<60){
		$pangkat='<img src="images/maqbul.png" height="15px" />';
	}else if($mark>=60 && $mark<75){
		$pangkat='<img src="images/jayyid.png" height="15px" />';
	}else if($mark>=75 && $mark<90){
		$pangkat='<img src="images/jayyidjidan.png" height="15px" />';
	}else if($mark>=90 ){
		$pangkat='<img src="images/mumtaz.png"  height="15px" />';
	}else{ $pangkat="";};
			
return $pangkat;	
};			
				
function gredLulus($mark){	
	if($mark=='TH'){$pangkat='TH';	}
	else if($mark<40){		$pangkat='<img src="images/musaadah.png" height="25px" />';}
	else if($mark>=40){		$pangkat='<img src="images/lulus.png" height="25px" />';	}
	else{ $pangkat="";}
	return $pangkat;	};	
	
	
function gredPAFA($mark){	
	if($mark=='TH'){$pangkat='TH';	}
	else if($mark=='LULUS'){		$pangkat='<img src="images/lulus.png" height="25px" />';	}
	else if($mark=='GAGAL'){		$pangkat='<img src="images/musaadah.png" height="25px" />'; 	}
	else{ $pangkat="";};			
	return $pangkat;	};
	
	
	function gredPAFAsidiul($mark){	
	if($mark=='TH'){$pangkat='TH';	}
	else if($mark=='LULUS'){		$pangkat='<img src="images/lulus.png" height="15px" />';	}
	else if($mark=='GAGAL'){		$pangkat='<img src="images/musaadah.png" height="15px" />'; 	}
	else{ $pangkat="";};			
	return $pangkat;	};
	
	
function daerah($zon){		
if($zon=='SP'){				$daerah='SEPANG';	     }
else if($zon=='SB'){		$daerah='SABAK BERNAM';	}
else if($zon=='PG'){		$daerah='PETALING';  	}
else if($zon=='KS'){		$daerah='KUALA SELANGOR';}
else if($zon=='KL'){		$daerah='KUALA LANGAT'; }
else if($zon=='KG'){		$daerah='KLANG';  		}
else if($zon=='HS'){		$daerah='HULU SELANGOR';}
else if($zon=='GK'){		$daerah='GOMBAK';  		}
else if($zon=='HL'){		$daerah='HULU LANGAT';  }
else{ $daerah="";};
return $daerah;}


function peratus($markah)
{$markah=$markah*100;
$markah2=number_format($markah,2)."%";
return $markah2;		
};

function dates($date){
$newDate = date("d-m-Y", strtotime($date));	
return $newDate;
}

function jantina($gender){
	if($gender=='L'){
	$jantina='Lelaki';
	}else if($gender=='P'){
	$jantina='Perempuan';
	}else{}
	return $jantina;
}

function warganegara($data){
	if($data=='1'){
	$warga='Bumiputera';
	}else if($data=='2'){
	$warga='Lain-Lain.  Nyatakan:...............';
	}else{}
	return $warga;
}

function noArab($no){

switch ($no)
{
case 1:echo "١";break;case 2:echo "٢"; break;case 3:echo "٣";break;case 4:echo "٤";break;case 5:echo "٥";break;
case 6:echo "٦";break;case 7:echo "٧";break;case 8:echo "٨";break;case 9:echo "٩";break;case 0:echo "٠";
default:echo "";
}
}

?>