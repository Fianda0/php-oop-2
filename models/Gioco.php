<?php

class Gioco extends Prodotto
{
    public function __construct(public $nome, public $prezzo, public Categoria $categoria, public $materiale)
    {
    }

    public function descrizione()
    {
        return "<li>" . $this->nome . " è per animali di tipo " . $this->categoria->name . " ha un prezzo di " . $this->prezzo . " ed ha un materiale di " . $this->materiale . "</li>";
    }
}
