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
class Tomador 
{    
    
 public static function getRespuesta(sfWebRequest $request,$prueba) 
 {
     switch ($prueba->getTests()->getTitulo()) {
         case 'domino': 
            return(Tomador::getDomino($request) );                
         break;
         case '16pf': 
            return(Tomador::getRespuestaSimple($request) );                
         break;     
         case 'ig2': 
            return(Tomador::getRespuestaSimple($request) );                
         break;
         default:
         break;
     }
 }
    
    
   public static function getDomino(sfWebRequest $request) 
    {
        $superior = $request->getParameter('R1'); // resultado superior
        $inferior = $request->getParameter('R2'); // resultado inferior
        if (!isset($superior))
            $superior = 0;

        if (!isset($inferior))
            $inferior = 0;

        $resultado = $superior . '/' . $inferior;   // resultado total
        return($resultado);
    }
    
    
    public static function getRespuestaSimple(sfWebRequest $request) 
    {   
        $resultado = $request->getParameter('valor');  // resultado total
        return($resultado);
    }

    
}

?>
