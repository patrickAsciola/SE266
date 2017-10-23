<?php
require_once("assets/dbconn.php");
//require_once("assets/actors.php");
include_once("assets/header.php");

?>
<section> <h1>Add a Corp</h1></section>

<?php
$db = dbConn();
include_once ("assets/addForm.php");
include_once ("assets/footer.php");
?>
