<?php
require_once(getabspath("classes/cipherer.php"));




$tdataanalisa_kelulusan_psra_sek = array();
	$tdataanalisa_kelulusan_psra_sek[".truncateText"] = true;
	$tdataanalisa_kelulusan_psra_sek[".NumberOfChars"] = 80;
	$tdataanalisa_kelulusan_psra_sek[".ShortName"] = "analisa_kelulusan_psra_sek";
	$tdataanalisa_kelulusan_psra_sek[".OwnerID"] = "";
	$tdataanalisa_kelulusan_psra_sek[".OriginalTable"] = "exam_marking";

//	field labels
$fieldLabelsanalisa_kelulusan_psra_sek = array();
$fieldToolTipsanalisa_kelulusan_psra_sek = array();
$pageTitlesanalisa_kelulusan_psra_sek = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsanalisa_kelulusan_psra_sek["English"] = array();
	$fieldToolTipsanalisa_kelulusan_psra_sek["English"] = array();
	$pageTitlesanalisa_kelulusan_psra_sek["English"] = array();
	$fieldLabelsanalisa_kelulusan_psra_sek["English"]["sid"] = "Sid";
	$fieldToolTipsanalisa_kelulusan_psra_sek["English"]["sid"] = "";
	$fieldLabelsanalisa_kelulusan_psra_sek["English"]["sCode"] = "Kod Sekolah";
	$fieldToolTipsanalisa_kelulusan_psra_sek["English"]["sCode"] = "";
	$fieldLabelsanalisa_kelulusan_psra_sek["English"]["eYear"] = "Tahun";
	$fieldToolTipsanalisa_kelulusan_psra_sek["English"]["eYear"] = "";
	$fieldLabelsanalisa_kelulusan_psra_sek["English"]["sZone"] = "Zon";
	$fieldToolTipsanalisa_kelulusan_psra_sek["English"]["sZone"] = "";
	$fieldLabelsanalisa_kelulusan_psra_sek["English"]["sName"] = "Nama Sekolah";
	$fieldToolTipsanalisa_kelulusan_psra_sek["English"]["sName"] = "";
	$fieldLabelsanalisa_kelulusan_psra_sek["English"]["mumtaz"] = "Mumtaz";
	$fieldToolTipsanalisa_kelulusan_psra_sek["English"]["mumtaz"] = "";
	$fieldLabelsanalisa_kelulusan_psra_sek["English"]["Mpercent"] = "%";
	$fieldToolTipsanalisa_kelulusan_psra_sek["English"]["Mpercent"] = "";
	$fieldLabelsanalisa_kelulusan_psra_sek["English"]["JJ"] = "Jayyid Jidan";
	$fieldToolTipsanalisa_kelulusan_psra_sek["English"]["JJ"] = "";
	$fieldLabelsanalisa_kelulusan_psra_sek["English"]["JJpercent"] = "%";
	$fieldToolTipsanalisa_kelulusan_psra_sek["English"]["JJpercent"] = "";
	$fieldLabelsanalisa_kelulusan_psra_sek["English"]["jidan"] = "Jidan";
	$fieldToolTipsanalisa_kelulusan_psra_sek["English"]["jidan"] = "";
	$fieldLabelsanalisa_kelulusan_psra_sek["English"]["Jpercent"] = "%";
	$fieldToolTipsanalisa_kelulusan_psra_sek["English"]["Jpercent"] = "";
	$fieldLabelsanalisa_kelulusan_psra_sek["English"]["maqbul"] = "Maqbul";
	$fieldToolTipsanalisa_kelulusan_psra_sek["English"]["maqbul"] = "";
	$fieldLabelsanalisa_kelulusan_psra_sek["English"]["MQpercent"] = "%";
	$fieldToolTipsanalisa_kelulusan_psra_sek["English"]["MQpercent"] = "";
	$fieldLabelsanalisa_kelulusan_psra_sek["English"]["bilCalon"] = "Bil Calon";
	$fieldToolTipsanalisa_kelulusan_psra_sek["English"]["bilCalon"] = "";
	$fieldLabelsanalisa_kelulusan_psra_sek["English"]["calonHadir"] = "Calon Hadir";
	$fieldToolTipsanalisa_kelulusan_psra_sek["English"]["calonHadir"] = "";
	$fieldLabelsanalisa_kelulusan_psra_sek["English"]["calonTakHadir"] = "Calon Tak Hadir";
	$fieldToolTipsanalisa_kelulusan_psra_sek["English"]["calonTakHadir"] = "";
	$fieldLabelsanalisa_kelulusan_psra_sek["English"]["calonLulus"] = "Calon Lulus";
	$fieldToolTipsanalisa_kelulusan_psra_sek["English"]["calonLulus"] = "";
	$fieldLabelsanalisa_kelulusan_psra_sek["English"]["peratusLulus"] = "%";
	$fieldToolTipsanalisa_kelulusan_psra_sek["English"]["peratusLulus"] = "";
	$fieldLabelsanalisa_kelulusan_psra_sek["English"]["peratusGagal"] = "%";
	$fieldToolTipsanalisa_kelulusan_psra_sek["English"]["peratusGagal"] = "";
	$fieldLabelsanalisa_kelulusan_psra_sek["English"]["calonDhaif"] = "Musaadah";
	$fieldToolTipsanalisa_kelulusan_psra_sek["English"]["calonDhaif"] = "";
	if (count($fieldToolTipsanalisa_kelulusan_psra_sek["English"]))
		$tdataanalisa_kelulusan_psra_sek[".isUseToolTips"] = true;
}
if(mlang_getcurrentlang()=="")
{
	$fieldLabelsanalisa_kelulusan_psra_sek[""] = array();
	$fieldToolTipsanalisa_kelulusan_psra_sek[""] = array();
	$pageTitlesanalisa_kelulusan_psra_sek[""] = array();
	if (count($fieldToolTipsanalisa_kelulusan_psra_sek[""]))
		$tdataanalisa_kelulusan_psra_sek[".isUseToolTips"] = true;
}


	$tdataanalisa_kelulusan_psra_sek[".NCSearch"] = true;



$tdataanalisa_kelulusan_psra_sek[".shortTableName"] = "analisa_kelulusan_psra_sek";
$tdataanalisa_kelulusan_psra_sek[".nSecOptions"] = 0;
$tdataanalisa_kelulusan_psra_sek[".recsPerRowList"] = 1;
$tdataanalisa_kelulusan_psra_sek[".recsPerRowPrint"] = 1;
$tdataanalisa_kelulusan_psra_sek[".mainTableOwnerID"] = "";
$tdataanalisa_kelulusan_psra_sek[".moveNext"] = 1;
$tdataanalisa_kelulusan_psra_sek[".entityType"] = 1;

$tdataanalisa_kelulusan_psra_sek[".strOriginalTableName"] = "exam_marking";




$tdataanalisa_kelulusan_psra_sek[".showAddInPopup"] = false;

$tdataanalisa_kelulusan_psra_sek[".showEditInPopup"] = false;

$tdataanalisa_kelulusan_psra_sek[".showViewInPopup"] = false;

//page's base css files names
$popupPagesLayoutNames = array();
$tdataanalisa_kelulusan_psra_sek[".popupPagesLayoutNames"] = $popupPagesLayoutNames;


$tdataanalisa_kelulusan_psra_sek[".fieldsForRegister"] = array();

$tdataanalisa_kelulusan_psra_sek[".listAjax"] = false;

	$tdataanalisa_kelulusan_psra_sek[".audit"] = false;

	$tdataanalisa_kelulusan_psra_sek[".locking"] = false;



$tdataanalisa_kelulusan_psra_sek[".list"] = true;



$tdataanalisa_kelulusan_psra_sek[".exportTo"] = true;



$tdataanalisa_kelulusan_psra_sek[".showSimpleSearchOptions"] = false;

// search Saving settings
$tdataanalisa_kelulusan_psra_sek[".searchSaving"] = false;
//

$tdataanalisa_kelulusan_psra_sek[".showSearchPanel"] = true;
		$tdataanalisa_kelulusan_psra_sek[".flexibleSearch"] = true;

if (isMobile())
	$tdataanalisa_kelulusan_psra_sek[".isUseAjaxSuggest"] = false;
else
	$tdataanalisa_kelulusan_psra_sek[".isUseAjaxSuggest"] = true;

$tdataanalisa_kelulusan_psra_sek[".rowHighlite"] = true;


																				
$tdataanalisa_kelulusan_psra_sek[".addPageEvents"] = false;

// use timepicker for search panel
$tdataanalisa_kelulusan_psra_sek[".isUseTimeForSearch"] = false;





$tdataanalisa_kelulusan_psra_sek[".allSearchFields"] = array();
$tdataanalisa_kelulusan_psra_sek[".filterFields"] = array();
$tdataanalisa_kelulusan_psra_sek[".requiredSearchFields"] = array();

$tdataanalisa_kelulusan_psra_sek[".allSearchFields"][] = "sZone";
	$tdataanalisa_kelulusan_psra_sek[".allSearchFields"][] = "sName";
	$tdataanalisa_kelulusan_psra_sek[".allSearchFields"][] = "sCode";
	$tdataanalisa_kelulusan_psra_sek[".allSearchFields"][] = "eYear";
	

$tdataanalisa_kelulusan_psra_sek[".googleLikeFields"] = array();
$tdataanalisa_kelulusan_psra_sek[".googleLikeFields"][] = "sName";

$tdataanalisa_kelulusan_psra_sek[".panelSearchFields"] = array();
$tdataanalisa_kelulusan_psra_sek[".searchPanelOptions"] = array();
$tdataanalisa_kelulusan_psra_sek[".panelSearchFields"][] = "sZone";
	$tdataanalisa_kelulusan_psra_sek[".panelSearchFields"][] = "sCode";
	$tdataanalisa_kelulusan_psra_sek[".panelSearchFields"][] = "eYear";
	
$tdataanalisa_kelulusan_psra_sek[".advSearchFields"] = array();
$tdataanalisa_kelulusan_psra_sek[".advSearchFields"][] = "sZone";
$tdataanalisa_kelulusan_psra_sek[".advSearchFields"][] = "sName";
$tdataanalisa_kelulusan_psra_sek[".advSearchFields"][] = "sCode";
$tdataanalisa_kelulusan_psra_sek[".advSearchFields"][] = "eYear";

$tdataanalisa_kelulusan_psra_sek[".tableType"] = "list";

$tdataanalisa_kelulusan_psra_sek[".printerPageOrientation"] = 0;
$tdataanalisa_kelulusan_psra_sek[".nPrinterPageScale"] = 100;

$tdataanalisa_kelulusan_psra_sek[".nPrinterSplitRecords"] = 40;

$tdataanalisa_kelulusan_psra_sek[".nPrinterPDFSplitRecords"] = 40;



$tdataanalisa_kelulusan_psra_sek[".geocodingEnabled"] = false;










// view page pdf

// print page pdf


$tdataanalisa_kelulusan_psra_sek[".pageSize"] = 20;

$tdataanalisa_kelulusan_psra_sek[".warnLeavingPages"] = true;



$tstrOrderBy = "ORDER BY eYear DESC, mumtaz DESC";
if(strlen($tstrOrderBy) && strtolower(substr($tstrOrderBy,0,8))!="order by")
	$tstrOrderBy = "order by ".$tstrOrderBy;
$tdataanalisa_kelulusan_psra_sek[".strOrderBy"] = $tstrOrderBy;

$tdataanalisa_kelulusan_psra_sek[".orderindexes"] = array();
$tdataanalisa_kelulusan_psra_sek[".orderindexes"][] = array(5, (0 ? "ASC" : "DESC"), "eYear");
$tdataanalisa_kelulusan_psra_sek[".orderindexes"][] = array(6, (0 ? "ASC" : "DESC"), "mumtaz");

$tdataanalisa_kelulusan_psra_sek[".sqlHead"] = "SELECT sCode,  sid,  sName,  sZone,  eYear,  mumtaz,  Mpercent,  JJ,  JJpercent,  jidan,  Jpercent,  maqbul,  MQpercent,  bilCalon,  calonHadir,  calonTakHadir,  calonLulus,  (calonLulus/calonHadir) AS peratusLulus,  (1-(calonLulus/calonHadir)) AS peratusGagal,  calonDhaif";
$tdataanalisa_kelulusan_psra_sek[".sqlFrom"] = "FROM (  SELECT  sCode,  sid,  sName,  sZone,  eYear,  COUNT(sid) AS bilCalon,  COUNT(if(takhadir>0, sid, NULL)) AS calonTakHadir,  COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) AS calonHadir,  COUNT(if(peratus>=0.4, sid, NULL)) AS calonLulus,  COUNT(if(peratus>=0.9, sid, NULL)) AS mumtaz,  COUNT(if(peratus>=0.9, sid, NULL)) AS Mpercent,  COUNT(if(peratus>=0.75 AND peratus<0.9, sid, NULL)) AS JJ,  COUNT(if(peratus>=0.75 AND peratus<0.9, sid, NULL)) AS JJpercent,  COUNT(if(peratus>=0.6 AND peratus<0.75, sid, NULL)) AS jidan,  COUNT(if(peratus>=0.6 AND peratus<0.75, sid, NULL)) AS Jpercent,  COUNT(if(peratus>=0.4 AND peratus<0.6, sid, NULL)) AS maqbul,  COUNT(if(peratus>=0.4 AND peratus<0.6, sid, NULL)) AS MQpercent,  COUNT(if(peratus<0.4 AND takhadir=0, sid, NULL)) AS calonDhaif  FROM (  		SELECT  sid AS sid,  exam_marking.sCode,  exam_marking.eYear,  exam_marking.eType,  COUNT(if(s1='TH' AND s2='TH' AND s3='TH' AND s4='TH' AND s5='TH', exam_marking.sid, NULL)) AS takhadir,  SUM(s1+s2+s3+s4+s5) AS totalMark,  SUM(s1+s2+s3+s4+s5)/500 AS peratus,  sZone,  sName  FROM exam_marking  LEFT OUTER JOIN school ON exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType  WHERE exam_marking.eType ='PSRA'  GROUP BY sid  ) AS Sub1  GROUP BY sCode, eYear  ) AS Sub2";
$tdataanalisa_kelulusan_psra_sek[".sqlWhereExpr"] = "";
$tdataanalisa_kelulusan_psra_sek[".sqlTail"] = "";











//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataanalisa_kelulusan_psra_sek[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataanalisa_kelulusan_psra_sek[".arrGroupsPerPage"] = $arrGPP;

$tdataanalisa_kelulusan_psra_sek[".highlightSearchResults"] = true;

$tableKeysanalisa_kelulusan_psra_sek = array();
$tableKeysanalisa_kelulusan_psra_sek[] = "sid";
$tdataanalisa_kelulusan_psra_sek[".Keys"] = $tableKeysanalisa_kelulusan_psra_sek;

$tdataanalisa_kelulusan_psra_sek[".listFields"] = array();
$tdataanalisa_kelulusan_psra_sek[".listFields"][] = "sName";
$tdataanalisa_kelulusan_psra_sek[".listFields"][] = "sCode";
$tdataanalisa_kelulusan_psra_sek[".listFields"][] = "eYear";
$tdataanalisa_kelulusan_psra_sek[".listFields"][] = "mumtaz";
$tdataanalisa_kelulusan_psra_sek[".listFields"][] = "Mpercent";
$tdataanalisa_kelulusan_psra_sek[".listFields"][] = "JJ";
$tdataanalisa_kelulusan_psra_sek[".listFields"][] = "JJpercent";
$tdataanalisa_kelulusan_psra_sek[".listFields"][] = "jidan";
$tdataanalisa_kelulusan_psra_sek[".listFields"][] = "Jpercent";
$tdataanalisa_kelulusan_psra_sek[".listFields"][] = "maqbul";
$tdataanalisa_kelulusan_psra_sek[".listFields"][] = "MQpercent";
$tdataanalisa_kelulusan_psra_sek[".listFields"][] = "bilCalon";
$tdataanalisa_kelulusan_psra_sek[".listFields"][] = "calonHadir";
$tdataanalisa_kelulusan_psra_sek[".listFields"][] = "calonTakHadir";
$tdataanalisa_kelulusan_psra_sek[".listFields"][] = "calonLulus";
$tdataanalisa_kelulusan_psra_sek[".listFields"][] = "peratusLulus";
$tdataanalisa_kelulusan_psra_sek[".listFields"][] = "calonDhaif";
$tdataanalisa_kelulusan_psra_sek[".listFields"][] = "peratusGagal";

$tdataanalisa_kelulusan_psra_sek[".hideMobileList"] = array();


$tdataanalisa_kelulusan_psra_sek[".viewFields"] = array();

$tdataanalisa_kelulusan_psra_sek[".addFields"] = array();

$tdataanalisa_kelulusan_psra_sek[".masterListFields"] = array();
$tdataanalisa_kelulusan_psra_sek[".masterListFields"][] = "sid";
$tdataanalisa_kelulusan_psra_sek[".masterListFields"][] = "sZone";
$tdataanalisa_kelulusan_psra_sek[".masterListFields"][] = "sName";
$tdataanalisa_kelulusan_psra_sek[".masterListFields"][] = "sCode";
$tdataanalisa_kelulusan_psra_sek[".masterListFields"][] = "eYear";
$tdataanalisa_kelulusan_psra_sek[".masterListFields"][] = "mumtaz";
$tdataanalisa_kelulusan_psra_sek[".masterListFields"][] = "Mpercent";
$tdataanalisa_kelulusan_psra_sek[".masterListFields"][] = "JJ";
$tdataanalisa_kelulusan_psra_sek[".masterListFields"][] = "JJpercent";
$tdataanalisa_kelulusan_psra_sek[".masterListFields"][] = "jidan";
$tdataanalisa_kelulusan_psra_sek[".masterListFields"][] = "Jpercent";
$tdataanalisa_kelulusan_psra_sek[".masterListFields"][] = "maqbul";
$tdataanalisa_kelulusan_psra_sek[".masterListFields"][] = "MQpercent";
$tdataanalisa_kelulusan_psra_sek[".masterListFields"][] = "bilCalon";
$tdataanalisa_kelulusan_psra_sek[".masterListFields"][] = "calonHadir";
$tdataanalisa_kelulusan_psra_sek[".masterListFields"][] = "calonTakHadir";
$tdataanalisa_kelulusan_psra_sek[".masterListFields"][] = "calonLulus";
$tdataanalisa_kelulusan_psra_sek[".masterListFields"][] = "peratusLulus";
$tdataanalisa_kelulusan_psra_sek[".masterListFields"][] = "peratusGagal";
$tdataanalisa_kelulusan_psra_sek[".masterListFields"][] = "calonDhaif";

$tdataanalisa_kelulusan_psra_sek[".inlineAddFields"] = array();

$tdataanalisa_kelulusan_psra_sek[".editFields"] = array();

$tdataanalisa_kelulusan_psra_sek[".inlineEditFields"] = array();

$tdataanalisa_kelulusan_psra_sek[".exportFields"] = array();
$tdataanalisa_kelulusan_psra_sek[".exportFields"][] = "sName";
$tdataanalisa_kelulusan_psra_sek[".exportFields"][] = "sCode";
$tdataanalisa_kelulusan_psra_sek[".exportFields"][] = "eYear";
$tdataanalisa_kelulusan_psra_sek[".exportFields"][] = "mumtaz";
$tdataanalisa_kelulusan_psra_sek[".exportFields"][] = "Mpercent";
$tdataanalisa_kelulusan_psra_sek[".exportFields"][] = "JJ";
$tdataanalisa_kelulusan_psra_sek[".exportFields"][] = "JJpercent";
$tdataanalisa_kelulusan_psra_sek[".exportFields"][] = "jidan";
$tdataanalisa_kelulusan_psra_sek[".exportFields"][] = "Jpercent";
$tdataanalisa_kelulusan_psra_sek[".exportFields"][] = "maqbul";
$tdataanalisa_kelulusan_psra_sek[".exportFields"][] = "MQpercent";
$tdataanalisa_kelulusan_psra_sek[".exportFields"][] = "bilCalon";
$tdataanalisa_kelulusan_psra_sek[".exportFields"][] = "calonHadir";
$tdataanalisa_kelulusan_psra_sek[".exportFields"][] = "calonTakHadir";
$tdataanalisa_kelulusan_psra_sek[".exportFields"][] = "calonLulus";
$tdataanalisa_kelulusan_psra_sek[".exportFields"][] = "peratusLulus";
$tdataanalisa_kelulusan_psra_sek[".exportFields"][] = "peratusGagal";
$tdataanalisa_kelulusan_psra_sek[".exportFields"][] = "calonDhaif";

$tdataanalisa_kelulusan_psra_sek[".importFields"] = array();

$tdataanalisa_kelulusan_psra_sek[".printFields"] = array();

//	sCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "sCode";
	$fdata["GoodName"] = "sCode";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_sek","sCode");
	$fdata["FieldType"] = 200;

	
	
	
			
		$fdata["bListPage"] = true;

	
	
	
	
	
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




	$tdataanalisa_kelulusan_psra_sek["sCode"] = $fdata;
//	sid
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sid";
	$fdata["GoodName"] = "sid";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_sek","sid");
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








	$tdataanalisa_kelulusan_psra_sek["sid"] = $fdata;
//	sName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sName";
	$fdata["GoodName"] = "sName";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_sek","sName");
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




	$tdataanalisa_kelulusan_psra_sek["sName"] = $fdata;
//	sZone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "sZone";
	$fdata["GoodName"] = "sZone";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_sek","sZone");
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




	$tdataanalisa_kelulusan_psra_sek["sZone"] = $fdata;
//	eYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "eYear";
	$fdata["GoodName"] = "eYear";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_sek","eYear");
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




	$tdataanalisa_kelulusan_psra_sek["eYear"] = $fdata;
//	mumtaz
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "mumtaz";
	$fdata["GoodName"] = "mumtaz";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_sek","mumtaz");
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








	$tdataanalisa_kelulusan_psra_sek["mumtaz"] = $fdata;
//	Mpercent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Mpercent";
	$fdata["GoodName"] = "Mpercent";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_sek","Mpercent");
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








	$tdataanalisa_kelulusan_psra_sek["Mpercent"] = $fdata;
//	JJ
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "JJ";
	$fdata["GoodName"] = "JJ";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_sek","JJ");
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








	$tdataanalisa_kelulusan_psra_sek["JJ"] = $fdata;
//	JJpercent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "JJpercent";
	$fdata["GoodName"] = "JJpercent";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_sek","JJpercent");
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








	$tdataanalisa_kelulusan_psra_sek["JJpercent"] = $fdata;
//	jidan
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "jidan";
	$fdata["GoodName"] = "jidan";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_sek","jidan");
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








	$tdataanalisa_kelulusan_psra_sek["jidan"] = $fdata;
//	Jpercent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Jpercent";
	$fdata["GoodName"] = "Jpercent";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_sek","Jpercent");
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








	$tdataanalisa_kelulusan_psra_sek["Jpercent"] = $fdata;
//	maqbul
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "maqbul";
	$fdata["GoodName"] = "maqbul";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_sek","maqbul");
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








	$tdataanalisa_kelulusan_psra_sek["maqbul"] = $fdata;
//	MQpercent
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "MQpercent";
	$fdata["GoodName"] = "MQpercent";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_sek","MQpercent");
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








	$tdataanalisa_kelulusan_psra_sek["MQpercent"] = $fdata;
//	bilCalon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "bilCalon";
	$fdata["GoodName"] = "bilCalon";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_sek","bilCalon");
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








	$tdataanalisa_kelulusan_psra_sek["bilCalon"] = $fdata;
//	calonHadir
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "calonHadir";
	$fdata["GoodName"] = "calonHadir";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_sek","calonHadir");
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








	$tdataanalisa_kelulusan_psra_sek["calonHadir"] = $fdata;
//	calonTakHadir
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "calonTakHadir";
	$fdata["GoodName"] = "calonTakHadir";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_sek","calonTakHadir");
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








	$tdataanalisa_kelulusan_psra_sek["calonTakHadir"] = $fdata;
//	calonLulus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "calonLulus";
	$fdata["GoodName"] = "calonLulus";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_sek","calonLulus");
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








	$tdataanalisa_kelulusan_psra_sek["calonLulus"] = $fdata;
//	peratusLulus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "peratusLulus";
	$fdata["GoodName"] = "peratusLulus";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_sek","peratusLulus");
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








	$tdataanalisa_kelulusan_psra_sek["peratusLulus"] = $fdata;
//	peratusGagal
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "peratusGagal";
	$fdata["GoodName"] = "peratusGagal";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_sek","peratusGagal");
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








	$tdataanalisa_kelulusan_psra_sek["peratusGagal"] = $fdata;
//	calonDhaif
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "calonDhaif";
	$fdata["GoodName"] = "calonDhaif";
	$fdata["ownerTable"] = "";
	$fdata["Label"] = GetFieldLabel("analisa_kelulusan_psra_sek","calonDhaif");
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








	$tdataanalisa_kelulusan_psra_sek["calonDhaif"] = $fdata;


$tables_data["analisa_kelulusan_psra_sek"]=&$tdataanalisa_kelulusan_psra_sek;
$field_labels["analisa_kelulusan_psra_sek"] = &$fieldLabelsanalisa_kelulusan_psra_sek;
$fieldToolTips["analisa_kelulusan_psra_sek"] = &$fieldToolTipsanalisa_kelulusan_psra_sek;
$page_titles["analisa_kelulusan_psra_sek"] = &$pageTitlesanalisa_kelulusan_psra_sek;

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)
$detailsTablesData["analisa_kelulusan_psra_sek"] = array();

// tables which are master tables for current table (detail)
$masterTablesData["analisa_kelulusan_psra_sek"] = array();


// -----------------end  prepare master-details data arrays ------------------------------//

require_once(getabspath("classes/sql.php"));










function createSqlQuery_analisa_kelulusan_psra_sek()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "sCode,  sid,  sName,  sZone,  eYear,  mumtaz,  Mpercent,  JJ,  JJpercent,  jidan,  Jpercent,  maqbul,  MQpercent,  bilCalon,  calonHadir,  calonTakHadir,  calonLulus,  (calonLulus/calonHadir) AS peratusLulus,  (1-(calonLulus/calonHadir)) AS peratusGagal,  calonDhaif";
$proto0["m_strFrom"] = "FROM (  SELECT  sCode,  sid,  sName,  sZone,  eYear,  COUNT(sid) AS bilCalon,  COUNT(if(takhadir>0, sid, NULL)) AS calonTakHadir,  COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) AS calonHadir,  COUNT(if(peratus>=0.4, sid, NULL)) AS calonLulus,  COUNT(if(peratus>=0.9, sid, NULL)) AS mumtaz,  COUNT(if(peratus>=0.9, sid, NULL)) AS Mpercent,  COUNT(if(peratus>=0.75 AND peratus<0.9, sid, NULL)) AS JJ,  COUNT(if(peratus>=0.75 AND peratus<0.9, sid, NULL)) AS JJpercent,  COUNT(if(peratus>=0.6 AND peratus<0.75, sid, NULL)) AS jidan,  COUNT(if(peratus>=0.6 AND peratus<0.75, sid, NULL)) AS Jpercent,  COUNT(if(peratus>=0.4 AND peratus<0.6, sid, NULL)) AS maqbul,  COUNT(if(peratus>=0.4 AND peratus<0.6, sid, NULL)) AS MQpercent,  COUNT(if(peratus<0.4 AND takhadir=0, sid, NULL)) AS calonDhaif  FROM (  		SELECT  sid AS sid,  exam_marking.sCode,  exam_marking.eYear,  exam_marking.eType,  COUNT(if(s1='TH' AND s2='TH' AND s3='TH' AND s4='TH' AND s5='TH', exam_marking.sid, NULL)) AS takhadir,  SUM(s1+s2+s3+s4+s5) AS totalMark,  SUM(s1+s2+s3+s4+s5)/500 AS peratus,  sZone,  sName  FROM exam_marking  LEFT OUTER JOIN school ON exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType  WHERE exam_marking.eType ='PSRA'  GROUP BY sid  ) AS Sub1  GROUP BY sCode, eYear  ) AS Sub2";
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
			$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_sek"
));

$proto5["m_sql"] = "sCode";
$proto5["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto5["m_expr"]=$obj;
$proto5["m_alias"] = "";
$obj = new SQLFieldListItem($proto5);

$proto0["m_fieldlist"][]=$obj;
						$proto7=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_sek"
));

$proto7["m_sql"] = "sid";
$proto7["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto7["m_expr"]=$obj;
$proto7["m_alias"] = "";
$obj = new SQLFieldListItem($proto7);

$proto0["m_fieldlist"][]=$obj;
						$proto9=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sName"
));

$proto9["m_sql"] = "sName";
$proto9["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto9["m_expr"]=$obj;
$proto9["m_alias"] = "";
$obj = new SQLFieldListItem($proto9);

$proto0["m_fieldlist"][]=$obj;
						$proto11=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sZone"
));

$proto11["m_sql"] = "sZone";
$proto11["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto11["m_expr"]=$obj;
$proto11["m_alias"] = "";
$obj = new SQLFieldListItem($proto11);

$proto0["m_fieldlist"][]=$obj;
						$proto13=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_sek"
));

$proto13["m_sql"] = "eYear";
$proto13["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto13["m_expr"]=$obj;
$proto13["m_alias"] = "";
$obj = new SQLFieldListItem($proto13);

$proto0["m_fieldlist"][]=$obj;
						$proto15=array();
			$obj = new SQLField(array(
	"m_strName" => "mumtaz",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_sek"
));

$proto15["m_sql"] = "mumtaz";
$proto15["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto15["m_expr"]=$obj;
$proto15["m_alias"] = "";
$obj = new SQLFieldListItem($proto15);

$proto0["m_fieldlist"][]=$obj;
						$proto17=array();
			$obj = new SQLField(array(
	"m_strName" => "Mpercent",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_sek"
));

$proto17["m_sql"] = "Mpercent";
$proto17["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto17["m_expr"]=$obj;
$proto17["m_alias"] = "";
$obj = new SQLFieldListItem($proto17);

$proto0["m_fieldlist"][]=$obj;
						$proto19=array();
			$obj = new SQLField(array(
	"m_strName" => "JJ",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_sek"
));

$proto19["m_sql"] = "JJ";
$proto19["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto19["m_expr"]=$obj;
$proto19["m_alias"] = "";
$obj = new SQLFieldListItem($proto19);

$proto0["m_fieldlist"][]=$obj;
						$proto21=array();
			$obj = new SQLField(array(
	"m_strName" => "JJpercent",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_sek"
));

$proto21["m_sql"] = "JJpercent";
$proto21["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto21["m_expr"]=$obj;
$proto21["m_alias"] = "";
$obj = new SQLFieldListItem($proto21);

$proto0["m_fieldlist"][]=$obj;
						$proto23=array();
			$obj = new SQLField(array(
	"m_strName" => "jidan",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_sek"
));

$proto23["m_sql"] = "jidan";
$proto23["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto23["m_expr"]=$obj;
$proto23["m_alias"] = "";
$obj = new SQLFieldListItem($proto23);

$proto0["m_fieldlist"][]=$obj;
						$proto25=array();
			$obj = new SQLField(array(
	"m_strName" => "Jpercent",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_sek"
));

$proto25["m_sql"] = "Jpercent";
$proto25["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto25["m_expr"]=$obj;
$proto25["m_alias"] = "";
$obj = new SQLFieldListItem($proto25);

$proto0["m_fieldlist"][]=$obj;
						$proto27=array();
			$obj = new SQLField(array(
	"m_strName" => "maqbul",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_sek"
));

$proto27["m_sql"] = "maqbul";
$proto27["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto27["m_expr"]=$obj;
$proto27["m_alias"] = "";
$obj = new SQLFieldListItem($proto27);

$proto0["m_fieldlist"][]=$obj;
						$proto29=array();
			$obj = new SQLField(array(
	"m_strName" => "MQpercent",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_sek"
));

$proto29["m_sql"] = "MQpercent";
$proto29["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto29["m_expr"]=$obj;
$proto29["m_alias"] = "";
$obj = new SQLFieldListItem($proto29);

$proto0["m_fieldlist"][]=$obj;
						$proto31=array();
			$obj = new SQLField(array(
	"m_strName" => "bilCalon",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_sek"
));

$proto31["m_sql"] = "bilCalon";
$proto31["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto31["m_expr"]=$obj;
$proto31["m_alias"] = "";
$obj = new SQLFieldListItem($proto31);

$proto0["m_fieldlist"][]=$obj;
						$proto33=array();
			$obj = new SQLField(array(
	"m_strName" => "calonHadir",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_sek"
));

$proto33["m_sql"] = "calonHadir";
$proto33["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto33["m_expr"]=$obj;
$proto33["m_alias"] = "";
$obj = new SQLFieldListItem($proto33);

$proto0["m_fieldlist"][]=$obj;
						$proto35=array();
			$obj = new SQLField(array(
	"m_strName" => "calonTakHadir",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_sek"
));

$proto35["m_sql"] = "calonTakHadir";
$proto35["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto35["m_expr"]=$obj;
$proto35["m_alias"] = "";
$obj = new SQLFieldListItem($proto35);

$proto0["m_fieldlist"][]=$obj;
						$proto37=array();
			$obj = new SQLField(array(
	"m_strName" => "calonLulus",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_sek"
));

$proto37["m_sql"] = "calonLulus";
$proto37["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto37["m_expr"]=$obj;
$proto37["m_alias"] = "";
$obj = new SQLFieldListItem($proto37);

$proto0["m_fieldlist"][]=$obj;
						$proto39=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(calonLulus/calonHadir)"
));

$proto39["m_sql"] = "(calonLulus/calonHadir)";
$proto39["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto39["m_expr"]=$obj;
$proto39["m_alias"] = "peratusLulus";
$obj = new SQLFieldListItem($proto39);

$proto0["m_fieldlist"][]=$obj;
						$proto41=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "(1-(calonLulus/calonHadir))"
));

$proto41["m_sql"] = "(1-(calonLulus/calonHadir))";
$proto41["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto41["m_expr"]=$obj;
$proto41["m_alias"] = "peratusGagal";
$obj = new SQLFieldListItem($proto41);

$proto0["m_fieldlist"][]=$obj;
						$proto43=array();
			$obj = new SQLField(array(
	"m_strName" => "calonDhaif",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_sek"
));

$proto43["m_sql"] = "calonDhaif";
$proto43["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto43["m_expr"]=$obj;
$proto43["m_alias"] = "";
$obj = new SQLFieldListItem($proto43);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto45=array();
$proto45["m_link"] = "SQLL_MAIN";
			$proto46=array();
$proto46["m_strHead"] = "  SELECT";
$proto46["m_strFieldList"] = "sCode,  sid,  sName,  sZone,  eYear,  COUNT(sid) AS bilCalon,  COUNT(if(takhadir>0, sid, NULL)) AS calonTakHadir,  COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) AS calonHadir,  COUNT(if(peratus>=0.4, sid, NULL)) AS calonLulus,  COUNT(if(peratus>=0.9, sid, NULL)) AS mumtaz,  COUNT(if(peratus>=0.9, sid, NULL)) AS Mpercent,  COUNT(if(peratus>=0.75 AND peratus<0.9, sid, NULL)) AS JJ,  COUNT(if(peratus>=0.75 AND peratus<0.9, sid, NULL)) AS JJpercent,  COUNT(if(peratus>=0.6 AND peratus<0.75, sid, NULL)) AS jidan,  COUNT(if(peratus>=0.6 AND peratus<0.75, sid, NULL)) AS Jpercent,  COUNT(if(peratus>=0.4 AND peratus<0.6, sid, NULL)) AS maqbul,  COUNT(if(peratus>=0.4 AND peratus<0.6, sid, NULL)) AS MQpercent,  COUNT(if(peratus<0.4 AND takhadir=0, sid, NULL)) AS calonDhaif";
$proto46["m_strFrom"] = "FROM (  		SELECT  sid AS sid,  exam_marking.sCode,  exam_marking.eYear,  exam_marking.eType,  COUNT(if(s1='TH' AND s2='TH' AND s3='TH' AND s4='TH' AND s5='TH', exam_marking.sid, NULL)) AS takhadir,  SUM(s1+s2+s3+s4+s5) AS totalMark,  SUM(s1+s2+s3+s4+s5)/500 AS peratus,  sZone,  sName  FROM exam_marking  LEFT OUTER JOIN school ON exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType  WHERE exam_marking.eType ='PSRA'  GROUP BY sid  ) AS Sub1";
$proto46["m_strWhere"] = "";
$proto46["m_strOrderBy"] = "";
$proto46["m_strTail"] = "";
			$proto46["cipherer"] = null;
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

$proto46["m_where"] = $obj;
$proto49=array();
$proto49["m_sql"] = "";
$proto49["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto49["m_column"]=$obj;
$proto49["m_contained"] = array();
$proto49["m_strCase"] = "";
$proto49["m_havingmode"] = false;
$proto49["m_inBrackets"] = false;
$proto49["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto49);

$proto46["m_having"] = $obj;
$proto46["m_fieldlist"] = array();
						$proto51=array();
			$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_kelulusan_psra_sek"
));

$proto51["m_sql"] = "sCode";
$proto51["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto51["m_expr"]=$obj;
$proto51["m_alias"] = "";
$obj = new SQLFieldListItem($proto51);

$proto46["m_fieldlist"][]=$obj;
						$proto53=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_kelulusan_psra_sek"
));

$proto53["m_sql"] = "sid";
$proto53["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto53["m_expr"]=$obj;
$proto53["m_alias"] = "";
$obj = new SQLFieldListItem($proto53);

$proto46["m_fieldlist"][]=$obj;
						$proto55=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sName"
));

$proto55["m_sql"] = "sName";
$proto55["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto55["m_expr"]=$obj;
$proto55["m_alias"] = "";
$obj = new SQLFieldListItem($proto55);

$proto46["m_fieldlist"][]=$obj;
						$proto57=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sZone"
));

$proto57["m_sql"] = "sZone";
$proto57["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto57["m_expr"]=$obj;
$proto57["m_alias"] = "";
$obj = new SQLFieldListItem($proto57);

$proto46["m_fieldlist"][]=$obj;
						$proto59=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_kelulusan_psra_sek"
));

$proto59["m_sql"] = "eYear";
$proto59["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto59["m_expr"]=$obj;
$proto59["m_alias"] = "";
$obj = new SQLFieldListItem($proto59);

$proto46["m_fieldlist"][]=$obj;
						$proto61=array();
			$proto62=array();
$proto62["m_functiontype"] = "SQLF_COUNT";
$proto62["m_arguments"] = array();
						$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_kelulusan_psra_sek"
));

$proto62["m_arguments"][]=$obj;
$proto62["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto62);

$proto61["m_sql"] = "COUNT(sid)";
$proto61["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto61["m_expr"]=$obj;
$proto61["m_alias"] = "bilCalon";
$obj = new SQLFieldListItem($proto61);

$proto46["m_fieldlist"][]=$obj;
						$proto64=array();
			$proto65=array();
$proto65["m_functiontype"] = "SQLF_COUNT";
$proto65["m_arguments"] = array();
						$proto66=array();
$proto66["m_functiontype"] = "SQLF_CUSTOM";
$proto66["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "takhadir>0"
));

$proto66["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "sid"
));

$proto66["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto66["m_arguments"][]=$obj;
$proto66["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto66);

$proto65["m_arguments"][]=$obj;
$proto65["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto65);

$proto64["m_sql"] = "COUNT(if(takhadir>0, sid, NULL))";
$proto64["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "calonTakHadir";
$obj = new SQLFieldListItem($proto64);

$proto46["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL))"
));

$proto70["m_sql"] = "COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL))";
$proto70["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "calonHadir";
$obj = new SQLFieldListItem($proto70);

$proto46["m_fieldlist"][]=$obj;
						$proto72=array();
			$proto73=array();
$proto73["m_functiontype"] = "SQLF_COUNT";
$proto73["m_arguments"] = array();
						$proto74=array();
$proto74["m_functiontype"] = "SQLF_CUSTOM";
$proto74["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "peratus>=0.4"
));

$proto74["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "sid"
));

$proto74["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto74["m_arguments"][]=$obj;
$proto74["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto74);

$proto73["m_arguments"][]=$obj;
$proto73["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto73);

$proto72["m_sql"] = "COUNT(if(peratus>=0.4, sid, NULL))";
$proto72["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "calonLulus";
$obj = new SQLFieldListItem($proto72);

$proto46["m_fieldlist"][]=$obj;
						$proto78=array();
			$proto79=array();
$proto79["m_functiontype"] = "SQLF_COUNT";
$proto79["m_arguments"] = array();
						$proto80=array();
$proto80["m_functiontype"] = "SQLF_CUSTOM";
$proto80["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "peratus>=0.9"
));

$proto80["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "sid"
));

$proto80["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto80["m_arguments"][]=$obj;
$proto80["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto80);

$proto79["m_arguments"][]=$obj;
$proto79["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto79);

$proto78["m_sql"] = "COUNT(if(peratus>=0.9, sid, NULL))";
$proto78["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "mumtaz";
$obj = new SQLFieldListItem($proto78);

$proto46["m_fieldlist"][]=$obj;
						$proto84=array();
			$proto85=array();
$proto85["m_functiontype"] = "SQLF_COUNT";
$proto85["m_arguments"] = array();
						$proto86=array();
$proto86["m_functiontype"] = "SQLF_CUSTOM";
$proto86["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "peratus>=0.9"
));

$proto86["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "sid"
));

$proto86["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto86["m_arguments"][]=$obj;
$proto86["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto86);

$proto85["m_arguments"][]=$obj;
$proto85["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto85);

$proto84["m_sql"] = "COUNT(if(peratus>=0.9, sid, NULL))";
$proto84["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "Mpercent";
$obj = new SQLFieldListItem($proto84);

$proto46["m_fieldlist"][]=$obj;
						$proto90=array();
			$proto91=array();
$proto91["m_functiontype"] = "SQLF_COUNT";
$proto91["m_arguments"] = array();
						$proto92=array();
$proto92["m_functiontype"] = "SQLF_CUSTOM";
$proto92["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "peratus>=0.75 AND peratus<0.9"
));

$proto92["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "sid"
));

$proto92["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto92["m_arguments"][]=$obj;
$proto92["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto92);

$proto91["m_arguments"][]=$obj;
$proto91["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto91);

$proto90["m_sql"] = "COUNT(if(peratus>=0.75 AND peratus<0.9, sid, NULL))";
$proto90["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "JJ";
$obj = new SQLFieldListItem($proto90);

$proto46["m_fieldlist"][]=$obj;
						$proto96=array();
			$proto97=array();
$proto97["m_functiontype"] = "SQLF_COUNT";
$proto97["m_arguments"] = array();
						$proto98=array();
$proto98["m_functiontype"] = "SQLF_CUSTOM";
$proto98["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "peratus>=0.75 AND peratus<0.9"
));

$proto98["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "sid"
));

$proto98["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto98["m_arguments"][]=$obj;
$proto98["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto98);

$proto97["m_arguments"][]=$obj;
$proto97["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto97);

$proto96["m_sql"] = "COUNT(if(peratus>=0.75 AND peratus<0.9, sid, NULL))";
$proto96["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "JJpercent";
$obj = new SQLFieldListItem($proto96);

$proto46["m_fieldlist"][]=$obj;
						$proto102=array();
			$proto103=array();
$proto103["m_functiontype"] = "SQLF_COUNT";
$proto103["m_arguments"] = array();
						$proto104=array();
$proto104["m_functiontype"] = "SQLF_CUSTOM";
$proto104["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "peratus>=0.6 AND peratus<0.75"
));

$proto104["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "sid"
));

$proto104["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto104["m_arguments"][]=$obj;
$proto104["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto104);

$proto103["m_arguments"][]=$obj;
$proto103["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto103);

$proto102["m_sql"] = "COUNT(if(peratus>=0.6 AND peratus<0.75, sid, NULL))";
$proto102["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "jidan";
$obj = new SQLFieldListItem($proto102);

$proto46["m_fieldlist"][]=$obj;
						$proto108=array();
			$proto109=array();
$proto109["m_functiontype"] = "SQLF_COUNT";
$proto109["m_arguments"] = array();
						$proto110=array();
$proto110["m_functiontype"] = "SQLF_CUSTOM";
$proto110["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "peratus>=0.6 AND peratus<0.75"
));

$proto110["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "sid"
));

$proto110["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto110["m_arguments"][]=$obj;
$proto110["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto110);

$proto109["m_arguments"][]=$obj;
$proto109["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto109);

$proto108["m_sql"] = "COUNT(if(peratus>=0.6 AND peratus<0.75, sid, NULL))";
$proto108["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "Jpercent";
$obj = new SQLFieldListItem($proto108);

$proto46["m_fieldlist"][]=$obj;
						$proto114=array();
			$proto115=array();
$proto115["m_functiontype"] = "SQLF_COUNT";
$proto115["m_arguments"] = array();
						$proto116=array();
$proto116["m_functiontype"] = "SQLF_CUSTOM";
$proto116["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "peratus>=0.4 AND peratus<0.6"
));

$proto116["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "sid"
));

$proto116["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto116["m_arguments"][]=$obj;
$proto116["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto116);

$proto115["m_arguments"][]=$obj;
$proto115["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto115);

$proto114["m_sql"] = "COUNT(if(peratus>=0.4 AND peratus<0.6, sid, NULL))";
$proto114["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto114["m_expr"]=$obj;
$proto114["m_alias"] = "maqbul";
$obj = new SQLFieldListItem($proto114);

$proto46["m_fieldlist"][]=$obj;
						$proto120=array();
			$proto121=array();
$proto121["m_functiontype"] = "SQLF_COUNT";
$proto121["m_arguments"] = array();
						$proto122=array();
$proto122["m_functiontype"] = "SQLF_CUSTOM";
$proto122["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "peratus>=0.4 AND peratus<0.6"
));

$proto122["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "sid"
));

$proto122["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto122["m_arguments"][]=$obj;
$proto122["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto122);

$proto121["m_arguments"][]=$obj;
$proto121["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto121);

$proto120["m_sql"] = "COUNT(if(peratus>=0.4 AND peratus<0.6, sid, NULL))";
$proto120["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto120["m_expr"]=$obj;
$proto120["m_alias"] = "MQpercent";
$obj = new SQLFieldListItem($proto120);

$proto46["m_fieldlist"][]=$obj;
						$proto126=array();
			$proto127=array();
$proto127["m_functiontype"] = "SQLF_COUNT";
$proto127["m_arguments"] = array();
						$proto128=array();
$proto128["m_functiontype"] = "SQLF_CUSTOM";
$proto128["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "peratus<0.4 AND takhadir=0"
));

$proto128["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "sid"
));

$proto128["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto128["m_arguments"][]=$obj;
$proto128["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto128);

$proto127["m_arguments"][]=$obj;
$proto127["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto127);

$proto126["m_sql"] = "COUNT(if(peratus<0.4 AND takhadir=0, sid, NULL))";
$proto126["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto126["m_expr"]=$obj;
$proto126["m_alias"] = "calonDhaif";
$obj = new SQLFieldListItem($proto126);

$proto46["m_fieldlist"][]=$obj;
$proto46["m_fromlist"] = array();
												$proto132=array();
$proto132["m_link"] = "SQLL_MAIN";
			$proto133=array();
$proto133["m_strHead"] = "  		SELECT";
$proto133["m_strFieldList"] = "sid AS sid,  exam_marking.sCode,  exam_marking.eYear,  exam_marking.eType,  COUNT(if(s1='TH' AND s2='TH' AND s3='TH' AND s4='TH' AND s5='TH', exam_marking.sid, NULL)) AS takhadir,  SUM(s1+s2+s3+s4+s5) AS totalMark,  SUM(s1+s2+s3+s4+s5)/500 AS peratus,  sZone,  sName";
$proto133["m_strFrom"] = "FROM exam_marking  LEFT OUTER JOIN school ON exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType";
$proto133["m_strWhere"] = "exam_marking.eType ='PSRA'";
$proto133["m_strOrderBy"] = "";
$proto133["m_strTail"] = "";
			$proto133["cipherer"] = null;
$proto134=array();
$proto134["m_sql"] = "exam_marking.eType ='PSRA'";
$proto134["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "analisa_kelulusan_psra_sek"
));

$proto134["m_column"]=$obj;
$proto134["m_contained"] = array();
$proto134["m_strCase"] = "='PSRA'";
$proto134["m_havingmode"] = false;
$proto134["m_inBrackets"] = false;
$proto134["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto134);

$proto133["m_where"] = $obj;
$proto136=array();
$proto136["m_sql"] = "";
$proto136["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto136["m_column"]=$obj;
$proto136["m_contained"] = array();
$proto136["m_strCase"] = "";
$proto136["m_havingmode"] = false;
$proto136["m_inBrackets"] = false;
$proto136["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto136);

$proto133["m_having"] = $obj;
$proto133["m_fieldlist"] = array();
						$proto138=array();
			$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "analisa_kelulusan_psra_sek"
));

$proto138["m_sql"] = "sid";
$proto138["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto138["m_expr"]=$obj;
$proto138["m_alias"] = "sid";
$obj = new SQLFieldListItem($proto138);

$proto133["m_fieldlist"][]=$obj;
						$proto140=array();
			$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "analisa_kelulusan_psra_sek"
));

$proto140["m_sql"] = "exam_marking.sCode";
$proto140["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto140["m_expr"]=$obj;
$proto140["m_alias"] = "";
$obj = new SQLFieldListItem($proto140);

$proto133["m_fieldlist"][]=$obj;
						$proto142=array();
			$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "analisa_kelulusan_psra_sek"
));

$proto142["m_sql"] = "exam_marking.eYear";
$proto142["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto142["m_expr"]=$obj;
$proto142["m_alias"] = "";
$obj = new SQLFieldListItem($proto142);

$proto133["m_fieldlist"][]=$obj;
						$proto144=array();
			$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "analisa_kelulusan_psra_sek"
));

$proto144["m_sql"] = "exam_marking.eType";
$proto144["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto144["m_expr"]=$obj;
$proto144["m_alias"] = "";
$obj = new SQLFieldListItem($proto144);

$proto133["m_fieldlist"][]=$obj;
						$proto146=array();
			$proto147=array();
$proto147["m_functiontype"] = "SQLF_COUNT";
$proto147["m_arguments"] = array();
						$proto148=array();
$proto148["m_functiontype"] = "SQLF_CUSTOM";
$proto148["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "s1='TH' AND s2='TH' AND s3='TH' AND s4='TH' AND s5='TH'"
));

$proto148["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sid"
));

$proto148["m_arguments"][]=$obj;
						$obj = new SQLNonParsed(array(
	"m_sql" => "NULL"
));

$proto148["m_arguments"][]=$obj;
$proto148["m_strFunctionName"] = "if";
$obj = new SQLFunctionCall($proto148);

$proto147["m_arguments"][]=$obj;
$proto147["m_strFunctionName"] = "COUNT";
$obj = new SQLFunctionCall($proto147);

$proto146["m_sql"] = "COUNT(if(s1='TH' AND s2='TH' AND s3='TH' AND s4='TH' AND s5='TH', exam_marking.sid, NULL))";
$proto146["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto146["m_expr"]=$obj;
$proto146["m_alias"] = "takhadir";
$obj = new SQLFieldListItem($proto146);

$proto133["m_fieldlist"][]=$obj;
						$proto152=array();
			$proto153=array();
$proto153["m_functiontype"] = "SQLF_SUM";
$proto153["m_arguments"] = array();
						$obj = new SQLNonParsed(array(
	"m_sql" => "s1+s2+s3+s4+s5"
));

$proto153["m_arguments"][]=$obj;
$proto153["m_strFunctionName"] = "SUM";
$obj = new SQLFunctionCall($proto153);

$proto152["m_sql"] = "SUM(s1+s2+s3+s4+s5)";
$proto152["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto152["m_expr"]=$obj;
$proto152["m_alias"] = "totalMark";
$obj = new SQLFieldListItem($proto152);

$proto133["m_fieldlist"][]=$obj;
						$proto155=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "SUM(s1+s2+s3+s4+s5)/500"
));

$proto155["m_sql"] = "SUM(s1+s2+s3+s4+s5)/500";
$proto155["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto155["m_expr"]=$obj;
$proto155["m_alias"] = "peratus";
$obj = new SQLFieldListItem($proto155);

$proto133["m_fieldlist"][]=$obj;
						$proto157=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sZone"
));

$proto157["m_sql"] = "sZone";
$proto157["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto157["m_expr"]=$obj;
$proto157["m_alias"] = "";
$obj = new SQLFieldListItem($proto157);

$proto133["m_fieldlist"][]=$obj;
						$proto159=array();
			$obj = new SQLNonParsed(array(
	"m_sql" => "sName"
));

$proto159["m_sql"] = "sName";
$proto159["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto159["m_expr"]=$obj;
$proto159["m_alias"] = "";
$obj = new SQLFieldListItem($proto159);

$proto133["m_fieldlist"][]=$obj;
$proto133["m_fromlist"] = array();
												$proto161=array();
$proto161["m_link"] = "SQLL_MAIN";
			$proto162=array();
$proto162["m_strName"] = "exam_marking";
$proto162["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto162["m_columns"] = array();
$proto162["m_columns"][] = "sid";
$proto162["m_columns"][] = "name";
$proto162["m_columns"][] = "gender";
$proto162["m_columns"][] = "birthdate";
$proto162["m_columns"][] = "birthCert";
$proto162["m_columns"][] = "nationality";
$proto162["m_columns"][] = "sCode";
$proto162["m_columns"][] = "eNo";
$proto162["m_columns"][] = "eYear";
$proto162["m_columns"][] = "eType";
$proto162["m_columns"][] = "s1";
$proto162["m_columns"][] = "s2";
$proto162["m_columns"][] = "s3";
$proto162["m_columns"][] = "s4";
$proto162["m_columns"][] = "s5";
$proto162["m_columns"][] = "s6";
$proto162["m_columns"][] = "s7";
$obj = new SQLTable($proto162);

$proto161["m_table"] = $obj;
$proto161["m_sql"] = "exam_marking";
$proto161["m_alias"] = "";
$proto161["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto163=array();
$proto163["m_sql"] = "";
$proto163["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto163["m_column"]=$obj;
$proto163["m_contained"] = array();
$proto163["m_strCase"] = "";
$proto163["m_havingmode"] = false;
$proto163["m_inBrackets"] = false;
$proto163["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto163);

$proto161["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto161);

$proto133["m_fromlist"][]=$obj;
												$proto165=array();
$proto165["m_link"] = "SQLL_LEFTJOIN";
			$proto166=array();
$proto166["m_strName"] = "school";
$proto166["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto166["m_columns"] = array();
$proto166["m_columns"][] = "sno";
$proto166["m_columns"][] = "sName";
$proto166["m_columns"][] = "sCenter";
$proto166["m_columns"][] = "sCode";
$proto166["m_columns"][] = "sZone";
$proto166["m_columns"][] = "sType";
$obj = new SQLTable($proto166);

$proto165["m_table"] = $obj;
$proto165["m_sql"] = "LEFT OUTER JOIN school ON exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType";
$proto165["m_alias"] = "";
$proto165["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto167=array();
$proto167["m_sql"] = "exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType";
$proto167["m_uniontype"] = "SQLL_AND";
	$obj = new SQLNonParsed(array(
	"m_sql" => "exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType"
));

$proto167["m_column"]=$obj;
$proto167["m_contained"] = array();
						$proto169=array();
$proto169["m_sql"] = "exam_marking.sCode = school.sCode";
$proto169["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "analisa_kelulusan_psra_sek"
));

$proto169["m_column"]=$obj;
$proto169["m_contained"] = array();
$proto169["m_strCase"] = "= school.sCode";
$proto169["m_havingmode"] = false;
$proto169["m_inBrackets"] = false;
$proto169["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto169);

			$proto167["m_contained"][]=$obj;
						$proto171=array();
$proto171["m_sql"] = "exam_marking.eType = school.sType";
$proto171["m_uniontype"] = "SQLL_UNKNOWN";
						$obj = new SQLField(array(
	"m_strName" => "eType",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "analisa_kelulusan_psra_sek"
));

$proto171["m_column"]=$obj;
$proto171["m_contained"] = array();
$proto171["m_strCase"] = "= school.sType";
$proto171["m_havingmode"] = false;
$proto171["m_inBrackets"] = false;
$proto171["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto171);

			$proto167["m_contained"][]=$obj;
$proto167["m_strCase"] = "";
$proto167["m_havingmode"] = false;
$proto167["m_inBrackets"] = false;
$proto167["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto167);

$proto165["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto165);

$proto133["m_fromlist"][]=$obj;
$proto133["m_groupby"] = array();
												$proto173=array();
						$obj = new SQLField(array(
	"m_strName" => "sid",
	"m_strTable" => "exam_marking",
	"m_srcTableName" => "analisa_kelulusan_psra_sek"
));

$proto173["m_column"]=$obj;
$obj = new SQLGroupByItem($proto173);

$proto133["m_groupby"][]=$obj;
$proto133["m_orderby"] = array();
$proto133["m_srcTableName"]="analisa_kelulusan_psra_sek";		
$obj = new SQLQuery($proto133);

$proto132["m_table"] = $obj;
$proto132["m_sql"] = "(  		SELECT  sid AS sid,  exam_marking.sCode,  exam_marking.eYear,  exam_marking.eType,  COUNT(if(s1='TH' AND s2='TH' AND s3='TH' AND s4='TH' AND s5='TH', exam_marking.sid, NULL)) AS takhadir,  SUM(s1+s2+s3+s4+s5) AS totalMark,  SUM(s1+s2+s3+s4+s5)/500 AS peratus,  sZone,  sName  FROM exam_marking  LEFT OUTER JOIN school ON exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType  WHERE exam_marking.eType ='PSRA'  GROUP BY sid  ) AS Sub1";
$proto132["m_alias"] = "Sub1";
$proto132["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto175=array();
$proto175["m_sql"] = "";
$proto175["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto175["m_column"]=$obj;
$proto175["m_contained"] = array();
$proto175["m_strCase"] = "";
$proto175["m_havingmode"] = false;
$proto175["m_inBrackets"] = false;
$proto175["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto175);

$proto132["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto132);

$proto46["m_fromlist"][]=$obj;
$proto46["m_groupby"] = array();
												$proto177=array();
						$obj = new SQLField(array(
	"m_strName" => "sCode",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_kelulusan_psra_sek"
));

$proto177["m_column"]=$obj;
$obj = new SQLGroupByItem($proto177);

$proto46["m_groupby"][]=$obj;
												$proto179=array();
						$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "Sub1",
	"m_srcTableName" => "analisa_kelulusan_psra_sek"
));

$proto179["m_column"]=$obj;
$obj = new SQLGroupByItem($proto179);

$proto46["m_groupby"][]=$obj;
$proto46["m_orderby"] = array();
$proto46["m_srcTableName"]="analisa_kelulusan_psra_sek";		
$obj = new SQLQuery($proto46);

$proto45["m_table"] = $obj;
$proto45["m_sql"] = "(  SELECT  sCode,  sid,  sName,  sZone,  eYear,  COUNT(sid) AS bilCalon,  COUNT(if(takhadir>0, sid, NULL)) AS calonTakHadir,  COUNT(sid) -  COUNT(if(takhadir>0,sid, NULL)) AS calonHadir,  COUNT(if(peratus>=0.4, sid, NULL)) AS calonLulus,  COUNT(if(peratus>=0.9, sid, NULL)) AS mumtaz,  COUNT(if(peratus>=0.9, sid, NULL)) AS Mpercent,  COUNT(if(peratus>=0.75 AND peratus<0.9, sid, NULL)) AS JJ,  COUNT(if(peratus>=0.75 AND peratus<0.9, sid, NULL)) AS JJpercent,  COUNT(if(peratus>=0.6 AND peratus<0.75, sid, NULL)) AS jidan,  COUNT(if(peratus>=0.6 AND peratus<0.75, sid, NULL)) AS Jpercent,  COUNT(if(peratus>=0.4 AND peratus<0.6, sid, NULL)) AS maqbul,  COUNT(if(peratus>=0.4 AND peratus<0.6, sid, NULL)) AS MQpercent,  COUNT(if(peratus<0.4 AND takhadir=0, sid, NULL)) AS calonDhaif  FROM (  		SELECT  sid AS sid,  exam_marking.sCode,  exam_marking.eYear,  exam_marking.eType,  COUNT(if(s1='TH' AND s2='TH' AND s3='TH' AND s4='TH' AND s5='TH', exam_marking.sid, NULL)) AS takhadir,  SUM(s1+s2+s3+s4+s5) AS totalMark,  SUM(s1+s2+s3+s4+s5)/500 AS peratus,  sZone,  sName  FROM exam_marking  LEFT OUTER JOIN school ON exam_marking.sCode = school.sCode AND exam_marking.eType = school.sType  WHERE exam_marking.eType ='PSRA'  GROUP BY sid  ) AS Sub1  GROUP BY sCode, eYear  ) AS Sub2";
$proto45["m_alias"] = "Sub2";
$proto45["m_srcTableName"] = "analisa_kelulusan_psra_sek";
$proto181=array();
$proto181["m_sql"] = "";
$proto181["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto181["m_column"]=$obj;
$proto181["m_contained"] = array();
$proto181["m_strCase"] = "";
$proto181["m_havingmode"] = false;
$proto181["m_inBrackets"] = false;
$proto181["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto181);

$proto45["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto45);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
												$proto183=array();
						$obj = new SQLField(array(
	"m_strName" => "eYear",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_sek"
));

$proto183["m_column"]=$obj;
$proto183["m_bAsc"] = 0;
$proto183["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto183);

$proto0["m_orderby"][]=$obj;					
												$proto185=array();
						$obj = new SQLField(array(
	"m_strName" => "mumtaz",
	"m_strTable" => "Sub2",
	"m_srcTableName" => "analisa_kelulusan_psra_sek"
));

$proto185["m_column"]=$obj;
$proto185["m_bAsc"] = 0;
$proto185["m_nColumn"] = 0;
$obj = new SQLOrderByItem($proto185);

$proto0["m_orderby"][]=$obj;					
$proto0["m_srcTableName"]="analisa_kelulusan_psra_sek";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_analisa_kelulusan_psra_sek = createSqlQuery_analisa_kelulusan_psra_sek();



																				

$tdataanalisa_kelulusan_psra_sek[".sqlquery"] = $queryData_analisa_kelulusan_psra_sek;

include_once(getabspath("include/analisa_kelulusan_psra_sek_events.php"));
$tableEvents["analisa_kelulusan_psra_sek"] = new eventclass_analisa_kelulusan_psra_sek;
$tdataanalisa_kelulusan_psra_sek[".hasEvents"] = true;

$query = &$queryData_analisa_kelulusan_psra_sek;
$table = "analisa_kelulusan_psra_sek";
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