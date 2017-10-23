<?php
/**
 * Created by PhpStorm.
 * User: 001351643
 * Date: 10/23/2017
 * Time: 2:58 PM
 */
function addActor($db, $firstname, $lastname, $dob, $height)
{
    try {
        $sql = $db->prepare("INSERT INTO actors VALUES (null, :firstname, :lastname, :dob, :height)");
        $sql->bindParam(':firstname', $firstname);
        $sql->bindParam(':lastname', $lastname);
        $sql->bindParam(':dob', $dob);
        $sql->bindParam(':height', $height);
        $sql->execute();
        return $sql->rowCount();
    } catch (PDOException $e) {
        die("There was a problem inserting the dog into the database");
    }
}