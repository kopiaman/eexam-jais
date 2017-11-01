<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapurata_psra_daerah = array();
	$tdatapurata_psra_daerah[".truncateText"] = true;
	$tdatapurata_psra_daerah[".NumberOfChars"] = 80;
	$tdatapurata_psra_daerah[".ShortName"] = "purata_psra_daerah";
	$tdatapurata_psra_daerah[".OwnerID"] = "";
	$tdatapurata_psra_daerah[".OriginalTable"] = "exam_marking";

//	field labels
$fieldLabelspurata_psra_daerah = array();
$fieldToolTipspurata_psra_daerah = array();
$pageTitlespurata_psra_daerah = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspurata_psra_daerah["English"] = array();
	$fieldToolTipspurata_psra_daerah["English"] = array();
	$pageTitlespurata_psra_daerah["English"] = array();
	$fieldLabelspurata_psra_daerah["English"]["eYear"] = "Tahun";
	$fieldToolTipspurata_psra_daerah["English"]["eYear"] = "";
	$fieldLabelspurata_psra_daerah["English"]["eType"] = "Peperiksaan";
	$fieldToolTipspurata_psra_daerah["English"]["eType"] = "";
	$fieldLabelspurata_psra_daerah["English"]["sZone"] = "Zon";
	$fieldToolTipspurata_psra_daerah["English"]["sZone"] = "";
	$fieldLabelspurata_psra_daerah["English"]["jumlahMarkah"] = "Jumlah Markah";
	$fieldToolTipspurata_psra_daerah["English"]["jumlahMarkah"] = "";
	$fieldLabelspurata_psra_daerah["English"]["avg"] = "Purata";
	$fieldToolTipspurata_psra_daerah["English"]["avg"] = "";
	$fieldLabelspurata_psra_daerah["English"]["avgperatus"] = "Purata Peratus%";
	$fieldToolTipspurata_psra_daerah["English"]["avgperatus"] = "";
	$fieldLabelspurata_psra_daerah["English"]["calonTotal"] = "Calon";
	$fieldToolTipspurata_psra_daerah["English"]["calonTotal"] = "";
	$fieldLabelspurata_psra_daerah["English"]["calonTakHadir"] = "Tak Hadir";
	$fieldToolTipspurata_psra_daerah["English"]["calonTakHadir"] = "";
	$fieldLabelspurata_psra_daerah["English"]["calonHadir"] = "Hadir";
	$fieldToolTipspurata_psra_daerah["English"]["calonHadir"] = "";
	if (count($fieldToolTipspurata_psra_daerah["English"]))
		$tdatapurata_psra_daerah[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspurata_psra_daerah[""] = array();
	$fieldToolTipspurata_psra_daerah[""] = array();
	$pageTitlespurata_psra_daerah[""] = array();
	if (count($fieldToolTipspurata_psra_daerah[""]))
		$tdatapurata_psra_daerah[".isUseToolTips"] = true;
}


	$tdatapurata_psra_daerah[".NCSearch"] = true;



$tdatapurata_psra_daerah[".shortTableName"] = "purata_psra_daerah";
$tdatapurata_psra_daerah[".nSecOptions"] = 0;
$tdatapurata_psra_daerah[".recsPerRowList"] = 1;
$tdatapurata_psra_daerah[".recsPerRowPrint"] = 1;
$tdatapurata_psra_daerah[".mainTableOwnerID"] = "";
$tdatapurata_psra_daerah[".moveNext"] = 1;
$tdatapurata_psra_daerah[".entityType"] = 1;

$tdatapurata_psra_daerah[".strOriginalTableName"] = "exam_marking";




$tdatapurata_psra_daerah[".showAddInPopup"] = false;

$tdatapurata_psra_daerah[".showEditInPopup"] = false;

$tdatapurata_psra_daerah[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapurata_psra_daerah[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapurata_psra_daerah[".fieldsForRegister"] = array();

$tdatapurata_psra_daerah[".listAjax"] = false;

	$tdatapurata_psra_daerah[".audit"] = false;

	$tdatapurata_psra_daerah[".locking"] = false;



$tdatapurata_psra_daerah[".list"] = true;



$tdatapurata_psra_daerah[".exportTo"] = true;



$tdatapurata_psra_daerah[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatapurata_psra_daerah[".searchSaving"] = false;
//

$tdatapurata_psra_daerah[".showSearchPanel"] = true;
		$tdatapurata_psra_daerah[".flexibleSearch"] = true;

if (isMobile())
	$tdatapurata_psra_daerah[".isUseAjaxSuggest"] = false;
else
	$tdatapurata_psra_daerah[".isUseAjaxSuggest"] = true;

$tdatapurata_psra_daerah[".rowHighlite"] = true;


																				
$tdatapurata_psra_daerah[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapurata_psra_daerah[".isUseTimeForSearch"] = false;





$tdatapurata_psra_daerah[".allSearchFields"] = array();
$tdatapurata_psra_daerah[".filterFields"] = array();
$tdatapurata_psra_daerah[".requiredSearchFields"] = array();

$tdatapurata_psra_daerah[".allSearchFields"][] = "sZone";
	$tdatapurata_psra_daerah[".allSearchFields"][] = "eYear";
	

$tdatapurata_psra_daerah[".googleLikeFields"] = array();
$tdatapurata_psra_daerah[".googleLikeFields"][] = "jumlahMarkah";
$tdatapurata_psra_daerah[".googleLikeFields"][] = "avg";
$tdatapurata_psra_daerah[".googleLikeFields"][] = "avgperatus";
$tdatapurata_psra_daerah[".googleLikeFields"][] = "calonTotal";
$tdatapurata_psra_daerah[".googleLikeFields"][] = "calonTakHadir";
$tdatapurata_psra_daerah[".googleLikeFields"][] = "calonHadir";

$tdatapurata_psra_daerah[".panelSearchFields"] = array();
$tdatapurata_psra_daerah[".searchPanelOptions"] = array();
$tdatapurata_psra_daerah[".panelSearchFields"][] = "sZone";
	$tdatapurata_psra_daerah[".panelSearchFields"][] = "eYear";
	
$tdatapurata_psra_daerah[".advSearchFields"] = array();
$tdatapurata_psra_daerah[".advSearchFields"][] = "sZone";
$tdatapurata_psra_daerah[".advSearchFields"][] = "eYear";

$tdatapurata_psra_daerah[".tableType"] = "list";

$tdatapurata_psra_daerah[".printerPageOrientation"] = 0;
$tdatapurata_psra_daerah[".nPrinterPageScale"] = 100;

$tdatapurata_psra_daerah[".nPrinterSplitRecords"] = 40;

$tdatapurata_psra_daerah[".nPrinterPDFSplitRecords"] = 40;



$tdatapurata_psra_daerah[".geocodingEnabled"] = false;










// view page pdf

// print page pdf

$tdatapurata_psra_daerah[".totalsFields"] = array();
$tdatapurata_psra_daerah[".totalsFields"][] = array(
	"fName" => "calonTotal",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');

$tdatapurata_psra_daerah[".pageSize"] = 20;

$tdatapurata_psra_daerah[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY eYear DESC, avg DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapurata_psra_daerah[".strOrderBy"] = $tstrOrderBy;

$tdatapurata_psra_daerah[".orderindexes"] = array();

$tdatapurata_psra_daerah[".sqlHead"] = "SELECT sZone,  eYear,  eType,  jumlahMarkah,  jumlahMarkah/(calonTotal-calonTakHadir) AS `avg`,  (jumlahMarkah/(calonTotal-calonTakHadir))/500*100 AS avgperatus,  calonTotal,  calonTakHadir,  calonTotal-calonTakHadir AS calonHadir";
$tdatapurata_psra_daerah[".sqlFrom"] = "FROM (   SELECT  sid,  eYear,  eType,  SUM(s1+s2+s3+s4+s5) AS jumlahMarkah,  COUNT(sid) AS calonTotal,  COUNT(if(s1 LIKE '%TH%' AND s2 LIKE '%TH%' AND s3 LIKE '%TH%' AND s4 LIKE '%TH%' AND s5 LIKE '%TH%', exam_marking.sid, NULL)) AS calonTakHadir,  sZone  FROM exam_marking  LEFT JOIN school ON exam_marking.sCode = school.sCode   GROUP BY sZone, eYear  ) AS Sub2";
$tdatapurata_psra_daerah[".sqlWhereExpr"] = "";
$tdatapurata_psra_daerah[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapurata_psra_daerah[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapurata_psra_daerah[".arrGroupsPerPage"] = $arrGPP;

$tdatapurata_psra_daerah[".highlightSearchResults"] = true;

$tableKeyspurata_psra_daerah = array();
$tableKeyspurata_psra_daerah[] = "eYear";
$tdatapurata_psra_daerah[".Keys"] = $tableKeyspurata_psra_daerah;

$tdatapurata_psra_daerah[".listFields"] = array();
$tdatapurata_psra_daerah[".listFields"][] = "sZone";
$tdatapurata_psra_daerah[".listFields"][] = "eYear";
$tdatapurata_psra_daerah[".listFields"][] = "calonTotal";
$tdatapurata_psra_daerah[".listFields"][] = "calonTakHadir";
$tdatapurata_psra_daerah[".listFields"][] = "calonHadir";
$tdatapurata_psra_daerah[".listFields"][] = "jumlahMarkah";
$tdatapurata_psra_daerah[".listFields"][] = "avgperatus";

$tdatapurata_psra_daerah[".hideMobileList"] = array();


$tdatapurata_psra_daerah[".viewFields"] = array();

$tdatapurata_psra_daerah[".addFields"] = array();

$tdatapurata_psra_daerah[".masterListFields"] = array();
$tdatapurata_psra_daerah[".masterListFields"][] = "sZone";
$tdatapurata_psra_daerah[".masterListFields"][] = "calonTakHadir";
$tdatapurata_psra_daerah[".masterListFields"][] = "calonTotal";
$tdatapurata_psra_daerah[".masterListFields"][] = "jumlahMarkah";
$tdatapurata_psra_daerah[".masterListFields"][] = "avg";
$tdatapurata_psra_daerah[".masterListFields"][] = "avgperatus";
$tdatapurata_psra_daerah[".masterListFields"][] = "calonHadir";
$tdatapurata_psra_daerah[".masterListFields"][] = "eYear";
$tdatapurata_psra_daerah[".masterListFields"][] = "eType";

$tdatapurata_psra_daerah[".inlineAddFields"] = array();

$tdatapurata_psra_daerah[".editFields"] = array();

$tdatapurata_psra_daerah[".inlineEditFields"] = array();

$tdatapurata_psra_daerah[".exportFields"] = array();
$tdatapurata_psra_daerah[".exportFields"][] = "calonHadir";
$tdatapurata_psra_daerah[".exportFields"][] = "jumlahMarkah";
$tdatapurata_psra_daerah[".exportFields"][] = "avg";
$tdatapurata_psra_daerah[".exportFields"][] = "avgperatus";
$tdatapurata_psra_daerah[".exportFields"][] = "calonTotal";
$tdatapurata_psra_daerah[".exportFields"][] = "calonTakHadir";
$tdatapurata_psra_daerah[".exportFields"][] = "sZone";
$tdatapurata_psra_daerah[".exportFields"][] = "eYear";

$tdatapurata_psra_daerah[".importFields"] = array();

$tdatapurata_psra_daerah[".printFields"] = array();

//	sZone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sZone";
	$fdata["GoodName"] = "sZone";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("purata_psra_daerah","sZone");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sZone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sZone";

	
	
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

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "setting";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;
	
	
		
	$edata["LinkField"] = "fieldValue";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "fieldName";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatapurata_psra_daerah["sZone"] = $fdata;
//	eYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "eYear";
	$fdata["GoodName"] = "eYear";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("purata_psra_daerah","eYear");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatapurata_psra_daerah["eYear"] = $fdata;
//	eType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "eType";
	$fdata["GoodName"] = "eType";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("purata_psra_daerah","eType");
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








	$tdatapurata_psra_daerah["eType"] = $fdata;
//	jumlahMarkah
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "jumlahMarkah";
	$fdata["GoodName"] = "jumlahMarkah";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("purata_psra_daerah","jumlahMarkah");
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








	$tdatapurata_psra_daerah["jumlahMarkah"] = $fdata;
//	avg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "avg";
	$fdata["GoodName"] = "avg";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("purata_psra_daerah","avg");
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








	$tdatapurata_psra_daerah["avg"] = $fdata;
//	avgperatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "avgperatus";
	$fdata["GoodName"] = "avgperatus";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("purata_psra_daerah","avgperatus");
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








	$tdatapurata_psra_daerah["avgperatus"] = $fdata;
//	calonTotal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "calonTotal";
	$fdata["GoodName"] = "calonTotal";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("purata_psra_daerah","calonTotal");
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








	$tdatapurata_psra_daerah["calonTotal"] = $fdata;
//	calonTakHadir
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "calonTakHadir";
	$fdata["GoodName"] = "calonTakHadir";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("purata_psra_daerah","calonTakHadir");
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








	$tdatapurata_psra_daerah["calonTakHadir"] = $fdata;
//	calonHadir
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "calonHadir";
	$fdata["GoodName"] = "calonHadir";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("purata_psra_daerah","calonHadir");
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








	$tdatapurata_psra_daerah["calonHadir"] = $fdata;


$tables_data["purata_psra_daerah"]=&$tdatapurata_psra_daerah;
$field_labels["purata_psra_daerah"] = &$fieldLabelspurata_psra_daerah;
$fieldToolTips["purata_psra_daerah"] = &$fieldToolTipspurata_psra_daerah;
$page_titles["purata_psra_daerah"] = &$pageTitlespurata_psra_daerah;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["purata_psra_daerah"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["purata_psra_daerah"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_purata_psra_daerah()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sZone,  eYear,  eType,  jumlahMarkah,  jumlahMarkah/(calonTotal-calonTakHadir) AS `avg`,  (jumlahMarkah/(calonTotal-calonTakHadir))/500*100 AS avgperatus,  calonTotal,  calonTakHadir,  calonTotal-calonTakHadir AS calonHadir";
$proto0["m_strFrom"] = "FROM (   SELECT  sid,  eYear,  eType,  SUM(s1+s2+s3+s4+s5) AS jumlahMarkah,  COUNT(sid) AS calonTotal,  COUNT(if(s1 LIKE '%TH%' AND s2 LIKE '%TH%' AND s3 LIKE '%TH%' AND s4 LIKE '%TH%' AND s5 LIKE '%TH%', exam_marking.sid, NULL)) AS calonTakHadir,  sZone  FROM exam_marking  LEFT JOIN school ON exam_marking.sCode = school.sCode   GROUP BY sZone, eYear  ) AS Sub2";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY eYear DESC, avg DESC";
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
			$obj = new SQLNonParsed(array(
	"m_sql" => "sZone"
));

$proto5["m_sql"] = "sZone";
$proto5["m_srcTableName"] = "purata_psra_daerah";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "purata_psra_daerah"
));

$proto7["m_sql"] = "eYear";
$proto7["m_srcTableName"] = "purata_psra_daerah";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "purata_psra_daerah"
));

$proto9["m_sql"] = "eType";
$proto9["m_srcTableName"] = "purata_psra_daerah";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "jumlahMarkah",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "purata_psra_daerah"
));

$proto11["m_sql"] = "jumlahMarkah";
$proto11["m_srcTableName"] = "purata_psra_daerah";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "jumlahMarkah/(calonTotal-calonTakHadir)"
));

$proto13["m_sql"] = "jumlahMarkah/(calonTotal-calonTakHadir)";
$proto13["m_srcTableName"] = "purata_psra_daerah";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "avg";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(jumlahMarkah/(calonTotal-calonTakHadir))/500*100"
));

$proto15["m_sql"] = "(jumlahMarkah/(calonTotal-calonTakHadir))/500*100";
$proto15["m_srcTableName"] = "purata_psra_daerah";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "avgperatus";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "calonTotal",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "purata_psra_daerah"
));

$proto17["m_sql"] = "calonTotal";
$proto17["m_srcTableName"] = "purata_psra_daerah";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "calonTakHadir",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "purata_psra_daerah"
));

$proto19["m_sql"] = "calonTakHadir";
$proto19["m_srcTableName"] = "purata_psra_daerah";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "calonTotal-calonTakHadir"
));

$proto21["m_sql"] = "calonTotal-calonTakHadir";
$proto21["m_srcTableName"] = "purata_psra_daerah";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "calonHadir";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto23=array();
$proto23["m_link"] = "SQLL_MAIN";
			$proto24=array();
$proto24["m_strHead"] = "   SELECT";
$proto24["m_strFieldList"] = "sid,  eYear,  eType,  SUM(s1+s2+s3+s4+s5) AS jumlahMarkah,  COUNT(sid) AS calonTotal,  COUNT(if(s1 LIKE '%TH%' AND s2 LIKE '%TH%' AND s3 LIKE '%TH%' AND s4 LIKE '%TH%' AND s5 LIKE '%TH%', exam_marking.sid, NULL)) AS calonTakHadir,  sZone";
$proto24["m_strFrom"] = "FROM exam_marking  LEFT JOIN school ON exam_marking.sCode = school.sCode";
$proto24["m_strWhere"] = "";
$proto24["m_strOrderBy"] = "";
$proto24["m_strTail"] = "";
			$proto24["cipherer"] = null;
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

$proto24["m_where"] = $obj;
$proto27=array();
$proto27["m_sql"] = "";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "";
$proto27["m_havingmode"] = false;
$proto27["m_inBrackets"] = false;
$proto27["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto27);

$proto24["m_having"] = $obj;
$proto24["m_fieldlist"] = array();
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "purata_psra_daerah"
));

$proto29["m_sql"] = "sid";
$proto29["m_srcTableName"] = "purata_psra_daerah";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto24["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "purata_psra_daerah"
));

$proto31["m_sql"] = "eYear";
$proto31["m_srcTableName"] = "purata_psra_daerah";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto24["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "purata_psra_daerah"
));

$proto33["m_sql"] = "eType";
$proto33["m_srcTableName"] = "purata_psra_daerah";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto24["m_fieldlist"][]=$obj;
						$proto35=array();
			$proto36=array();
$proto36["m_functiontype"] = "SQLF_SUM";
$proto36["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "s1+s2+s3+s4+s5"
));

$proto36["m_arguments"][]=$obj;
$proto36["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto36);

$proto35["m_sql"] = "SUM(s1+s2+s3+s4+s5)";
$proto35["m_srcTableName"] = "purata_psra_daerah";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "jumlahMarkah";
$obj = new SQLFieldListItem($proto35);

$proto24["m_fieldlist"][]=$obj;
						$proto38=array();
			$proto39=array();
$proto39["m_functiontype"] = "SQLF_COUNT";
$proto39["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "purata_psra_daerah"
));

$proto39["m_arguments"][]=$obj;
$proto39["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto39);

$proto38["m_sql"] = "COUNT(sid)";
$proto38["m_srcTableName"] = "purata_psra_daerah";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "calonTotal";
$obj = new SQLFieldListItem($proto38);

$proto24["m_fieldlist"][]=$obj;
						$proto41=array();
			$proto42=array();
$proto42["m_functiontype"] = "SQLF_COUNT";
$proto42["m_arguments"] = array();
						$proto43=array();
$proto43["m_functiontype"] = "SQLF_CUSTOM";
$proto43["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "s1 LIKE '%TH%' AND s2 LIKE '%TH%' AND s3 LIKE '%TH%' AND s4 LIKE '%TH%' AND s5 LIKE '%TH%'"
));

$proto43["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto43["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto43["m_arguments"][]=$obj;
$proto43["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto43);

$proto42["m_arguments"][]=$obj;
$proto42["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto42);

$proto41["m_sql"] = "COUNT(if(s1 LIKE '%TH%' AND s2 LIKE '%TH%' AND s3 LIKE '%TH%' AND s4 LIKE '%TH%' AND s5 LIKE '%TH%', exam_marking.sid, NULL))";
$proto41["m_srcTableName"] = "purata_psra_daerah";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "calonTakHadir";
$obj = new SQLFieldListItem($proto41);

$proto24["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sZone"
));

$proto47["m_sql"] = "sZone";
$proto47["m_srcTableName"] = "purata_psra_daerah";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto24["m_fieldlist"][]=$obj;
$proto24["m_fromlist"] = array();
												$proto49=array();
$proto49["m_link"] = "SQLL_MAIN";
			$proto50=array();
$proto50["m_strName"] = "exam_marking";
$proto50["m_srcTableName"] = "purata_psra_daerah";
$proto50["m_columns"] = array();
$proto50["m_columns"][] = "sid";
$proto50["m_columns"][] = "name";
$proto50["m_columns"][] = "gender";
$proto50["m_columns"][] = "birthdate";
$proto50["m_columns"][] = "birthCert";
$proto50["m_columns"][] = "nationality";
$proto50["m_columns"][] = "sCode";
$proto50["m_columns"][] = "eNo";
$proto50["m_columns"][] = "eYear";
$proto50["m_columns"][] = "eType";
$proto50["m_columns"][] = "s1";
$proto50["m_columns"][] = "s2";
$proto50["m_columns"][] = "s3";
$proto50["m_columns"][] = "s4";
$proto50["m_columns"][] = "s5";
$proto50["m_columns"][] = "s6";
$proto50["m_columns"][] = "s7";
$obj = new SQLTable($proto50);

$proto49["m_table"] = $obj;
$proto49["m_sql"] = "exam_marking";
$proto49["m_alias"] = "";
$proto49["m_srcTableName"] = "purata_psra_daerah";
$proto51=array();
$proto51["m_sql"] = "";
$proto51["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto51["m_column"]=$obj;
$proto51["m_contained"] = array();
$proto51["m_strCase"] = "";
$proto51["m_havingmode"] = false;
$proto51["m_inBrackets"] = false;
$proto51["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto51);

$proto49["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto49);

$proto24["m_fromlist"][]=$obj;
												$proto53=array();
$proto53["m_link"] = "SQLL_LEFTJOIN";
			$proto54=array();
$proto54["m_strName"] = "school";
$proto54["m_srcTableName"] = "purata_psra_daerah";
$proto54["m_columns"] = array();
$proto54["m_columns"][] = "sno";
$proto54["m_columns"][] = "sName";
$proto54["m_columns"][] = "sCenter";
$proto54["m_columns"][] = "sCode";
$proto54["m_columns"][] = "sZone";
$proto54["m_columns"][] = "sType";
$obj = new SQLTable($proto54);

$proto53["m_table"] = $obj;
$proto53["m_sql"] = "LEFT JOIN school ON exam_marking.sCode = school.sCode";
$proto53["m_alias"] = "";
$proto53["m_srcTableName"] = "purata_psra_daerah";
$proto55=array();
$proto55["m_sql"] = "exam_marking.sCode = school.sCode";
$proto55["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "purata_psra_daerah"
));

$proto55["m_column"]=$obj;
$proto55["m_contained"] = array();
$proto55["m_strCase"] = "= school.sCode";
$proto55["m_havingmode"] = false;
$proto55["m_inBrackets"] = false;
$proto55["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto55);

$proto53["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto53);

$proto24["m_fromlist"][]=$obj;
$proto24["m_groupby"] = array();
												$proto57=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sZone"
));

$proto57["m_column"]=$obj;
$obj = new SQLGroupByItem($proto57);

$proto24["m_groupby"][]=$obj;
												$proto59=array();
						$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "purata_psra_daerah"
));

$proto59["m_column"]=$obj;
$obj = new SQLGroupByItem($proto59);

$proto24["m_groupby"][]=$obj;
$proto24["m_orderby"] = array();
$proto24["m_srcTableName"]="purata_psra_daerah";		
$obj = new SQLQuery($proto24);

$proto23["m_table"] = $obj;
$proto23["m_sql"] = "(   SELECT  sid,  eYear,  eType,  SUM(s1+s2+s3+s4+s5) AS jumlahMarkah,  COUNT(sid) AS calonTotal,  COUNT(if(s1 LIKE '%TH%' AND s2 LIKE '%TH%' AND s3 LIKE '%TH%' AND s4 LIKE '%TH%' AND s5 LIKE '%TH%', exam_marking.sid, NULL)) AS calonTakHadir,  sZone  FROM exam_marking  LEFT JOIN school ON exam_marking.sCode = school.sCode   GROUP BY sZone, eYear  ) AS Sub2";
$proto23["m_alias"] = "Sub2";
$proto23["m_srcTableName"] = "purata_psra_daerah";
$proto61=array();
$proto61["m_sql"] = "";
$proto61["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto61["m_column"]=$obj;
$proto61["m_contained"] = array();
$proto61["m_strCase"] = "";
$proto61["m_havingmode"] = false;
$proto61["m_inBrackets"] = false;
$proto61["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto61);

$proto23["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto23);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto63=array();
						$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "purata_psra_daerah"
));

$proto63["m_column"]=$obj;
$proto63["m_bAsc"] = 0;
$proto63["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto63);

$proto0["m_orderby"][]=$obj;					
												$proto65=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "avg "
));

$proto65["m_column"]=$obj;
$proto65["m_bAsc"] = 0;
$proto65["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto65);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="purata_psra_daerah";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_purata_psra_daerah = createSqlQuery_purata_psra_daerah();



									

$tdatapurata_psra_daerah[".sqlquery"] = $queryData_purata_psra_daerah;

include_once(getabspath("include/purata_psra_daerah_events.php"));
$tableEvents["purata_psra_daerah"] = new eventclass_purata_psra_daerah;
$tdatapurata_psra_daerah[".hasEvents"] = true;

$query = &$queryData_purata_psra_daerah;
$table = "purata_psra_daerah";
// here goes EVENT_INIT_TABLE event


global $conn;
//only PPTAD zon can view their own zon
$year=date('Y');
$alevel=$_SESSION['alevel'];
$zon=$_SESSION['zon'];
if($zon!==NULL && $alevel==1){
$query->addWhere("sZone='".$zon."'");
}
;
unset($query);
?>