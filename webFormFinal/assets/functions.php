<?php
/**
 * Created by PhpStorm.
 * User: 001351643
 * Date: 12/11/2017
 * Time: 11:44 AM
 */function addAccount($db, $email, $phone, $heard, $contact, $comments)
{
    //echo "$comments, $email, $contact, $heard, $phone";
    try {
        $sql = $db->prepare("INSERT INTO account VALUES (null, :email, :phone, :heard, :contact, :comments)");
        $sql->bindParam(':email', $email);
        $sql->bindParam(':phone', $phone);
        $sql->bindParam(':heard', $heard);
        $sql->bindParam(':contact', $contact);
        $sql->bindParam(':comments', $comments);
        $sql->execute();
        echo "successfully added account ";
        return $sql->rowCount();
    } catch (PDOException $e) {
        die("There was a problem inserting the account into the database");
    }
}


