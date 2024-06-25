<?php

class Cibo extends Prodotto
{
    public function __construct(public $nome, public $prezzo, public Categoria $categoria, public $peso)
    {
    }
}
