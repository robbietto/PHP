<?php
require_once("connessione.php");
    if($_SERVER['REQUEST_METHOD']==="POST"){
        if(isset($_POST['categoria']) && $_POST['categoria']!=""){
            $categoria=$_POST['categoria'];
        }

        if(isset($_POST['modello']) && $_POST['modello']!=""){
            $modello=trim($_POST['modello']);
        }

        if(isset($_POST['prezzo']) && $_POST['prezzo']!=""){
            $prezzo=$_POST['prezzo'];
        }

        if(isset($_POST['valore_extra']) && $_POST['valore_extra']!=""){
            $valore_extra=$_POST['valore_extra'];
        }

        try{
            $sql="INSERT INTO veicoli(categoria,modello,prezzo,valore_extra)
            VALUES(:categoria,:modello,:prezzo,:valore_extra)";

            $stmt=$conn->prepare($sql);
            $stmt->bindParam(":categoria",$categoria);
            $stmt->bindParam(":modello",$modello);
            $stmt->bindParam(":prezzo",$prezzo);
            $stmt->bindParam(":valore_extra",$valore_extra);

            $stmt->execute();
            echo("<br>Query riuscita! Righe inserite: ".$stmt->rowCount());
        }catch(PDOException $e){
            die("<br>Errore nell' esecuzione della query: ").$e->getMessage();
        }
    }else{
        die("Errore! Il form deve essere inviato con metodo POST!");
    }
?>