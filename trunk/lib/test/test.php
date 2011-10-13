<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of test
 *
 * @author potich
 */
class test 
{
       
   
    
  public static function calcularDomino($respuestas)
  { 
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
       $result = new Resultados();
       $result->setAspirantesId($respuestas[0]->getAspirantesId());
       $result->setPuntaje($puntaje);
       $result->setPruebas($respuestas[0]->getPruebas());  
       $result->setEstadosresultadosId(Test::aprobacion($respuestas[0]->getPruebas(), $puntaje));
       $result->save();
  }
  
  
  public static function aprobacion($prueba,$puntaje)
  {      
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
  
  public static function calcular16pf($respuestas)
  { 
      // calculo del 16pf arrojando resultado por factor 
  }
  
  public static function calcularig2($respuestas)
  { 
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
       $result = new Resultados();
       $result->setAspirantesId($respuestas[0]->getAspirantesId());       
       $result->setPuntaje($percentil[0]->getPercentil());
       $result->setPruebas($respuestas[0]->getPruebas());  
       
       $result->setEstadosresultadosId(Test::aprobacion($respuestas[0]->getPruebas(), $percentil[0]->getPercentil()));             
       $result->save();
  }
  
  
  public static function calcularbarsit($respuestas)
  { 
      Test::calcularig2($respuestas);
  }
  
  public static function calculareae1($intensidades)
  { 
     $puntaje=0; 
      $sumaint = 0;
       foreach($intensidades as $intensidad)
       {     
         $pregunta = $intensidad->getResultadosparciales()->getPreguntas();
         $estado = sfConfig::get('app_activo');
         
         $respuesta =  RespuestasPeer::getRespuesta($pregunta->getId(),$estado);         
        
         if($intensidad->getResultadosparciales()->getOpciones()->getTexto()==$respuesta->getOpciones()->getTexto())
          {
            $puntaje = $puntaje + 1;  
          }  
          $sumaint = $sumaint + $intensidad->getOpciones()->getTexto();
       }       
       $puntaje = $puntaje + $sumaint;
       $percentil = PercentilesPeer::getPercentil($intensidades[0]->getResultadosparciales()->getPruebas()->getTests()->getId(),$puntaje);                    
       $result = new Resultados();
       $result->setAspirantesId($intensidades[0]->getResultadosparciales()->getAspirantesId());       
       $result->setPuntaje($percentil[0]->getPercentil());
       $result->setPruebas($intensidades[0]->getResultadosparciales()->getPruebas());         
       $result->setEstadosresultadosId(Test::aprobacion($intensidades[0]->getResultadosparciales()->getPruebas(), $percentil[0]->getPercentil()));             
       $result->save();            
  }
  
   
}

?>
