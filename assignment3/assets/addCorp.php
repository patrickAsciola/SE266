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


function delCorp($db, $id)
{
    try {
        $sql = $db->prepare("DELETE FROM corps WHERE id = :id");
        $sql->bindParam(':id', $id, PDO::PARAM_INT);
        $sql->execute();

        return $id;
    } catch (PDOException $e) {
        die("There was a problem deleting the corp.");
    }
}
function updateCorp($db, $id, $corp, $email, $zipcode, $owner, $phone)
{

    try {
        $sql = $db->prepare("UPDATE `corps` SET corp= :corp, email= :email, zipcode= :zipcode owner= :owner, phone= :phone WHERE id= :id");
        $sql->bindParam(':id', $id, PDO::PARAM_STR);
        $sql->bindParam(':corp', $corp, PDO::PARAM_STR);
        $sql->bindParam(':email', $email, PDO::PARAM_STR);
        $sql->bindParam(':zipcode', $zipcode, PDO::PARAM_STR);
        $sql->bindParam(':owner', $owner, PDO::PARAM_STR);
        $sql->bindParam(':phone', $phone, PDO::PARAM_STR);


        $sql->execute();
        echo "Account updated";
        return $sql->rowCount();
    } catch (PDOException $e) {
        die("There was problem updating the dog.");
    }
}

