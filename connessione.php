<?php
    $host="localhost";
    $dbname="dbname"; //placeholder for the real values
    $user="username";
    $pass="password";

    try{
        $conn=new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e){
        die("Errore: ").$e->getMessage();
    }

?>

