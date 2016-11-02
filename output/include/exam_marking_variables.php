<?php
$strTableName="exam_marking";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="exam_marking";

$gstrOrderBy="ORDER BY exam_marking.eNo";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("exam_marking");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["exam_marking"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>