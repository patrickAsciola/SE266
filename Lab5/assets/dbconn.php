<?php
/**
 * Created by PhpStorm.
 * User: Pat
 * Date: 12/8/2017
 * Time: 9:42 PM
 */function dbConn()
{
    $dsn = "mysql:host=localhost;dbname=phpclassfall2017";
    $username = "sites";
    $password = "se266";
    try {
        $db = new PDO($dsn, $username, $password);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;

    } catch (PDOException $e) {
        die("There was a problem connection to the database");
    }
}
