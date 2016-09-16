<?php
$dalTableuser = array();
$dalTableuser["uid"] = array("type"=>3,"varname"=>"uid");
$dalTableuser["username"] = array("type"=>200,"varname"=>"username");
$dalTableuser["password"] = array("type"=>201,"varname"=>"password");
$dalTableuser["fullname"] = array("type"=>200,"varname"=>"fullname");
$dalTableuser["zon"] = array("type"=>200,"varname"=>"zon");
$dalTableuser["umail"] = array("type"=>200,"varname"=>"umail");
	$dalTableuser["uid"]["key"]=true;

$dal_info["eexam_at_localhost__user"] = &$dalTableuser;
?>