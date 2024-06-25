<?php

include __DIR__ . "/data.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>

<body>
    <ul>

        <?php
        foreach ($prodotti as $prodotto) {
            echo "<li>" . $prodotto->nome . " è per animali di tipo " . $prodotto->categoria->name . " ha un prezzo di " . $prodotto->prezzo . "</li>";
        }
        ?>
    </ul>

</body>

</html>