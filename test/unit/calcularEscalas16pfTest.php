<?php

require_once dirname(__FILE__).'/../bootstrap/unit.php';
$configuration = ProjectConfiguration::getApplicationConfiguration( 'frontend', 'test', true); 
new sfDatabaseManager($configuration); 

/*
 * Testeando el factor A para un perfil Infante
 */

$criteria = new Criteria();
$criteria->add(PerfilPeer::ID, 1); 
$perfil = PerfilPeer::doSelectOne($criteria); // deberia tener  Infante

$criteria = new Criteria();
$criteria->add(EscalasPeer::NOMBRE, "A"); // Escala A
$criteria->add(EscalasPeer::TESTS_ID, 3); // 16pf
$escala = EscalasPeer::doSelectOne($criteria);

$percentiles = array();
for($i=1;$i<10;$i++){
    
    $criteria = new Criteria();
    $criteria->add(PercentilesPeer::PERCENTIL, $i);
    $criteria->add(PercentilesPeer::ESCALAS_ID, $escala->getId());
    $percentiles[$i] = PercentilesPeer::doSelectOne($criteria);
}




$t = new lime_test(11);
$t->is('Infante', trim($perfil->getNombre()), "El perfil es Infante");
$t->is("A", $escala->getNombre(), "La escala es A");
$t->is(PercentilesPeer::evaluarValorEsperado($perfil, $percentiles[1]), false, "Si el percentil es 1 desaprueba");
$t->is(PercentilesPeer::evaluarValorEsperado($perfil, $percentiles[2]), false, "Si el percentil es 2 desaprueba");
$t->is(PercentilesPeer::evaluarValorEsperado($perfil, $percentiles[3]), true, "Si el percentil es 3 aprueba");
$t->is(PercentilesPeer::evaluarValorEsperado($perfil, $percentiles[4]), true, "Si el percentil es 4 aprueba");
$t->is(PercentilesPeer::evaluarValorEsperado($perfil, $percentiles[5]), true, "Si el percentil es 5 aprueba");
$t->is(PercentilesPeer::evaluarValorEsperado($perfil, $percentiles[6]), true, "Si el percentil es 6 aprueba");
$t->is(PercentilesPeer::evaluarValorEsperado($perfil, $percentiles[7]), false, "Si el percentil es 7 desaprueba");
$t->is(PercentilesPeer::evaluarValorEsperado($perfil, $percentiles[8]), false, "Si el percentil es 8 desaprueba");
$t->is(PercentilesPeer::evaluarValorEsperado($perfil, $percentiles[9]), false, "Si el percentil es 9 desaprueba");

