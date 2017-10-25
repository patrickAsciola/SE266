<?php
/*Patrick Asciola SE66.15
 *
 */
require_once("assets/dbconn.php");
//require_once("assets/actors.php");
include_once("assets/header.php");
require_once ("assets/viewNames.php");
echo  " <a href='add.php'>Add a Corp</a>";

$db = dbConn();
echo getNamesTable($db);
include_once ("assets/footer.php");
?>



