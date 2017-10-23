<?php
require_once("assets/dbconn.php");
//require_once("assets/actors.php");
include_once("assets/header.php");
require_once ("assets/viewNames.php");
?>
<section> <h1>Corps</h1></section>
<a href="add.php">Add</a>

<?php
$db = dbConn();
echo getNamesTable($db);
include_once ("assets/footer.php");
?>



