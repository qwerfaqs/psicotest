<?php
class myUser extends derechosSecurityUser {
  public function getPrueba($num=0) { // listado de pruebas de una evaluacion
    $numPrueba = $this->getCurrentprueba();       
    $pruebas = $this->getPruebas();        
    if(isset($pruebas[$numPrueba]))
      return($pruebas[$numPrueba]);
    else
        return(null);
  } 
  public function setPruebas() { // seteo todas las pruebas de una evaluacion  
   $pruebas= PruebasPeer::getPruebas($this->getAttribute('evaluacion')->getId()); 
   $tests =  TestsPeer::getTestHijos($pruebas);     
   $this->setAttribute('pruebas', $tests);  
   $this->setResultadoInicial($pruebas);
   $this->setInitprueba(sfConfig::get('app_init_prueba'));
  }  
  public function setEvaluacion($evaluacion) { // setea la evaluacion a realizar   
        $this->setAttribute('evaluacion', $evaluacion); 
  }
  public function getPruebas() {         
       return($this->getAttribute('pruebas'));  
  }  
  public function setInitprueba($num) {          
   $this->setAttribute('currentprueba', $num);   
  }  
  public function Nextprueba() {       
   $numero = $this->getAttribute('currentprueba');      
   $numero++;
   $this->setAttribute('currentprueba',$numero);  
  }  
  public function getCurrentprueba() {             
   return($this->getAttribute('currentprueba'));   
  }  
  public function getEvaluacion() {       
   return($this->getAttribute('evaluacion'));  
  }  
  public function initResultados() {
    $resultados=array();
    $intensidades=array();
    $this->setAttribute('resultados',$resultados);     
    $this->setAttribute('intensidades',$intensidades);         
  }
  public function addResultados($resultado) {      
      $result = $this->getAttribute('resultados');
      $result[] = $resultado;
      $this->setAttribute('resultados',$result);           
  }
  public function addIntensidades($opcion,$resultado) {      
      $resulta = $this->getAttribute('intensidades');    
      $intensidad = new Intensidades();     
      $intensidad->setOpciones($opcion);
      $intensidad->setResultadosparciales($resultado);
      $intensidad->save();
      $resulta[] = $intensidad;
      $this->setAttribute('intensidades',$resulta);           
  }
  public function setResultadoInicial($pruebas) {
      foreach($pruebas as $prueba) { 
       $result = new Resultados();
       $result->setAspirantesId($this->getAttribute('usuarioId'));       
       $result->setPuntaje(0);                   
       $result->setPruebas($prueba);         
       $result->setEstadosresultadosId(2);             
       $result->save();
      }
  }
  public function setResultado($prueba,$test,$respuesta,$pregunta) {               
     if($prueba->getTests()->getTitulo()=='eae1') {
       $tal=explode("/",$respuesta);
       $respuesta = $tal[0];
       $intensidad = $tal[1];          
     }          
     $res = OpcionesPeer::getOpcion($respuesta,$test->getTipoopcion()->getId());                        
     $resultado = new  Resultadosparciales();
     $resultado->setAspirantesId($this->getAttribute('usuarioId'));     
     $resultado->setOpciones($res);
     $resultado->setPruebas($prueba); 
     $resultado->setPreguntasId($pregunta);
     $resultado->save();
     $this->addResultados($resultado); 
     if($prueba->getTests()->getTitulo()=='eae1') {
         $int = OpcionesPeer::getOpcion($intensidad,$prueba->getTests()->getTipoopcion()->getId());          
         $this->addIntensidades($int, $resultado);
     }
  }
  public function saveResultados($test) { 
    $respuestas = $this->getAttribute('resultados');  
    $intensidades = $this->getAttribute('intensidades'); 
    switch ($test->getTitulo()) {
        case 'domino': Test::calcularDomino($respuestas);  break;
        case '16pf': Test::calcular16pf($respuestas); break;   
        case 'ig2': Test::calcularig2($respuestas); break; 
        case 'barsit': Test::calcularbarsit($respuestas); break; 
        case 'eae1': Test::calculareae1($intensidades); break; 
        case 'razonamientoverbal ': Test::calcularrazonamientoverbal($respuestas); break;
        case 'razonamientoabstracto': Test::calcularrazonamientoabstracto($respuestas); break;
        case 'razonamientonumerico': Test::calcularrazonamientonumerico($respuestas); break;
        case 'raven': Test::calcularraven($respuestas); break;
    }        
  }
}