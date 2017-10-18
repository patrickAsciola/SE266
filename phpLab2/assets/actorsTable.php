<?php
/**
 * Created by PhpStorm.
 * User: 001351643
 * Date: 10/18/2017
 * Time: 2:51 PM
 */
function getActorsAsTable($db)
{
    try {
        $sql = $db->prepare("SELECT * FROM actors");
        $sql->execute();
        $actors = $sql->fetchAll(PDO::FETCH_ASSOC);
        if ($sql->rowCount() > 0) {
            $table = "<table>" . PHP_EOL;
            foreach ($actors as $actor) {
                $table .= "<tr><td>" . $actor['firstname'];
                $table .= "</td><td>" . $actor['lastname'];
                $table .= "</td><td>" . $actor['dob'];
                $table .= "</td><td>" . $actor['height'];
                $table .= "</td></tr>";
            }

            $table .= "</table>";
        } else {
            $table = "No actors in the table at this time.";
        }
        return $table;
    } catch (PDOException $e) {
        die("There was a problem retrieving the actors");
    }
}