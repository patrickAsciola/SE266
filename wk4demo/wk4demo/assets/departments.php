<?php
/**
 * Created by PhpStorm.
 * User: 001351643
 * Date: 10/30/2017
 * Time: 1:31 PM
 */
function getDepts($db)
{
    $sql = "SELECT * FROM departments";
    $stmt = $db->Prepare($sql);
    $stmt->execute();
    $depts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $depts;
}