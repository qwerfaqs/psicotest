<?php
/**
 * Description of test
 *
 * @author potich
 */
class test { 
  public static function calcularDomino($respuestas){ 
    $puntaje =0; 
      
       foreach($respuestas as $resultado)
       {     
         $pregunta = $resultado->getPreguntas();
         $estado = sfConfig::get('app_activo');
         $respuesta =  RespuestasPeer::getRespuesta($pregunta->getId(),$estado);
        
          if ($resultado->getOpciones()->getTexto()==$respuesta->getOpciones()->getTexto())
          {
            $puntaje = $puntaje + 2.857142857142857;  
          }
       }          
       Test::grabarPuntaje($puntaje,$respuestas[0]->getPruebas(), $respuestas[0]->getAspirantesId());       
  }
  
  public static function aprobacion($prueba,$puntaje){      
     $aprobacion = $prueba->getTests()->getPuntajeAprobacion();
      
     if($puntaje>=$aprobacion)
     {
         $estado = sfConfig::get('app_resultado_apto');
         return($estado);
     }
     else
     {
       $estado = sfConfig::get('app_resultado_noapto');
       return($estado);
     }
  }
  public static function calcularig2($respuestas){ 
     $puntaje=0; 
      
       foreach($respuestas as $resultado)
       {     
         $pregunta = $resultado->getPreguntas();
         $estado = sfConfig::get('app_activo');
         $respuesta =  RespuestasPeer::getRespuesta($pregunta->getId(),$estado);
         if ($resultado->getOpciones()->getTexto()==$respuesta->getOpciones()->getTexto())
          {
            $puntaje = $puntaje + 1;         
          }          
       }            
       
       $percentil = PercentilesPeer::getPercentil($respuestas[0]->getPruebas()->getTests()->getId(),$puntaje);                               
       Test::grabarPuntaje($percentil[0]->getPercentil(),$respuestas[0]->getPruebas(), $respuestas[0]->getAspirantesId());             
  }
  public static function calcularbarsit($respuestas){ 
      Test::calcularig2($respuestas);
  }
  /*
   * Calcula los resultados del test 16pf
   */
  public static function calcular16pf($respuestas) { 
      $tests_id = $respuestas[0]->getPruebas()->getTests()->getId(); //Obtengo el id del test
      $criteria = new Criteria(); //creamos el objecto criteria
      $criteria->add(EscalasPeer::TESTS_ID, $tests_id); // where tests_id = (id del test)
      $escalas = EscalasPeer::doSelect($criteria);//obtengo las escalas para el test
      //foreach ()
      PercentilesPeer::getPercentil($test, $puntaje);
  }
  public static function calculareae1($intensidades) { 
     $puntaje=0; 
      $sumaint = 0;
       foreach($intensidades as $intensidad) {     
         $pregunta = $intensidad->getResultadosparciales()->getPreguntas();
         $estado = sfConfig::get('app_activo');
         
         $respuesta =  RespuestasPeer::getRespuesta($pregunta->getId(),$estado);         
        
         if($intensidad->getResultadosparciales()->getOpciones()->getTexto()==$respuesta->getOpciones()->getTexto()) {            
            $puntaje = $puntaje + 1;              
          }  
          $sumaint = $sumaint + $intensidad->getOpciones()->getTexto();
       }       
       $puntaje = $puntaje + $sumaint;
       $percentil = PercentilesPeer::getPercentil($intensidades[0]->getResultadosparciales()->getPruebas()->getTests()->getId(),$puntaje);                         
              
       Test::grabarPuntaje($percentil[0]->getPercentil(),$intensidades[0]->getResultadosparciales()->getPruebas(), $intensidades[0]->getResultadosparciales()->getAspirantesId());             
  }
  public static function calcularrazonamientoverbal($respuestas) { 
    Test::calcularrazonamientoabstracto($respuestas);
  }
  public static function calcularrazonamientoabstracto($respuestas) { 
        $puntaje =0; 
       foreach($respuestas as $resultado) {     
         $pregunta = $resultado->getPreguntas();
         $estado = sfConfig::get('app_activo');
         $respuesta =  RespuestasPeer::getRespuesta($pregunta->getId(),$estado);  
          if ($resultado->getOpciones()->getTexto()==$respuesta->getOpciones()->getTexto()) {
            $puntaje = $puntaje + 0.44;  
          }
       }          
       Test::grabarPuntaje($puntaje,$respuestas[0]->getPruebas(), $respuestas[0]->getAspirantesId());       
  }
  public static function calcularrazonamientonumerico($respuestas) { 
       Test::calcularrazonamientoabstracto($respuestas);
  }
  public static function calcularraven($respuestas) {
      Test::calcularig2($respuestas);
  }
  
  public static function calcularmonedas($respuestas) 
  {
     $puntaje =0; 
      
       foreach($respuestas as $resultado)
       {     
         $pregunta = $resultado->getPreguntas();
         $estado = sfConfig::get('app_activo');
         $respuesta =  RespuestasPeer::getRespuesta($pregunta->getId(),$estado);
        
          if ($resultado->getOpciones()->getTexto()==$respuesta->getOpciones()->getTexto())
          {
            $puntaje = $puntaje + 1;  
          }
       }          
       Test::grabarPuntaje($puntaje,$respuestas[0]->getPruebas(), $respuestas[0]->getAspirantesId());       
            
  }
  
  
  public static function grabarPuntaje($puntaje,$prueba,$aspirante) { 
       $result = ResultadosPeer::getResultado($prueba->getId(), $aspirante);              
       $puntaje = $puntaje + $result->getPuntaje();
       $result->setPuntaje($puntaje);              
       $result->setEstadosresultadosId(Test::aprobacion($prueba, $puntaje));             
       $result->save();             
  }
  
  
  
}
?>