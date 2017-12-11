<?php
/**
 * Created by PhpStorm.
 * User: 001351643
 * Date: 12/11/2017
 * Time: 11:57 AM
 */
require_once ('assets/header.php');
require_once('assets/dbconn.php');
require_once('assets/functions.php');


$db = dbConn();

    $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING) ?? "work";
    echo getaName($db, $id);

include_once ('assets/footer.php');
?>