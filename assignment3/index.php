<?php
/*Patrick Asciola SE66.15
 * The home page displaying all of the corps names
 */
require_once("assets/dbconn.php");
include_once("assets/header.php");
require_once ("assets/viewNames.php");
require_once("assets/addCorp.php");


$db = dbConn();

echo getNamesTable($db);
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING) ?? "work";
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING) ?? "work";

switch($action){
    case "delete";

        delCorp($db, $id );
        echo "Corporation #" . $id . " was succesfully deleted";
        break;
}
echo getNamesTable($db);
echo  " <a href='control.php?'>Create</a>";
include_once ("assets/footer.php");
?>



