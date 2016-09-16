<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasemakan = array();
	$tdatasemakan[".truncateText"] = true;
	$tdatasemakan[".NumberOfChars"] = 80;
	$tdatasemakan[".ShortName"] = "semakan";
	$tdatasemakan[".OwnerID"] = "";
	$tdatasemakan[".OriginalTable"] = "exam_marking";

//	field labels
$fieldLabelssemakan = array();
$fieldToolTipssemakan = array();
$pageTitlessemakan = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssemakan["English"] = array();
	$fieldToolTipssemakan["English"] = array();
	$pageTitlessemakan["English"] = array();
	$fieldLabelssemakan["English"]["sid"] = "Sid";
	$fieldToolTipssemakan["English"]["sid"] = "";
	$fieldLabelssemakan["English"]["name"] = "Nama Murid";
	$fieldToolTipssemakan["English"]["name"] = "";
	$fieldLabelssemakan["English"]["gender"] = "Jantina";
	$fieldToolTipssemakan["English"]["gender"] = "";
	$fieldLabelssemakan["English"]["birthdate"] = "Tarikh Lahir";
	$fieldToolTipssemakan["English"]["birthdate"] = "";
	$fieldLabelssemakan["English"]["birthCert"] = "Sijil Lahir";
	$fieldToolTipssemakan["English"]["birthCert"] = "";
	$fieldLabelssemakan["English"]["nationality"] = "WgNegara";
	$fieldToolTipssemakan["English"]["nationality"] = "";
	$fieldLabelssemakan["English"]["sCode"] = "Kod Sekolah";
	$fieldToolTipssemakan["English"]["sCode"] = "";
	$fieldLabelssemakan["English"]["eNo"] = "No Giliran";
	$fieldToolTipssemakan["English"]["eNo"] = "";
	$fieldLabelssemakan["English"]["eYear"] = "Tahun";
	$fieldToolTipssemakan["English"]["eYear"] = "";
	$fieldLabelssemakan["English"]["eType"] = "Peperiksaan";
	$fieldToolTipssemakan["English"]["eType"] = "";
	$fieldLabelssemakan["English"]["s1"] = "AS";
	$fieldToolTipssemakan["English"]["s1"] = "";
	$fieldLabelssemakan["English"]["s2"] = "BA";
	$fieldToolTipssemakan["English"]["s2"] = "";
	$fieldLabelssemakan["English"]["s3"] = "JIK";
	$fieldToolTipssemakan["English"]["s3"] = "";
	$fieldLabelssemakan["English"]["s4"] = "TF";
	$fieldToolTipssemakan["English"]["s4"] = "";
	$fieldLabelssemakan["English"]["s5"] = "TJ";
	$fieldToolTipssemakan["English"]["s5"] = "";
	$fieldLabelssemakan["English"]["s6"] = "UTH";
	$fieldToolTipssemakan["English"]["s6"] = "";
	$fieldLabelssemakan["English"]["s7"] = "PAFA";
	$fieldToolTipssemakan["English"]["s7"] = "";
	$fieldLabelssemakan["English"]["sZone"] = "Zon";
	$fieldToolTipssemakan["English"]["sZone"] = "";
	$fieldLabelssemakan["English"]["sName"] = "Nama Sekolah";
	$fieldToolTipssemakan["English"]["sName"] = "";
	if (count($fieldToolTipssemakan["English"]))
		$tdatasemakan[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssemakan[""] = array();
	$fieldToolTipssemakan[""] = array();
	$pageTitlessemakan[""] = array();
	if (count($fieldToolTipssemakan[""]))
		$tdatasemakan[".isUseToolTips"] = true;
}


	$tdatasemakan[".NCSearch"] = true;



$tdatasemakan[".shortTableName"] = "semakan";
$tdatasemakan[".nSecOptions"] = 0;
$tdatasemakan[".recsPerRowList"] = 1;
$tdatasemakan[".recsPerRowPrint"] = 1;
$tdatasemakan[".mainTableOwnerID"] = "";
$tdatasemakan[".moveNext"] = 1;
$tdatasemakan[".entityType"] = 1;

$tdatasemakan[".strOriginalTableName"] = "exam_marking";




$tdatasemakan[".showAddInPopup"] = false;

$tdatasemakan[".showEditInPopup"] = false;

$tdatasemakan[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasemakan[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasemakan[".fieldsForRegister"] = array();

$tdatasemakan[".listAjax"] = false;

	$tdatasemakan[".audit"] = false;

	$tdatasemakan[".locking"] = false;



$tdatasemakan[".list"] = true;

$tdatasemakan[".inlineEdit"] = true;





$tdatasemakan[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatasemakan[".searchSaving"] = false;
//

$tdatasemakan[".showSearchPanel"] = true;
		$tdatasemakan[".flexibleSearch"] = true;

if (isMobile())
	$tdatasemakan[".isUseAjaxSuggest"] = false;
else
	$tdatasemakan[".isUseAjaxSuggest"] = true;

$tdatasemakan[".rowHighlite"] = true;


																				
$tdatasemakan[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasemakan[".isUseTimeForSearch"] = false;





$tdatasemakan[".allSearchFields"] = array();
$tdatasemakan[".filterFields"] = array();
$tdatasemakan[".requiredSearchFields"] = array();

$tdatasemakan[".allSearchFields"][] = "sZone";
	$tdatasemakan[".allSearchFields"][] = "sName";
	$tdatasemakan[".allSearchFields"][] = "name";
	$tdatasemakan[".allSearchFields"][] = "birthdate";
	$tdatasemakan[".allSearchFields"][] = "birthCert";
	$tdatasemakan[".allSearchFields"][] = "gender";
	$tdatasemakan[".allSearchFields"][] = "nationality";
	$tdatasemakan[".allSearchFields"][] = "sCode";
	$tdatasemakan[".allSearchFields"][] = "eNo";
	$tdatasemakan[".allSearchFields"][] = "s1";
	$tdatasemakan[".allSearchFields"][] = "s2";
	$tdatasemakan[".allSearchFields"][] = "s3";
	$tdatasemakan[".allSearchFields"][] = "s4";
	$tdatasemakan[".allSearchFields"][] = "s5";
	$tdatasemakan[".allSearchFields"][] = "s6";
	$tdatasemakan[".allSearchFields"][] = "s7";
	$tdatasemakan[".allSearchFields"][] = "eYear";
	$tdatasemakan[".allSearchFields"][] = "eType";
	

$tdatasemakan[".googleLikeFields"] = array();
$tdatasemakan[".googleLikeFields"][] = "name";
$tdatasemakan[".googleLikeFields"][] = "sZone";
$tdatasemakan[".googleLikeFields"][] = "sName";

$tdatasemakan[".panelSearchFields"] = array();
$tdatasemakan[".searchPanelOptions"] = array();
$tdatasemakan[".panelSearchFields"][] = "sZone";
	$tdatasemakan[".panelSearchFields"][] = "sName";
	$tdatasemakan[".panelSearchFields"][] = "name";
	$tdatasemakan[".panelSearchFields"][] = "sCode";
	$tdatasemakan[".panelSearchFields"][] = "eYear";
	
$tdatasemakan[".advSearchFields"] = array();
$tdatasemakan[".advSearchFields"][] = "sZone";
$tdatasemakan[".advSearchFields"][] = "sName";
$tdatasemakan[".advSearchFields"][] = "name";
$tdatasemakan[".advSearchFields"][] = "birthdate";
$tdatasemakan[".advSearchFields"][] = "birthCert";
$tdatasemakan[".advSearchFields"][] = "gender";
$tdatasemakan[".advSearchFields"][] = "nationality";
$tdatasemakan[".advSearchFields"][] = "sCode";
$tdatasemakan[".advSearchFields"][] = "eNo";
$tdatasemakan[".advSearchFields"][] = "s1";
$tdatasemakan[".advSearchFields"][] = "s2";
$tdatasemakan[".advSearchFields"][] = "s3";
$tdatasemakan[".advSearchFields"][] = "s4";
$tdatasemakan[".advSearchFields"][] = "s5";
$tdatasemakan[".advSearchFields"][] = "s6";
$tdatasemakan[".advSearchFields"][] = "s7";
$tdatasemakan[".advSearchFields"][] = "eYear";
$tdatasemakan[".advSearchFields"][] = "eType";

$tdatasemakan[".tableType"] = "list";

$tdatasemakan[".printerPageOrientation"] = 0;
$tdatasemakan[".nPrinterPageScale"] = 100;

$tdatasemakan[".nPrinterSplitRecords"] = 40;

$tdatasemakan[".nPrinterPDFSplitRecords"] = 40;



$tdatasemakan[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatasemakan[".pageSize"] = 20;

$tdatasemakan[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasemakan[".strOrderBy"] = $tstrOrderBy;

$tdatasemakan[".orderindexes"] = array();

$tdatasemakan[".sqlHead"] = "SELECT exam_marking.sid,  exam_marking.name,  exam_marking.gender,  exam_marking.birthdate,  exam_marking.birthCert,  exam_marking.nationality,  exam_marking.sCode,  exam_marking.eNo,  exam_marking.eYear,  exam_marking.eType,  exam_marking.s1,  exam_marking.s2,  exam_marking.s3,  exam_marking.s4,  exam_marking.s5,  exam_marking.s6,  exam_marking.s7,  school.sZone,  school.sName";
$tdatasemakan[".sqlFrom"] = "FROM exam_marking  LEFT OUTER JOIN school ON exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType";
$tdatasemakan[".sqlWhereExpr"] = "exam_marking.name IS NULL OR exam_marking.gender IS NULL OR exam_marking.birthdate IS NULL OR exam_marking.birthCert IS NULL OR exam_marking.sCode IS NULL OR exam_marking.eNo IS NULL OR exam_marking.eYear IS NULL OR exam_marking.eType IS NULL OR (exam_marking.s1 IS NULL OR exam_marking.s1 >100 OR exam_marking.s1 ='0' OR exam_marking.s1 ='') OR (exam_marking.s2 IS NULL OR exam_marking.s2 >100 OR exam_marking.s2 ='0' OR exam_marking.s2 ='') OR (exam_marking.s3 IS NULL OR exam_marking.s3 >100 OR exam_marking.s3 ='0' OR exam_marking.s3 ='') OR (exam_marking.s4 IS NULL OR exam_marking.s4 >100 OR exam_marking.s4 ='0' OR exam_marking.s4 ='') OR (exam_marking.s5 IS NULL OR exam_marking.s5 >100 OR exam_marking.s5 ='0' OR exam_marking.s5 ='') OR (exam_marking.s6 IS NULL OR exam_marking.s6 >100 OR exam_marking.s6 ='0' OR exam_marking.s6 ='') OR (exam_marking.s7 IS NULL OR exam_marking.s7 ='')";
$tdatasemakan[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasemakan[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasemakan[".arrGroupsPerPage"] = $arrGPP;

$tdatasemakan[".highlightSearchResults"] = true;

$tableKeyssemakan = array();
$tableKeyssemakan[] = "sid";
$tdatasemakan[".Keys"] = $tableKeyssemakan;

$tdatasemakan[".listFields"] = array();
$tdatasemakan[".listFields"][] = "name";
$tdatasemakan[".listFields"][] = "birthdate";
$tdatasemakan[".listFields"][] = "birthCert";
$tdatasemakan[".listFields"][] = "gender";
$tdatasemakan[".listFields"][] = "nationality";
$tdatasemakan[".listFields"][] = "sCode";
$tdatasemakan[".listFields"][] = "eNo";
$tdatasemakan[".listFields"][] = "s1";
$tdatasemakan[".listFields"][] = "s2";
$tdatasemakan[".listFields"][] = "s3";
$tdatasemakan[".listFields"][] = "s4";
$tdatasemakan[".listFields"][] = "s5";
$tdatasemakan[".listFields"][] = "s6";
$tdatasemakan[".listFields"][] = "s7";
$tdatasemakan[".listFields"][] = "eYear";
$tdatasemakan[".listFields"][] = "eType";

$tdatasemakan[".hideMobileList"] = array();


$tdatasemakan[".viewFields"] = array();

$tdatasemakan[".addFields"] = array();

$tdatasemakan[".masterListFields"] = array();
$tdatasemakan[".masterListFields"][] = "sid";
$tdatasemakan[".masterListFields"][] = "sZone";
$tdatasemakan[".masterListFields"][] = "sName";
$tdatasemakan[".masterListFields"][] = "name";
$tdatasemakan[".masterListFields"][] = "birthdate";
$tdatasemakan[".masterListFields"][] = "birthCert";
$tdatasemakan[".masterListFields"][] = "gender";
$tdatasemakan[".masterListFields"][] = "nationality";
$tdatasemakan[".masterListFields"][] = "sCode";
$tdatasemakan[".masterListFields"][] = "eNo";
$tdatasemakan[".masterListFields"][] = "s1";
$tdatasemakan[".masterListFields"][] = "s2";
$tdatasemakan[".masterListFields"][] = "s3";
$tdatasemakan[".masterListFields"][] = "s4";
$tdatasemakan[".masterListFields"][] = "s5";
$tdatasemakan[".masterListFields"][] = "s6";
$tdatasemakan[".masterListFields"][] = "s7";
$tdatasemakan[".masterListFields"][] = "eYear";
$tdatasemakan[".masterListFields"][] = "eType";

$tdatasemakan[".inlineAddFields"] = array();

$tdatasemakan[".editFields"] = array();

$tdatasemakan[".inlineEditFields"] = array();
$tdatasemakan[".inlineEditFields"][] = "name";
$tdatasemakan[".inlineEditFields"][] = "birthdate";
$tdatasemakan[".inlineEditFields"][] = "birthCert";
$tdatasemakan[".inlineEditFields"][] = "gender";
$tdatasemakan[".inlineEditFields"][] = "nationality";
$tdatasemakan[".inlineEditFields"][] = "sCode";
$tdatasemakan[".inlineEditFields"][] = "eNo";
$tdatasemakan[".inlineEditFields"][] = "s1";
$tdatasemakan[".inlineEditFields"][] = "s2";
$tdatasemakan[".inlineEditFields"][] = "s3";
$tdatasemakan[".inlineEditFields"][] = "s4";
$tdatasemakan[".inlineEditFields"][] = "s5";
$tdatasemakan[".inlineEditFields"][] = "s6";
$tdatasemakan[".inlineEditFields"][] = "s7";
$tdatasemakan[".inlineEditFields"][] = "eYear";
$tdatasemakan[".inlineEditFields"][] = "eType";

$tdatasemakan[".exportFields"] = array();

$tdatasemakan[".importFields"] = array();
$tdatasemakan[".importFields"][] = "name";
$tdatasemakan[".importFields"][] = "gender";
$tdatasemakan[".importFields"][] = "birthdate";
$tdatasemakan[".importFields"][] = "birthCert";
$tdatasemakan[".importFields"][] = "nationality";
$tdatasemakan[".importFields"][] = "sCode";
$tdatasemakan[".importFields"][] = "eNo";
$tdatasemakan[".importFields"][] = "eYear";
$tdatasemakan[".importFields"][] = "eType";
$tdatasemakan[".importFields"][] = "s1";
$tdatasemakan[".importFields"][] = "s2";
$tdatasemakan[".importFields"][] = "s3";
$tdatasemakan[".importFields"][] = "s4";
$tdatasemakan[".importFields"][] = "s5";
$tdatasemakan[".importFields"][] = "s6";
$tdatasemakan[".importFields"][] = "s7";
$tdatasemakan[".importFields"][] = "sZone";
$tdatasemakan[".importFields"][] = "sName";

$tdatasemakan[".printFields"] = array();

//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan","sid");
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








	$tdatasemakan["sid"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.name";

	
	
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




	$tdatasemakan["name"] = $fdata;
//	gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "gender";
	$fdata["GoodName"] = "gender";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan","gender");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "gender";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.gender";

	
	
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




	$tdatasemakan["gender"] = $fdata;
//	birthdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "birthdate";
	$fdata["GoodName"] = "birthdate";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan","birthdate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "birthdate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.birthdate";

	
	
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




	$tdatasemakan["birthdate"] = $fdata;
//	birthCert
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "birthCert";
	$fdata["GoodName"] = "birthCert";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan","birthCert");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "birthCert";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.birthCert";

	
	
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




	$tdatasemakan["birthCert"] = $fdata;
//	nationality
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "nationality";
	$fdata["GoodName"] = "nationality";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan","nationality");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "nationality";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.nationality";

	
	
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




	$tdatasemakan["nationality"] = $fdata;
//	sCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sCode";
	$fdata["GoodName"] = "sCode";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan","sCode");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "sCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.sCode";

	
	
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




	$tdatasemakan["sCode"] = $fdata;
//	eNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "eNo";
	$fdata["GoodName"] = "eNo";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan","eNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "eNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.eNo";

	
	
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




	$tdatasemakan["eNo"] = $fdata;
//	eYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "eYear";
	$fdata["GoodName"] = "eYear";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan","eYear");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatasemakan["eYear"] = $fdata;
//	eType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "eType";
	$fdata["GoodName"] = "eType";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan","eType");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "eType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.eType";

	
	
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




	$tdatasemakan["eType"] = $fdata;
//	s1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "s1";
	$fdata["GoodName"] = "s1";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan","s1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "s1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.s1";

	
	
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




	$tdatasemakan["s1"] = $fdata;
//	s2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "s2";
	$fdata["GoodName"] = "s2";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan","s2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "s2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.s2";

	
	
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




	$tdatasemakan["s2"] = $fdata;
//	s3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "s3";
	$fdata["GoodName"] = "s3";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan","s3");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "s3";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.s3";

	
	
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




	$tdatasemakan["s3"] = $fdata;
//	s4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "s4";
	$fdata["GoodName"] = "s4";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan","s4");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "s4";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.s4";

	
	
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




	$tdatasemakan["s4"] = $fdata;
//	s5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "s5";
	$fdata["GoodName"] = "s5";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan","s5");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "s5";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.s5";

	
	
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




	$tdatasemakan["s5"] = $fdata;
//	s6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "s6";
	$fdata["GoodName"] = "s6";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan","s6");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "s6";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.s6";

	
	
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




	$tdatasemakan["s6"] = $fdata;
//	s7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "s7";
	$fdata["GoodName"] = "s7";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan","s7");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
		$fdata["bInlineEdit"] = true;

	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "s7";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.s7";

	
	
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




	$tdatasemakan["s7"] = $fdata;
//	sZone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "sZone";
	$fdata["GoodName"] = "sZone";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("semakan","sZone");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "sZone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "school.sZone";

	
	
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




	$tdatasemakan["sZone"] = $fdata;
//	sName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "sName";
	$fdata["GoodName"] = "sName";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("semakan","sName");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "sName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "school.sName";

	
	
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




	$tdatasemakan["sName"] = $fdata;


$tables_data["semakan"]=&$tdatasemakan;
$field_labels["semakan"] = &$fieldLabelssemakan;
$fieldToolTips["semakan"] = &$fieldToolTipssemakan;
$page_titles["semakan"] = &$pageTitlessemakan;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["semakan"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["semakan"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_semakan()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "exam_marking.sid,  exam_marking.name,  exam_marking.gender,  exam_marking.birthdate,  exam_marking.birthCert,  exam_marking.nationality,  exam_marking.sCode,  exam_marking.eNo,  exam_marking.eYear,  exam_marking.eType,  exam_marking.s1,  exam_marking.s2,  exam_marking.s3,  exam_marking.s4,  exam_marking.s5,  exam_marking.s6,  exam_marking.s7,  school.sZone,  school.sName";
$proto0["m_strFrom"] = "FROM exam_marking  LEFT OUTER JOIN school ON exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType";
$proto0["m_strWhere"] = "exam_marking.name IS NULL OR exam_marking.gender IS NULL OR exam_marking.birthdate IS NULL OR exam_marking.birthCert IS NULL OR exam_marking.sCode IS NULL OR exam_marking.eNo IS NULL OR exam_marking.eYear IS NULL OR exam_marking.eType IS NULL OR (exam_marking.s1 IS NULL OR exam_marking.s1 >100 OR exam_marking.s1 ='0' OR exam_marking.s1 ='') OR (exam_marking.s2 IS NULL OR exam_marking.s2 >100 OR exam_marking.s2 ='0' OR exam_marking.s2 ='') OR (exam_marking.s3 IS NULL OR exam_marking.s3 >100 OR exam_marking.s3 ='0' OR exam_marking.s3 ='') OR (exam_marking.s4 IS NULL OR exam_marking.s4 >100 OR exam_marking.s4 ='0' OR exam_marking.s4 ='') OR (exam_marking.s5 IS NULL OR exam_marking.s5 >100 OR exam_marking.s5 ='0' OR exam_marking.s5 ='') OR (exam_marking.s6 IS NULL OR exam_marking.s6 >100 OR exam_marking.s6 ='0' OR exam_marking.s6 ='') OR (exam_marking.s7 IS NULL OR exam_marking.s7 ='')";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "exam_marking.name IS NULL OR exam_marking.gender IS NULL OR exam_marking.birthdate IS NULL OR exam_marking.birthCert IS NULL OR exam_marking.sCode IS NULL OR exam_marking.eNo IS NULL OR exam_marking.eYear IS NULL OR exam_marking.eType IS NULL OR (exam_marking.s1 IS NULL OR exam_marking.s1 >100 OR exam_marking.s1 ='0' OR exam_marking.s1 ='') OR (exam_marking.s2 IS NULL OR exam_marking.s2 >100 OR exam_marking.s2 ='0' OR exam_marking.s2 ='') OR (exam_marking.s3 IS NULL OR exam_marking.s3 >100 OR exam_marking.s3 ='0' OR exam_marking.s3 ='') OR (exam_marking.s4 IS NULL OR exam_marking.s4 >100 OR exam_marking.s4 ='0' OR exam_marking.s4 ='') OR (exam_marking.s5 IS NULL OR exam_marking.s5 >100 OR exam_marking.s5 ='0' OR exam_marking.s5 ='') OR (exam_marking.s6 IS NULL OR exam_marking.s6 >100 OR exam_marking.s6 ='0' OR exam_marking.s6 ='') OR (exam_marking.s7 IS NULL OR exam_marking.s7 ='')";
$proto1["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.name IS NULL OR exam_marking.gender IS NULL OR exam_marking.birthdate IS NULL OR exam_marking.birthCert IS NULL OR exam_marking.sCode IS NULL OR exam_marking.eNo IS NULL OR exam_marking.eYear IS NULL OR exam_marking.eType IS NULL OR (exam_marking.s1 IS NULL OR exam_marking.s1 >100 OR exam_marking.s1 ='0' OR exam_marking.s1 ='') OR (exam_marking.s2 IS NULL OR exam_marking.s2 >100 OR exam_marking.s2 ='0' OR exam_marking.s2 ='') OR (exam_marking.s3 IS NULL OR exam_marking.s3 >100 OR exam_marking.s3 ='0' OR exam_marking.s3 ='') OR (exam_marking.s4 IS NULL OR exam_marking.s4 >100 OR exam_marking.s4 ='0' OR exam_marking.s4 ='') OR (exam_marking.s5 IS NULL OR exam_marking.s5 >100 OR exam_marking.s5 ='0' OR exam_marking.s5 ='') OR (exam_marking.s6 IS NULL OR exam_marking.s6 >100 OR exam_marking.s6 ='0' OR exam_marking.s6 ='') OR (exam_marking.s7 IS NULL OR exam_marking.s7 ='')"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "exam_marking.name IS NULL";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto3["m_column"]=$obj;
$proto3["m_contained"] = array();
$proto3["m_strCase"] = "IS NULL";
$proto3["m_havingmode"] = false;
$proto3["m_inBrackets"] = false;
$proto3["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto3);

			$proto1["m_contained"][]=$obj;
						$proto5=array();
$proto5["m_sql"] = "exam_marking.gender IS NULL";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "gender",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto5["m_column"]=$obj;
$proto5["m_contained"] = array();
$proto5["m_strCase"] = "IS NULL";
$proto5["m_havingmode"] = false;
$proto5["m_inBrackets"] = false;
$proto5["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto5);

			$proto1["m_contained"][]=$obj;
						$proto7=array();
$proto7["m_sql"] = "exam_marking.birthdate IS NULL";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "birthdate",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto7["m_column"]=$obj;
$proto7["m_contained"] = array();
$proto7["m_strCase"] = "IS NULL";
$proto7["m_havingmode"] = false;
$proto7["m_inBrackets"] = false;
$proto7["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto7);

			$proto1["m_contained"][]=$obj;
						$proto9=array();
$proto9["m_sql"] = "exam_marking.birthCert IS NULL";
$proto9["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "birthCert",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto9["m_column"]=$obj;
$proto9["m_contained"] = array();
$proto9["m_strCase"] = "IS NULL";
$proto9["m_havingmode"] = false;
$proto9["m_inBrackets"] = false;
$proto9["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto9);

			$proto1["m_contained"][]=$obj;
						$proto11=array();
$proto11["m_sql"] = "exam_marking.sCode IS NULL";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto11["m_column"]=$obj;
$proto11["m_contained"] = array();
$proto11["m_strCase"] = "IS NULL";
$proto11["m_havingmode"] = false;
$proto11["m_inBrackets"] = false;
$proto11["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto11);

			$proto1["m_contained"][]=$obj;
						$proto13=array();
$proto13["m_sql"] = "exam_marking.eNo IS NULL";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "eNo",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "IS NULL";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

			$proto1["m_contained"][]=$obj;
						$proto15=array();
$proto15["m_sql"] = "exam_marking.eYear IS NULL";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "IS NULL";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

			$proto1["m_contained"][]=$obj;
						$proto17=array();
$proto17["m_sql"] = "exam_marking.eType IS NULL";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "IS NULL";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

			$proto1["m_contained"][]=$obj;
						$proto19=array();
$proto19["m_sql"] = "exam_marking.s1 IS NULL OR exam_marking.s1 >100 OR exam_marking.s1 ='0' OR exam_marking.s1 =''";
$proto19["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s1 IS NULL OR exam_marking.s1 >100 OR exam_marking.s1 ='0' OR exam_marking.s1 =''"
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
						$proto21=array();
$proto21["m_sql"] = "exam_marking.s1 IS NULL";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "s1",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "IS NULL";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

			$proto19["m_contained"][]=$obj;
						$proto23=array();
$proto23["m_sql"] = "exam_marking.s1 >100";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "s1",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = ">100";
$proto23["m_havingmode"] = false;
$proto23["m_inBrackets"] = false;
$proto23["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto23);

			$proto19["m_contained"][]=$obj;
						$proto25=array();
$proto25["m_sql"] = "exam_marking.s1 ='0'";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "s1",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = "='0'";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = false;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

			$proto19["m_contained"][]=$obj;
						$proto27=array();
$proto27["m_sql"] = "exam_marking.s1 =''";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "s1",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = "=''";
$proto27["m_havingmode"] = false;
$proto27["m_inBrackets"] = false;
$proto27["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto27);

			$proto19["m_contained"][]=$obj;
$proto19["m_strCase"] = "";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = true;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

			$proto1["m_contained"][]=$obj;
						$proto29=array();
$proto29["m_sql"] = "exam_marking.s2 IS NULL OR exam_marking.s2 >100 OR exam_marking.s2 ='0' OR exam_marking.s2 =''";
$proto29["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s2 IS NULL OR exam_marking.s2 >100 OR exam_marking.s2 ='0' OR exam_marking.s2 =''"
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
						$proto31=array();
$proto31["m_sql"] = "exam_marking.s2 IS NULL";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "s2",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "IS NULL";
$proto31["m_havingmode"] = false;
$proto31["m_inBrackets"] = false;
$proto31["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto31);

			$proto29["m_contained"][]=$obj;
						$proto33=array();
$proto33["m_sql"] = "exam_marking.s2 >100";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "s2",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = ">100";
$proto33["m_havingmode"] = false;
$proto33["m_inBrackets"] = false;
$proto33["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto33);

			$proto29["m_contained"][]=$obj;
						$proto35=array();
$proto35["m_sql"] = "exam_marking.s2 ='0'";
$proto35["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "s2",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto35["m_column"]=$obj;
$proto35["m_contained"] = array();
$proto35["m_strCase"] = "='0'";
$proto35["m_havingmode"] = false;
$proto35["m_inBrackets"] = false;
$proto35["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto35);

			$proto29["m_contained"][]=$obj;
						$proto37=array();
$proto37["m_sql"] = "exam_marking.s2 =''";
$proto37["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "s2",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto37["m_column"]=$obj;
$proto37["m_contained"] = array();
$proto37["m_strCase"] = "=''";
$proto37["m_havingmode"] = false;
$proto37["m_inBrackets"] = false;
$proto37["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto37);

			$proto29["m_contained"][]=$obj;
$proto29["m_strCase"] = "";
$proto29["m_havingmode"] = false;
$proto29["m_inBrackets"] = true;
$proto29["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto29);

			$proto1["m_contained"][]=$obj;
						$proto39=array();
$proto39["m_sql"] = "exam_marking.s3 IS NULL OR exam_marking.s3 >100 OR exam_marking.s3 ='0' OR exam_marking.s3 =''";
$proto39["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s3 IS NULL OR exam_marking.s3 >100 OR exam_marking.s3 ='0' OR exam_marking.s3 =''"
));

$proto39["m_column"]=$obj;
$proto39["m_contained"] = array();
						$proto41=array();
$proto41["m_sql"] = "exam_marking.s3 IS NULL";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "s3",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto41["m_column"]=$obj;
$proto41["m_contained"] = array();
$proto41["m_strCase"] = "IS NULL";
$proto41["m_havingmode"] = false;
$proto41["m_inBrackets"] = false;
$proto41["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto41);

			$proto39["m_contained"][]=$obj;
						$proto43=array();
$proto43["m_sql"] = "exam_marking.s3 >100";
$proto43["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "s3",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto43["m_column"]=$obj;
$proto43["m_contained"] = array();
$proto43["m_strCase"] = ">100";
$proto43["m_havingmode"] = false;
$proto43["m_inBrackets"] = false;
$proto43["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto43);

			$proto39["m_contained"][]=$obj;
						$proto45=array();
$proto45["m_sql"] = "exam_marking.s3 ='0'";
$proto45["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "s3",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto45["m_column"]=$obj;
$proto45["m_contained"] = array();
$proto45["m_strCase"] = "='0'";
$proto45["m_havingmode"] = false;
$proto45["m_inBrackets"] = false;
$proto45["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto45);

			$proto39["m_contained"][]=$obj;
						$proto47=array();
$proto47["m_sql"] = "exam_marking.s3 =''";
$proto47["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "s3",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto47["m_column"]=$obj;
$proto47["m_contained"] = array();
$proto47["m_strCase"] = "=''";
$proto47["m_havingmode"] = false;
$proto47["m_inBrackets"] = false;
$proto47["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto47);

			$proto39["m_contained"][]=$obj;
$proto39["m_strCase"] = "";
$proto39["m_havingmode"] = false;
$proto39["m_inBrackets"] = true;
$proto39["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto39);

			$proto1["m_contained"][]=$obj;
						$proto49=array();
$proto49["m_sql"] = "exam_marking.s4 IS NULL OR exam_marking.s4 >100 OR exam_marking.s4 ='0' OR exam_marking.s4 =''";
$proto49["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s4 IS NULL OR exam_marking.s4 >100 OR exam_marking.s4 ='0' OR exam_marking.s4 =''"
));

$proto49["m_column"]=$obj;
$proto49["m_contained"] = array();
						$proto51=array();
$proto51["m_sql"] = "exam_marking.s4 IS NULL";
$proto51["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "s4",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto51["m_column"]=$obj;
$proto51["m_contained"] = array();
$proto51["m_strCase"] = "IS NULL";
$proto51["m_havingmode"] = false;
$proto51["m_inBrackets"] = false;
$proto51["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto51);

			$proto49["m_contained"][]=$obj;
						$proto53=array();
$proto53["m_sql"] = "exam_marking.s4 >100";
$proto53["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "s4",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto53["m_column"]=$obj;
$proto53["m_contained"] = array();
$proto53["m_strCase"] = ">100";
$proto53["m_havingmode"] = false;
$proto53["m_inBrackets"] = false;
$proto53["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto53);

			$proto49["m_contained"][]=$obj;
						$proto55=array();
$proto55["m_sql"] = "exam_marking.s4 ='0'";
$proto55["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "s4",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto55["m_column"]=$obj;
$proto55["m_contained"] = array();
$proto55["m_strCase"] = "='0'";
$proto55["m_havingmode"] = false;
$proto55["m_inBrackets"] = false;
$proto55["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto55);

			$proto49["m_contained"][]=$obj;
						$proto57=array();
$proto57["m_sql"] = "exam_marking.s4 =''";
$proto57["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "s4",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto57["m_column"]=$obj;
$proto57["m_contained"] = array();
$proto57["m_strCase"] = "=''";
$proto57["m_havingmode"] = false;
$proto57["m_inBrackets"] = false;
$proto57["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto57);

			$proto49["m_contained"][]=$obj;
$proto49["m_strCase"] = "";
$proto49["m_havingmode"] = false;
$proto49["m_inBrackets"] = true;
$proto49["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto49);

			$proto1["m_contained"][]=$obj;
						$proto59=array();
$proto59["m_sql"] = "exam_marking.s5 IS NULL OR exam_marking.s5 >100 OR exam_marking.s5 ='0' OR exam_marking.s5 =''";
$proto59["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s5 IS NULL OR exam_marking.s5 >100 OR exam_marking.s5 ='0' OR exam_marking.s5 =''"
));

$proto59["m_column"]=$obj;
$proto59["m_contained"] = array();
						$proto61=array();
$proto61["m_sql"] = "exam_marking.s5 IS NULL";
$proto61["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "s5",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto61["m_column"]=$obj;
$proto61["m_contained"] = array();
$proto61["m_strCase"] = "IS NULL";
$proto61["m_havingmode"] = false;
$proto61["m_inBrackets"] = false;
$proto61["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto61);

			$proto59["m_contained"][]=$obj;
						$proto63=array();
$proto63["m_sql"] = "exam_marking.s5 >100";
$proto63["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "s5",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto63["m_column"]=$obj;
$proto63["m_contained"] = array();
$proto63["m_strCase"] = ">100";
$proto63["m_havingmode"] = false;
$proto63["m_inBrackets"] = false;
$proto63["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto63);

			$proto59["m_contained"][]=$obj;
						$proto65=array();
$proto65["m_sql"] = "exam_marking.s5 ='0'";
$proto65["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "s5",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto65["m_column"]=$obj;
$proto65["m_contained"] = array();
$proto65["m_strCase"] = "='0'";
$proto65["m_havingmode"] = false;
$proto65["m_inBrackets"] = false;
$proto65["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto65);

			$proto59["m_contained"][]=$obj;
						$proto67=array();
$proto67["m_sql"] = "exam_marking.s5 =''";
$proto67["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "s5",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto67["m_column"]=$obj;
$proto67["m_contained"] = array();
$proto67["m_strCase"] = "=''";
$proto67["m_havingmode"] = false;
$proto67["m_inBrackets"] = false;
$proto67["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto67);

			$proto59["m_contained"][]=$obj;
$proto59["m_strCase"] = "";
$proto59["m_havingmode"] = false;
$proto59["m_inBrackets"] = true;
$proto59["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto59);

			$proto1["m_contained"][]=$obj;
						$proto69=array();
$proto69["m_sql"] = "exam_marking.s6 IS NULL OR exam_marking.s6 >100 OR exam_marking.s6 ='0' OR exam_marking.s6 =''";
$proto69["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s6 IS NULL OR exam_marking.s6 >100 OR exam_marking.s6 ='0' OR exam_marking.s6 =''"
));

$proto69["m_column"]=$obj;
$proto69["m_contained"] = array();
						$proto71=array();
$proto71["m_sql"] = "exam_marking.s6 IS NULL";
$proto71["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "s6",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto71["m_column"]=$obj;
$proto71["m_contained"] = array();
$proto71["m_strCase"] = "IS NULL";
$proto71["m_havingmode"] = false;
$proto71["m_inBrackets"] = false;
$proto71["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto71);

			$proto69["m_contained"][]=$obj;
						$proto73=array();
$proto73["m_sql"] = "exam_marking.s6 >100";
$proto73["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "s6",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto73["m_column"]=$obj;
$proto73["m_contained"] = array();
$proto73["m_strCase"] = ">100";
$proto73["m_havingmode"] = false;
$proto73["m_inBrackets"] = false;
$proto73["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto73);

			$proto69["m_contained"][]=$obj;
						$proto75=array();
$proto75["m_sql"] = "exam_marking.s6 ='0'";
$proto75["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "s6",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto75["m_column"]=$obj;
$proto75["m_contained"] = array();
$proto75["m_strCase"] = "='0'";
$proto75["m_havingmode"] = false;
$proto75["m_inBrackets"] = false;
$proto75["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto75);

			$proto69["m_contained"][]=$obj;
						$proto77=array();
$proto77["m_sql"] = "exam_marking.s6 =''";
$proto77["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "s6",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto77["m_column"]=$obj;
$proto77["m_contained"] = array();
$proto77["m_strCase"] = "=''";
$proto77["m_havingmode"] = false;
$proto77["m_inBrackets"] = false;
$proto77["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto77);

			$proto69["m_contained"][]=$obj;
$proto69["m_strCase"] = "";
$proto69["m_havingmode"] = false;
$proto69["m_inBrackets"] = true;
$proto69["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto69);

			$proto1["m_contained"][]=$obj;
						$proto79=array();
$proto79["m_sql"] = "exam_marking.s7 IS NULL OR exam_marking.s7 =''";
$proto79["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.s7 IS NULL OR exam_marking.s7 =''"
));

$proto79["m_column"]=$obj;
$proto79["m_contained"] = array();
						$proto81=array();
$proto81["m_sql"] = "exam_marking.s7 IS NULL";
$proto81["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "s7",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto81["m_column"]=$obj;
$proto81["m_contained"] = array();
$proto81["m_strCase"] = "IS NULL";
$proto81["m_havingmode"] = false;
$proto81["m_inBrackets"] = false;
$proto81["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto81);

			$proto79["m_contained"][]=$obj;
						$proto83=array();
$proto83["m_sql"] = "exam_marking.s7 =''";
$proto83["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "s7",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto83["m_column"]=$obj;
$proto83["m_contained"] = array();
$proto83["m_strCase"] = "=''";
$proto83["m_havingmode"] = false;
$proto83["m_inBrackets"] = false;
$proto83["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto83);

			$proto79["m_contained"][]=$obj;
$proto79["m_strCase"] = "";
$proto79["m_havingmode"] = false;
$proto79["m_inBrackets"] = true;
$proto79["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto79);

			$proto1["m_contained"][]=$obj;
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
$proto85=array();
$proto85["m_sql"] = "";
$proto85["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto85["m_column"]=$obj;
$proto85["m_contained"] = array();
$proto85["m_strCase"] = "";
$proto85["m_havingmode"] = false;
$proto85["m_inBrackets"] = false;
$proto85["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto85);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto87=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto87["m_sql"] = "exam_marking.sid";
$proto87["m_srcTableName"] = "semakan";
$proto87["m_expr"]=$obj;
$proto87["m_alias"] = "";
$obj = new SQLFieldListItem($proto87);

$proto0["m_fieldlist"][]=$obj;
						$proto89=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto89["m_sql"] = "exam_marking.name";
$proto89["m_srcTableName"] = "semakan";
$proto89["m_expr"]=$obj;
$proto89["m_alias"] = "";
$obj = new SQLFieldListItem($proto89);

$proto0["m_fieldlist"][]=$obj;
						$proto91=array();
			$obj = new SQLField(array(
	"m_strName" => "gender",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto91["m_sql"] = "exam_marking.gender";
$proto91["m_srcTableName"] = "semakan";
$proto91["m_expr"]=$obj;
$proto91["m_alias"] = "";
$obj = new SQLFieldListItem($proto91);

$proto0["m_fieldlist"][]=$obj;
						$proto93=array();
			$obj = new SQLField(array(
	"m_strName" => "birthdate",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto93["m_sql"] = "exam_marking.birthdate";
$proto93["m_srcTableName"] = "semakan";
$proto93["m_expr"]=$obj;
$proto93["m_alias"] = "";
$obj = new SQLFieldListItem($proto93);

$proto0["m_fieldlist"][]=$obj;
						$proto95=array();
			$obj = new SQLField(array(
	"m_strName" => "birthCert",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto95["m_sql"] = "exam_marking.birthCert";
$proto95["m_srcTableName"] = "semakan";
$proto95["m_expr"]=$obj;
$proto95["m_alias"] = "";
$obj = new SQLFieldListItem($proto95);

$proto0["m_fieldlist"][]=$obj;
						$proto97=array();
			$obj = new SQLField(array(
	"m_strName" => "nationality",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto97["m_sql"] = "exam_marking.nationality";
$proto97["m_srcTableName"] = "semakan";
$proto97["m_expr"]=$obj;
$proto97["m_alias"] = "";
$obj = new SQLFieldListItem($proto97);

$proto0["m_fieldlist"][]=$obj;
						$proto99=array();
			$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto99["m_sql"] = "exam_marking.sCode";
$proto99["m_srcTableName"] = "semakan";
$proto99["m_expr"]=$obj;
$proto99["m_alias"] = "";
$obj = new SQLFieldListItem($proto99);

$proto0["m_fieldlist"][]=$obj;
						$proto101=array();
			$obj = new SQLField(array(
	"m_strName" => "eNo",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto101["m_sql"] = "exam_marking.eNo";
$proto101["m_srcTableName"] = "semakan";
$proto101["m_expr"]=$obj;
$proto101["m_alias"] = "";
$obj = new SQLFieldListItem($proto101);

$proto0["m_fieldlist"][]=$obj;
						$proto103=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto103["m_sql"] = "exam_marking.eYear";
$proto103["m_srcTableName"] = "semakan";
$proto103["m_expr"]=$obj;
$proto103["m_alias"] = "";
$obj = new SQLFieldListItem($proto103);

$proto0["m_fieldlist"][]=$obj;
						$proto105=array();
			$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto105["m_sql"] = "exam_marking.eType";
$proto105["m_srcTableName"] = "semakan";
$proto105["m_expr"]=$obj;
$proto105["m_alias"] = "";
$obj = new SQLFieldListItem($proto105);

$proto0["m_fieldlist"][]=$obj;
						$proto107=array();
			$obj = new SQLField(array(
	"m_strName" => "s1",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto107["m_sql"] = "exam_marking.s1";
$proto107["m_srcTableName"] = "semakan";
$proto107["m_expr"]=$obj;
$proto107["m_alias"] = "";
$obj = new SQLFieldListItem($proto107);

$proto0["m_fieldlist"][]=$obj;
						$proto109=array();
			$obj = new SQLField(array(
	"m_strName" => "s2",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto109["m_sql"] = "exam_marking.s2";
$proto109["m_srcTableName"] = "semakan";
$proto109["m_expr"]=$obj;
$proto109["m_alias"] = "";
$obj = new SQLFieldListItem($proto109);

$proto0["m_fieldlist"][]=$obj;
						$proto111=array();
			$obj = new SQLField(array(
	"m_strName" => "s3",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto111["m_sql"] = "exam_marking.s3";
$proto111["m_srcTableName"] = "semakan";
$proto111["m_expr"]=$obj;
$proto111["m_alias"] = "";
$obj = new SQLFieldListItem($proto111);

$proto0["m_fieldlist"][]=$obj;
						$proto113=array();
			$obj = new SQLField(array(
	"m_strName" => "s4",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto113["m_sql"] = "exam_marking.s4";
$proto113["m_srcTableName"] = "semakan";
$proto113["m_expr"]=$obj;
$proto113["m_alias"] = "";
$obj = new SQLFieldListItem($proto113);

$proto0["m_fieldlist"][]=$obj;
						$proto115=array();
			$obj = new SQLField(array(
	"m_strName" => "s5",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto115["m_sql"] = "exam_marking.s5";
$proto115["m_srcTableName"] = "semakan";
$proto115["m_expr"]=$obj;
$proto115["m_alias"] = "";
$obj = new SQLFieldListItem($proto115);

$proto0["m_fieldlist"][]=$obj;
						$proto117=array();
			$obj = new SQLField(array(
	"m_strName" => "s6",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto117["m_sql"] = "exam_marking.s6";
$proto117["m_srcTableName"] = "semakan";
$proto117["m_expr"]=$obj;
$proto117["m_alias"] = "";
$obj = new SQLFieldListItem($proto117);

$proto0["m_fieldlist"][]=$obj;
						$proto119=array();
			$obj = new SQLField(array(
	"m_strName" => "s7",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto119["m_sql"] = "exam_marking.s7";
$proto119["m_srcTableName"] = "semakan";
$proto119["m_expr"]=$obj;
$proto119["m_alias"] = "";
$obj = new SQLFieldListItem($proto119);

$proto0["m_fieldlist"][]=$obj;
						$proto121=array();
			$obj = new SQLField(array(
	"m_strName" => "sZone",
	"m_strTable" => "school",
	"m_srcTableName" => "semakan"
));

$proto121["m_sql"] = "school.sZone";
$proto121["m_srcTableName"] = "semakan";
$proto121["m_expr"]=$obj;
$proto121["m_alias"] = "";
$obj = new SQLFieldListItem($proto121);

$proto0["m_fieldlist"][]=$obj;
						$proto123=array();
			$obj = new SQLField(array(
	"m_strName" => "sName",
	"m_strTable" => "school",
	"m_srcTableName" => "semakan"
));

$proto123["m_sql"] = "school.sName";
$proto123["m_srcTableName"] = "semakan";
$proto123["m_expr"]=$obj;
$proto123["m_alias"] = "";
$obj = new SQLFieldListItem($proto123);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto125=array();
$proto125["m_link"] = "SQLL_MAIN";
			$proto126=array();
$proto126["m_strName"] = "exam_marking";
$proto126["m_srcTableName"] = "semakan";
$proto126["m_columns"] = array();
$proto126["m_columns"][] = "sid";
$proto126["m_columns"][] = "name";
$proto126["m_columns"][] = "gender";
$proto126["m_columns"][] = "birthdate";
$proto126["m_columns"][] = "birthCert";
$proto126["m_columns"][] = "nationality";
$proto126["m_columns"][] = "sCode";
$proto126["m_columns"][] = "eNo";
$proto126["m_columns"][] = "eYear";
$proto126["m_columns"][] = "eType";
$proto126["m_columns"][] = "s1";
$proto126["m_columns"][] = "s2";
$proto126["m_columns"][] = "s3";
$proto126["m_columns"][] = "s4";
$proto126["m_columns"][] = "s5";
$proto126["m_columns"][] = "s6";
$proto126["m_columns"][] = "s7";
$obj = new SQLTable($proto126);

$proto125["m_table"] = $obj;
$proto125["m_sql"] = "exam_marking";
$proto125["m_alias"] = "";
$proto125["m_srcTableName"] = "semakan";
$proto127=array();
$proto127["m_sql"] = "";
$proto127["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto127["m_column"]=$obj;
$proto127["m_contained"] = array();
$proto127["m_strCase"] = "";
$proto127["m_havingmode"] = false;
$proto127["m_inBrackets"] = false;
$proto127["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto127);

$proto125["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto125);

$proto0["m_fromlist"][]=$obj;
												$proto129=array();
$proto129["m_link"] = "SQLL_LEFTJOIN";
			$proto130=array();
$proto130["m_strName"] = "school";
$proto130["m_srcTableName"] = "semakan";
$proto130["m_columns"] = array();
$proto130["m_columns"][] = "sno";
$proto130["m_columns"][] = "sName";
$proto130["m_columns"][] = "sCenter";
$proto130["m_columns"][] = "sCode";
$proto130["m_columns"][] = "sZone";
$proto130["m_columns"][] = "sType";
$obj = new SQLTable($proto130);

$proto129["m_table"] = $obj;
$proto129["m_sql"] = "LEFT OUTER JOIN school ON exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType";
$proto129["m_alias"] = "";
$proto129["m_srcTableName"] = "semakan";
$proto131=array();
$proto131["m_sql"] = "exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType";
$proto131["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType"
));

$proto131["m_column"]=$obj;
$proto131["m_contained"] = array();
						$proto133=array();
$proto133["m_sql"] = "exam_marking.sCode = school.sCode";
$proto133["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto133["m_column"]=$obj;
$proto133["m_contained"] = array();
$proto133["m_strCase"] = "= school.sCode";
$proto133["m_havingmode"] = false;
$proto133["m_inBrackets"] = false;
$proto133["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto133);

			$proto131["m_contained"][]=$obj;
						$proto135=array();
$proto135["m_sql"] = "exam_marking.eType = school.sType";
$proto135["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan"
));

$proto135["m_column"]=$obj;
$proto135["m_contained"] = array();
$proto135["m_strCase"] = "= school.sType";
$proto135["m_havingmode"] = false;
$proto135["m_inBrackets"] = false;
$proto135["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto135);

			$proto131["m_contained"][]=$obj;
$proto131["m_strCase"] = "";
$proto131["m_havingmode"] = false;
$proto131["m_inBrackets"] = false;
$proto131["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto131);

$proto129["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto129);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="semakan";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_semakan = createSqlQuery_semakan();



																			

$tdatasemakan[".sqlquery"] = $queryData_semakan;

include_once(getabspath("include/semakan_events.php"));
$tableEvents["semakan"] = new eventclass_semakan;
$tdatasemakan[".hasEvents"] = true;

$query = &$queryData_semakan;
$table = "semakan";
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