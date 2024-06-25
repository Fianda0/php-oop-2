<?php

class Cuccia extends Prodotto
{
    public function __construct(public $nome, public $prezzo, public $dimensioni)
    {
    }
}
