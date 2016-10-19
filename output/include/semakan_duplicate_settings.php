<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasemakan_duplicate = array();
	$tdatasemakan_duplicate[".truncateText"] = true;
	$tdatasemakan_duplicate[".NumberOfChars"] = 80;
	$tdatasemakan_duplicate[".ShortName"] = "semakan_duplicate";
	$tdatasemakan_duplicate[".OwnerID"] = "";
	$tdatasemakan_duplicate[".OriginalTable"] = "exam_marking";

//	field labels
$fieldLabelssemakan_duplicate = array();
$fieldToolTipssemakan_duplicate = array();
$pageTitlessemakan_duplicate = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssemakan_duplicate["English"] = array();
	$fieldToolTipssemakan_duplicate["English"] = array();
	$pageTitlessemakan_duplicate["English"] = array();
	$fieldLabelssemakan_duplicate["English"]["sid"] = "Sid";
	$fieldToolTipssemakan_duplicate["English"]["sid"] = "";
	$fieldLabelssemakan_duplicate["English"]["name"] = "Nama Murid";
	$fieldToolTipssemakan_duplicate["English"]["name"] = "";
	$fieldLabelssemakan_duplicate["English"]["gender"] = "Jantina";
	$fieldToolTipssemakan_duplicate["English"]["gender"] = "";
	$fieldLabelssemakan_duplicate["English"]["birthdate"] = "Tarikh Lahir";
	$fieldToolTipssemakan_duplicate["English"]["birthdate"] = "";
	$fieldLabelssemakan_duplicate["English"]["birthCert"] = "Sijil Lahir";
	$fieldToolTipssemakan_duplicate["English"]["birthCert"] = "";
	$fieldLabelssemakan_duplicate["English"]["nationality"] = "WgNegara";
	$fieldToolTipssemakan_duplicate["English"]["nationality"] = "";
	$fieldLabelssemakan_duplicate["English"]["sCode"] = "Kod Sekolah";
	$fieldToolTipssemakan_duplicate["English"]["sCode"] = "";
	$fieldLabelssemakan_duplicate["English"]["eNo"] = "No Giliran";
	$fieldToolTipssemakan_duplicate["English"]["eNo"] = "";
	$fieldLabelssemakan_duplicate["English"]["eYear"] = "Tahun";
	$fieldToolTipssemakan_duplicate["English"]["eYear"] = "";
	$fieldLabelssemakan_duplicate["English"]["eType"] = "Peperiksaan";
	$fieldToolTipssemakan_duplicate["English"]["eType"] = "";
	$fieldLabelssemakan_duplicate["English"]["s1"] = "AS";
	$fieldToolTipssemakan_duplicate["English"]["s1"] = "";
	$fieldLabelssemakan_duplicate["English"]["s2"] = "BA";
	$fieldToolTipssemakan_duplicate["English"]["s2"] = "";
	$fieldLabelssemakan_duplicate["English"]["s3"] = "JIK";
	$fieldToolTipssemakan_duplicate["English"]["s3"] = "";
	$fieldLabelssemakan_duplicate["English"]["s4"] = "TF";
	$fieldToolTipssemakan_duplicate["English"]["s4"] = "";
	$fieldLabelssemakan_duplicate["English"]["s5"] = "TJ";
	$fieldToolTipssemakan_duplicate["English"]["s5"] = "";
	$fieldLabelssemakan_duplicate["English"]["s6"] = "UTH";
	$fieldToolTipssemakan_duplicate["English"]["s6"] = "";
	$fieldLabelssemakan_duplicate["English"]["s7"] = "PAFA";
	$fieldToolTipssemakan_duplicate["English"]["s7"] = "";
	$fieldLabelssemakan_duplicate["English"]["dup"] = "Duplicate";
	$fieldToolTipssemakan_duplicate["English"]["dup"] = "";
	$fieldLabelssemakan_duplicate["English"]["sZone"] = "Zon";
	$fieldToolTipssemakan_duplicate["English"]["sZone"] = "";
	if (count($fieldToolTipssemakan_duplicate["English"]))
		$tdatasemakan_duplicate[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssemakan_duplicate[""] = array();
	$fieldToolTipssemakan_duplicate[""] = array();
	$pageTitlessemakan_duplicate[""] = array();
	if (count($fieldToolTipssemakan_duplicate[""]))
		$tdatasemakan_duplicate[".isUseToolTips"] = true;
}


	$tdatasemakan_duplicate[".NCSearch"] = true;



$tdatasemakan_duplicate[".shortTableName"] = "semakan_duplicate";
$tdatasemakan_duplicate[".nSecOptions"] = 0;
$tdatasemakan_duplicate[".recsPerRowList"] = 1;
$tdatasemakan_duplicate[".recsPerRowPrint"] = 1;
$tdatasemakan_duplicate[".mainTableOwnerID"] = "";
$tdatasemakan_duplicate[".moveNext"] = 1;
$tdatasemakan_duplicate[".entityType"] = 1;

$tdatasemakan_duplicate[".strOriginalTableName"] = "exam_marking";




$tdatasemakan_duplicate[".showAddInPopup"] = false;

$tdatasemakan_duplicate[".showEditInPopup"] = false;

$tdatasemakan_duplicate[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasemakan_duplicate[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasemakan_duplicate[".fieldsForRegister"] = array();

$tdatasemakan_duplicate[".listAjax"] = false;

	$tdatasemakan_duplicate[".audit"] = false;

	$tdatasemakan_duplicate[".locking"] = false;



$tdatasemakan_duplicate[".list"] = true;






$tdatasemakan_duplicate[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatasemakan_duplicate[".searchSaving"] = false;
//

$tdatasemakan_duplicate[".showSearchPanel"] = true;
		$tdatasemakan_duplicate[".flexibleSearch"] = true;

if (isMobile())
	$tdatasemakan_duplicate[".isUseAjaxSuggest"] = false;
else
	$tdatasemakan_duplicate[".isUseAjaxSuggest"] = true;

$tdatasemakan_duplicate[".rowHighlite"] = true;


																				
$tdatasemakan_duplicate[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasemakan_duplicate[".isUseTimeForSearch"] = false;





$tdatasemakan_duplicate[".allSearchFields"] = array();
$tdatasemakan_duplicate[".filterFields"] = array();
$tdatasemakan_duplicate[".requiredSearchFields"] = array();

$tdatasemakan_duplicate[".allSearchFields"][] = "sZone";
	$tdatasemakan_duplicate[".allSearchFields"][] = "name";
	$tdatasemakan_duplicate[".allSearchFields"][] = "birthdate";
	$tdatasemakan_duplicate[".allSearchFields"][] = "birthCert";
	$tdatasemakan_duplicate[".allSearchFields"][] = "gender";
	$tdatasemakan_duplicate[".allSearchFields"][] = "nationality";
	$tdatasemakan_duplicate[".allSearchFields"][] = "sCode";
	$tdatasemakan_duplicate[".allSearchFields"][] = "eNo";
	$tdatasemakan_duplicate[".allSearchFields"][] = "s1";
	$tdatasemakan_duplicate[".allSearchFields"][] = "s2";
	$tdatasemakan_duplicate[".allSearchFields"][] = "s3";
	$tdatasemakan_duplicate[".allSearchFields"][] = "s4";
	$tdatasemakan_duplicate[".allSearchFields"][] = "s5";
	$tdatasemakan_duplicate[".allSearchFields"][] = "s6";
	$tdatasemakan_duplicate[".allSearchFields"][] = "s7";
	$tdatasemakan_duplicate[".allSearchFields"][] = "eYear";
	$tdatasemakan_duplicate[".allSearchFields"][] = "eType";
	

$tdatasemakan_duplicate[".googleLikeFields"] = array();
$tdatasemakan_duplicate[".googleLikeFields"][] = "name";
$tdatasemakan_duplicate[".googleLikeFields"][] = "sZone";

$tdatasemakan_duplicate[".panelSearchFields"] = array();
$tdatasemakan_duplicate[".searchPanelOptions"] = array();
$tdatasemakan_duplicate[".panelSearchFields"][] = "sZone";
	$tdatasemakan_duplicate[".panelSearchFields"][] = "name";
	$tdatasemakan_duplicate[".panelSearchFields"][] = "sCode";
	$tdatasemakan_duplicate[".panelSearchFields"][] = "eYear";
	
$tdatasemakan_duplicate[".advSearchFields"] = array();
$tdatasemakan_duplicate[".advSearchFields"][] = "sZone";
$tdatasemakan_duplicate[".advSearchFields"][] = "name";
$tdatasemakan_duplicate[".advSearchFields"][] = "birthdate";
$tdatasemakan_duplicate[".advSearchFields"][] = "birthCert";
$tdatasemakan_duplicate[".advSearchFields"][] = "gender";
$tdatasemakan_duplicate[".advSearchFields"][] = "nationality";
$tdatasemakan_duplicate[".advSearchFields"][] = "sCode";
$tdatasemakan_duplicate[".advSearchFields"][] = "eNo";
$tdatasemakan_duplicate[".advSearchFields"][] = "s1";
$tdatasemakan_duplicate[".advSearchFields"][] = "s2";
$tdatasemakan_duplicate[".advSearchFields"][] = "s3";
$tdatasemakan_duplicate[".advSearchFields"][] = "s4";
$tdatasemakan_duplicate[".advSearchFields"][] = "s5";
$tdatasemakan_duplicate[".advSearchFields"][] = "s6";
$tdatasemakan_duplicate[".advSearchFields"][] = "s7";
$tdatasemakan_duplicate[".advSearchFields"][] = "eYear";
$tdatasemakan_duplicate[".advSearchFields"][] = "eType";

$tdatasemakan_duplicate[".tableType"] = "list";

$tdatasemakan_duplicate[".printerPageOrientation"] = 0;
$tdatasemakan_duplicate[".nPrinterPageScale"] = 100;

$tdatasemakan_duplicate[".nPrinterSplitRecords"] = 40;

$tdatasemakan_duplicate[".nPrinterPDFSplitRecords"] = 40;



$tdatasemakan_duplicate[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatasemakan_duplicate[".pageSize"] = 20;

$tdatasemakan_duplicate[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasemakan_duplicate[".strOrderBy"] = $tstrOrderBy;

$tdatasemakan_duplicate[".orderindexes"] = array();

$tdatasemakan_duplicate[".sqlHead"] = "SELECT sid,  name,  gender,  birthdate,  birthCert,  nationality,  sCode,  sZone,  eNo,  eYear,  eType,  s1,  s2,  s3,  s4,  s5,  s6,  s7,  dup";
$tdatasemakan_duplicate[".sqlFrom"] = "FROM (  	SELECT  sid,  name,  gender,  birthdate,  birthCert,  nationality,  exam_marking.sCode,  eNo,  eYear,  eType,  s1,  s2,  s3,  s4,  s5,  s6,  s7,  sZone,  COUNT(birthCert) AS dup  FROM exam_marking  LEFT JOIN school ON exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType  WHERE exam_marking.eType ='PSRA'  GROUP BY exam_marking.birthCert  ) AS Sub1";
$tdatasemakan_duplicate[".sqlWhereExpr"] = "dup >1";
$tdatasemakan_duplicate[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasemakan_duplicate[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasemakan_duplicate[".arrGroupsPerPage"] = $arrGPP;

$tdatasemakan_duplicate[".highlightSearchResults"] = true;

$tableKeyssemakan_duplicate = array();
$tableKeyssemakan_duplicate[] = "sid";
$tdatasemakan_duplicate[".Keys"] = $tableKeyssemakan_duplicate;

$tdatasemakan_duplicate[".listFields"] = array();
$tdatasemakan_duplicate[".listFields"][] = "name";
$tdatasemakan_duplicate[".listFields"][] = "birthdate";
$tdatasemakan_duplicate[".listFields"][] = "birthCert";
$tdatasemakan_duplicate[".listFields"][] = "gender";
$tdatasemakan_duplicate[".listFields"][] = "nationality";
$tdatasemakan_duplicate[".listFields"][] = "sCode";
$tdatasemakan_duplicate[".listFields"][] = "eNo";
$tdatasemakan_duplicate[".listFields"][] = "s1";
$tdatasemakan_duplicate[".listFields"][] = "s2";
$tdatasemakan_duplicate[".listFields"][] = "s3";
$tdatasemakan_duplicate[".listFields"][] = "s4";
$tdatasemakan_duplicate[".listFields"][] = "s5";
$tdatasemakan_duplicate[".listFields"][] = "s6";
$tdatasemakan_duplicate[".listFields"][] = "s7";
$tdatasemakan_duplicate[".listFields"][] = "eYear";
$tdatasemakan_duplicate[".listFields"][] = "eType";
$tdatasemakan_duplicate[".listFields"][] = "dup";

$tdatasemakan_duplicate[".hideMobileList"] = array();


$tdatasemakan_duplicate[".viewFields"] = array();

$tdatasemakan_duplicate[".addFields"] = array();

$tdatasemakan_duplicate[".masterListFields"] = array();
$tdatasemakan_duplicate[".masterListFields"][] = "sZone";
$tdatasemakan_duplicate[".masterListFields"][] = "sid";
$tdatasemakan_duplicate[".masterListFields"][] = "name";
$tdatasemakan_duplicate[".masterListFields"][] = "birthdate";
$tdatasemakan_duplicate[".masterListFields"][] = "birthCert";
$tdatasemakan_duplicate[".masterListFields"][] = "gender";
$tdatasemakan_duplicate[".masterListFields"][] = "nationality";
$tdatasemakan_duplicate[".masterListFields"][] = "sCode";
$tdatasemakan_duplicate[".masterListFields"][] = "eNo";
$tdatasemakan_duplicate[".masterListFields"][] = "s1";
$tdatasemakan_duplicate[".masterListFields"][] = "s2";
$tdatasemakan_duplicate[".masterListFields"][] = "s3";
$tdatasemakan_duplicate[".masterListFields"][] = "s4";
$tdatasemakan_duplicate[".masterListFields"][] = "s5";
$tdatasemakan_duplicate[".masterListFields"][] = "s6";
$tdatasemakan_duplicate[".masterListFields"][] = "s7";
$tdatasemakan_duplicate[".masterListFields"][] = "eYear";
$tdatasemakan_duplicate[".masterListFields"][] = "eType";
$tdatasemakan_duplicate[".masterListFields"][] = "dup";

$tdatasemakan_duplicate[".inlineAddFields"] = array();

$tdatasemakan_duplicate[".editFields"] = array();

$tdatasemakan_duplicate[".inlineEditFields"] = array();

$tdatasemakan_duplicate[".exportFields"] = array();

$tdatasemakan_duplicate[".importFields"] = array();

$tdatasemakan_duplicate[".printFields"] = array();

//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("semakan_duplicate","sid");
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








	$tdatasemakan_duplicate["sid"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("semakan_duplicate","name");
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




	$tdatasemakan_duplicate["name"] = $fdata;
//	gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "gender";
	$fdata["GoodName"] = "gender";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("semakan_duplicate","gender");
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




	$tdatasemakan_duplicate["gender"] = $fdata;
//	birthdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "birthdate";
	$fdata["GoodName"] = "birthdate";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("semakan_duplicate","birthdate");
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




	$tdatasemakan_duplicate["birthdate"] = $fdata;
//	birthCert
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "birthCert";
	$fdata["GoodName"] = "birthCert";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("semakan_duplicate","birthCert");
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




	$tdatasemakan_duplicate["birthCert"] = $fdata;
//	nationality
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "nationality";
	$fdata["GoodName"] = "nationality";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("semakan_duplicate","nationality");
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




	$tdatasemakan_duplicate["nationality"] = $fdata;
//	sCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sCode";
	$fdata["GoodName"] = "sCode";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("semakan_duplicate","sCode");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatasemakan_duplicate["sCode"] = $fdata;
//	sZone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "sZone";
	$fdata["GoodName"] = "sZone";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("semakan_duplicate","sZone");
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




	$tdatasemakan_duplicate["sZone"] = $fdata;
//	eNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "eNo";
	$fdata["GoodName"] = "eNo";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("semakan_duplicate","eNo");
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




	$tdatasemakan_duplicate["eNo"] = $fdata;
//	eYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "eYear";
	$fdata["GoodName"] = "eYear";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("semakan_duplicate","eYear");
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




	$tdatasemakan_duplicate["eYear"] = $fdata;
//	eType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "eType";
	$fdata["GoodName"] = "eType";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("semakan_duplicate","eType");
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




	$tdatasemakan_duplicate["eType"] = $fdata;
//	s1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "s1";
	$fdata["GoodName"] = "s1";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("semakan_duplicate","s1");
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




	$tdatasemakan_duplicate["s1"] = $fdata;
//	s2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "s2";
	$fdata["GoodName"] = "s2";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("semakan_duplicate","s2");
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




	$tdatasemakan_duplicate["s2"] = $fdata;
//	s3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "s3";
	$fdata["GoodName"] = "s3";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("semakan_duplicate","s3");
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




	$tdatasemakan_duplicate["s3"] = $fdata;
//	s4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "s4";
	$fdata["GoodName"] = "s4";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("semakan_duplicate","s4");
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




	$tdatasemakan_duplicate["s4"] = $fdata;
//	s5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "s5";
	$fdata["GoodName"] = "s5";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("semakan_duplicate","s5");
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




	$tdatasemakan_duplicate["s5"] = $fdata;
//	s6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "s6";
	$fdata["GoodName"] = "s6";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("semakan_duplicate","s6");
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




	$tdatasemakan_duplicate["s6"] = $fdata;
//	s7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "s7";
	$fdata["GoodName"] = "s7";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("semakan_duplicate","s7");
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




	$tdatasemakan_duplicate["s7"] = $fdata;
//	dup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "dup";
	$fdata["GoodName"] = "dup";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("semakan_duplicate","dup");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
	
		$fdata["strField"] = "dup";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "dup";

	
	
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








	$tdatasemakan_duplicate["dup"] = $fdata;


$tables_data["semakan_duplicate"]=&$tdatasemakan_duplicate;
$field_labels["semakan_duplicate"] = &$fieldLabelssemakan_duplicate;
$fieldToolTips["semakan_duplicate"] = &$fieldToolTipssemakan_duplicate;
$page_titles["semakan_duplicate"] = &$pageTitlessemakan_duplicate;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["semakan_duplicate"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["semakan_duplicate"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_semakan_duplicate()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sid,  name,  gender,  birthdate,  birthCert,  nationality,  sCode,  sZone,  eNo,  eYear,  eType,  s1,  s2,  s3,  s4,  s5,  s6,  s7,  dup";
$proto0["m_strFrom"] = "FROM (  	SELECT  sid,  name,  gender,  birthdate,  birthCert,  nationality,  exam_marking.sCode,  eNo,  eYear,  eType,  s1,  s2,  s3,  s4,  s5,  s6,  s7,  sZone,  COUNT(birthCert) AS dup  FROM exam_marking  LEFT JOIN school ON exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType  WHERE exam_marking.eType ='PSRA'  GROUP BY exam_marking.birthCert  ) AS Sub1";
$proto0["m_strWhere"] = "dup >1";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "dup >1";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "dup",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "semakan_duplicate"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = ">1";
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
	"m_strTable" => "Sub1",
	"m_srcTableName" => "semakan_duplicate"
));

$proto5["m_sql"] = "sid";
$proto5["m_srcTableName"] = "semakan_duplicate";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "semakan_duplicate"
));

$proto7["m_sql"] = "name";
$proto7["m_srcTableName"] = "semakan_duplicate";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "gender",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "semakan_duplicate"
));

$proto9["m_sql"] = "gender";
$proto9["m_srcTableName"] = "semakan_duplicate";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "birthdate",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "semakan_duplicate"
));

$proto11["m_sql"] = "birthdate";
$proto11["m_srcTableName"] = "semakan_duplicate";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "birthCert",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "semakan_duplicate"
));

$proto13["m_sql"] = "birthCert";
$proto13["m_srcTableName"] = "semakan_duplicate";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "nationality",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "semakan_duplicate"
));

$proto15["m_sql"] = "nationality";
$proto15["m_srcTableName"] = "semakan_duplicate";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "semakan_duplicate"
));

$proto17["m_sql"] = "sCode";
$proto17["m_srcTableName"] = "semakan_duplicate";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sZone"
));

$proto19["m_sql"] = "sZone";
$proto19["m_srcTableName"] = "semakan_duplicate";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "eNo",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "semakan_duplicate"
));

$proto21["m_sql"] = "eNo";
$proto21["m_srcTableName"] = "semakan_duplicate";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "semakan_duplicate"
));

$proto23["m_sql"] = "eYear";
$proto23["m_srcTableName"] = "semakan_duplicate";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "semakan_duplicate"
));

$proto25["m_sql"] = "eType";
$proto25["m_srcTableName"] = "semakan_duplicate";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "s1",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "semakan_duplicate"
));

$proto27["m_sql"] = "s1";
$proto27["m_srcTableName"] = "semakan_duplicate";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "s2",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "semakan_duplicate"
));

$proto29["m_sql"] = "s2";
$proto29["m_srcTableName"] = "semakan_duplicate";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "s3",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "semakan_duplicate"
));

$proto31["m_sql"] = "s3";
$proto31["m_srcTableName"] = "semakan_duplicate";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "s4",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "semakan_duplicate"
));

$proto33["m_sql"] = "s4";
$proto33["m_srcTableName"] = "semakan_duplicate";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "s5",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "semakan_duplicate"
));

$proto35["m_sql"] = "s5";
$proto35["m_srcTableName"] = "semakan_duplicate";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "s6",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "semakan_duplicate"
));

$proto37["m_sql"] = "s6";
$proto37["m_srcTableName"] = "semakan_duplicate";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLField(array(
	"m_strName" => "s7",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "semakan_duplicate"
));

$proto39["m_sql"] = "s7";
$proto39["m_srcTableName"] = "semakan_duplicate";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLField(array(
	"m_strName" => "dup",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "semakan_duplicate"
));

$proto41["m_sql"] = "dup";
$proto41["m_srcTableName"] = "semakan_duplicate";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto43=array();
$proto43["m_link"] = "SQLL_MAIN";
			$proto44=array();
$proto44["m_strHead"] = "  	SELECT";
$proto44["m_strFieldList"] = "sid,  name,  gender,  birthdate,  birthCert,  nationality,  exam_marking.sCode,  eNo,  eYear,  eType,  s1,  s2,  s3,  s4,  s5,  s6,  s7,  sZone,  COUNT(birthCert) AS dup";
$proto44["m_strFrom"] = "FROM exam_marking  LEFT JOIN school ON exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType";
$proto44["m_strWhere"] = "exam_marking.eType ='PSRA'";
$proto44["m_strOrderBy"] = "";
$proto44["m_strTail"] = "";
			$proto44["cipherer"] = null;
$proto45=array();
$proto45["m_sql"] = "exam_marking.eType ='PSRA'";
$proto45["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate"
));

$proto45["m_column"]=$obj;
$proto45["m_contained"] = array();
$proto45["m_strCase"] = "='PSRA'";
$proto45["m_havingmode"] = false;
$proto45["m_inBrackets"] = false;
$proto45["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto45);

$proto44["m_where"] = $obj;
$proto47=array();
$proto47["m_sql"] = "";
$proto47["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto47["m_column"]=$obj;
$proto47["m_contained"] = array();
$proto47["m_strCase"] = "";
$proto47["m_havingmode"] = false;
$proto47["m_inBrackets"] = false;
$proto47["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto47);

$proto44["m_having"] = $obj;
$proto44["m_fieldlist"] = array();
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate"
));

$proto49["m_sql"] = "sid";
$proto49["m_srcTableName"] = "semakan_duplicate";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto44["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate"
));

$proto51["m_sql"] = "name";
$proto51["m_srcTableName"] = "semakan_duplicate";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto44["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "gender",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate"
));

$proto53["m_sql"] = "gender";
$proto53["m_srcTableName"] = "semakan_duplicate";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto44["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "birthdate",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate"
));

$proto55["m_sql"] = "birthdate";
$proto55["m_srcTableName"] = "semakan_duplicate";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto44["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "birthCert",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate"
));

$proto57["m_sql"] = "birthCert";
$proto57["m_srcTableName"] = "semakan_duplicate";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto44["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "nationality",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate"
));

$proto59["m_sql"] = "nationality";
$proto59["m_srcTableName"] = "semakan_duplicate";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto44["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate"
));

$proto61["m_sql"] = "exam_marking.sCode";
$proto61["m_srcTableName"] = "semakan_duplicate";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto44["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "eNo",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate"
));

$proto63["m_sql"] = "eNo";
$proto63["m_srcTableName"] = "semakan_duplicate";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto44["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate"
));

$proto65["m_sql"] = "eYear";
$proto65["m_srcTableName"] = "semakan_duplicate";
$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto44["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate"
));

$proto67["m_sql"] = "eType";
$proto67["m_srcTableName"] = "semakan_duplicate";
$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto44["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "s1",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate"
));

$proto69["m_sql"] = "s1";
$proto69["m_srcTableName"] = "semakan_duplicate";
$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto44["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "s2",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate"
));

$proto71["m_sql"] = "s2";
$proto71["m_srcTableName"] = "semakan_duplicate";
$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto44["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "s3",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate"
));

$proto73["m_sql"] = "s3";
$proto73["m_srcTableName"] = "semakan_duplicate";
$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto44["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "s4",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate"
));

$proto75["m_sql"] = "s4";
$proto75["m_srcTableName"] = "semakan_duplicate";
$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "";
$obj = new SQLFieldListItem($proto75);

$proto44["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "s5",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate"
));

$proto77["m_sql"] = "s5";
$proto77["m_srcTableName"] = "semakan_duplicate";
$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto44["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLField(array(
	"m_strName" => "s6",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate"
));

$proto79["m_sql"] = "s6";
$proto79["m_srcTableName"] = "semakan_duplicate";
$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "";
$obj = new SQLFieldListItem($proto79);

$proto44["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLField(array(
	"m_strName" => "s7",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate"
));

$proto81["m_sql"] = "s7";
$proto81["m_srcTableName"] = "semakan_duplicate";
$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "";
$obj = new SQLFieldListItem($proto81);

$proto44["m_fieldlist"][]=$obj;
						$proto83=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sZone"
));

$proto83["m_sql"] = "sZone";
$proto83["m_srcTableName"] = "semakan_duplicate";
$proto83["m_expr"]=$obj;
$proto83["m_alias"] = "";
$obj = new SQLFieldListItem($proto83);

$proto44["m_fieldlist"][]=$obj;
						$proto85=array();
			$proto86=array();
$proto86["m_functiontype"] = "SQLF_COUNT";
$proto86["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "birthCert",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate"
));

$proto86["m_arguments"][]=$obj;
$proto86["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto86);

$proto85["m_sql"] = "COUNT(birthCert)";
$proto85["m_srcTableName"] = "semakan_duplicate";
$proto85["m_expr"]=$obj;
$proto85["m_alias"] = "dup";
$obj = new SQLFieldListItem($proto85);

$proto44["m_fieldlist"][]=$obj;
$proto44["m_fromlist"] = array();
												$proto88=array();
$proto88["m_link"] = "SQLL_MAIN";
			$proto89=array();
$proto89["m_strName"] = "exam_marking";
$proto89["m_srcTableName"] = "semakan_duplicate";
$proto89["m_columns"] = array();
$proto89["m_columns"][] = "sid";
$proto89["m_columns"][] = "name";
$proto89["m_columns"][] = "gender";
$proto89["m_columns"][] = "birthdate";
$proto89["m_columns"][] = "birthCert";
$proto89["m_columns"][] = "nationality";
$proto89["m_columns"][] = "sCode";
$proto89["m_columns"][] = "eNo";
$proto89["m_columns"][] = "eYear";
$proto89["m_columns"][] = "eType";
$proto89["m_columns"][] = "s1";
$proto89["m_columns"][] = "s2";
$proto89["m_columns"][] = "s3";
$proto89["m_columns"][] = "s4";
$proto89["m_columns"][] = "s5";
$proto89["m_columns"][] = "s6";
$proto89["m_columns"][] = "s7";
$obj = new SQLTable($proto89);

$proto88["m_table"] = $obj;
$proto88["m_sql"] = "exam_marking";
$proto88["m_alias"] = "";
$proto88["m_srcTableName"] = "semakan_duplicate";
$proto90=array();
$proto90["m_sql"] = "";
$proto90["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto90["m_column"]=$obj;
$proto90["m_contained"] = array();
$proto90["m_strCase"] = "";
$proto90["m_havingmode"] = false;
$proto90["m_inBrackets"] = false;
$proto90["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto90);

$proto88["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto88);

$proto44["m_fromlist"][]=$obj;
												$proto92=array();
$proto92["m_link"] = "SQLL_LEFTJOIN";
			$proto93=array();
$proto93["m_strName"] = "school";
$proto93["m_srcTableName"] = "semakan_duplicate";
$proto93["m_columns"] = array();
$proto93["m_columns"][] = "sno";
$proto93["m_columns"][] = "sName";
$proto93["m_columns"][] = "sCenter";
$proto93["m_columns"][] = "sCode";
$proto93["m_columns"][] = "sZone";
$proto93["m_columns"][] = "sType";
$obj = new SQLTable($proto93);

$proto92["m_table"] = $obj;
$proto92["m_sql"] = "LEFT JOIN school ON exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType";
$proto92["m_alias"] = "";
$proto92["m_srcTableName"] = "semakan_duplicate";
$proto94=array();
$proto94["m_sql"] = "exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType";
$proto94["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType"
));

$proto94["m_column"]=$obj;
$proto94["m_contained"] = array();
						$proto96=array();
$proto96["m_sql"] = "exam_marking.sCode = school.sCode";
$proto96["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate"
));

$proto96["m_column"]=$obj;
$proto96["m_contained"] = array();
$proto96["m_strCase"] = "= school.sCode";
$proto96["m_havingmode"] = false;
$proto96["m_inBrackets"] = false;
$proto96["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto96);

			$proto94["m_contained"][]=$obj;
						$proto98=array();
$proto98["m_sql"] = "exam_marking.eType = school.sType";
$proto98["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate"
));

$proto98["m_column"]=$obj;
$proto98["m_contained"] = array();
$proto98["m_strCase"] = "= school.sType";
$proto98["m_havingmode"] = false;
$proto98["m_inBrackets"] = false;
$proto98["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto98);

			$proto94["m_contained"][]=$obj;
$proto94["m_strCase"] = "";
$proto94["m_havingmode"] = false;
$proto94["m_inBrackets"] = false;
$proto94["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto94);

$proto92["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto92);

$proto44["m_fromlist"][]=$obj;
$proto44["m_groupby"] = array();
												$proto100=array();
						$obj = new SQLField(array(
	"m_strName" => "birthCert",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_duplicate"
));

$proto100["m_column"]=$obj;
$obj = new SQLGroupByItem($proto100);

$proto44["m_groupby"][]=$obj;
$proto44["m_orderby"] = array();
$proto44["m_srcTableName"]="semakan_duplicate";		
$obj = new SQLQuery($proto44);

$proto43["m_table"] = $obj;
$proto43["m_sql"] = "(  	SELECT  sid,  name,  gender,  birthdate,  birthCert,  nationality,  exam_marking.sCode,  eNo,  eYear,  eType,  s1,  s2,  s3,  s4,  s5,  s6,  s7,  sZone,  COUNT(birthCert) AS dup  FROM exam_marking  LEFT JOIN school ON exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType  WHERE exam_marking.eType ='PSRA'  GROUP BY exam_marking.birthCert  ) AS Sub1";
$proto43["m_alias"] = "Sub1";
$proto43["m_srcTableName"] = "semakan_duplicate";
$proto102=array();
$proto102["m_sql"] = "";
$proto102["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto102["m_column"]=$obj;
$proto102["m_contained"] = array();
$proto102["m_strCase"] = "";
$proto102["m_havingmode"] = false;
$proto102["m_inBrackets"] = false;
$proto102["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto102);

$proto43["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto43);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="semakan_duplicate";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_semakan_duplicate = createSqlQuery_semakan_duplicate();



																			

$tdatasemakan_duplicate[".sqlquery"] = $queryData_semakan_duplicate;

include_once(getabspath("include/semakan_duplicate_events.php"));
$tableEvents["semakan_duplicate"] = new eventclass_semakan_duplicate;
$tdatasemakan_duplicate[".hasEvents"] = true;

$query = &$queryData_semakan_duplicate;
$table = "semakan_duplicate";
// here goes EVENT_INIT_TABLE event


global $conn;
//only PPTAD zon can view their own zon
$year=date('Y');
$alevel=$_SESSION['alevel'];
$zon=$_SESSION['zon'];
if($zon!==NULL && $alevel==1){
$query->addWhere("sZone='".$zon."' AND eYear='"  .$year."'");
};
;
unset($query);
?>