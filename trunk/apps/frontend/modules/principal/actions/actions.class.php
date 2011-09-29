<?php
/**
 * principal actions.
 *
 * @package    psicotest
 * @subpackage principal
 * @author     Psicotest
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class principalActions extends sfActions {
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request) {
    
  }
  
  public function executeEvaluaciones(sfWebRequest $request) {  // evaluaciones disponibles de un aspirante
    $aspirante = 1;
    $estado = 1; // el estado de la evaluacion en este caso activo para que aparesca en pantalla
    $this->evaluaciones = EvaluacionesPeer::getEvaluaciones($estado,$aspirante);  
    if($this->evaluaciones)
    {   
       $this->setTemplate('evaluaciones');
    }
    else
        $this->setTemplate ('nohayevaluaciones');
  }
  public function executePruebas(sfWebRequest $request) { // listado de pruebas de una evaluacion
    $this->evaluacion = $this->getRoute()->getObject();      
    $this->pruebas = PruebasPeer::getPruebas($this->evaluacion->getId());  
    /*if($this->pruebas!=null)
       $this->getUser()->setPruebas($this->pruebas); */
    
  }
  
  
  public function executeAsistencia(sfWebRequest $request) {
     $evaluacion = $request->getParameter('evaluacion');
     $aspirante = $this->getUser()->getAttribute('usuarioId');
     $asistencia =  AsistenciasPeer::getAsistencia($evaluacion,$aspirante);
     if(isset($asistencia))  {   
       $this->getUser()->setEvaluacion($asistencia->getEvaluaciones()); 
       $this->getUser()->setPruebas();              
       $this->forward('principal','evaluar');
     }
     else
        $this->redirect($request->getUriPrefix());
    }
  public function executeEvaluar(sfWebRequest $request) {                    
    $this->getUser()->setInitprueba(0);     
    $this->forward('principal','pregunta');
  }  
  public function executePregunta(sfWebRequest $request) {
     $numPrueba = $this->getUser()->getCurrentprueba();       
     $pruebas = $this->getUser()->getPruebas();        
     $this->preguntas = PreguntasPeer::getPreguntas($pruebas[$numPrueba]->getTests()->getId(),1);          
  }
  public function executeCheck(sfWebRequest $request) {      
   $pagina = $request->getParameter('pagina');
   $superior = $request->getParameter('R2');
   $inferior = $request->getParameter('R3');
   $resultado = $superior.'/'.$inferior;   
   $this->preguntas = PreguntasPeer::getPreguntas($this->getUser()->getCurrentprueba()->getTests()->getId(),1,$pagina);     
   $this->pagina++;
   $this->setTemplate('progress');
  }
}
