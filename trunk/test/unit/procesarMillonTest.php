<?php
require_once dirname(__FILE__).'/../bootstrap/unit.php';
$configuration = ProjectConfiguration::getApplicationConfiguration( 'frontend', 'test', true);
new sfDatabaseManager($configuration);

//$t = new lime_test(1);
$col = "C";
$resultados = array();
for ($index = 2; $index <= 176; $index++) {
    $resultados[$col.$index] = 1;
}
$datos = array("G12" => "M", "G14" => "20");
var_dump(test::procesarMillon($resultados, $datos, 1));
