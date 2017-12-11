<?php
/**
 * Created by PhpStorm.
 * User: 001351643
 * Date: 12/11/2017
 * Time: 11:32 AM
 *
 */
include_once ('assets/header.php');
include_once ('assets/body.php');
require_once ('assets/dbconn.php');
require_once ('assets/functions.php');
$db = dbConn();
$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING) ?? "work";
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING) ?? "111";
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING) ?? "111";
$heard = filter_input(INPUT_POST, 'heard', FILTER_SANITIZE_STRING) ?? "111";
$contact = filter_input(INPUT_POST, 'contact', FILTER_SANITIZE_STRING) ?? "11";
$comments = filter_input(INPUT_POST, 'comments', FILTER_SANITIZE_STRING) ?? "111";

switch($action) {
    case "add";
        addAccount($db, $email, $phone, $heard, $contact, $comments);
        break;
}

include_once ('assets/footer.php');