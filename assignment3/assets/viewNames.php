<?php
function getActorsAsTable($db)
{
try {
$sql = $db->prepare("SELECT * FROM corps");
$sql->execute();
$corps = $sql->fetchAll(PDO::FETCH_ASSOC);
if ($sql->rowCount() > 0) {
$table = "<table>" . PHP_EOL;
    foreach ($corps as $corp) {
    $table .= "<tr><td>" . $corp['corp'] .  " <a href='read.php'>Read</a>" . ' <a href="index.php">Update</a>' . ' <a href="index.php">Delete</a>';
            $table .= "</td></tr>";
    }

    $table .= "</table>";
} else {
$table = "No companies in the table at this time.";
}
return $table;
} catch (PDOException $e) {
die("There was a problem retrieving the companies");
}
}