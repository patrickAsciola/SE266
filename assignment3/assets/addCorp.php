<?php
/**
 * Created by PhpStorm.
 * User: 001351643
 * Date: 10/23/2017
 * Time: 2:58 PM
 */
function addCorp($db, $corp, $email, $zipcode, $owner, $phone)
{
    //echo "$corp, $email, $zipcode, $owner, $phone";
    try {
        $sql = $db->prepare("INSERT INTO corps VALUES (null, :corp, NOW(), :email, :zipcode, :owner, :phone)");
        $sql->bindParam(':corp', $corp);
        $sql->bindParam(':email', $email);
        $sql->bindParam(':zipcode', $zipcode);
        $sql->bindParam(':owner', $owner);
        $sql->bindParam(':phone', $phone);

        $sql->execute();
        echo "successfully added corporation ";
        return $sql->rowCount();
    } catch (PDOException $e) {
        die("There was a problem inserting the company into the database");
    }
}


function addDog($db, $name, $gender, $fixed) {
    try {
        $sql = $db->prepare("INSERT INTO dogs VALUES (null, :name, :gender, :fixed)");
        $sql->bindParam(':name', $name);
        $sql->bindParam(':gender', $gender);
        $sql->bindParam(':fixed', $fixed);
        $sql->execute();
        return $sql->rowCount();
    } catch (PDOException $e) {
        die("The was problem adding the dog.");
    }
}
