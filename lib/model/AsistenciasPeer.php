<?php


/**
 * Skeleton subclass for performing query and update operations on the 'asistencias' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * 09/28/11 17:10:07
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    lib.model
 */
class AsistenciasPeer extends BaseAsistenciasPeer 
{
 public static function getAsistencia($evaluacion,$aspirante)
  {
    $criteria = new Criteria();        
    $criteria->add(AsistenciasPeer::EVALUACIONES_ID,$evaluacion,Criteria::EQUAL); 
    $criteria->add(AsistenciasPeer::ASPIRANTES_ID,$aspirante,Criteria::EQUAL);      
    return (self::doSelectOne($criteria));
  }
} // AsistenciasPeer
