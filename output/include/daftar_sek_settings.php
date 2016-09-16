<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadaftar_sek = array();
	$tdatadaftar_sek[".truncateText"] = true;
	$tdatadaftar_sek[".NumberOfChars"] = 80;
	$tdatadaftar_sek[".ShortName"] = "daftar_sek";
	$tdatadaftar_sek[".OwnerID"] = "";
	$tdatadaftar_sek[".OriginalTable"] = "exam_marking";

//	field labels
$fieldLabelsdaftar_sek = array();
$fieldToolTipsdaftar_sek = array();
$pageTitlesdaftar_sek = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdaftar_sek["English"] = array();
	$fieldToolTipsdaftar_sek["English"] = array();
	$pageTitlesdaftar_sek["English"] = array();
	$fieldLabelsdaftar_sek["English"]["sCode"] = "Kod Sekolah";
	$fieldToolTipsdaftar_sek["English"]["sCode"] = "";
	$fieldLabelsdaftar_sek["English"]["eYear"] = "Tahun";
	$fieldToolTipsdaftar_sek["English"]["eYear"] = "";
	$fieldLabelsdaftar_sek["English"]["eType"] = "Peperiksaan";
	$fieldToolTipsdaftar_sek["English"]["eType"] = "";
	$fieldLabelsdaftar_sek["English"]["sZone"] = "Zon";
	$fieldToolTipsdaftar_sek["English"]["sZone"] = "";
	$fieldLabelsdaftar_sek["English"]["sName"] = "Nama Sekolah";
	$fieldToolTipsdaftar_sek["English"]["sName"] = "";
	$fieldLabelsdaftar_sek["English"]["calonTotal"] = "Jumlah Calon";
	$fieldToolTipsdaftar_sek["English"]["calonTotal"] = "";
	$fieldLabelsdaftar_sek["English"]["sid"] = "Sid";
	$fieldToolTipsdaftar_sek["English"]["sid"] = "";
	$fieldLabelsdaftar_sek["English"]["sCenter"] = "Kod Pusat";
	$fieldToolTipsdaftar_sek["English"]["sCenter"] = "";
	$fieldLabelsdaftar_sek["English"]["lelaki"] = "Lelaki";
	$fieldToolTipsdaftar_sek["English"]["lelaki"] = "";
	$fieldLabelsdaftar_sek["English"]["perempuan"] = "Perempuan";
	$fieldToolTipsdaftar_sek["English"]["perempuan"] = "";
	if (count($fieldToolTipsdaftar_sek["English"]))
		$tdatadaftar_sek[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdaftar_sek[""] = array();
	$fieldToolTipsdaftar_sek[""] = array();
	$pageTitlesdaftar_sek[""] = array();
	$fieldLabelsdaftar_sek[""]["sid"] = "Sid";
	$fieldToolTipsdaftar_sek[""]["sid"] = "";
	$fieldLabelsdaftar_sek[""]["sCenter"] = "S Center";
	$fieldToolTipsdaftar_sek[""]["sCenter"] = "";
	$fieldLabelsdaftar_sek[""]["lelaki"] = "Lelaki";
	$fieldToolTipsdaftar_sek[""]["lelaki"] = "";
	$fieldLabelsdaftar_sek[""]["perempuan"] = "Perempuan";
	$fieldToolTipsdaftar_sek[""]["perempuan"] = "";
	if (count($fieldToolTipsdaftar_sek[""]))
		$tdatadaftar_sek[".isUseToolTips"] = true;
}


	$tdatadaftar_sek[".NCSearch"] = true;



$tdatadaftar_sek[".shortTableName"] = "daftar_sek";
$tdatadaftar_sek[".nSecOptions"] = 0;
$tdatadaftar_sek[".recsPerRowList"] = 1;
$tdatadaftar_sek[".recsPerRowPrint"] = 1;
$tdatadaftar_sek[".mainTableOwnerID"] = "";
$tdatadaftar_sek[".moveNext"] = 1;
$tdatadaftar_sek[".entityType"] = 1;

$tdatadaftar_sek[".strOriginalTableName"] = "exam_marking";




$tdatadaftar_sek[".showAddInPopup"] = false;

$tdatadaftar_sek[".showEditInPopup"] = false;

$tdatadaftar_sek[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadaftar_sek[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadaftar_sek[".fieldsForRegister"] = array();

$tdatadaftar_sek[".listAjax"] = false;

	$tdatadaftar_sek[".audit"] = false;

	$tdatadaftar_sek[".locking"] = false;



$tdatadaftar_sek[".list"] = true;



$tdatadaftar_sek[".exportTo"] = true;



$tdatadaftar_sek[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatadaftar_sek[".searchSaving"] = false;
//

$tdatadaftar_sek[".showSearchPanel"] = true;
		$tdatadaftar_sek[".flexibleSearch"] = true;

if (isMobile())
	$tdatadaftar_sek[".isUseAjaxSuggest"] = false;
else
	$tdatadaftar_sek[".isUseAjaxSuggest"] = true;

$tdatadaftar_sek[".rowHighlite"] = true;


																				
$tdatadaftar_sek[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadaftar_sek[".isUseTimeForSearch"] = false;





$tdatadaftar_sek[".allSearchFields"] = array();
$tdatadaftar_sek[".filterFields"] = array();
$tdatadaftar_sek[".requiredSearchFields"] = array();

$tdatadaftar_sek[".allSearchFields"][] = "sZone";
	$tdatadaftar_sek[".allSearchFields"][] = "sCenter";
	$tdatadaftar_sek[".allSearchFields"][] = "sCode";
	$tdatadaftar_sek[".allSearchFields"][] = "sName";
	$tdatadaftar_sek[".allSearchFields"][] = "eYear";
	$tdatadaftar_sek[".allSearchFields"][] = "lelaki";
	$tdatadaftar_sek[".allSearchFields"][] = "perempuan";
	

$tdatadaftar_sek[".googleLikeFields"] = array();
$tdatadaftar_sek[".googleLikeFields"][] = "sCenter";
$tdatadaftar_sek[".googleLikeFields"][] = "sName";
$tdatadaftar_sek[".googleLikeFields"][] = "lelaki";
$tdatadaftar_sek[".googleLikeFields"][] = "perempuan";

$tdatadaftar_sek[".panelSearchFields"] = array();
$tdatadaftar_sek[".searchPanelOptions"] = array();
$tdatadaftar_sek[".panelSearchFields"][] = "sZone";
	$tdatadaftar_sek[".panelSearchFields"][] = "sCenter";
	$tdatadaftar_sek[".panelSearchFields"][] = "sCode";
	$tdatadaftar_sek[".panelSearchFields"][] = "sName";
	$tdatadaftar_sek[".panelSearchFields"][] = "eYear";
	
$tdatadaftar_sek[".advSearchFields"] = array();
$tdatadaftar_sek[".advSearchFields"][] = "sZone";
$tdatadaftar_sek[".advSearchFields"][] = "sCenter";
$tdatadaftar_sek[".advSearchFields"][] = "sCode";
$tdatadaftar_sek[".advSearchFields"][] = "sName";
$tdatadaftar_sek[".advSearchFields"][] = "eYear";
$tdatadaftar_sek[".advSearchFields"][] = "lelaki";
$tdatadaftar_sek[".advSearchFields"][] = "perempuan";

$tdatadaftar_sek[".tableType"] = "list";

$tdatadaftar_sek[".printerPageOrientation"] = 0;
$tdatadaftar_sek[".nPrinterPageScale"] = 100;

$tdatadaftar_sek[".nPrinterSplitRecords"] = 40;

$tdatadaftar_sek[".nPrinterPDFSplitRecords"] = 40;



$tdatadaftar_sek[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatadaftar_sek[".pageSize"] = 20;

$tdatadaftar_sek[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY exam_marking.eYear DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadaftar_sek[".strOrderBy"] = $tstrOrderBy;

$tdatadaftar_sek[".orderindexes"] = array();
$tdatadaftar_sek[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "exam_marking.eYear");

$tdatadaftar_sek[".sqlHead"] = "SELECT exam_marking.sid,  exam_marking.sCode AS sCode,  exam_marking.eYear,  exam_marking.eType,  sCenter,  sName,  sZone,  COUNT(exam_marking.sid) AS calonTotal,  COUNT(if(exam_marking.gender='L', exam_marking.sid, NULL)) AS lelaki,  COUNT(if(exam_marking.gender='P', exam_marking.sid, NULL)) AS perempuan";
$tdatadaftar_sek[".sqlFrom"] = "FROM exam_marking  INNER JOIN school ON exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType";
$tdatadaftar_sek[".sqlWhereExpr"] = "exam_marking.eType ='PSRA'";
$tdatadaftar_sek[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadaftar_sek[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadaftar_sek[".arrGroupsPerPage"] = $arrGPP;

$tdatadaftar_sek[".highlightSearchResults"] = true;

$tableKeysdaftar_sek = array();
$tableKeysdaftar_sek[] = "sCode";
$tdatadaftar_sek[".Keys"] = $tableKeysdaftar_sek;

$tdatadaftar_sek[".listFields"] = array();
$tdatadaftar_sek[".listFields"][] = "sCode";
$tdatadaftar_sek[".listFields"][] = "sName";
$tdatadaftar_sek[".listFields"][] = "eYear";
$tdatadaftar_sek[".listFields"][] = "lelaki";
$tdatadaftar_sek[".listFields"][] = "perempuan";
$tdatadaftar_sek[".listFields"][] = "calonTotal";

$tdatadaftar_sek[".hideMobileList"] = array();


$tdatadaftar_sek[".viewFields"] = array();

$tdatadaftar_sek[".addFields"] = array();

$tdatadaftar_sek[".masterListFields"] = array();
$tdatadaftar_sek[".masterListFields"][] = "sZone";
$tdatadaftar_sek[".masterListFields"][] = "sCenter";
$tdatadaftar_sek[".masterListFields"][] = "sid";
$tdatadaftar_sek[".masterListFields"][] = "sCode";
$tdatadaftar_sek[".masterListFields"][] = "sName";
$tdatadaftar_sek[".masterListFields"][] = "eYear";
$tdatadaftar_sek[".masterListFields"][] = "lelaki";
$tdatadaftar_sek[".masterListFields"][] = "perempuan";
$tdatadaftar_sek[".masterListFields"][] = "calonTotal";
$tdatadaftar_sek[".masterListFields"][] = "eType";

$tdatadaftar_sek[".inlineAddFields"] = array();

$tdatadaftar_sek[".editFields"] = array();

$tdatadaftar_sek[".inlineEditFields"] = array();

$tdatadaftar_sek[".exportFields"] = array();
$tdatadaftar_sek[".exportFields"][] = "sCenter";
$tdatadaftar_sek[".exportFields"][] = "sCode";
$tdatadaftar_sek[".exportFields"][] = "sName";
$tdatadaftar_sek[".exportFields"][] = "eYear";
$tdatadaftar_sek[".exportFields"][] = "lelaki";
$tdatadaftar_sek[".exportFields"][] = "perempuan";
$tdatadaftar_sek[".exportFields"][] = "calonTotal";

$tdatadaftar_sek[".importFields"] = array();

$tdatadaftar_sek[".printFields"] = array();

//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("daftar_sek","sid");
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








	$tdatadaftar_sek["sid"] = $fdata;
//	sCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sCode";
	$fdata["GoodName"] = "sCode";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("daftar_sek","sCode");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

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




	$tdatadaftar_sek["sCode"] = $fdata;
//	eYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "eYear";
	$fdata["GoodName"] = "eYear";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("daftar_sek","eYear");
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




	$tdatadaftar_sek["eYear"] = $fdata;
//	eType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "eType";
	$fdata["GoodName"] = "eType";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("daftar_sek","eType");
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








	$tdatadaftar_sek["eType"] = $fdata;
//	sCenter
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "sCenter";
	$fdata["GoodName"] = "sCenter";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("daftar_sek","sCenter");
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




	$tdatadaftar_sek["sCenter"] = $fdata;
//	sName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "sName";
	$fdata["GoodName"] = "sName";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("daftar_sek","sName");
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




	$tdatadaftar_sek["sName"] = $fdata;
//	sZone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sZone";
	$fdata["GoodName"] = "sZone";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("daftar_sek","sZone");
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




	$tdatadaftar_sek["sZone"] = $fdata;
//	calonTotal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "calonTotal";
	$fdata["GoodName"] = "calonTotal";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("daftar_sek","calonTotal");
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








	$tdatadaftar_sek["calonTotal"] = $fdata;
//	lelaki
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "lelaki";
	$fdata["GoodName"] = "lelaki";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("daftar_sek","lelaki");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "lelaki";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(if(exam_marking.gender='L', exam_marking.sid, NULL))";

	
	
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




	$tdatadaftar_sek["lelaki"] = $fdata;
//	perempuan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "perempuan";
	$fdata["GoodName"] = "perempuan";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("daftar_sek","perempuan");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "perempuan";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(if(exam_marking.gender='P', exam_marking.sid, NULL))";

	
	
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




	$tdatadaftar_sek["perempuan"] = $fdata;


$tables_data["daftar_sek"]=&$tdatadaftar_sek;
$field_labels["daftar_sek"] = &$fieldLabelsdaftar_sek;
$fieldToolTips["daftar_sek"] = &$fieldToolTipsdaftar_sek;
$page_titles["daftar_sek"] = &$pageTitlesdaftar_sek;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["daftar_sek"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["daftar_sek"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_daftar_sek()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "exam_marking.sid,  exam_marking.sCode AS sCode,  exam_marking.eYear,  exam_marking.eType,  sCenter,  sName,  sZone,  COUNT(exam_marking.sid) AS calonTotal,  COUNT(if(exam_marking.gender='L', exam_marking.sid, NULL)) AS lelaki,  COUNT(if(exam_marking.gender='P', exam_marking.sid, NULL)) AS perempuan";
$proto0["m_strFrom"] = "FROM exam_marking  INNER JOIN school ON exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType";
$proto0["m_strWhere"] = "exam_marking.eType ='PSRA'";
$proto0["m_strOrderBy"] = "ORDER BY exam_marking.eYear DESC";
$proto0["m_strTail"] = "";
			$proto0["cipherer"] = null;
$proto1=array();
$proto1["m_sql"] = "exam_marking.eType ='PSRA'";
$proto1["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "daftar_sek"
));

$proto1["m_column"]=$obj;
$proto1["m_contained"] = array();
$proto1["m_strCase"] = "='PSRA'";
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
	"m_srcTableName" => "daftar_sek"
));

$proto5["m_sql"] = "exam_marking.sid";
$proto5["m_srcTableName"] = "daftar_sek";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "daftar_sek"
));

$proto7["m_sql"] = "exam_marking.sCode";
$proto7["m_srcTableName"] = "daftar_sek";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "sCode";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "daftar_sek"
));

$proto9["m_sql"] = "exam_marking.eYear";
$proto9["m_srcTableName"] = "daftar_sek";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "daftar_sek"
));

$proto11["m_sql"] = "exam_marking.eType";
$proto11["m_srcTableName"] = "daftar_sek";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sCenter"
));

$proto13["m_sql"] = "sCenter";
$proto13["m_srcTableName"] = "daftar_sek";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sName"
));

$proto15["m_sql"] = "sName";
$proto15["m_srcTableName"] = "daftar_sek";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sZone"
));

$proto17["m_sql"] = "sZone";
$proto17["m_srcTableName"] = "daftar_sek";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$proto20=array();
$proto20["m_functiontype"] = "SQLF_COUNT";
$proto20["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "daftar_sek"
));

$proto20["m_arguments"][]=$obj;
$proto20["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto20);

$proto19["m_sql"] = "COUNT(exam_marking.sid)";
$proto19["m_srcTableName"] = "daftar_sek";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "calonTotal";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$proto23=array();
$proto23["m_functiontype"] = "SQLF_COUNT";
$proto23["m_arguments"] = array();
						$proto24=array();
$proto24["m_functiontype"] = "SQLF_CUSTOM";
$proto24["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.gender='L'"
));

$proto24["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto24["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto24["m_arguments"][]=$obj;
$proto24["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto24);

$proto23["m_arguments"][]=$obj;
$proto23["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto23);

$proto22["m_sql"] = "COUNT(if(exam_marking.gender='L', exam_marking.sid, NULL))";
$proto22["m_srcTableName"] = "daftar_sek";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "lelaki";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$proto29=array();
$proto29["m_functiontype"] = "SQLF_COUNT";
$proto29["m_arguments"] = array();
						$proto30=array();
$proto30["m_functiontype"] = "SQLF_CUSTOM";
$proto30["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.gender='P'"
));

$proto30["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto30["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto30["m_arguments"][]=$obj;
$proto30["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto30);

$proto29["m_arguments"][]=$obj;
$proto29["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto29);

$proto28["m_sql"] = "COUNT(if(exam_marking.gender='P', exam_marking.sid, NULL))";
$proto28["m_srcTableName"] = "daftar_sek";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "perempuan";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "exam_marking";
$proto35["m_srcTableName"] = "daftar_sek";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "sid";
$proto35["m_columns"][] = "name";
$proto35["m_columns"][] = "gender";
$proto35["m_columns"][] = "birthdate";
$proto35["m_columns"][] = "birthCert";
$proto35["m_columns"][] = "nationality";
$proto35["m_columns"][] = "sCode";
$proto35["m_columns"][] = "eNo";
$proto35["m_columns"][] = "eYear";
$proto35["m_columns"][] = "eType";
$proto35["m_columns"][] = "s1";
$proto35["m_columns"][] = "s2";
$proto35["m_columns"][] = "s3";
$proto35["m_columns"][] = "s4";
$proto35["m_columns"][] = "s5";
$proto35["m_columns"][] = "s6";
$proto35["m_columns"][] = "s7";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "exam_marking";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "daftar_sek";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
												$proto38=array();
$proto38["m_link"] = "SQLL_INNERJOIN";
			$proto39=array();
$proto39["m_strName"] = "school";
$proto39["m_srcTableName"] = "daftar_sek";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "sno";
$proto39["m_columns"][] = "sName";
$proto39["m_columns"][] = "sCenter";
$proto39["m_columns"][] = "sCode";
$proto39["m_columns"][] = "sZone";
$proto39["m_columns"][] = "sType";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "INNER JOIN school ON exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "daftar_sek";
$proto40=array();
$proto40["m_sql"] = "exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType";
$proto40["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType"
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
						$proto42=array();
$proto42["m_sql"] = "exam_marking.sCode = school.sCode";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "daftar_sek"
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "= school.sCode";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

			$proto40["m_contained"][]=$obj;
						$proto44=array();
$proto44["m_sql"] = "exam_marking.eType = school.sType";
$proto44["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "daftar_sek"
));

$proto44["m_column"]=$obj;
$proto44["m_contained"] = array();
$proto44["m_strCase"] = "= school.sType";
$proto44["m_havingmode"] = false;
$proto44["m_inBrackets"] = false;
$proto44["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto44);

			$proto40["m_contained"][]=$obj;
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto46=array();
						$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "daftar_sek"
));

$proto46["m_column"]=$obj;
$obj = new SQLGroupByItem($proto46);

$proto0["m_groupby"][]=$obj;
												$proto48=array();
						$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "daftar_sek"
));

$proto48["m_column"]=$obj;
$obj = new SQLGroupByItem($proto48);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto50=array();
						$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "daftar_sek"
));

$proto50["m_column"]=$obj;
$proto50["m_bAsc"] = 0;
$proto50["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto50);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="daftar_sek";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_daftar_sek = createSqlQuery_daftar_sek();



										

$tdatadaftar_sek[".sqlquery"] = $queryData_daftar_sek;

include_once(getabspath("include/daftar_sek_events.php"));
$tableEvents["daftar_sek"] = new eventclass_daftar_sek;
$tdatadaftar_sek[".hasEvents"] = true;

$query = &$queryData_daftar_sek;
$table = "daftar_sek";
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