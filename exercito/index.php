<?php 

include("ExercitoInterface.php");
include("Exercito.php");
include("Subtenente.php");
include("Tenente.php");
include("Sargento.php");
include("Soldado.php");
include("Cabo.php");



$sargento = new Sargento("Matias", "Sargento", "IA12", "Oficial");
$subtentente = new Subtenente("Jonas", "Subtenente", "P90", "Grande oficial");
$tenente = new Tenente("Manoel", "Tenente", "M4A1", "Grande oficial");
$cabo = new Cabo(" D.poste", "Cabo", "MG36", "Grâ-cruz");
$soldado = new Soldado("Clebinho", "Soldado", "M60", "Cavaleiro");

echo "Nome: " . $cabo->getNome() . " <br>";
echo "Patente: " . $cabo->getPatente() . " <br>";
echo "Arma: " . $cabo->getArma() . " <br>";
echo "Merito: " . $cabo->getMerito() . " <br>";
$cabo->grito_of_war();

echo "<hr>";

echo "Nome: " . $sargento->getNome() . " <br>";
echo "Patente: " . $sargento->getPatente() . " <br>";
echo "Arma: " . $sargento->getArma() . " <br>";
echo "Merito: " . $sargento->getMerito() . " <br>";
$sargento->grito_of_war();

echo "<hr>";

echo "Nome: " . $soldado->getNome() . " <br>";
echo "Patente: " . $soldado->getPatente() . " <br>";
echo "Arma: " . $soldado->getArma() . " <br>";
echo "Merito: " . $soldado->getMerito() . " <br>";
$soldado->grito_of_war();

echo "<hr>";

echo "Nome: " . $tenente->getNome() . " <br>";
echo "Patente: " . $tenente->getPatente() . " <br>";
echo "Arma: " . $tenente->getArma() . " <br>";
echo "Merito: " . $tenente->getMerito() . " <br>";
$tenente->grito_of_war();

echo "<hr>";

echo "Nome: " . $subtentente->getNome() . " <br>";
echo "Patente: " . $subtentente->getPatente() . " <br>";
echo "Arma: " . $subtentente->getArma() . " <br>";
echo "Merito: " . $subtentente->getMerito() . " <br>";
$subtentente->grito_of_war();

