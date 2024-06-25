<?php
include __DIR__ . "/models/Categoria.php";
include __DIR__ . "/models/Prodotto.php";
include __DIR__ . "/models/Cibo.php";
include __DIR__ . "/models/Cuccia.php";
include __DIR__ . "/models/Gioco.php";


$cani = new Categoria("Canidi");
$cani->description = "cani, lupi, licaone, carnivo...";

$gatti = new Categoria("Felini");
$gatti->description = "gatti, servalo, leone, leopardo...";

$ossoRumoroso = new Gioco("Osso", 8, $cani, "plastica");
$croccantini = new Cibo("Croccantini", 10, $cani, "8kg");
$cucciaDuePiani = new Cuccia("Cuccia a 2 piani", 30, $gatti, "30x30x60");

$prodotti = [
    $ossoRumoroso,
    $croccantini,
    $cucciaDuePiani
];
