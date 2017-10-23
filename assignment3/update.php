<?php
require_once("assets/dbconn.php");
//require_once("assets/actors.php");
include_once("assets/header.php");
require_once ("assets/viewNames.php");
?>
<section> <h1>Corp</h1></section>

<?php
$db = dbConn();
echo getAName($db);
include_once ("assets/addForm.php");
include_once ("assets/footer.php");
?>
