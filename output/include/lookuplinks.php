<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

	$lookupTableLinks["setting"]["exam_marking.sZone"]["edit"] = array("table" => "exam_marking", "field" => "sZone", "page" => "edit");
	$lookupTableLinks["setting"]["semakan.sZone"]["edit"] = array("table" => "semakan", "field" => "sZone", "page" => "edit");
	$lookupTableLinks["setting"]["sijil_psra.sZone"]["edit"] = array("table" => "sijil_psra", "field" => "sZone", "page" => "edit");
	$lookupTableLinks["setting"]["school.sZone"]["edit"] = array("table" => "school", "field" => "sZone", "page" => "edit");
	$lookupTableLinks["setting"]["school.sZone"]["add"] = array("table" => "school", "field" => "sZone", "page" => "add");
	$lookupTableLinks["setting"]["school.sZone"]["search"] = array("table" => "school", "field" => "sZone", "page" => "search");
	$lookupTableLinks["setting"]["admin_users.zon"]["edit"] = array("table" => "admin_users", "field" => "zon", "page" => "edit");
	$lookupTableLinks["setting"]["analisa_kelulusan_psra_sek.sZone"]["edit"] = array("table" => "analisa_kelulusan_psra_sek", "field" => "sZone", "page" => "edit");
	$lookupTableLinks["setting"]["gps_psra_sek.sZone"]["edit"] = array("table" => "gps_psra_sek", "field" => "sZone", "page" => "edit");
	$lookupTableLinks["setting"]["analisa_subjek_psra_sek.sZone"]["edit"] = array("table" => "analisa_subjek_psra_sek", "field" => "sZone", "page" => "edit");
	$lookupTableLinks["setting"]["purata_psra_sek.sZone"]["edit"] = array("table" => "purata_psra_sek", "field" => "sZone", "page" => "edit");
	$lookupTableLinks["setting"]["analisa_kelulusan_psra_daerah.sZone"]["edit"] = array("table" => "analisa_kelulusan_psra_daerah", "field" => "sZone", "page" => "edit");
	$lookupTableLinks["setting"]["gps_psra_daerah.sZone"]["edit"] = array("table" => "gps_psra_daerah", "field" => "sZone", "page" => "edit");
	$lookupTableLinks["setting"]["analisa_subjek_psra_daerah.sZone"]["edit"] = array("table" => "analisa_subjek_psra_daerah", "field" => "sZone", "page" => "edit");
	$lookupTableLinks["setting"]["purata_psra_daerah.sZone"]["edit"] = array("table" => "purata_psra_daerah", "field" => "sZone", "page" => "edit");
	$lookupTableLinks["setting"]["archive_exam_marking.sZone"]["edit"] = array("table" => "archive_exam_marking", "field" => "sZone", "page" => "edit");
	$lookupTableLinks["setting"]["result_psra.sZone"]["edit"] = array("table" => "result_psra", "field" => "sZone", "page" => "edit");
	$lookupTableLinks["setting"]["semakan_duplicate.sZone"]["edit"] = array("table" => "semakan_duplicate", "field" => "sZone", "page" => "edit");
	$lookupTableLinks["setting"]["daftar_sek.sZone"]["edit"] = array("table" => "daftar_sek", "field" => "sZone", "page" => "edit");
	$lookupTableLinks["setting"]["daftar_daerah.sZone"]["edit"] = array("table" => "daftar_daerah", "field" => "sZone", "page" => "edit");
	$lookupTableLinks["setting"]["pendaftaran_murid.sZone"]["edit"] = array("table" => "pendaftaran_murid", "field" => "sZone", "page" => "edit");
	$lookupTableLinks["setting"]["pendaftaran_sekolah.sZone"]["edit"] = array("table" => "pendaftaran_sekolah", "field" => "sZone", "page" => "edit");
	$lookupTableLinks["setting"]["pendaftaran_sekolah.sZone"]["add"] = array("table" => "pendaftaran_sekolah", "field" => "sZone", "page" => "add");
	$lookupTableLinks["setting"]["pendaftaran_sekolah.sZone"]["search"] = array("table" => "pendaftaran_sekolah", "field" => "sZone", "page" => "search");
	$lookupTableLinks["setting"]["marking_AS.sZone"]["edit"] = array("table" => "marking_AS", "field" => "sZone", "page" => "edit");
	$lookupTableLinks["setting"]["marking_BA.sZone"]["edit"] = array("table" => "marking_BA", "field" => "sZone", "page" => "edit");
	$lookupTableLinks["setting"]["marking_JIK.sZone"]["edit"] = array("table" => "marking_JIK", "field" => "sZone", "page" => "edit");
	$lookupTableLinks["setting"]["marking_TF.sZone"]["edit"] = array("table" => "marking_TF", "field" => "sZone", "page" => "edit");
	$lookupTableLinks["setting"]["marking_TJ.sZone"]["edit"] = array("table" => "marking_TJ", "field" => "sZone", "page" => "edit");
	$lookupTableLinks["setting"]["marking_UTH.sZone"]["edit"] = array("table" => "marking_UTH", "field" => "sZone", "page" => "edit");
}

?>