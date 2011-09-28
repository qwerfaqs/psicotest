<?php

/**
 * principal actions.
 *
 * @package    psicotest
 * @subpackage principal
 * @author     Psicotest
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class principalActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
    
  }
  
  public function executeEvaluaciones(sfWebRequest $request)
  {            
    $aspirante = 1;
    $estado = 1;
    $this->asistencia= AsistenciasPeer::getEvaluaciones($estado,$aspirante);  
    if($this->asistencia)
       $this->setTemplate ('evaluaciones');
    else
        $this->setTemplate ('nohayevaluaciones');
  }
  
  public function executePruebas(sfWebRequest $request)
  {
    $evaluacion = $this->getRoute()->getObject();  
    $this->pruebas = PruebasPeer::getPruebas($evaluacion->getId());   
    
  }
   
 
  
}
