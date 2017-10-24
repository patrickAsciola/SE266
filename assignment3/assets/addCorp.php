<?php
/**
 * Created by PhpStorm.
 * User: 001351643
 * Date: 10/23/2017
 * Time: 2:58 PM
 */
function addCorp($db, $corp, $incorp_dt, $email, $zipcode, $owner, $phone)
{
    try {
        $sql = $db->prepare("INSERT INTO actors VALUES (null, :corp, :incop_dt, :email, :zipcode, :owner. :phone)");
        $sql->bindParam(':corp', $corp);
        $sql->bindParam(':incorp_dt', $incorp_dt);
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


