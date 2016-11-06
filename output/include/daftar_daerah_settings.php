<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadaftar_daerah = array();
	$tdatadaftar_daerah[".truncateText"] = true;
	$tdatadaftar_daerah[".NumberOfChars"] = 80;
	$tdatadaftar_daerah[".ShortName"] = "daftar_daerah";
	$tdatadaftar_daerah[".OwnerID"] = "";
	$tdatadaftar_daerah[".OriginalTable"] = "exam_marking";

//	field labels
$fieldLabelsdaftar_daerah = array();
$fieldToolTipsdaftar_daerah = array();
$pageTitlesdaftar_daerah = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdaftar_daerah["English"] = array();
	$fieldToolTipsdaftar_daerah["English"] = array();
	$pageTitlesdaftar_daerah["English"] = array();
	$fieldLabelsdaftar_daerah["English"]["sCode"] = "Kod Sekolah";
	$fieldToolTipsdaftar_daerah["English"]["sCode"] = "";
	$fieldLabelsdaftar_daerah["English"]["eYear"] = "Tahun";
	$fieldToolTipsdaftar_daerah["English"]["eYear"] = "";
	$fieldLabelsdaftar_daerah["English"]["eType"] = "Peperiksaan";
	$fieldToolTipsdaftar_daerah["English"]["eType"] = "";
	$fieldLabelsdaftar_daerah["English"]["sZone"] = "Zon";
	$fieldToolTipsdaftar_daerah["English"]["sZone"] = "";
	$fieldLabelsdaftar_daerah["English"]["calonTotal"] = "Jumlah Calon";
	$fieldToolTipsdaftar_daerah["English"]["calonTotal"] = "";
	$fieldLabelsdaftar_daerah["English"]["sid"] = "Sid";
	$fieldToolTipsdaftar_daerah["English"]["sid"] = "";
	$fieldLabelsdaftar_daerah["English"]["sCenter"] = "Kod Pusat";
	$fieldToolTipsdaftar_daerah["English"]["sCenter"] = "";
	$fieldLabelsdaftar_daerah["English"]["lelaki"] = "Lelaki";
	$fieldToolTipsdaftar_daerah["English"]["lelaki"] = "";
	$fieldLabelsdaftar_daerah["English"]["perempuan"] = "Perempuan";
	$fieldToolTipsdaftar_daerah["English"]["perempuan"] = "";
	if (count($fieldToolTipsdaftar_daerah["English"]))
		$tdatadaftar_daerah[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdaftar_daerah[""] = array();
	$fieldToolTipsdaftar_daerah[""] = array();
	$pageTitlesdaftar_daerah[""] = array();
	$fieldLabelsdaftar_daerah[""]["sid"] = "Sid";
	$fieldToolTipsdaftar_daerah[""]["sid"] = "";
	$fieldLabelsdaftar_daerah[""]["sCenter"] = "S Center";
	$fieldToolTipsdaftar_daerah[""]["sCenter"] = "";
	$fieldLabelsdaftar_daerah[""]["lelaki"] = "Lelaki";
	$fieldToolTipsdaftar_daerah[""]["lelaki"] = "";
	$fieldLabelsdaftar_daerah[""]["perempuan"] = "Perempuan";
	$fieldToolTipsdaftar_daerah[""]["perempuan"] = "";
	if (count($fieldToolTipsdaftar_daerah[""]))
		$tdatadaftar_daerah[".isUseToolTips"] = true;
}


	$tdatadaftar_daerah[".NCSearch"] = true;



$tdatadaftar_daerah[".shortTableName"] = "daftar_daerah";
$tdatadaftar_daerah[".nSecOptions"] = 0;
$tdatadaftar_daerah[".recsPerRowList"] = 1;
$tdatadaftar_daerah[".recsPerRowPrint"] = 1;
$tdatadaftar_daerah[".mainTableOwnerID"] = "";
$tdatadaftar_daerah[".moveNext"] = 1;
$tdatadaftar_daerah[".entityType"] = 1;

$tdatadaftar_daerah[".strOriginalTableName"] = "exam_marking";




$tdatadaftar_daerah[".showAddInPopup"] = false;

$tdatadaftar_daerah[".showEditInPopup"] = false;

$tdatadaftar_daerah[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadaftar_daerah[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadaftar_daerah[".fieldsForRegister"] = array();

$tdatadaftar_daerah[".listAjax"] = false;

	$tdatadaftar_daerah[".audit"] = false;

	$tdatadaftar_daerah[".locking"] = false;



$tdatadaftar_daerah[".list"] = true;



$tdatadaftar_daerah[".exportTo"] = true;



$tdatadaftar_daerah[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatadaftar_daerah[".searchSaving"] = false;
//

$tdatadaftar_daerah[".showSearchPanel"] = true;
		$tdatadaftar_daerah[".flexibleSearch"] = true;

if (isMobile())
	$tdatadaftar_daerah[".isUseAjaxSuggest"] = false;
else
	$tdatadaftar_daerah[".isUseAjaxSuggest"] = true;

$tdatadaftar_daerah[".rowHighlite"] = true;


																			
$tdatadaftar_daerah[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadaftar_daerah[".isUseTimeForSearch"] = false;





$tdatadaftar_daerah[".allSearchFields"] = array();
$tdatadaftar_daerah[".filterFields"] = array();
$tdatadaftar_daerah[".requiredSearchFields"] = array();

$tdatadaftar_daerah[".allSearchFields"][] = "sZone";
	$tdatadaftar_daerah[".allSearchFields"][] = "eYear";
	$tdatadaftar_daerah[".allSearchFields"][] = "lelaki";
	$tdatadaftar_daerah[".allSearchFields"][] = "perempuan";
	

$tdatadaftar_daerah[".googleLikeFields"] = array();
$tdatadaftar_daerah[".googleLikeFields"][] = "sCenter";
$tdatadaftar_daerah[".googleLikeFields"][] = "lelaki";
$tdatadaftar_daerah[".googleLikeFields"][] = "perempuan";

$tdatadaftar_daerah[".panelSearchFields"] = array();
$tdatadaftar_daerah[".searchPanelOptions"] = array();
$tdatadaftar_daerah[".panelSearchFields"][] = "sZone";
	$tdatadaftar_daerah[".panelSearchFields"][] = "sCenter";
	$tdatadaftar_daerah[".panelSearchFields"][] = "sCode";
	$tdatadaftar_daerah[".panelSearchFields"][] = "eYear";
	
$tdatadaftar_daerah[".advSearchFields"] = array();
$tdatadaftar_daerah[".advSearchFields"][] = "sZone";
$tdatadaftar_daerah[".advSearchFields"][] = "eYear";
$tdatadaftar_daerah[".advSearchFields"][] = "lelaki";
$tdatadaftar_daerah[".advSearchFields"][] = "perempuan";

$tdatadaftar_daerah[".tableType"] = "list";

$tdatadaftar_daerah[".printerPageOrientation"] = 0;
$tdatadaftar_daerah[".nPrinterPageScale"] = 100;

$tdatadaftar_daerah[".nPrinterSplitRecords"] = 40;

$tdatadaftar_daerah[".nPrinterPDFSplitRecords"] = 40;



$tdatadaftar_daerah[".geocodingEnabled"] = false;










// view page pdf

// print page pdf

$tdatadaftar_daerah[".totalsFields"] = array();
$tdatadaftar_daerah[".totalsFields"][] = array(
	"fName" => "lelaki",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatadaftar_daerah[".totalsFields"][] = array(
	"fName" => "perempuan",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');
$tdatadaftar_daerah[".totalsFields"][] = array(
	"fName" => "calonTotal",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');

$tdatadaftar_daerah[".pageSize"] = 20;

$tdatadaftar_daerah[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY exam_marking.eYear DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadaftar_daerah[".strOrderBy"] = $tstrOrderBy;

$tdatadaftar_daerah[".orderindexes"] = array();
$tdatadaftar_daerah[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "exam_marking.eYear");

$tdatadaftar_daerah[".sqlHead"] = "SELECT exam_marking.sid,  exam_marking.sCode AS sCode,  exam_marking.eYear,  exam_marking.eType,  sCenter,  sZone,  COUNT(exam_marking.sid) AS calonTotal,  COUNT(if(exam_marking.gender LIKE '%L%', exam_marking.sid, NULL)) AS lelaki,  COUNT(if(exam_marking.gender LIKE '%P%', exam_marking.sid, NULL)) AS perempuan";
$tdatadaftar_daerah[".sqlFrom"] = "FROM exam_marking  LEFT JOIN school ON exam_marking.sCode = school.sCode";
$tdatadaftar_daerah[".sqlWhereExpr"] = "";
$tdatadaftar_daerah[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadaftar_daerah[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadaftar_daerah[".arrGroupsPerPage"] = $arrGPP;

$tdatadaftar_daerah[".highlightSearchResults"] = true;

$tableKeysdaftar_daerah = array();
$tableKeysdaftar_daerah[] = "sCode";
$tdatadaftar_daerah[".Keys"] = $tableKeysdaftar_daerah;

$tdatadaftar_daerah[".listFields"] = array();
$tdatadaftar_daerah[".listFields"][] = "sZone";
$tdatadaftar_daerah[".listFields"][] = "eYear";
$tdatadaftar_daerah[".listFields"][] = "lelaki";
$tdatadaftar_daerah[".listFields"][] = "perempuan";
$tdatadaftar_daerah[".listFields"][] = "calonTotal";

$tdatadaftar_daerah[".hideMobileList"] = array();


$tdatadaftar_daerah[".viewFields"] = array();

$tdatadaftar_daerah[".addFields"] = array();

$tdatadaftar_daerah[".masterListFields"] = array();
$tdatadaftar_daerah[".masterListFields"][] = "sZone";
$tdatadaftar_daerah[".masterListFields"][] = "sid";
$tdatadaftar_daerah[".masterListFields"][] = "sCenter";
$tdatadaftar_daerah[".masterListFields"][] = "sCode";
$tdatadaftar_daerah[".masterListFields"][] = "eYear";
$tdatadaftar_daerah[".masterListFields"][] = "lelaki";
$tdatadaftar_daerah[".masterListFields"][] = "perempuan";
$tdatadaftar_daerah[".masterListFields"][] = "calonTotal";
$tdatadaftar_daerah[".masterListFields"][] = "eType";

$tdatadaftar_daerah[".inlineAddFields"] = array();

$tdatadaftar_daerah[".editFields"] = array();

$tdatadaftar_daerah[".inlineEditFields"] = array();

$tdatadaftar_daerah[".exportFields"] = array();
$tdatadaftar_daerah[".exportFields"][] = "eYear";
$tdatadaftar_daerah[".exportFields"][] = "lelaki";
$tdatadaftar_daerah[".exportFields"][] = "perempuan";
$tdatadaftar_daerah[".exportFields"][] = "calonTotal";

$tdatadaftar_daerah[".importFields"] = array();

$tdatadaftar_daerah[".printFields"] = array();

//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("daftar_daerah","sid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "sid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.sid";

	
	
			
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








	$tdatadaftar_daerah["sid"] = $fdata;
//	sCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sCode";
	$fdata["GoodName"] = "sCode";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("daftar_daerah","sCode");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "sCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.sCode";

	
	
			
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
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 50;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatadaftar_daerah["sCode"] = $fdata;
//	eYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "eYear";
	$fdata["GoodName"] = "eYear";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("daftar_daerah","eYear");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "eYear";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.eYear";

	
	
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




	$tdatadaftar_daerah["eYear"] = $fdata;
//	eType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "eType";
	$fdata["GoodName"] = "eType";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("daftar_daerah","eType");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "eType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.eType";

	
	
			
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








	$tdatadaftar_daerah["eType"] = $fdata;
//	sCenter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sCenter";
	$fdata["GoodName"] = "sCenter";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("daftar_daerah","sCenter");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "sCenter";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sCenter";

	
	
			
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
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatadaftar_daerah["sCenter"] = $fdata;
//	sZone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sZone";
	$fdata["GoodName"] = "sZone";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("daftar_daerah","sZone");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatadaftar_daerah["sZone"] = $fdata;
//	calonTotal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "calonTotal";
	$fdata["GoodName"] = "calonTotal";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("daftar_daerah","calonTotal");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "calonTotal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(exam_marking.sid)";

	
	
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








	$tdatadaftar_daerah["calonTotal"] = $fdata;
//	lelaki
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "lelaki";
	$fdata["GoodName"] = "lelaki";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("daftar_daerah","lelaki");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "lelaki";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(if(exam_marking.gender LIKE '%L%', exam_marking.sid, NULL))";

	
	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatadaftar_daerah["lelaki"] = $fdata;
//	perempuan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "perempuan";
	$fdata["GoodName"] = "perempuan";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("daftar_daerah","perempuan");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "perempuan";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(if(exam_marking.gender LIKE '%P%', exam_marking.sid, NULL))";

	
	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatadaftar_daerah["perempuan"] = $fdata;


$tables_data["daftar_daerah"]=&$tdatadaftar_daerah;
$field_labels["daftar_daerah"] = &$fieldLabelsdaftar_daerah;
$fieldToolTips["daftar_daerah"] = &$fieldToolTipsdaftar_daerah;
$page_titles["daftar_daerah"] = &$pageTitlesdaftar_daerah;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["daftar_daerah"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["daftar_daerah"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_daftar_daerah()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "exam_marking.sid,  exam_marking.sCode AS sCode,  exam_marking.eYear,  exam_marking.eType,  sCenter,  sZone,  COUNT(exam_marking.sid) AS calonTotal,  COUNT(if(exam_marking.gender LIKE '%L%', exam_marking.sid, NULL)) AS lelaki,  COUNT(if(exam_marking.gender LIKE '%P%', exam_marking.sid, NULL)) AS perempuan";
$proto0["m_strFrom"] = "FROM exam_marking  LEFT JOIN school ON exam_marking.sCode = school.sCode";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY exam_marking.eYear DESC";
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
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "daftar_daerah"
));

$proto5["m_sql"] = "exam_marking.sid";
$proto5["m_srcTableName"] = "daftar_daerah";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "daftar_daerah"
));

$proto7["m_sql"] = "exam_marking.sCode";
$proto7["m_srcTableName"] = "daftar_daerah";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "sCode";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "daftar_daerah"
));

$proto9["m_sql"] = "exam_marking.eYear";
$proto9["m_srcTableName"] = "daftar_daerah";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "daftar_daerah"
));

$proto11["m_sql"] = "exam_marking.eType";
$proto11["m_srcTableName"] = "daftar_daerah";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sCenter"
));

$proto13["m_sql"] = "sCenter";
$proto13["m_srcTableName"] = "daftar_daerah";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sZone"
));

$proto15["m_sql"] = "sZone";
$proto15["m_srcTableName"] = "daftar_daerah";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$proto18=array();
$proto18["m_functiontype"] = "SQLF_COUNT";
$proto18["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "daftar_daerah"
));

$proto18["m_arguments"][]=$obj;
$proto18["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto18);

$proto17["m_sql"] = "COUNT(exam_marking.sid)";
$proto17["m_srcTableName"] = "daftar_daerah";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "calonTotal";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$proto21=array();
$proto21["m_functiontype"] = "SQLF_COUNT";
$proto21["m_arguments"] = array();
						$proto22=array();
$proto22["m_functiontype"] = "SQLF_CUSTOM";
$proto22["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.gender LIKE '%L%'"
));

$proto22["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto22["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto22["m_arguments"][]=$obj;
$proto22["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto22);

$proto21["m_arguments"][]=$obj;
$proto21["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto21);

$proto20["m_sql"] = "COUNT(if(exam_marking.gender LIKE '%L%', exam_marking.sid, NULL))";
$proto20["m_srcTableName"] = "daftar_daerah";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "lelaki";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$proto27=array();
$proto27["m_functiontype"] = "SQLF_COUNT";
$proto27["m_arguments"] = array();
						$proto28=array();
$proto28["m_functiontype"] = "SQLF_CUSTOM";
$proto28["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.gender LIKE '%P%'"
));

$proto28["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto28["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto28["m_arguments"][]=$obj;
$proto28["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto28);

$proto27["m_arguments"][]=$obj;
$proto27["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto27);

$proto26["m_sql"] = "COUNT(if(exam_marking.gender LIKE '%P%', exam_marking.sid, NULL))";
$proto26["m_srcTableName"] = "daftar_daerah";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "perempuan";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto32=array();
$proto32["m_link"] = "SQLL_MAIN";
			$proto33=array();
$proto33["m_strName"] = "exam_marking";
$proto33["m_srcTableName"] = "daftar_daerah";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "sid";
$proto33["m_columns"][] = "name";
$proto33["m_columns"][] = "gender";
$proto33["m_columns"][] = "birthdate";
$proto33["m_columns"][] = "birthCert";
$proto33["m_columns"][] = "nationality";
$proto33["m_columns"][] = "sCode";
$proto33["m_columns"][] = "eNo";
$proto33["m_columns"][] = "eYear";
$proto33["m_columns"][] = "eType";
$proto33["m_columns"][] = "s1";
$proto33["m_columns"][] = "s2";
$proto33["m_columns"][] = "s3";
$proto33["m_columns"][] = "s4";
$proto33["m_columns"][] = "s5";
$proto33["m_columns"][] = "s6";
$proto33["m_columns"][] = "s7";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "exam_marking";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "daftar_daerah";
$proto34=array();
$proto34["m_sql"] = "";
$proto34["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
												$proto36=array();
$proto36["m_link"] = "SQLL_LEFTJOIN";
			$proto37=array();
$proto37["m_strName"] = "school";
$proto37["m_srcTableName"] = "daftar_daerah";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "sno";
$proto37["m_columns"][] = "sName";
$proto37["m_columns"][] = "sCenter";
$proto37["m_columns"][] = "sCode";
$proto37["m_columns"][] = "sZone";
$proto37["m_columns"][] = "sType";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "LEFT JOIN school ON exam_marking.sCode = school.sCode";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "daftar_daerah";
$proto38=array();
$proto38["m_sql"] = "exam_marking.sCode = school.sCode";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "daftar_daerah"
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "= school.sCode";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto40=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sZone"
));

$proto40["m_column"]=$obj;
$obj = new SQLGroupByItem($proto40);

$proto0["m_groupby"][]=$obj;
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "daftar_daerah"
));

$proto42["m_column"]=$obj;
$obj = new SQLGroupByItem($proto42);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto44=array();
						$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "daftar_daerah"
));

$proto44["m_column"]=$obj;
$proto44["m_bAsc"] = 0;
$proto44["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto44);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="daftar_daerah";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_daftar_daerah = createSqlQuery_daftar_daerah();



									

$tdatadaftar_daerah[".sqlquery"] = $queryData_daftar_daerah;

include_once(getabspath("include/daftar_daerah_events.php"));
$tableEvents["daftar_daerah"] = new eventclass_daftar_daerah;
$tdatadaftar_daerah[".hasEvents"] = true;

$query = &$queryData_daftar_daerah;
$table = "daftar_daerah";
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