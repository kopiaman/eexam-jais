<?php
require_once(getabspath("classes/cipherer.php"));




$tdataanalisa_kelulusan_psra_all = array();
	$tdataanalisa_kelulusan_psra_all[".truncateText"] = true;
	$tdataanalisa_kelulusan_psra_all[".NumberOfChars"] = 80;
	$tdataanalisa_kelulusan_psra_all[".ShortName"] = "analisa_kelulusan_psra_all";
	$tdataanalisa_kelulusan_psra_all[".OwnerID"] = "";
	$tdataanalisa_kelulusan_psra_all[".OriginalTable"] = "exam_marking";

//	field labels
$fieldLabelsanalisa_kelulusan_psra_all = array();
$fieldToolTipsanalisa_kelulusan_psra_all = array();
$pageTitlesanalisa_kelulusan_psra_all = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsanalisa_kelulusan_psra_all["English"] = array();
	$fieldToolTipsanalisa_kelulusan_psra_all["English"] = array();
	$pageTitlesanalisa_kelulusan_psra_all["English"] = array();
	$fieldLabelsanalisa_kelulusan_psra_all["English"]["eYear"] = "Tahun";
	$fieldToolTipsanalisa_kelulusan_psra_all["English"]["eYear"] = "";
	$fieldLabelsanalisa_kelulusan_psra_all["English"]["mumtaz"] = "Mumtaz";
	$fieldToolTipsanalisa_kelulusan_psra_all["English"]["mumtaz"] = "";
	$fieldLabelsanalisa_kelulusan_psra_all["English"]["Mpercent"] = "%";
	$fieldToolTipsanalisa_kelulusan_psra_all["English"]["Mpercent"] = "";
	$fieldLabelsanalisa_kelulusan_psra_all["English"]["JJ"] = "Jayyid Jidan";
	$fieldToolTipsanalisa_kelulusan_psra_all["English"]["JJ"] = "";
	$fieldLabelsanalisa_kelulusan_psra_all["English"]["JJpercent"] = "%";
	$fieldToolTipsanalisa_kelulusan_psra_all["English"]["JJpercent"] = "";
	$fieldLabelsanalisa_kelulusan_psra_all["English"]["jidan"] = "Jidan";
	$fieldToolTipsanalisa_kelulusan_psra_all["English"]["jidan"] = "";
	$fieldLabelsanalisa_kelulusan_psra_all["English"]["Jpercent"] = "%";
	$fieldToolTipsanalisa_kelulusan_psra_all["English"]["Jpercent"] = "";
	$fieldLabelsanalisa_kelulusan_psra_all["English"]["maqbul"] = "Maqbul";
	$fieldToolTipsanalisa_kelulusan_psra_all["English"]["maqbul"] = "";
	$fieldLabelsanalisa_kelulusan_psra_all["English"]["MQpercent"] = "%";
	$fieldToolTipsanalisa_kelulusan_psra_all["English"]["MQpercent"] = "";
	$fieldLabelsanalisa_kelulusan_psra_all["English"]["bilCalon"] = "Bil Calon";
	$fieldToolTipsanalisa_kelulusan_psra_all["English"]["bilCalon"] = "";
	$fieldLabelsanalisa_kelulusan_psra_all["English"]["calonHadir"] = "Calon Hadir";
	$fieldToolTipsanalisa_kelulusan_psra_all["English"]["calonHadir"] = "";
	$fieldLabelsanalisa_kelulusan_psra_all["English"]["calonTakHadir"] = "Calon Tak Hadir";
	$fieldToolTipsanalisa_kelulusan_psra_all["English"]["calonTakHadir"] = "";
	$fieldLabelsanalisa_kelulusan_psra_all["English"]["calonLulus"] = "Calon Lulus";
	$fieldToolTipsanalisa_kelulusan_psra_all["English"]["calonLulus"] = "";
	$fieldLabelsanalisa_kelulusan_psra_all["English"]["peratusLulus"] = "%";
	$fieldToolTipsanalisa_kelulusan_psra_all["English"]["peratusLulus"] = "";
	$fieldLabelsanalisa_kelulusan_psra_all["English"]["peratusGagal"] = "%";
	$fieldToolTipsanalisa_kelulusan_psra_all["English"]["peratusGagal"] = "";
	$fieldLabelsanalisa_kelulusan_psra_all["English"]["calonDhaif"] = "Musaadah";
	$fieldToolTipsanalisa_kelulusan_psra_all["English"]["calonDhaif"] = "";
	if (count($fieldToolTipsanalisa_kelulusan_psra_all["English"]))
		$tdataanalisa_kelulusan_psra_all[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsanalisa_kelulusan_psra_all[""] = array();
	$fieldToolTipsanalisa_kelulusan_psra_all[""] = array();
	$pageTitlesanalisa_kelulusan_psra_all[""] = array();
	if (count($fieldToolTipsanalisa_kelulusan_psra_all[""]))
		$tdataanalisa_kelulusan_psra_all[".isUseToolTips"] = true;
}


	$tdataanalisa_kelulusan_psra_all[".NCSearch"] = true;



$tdataanalisa_kelulusan_psra_all[".shortTableName"] = "analisa_kelulusan_psra_all";
$tdataanalisa_kelulusan_psra_all[".nSecOptions"] = 0;
$tdataanalisa_kelulusan_psra_all[".recsPerRowList"] = 1;
$tdataanalisa_kelulusan_psra_all[".recsPerRowPrint"] = 1;
$tdataanalisa_kelulusan_psra_all[".mainTableOwnerID"] = "";
$tdataanalisa_kelulusan_psra_all[".moveNext"] = 1;
$tdataanalisa_kelulusan_psra_all[".entityType"] = 1;

$tdataanalisa_kelulusan_psra_all[".strOriginalTableName"] = "exam_marking";




$tdataanalisa_kelulusan_psra_all[".showAddInPopup"] = false;

$tdataanalisa_kelulusan_psra_all[".showEditInPopup"] = false;

$tdataanalisa_kelulusan_psra_all[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataanalisa_kelulusan_psra_all[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataanalisa_kelulusan_psra_all[".fieldsForRegister"] = array();

$tdataanalisa_kelulusan_psra_all[".listAjax"] = false;

	$tdataanalisa_kelulusan_psra_all[".audit"] = false;

	$tdataanalisa_kelulusan_psra_all[".locking"] = false;



$tdataanalisa_kelulusan_psra_all[".list"] = true;



$tdataanalisa_kelulusan_psra_all[".exportTo"] = true;



$tdataanalisa_kelulusan_psra_all[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataanalisa_kelulusan_psra_all[".searchSaving"] = false;
//

$tdataanalisa_kelulusan_psra_all[".showSearchPanel"] = true;
		$tdataanalisa_kelulusan_psra_all[".flexibleSearch"] = true;

if (isMobile())
	$tdataanalisa_kelulusan_psra_all[".isUseAjaxSuggest"] = false;
else
	$tdataanalisa_kelulusan_psra_all[".isUseAjaxSuggest"] = true;

$tdataanalisa_kelulusan_psra_all[".rowHighlite"] = true;


																				
$tdataanalisa_kelulusan_psra_all[".addPageEvents"] = false;

// use timepicker for search panel
$tdataanalisa_kelulusan_psra_all[".isUseTimeForSearch"] = false;





$tdataanalisa_kelulusan_psra_all[".allSearchFields"] = array();
$tdataanalisa_kelulusan_psra_all[".filterFields"] = array();
$tdataanalisa_kelulusan_psra_all[".requiredSearchFields"] = array();



$tdataanalisa_kelulusan_psra_all[".googleLikeFields"] = array();
$tdataanalisa_kelulusan_psra_all[".googleLikeFields"][] = "mumtaz";
$tdataanalisa_kelulusan_psra_all[".googleLikeFields"][] = "Mpercent";
$tdataanalisa_kelulusan_psra_all[".googleLikeFields"][] = "JJ";
$tdataanalisa_kelulusan_psra_all[".googleLikeFields"][] = "JJpercent";
$tdataanalisa_kelulusan_psra_all[".googleLikeFields"][] = "jidan";
$tdataanalisa_kelulusan_psra_all[".googleLikeFields"][] = "Jpercent";
$tdataanalisa_kelulusan_psra_all[".googleLikeFields"][] = "maqbul";
$tdataanalisa_kelulusan_psra_all[".googleLikeFields"][] = "MQpercent";
$tdataanalisa_kelulusan_psra_all[".googleLikeFields"][] = "bilCalon";
$tdataanalisa_kelulusan_psra_all[".googleLikeFields"][] = "calonHadir";
$tdataanalisa_kelulusan_psra_all[".googleLikeFields"][] = "calonTakHadir";
$tdataanalisa_kelulusan_psra_all[".googleLikeFields"][] = "calonLulus";
$tdataanalisa_kelulusan_psra_all[".googleLikeFields"][] = "peratusLulus";
$tdataanalisa_kelulusan_psra_all[".googleLikeFields"][] = "peratusGagal";
$tdataanalisa_kelulusan_psra_all[".googleLikeFields"][] = "calonDhaif";

$tdataanalisa_kelulusan_psra_all[".panelSearchFields"] = array();
$tdataanalisa_kelulusan_psra_all[".searchPanelOptions"] = array();
$tdataanalisa_kelulusan_psra_all[".panelSearchFields"][] = "eYear";
	

$tdataanalisa_kelulusan_psra_all[".tableType"] = "list";

$tdataanalisa_kelulusan_psra_all[".printerPageOrientation"] = 0;
$tdataanalisa_kelulusan_psra_all[".nPrinterPageScale"] = 100;

$tdataanalisa_kelulusan_psra_all[".nPrinterSplitRecords"] = 40;

$tdataanalisa_kelulusan_psra_all[".nPrinterPDFSplitRecords"] = 40;



$tdataanalisa_kelulusan_psra_all[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataanalisa_kelulusan_psra_all[".pageSize"] = 20;

$tdataanalisa_kelulusan_psra_all[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY eYear DESC, mumtaz DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataanalisa_kelulusan_psra_all[".strOrderBy"] = $tstrOrderBy;

$tdataanalisa_kelulusan_psra_all[".orderindexes"] = array();
$tdataanalisa_kelulusan_psra_all[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "eYear");
$tdataanalisa_kelulusan_psra_all[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "mumtaz");

$tdataanalisa_kelulusan_psra_all[".sqlHead"] = "SELECT eYear,  mumtaz,  Mpercent,  JJ,  JJpercent,  jidan,  Jpercent,  maqbul,  MQpercent,  bilCalon,  calonHadir,  calonTakHadir,  calonLulus,  (calonLulus/calonHadir) AS peratusLulus,  (1-(calonLulus/calonHadir)) AS peratusGagal,  calonDhaif";
$tdataanalisa_kelulusan_psra_all[".sqlFrom"] = "FROM (  SELECT  eYear,  COUNT(sid) AS bilCalon,  COUNT(if(takhadir>0, sid, NULL)) AS calonTakHadir,  COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) AS calonHadir,  COUNT(if(peratus>=0.4, sid, NULL)) AS calonLulus,  COUNT(if(peratus>=0.9, sid, NULL)) AS mumtaz,  COUNT(if(peratus>=0.9, sid, NULL)) AS Mpercent,  COUNT(if(peratus>=0.75 AND peratus<0.9, sid, NULL)) AS JJ,  COUNT(if(peratus>=0.75 AND peratus<0.9, sid, NULL)) AS JJpercent,  COUNT(if(peratus>=0.6 AND peratus<0.75, sid, NULL)) AS jidan,  COUNT(if(peratus>=0.6 AND peratus<0.75, sid, NULL)) AS Jpercent,  COUNT(if(peratus>=0.4 AND peratus<0.6, sid, NULL)) AS maqbul,  COUNT(if(peratus>=0.4 AND peratus<0.6, sid, NULL)) AS MQpercent,  COUNT(if(peratus<0.4 AND takhadir=0, sid, NULL)) AS calonDhaif  FROM (  		SELECT  sid AS sid,  eYear,  eType,  COUNT(if(s1='TH' AND s2='TH' AND s3='TH' AND s4='TH' AND s5='TH', exam_marking.sid, NULL)) AS takhadir,  SUM(s1+s2+s3+s4+s5) AS totalMark,  SUM(s1+s2+s3+s4+s5)/500 AS peratus  FROM exam_marking  LEFT OUTER JOIN school ON exam_marking.sCode = school.sCode AND eType = school.sType  WHERE eType ='PSRA'  GROUP BY sid  ) AS Sub1  GROUP BY eYear  ) AS Sub2";
$tdataanalisa_kelulusan_psra_all[".sqlWhereExpr"] = "";
$tdataanalisa_kelulusan_psra_all[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataanalisa_kelulusan_psra_all[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataanalisa_kelulusan_psra_all[".arrGroupsPerPage"] = $arrGPP;

$tdataanalisa_kelulusan_psra_all[".highlightSearchResults"] = true;

$tableKeysanalisa_kelulusan_psra_all = array();
$tableKeysanalisa_kelulusan_psra_all[] = "eYear";
$tdataanalisa_kelulusan_psra_all[".Keys"] = $tableKeysanalisa_kelulusan_psra_all;

$tdataanalisa_kelulusan_psra_all[".listFields"] = array();
$tdataanalisa_kelulusan_psra_all[".listFields"][] = "eYear";
$tdataanalisa_kelulusan_psra_all[".listFields"][] = "mumtaz";
$tdataanalisa_kelulusan_psra_all[".listFields"][] = "Mpercent";
$tdataanalisa_kelulusan_psra_all[".listFields"][] = "JJ";
$tdataanalisa_kelulusan_psra_all[".listFields"][] = "JJpercent";
$tdataanalisa_kelulusan_psra_all[".listFields"][] = "jidan";
$tdataanalisa_kelulusan_psra_all[".listFields"][] = "Jpercent";
$tdataanalisa_kelulusan_psra_all[".listFields"][] = "maqbul";
$tdataanalisa_kelulusan_psra_all[".listFields"][] = "MQpercent";
$tdataanalisa_kelulusan_psra_all[".listFields"][] = "bilCalon";
$tdataanalisa_kelulusan_psra_all[".listFields"][] = "calonHadir";
$tdataanalisa_kelulusan_psra_all[".listFields"][] = "calonTakHadir";
$tdataanalisa_kelulusan_psra_all[".listFields"][] = "calonLulus";
$tdataanalisa_kelulusan_psra_all[".listFields"][] = "peratusLulus";
$tdataanalisa_kelulusan_psra_all[".listFields"][] = "calonDhaif";
$tdataanalisa_kelulusan_psra_all[".listFields"][] = "peratusGagal";

$tdataanalisa_kelulusan_psra_all[".hideMobileList"] = array();


$tdataanalisa_kelulusan_psra_all[".viewFields"] = array();

$tdataanalisa_kelulusan_psra_all[".addFields"] = array();

$tdataanalisa_kelulusan_psra_all[".masterListFields"] = array();
$tdataanalisa_kelulusan_psra_all[".masterListFields"][] = "eYear";
$tdataanalisa_kelulusan_psra_all[".masterListFields"][] = "mumtaz";
$tdataanalisa_kelulusan_psra_all[".masterListFields"][] = "Mpercent";
$tdataanalisa_kelulusan_psra_all[".masterListFields"][] = "JJ";
$tdataanalisa_kelulusan_psra_all[".masterListFields"][] = "JJpercent";
$tdataanalisa_kelulusan_psra_all[".masterListFields"][] = "jidan";
$tdataanalisa_kelulusan_psra_all[".masterListFields"][] = "Jpercent";
$tdataanalisa_kelulusan_psra_all[".masterListFields"][] = "maqbul";
$tdataanalisa_kelulusan_psra_all[".masterListFields"][] = "MQpercent";
$tdataanalisa_kelulusan_psra_all[".masterListFields"][] = "bilCalon";
$tdataanalisa_kelulusan_psra_all[".masterListFields"][] = "calonHadir";
$tdataanalisa_kelulusan_psra_all[".masterListFields"][] = "calonTakHadir";
$tdataanalisa_kelulusan_psra_all[".masterListFields"][] = "calonLulus";
$tdataanalisa_kelulusan_psra_all[".masterListFields"][] = "peratusLulus";
$tdataanalisa_kelulusan_psra_all[".masterListFields"][] = "peratusGagal";
$tdataanalisa_kelulusan_psra_all[".masterListFields"][] = "calonDhaif";

$tdataanalisa_kelulusan_psra_all[".inlineAddFields"] = array();

$tdataanalisa_kelulusan_psra_all[".editFields"] = array();

$tdataanalisa_kelulusan_psra_all[".inlineEditFields"] = array();

$tdataanalisa_kelulusan_psra_all[".exportFields"] = array();
$tdataanalisa_kelulusan_psra_all[".exportFields"][] = "eYear";
$tdataanalisa_kelulusan_psra_all[".exportFields"][] = "mumtaz";
$tdataanalisa_kelulusan_psra_all[".exportFields"][] = "Mpercent";
$tdataanalisa_kelulusan_psra_all[".exportFields"][] = "JJ";
$tdataanalisa_kelulusan_psra_all[".exportFields"][] = "JJpercent";
$tdataanalisa_kelulusan_psra_all[".exportFields"][] = "jidan";
$tdataanalisa_kelulusan_psra_all[".exportFields"][] = "Jpercent";
$tdataanalisa_kelulusan_psra_all[".exportFields"][] = "maqbul";
$tdataanalisa_kelulusan_psra_all[".exportFields"][] = "MQpercent";
$tdataanalisa_kelulusan_psra_all[".exportFields"][] = "bilCalon";
$tdataanalisa_kelulusan_psra_all[".exportFields"][] = "calonHadir";
$tdataanalisa_kelulusan_psra_all[".exportFields"][] = "calonTakHadir";
$tdataanalisa_kelulusan_psra_all[".exportFields"][] = "calonLulus";
$tdataanalisa_kelulusan_psra_all[".exportFields"][] = "peratusLulus";
$tdataanalisa_kelulusan_psra_all[".exportFields"][] = "peratusGagal";
$tdataanalisa_kelulusan_psra_all[".exportFields"][] = "calonDhaif";

$tdataanalisa_kelulusan_psra_all[".importFields"] = array();

$tdataanalisa_kelulusan_psra_all[".printFields"] = array();

//	eYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "eYear";
	$fdata["GoodName"] = "eYear";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_all","eYear");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "eYear";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eYear";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 50;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_kelulusan_psra_all["eYear"] = $fdata;
//	mumtaz
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "mumtaz";
	$fdata["GoodName"] = "mumtaz";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_all","mumtaz");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mumtaz";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mumtaz";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_kelulusan_psra_all["mumtaz"] = $fdata;
//	Mpercent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Mpercent";
	$fdata["GoodName"] = "Mpercent";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_all","Mpercent");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Mpercent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Mpercent";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_kelulusan_psra_all["Mpercent"] = $fdata;
//	JJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "JJ";
	$fdata["GoodName"] = "JJ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_all","JJ");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "JJ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "JJ";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_kelulusan_psra_all["JJ"] = $fdata;
//	JJpercent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "JJpercent";
	$fdata["GoodName"] = "JJpercent";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_all","JJpercent");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "JJpercent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "JJpercent";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_kelulusan_psra_all["JJpercent"] = $fdata;
//	jidan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "jidan";
	$fdata["GoodName"] = "jidan";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_all","jidan");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "jidan";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jidan";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_kelulusan_psra_all["jidan"] = $fdata;
//	Jpercent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Jpercent";
	$fdata["GoodName"] = "Jpercent";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_all","Jpercent");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Jpercent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Jpercent";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_kelulusan_psra_all["Jpercent"] = $fdata;
//	maqbul
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "maqbul";
	$fdata["GoodName"] = "maqbul";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_all","maqbul");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "maqbul";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "maqbul";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_kelulusan_psra_all["maqbul"] = $fdata;
//	MQpercent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "MQpercent";
	$fdata["GoodName"] = "MQpercent";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_all","MQpercent");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "MQpercent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MQpercent";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Custom");

	
	
	
	
	
	
	
	
	
	
	
	
	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_kelulusan_psra_all["MQpercent"] = $fdata;
//	bilCalon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "bilCalon";
	$fdata["GoodName"] = "bilCalon";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_all","bilCalon");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "bilCalon";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bilCalon";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_kelulusan_psra_all["bilCalon"] = $fdata;
//	calonHadir
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "calonHadir";
	$fdata["GoodName"] = "calonHadir";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_all","calonHadir");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "calonHadir";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calonHadir";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_kelulusan_psra_all["calonHadir"] = $fdata;
//	calonTakHadir
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "calonTakHadir";
	$fdata["GoodName"] = "calonTakHadir";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_all","calonTakHadir");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "calonTakHadir";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calonTakHadir";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_kelulusan_psra_all["calonTakHadir"] = $fdata;
//	calonLulus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "calonLulus";
	$fdata["GoodName"] = "calonLulus";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_all","calonLulus");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "calonLulus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calonLulus";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_kelulusan_psra_all["calonLulus"] = $fdata;
//	peratusLulus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "peratusLulus";
	$fdata["GoodName"] = "peratusLulus";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_all","peratusLulus");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "peratusLulus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(calonLulus/calonHadir)";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_kelulusan_psra_all["peratusLulus"] = $fdata;
//	peratusGagal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "peratusGagal";
	$fdata["GoodName"] = "peratusGagal";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_all","peratusGagal");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "peratusGagal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(1-(calonLulus/calonHadir))";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_kelulusan_psra_all["peratusGagal"] = $fdata;
//	calonDhaif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "calonDhaif";
	$fdata["GoodName"] = "calonDhaif";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_all","calonDhaif");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "calonDhaif";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calonDhaif";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "number";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdataanalisa_kelulusan_psra_all["calonDhaif"] = $fdata;


$tables_data["analisa_kelulusan_psra_all"]=&$tdataanalisa_kelulusan_psra_all;
$field_labels["analisa_kelulusan_psra_all"] = &$fieldLabelsanalisa_kelulusan_psra_all;
$fieldToolTips["analisa_kelulusan_psra_all"] = &$fieldToolTipsanalisa_kelulusan_psra_all;
$page_titles["analisa_kelulusan_psra_all"] = &$pageTitlesanalisa_kelulusan_psra_all;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["analisa_kelulusan_psra_all"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["analisa_kelulusan_psra_all"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_analisa_kelulusan_psra_all()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "eYear,  mumtaz,  Mpercent,  JJ,  JJpercent,  jidan,  Jpercent,  maqbul,  MQpercent,  bilCalon,  calonHadir,  calonTakHadir,  calonLulus,  (calonLulus/calonHadir) AS peratusLulus,  (1-(calonLulus/calonHadir)) AS peratusGagal,  calonDhaif";
$proto0["m_strFrom"] = "FROM (  SELECT  eYear,  COUNT(sid) AS bilCalon,  COUNT(if(takhadir>0, sid, NULL)) AS calonTakHadir,  COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) AS calonHadir,  COUNT(if(peratus>=0.4, sid, NULL)) AS calonLulus,  COUNT(if(peratus>=0.9, sid, NULL)) AS mumtaz,  COUNT(if(peratus>=0.9, sid, NULL)) AS Mpercent,  COUNT(if(peratus>=0.75 AND peratus<0.9, sid, NULL)) AS JJ,  COUNT(if(peratus>=0.75 AND peratus<0.9, sid, NULL)) AS JJpercent,  COUNT(if(peratus>=0.6 AND peratus<0.75, sid, NULL)) AS jidan,  COUNT(if(peratus>=0.6 AND peratus<0.75, sid, NULL)) AS Jpercent,  COUNT(if(peratus>=0.4 AND peratus<0.6, sid, NULL)) AS maqbul,  COUNT(if(peratus>=0.4 AND peratus<0.6, sid, NULL)) AS MQpercent,  COUNT(if(peratus<0.4 AND takhadir=0, sid, NULL)) AS calonDhaif  FROM (  		SELECT  sid AS sid,  eYear,  eType,  COUNT(if(s1='TH' AND s2='TH' AND s3='TH' AND s4='TH' AND s5='TH', exam_marking.sid, NULL)) AS takhadir,  SUM(s1+s2+s3+s4+s5) AS totalMark,  SUM(s1+s2+s3+s4+s5)/500 AS peratus  FROM exam_marking  LEFT OUTER JOIN school ON exam_marking.sCode = school.sCode AND eType = school.sType  WHERE eType ='PSRA'  GROUP BY sid  ) AS Sub1  GROUP BY eYear  ) AS Sub2";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY eYear DESC, mumtaz DESC";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto3=array();
$proto3["m_sql"] = "";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto5=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_all"
));

$proto5["m_sql"] = "eYear";
$proto5["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "mumtaz",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_all"
));

$proto7["m_sql"] = "mumtaz";
$proto7["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "Mpercent",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_all"
));

$proto9["m_sql"] = "Mpercent";
$proto9["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "JJ",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_all"
));

$proto11["m_sql"] = "JJ";
$proto11["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "JJpercent",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_all"
));

$proto13["m_sql"] = "JJpercent";
$proto13["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "jidan",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_all"
));

$proto15["m_sql"] = "jidan";
$proto15["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Jpercent",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_all"
));

$proto17["m_sql"] = "Jpercent";
$proto17["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "maqbul",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_all"
));

$proto19["m_sql"] = "maqbul";
$proto19["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "MQpercent",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_all"
));

$proto21["m_sql"] = "MQpercent";
$proto21["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "bilCalon",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_all"
));

$proto23["m_sql"] = "bilCalon";
$proto23["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "calonHadir",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_all"
));

$proto25["m_sql"] = "calonHadir";
$proto25["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "calonTakHadir",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_all"
));

$proto27["m_sql"] = "calonTakHadir";
$proto27["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "calonLulus",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_all"
));

$proto29["m_sql"] = "calonLulus";
$proto29["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(calonLulus/calonHadir)"
));

$proto31["m_sql"] = "(calonLulus/calonHadir)";
$proto31["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "peratusLulus";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(1-(calonLulus/calonHadir))"
));

$proto33["m_sql"] = "(1-(calonLulus/calonHadir))";
$proto33["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "peratusGagal";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "calonDhaif",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_all"
));

$proto35["m_sql"] = "calonDhaif";
$proto35["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto37=array();
$proto37["m_link"] = "SQLL_MAIN";
			$proto38=array();
$proto38["m_strHead"] = "  SELECT";
$proto38["m_strFieldList"] = "eYear,  COUNT(sid) AS bilCalon,  COUNT(if(takhadir>0, sid, NULL)) AS calonTakHadir,  COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) AS calonHadir,  COUNT(if(peratus>=0.4, sid, NULL)) AS calonLulus,  COUNT(if(peratus>=0.9, sid, NULL)) AS mumtaz,  COUNT(if(peratus>=0.9, sid, NULL)) AS Mpercent,  COUNT(if(peratus>=0.75 AND peratus<0.9, sid, NULL)) AS JJ,  COUNT(if(peratus>=0.75 AND peratus<0.9, sid, NULL)) AS JJpercent,  COUNT(if(peratus>=0.6 AND peratus<0.75, sid, NULL)) AS jidan,  COUNT(if(peratus>=0.6 AND peratus<0.75, sid, NULL)) AS Jpercent,  COUNT(if(peratus>=0.4 AND peratus<0.6, sid, NULL)) AS maqbul,  COUNT(if(peratus>=0.4 AND peratus<0.6, sid, NULL)) AS MQpercent,  COUNT(if(peratus<0.4 AND takhadir=0, sid, NULL)) AS calonDhaif";
$proto38["m_strFrom"] = "FROM (  		SELECT  sid AS sid,  eYear,  eType,  COUNT(if(s1='TH' AND s2='TH' AND s3='TH' AND s4='TH' AND s5='TH', exam_marking.sid, NULL)) AS takhadir,  SUM(s1+s2+s3+s4+s5) AS totalMark,  SUM(s1+s2+s3+s4+s5)/500 AS peratus  FROM exam_marking  LEFT OUTER JOIN school ON exam_marking.sCode = school.sCode AND eType = school.sType  WHERE eType ='PSRA'  GROUP BY sid  ) AS Sub1";
$proto38["m_strWhere"] = "";
$proto38["m_strOrderBy"] = "";
$proto38["m_strTail"] = "";
			$proto38["cipherer"] = null;
$proto39=array();
$proto39["m_sql"] = "";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto39["m_column"]=$obj;
$proto39["m_contained"] = array();
$proto39["m_strCase"] = "";
$proto39["m_havingmode"] = false;
$proto39["m_inBrackets"] = false;
$proto39["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto39);

$proto38["m_where"] = $obj;
$proto41=array();
$proto41["m_sql"] = "";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto41["m_column"]=$obj;
$proto41["m_contained"] = array();
$proto41["m_strCase"] = "";
$proto41["m_havingmode"] = false;
$proto41["m_inBrackets"] = false;
$proto41["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto41);

$proto38["m_having"] = $obj;
$proto38["m_fieldlist"] = array();
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_kelulusan_psra_all"
));

$proto43["m_sql"] = "eYear";
$proto43["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto38["m_fieldlist"][]=$obj;
						$proto45=array();
			$proto46=array();
$proto46["m_functiontype"] = "SQLF_COUNT";
$proto46["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_kelulusan_psra_all"
));

$proto46["m_arguments"][]=$obj;
$proto46["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto46);

$proto45["m_sql"] = "COUNT(sid)";
$proto45["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "bilCalon";
$obj = new SQLFieldListItem($proto45);

$proto38["m_fieldlist"][]=$obj;
						$proto48=array();
			$proto49=array();
$proto49["m_functiontype"] = "SQLF_COUNT";
$proto49["m_arguments"] = array();
						$proto50=array();
$proto50["m_functiontype"] = "SQLF_CUSTOM";
$proto50["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "takhadir>0"
));

$proto50["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "sid"
));

$proto50["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto50["m_arguments"][]=$obj;
$proto50["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto50);

$proto49["m_arguments"][]=$obj;
$proto49["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto49);

$proto48["m_sql"] = "COUNT(if(takhadir>0, sid, NULL))";
$proto48["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "calonTakHadir";
$obj = new SQLFieldListItem($proto48);

$proto38["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL))"
));

$proto54["m_sql"] = "COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL))";
$proto54["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "calonHadir";
$obj = new SQLFieldListItem($proto54);

$proto38["m_fieldlist"][]=$obj;
						$proto56=array();
			$proto57=array();
$proto57["m_functiontype"] = "SQLF_COUNT";
$proto57["m_arguments"] = array();
						$proto58=array();
$proto58["m_functiontype"] = "SQLF_CUSTOM";
$proto58["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "peratus>=0.4"
));

$proto58["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "sid"
));

$proto58["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto58["m_arguments"][]=$obj;
$proto58["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto58);

$proto57["m_arguments"][]=$obj;
$proto57["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto57);

$proto56["m_sql"] = "COUNT(if(peratus>=0.4, sid, NULL))";
$proto56["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "calonLulus";
$obj = new SQLFieldListItem($proto56);

$proto38["m_fieldlist"][]=$obj;
						$proto62=array();
			$proto63=array();
$proto63["m_functiontype"] = "SQLF_COUNT";
$proto63["m_arguments"] = array();
						$proto64=array();
$proto64["m_functiontype"] = "SQLF_CUSTOM";
$proto64["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "peratus>=0.9"
));

$proto64["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "sid"
));

$proto64["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto64["m_arguments"][]=$obj;
$proto64["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto64);

$proto63["m_arguments"][]=$obj;
$proto63["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto63);

$proto62["m_sql"] = "COUNT(if(peratus>=0.9, sid, NULL))";
$proto62["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "mumtaz";
$obj = new SQLFieldListItem($proto62);

$proto38["m_fieldlist"][]=$obj;
						$proto68=array();
			$proto69=array();
$proto69["m_functiontype"] = "SQLF_COUNT";
$proto69["m_arguments"] = array();
						$proto70=array();
$proto70["m_functiontype"] = "SQLF_CUSTOM";
$proto70["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "peratus>=0.9"
));

$proto70["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "sid"
));

$proto70["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto70["m_arguments"][]=$obj;
$proto70["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto70);

$proto69["m_arguments"][]=$obj;
$proto69["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto69);

$proto68["m_sql"] = "COUNT(if(peratus>=0.9, sid, NULL))";
$proto68["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "Mpercent";
$obj = new SQLFieldListItem($proto68);

$proto38["m_fieldlist"][]=$obj;
						$proto74=array();
			$proto75=array();
$proto75["m_functiontype"] = "SQLF_COUNT";
$proto75["m_arguments"] = array();
						$proto76=array();
$proto76["m_functiontype"] = "SQLF_CUSTOM";
$proto76["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "peratus>=0.75 AND peratus<0.9"
));

$proto76["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "sid"
));

$proto76["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto76["m_arguments"][]=$obj;
$proto76["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto76);

$proto75["m_arguments"][]=$obj;
$proto75["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto75);

$proto74["m_sql"] = "COUNT(if(peratus>=0.75 AND peratus<0.9, sid, NULL))";
$proto74["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "JJ";
$obj = new SQLFieldListItem($proto74);

$proto38["m_fieldlist"][]=$obj;
						$proto80=array();
			$proto81=array();
$proto81["m_functiontype"] = "SQLF_COUNT";
$proto81["m_arguments"] = array();
						$proto82=array();
$proto82["m_functiontype"] = "SQLF_CUSTOM";
$proto82["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "peratus>=0.75 AND peratus<0.9"
));

$proto82["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "sid"
));

$proto82["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto82["m_arguments"][]=$obj;
$proto82["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto82);

$proto81["m_arguments"][]=$obj;
$proto81["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto81);

$proto80["m_sql"] = "COUNT(if(peratus>=0.75 AND peratus<0.9, sid, NULL))";
$proto80["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "JJpercent";
$obj = new SQLFieldListItem($proto80);

$proto38["m_fieldlist"][]=$obj;
						$proto86=array();
			$proto87=array();
$proto87["m_functiontype"] = "SQLF_COUNT";
$proto87["m_arguments"] = array();
						$proto88=array();
$proto88["m_functiontype"] = "SQLF_CUSTOM";
$proto88["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "peratus>=0.6 AND peratus<0.75"
));

$proto88["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "sid"
));

$proto88["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto88["m_arguments"][]=$obj;
$proto88["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto88);

$proto87["m_arguments"][]=$obj;
$proto87["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto87);

$proto86["m_sql"] = "COUNT(if(peratus>=0.6 AND peratus<0.75, sid, NULL))";
$proto86["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "jidan";
$obj = new SQLFieldListItem($proto86);

$proto38["m_fieldlist"][]=$obj;
						$proto92=array();
			$proto93=array();
$proto93["m_functiontype"] = "SQLF_COUNT";
$proto93["m_arguments"] = array();
						$proto94=array();
$proto94["m_functiontype"] = "SQLF_CUSTOM";
$proto94["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "peratus>=0.6 AND peratus<0.75"
));

$proto94["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "sid"
));

$proto94["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto94["m_arguments"][]=$obj;
$proto94["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto94);

$proto93["m_arguments"][]=$obj;
$proto93["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto93);

$proto92["m_sql"] = "COUNT(if(peratus>=0.6 AND peratus<0.75, sid, NULL))";
$proto92["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "Jpercent";
$obj = new SQLFieldListItem($proto92);

$proto38["m_fieldlist"][]=$obj;
						$proto98=array();
			$proto99=array();
$proto99["m_functiontype"] = "SQLF_COUNT";
$proto99["m_arguments"] = array();
						$proto100=array();
$proto100["m_functiontype"] = "SQLF_CUSTOM";
$proto100["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "peratus>=0.4 AND peratus<0.6"
));

$proto100["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "sid"
));

$proto100["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto100["m_arguments"][]=$obj;
$proto100["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto100);

$proto99["m_arguments"][]=$obj;
$proto99["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto99);

$proto98["m_sql"] = "COUNT(if(peratus>=0.4 AND peratus<0.6, sid, NULL))";
$proto98["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "maqbul";
$obj = new SQLFieldListItem($proto98);

$proto38["m_fieldlist"][]=$obj;
						$proto104=array();
			$proto105=array();
$proto105["m_functiontype"] = "SQLF_COUNT";
$proto105["m_arguments"] = array();
						$proto106=array();
$proto106["m_functiontype"] = "SQLF_CUSTOM";
$proto106["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "peratus>=0.4 AND peratus<0.6"
));

$proto106["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "sid"
));

$proto106["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto106["m_arguments"][]=$obj;
$proto106["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto106);

$proto105["m_arguments"][]=$obj;
$proto105["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto105);

$proto104["m_sql"] = "COUNT(if(peratus>=0.4 AND peratus<0.6, sid, NULL))";
$proto104["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "MQpercent";
$obj = new SQLFieldListItem($proto104);

$proto38["m_fieldlist"][]=$obj;
						$proto110=array();
			$proto111=array();
$proto111["m_functiontype"] = "SQLF_COUNT";
$proto111["m_arguments"] = array();
						$proto112=array();
$proto112["m_functiontype"] = "SQLF_CUSTOM";
$proto112["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "peratus<0.4 AND takhadir=0"
));

$proto112["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "sid"
));

$proto112["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto112["m_arguments"][]=$obj;
$proto112["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto112);

$proto111["m_arguments"][]=$obj;
$proto111["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto111);

$proto110["m_sql"] = "COUNT(if(peratus<0.4 AND takhadir=0, sid, NULL))";
$proto110["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "calonDhaif";
$obj = new SQLFieldListItem($proto110);

$proto38["m_fieldlist"][]=$obj;
$proto38["m_fromlist"] = array();
												$proto116=array();
$proto116["m_link"] = "SQLL_MAIN";
			$proto117=array();
$proto117["m_strHead"] = "  		SELECT";
$proto117["m_strFieldList"] = "sid AS sid,  eYear,  eType,  COUNT(if(s1='TH' AND s2='TH' AND s3='TH' AND s4='TH' AND s5='TH', exam_marking.sid, NULL)) AS takhadir,  SUM(s1+s2+s3+s4+s5) AS totalMark,  SUM(s1+s2+s3+s4+s5)/500 AS peratus";
$proto117["m_strFrom"] = "FROM exam_marking  LEFT OUTER JOIN school ON exam_marking.sCode = school.sCode AND eType = school.sType";
$proto117["m_strWhere"] = "eType ='PSRA'";
$proto117["m_strOrderBy"] = "";
$proto117["m_strTail"] = "";
			$proto117["cipherer"] = null;
$proto118=array();
$proto118["m_sql"] = "eType ='PSRA'";
$proto118["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "analisa_kelulusan_psra_all"
));

$proto118["m_column"]=$obj;
$proto118["m_contained"] = array();
$proto118["m_strCase"] = "='PSRA'";
$proto118["m_havingmode"] = false;
$proto118["m_inBrackets"] = false;
$proto118["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto118);

$proto117["m_where"] = $obj;
$proto120=array();
$proto120["m_sql"] = "";
$proto120["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto120["m_column"]=$obj;
$proto120["m_contained"] = array();
$proto120["m_strCase"] = "";
$proto120["m_havingmode"] = false;
$proto120["m_inBrackets"] = false;
$proto120["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto120);

$proto117["m_having"] = $obj;
$proto117["m_fieldlist"] = array();
						$proto122=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "analisa_kelulusan_psra_all"
));

$proto122["m_sql"] = "sid";
$proto122["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto122["m_expr"]=$obj;
$proto122["m_alias"] = "sid";
$obj = new SQLFieldListItem($proto122);

$proto117["m_fieldlist"][]=$obj;
						$proto124=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "analisa_kelulusan_psra_all"
));

$proto124["m_sql"] = "eYear";
$proto124["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto124["m_expr"]=$obj;
$proto124["m_alias"] = "";
$obj = new SQLFieldListItem($proto124);

$proto117["m_fieldlist"][]=$obj;
						$proto126=array();
			$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "analisa_kelulusan_psra_all"
));

$proto126["m_sql"] = "eType";
$proto126["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "";
$obj = new SQLFieldListItem($proto126);

$proto117["m_fieldlist"][]=$obj;
						$proto128=array();
			$proto129=array();
$proto129["m_functiontype"] = "SQLF_COUNT";
$proto129["m_arguments"] = array();
						$proto130=array();
$proto130["m_functiontype"] = "SQLF_CUSTOM";
$proto130["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "s1='TH' AND s2='TH' AND s3='TH' AND s4='TH' AND s5='TH'"
));

$proto130["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto130["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto130["m_arguments"][]=$obj;
$proto130["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto130);

$proto129["m_arguments"][]=$obj;
$proto129["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto129);

$proto128["m_sql"] = "COUNT(if(s1='TH' AND s2='TH' AND s3='TH' AND s4='TH' AND s5='TH', exam_marking.sid, NULL))";
$proto128["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "takhadir";
$obj = new SQLFieldListItem($proto128);

$proto117["m_fieldlist"][]=$obj;
						$proto134=array();
			$proto135=array();
$proto135["m_functiontype"] = "SQLF_SUM";
$proto135["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "s1+s2+s3+s4+s5"
));

$proto135["m_arguments"][]=$obj;
$proto135["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto135);

$proto134["m_sql"] = "SUM(s1+s2+s3+s4+s5)";
$proto134["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "totalMark";
$obj = new SQLFieldListItem($proto134);

$proto117["m_fieldlist"][]=$obj;
						$proto137=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(s1+s2+s3+s4+s5)/500"
));

$proto137["m_sql"] = "SUM(s1+s2+s3+s4+s5)/500";
$proto137["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto137["m_expr"]=$obj;
$proto137["m_alias"] = "peratus";
$obj = new SQLFieldListItem($proto137);

$proto117["m_fieldlist"][]=$obj;
$proto117["m_fromlist"] = array();
												$proto139=array();
$proto139["m_link"] = "SQLL_MAIN";
			$proto140=array();
$proto140["m_strName"] = "exam_marking";
$proto140["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto140["m_columns"] = array();
$proto140["m_columns"][] = "sid";
$proto140["m_columns"][] = "name";
$proto140["m_columns"][] = "gender";
$proto140["m_columns"][] = "birthdate";
$proto140["m_columns"][] = "birthCert";
$proto140["m_columns"][] = "nationality";
$proto140["m_columns"][] = "sCode";
$proto140["m_columns"][] = "eNo";
$proto140["m_columns"][] = "eYear";
$proto140["m_columns"][] = "eType";
$proto140["m_columns"][] = "s1";
$proto140["m_columns"][] = "s2";
$proto140["m_columns"][] = "s3";
$proto140["m_columns"][] = "s4";
$proto140["m_columns"][] = "s5";
$proto140["m_columns"][] = "s6";
$proto140["m_columns"][] = "s7";
$obj = new SQLTable($proto140);

$proto139["m_table"] = $obj;
$proto139["m_sql"] = "exam_marking";
$proto139["m_alias"] = "";
$proto139["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto141=array();
$proto141["m_sql"] = "";
$proto141["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto141["m_column"]=$obj;
$proto141["m_contained"] = array();
$proto141["m_strCase"] = "";
$proto141["m_havingmode"] = false;
$proto141["m_inBrackets"] = false;
$proto141["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto141);

$proto139["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto139);

$proto117["m_fromlist"][]=$obj;
												$proto143=array();
$proto143["m_link"] = "SQLL_LEFTJOIN";
			$proto144=array();
$proto144["m_strName"] = "school";
$proto144["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto144["m_columns"] = array();
$proto144["m_columns"][] = "sno";
$proto144["m_columns"][] = "sName";
$proto144["m_columns"][] = "sCenter";
$proto144["m_columns"][] = "sCode";
$proto144["m_columns"][] = "sZone";
$proto144["m_columns"][] = "sType";
$obj = new SQLTable($proto144);

$proto143["m_table"] = $obj;
$proto143["m_sql"] = "LEFT OUTER JOIN school ON exam_marking.sCode = school.sCode AND eType = school.sType";
$proto143["m_alias"] = "";
$proto143["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto145=array();
$proto145["m_sql"] = "exam_marking.sCode = school.sCode AND eType = school.sType";
$proto145["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sCode = school.sCode AND eType = school.sType"
));

$proto145["m_column"]=$obj;
$proto145["m_contained"] = array();
						$proto147=array();
$proto147["m_sql"] = "exam_marking.sCode = school.sCode";
$proto147["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "analisa_kelulusan_psra_all"
));

$proto147["m_column"]=$obj;
$proto147["m_contained"] = array();
$proto147["m_strCase"] = "= school.sCode";
$proto147["m_havingmode"] = false;
$proto147["m_inBrackets"] = false;
$proto147["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto147);

			$proto145["m_contained"][]=$obj;
						$proto149=array();
$proto149["m_sql"] = "eType = school.sType";
$proto149["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "analisa_kelulusan_psra_all"
));

$proto149["m_column"]=$obj;
$proto149["m_contained"] = array();
$proto149["m_strCase"] = "= school.sType";
$proto149["m_havingmode"] = false;
$proto149["m_inBrackets"] = false;
$proto149["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto149);

			$proto145["m_contained"][]=$obj;
$proto145["m_strCase"] = "";
$proto145["m_havingmode"] = false;
$proto145["m_inBrackets"] = false;
$proto145["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto145);

$proto143["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto143);

$proto117["m_fromlist"][]=$obj;
$proto117["m_groupby"] = array();
												$proto151=array();
						$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "analisa_kelulusan_psra_all"
));

$proto151["m_column"]=$obj;
$obj = new SQLGroupByItem($proto151);

$proto117["m_groupby"][]=$obj;
$proto117["m_orderby"] = array();
$proto117["m_srcTableName"]="analisa_kelulusan_psra_all";		
$obj = new SQLQuery($proto117);

$proto116["m_table"] = $obj;
$proto116["m_sql"] = "(  		SELECT  sid AS sid,  eYear,  eType,  COUNT(if(s1='TH' AND s2='TH' AND s3='TH' AND s4='TH' AND s5='TH', exam_marking.sid, NULL)) AS takhadir,  SUM(s1+s2+s3+s4+s5) AS totalMark,  SUM(s1+s2+s3+s4+s5)/500 AS peratus  FROM exam_marking  LEFT OUTER JOIN school ON exam_marking.sCode = school.sCode AND eType = school.sType  WHERE eType ='PSRA'  GROUP BY sid  ) AS Sub1";
$proto116["m_alias"] = "Sub1";
$proto116["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto153=array();
$proto153["m_sql"] = "";
$proto153["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto153["m_column"]=$obj;
$proto153["m_contained"] = array();
$proto153["m_strCase"] = "";
$proto153["m_havingmode"] = false;
$proto153["m_inBrackets"] = false;
$proto153["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto153);

$proto116["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto116);

$proto38["m_fromlist"][]=$obj;
$proto38["m_groupby"] = array();
												$proto155=array();
						$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_kelulusan_psra_all"
));

$proto155["m_column"]=$obj;
$obj = new SQLGroupByItem($proto155);

$proto38["m_groupby"][]=$obj;
$proto38["m_orderby"] = array();
$proto38["m_srcTableName"]="analisa_kelulusan_psra_all";		
$obj = new SQLQuery($proto38);

$proto37["m_table"] = $obj;
$proto37["m_sql"] = "(  SELECT  eYear,  COUNT(sid) AS bilCalon,  COUNT(if(takhadir>0, sid, NULL)) AS calonTakHadir,  COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) AS calonHadir,  COUNT(if(peratus>=0.4, sid, NULL)) AS calonLulus,  COUNT(if(peratus>=0.9, sid, NULL)) AS mumtaz,  COUNT(if(peratus>=0.9, sid, NULL)) AS Mpercent,  COUNT(if(peratus>=0.75 AND peratus<0.9, sid, NULL)) AS JJ,  COUNT(if(peratus>=0.75 AND peratus<0.9, sid, NULL)) AS JJpercent,  COUNT(if(peratus>=0.6 AND peratus<0.75, sid, NULL)) AS jidan,  COUNT(if(peratus>=0.6 AND peratus<0.75, sid, NULL)) AS Jpercent,  COUNT(if(peratus>=0.4 AND peratus<0.6, sid, NULL)) AS maqbul,  COUNT(if(peratus>=0.4 AND peratus<0.6, sid, NULL)) AS MQpercent,  COUNT(if(peratus<0.4 AND takhadir=0, sid, NULL)) AS calonDhaif  FROM (  		SELECT  sid AS sid,  eYear,  eType,  COUNT(if(s1='TH' AND s2='TH' AND s3='TH' AND s4='TH' AND s5='TH', exam_marking.sid, NULL)) AS takhadir,  SUM(s1+s2+s3+s4+s5) AS totalMark,  SUM(s1+s2+s3+s4+s5)/500 AS peratus  FROM exam_marking  LEFT OUTER JOIN school ON exam_marking.sCode = school.sCode AND eType = school.sType  WHERE eType ='PSRA'  GROUP BY sid  ) AS Sub1  GROUP BY eYear  ) AS Sub2";
$proto37["m_alias"] = "Sub2";
$proto37["m_srcTableName"] = "analisa_kelulusan_psra_all";
$proto157=array();
$proto157["m_sql"] = "";
$proto157["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto157["m_column"]=$obj;
$proto157["m_contained"] = array();
$proto157["m_strCase"] = "";
$proto157["m_havingmode"] = false;
$proto157["m_inBrackets"] = false;
$proto157["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto157);

$proto37["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto37);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto159=array();
						$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_all"
));

$proto159["m_column"]=$obj;
$proto159["m_bAsc"] = 0;
$proto159["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto159);

$proto0["m_orderby"][]=$obj;					
												$proto161=array();
						$obj = new SQLField(array(
	"m_strName" => "mumtaz",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_all"
));

$proto161["m_column"]=$obj;
$proto161["m_bAsc"] = 0;
$proto161["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto161);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="analisa_kelulusan_psra_all";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_analisa_kelulusan_psra_all = createSqlQuery_analisa_kelulusan_psra_all();



																

$tdataanalisa_kelulusan_psra_all[".sqlquery"] = $queryData_analisa_kelulusan_psra_all;

include_once(getabspath("include/analisa_kelulusan_psra_all_events.php"));
$tableEvents["analisa_kelulusan_psra_all"] = new eventclass_analisa_kelulusan_psra_all;
$tdataanalisa_kelulusan_psra_all[".hasEvents"] = true;

?>