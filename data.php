<?php
include __DIR__ . "/models/Tipo.php";
include __DIR__ . "/models/Categoria.php";
include __DIR__ . "/models/Prodotto.php";


$prodotti = [
    new Prodotto(
        "Bracciale",
        "5,30",
        new Categoria("cani")
    ),
    new Prodotto(
        "Scatola",
        "4,30",
        new Categoria("gatti")
    ),
    new Prodotto(
        "Palla",
        "4,00",
        new Categoria("cani")
    )
];
