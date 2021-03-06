<?php

function getMenuNodes_main($menuNodesObject)
{
	// create menu nodes arr
	$menuNodesObject->menuNodes["main"] = array();
		
	$menuNode = array();
	$menuNode["id"] = "1";
	$menuNode["name"] = "PENDAFTARAN";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	$menuNode["title"] = "PENDAFTARAN";
	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "2";
	$menuNode["name"] = "Pendaftaran Sekolah & Murid";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "pendaftaran_sekolah";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "1";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	$menuNode["title"] = "Pendaftaran Sekolah & Murid";
	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "3";
	$menuNode["name"] = "Murid Telah Berdaftar";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "pendaftaran_murid";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "1";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	$menuNode["title"] = "Murid Telah Berdaftar";
	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "4";
	$menuNode["name"] = "PEMARKAHAN";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	$menuNode["title"] = "PEMARKAHAN";
	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "5";
	$menuNode["name"] = "Eksport & Import Markah";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "exam_marking";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "4";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	$menuNode["title"] = "Eksport & Import Markah";
	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "6";
	$menuNode["name"] = "SEMAKAN";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	$menuNode["title"] = "SEMAKAN";
	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "7";
	$menuNode["name"] = "Kesilapan Markah";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "semakan";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "6";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	$menuNode["title"] = "Kesilapan Markah";
	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "8";
	$menuNode["name"] = "Nama Bertindih";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "semakan_duplicate";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "6";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	$menuNode["title"] = "Nama Bertindih";
	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "9";
	$menuNode["name"] = "PENGHASILAN";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	$menuNode["title"] = "PENGHASILAN";
	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "10";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "result_psra";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "9";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	$menuNode["title"] = "Keputusan";
	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "11";
	$menuNode["name"] = "Cetakan";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "sijil_psra1";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "9";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	$menuNode["title"] = "Cetakan";
	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "12";
	$menuNode["name"] = "ANALISA";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	$menuNode["title"] = "ANALISA";
	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "13";
	$menuNode["name"] = "SEKOLAH";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "12";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	$menuNode["title"] = "SEKOLAH";
	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "14";
	$menuNode["name"] = "Pendaftaran";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "daftar_sek";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "13";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	$menuNode["title"] = "Pendaftaran";
	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "15";
	$menuNode["name"] = "Pangkat";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "analisa_kelulusan_psra_sek";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "13";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	$menuNode["title"] = "Pangkat";
	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "16";
	$menuNode["name"] = "GPS";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "gps_psra_sek";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "13";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	$menuNode["title"] = "GPS";
	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "17";
	$menuNode["name"] = "Subjek";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "analisa_subjek_psra_sek";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "13";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	$menuNode["title"] = "Subjek";
	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "18";
	$menuNode["name"] = "Purata ";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "purata_psra_sek";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "13";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	$menuNode["title"] = "Purata ";
	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "19";
	$menuNode["name"] = "DAERAH";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "12";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	$menuNode["title"] = "DAERAH";
	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "20";
	$menuNode["name"] = "Pendaftaran";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "daftar_daerah";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "19";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	$menuNode["title"] = "Pendaftaran";
	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "21";
	$menuNode["name"] = "Pangkat";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "analisa_kelulusan_psra_daerah";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "19";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	$menuNode["title"] = "Pangkat";
	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "22";
	$menuNode["name"] = "GPS";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "gps_psra_daerah";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "19";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	$menuNode["title"] = "GPS";
	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "23";
	$menuNode["name"] = "Subjek";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "analisa_subjek_psra_daerah";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "19";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	$menuNode["title"] = "Subjek";
	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "24";
	$menuNode["name"] = "Purata";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "purata_psra_daerah";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "19";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	$menuNode["title"] = "Purata";
	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "25";
	$menuNode["name"] = "NEGERI";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "12";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	$menuNode["title"] = "NEGERI";
	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "26";
	$menuNode["name"] = "Pendaftaran";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "daftar_all";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "25";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	$menuNode["title"] = "Pendaftaran";
	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "27";
	$menuNode["name"] = "Pangkat";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "analisa_kelulusan_psra_all";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "25";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	$menuNode["title"] = "Pangkat";
	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "28";
	$menuNode["name"] = "GPS";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "gps_psra_all";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "25";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	$menuNode["title"] = "GPS";
	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "29";
	$menuNode["name"] = "Subjek";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "analisa_subjek_psra_all";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "25";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	$menuNode["title"] = "Subjek";
	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "30";
	$menuNode["name"] = "Purata";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "purata_psra_all";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "25";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	$menuNode["title"] = "Purata";
	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "31";
	$menuNode["name"] = "ADMIN";
	$menuNode["href"] = "";
	$menuNode["type"] = "Group";
	$menuNode["table"] = "";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "0";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "None";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	$menuNode["title"] = "ADMIN";
	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "32";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "school";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "31";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	$menuNode["title"] = "Senarai Sekolah";
	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "33";
	$menuNode["name"] = "";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "setting_category";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "31";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	$menuNode["title"] = "Set Label";
	$menuNodesObject->menuNodes["main"][] = $menuNode;
	$menuNode = array();
	$menuNode["id"] = "34";
	$menuNode["name"] = "Arkib Markah";
	$menuNode["href"] = "mypage.htm";
	$menuNode["type"] = "Leaf";
	$menuNode["table"] = "archive_exam_marking";
	$menuNode["style"] = "";
	$menuNode["params"] = "";
	$menuNode["parent"] = "31";
	$menuNode["nameType"] = "Text";
	$menuNode["linkType"] = "Internal";
	$menuNode["pageType"] = "List";//
	$menuNode["openType"] = "None";
	$menuNode["title"] = "Arkib Markah";
	$menuNodesObject->menuNodes["main"][] = $menuNode;
}
?>
