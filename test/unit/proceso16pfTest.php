<?php
/*
 * @author Francisc Pane
 */
require_once dirname(__FILE__).'/../bootstrap/unit.php';
$configuration = ProjectConfiguration::getApplicationConfiguration( 'frontend', 'test', true);
new sfDatabaseManager($configuration);

$pruebareal = PruebasPeer::getPrueba( 10 , 4);
$pager = PreguntasPeer::getPreguntas(13, null, 1);
$pregunta = $pager->getResult();
var_dump($pregunta);
$t = new lime_test(1);
$t->pass();
