<?php
/**
 * Created by PhpStorm.
 * User: 001351643
 * Date: 10/23/2017
 * Time: 12:18 PM
 */
require_once("assets/dbconn.php");
//require_once("assets/actors.php");
include_once("assets/header.php");
require_once ("assets/viewNames.php");
?>
<a href='index.php?action=read'>View All</a>
<?php
$db = dbConn();
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING) ?? "work";
echo getaName($db, $id); // displays the info for one corp
include_once ("assets/footer.php");
?>


