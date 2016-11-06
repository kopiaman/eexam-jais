<?php
require_once(getabspath("classes/cipherer.php"));




$tdataanalisa_kelulusan_psra_daerah = array();
	$tdataanalisa_kelulusan_psra_daerah[".truncateText"] = true;
	$tdataanalisa_kelulusan_psra_daerah[".NumberOfChars"] = 80;
	$tdataanalisa_kelulusan_psra_daerah[".ShortName"] = "analisa_kelulusan_psra_daerah";
	$tdataanalisa_kelulusan_psra_daerah[".OwnerID"] = "";
	$tdataanalisa_kelulusan_psra_daerah[".OriginalTable"] = "exam_marking";

//	field labels
$fieldLabelsanalisa_kelulusan_psra_daerah = array();
$fieldToolTipsanalisa_kelulusan_psra_daerah = array();
$pageTitlesanalisa_kelulusan_psra_daerah = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsanalisa_kelulusan_psra_daerah["English"] = array();
	$fieldToolTipsanalisa_kelulusan_psra_daerah["English"] = array();
	$pageTitlesanalisa_kelulusan_psra_daerah["English"] = array();
	$fieldLabelsanalisa_kelulusan_psra_daerah["English"]["eYear"] = "Tahun";
	$fieldToolTipsanalisa_kelulusan_psra_daerah["English"]["eYear"] = "";
	$fieldLabelsanalisa_kelulusan_psra_daerah["English"]["sZone"] = "Zon";
	$fieldToolTipsanalisa_kelulusan_psra_daerah["English"]["sZone"] = "";
	$fieldLabelsanalisa_kelulusan_psra_daerah["English"]["mumtaz"] = "Mumtaz";
	$fieldToolTipsanalisa_kelulusan_psra_daerah["English"]["mumtaz"] = "";
	$fieldLabelsanalisa_kelulusan_psra_daerah["English"]["Mpercent"] = "%";
	$fieldToolTipsanalisa_kelulusan_psra_daerah["English"]["Mpercent"] = "";
	$fieldLabelsanalisa_kelulusan_psra_daerah["English"]["JJ"] = "Jayyid Jidan";
	$fieldToolTipsanalisa_kelulusan_psra_daerah["English"]["JJ"] = "";
	$fieldLabelsanalisa_kelulusan_psra_daerah["English"]["JJpercent"] = "%";
	$fieldToolTipsanalisa_kelulusan_psra_daerah["English"]["JJpercent"] = "";
	$fieldLabelsanalisa_kelulusan_psra_daerah["English"]["jidan"] = "Jidan";
	$fieldToolTipsanalisa_kelulusan_psra_daerah["English"]["jidan"] = "";
	$fieldLabelsanalisa_kelulusan_psra_daerah["English"]["Jpercent"] = "%";
	$fieldToolTipsanalisa_kelulusan_psra_daerah["English"]["Jpercent"] = "";
	$fieldLabelsanalisa_kelulusan_psra_daerah["English"]["maqbul"] = "Maqbul";
	$fieldToolTipsanalisa_kelulusan_psra_daerah["English"]["maqbul"] = "";
	$fieldLabelsanalisa_kelulusan_psra_daerah["English"]["MQpercent"] = "%";
	$fieldToolTipsanalisa_kelulusan_psra_daerah["English"]["MQpercent"] = "";
	$fieldLabelsanalisa_kelulusan_psra_daerah["English"]["bilCalon"] = "Bil Calon";
	$fieldToolTipsanalisa_kelulusan_psra_daerah["English"]["bilCalon"] = "";
	$fieldLabelsanalisa_kelulusan_psra_daerah["English"]["calonHadir"] = "Calon Hadir";
	$fieldToolTipsanalisa_kelulusan_psra_daerah["English"]["calonHadir"] = "";
	$fieldLabelsanalisa_kelulusan_psra_daerah["English"]["calonTakHadir"] = "Calon Tak Hadir";
	$fieldToolTipsanalisa_kelulusan_psra_daerah["English"]["calonTakHadir"] = "";
	$fieldLabelsanalisa_kelulusan_psra_daerah["English"]["calonLulus"] = "Calon Lulus";
	$fieldToolTipsanalisa_kelulusan_psra_daerah["English"]["calonLulus"] = "";
	$fieldLabelsanalisa_kelulusan_psra_daerah["English"]["peratusLulus"] = "%";
	$fieldToolTipsanalisa_kelulusan_psra_daerah["English"]["peratusLulus"] = "";
	$fieldLabelsanalisa_kelulusan_psra_daerah["English"]["peratusGagal"] = "%";
	$fieldToolTipsanalisa_kelulusan_psra_daerah["English"]["peratusGagal"] = "";
	$fieldLabelsanalisa_kelulusan_psra_daerah["English"]["calonDhaif"] = "Musaadah";
	$fieldToolTipsanalisa_kelulusan_psra_daerah["English"]["calonDhaif"] = "";
	if (count($fieldToolTipsanalisa_kelulusan_psra_daerah["English"]))
		$tdataanalisa_kelulusan_psra_daerah[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsanalisa_kelulusan_psra_daerah[""] = array();
	$fieldToolTipsanalisa_kelulusan_psra_daerah[""] = array();
	$pageTitlesanalisa_kelulusan_psra_daerah[""] = array();
	if (count($fieldToolTipsanalisa_kelulusan_psra_daerah[""]))
		$tdataanalisa_kelulusan_psra_daerah[".isUseToolTips"] = true;
}


	$tdataanalisa_kelulusan_psra_daerah[".NCSearch"] = true;



$tdataanalisa_kelulusan_psra_daerah[".shortTableName"] = "analisa_kelulusan_psra_daerah";
$tdataanalisa_kelulusan_psra_daerah[".nSecOptions"] = 0;
$tdataanalisa_kelulusan_psra_daerah[".recsPerRowList"] = 1;
$tdataanalisa_kelulusan_psra_daerah[".recsPerRowPrint"] = 1;
$tdataanalisa_kelulusan_psra_daerah[".mainTableOwnerID"] = "";
$tdataanalisa_kelulusan_psra_daerah[".moveNext"] = 1;
$tdataanalisa_kelulusan_psra_daerah[".entityType"] = 1;

$tdataanalisa_kelulusan_psra_daerah[".strOriginalTableName"] = "exam_marking";




$tdataanalisa_kelulusan_psra_daerah[".showAddInPopup"] = false;

$tdataanalisa_kelulusan_psra_daerah[".showEditInPopup"] = false;

$tdataanalisa_kelulusan_psra_daerah[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataanalisa_kelulusan_psra_daerah[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataanalisa_kelulusan_psra_daerah[".fieldsForRegister"] = array();

$tdataanalisa_kelulusan_psra_daerah[".listAjax"] = false;

	$tdataanalisa_kelulusan_psra_daerah[".audit"] = false;

	$tdataanalisa_kelulusan_psra_daerah[".locking"] = false;



$tdataanalisa_kelulusan_psra_daerah[".list"] = true;



$tdataanalisa_kelulusan_psra_daerah[".exportTo"] = true;



$tdataanalisa_kelulusan_psra_daerah[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataanalisa_kelulusan_psra_daerah[".searchSaving"] = false;
//

$tdataanalisa_kelulusan_psra_daerah[".showSearchPanel"] = true;
		$tdataanalisa_kelulusan_psra_daerah[".flexibleSearch"] = true;

if (isMobile())
	$tdataanalisa_kelulusan_psra_daerah[".isUseAjaxSuggest"] = false;
else
	$tdataanalisa_kelulusan_psra_daerah[".isUseAjaxSuggest"] = true;

$tdataanalisa_kelulusan_psra_daerah[".rowHighlite"] = true;


																			
$tdataanalisa_kelulusan_psra_daerah[".addPageEvents"] = false;

// use timepicker for search panel
$tdataanalisa_kelulusan_psra_daerah[".isUseTimeForSearch"] = false;





$tdataanalisa_kelulusan_psra_daerah[".allSearchFields"] = array();
$tdataanalisa_kelulusan_psra_daerah[".filterFields"] = array();
$tdataanalisa_kelulusan_psra_daerah[".requiredSearchFields"] = array();

$tdataanalisa_kelulusan_psra_daerah[".allSearchFields"][] = "sZone";
	$tdataanalisa_kelulusan_psra_daerah[".allSearchFields"][] = "eYear";
	

$tdataanalisa_kelulusan_psra_daerah[".googleLikeFields"] = array();
$tdataanalisa_kelulusan_psra_daerah[".googleLikeFields"][] = "mumtaz";
$tdataanalisa_kelulusan_psra_daerah[".googleLikeFields"][] = "Mpercent";
$tdataanalisa_kelulusan_psra_daerah[".googleLikeFields"][] = "JJ";
$tdataanalisa_kelulusan_psra_daerah[".googleLikeFields"][] = "JJpercent";
$tdataanalisa_kelulusan_psra_daerah[".googleLikeFields"][] = "jidan";
$tdataanalisa_kelulusan_psra_daerah[".googleLikeFields"][] = "Jpercent";
$tdataanalisa_kelulusan_psra_daerah[".googleLikeFields"][] = "maqbul";
$tdataanalisa_kelulusan_psra_daerah[".googleLikeFields"][] = "MQpercent";
$tdataanalisa_kelulusan_psra_daerah[".googleLikeFields"][] = "bilCalon";
$tdataanalisa_kelulusan_psra_daerah[".googleLikeFields"][] = "calonHadir";
$tdataanalisa_kelulusan_psra_daerah[".googleLikeFields"][] = "calonTakHadir";
$tdataanalisa_kelulusan_psra_daerah[".googleLikeFields"][] = "calonLulus";
$tdataanalisa_kelulusan_psra_daerah[".googleLikeFields"][] = "peratusLulus";
$tdataanalisa_kelulusan_psra_daerah[".googleLikeFields"][] = "peratusGagal";
$tdataanalisa_kelulusan_psra_daerah[".googleLikeFields"][] = "calonDhaif";

$tdataanalisa_kelulusan_psra_daerah[".panelSearchFields"] = array();
$tdataanalisa_kelulusan_psra_daerah[".searchPanelOptions"] = array();
$tdataanalisa_kelulusan_psra_daerah[".panelSearchFields"][] = "sZone";
	$tdataanalisa_kelulusan_psra_daerah[".panelSearchFields"][] = "eYear";
	
$tdataanalisa_kelulusan_psra_daerah[".advSearchFields"] = array();
$tdataanalisa_kelulusan_psra_daerah[".advSearchFields"][] = "sZone";
$tdataanalisa_kelulusan_psra_daerah[".advSearchFields"][] = "eYear";

$tdataanalisa_kelulusan_psra_daerah[".tableType"] = "list";

$tdataanalisa_kelulusan_psra_daerah[".printerPageOrientation"] = 0;
$tdataanalisa_kelulusan_psra_daerah[".nPrinterPageScale"] = 100;

$tdataanalisa_kelulusan_psra_daerah[".nPrinterSplitRecords"] = 40;

$tdataanalisa_kelulusan_psra_daerah[".nPrinterPDFSplitRecords"] = 40;



$tdataanalisa_kelulusan_psra_daerah[".geocodingEnabled"] = false;










// view page pdf

// print page pdf

$tdataanalisa_kelulusan_psra_daerah[".totalsFields"] = array();
$tdataanalisa_kelulusan_psra_daerah[".totalsFields"][] = array(
	"fName" => "bilCalon",
	"numRows" => 0,
	"totalsType" => "TOTAL",
	"viewFormat" => '');

$tdataanalisa_kelulusan_psra_daerah[".pageSize"] = 20;

$tdataanalisa_kelulusan_psra_daerah[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY eYear DESC, mumtaz DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataanalisa_kelulusan_psra_daerah[".strOrderBy"] = $tstrOrderBy;

$tdataanalisa_kelulusan_psra_daerah[".orderindexes"] = array();
$tdataanalisa_kelulusan_psra_daerah[".orderindexes"][] = array(2, (0 ? "ASC" : "DESC"), "eYear");
$tdataanalisa_kelulusan_psra_daerah[".orderindexes"][] = array(3, (0 ? "ASC" : "DESC"), "mumtaz");

$tdataanalisa_kelulusan_psra_daerah[".sqlHead"] = "SELECT sZone,  eYear,  mumtaz,  Mpercent,  JJ,  JJpercent,  jidan,  Jpercent,  maqbul,  MQpercent,  bilCalon,  calonHadir,  calonTakHadir,  calonLulus,  (calonLulus/calonHadir) AS peratusLulus,  (1-(calonLulus/calonHadir)) AS peratusGagal,  calonDhaif";
$tdataanalisa_kelulusan_psra_daerah[".sqlFrom"] = "FROM (  SELECT  sid,  sZone,  eYear,  COUNT(sid) AS bilCalon,  COUNT(if(takhadir>0, sid, NULL)) AS calonTakHadir,  COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) AS calonHadir,  COUNT(if(peratus>=0.4, sid, NULL)) AS calonLulus,  COUNT(if(peratus>=0.9, sid, NULL)) AS mumtaz,  COUNT(if(peratus>=0.9, sid, NULL)) AS Mpercent,  COUNT(if(peratus>=0.75 AND peratus<0.9, sid, NULL)) AS JJ,  COUNT(if(peratus>=0.75 AND peratus<0.9, sid, NULL)) AS JJpercent,  COUNT(if(peratus>=0.6 AND peratus<0.75, sid, NULL)) AS jidan,  COUNT(if(peratus>=0.6 AND peratus<0.75, sid, NULL)) AS Jpercent,  COUNT(if(peratus>=0.4 AND peratus<0.6, sid, NULL)) AS maqbul,  COUNT(if(peratus>=0.4 AND peratus<0.6, sid, NULL)) AS MQpercent,  COUNT(if(peratus<0.4 AND takhadir=0, sid, NULL)) AS calonDhaif  FROM (  		SELECT  sid AS sid,  exam_marking.sCode,  eYear,  eType,  COUNT(if(s1 LIKE '%TH%' AND s2 LIKE '%TH%' AND s3 LIKE '%TH%' AND s4 LIKE '%TH%' AND s5 LIKE '%TH%', exam_marking.sid, NULL)) AS takhadir,  SUM(s1+s2+s3+s4+s5) AS totalMark,  SUM(s1+s2+s3+s4+s5)/500 AS peratus,  sZone  FROM exam_marking  LEFT OUTER JOIN school ON exam_marking.sCode = school.sCode   GROUP BY sid  ) AS Sub1  GROUP BY sZone, eYear  ) AS Sub2";
$tdataanalisa_kelulusan_psra_daerah[".sqlWhereExpr"] = "";
$tdataanalisa_kelulusan_psra_daerah[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataanalisa_kelulusan_psra_daerah[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataanalisa_kelulusan_psra_daerah[".arrGroupsPerPage"] = $arrGPP;

$tdataanalisa_kelulusan_psra_daerah[".highlightSearchResults"] = true;

$tableKeysanalisa_kelulusan_psra_daerah = array();
$tableKeysanalisa_kelulusan_psra_daerah[] = "eYear";
$tdataanalisa_kelulusan_psra_daerah[".Keys"] = $tableKeysanalisa_kelulusan_psra_daerah;

$tdataanalisa_kelulusan_psra_daerah[".listFields"] = array();
$tdataanalisa_kelulusan_psra_daerah[".listFields"][] = "sZone";
$tdataanalisa_kelulusan_psra_daerah[".listFields"][] = "eYear";
$tdataanalisa_kelulusan_psra_daerah[".listFields"][] = "mumtaz";
$tdataanalisa_kelulusan_psra_daerah[".listFields"][] = "Mpercent";
$tdataanalisa_kelulusan_psra_daerah[".listFields"][] = "JJ";
$tdataanalisa_kelulusan_psra_daerah[".listFields"][] = "JJpercent";
$tdataanalisa_kelulusan_psra_daerah[".listFields"][] = "jidan";
$tdataanalisa_kelulusan_psra_daerah[".listFields"][] = "Jpercent";
$tdataanalisa_kelulusan_psra_daerah[".listFields"][] = "maqbul";
$tdataanalisa_kelulusan_psra_daerah[".listFields"][] = "MQpercent";
$tdataanalisa_kelulusan_psra_daerah[".listFields"][] = "bilCalon";
$tdataanalisa_kelulusan_psra_daerah[".listFields"][] = "calonHadir";
$tdataanalisa_kelulusan_psra_daerah[".listFields"][] = "calonTakHadir";
$tdataanalisa_kelulusan_psra_daerah[".listFields"][] = "calonLulus";
$tdataanalisa_kelulusan_psra_daerah[".listFields"][] = "peratusLulus";
$tdataanalisa_kelulusan_psra_daerah[".listFields"][] = "calonDhaif";
$tdataanalisa_kelulusan_psra_daerah[".listFields"][] = "peratusGagal";

$tdataanalisa_kelulusan_psra_daerah[".hideMobileList"] = array();


$tdataanalisa_kelulusan_psra_daerah[".viewFields"] = array();

$tdataanalisa_kelulusan_psra_daerah[".addFields"] = array();

$tdataanalisa_kelulusan_psra_daerah[".masterListFields"] = array();
$tdataanalisa_kelulusan_psra_daerah[".masterListFields"][] = "sZone";
$tdataanalisa_kelulusan_psra_daerah[".masterListFields"][] = "eYear";
$tdataanalisa_kelulusan_psra_daerah[".masterListFields"][] = "mumtaz";
$tdataanalisa_kelulusan_psra_daerah[".masterListFields"][] = "Mpercent";
$tdataanalisa_kelulusan_psra_daerah[".masterListFields"][] = "JJ";
$tdataanalisa_kelulusan_psra_daerah[".masterListFields"][] = "JJpercent";
$tdataanalisa_kelulusan_psra_daerah[".masterListFields"][] = "jidan";
$tdataanalisa_kelulusan_psra_daerah[".masterListFields"][] = "Jpercent";
$tdataanalisa_kelulusan_psra_daerah[".masterListFields"][] = "maqbul";
$tdataanalisa_kelulusan_psra_daerah[".masterListFields"][] = "MQpercent";
$tdataanalisa_kelulusan_psra_daerah[".masterListFields"][] = "bilCalon";
$tdataanalisa_kelulusan_psra_daerah[".masterListFields"][] = "calonHadir";
$tdataanalisa_kelulusan_psra_daerah[".masterListFields"][] = "calonTakHadir";
$tdataanalisa_kelulusan_psra_daerah[".masterListFields"][] = "calonLulus";
$tdataanalisa_kelulusan_psra_daerah[".masterListFields"][] = "peratusLulus";
$tdataanalisa_kelulusan_psra_daerah[".masterListFields"][] = "peratusGagal";
$tdataanalisa_kelulusan_psra_daerah[".masterListFields"][] = "calonDhaif";

$tdataanalisa_kelulusan_psra_daerah[".inlineAddFields"] = array();

$tdataanalisa_kelulusan_psra_daerah[".editFields"] = array();

$tdataanalisa_kelulusan_psra_daerah[".inlineEditFields"] = array();

$tdataanalisa_kelulusan_psra_daerah[".exportFields"] = array();
$tdataanalisa_kelulusan_psra_daerah[".exportFields"][] = "sZone";
$tdataanalisa_kelulusan_psra_daerah[".exportFields"][] = "eYear";
$tdataanalisa_kelulusan_psra_daerah[".exportFields"][] = "mumtaz";
$tdataanalisa_kelulusan_psra_daerah[".exportFields"][] = "Mpercent";
$tdataanalisa_kelulusan_psra_daerah[".exportFields"][] = "JJ";
$tdataanalisa_kelulusan_psra_daerah[".exportFields"][] = "JJpercent";
$tdataanalisa_kelulusan_psra_daerah[".exportFields"][] = "jidan";
$tdataanalisa_kelulusan_psra_daerah[".exportFields"][] = "Jpercent";
$tdataanalisa_kelulusan_psra_daerah[".exportFields"][] = "maqbul";
$tdataanalisa_kelulusan_psra_daerah[".exportFields"][] = "MQpercent";
$tdataanalisa_kelulusan_psra_daerah[".exportFields"][] = "bilCalon";
$tdataanalisa_kelulusan_psra_daerah[".exportFields"][] = "calonHadir";
$tdataanalisa_kelulusan_psra_daerah[".exportFields"][] = "calonTakHadir";
$tdataanalisa_kelulusan_psra_daerah[".exportFields"][] = "calonLulus";
$tdataanalisa_kelulusan_psra_daerah[".exportFields"][] = "peratusLulus";
$tdataanalisa_kelulusan_psra_daerah[".exportFields"][] = "peratusGagal";
$tdataanalisa_kelulusan_psra_daerah[".exportFields"][] = "calonDhaif";

$tdataanalisa_kelulusan_psra_daerah[".importFields"] = array();

$tdataanalisa_kelulusan_psra_daerah[".printFields"] = array();

//	sZone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sZone";
	$fdata["GoodName"] = "sZone";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_daerah","sZone");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
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




	$tdataanalisa_kelulusan_psra_daerah["sZone"] = $fdata;
//	eYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "eYear";
	$fdata["GoodName"] = "eYear";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_daerah","eYear");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
		$fdata["bAdvancedSearch"] = true;

	
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




	$tdataanalisa_kelulusan_psra_daerah["eYear"] = $fdata;
//	mumtaz
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "mumtaz";
	$fdata["GoodName"] = "mumtaz";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_daerah","mumtaz");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "mumtaz";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "mumtaz";

	
	
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








	$tdataanalisa_kelulusan_psra_daerah["mumtaz"] = $fdata;
//	Mpercent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Mpercent";
	$fdata["GoodName"] = "Mpercent";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_daerah","Mpercent");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Mpercent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Mpercent";

	
	
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








	$tdataanalisa_kelulusan_psra_daerah["Mpercent"] = $fdata;
//	JJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "JJ";
	$fdata["GoodName"] = "JJ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_daerah","JJ");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "JJ";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "JJ";

	
	
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








	$tdataanalisa_kelulusan_psra_daerah["JJ"] = $fdata;
//	JJpercent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "JJpercent";
	$fdata["GoodName"] = "JJpercent";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_daerah","JJpercent");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "JJpercent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "JJpercent";

	
	
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








	$tdataanalisa_kelulusan_psra_daerah["JJpercent"] = $fdata;
//	jidan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "jidan";
	$fdata["GoodName"] = "jidan";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_daerah","jidan");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "jidan";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "jidan";

	
	
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








	$tdataanalisa_kelulusan_psra_daerah["jidan"] = $fdata;
//	Jpercent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Jpercent";
	$fdata["GoodName"] = "Jpercent";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_daerah","Jpercent");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "Jpercent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Jpercent";

	
	
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








	$tdataanalisa_kelulusan_psra_daerah["Jpercent"] = $fdata;
//	maqbul
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "maqbul";
	$fdata["GoodName"] = "maqbul";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_daerah","maqbul");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "maqbul";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "maqbul";

	
	
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








	$tdataanalisa_kelulusan_psra_daerah["maqbul"] = $fdata;
//	MQpercent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "MQpercent";
	$fdata["GoodName"] = "MQpercent";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_daerah","MQpercent");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "MQpercent";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MQpercent";

	
	
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








	$tdataanalisa_kelulusan_psra_daerah["MQpercent"] = $fdata;
//	bilCalon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "bilCalon";
	$fdata["GoodName"] = "bilCalon";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_daerah","bilCalon");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "bilCalon";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bilCalon";

	
	
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








	$tdataanalisa_kelulusan_psra_daerah["bilCalon"] = $fdata;
//	calonHadir
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "calonHadir";
	$fdata["GoodName"] = "calonHadir";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_daerah","calonHadir");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "calonHadir";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calonHadir";

	
	
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








	$tdataanalisa_kelulusan_psra_daerah["calonHadir"] = $fdata;
//	calonTakHadir
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "calonTakHadir";
	$fdata["GoodName"] = "calonTakHadir";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_daerah","calonTakHadir");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "calonTakHadir";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calonTakHadir";

	
	
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








	$tdataanalisa_kelulusan_psra_daerah["calonTakHadir"] = $fdata;
//	calonLulus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "calonLulus";
	$fdata["GoodName"] = "calonLulus";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_daerah","calonLulus");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "calonLulus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calonLulus";

	
	
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








	$tdataanalisa_kelulusan_psra_daerah["calonLulus"] = $fdata;
//	peratusLulus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "peratusLulus";
	$fdata["GoodName"] = "peratusLulus";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_daerah","peratusLulus");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "peratusLulus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(calonLulus/calonHadir)";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
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








	$tdataanalisa_kelulusan_psra_daerah["peratusLulus"] = $fdata;
//	peratusGagal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "peratusGagal";
	$fdata["GoodName"] = "peratusGagal";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_daerah","peratusGagal");
	$fdata["FieldType"] = 14;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "peratusGagal";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "(1-(calonLulus/calonHadir))";

	
	
				$fdata["FieldPermissions"] = true;

				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Percent");

	
	
	
	
	
	
	
	
	
	
	
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








	$tdataanalisa_kelulusan_psra_daerah["peratusGagal"] = $fdata;
//	calonDhaif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "calonDhaif";
	$fdata["GoodName"] = "calonDhaif";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_daerah","calonDhaif");
	$fdata["FieldType"] = 3;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
	
	
		$fdata["bExportPage"] = true;

		$fdata["strField"] = "calonDhaif";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "calonDhaif";

	
	
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








	$tdataanalisa_kelulusan_psra_daerah["calonDhaif"] = $fdata;


$tables_data["analisa_kelulusan_psra_daerah"]=&$tdataanalisa_kelulusan_psra_daerah;
$field_labels["analisa_kelulusan_psra_daerah"] = &$fieldLabelsanalisa_kelulusan_psra_daerah;
$fieldToolTips["analisa_kelulusan_psra_daerah"] = &$fieldToolTipsanalisa_kelulusan_psra_daerah;
$page_titles["analisa_kelulusan_psra_daerah"] = &$pageTitlesanalisa_kelulusan_psra_daerah;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["analisa_kelulusan_psra_daerah"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["analisa_kelulusan_psra_daerah"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_analisa_kelulusan_psra_daerah()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sZone,  eYear,  mumtaz,  Mpercent,  JJ,  JJpercent,  jidan,  Jpercent,  maqbul,  MQpercent,  bilCalon,  calonHadir,  calonTakHadir,  calonLulus,  (calonLulus/calonHadir) AS peratusLulus,  (1-(calonLulus/calonHadir)) AS peratusGagal,  calonDhaif";
$proto0["m_strFrom"] = "FROM (  SELECT  sid,  sZone,  eYear,  COUNT(sid) AS bilCalon,  COUNT(if(takhadir>0, sid, NULL)) AS calonTakHadir,  COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) AS calonHadir,  COUNT(if(peratus>=0.4, sid, NULL)) AS calonLulus,  COUNT(if(peratus>=0.9, sid, NULL)) AS mumtaz,  COUNT(if(peratus>=0.9, sid, NULL)) AS Mpercent,  COUNT(if(peratus>=0.75 AND peratus<0.9, sid, NULL)) AS JJ,  COUNT(if(peratus>=0.75 AND peratus<0.9, sid, NULL)) AS JJpercent,  COUNT(if(peratus>=0.6 AND peratus<0.75, sid, NULL)) AS jidan,  COUNT(if(peratus>=0.6 AND peratus<0.75, sid, NULL)) AS Jpercent,  COUNT(if(peratus>=0.4 AND peratus<0.6, sid, NULL)) AS maqbul,  COUNT(if(peratus>=0.4 AND peratus<0.6, sid, NULL)) AS MQpercent,  COUNT(if(peratus<0.4 AND takhadir=0, sid, NULL)) AS calonDhaif  FROM (  		SELECT  sid AS sid,  exam_marking.sCode,  eYear,  eType,  COUNT(if(s1 LIKE '%TH%' AND s2 LIKE '%TH%' AND s3 LIKE '%TH%' AND s4 LIKE '%TH%' AND s5 LIKE '%TH%', exam_marking.sid, NULL)) AS takhadir,  SUM(s1+s2+s3+s4+s5) AS totalMark,  SUM(s1+s2+s3+s4+s5)/500 AS peratus,  sZone  FROM exam_marking  LEFT OUTER JOIN school ON exam_marking.sCode = school.sCode   GROUP BY sid  ) AS Sub1  GROUP BY sZone, eYear  ) AS Sub2";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "ORDER BY eYear DESC, mumtaz DESC";
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
			$obj = new SQLNonParsed(array(
	"m_sql" => "sZone"
));

$proto5["m_sql"] = "sZone";
$proto5["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_daerah"
));

$proto7["m_sql"] = "eYear";
$proto7["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLField(array(
	"m_strName" => "mumtaz",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_daerah"
));

$proto9["m_sql"] = "mumtaz";
$proto9["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLField(array(
	"m_strName" => "Mpercent",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_daerah"
));

$proto11["m_sql"] = "Mpercent";
$proto11["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "JJ",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_daerah"
));

$proto13["m_sql"] = "JJ";
$proto13["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "JJpercent",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_daerah"
));

$proto15["m_sql"] = "JJpercent";
$proto15["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "jidan",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_daerah"
));

$proto17["m_sql"] = "jidan";
$proto17["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "Jpercent",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_daerah"
));

$proto19["m_sql"] = "Jpercent";
$proto19["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "maqbul",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_daerah"
));

$proto21["m_sql"] = "maqbul";
$proto21["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "MQpercent",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_daerah"
));

$proto23["m_sql"] = "MQpercent";
$proto23["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "bilCalon",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_daerah"
));

$proto25["m_sql"] = "bilCalon";
$proto25["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "calonHadir",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_daerah"
));

$proto27["m_sql"] = "calonHadir";
$proto27["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "calonTakHadir",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_daerah"
));

$proto29["m_sql"] = "calonTakHadir";
$proto29["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "calonLulus",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_daerah"
));

$proto31["m_sql"] = "calonLulus";
$proto31["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(calonLulus/calonHadir)"
));

$proto33["m_sql"] = "(calonLulus/calonHadir)";
$proto33["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "peratusLulus";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(1-(calonLulus/calonHadir))"
));

$proto35["m_sql"] = "(1-(calonLulus/calonHadir))";
$proto35["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "peratusGagal";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "calonDhaif",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_daerah"
));

$proto37["m_sql"] = "calonDhaif";
$proto37["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto39=array();
$proto39["m_link"] = "SQLL_MAIN";
			$proto40=array();
$proto40["m_strHead"] = "  SELECT";
$proto40["m_strFieldList"] = "sid,  sZone,  eYear,  COUNT(sid) AS bilCalon,  COUNT(if(takhadir>0, sid, NULL)) AS calonTakHadir,  COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) AS calonHadir,  COUNT(if(peratus>=0.4, sid, NULL)) AS calonLulus,  COUNT(if(peratus>=0.9, sid, NULL)) AS mumtaz,  COUNT(if(peratus>=0.9, sid, NULL)) AS Mpercent,  COUNT(if(peratus>=0.75 AND peratus<0.9, sid, NULL)) AS JJ,  COUNT(if(peratus>=0.75 AND peratus<0.9, sid, NULL)) AS JJpercent,  COUNT(if(peratus>=0.6 AND peratus<0.75, sid, NULL)) AS jidan,  COUNT(if(peratus>=0.6 AND peratus<0.75, sid, NULL)) AS Jpercent,  COUNT(if(peratus>=0.4 AND peratus<0.6, sid, NULL)) AS maqbul,  COUNT(if(peratus>=0.4 AND peratus<0.6, sid, NULL)) AS MQpercent,  COUNT(if(peratus<0.4 AND takhadir=0, sid, NULL)) AS calonDhaif";
$proto40["m_strFrom"] = "FROM (  		SELECT  sid AS sid,  exam_marking.sCode,  eYear,  eType,  COUNT(if(s1 LIKE '%TH%' AND s2 LIKE '%TH%' AND s3 LIKE '%TH%' AND s4 LIKE '%TH%' AND s5 LIKE '%TH%', exam_marking.sid, NULL)) AS takhadir,  SUM(s1+s2+s3+s4+s5) AS totalMark,  SUM(s1+s2+s3+s4+s5)/500 AS peratus,  sZone  FROM exam_marking  LEFT OUTER JOIN school ON exam_marking.sCode = school.sCode   GROUP BY sid  ) AS Sub1";
$proto40["m_strWhere"] = "";
$proto40["m_strOrderBy"] = "";
$proto40["m_strTail"] = "";
			$proto40["cipherer"] = null;
$proto41=array();
$proto41["m_sql"] = "";
$proto41["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto41["m_column"]=$obj;
$proto41["m_contained"] = array();
$proto41["m_strCase"] = "";
$proto41["m_havingmode"] = false;
$proto41["m_inBrackets"] = false;
$proto41["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto41);

$proto40["m_where"] = $obj;
$proto43=array();
$proto43["m_sql"] = "";
$proto43["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto43["m_column"]=$obj;
$proto43["m_contained"] = array();
$proto43["m_strCase"] = "";
$proto43["m_havingmode"] = false;
$proto43["m_inBrackets"] = false;
$proto43["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto43);

$proto40["m_having"] = $obj;
$proto40["m_fieldlist"] = array();
						$proto45=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_kelulusan_psra_daerah"
));

$proto45["m_sql"] = "sid";
$proto45["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto45["m_expr"]=$obj;
$proto45["m_alias"] = "";
$obj = new SQLFieldListItem($proto45);

$proto40["m_fieldlist"][]=$obj;
						$proto47=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sZone"
));

$proto47["m_sql"] = "sZone";
$proto47["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto47["m_expr"]=$obj;
$proto47["m_alias"] = "";
$obj = new SQLFieldListItem($proto47);

$proto40["m_fieldlist"][]=$obj;
						$proto49=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_kelulusan_psra_daerah"
));

$proto49["m_sql"] = "eYear";
$proto49["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto49["m_expr"]=$obj;
$proto49["m_alias"] = "";
$obj = new SQLFieldListItem($proto49);

$proto40["m_fieldlist"][]=$obj;
						$proto51=array();
			$proto52=array();
$proto52["m_functiontype"] = "SQLF_COUNT";
$proto52["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_kelulusan_psra_daerah"
));

$proto52["m_arguments"][]=$obj;
$proto52["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto52);

$proto51["m_sql"] = "COUNT(sid)";
$proto51["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "bilCalon";
$obj = new SQLFieldListItem($proto51);

$proto40["m_fieldlist"][]=$obj;
						$proto54=array();
			$proto55=array();
$proto55["m_functiontype"] = "SQLF_COUNT";
$proto55["m_arguments"] = array();
						$proto56=array();
$proto56["m_functiontype"] = "SQLF_CUSTOM";
$proto56["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "takhadir>0"
));

$proto56["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "sid"
));

$proto56["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto56["m_arguments"][]=$obj;
$proto56["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto56);

$proto55["m_arguments"][]=$obj;
$proto55["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto55);

$proto54["m_sql"] = "COUNT(if(takhadir>0, sid, NULL))";
$proto54["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "calonTakHadir";
$obj = new SQLFieldListItem($proto54);

$proto40["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL))"
));

$proto60["m_sql"] = "COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL))";
$proto60["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "calonHadir";
$obj = new SQLFieldListItem($proto60);

$proto40["m_fieldlist"][]=$obj;
						$proto62=array();
			$proto63=array();
$proto63["m_functiontype"] = "SQLF_COUNT";
$proto63["m_arguments"] = array();
						$proto64=array();
$proto64["m_functiontype"] = "SQLF_CUSTOM";
$proto64["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "peratus>=0.4"
));

$proto64["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "sid"
));

$proto64["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto64["m_arguments"][]=$obj;
$proto64["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto64);

$proto63["m_arguments"][]=$obj;
$proto63["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto63);

$proto62["m_sql"] = "COUNT(if(peratus>=0.4, sid, NULL))";
$proto62["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "calonLulus";
$obj = new SQLFieldListItem($proto62);

$proto40["m_fieldlist"][]=$obj;
						$proto68=array();
			$proto69=array();
$proto69["m_functiontype"] = "SQLF_COUNT";
$proto69["m_arguments"] = array();
						$proto70=array();
$proto70["m_functiontype"] = "SQLF_CUSTOM";
$proto70["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "peratus>=0.9"
));

$proto70["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "sid"
));

$proto70["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto70["m_arguments"][]=$obj;
$proto70["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto70);

$proto69["m_arguments"][]=$obj;
$proto69["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto69);

$proto68["m_sql"] = "COUNT(if(peratus>=0.9, sid, NULL))";
$proto68["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "mumtaz";
$obj = new SQLFieldListItem($proto68);

$proto40["m_fieldlist"][]=$obj;
						$proto74=array();
			$proto75=array();
$proto75["m_functiontype"] = "SQLF_COUNT";
$proto75["m_arguments"] = array();
						$proto76=array();
$proto76["m_functiontype"] = "SQLF_CUSTOM";
$proto76["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "peratus>=0.9"
));

$proto76["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "sid"
));

$proto76["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto76["m_arguments"][]=$obj;
$proto76["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto76);

$proto75["m_arguments"][]=$obj;
$proto75["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto75);

$proto74["m_sql"] = "COUNT(if(peratus>=0.9, sid, NULL))";
$proto74["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "Mpercent";
$obj = new SQLFieldListItem($proto74);

$proto40["m_fieldlist"][]=$obj;
						$proto80=array();
			$proto81=array();
$proto81["m_functiontype"] = "SQLF_COUNT";
$proto81["m_arguments"] = array();
						$proto82=array();
$proto82["m_functiontype"] = "SQLF_CUSTOM";
$proto82["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "peratus>=0.75 AND peratus<0.9"
));

$proto82["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "sid"
));

$proto82["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto82["m_arguments"][]=$obj;
$proto82["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto82);

$proto81["m_arguments"][]=$obj;
$proto81["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto81);

$proto80["m_sql"] = "COUNT(if(peratus>=0.75 AND peratus<0.9, sid, NULL))";
$proto80["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "JJ";
$obj = new SQLFieldListItem($proto80);

$proto40["m_fieldlist"][]=$obj;
						$proto86=array();
			$proto87=array();
$proto87["m_functiontype"] = "SQLF_COUNT";
$proto87["m_arguments"] = array();
						$proto88=array();
$proto88["m_functiontype"] = "SQLF_CUSTOM";
$proto88["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "peratus>=0.75 AND peratus<0.9"
));

$proto88["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "sid"
));

$proto88["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto88["m_arguments"][]=$obj;
$proto88["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto88);

$proto87["m_arguments"][]=$obj;
$proto87["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto87);

$proto86["m_sql"] = "COUNT(if(peratus>=0.75 AND peratus<0.9, sid, NULL))";
$proto86["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "JJpercent";
$obj = new SQLFieldListItem($proto86);

$proto40["m_fieldlist"][]=$obj;
						$proto92=array();
			$proto93=array();
$proto93["m_functiontype"] = "SQLF_COUNT";
$proto93["m_arguments"] = array();
						$proto94=array();
$proto94["m_functiontype"] = "SQLF_CUSTOM";
$proto94["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "peratus>=0.6 AND peratus<0.75"
));

$proto94["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "sid"
));

$proto94["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto94["m_arguments"][]=$obj;
$proto94["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto94);

$proto93["m_arguments"][]=$obj;
$proto93["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto93);

$proto92["m_sql"] = "COUNT(if(peratus>=0.6 AND peratus<0.75, sid, NULL))";
$proto92["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "jidan";
$obj = new SQLFieldListItem($proto92);

$proto40["m_fieldlist"][]=$obj;
						$proto98=array();
			$proto99=array();
$proto99["m_functiontype"] = "SQLF_COUNT";
$proto99["m_arguments"] = array();
						$proto100=array();
$proto100["m_functiontype"] = "SQLF_CUSTOM";
$proto100["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "peratus>=0.6 AND peratus<0.75"
));

$proto100["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "sid"
));

$proto100["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto100["m_arguments"][]=$obj;
$proto100["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto100);

$proto99["m_arguments"][]=$obj;
$proto99["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto99);

$proto98["m_sql"] = "COUNT(if(peratus>=0.6 AND peratus<0.75, sid, NULL))";
$proto98["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "Jpercent";
$obj = new SQLFieldListItem($proto98);

$proto40["m_fieldlist"][]=$obj;
						$proto104=array();
			$proto105=array();
$proto105["m_functiontype"] = "SQLF_COUNT";
$proto105["m_arguments"] = array();
						$proto106=array();
$proto106["m_functiontype"] = "SQLF_CUSTOM";
$proto106["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "peratus>=0.4 AND peratus<0.6"
));

$proto106["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "sid"
));

$proto106["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto106["m_arguments"][]=$obj;
$proto106["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto106);

$proto105["m_arguments"][]=$obj;
$proto105["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto105);

$proto104["m_sql"] = "COUNT(if(peratus>=0.4 AND peratus<0.6, sid, NULL))";
$proto104["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "maqbul";
$obj = new SQLFieldListItem($proto104);

$proto40["m_fieldlist"][]=$obj;
						$proto110=array();
			$proto111=array();
$proto111["m_functiontype"] = "SQLF_COUNT";
$proto111["m_arguments"] = array();
						$proto112=array();
$proto112["m_functiontype"] = "SQLF_CUSTOM";
$proto112["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "peratus>=0.4 AND peratus<0.6"
));

$proto112["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "sid"
));

$proto112["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto112["m_arguments"][]=$obj;
$proto112["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto112);

$proto111["m_arguments"][]=$obj;
$proto111["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto111);

$proto110["m_sql"] = "COUNT(if(peratus>=0.4 AND peratus<0.6, sid, NULL))";
$proto110["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "MQpercent";
$obj = new SQLFieldListItem($proto110);

$proto40["m_fieldlist"][]=$obj;
						$proto116=array();
			$proto117=array();
$proto117["m_functiontype"] = "SQLF_COUNT";
$proto117["m_arguments"] = array();
						$proto118=array();
$proto118["m_functiontype"] = "SQLF_CUSTOM";
$proto118["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "peratus<0.4 AND takhadir=0"
));

$proto118["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "sid"
));

$proto118["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto118["m_arguments"][]=$obj;
$proto118["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto118);

$proto117["m_arguments"][]=$obj;
$proto117["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto117);

$proto116["m_sql"] = "COUNT(if(peratus<0.4 AND takhadir=0, sid, NULL))";
$proto116["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto116["m_expr"]=$obj;
$proto116["m_alias"] = "calonDhaif";
$obj = new SQLFieldListItem($proto116);

$proto40["m_fieldlist"][]=$obj;
$proto40["m_fromlist"] = array();
												$proto122=array();
$proto122["m_link"] = "SQLL_MAIN";
			$proto123=array();
$proto123["m_strHead"] = "  		SELECT";
$proto123["m_strFieldList"] = "sid AS sid,  exam_marking.sCode,  eYear,  eType,  COUNT(if(s1 LIKE '%TH%' AND s2 LIKE '%TH%' AND s3 LIKE '%TH%' AND s4 LIKE '%TH%' AND s5 LIKE '%TH%', exam_marking.sid, NULL)) AS takhadir,  SUM(s1+s2+s3+s4+s5) AS totalMark,  SUM(s1+s2+s3+s4+s5)/500 AS peratus,  sZone";
$proto123["m_strFrom"] = "FROM exam_marking  LEFT OUTER JOIN school ON exam_marking.sCode = school.sCode";
$proto123["m_strWhere"] = "";
$proto123["m_strOrderBy"] = "";
$proto123["m_strTail"] = "";
			$proto123["cipherer"] = null;
$proto124=array();
$proto124["m_sql"] = "";
$proto124["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto124["m_column"]=$obj;
$proto124["m_contained"] = array();
$proto124["m_strCase"] = "";
$proto124["m_havingmode"] = false;
$proto124["m_inBrackets"] = false;
$proto124["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto124);

$proto123["m_where"] = $obj;
$proto126=array();
$proto126["m_sql"] = "";
$proto126["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto126["m_column"]=$obj;
$proto126["m_contained"] = array();
$proto126["m_strCase"] = "";
$proto126["m_havingmode"] = false;
$proto126["m_inBrackets"] = false;
$proto126["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto126);

$proto123["m_having"] = $obj;
$proto123["m_fieldlist"] = array();
						$proto128=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "analisa_kelulusan_psra_daerah"
));

$proto128["m_sql"] = "sid";
$proto128["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto128["m_expr"]=$obj;
$proto128["m_alias"] = "sid";
$obj = new SQLFieldListItem($proto128);

$proto123["m_fieldlist"][]=$obj;
						$proto130=array();
			$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "analisa_kelulusan_psra_daerah"
));

$proto130["m_sql"] = "exam_marking.sCode";
$proto130["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto130["m_expr"]=$obj;
$proto130["m_alias"] = "";
$obj = new SQLFieldListItem($proto130);

$proto123["m_fieldlist"][]=$obj;
						$proto132=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "analisa_kelulusan_psra_daerah"
));

$proto132["m_sql"] = "eYear";
$proto132["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto132["m_expr"]=$obj;
$proto132["m_alias"] = "";
$obj = new SQLFieldListItem($proto132);

$proto123["m_fieldlist"][]=$obj;
						$proto134=array();
			$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "analisa_kelulusan_psra_daerah"
));

$proto134["m_sql"] = "eType";
$proto134["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto134["m_expr"]=$obj;
$proto134["m_alias"] = "";
$obj = new SQLFieldListItem($proto134);

$proto123["m_fieldlist"][]=$obj;
						$proto136=array();
			$proto137=array();
$proto137["m_functiontype"] = "SQLF_COUNT";
$proto137["m_arguments"] = array();
						$proto138=array();
$proto138["m_functiontype"] = "SQLF_CUSTOM";
$proto138["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "s1 LIKE '%TH%' AND s2 LIKE '%TH%' AND s3 LIKE '%TH%' AND s4 LIKE '%TH%' AND s5 LIKE '%TH%'"
));

$proto138["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto138["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto138["m_arguments"][]=$obj;
$proto138["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto138);

$proto137["m_arguments"][]=$obj;
$proto137["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto137);

$proto136["m_sql"] = "COUNT(if(s1 LIKE '%TH%' AND s2 LIKE '%TH%' AND s3 LIKE '%TH%' AND s4 LIKE '%TH%' AND s5 LIKE '%TH%', exam_marking.sid, NULL))";
$proto136["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto136["m_expr"]=$obj;
$proto136["m_alias"] = "takhadir";
$obj = new SQLFieldListItem($proto136);

$proto123["m_fieldlist"][]=$obj;
						$proto142=array();
			$proto143=array();
$proto143["m_functiontype"] = "SQLF_SUM";
$proto143["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "s1+s2+s3+s4+s5"
));

$proto143["m_arguments"][]=$obj;
$proto143["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto143);

$proto142["m_sql"] = "SUM(s1+s2+s3+s4+s5)";
$proto142["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "totalMark";
$obj = new SQLFieldListItem($proto142);

$proto123["m_fieldlist"][]=$obj;
						$proto145=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(s1+s2+s3+s4+s5)/500"
));

$proto145["m_sql"] = "SUM(s1+s2+s3+s4+s5)/500";
$proto145["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto145["m_expr"]=$obj;
$proto145["m_alias"] = "peratus";
$obj = new SQLFieldListItem($proto145);

$proto123["m_fieldlist"][]=$obj;
						$proto147=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sZone"
));

$proto147["m_sql"] = "sZone";
$proto147["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto147["m_expr"]=$obj;
$proto147["m_alias"] = "";
$obj = new SQLFieldListItem($proto147);

$proto123["m_fieldlist"][]=$obj;
$proto123["m_fromlist"] = array();
												$proto149=array();
$proto149["m_link"] = "SQLL_MAIN";
			$proto150=array();
$proto150["m_strName"] = "exam_marking";
$proto150["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto150["m_columns"] = array();
$proto150["m_columns"][] = "sid";
$proto150["m_columns"][] = "name";
$proto150["m_columns"][] = "gender";
$proto150["m_columns"][] = "birthdate";
$proto150["m_columns"][] = "birthCert";
$proto150["m_columns"][] = "nationality";
$proto150["m_columns"][] = "sCode";
$proto150["m_columns"][] = "eNo";
$proto150["m_columns"][] = "eYear";
$proto150["m_columns"][] = "eType";
$proto150["m_columns"][] = "s1";
$proto150["m_columns"][] = "s2";
$proto150["m_columns"][] = "s3";
$proto150["m_columns"][] = "s4";
$proto150["m_columns"][] = "s5";
$proto150["m_columns"][] = "s6";
$proto150["m_columns"][] = "s7";
$obj = new SQLTable($proto150);

$proto149["m_table"] = $obj;
$proto149["m_sql"] = "exam_marking";
$proto149["m_alias"] = "";
$proto149["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto151=array();
$proto151["m_sql"] = "";
$proto151["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto151["m_column"]=$obj;
$proto151["m_contained"] = array();
$proto151["m_strCase"] = "";
$proto151["m_havingmode"] = false;
$proto151["m_inBrackets"] = false;
$proto151["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto151);

$proto149["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto149);

$proto123["m_fromlist"][]=$obj;
												$proto153=array();
$proto153["m_link"] = "SQLL_LEFTJOIN";
			$proto154=array();
$proto154["m_strName"] = "school";
$proto154["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto154["m_columns"] = array();
$proto154["m_columns"][] = "sno";
$proto154["m_columns"][] = "sName";
$proto154["m_columns"][] = "sCenter";
$proto154["m_columns"][] = "sCode";
$proto154["m_columns"][] = "sZone";
$proto154["m_columns"][] = "sType";
$obj = new SQLTable($proto154);

$proto153["m_table"] = $obj;
$proto153["m_sql"] = "LEFT OUTER JOIN school ON exam_marking.sCode = school.sCode";
$proto153["m_alias"] = "";
$proto153["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto155=array();
$proto155["m_sql"] = "exam_marking.sCode = school.sCode";
$proto155["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "analisa_kelulusan_psra_daerah"
));

$proto155["m_column"]=$obj;
$proto155["m_contained"] = array();
$proto155["m_strCase"] = "= school.sCode";
$proto155["m_havingmode"] = false;
$proto155["m_inBrackets"] = false;
$proto155["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto155);

$proto153["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto153);

$proto123["m_fromlist"][]=$obj;
$proto123["m_groupby"] = array();
												$proto157=array();
						$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "analisa_kelulusan_psra_daerah"
));

$proto157["m_column"]=$obj;
$obj = new SQLGroupByItem($proto157);

$proto123["m_groupby"][]=$obj;
$proto123["m_orderby"] = array();
$proto123["m_srcTableName"]="analisa_kelulusan_psra_daerah";		
$obj = new SQLQuery($proto123);

$proto122["m_table"] = $obj;
$proto122["m_sql"] = "(  		SELECT  sid AS sid,  exam_marking.sCode,  eYear,  eType,  COUNT(if(s1 LIKE '%TH%' AND s2 LIKE '%TH%' AND s3 LIKE '%TH%' AND s4 LIKE '%TH%' AND s5 LIKE '%TH%', exam_marking.sid, NULL)) AS takhadir,  SUM(s1+s2+s3+s4+s5) AS totalMark,  SUM(s1+s2+s3+s4+s5)/500 AS peratus,  sZone  FROM exam_marking  LEFT OUTER JOIN school ON exam_marking.sCode = school.sCode   GROUP BY sid  ) AS Sub1";
$proto122["m_alias"] = "Sub1";
$proto122["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto159=array();
$proto159["m_sql"] = "";
$proto159["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto159["m_column"]=$obj;
$proto159["m_contained"] = array();
$proto159["m_strCase"] = "";
$proto159["m_havingmode"] = false;
$proto159["m_inBrackets"] = false;
$proto159["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto159);

$proto122["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto122);

$proto40["m_fromlist"][]=$obj;
$proto40["m_groupby"] = array();
												$proto161=array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "sZone"
));

$proto161["m_column"]=$obj;
$obj = new SQLGroupByItem($proto161);

$proto40["m_groupby"][]=$obj;
												$proto163=array();
						$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_kelulusan_psra_daerah"
));

$proto163["m_column"]=$obj;
$obj = new SQLGroupByItem($proto163);

$proto40["m_groupby"][]=$obj;
$proto40["m_orderby"] = array();
$proto40["m_srcTableName"]="analisa_kelulusan_psra_daerah";		
$obj = new SQLQuery($proto40);

$proto39["m_table"] = $obj;
$proto39["m_sql"] = "(  SELECT  sid,  sZone,  eYear,  COUNT(sid) AS bilCalon,  COUNT(if(takhadir>0, sid, NULL)) AS calonTakHadir,  COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) AS calonHadir,  COUNT(if(peratus>=0.4, sid, NULL)) AS calonLulus,  COUNT(if(peratus>=0.9, sid, NULL)) AS mumtaz,  COUNT(if(peratus>=0.9, sid, NULL)) AS Mpercent,  COUNT(if(peratus>=0.75 AND peratus<0.9, sid, NULL)) AS JJ,  COUNT(if(peratus>=0.75 AND peratus<0.9, sid, NULL)) AS JJpercent,  COUNT(if(peratus>=0.6 AND peratus<0.75, sid, NULL)) AS jidan,  COUNT(if(peratus>=0.6 AND peratus<0.75, sid, NULL)) AS Jpercent,  COUNT(if(peratus>=0.4 AND peratus<0.6, sid, NULL)) AS maqbul,  COUNT(if(peratus>=0.4 AND peratus<0.6, sid, NULL)) AS MQpercent,  COUNT(if(peratus<0.4 AND takhadir=0, sid, NULL)) AS calonDhaif  FROM (  		SELECT  sid AS sid,  exam_marking.sCode,  eYear,  eType,  COUNT(if(s1 LIKE '%TH%' AND s2 LIKE '%TH%' AND s3 LIKE '%TH%' AND s4 LIKE '%TH%' AND s5 LIKE '%TH%', exam_marking.sid, NULL)) AS takhadir,  SUM(s1+s2+s3+s4+s5) AS totalMark,  SUM(s1+s2+s3+s4+s5)/500 AS peratus,  sZone  FROM exam_marking  LEFT OUTER JOIN school ON exam_marking.sCode = school.sCode   GROUP BY sid  ) AS Sub1  GROUP BY sZone, eYear  ) AS Sub2";
$proto39["m_alias"] = "Sub2";
$proto39["m_srcTableName"] = "analisa_kelulusan_psra_daerah";
$proto165=array();
$proto165["m_sql"] = "";
$proto165["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto165["m_column"]=$obj;
$proto165["m_contained"] = array();
$proto165["m_strCase"] = "";
$proto165["m_havingmode"] = false;
$proto165["m_inBrackets"] = false;
$proto165["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto165);

$proto39["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto39);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto167=array();
						$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_daerah"
));

$proto167["m_column"]=$obj;
$proto167["m_bAsc"] = 0;
$proto167["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto167);

$proto0["m_orderby"][]=$obj;					
												$proto169=array();
						$obj = new SQLField(array(
	"m_strName" => "mumtaz",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_daerah"
));

$proto169["m_column"]=$obj;
$proto169["m_bAsc"] = 0;
$proto169["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto169);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="analisa_kelulusan_psra_daerah";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_analisa_kelulusan_psra_daerah = createSqlQuery_analisa_kelulusan_psra_daerah();



																	

$tdataanalisa_kelulusan_psra_daerah[".sqlquery"] = $queryData_analisa_kelulusan_psra_daerah;

include_once(getabspath("include/analisa_kelulusan_psra_daerah_events.php"));
$tableEvents["analisa_kelulusan_psra_daerah"] = new eventclass_analisa_kelulusan_psra_daerah;
$tdataanalisa_kelulusan_psra_daerah[".hasEvents"] = true;

$query = &$queryData_analisa_kelulusan_psra_daerah;
$table = "analisa_kelulusan_psra_daerah";
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