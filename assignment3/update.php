<?php
require_once("assets/dbconn.php");
//require_once("assets/actors.php");
include_once("assets/header.php");
require_once ("assets/viewNames.php");
?>
<section> <h1>Corp</h1></section>

<?php
$db = dbConn();
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING) ?? "work";
echo  getaName($db, $id);
include_once ("assets/addForm.php");
include_once ("assets/footer.php");
?>
