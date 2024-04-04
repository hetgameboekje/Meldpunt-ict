<?php
// query's kunnen nog vernderen dit is even om het te testen

    require_once __DIR__ . "/../model/db.php";

    $sql = "SELECT * FROM overview_test";
    $result = $mysqli->query($sql);

    if(!$result){
        die("invalid query: " . $mysqli->error); 
    }

    while($row = $result->fetch_assoc()){
        echo"<tr>
            <td class='tableBody'>" . $row["Student_NR"] . "</td>
            <td class='tableBody'>" . $row["Student_Naam"] . "</td>
            <td class='tableBody'>" . $row["Aantal_Items"] . "</td>
            <td class='tableBody'>" . $row["Datum"] . "</td>
        </tr>";
        }
?>