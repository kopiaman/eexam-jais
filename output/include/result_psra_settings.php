<?php
require_once(getabspath("classes/cipherer.php"));




$tdataresult_psra = array();
	$tdataresult_psra[".truncateText"] = true;
	$tdataresult_psra[".NumberOfChars"] = 80;
	$tdataresult_psra[".ShortName"] = "result_psra";
	$tdataresult_psra[".OwnerID"] = "";
	$tdataresult_psra[".OriginalTable"] = "exam_marking";

//	field labels
$fieldLabelsresult_psra = array();
$fieldToolTipsresult_psra = array();
$pageTitlesresult_psra = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsresult_psra["English"] = array();
	$fieldToolTipsresult_psra["English"] = array();
	$pageTitlesresult_psra["English"] = array();
	$fieldLabelsresult_psra["English"]["sid"] = "Sid";
	$fieldToolTipsresult_psra["English"]["sid"] = "";
	$fieldLabelsresult_psra["English"]["name"] = "Nama Murid";
	$fieldToolTipsresult_psra["English"]["name"] = "";
	$fieldLabelsresult_psra["English"]["gender"] = "Jantina";
	$fieldToolTipsresult_psra["English"]["gender"] = "";
	$fieldLabelsresult_psra["English"]["birthdate"] = "Tarikh Lahir";
	$fieldToolTipsresult_psra["English"]["birthdate"] = "";
	$fieldLabelsresult_psra["English"]["birthCert"] = "Sijil Lahir";
	$fieldToolTipsresult_psra["English"]["birthCert"] = "";
	$fieldLabelsresult_psra["English"]["nationality"] = "Warganegara";
	$fieldToolTipsresult_psra["English"]["nationality"] = "";
	$fieldLabelsresult_psra["English"]["sCode"] = "Kod Sekolah";
	$fieldToolTipsresult_psra["English"]["sCode"] = "";
	$fieldLabelsresult_psra["English"]["eNo"] = "No Giliran";
	$fieldToolTipsresult_psra["English"]["eNo"] = "";
	$fieldLabelsresult_psra["English"]["eYear"] = "Tahun";
	$fieldToolTipsresult_psra["English"]["eYear"] = "";
	$fieldLabelsresult_psra["English"]["eType"] = "Peperiksaan";
	$fieldToolTipsresult_psra["English"]["eType"] = "";
	$fieldLabelsresult_psra["English"]["s1"] = "AS";
	$fieldToolTipsresult_psra["English"]["s1"] = "";
	$fieldLabelsresult_psra["English"]["s2"] = "BA";
	$fieldToolTipsresult_psra["English"]["s2"] = "";
	$fieldLabelsresult_psra["English"]["s3"] = "JIK";
	$fieldToolTipsresult_psra["English"]["s3"] = "";
	$fieldLabelsresult_psra["English"]["s4"] = "TF";
	$fieldToolTipsresult_psra["English"]["s4"] = "";
	$fieldLabelsresult_psra["English"]["s5"] = "TJ";
	$fieldToolTipsresult_psra["English"]["s5"] = "";
	$fieldLabelsresult_psra["English"]["s6"] = "UTH";
	$fieldToolTipsresult_psra["English"]["s6"] = "";
	$fieldLabelsresult_psra["English"]["s7"] = "PAFA";
	$fieldToolTipsresult_psra["English"]["s7"] = "";
	$fieldLabelsresult_psra["English"]["sZone"] = "Zon";
	$fieldToolTipsresult_psra["English"]["sZone"] = "";
	$fieldLabelsresult_psra["English"]["jumlahMarkah"] = "Jumlah Markah";
	$fieldToolTipsresult_psra["English"]["jumlahMarkah"] = "";
	$fieldLabelsresult_psra["English"]["peratus"] = "Peratus";
	$fieldToolTipsresult_psra["English"]["peratus"] = "";
	$fieldLabelsresult_psra["English"]["pangkat"] = "Pangkat";
	$fieldToolTipsresult_psra["English"]["pangkat"] = "";
	$fieldLabelsresult_psra["English"]["sCenter"] = "Kod Pusat";
	$fieldToolTipsresult_psra["English"]["sCenter"] = "";
	$fieldLabelsresult_psra["English"]["sName"] = "Nama Sekolah";
	$fieldToolTipsresult_psra["English"]["sName"] = "";
	if (count($fieldToolTipsresult_psra["English"]))
		$tdataresult_psra[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsresult_psra[""] = array();
	$fieldToolTipsresult_psra[""] = array();
	$pageTitlesresult_psra[""] = array();
	if (count($fieldToolTipsresult_psra[""]))
		$tdataresult_psra[".isUseToolTips"] = true;
}


	$tdataresult_psra[".NCSearch"] = true;



$tdataresult_psra[".shortTableName"] = "result_psra";
$tdataresult_psra[".nSecOptions"] = 0;
$tdataresult_psra[".recsPerRowList"] = 1;
$tdataresult_psra[".recsPerRowPrint"] = 1;
$tdataresult_psra[".mainTableOwnerID"] = "";
$tdataresult_psra[".moveNext"] = 1;
$tdataresult_psra[".entityType"] = 1;

$tdataresult_psra[".strOriginalTableName"] = "exam_marking";




$tdataresult_psra[".showAddInPopup"] = false;

$tdataresult_psra[".showEditInPopup"] = false;

$tdataresult_psra[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataresult_psra[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataresult_psra[".fieldsForRegister"] = array();

$tdataresult_psra[".listAjax"] = false;

	$tdataresult_psra[".audit"] = false;

	$tdataresult_psra[".locking"] = false;



$tdataresult_psra[".list"] = true;



$tdataresult_psra[".exportTo"] = true;



$tdataresult_psra[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataresult_psra[".searchSaving"] = false;
//

$tdataresult_psra[".showSearchPanel"] = true;
		$tdataresult_psra[".flexibleSearch"] = true;

if (isMobile())
	$tdataresult_psra[".isUseAjaxSuggest"] = false;
else
	$tdataresult_psra[".isUseAjaxSuggest"] = true;

$tdataresult_psra[".rowHighlite"] = true;


																				
$tdataresult_psra[".addPageEvents"] = false;

// use timepicker for search panel
$tdataresult_psra[".isUseTimeForSearch"] = false;





$tdataresult_psra[".allSearchFields"] = array();
$tdataresult_psra[".filterFields"] = array();
$tdataresult_psra[".requiredSearchFields"] = array();

$tdataresult_psra[".allSearchFields"][] = "sZone";
	$tdataresult_psra[".allSearchFields"][] = "sCenter";
	$tdataresult_psra[".allSearchFields"][] = "eYear";
	$tdataresult_psra[".allSearchFields"][] = "sName";
	$tdataresult_psra[".allSearchFields"][] = "name";
	$tdataresult_psra[".allSearchFields"][] = "birthdate";
	$tdataresult_psra[".allSearchFields"][] = "gender";
	$tdataresult_psra[".allSearchFields"][] = "birthCert";
	$tdataresult_psra[".allSearchFields"][] = "nationality";
	$tdataresult_psra[".allSearchFields"][] = "eNo";
	$tdataresult_psra[".allSearchFields"][] = "s1";
	$tdataresult_psra[".allSearchFields"][] = "s2";
	$tdataresult_psra[".allSearchFields"][] = "s3";
	$tdataresult_psra[".allSearchFields"][] = "s4";
	$tdataresult_psra[".allSearchFields"][] = "s5";
	$tdataresult_psra[".allSearchFields"][] = "jumlahMarkah";
	$tdataresult_psra[".allSearchFields"][] = "peratus";
	$tdataresult_psra[".allSearchFields"][] = "pangkat";
	$tdataresult_psra[".allSearchFields"][] = "s6";
	$tdataresult_psra[".allSearchFields"][] = "eType";
	$tdataresult_psra[".allSearchFields"][] = "s7";
	$tdataresult_psra[".allSearchFields"][] = "sCode";
	

$tdataresult_psra[".googleLikeFields"] = array();
$tdataresult_psra[".googleLikeFields"][] = "name";

$tdataresult_psra[".panelSearchFields"] = array();
$tdataresult_psra[".searchPanelOptions"] = array();
$tdataresult_psra[".panelSearchFields"][] = "sZone";
	$tdataresult_psra[".panelSearchFields"][] = "eYear";
	$tdataresult_psra[".panelSearchFields"][] = "sName";
	$tdataresult_psra[".panelSearchFields"][] = "name";
	$tdataresult_psra[".panelSearchFields"][] = "sCode";
	
$tdataresult_psra[".advSearchFields"] = array();
$tdataresult_psra[".advSearchFields"][] = "sZone";
$tdataresult_psra[".advSearchFields"][] = "sCenter";
$tdataresult_psra[".advSearchFields"][] = "eYear";
$tdataresult_psra[".advSearchFields"][] = "sName";
$tdataresult_psra[".advSearchFields"][] = "name";
$tdataresult_psra[".advSearchFields"][] = "birthdate";
$tdataresult_psra[".advSearchFields"][] = "gender";
$tdataresult_psra[".advSearchFields"][] = "birthCert";
$tdataresult_psra[".advSearchFields"][] = "nationality";
$tdataresult_psra[".advSearchFields"][] = "eNo";
$tdataresult_psra[".advSearchFields"][] = "s1";
$tdataresult_psra[".advSearchFields"][] = "s2";
$tdataresult_psra[".advSearchFields"][] = "s3";
$tdataresult_psra[".advSearchFields"][] = "s4";
$tdataresult_psra[".advSearchFields"][] = "s5";
$tdataresult_psra[".advSearchFields"][] = "jumlahMarkah";
$tdataresult_psra[".advSearchFields"][] = "peratus";
$tdataresult_psra[".advSearchFields"][] = "pangkat";
$tdataresult_psra[".advSearchFields"][] = "s6";
$tdataresult_psra[".advSearchFields"][] = "eType";
$tdataresult_psra[".advSearchFields"][] = "s7";
$tdataresult_psra[".advSearchFields"][] = "sCode";

$tdataresult_psra[".tableType"] = "list";

$tdataresult_psra[".printerPageOrientation"] = 0;
$tdataresult_psra[".nPrinterPageScale"] = 100;

$tdataresult_psra[".nPrinterSplitRecords"] = 40;

$tdataresult_psra[".nPrinterPDFSplitRecords"] = 40;



$tdataresult_psra[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataresult_psra[".pageSize"] = 20;

$tdataresult_psra[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY eYear, peratus DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataresult_psra[".strOrderBy"] = $tstrOrderBy;

$tdataresult_psra[".orderindexes"] = array();
$tdataresult_psra[".orderindexes"][] = array(9, (1 ? "ASC" : "DESC"), "eYear");
$tdataresult_psra[".orderindexes"][] = array(17, (0 ? "ASC" : "DESC"), "peratus");

$tdataresult_psra[".sqlHead"] = "SELECT sid,  name,  gender,  birthdate,  birthCert,  nationality,  sCode,  eNo,  eYear,  eType,  s1,  s2,  s3,  s4,  s5,  jumlahMarkah,  peratus,  pangkat,  s6,  s7,  sCenter,  sName,  sZone";
$tdataresult_psra[".sqlFrom"] = "FROM (   SELECT  sid,  name,  gender,  birthdate,  birthCert,  nationality,  exam_marking.sCode,  eNo,  eYear,  eType,  s1,  s2,  s3,  s4,  s5,  SUM(exam_marking.s1 + exam_marking.s2 + exam_marking.s3 + exam_marking.s4 + exam_marking.s5) AS jumlahMarkah,  SUM(exam_marking.s1 + exam_marking.s2 + exam_marking.s3 + exam_marking.s4 + exam_marking.s5)/500 AS peratus,  SUM(exam_marking.s1 + exam_marking.s2 + exam_marking.s3 + exam_marking.s4 + exam_marking.s5)/500*100 AS pangkat,  s6,  s7,  sCenter,  sName,  sZone  FROM exam_marking  INNER JOIN school ON exam_marking.sCode = school.sCode AND eType = school.sType  WHERE eType ='PSRA'  GROUP BY sid  ) AS Sub2";
$tdataresult_psra[".sqlWhereExpr"] = "";
$tdataresult_psra[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataresult_psra[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataresult_psra[".arrGroupsPerPage"] = $arrGPP;

$tdataresult_psra[".highlightSearchResults"] = true;

$tableKeysresult_psra = array();
$tableKeysresult_psra[] = "sid";
$tdataresult_psra[".Keys"] = $tableKeysresult_psra;

$tdataresult_psra[".listFields"] = array();
$tdataresult_psra[".listFields"][] = "eYear";
$tdataresult_psra[".listFields"][] = "name";
$tdataresult_psra[".listFields"][] = "eNo";
$tdataresult_psra[".listFields"][] = "s1";
$tdataresult_psra[".listFields"][] = "s2";
$tdataresult_psra[".listFields"][] = "s3";
$tdataresult_psra[".listFields"][] = "s4";
$tdataresult_psra[".listFields"][] = "s5";
$tdataresult_psra[".listFields"][] = "jumlahMarkah";
$tdataresult_psra[".listFields"][] = "peratus";
$tdataresult_psra[".listFields"][] = "pangkat";
$tdataresult_psra[".listFields"][] = "s6";
$tdataresult_psra[".listFields"][] = "s7";

$tdataresult_psra[".hideMobileList"] = array();


$tdataresult_psra[".viewFields"] = array();

$tdataresult_psra[".addFields"] = array();

$tdataresult_psra[".masterListFields"] = array();
$tdataresult_psra[".masterListFields"][] = "sid";
$tdataresult_psra[".masterListFields"][] = "sZone";
$tdataresult_psra[".masterListFields"][] = "sCenter";
$tdataresult_psra[".masterListFields"][] = "eYear";
$tdataresult_psra[".masterListFields"][] = "birthdate";
$tdataresult_psra[".masterListFields"][] = "gender";
$tdataresult_psra[".masterListFields"][] = "sName";
$tdataresult_psra[".masterListFields"][] = "name";
$tdataresult_psra[".masterListFields"][] = "birthCert";
$tdataresult_psra[".masterListFields"][] = "eNo";
$tdataresult_psra[".masterListFields"][] = "nationality";
$tdataresult_psra[".masterListFields"][] = "s1";
$tdataresult_psra[".masterListFields"][] = "s2";
$tdataresult_psra[".masterListFields"][] = "s3";
$tdataresult_psra[".masterListFields"][] = "s4";
$tdataresult_psra[".masterListFields"][] = "s5";
$tdataresult_psra[".masterListFields"][] = "jumlahMarkah";
$tdataresult_psra[".masterListFields"][] = "peratus";
$tdataresult_psra[".masterListFields"][] = "pangkat";
$tdataresult_psra[".masterListFields"][] = "eType";
$tdataresult_psra[".masterListFields"][] = "s6";
$tdataresult_psra[".masterListFields"][] = "s7";
$tdataresult_psra[".masterListFields"][] = "sCode";

$tdataresult_psra[".inlineAddFields"] = array();

$tdataresult_psra[".editFields"] = array();

$tdataresult_psra[".inlineEditFields"] = array();

$tdataresult_psra[".exportFields"] = array();
$tdataresult_psra[".exportFields"][] = "sCenter";
$tdataresult_psra[".exportFields"][] = "eYear";
$tdataresult_psra[".exportFields"][] = "birthdate";
$tdataresult_psra[".exportFields"][] = "sName";
$tdataresult_psra[".exportFields"][] = "gender";
$tdataresult_psra[".exportFields"][] = "name";
$tdataresult_psra[".exportFields"][] = "birthCert";
$tdataresult_psra[".exportFields"][] = "nationality";
$tdataresult_psra[".exportFields"][] = "eNo";
$tdataresult_psra[".exportFields"][] = "s1";
$tdataresult_psra[".exportFields"][] = "s2";
$tdataresult_psra[".exportFields"][] = "s3";
$tdataresult_psra[".exportFields"][] = "s4";
$tdataresult_psra[".exportFields"][] = "s5";
$tdataresult_psra[".exportFields"][] = "jumlahMarkah";
$tdataresult_psra[".exportFields"][] = "peratus";
$tdataresult_psra[".exportFields"][] = "pangkat";
$tdataresult_psra[".exportFields"][] = "s6";
$tdataresult_psra[".exportFields"][] = "s7";
$tdataresult_psra[".exportFields"][] = "sCode";

$tdataresult_psra[".importFields"] = array();

$tdataresult_psra[".printFields"] = array();

//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("result_psra","sid");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "sid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sid";

	
	
			
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








	$tdataresult_psra["sid"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("result_psra","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
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

		$edata["controlWidth"] = 240;

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




	$tdataresult_psra["name"] = $fdata;
//	gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "gender";
	$fdata["GoodName"] = "gender";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("result_psra","gender");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "gender";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "gender";

	
	
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
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;
	
	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "L";
	$edata["LookupValues"][] = "P";

	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataresult_psra["gender"] = $fdata;
//	birthdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "birthdate";
	$fdata["GoodName"] = "birthdate";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("result_psra","birthdate");
	$fdata["FieldType"] = 7;

	
	
	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "birthdate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "birthdate";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
	$edata["InitialYearFactor"] = 20;
	$edata["LastYearFactor"] = 0;

	
	
	
		$edata["controlWidth"] = 80;

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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataresult_psra["birthdate"] = $fdata;
//	birthCert
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "birthCert";
	$fdata["GoodName"] = "birthCert";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("result_psra","birthCert");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "birthCert";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "birthCert";

	
	
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
			$edata["EditParams"].= " maxlength=25";

		$edata["controlWidth"] = 100;

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




	$tdataresult_psra["birthCert"] = $fdata;
//	nationality
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "nationality";
	$fdata["GoodName"] = "nationality";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("result_psra","nationality");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "nationality";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "nationality";

	
	
				$fdata["FieldPermissions"] = true;

			
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
		$edata["LookupType"] = 0;
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 4;
	
	
	
		$edata["LookupValues"] = array();
	$edata["LookupValues"][] = "1";
	$edata["LookupValues"][] = "0";

	
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataresult_psra["nationality"] = $fdata;
//	sCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sCode";
	$fdata["GoodName"] = "sCode";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("result_psra","sCode");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
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




	$tdataresult_psra["sCode"] = $fdata;
//	eNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "eNo";
	$fdata["GoodName"] = "eNo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("result_psra","eNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "eNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eNo";

	
	
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
			$edata["EditParams"].= " maxlength=15";

		$edata["controlWidth"] = 80;

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




	$tdataresult_psra["eNo"] = $fdata;
//	eYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "eYear";
	$fdata["GoodName"] = "eYear";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("result_psra","eYear");
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




	$tdataresult_psra["eYear"] = $fdata;
//	eType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "eType";
	$fdata["GoodName"] = "eType";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("result_psra","eType");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "eType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "eType";

	
	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataresult_psra["eType"] = $fdata;
//	s1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "s1";
	$fdata["GoodName"] = "s1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("result_psra","s1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s1";

	
	
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

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=5";

		$edata["controlWidth"] = 30;

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




	$tdataresult_psra["s1"] = $fdata;
//	s2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "s2";
	$fdata["GoodName"] = "s2";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("result_psra","s2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s2";

	
	
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

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=5";

		$edata["controlWidth"] = 30;

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




	$tdataresult_psra["s2"] = $fdata;
//	s3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "s3";
	$fdata["GoodName"] = "s3";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("result_psra","s3");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s3";

	
	
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

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=5";

		$edata["controlWidth"] = 30;

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




	$tdataresult_psra["s3"] = $fdata;
//	s4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "s4";
	$fdata["GoodName"] = "s4";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("result_psra","s4");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s4";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s4";

	
	
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

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=5";

		$edata["controlWidth"] = 30;

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




	$tdataresult_psra["s4"] = $fdata;
//	s5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "s5";
	$fdata["GoodName"] = "s5";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("result_psra","s5");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s5";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s5";

	
	
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

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=5";

		$edata["controlWidth"] = 30;

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




	$tdataresult_psra["s5"] = $fdata;
//	jumlahMarkah
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "jumlahMarkah";
	$fdata["GoodName"] = "jumlahMarkah";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("result_psra","jumlahMarkah");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataresult_psra["jumlahMarkah"] = $fdata;
//	peratus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "peratus";
	$fdata["GoodName"] = "peratus";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("result_psra","peratus");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "peratus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "peratus";

	
	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataresult_psra["peratus"] = $fdata;
//	pangkat
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "pangkat";
	$fdata["GoodName"] = "pangkat";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("result_psra","pangkat");
	$fdata["FieldType"] = 5;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "pangkat";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "pangkat";

	
	
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




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdataresult_psra["pangkat"] = $fdata;
//	s6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "s6";
	$fdata["GoodName"] = "s6";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("result_psra","s6");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s6";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s6";

	
	
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

	
	



	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=5";

		$edata["controlWidth"] = 30;

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




	$tdataresult_psra["s6"] = $fdata;
//	s7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "s7";
	$fdata["GoodName"] = "s7";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("result_psra","s7");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "s7";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s7";

	
	
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
			$edata["EditParams"].= " maxlength=5";

		$edata["controlWidth"] = 65;

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




	$tdataresult_psra["s7"] = $fdata;
//	sCenter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "sCenter";
	$fdata["GoodName"] = "sCenter";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("result_psra","sCenter");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "sCenter";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sCenter";

	
	
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




	$tdataresult_psra["sCenter"] = $fdata;
//	sName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "sName";
	$fdata["GoodName"] = "sName";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("result_psra","sName");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
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




	$tdataresult_psra["sName"] = $fdata;
//	sZone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "sZone";
	$fdata["GoodName"] = "sZone";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("result_psra","sZone");
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




	$tdataresult_psra["sZone"] = $fdata;


$tables_data["result_psra"]=&$tdataresult_psra;
$field_labels["result_psra"] = &$fieldLabelsresult_psra;
$fieldToolTips["result_psra"] = &$fieldToolTipsresult_psra;
$page_titles["result_psra"] = &$pageTitlesresult_psra;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["result_psra"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["result_psra"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_result_psra()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sid,  name,  gender,  birthdate,  birthCert,  nationality,  sCode,  eNo,  eYear,  eType,  s1,  s2,  s3,  s4,  s5,  jumlahMarkah,  peratus,  pangkat,  s6,  s7,  sCenter,  sName,  sZone";
$proto0["m_strFrom"] = "FROM (   SELECT  sid,  name,  gender,  birthdate,  birthCert,  nationality,  exam_marking.sCode,  eNo,  eYear,  eType,  s1,  s2,  s3,  s4,  s5,  SUM(exam_marking.s1 + exam_marking.s2 + exam_marking.s3 + exam_marking.s4 + exam_marking.s5) AS jumlahMarkah,  SUM(exam_marking.s1 + exam_marking.s2 + exam_marking.s3 + exam_marking.s4 + exam_marking.s5)/500 AS peratus,  SUM(exam_marking.s1 + exam_marking.s2 + exam_marking.s3 + exam_marking.s4 + exam_marking.s5)/500*100 AS pangkat,  s6,  s7,  sCenter,  sName,  sZone  FROM exam_marking  INNER JOIN school ON exam_marking.sCode = school.sCode AND eType = school.sType  WHERE eType ='PSRA'  GROUP BY sid  ) AS Sub2";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY eYear, peratus DESC";
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
	"m_strTable" => "Sub2",
	"m_srcTableName" => "result_psra"
));

$proto5["m_sql"] = "sid";
$proto5["m_srcTableName"] = "result_psra";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "result_psra"
));

$proto7["m_sql"] = "name";
$proto7["m_srcTableName"] = "result_psra";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "gender",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "result_psra"
));

$proto9["m_sql"] = "gender";
$proto9["m_srcTableName"] = "result_psra";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "birthdate",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "result_psra"
));

$proto11["m_sql"] = "birthdate";
$proto11["m_srcTableName"] = "result_psra";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "birthCert",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "result_psra"
));

$proto13["m_sql"] = "birthCert";
$proto13["m_srcTableName"] = "result_psra";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "nationality",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "result_psra"
));

$proto15["m_sql"] = "nationality";
$proto15["m_srcTableName"] = "result_psra";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "result_psra"
));

$proto17["m_sql"] = "sCode";
$proto17["m_srcTableName"] = "result_psra";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "eNo",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "result_psra"
));

$proto19["m_sql"] = "eNo";
$proto19["m_srcTableName"] = "result_psra";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "result_psra"
));

$proto21["m_sql"] = "eYear";
$proto21["m_srcTableName"] = "result_psra";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "result_psra"
));

$proto23["m_sql"] = "eType";
$proto23["m_srcTableName"] = "result_psra";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "s1",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "result_psra"
));

$proto25["m_sql"] = "s1";
$proto25["m_srcTableName"] = "result_psra";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "s2",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "result_psra"
));

$proto27["m_sql"] = "s2";
$proto27["m_srcTableName"] = "result_psra";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "s3",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "result_psra"
));

$proto29["m_sql"] = "s3";
$proto29["m_srcTableName"] = "result_psra";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "s4",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "result_psra"
));

$proto31["m_sql"] = "s4";
$proto31["m_srcTableName"] = "result_psra";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "s5",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "result_psra"
));

$proto33["m_sql"] = "s5";
$proto33["m_srcTableName"] = "result_psra";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "jumlahMarkah",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "result_psra"
));

$proto35["m_sql"] = "jumlahMarkah";
$proto35["m_srcTableName"] = "result_psra";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "peratus",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "result_psra"
));

$proto37["m_sql"] = "peratus";
$proto37["m_srcTableName"] = "result_psra";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "pangkat",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "result_psra"
));

$proto39["m_sql"] = "pangkat";
$proto39["m_srcTableName"] = "result_psra";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "s6",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "result_psra"
));

$proto41["m_sql"] = "s6";
$proto41["m_srcTableName"] = "result_psra";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "s7",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "result_psra"
));

$proto43["m_sql"] = "s7";
$proto43["m_srcTableName"] = "result_psra";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
						$proto45=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sCenter"
));

$proto45["m_sql"] = "sCenter";
$proto45["m_srcTableName"] = "result_psra";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto0["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sName"
));

$proto47["m_sql"] = "sName";
$proto47["m_srcTableName"] = "result_psra";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto0["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sZone"
));

$proto49["m_sql"] = "sZone";
$proto49["m_srcTableName"] = "result_psra";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto51=array();
$proto51["m_link"] = "SQLL_MAIN";
			$proto52=array();
$proto52["m_strHead"] = "   SELECT";
$proto52["m_strFieldList"] = "sid,  name,  gender,  birthdate,  birthCert,  nationality,  exam_marking.sCode,  eNo,  eYear,  eType,  s1,  s2,  s3,  s4,  s5,  SUM(exam_marking.s1 + exam_marking.s2 + exam_marking.s3 + exam_marking.s4 + exam_marking.s5) AS jumlahMarkah,  SUM(exam_marking.s1 + exam_marking.s2 + exam_marking.s3 + exam_marking.s4 + exam_marking.s5)/500 AS peratus,  SUM(exam_marking.s1 + exam_marking.s2 + exam_marking.s3 + exam_marking.s4 + exam_marking.s5)/500*100 AS pangkat,  s6,  s7,  sCenter,  sName,  sZone";
$proto52["m_strFrom"] = "FROM exam_marking  INNER JOIN school ON exam_marking.sCode = school.sCode AND eType = school.sType";
$proto52["m_strWhere"] = "eType ='PSRA'";
$proto52["m_strOrderBy"] = "";
$proto52["m_strTail"] = "";
			$proto52["cipherer"] = null;
$proto53=array();
$proto53["m_sql"] = "eType ='PSRA'";
$proto53["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "result_psra"
));

$proto53["m_column"]=$obj;
$proto53["m_contained"] = array();
$proto53["m_strCase"] = "='PSRA'";
$proto53["m_havingmode"] = false;
$proto53["m_inBrackets"] = false;
$proto53["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto53);

$proto52["m_where"] = $obj;
$proto55=array();
$proto55["m_sql"] = "";
$proto55["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto55["m_column"]=$obj;
$proto55["m_contained"] = array();
$proto55["m_strCase"] = "";
$proto55["m_havingmode"] = false;
$proto55["m_inBrackets"] = false;
$proto55["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto55);

$proto52["m_having"] = $obj;
$proto52["m_fieldlist"] = array();
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "result_psra"
));

$proto57["m_sql"] = "sid";
$proto57["m_srcTableName"] = "result_psra";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto52["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "result_psra"
));

$proto59["m_sql"] = "name";
$proto59["m_srcTableName"] = "result_psra";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto52["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "gender",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "result_psra"
));

$proto61["m_sql"] = "gender";
$proto61["m_srcTableName"] = "result_psra";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto52["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "birthdate",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "result_psra"
));

$proto63["m_sql"] = "birthdate";
$proto63["m_srcTableName"] = "result_psra";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto52["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "birthCert",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "result_psra"
));

$proto65["m_sql"] = "birthCert";
$proto65["m_srcTableName"] = "result_psra";
$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto52["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "nationality",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "result_psra"
));

$proto67["m_sql"] = "nationality";
$proto67["m_srcTableName"] = "result_psra";
$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto52["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "result_psra"
));

$proto69["m_sql"] = "exam_marking.sCode";
$proto69["m_srcTableName"] = "result_psra";
$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto52["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "eNo",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "result_psra"
));

$proto71["m_sql"] = "eNo";
$proto71["m_srcTableName"] = "result_psra";
$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto52["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "result_psra"
));

$proto73["m_sql"] = "eYear";
$proto73["m_srcTableName"] = "result_psra";
$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto52["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "result_psra"
));

$proto75["m_sql"] = "eType";
$proto75["m_srcTableName"] = "result_psra";
$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "";
$obj = new SQLFieldListItem($proto75);

$proto52["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "s1",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "result_psra"
));

$proto77["m_sql"] = "s1";
$proto77["m_srcTableName"] = "result_psra";
$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto52["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLField(array(
	"m_strName" => "s2",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "result_psra"
));

$proto79["m_sql"] = "s2";
$proto79["m_srcTableName"] = "result_psra";
$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "";
$obj = new SQLFieldListItem($proto79);

$proto52["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLField(array(
	"m_strName" => "s3",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "result_psra"
));

$proto81["m_sql"] = "s3";
$proto81["m_srcTableName"] = "result_psra";
$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "";
$obj = new SQLFieldListItem($proto81);

$proto52["m_fieldlist"][]=$obj;
						$proto83=array();
			$obj = new SQLField(array(
	"m_strName" => "s4",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "result_psra"
));

$proto83["m_sql"] = "s4";
$proto83["m_srcTableName"] = "result_psra";
$proto83["m_expr"]=$obj;
$proto83["m_alias"] = "";
$obj = new SQLFieldListItem($proto83);

$proto52["m_fieldlist"][]=$obj;
						$proto85=array();
			$obj = new SQLField(array(
	"m_strName" => "s5",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "result_psra"
));

$proto85["m_sql"] = "s5";
$proto85["m_srcTableName"] = "result_psra";
$proto85["m_expr"]=$obj;
$proto85["m_alias"] = "";
$obj = new SQLFieldListItem($proto85);

$proto52["m_fieldlist"][]=$obj;
						$proto87=array();
			$proto88=array();
$proto88["m_functiontype"] = "SQLF_SUM";
$proto88["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s1 + exam_marking.s2 + exam_marking.s3 + exam_marking.s4 + exam_marking.s5"
));

$proto88["m_arguments"][]=$obj;
$proto88["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto88);

$proto87["m_sql"] = "SUM(exam_marking.s1 + exam_marking.s2 + exam_marking.s3 + exam_marking.s4 + exam_marking.s5)";
$proto87["m_srcTableName"] = "result_psra";
$proto87["m_expr"]=$obj;
$proto87["m_alias"] = "jumlahMarkah";
$obj = new SQLFieldListItem($proto87);

$proto52["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(exam_marking.s1 + exam_marking.s2 + exam_marking.s3 + exam_marking.s4 + exam_marking.s5)/500"
));

$proto90["m_sql"] = "SUM(exam_marking.s1 + exam_marking.s2 + exam_marking.s3 + exam_marking.s4 + exam_marking.s5)/500";
$proto90["m_srcTableName"] = "result_psra";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "peratus";
$obj = new SQLFieldListItem($proto90);

$proto52["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(exam_marking.s1 + exam_marking.s2 + exam_marking.s3 + exam_marking.s4 + exam_marking.s5)/500*100"
));

$proto92["m_sql"] = "SUM(exam_marking.s1 + exam_marking.s2 + exam_marking.s3 + exam_marking.s4 + exam_marking.s5)/500*100";
$proto92["m_srcTableName"] = "result_psra";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "pangkat";
$obj = new SQLFieldListItem($proto92);

$proto52["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "s6",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "result_psra"
));

$proto94["m_sql"] = "s6";
$proto94["m_srcTableName"] = "result_psra";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto52["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "s7",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "result_psra"
));

$proto96["m_sql"] = "s7";
$proto96["m_srcTableName"] = "result_psra";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto52["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sCenter"
));

$proto98["m_sql"] = "sCenter";
$proto98["m_srcTableName"] = "result_psra";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto52["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sName"
));

$proto100["m_sql"] = "sName";
$proto100["m_srcTableName"] = "result_psra";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto52["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sZone"
));

$proto102["m_sql"] = "sZone";
$proto102["m_srcTableName"] = "result_psra";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto52["m_fieldlist"][]=$obj;
$proto52["m_fromlist"] = array();
												$proto104=array();
$proto104["m_link"] = "SQLL_MAIN";
			$proto105=array();
$proto105["m_strName"] = "exam_marking";
$proto105["m_srcTableName"] = "result_psra";
$proto105["m_columns"] = array();
$proto105["m_columns"][] = "sid";
$proto105["m_columns"][] = "name";
$proto105["m_columns"][] = "gender";
$proto105["m_columns"][] = "birthdate";
$proto105["m_columns"][] = "birthCert";
$proto105["m_columns"][] = "nationality";
$proto105["m_columns"][] = "sCode";
$proto105["m_columns"][] = "eNo";
$proto105["m_columns"][] = "eYear";
$proto105["m_columns"][] = "eType";
$proto105["m_columns"][] = "s1";
$proto105["m_columns"][] = "s2";
$proto105["m_columns"][] = "s3";
$proto105["m_columns"][] = "s4";
$proto105["m_columns"][] = "s5";
$proto105["m_columns"][] = "s6";
$proto105["m_columns"][] = "s7";
$obj = new SQLTable($proto105);

$proto104["m_table"] = $obj;
$proto104["m_sql"] = "exam_marking";
$proto104["m_alias"] = "";
$proto104["m_srcTableName"] = "result_psra";
$proto106=array();
$proto106["m_sql"] = "";
$proto106["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto106["m_column"]=$obj;
$proto106["m_contained"] = array();
$proto106["m_strCase"] = "";
$proto106["m_havingmode"] = false;
$proto106["m_inBrackets"] = false;
$proto106["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto106);

$proto104["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto104);

$proto52["m_fromlist"][]=$obj;
												$proto108=array();
$proto108["m_link"] = "SQLL_INNERJOIN";
			$proto109=array();
$proto109["m_strName"] = "school";
$proto109["m_srcTableName"] = "result_psra";
$proto109["m_columns"] = array();
$proto109["m_columns"][] = "sno";
$proto109["m_columns"][] = "sName";
$proto109["m_columns"][] = "sCenter";
$proto109["m_columns"][] = "sCode";
$proto109["m_columns"][] = "sZone";
$proto109["m_columns"][] = "sType";
$obj = new SQLTable($proto109);

$proto108["m_table"] = $obj;
$proto108["m_sql"] = "INNER JOIN school ON exam_marking.sCode = school.sCode AND eType = school.sType";
$proto108["m_alias"] = "";
$proto108["m_srcTableName"] = "result_psra";
$proto110=array();
$proto110["m_sql"] = "exam_marking.sCode = school.sCode AND eType = school.sType";
$proto110["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sCode = school.sCode AND eType = school.sType"
));

$proto110["m_column"]=$obj;
$proto110["m_contained"] = array();
						$proto112=array();
$proto112["m_sql"] = "exam_marking.sCode = school.sCode";
$proto112["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "result_psra"
));

$proto112["m_column"]=$obj;
$proto112["m_contained"] = array();
$proto112["m_strCase"] = "= school.sCode";
$proto112["m_havingmode"] = false;
$proto112["m_inBrackets"] = false;
$proto112["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto112);

			$proto110["m_contained"][]=$obj;
						$proto114=array();
$proto114["m_sql"] = "eType = school.sType";
$proto114["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "result_psra"
));

$proto114["m_column"]=$obj;
$proto114["m_contained"] = array();
$proto114["m_strCase"] = "= school.sType";
$proto114["m_havingmode"] = false;
$proto114["m_inBrackets"] = false;
$proto114["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto114);

			$proto110["m_contained"][]=$obj;
$proto110["m_strCase"] = "";
$proto110["m_havingmode"] = false;
$proto110["m_inBrackets"] = false;
$proto110["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto110);

$proto108["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto108);

$proto52["m_fromlist"][]=$obj;
$proto52["m_groupby"] = array();
												$proto116=array();
						$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "result_psra"
));

$proto116["m_column"]=$obj;
$obj = new SQLGroupByItem($proto116);

$proto52["m_groupby"][]=$obj;
$proto52["m_orderby"] = array();
$proto52["m_srcTableName"]="result_psra";		
$obj = new SQLQuery($proto52);

$proto51["m_table"] = $obj;
$proto51["m_sql"] = "(   SELECT  sid,  name,  gender,  birthdate,  birthCert,  nationality,  exam_marking.sCode,  eNo,  eYear,  eType,  s1,  s2,  s3,  s4,  s5,  SUM(exam_marking.s1 + exam_marking.s2 + exam_marking.s3 + exam_marking.s4 + exam_marking.s5) AS jumlahMarkah,  SUM(exam_marking.s1 + exam_marking.s2 + exam_marking.s3 + exam_marking.s4 + exam_marking.s5)/500 AS peratus,  SUM(exam_marking.s1 + exam_marking.s2 + exam_marking.s3 + exam_marking.s4 + exam_marking.s5)/500*100 AS pangkat,  s6,  s7,  sCenter,  sName,  sZone  FROM exam_marking  INNER JOIN school ON exam_marking.sCode = school.sCode AND eType = school.sType  WHERE eType ='PSRA'  GROUP BY sid  ) AS Sub2";
$proto51["m_alias"] = "Sub2";
$proto51["m_srcTableName"] = "result_psra";
$proto118=array();
$proto118["m_sql"] = "";
$proto118["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto118["m_column"]=$obj;
$proto118["m_contained"] = array();
$proto118["m_strCase"] = "";
$proto118["m_havingmode"] = false;
$proto118["m_inBrackets"] = false;
$proto118["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto118);

$proto51["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto51);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto120=array();
						$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "result_psra"
));

$proto120["m_column"]=$obj;
$proto120["m_bAsc"] = 1;
$proto120["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto120);

$proto0["m_orderby"][]=$obj;					
												$proto122=array();
						$obj = new SQLField(array(
	"m_strName" => "peratus",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "result_psra"
));

$proto122["m_column"]=$obj;
$proto122["m_bAsc"] = 0;
$proto122["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto122);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="result_psra";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_result_psra = createSqlQuery_result_psra();



																							

$tdataresult_psra[".sqlquery"] = $queryData_result_psra;

include_once(getabspath("include/result_psra_events.php"));
$tableEvents["result_psra"] = new eventclass_result_psra;
$tdataresult_psra[".hasEvents"] = true;

$query = &$queryData_result_psra;
$table = "result_psra";
// here goes EVENT_INIT_TABLE event


global $conn;
//only PPTAD zon can view their own zon
$year=date('Y');
$alevel=$_SESSION['alevel'];
$zon=$_SESSION['zon'];
if($zon!==NULL && $alevel==1){
$query->addWhere("sZone='".$zon."' AND eYear='"  .$year."'");

}else if($alevel==2){
$query->addWhere("eYear='".$year."'");
}
;
unset($query);
?>