<?php
include __DIR__ . "/models/Categoria.php";
include __DIR__ . "/models/Prodotto.php";

$cani = new Categoria("Canidi");
$cani->description = "cani, lupi, licaone, carnivo...";

$gatti = new Categoria("Felini");
$gatti->description = "gatti, servalo, leone, leopardo...";
