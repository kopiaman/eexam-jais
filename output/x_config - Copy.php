<?php
$host="localhost"; $user="root"; $pwd=""; $sys_dbname="eexam";


	
function gred($mark){
	
	if($mark=='TH'){
		$pangkat='TH';
	}else if($mark!='TH' && $mark<40){
		$pangkat='مساعدة '; 
	}else if($mark>=40 && $mark<60){
		$pangkat='مقبول';
	}else if($mark>=60 && $mark<75){
		$pangkat='جدا';
	}else if($mark>=75 && $mark<90){
		$pangkat='جيد جدا';
	}else if($mark>=90 ){
		$pangkat='ممتاز';
	}else{ $pangkat="";};
			
return $pangkat;	
};

function gredLulus($mark){
	if($mark=='TH'){
		$pangkat='TH';
	}else if($mark<40){
		$pangkat='مساعدة';
	}else if($mark>=40){
		$pangkat='لولوس';
	}else{ $pangkat="";};
return $pangkat;	
};

	
function gredPAFA($mark){
	
	if($mark=='TH'){
		$pangkat='TH';
	}else if($mark=='LULUS'){
		$pangkat='لولوس';
	}else if($mark=='GAGAL'){
		$pangkat='مساعدة';  
	}else{ $pangkat="";};
			
return $pangkat;	
};	

function daerah($zon){
	
	if($zon=='SP'){
		$daerah='SEPANG';
	}else if($zon=='SB'){
		$daerah='SABAK BERNAM';
	}else if($zon=='PG'){
		$daerah='PETALING';  
	}else if($zon=='KS'){
		$daerah='KUALA SELANGOR';  
	}else if($zon=='KL'){
		$daerah='KUALA LANGAT';  
		
	}else if($zon=='KG'){
		$daerah='KLANG';  	
	}else if($zon=='HS'){
		$daerah='HULU SELANGOR';  		
		
	}else if($zon=='GK'){
		$daerah='GOMBAK';  	
		
	}else if($zon=='HL'){
		$daerah='HULU LANGAT';  									
	}else{ $daerah="";};
	return $daerah;
}

function peratus($markah){
$markah=$markah*100;
$markah2=number_format($markah,2)."%";
return $markah2;	
	
}
?>