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
       $result->save();
  }
  
  public static function calcular16pf($respuestas)
  { 
      // calculo del 16pf arrojando resultado por factor 
  }
   
   
}

?>
