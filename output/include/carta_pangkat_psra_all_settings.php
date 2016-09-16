<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacarta_pangkat_psra_all = array();
	$tdatacarta_pangkat_psra_all[".ShortName"] = "carta_pangkat_psra_all";
	$tdatacarta_pangkat_psra_all[".OwnerID"] = "";
	$tdatacarta_pangkat_psra_all[".OriginalTable"] = "exam_marking";

//	field labels
$fieldLabelscarta_pangkat_psra_all = array();
$fieldToolTipscarta_pangkat_psra_all = array();
$pageTitlescarta_pangkat_psra_all = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscarta_pangkat_psra_all["English"] = array();
	$fieldToolTipscarta_pangkat_psra_all["English"] = array();
	$pageTitlescarta_pangkat_psra_all["English"] = array();
	$fieldLabelscarta_pangkat_psra_all["English"]["eYear"] = "Tahun";
	$fieldToolTipscarta_pangkat_psra_all["English"]["eYear"] = "";
	$fieldLabelscarta_pangkat_psra_all["English"]["bilanganCalon"] = "Bilangan Calon";
	$fieldToolTipscarta_pangkat_psra_all["English"]["bilanganCalon"] = "";
	$fieldLabelscarta_pangkat_psra_all["English"]["TH"] = "TH";
	$fieldToolTipscarta_pangkat_psra_all["English"]["TH"] = "";
	$fieldLabelscarta_pangkat_psra_all["English"]["kehadiran"] = "Kehadiran";
	$fieldToolTipscarta_pangkat_psra_all["English"]["kehadiran"] = "";
	$fieldLabelscarta_pangkat_psra_all["English"]["MZ"] = "MZ";
	$fieldToolTipscarta_pangkat_psra_all["English"]["MZ"] = "";
	$fieldLabelscarta_pangkat_psra_all["English"]["JJ"] = "JJ";
	$fieldToolTipscarta_pangkat_psra_all["English"]["JJ"] = "";
	$fieldLabelscarta_pangkat_psra_all["English"]["J"] = "J";
	$fieldToolTipscarta_pangkat_psra_all["English"]["J"] = "";
	$fieldLabelscarta_pangkat_psra_all["English"]["MQ"] = "MQ";
	$fieldToolTipscarta_pangkat_psra_all["English"]["MQ"] = "";
	$fieldLabelscarta_pangkat_psra_all["English"]["MS"] = "MS";
	$fieldToolTipscarta_pangkat_psra_all["English"]["MS"] = "";
	if (count($fieldToolTipscarta_pangkat_psra_all["English"]))
		$tdatacarta_pangkat_psra_all[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscarta_pangkat_psra_all[""] = array();
	$fieldToolTipscarta_pangkat_psra_all[""] = array();
	$pageTitlescarta_pangkat_psra_all[""] = array();
	if (count($fieldToolTipscarta_pangkat_psra_all[""]))
		$tdatacarta_pangkat_psra_all[".isUseToolTips"] = true;
}


	$tdatacarta_pangkat_psra_all[".NCSearch"] = true;

	$tdatacarta_pangkat_psra_all[".ChartRefreshTime"] = 0;


$tdatacarta_pangkat_psra_all[".shortTableName"] = "carta_pangkat_psra_all";
$tdatacarta_pangkat_psra_all[".nSecOptions"] = 0;
$tdatacarta_pangkat_psra_all[".recsPerRowList"] = 1;
$tdatacarta_pangkat_psra_all[".recsPerRowPrint"] = 1;
$tdatacarta_pangkat_psra_all[".mainTableOwnerID"] = "";
$tdatacarta_pangkat_psra_all[".moveNext"] = 1;
$tdatacarta_pangkat_psra_all[".entityType"] = 3;

$tdatacarta_pangkat_psra_all[".strOriginalTableName"] = "exam_marking";




$tdatacarta_pangkat_psra_all[".showAddInPopup"] = false;

$tdatacarta_pangkat_psra_all[".showEditInPopup"] = false;

$tdatacarta_pangkat_psra_all[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacarta_pangkat_psra_all[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacarta_pangkat_psra_all[".fieldsForRegister"] = array();

$tdatacarta_pangkat_psra_all[".listAjax"] = false;

	$tdatacarta_pangkat_psra_all[".audit"] = false;

	$tdatacarta_pangkat_psra_all[".locking"] = false;


$tdatacarta_pangkat_psra_all[".add"] = true;
$tdatacarta_pangkat_psra_all[".afterAddAction"] = 1;
$tdatacarta_pangkat_psra_all[".closePopupAfterAdd"] = 1;
$tdatacarta_pangkat_psra_all[".afterAddActionDetTable"] = "";

$tdatacarta_pangkat_psra_all[".list"] = true;

$tdatacarta_pangkat_psra_all[".inlineAdd"] = true;





$tdatacarta_pangkat_psra_all[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacarta_pangkat_psra_all[".searchSaving"] = false;
//

$tdatacarta_pangkat_psra_all[".showSearchPanel"] = true;
		$tdatacarta_pangkat_psra_all[".flexibleSearch"] = true;

if (isMobile())
	$tdatacarta_pangkat_psra_all[".isUseAjaxSuggest"] = false;
else
	$tdatacarta_pangkat_psra_all[".isUseAjaxSuggest"] = true;



																				
$tdatacarta_pangkat_psra_all[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacarta_pangkat_psra_all[".isUseTimeForSearch"] = false;





$tdatacarta_pangkat_psra_all[".allSearchFields"] = array();
$tdatacarta_pangkat_psra_all[".filterFields"] = array();
$tdatacarta_pangkat_psra_all[".requiredSearchFields"] = array();

$tdatacarta_pangkat_psra_all[".allSearchFields"][] = "eYear";
	

$tdatacarta_pangkat_psra_all[".googleLikeFields"] = array();
$tdatacarta_pangkat_psra_all[".googleLikeFields"][] = "eYear";
$tdatacarta_pangkat_psra_all[".googleLikeFields"][] = "bilanganCalon";
$tdatacarta_pangkat_psra_all[".googleLikeFields"][] = "TH";
$tdatacarta_pangkat_psra_all[".googleLikeFields"][] = "kehadiran";
$tdatacarta_pangkat_psra_all[".googleLikeFields"][] = "MZ";
$tdatacarta_pangkat_psra_all[".googleLikeFields"][] = "JJ";
$tdatacarta_pangkat_psra_all[".googleLikeFields"][] = "J";
$tdatacarta_pangkat_psra_all[".googleLikeFields"][] = "MQ";
$tdatacarta_pangkat_psra_all[".googleLikeFields"][] = "MS";


$tdatacarta_pangkat_psra_all[".advSearchFields"] = array();
$tdatacarta_pangkat_psra_all[".advSearchFields"][] = "eYear";

$tdatacarta_pangkat_psra_all[".tableType"] = "chart";

$tdatacarta_pangkat_psra_all[".printerPageOrientation"] = 0;
$tdatacarta_pangkat_psra_all[".nPrinterPageScale"] = 100;

$tdatacarta_pangkat_psra_all[".nPrinterSplitRecords"] = 40;

$tdatacarta_pangkat_psra_all[".nPrinterPDFSplitRecords"] = 40;



$tdatacarta_pangkat_psra_all[".geocodingEnabled"] = false;



// chart settings
$tdatacarta_pangkat_psra_all[".chartType"] = "2DColumn";
// end of chart settings







// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacarta_pangkat_psra_all[".strOrderBy"] = $tstrOrderBy;

$tdatacarta_pangkat_psra_all[".orderindexes"] = array();

$tdatacarta_pangkat_psra_all[".sqlHead"] = "SELECT eYear,  COUNT(sid) AS bilanganCalon,  COUNT(if(takhadir>0, sid, NULL)) AS TH,  COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) AS kehadiran,  COUNT(if(peratus>=0.9,sid, NULL)) / ( COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) ) *100 AS MZ,  COUNT(if(peratus>=0.75 AND peratus<0.9,sid, NULL)) / ( COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) ) *100 AS JJ,  COUNT(if(peratus>=0.6 AND peratus<0.75,sid, NULL)) / ( COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) ) *100 AS J,  COUNT(if(peratus>=0.4 AND peratus<0.6,sid, NULL)) / ( COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) ) *100 AS MQ,  COUNT(if(peratus<0.4 AND takhadir=0,sid, NULL))  / ( COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) ) *100 AS MS";
$tdatacarta_pangkat_psra_all[".sqlFrom"] = "FROM (  		SELECT  sid AS sid,  exam_marking.sCode,  eYear,  eType,  COUNT(if(s1='TH' AND s2='TH' AND s3='TH' AND s4='TH' AND s5='TH', exam_marking.sid, NULL)) AS takhadir,  SUM(s1+s2+s3+s4+s5) AS totalMark,  SUM(s1+s2+s3+s4+s5)/500 AS peratus,  sZone,  sName  FROM exam_marking  INNER JOIN school ON exam_marking.sCode = school.sCode AND eType = school.sType  WHERE eType ='PSRA'  GROUP BY sid  ) AS Sub1";
$tdatacarta_pangkat_psra_all[".sqlWhereExpr"] = "";
$tdatacarta_pangkat_psra_all[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacarta_pangkat_psra_all[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacarta_pangkat_psra_all[".arrGroupsPerPage"] = $arrGPP;

$tdatacarta_pangkat_psra_all[".highlightSearchResults"] = true;

$tableKeyscarta_pangkat_psra_all = array();
$tdatacarta_pangkat_psra_all[".Keys"] = $tableKeyscarta_pangkat_psra_all;

$tdatacarta_pangkat_psra_all[".listFields"] = array();
$tdatacarta_pangkat_psra_all[".listFields"][] = "eYear";
$tdatacarta_pangkat_psra_all[".listFields"][] = "bilanganCalon";
$tdatacarta_pangkat_psra_all[".listFields"][] = "TH";
$tdatacarta_pangkat_psra_all[".listFields"][] = "kehadiran";
$tdatacarta_pangkat_psra_all[".listFields"][] = "MZ";
$tdatacarta_pangkat_psra_all[".listFields"][] = "JJ";
$tdatacarta_pangkat_psra_all[".listFields"][] = "J";
$tdatacarta_pangkat_psra_all[".listFields"][] = "MQ";
$tdatacarta_pangkat_psra_all[".listFields"][] = "MS";

$tdatacarta_pangkat_psra_all[".hideMobileList"] = array();


$tdatacarta_pangkat_psra_all[".viewFields"] = array();
$tdatacarta_pangkat_psra_all[".viewFields"][] = "eYear";
$tdatacarta_pangkat_psra_all[".viewFields"][] = "bilanganCalon";
$tdatacarta_pangkat_psra_all[".viewFields"][] = "TH";
$tdatacarta_pangkat_psra_all[".viewFields"][] = "kehadiran";
$tdatacarta_pangkat_psra_all[".viewFields"][] = "MZ";
$tdatacarta_pangkat_psra_all[".viewFields"][] = "JJ";
$tdatacarta_pangkat_psra_all[".viewFields"][] = "J";
$tdatacarta_pangkat_psra_all[".viewFields"][] = "MQ";
$tdatacarta_pangkat_psra_all[".viewFields"][] = "MS";

$tdatacarta_pangkat_psra_all[".addFields"] = array();
$tdatacarta_pangkat_psra_all[".addFields"][] = "eYear";

$tdatacarta_pangkat_psra_all[".masterListFields"] = array();
$tdatacarta_pangkat_psra_all[".masterListFields"][] = "eYear";
$tdatacarta_pangkat_psra_all[".masterListFields"][] = "bilanganCalon";
$tdatacarta_pangkat_psra_all[".masterListFields"][] = "TH";
$tdatacarta_pangkat_psra_all[".masterListFields"][] = "kehadiran";
$tdatacarta_pangkat_psra_all[".masterListFields"][] = "MZ";
$tdatacarta_pangkat_psra_all[".masterListFields"][] = "JJ";
$tdatacarta_pangkat_psra_all[".masterListFields"][] = "J";
$tdatacarta_pangkat_psra_all[".masterListFields"][] = "MQ";
$tdatacarta_pangkat_psra_all[".masterListFields"][] = "MS";

$tdatacarta_pangkat_psra_all[".inlineAddFields"] = array();
$tdatacarta_pangkat_psra_all[".inlineAddFields"][] = "eYear";

$tdatacarta_pangkat_psra_all[".editFields"] = array();
$tdatacarta_pangkat_psra_all[".editFields"][] = "eYear";

$tdatacarta_pangkat_psra_all[".inlineEditFields"] = array();
$tdatacarta_pangkat_psra_all[".inlineEditFields"][] = "eYear";

$tdatacarta_pangkat_psra_all[".exportFields"] = array();
$tdatacarta_pangkat_psra_all[".exportFields"][] = "eYear";
$tdatacarta_pangkat_psra_all[".exportFields"][] = "bilanganCalon";
$tdatacarta_pangkat_psra_all[".exportFields"][] = "TH";
$tdatacarta_pangkat_psra_all[".exportFields"][] = "kehadiran";
$tdatacarta_pangkat_psra_all[".exportFields"][] = "MZ";
$tdatacarta_pangkat_psra_all[".exportFields"][] = "JJ";
$tdatacarta_pangkat_psra_all[".exportFields"][] = "J";
$tdatacarta_pangkat_psra_all[".exportFields"][] = "MQ";
$tdatacarta_pangkat_psra_all[".exportFields"][] = "MS";

$tdatacarta_pangkat_psra_all[".importFields"] = array();
$tdatacarta_pangkat_psra_all[".importFields"][] = "eYear";
$tdatacarta_pangkat_psra_all[".importFields"][] = "bilanganCalon";
$tdatacarta_pangkat_psra_all[".importFields"][] = "TH";
$tdatacarta_pangkat_psra_all[".importFields"][] = "kehadiran";
$tdatacarta_pangkat_psra_all[".importFields"][] = "MZ";
$tdatacarta_pangkat_psra_all[".importFields"][] = "JJ";
$tdatacarta_pangkat_psra_all[".importFields"][] = "J";
$tdatacarta_pangkat_psra_all[".importFields"][] = "MQ";
$tdatacarta_pangkat_psra_all[".importFields"][] = "MS";

$tdatacarta_pangkat_psra_all[".printFields"] = array();
$tdatacarta_pangkat_psra_all[".printFields"][] = "eYear";
$tdatacarta_pangkat_psra_all[".printFields"][] = "bilanganCalon";
$tdatacarta_pangkat_psra_all[".printFields"][] = "TH";
$tdatacarta_pangkat_psra_all[".printFields"][] = "kehadiran";
$tdatacarta_pangkat_psra_all[".printFields"][] = "MZ";
$tdatacarta_pangkat_psra_all[".printFields"][] = "JJ";
$tdatacarta_pangkat_psra_all[".printFields"][] = "J";
$tdatacarta_pangkat_psra_all[".printFields"][] = "MQ";
$tdatacarta_pangkat_psra_all[".printFields"][] = "MS";

//	eYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "eYear";
	$fdata["GoodName"] = "eYear";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("carta_pangkat_psra_all","eYear");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatacarta_pangkat_psra_all["eYear"] = $fdata;
//	bilanganCalon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "bilanganCalon";
	$fdata["GoodName"] = "bilanganCalon";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("carta_pangkat_psra_all","bilanganCalon");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "bilanganCalon";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(sid)";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatacarta_pangkat_psra_all["bilanganCalon"] = $fdata;
//	TH
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "TH";
	$fdata["GoodName"] = "TH";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("carta_pangkat_psra_all","TH");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "TH";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(if(takhadir>0, sid, NULL))";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatacarta_pangkat_psra_all["TH"] = $fdata;
//	kehadiran
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "kehadiran";
	$fdata["GoodName"] = "kehadiran";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("carta_pangkat_psra_all","kehadiran");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "kehadiran";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL))";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatacarta_pangkat_psra_all["kehadiran"] = $fdata;
//	MZ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "MZ";
	$fdata["GoodName"] = "MZ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("carta_pangkat_psra_all","MZ");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "MZ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(if(peratus>=0.9,sid, NULL)) / ( COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) ) *100";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatacarta_pangkat_psra_all["MZ"] = $fdata;
//	JJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "JJ";
	$fdata["GoodName"] = "JJ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("carta_pangkat_psra_all","JJ");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "JJ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(if(peratus>=0.75 AND peratus<0.9,sid, NULL)) / ( COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) ) *100";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatacarta_pangkat_psra_all["JJ"] = $fdata;
//	J
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "J";
	$fdata["GoodName"] = "J";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("carta_pangkat_psra_all","J");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "J";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(if(peratus>=0.6 AND peratus<0.75,sid, NULL)) / ( COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) ) *100";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatacarta_pangkat_psra_all["J"] = $fdata;
//	MQ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "MQ";
	$fdata["GoodName"] = "MQ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("carta_pangkat_psra_all","MQ");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "MQ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(if(peratus>=0.4 AND peratus<0.6,sid, NULL)) / ( COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) ) *100";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatacarta_pangkat_psra_all["MQ"] = $fdata;
//	MS
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "MS";
	$fdata["GoodName"] = "MS";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("carta_pangkat_psra_all","MS");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "MS";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(if(peratus<0.4 AND takhadir=0,sid, NULL))  / ( COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) ) *100";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatacarta_pangkat_psra_all["MS"] = $fdata;

	$tdatacarta_pangkat_psra_all[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">carta_pangkat_psra_all</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatacarta_pangkat_psra_all[".chartXml"] .= '<attr value="0">
			<attr value="name">TH</attr>
			<attr value="currencyFormat">0</attr>
			<attr value="decimalFormat">2</attr>
			<attr value="customFormat">0</attr>
			<attr value="customFormatStr"></attr>';
	$tdatacarta_pangkat_psra_all[".chartXml"] .= '</attr>';
	$tdatacarta_pangkat_psra_all[".chartXml"] .= '<attr value="1">
			<attr value="name">MS</attr>
			<attr value="currencyFormat">0</attr>
			<attr value="decimalFormat">2</attr>
			<attr value="customFormat">0</attr>
			<attr value="customFormatStr"></attr>';
	$tdatacarta_pangkat_psra_all[".chartXml"] .= '</attr>';
	$tdatacarta_pangkat_psra_all[".chartXml"] .= '<attr value="2">
			<attr value="name">MQ</attr>
			<attr value="currencyFormat">0</attr>
			<attr value="decimalFormat">2</attr>
			<attr value="customFormat">0</attr>
			<attr value="customFormatStr"></attr>';
	$tdatacarta_pangkat_psra_all[".chartXml"] .= '</attr>';
	$tdatacarta_pangkat_psra_all[".chartXml"] .= '<attr value="3">
			<attr value="name">JJ</attr>
			<attr value="currencyFormat">0</attr>
			<attr value="decimalFormat">2</attr>
			<attr value="customFormat">0</attr>
			<attr value="customFormatStr"></attr>';
	$tdatacarta_pangkat_psra_all[".chartXml"] .= '</attr>';
	$tdatacarta_pangkat_psra_all[".chartXml"] .= '<attr value="4">
			<attr value="name">J</attr>
			<attr value="currencyFormat">0</attr>
			<attr value="decimalFormat">2</attr>
			<attr value="customFormat">0</attr>
			<attr value="customFormatStr"></attr>';
	$tdatacarta_pangkat_psra_all[".chartXml"] .= '</attr>';
	$tdatacarta_pangkat_psra_all[".chartXml"] .= '<attr value="5">
			<attr value="name">MZ</attr>
			<attr value="currencyFormat">0</attr>
			<attr value="decimalFormat">2</attr>
			<attr value="customFormat">0</attr>
			<attr value="customFormatStr"></attr>';
	$tdatacarta_pangkat_psra_all[".chartXml"] .= '</attr>';
	$tdatacarta_pangkat_psra_all[".chartXml"] .= '<attr value="6">
		<attr value="name">eYear</attr>
	</attr>';
	$tdatacarta_pangkat_psra_all[".chartXml"] .= '</attr>
			<attr value="appearance">';
	$tdatacarta_pangkat_psra_all[".chartXml"] .= '<attr value="scolor11">000000</attr>
			<attr value="scolor12">000000</attr>';
	$tdatacarta_pangkat_psra_all[".chartXml"] .= '<attr value="scolor21">FF0000</attr>
			<attr value="scolor22">FF0000</attr>';
	$tdatacarta_pangkat_psra_all[".chartXml"] .= '<attr value="scolor31">0000FF</attr>
			<attr value="scolor32">0000FF</attr>';
	$tdatacarta_pangkat_psra_all[".chartXml"] .= '<attr value="scolor41">FFFF00</attr>
			<attr value="scolor42">FFFF00</attr>';
	$tdatacarta_pangkat_psra_all[".chartXml"] .= '<attr value="scolor51">00FF00</attr>
			<attr value="scolor52">00FF00</attr>';
	$tdatacarta_pangkat_psra_all[".chartXml"] .= '<attr value="scolor61">008000</attr>
			<attr value="scolor62">008000</attr>';

	$tdatacarta_pangkat_psra_all[".chartXml"] .= '<attr value="head">'.xmlencode("Graf Pangkat").'</attr>
<attr value="foot">'.xmlencode("Tahun").'</attr>
<attr value="y_axis_label">'.xmlencode("Peratus").'</attr>

<attr value="color51">49563A</attr>
<attr value="color52">49563A</attr>
<attr value="color61">49563A</attr>
<attr value="color62">49563A</attr>
<attr value="color71">C7CDC1</attr>
<attr value="color72">C7CDC1</attr>
<attr value="color81">ECF0E8</attr>
<attr value="color82">ECF0E8</attr>
<attr value="color91">68838B</attr>
<attr value="color92">68838B</attr>
<attr value="color101">48505A</attr>
<attr value="color102">48505A</attr>
<attr value="color111">45595F</attr>
<attr value="color112">45595F</attr>
<attr value="color121"></attr>
<attr value="color122"></attr>
<attr value="color131">000000</attr>
<attr value="color132">000000</attr>
<attr value="color141">000000</attr>
<attr value="color142">000000</attr>

<attr value="slegend">false</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="saxes">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">1</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>
<attr value="cscroll">true</attr>
<attr value="maxbarscroll">10</attr>';
$tdatacarta_pangkat_psra_all[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatacarta_pangkat_psra_all[".chartXml"] .= '<attr value="0">
		<attr value="name">eYear</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("carta_pangkat_psra_all","eYear")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacarta_pangkat_psra_all[".chartXml"] .= '<attr value="1">
		<attr value="name">bilanganCalon</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("carta_pangkat_psra_all","bilanganCalon")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacarta_pangkat_psra_all[".chartXml"] .= '<attr value="2">
		<attr value="name">TH</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("carta_pangkat_psra_all","TH")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacarta_pangkat_psra_all[".chartXml"] .= '<attr value="3">
		<attr value="name">kehadiran</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("carta_pangkat_psra_all","kehadiran")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacarta_pangkat_psra_all[".chartXml"] .= '<attr value="4">
		<attr value="name">MZ</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("carta_pangkat_psra_all","MZ")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacarta_pangkat_psra_all[".chartXml"] .= '<attr value="5">
		<attr value="name">JJ</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("carta_pangkat_psra_all","JJ")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacarta_pangkat_psra_all[".chartXml"] .= '<attr value="6">
		<attr value="name">J</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("carta_pangkat_psra_all","J")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacarta_pangkat_psra_all[".chartXml"] .= '<attr value="7">
		<attr value="name">MQ</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("carta_pangkat_psra_all","MQ")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacarta_pangkat_psra_all[".chartXml"] .= '<attr value="8">
		<attr value="name">MS</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("carta_pangkat_psra_all","MS")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatacarta_pangkat_psra_all[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">carta_pangkat_psra_all</attr>
<attr value="short_table_name">carta_pangkat_psra_all</attr>
</attr>

</chart>';

$tables_data["carta_pangkat_psra_all"]=&$tdatacarta_pangkat_psra_all;
$field_labels["carta_pangkat_psra_all"] = &$fieldLabelscarta_pangkat_psra_all;
$fieldToolTips["carta_pangkat_psra_all"] = &$fieldToolTipscarta_pangkat_psra_all;
$page_titles["carta_pangkat_psra_all"] = &$pageTitlescarta_pangkat_psra_all;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["carta_pangkat_psra_all"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["carta_pangkat_psra_all"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_carta_pangkat_psra_all()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "eYear,  COUNT(sid) AS bilanganCalon,  COUNT(if(takhadir>0, sid, NULL)) AS TH,  COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) AS kehadiran,  COUNT(if(peratus>=0.9,sid, NULL)) / ( COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) ) *100 AS MZ,  COUNT(if(peratus>=0.75 AND peratus<0.9,sid, NULL)) / ( COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) ) *100 AS JJ,  COUNT(if(peratus>=0.6 AND peratus<0.75,sid, NULL)) / ( COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) ) *100 AS J,  COUNT(if(peratus>=0.4 AND peratus<0.6,sid, NULL)) / ( COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) ) *100 AS MQ,  COUNT(if(peratus<0.4 AND takhadir=0,sid, NULL))  / ( COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) ) *100 AS MS";
$proto0["m_strFrom"] = "FROM (  		SELECT  sid AS sid,  exam_marking.sCode,  eYear,  eType,  COUNT(if(s1='TH' AND s2='TH' AND s3='TH' AND s4='TH' AND s5='TH', exam_marking.sid, NULL)) AS takhadir,  SUM(s1+s2+s3+s4+s5) AS totalMark,  SUM(s1+s2+s3+s4+s5)/500 AS peratus,  sZone,  sName  FROM exam_marking  INNER JOIN school ON exam_marking.sCode = school.sCode AND eType = school.sType  WHERE eType ='PSRA'  GROUP BY sid  ) AS Sub1";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
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
	"m_strTable" => "Sub1",
	"m_srcTableName" => "carta_pangkat_psra_all"
));

$proto5["m_sql"] = "eYear";
$proto5["m_srcTableName"] = "carta_pangkat_psra_all";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$proto8=array();
$proto8["m_functiontype"] = "SQLF_COUNT";
$proto8["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "carta_pangkat_psra_all"
));

$proto8["m_arguments"][]=$obj;
$proto8["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto8);

$proto7["m_sql"] = "COUNT(sid)";
$proto7["m_srcTableName"] = "carta_pangkat_psra_all";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "bilanganCalon";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$proto11=array();
$proto11["m_functiontype"] = "SQLF_COUNT";
$proto11["m_arguments"] = array();
						$proto12=array();
$proto12["m_functiontype"] = "SQLF_CUSTOM";
$proto12["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "takhadir>0"
));

$proto12["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "sid"
));

$proto12["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto12["m_arguments"][]=$obj;
$proto12["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto12);

$proto11["m_arguments"][]=$obj;
$proto11["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto11);

$proto10["m_sql"] = "COUNT(if(takhadir>0, sid, NULL))";
$proto10["m_srcTableName"] = "carta_pangkat_psra_all";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "TH";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL))"
));

$proto16["m_sql"] = "COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL))";
$proto16["m_srcTableName"] = "carta_pangkat_psra_all";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "kehadiran";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "COUNT(if(peratus>=0.9,sid, NULL)) / ( COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) ) *100"
));

$proto18["m_sql"] = "COUNT(if(peratus>=0.9,sid, NULL)) / ( COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) ) *100";
$proto18["m_srcTableName"] = "carta_pangkat_psra_all";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "MZ";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "COUNT(if(peratus>=0.75 AND peratus<0.9,sid, NULL)) / ( COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) ) *100"
));

$proto20["m_sql"] = "COUNT(if(peratus>=0.75 AND peratus<0.9,sid, NULL)) / ( COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) ) *100";
$proto20["m_srcTableName"] = "carta_pangkat_psra_all";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "JJ";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "COUNT(if(peratus>=0.6 AND peratus<0.75,sid, NULL)) / ( COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) ) *100"
));

$proto22["m_sql"] = "COUNT(if(peratus>=0.6 AND peratus<0.75,sid, NULL)) / ( COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) ) *100";
$proto22["m_srcTableName"] = "carta_pangkat_psra_all";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "J";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "COUNT(if(peratus>=0.4 AND peratus<0.6,sid, NULL)) / ( COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) ) *100"
));

$proto24["m_sql"] = "COUNT(if(peratus>=0.4 AND peratus<0.6,sid, NULL)) / ( COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) ) *100";
$proto24["m_srcTableName"] = "carta_pangkat_psra_all";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "MQ";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "COUNT(if(peratus<0.4 AND takhadir=0,sid, NULL))  / ( COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) ) *100"
));

$proto26["m_sql"] = "COUNT(if(peratus<0.4 AND takhadir=0,sid, NULL))  / ( COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) ) *100";
$proto26["m_srcTableName"] = "carta_pangkat_psra_all";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "MS";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strHead"] = "  		SELECT";
$proto29["m_strFieldList"] = "sid AS sid,  exam_marking.sCode,  eYear,  eType,  COUNT(if(s1='TH' AND s2='TH' AND s3='TH' AND s4='TH' AND s5='TH', exam_marking.sid, NULL)) AS takhadir,  SUM(s1+s2+s3+s4+s5) AS totalMark,  SUM(s1+s2+s3+s4+s5)/500 AS peratus,  sZone,  sName";
$proto29["m_strFrom"] = "FROM exam_marking  INNER JOIN school ON exam_marking.sCode = school.sCode AND eType = school.sType";
$proto29["m_strWhere"] = "eType ='PSRA'";
$proto29["m_strOrderBy"] = "";
$proto29["m_strTail"] = "";
			$proto29["cipherer"] = null;
$proto30=array();
$proto30["m_sql"] = "eType ='PSRA'";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "carta_pangkat_psra_all"
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "='PSRA'";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto29["m_where"] = $obj;
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto29["m_having"] = $obj;
$proto29["m_fieldlist"] = array();
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "carta_pangkat_psra_all"
));

$proto34["m_sql"] = "sid";
$proto34["m_srcTableName"] = "carta_pangkat_psra_all";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "sid";
$obj = new SQLFieldListItem($proto34);

$proto29["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "carta_pangkat_psra_all"
));

$proto36["m_sql"] = "exam_marking.sCode";
$proto36["m_srcTableName"] = "carta_pangkat_psra_all";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto29["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "carta_pangkat_psra_all"
));

$proto38["m_sql"] = "eYear";
$proto38["m_srcTableName"] = "carta_pangkat_psra_all";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto29["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "carta_pangkat_psra_all"
));

$proto40["m_sql"] = "eType";
$proto40["m_srcTableName"] = "carta_pangkat_psra_all";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto29["m_fieldlist"][]=$obj;
						$proto42=array();
			$proto43=array();
$proto43["m_functiontype"] = "SQLF_COUNT";
$proto43["m_arguments"] = array();
						$proto44=array();
$proto44["m_functiontype"] = "SQLF_CUSTOM";
$proto44["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "s1='TH' AND s2='TH' AND s3='TH' AND s4='TH' AND s5='TH'"
));

$proto44["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto44["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto44["m_arguments"][]=$obj;
$proto44["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto44);

$proto43["m_arguments"][]=$obj;
$proto43["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto43);

$proto42["m_sql"] = "COUNT(if(s1='TH' AND s2='TH' AND s3='TH' AND s4='TH' AND s5='TH', exam_marking.sid, NULL))";
$proto42["m_srcTableName"] = "carta_pangkat_psra_all";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "takhadir";
$obj = new SQLFieldListItem($proto42);

$proto29["m_fieldlist"][]=$obj;
						$proto48=array();
			$proto49=array();
$proto49["m_functiontype"] = "SQLF_SUM";
$proto49["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "s1+s2+s3+s4+s5"
));

$proto49["m_arguments"][]=$obj;
$proto49["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto49);

$proto48["m_sql"] = "SUM(s1+s2+s3+s4+s5)";
$proto48["m_srcTableName"] = "carta_pangkat_psra_all";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "totalMark";
$obj = new SQLFieldListItem($proto48);

$proto29["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(s1+s2+s3+s4+s5)/500"
));

$proto51["m_sql"] = "SUM(s1+s2+s3+s4+s5)/500";
$proto51["m_srcTableName"] = "carta_pangkat_psra_all";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "peratus";
$obj = new SQLFieldListItem($proto51);

$proto29["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sZone"
));

$proto53["m_sql"] = "sZone";
$proto53["m_srcTableName"] = "carta_pangkat_psra_all";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto29["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sName"
));

$proto55["m_sql"] = "sName";
$proto55["m_srcTableName"] = "carta_pangkat_psra_all";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto29["m_fieldlist"][]=$obj;
$proto29["m_fromlist"] = array();
												$proto57=array();
$proto57["m_link"] = "SQLL_MAIN";
			$proto58=array();
$proto58["m_strName"] = "exam_marking";
$proto58["m_srcTableName"] = "carta_pangkat_psra_all";
$proto58["m_columns"] = array();
$proto58["m_columns"][] = "sid";
$proto58["m_columns"][] = "name";
$proto58["m_columns"][] = "gender";
$proto58["m_columns"][] = "birthdate";
$proto58["m_columns"][] = "birthCert";
$proto58["m_columns"][] = "nationality";
$proto58["m_columns"][] = "sCode";
$proto58["m_columns"][] = "eNo";
$proto58["m_columns"][] = "eYear";
$proto58["m_columns"][] = "eType";
$proto58["m_columns"][] = "s1";
$proto58["m_columns"][] = "s2";
$proto58["m_columns"][] = "s3";
$proto58["m_columns"][] = "s4";
$proto58["m_columns"][] = "s5";
$proto58["m_columns"][] = "s6";
$proto58["m_columns"][] = "s7";
$obj = new SQLTable($proto58);

$proto57["m_table"] = $obj;
$proto57["m_sql"] = "exam_marking";
$proto57["m_alias"] = "";
$proto57["m_srcTableName"] = "carta_pangkat_psra_all";
$proto59=array();
$proto59["m_sql"] = "";
$proto59["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto59["m_column"]=$obj;
$proto59["m_contained"] = array();
$proto59["m_strCase"] = "";
$proto59["m_havingmode"] = false;
$proto59["m_inBrackets"] = false;
$proto59["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto59);

$proto57["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto57);

$proto29["m_fromlist"][]=$obj;
												$proto61=array();
$proto61["m_link"] = "SQLL_INNERJOIN";
			$proto62=array();
$proto62["m_strName"] = "school";
$proto62["m_srcTableName"] = "carta_pangkat_psra_all";
$proto62["m_columns"] = array();
$proto62["m_columns"][] = "sno";
$proto62["m_columns"][] = "sName";
$proto62["m_columns"][] = "sCenter";
$proto62["m_columns"][] = "sCode";
$proto62["m_columns"][] = "sZone";
$proto62["m_columns"][] = "sType";
$obj = new SQLTable($proto62);

$proto61["m_table"] = $obj;
$proto61["m_sql"] = "INNER JOIN school ON exam_marking.sCode = school.sCode AND eType = school.sType";
$proto61["m_alias"] = "";
$proto61["m_srcTableName"] = "carta_pangkat_psra_all";
$proto63=array();
$proto63["m_sql"] = "exam_marking.sCode = school.sCode AND eType = school.sType";
$proto63["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sCode = school.sCode AND eType = school.sType"
));

$proto63["m_column"]=$obj;
$proto63["m_contained"] = array();
						$proto65=array();
$proto65["m_sql"] = "exam_marking.sCode = school.sCode";
$proto65["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "carta_pangkat_psra_all"
));

$proto65["m_column"]=$obj;
$proto65["m_contained"] = array();
$proto65["m_strCase"] = "= school.sCode";
$proto65["m_havingmode"] = false;
$proto65["m_inBrackets"] = false;
$proto65["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto65);

			$proto63["m_contained"][]=$obj;
						$proto67=array();
$proto67["m_sql"] = "eType = school.sType";
$proto67["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "carta_pangkat_psra_all"
));

$proto67["m_column"]=$obj;
$proto67["m_contained"] = array();
$proto67["m_strCase"] = "= school.sType";
$proto67["m_havingmode"] = false;
$proto67["m_inBrackets"] = false;
$proto67["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto67);

			$proto63["m_contained"][]=$obj;
$proto63["m_strCase"] = "";
$proto63["m_havingmode"] = false;
$proto63["m_inBrackets"] = false;
$proto63["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto63);

$proto61["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto61);

$proto29["m_fromlist"][]=$obj;
$proto29["m_groupby"] = array();
												$proto69=array();
						$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "carta_pangkat_psra_all"
));

$proto69["m_column"]=$obj;
$obj = new SQLGroupByItem($proto69);

$proto29["m_groupby"][]=$obj;
$proto29["m_orderby"] = array();
$proto29["m_srcTableName"]="carta_pangkat_psra_all";		
$obj = new SQLQuery($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "(  		SELECT  sid AS sid,  exam_marking.sCode,  eYear,  eType,  COUNT(if(s1='TH' AND s2='TH' AND s3='TH' AND s4='TH' AND s5='TH', exam_marking.sid, NULL)) AS takhadir,  SUM(s1+s2+s3+s4+s5) AS totalMark,  SUM(s1+s2+s3+s4+s5)/500 AS peratus,  sZone,  sName  FROM exam_marking  INNER JOIN school ON exam_marking.sCode = school.sCode AND eType = school.sType  WHERE eType ='PSRA'  GROUP BY sid  ) AS Sub1";
$proto28["m_alias"] = "Sub1";
$proto28["m_srcTableName"] = "carta_pangkat_psra_all";
$proto71=array();
$proto71["m_sql"] = "";
$proto71["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto71["m_column"]=$obj;
$proto71["m_contained"] = array();
$proto71["m_strCase"] = "";
$proto71["m_havingmode"] = false;
$proto71["m_inBrackets"] = false;
$proto71["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto71);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto73=array();
						$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "carta_pangkat_psra_all"
));

$proto73["m_column"]=$obj;
$obj = new SQLGroupByItem($proto73);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="carta_pangkat_psra_all";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_carta_pangkat_psra_all = createSqlQuery_carta_pangkat_psra_all();



									

$tdatacarta_pangkat_psra_all[".sqlquery"] = $queryData_carta_pangkat_psra_all;

$tableEvents["carta_pangkat_psra_all"] = new eventsBase;
$tdatacarta_pangkat_psra_all[".hasEvents"] = false;

?>