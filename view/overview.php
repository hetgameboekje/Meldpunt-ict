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

        <table id="overviewTable">
            <thead>                
                <th class="tableHead">Studenten NR</th>
                <th class="tableHead">Voor-/Achternaam</th>
                <th class="tableHead">Producten</th>
                <th class="tableHead">Datum</th>
            </thead>
            <tbody>
                <?php

                    require_once __DIR__ . "/../model/overview.php";
                ?>
            </tbody>
        </table>

    </div>



    
</body>
</html>