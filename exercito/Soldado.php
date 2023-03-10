<?php

class Soldado extends Exercito implements ExercitoInterface{
    public function __construct($nome, $patente, $arma, $merito_militar) {
        parent::__construct($nome, $patente, $arma, $merito_militar);
    }

    public function grito_of_war(){
        echo("Eu não caí para baixo, parceiro, eu caí para cima.");
    }
}