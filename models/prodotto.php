<?php

class Prodotto
{
    public function __construct(public $nome, public $prezzo, public Categoria $categoria)
    {
    }
}
