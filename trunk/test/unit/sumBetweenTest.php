<?php
require_once dirname(__FILE__).'/../bootstrap/unit.php';
$configuration = ProjectConfiguration::getApplicationConfiguration( 'frontend', 'test', true);
new sfDatabaseManager($configuration);

$t = new lime_test(4);


$obj = new BaseHojaMillon();
$hoja = array(  "A1" => 1,
                "A2" => 2,
                "A3" => 3,
                "A4" => 4,
                "A5" => 5,
                "A6" => 6,
                "A7" => 7,
                "A8" => 8,
                "A9" => 9,
                "A10" => 10 );
//$desde = "A1";
//$hasta = "A10";
//$t->is($obj->sumBeetwen($hoja, $desde, $hasta), 55, "sumBeetwen de A1 a A10 deberia ser 55");
//
//$desde = "A4";
//$hasta = "A8";
//$t->is($obj->sumBeetwen($hoja, $desde, $hasta), 30, "sumBeetwen de A4 a A8 deberia ser 30");

$desde = "A1";
$hasta = "A10";
$t->is($obj->sumBetween($hoja, $desde, $hasta), 55, "sumBetween de A1 a A10 deberia ser 55");

$desde = "A4";
$hasta = "A8";
$t->is($obj->sumBetween($hoja, $desde, $hasta), 30, "sumBetween de A4 a A8 deberia ser 30");

$hoja = array(  "A1" => 1,
                "A10" => 10,
                "A8" => 8,
                "A4" => 4,
                "A7" => 7,
                "A6" => 6,
                "A3" => 3,
                "A2" => 2,
                "A9" => 9,
                "A5" => 5 );


$desde = "A1";
$hasta = "A10";
$t->is($obj->sumBetween($hoja, $desde, $hasta), 55, "sumBetween de A1 a A10 deberia ser 55 con arreglo desordenado");

$desde = "A4";
$hasta = "A8";
$t->is($obj->sumBetween($hoja, $desde, $hasta), 30, "sumBetween de A4 a A8 deberia ser 30 con arreglo desordenado");
