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
        die("There was a problem deleting the dog.");
    }
}
/*function updateCorp($db, $corp, $email, $zipcode, $owner, $phone)
{
    try {
        $sql = $db->prepare("UPDATE `dogs` SET name= :name, gender= :gender, fixed= :fixed WHERE id= :id");
        $sql->bindParam(':name', $name, PDO::PARAM_STR);
        $sql->bindParam(':gender', $gender, PDO::PARAM_STR);
        $sql->bindParam(':fixed', $fixed, PDO::PARAM_BOOL); // treat whatever we get as a boolean, not a string
        $sql->bindParam(':id', $id);
        $sql->execute();
        return $sql->rowCount();
    } catch (PDOException $e) {
        die("There was problem updating the dog.");
    }
}

*/