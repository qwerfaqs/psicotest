<?php
require_once dirname(__FILE__).'/../bootstrap/unit.php';
$configuration = ProjectConfiguration::getApplicationConfiguration( 'frontend', 'test', true); 
new sfDatabaseManager($configuration); 
$t = new lime_test(14);

/*
 * Obtengo la Escala A del 16pf
 */
$criteria = new Criteria();
$criteria->add(EscalasPeer::NOMBRE, "A"); // Escala A
$criteria->add(EscalasPeer::TESTS_ID, 3); // 16pf
$escala = EscalasPeer::doSelectOne($criteria);


$t->is("A", $escala->getNombre(), "La escala es A");

$percentiles = PercentilesPeer::getPercentilPorEscala($escala->getId(), 0);
$t->is(1,$percentiles[0]->getPercentil(), "En la escala A, 0 puntos = percentil 1");

$percentiles = PercentilesPeer::getPercentilPorEscala($escala->getId(), 1);
$t->is(1,$percentiles[0]->getPercentil(), "En la escala A, 1 puntos = percentil 1");

$percentiles = PercentilesPeer::getPercentilPorEscala($escala->getId(), 2);
$t->is(1,$percentiles[0]->getPercentil(), "En la escala A, 2 puntos = percentil 1");

$percentiles = PercentilesPeer::getPercentilPorEscala($escala->getId(), 3);
$t->is(1,$percentiles[0]->getPercentil(), "En la escala A, 3 puntos = percentil 1");

$percentiles = PercentilesPeer::getPercentilPorEscala($escala->getId(), 4);
$t->is(2,$percentiles[0]->getPercentil(), "En la escala A, 4 puntos = percentil 2");

$percentiles = PercentilesPeer::getPercentilPorEscala($escala->getId(), 5);
$t->is(2,$percentiles[0]->getPercentil(), "En la escala A, 5 puntos = percentil 2");

$percentiles = PercentilesPeer::getPercentilPorEscala($escala->getId(), 6);
$t->is(3,$percentiles[0]->getPercentil(), "En la escala A, 6 puntos = percentil 3");

$percentiles = PercentilesPeer::getPercentilPorEscala($escala->getId(), 7);
$t->is(4,$percentiles[0]->getPercentil(), "En la escala A, 7 puntos = percentil 4");

$percentiles = PercentilesPeer::getPercentilPorEscala($escala->getId(), 8);
$t->is(5,$percentiles[0]->getPercentil(), "En la escala A, 8 puntos = percentil 5");

$percentiles = PercentilesPeer::getPercentilPorEscala($escala->getId(), 9);
$t->is(6,$percentiles[0]->getPercentil(), "En la escala A, 9 puntos = percentil 6");

$percentiles = PercentilesPeer::getPercentilPorEscala($escala->getId(), 10);
$t->is(7,$percentiles[0]->getPercentil(), "En la escala A, 10 puntos = percentil 7");

$percentiles = PercentilesPeer::getPercentilPorEscala($escala->getId(), 11);
$t->is(8,$percentiles[0]->getPercentil(), "En la escala A, 11 puntos = percentil 8");

$percentiles = PercentilesPeer::getPercentilPorEscala($escala->getId(), 12);
$t->is(9,$percentiles[0]->getPercentil(), "En la escala A, 12 puntos = percentil 9");
