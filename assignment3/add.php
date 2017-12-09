<?php
// The page for adding corps, contains a form and calls to the function to add the fields to the database
require_once("assets/dbconn.php");
include_once("assets/header.php");
include_once("assets/addForm.php");
require_once("assets/addCorp.php");
?>
<a href='index.php?action=read'>View All</a>
<?php
$db = dbConn();
$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING) ?? "work";
$corp = filter_input(INPUT_POST, 'corp', FILTER_SANITIZE_STRING) ?? "111";
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING) ?? "111";
$zipcode = filter_input(INPUT_POST, 'zipcode', FILTER_SANITIZE_STRING) ?? "11";
$owner = filter_input(INPUT_POST, 'owner', FILTER_SANITIZE_STRING) ?? "111";
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING) ?? "111";


switch($action){
    case "add";

        addCorp($db, $corp, $email, $zipcode, $owner, $phone);
        break;
}
include_once("assets/footer.php");
?>






