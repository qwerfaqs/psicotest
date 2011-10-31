<?php
require_once dirname(__FILE__).'/../bootstrap/unit.php';
$configuration = ProjectConfiguration::getApplicationConfiguration( 'frontend', 'test', true);
new sfDatabaseManager($configuration);

$t = new lime_test(2);


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
$desde = "A1";
$hasta = "A10";
$t->is($obj->sumBeetwen($hoja, $desde, $hasta), 55, "sum de A1 a A10 deberia ser 55");

$desde = "A4";
$hasta = "A8";
$t->is($obj->sumBeetwen($hoja, $desde, $hasta), 30, "sum de A4 a A8 deberia ser 30");
