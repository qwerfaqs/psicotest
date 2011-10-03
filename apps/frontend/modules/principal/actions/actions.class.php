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
    $aspirante = $this->getUser()->getAttribute('usuarioId');
    $estado = sfConfig::get('app_activo'); // el estado de la evaluacion en este caso activo para que aparesca en pantalla
    $this->evaluaciones = EvaluacionesPeer::getEvaluaciones($estado,$aspirante);            
  }
  
  public function executePruebas(sfWebRequest $request) // listado de pruebas de una evaluacion
  {
    $this->evaluacion = $this->getRoute()->getObject();      
    $this->pruebas = PruebasPeer::getPruebas($this->evaluacion->getId());      
  }
  
  
  public function executeAsistencia(sfWebRequest $request) 
  {
     $evaluacion = $request->getParameter('evaluacion');
     $aspirante = $this->getUser()->getAttribute('usuarioId');
     $asistencia =  AsistenciasPeer::getAsistencia($evaluacion,$aspirante);
     if(isset($asistencia))   
     {            
       $this->getUser()->setEvaluacion($asistencia->getEvaluaciones()); 
       $this->getUser()->setPruebas();     
       $this->getUser()->initResultados();  
       $this->forward('principal','pregunta');
     }
     else
        $this->redirect($request->getUriPrefix());
     
    }
  
  
  public function executePregunta(sfWebRequest $request) 
  {                
     $prueba = $this->getUser()->getPrueba();  //prueba actual
     if($prueba!=null)
     {
      $this->pagina= sfConfig::get('app_activo'); //Pagina nro 1
      $this->preguntas = PreguntasPeer::getPreguntas($prueba->getTests()->getId(),1,$this->pagina);          
      if(count($this->preguntas)==0)      
          $this->forward('principal','finish');            
     }
     else 
          $this->forward('principal','finish');   
  }
  
  public function executeCheck(sfWebRequest $request) 
  {      
   $pregunta = $request->getParameter('pregunta');   
   $this->pagina = $request->getParameter('pagina'); // pagina a mostrar teniendo en cuenta que es 1 a 1
   $this->pagina++;  // sumamos una pagina
   $superior = $request->getParameter('R1'); // resultado superior
   $inferior = $request->getParameter('R2'); // resultado inferior
   if(!isset($superior) )
       $superior = 0;
   
   if(!isset($inferior) )
       $inferior = 0;
   
   $resultado = $superior.'/'.$inferior;   // resultado total
        
   $prueba = $this->getUser()->getPrueba(); // prueba actual   
   
   $this->getUser()->setResultado($prueba,$resultado,$pregunta); // setiar resultado a la coleccion
     
   $this->preguntas = PreguntasPeer::getPreguntas($prueba->getTests()->getId(),1,$this->pagina);     
   
   if(count($this->preguntas)==0) // si no hay mas preguntas entonces paso a la siguiente prueba
   {       
       $this->getUser()->saveResultados(); // grabo los resultados totales y parciales
       $this->getUser()->Nextprueba();   // doy acceso a la siguiente prueba
       $this->getUser()->initResultados();           // inicializo el arreglo de resultados
       $this->forward('principal', 'pregunta'); // vuelvo al flujo del principio pero con otro test
   }
   $this->setTemplate('pregunta');
  }
  
  
  public function executeFinish(sfWebRequest $request) 
  {  
      
  }
  
  
   
 
  
}