<?php

class Prodotto
{
    public function __construct(public $nome, public $prezzo, public $tipo_prodotto, public Categoria $categoria)
    {
    }

    public function descrizione()
    {
        return $this->nome . " ha un prezzo di: " . $this->prezzo . " euro il pprodotto è per " . $this->categoria->category . " ed è un prodotto per " . $this->tipo_prodotto;
    }
}
