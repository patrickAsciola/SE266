<?php
/**
 * Created by PhpStorm.
 * User: 001351643
 * Date: 12/11/2017
 * Time: 12:33 PM
 */
require_once ('assets/header.php');
require_once ('assets/dbconn.php');
require_once ('assets/functions.php');
$db = dbconn();
echo getAccountsTable($db);
include_once ('assets/footer.php');
?>