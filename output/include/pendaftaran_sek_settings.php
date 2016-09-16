<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapendaftaran_sek = array();
	$tdatapendaftaran_sek[".truncateText"] = true;
	$tdatapendaftaran_sek[".NumberOfChars"] = 80;
	$tdatapendaftaran_sek[".ShortName"] = "pendaftaran_sek";
	$tdatapendaftaran_sek[".OwnerID"] = "";
	$tdatapendaftaran_sek[".OriginalTable"] = "exam_marking";

//	field labels
$fieldLabelspendaftaran_sek = array();
$fieldToolTipspendaftaran_sek = array();
$pageTitlespendaftaran_sek = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspendaftaran_sek["English"] = array();
	$fieldToolTipspendaftaran_sek["English"] = array();
	$pageTitlespendaftaran_sek["English"] = array();
	$fieldLabelspendaftaran_sek["English"]["sZone"] = "Zon";
	$fieldToolTipspendaftaran_sek["English"]["sZone"] = "";
	$fieldLabelspendaftaran_sek["English"]["sName"] = "Nama Sekolah";
	$fieldToolTipspendaftaran_sek["English"]["sName"] = "";
	$fieldLabelspendaftaran_sek["English"]["sCenter"] = "Kod Pusat";
	$fieldToolTipspendaftaran_sek["English"]["sCenter"] = "";
	$fieldLabelspendaftaran_sek["English"]["sno"] = "Sno";
	$fieldToolTipspendaftaran_sek["English"]["sno"] = "";
	$fieldLabelspendaftaran_sek["English"]["sCode"] = "Kod Sekolah";
	$fieldToolTipspendaftaran_sek["English"]["sCode"] = "";
	if (count($fieldToolTipspendaftaran_sek["English"]))
		$tdatapendaftaran_sek[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspendaftaran_sek[""] = array();
	$fieldToolTipspendaftaran_sek[""] = array();
	$pageTitlespendaftaran_sek[""] = array();
	$fieldLabelspendaftaran_sek[""]["sCenter"] = "S Center";
	$fieldToolTipspendaftaran_sek[""]["sCenter"] = "";
	$fieldLabelspendaftaran_sek[""]["sno"] = "Sno";
	$fieldToolTipspendaftaran_sek[""]["sno"] = "";
	$fieldLabelspendaftaran_sek[""]["sCode"] = "S Code";
	$fieldToolTipspendaftaran_sek[""]["sCode"] = "";
	if (count($fieldToolTipspendaftaran_sek[""]))
		$tdatapendaftaran_sek[".isUseToolTips"] = true;
}


	$tdatapendaftaran_sek[".NCSearch"] = true;



$tdatapendaftaran_sek[".shortTableName"] = "pendaftaran_sek";
$tdatapendaftaran_sek[".nSecOptions"] = 0;
$tdatapendaftaran_sek[".recsPerRowList"] = 1;
$tdatapendaftaran_sek[".recsPerRowPrint"] = 1;
$tdatapendaftaran_sek[".mainTableOwnerID"] = "";
$tdatapendaftaran_sek[".moveNext"] = 1;
$tdatapendaftaran_sek[".entityType"] = 1;

$tdatapendaftaran_sek[".strOriginalTableName"] = "exam_marking";




$tdatapendaftaran_sek[".showAddInPopup"] = false;

$tdatapendaftaran_sek[".showEditInPopup"] = false;

$tdatapendaftaran_sek[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapendaftaran_sek[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapendaftaran_sek[".fieldsForRegister"] = array();

$tdatapendaftaran_sek[".listAjax"] = false;

	$tdatapendaftaran_sek[".audit"] = false;

	$tdatapendaftaran_sek[".locking"] = false;



$tdatapendaftaran_sek[".list"] = true;

$tdatapendaftaran_sek[".inlineAdd"] = true;


$tdatapendaftaran_sek[".exportTo"] = true;



$tdatapendaftaran_sek[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatapendaftaran_sek[".searchSaving"] = false;
//

$tdatapendaftaran_sek[".showSearchPanel"] = true;
		$tdatapendaftaran_sek[".flexibleSearch"] = true;

if (isMobile())
	$tdatapendaftaran_sek[".isUseAjaxSuggest"] = false;
else
	$tdatapendaftaran_sek[".isUseAjaxSuggest"] = true;

$tdatapendaftaran_sek[".rowHighlite"] = true;


			
$tdatapendaftaran_sek[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapendaftaran_sek[".isUseTimeForSearch"] = false;





$tdatapendaftaran_sek[".allSearchFields"] = array();
$tdatapendaftaran_sek[".filterFields"] = array();
$tdatapendaftaran_sek[".requiredSearchFields"] = array();

$tdatapendaftaran_sek[".allSearchFields"][] = "sCode";
	$tdatapendaftaran_sek[".allSearchFields"][] = "sZone";
	$tdatapendaftaran_sek[".allSearchFields"][] = "sCenter";
	$tdatapendaftaran_sek[".allSearchFields"][] = "sName";
	

$tdatapendaftaran_sek[".googleLikeFields"] = array();
$tdatapendaftaran_sek[".googleLikeFields"][] = "sno";
$tdatapendaftaran_sek[".googleLikeFields"][] = "sName";
$tdatapendaftaran_sek[".googleLikeFields"][] = "sCenter";
$tdatapendaftaran_sek[".googleLikeFields"][] = "sCode";

$tdatapendaftaran_sek[".panelSearchFields"] = array();
$tdatapendaftaran_sek[".searchPanelOptions"] = array();
$tdatapendaftaran_sek[".panelSearchFields"][] = "sZone";
	$tdatapendaftaran_sek[".panelSearchFields"][] = "sCenter";
	$tdatapendaftaran_sek[".panelSearchFields"][] = "sName";
	
$tdatapendaftaran_sek[".advSearchFields"] = array();
$tdatapendaftaran_sek[".advSearchFields"][] = "sCode";
$tdatapendaftaran_sek[".advSearchFields"][] = "sZone";
$tdatapendaftaran_sek[".advSearchFields"][] = "sCenter";
$tdatapendaftaran_sek[".advSearchFields"][] = "sName";

$tdatapendaftaran_sek[".tableType"] = "list";

$tdatapendaftaran_sek[".printerPageOrientation"] = 0;
$tdatapendaftaran_sek[".nPrinterPageScale"] = 100;

$tdatapendaftaran_sek[".nPrinterSplitRecords"] = 40;

$tdatapendaftaran_sek[".nPrinterPDFSplitRecords"] = 40;



$tdatapendaftaran_sek[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatapendaftaran_sek[".pageSize"] = 20;

$tdatapendaftaran_sek[".warnLeavingPages"] = true;



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapendaftaran_sek[".strOrderBy"] = $tstrOrderBy;

$tdatapendaftaran_sek[".orderindexes"] = array();

$tdatapendaftaran_sek[".sqlHead"] = "SELECT sno,  sName,  sCenter,  sCode,  sZone";
$tdatapendaftaran_sek[".sqlFrom"] = "FROM school";
$tdatapendaftaran_sek[".sqlWhereExpr"] = "";
$tdatapendaftaran_sek[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapendaftaran_sek[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapendaftaran_sek[".arrGroupsPerPage"] = $arrGPP;

$tdatapendaftaran_sek[".highlightSearchResults"] = true;

$tableKeyspendaftaran_sek = array();
$tdatapendaftaran_sek[".Keys"] = $tableKeyspendaftaran_sek;

$tdatapendaftaran_sek[".listFields"] = array();
$tdatapendaftaran_sek[".listFields"][] = "sCode";
$tdatapendaftaran_sek[".listFields"][] = "sZone";
$tdatapendaftaran_sek[".listFields"][] = "sCenter";
$tdatapendaftaran_sek[".listFields"][] = "sName";

$tdatapendaftaran_sek[".hideMobileList"] = array();


$tdatapendaftaran_sek[".viewFields"] = array();

$tdatapendaftaran_sek[".addFields"] = array();

$tdatapendaftaran_sek[".masterListFields"] = array();
$tdatapendaftaran_sek[".masterListFields"][] = "sZone";
$tdatapendaftaran_sek[".masterListFields"][] = "sCode";
$tdatapendaftaran_sek[".masterListFields"][] = "sno";
$tdatapendaftaran_sek[".masterListFields"][] = "sCenter";
$tdatapendaftaran_sek[".masterListFields"][] = "sName";

$tdatapendaftaran_sek[".inlineAddFields"] = array();
$tdatapendaftaran_sek[".inlineAddFields"][] = "sCode";
$tdatapendaftaran_sek[".inlineAddFields"][] = "sZone";
$tdatapendaftaran_sek[".inlineAddFields"][] = "sCenter";
$tdatapendaftaran_sek[".inlineAddFields"][] = "sName";

$tdatapendaftaran_sek[".editFields"] = array();

$tdatapendaftaran_sek[".inlineEditFields"] = array();

$tdatapendaftaran_sek[".exportFields"] = array();
$tdatapendaftaran_sek[".exportFields"][] = "sCode";
$tdatapendaftaran_sek[".exportFields"][] = "sZone";
$tdatapendaftaran_sek[".exportFields"][] = "sCenter";
$tdatapendaftaran_sek[".exportFields"][] = "sName";

$tdatapendaftaran_sek[".importFields"] = array();

$tdatapendaftaran_sek[".printFields"] = array();

//	sno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sno";
	$fdata["GoodName"] = "sno";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("pendaftaran_sek","sno");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "sno";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sno";

	
	
			
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








	$tdatapendaftaran_sek["sno"] = $fdata;
//	sName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sName";
	$fdata["GoodName"] = "sName";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("pendaftaran_sek","sName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	
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




	$tdatapendaftaran_sek["sName"] = $fdata;
//	sCenter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sCenter";
	$fdata["GoodName"] = "sCenter";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("pendaftaran_sek","sCenter");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	
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




	$tdatapendaftaran_sek["sCenter"] = $fdata;
//	sCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sCode";
	$fdata["GoodName"] = "sCode";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("pendaftaran_sek","sCode");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	
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
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatapendaftaran_sek["sCode"] = $fdata;
//	sZone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sZone";
	$fdata["GoodName"] = "sZone";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("pendaftaran_sek","sZone");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
		$fdata["bInlineAdd"] = true;

	
	
	
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




	$tdatapendaftaran_sek["sZone"] = $fdata;


$tables_data["pendaftaran_sek"]=&$tdatapendaftaran_sek;
$field_labels["pendaftaran_sek"] = &$fieldLabelspendaftaran_sek;
$fieldToolTips["pendaftaran_sek"] = &$fieldToolTipspendaftaran_sek;
$page_titles["pendaftaran_sek"] = &$pageTitlespendaftaran_sek;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pendaftaran_sek"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["pendaftaran_sek"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pendaftaran_sek()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sno,  sName,  sCenter,  sCode,  sZone";
$proto0["m_strFrom"] = "FROM school";
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
	"m_strName" => "sno",
	"m_strTable" => "school",
	"m_srcTableName" => "pendaftaran_sek"
));

$proto5["m_sql"] = "sno";
$proto5["m_srcTableName"] = "pendaftaran_sek";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "sName",
	"m_strTable" => "school",
	"m_srcTableName" => "pendaftaran_sek"
));

$proto7["m_sql"] = "sName";
$proto7["m_srcTableName"] = "pendaftaran_sek";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "sCenter",
	"m_strTable" => "school",
	"m_srcTableName" => "pendaftaran_sek"
));

$proto9["m_sql"] = "sCenter";
$proto9["m_srcTableName"] = "pendaftaran_sek";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "school",
	"m_srcTableName" => "pendaftaran_sek"
));

$proto11["m_sql"] = "sCode";
$proto11["m_srcTableName"] = "pendaftaran_sek";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "sZone",
	"m_strTable" => "school",
	"m_srcTableName" => "pendaftaran_sek"
));

$proto13["m_sql"] = "sZone";
$proto13["m_srcTableName"] = "pendaftaran_sek";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto15=array();
$proto15["m_link"] = "SQLL_MAIN";
			$proto16=array();
$proto16["m_strName"] = "school";
$proto16["m_srcTableName"] = "pendaftaran_sek";
$proto16["m_columns"] = array();
$proto16["m_columns"][] = "sno";
$proto16["m_columns"][] = "sName";
$proto16["m_columns"][] = "sCenter";
$proto16["m_columns"][] = "sCode";
$proto16["m_columns"][] = "sZone";
$proto16["m_columns"][] = "sType";
$obj = new SQLTable($proto16);

$proto15["m_table"] = $obj;
$proto15["m_sql"] = "school";
$proto15["m_alias"] = "";
$proto15["m_srcTableName"] = "pendaftaran_sek";
$proto17=array();
$proto17["m_sql"] = "";
$proto17["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto17["m_column"]=$obj;
$proto17["m_contained"] = array();
$proto17["m_strCase"] = "";
$proto17["m_havingmode"] = false;
$proto17["m_inBrackets"] = false;
$proto17["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto17);

$proto15["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto15);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="pendaftaran_sek";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pendaftaran_sek = createSqlQuery_pendaftaran_sek();



					

$tdatapendaftaran_sek[".sqlquery"] = $queryData_pendaftaran_sek;

include_once(getabspath("include/pendaftaran_sek_events.php"));
$tableEvents["pendaftaran_sek"] = new eventclass_pendaftaran_sek;
$tdatapendaftaran_sek[".hasEvents"] = true;

$query = &$queryData_pendaftaran_sek;
$table = "pendaftaran_sek";
// here goes EVENT_INIT_TABLE event

global $conn;
//only PPTAD zon can view their own zon
$year=date('Y');
$alevel=$_SESSION['alevel'];
$zon=$_SESSION['zon'];
if($zon!==NULL && $alevel==1){
$query->addWhere("sZone='".$zon."'");
};

;
unset($query);
?>