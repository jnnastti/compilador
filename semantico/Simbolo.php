<?php

class Simbolo
{
    private $nome;
    private $tipo;
    private $categoria;
    private $nivel;
    private $parameters = [];

    public function __construct($nome, $tipo, $nivel, $categoria) {
        $this->nome = $nome;
        $this->tipo = $tipo;
        $this->nivel = $nivel;
        $this->categoria = $categoria;
    }

    public function addParam($param) {
        $this->parameters[] = $param;
    }
}