<?php
require_once("assets/dbconn.php");
//require_once("assets/actors.php");
include_once("assets/header.php");
require_once ("assets/viewNames.php");
require_once("assets/addCorp.php");
?>
<a href='index.php'>View All</a>
<?php

$db = dbConn();
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING) ?? "work";
$button = filter_input(INPUT_POST, 'button', FILTER_SANITIZE_STRING) ?? "work";
$corp = filter_input(INPUT_POST, 'corp', FILTER_SANITIZE_STRING) ?? "111";
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING) ?? "111";
$zipcode = filter_input(INPUT_POST, 'zipcode', FILTER_SANITIZE_STRING) ?? "11";
$owner = filter_input(INPUT_POST, 'owner', FILTER_SANITIZE_STRING) ?? "111";
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING) ?? "111";

echo populateField($db, $id);
switch($button){

    case "update";
         updateCorp($db, $id, $corp, $email, $zipcode, $owner, $phone);
        break;
}

include_once ("assets/footer.php");
?>
