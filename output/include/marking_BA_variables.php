<?php
$strTableName="marking_BA";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="exam_marking";

$gstrOrderBy="ORDER BY exam_marking.eNo";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("marking_BA");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["marking_BA"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>