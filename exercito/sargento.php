<?php 

class Sargento extends Exercito implements ExercitoInterface{

    public function __construct($nome, $patente, $arma, $merito_militar) {
        parent::__construct($nome, $patente, $arma, $merito_militar);
    }

    public function grito_of_war() {
        echo "Não me misturo nem com viciado nem com vagabundo <br>";
    }
}