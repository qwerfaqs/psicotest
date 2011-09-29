<?php


/**
 * Skeleton subclass for performing query and update operations on the 'preguntas' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * 09/28/11 17:10:08
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    lib.model
 */
class PreguntasPeer extends BasePreguntasPeer 
{
    
 public static function getPreguntas($test,$rows=1,$pagina=1)
  {
    $criteria = new Criteria();
    $criteria->add(PreguntasPeer::TESTS_ID,$test,Criteria::EQUAL); 
    $pager = new PropelPager($criteria, 'PreguntasPeer', 'doSelectJoinAll', $page = $pagina, $rows);
    return $pager;
  }
    
  
} // PreguntasPeer
