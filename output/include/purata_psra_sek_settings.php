<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapurata_psra_sek = array();
	$tdatapurata_psra_sek[".truncateText"] = true;
	$tdatapurata_psra_sek[".NumberOfChars"] = 80;
	$tdatapurata_psra_sek[".ShortName"] = "purata_psra_sek";
	$tdatapurata_psra_sek[".OwnerID"] = "";
	$tdatapurata_psra_sek[".OriginalTable"] = "exam_marking";

//	field labels
$fieldLabelspurata_psra_sek = array();
$fieldToolTipspurata_psra_sek = array();
$pageTitlespurata_psra_sek = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspurata_psra_sek["English"] = array();
	$fieldToolTipspurata_psra_sek["English"] = array();
	$pageTitlespurata_psra_sek["English"] = array();
	$fieldLabelspurata_psra_sek["English"]["sCode"] = "Kod Sekolah";
	$fieldToolTipspurata_psra_sek["English"]["sCode"] = "";
	$fieldLabelspurata_psra_sek["English"]["eYear"] = "Tahun";
	$fieldToolTipspurata_psra_sek["English"]["eYear"] = "";
	$fieldLabelspurata_psra_sek["English"]["eType"] = "Peperiksaan";
	$fieldToolTipspurata_psra_sek["English"]["eType"] = "";
	$fieldLabelspurata_psra_sek["English"]["sZone"] = "Zon";
	$fieldToolTipspurata_psra_sek["English"]["sZone"] = "";
	$fieldLabelspurata_psra_sek["English"]["sName"] = "Nama Sekolah";
	$fieldToolTipspurata_psra_sek["English"]["sName"] = "";
	$fieldLabelspurata_psra_sek["English"]["jumlahMarkah"] = "Jumlah Markah";
	$fieldToolTipspurata_psra_sek["English"]["jumlahMarkah"] = "";
	$fieldLabelspurata_psra_sek["English"]["avg"] = "Purata";
	$fieldToolTipspurata_psra_sek["English"]["avg"] = "";
	$fieldLabelspurata_psra_sek["English"]["avgperatus"] = "Purata Peratus%";
	$fieldToolTipspurata_psra_sek["English"]["avgperatus"] = "";
	$fieldLabelspurata_psra_sek["English"]["calonTotal"] = "Calon";
	$fieldToolTipspurata_psra_sek["English"]["calonTotal"] = "";
	$fieldLabelspurata_psra_sek["English"]["calonTakHadir"] = "Tak Hadir";
	$fieldToolTipspurata_psra_sek["English"]["calonTakHadir"] = "";
	$fieldLabelspurata_psra_sek["English"]["calonHadir"] = "Hadir";
	$fieldToolTipspurata_psra_sek["English"]["calonHadir"] = "";
	if (count($fieldToolTipspurata_psra_sek["English"]))
		$tdatapurata_psra_sek[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspurata_psra_sek[""] = array();
	$fieldToolTipspurata_psra_sek[""] = array();
	$pageTitlespurata_psra_sek[""] = array();
	if (count($fieldToolTipspurata_psra_sek[""]))
		$tdatapurata_psra_sek[".isUseToolTips"] = true;
}


	$tdatapurata_psra_sek[".NCSearch"] = true;



$tdatapurata_psra_sek[".shortTableName"] = "purata_psra_sek";
$tdatapurata_psra_sek[".nSecOptions"] = 0;
$tdatapurata_psra_sek[".recsPerRowList"] = 1;
$tdatapurata_psra_sek[".recsPerRowPrint"] = 1;
$tdatapurata_psra_sek[".mainTableOwnerID"] = "";
$tdatapurata_psra_sek[".moveNext"] = 1;
$tdatapurata_psra_sek[".entityType"] = 1;

$tdatapurata_psra_sek[".strOriginalTableName"] = "exam_marking";




$tdatapurata_psra_sek[".showAddInPopup"] = false;

$tdatapurata_psra_sek[".showEditInPopup"] = false;

$tdatapurata_psra_sek[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapurata_psra_sek[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapurata_psra_sek[".fieldsForRegister"] = array();

$tdatapurata_psra_sek[".listAjax"] = false;

	$tdatapurata_psra_sek[".audit"] = false;

	$tdatapurata_psra_sek[".locking"] = false;



$tdatapurata_psra_sek[".list"] = true;



$tdatapurata_psra_sek[".exportTo"] = true;



$tdatapurata_psra_sek[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatapurata_psra_sek[".searchSaving"] = false;
//

$tdatapurata_psra_sek[".showSearchPanel"] = true;
		$tdatapurata_psra_sek[".flexibleSearch"] = true;

if (isMobile())
	$tdatapurata_psra_sek[".isUseAjaxSuggest"] = false;
else
	$tdatapurata_psra_sek[".isUseAjaxSuggest"] = true;

$tdatapurata_psra_sek[".rowHighlite"] = true;


																			
$tdatapurata_psra_sek[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapurata_psra_sek[".isUseTimeForSearch"] = false;





$tdatapurata_psra_sek[".allSearchFields"] = array();
$tdatapurata_psra_sek[".filterFields"] = array();
$tdatapurata_psra_sek[".requiredSearchFields"] = array();

$tdatapurata_psra_sek[".allSearchFields"][] = "sName";
	$tdatapurata_psra_sek[".allSearchFields"][] = "sCode";
	$tdatapurata_psra_sek[".allSearchFields"][] = "sZone";
	$tdatapurata_psra_sek[".allSearchFields"][] = "eYear";
	

$tdatapurata_psra_sek[".googleLikeFields"] = array();
$tdatapurata_psra_sek[".googleLikeFields"][] = "sName";

$tdatapurata_psra_sek[".panelSearchFields"] = array();
$tdatapurata_psra_sek[".searchPanelOptions"] = array();
$tdatapurata_psra_sek[".panelSearchFields"][] = "sCode";
	$tdatapurata_psra_sek[".panelSearchFields"][] = "sZone";
	$tdatapurata_psra_sek[".panelSearchFields"][] = "eYear";
	
$tdatapurata_psra_sek[".advSearchFields"] = array();
$tdatapurata_psra_sek[".advSearchFields"][] = "sName";
$tdatapurata_psra_sek[".advSearchFields"][] = "sCode";
$tdatapurata_psra_sek[".advSearchFields"][] = "sZone";
$tdatapurata_psra_sek[".advSearchFields"][] = "eYear";

$tdatapurata_psra_sek[".tableType"] = "list";

$tdatapurata_psra_sek[".printerPageOrientation"] = 0;
$tdatapurata_psra_sek[".nPrinterPageScale"] = 100;

$tdatapurata_psra_sek[".nPrinterSplitRecords"] = 40;

$tdatapurata_psra_sek[".nPrinterPDFSplitRecords"] = 40;



$tdatapurata_psra_sek[".geocodingEnabled"] = false;










// view page pdf

// print page pdf

$tdatapurata_psra_sek[".totalsFields"] = array();
$tdatapurata_psra_sek[".totalsFields"][] = array(
	"fName" => "calonTotal",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');

$tdatapurata_psra_sek[".pageSize"] = 20;

$tdatapurata_psra_sek[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY eYear DESC, avg DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapurata_psra_sek[".strOrderBy"] = $tstrOrderBy;

$tdatapurata_psra_sek[".orderindexes"] = array();

$tdatapurata_psra_sek[".sqlHead"] = "SELECT sCode,  sName,  sZone,  eYear,  eType,  jumlahMarkah,  jumlahMarkah/(calonTotal-calonTakHadir) AS `avg`,  (jumlahMarkah/(calonTotal-calonTakHadir))/500*100 AS avgperatus,  calonTotal,  calonTakHadir,  calonTotal-calonTakHadir AS calonHadir";
$tdatapurata_psra_sek[".sqlFrom"] = "FROM (   SELECT  sid,  exam_marking.sCode AS sCode,  eYear,  eType,  SUM(s1+s2+s3+s4+s5) AS jumlahMarkah,  COUNT(sid) AS calonTotal,  COUNT(if(s1 LIKE '%TH%' AND s2 LIKE '%TH%' AND s3 LIKE '%TH%' AND s4 LIKE '%TH%' AND s5 LIKE '%TH%', exam_marking.sid, NULL)) AS calonTakHadir,  sCenter,  sName,  sZone  FROM exam_marking  LEFT JOIN school ON exam_marking.sCode = school.sCode  GROUP BY sCode, eYear  ) AS Sub2";
$tdatapurata_psra_sek[".sqlWhereExpr"] = "";
$tdatapurata_psra_sek[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapurata_psra_sek[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapurata_psra_sek[".arrGroupsPerPage"] = $arrGPP;

$tdatapurata_psra_sek[".highlightSearchResults"] = true;

$tableKeyspurata_psra_sek = array();
$tableKeyspurata_psra_sek[] = "sCode";
$tdatapurata_psra_sek[".Keys"] = $tableKeyspurata_psra_sek;

$tdatapurata_psra_sek[".listFields"] = array();
$tdatapurata_psra_sek[".listFields"][] = "sName";
$tdatapurata_psra_sek[".listFields"][] = "sCode";
$tdatapurata_psra_sek[".listFields"][] = "eYear";
$tdatapurata_psra_sek[".listFields"][] = "calonTotal";
$tdatapurata_psra_sek[".listFields"][] = "calonTakHadir";
$tdatapurata_psra_sek[".listFields"][] = "calonHadir";
$tdatapurata_psra_sek[".listFields"][] = "jumlahMarkah";
$tdatapurata_psra_sek[".listFields"][] = "avgperatus";

$tdatapurata_psra_sek[".hideMobileList"] = array();


$tdatapurata_psra_sek[".viewFields"] = array();

$tdatapurata_psra_sek[".addFields"] = array();

$tdatapurata_psra_sek[".masterListFields"] = array();
$tdatapurata_psra_sek[".masterListFields"][] = "jumlahMarkah";
$tdatapurata_psra_sek[".masterListFields"][] = "sName";
$tdatapurata_psra_sek[".masterListFields"][] = "sZone";
$tdatapurata_psra_sek[".masterListFields"][] = "calonTakHadir";
$tdatapurata_psra_sek[".masterListFields"][] = "calonTotal";
$tdatapurata_psra_sek[".masterListFields"][] = "calonHadir";
$tdatapurata_psra_sek[".masterListFields"][] = "avg";
$tdatapurata_psra_sek[".masterListFields"][] = "avgperatus";
$tdatapurata_psra_sek[".masterListFields"][] = "sCode";
$tdatapurata_psra_sek[".masterListFields"][] = "eYear";
$tdatapurata_psra_sek[".masterListFields"][] = "eType";

$tdatapurata_psra_sek[".inlineAddFields"] = array();

$tdatapurata_psra_sek[".editFields"] = array();

$tdatapurata_psra_sek[".inlineEditFields"] = array();

$tdatapurata_psra_sek[".exportFields"] = array();
$tdatapurata_psra_sek[".exportFields"][] = "avg";
$tdatapurata_psra_sek[".exportFields"][] = "sName";
$tdatapurata_psra_sek[".exportFields"][] = "calonTakHadir";
$tdatapurata_psra_sek[".exportFields"][] = "jumlahMarkah";
$tdatapurata_psra_sek[".exportFields"][] = "calonHadir";
$tdatapurata_psra_sek[".exportFields"][] = "avgperatus";
$tdatapurata_psra_sek[".exportFields"][] = "calonTotal";
$tdatapurata_psra_sek[".exportFields"][] = "sCode";
$tdatapurata_psra_sek[".exportFields"][] = "eYear";

$tdatapurata_psra_sek[".importFields"] = array();

$tdatapurata_psra_sek[".printFields"] = array();

//	sCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sCode";
	$fdata["GoodName"] = "sCode";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("purata_psra_sek","sCode");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sCode";

	
	
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




// the field's search options settings
	
			// the user's search options list
		$fdata["searchOptionsList"] = array();
		$fdata["searchOptionsList"][] = "Equals";
// the end of search options settings




	$tdatapurata_psra_sek["sCode"] = $fdata;
//	sName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sName";
	$fdata["GoodName"] = "sName";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("purata_psra_sek","sName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sName";

	
	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatapurata_psra_sek["sName"] = $fdata;
//	sZone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sZone";
	$fdata["GoodName"] = "sZone";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("purata_psra_sek","sZone");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
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




	$tdatapurata_psra_sek["sZone"] = $fdata;
//	eYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "eYear";
	$fdata["GoodName"] = "eYear";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("purata_psra_sek","eYear");
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




	$tdatapurata_psra_sek["eYear"] = $fdata;
//	eType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "eType";
	$fdata["GoodName"] = "eType";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("purata_psra_sek","eType");
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








	$tdatapurata_psra_sek["eType"] = $fdata;
//	jumlahMarkah
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "jumlahMarkah";
	$fdata["GoodName"] = "jumlahMarkah";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("purata_psra_sek","jumlahMarkah");
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








	$tdatapurata_psra_sek["jumlahMarkah"] = $fdata;
//	avg
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "avg";
	$fdata["GoodName"] = "avg";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("purata_psra_sek","avg");
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








	$tdatapurata_psra_sek["avg"] = $fdata;
//	avgperatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "avgperatus";
	$fdata["GoodName"] = "avgperatus";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("purata_psra_sek","avgperatus");
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








	$tdatapurata_psra_sek["avgperatus"] = $fdata;
//	calonTotal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "calonTotal";
	$fdata["GoodName"] = "calonTotal";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("purata_psra_sek","calonTotal");
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








	$tdatapurata_psra_sek["calonTotal"] = $fdata;
//	calonTakHadir
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "calonTakHadir";
	$fdata["GoodName"] = "calonTakHadir";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("purata_psra_sek","calonTakHadir");
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








	$tdatapurata_psra_sek["calonTakHadir"] = $fdata;
//	calonHadir
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "calonHadir";
	$fdata["GoodName"] = "calonHadir";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("purata_psra_sek","calonHadir");
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








	$tdatapurata_psra_sek["calonHadir"] = $fdata;


$tables_data["purata_psra_sek"]=&$tdatapurata_psra_sek;
$field_labels["purata_psra_sek"] = &$fieldLabelspurata_psra_sek;
$fieldToolTips["purata_psra_sek"] = &$fieldToolTipspurata_psra_sek;
$page_titles["purata_psra_sek"] = &$pageTitlespurata_psra_sek;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["purata_psra_sek"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["purata_psra_sek"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_purata_psra_sek()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sCode,  sName,  sZone,  eYear,  eType,  jumlahMarkah,  jumlahMarkah/(calonTotal-calonTakHadir) AS `avg`,  (jumlahMarkah/(calonTotal-calonTakHadir))/500*100 AS avgperatus,  calonTotal,  calonTakHadir,  calonTotal-calonTakHadir AS calonHadir";
$proto0["m_strFrom"] = "FROM (   SELECT  sid,  exam_marking.sCode AS sCode,  eYear,  eType,  SUM(s1+s2+s3+s4+s5) AS jumlahMarkah,  COUNT(sid) AS calonTotal,  COUNT(if(s1 LIKE '%TH%' AND s2 LIKE '%TH%' AND s3 LIKE '%TH%' AND s4 LIKE '%TH%' AND s5 LIKE '%TH%', exam_marking.sid, NULL)) AS calonTakHadir,  sCenter,  sName,  sZone  FROM exam_marking  LEFT JOIN school ON exam_marking.sCode = school.sCode  GROUP BY sCode, eYear  ) AS Sub2";
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
			$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "purata_psra_sek"
));

$proto5["m_sql"] = "sCode";
$proto5["m_srcTableName"] = "purata_psra_sek";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sName"
));

$proto7["m_sql"] = "sName";
$proto7["m_srcTableName"] = "purata_psra_sek";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sZone"
));

$proto9["m_sql"] = "sZone";
$proto9["m_srcTableName"] = "purata_psra_sek";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "purata_psra_sek"
));

$proto11["m_sql"] = "eYear";
$proto11["m_srcTableName"] = "purata_psra_sek";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "purata_psra_sek"
));

$proto13["m_sql"] = "eType";
$proto13["m_srcTableName"] = "purata_psra_sek";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "jumlahMarkah",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "purata_psra_sek"
));

$proto15["m_sql"] = "jumlahMarkah";
$proto15["m_srcTableName"] = "purata_psra_sek";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "jumlahMarkah/(calonTotal-calonTakHadir)"
));

$proto17["m_sql"] = "jumlahMarkah/(calonTotal-calonTakHadir)";
$proto17["m_srcTableName"] = "purata_psra_sek";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "avg";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(jumlahMarkah/(calonTotal-calonTakHadir))/500*100"
));

$proto19["m_sql"] = "(jumlahMarkah/(calonTotal-calonTakHadir))/500*100";
$proto19["m_srcTableName"] = "purata_psra_sek";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "avgperatus";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "calonTotal",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "purata_psra_sek"
));

$proto21["m_sql"] = "calonTotal";
$proto21["m_srcTableName"] = "purata_psra_sek";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "calonTakHadir",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "purata_psra_sek"
));

$proto23["m_sql"] = "calonTakHadir";
$proto23["m_srcTableName"] = "purata_psra_sek";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "calonTotal-calonTakHadir"
));

$proto25["m_sql"] = "calonTotal-calonTakHadir";
$proto25["m_srcTableName"] = "purata_psra_sek";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "calonHadir";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto27=array();
$proto27["m_link"] = "SQLL_MAIN";
			$proto28=array();
$proto28["m_strHead"] = "   SELECT";
$proto28["m_strFieldList"] = "sid,  exam_marking.sCode AS sCode,  eYear,  eType,  SUM(s1+s2+s3+s4+s5) AS jumlahMarkah,  COUNT(sid) AS calonTotal,  COUNT(if(s1 LIKE '%TH%' AND s2 LIKE '%TH%' AND s3 LIKE '%TH%' AND s4 LIKE '%TH%' AND s5 LIKE '%TH%', exam_marking.sid, NULL)) AS calonTakHadir,  sCenter,  sName,  sZone";
$proto28["m_strFrom"] = "FROM exam_marking  LEFT JOIN school ON exam_marking.sCode = school.sCode";
$proto28["m_strWhere"] = "";
$proto28["m_strOrderBy"] = "";
$proto28["m_strTail"] = "";
			$proto28["cipherer"] = null;
$proto29=array();
$proto29["m_sql"] = "";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "";
$proto29["m_havingmode"] = false;
$proto29["m_inBrackets"] = false;
$proto29["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto29);

$proto28["m_where"] = $obj;
$proto31=array();
$proto31["m_sql"] = "";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "";
$proto31["m_havingmode"] = false;
$proto31["m_inBrackets"] = false;
$proto31["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto31);

$proto28["m_having"] = $obj;
$proto28["m_fieldlist"] = array();
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "purata_psra_sek"
));

$proto33["m_sql"] = "sid";
$proto33["m_srcTableName"] = "purata_psra_sek";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto28["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "purata_psra_sek"
));

$proto35["m_sql"] = "exam_marking.sCode";
$proto35["m_srcTableName"] = "purata_psra_sek";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "sCode";
$obj = new SQLFieldListItem($proto35);

$proto28["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "purata_psra_sek"
));

$proto37["m_sql"] = "eYear";
$proto37["m_srcTableName"] = "purata_psra_sek";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto28["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "purata_psra_sek"
));

$proto39["m_sql"] = "eType";
$proto39["m_srcTableName"] = "purata_psra_sek";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto28["m_fieldlist"][]=$obj;
						$proto41=array();
			$proto42=array();
$proto42["m_functiontype"] = "SQLF_SUM";
$proto42["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "s1+s2+s3+s4+s5"
));

$proto42["m_arguments"][]=$obj;
$proto42["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto42);

$proto41["m_sql"] = "SUM(s1+s2+s3+s4+s5)";
$proto41["m_srcTableName"] = "purata_psra_sek";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "jumlahMarkah";
$obj = new SQLFieldListItem($proto41);

$proto28["m_fieldlist"][]=$obj;
						$proto44=array();
			$proto45=array();
$proto45["m_functiontype"] = "SQLF_COUNT";
$proto45["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "purata_psra_sek"
));

$proto45["m_arguments"][]=$obj;
$proto45["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto45);

$proto44["m_sql"] = "COUNT(sid)";
$proto44["m_srcTableName"] = "purata_psra_sek";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "calonTotal";
$obj = new SQLFieldListItem($proto44);

$proto28["m_fieldlist"][]=$obj;
						$proto47=array();
			$proto48=array();
$proto48["m_functiontype"] = "SQLF_COUNT";
$proto48["m_arguments"] = array();
						$proto49=array();
$proto49["m_functiontype"] = "SQLF_CUSTOM";
$proto49["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "s1 LIKE '%TH%' AND s2 LIKE '%TH%' AND s3 LIKE '%TH%' AND s4 LIKE '%TH%' AND s5 LIKE '%TH%'"
));

$proto49["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto49["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto49["m_arguments"][]=$obj;
$proto49["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto49);

$proto48["m_arguments"][]=$obj;
$proto48["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto48);

$proto47["m_sql"] = "COUNT(if(s1 LIKE '%TH%' AND s2 LIKE '%TH%' AND s3 LIKE '%TH%' AND s4 LIKE '%TH%' AND s5 LIKE '%TH%', exam_marking.sid, NULL))";
$proto47["m_srcTableName"] = "purata_psra_sek";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "calonTakHadir";
$obj = new SQLFieldListItem($proto47);

$proto28["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sCenter"
));

$proto53["m_sql"] = "sCenter";
$proto53["m_srcTableName"] = "purata_psra_sek";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto28["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sName"
));

$proto55["m_sql"] = "sName";
$proto55["m_srcTableName"] = "purata_psra_sek";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto28["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sZone"
));

$proto57["m_sql"] = "sZone";
$proto57["m_srcTableName"] = "purata_psra_sek";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto28["m_fieldlist"][]=$obj;
$proto28["m_fromlist"] = array();
												$proto59=array();
$proto59["m_link"] = "SQLL_MAIN";
			$proto60=array();
$proto60["m_strName"] = "exam_marking";
$proto60["m_srcTableName"] = "purata_psra_sek";
$proto60["m_columns"] = array();
$proto60["m_columns"][] = "sid";
$proto60["m_columns"][] = "name";
$proto60["m_columns"][] = "gender";
$proto60["m_columns"][] = "birthdate";
$proto60["m_columns"][] = "birthCert";
$proto60["m_columns"][] = "nationality";
$proto60["m_columns"][] = "sCode";
$proto60["m_columns"][] = "eNo";
$proto60["m_columns"][] = "eYear";
$proto60["m_columns"][] = "eType";
$proto60["m_columns"][] = "s1";
$proto60["m_columns"][] = "s2";
$proto60["m_columns"][] = "s3";
$proto60["m_columns"][] = "s4";
$proto60["m_columns"][] = "s5";
$proto60["m_columns"][] = "s6";
$proto60["m_columns"][] = "s7";
$obj = new SQLTable($proto60);

$proto59["m_table"] = $obj;
$proto59["m_sql"] = "exam_marking";
$proto59["m_alias"] = "";
$proto59["m_srcTableName"] = "purata_psra_sek";
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

$proto59["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto59);

$proto28["m_fromlist"][]=$obj;
												$proto63=array();
$proto63["m_link"] = "SQLL_LEFTJOIN";
			$proto64=array();
$proto64["m_strName"] = "school";
$proto64["m_srcTableName"] = "purata_psra_sek";
$proto64["m_columns"] = array();
$proto64["m_columns"][] = "sno";
$proto64["m_columns"][] = "sName";
$proto64["m_columns"][] = "sCenter";
$proto64["m_columns"][] = "sCode";
$proto64["m_columns"][] = "sZone";
$proto64["m_columns"][] = "sType";
$obj = new SQLTable($proto64);

$proto63["m_table"] = $obj;
$proto63["m_sql"] = "LEFT JOIN school ON exam_marking.sCode = school.sCode";
$proto63["m_alias"] = "";
$proto63["m_srcTableName"] = "purata_psra_sek";
$proto65=array();
$proto65["m_sql"] = "exam_marking.sCode = school.sCode";
$proto65["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "purata_psra_sek"
));

$proto65["m_column"]=$obj;
$proto65["m_contained"] = array();
$proto65["m_strCase"] = "= school.sCode";
$proto65["m_havingmode"] = false;
$proto65["m_inBrackets"] = false;
$proto65["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto65);

$proto63["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto63);

$proto28["m_fromlist"][]=$obj;
$proto28["m_groupby"] = array();
												$proto67=array();
						$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "purata_psra_sek"
));

$proto67["m_column"]=$obj;
$obj = new SQLGroupByItem($proto67);

$proto28["m_groupby"][]=$obj;
												$proto69=array();
						$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "purata_psra_sek"
));

$proto69["m_column"]=$obj;
$obj = new SQLGroupByItem($proto69);

$proto28["m_groupby"][]=$obj;
$proto28["m_orderby"] = array();
$proto28["m_srcTableName"]="purata_psra_sek";		
$obj = new SQLQuery($proto28);

$proto27["m_table"] = $obj;
$proto27["m_sql"] = "(   SELECT  sid,  exam_marking.sCode AS sCode,  eYear,  eType,  SUM(s1+s2+s3+s4+s5) AS jumlahMarkah,  COUNT(sid) AS calonTotal,  COUNT(if(s1 LIKE '%TH%' AND s2 LIKE '%TH%' AND s3 LIKE '%TH%' AND s4 LIKE '%TH%' AND s5 LIKE '%TH%', exam_marking.sid, NULL)) AS calonTakHadir,  sCenter,  sName,  sZone  FROM exam_marking  LEFT JOIN school ON exam_marking.sCode = school.sCode  GROUP BY sCode, eYear  ) AS Sub2";
$proto27["m_alias"] = "Sub2";
$proto27["m_srcTableName"] = "purata_psra_sek";
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

$proto27["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto27);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto73=array();
						$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "purata_psra_sek"
));

$proto73["m_column"]=$obj;
$proto73["m_bAsc"] = 0;
$proto73["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto73);

$proto0["m_orderby"][]=$obj;					
												$proto75=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "avg "
));

$proto75["m_column"]=$obj;
$proto75["m_bAsc"] = 0;
$proto75["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto75);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="purata_psra_sek";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_purata_psra_sek = createSqlQuery_purata_psra_sek();



											

$tdatapurata_psra_sek[".sqlquery"] = $queryData_purata_psra_sek;

include_once(getabspath("include/purata_psra_sek_events.php"));
$tableEvents["purata_psra_sek"] = new eventclass_purata_psra_sek;
$tdatapurata_psra_sek[".hasEvents"] = true;

$query = &$queryData_purata_psra_sek;
$table = "purata_psra_sek";
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