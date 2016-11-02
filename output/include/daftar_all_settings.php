<?php
require_once(getabspath("classes/cipherer.php"));




$tdatadaftar_all = array();
	$tdatadaftar_all[".truncateText"] = true;
	$tdatadaftar_all[".NumberOfChars"] = 80;
	$tdatadaftar_all[".ShortName"] = "daftar_all";
	$tdatadaftar_all[".OwnerID"] = "";
	$tdatadaftar_all[".OriginalTable"] = "exam_marking";

//	field labels
$fieldLabelsdaftar_all = array();
$fieldToolTipsdaftar_all = array();
$pageTitlesdaftar_all = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsdaftar_all["English"] = array();
	$fieldToolTipsdaftar_all["English"] = array();
	$pageTitlesdaftar_all["English"] = array();
	$fieldLabelsdaftar_all["English"]["sCode"] = "Kod Sekolah";
	$fieldToolTipsdaftar_all["English"]["sCode"] = "";
	$fieldLabelsdaftar_all["English"]["eYear"] = "Tahun";
	$fieldToolTipsdaftar_all["English"]["eYear"] = "";
	$fieldLabelsdaftar_all["English"]["eType"] = "Peperiksaan";
	$fieldToolTipsdaftar_all["English"]["eType"] = "";
	$fieldLabelsdaftar_all["English"]["calonTotal"] = "Jumlah Calon";
	$fieldToolTipsdaftar_all["English"]["calonTotal"] = "";
	$fieldLabelsdaftar_all["English"]["sid"] = "Sid";
	$fieldToolTipsdaftar_all["English"]["sid"] = "";
	$fieldLabelsdaftar_all["English"]["lelaki"] = "Lelaki";
	$fieldToolTipsdaftar_all["English"]["lelaki"] = "";
	$fieldLabelsdaftar_all["English"]["perempuan"] = "Perempuan";
	$fieldToolTipsdaftar_all["English"]["perempuan"] = "";
	if (count($fieldToolTipsdaftar_all["English"]))
		$tdatadaftar_all[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsdaftar_all[""] = array();
	$fieldToolTipsdaftar_all[""] = array();
	$pageTitlesdaftar_all[""] = array();
	$fieldLabelsdaftar_all[""]["sid"] = "Sid";
	$fieldToolTipsdaftar_all[""]["sid"] = "";
	$fieldLabelsdaftar_all[""]["lelaki"] = "Lelaki";
	$fieldToolTipsdaftar_all[""]["lelaki"] = "";
	$fieldLabelsdaftar_all[""]["perempuan"] = "Perempuan";
	$fieldToolTipsdaftar_all[""]["perempuan"] = "";
	if (count($fieldToolTipsdaftar_all[""]))
		$tdatadaftar_all[".isUseToolTips"] = true;
}


	$tdatadaftar_all[".NCSearch"] = true;



$tdatadaftar_all[".shortTableName"] = "daftar_all";
$tdatadaftar_all[".nSecOptions"] = 0;
$tdatadaftar_all[".recsPerRowList"] = 1;
$tdatadaftar_all[".recsPerRowPrint"] = 1;
$tdatadaftar_all[".mainTableOwnerID"] = "";
$tdatadaftar_all[".moveNext"] = 1;
$tdatadaftar_all[".entityType"] = 1;

$tdatadaftar_all[".strOriginalTableName"] = "exam_marking";




$tdatadaftar_all[".showAddInPopup"] = false;

$tdatadaftar_all[".showEditInPopup"] = false;

$tdatadaftar_all[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatadaftar_all[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatadaftar_all[".fieldsForRegister"] = array();

$tdatadaftar_all[".listAjax"] = false;

	$tdatadaftar_all[".audit"] = false;

	$tdatadaftar_all[".locking"] = false;



$tdatadaftar_all[".list"] = true;



$tdatadaftar_all[".exportTo"] = true;



$tdatadaftar_all[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatadaftar_all[".searchSaving"] = false;
//

$tdatadaftar_all[".showSearchPanel"] = true;
		$tdatadaftar_all[".flexibleSearch"] = true;

if (isMobile())
	$tdatadaftar_all[".isUseAjaxSuggest"] = false;
else
	$tdatadaftar_all[".isUseAjaxSuggest"] = true;

$tdatadaftar_all[".rowHighlite"] = true;


																				
$tdatadaftar_all[".addPageEvents"] = false;

// use timepicker for search panel
$tdatadaftar_all[".isUseTimeForSearch"] = false;





$tdatadaftar_all[".allSearchFields"] = array();
$tdatadaftar_all[".filterFields"] = array();
$tdatadaftar_all[".requiredSearchFields"] = array();

$tdatadaftar_all[".allSearchFields"][] = "eYear";
	$tdatadaftar_all[".allSearchFields"][] = "lelaki";
	$tdatadaftar_all[".allSearchFields"][] = "perempuan";
	

$tdatadaftar_all[".googleLikeFields"] = array();
$tdatadaftar_all[".googleLikeFields"][] = "lelaki";
$tdatadaftar_all[".googleLikeFields"][] = "perempuan";

$tdatadaftar_all[".panelSearchFields"] = array();
$tdatadaftar_all[".searchPanelOptions"] = array();
$tdatadaftar_all[".panelSearchFields"][] = "sCode";
	$tdatadaftar_all[".panelSearchFields"][] = "eYear";
	
$tdatadaftar_all[".advSearchFields"] = array();
$tdatadaftar_all[".advSearchFields"][] = "eYear";
$tdatadaftar_all[".advSearchFields"][] = "lelaki";
$tdatadaftar_all[".advSearchFields"][] = "perempuan";

$tdatadaftar_all[".tableType"] = "list";

$tdatadaftar_all[".printerPageOrientation"] = 0;
$tdatadaftar_all[".nPrinterPageScale"] = 100;

$tdatadaftar_all[".nPrinterSplitRecords"] = 40;

$tdatadaftar_all[".nPrinterPDFSplitRecords"] = 40;



$tdatadaftar_all[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdatadaftar_all[".pageSize"] = 20;

$tdatadaftar_all[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY exam_marking.eYear DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatadaftar_all[".strOrderBy"] = $tstrOrderBy;

$tdatadaftar_all[".orderindexes"] = array();
$tdatadaftar_all[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "exam_marking.eYear");

$tdatadaftar_all[".sqlHead"] = "SELECT exam_marking.sid,  exam_marking.sCode AS sCode,  exam_marking.eYear,  exam_marking.eType,  COUNT(exam_marking.sid) AS calonTotal,  COUNT(if(exam_marking.gender LIKE '%L%', exam_marking.sid, NULL)) AS lelaki,  COUNT(if(exam_marking.gender LIKE '%P%', exam_marking.sid, NULL)) AS perempuan";
$tdatadaftar_all[".sqlFrom"] = "FROM exam_marking  LEFT JOIN school ON exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType";
$tdatadaftar_all[".sqlWhereExpr"] = "";
$tdatadaftar_all[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatadaftar_all[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatadaftar_all[".arrGroupsPerPage"] = $arrGPP;

$tdatadaftar_all[".highlightSearchResults"] = true;

$tableKeysdaftar_all = array();
$tableKeysdaftar_all[] = "sCode";
$tdatadaftar_all[".Keys"] = $tableKeysdaftar_all;

$tdatadaftar_all[".listFields"] = array();
$tdatadaftar_all[".listFields"][] = "eYear";
$tdatadaftar_all[".listFields"][] = "lelaki";
$tdatadaftar_all[".listFields"][] = "perempuan";
$tdatadaftar_all[".listFields"][] = "calonTotal";

$tdatadaftar_all[".hideMobileList"] = array();


$tdatadaftar_all[".viewFields"] = array();

$tdatadaftar_all[".addFields"] = array();

$tdatadaftar_all[".masterListFields"] = array();
$tdatadaftar_all[".masterListFields"][] = "sid";
$tdatadaftar_all[".masterListFields"][] = "sCode";
$tdatadaftar_all[".masterListFields"][] = "eYear";
$tdatadaftar_all[".masterListFields"][] = "lelaki";
$tdatadaftar_all[".masterListFields"][] = "perempuan";
$tdatadaftar_all[".masterListFields"][] = "calonTotal";
$tdatadaftar_all[".masterListFields"][] = "eType";

$tdatadaftar_all[".inlineAddFields"] = array();

$tdatadaftar_all[".editFields"] = array();

$tdatadaftar_all[".inlineEditFields"] = array();

$tdatadaftar_all[".exportFields"] = array();
$tdatadaftar_all[".exportFields"][] = "eYear";
$tdatadaftar_all[".exportFields"][] = "lelaki";
$tdatadaftar_all[".exportFields"][] = "perempuan";
$tdatadaftar_all[".exportFields"][] = "calonTotal";

$tdatadaftar_all[".importFields"] = array();

$tdatadaftar_all[".printFields"] = array();

//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("daftar_all","sid");
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








	$tdatadaftar_all["sid"] = $fdata;
//	sCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sCode";
	$fdata["GoodName"] = "sCode";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("daftar_all","sCode");
	$fdata["FieldType"] = 200;

	
	
	
			
	
	
	
	
	
	
	
	
	
		$fdata["strField"] = "sCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "exam_marking.sCode";

	
	
			
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








	$tdatadaftar_all["sCode"] = $fdata;
//	eYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "eYear";
	$fdata["GoodName"] = "eYear";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("daftar_all","eYear");
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




	$tdatadaftar_all["eYear"] = $fdata;
//	eType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "eType";
	$fdata["GoodName"] = "eType";
	$fdata["ownerTable"] = "exam_marking";
	$fdata["Label"] = GetFieldLabel("daftar_all","eType");
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








	$tdatadaftar_all["eType"] = $fdata;
//	calonTotal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "calonTotal";
	$fdata["GoodName"] = "calonTotal";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("daftar_all","calonTotal");
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








	$tdatadaftar_all["calonTotal"] = $fdata;
//	lelaki
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "lelaki";
	$fdata["GoodName"] = "lelaki";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("daftar_all","lelaki");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "lelaki";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(if(exam_marking.gender LIKE '%L%', exam_marking.sid, NULL))";

	
	
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




	$tdatadaftar_all["lelaki"] = $fdata;
//	perempuan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "perempuan";
	$fdata["GoodName"] = "perempuan";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("daftar_all","perempuan");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "perempuan";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(if(exam_marking.gender LIKE '%P%', exam_marking.sid, NULL))";

	
	
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




	$tdatadaftar_all["perempuan"] = $fdata;


$tables_data["daftar_all"]=&$tdatadaftar_all;
$field_labels["daftar_all"] = &$fieldLabelsdaftar_all;
$fieldToolTips["daftar_all"] = &$fieldToolTipsdaftar_all;
$page_titles["daftar_all"] = &$pageTitlesdaftar_all;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["daftar_all"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["daftar_all"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_daftar_all()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "exam_marking.sid,  exam_marking.sCode AS sCode,  exam_marking.eYear,  exam_marking.eType,  COUNT(exam_marking.sid) AS calonTotal,  COUNT(if(exam_marking.gender LIKE '%L%', exam_marking.sid, NULL)) AS lelaki,  COUNT(if(exam_marking.gender LIKE '%P%', exam_marking.sid, NULL)) AS perempuan";
$proto0["m_strFrom"] = "FROM exam_marking  LEFT JOIN school ON exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType";
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
	"m_srcTableName" => "daftar_all"
));

$proto5["m_sql"] = "exam_marking.sid";
$proto5["m_srcTableName"] = "daftar_all";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "daftar_all"
));

$proto7["m_sql"] = "exam_marking.sCode";
$proto7["m_srcTableName"] = "daftar_all";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "sCode";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "daftar_all"
));

$proto9["m_sql"] = "exam_marking.eYear";
$proto9["m_srcTableName"] = "daftar_all";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "daftar_all"
));

$proto11["m_sql"] = "exam_marking.eType";
$proto11["m_srcTableName"] = "daftar_all";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$proto14=array();
$proto14["m_functiontype"] = "SQLF_COUNT";
$proto14["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "daftar_all"
));

$proto14["m_arguments"][]=$obj;
$proto14["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto14);

$proto13["m_sql"] = "COUNT(exam_marking.sid)";
$proto13["m_srcTableName"] = "daftar_all";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "calonTotal";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$proto17=array();
$proto17["m_functiontype"] = "SQLF_COUNT";
$proto17["m_arguments"] = array();
						$proto18=array();
$proto18["m_functiontype"] = "SQLF_CUSTOM";
$proto18["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.gender LIKE '%L%'"
));

$proto18["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto18["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto18["m_arguments"][]=$obj;
$proto18["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto18);

$proto17["m_arguments"][]=$obj;
$proto17["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto17);

$proto16["m_sql"] = "COUNT(if(exam_marking.gender LIKE '%L%', exam_marking.sid, NULL))";
$proto16["m_srcTableName"] = "daftar_all";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "lelaki";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$proto23=array();
$proto23["m_functiontype"] = "SQLF_COUNT";
$proto23["m_arguments"] = array();
						$proto24=array();
$proto24["m_functiontype"] = "SQLF_CUSTOM";
$proto24["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.gender LIKE '%P%'"
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

$proto22["m_sql"] = "COUNT(if(exam_marking.gender LIKE '%P%', exam_marking.sid, NULL))";
$proto22["m_srcTableName"] = "daftar_all";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "perempuan";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "exam_marking";
$proto29["m_srcTableName"] = "daftar_all";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "sid";
$proto29["m_columns"][] = "name";
$proto29["m_columns"][] = "gender";
$proto29["m_columns"][] = "birthdate";
$proto29["m_columns"][] = "birthCert";
$proto29["m_columns"][] = "nationality";
$proto29["m_columns"][] = "sCode";
$proto29["m_columns"][] = "eNo";
$proto29["m_columns"][] = "eYear";
$proto29["m_columns"][] = "eType";
$proto29["m_columns"][] = "s1";
$proto29["m_columns"][] = "s2";
$proto29["m_columns"][] = "s3";
$proto29["m_columns"][] = "s4";
$proto29["m_columns"][] = "s5";
$proto29["m_columns"][] = "s6";
$proto29["m_columns"][] = "s7";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "exam_marking";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "daftar_all";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
												$proto32=array();
$proto32["m_link"] = "SQLL_LEFTJOIN";
			$proto33=array();
$proto33["m_strName"] = "school";
$proto33["m_srcTableName"] = "daftar_all";
$proto33["m_columns"] = array();
$proto33["m_columns"][] = "sno";
$proto33["m_columns"][] = "sName";
$proto33["m_columns"][] = "sCenter";
$proto33["m_columns"][] = "sCode";
$proto33["m_columns"][] = "sZone";
$proto33["m_columns"][] = "sType";
$obj = new SQLTable($proto33);

$proto32["m_table"] = $obj;
$proto32["m_sql"] = "LEFT JOIN school ON exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType";
$proto32["m_alias"] = "";
$proto32["m_srcTableName"] = "daftar_all";
$proto34=array();
$proto34["m_sql"] = "exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType";
$proto34["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType"
));

$proto34["m_column"]=$obj;
$proto34["m_contained"] = array();
						$proto36=array();
$proto36["m_sql"] = "exam_marking.sCode = school.sCode";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "daftar_all"
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "= school.sCode";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

			$proto34["m_contained"][]=$obj;
						$proto38=array();
$proto38["m_sql"] = "exam_marking.eType = school.sType";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "daftar_all"
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "= school.sType";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

			$proto34["m_contained"][]=$obj;
$proto34["m_strCase"] = "";
$proto34["m_havingmode"] = false;
$proto34["m_inBrackets"] = false;
$proto34["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto34);

$proto32["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto32);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto40=array();
						$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "daftar_all"
));

$proto40["m_column"]=$obj;
$obj = new SQLGroupByItem($proto40);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
												$proto42=array();
						$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "daftar_all"
));

$proto42["m_column"]=$obj;
$proto42["m_bAsc"] = 0;
$proto42["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto42);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="daftar_all";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_daftar_all = createSqlQuery_daftar_all();



							

$tdatadaftar_all[".sqlquery"] = $queryData_daftar_all;

include_once(getabspath("include/daftar_all_events.php"));
$tableEvents["daftar_all"] = new eventclass_daftar_all;
$tdatadaftar_all[".hasEvents"] = true;

?>