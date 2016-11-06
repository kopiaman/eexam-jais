<?php
require_once(getabspath("classes/cipherer.php"));




$tdatasijil_psra = array();
	$tdatasijil_psra[".truncateText"] = true;
	$tdatasijil_psra[".NumberOfChars"] = 80;
	$tdatasijil_psra[".ShortName"] = "sijil_psra";
	$tdatasijil_psra[".OwnerID"] = "";
	$tdatasijil_psra[".OriginalTable"] = "exam_marking";

//	field labels
$fieldLabelssijil_psra = array();
$fieldToolTipssijil_psra = array();
$pageTitlessijil_psra = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssijil_psra["English"] = array();
	$fieldToolTipssijil_psra["English"] = array();
	$pageTitlessijil_psra["English"] = array();
	$fieldLabelssijil_psra["English"]["sCode"] = "Kod Sekolah";
	$fieldToolTipssijil_psra["English"]["sCode"] = "";
	$fieldLabelssijil_psra["English"]["eYear"] = "Tahun";
	$fieldToolTipssijil_psra["English"]["eYear"] = "";
	$fieldLabelssijil_psra["English"]["sName"] = "Nama Sekolah";
	$fieldToolTipssijil_psra["English"]["sName"] = "";
	$fieldLabelssijil_psra["English"]["sZone"] = "Zon";
	$fieldToolTipssijil_psra["English"]["sZone"] = "";
	$fieldLabelssijil_psra["English"]["calon"] = "Calon";
	$fieldToolTipssijil_psra["English"]["calon"] = "";
	$fieldLabelssijil_psra["English"]["jana"] = "Sijil";
	$fieldToolTipssijil_psra["English"]["jana"] = "";
	$fieldLabelssijil_psra["English"]["siudul"] = "Sidiul Jbtn";
	$fieldToolTipssijil_psra["English"]["siudul"] = "";
	$fieldLabelssijil_psra["English"]["sid"] = "Sid";
	$fieldToolTipssijil_psra["English"]["sid"] = "";
	$fieldLabelssijil_psra["English"]["eType"] = "Peperiksaan";
	$fieldToolTipssijil_psra["English"]["eType"] = "";
	$fieldLabelssijil_psra["English"]["daftar"] = "Pendaftaran";
	$fieldToolTipssijil_psra["English"]["daftar"] = "";
	$fieldLabelssijil_psra["English"]["slip"] = "Slip Kehadiran";
	$fieldToolTipssijil_psra["English"]["slip"] = "";
	$fieldLabelssijil_psra["English"]["siudul_sek"] = "Sidul Sek";
	$fieldToolTipssijil_psra["English"]["siudul_sek"] = "";
	if (count($fieldToolTipssijil_psra["English"]))
		$tdatasijil_psra[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelssijil_psra[""] = array();
	$fieldToolTipssijil_psra[""] = array();
	$pageTitlessijil_psra[""] = array();
	$fieldLabelssijil_psra[""]["slip"] = "Slip";
	$fieldToolTipssijil_psra[""]["slip"] = "";
	$fieldLabelssijil_psra[""]["siudul_sek"] = "Siudul Sek";
	$fieldToolTipssijil_psra[""]["siudul_sek"] = "";
	if (count($fieldToolTipssijil_psra[""]))
		$tdatasijil_psra[".isUseToolTips"] = true;
}


	$tdatasijil_psra[".NCSearch"] = true;



$tdatasijil_psra[".shortTableName"] = "sijil_psra";
$tdatasijil_psra[".nSecOptions"] = 0;
$tdatasijil_psra[".recsPerRowList"] = 1;
$tdatasijil_psra[".recsPerRowPrint"] = 1;
$tdatasijil_psra[".mainTableOwnerID"] = "";
$tdatasijil_psra[".moveNext"] = 1;
$tdatasijil_psra[".entityType"] = 1;

$tdatasijil_psra[".strOriginalTableName"] = "exam_marking";




$tdatasijil_psra[".showAddInPopup"] = false;

$tdatasijil_psra[".showEditInPopup"] = false;

$tdatasijil_psra[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatasijil_psra[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatasijil_psra[".fieldsForRegister"] = array();

$tdatasijil_psra[".listAjax"] = false;

	$tdatasijil_psra[".audit"] = false;

	$tdatasijil_psra[".locking"] = false;



$tdatasijil_psra[".list"] = true;






$tdatasijil_psra[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatasijil_psra[".searchSaving"] = false;
//

$tdatasijil_psra[".showSearchPanel"] = true;
		$tdatasijil_psra[".flexibleSearch"] = true;

if (isMobile())
	$tdatasijil_psra[".isUseAjaxSuggest"] = false;
else
	$tdatasijil_psra[".isUseAjaxSuggest"] = true;

$tdatasijil_psra[".rowHighlite"] = true;


			
			
																			
									$tdatasijil_psra[".isUsebuttonHandlers"] = true;

$tdatasijil_psra[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasijil_psra[".isUseTimeForSearch"] = false;





$tdatasijil_psra[".allSearchFields"] = array();
$tdatasijil_psra[".filterFields"] = array();
$tdatasijil_psra[".requiredSearchFields"] = array();

$tdatasijil_psra[".allSearchFields"][] = "sZone";
	$tdatasijil_psra[".allSearchFields"][] = "sCode";
	$tdatasijil_psra[".allSearchFields"][] = "sName";
	$tdatasijil_psra[".allSearchFields"][] = "eYear";
	

$tdatasijil_psra[".googleLikeFields"] = array();
$tdatasijil_psra[".googleLikeFields"][] = "sName";
$tdatasijil_psra[".googleLikeFields"][] = "daftar";
$tdatasijil_psra[".googleLikeFields"][] = "slip";
$tdatasijil_psra[".googleLikeFields"][] = "siudul_sek";

$tdatasijil_psra[".panelSearchFields"] = array();
$tdatasijil_psra[".searchPanelOptions"] = array();
$tdatasijil_psra[".panelSearchFields"][] = "sZone";
	$tdatasijil_psra[".panelSearchFields"][] = "sCode";
	$tdatasijil_psra[".panelSearchFields"][] = "sName";
	$tdatasijil_psra[".panelSearchFields"][] = "eYear";
	
$tdatasijil_psra[".advSearchFields"] = array();
$tdatasijil_psra[".advSearchFields"][] = "sZone";
$tdatasijil_psra[".advSearchFields"][] = "sCode";
$tdatasijil_psra[".advSearchFields"][] = "sName";
$tdatasijil_psra[".advSearchFields"][] = "eYear";

$tdatasijil_psra[".tableType"] = "list";

$tdatasijil_psra[".printerPageOrientation"] = 0;
$tdatasijil_psra[".nPrinterPageScale"] = 100;

$tdatasijil_psra[".nPrinterSplitRecords"] = 40;

$tdatasijil_psra[".nPrinterPDFSplitRecords"] = 40;



$tdatasijil_psra[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatasijil_psra[".pageSize"] = 20;

$tdatasijil_psra[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY exam_marking.eYear DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatasijil_psra[".strOrderBy"] = $tstrOrderBy;

$tdatasijil_psra[".orderindexes"] = array();
$tdatasijil_psra[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "exam_marking.eYear");

$tdatasijil_psra[".sqlHead"] = "SELECT exam_marking.sid,  exam_marking.sCode,  exam_marking.eYear,  exam_marking.eType,  school.sZone,  school.sName,  COUNT(exam_marking.sid) AS calon,  exam_marking.sid AS daftar,  exam_marking.sid AS slip,  exam_marking.sid AS jana,  exam_marking.sid AS siudul,  exam_marking.sid AS siudul_sek";
$tdatasijil_psra[".sqlFrom"] = "FROM exam_marking  LEFT JOIN school ON exam_marking.sCode = school.sCode";
$tdatasijil_psra[".sqlWhereExpr"] = "";
$tdatasijil_psra[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasijil_psra[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasijil_psra[".arrGroupsPerPage"] = $arrGPP;

$tdatasijil_psra[".highlightSearchResults"] = true;

$tableKeyssijil_psra = array();
$tableKeyssijil_psra[] = "sid";
$tdatasijil_psra[".Keys"] = $tableKeyssijil_psra;

$tdatasijil_psra[".listFields"] = array();
$tdatasijil_psra[".listFields"][] = "sCode";
$tdatasijil_psra[".listFields"][] = "sName";
$tdatasijil_psra[".listFields"][] = "eYear";
$tdatasijil_psra[".listFields"][] = "calon";
$tdatasijil_psra[".listFields"][] = "daftar";
$tdatasijil_psra[".listFields"][] = "slip";
$tdatasijil_psra[".listFields"][] = "jana";
$tdatasijil_psra[".listFields"][] = "siudul";
$tdatasijil_psra[".listFields"][] = "siudul_sek";

$tdatasijil_psra[".hideMobileList"] = array();


$tdatasijil_psra[".viewFields"] = array();

$tdatasijil_psra[".addFields"] = array();

$tdatasijil_psra[".masterListFields"] = array();
$tdatasijil_psra[".masterListFields"][] = "sZone";
$tdatasijil_psra[".masterListFields"][] = "siudul_sek";
$tdatasijil_psra[".masterListFields"][] = "sid";
$tdatasijil_psra[".masterListFields"][] = "sCode";
$tdatasijil_psra[".masterListFields"][] = "sName";
$tdatasijil_psra[".masterListFields"][] = "eYear";
$tdatasijil_psra[".masterListFields"][] = "calon";
$tdatasijil_psra[".masterListFields"][] = "eType";
$tdatasijil_psra[".masterListFields"][] = "daftar";
$tdatasijil_psra[".masterListFields"][] = "slip";
$tdatasijil_psra[".masterListFields"][] = "jana";
$tdatasijil_psra[".masterListFields"][] = "siudul";

$tdatasijil_psra[".inlineAddFields"] = array();

$tdatasijil_psra[".editFields"] = array();

$tdatasijil_psra[".inlineEditFields"] = array();

$tdatasijil_psra[".exportFields"] = array();

$tdatasijil_psra[".importFields"] = array();

$tdatasijil_psra[".printFields"] = array();

//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("sijil_psra","sid");
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








	$tdatasijil_psra["sid"] = $fdata;
//	sCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sCode";
	$fdata["GoodName"] = "sCode";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("sijil_psra","sCode");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
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




	$tdatasijil_psra["sCode"] = $fdata;
//	eYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "eYear";
	$fdata["GoodName"] = "eYear";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("sijil_psra","eYear");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
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




	$tdatasijil_psra["eYear"] = $fdata;
//	eType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "eType";
	$fdata["GoodName"] = "eType";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("sijil_psra","eType");
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








	$tdatasijil_psra["eType"] = $fdata;
//	sZone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sZone";
	$fdata["GoodName"] = "sZone";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("sijil_psra","sZone");
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




	$tdatasijil_psra["sZone"] = $fdata;
//	sName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sName";
	$fdata["GoodName"] = "sName";
	$fdata["ownerTable"] = "school";
	$fdata["Label"] = GetFieldLabel("sijil_psra","sName");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
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




	$tdatasijil_psra["sName"] = $fdata;
//	calon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "calon";
	$fdata["GoodName"] = "calon";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("sijil_psra","calon");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
	
		$fdata["strField"] = "calon";

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








	$tdatasijil_psra["calon"] = $fdata;
//	daftar
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "daftar";
	$fdata["GoodName"] = "daftar";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("sijil_psra","daftar");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
	
		$fdata["strField"] = "sid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.sid";

	
	
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








	$tdatasijil_psra["daftar"] = $fdata;
//	slip
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "slip";
	$fdata["GoodName"] = "slip";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("sijil_psra","slip");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
	
		$fdata["strField"] = "sid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.sid";

	
	
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








	$tdatasijil_psra["slip"] = $fdata;
//	jana
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "jana";
	$fdata["GoodName"] = "jana";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("sijil_psra","jana");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
	
		$fdata["strField"] = "sid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.sid";

	
	
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








	$tdatasijil_psra["jana"] = $fdata;
//	siudul
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "siudul";
	$fdata["GoodName"] = "siudul";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("sijil_psra","siudul");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
	
		$fdata["strField"] = "sid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.sid";

	
	
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








	$tdatasijil_psra["siudul"] = $fdata;
//	siudul_sek
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "siudul_sek";
	$fdata["GoodName"] = "siudul_sek";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("sijil_psra","siudul_sek");
	$fdata["FieldType"] = 3;

	
		$fdata["AutoInc"] = true;

	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
	
		$fdata["strField"] = "sid";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.sid";

	
	
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








	$tdatasijil_psra["siudul_sek"] = $fdata;


$tables_data["sijil_psra"]=&$tdatasijil_psra;
$field_labels["sijil_psra"] = &$fieldLabelssijil_psra;
$fieldToolTips["sijil_psra"] = &$fieldToolTipssijil_psra;
$page_titles["sijil_psra"] = &$pageTitlessijil_psra;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["sijil_psra"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["sijil_psra"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_sijil_psra()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "exam_marking.sid,  exam_marking.sCode,  exam_marking.eYear,  exam_marking.eType,  school.sZone,  school.sName,  COUNT(exam_marking.sid) AS calon,  exam_marking.sid AS daftar,  exam_marking.sid AS slip,  exam_marking.sid AS jana,  exam_marking.sid AS siudul,  exam_marking.sid AS siudul_sek";
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
	"m_srcTableName" => "sijil_psra"
));

$proto5["m_sql"] = "exam_marking.sid";
$proto5["m_srcTableName"] = "sijil_psra";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "sijil_psra"
));

$proto7["m_sql"] = "exam_marking.sCode";
$proto7["m_srcTableName"] = "sijil_psra";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "sijil_psra"
));

$proto9["m_sql"] = "exam_marking.eYear";
$proto9["m_srcTableName"] = "sijil_psra";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "sijil_psra"
));

$proto11["m_sql"] = "exam_marking.eType";
$proto11["m_srcTableName"] = "sijil_psra";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "sZone",
	"m_strTable" => "school",
	"m_srcTableName" => "sijil_psra"
));

$proto13["m_sql"] = "school.sZone";
$proto13["m_srcTableName"] = "sijil_psra";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "sName",
	"m_strTable" => "school",
	"m_srcTableName" => "sijil_psra"
));

$proto15["m_sql"] = "school.sName";
$proto15["m_srcTableName"] = "sijil_psra";
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
	"m_srcTableName" => "sijil_psra"
));

$proto18["m_arguments"][]=$obj;
$proto18["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto18);

$proto17["m_sql"] = "COUNT(exam_marking.sid)";
$proto17["m_srcTableName"] = "sijil_psra";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "calon";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "sijil_psra"
));

$proto20["m_sql"] = "exam_marking.sid";
$proto20["m_srcTableName"] = "sijil_psra";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "daftar";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "sijil_psra"
));

$proto22["m_sql"] = "exam_marking.sid";
$proto22["m_srcTableName"] = "sijil_psra";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "slip";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "sijil_psra"
));

$proto24["m_sql"] = "exam_marking.sid";
$proto24["m_srcTableName"] = "sijil_psra";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "jana";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "sijil_psra"
));

$proto26["m_sql"] = "exam_marking.sid";
$proto26["m_srcTableName"] = "sijil_psra";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "siudul";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "sijil_psra"
));

$proto28["m_sql"] = "exam_marking.sid";
$proto28["m_srcTableName"] = "sijil_psra";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "siudul_sek";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto30=array();
$proto30["m_link"] = "SQLL_MAIN";
			$proto31=array();
$proto31["m_strName"] = "exam_marking";
$proto31["m_srcTableName"] = "sijil_psra";
$proto31["m_columns"] = array();
$proto31["m_columns"][] = "sid";
$proto31["m_columns"][] = "name";
$proto31["m_columns"][] = "gender";
$proto31["m_columns"][] = "birthdate";
$proto31["m_columns"][] = "birthCert";
$proto31["m_columns"][] = "nationality";
$proto31["m_columns"][] = "sCode";
$proto31["m_columns"][] = "eNo";
$proto31["m_columns"][] = "eYear";
$proto31["m_columns"][] = "eType";
$proto31["m_columns"][] = "s1";
$proto31["m_columns"][] = "s2";
$proto31["m_columns"][] = "s3";
$proto31["m_columns"][] = "s4";
$proto31["m_columns"][] = "s5";
$proto31["m_columns"][] = "s6";
$proto31["m_columns"][] = "s7";
$obj = new SQLTable($proto31);

$proto30["m_table"] = $obj;
$proto30["m_sql"] = "exam_marking";
$proto30["m_alias"] = "";
$proto30["m_srcTableName"] = "sijil_psra";
$proto32=array();
$proto32["m_sql"] = "";
$proto32["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto32["m_column"]=$obj;
$proto32["m_contained"] = array();
$proto32["m_strCase"] = "";
$proto32["m_havingmode"] = false;
$proto32["m_inBrackets"] = false;
$proto32["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto32);

$proto30["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto30);

$proto0["m_fromlist"][]=$obj;
												$proto34=array();
$proto34["m_link"] = "SQLL_LEFTJOIN";
			$proto35=array();
$proto35["m_strName"] = "school";
$proto35["m_srcTableName"] = "sijil_psra";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "sno";
$proto35["m_columns"][] = "sName";
$proto35["m_columns"][] = "sCenter";
$proto35["m_columns"][] = "sCode";
$proto35["m_columns"][] = "sZone";
$proto35["m_columns"][] = "sType";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "LEFT JOIN school ON exam_marking.sCode = school.sCode";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "sijil_psra";
$proto36=array();
$proto36["m_sql"] = "exam_marking.sCode = school.sCode";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "sijil_psra"
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "= school.sCode";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto38=array();
						$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "sijil_psra"
));

$proto38["m_column"]=$obj;
$obj = new SQLGroupByItem($proto38);

$proto0["m_groupby"][]=$obj;
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "sijil_psra"
));

$proto40["m_column"]=$obj;
$obj = new SQLGroupByItem($proto40);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "sijil_psra"
));

$proto42["m_column"]=$obj;
$proto42["m_bAsc"] = 0;
$proto42["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto42);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="sijil_psra";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sijil_psra = createSqlQuery_sijil_psra();



												

$tdatasijil_psra[".sqlquery"] = $queryData_sijil_psra;

include_once(getabspath("include/sijil_psra_events.php"));
$tableEvents["sijil_psra"] = new eventclass_sijil_psra;
$tdatasijil_psra[".hasEvents"] = true;

$query = &$queryData_sijil_psra;
$table = "sijil_psra";
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