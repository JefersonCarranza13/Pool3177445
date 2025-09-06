<?php

require_once("carro.php");

// $carro1 = new Carro();

$carro1 = new Carro("rojo,","lamborguini","aventador",590,2100,2);
$carro2 = new Carro("verde,","lamborguini","evo",   510,2300,2);
$carro3 = new Carro("negro,","lamborguini","sexto elemento",530,2200,2);
$carro4 = new Carro("azul,","lamborguini","diablo",520,1200,2);
var_dump( $carro1 );
var_dump( $carro2 );
var_dump( $carro3 );
var_dump( $carro4 );