<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapurata_psra_all = array();
	$tdatapurata_psra_all[".truncateText"] = true;
	$tdatapurata_psra_all[".NumberOfChars"] = 80;
	$tdatapurata_psra_all[".ShortName"] = "purata_psra_all";
	$tdatapurata_psra_all[".OwnerID"] = "";
	$tdatapurata_psra_all[".OriginalTable"] = "exam_marking";

//	field labels
$fieldLabelspurata_psra_all = array();
$fieldToolTipspurata_psra_all = array();
$pageTitlespurata_psra_all = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspurata_psra_all["English"] = array();
	$fieldToolTipspurata_psra_all["English"] = array();
	$pageTitlespurata_psra_all["English"] = array();
	$fieldLabelspurata_psra_all["English"]["eYear"] = "Tahun";
	$fieldToolTipspurata_psra_all["English"]["eYear"] = "";
	$fieldLabelspurata_psra_all["English"]["eType"] = "Peperiksaan";
	$fieldToolTipspurata_psra_all["English"]["eType"] = "";
	$fieldLabelspurata_psra_all["English"]["jumlahMarkah"] = "Jumlah Markah";
	$fieldToolTipspurata_psra_all["English"]["jumlahMarkah"] = "";
	$fieldLabelspurata_psra_all["English"]["avg"] = "Purata";
	$fieldToolTipspurata_psra_all["English"]["avg"] = "";
	$fieldLabelspurata_psra_all["English"]["avgperatus"] = "Purata Peratus%";
	$fieldToolTipspurata_psra_all["English"]["avgperatus"] = "";
	$fieldLabelspurata_psra_all["English"]["calonTotal"] = "Calon";
	$fieldToolTipspurata_psra_all["English"]["calonTotal"] = "";
	$fieldLabelspurata_psra_all["English"]["calonTakHadir"] = "Tak Hadir";
	$fieldToolTipspurata_psra_all["English"]["calonTakHadir"] = "";
	$fieldLabelspurata_psra_all["English"]["calonHadir"] = "Hadir";
	$fieldToolTipspurata_psra_all["English"]["calonHadir"] = "";
	if (count($fieldToolTipspurata_psra_all["English"]))
		$tdatapurata_psra_all[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspurata_psra_all[""] = array();
	$fieldToolTipspurata_psra_all[""] = array();
	$pageTitlespurata_psra_all[""] = array();
	if (count($fieldToolTipspurata_psra_all[""]))
		$tdatapurata_psra_all[".isUseToolTips"] = true;
}


	$tdatapurata_psra_all[".NCSearch"] = true;



$tdatapurata_psra_all[".shortTableName"] = "purata_psra_all";
$tdatapurata_psra_all[".nSecOptions"] = 0;
$tdatapurata_psra_all[".recsPerRowList"] = 1;
$tdatapurata_psra_all[".recsPerRowPrint"] = 1;
$tdatapurata_psra_all[".mainTableOwnerID"] = "";
$tdatapurata_psra_all[".moveNext"] = 1;
$tdatapurata_psra_all[".entityType"] = 1;

$tdatapurata_psra_all[".strOriginalTableName"] = "exam_marking";




$tdatapurata_psra_all[".showAddInPopup"] = false;

$tdatapurata_psra_all[".showEditInPopup"] = false;

$tdatapurata_psra_all[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapurata_psra_all[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapurata_psra_all[".fieldsForRegister"] = array();

$tdatapurata_psra_all[".listAjax"] = false;

	$tdatapurata_psra_all[".audit"] = false;

	$tdatapurata_psra_all[".locking"] = false;



$tdatapurata_psra_all[".list"] = true;



$tdatapurata_psra_all[".exportTo"] = true;



$tdatapurata_psra_all[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatapurata_psra_all[".searchSaving"] = false;
//

$tdatapurata_psra_all[".showSearchPanel"] = true;
		$tdatapurata_psra_all[".flexibleSearch"] = true;

if (isMobile())
	$tdatapurata_psra_all[".isUseAjaxSuggest"] = false;
else
	$tdatapurata_psra_all[".isUseAjaxSuggest"] = true;

$tdatapurata_psra_all[".rowHighlite"] = true;


																			
$tdatapurata_psra_all[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapurata_psra_all[".isUseTimeForSearch"] = false;





$tdatapurata_psra_all[".allSearchFields"] = array();
$tdatapurata_psra_all[".filterFields"] = array();
$tdatapurata_psra_all[".requiredSearchFields"] = array();



$tdatapurata_psra_all[".googleLikeFields"] = array();
$tdatapurata_psra_all[".googleLikeFields"][] = "jumlahMarkah";
$tdatapurata_psra_all[".googleLikeFields"][] = "avg";
$tdatapurata_psra_all[".googleLikeFields"][] = "avgperatus";
$tdatapurata_psra_all[".googleLikeFields"][] = "calonTotal";
$tdatapurata_psra_all[".googleLikeFields"][] = "calonTakHadir";
$tdatapurata_psra_all[".googleLikeFields"][] = "calonHadir";

$tdatapurata_psra_all[".panelSearchFields"] = array();
$tdatapurata_psra_all[".searchPanelOptions"] = array();
$tdatapurata_psra_all[".panelSearchFields"][] = "eYear";
	

$tdatapurata_psra_all[".tableType"] = "list";

$tdatapurata_psra_all[".printerPageOrientation"] = 0;
$tdatapurata_psra_all[".nPrinterPageScale"] = 100;

$tdatapurata_psra_all[".nPrinterSplitRecords"] = 40;

$tdatapurata_psra_all[".nPrinterPDFSplitRecords"] = 40;



$tdatapurata_psra_all[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatapurata_psra_all[".pageSize"] = 20;

$tdatapurata_psra_all[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY eYear DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapurata_psra_all[".strOrderBy"] = $tstrOrderBy;

$tdatapurata_psra_all[".orderindexes"] = array();
$tdatapurata_psra_all[".orderindexes"][] = array(1, (0 ? "ASC" : "DESC"), "eYear");

$tdatapurata_psra_all[".sqlHead"] = "SELECT eYear,  eType,  jumlahMarkah,  jumlahMarkah/(calonTotal-calonTakHadir) AS `avg`,  (jumlahMarkah/(calonTotal-calonTakHadir))/500*100 AS avgperatus,  calonTotal,  calonTakHadir,  calonTotal-calonTakHadir AS calonHadir";
$tdatapurata_psra_all[".sqlFrom"] = "FROM (   SELECT  sid,  eYear,  eType,  SUM(s1+s2+s3+s4+s5) AS jumlahMarkah,  COUNT(sid) AS calonTotal,  COUNT(if(s1 LIKE '%TH%' AND s2 LIKE '%TH%' AND s3 LIKE '%TH%' AND s4 LIKE '%TH%' AND s5 LIKE '%TH%', exam_marking.sid, NULL)) AS calonTakHadir,  sZone  FROM exam_marking  LEFT JOIN school ON exam_marking.sCode = school.sCode  GROUP BY eYear  ) AS Sub2";
$tdatapurata_psra_all[".sqlWhereExpr"] = "";
$tdatapurata_psra_all[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapurata_psra_all[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapurata_psra_all[".arrGroupsPerPage"] = $arrGPP;

$tdatapurata_psra_all[".highlightSearchResults"] = true;

$tableKeyspurata_psra_all = array();
$tableKeyspurata_psra_all[] = "eYear";
$tdatapurata_psra_all[".Keys"] = $tableKeyspurata_psra_all;

$tdatapurata_psra_all[".listFields"] = array();
$tdatapurata_psra_all[".listFields"][] = "eYear";
$tdatapurata_psra_all[".listFields"][] = "calonTotal";
$tdatapurata_psra_all[".listFields"][] = "calonTakHadir";
$tdatapurata_psra_all[".listFields"][] = "calonHadir";
$tdatapurata_psra_all[".listFields"][] = "jumlahMarkah";
$tdatapurata_psra_all[".listFields"][] = "avgperatus";

$tdatapurata_psra_all[".hideMobileList"] = array();


$tdatapurata_psra_all[".viewFields"] = array();

$tdatapurata_psra_all[".addFields"] = array();

$tdatapurata_psra_all[".masterListFields"] = array();
$tdatapurata_psra_all[".masterListFields"][] = "calonHadir";
$tdatapurata_psra_all[".masterListFields"][] = "jumlahMarkah";
$tdatapurata_psra_all[".masterListFields"][] = "avg";
$tdatapurata_psra_all[".masterListFields"][] = "avgperatus";
$tdatapurata_psra_all[".masterListFields"][] = "calonTotal";
$tdatapurata_psra_all[".masterListFields"][] = "calonTakHadir";
$tdatapurata_psra_all[".masterListFields"][] = "eYear";
$tdatapurata_psra_all[".masterListFields"][] = "eType";

$tdatapurata_psra_all[".inlineAddFields"] = array();

$tdatapurata_psra_all[".editFields"] = array();

$tdatapurata_psra_all[".inlineEditFields"] = array();

$tdatapurata_psra_all[".exportFields"] = array();
$tdatapurata_psra_all[".exportFields"][] = "jumlahMarkah";
$tdatapurata_psra_all[".exportFields"][] = "avg";
$tdatapurata_psra_all[".exportFields"][] = "avgperatus";
$tdatapurata_psra_all[".exportFields"][] = "calonTotal";
$tdatapurata_psra_all[".exportFields"][] = "calonTakHadir";
$tdatapurata_psra_all[".exportFields"][] = "calonHadir";
$tdatapurata_psra_all[".exportFields"][] = "eYear";

$tdatapurata_psra_all[".importFields"] = array();

$tdatapurata_psra_all[".printFields"] = array();

//	eYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "eYear";
	$fdata["GoodName"] = "eYear";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("purata_psra_all","eYear");
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








	$tdatapurata_psra_all["eYear"] = $fdata;
//	eType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "eType";
	$fdata["GoodName"] = "eType";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("purata_psra_all","eType");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "eType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eType";

	
	
			
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

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=8";

		$edata["controlWidth"] = 40;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatapurata_psra_all["eType"] = $fdata;
//	jumlahMarkah
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "jumlahMarkah";
	$fdata["GoodName"] = "jumlahMarkah";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("purata_psra_all","jumlahMarkah");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "jumlahMarkah";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jumlahMarkah";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
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








	$tdatapurata_psra_all["jumlahMarkah"] = $fdata;
//	avg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "avg";
	$fdata["GoodName"] = "avg";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("purata_psra_all","avg");
	$fdata["FieldType"] = 5;

	
	
	
			
	
	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "avg";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jumlahMarkah/(calonTotal-calonTakHadir)";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
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








	$tdatapurata_psra_all["avg"] = $fdata;
//	avgperatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "avgperatus";
	$fdata["GoodName"] = "avgperatus";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("purata_psra_all","avgperatus");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "avgperatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(jumlahMarkah/(calonTotal-calonTakHadir))/500*100";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
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








	$tdatapurata_psra_all["avgperatus"] = $fdata;
//	calonTotal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "calonTotal";
	$fdata["GoodName"] = "calonTotal";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("purata_psra_all","calonTotal");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "calonTotal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calonTotal";

	
	
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








	$tdatapurata_psra_all["calonTotal"] = $fdata;
//	calonTakHadir
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "calonTakHadir";
	$fdata["GoodName"] = "calonTakHadir";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("purata_psra_all","calonTakHadir");
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








	$tdatapurata_psra_all["calonTakHadir"] = $fdata;
//	calonHadir
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "calonHadir";
	$fdata["GoodName"] = "calonHadir";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("purata_psra_all","calonHadir");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "calonHadir";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calonTotal-calonTakHadir";

	
	
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








	$tdatapurata_psra_all["calonHadir"] = $fdata;


$tables_data["purata_psra_all"]=&$tdatapurata_psra_all;
$field_labels["purata_psra_all"] = &$fieldLabelspurata_psra_all;
$fieldToolTips["purata_psra_all"] = &$fieldToolTipspurata_psra_all;
$page_titles["purata_psra_all"] = &$pageTitlespurata_psra_all;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["purata_psra_all"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["purata_psra_all"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_purata_psra_all()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "eYear,  eType,  jumlahMarkah,  jumlahMarkah/(calonTotal-calonTakHadir) AS `avg`,  (jumlahMarkah/(calonTotal-calonTakHadir))/500*100 AS avgperatus,  calonTotal,  calonTakHadir,  calonTotal-calonTakHadir AS calonHadir";
$proto0["m_strFrom"] = "FROM (   SELECT  sid,  eYear,  eType,  SUM(s1+s2+s3+s4+s5) AS jumlahMarkah,  COUNT(sid) AS calonTotal,  COUNT(if(s1 LIKE '%TH%' AND s2 LIKE '%TH%' AND s3 LIKE '%TH%' AND s4 LIKE '%TH%' AND s5 LIKE '%TH%', exam_marking.sid, NULL)) AS calonTakHadir,  sZone  FROM exam_marking  LEFT JOIN school ON exam_marking.sCode = school.sCode  GROUP BY eYear  ) AS Sub2";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY eYear DESC";
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
	"m_srcTableName" => "purata_psra_all"
));

$proto5["m_sql"] = "eYear";
$proto5["m_srcTableName"] = "purata_psra_all";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "purata_psra_all"
));

$proto7["m_sql"] = "eType";
$proto7["m_srcTableName"] = "purata_psra_all";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "jumlahMarkah",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "purata_psra_all"
));

$proto9["m_sql"] = "jumlahMarkah";
$proto9["m_srcTableName"] = "purata_psra_all";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "jumlahMarkah/(calonTotal-calonTakHadir)"
));

$proto11["m_sql"] = "jumlahMarkah/(calonTotal-calonTakHadir)";
$proto11["m_srcTableName"] = "purata_psra_all";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "avg";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(jumlahMarkah/(calonTotal-calonTakHadir))/500*100"
));

$proto13["m_sql"] = "(jumlahMarkah/(calonTotal-calonTakHadir))/500*100";
$proto13["m_srcTableName"] = "purata_psra_all";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "avgperatus";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "calonTotal",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "purata_psra_all"
));

$proto15["m_sql"] = "calonTotal";
$proto15["m_srcTableName"] = "purata_psra_all";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "calonTakHadir",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "purata_psra_all"
));

$proto17["m_sql"] = "calonTakHadir";
$proto17["m_srcTableName"] = "purata_psra_all";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "calonTotal-calonTakHadir"
));

$proto19["m_sql"] = "calonTotal-calonTakHadir";
$proto19["m_srcTableName"] = "purata_psra_all";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "calonHadir";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto21=array();
$proto21["m_link"] = "SQLL_MAIN";
			$proto22=array();
$proto22["m_strHead"] = "   SELECT";
$proto22["m_strFieldList"] = "sid,  eYear,  eType,  SUM(s1+s2+s3+s4+s5) AS jumlahMarkah,  COUNT(sid) AS calonTotal,  COUNT(if(s1 LIKE '%TH%' AND s2 LIKE '%TH%' AND s3 LIKE '%TH%' AND s4 LIKE '%TH%' AND s5 LIKE '%TH%', exam_marking.sid, NULL)) AS calonTakHadir,  sZone";
$proto22["m_strFrom"] = "FROM exam_marking  LEFT JOIN school ON exam_marking.sCode = school.sCode";
$proto22["m_strWhere"] = "";
$proto22["m_strOrderBy"] = "";
$proto22["m_strTail"] = "";
			$proto22["cipherer"] = null;
$proto23=array();
$proto23["m_sql"] = "";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = "";
$proto23["m_havingmode"] = false;
$proto23["m_inBrackets"] = false;
$proto23["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto23);

$proto22["m_where"] = $obj;
$proto25=array();
$proto25["m_sql"] = "";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = false;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

$proto22["m_having"] = $obj;
$proto22["m_fieldlist"] = array();
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "purata_psra_all"
));

$proto27["m_sql"] = "sid";
$proto27["m_srcTableName"] = "purata_psra_all";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto22["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "purata_psra_all"
));

$proto29["m_sql"] = "eYear";
$proto29["m_srcTableName"] = "purata_psra_all";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto22["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "purata_psra_all"
));

$proto31["m_sql"] = "eType";
$proto31["m_srcTableName"] = "purata_psra_all";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto22["m_fieldlist"][]=$obj;
						$proto33=array();
			$proto34=array();
$proto34["m_functiontype"] = "SQLF_SUM";
$proto34["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "s1+s2+s3+s4+s5"
));

$proto34["m_arguments"][]=$obj;
$proto34["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto34);

$proto33["m_sql"] = "SUM(s1+s2+s3+s4+s5)";
$proto33["m_srcTableName"] = "purata_psra_all";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "jumlahMarkah";
$obj = new SQLFieldListItem($proto33);

$proto22["m_fieldlist"][]=$obj;
						$proto36=array();
			$proto37=array();
$proto37["m_functiontype"] = "SQLF_COUNT";
$proto37["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "purata_psra_all"
));

$proto37["m_arguments"][]=$obj;
$proto37["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto37);

$proto36["m_sql"] = "COUNT(sid)";
$proto36["m_srcTableName"] = "purata_psra_all";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "calonTotal";
$obj = new SQLFieldListItem($proto36);

$proto22["m_fieldlist"][]=$obj;
						$proto39=array();
			$proto40=array();
$proto40["m_functiontype"] = "SQLF_COUNT";
$proto40["m_arguments"] = array();
						$proto41=array();
$proto41["m_functiontype"] = "SQLF_CUSTOM";
$proto41["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "s1 LIKE '%TH%' AND s2 LIKE '%TH%' AND s3 LIKE '%TH%' AND s4 LIKE '%TH%' AND s5 LIKE '%TH%'"
));

$proto41["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto41["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto41["m_arguments"][]=$obj;
$proto41["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto41);

$proto40["m_arguments"][]=$obj;
$proto40["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto40);

$proto39["m_sql"] = "COUNT(if(s1 LIKE '%TH%' AND s2 LIKE '%TH%' AND s3 LIKE '%TH%' AND s4 LIKE '%TH%' AND s5 LIKE '%TH%', exam_marking.sid, NULL))";
$proto39["m_srcTableName"] = "purata_psra_all";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "calonTakHadir";
$obj = new SQLFieldListItem($proto39);

$proto22["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sZone"
));

$proto45["m_sql"] = "sZone";
$proto45["m_srcTableName"] = "purata_psra_all";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto22["m_fieldlist"][]=$obj;
$proto22["m_fromlist"] = array();
												$proto47=array();
$proto47["m_link"] = "SQLL_MAIN";
			$proto48=array();
$proto48["m_strName"] = "exam_marking";
$proto48["m_srcTableName"] = "purata_psra_all";
$proto48["m_columns"] = array();
$proto48["m_columns"][] = "sid";
$proto48["m_columns"][] = "name";
$proto48["m_columns"][] = "gender";
$proto48["m_columns"][] = "birthdate";
$proto48["m_columns"][] = "birthCert";
$proto48["m_columns"][] = "nationality";
$proto48["m_columns"][] = "sCode";
$proto48["m_columns"][] = "eNo";
$proto48["m_columns"][] = "eYear";
$proto48["m_columns"][] = "eType";
$proto48["m_columns"][] = "s1";
$proto48["m_columns"][] = "s2";
$proto48["m_columns"][] = "s3";
$proto48["m_columns"][] = "s4";
$proto48["m_columns"][] = "s5";
$proto48["m_columns"][] = "s6";
$proto48["m_columns"][] = "s7";
$obj = new SQLTable($proto48);

$proto47["m_table"] = $obj;
$proto47["m_sql"] = "exam_marking";
$proto47["m_alias"] = "";
$proto47["m_srcTableName"] = "purata_psra_all";
$proto49=array();
$proto49["m_sql"] = "";
$proto49["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto49["m_column"]=$obj;
$proto49["m_contained"] = array();
$proto49["m_strCase"] = "";
$proto49["m_havingmode"] = false;
$proto49["m_inBrackets"] = false;
$proto49["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto49);

$proto47["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto47);

$proto22["m_fromlist"][]=$obj;
												$proto51=array();
$proto51["m_link"] = "SQLL_LEFTJOIN";
			$proto52=array();
$proto52["m_strName"] = "school";
$proto52["m_srcTableName"] = "purata_psra_all";
$proto52["m_columns"] = array();
$proto52["m_columns"][] = "sno";
$proto52["m_columns"][] = "sName";
$proto52["m_columns"][] = "sCenter";
$proto52["m_columns"][] = "sCode";
$proto52["m_columns"][] = "sZone";
$proto52["m_columns"][] = "sType";
$obj = new SQLTable($proto52);

$proto51["m_table"] = $obj;
$proto51["m_sql"] = "LEFT JOIN school ON exam_marking.sCode = school.sCode";
$proto51["m_alias"] = "";
$proto51["m_srcTableName"] = "purata_psra_all";
$proto53=array();
$proto53["m_sql"] = "exam_marking.sCode = school.sCode";
$proto53["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "purata_psra_all"
));

$proto53["m_column"]=$obj;
$proto53["m_contained"] = array();
$proto53["m_strCase"] = "= school.sCode";
$proto53["m_havingmode"] = false;
$proto53["m_inBrackets"] = false;
$proto53["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto53);

$proto51["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto51);

$proto22["m_fromlist"][]=$obj;
$proto22["m_groupby"] = array();
												$proto55=array();
						$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "purata_psra_all"
));

$proto55["m_column"]=$obj;
$obj = new SQLGroupByItem($proto55);

$proto22["m_groupby"][]=$obj;
$proto22["m_orderby"] = array();
$proto22["m_srcTableName"]="purata_psra_all";		
$obj = new SQLQuery($proto22);

$proto21["m_table"] = $obj;
$proto21["m_sql"] = "(   SELECT  sid,  eYear,  eType,  SUM(s1+s2+s3+s4+s5) AS jumlahMarkah,  COUNT(sid) AS calonTotal,  COUNT(if(s1 LIKE '%TH%' AND s2 LIKE '%TH%' AND s3 LIKE '%TH%' AND s4 LIKE '%TH%' AND s5 LIKE '%TH%', exam_marking.sid, NULL)) AS calonTakHadir,  sZone  FROM exam_marking  LEFT JOIN school ON exam_marking.sCode = school.sCode  GROUP BY eYear  ) AS Sub2";
$proto21["m_alias"] = "Sub2";
$proto21["m_srcTableName"] = "purata_psra_all";
$proto57=array();
$proto57["m_sql"] = "";
$proto57["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto57["m_column"]=$obj;
$proto57["m_contained"] = array();
$proto57["m_strCase"] = "";
$proto57["m_havingmode"] = false;
$proto57["m_inBrackets"] = false;
$proto57["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto57);

$proto21["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto21);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto59=array();
						$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "purata_psra_all"
));

$proto59["m_column"]=$obj;
$proto59["m_bAsc"] = 0;
$proto59["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto59);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="purata_psra_all";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_purata_psra_all = createSqlQuery_purata_psra_all();



								

$tdatapurata_psra_all[".sqlquery"] = $queryData_purata_psra_all;

include_once(getabspath("include/purata_psra_all_events.php"));
$tableEvents["purata_psra_all"] = new eventclass_purata_psra_all;
$tdatapurata_psra_all[".hasEvents"] = true;

?>