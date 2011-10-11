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
         $respuesta =  RespuestasPeer::getRespuesta($pregunta->getId());
        
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
      
  }
   
   
}

?>
