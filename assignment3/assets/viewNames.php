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
    $table .= "<tr><td>" . $corp['corp'] . $corp['id'] .  "<a href='read.php?id='. $corp[id]  >Read</a>" . " <a href='update.php' id='$corp[id]' >Update</a>" . " <a href='index.php' id='$corp[id]'>Delete</a>";
    $id = $corp['id'];
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
function getAName($db, $id)
{

    try {
        $sql = $db->prepare("SELECT * FROM corps WHERE id = :id");
        $sql->bindParam(':id', $id);
        $sql->execute();
        $corps = $sql->fetchAll(PDO::FETCH_ASSOC);
        if ($sql->rowCount() > 0) {
            $table = "<table>" . PHP_EOL;
            foreach ($corps as $corp) {
                $table .= "<tr><td>" . $corp['corp'];
                $table .="</td><td>" .  $corp['incorp_dt'];
                $table .="</td><td>" . $corp['email'];
                $table .= "</td> <td>" .$corp['zipcode'];
                $table .= "</td> <td>" . $corp['owner'] ;
                $table .= "</td> <td>" . $corp['phone'];
                $table .= "</td><td>" . " <a href='read.php'>Read</a>" . ' <a href="index.php">Update</a>' . ' <a href="index.php">Delete</a>';
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