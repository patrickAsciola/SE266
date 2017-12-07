<?php

function dbconn(){
$dsn = "mysql:host=localhost;dbname=phpclassfall2017";
$username = "site";
$password = "se266";
try{
$db = new PDO($dsn, $username, $password);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
return $db;
}
catch (PDOException $e){
die("Unexpected Error 349: Database connection issue. Please contact your database administrator.");
}
}
function getColumnNames($db, $tbl){
$column_names = "";
$sql = "select column_name from information_schema.columns where lower(table_name)=lower('". $tbl . "')";
$stmt = $db->prepare($sql);
try {
if($stmt->execute()):
$raw_column_data = $stmt->fetchAll(PDO::FETCH_ASSOC);
foreach($raw_column_data as $outer_key => $array):
foreach($array as $inner_key => $value):
if (!(int)$inner_key):
$column_names[] = $value;
endif;
endforeach;
endforeach;
endif;
} catch (Exception $e){
die("There was a problem retrieving the column names");
}
return $column_names;
?>