<?php
/**
 * Created by PhpStorm.
 * User: Pat
 * Date: 12/8/2017
 * Time: 9:53 PM
 */
require_once ('assets/dbconn.php');
include_once ('assets/header.php');
include_once ('assets/director.php');
include_once ('assets/links.php');
echo SiteNames($db);
include_once ('assets/footer.php');