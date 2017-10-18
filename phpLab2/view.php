<?php
/**
 * Created by PhpStorm.
 * User: 001351643
 * Date: 10/18/2017
 * Time: 1:50 PM
 */
include_once("assets/header.php");
require_once ("assets/actorsTable.php");
require_once ("assets/dbconn.php");
$db = dbConn();
echo getActorsAsTable($db);

include_once("assets/footer.php");