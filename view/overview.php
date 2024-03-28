<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overview</title>

    <link rel="stylesheet" href="public\css\overviewStyle.css">

</head>

<?php require_once __DIR__ . "/../view/navbar.php"; ?>

<?php require_once __DIR__ . "/../view/footer.php"; ?>

<body>
    <div id="main">

        <table>
            <tr>                
                <th>Studenten NR</th>
                <th>Voor-/Achternaam</th>
                <th>Producten</th>
                <th>Datum</th>
            </tr>
            <tbody>
                <?php

                    $sql = "SELECT * FROM transactions";
                    $result = $conn->query($sql);

                    if(!$result){
                        die("invalid query: " . $conn->error);
                    }

                    while($row = $result->fetch_assoc()){
                        echo"<tr>
                            <td>" . $row[""] . "</td>
                            <td>" . $row[""] . "</td>
                            <td>" . $row[""] . "</td>
                            <td>" . $row[""] . "</td>
                        </tr>";
                    }
                ?>
            </tbody>
        </table>

    </div>



    
</body>
</html>