<?php
/**
 * Created by PhpStorm.
 * User: 001351643
 * Date: 10/11/2017
 * Time: 1:22 PM
  */
$dsn = "mysql:host=localhost;dbname=dogs";
$username = "dogs";
$password = "se266";
try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e){
    die("There was a problem connection to the database");
}
//$submit = isset($_POST['submit']) ? $_POST['submit']: ""; //ternary
$submit = $_POST['submit'] ?? ""; // null colesence operator
if($submit == "Do it"){
    $name == $_POST['name'] ?? "";
    $gender = $_POST['gender'] ?? "F";
    $fixed = $_POST['fixed'] ?? false;
   try {
       $sql = $db->prepare("INSERT INTO animals Values (null, :name, :gender, :fixed)");
       $sql->bindParam(':name', $name);
       $sql->bindParam(':gender', $gender);
       $sql->bindParam(':fixed', $fixed);
       $sql->execute();
       echo $sql->rowCount() . "rows inserted";
   } catch(PDOException $e){
       $e->getMessage();
   }
}
?>
<form mehtod="post" action="#">
Name: <input type="text" name="name" /> <br />
Gender: M<input type="radio" name="gender" value="M" />F<input type="radio" name="gender" value="F" /><br />
Fixed: <input type="checkbox" name="fixed"  value="true"/>
<br />
<input type="submit" name="submit" value="Do it" />
</form>
<?php

$sql = $db->prepare("SELECT * FROM animals");
$sql->execute();
$results = $sql->fetchAll(PDO::FETCH_ASSOC);
if(count($results)){
    foreach($results as $dog)
    {
        print_r($dog);
    }
}