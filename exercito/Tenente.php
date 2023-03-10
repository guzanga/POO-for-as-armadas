<?php

class Tenente extends Exercito implements ExercitoInterface {
    public function __construct($nome, $patente, $arma, $merito_militar) {
        parent::__construct($nome, $patente, $arma, $merito_militar);
    }

    public function grito_of_war() {
        echo "Se eu pudesse juntar...minha vida nao seria tao dificil, mas quem disse que a vida eh facil?!";
    }
}