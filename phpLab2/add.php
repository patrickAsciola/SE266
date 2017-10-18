<?php
/**
 * Created by PhpStorm.
 * User: 001351643
 * Date: 10/16/2017
 * Time: 1:14 PM
 */
include_once("assets/header.php");
require_once("assets/dbconn.php");
include_once("assets/addForm.php");
require_once("assets/actors.php");

$db = dbConn();
$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING) ?? "";
$firstname = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING) ?? "";
$lastname = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING) ?? "";
$dob = filter_input(INPUT_POST, 'dob', FILTER_SANITIZE_STRING) ?? "";
$height = filter_input(INPUT_POST, 'height', FILTER_SANITIZE_STRING) ?? "";



switch($action){
    case "Add":
        addActor($db, $firstname, $lastname, $dob, $height);
        break;
}
include_once("assets/footer.php");
?>

