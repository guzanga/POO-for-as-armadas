<?php

class Subtenente extends Exercito implements ExercitoInterface{
    
    public function __construct($nome, $patente, $arma, $merito_militar) {
        parent::__construct($nome, $patente, $arma, $merito_militar);
    }

    public function grito_of_war() {
        echo "missão dada é missão cumprida <br>";
    }
}
