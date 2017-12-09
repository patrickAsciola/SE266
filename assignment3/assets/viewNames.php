<?php
// forms all of the names in the corp into a table
function getNamesTable($db)
{

try {
$sql = $db->prepare("SELECT * FROM corps");
$sql->execute();
$corps = $sql->fetchAll(PDO::FETCH_ASSOC);
if ($sql->rowCount() > 0) {
$table = "<table>" . PHP_EOL;
    foreach ($corps as $corp) { // loops through all the data in the db and creates a tables using only the name of the corps
    $table .= "<tr><td>" . $corp['corp']  .  " <a href='read.php?action=read&id=" . $corp['id'] . "'>Read</a>" . " <a href='update.php?action=update&id=" . $corp['id'] . "' >Update</a>" . " <a href='index.php?action=delete&id=" . $corp['id'] . "'>Delete</a>";

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
            foreach ($corps as $corp) { // creates a table of all the info of a specific company
                $table .= "<tr><td>"  .  " <a href='read.php?action=read&id=" . $corp['id'] . "'>Read</a>" . " <a href='update.php?action=update&id=" . $corp['id'] . "' >Update</a>" . " <a href='index.php?action=delete&id=" . $corp['id'] . "'>Delete</a>";;
                $table .= "</td></tr>";
                $table .= "<tr><td>" . "Corporation: ". $corp['corp'];
                $table .= "</td></tr>";
                $table .="<tr><td>" . "Date Incorporated: ".  $corp['incorp_dt'];
                $table .= "</td></tr>";
                $table .="<tr><td>" . "Email: ".  $corp['email'];
                $table .= "</td></tr>";
                $table .= "<tr> <td>" . "Zip Code: ".$corp['zipcode'];
                $table .= "</td></tr>";
                $table .= "<tr> <td>" . "Owner: ". $corp['owner'] ;
                $table .= "</td></tr>";
                $table .= "<tr> <td>" . "Phone number: ". $corp['phone'];
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
function populateField($db, $id)
{
    try {
        $sql = $db->prepare("SELECT * FROM corps WHERE id = :id");
        $sql->bindParam(':id', $id);
        $sql->execute();
        $corps = $sql->fetchAll(PDO::FETCH_ASSOC);

            $form = "<form method= 'post'>" . PHP_EOL;
            foreach ($corps as $corp) { // puts all of the info of  company into a form
                $form .= "Corporation" . " " . "<input type='text' name='corp' value='" . $corp['corp'] . "' /> <br />";
                $form .= "Email" . " " . "<input type='text' name='email' value='" . $corp['email'] . "' /> <br />";
                $form .= "Zip Code" . " " . "<input type='text' name='zip' value='" . $corp['zipcode'] . "' /> <br />";
                $form .= "Owner" . " " . "<input type='text' name='owner' value='" . $corp['owner'] . "' /> <br />";
                $form .= "Phone Number" . " " . "<input type='text' name='phone' value='" . $corp['phone'] . "' /> <br />";



            }



        return $form;

    } catch (PDOException $e) {
        die("There was a problem retrieving the companies");
    }
}
function searchRecord($db, $col, $term)
{
    try {
        $sql = "SELECT * FROM corps WHERE $col LIKE '%" . $term . "'";
        $sql = $db->prepare($sql);
        $sql->execute();
        $corps = $sql->fetchAll(PDO::FETCH_ASSOC);
        if ($sql->rowCount() > 0) {
            $table = "<table>" . PHP_EOL;
            foreach ($corps as $corp) {
                $table .= "<tr><td>" . $corp['corp'] . "</td>";
                $table .= "<td><a href='?action=Read&id=" . $corp['id'] . "'>Read</a>";
                $table .= "<td><a href='?action=Update&id=" . $corp['id'] . "'>Update</a>";
                $table .= "<td><a href='?action=Delete&id=" . $corp['id'] . "'>Delete</a>";
                $table .= "</tr>";
            }
            $table .= "</table>" . PHP_EOL;
            return $table;
        } else {
            $table = "There was no data found in the table" . PHP_EOL;
        }
    } catch (PDOException $e) {
        die("There was an error searching");
    }
}
