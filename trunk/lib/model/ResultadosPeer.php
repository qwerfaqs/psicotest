<?php


/**
 * Skeleton subclass for performing query and update operations on the 'resultados' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * 09/28/11 17:10:10
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    lib.model
 */
class ResultadosPeer extends BaseResultadosPeer 
{
 public static function getResultados($prueba)
  {
    $criteria = new Criteria();    

    $criteria->add(ResultadosPeer::PRUEBAS_ID,$prueba,Criteria::EQUAL);     
    return (self::doSelectJoinAll($criteria));
  }
  
  public static function getResultado($prueba,$aspirante)
  {
    $criteria = new Criteria();    

    $criteria->add(ResultadosPeer::PRUEBAS_ID,$prueba,Criteria::EQUAL);     
    $criteria->add(ResultadosPeer::ASPIRANTES_ID,$aspirante,Criteria::EQUAL); 
    return (self::doSelectOne($criteria));
  }
} // ResultadosPeer
