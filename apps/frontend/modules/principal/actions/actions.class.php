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
  
  public function executeEvaluaciones(sfWebRequest $request) // evaluaciones disponibles de un aspirante
  {            
    $aspirante = 1;
    $estado = 1; // el estado de la evaluacion en este caso activo para que aparesca en pantalla
    $this->asistencia= AsistenciasPeer::getEvaluaciones($estado,$aspirante);  
    if($this->asistencia)
    {
       $this->getUser()->setEvaluacion($this->asistencia->getEvaluaciones());       
       $this->setTemplate('evaluaciones');
    }
    else
        $this->setTemplate ('nohayevaluaciones');
  }
  
  public function executePruebas(sfWebRequest $request) // listado de pruebas de una evaluacion
  {
    $this->evaluacion = $this->getRoute()->getObject();      
    $this->pruebas = PruebasPeer::getPruebas($this->evaluacion->getId());  
    if($this->pruebas!=null)
       $this->getUser()->setPruebas($this->pruebas);    
    
    

    
  }
  
  
  public function executeProgress(sfWebRequest $request) 
  {
     $num = $request->getParameter('num');
     $this->prueba = $this->getUser()->paginatePruebas(trim($num));      
  }
  
  
  
  
   
 
  
}