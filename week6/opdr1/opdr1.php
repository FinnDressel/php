<?php

$user = "root";
$pass = "";

try{
    $dbh = new PDO("mysql:host=localhost:3306;dbname=phpschool", $user, $pass);
    $sql = "SELECT * FROM cursist";
    $query = $dbh->query($sql);

//print_r($query);
    $query->execute();
$rowcount = $query-> rowCount();

    foreach ($query as $row){
       print_r($row);
   }
} catch (PDOException $e){
    print "Error!:" . $e ->getMessage() . "<br/>";
    die();
}

