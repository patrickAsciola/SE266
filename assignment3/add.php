<?php
require_once("assets/dbconn.php");
//require_once("assets/actors.php");
include_once("assets/header.php");

?>
<section> <h1>Add a Corp</h1></section>

<?php
include_once("assets/addForm.php");
require_once("assets/addCorp.php");

$db = dbConn();
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING) ?? "work";
$corp = filter_input(INPUT_POST, 'corp', FILTER_SANITIZE_STRING) ?? "111";
$incorp_dt = filter_input(INPUT_POST, 'incorp_dt', FILTER_SANITIZE_STRING) ?? "111";
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING) ?? "111";
$zipcode = filter_input(INPUT_POST, 'zipcode', FILTER_SANITIZE_STRING) ?? "11";
$owner = filter_input(INPUT_POST, 'owner', FILTER_SANITIZE_STRING) ?? "111";
$phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING) ?? "111";


echo $phone . " " . $corp . " " . $zipcode;
switch($id){
    case "add";
        addCorp($db, $corp, $incorp_dt, $email, $zipcode, $owner, $phone);
        break;
}
include_once("assets/footer.php");
?>






