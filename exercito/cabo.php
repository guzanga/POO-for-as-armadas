<?php 

class Cabo extends exercito implements ExercitoInterface{

    public function __construct($nome, $patente, $arma, $merito_militar) {
        parent::__construct($nome, $patente, $arma, $merito_militar);
    }

    public function grito_of_war() {
        echo "ousar , crer e vencer! <br>";
    }


}