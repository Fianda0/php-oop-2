<?php

class Cuccia extends Prodotto
{
    public function __construct(public $nome, public $prezzo, public Categoria $categoria, public $dimensioni)
    {
    }

    public function descrizione()
    {
        return "<li>" . $this->nome . " è per animali di tipo " . $this->categoria->name . " ha un prezzo di " . $this->prezzo . " ed ha una dimensione di " . $this->dimensioni . "</li>";
    }
}
