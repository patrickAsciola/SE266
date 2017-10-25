<?php
require_once("assets/dbconn.php");
//require_once("assets/actors.php");
include_once("assets/header.php");
require_once ("assets/viewNames.php");
require_once("assets/addCorp.php");
$db = dbConn();
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING) ?? "work";
$corp = filter_input(INPUT_POST, 'corp', FILTER_SANITIZE_STRING) ?? "111";
echo getaName($db, $id);
$formCorp = $corp;
include_once ("assets/addForm.php");
include_once ("assets/footer.php");
?>
