<?php
/**
 * Created by PhpStorm.
 * User: 001351643
 * Date: 10/16/2017
 * Time: 12:08 PM
 */
function dbConn()
{
    $dsn = "mysql:host=localhost;dbname=dogs";
    $username = "dogs";
    $password = "se266";
    try {
        $db = new PDO($dsn, $username, $password);

        return $db;
} catch (PDOException $e) {
        die("There was a problem connection to the database");
    }
}