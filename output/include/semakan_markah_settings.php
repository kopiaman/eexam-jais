<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasemakan_markah = array();	
	$tdatasemakan_markah[".truncateText"] = true;
	$tdatasemakan_markah[".NumberOfChars"] = 80; 
	$tdatasemakan_markah[".ShortName"] = "semakan_markah";
	$tdatasemakan_markah[".OwnerID"] = "";
	$tdatasemakan_markah[".OriginalTable"] = "exam_marking";

//	field labels
$fieldLabelssemakan_markah = array();
$fieldToolTipssemakan_markah = array();
$pageTitlessemakan_markah = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssemakan_markah["English"] = array();
	$fieldToolTipssemakan_markah["English"] = array();
	$pageTitlessemakan_markah["English"] = array();
	$fieldLabelssemakan_markah["English"]["sid"] = "Sid";
	$fieldToolTipssemakan_markah["English"]["sid"] = "";
	$fieldLabelssemakan_markah["English"]["name"] = "Nama Murid";
	$fieldToolTipssemakan_markah["English"]["name"] = "";
	$fieldLabelssemakan_markah["English"]["gender"] = "Jantina";
	$fieldToolTipssemakan_markah["English"]["gender"] = "";
	$fieldLabelssemakan_markah["English"]["birthdate"] = "Tarikh Lahir";
	$fieldToolTipssemakan_markah["English"]["birthdate"] = "";
	$fieldLabelssemakan_markah["English"]["birthCert"] = "Sijil Lahir";
	$fieldToolTipssemakan_markah["English"]["birthCert"] = "";
	$fieldLabelssemakan_markah["English"]["nationality"] = "WgNegara";
	$fieldToolTipssemakan_markah["English"]["nationality"] = "";
	$fieldLabelssemakan_markah["English"]["sCode"] = "Kod Sekolah";
	$fieldToolTipssemakan_markah["English"]["sCode"] = "";
	$fieldLabelssemakan_markah["English"]["eNo"] = "No Giliran";
	$fieldToolTipssemakan_markah["English"]["eNo"] = "";
	$fieldLabelssemakan_markah["English"]["eYear"] = "Tahun";
	$fieldToolTipssemakan_markah["English"]["eYear"] = "";
	$fieldLabelssemakan_markah["English"]["eType"] = "Peperiksaan";
	$fieldToolTipssemakan_markah["English"]["eType"] = "";
	$fieldLabelssemakan_markah["English"]["s1"] = "AS";
	$fieldToolTipssemakan_markah["English"]["s1"] = "";
	$fieldLabelssemakan_markah["English"]["s2"] = "BA";
	$fieldToolTipssemakan_markah["English"]["s2"] = "";
	$fieldLabelssemakan_markah["English"]["s3"] = "JIK";
	$fieldToolTipssemakan_markah["English"]["s3"] = "";
	$fieldLabelssemakan_markah["English"]["s4"] = "TF";
	$fieldToolTipssemakan_markah["English"]["s4"] = "";
	$fieldLabelssemakan_markah["English"]["s5"] = "TJ";
	$fieldToolTipssemakan_markah["English"]["s5"] = "";
	$fieldLabelssemakan_markah["English"]["s6"] = "UTH";
	$fieldToolTipssemakan_markah["English"]["s6"] = "";
	$fieldLabelssemakan_markah["English"]["s7"] = "PAFA";
	$fieldToolTipssemakan_markah["English"]["s7"] = "";
	if (count($fieldToolTipssemakan_markah["English"]))
		$tdatasemakan_markah[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssemakan_markah[""] = array();
	$fieldToolTipssemakan_markah[""] = array();
	$pageTitlessemakan_markah[""] = array();
	if (count($fieldToolTipssemakan_markah[""]))
		$tdatasemakan_markah[".isUseToolTips"] = true;
}
	
	
	$tdatasemakan_markah[".NCSearch"] = true;



$tdatasemakan_markah[".shortTableName"] = "semakan_markah";
$tdatasemakan_markah[".nSecOptions"] = 0;
$tdatasemakan_markah[".recsPerRowList"] = 1;
$tdatasemakan_markah[".recsPerRowPrint"] = 1;
$tdatasemakan_markah[".mainTableOwnerID"] = "";
$tdatasemakan_markah[".moveNext"] = 1;
$tdatasemakan_markah[".entityType"] = 1;

$tdatasemakan_markah[".strOriginalTableName"] = "exam_marking";




$tdatasemakan_markah[".showAddInPopup"] = false;

$tdatasemakan_markah[".showEditInPopup"] = false;

$tdatasemakan_markah[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasemakan_markah[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasemakan_markah[".fieldsForRegister"] = array();

$tdatasemakan_markah[".listAjax"] = false;

	$tdatasemakan_markah[".audit"] = false;

	$tdatasemakan_markah[".locking"] = false;



$tdatasemakan_markah[".list"] = true;

$tdatasemakan_markah[".inlineEdit"] = true;





$tdatasemakan_markah[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatasemakan_markah[".searchSaving"] = false;
//

$tdatasemakan_markah[".showSearchPanel"] = true;
		$tdatasemakan_markah[".flexibleSearch"] = true;		

if (isMobile())
	$tdatasemakan_markah[".isUseAjaxSuggest"] = false;
else 
	$tdatasemakan_markah[".isUseAjaxSuggest"] = true;

$tdatasemakan_markah[".rowHighlite"] = true;



$tdatasemakan_markah[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasemakan_markah[".isUseTimeForSearch"] = false;





$tdatasemakan_markah[".allSearchFields"] = array();
$tdatasemakan_markah[".filterFields"] = array();
$tdatasemakan_markah[".requiredSearchFields"] = array();

$tdatasemakan_markah[".allSearchFields"][] = "name";
	$tdatasemakan_markah[".allSearchFields"][] = "birthdate";
	$tdatasemakan_markah[".allSearchFields"][] = "birthCert";
	$tdatasemakan_markah[".allSearchFields"][] = "gender";
	$tdatasemakan_markah[".allSearchFields"][] = "nationality";
	$tdatasemakan_markah[".allSearchFields"][] = "sCode";
	$tdatasemakan_markah[".allSearchFields"][] = "eNo";
	$tdatasemakan_markah[".allSearchFields"][] = "s1";
	$tdatasemakan_markah[".allSearchFields"][] = "s2";
	$tdatasemakan_markah[".allSearchFields"][] = "s3";
	$tdatasemakan_markah[".allSearchFields"][] = "s4";
	$tdatasemakan_markah[".allSearchFields"][] = "s5";
	$tdatasemakan_markah[".allSearchFields"][] = "s6";
	$tdatasemakan_markah[".allSearchFields"][] = "s7";
	$tdatasemakan_markah[".allSearchFields"][] = "eYear";
	$tdatasemakan_markah[".allSearchFields"][] = "eType";
	

$tdatasemakan_markah[".googleLikeFields"] = array();
$tdatasemakan_markah[".googleLikeFields"][] = "name";

$tdatasemakan_markah[".panelSearchFields"] = array();
$tdatasemakan_markah[".searchPanelOptions"] = array();
$tdatasemakan_markah[".panelSearchFields"][] = "name";
	$tdatasemakan_markah[".panelSearchFields"][] = "sCode";
	$tdatasemakan_markah[".panelSearchFields"][] = "s1";
	$tdatasemakan_markah[".panelSearchFields"][] = "s2";
	$tdatasemakan_markah[".panelSearchFields"][] = "s3";
	$tdatasemakan_markah[".panelSearchFields"][] = "s4";
	$tdatasemakan_markah[".panelSearchFields"][] = "s5";
	$tdatasemakan_markah[".panelSearchFields"][] = "s6";
	$tdatasemakan_markah[".panelSearchFields"][] = "s7";
	$tdatasemakan_markah[".panelSearchFields"][] = "eYear";
	
$tdatasemakan_markah[".advSearchFields"] = array();
$tdatasemakan_markah[".advSearchFields"][] = "name";
$tdatasemakan_markah[".advSearchFields"][] = "birthdate";
$tdatasemakan_markah[".advSearchFields"][] = "birthCert";
$tdatasemakan_markah[".advSearchFields"][] = "gender";
$tdatasemakan_markah[".advSearchFields"][] = "nationality";
$tdatasemakan_markah[".advSearchFields"][] = "sCode";
$tdatasemakan_markah[".advSearchFields"][] = "eNo";
$tdatasemakan_markah[".advSearchFields"][] = "s1";
$tdatasemakan_markah[".advSearchFields"][] = "s2";
$tdatasemakan_markah[".advSearchFields"][] = "s3";
$tdatasemakan_markah[".advSearchFields"][] = "s4";
$tdatasemakan_markah[".advSearchFields"][] = "s5";
$tdatasemakan_markah[".advSearchFields"][] = "s6";
$tdatasemakan_markah[".advSearchFields"][] = "s7";
$tdatasemakan_markah[".advSearchFields"][] = "eYear";
$tdatasemakan_markah[".advSearchFields"][] = "eType";

$tdatasemakan_markah[".tableType"] = "list";

$tdatasemakan_markah[".printerPageOrientation"] = 0;
$tdatasemakan_markah[".nPrinterPageScale"] = 100;

$tdatasemakan_markah[".nPrinterSplitRecords"] = 40;

$tdatasemakan_markah[".nPrinterPDFSplitRecords"] = 40;



$tdatasemakan_markah[".geocodingEnabled"] = false;




	





// view page pdf

// print page pdf


$tdatasemakan_markah[".pageSize"] = 20;

$tdatasemakan_markah[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasemakan_markah[".strOrderBy"] = $tstrOrderBy;

$tdatasemakan_markah[".orderindexes"] = array();

$tdatasemakan_markah[".sqlHead"] = "SELECT sid,  	name,  	gender,  	birthdate,  	birthCert,  	nationality,  	sCode,  	eNo,  	eYear,  	eType,  	s1,  	s2,  	s3,  	s4,  	s5,  	s6,  	s7";
$tdatasemakan_markah[".sqlFrom"] = "FROM exam_marking";
$tdatasemakan_markah[".sqlWhereExpr"] = "s1 IS NULL OR s2 IS NULL OR s3 IS NULL OR s4 IS NULL OR s5 IS NULL OR s6 IS NULL OR s7 IS NULL  OR s1 >100 OR s2 >100 OR s3 >100 OR s4 >100 OR s5 >100 OR s6 >100   OR sCode IS NULL OR eNo IS NULL OR eYear IS NULL OR eType IS NULL OR name IS NULL OR gender IS NULL  OR birthdate IS NULL OR birthCert IS NULL OR nationality IS NULL";
$tdatasemakan_markah[".sqlTail"] = "";









//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasemakan_markah[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasemakan_markah[".arrGroupsPerPage"] = $arrGPP;

$tdatasemakan_markah[".highlightSearchResults"] = true;

$tableKeyssemakan_markah = array();
$tableKeyssemakan_markah[] = "sid";
$tdatasemakan_markah[".Keys"] = $tableKeyssemakan_markah;

$tdatasemakan_markah[".listFields"] = array();
$tdatasemakan_markah[".listFields"][] = "name";
$tdatasemakan_markah[".listFields"][] = "birthdate";
$tdatasemakan_markah[".listFields"][] = "birthCert";
$tdatasemakan_markah[".listFields"][] = "gender";
$tdatasemakan_markah[".listFields"][] = "nationality";
$tdatasemakan_markah[".listFields"][] = "sCode";
$tdatasemakan_markah[".listFields"][] = "eNo";
$tdatasemakan_markah[".listFields"][] = "s1";
$tdatasemakan_markah[".listFields"][] = "s2";
$tdatasemakan_markah[".listFields"][] = "s3";
$tdatasemakan_markah[".listFields"][] = "s4";
$tdatasemakan_markah[".listFields"][] = "s5";
$tdatasemakan_markah[".listFields"][] = "s6";
$tdatasemakan_markah[".listFields"][] = "s7";
$tdatasemakan_markah[".listFields"][] = "eYear";
$tdatasemakan_markah[".listFields"][] = "eType";

$tdatasemakan_markah[".hideMobileList"] = array();


$tdatasemakan_markah[".viewFields"] = array();

$tdatasemakan_markah[".addFields"] = array();

$tdatasemakan_markah[".masterListFields"] = array();
$tdatasemakan_markah[".masterListFields"][] = "sid";
$tdatasemakan_markah[".masterListFields"][] = "name";
$tdatasemakan_markah[".masterListFields"][] = "birthdate";
$tdatasemakan_markah[".masterListFields"][] = "birthCert";
$tdatasemakan_markah[".masterListFields"][] = "gender";
$tdatasemakan_markah[".masterListFields"][] = "nationality";
$tdatasemakan_markah[".masterListFields"][] = "sCode";
$tdatasemakan_markah[".masterListFields"][] = "eNo";
$tdatasemakan_markah[".masterListFields"][] = "s1";
$tdatasemakan_markah[".masterListFields"][] = "s2";
$tdatasemakan_markah[".masterListFields"][] = "s3";
$tdatasemakan_markah[".masterListFields"][] = "s4";
$tdatasemakan_markah[".masterListFields"][] = "s5";
$tdatasemakan_markah[".masterListFields"][] = "s6";
$tdatasemakan_markah[".masterListFields"][] = "s7";
$tdatasemakan_markah[".masterListFields"][] = "eYear";
$tdatasemakan_markah[".masterListFields"][] = "eType";

$tdatasemakan_markah[".inlineAddFields"] = array();

$tdatasemakan_markah[".editFields"] = array();

$tdatasemakan_markah[".inlineEditFields"] = array();
$tdatasemakan_markah[".inlineEditFields"][] = "name";
$tdatasemakan_markah[".inlineEditFields"][] = "birthdate";
$tdatasemakan_markah[".inlineEditFields"][] = "birthCert";
$tdatasemakan_markah[".inlineEditFields"][] = "gender";
$tdatasemakan_markah[".inlineEditFields"][] = "nationality";
$tdatasemakan_markah[".inlineEditFields"][] = "sCode";
$tdatasemakan_markah[".inlineEditFields"][] = "eNo";
$tdatasemakan_markah[".inlineEditFields"][] = "s1";
$tdatasemakan_markah[".inlineEditFields"][] = "s2";
$tdatasemakan_markah[".inlineEditFields"][] = "s3";
$tdatasemakan_markah[".inlineEditFields"][] = "s4";
$tdatasemakan_markah[".inlineEditFields"][] = "s5";
$tdatasemakan_markah[".inlineEditFields"][] = "s6";
$tdatasemakan_markah[".inlineEditFields"][] = "s7";
$tdatasemakan_markah[".inlineEditFields"][] = "eYear";
$tdatasemakan_markah[".inlineEditFields"][] = "eType";

$tdatasemakan_markah[".exportFields"] = array();

$tdatasemakan_markah[".importFields"] = array();

$tdatasemakan_markah[".printFields"] = array();

//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan_markah","sid"); 
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
	
	
	
	

	

	
	$tdatasemakan_markah["sid"] = $fdata;
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan_markah","name"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatasemakan_markah["name"] = $fdata;
//	gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "gender";
	$fdata["GoodName"] = "gender";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan_markah","gender"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatasemakan_markah["gender"] = $fdata;
//	birthdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "birthdate";
	$fdata["GoodName"] = "birthdate";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan_markah","birthdate"); 
	$fdata["FieldType"] = 7;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatasemakan_markah["birthdate"] = $fdata;
//	birthCert
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "birthCert";
	$fdata["GoodName"] = "birthCert";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan_markah","birthCert"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatasemakan_markah["birthCert"] = $fdata;
//	nationality
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "nationality";
	$fdata["GoodName"] = "nationality";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan_markah","nationality"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatasemakan_markah["nationality"] = $fdata;
//	sCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sCode";
	$fdata["GoodName"] = "sCode";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan_markah","sCode"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatasemakan_markah["sCode"] = $fdata;
//	eNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "eNo";
	$fdata["GoodName"] = "eNo";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan_markah","eNo"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatasemakan_markah["eNo"] = $fdata;
//	eYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "eYear";
	$fdata["GoodName"] = "eYear";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan_markah","eYear"); 
	$fdata["FieldType"] = 3;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between");
// the end of search options settings	

	

	
	$tdatasemakan_markah["eYear"] = $fdata;
//	eType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "eType";
	$fdata["GoodName"] = "eType";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan_markah","eType"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatasemakan_markah["eType"] = $fdata;
//	s1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "s1";
	$fdata["GoodName"] = "s1";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan_markah","s1"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "s1"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s1";
	
		
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatasemakan_markah["s1"] = $fdata;
//	s2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "s2";
	$fdata["GoodName"] = "s2";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan_markah","s2"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "s2"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s2";
	
		
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatasemakan_markah["s2"] = $fdata;
//	s3
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "s3";
	$fdata["GoodName"] = "s3";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan_markah","s3"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "s3"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s3";
	
		
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatasemakan_markah["s3"] = $fdata;
//	s4
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "s4";
	$fdata["GoodName"] = "s4";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan_markah","s4"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "s4"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s4";
	
		
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatasemakan_markah["s4"] = $fdata;
//	s5
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "s5";
	$fdata["GoodName"] = "s5";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan_markah","s5"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "s5"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s5";
	
		
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatasemakan_markah["s5"] = $fdata;
//	s6
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "s6";
	$fdata["GoodName"] = "s6";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan_markah","s6"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
		$fdata["strField"] = "s6"; 
	
		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "s6";
	
		
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatasemakan_markah["s6"] = $fdata;
//	s7
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "s7";
	$fdata["GoodName"] = "s7";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("semakan_markah","s7"); 
	$fdata["FieldType"] = 200;
	
		
		
		
				
		$fdata["bListPage"] = true; 
	
		
		
		
		$fdata["bInlineEdit"] = true; 
	
		
		$fdata["bAdvancedSearch"] = true; 
	
		
		
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
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Empty");
// the end of search options settings	

	

	
	$tdatasemakan_markah["s7"] = $fdata;

	
$tables_data["semakan_markah"]=&$tdatasemakan_markah;
$field_labels["semakan_markah"] = &$fieldLabelssemakan_markah;
$fieldToolTips["semakan_markah"] = &$fieldToolTipssemakan_markah;
$page_titles["semakan_markah"] = &$pageTitlessemakan_markah;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["semakan_markah"] = array();
	
// tables which are master tables for current table (detail)
$masterTablesData["semakan_markah"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_semakan_markah()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sid,  	name,  	gender,  	birthdate,  	birthCert,  	nationality,  	sCode,  	eNo,  	eYear,  	eType,  	s1,  	s2,  	s3,  	s4,  	s5,  	s6,  	s7";
$proto0["m_strFrom"] = "FROM exam_marking";
$proto0["m_strWhere"] = "s1 IS NULL OR s2 IS NULL OR s3 IS NULL OR s4 IS NULL OR s5 IS NULL OR s6 IS NULL OR s7 IS NULL  OR s1 >100 OR s2 >100 OR s3 >100 OR s4 >100 OR s5 >100 OR s6 >100   OR sCode IS NULL OR eNo IS NULL OR eYear IS NULL OR eType IS NULL OR name IS NULL OR gender IS NULL  OR birthdate IS NULL OR birthCert IS NULL OR nationality IS NULL";
$proto0["m_strOrderBy"] = "";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "s1 IS NULL OR s2 IS NULL OR s3 IS NULL OR s4 IS NULL OR s5 IS NULL OR s6 IS NULL OR s7 IS NULL  OR s1 >100 OR s2 >100 OR s3 >100 OR s4 >100 OR s5 >100 OR s6 >100   OR sCode IS NULL OR eNo IS NULL OR eYear IS NULL OR eType IS NULL OR name IS NULL OR gender IS NULL  OR birthdate IS NULL OR birthCert IS NULL OR nationality IS NULL";
$proto1["m_uniontype"] = "SQLL_OR";
	$obj = new SQLNonParsed(array(
	"m_sql" => "s1 IS NULL OR s2 IS NULL OR s3 IS NULL OR s4 IS NULL OR s5 IS NULL OR s6 IS NULL OR s7 IS NULL  OR s1 >100 OR s2 >100 OR s3 >100 OR s4 >100 OR s5 >100 OR s6 >100   OR sCode IS NULL OR eNo IS NULL OR eYear IS NULL OR eType IS NULL OR name IS NULL OR gender IS NULL  OR birthdate IS NULL OR birthCert IS NULL OR nationality IS NULL"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
						$proto3=array();
$proto3["m_sql"] = "s1 IS NULL";
$proto3["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "s1",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_markah"
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
$proto5["m_sql"] = "s2 IS NULL";
$proto5["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "s2",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_markah"
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
$proto7["m_sql"] = "s3 IS NULL";
$proto7["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "s3",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_markah"
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
$proto9["m_sql"] = "s4 IS NULL";
$proto9["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "s4",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_markah"
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
$proto11["m_sql"] = "s5 IS NULL";
$proto11["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "s5",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_markah"
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
$proto13["m_sql"] = "s6 IS NULL";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "s6",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_markah"
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
$proto15["m_sql"] = "s7 IS NULL";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "s7",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_markah"
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
$proto17["m_sql"] = "s1 >100";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "s1",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_markah"
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = ">100";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

			$proto1["m_contained"][]=$obj;
						$proto19=array();
$proto19["m_sql"] = "s2 >100";
$proto19["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "s2",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_markah"
));

$proto19["m_column"]=$obj;
$proto19["m_contained"] = array();
$proto19["m_strCase"] = ">100";
$proto19["m_havingmode"] = false;
$proto19["m_inBrackets"] = false;
$proto19["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto19);

			$proto1["m_contained"][]=$obj;
						$proto21=array();
$proto21["m_sql"] = "s3 >100";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "s3",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_markah"
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = ">100";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

			$proto1["m_contained"][]=$obj;
						$proto23=array();
$proto23["m_sql"] = "s4 >100";
$proto23["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "s4",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_markah"
));

$proto23["m_column"]=$obj;
$proto23["m_contained"] = array();
$proto23["m_strCase"] = ">100";
$proto23["m_havingmode"] = false;
$proto23["m_inBrackets"] = false;
$proto23["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto23);

			$proto1["m_contained"][]=$obj;
						$proto25=array();
$proto25["m_sql"] = "s5 >100";
$proto25["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "s5",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_markah"
));

$proto25["m_column"]=$obj;
$proto25["m_contained"] = array();
$proto25["m_strCase"] = ">100";
$proto25["m_havingmode"] = false;
$proto25["m_inBrackets"] = false;
$proto25["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto25);

			$proto1["m_contained"][]=$obj;
						$proto27=array();
$proto27["m_sql"] = "s6 >100";
$proto27["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "s6",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_markah"
));

$proto27["m_column"]=$obj;
$proto27["m_contained"] = array();
$proto27["m_strCase"] = ">100";
$proto27["m_havingmode"] = false;
$proto27["m_inBrackets"] = false;
$proto27["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto27);

			$proto1["m_contained"][]=$obj;
						$proto29=array();
$proto29["m_sql"] = "sCode IS NULL";
$proto29["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_markah"
));

$proto29["m_column"]=$obj;
$proto29["m_contained"] = array();
$proto29["m_strCase"] = "IS NULL";
$proto29["m_havingmode"] = false;
$proto29["m_inBrackets"] = false;
$proto29["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto29);

			$proto1["m_contained"][]=$obj;
						$proto31=array();
$proto31["m_sql"] = "eNo IS NULL";
$proto31["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "eNo",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_markah"
));

$proto31["m_column"]=$obj;
$proto31["m_contained"] = array();
$proto31["m_strCase"] = "IS NULL";
$proto31["m_havingmode"] = false;
$proto31["m_inBrackets"] = false;
$proto31["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto31);

			$proto1["m_contained"][]=$obj;
						$proto33=array();
$proto33["m_sql"] = "eYear IS NULL";
$proto33["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_markah"
));

$proto33["m_column"]=$obj;
$proto33["m_contained"] = array();
$proto33["m_strCase"] = "IS NULL";
$proto33["m_havingmode"] = false;
$proto33["m_inBrackets"] = false;
$proto33["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto33);

			$proto1["m_contained"][]=$obj;
						$proto35=array();
$proto35["m_sql"] = "eType IS NULL";
$proto35["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_markah"
));

$proto35["m_column"]=$obj;
$proto35["m_contained"] = array();
$proto35["m_strCase"] = "IS NULL";
$proto35["m_havingmode"] = false;
$proto35["m_inBrackets"] = false;
$proto35["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto35);

			$proto1["m_contained"][]=$obj;
						$proto37=array();
$proto37["m_sql"] = "name IS NULL";
$proto37["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_markah"
));

$proto37["m_column"]=$obj;
$proto37["m_contained"] = array();
$proto37["m_strCase"] = "IS NULL";
$proto37["m_havingmode"] = false;
$proto37["m_inBrackets"] = false;
$proto37["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto37);

			$proto1["m_contained"][]=$obj;
						$proto39=array();
$proto39["m_sql"] = "gender IS NULL";
$proto39["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "gender",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_markah"
));

$proto39["m_column"]=$obj;
$proto39["m_contained"] = array();
$proto39["m_strCase"] = "IS NULL";
$proto39["m_havingmode"] = false;
$proto39["m_inBrackets"] = false;
$proto39["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto39);

			$proto1["m_contained"][]=$obj;
						$proto41=array();
$proto41["m_sql"] = "birthdate IS NULL";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "birthdate",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_markah"
));

$proto41["m_column"]=$obj;
$proto41["m_contained"] = array();
$proto41["m_strCase"] = "IS NULL";
$proto41["m_havingmode"] = false;
$proto41["m_inBrackets"] = false;
$proto41["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto41);

			$proto1["m_contained"][]=$obj;
						$proto43=array();
$proto43["m_sql"] = "birthCert IS NULL";
$proto43["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "birthCert",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_markah"
));

$proto43["m_column"]=$obj;
$proto43["m_contained"] = array();
$proto43["m_strCase"] = "IS NULL";
$proto43["m_havingmode"] = false;
$proto43["m_inBrackets"] = false;
$proto43["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto43);

			$proto1["m_contained"][]=$obj;
						$proto45=array();
$proto45["m_sql"] = "nationality IS NULL";
$proto45["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "nationality",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_markah"
));

$proto45["m_column"]=$obj;
$proto45["m_contained"] = array();
$proto45["m_strCase"] = "IS NULL";
$proto45["m_havingmode"] = false;
$proto45["m_inBrackets"] = false;
$proto45["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto45);

			$proto1["m_contained"][]=$obj;
$proto1["m_strCase"] = "";
$proto1["m_havingmode"] = false;
$proto1["m_inBrackets"] = false;
$proto1["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto1);

$proto0["m_where"] = $obj;
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

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_markah"
));

$proto49["m_sql"] = "sid";
$proto49["m_srcTableName"] = "semakan_markah";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto0["m_fieldlist"][]=$obj;
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_markah"
));

$proto51["m_sql"] = "name";
$proto51["m_srcTableName"] = "semakan_markah";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto0["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "gender",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_markah"
));

$proto53["m_sql"] = "gender";
$proto53["m_srcTableName"] = "semakan_markah";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto0["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLField(array(
	"m_strName" => "birthdate",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_markah"
));

$proto55["m_sql"] = "birthdate";
$proto55["m_srcTableName"] = "semakan_markah";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto0["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLField(array(
	"m_strName" => "birthCert",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_markah"
));

$proto57["m_sql"] = "birthCert";
$proto57["m_srcTableName"] = "semakan_markah";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto0["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "nationality",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_markah"
));

$proto59["m_sql"] = "nationality";
$proto59["m_srcTableName"] = "semakan_markah";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto0["m_fieldlist"][]=$obj;
						$proto61=array();
			$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_markah"
));

$proto61["m_sql"] = "sCode";
$proto61["m_srcTableName"] = "semakan_markah";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "";
$obj = new SQLFieldListItem($proto61);

$proto0["m_fieldlist"][]=$obj;
						$proto63=array();
			$obj = new SQLField(array(
	"m_strName" => "eNo",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_markah"
));

$proto63["m_sql"] = "eNo";
$proto63["m_srcTableName"] = "semakan_markah";
$proto63["m_expr"]=$obj;
$proto63["m_alias"] = "";
$obj = new SQLFieldListItem($proto63);

$proto0["m_fieldlist"][]=$obj;
						$proto65=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_markah"
));

$proto65["m_sql"] = "eYear";
$proto65["m_srcTableName"] = "semakan_markah";
$proto65["m_expr"]=$obj;
$proto65["m_alias"] = "";
$obj = new SQLFieldListItem($proto65);

$proto0["m_fieldlist"][]=$obj;
						$proto67=array();
			$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_markah"
));

$proto67["m_sql"] = "eType";
$proto67["m_srcTableName"] = "semakan_markah";
$proto67["m_expr"]=$obj;
$proto67["m_alias"] = "";
$obj = new SQLFieldListItem($proto67);

$proto0["m_fieldlist"][]=$obj;
						$proto69=array();
			$obj = new SQLField(array(
	"m_strName" => "s1",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_markah"
));

$proto69["m_sql"] = "s1";
$proto69["m_srcTableName"] = "semakan_markah";
$proto69["m_expr"]=$obj;
$proto69["m_alias"] = "";
$obj = new SQLFieldListItem($proto69);

$proto0["m_fieldlist"][]=$obj;
						$proto71=array();
			$obj = new SQLField(array(
	"m_strName" => "s2",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_markah"
));

$proto71["m_sql"] = "s2";
$proto71["m_srcTableName"] = "semakan_markah";
$proto71["m_expr"]=$obj;
$proto71["m_alias"] = "";
$obj = new SQLFieldListItem($proto71);

$proto0["m_fieldlist"][]=$obj;
						$proto73=array();
			$obj = new SQLField(array(
	"m_strName" => "s3",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_markah"
));

$proto73["m_sql"] = "s3";
$proto73["m_srcTableName"] = "semakan_markah";
$proto73["m_expr"]=$obj;
$proto73["m_alias"] = "";
$obj = new SQLFieldListItem($proto73);

$proto0["m_fieldlist"][]=$obj;
						$proto75=array();
			$obj = new SQLField(array(
	"m_strName" => "s4",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_markah"
));

$proto75["m_sql"] = "s4";
$proto75["m_srcTableName"] = "semakan_markah";
$proto75["m_expr"]=$obj;
$proto75["m_alias"] = "";
$obj = new SQLFieldListItem($proto75);

$proto0["m_fieldlist"][]=$obj;
						$proto77=array();
			$obj = new SQLField(array(
	"m_strName" => "s5",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_markah"
));

$proto77["m_sql"] = "s5";
$proto77["m_srcTableName"] = "semakan_markah";
$proto77["m_expr"]=$obj;
$proto77["m_alias"] = "";
$obj = new SQLFieldListItem($proto77);

$proto0["m_fieldlist"][]=$obj;
						$proto79=array();
			$obj = new SQLField(array(
	"m_strName" => "s6",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_markah"
));

$proto79["m_sql"] = "s6";
$proto79["m_srcTableName"] = "semakan_markah";
$proto79["m_expr"]=$obj;
$proto79["m_alias"] = "";
$obj = new SQLFieldListItem($proto79);

$proto0["m_fieldlist"][]=$obj;
						$proto81=array();
			$obj = new SQLField(array(
	"m_strName" => "s7",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "semakan_markah"
));

$proto81["m_sql"] = "s7";
$proto81["m_srcTableName"] = "semakan_markah";
$proto81["m_expr"]=$obj;
$proto81["m_alias"] = "";
$obj = new SQLFieldListItem($proto81);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto83=array();
$proto83["m_link"] = "SQLL_MAIN";
			$proto84=array();
$proto84["m_strName"] = "exam_marking";
$proto84["m_srcTableName"] = "semakan_markah";
$proto84["m_columns"] = array();
$proto84["m_columns"][] = "sid";
$proto84["m_columns"][] = "name";
$proto84["m_columns"][] = "gender";
$proto84["m_columns"][] = "birthdate";
$proto84["m_columns"][] = "birthCert";
$proto84["m_columns"][] = "nationality";
$proto84["m_columns"][] = "sCode";
$proto84["m_columns"][] = "eNo";
$proto84["m_columns"][] = "eYear";
$proto84["m_columns"][] = "eType";
$proto84["m_columns"][] = "s1";
$proto84["m_columns"][] = "s2";
$proto84["m_columns"][] = "s3";
$proto84["m_columns"][] = "s4";
$proto84["m_columns"][] = "s5";
$proto84["m_columns"][] = "s6";
$proto84["m_columns"][] = "s7";
$obj = new SQLTable($proto84);

$proto83["m_table"] = $obj;
$proto83["m_sql"] = "exam_marking";
$proto83["m_alias"] = "";
$proto83["m_srcTableName"] = "semakan_markah";
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

$proto83["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto83);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="semakan_markah";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_semakan_markah = createSqlQuery_semakan_markah();


	
																	
	
$tdatasemakan_markah[".sqlquery"] = $queryData_semakan_markah;

include_once(getabspath("include/semakan_markah_events.php"));
$tableEvents["semakan_markah"] = new eventclass_semakan_markah;
$tdatasemakan_markah[".hasEvents"] = true;

?>