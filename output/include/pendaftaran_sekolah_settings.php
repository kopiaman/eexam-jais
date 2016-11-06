<?php
require_once(getabspath("classes/cipherer.php"));




$tdatapendaftaran_sekolah = array();
	$tdatapendaftaran_sekolah[".truncateText"] = true;
	$tdatapendaftaran_sekolah[".NumberOfChars"] = 80;
	$tdatapendaftaran_sekolah[".ShortName"] = "pendaftaran_sekolah";
	$tdatapendaftaran_sekolah[".OwnerID"] = "";
	$tdatapendaftaran_sekolah[".OriginalTable"] = "school";

//	field labels
$fieldLabelspendaftaran_sekolah = array();
$fieldToolTipspendaftaran_sekolah = array();
$pageTitlespendaftaran_sekolah = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspendaftaran_sekolah["English"] = array();
	$fieldToolTipspendaftaran_sekolah["English"] = array();
	$pageTitlespendaftaran_sekolah["English"] = array();
	$fieldLabelspendaftaran_sekolah["English"]["sno"] = "Sno";
	$fieldToolTipspendaftaran_sekolah["English"]["sno"] = "";
	$fieldLabelspendaftaran_sekolah["English"]["sName"] = "Nama Sekolah";
	$fieldToolTipspendaftaran_sekolah["English"]["sName"] = "";
	$fieldLabelspendaftaran_sekolah["English"]["sCenter"] = "Kod Pusat";
	$fieldToolTipspendaftaran_sekolah["English"]["sCenter"] = "";
	$fieldLabelspendaftaran_sekolah["English"]["sCode"] = "Kod Sekolah";
	$fieldToolTipspendaftaran_sekolah["English"]["sCode"] = "";
	$fieldLabelspendaftaran_sekolah["English"]["sZone"] = "Zon";
	$fieldToolTipspendaftaran_sekolah["English"]["sZone"] = "";
	$fieldLabelspendaftaran_sekolah["English"]["opt"] = "Tindakan";
	$fieldToolTipspendaftaran_sekolah["English"]["opt"] = "";
	$fieldLabelspendaftaran_sekolah["English"]["jumlah"] = "Jumlah Murid";
	$fieldToolTipspendaftaran_sekolah["English"]["jumlah"] = "";
	if (count($fieldToolTipspendaftaran_sekolah["English"]))
		$tdatapendaftaran_sekolah[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelspendaftaran_sekolah[""] = array();
	$fieldToolTipspendaftaran_sekolah[""] = array();
	$pageTitlespendaftaran_sekolah[""] = array();
	$fieldLabelspendaftaran_sekolah[""]["opt"] = "Opt";
	$fieldToolTipspendaftaran_sekolah[""]["opt"] = "";
	$fieldLabelspendaftaran_sekolah[""]["jumlah"] = "Jumlah";
	$fieldToolTipspendaftaran_sekolah[""]["jumlah"] = "";
	if (count($fieldToolTipspendaftaran_sekolah[""]))
		$tdatapendaftaran_sekolah[".isUseToolTips"] = true;
}


	$tdatapendaftaran_sekolah[".NCSearch"] = true;



$tdatapendaftaran_sekolah[".shortTableName"] = "pendaftaran_sekolah";
$tdatapendaftaran_sekolah[".nSecOptions"] = 0;
$tdatapendaftaran_sekolah[".recsPerRowList"] = 1;
$tdatapendaftaran_sekolah[".recsPerRowPrint"] = 1;
$tdatapendaftaran_sekolah[".mainTableOwnerID"] = "";
$tdatapendaftaran_sekolah[".moveNext"] = 1;
$tdatapendaftaran_sekolah[".entityType"] = 1;

$tdatapendaftaran_sekolah[".strOriginalTableName"] = "school";




$tdatapendaftaran_sekolah[".showAddInPopup"] = false;

$tdatapendaftaran_sekolah[".showEditInPopup"] = false;

$tdatapendaftaran_sekolah[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatapendaftaran_sekolah[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatapendaftaran_sekolah[".fieldsForRegister"] = array();

$tdatapendaftaran_sekolah[".listAjax"] = false;

	$tdatapendaftaran_sekolah[".audit"] = false;

	$tdatapendaftaran_sekolah[".locking"] = false;

$tdatapendaftaran_sekolah[".edit"] = true;
$tdatapendaftaran_sekolah[".afterEditAction"] = 1;
$tdatapendaftaran_sekolah[".closePopupAfterEdit"] = 1;
$tdatapendaftaran_sekolah[".afterEditActionDetTable"] = "";

$tdatapendaftaran_sekolah[".add"] = true;
$tdatapendaftaran_sekolah[".afterAddAction"] = 1;
$tdatapendaftaran_sekolah[".closePopupAfterAdd"] = 1;
$tdatapendaftaran_sekolah[".afterAddActionDetTable"] = "";

$tdatapendaftaran_sekolah[".list"] = true;



$tdatapendaftaran_sekolah[".exportTo"] = true;


$tdatapendaftaran_sekolah[".delete"] = true;

$tdatapendaftaran_sekolah[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatapendaftaran_sekolah[".searchSaving"] = false;
//

$tdatapendaftaran_sekolah[".showSearchPanel"] = true;
		$tdatapendaftaran_sekolah[".flexibleSearch"] = true;

if (isMobile())
	$tdatapendaftaran_sekolah[".isUseAjaxSuggest"] = false;
else
	$tdatapendaftaran_sekolah[".isUseAjaxSuggest"] = true;

$tdatapendaftaran_sekolah[".rowHighlite"] = true;


			
			
			
			
															$tdatapendaftaran_sekolah[".isUsebuttonHandlers"] = true;

$tdatapendaftaran_sekolah[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapendaftaran_sekolah[".isUseTimeForSearch"] = false;





$tdatapendaftaran_sekolah[".allSearchFields"] = array();
$tdatapendaftaran_sekolah[".filterFields"] = array();
$tdatapendaftaran_sekolah[".requiredSearchFields"] = array();

$tdatapendaftaran_sekolah[".allSearchFields"][] = "sName";
	$tdatapendaftaran_sekolah[".allSearchFields"][] = "sCenter";
	$tdatapendaftaran_sekolah[".allSearchFields"][] = "sCode";
	$tdatapendaftaran_sekolah[".allSearchFields"][] = "sZone";
	

$tdatapendaftaran_sekolah[".googleLikeFields"] = array();
$tdatapendaftaran_sekolah[".googleLikeFields"][] = "sName";
$tdatapendaftaran_sekolah[".googleLikeFields"][] = "jumlah";
$tdatapendaftaran_sekolah[".googleLikeFields"][] = "opt";

$tdatapendaftaran_sekolah[".panelSearchFields"] = array();
$tdatapendaftaran_sekolah[".searchPanelOptions"] = array();
$tdatapendaftaran_sekolah[".panelSearchFields"][] = "sName";
	$tdatapendaftaran_sekolah[".panelSearchFields"][] = "sCenter";
	$tdatapendaftaran_sekolah[".panelSearchFields"][] = "sCode";
	$tdatapendaftaran_sekolah[".panelSearchFields"][] = "sZone";
	
$tdatapendaftaran_sekolah[".advSearchFields"] = array();
$tdatapendaftaran_sekolah[".advSearchFields"][] = "sName";
$tdatapendaftaran_sekolah[".advSearchFields"][] = "sCenter";
$tdatapendaftaran_sekolah[".advSearchFields"][] = "sCode";
$tdatapendaftaran_sekolah[".advSearchFields"][] = "sZone";

$tdatapendaftaran_sekolah[".tableType"] = "list";

$tdatapendaftaran_sekolah[".printerPageOrientation"] = 0;
$tdatapendaftaran_sekolah[".nPrinterPageScale"] = 100;

$tdatapendaftaran_sekolah[".nPrinterSplitRecords"] = 40;

$tdatapendaftaran_sekolah[".nPrinterPDFSplitRecords"] = 40;



$tdatapendaftaran_sekolah[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatapendaftaran_sekolah[".pageSize"] = 20;

$tdatapendaftaran_sekolah[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY sCenter, sCode";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatapendaftaran_sekolah[".strOrderBy"] = $tstrOrderBy;

$tdatapendaftaran_sekolah[".orderindexes"] = array();
$tdatapendaftaran_sekolah[".orderindexes"][] = array(3, (1 ? "ASC" : "DESC"), "sCenter");
$tdatapendaftaran_sekolah[".orderindexes"][] = array(4, (1 ? "ASC" : "DESC"), "sCode");

$tdatapendaftaran_sekolah[".sqlHead"] = "SELECT sno,  sName,  sCenter,  sCode,  sZone,  sno AS jumlah,  sno AS opt";
$tdatapendaftaran_sekolah[".sqlFrom"] = "FROM school";
$tdatapendaftaran_sekolah[".sqlWhereExpr"] = "";
$tdatapendaftaran_sekolah[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapendaftaran_sekolah[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapendaftaran_sekolah[".arrGroupsPerPage"] = $arrGPP;

$tdatapendaftaran_sekolah[".highlightSearchResults"] = true;

$tableKeyspendaftaran_sekolah = array();
$tableKeyspendaftaran_sekolah[] = "sno";
$tdatapendaftaran_sekolah[".Keys"] = $tableKeyspendaftaran_sekolah;

$tdatapendaftaran_sekolah[".listFields"] = array();
$tdatapendaftaran_sekolah[".listFields"][] = "sName";
$tdatapendaftaran_sekolah[".listFields"][] = "sCenter";
$tdatapendaftaran_sekolah[".listFields"][] = "sCode";
$tdatapendaftaran_sekolah[".listFields"][] = "sZone";
$tdatapendaftaran_sekolah[".listFields"][] = "jumlah";
$tdatapendaftaran_sekolah[".listFields"][] = "opt";

$tdatapendaftaran_sekolah[".hideMobileList"] = array();


$tdatapendaftaran_sekolah[".viewFields"] = array();

$tdatapendaftaran_sekolah[".addFields"] = array();
$tdatapendaftaran_sekolah[".addFields"][] = "sName";
$tdatapendaftaran_sekolah[".addFields"][] = "sCenter";
$tdatapendaftaran_sekolah[".addFields"][] = "sCode";
$tdatapendaftaran_sekolah[".addFields"][] = "sZone";

$tdatapendaftaran_sekolah[".masterListFields"] = array();
$tdatapendaftaran_sekolah[".masterListFields"][] = "sName";
$tdatapendaftaran_sekolah[".masterListFields"][] = "sno";
$tdatapendaftaran_sekolah[".masterListFields"][] = "sCenter";
$tdatapendaftaran_sekolah[".masterListFields"][] = "sCode";
$tdatapendaftaran_sekolah[".masterListFields"][] = "sZone";
$tdatapendaftaran_sekolah[".masterListFields"][] = "jumlah";
$tdatapendaftaran_sekolah[".masterListFields"][] = "opt";

$tdatapendaftaran_sekolah[".inlineAddFields"] = array();

$tdatapendaftaran_sekolah[".editFields"] = array();
$tdatapendaftaran_sekolah[".editFields"][] = "sName";
$tdatapendaftaran_sekolah[".editFields"][] = "sCenter";
$tdatapendaftaran_sekolah[".editFields"][] = "sCode";
$tdatapendaftaran_sekolah[".editFields"][] = "sZone";

$tdatapendaftaran_sekolah[".inlineEditFields"] = array();

$tdatapendaftaran_sekolah[".exportFields"] = array();
$tdatapendaftaran_sekolah[".exportFields"][] = "sName";
$tdatapendaftaran_sekolah[".exportFields"][] = "sCenter";
$tdatapendaftaran_sekolah[".exportFields"][] = "sCode";
$tdatapendaftaran_sekolah[".exportFields"][] = "sZone";

$tdatapendaftaran_sekolah[".importFields"] = array();

$tdatapendaftaran_sekolah[".printFields"] = array();

//	sno
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sno";
	$fdata["GoodName"] = "sno";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("pendaftaran_sekolah","sno");
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








	$tdatapendaftaran_sekolah["sno"] = $fdata;
//	sName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sName";
	$fdata["GoodName"] = "sName";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("pendaftaran_sekolah","sName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
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
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 392;

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




	$tdatapendaftaran_sekolah["sName"] = $fdata;
//	sCenter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sCenter";
	$fdata["GoodName"] = "sCenter";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("pendaftaran_sekolah","sCenter");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
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
			$edata["EditParams"].= " maxlength=15";

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




	$tdatapendaftaran_sekolah["sCenter"] = $fdata;
//	sCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sCode";
	$fdata["GoodName"] = "sCode";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("pendaftaran_sekolah","sCode");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
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




	$tdatapendaftaran_sekolah["sCode"] = $fdata;
//	sZone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sZone";
	$fdata["GoodName"] = "sZone";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("pendaftaran_sekolah","sZone");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

	
		$fdata["bEditPage"] = true;

	
	
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
	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["list"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "setting";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "fieldValue";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "fieldName";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;
	
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
	$edata = array("EditFormat" => "Lookup wizard");

	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "setting";
		$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;
	
	
		
	$edata["LinkField"] = "fieldValue";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "fieldName";

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;
	
// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypes"] = ".+$";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
	//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["add"] = $edata;
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

	
			
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = true;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatapendaftaran_sekolah["sZone"] = $fdata;
//	jumlah
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "jumlah";
	$fdata["GoodName"] = "jumlah";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("pendaftaran_sekolah","jumlah");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
	
		$fdata["strField"] = "sno";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sno";

	
	
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








	$tdatapendaftaran_sekolah["jumlah"] = $fdata;
//	opt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "opt";
	$fdata["GoodName"] = "opt";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("pendaftaran_sekolah","opt");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
	
		$fdata["strField"] = "sno";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sno";

	
	
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








	$tdatapendaftaran_sekolah["opt"] = $fdata;


$tables_data["pendaftaran_sekolah"]=&$tdatapendaftaran_sekolah;
$field_labels["pendaftaran_sekolah"] = &$fieldLabelspendaftaran_sekolah;
$fieldToolTips["pendaftaran_sekolah"] = &$fieldToolTipspendaftaran_sekolah;
$page_titles["pendaftaran_sekolah"] = &$pageTitlespendaftaran_sekolah;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["pendaftaran_sekolah"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["pendaftaran_sekolah"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_pendaftaran_sekolah()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sno,  sName,  sCenter,  sCode,  sZone,  sno AS jumlah,  sno AS opt";
$proto0["m_strFrom"] = "FROM school";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY sCenter, sCode";
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
	"m_srcTableName" => "pendaftaran_sekolah"
));

$proto5["m_sql"] = "sno";
$proto5["m_srcTableName"] = "pendaftaran_sekolah";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "sName",
	"m_strTable" => "school",
	"m_srcTableName" => "pendaftaran_sekolah"
));

$proto7["m_sql"] = "sName";
$proto7["m_srcTableName"] = "pendaftaran_sekolah";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "sCenter",
	"m_strTable" => "school",
	"m_srcTableName" => "pendaftaran_sekolah"
));

$proto9["m_sql"] = "sCenter";
$proto9["m_srcTableName"] = "pendaftaran_sekolah";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "school",
	"m_srcTableName" => "pendaftaran_sekolah"
));

$proto11["m_sql"] = "sCode";
$proto11["m_srcTableName"] = "pendaftaran_sekolah";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "sZone",
	"m_strTable" => "school",
	"m_srcTableName" => "pendaftaran_sekolah"
));

$proto13["m_sql"] = "sZone";
$proto13["m_srcTableName"] = "pendaftaran_sekolah";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "sno",
	"m_strTable" => "school",
	"m_srcTableName" => "pendaftaran_sekolah"
));

$proto15["m_sql"] = "sno";
$proto15["m_srcTableName"] = "pendaftaran_sekolah";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "jumlah";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "sno",
	"m_strTable" => "school",
	"m_srcTableName" => "pendaftaran_sekolah"
));

$proto17["m_sql"] = "sno";
$proto17["m_srcTableName"] = "pendaftaran_sekolah";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "opt";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto19=array();
$proto19["m_link"] = "SQLL_MAIN";
			$proto20=array();
$proto20["m_strName"] = "school";
$proto20["m_srcTableName"] = "pendaftaran_sekolah";
$proto20["m_columns"] = array();
$proto20["m_columns"][] = "sno";
$proto20["m_columns"][] = "sName";
$proto20["m_columns"][] = "sCenter";
$proto20["m_columns"][] = "sCode";
$proto20["m_columns"][] = "sZone";
$proto20["m_columns"][] = "sType";
$obj = new SQLTable($proto20);

$proto19["m_table"] = $obj;
$proto19["m_sql"] = "school";
$proto19["m_alias"] = "";
$proto19["m_srcTableName"] = "pendaftaran_sekolah";
$proto21=array();
$proto21["m_sql"] = "";
$proto21["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto21["m_column"]=$obj;
$proto21["m_contained"] = array();
$proto21["m_strCase"] = "";
$proto21["m_havingmode"] = false;
$proto21["m_inBrackets"] = false;
$proto21["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto21);

$proto19["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto19);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto23=array();
						$obj = new SQLField(array(
	"m_strName" => "sCenter",
	"m_strTable" => "school",
	"m_srcTableName" => "pendaftaran_sekolah"
));

$proto23["m_column"]=$obj;
$proto23["m_bAsc"] = 1;
$proto23["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto23);

$proto0["m_orderby"][]=$obj;					
												$proto25=array();
						$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "school",
	"m_srcTableName" => "pendaftaran_sekolah"
));

$proto25["m_column"]=$obj;
$proto25["m_bAsc"] = 1;
$proto25["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto25);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="pendaftaran_sekolah";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pendaftaran_sekolah = createSqlQuery_pendaftaran_sekolah();



							

$tdatapendaftaran_sekolah[".sqlquery"] = $queryData_pendaftaran_sekolah;

include_once(getabspath("include/pendaftaran_sekolah_events.php"));
$tableEvents["pendaftaran_sekolah"] = new eventclass_pendaftaran_sekolah;
$tdatapendaftaran_sekolah[".hasEvents"] = true;

$query = &$queryData_pendaftaran_sekolah;
$table = "pendaftaran_sekolah";
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