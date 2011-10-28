<?php
require_once dirname(__FILE__).'/../bootstrap/unit.php';
$configuration = ProjectConfiguration::getApplicationConfiguration( 'frontend', 'test', true); 
new sfDatabaseManager($configuration); 

$criteria = new Criteria();
$criteria->add(AspirantesPeer::CEDULA, "33646764");
$aspirante = AspirantesPeer::doSelectOne($criteria);



$t = new lime_test(1);
$t->is($aspirante->getEdad(), 23,  "La edad de francisco es 23 anios");
