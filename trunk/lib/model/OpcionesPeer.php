<?php


/**
 * Skeleton subclass for performing query and update operations on the 'opciones' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * 09/29/11 23:43:34
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    lib.model
 */
class OpcionesPeer extends BaseOpcionesPeer 
{
 public static function getOpcion($opcion)
  {
    $criteria = new Criteria();    

    $criteria->add(OpcionesPeer::TEXTO,$opcion,Criteria::EQUAL);     
    return (self::doSelectOne($criteria));
  }
} // OpcionesPeer