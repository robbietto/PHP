<?php
    $host="localhost";
    $dbname="robbietto_concessionaria";
    $user="robbietto";
    $pass="robbietto";

    try{
        $conn=new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo"Connessione avvenuta con successo!";
    }catch(PDOException $e){
        die("Errore: ").$e->getMessage();
    }
?>