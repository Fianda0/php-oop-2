<?php
include __DIR__ . "/models/Categoria.php";
include __DIR__ . "/models/Prodotto.php";


$prodotti = [
    new Prodotto(
        "Collare",
        5.30,
        "supporto",
        new Categoria("cani")
    ),
    new Prodotto(
        "Scatola Croccantini",
        4.30,
        "cibo",
        new Categoria("gatti")
    ),
    new Prodotto(
        "Palla",
        4.00,
        "gioco",
        new Categoria("cani")
    )
];
