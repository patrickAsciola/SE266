<?php
/**
 * Created by PhpStorm.
 * User: Pat
 * Date: 12/8/2017
 * Time: 9:53 PM
 */
require_once ("assets/dbconn.php");
include_once ("assets/links.php");
include_once ("assets/viewSites.php");
$db = dbconn();
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING) ?? filter_input(INPUT_POST, 'id', FILTER_SANITIZE_STRING) ?? NULL;
$action = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING) ?? filter_input(INPUT_GET, 'action', FILTER_SANITIZE_STRING) ?? NULL;
$site = filter_input(INPUT_POST, 'site', FILTER_VALIDATE_URL) ?? filter_input(INPUT_POST, 'site', FILTER_VALIDATE_URL) ?? NULL;
$sId = filter_input(INPUT_GET, 'site_id') ?? NULL;
$real = false;
switch ($action){
    case "Add":
        $real = checkSite($db, $site);
        if($site != NULL && $real == true){
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
        if($sId != null){
            echo viewSiteLinks($db, $sId);
        }
        break;
}