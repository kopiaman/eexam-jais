<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasemakan_duplicate_detail = array();
	$tdatasemakan_duplicate_detail[".truncateText"] = true;
	$tdatasemakan_duplicate_detail[".NumberOfChars"] = 80;
	$tdatasemakan_duplicate_detail[".ShortName"] = "semakan_duplicate_detail";
	$tdatasemakan_duplicate_detail[".OwnerID"] = "";
	$tdatasemakan_duplicate_detail[".OriginalTable"] = "exam_marking";

//	field labels
$fieldLabelssemakan_duplicate_detail = array();
$fieldToolTipssemakan_duplicate_detail = array();
$pageTitlessemakan_duplicate_detail = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssemakan_duplicate_detail["English"] = array();
	$fieldToolTipssemakan_duplicate_detail["English"] = array();
	$pageTitlessemakan_duplicate_detail["English"] = array();
	$fieldLabelssemakan_duplicate_detail["English"]["sid"] = "Sid";
	$fieldToolTipssemakan_duplicate_detail["English"]["sid"] = "";
	$fieldLabelssemakan_duplicate_detail["English"]["name"] = "Nama Murid";
	$fieldToolTipssemakan_duplicate_detail["English"]["name"] = "";
	$fieldLabelssemakan_duplicate_detail["English"]["gender"] = "Jantina";
	$fieldToolTipssemakan_duplicate_detail["English"]["gender"] = "";
	$fieldLabelssemakan_duplicate_detail["English"]["birthdate"] = "Tarikh Lahir";
	$fieldToolTipssemakan_duplicate_detail["English"]["birthdate"] = "";
	$fieldLabelssemakan_duplicate_detail["English"]["birthCert"] = "Sijil Lahir";
	$fieldToolTipssemakan_duplicate_detail["English"]["birthCert"] = "";
	$fieldLabelssemakan_duplicate_detail["English"]["nationality"] = "WgNegara";
	$fieldToolTipssemakan_duplicate_detail["English"]["nationality"] = "";
	$fieldLabelssemakan_duplicate_detail["English"]["eNo"] = "No Giliran";
	$fieldToolTipssemakan_duplicate_detail["English"]["eNo"] = "";
	$fieldLabelssemakan_duplicate_detail["English"]["eYear"] = "Tahun";
	$fieldToolTipssemakan_duplicate_detail["English"]["eYear"] = "";
	$fieldLabelssemakan_duplicate_detail["English"]["eType"] = "Peperiksaan";
	$fieldToolTipssemakan_duplicate_detail["English"]["eType"] = "";
	$fieldLabelssemakan_duplicate_detail["English"]["s1"] = "AS";
	$fieldToolTipssemakan_duplicate_detail["English"]["s1"] = "";
	$fieldLabelssemakan_duplicate_detail["English"]["s2"] = "BA";
	$fieldToolTipssemakan_duplicate_detail["English"]["s2"] = "";
	$fieldLabelssemakan_duplicate_detail["English"]["s3"] = "JIK";
	$fieldToolTipssemakan_duplicate_detail["English"]["s3"] = "";
	$fieldLabelssemakan_duplicate_detail["English"]["s4"] = "TF";
	$fieldToolTipssemakan_duplicate_detail["English"]["s4"] = "";
	$fieldLabelssemakan_duplicate_detail["English"]["s5"] = "TJ";
	$fieldToolTipssemakan_duplicate_detail["English"]["s5"] = "";
	$fieldLabelssemakan_duplicate_detail["English"]["s6"] = "UTH";
	$fieldToolTipssemakan_duplicate_detail["English"]["s6"] = "";
	$fieldLabelssemakan_duplicate_detail["English"]["s7"] = "PAFA";
	$fieldToolTipssemakan_duplicate_detail["English"]["s7"] = "";
	if (count($fieldToolTipssemakan_duplicate_detail["English"]))
		$tdatasemakan_duplicate_detail[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssemakan_duplicate_detail[""] = array();
	$fieldToolTipssemakan_duplicate_detail[""] = array();
	$pageTitlessemakan_duplicate_detail[""] = array();
	if (count($fieldToolTipssemakan_duplicate_detail[""]))
		$tdatasemakan_duplicate_detail[".isUseToolTips"] = true;
}


	$tdatasemakan_duplicate_detail[".NCSearch"] = true;



$tdatasemakan_duplicate_detail[".shortTableName"] = "semakan_duplicate_detail";
$tdatasemakan_duplicate_detail[".nSecOptions"] = 0;
$tdatasemakan_duplicate_detail[".recsPerRowList"] = 1;
$tdatasemakan_duplicate_detail[".recsPerRowPrint"] = 1;
$tdatasemakan_duplicate_detail[".mainTableOwnerID"] = "";
$tdatasemakan_duplicate_detail[".moveNext"] = 1;
$tdatasemakan_duplicate_detail[".entityType"] = 1;

$tdatasemakan_duplicate_detail[".strOriginalTableName"] = "exam_marking";




$tdatasemakan_duplicate_detail[".showAddInPopup"] = false;

$tdatasemakan_duplicate_detail[".showEditInPopup"] = false;

$tdatasemakan_duplicate_detail[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasemakan_duplicate_detail[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasemakan_duplicate_detail[".fieldsForRegister"] = array();

$tdatasemakan_duplicate_detail[".listAjax"] = false;

	$tdatasemakan_duplicate_detail[".audit"] = false;

	$tdatasemakan_duplicate_detail[".locking"] = false;



$tdatasemakan_duplicate_detail[".list"] = true;






$tdatasemakan_duplicate_detail[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatasemakan_duplicate_detail[".searchSaving"] = false;
//

$tdatasemakan_duplicate_detail[".showSearchPanel"] = true;
		$tdatasemakan_duplicate_detail[".flexibleSearch"] = true;

if (isMobile())
	$tdatasemakan_duplicate_detail[".isUseAjaxSuggest"] = false;
else
	$tdatasemakan_duplicate_detail[".isUseAjaxSuggest"] = true;

$tdatasemakan_duplicate_detail[".rowHighlite"] = true;


																																																																												
$tdatasemakan_duplicate_detail[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasemakan_duplicate_detail[".isUseTimeForSearch"] = false;





$tdatasemakan_duplicate_detail[".allSearchFields"] = array();
$tdatasemakan_duplicate_detail[".filterFields"] = array();
$tdatasemakan_duplicate_detail[".requiredSearchFields"] = array();

$tdatasemakan_duplicate_detail[".allSearchFields"][] = "name";
	$tdatasemakan_duplicate_detail[".allSearchFields"][] = "birthdate";
	$tdatasemakan_duplicate_detail[".allSearchFields"][] = "birthCert";
	$tdatasemakan_duplicate_detail[".allSearchFields"][] = "gender";
	$tdatasemakan_duplicate_detail[".allSearchFields"][] = "nationality";
	$tdatasemakan_duplicate_detail[".allSearchFields"][] = "eNo";
	$tdatasemakan_duplicate_detail[".allSearchFields"][] = "s1";
	$tdatasemakan_duplicate_detail[".allSearchFields"][] = "s2";
	$tdatasemakan_duplicate_detail[".allSearchFields"][] = "s3";
	$tdatasemakan_duplicate_detail[".allSearchFields"][] = "s4";
	$tdatasemakan_duplicate_detail[".allSearchFields"][] = "s5";
	$tdatasemakan_duplicate_detail[".allSearchFields"][] = "s6";
	$tdatasemakan_duplicate_detail[".allSearchFields"][] = "s7";
	$tdatasemakan_duplicate_detail[".allSearchFields"][] = "eYear";
	$tdatasemakan_duplicate_detail[".allSearchFields"][] = "eType";
	

$tdatasemakan_duplicate_detail[".googleLikeFields"] = array();
$tdatasemakan_duplicate_detail[".googleLikeFields"][] = "name";

$tdatasemakan_duplicate_detail[".panelSearchFields"] = array();
$tdatasemakan_duplicate_detail[".searchPanelOptions"] = array();
$tdatasemakan_duplicate_detail[".panelSearchFields"][] = "name";
	$tdatasemakan_duplicate_detail[".panelSearchFields"][] = "eYear";
	
$tdatasemakan_duplicate_detail[".advSearchFields"] = array();
$tdatasemakan_duplicate_detail[".advSearchFields"][] = "name";
$tdatasemakan_duplicate_detail[".advSearchFields"][] = "birthdate";
$tdatasemakan_duplicate_detail[".advSearchFields"][] = "birthCert";
$tdatasemakan_duplicate_detail[".advSearchFields"][] = "gender";
$tdatasemakan_duplicate_detail[".advSearchFields"][] = "nationality";
$tdatasemakan_duplicate_detail[".advSearchFields"][] = "eNo";
$tdatasemakan_duplicate_detail[".advSearchFields"][] = "s1";
$tdatasemakan_duplicate_detail[".advSearchFields"][] = "s2";
$tdatasemakan_duplicate_detail[".advSearchFields"][] = "s3";
$tdatasemakan_duplicate_detail[".advSearchFields"][] = "s4";
$tdatasemakan_duplicate_detail[".advSearchFields"][] = "s5";
$tdatasemakan_duplicate_detail[".advSearchFields"][] = "s6";
$tdatasemakan_duplicate_detail[".advSearchFields"][] = "s7";
$tdatasemakan_duplicate_detail[".advSearchFields"][] = "eYear";
$tdatasemakan_duplicate_detail[".advSearchFields"][] = "eType";

$tdatasemakan_duplicate_detail[".tableType"] = "list";

$tdatasemakan_duplicate_detail[".printerPageOrientation"] = 0;
$tdatasemakan_duplicate_detail[".nPrinterPageScale"] = 100;

$tdatasemakan_duplicate_detail[".nPrinterSplitRecords"] = 40;

$tdatasemakan_duplicate_detail[".nPrinterPDFSplitRecords"] = 40;



$tdatasemakan_duplicate_detail[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatasemakan_duplicate_detail[".pageSize"] = 20;

$tdatasemakan_duplicate_detail[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasemakan_duplicate_detail[".strOrderBy"] = $tstrOrderBy;

$tdatasemakan_duplicate_detail[".orderindexes"] = array();

$tdatasemakan_duplicate_detail[".sqlHead"] = "SELECT sid,  name,  gender,  birthdate,  birthCert,  nationality,  eNo,  eYear,  eType,  s1,  s2,  s3,  s4,  s5,  s6,  s7";
$tdatasemakan_duplicate_detail[".sqlFrom"] = "FROM exam_marking";
$tdatasemakan_duplicate_detail[".sqlWhereExpr"] = "";
$tdatasemakan_duplicate_detail[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasemakan_duplicate_detail[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasemakan_duplicate_detail[".arrGroupsPerPage"] = $arrGPP;

$tdatasemakan_duplicate_detail[".highlightSearchResults"] = true;

$tableKeyssemakan_duplicate_detail = array();
$tableKeyssemakan_duplicate_detail[] = "sid";
$tdatasemakan_duplicate_detail[".Keys"] = $tableKeyssemakan_duplicate_detail;

$tdatasemakan_duplicate_detail[".listFields"] = array();
$tdatasemakan_duplicate_detail[".listFields"][] = "name";
$tdatasemakan_duplicate_detail[".listFields"][] = "birthdate";
$tdatasemakan_duplicate_detail[".listFields"][] = "birthCert";
$tdatasemakan_duplicate_detail[".listFields"][] = "gender";
$tdatasemakan_duplicate_detail[".listFields"][] = "nationality";
$tdatasemakan_duplicate_detail[".listFields"][] = "eNo";
$tdatasemakan_duplicate_detail[".listFields"][] = "s1";
$tdatasemakan_duplicate_detail[".listFields"][] = "s2";
$tdatasemakan_duplicate_detail[".listFields"][] = "s3";
$tdatasemakan_duplicate_detail[".listFields"][] = "s4";
$tdatasemakan_duplicate_detail[".listFields"][] = "s5";
$tdatasemakan_duplicate_detail[".listFields"][] = "s6";
$tdatasemakan_duplicate_detail[".listFields"][] = "s7";
$tdatasemakan_duplicate_detail[".listFields"][] = "eYear";
$tdatasemakan_duplicate_detail[".listFields"][] = "eType";

$tdatasemakan_duplicate_detail[".hideMobileList"] = array();


$tdatasemakan_duplicate_detail[".viewFields"] = array();

$tdatasemakan_duplicate_detail[".addFields"] = array();

$tdatasemakan_duplicate_detail[".masterListFields"] = array();
$tdatasemakan_duplicate_detail[".masterListFields"][] = "sid";
$tdatasemakan_duplicate_detail[".masterListFields"][] = "name";
$tdatasemakan_duplicate_detail[".masterListFields"][] = "birthdate";
$tdatasemakan_duplicate_detail[".masterListFields"][] = "birthCert";
$tdatasemakan_duplicate_detail[".masterListFields"][] = "gender";
$tdatasemakan_duplicate_detail[".masterListFields"][] = "nationality";
$tdatasemakan_duplicate_detail[".masterListFields"][] = "eNo";
$tdatasemakan_duplicate_detail[".masterListFields"][] = "s1";
$tdatasemakan_duplicate_detail[".masterListFields"][] = "s2";
$tdatasemakan_duplicate_detail[".masterListFields"][] = "s3";
$tdatasemakan_duplicate_detail[".masterListFields"][] = "s4";
$tdatasemakan_duplicate_detail[".masterListFields"][] = "s5";
$tdatasemakan_duplicate_detail[".masterListFields"][] = "s6";
$tdatasemakan_duplicate_detail[".masterListFields"][] = "s7";
$tdatasemakan_duplicate_detail[".masterListFields"][] = "eYear";
$tdatasemakan_duplicate_detail[".masterListFields"][] = "eType";

$tdatasemakan_duplicate_detail[".inlineAddFields"] = array();

$tdatasemakan_duplicate_detail[".editFields"] = array();

$tdatasemakan_duplicate_detail[".inlineEditFields"] = array();

$tdatasemakan_duplicate_detail[".exportFields"] = array();

$tdatasemakan_duplicate_detail[".importFields"] = array();

$tdatasemakan_duplicate_detail[".printFields"] = array();

//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan_duplicate_detail","sid");
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








	$tdatasemakan_duplicate_detail["sid"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan_duplicate_detail","name");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatasemakan_duplicate_detail["name"] = $fdata;
//	gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "gender";
	$fdata["GoodName"] = "gender";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan_duplicate_detail","gender");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatasemakan_duplicate_detail["gender"] = $fdata;
//	birthdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "birthdate";
	$fdata["GoodName"] = "birthdate";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan_duplicate_detail","birthdate");
	$fdata["FieldType"] = 7;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatasemakan_duplicate_detail["birthdate"] = $fdata;
//	birthCert
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "birthCert";
	$fdata["GoodName"] = "birthCert";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan_duplicate_detail","birthCert");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatasemakan_duplicate_detail["birthCert"] = $fdata;
//	nationality
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "nationality";
	$fdata["GoodName"] = "nationality";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan_duplicate_detail","nationality");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatasemakan_duplicate_detail["nationality"] = $fdata;
//	eNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "eNo";
	$fdata["GoodName"] = "eNo";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan_duplicate_detail","eNo");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatasemakan_duplicate_detail["eNo"] = $fdata;
//	eYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "eYear";
	$fdata["GoodName"] = "eYear";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan_duplicate_detail","eYear");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatasemakan_duplicate_detail["eYear"] = $fdata;
//	eType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "eType";
	$fdata["GoodName"] = "eType";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan_duplicate_detail","eType");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
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




	$tdatasemakan_duplicate_detail["eType"] = $fdata;
//	s1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "s1";
	$fdata["GoodName"] = "s1";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan_duplicate_detail","s1");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatasemakan_duplicate_detail["s1"] = $fdata;
//	s2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "s2";
	$fdata["GoodName"] = "s2";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan_duplicate_detail","s2");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatasemakan_duplicate_detail["s2"] = $fdata;
//	s3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "s3";
	$fdata["GoodName"] = "s3";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan_duplicate_detail","s3");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatasemakan_duplicate_detail["s3"] = $fdata;
//	s4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "s4";
	$fdata["GoodName"] = "s4";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan_duplicate_detail","s4");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatasemakan_duplicate_detail["s4"] = $fdata;
//	s5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "s5";
	$fdata["GoodName"] = "s5";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan_duplicate_detail","s5");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatasemakan_duplicate_detail["s5"] = $fdata;
//	s6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "s6";
	$fdata["GoodName"] = "s6";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan_duplicate_detail","s6");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
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




	$tdatasemakan_duplicate_detail["s6"] = $fdata;
//	s7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "s7";
	$fdata["GoodName"] = "s7";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan_duplicate_detail","s7");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
		$fdata["strField"] = "s7";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s7";

	
	
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




	$tdatasemakan_duplicate_detail["s7"] = $fdata;


$tables_data["semakan_duplicate_detail"]=&$tdatasemakan_duplicate_detail;
$field_labels["semakan_duplicate_detail"] = &$fieldLabelssemakan_duplicate_detail;
$fieldToolTips["semakan_duplicate_detail"] = &$fieldToolTipssemakan_duplicate_detail;
$page_titles["semakan_duplicate_detail"] = &$pageTitlessemakan_duplicate_detail;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["semakan_duplicate_detail"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["semakan_duplicate_detail"] = array();


	
				$strOriginalDetailsTable="exam_marking";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="semakan_duplicate";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "semakan_duplicate";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();
	$masterParams["dispChildCount"]= "1";
	$masterParams["hideChild"]= "0";
	$masterParams["dispInfo"]= "0";
	$masterParams["previewOnList"]= 1;
	$masterParams["previewOnAdd"]= 0;
	$masterParams["previewOnEdit"]= 0;
	$masterParams["previewOnView"]= 0;
	$masterParams["proceedLink"]= 0;

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["semakan_duplicate_detail"][0] = $masterParams;
				$masterTablesData["semakan_duplicate_detail"][0]["masterKeys"] = array();
	$masterTablesData["semakan_duplicate_detail"][0]["masterKeys"][]="birthCert";
				$masterTablesData["semakan_duplicate_detail"][0]["detailKeys"] = array();
	$masterTablesData["semakan_duplicate_detail"][0]["detailKeys"][]="birthCert";
		
// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_semakan_duplicate_detail()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sid,  name,  gender,  birthdate,  birthCert,  nationality,  eNo,  eYear,  eType,  s1,  s2,  s3,  s4,  s5,  s6,  s7";
$proto0["m_strFrom"] = "FROM exam_marking";
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
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate_detail"
));

$proto5["m_sql"] = "sid";
$proto5["m_srcTableName"] = "semakan_duplicate_detail";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate_detail"
));

$proto7["m_sql"] = "name";
$proto7["m_srcTableName"] = "semakan_duplicate_detail";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "gender",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate_detail"
));

$proto9["m_sql"] = "gender";
$proto9["m_srcTableName"] = "semakan_duplicate_detail";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "birthdate",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate_detail"
));

$proto11["m_sql"] = "birthdate";
$proto11["m_srcTableName"] = "semakan_duplicate_detail";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "birthCert",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate_detail"
));

$proto13["m_sql"] = "birthCert";
$proto13["m_srcTableName"] = "semakan_duplicate_detail";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "nationality",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate_detail"
));

$proto15["m_sql"] = "nationality";
$proto15["m_srcTableName"] = "semakan_duplicate_detail";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "eNo",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate_detail"
));

$proto17["m_sql"] = "eNo";
$proto17["m_srcTableName"] = "semakan_duplicate_detail";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate_detail"
));

$proto19["m_sql"] = "eYear";
$proto19["m_srcTableName"] = "semakan_duplicate_detail";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate_detail"
));

$proto21["m_sql"] = "eType";
$proto21["m_srcTableName"] = "semakan_duplicate_detail";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "s1",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate_detail"
));

$proto23["m_sql"] = "s1";
$proto23["m_srcTableName"] = "semakan_duplicate_detail";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "s2",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate_detail"
));

$proto25["m_sql"] = "s2";
$proto25["m_srcTableName"] = "semakan_duplicate_detail";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "s3",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate_detail"
));

$proto27["m_sql"] = "s3";
$proto27["m_srcTableName"] = "semakan_duplicate_detail";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "s4",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate_detail"
));

$proto29["m_sql"] = "s4";
$proto29["m_srcTableName"] = "semakan_duplicate_detail";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "s5",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate_detail"
));

$proto31["m_sql"] = "s5";
$proto31["m_srcTableName"] = "semakan_duplicate_detail";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "s6",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate_detail"
));

$proto33["m_sql"] = "s6";
$proto33["m_srcTableName"] = "semakan_duplicate_detail";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "s7",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate_detail"
));

$proto35["m_sql"] = "s7";
$proto35["m_srcTableName"] = "semakan_duplicate_detail";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto37=array();
$proto37["m_link"] = "SQLL_MAIN";
			$proto38=array();
$proto38["m_strName"] = "exam_marking";
$proto38["m_srcTableName"] = "semakan_duplicate_detail";
$proto38["m_columns"] = array();
$proto38["m_columns"][] = "sid";
$proto38["m_columns"][] = "name";
$proto38["m_columns"][] = "gender";
$proto38["m_columns"][] = "birthdate";
$proto38["m_columns"][] = "birthCert";
$proto38["m_columns"][] = "nationality";
$proto38["m_columns"][] = "sCode";
$proto38["m_columns"][] = "eNo";
$proto38["m_columns"][] = "eYear";
$proto38["m_columns"][] = "eType";
$proto38["m_columns"][] = "s1";
$proto38["m_columns"][] = "s2";
$proto38["m_columns"][] = "s3";
$proto38["m_columns"][] = "s4";
$proto38["m_columns"][] = "s5";
$proto38["m_columns"][] = "s6";
$proto38["m_columns"][] = "s7";
$obj = new SQLTable($proto38);

$proto37["m_table"] = $obj;
$proto37["m_sql"] = "exam_marking";
$proto37["m_alias"] = "";
$proto37["m_srcTableName"] = "semakan_duplicate_detail";
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

$proto37["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto37);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="semakan_duplicate_detail";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_semakan_duplicate_detail = createSqlQuery_semakan_duplicate_detail();



																

$tdatasemakan_duplicate_detail[".sqlquery"] = $queryData_semakan_duplicate_detail;

include_once(getabspath("include/semakan_duplicate_detail_events.php"));
$tableEvents["semakan_duplicate_detail"] = new eventclass_semakan_duplicate_detail;
$tdatasemakan_duplicate_detail[".hasEvents"] = true;

$query = &$queryData_semakan_duplicate_detail;
$table = "semakan_duplicate_detail";
// here goes EVENT_INIT_TABLE event


;
unset($query);
?>