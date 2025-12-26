<?php
require_once("connessione.php");

try{
     $sql="SELECT categoria,
    SUM(valore_extra) AS sommaValoreExtra
    FROM veicoli
    GROUP BY categoria;";

    $stmt=$conn->prepare($sql);
    $stmt->execute();

    $result=$stmt->fetchAll(PDO::FETCH_ASSOC);
    echo "<br>Query riuscita!";

    if(count($result)>0){
        echo"<table border='1px'>
        <tr>
                <th>
                Categoria
                </th>

                <th>
                    Somma valore extra
                </th>
        </tr>";
        foreach($result as $res){
        echo "<tr>
                <td>"
                .$res['categoria'].
            " </td>".

                "<td>"
                .$res['sommaValoreExtra'].
            " </td>".
            
        "</tr>";
        }
        echo "</table>";
    }else{
        echo "La query ha restituito come risultato il valore 0!";
    }
}catch(PDOException $e){
    die("<br>Errore nell' esecuzione della query: ".$e->getMessage());
}
?>