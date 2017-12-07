<?php
/**
 * Created by PhpStorm.
 * User: Pat
 * Date: 12/7/2017
 * Time: 5:15 PM
 */require_once ("assets/dbconn.php");
include_once ("assets/links.php");
include_once ("assets/viewSites.php");
$db = dbconn();
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING) ?? filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING) ?? NULL;
$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING) ?? filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING) ?? NULL;
$site = filter_input(INPUT_POST, 'site', FILTER_VALIDATE_URL) ?? filter_input(INPUT_POST, 'site', FILTER_VALIDATE_URL) ?? NULL;
$siteId = filter_input(INPUT_GET, 'site_id') ?? NULL;
$valid = false;
switch ($action){
    case "Add":
        $valid = checkSite($db, $site);
        if($site != NULL && $valid == true){
            //is valid
            echo "Confirmed, ";
            addSite($db, $site);
        }else{
            //is not valid
            echo "Not Valid or Already Exists, make sure url is correct format";
        }
        break;
    case "Reset":
        break;
    case "Search":
        if($siteId != null){
            echo viewSiteLinks($db, $siteId);
        }
        break;
}