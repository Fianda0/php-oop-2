<?php

class Cibo extends Prodotto
{
    public function __construct(public $nome, public $prezzo, public Categoria $categoria, public $peso)
    {
    }

    public function descrizione()
    {
        return "<li>" . $this->nome . " è per animali di tipo " . $this->categoria->name . " ha un prezzo di " . $this->prezzo . " ed ha un peso di " . $this->peso . "</li>";
    }
}
