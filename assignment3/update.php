<?php
require_once("assets/dbconn.php");
//require_once("assets/actors.php");
include_once("assets/header.php");
require_once ("assets/viewNames.php");
require_once("assets/addCorp.php");
$db = dbConn();
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING) ?? "work";
$corp = filter_input(INPUT_POST, 'corp', FILTER_SANITIZE_STRING) ?? "111";
echo getaName($db, $id);
?>
<form method="post" action="#">

    Corporation Name: <input type="text" name="corp" value="<?php echo $corp; ?>"/>  <br />
    Email: <input type="text" name="email" /> <br />
    Zip code: <input type="text" name="zipcode" /> <br />
    Owner: <input type="text" name="owner" /> <br />
    Phone: <input type="text" name="phone" /> <br />

    <br />
    <input type="submit" name="action" value="add" />
</form>

<?php
include_once ("assets/footer.php");
?>
