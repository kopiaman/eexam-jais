<?php
$strTableName="analisa_kelulusan_psra_sek";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="exam_marking";

$gstrOrderBy="ORDER BY eYear DESC, mumtaz DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("analisa_kelulusan_psra_sek");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["analisa_kelulusan_psra_sek"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>