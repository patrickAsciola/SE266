<?php
/**
 * Created by PhpStorm.
 * User: Pat
 * Date: 12/7/2017
 * Time: 5:41 PM
 */
require_once ('assets/dbconn.php');
include_once ('assets/header.php');
include_once ('assets/control.php');
include_once ('assets/links.php');
echo getSiteNames($db);
include_once ('assets/footer.php');