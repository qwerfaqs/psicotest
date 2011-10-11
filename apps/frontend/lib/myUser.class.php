<?php

class myUser extends derechosSecurityUser
{
  
  public function getPrueba($num=0) // listado de pruebas de una evaluacion
  {   
    $numPrueba = $this->getCurrentprueba();       
    $pruebas = $this->getPruebas();        
    if(isset($pruebas[$numPrueba]))
      return($pruebas[$numPrueba]);
    else
        return(null);
  }
  
  public function setPruebas() // listado de pruebas de una evaluacion
  {       
   $pruebas = PruebasPeer::getPruebas($this->getAttribute('evaluacion')->getId()); 
   $this->setAttribute('pruebas', $pruebas);  
   $this->setInitprueba(sfConfig::get('app_init_prueba'));
  }  
  
  public function setEvaluacion($evaluacion) // listado de pruebas de una evaluacion
  {       
   $this->setAttribute('evaluacion', $evaluacion);  
  }
  
  public function getPruebas() 
  {          
   return($this->getAttribute('pruebas'));  
  }  
  
  public function setInitprueba($num) 
  {          
   $this->setAttribute('currentprueba', $num);   
  }  
  
  public function Nextprueba() 
  {       
   $numero = $this->getAttribute('currentprueba');      
   $numero++;
   $this->setAttribute('currentprueba',$numero);  

  }  
    
  
  public function getCurrentprueba() 
  {             
   return($this->getAttribute('currentprueba'));   
  }  
  
  public function getEvaluacion()
  {       
   return($this->getAttribute('evaluacion'));  
  }  
    
  public function initResultados()
  {
    $resultados=array();
    $this->setAttribute('resultados',$resultados);     
  }
  
  
  public function addResultados($resultado)
  {
      $result = $this->getAttribute('resultados');
      $result[] = $resultado;
      $this->setAttribute('resultados',$result);      
     
  }
  
  
  
  public function setResultado($prueba,$respuesta,$pregunta)
  {               
     $res = OpcionesPeer::getOpcion($respuesta,$prueba->getTests()->getTipoopcion()->getId());          
     $resultado = new  Resultadosparciales();
     $resultado->setAspirantesId($this->getAttribute('usuarioId'));     
     $resultado->setOpciones($res);
     $resultado->setPruebas($prueba); 
     $resultado->setPreguntasId($pregunta);
     $this->addResultados($resultado);
  }
  
  public function saveResultados()
  { 
    $respuestas =   $this->getAttribute('resultados');
    foreach($respuestas as $resultado)     
        $resultado->save(); 
   
    
    switch ($respuestas[0]->getPruebas()->getTests()->getTitulo()) 
    {
        case 'domino': Test::calcularDomino($respuestas);  break;
        case '16pf': Test::calcular16pf($respuestas); break;   
        case 'ig2': Test::calcularig2($respuestas); break; 
    }        
  }
  
  
  
  
  
  
  
    
}
