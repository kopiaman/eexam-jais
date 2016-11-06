<?php
$strTableName="purata_psra_daerah";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="exam_marking";

$gstrOrderBy="ORDER BY eYear DESC, avg DESC";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("purata_psra_daerah");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["purata_psra_daerah"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>