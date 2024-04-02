<?php
// query's kunnen nog vernderen dit is even om het te testen

                    $sql = "SELECT * FROM overview_test";
                    $result = $conn->query($sql);

                    if(!$result){
                        die("invalid query: " . $conn->error); 
                    }

                    while($row = $result->fetch_assoc()){
                        echo"<tr>
                            <td>" . $row["Student_NR"] . "</td>
                            <td>" . $row["Student_Naam"] . "</td>
                            <td>" . $row["Aantal_Items"] . "</td>
                            <td>" . $row["Datum"] . "</td>
                        </tr>";
                    }
?>