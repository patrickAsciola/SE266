<?php
function getNamesTable($db)
{
try {
$sql = $db->prepare("SELECT * FROM corps");
$sql->execute();
$id = 0;
$corps = $sql->fetchAll(PDO::FETCH_ASSOC);
if ($sql->rowCount() > 0) {
$table = "<table>" . PHP_EOL;
    foreach ($corps as $corp) {
    $table .= "<tr><td>" . $corp['corp'] . $corp['id'] .  " <a href='read.php' id='$corp[id]'>Read</a>" . " <a href='index.php' id='$corp[id]' >Update</a>" . " <a href='index.php' id='$corp[id]'>Delete</a>";
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
function getAName($db)
{
    try {
        $sql = $db->prepare("SELECT * FROM corps WHERE id=id");
        $sql->execute();
        $corps = $sql->fetchAll(PDO::FETCH_ASSOC);
        if ($sql->rowCount() > 0) {
            $table = "<table>" . PHP_EOL;
            foreach ($corps as $corp) {
                $table .= "<tr><td>"  .  " <a href='read.php'>Read</a>" . ' <a href="index.php">Update</a>' . ' <a href="index.php">Delete</a>';
                $table .= "</td></tr>";
                $table .= "<tr><td>" . $corp['corp'] . $corp[incopr_dt] . $corp[email] . $corp[zipcode] . $corp[owner] . $corp[phone];
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