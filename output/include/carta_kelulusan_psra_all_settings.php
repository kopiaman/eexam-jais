<?php
require_once(getabspath("classes/cipherer.php"));




$tdatacarta_kelulusan_psra_all = array();
	$tdatacarta_kelulusan_psra_all[".ShortName"] = "carta_kelulusan_psra_all";
	$tdatacarta_kelulusan_psra_all[".OwnerID"] = "";
	$tdatacarta_kelulusan_psra_all[".OriginalTable"] = "exam_marking";

//	field labels
$fieldLabelscarta_kelulusan_psra_all = array();
$fieldToolTipscarta_kelulusan_psra_all = array();
$pageTitlescarta_kelulusan_psra_all = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscarta_kelulusan_psra_all["English"] = array();
	$fieldToolTipscarta_kelulusan_psra_all["English"] = array();
	$pageTitlescarta_kelulusan_psra_all["English"] = array();
	$fieldLabelscarta_kelulusan_psra_all["English"]["eYear"] = "Tahun";
	$fieldToolTipscarta_kelulusan_psra_all["English"]["eYear"] = "";
	$fieldLabelscarta_kelulusan_psra_all["English"]["lulus"] = "Lulus";
	$fieldToolTipscarta_kelulusan_psra_all["English"]["lulus"] = "";
	$fieldLabelscarta_kelulusan_psra_all["English"]["gagal"] = "Gagal";
	$fieldToolTipscarta_kelulusan_psra_all["English"]["gagal"] = "";
	if (count($fieldToolTipscarta_kelulusan_psra_all["English"]))
		$tdatacarta_kelulusan_psra_all[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelscarta_kelulusan_psra_all[""] = array();
	$fieldToolTipscarta_kelulusan_psra_all[""] = array();
	$pageTitlescarta_kelulusan_psra_all[""] = array();
	if (count($fieldToolTipscarta_kelulusan_psra_all[""]))
		$tdatacarta_kelulusan_psra_all[".isUseToolTips"] = true;
}


	$tdatacarta_kelulusan_psra_all[".NCSearch"] = true;

	$tdatacarta_kelulusan_psra_all[".ChartRefreshTime"] = 0;


$tdatacarta_kelulusan_psra_all[".shortTableName"] = "carta_kelulusan_psra_all";
$tdatacarta_kelulusan_psra_all[".nSecOptions"] = 0;
$tdatacarta_kelulusan_psra_all[".recsPerRowList"] = 1;
$tdatacarta_kelulusan_psra_all[".recsPerRowPrint"] = 1;
$tdatacarta_kelulusan_psra_all[".mainTableOwnerID"] = "";
$tdatacarta_kelulusan_psra_all[".moveNext"] = 1;
$tdatacarta_kelulusan_psra_all[".entityType"] = 3;

$tdatacarta_kelulusan_psra_all[".strOriginalTableName"] = "exam_marking";




$tdatacarta_kelulusan_psra_all[".showAddInPopup"] = false;

$tdatacarta_kelulusan_psra_all[".showEditInPopup"] = false;

$tdatacarta_kelulusan_psra_all[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdatacarta_kelulusan_psra_all[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdatacarta_kelulusan_psra_all[".fieldsForRegister"] = array();

$tdatacarta_kelulusan_psra_all[".listAjax"] = false;

	$tdatacarta_kelulusan_psra_all[".audit"] = false;

	$tdatacarta_kelulusan_psra_all[".locking"] = false;


$tdatacarta_kelulusan_psra_all[".add"] = true;
$tdatacarta_kelulusan_psra_all[".afterAddAction"] = 1;
$tdatacarta_kelulusan_psra_all[".closePopupAfterAdd"] = 1;
$tdatacarta_kelulusan_psra_all[".afterAddActionDetTable"] = "";

$tdatacarta_kelulusan_psra_all[".list"] = true;

$tdatacarta_kelulusan_psra_all[".inlineAdd"] = true;





$tdatacarta_kelulusan_psra_all[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdatacarta_kelulusan_psra_all[".searchSaving"] = false;
//

$tdatacarta_kelulusan_psra_all[".showSearchPanel"] = true;
		$tdatacarta_kelulusan_psra_all[".flexibleSearch"] = true;

if (isMobile())
	$tdatacarta_kelulusan_psra_all[".isUseAjaxSuggest"] = false;
else
	$tdatacarta_kelulusan_psra_all[".isUseAjaxSuggest"] = true;



																				
$tdatacarta_kelulusan_psra_all[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacarta_kelulusan_psra_all[".isUseTimeForSearch"] = false;





$tdatacarta_kelulusan_psra_all[".allSearchFields"] = array();
$tdatacarta_kelulusan_psra_all[".filterFields"] = array();
$tdatacarta_kelulusan_psra_all[".requiredSearchFields"] = array();

$tdatacarta_kelulusan_psra_all[".allSearchFields"][] = "eYear";
	

$tdatacarta_kelulusan_psra_all[".googleLikeFields"] = array();
$tdatacarta_kelulusan_psra_all[".googleLikeFields"][] = "eYear";
$tdatacarta_kelulusan_psra_all[".googleLikeFields"][] = "lulus";
$tdatacarta_kelulusan_psra_all[".googleLikeFields"][] = "gagal";


$tdatacarta_kelulusan_psra_all[".advSearchFields"] = array();
$tdatacarta_kelulusan_psra_all[".advSearchFields"][] = "eYear";

$tdatacarta_kelulusan_psra_all[".tableType"] = "chart";

$tdatacarta_kelulusan_psra_all[".printerPageOrientation"] = 0;
$tdatacarta_kelulusan_psra_all[".nPrinterPageScale"] = 100;

$tdatacarta_kelulusan_psra_all[".nPrinterSplitRecords"] = 40;

$tdatacarta_kelulusan_psra_all[".nPrinterPDFSplitRecords"] = 40;



$tdatacarta_kelulusan_psra_all[".geocodingEnabled"] = false;



// chart settings
$tdatacarta_kelulusan_psra_all[".chartType"] = "2DColumn";
// end of chart settings







// view page pdf

// print page pdf



$tstrOrderBy = "";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdatacarta_kelulusan_psra_all[".strOrderBy"] = $tstrOrderBy;

$tdatacarta_kelulusan_psra_all[".orderindexes"] = array();

$tdatacarta_kelulusan_psra_all[".sqlHead"] = "SELECT eYear,  COUNT(if(peratus>=0.4,sid, NULL)) / ( COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) ) *100 AS lulus,  COUNT(if(peratus<0.4 AND takhadir=0,sid, NULL))  / ( COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) ) *100 AS gagal";
$tdatacarta_kelulusan_psra_all[".sqlFrom"] = "FROM (  SELECT  sid AS sid,  exam_marking.sCode,  eYear,  eType,  COUNT(if(s1='TH' AND s2='TH' AND s3='TH' AND s4='TH' AND s5='TH' AND s6='TH', exam_marking.sid, NULL)) AS takhadir,  SUM(s1+s2+s3+s4+s5+s6) AS totalMark,  SUM(s1+s2+s3+s4+s5+s6)/600 AS peratus,  sZone,  sName  FROM exam_marking  INNER JOIN school ON exam_marking.sCode = school.sCode AND eType = school.sType  WHERE eType ='PSRA'  GROUP BY sid  ) AS Sub1";
$tdatacarta_kelulusan_psra_all[".sqlWhereExpr"] = "";
$tdatacarta_kelulusan_psra_all[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacarta_kelulusan_psra_all[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacarta_kelulusan_psra_all[".arrGroupsPerPage"] = $arrGPP;

$tdatacarta_kelulusan_psra_all[".highlightSearchResults"] = true;

$tableKeyscarta_kelulusan_psra_all = array();
$tdatacarta_kelulusan_psra_all[".Keys"] = $tableKeyscarta_kelulusan_psra_all;

$tdatacarta_kelulusan_psra_all[".listFields"] = array();
$tdatacarta_kelulusan_psra_all[".listFields"][] = "eYear";
$tdatacarta_kelulusan_psra_all[".listFields"][] = "lulus";
$tdatacarta_kelulusan_psra_all[".listFields"][] = "gagal";

$tdatacarta_kelulusan_psra_all[".hideMobileList"] = array();


$tdatacarta_kelulusan_psra_all[".viewFields"] = array();
$tdatacarta_kelulusan_psra_all[".viewFields"][] = "eYear";
$tdatacarta_kelulusan_psra_all[".viewFields"][] = "lulus";
$tdatacarta_kelulusan_psra_all[".viewFields"][] = "gagal";

$tdatacarta_kelulusan_psra_all[".addFields"] = array();
$tdatacarta_kelulusan_psra_all[".addFields"][] = "eYear";

$tdatacarta_kelulusan_psra_all[".masterListFields"] = array();
$tdatacarta_kelulusan_psra_all[".masterListFields"][] = "eYear";
$tdatacarta_kelulusan_psra_all[".masterListFields"][] = "lulus";
$tdatacarta_kelulusan_psra_all[".masterListFields"][] = "gagal";

$tdatacarta_kelulusan_psra_all[".inlineAddFields"] = array();
$tdatacarta_kelulusan_psra_all[".inlineAddFields"][] = "eYear";

$tdatacarta_kelulusan_psra_all[".editFields"] = array();
$tdatacarta_kelulusan_psra_all[".editFields"][] = "eYear";

$tdatacarta_kelulusan_psra_all[".inlineEditFields"] = array();
$tdatacarta_kelulusan_psra_all[".inlineEditFields"][] = "eYear";

$tdatacarta_kelulusan_psra_all[".exportFields"] = array();
$tdatacarta_kelulusan_psra_all[".exportFields"][] = "eYear";
$tdatacarta_kelulusan_psra_all[".exportFields"][] = "lulus";
$tdatacarta_kelulusan_psra_all[".exportFields"][] = "gagal";

$tdatacarta_kelulusan_psra_all[".importFields"] = array();
$tdatacarta_kelulusan_psra_all[".importFields"][] = "eYear";
$tdatacarta_kelulusan_psra_all[".importFields"][] = "lulus";
$tdatacarta_kelulusan_psra_all[".importFields"][] = "gagal";

$tdatacarta_kelulusan_psra_all[".printFields"] = array();
$tdatacarta_kelulusan_psra_all[".printFields"][] = "eYear";
$tdatacarta_kelulusan_psra_all[".printFields"][] = "lulus";
$tdatacarta_kelulusan_psra_all[".printFields"][] = "gagal";

//	eYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "eYear";
	$fdata["GoodName"] = "eYear";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("carta_kelulusan_psra_all","eYear");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

		$fdata["bAddPage"] = true;

		$fdata["bInlineAdd"] = true;

		$fdata["bEditPage"] = true;

		$fdata["bInlineEdit"] = true;

		$fdata["bViewPage"] = true;

		$fdata["bAdvancedSearch"] = true;

		$fdata["bPrinterPage"] = true;

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

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
	
			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty");
// the end of search options settings




	$tdatacarta_kelulusan_psra_all["eYear"] = $fdata;
//	lulus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "lulus";
	$fdata["GoodName"] = "lulus";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("carta_kelulusan_psra_all","lulus");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "lulus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(if(peratus>=0.4,sid, NULL)) / ( COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) ) *100";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatacarta_kelulusan_psra_all["lulus"] = $fdata;
//	gagal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "gagal";
	$fdata["GoodName"] = "gagal";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("carta_kelulusan_psra_all","gagal");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
		$fdata["bViewPage"] = true;

	
		$fdata["bPrinterPage"] = true;

		$fdata["bExportPage"] = true;

		$fdata["strField"] = "gagal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "COUNT(if(peratus<0.4 AND takhadir=0,sid, NULL))  / ( COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) ) *100";

	
	
			
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
		$vdata["NeedEncode"] = true;

	$fdata["ViewFormats"]["chart"] = $vdata;
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

	
	
	
	
	
	$fdata["EditFormats"]["search"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;








	$tdatacarta_kelulusan_psra_all["gagal"] = $fdata;

	$tdatacarta_kelulusan_psra_all[".chartXml"] = '<chart>
		<attr value="tables">
			<attr value="0">carta_kelulusan_psra_all</attr>
		</attr>
		<attr value="chart_type">
			<attr value="type">2d_column</attr>
		</attr>

		<attr value="parameters">';
	$tdatacarta_kelulusan_psra_all[".chartXml"] .= '<attr value="0">
			<attr value="name">gagal</attr>
			<attr value="currencyFormat">0</attr>
			<attr value="decimalFormat">2</attr>
			<attr value="customFormat">0</attr>
			<attr value="customFormatStr"></attr>';
	$tdatacarta_kelulusan_psra_all[".chartXml"] .= '</attr>';
	$tdatacarta_kelulusan_psra_all[".chartXml"] .= '<attr value="1">
			<attr value="name">lulus</attr>
			<attr value="currencyFormat">0</attr>
			<attr value="decimalFormat">2</attr>
			<attr value="customFormat">0</attr>
			<attr value="customFormatStr"></attr>';
	$tdatacarta_kelulusan_psra_all[".chartXml"] .= '</attr>';
	$tdatacarta_kelulusan_psra_all[".chartXml"] .= '<attr value="2">
		<attr value="name">eYear</attr>
	</attr>';
	$tdatacarta_kelulusan_psra_all[".chartXml"] .= '</attr>
			<attr value="appearance">';
	$tdatacarta_kelulusan_psra_all[".chartXml"] .= '<attr value="scolor11">FF6820</attr>
			<attr value="scolor12">FF6820</attr>';
	$tdatacarta_kelulusan_psra_all[".chartXml"] .= '<attr value="scolor21">00FF00</attr>
			<attr value="scolor22">00FF00</attr>';

	$tdatacarta_kelulusan_psra_all[".chartXml"] .= '<attr value="head">'.xmlencode("Graf Lulus/Gagal").'</attr>
<attr value="foot">'.xmlencode("Tahun").'</attr>
<attr value="y_axis_label">'.xmlencode("Peratus").'</attr>

<attr value="color51">49563A</attr>
<attr value="color52">49563A</attr>
<attr value="color61">49563A</attr>
<attr value="color62">49563A</attr>
<attr value="color71">FFFFFF</attr>
<attr value="color72">FFFFFF</attr>
<attr value="color81">FEF7DB</attr>
<attr value="color82">FEF7DB</attr>
<attr value="color91">000000</attr>
<attr value="color92">000000</attr>
<attr value="color101">000000</attr>
<attr value="color102">000000</attr>
<attr value="color111">000000</attr>
<attr value="color112">000000</attr>
<attr value="color121"></attr>
<attr value="color122"></attr>
<attr value="color131">000000</attr>
<attr value="color132">000000</attr>
<attr value="color141">000000</attr>
<attr value="color142">000000</attr>

<attr value="slegend">false</attr>
<attr value="sgrid">false</attr>
<attr value="sname">true</attr>
<attr value="sval">true</attr>
<attr value="sanim">true</attr>
<attr value="sstacked">false</attr>
<attr value="saxes">false</attr>
<attr value="slog">false</attr>
<attr value="aqua">0</attr>
<attr value="cview">0</attr>
<attr value="is3d">0</attr>
<attr value="isstacked">1</attr>
<attr value="linestyle">0</attr>
<attr value="autoupdate">0</attr>
<attr value="autoupmin">60</attr>
<attr value="cscroll">true</attr>
<attr value="maxbarscroll">10</attr>';
$tdatacarta_kelulusan_psra_all[".chartXml"] .= '</attr>

<attr value="fields">';
	$tdatacarta_kelulusan_psra_all[".chartXml"] .= '<attr value="0">
		<attr value="name">eYear</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("carta_kelulusan_psra_all","eYear")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacarta_kelulusan_psra_all[".chartXml"] .= '<attr value="1">
		<attr value="name">lulus</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("carta_kelulusan_psra_all","lulus")).'</attr>
		<attr value="search"></attr>
	</attr>';
	$tdatacarta_kelulusan_psra_all[".chartXml"] .= '<attr value="2">
		<attr value="name">gagal</attr>
		<attr value="label">'.xmlencode(GetFieldLabel("carta_kelulusan_psra_all","gagal")).'</attr>
		<attr value="search"></attr>
	</attr>';
$tdatacarta_kelulusan_psra_all[".chartXml"] .= '</attr>


<attr value="settings">
<attr value="name">carta_kelulusan_psra_all</attr>
<attr value="short_table_name">carta_kelulusan_psra_all</attr>
</attr>

</chart>';

$tables_data["carta_kelulusan_psra_all"]=&$tdatacarta_kelulusan_psra_all;
$field_labels["carta_kelulusan_psra_all"] = &$fieldLabelscarta_kelulusan_psra_all;
$fieldToolTips["carta_kelulusan_psra_all"] = &$fieldToolTipscarta_kelulusan_psra_all;
$page_titles["carta_kelulusan_psra_all"] = &$pageTitlescarta_kelulusan_psra_all;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["carta_kelulusan_psra_all"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["carta_kelulusan_psra_all"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_carta_kelulusan_psra_all()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "eYear,  COUNT(if(peratus>=0.4,sid, NULL)) / ( COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) ) *100 AS lulus,  COUNT(if(peratus<0.4 AND takhadir=0,sid, NULL))  / ( COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) ) *100 AS gagal";
$proto0["m_strFrom"] = "FROM (  SELECT  sid AS sid,  exam_marking.sCode,  eYear,  eType,  COUNT(if(s1='TH' AND s2='TH' AND s3='TH' AND s4='TH' AND s5='TH' AND s6='TH', exam_marking.sid, NULL)) AS takhadir,  SUM(s1+s2+s3+s4+s5+s6) AS totalMark,  SUM(s1+s2+s3+s4+s5+s6)/600 AS peratus,  sZone,  sName  FROM exam_marking  INNER JOIN school ON exam_marking.sCode = school.sCode AND eType = school.sType  WHERE eType ='PSRA'  GROUP BY sid  ) AS Sub1";
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
	"m_strName" => "eYear",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "carta_kelulusan_psra_all"
));

$proto5["m_sql"] = "eYear";
$proto5["m_srcTableName"] = "carta_kelulusan_psra_all";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "COUNT(if(peratus>=0.4,sid, NULL)) / ( COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) ) *100"
));

$proto7["m_sql"] = "COUNT(if(peratus>=0.4,sid, NULL)) / ( COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) ) *100";
$proto7["m_srcTableName"] = "carta_kelulusan_psra_all";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "lulus";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "COUNT(if(peratus<0.4 AND takhadir=0,sid, NULL))  / ( COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) ) *100"
));

$proto9["m_sql"] = "COUNT(if(peratus<0.4 AND takhadir=0,sid, NULL))  / ( COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) ) *100";
$proto9["m_srcTableName"] = "carta_kelulusan_psra_all";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "gagal";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto11=array();
$proto11["m_link"] = "SQLL_MAIN";
			$proto12=array();
$proto12["m_strHead"] = "  SELECT";
$proto12["m_strFieldList"] = "sid AS sid,  exam_marking.sCode,  eYear,  eType,  COUNT(if(s1='TH' AND s2='TH' AND s3='TH' AND s4='TH' AND s5='TH' AND s6='TH', exam_marking.sid, NULL)) AS takhadir,  SUM(s1+s2+s3+s4+s5+s6) AS totalMark,  SUM(s1+s2+s3+s4+s5+s6)/600 AS peratus,  sZone,  sName";
$proto12["m_strFrom"] = "FROM exam_marking  INNER JOIN school ON exam_marking.sCode = school.sCode AND eType = school.sType";
$proto12["m_strWhere"] = "eType ='PSRA'";
$proto12["m_strOrderBy"] = "";
$proto12["m_strTail"] = "";
			$proto12["cipherer"] = null;
$proto13=array();
$proto13["m_sql"] = "eType ='PSRA'";
$proto13["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "carta_kelulusan_psra_all"
));

$proto13["m_column"]=$obj;
$proto13["m_contained"] = array();
$proto13["m_strCase"] = "='PSRA'";
$proto13["m_havingmode"] = false;
$proto13["m_inBrackets"] = false;
$proto13["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto13);

$proto12["m_where"] = $obj;
$proto15=array();
$proto15["m_sql"] = "";
$proto15["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto15["m_column"]=$obj;
$proto15["m_contained"] = array();
$proto15["m_strCase"] = "";
$proto15["m_havingmode"] = false;
$proto15["m_inBrackets"] = false;
$proto15["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto15);

$proto12["m_having"] = $obj;
$proto12["m_fieldlist"] = array();
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "carta_kelulusan_psra_all"
));

$proto17["m_sql"] = "sid";
$proto17["m_srcTableName"] = "carta_kelulusan_psra_all";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "sid";
$obj = new SQLFieldListItem($proto17);

$proto12["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "carta_kelulusan_psra_all"
));

$proto19["m_sql"] = "exam_marking.sCode";
$proto19["m_srcTableName"] = "carta_kelulusan_psra_all";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto12["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "carta_kelulusan_psra_all"
));

$proto21["m_sql"] = "eYear";
$proto21["m_srcTableName"] = "carta_kelulusan_psra_all";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto12["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "carta_kelulusan_psra_all"
));

$proto23["m_sql"] = "eType";
$proto23["m_srcTableName"] = "carta_kelulusan_psra_all";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto12["m_fieldlist"][]=$obj;
						$proto25=array();
			$proto26=array();
$proto26["m_functiontype"] = "SQLF_COUNT";
$proto26["m_arguments"] = array();
						$proto27=array();
$proto27["m_functiontype"] = "SQLF_CUSTOM";
$proto27["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "s1='TH' AND s2='TH' AND s3='TH' AND s4='TH' AND s5='TH' AND s6='TH'"
));

$proto27["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto27["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto27["m_arguments"][]=$obj;
$proto27["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto27);

$proto26["m_arguments"][]=$obj;
$proto26["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto26);

$proto25["m_sql"] = "COUNT(if(s1='TH' AND s2='TH' AND s3='TH' AND s4='TH' AND s5='TH' AND s6='TH', exam_marking.sid, NULL))";
$proto25["m_srcTableName"] = "carta_kelulusan_psra_all";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "takhadir";
$obj = new SQLFieldListItem($proto25);

$proto12["m_fieldlist"][]=$obj;
						$proto31=array();
			$proto32=array();
$proto32["m_functiontype"] = "SQLF_SUM";
$proto32["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "s1+s2+s3+s4+s5+s6"
));

$proto32["m_arguments"][]=$obj;
$proto32["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto32);

$proto31["m_sql"] = "SUM(s1+s2+s3+s4+s5+s6)";
$proto31["m_srcTableName"] = "carta_kelulusan_psra_all";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "totalMark";
$obj = new SQLFieldListItem($proto31);

$proto12["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(s1+s2+s3+s4+s5+s6)/600"
));

$proto34["m_sql"] = "SUM(s1+s2+s3+s4+s5+s6)/600";
$proto34["m_srcTableName"] = "carta_kelulusan_psra_all";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "peratus";
$obj = new SQLFieldListItem($proto34);

$proto12["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sZone"
));

$proto36["m_sql"] = "sZone";
$proto36["m_srcTableName"] = "carta_kelulusan_psra_all";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto12["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sName"
));

$proto38["m_sql"] = "sName";
$proto38["m_srcTableName"] = "carta_kelulusan_psra_all";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto12["m_fieldlist"][]=$obj;
$proto12["m_fromlist"] = array();
												$proto40=array();
$proto40["m_link"] = "SQLL_MAIN";
			$proto41=array();
$proto41["m_strName"] = "exam_marking";
$proto41["m_srcTableName"] = "carta_kelulusan_psra_all";
$proto41["m_columns"] = array();
$proto41["m_columns"][] = "sid";
$proto41["m_columns"][] = "name";
$proto41["m_columns"][] = "gender";
$proto41["m_columns"][] = "birthdate";
$proto41["m_columns"][] = "birthCert";
$proto41["m_columns"][] = "nationality";
$proto41["m_columns"][] = "sCode";
$proto41["m_columns"][] = "eNo";
$proto41["m_columns"][] = "eYear";
$proto41["m_columns"][] = "eType";
$proto41["m_columns"][] = "s1";
$proto41["m_columns"][] = "s2";
$proto41["m_columns"][] = "s3";
$proto41["m_columns"][] = "s4";
$proto41["m_columns"][] = "s5";
$proto41["m_columns"][] = "s6";
$proto41["m_columns"][] = "s7";
$obj = new SQLTable($proto41);

$proto40["m_table"] = $obj;
$proto40["m_sql"] = "exam_marking";
$proto40["m_alias"] = "";
$proto40["m_srcTableName"] = "carta_kelulusan_psra_all";
$proto42=array();
$proto42["m_sql"] = "";
$proto42["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto42["m_column"]=$obj;
$proto42["m_contained"] = array();
$proto42["m_strCase"] = "";
$proto42["m_havingmode"] = false;
$proto42["m_inBrackets"] = false;
$proto42["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto42);

$proto40["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto40);

$proto12["m_fromlist"][]=$obj;
												$proto44=array();
$proto44["m_link"] = "SQLL_INNERJOIN";
			$proto45=array();
$proto45["m_strName"] = "school";
$proto45["m_srcTableName"] = "carta_kelulusan_psra_all";
$proto45["m_columns"] = array();
$proto45["m_columns"][] = "sno";
$proto45["m_columns"][] = "sName";
$proto45["m_columns"][] = "sCenter";
$proto45["m_columns"][] = "sCode";
$proto45["m_columns"][] = "sZone";
$proto45["m_columns"][] = "sType";
$obj = new SQLTable($proto45);

$proto44["m_table"] = $obj;
$proto44["m_sql"] = "INNER JOIN school ON exam_marking.sCode = school.sCode AND eType = school.sType";
$proto44["m_alias"] = "";
$proto44["m_srcTableName"] = "carta_kelulusan_psra_all";
$proto46=array();
$proto46["m_sql"] = "exam_marking.sCode = school.sCode AND eType = school.sType";
$proto46["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sCode = school.sCode AND eType = school.sType"
));

$proto46["m_column"]=$obj;
$proto46["m_contained"] = array();
						$proto48=array();
$proto48["m_sql"] = "exam_marking.sCode = school.sCode";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "carta_kelulusan_psra_all"
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "= school.sCode";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

			$proto46["m_contained"][]=$obj;
						$proto50=array();
$proto50["m_sql"] = "eType = school.sType";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "carta_kelulusan_psra_all"
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "= school.sType";
$proto50["m_havingmode"] = false;
$proto50["m_inBrackets"] = false;
$proto50["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto50);

			$proto46["m_contained"][]=$obj;
$proto46["m_strCase"] = "";
$proto46["m_havingmode"] = false;
$proto46["m_inBrackets"] = false;
$proto46["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto46);

$proto44["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto44);

$proto12["m_fromlist"][]=$obj;
$proto12["m_groupby"] = array();
												$proto52=array();
						$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "carta_kelulusan_psra_all"
));

$proto52["m_column"]=$obj;
$obj = new SQLGroupByItem($proto52);

$proto12["m_groupby"][]=$obj;
$proto12["m_orderby"] = array();
$proto12["m_srcTableName"]="carta_kelulusan_psra_all";		
$obj = new SQLQuery($proto12);

$proto11["m_table"] = $obj;
$proto11["m_sql"] = "(  SELECT  sid AS sid,  exam_marking.sCode,  eYear,  eType,  COUNT(if(s1='TH' AND s2='TH' AND s3='TH' AND s4='TH' AND s5='TH' AND s6='TH', exam_marking.sid, NULL)) AS takhadir,  SUM(s1+s2+s3+s4+s5+s6) AS totalMark,  SUM(s1+s2+s3+s4+s5+s6)/600 AS peratus,  sZone,  sName  FROM exam_marking  INNER JOIN school ON exam_marking.sCode = school.sCode AND eType = school.sType  WHERE eType ='PSRA'  GROUP BY sid  ) AS Sub1";
$proto11["m_alias"] = "Sub1";
$proto11["m_srcTableName"] = "carta_kelulusan_psra_all";
$proto54=array();
$proto54["m_sql"] = "";
$proto54["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto54["m_column"]=$obj;
$proto54["m_contained"] = array();
$proto54["m_strCase"] = "";
$proto54["m_havingmode"] = false;
$proto54["m_inBrackets"] = false;
$proto54["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto54);

$proto11["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto11);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
												$proto56=array();
						$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "carta_kelulusan_psra_all"
));

$proto56["m_column"]=$obj;
$obj = new SQLGroupByItem($proto56);

$proto0["m_groupby"][]=$obj;
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="carta_kelulusan_psra_all";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_carta_kelulusan_psra_all = createSqlQuery_carta_kelulusan_psra_all();



			

$tdatacarta_kelulusan_psra_all[".sqlquery"] = $queryData_carta_kelulusan_psra_all;

$tableEvents["carta_kelulusan_psra_all"] = new eventsBase;
$tdatacarta_kelulusan_psra_all[".hasEvents"] = false;

?>