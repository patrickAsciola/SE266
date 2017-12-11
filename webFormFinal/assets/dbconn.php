<?php
/**
 * Created by PhpStorm.
 * User: 001351643
 * Date: 12/11/2017
 * Time: 11:37 AM
 */
function dbConn()
{
    $dsn = "mysql:host=localhost;dbname=phpclassfall2017";
    $username = "PHPClassFall2017";
    $password = "SE266";
    try {
        $db = new PDO($dsn, $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;

    } catch (PDOException $e) {
        die("There was a problem connection to the database");
    }
}