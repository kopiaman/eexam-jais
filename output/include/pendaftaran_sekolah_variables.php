<?php
$strTableName="pendaftaran_sekolah";
$_SESSION["OwnerID"] = $_SESSION["_".$strTableName."_OwnerID"];

$strOriginalTableName="school";

$gstrOrderBy="ORDER BY sCenter, sCode";
if(strlen($gstrOrderBy) && strtolower(substr($gstrOrderBy,0,8))!="order by")
	$gstrOrderBy="order by ".$gstrOrderBy;

// alias for 'SQLQuery' object
$gSettings = new ProjectSettings("pendaftaran_sekolah");
$gQuery = $gSettings->getSQLQuery();
$eventObj = &$tableEvents["pendaftaran_sekolah"];

$reportCaseSensitiveGroupFields = false;

$gstrSQL = $gQuery->gSQLWhere("");

?>