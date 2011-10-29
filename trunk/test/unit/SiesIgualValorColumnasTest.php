<?php

require_once dirname(__FILE__).'/../bootstrap/unit.php';
$configuration = ProjectConfiguration::getApplicationConfiguration( 'frontend', 'test', true); 
new sfDatabaseManager($configuration); 

$t = new lime_test(2);

$n = new BaseHojaMillon();
$columna    = array(0, 1, 1, 0);
$valor      = array(1, 0, 1, 0);
$si         = array(1, 2, 3, 4);
$no         = 0;
$esperado   = array(0, 0, 3, 4);
$t->is($n->SiesIgualValorColumnas($columna, $valor, $si, $no), $esperado, "Cuando \$no es estatico");

$columna    = array(7, 1, 1, 8);
$valor      = 1;
$si         = array(1, 2, 3, 4);
$no         = 0;
$esperado   = array(0, 2, 3, 0);
$t->is($n->SiesIgualValorColumnas($columna, $valor, $si, $no), $esperado, "Cuando \$no y \$valor  estaticos");
