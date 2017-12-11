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

function getAName($db, $id)
{

    try {
        $sql = $db->prepare("SELECT * FROM account WHERE id = :id");
        $sql->bindParam(':id', $id);
        $sql->execute();

        $emails = $sql->fetchAll(PDO::FETCH_ASSOC);
        if ($sql->rowCount() > 0) {
            $table = "<table class='table'>" . PHP_EOL;
            foreach ($emails as $email) { // creates a table of all the info of a specific account
                $table .= "<tr><td>"  .  " <a href='index.php '>Home</a>" .  " <a href='view.php '>View</a>";
                $table .= "</td></tr>";
                $table .= "<tr><td>" . "Email: ". $email['email'];
                $table .= "</td></tr>";
                $table .="<tr><td>" . "Phone: ".  $email['phone'];
                $table .= "</td></tr>";
                $table .="<tr><td>" . "Informed By: ".  $email['heard'];
                $table .= "</td></tr>";
                $table .= "<tr> <td>" . "Preferred Contact: ".$email['contact'];
                $table .= "</td></tr>";
                $table .= "<tr> <td>" . "Comments: ". $email['comments'] ;
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
function getAccountsTable($db)
{

    try {
        $sql = $db->prepare("SELECT * FROM account");
        $sql->execute();
        $emails = $sql->fetchAll(PDO::FETCH_ASSOC);
        if ($sql->rowCount() > 0) {
            $table = "<table class='table'>" . PHP_EOL;
            $table .= "<tr><td>" . "Email" . "</td><td>" . "Phone" . "</td><td>" . "Informed By" . "</td><td>" . "Preferred Contact" . "</td><td>" . "Comments";
            foreach ($emails as $email) { // loops through all the data in the db and creates a tables of all the accounts
                //$table .= "<tr><td>" . $email['email']  .
                $table .= "<tr><td>" . $email['email'];
                $table .= "</td>";
                $table .="<td>" .   $email['phone'];
                $table .= "</td>";
                $table .="<td>" .   $email['heard'];
                $table .= "</td>";
                $table .= " <td>" .$email['contact'];
                $table .= "</td>";
                $table .= " <td>" . $email['comments'] ;
                $table .= "</td>";
                $table .= " <td>" . " <a href='display_results.php?id=" . $email['id'] . "'>Read</a>";
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
