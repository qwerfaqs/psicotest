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
    
 public static function getRespuesta(sfWebRequest $request,$prueba,$num) 
 {     
 
     switch ($prueba->getTitulo()) {
         case 'domino': 
            return(Tomador::getDomino($request) );                
         break;
         case '16pf': 
            return(Tomador::getRespuestaSimple($request,$num) );                
         break;     
         case 'ig2': 
            return(Tomador::getRespuestaSimple($request,$num) );                
         break;
         case 'barsit': 
            return(Tomador::getRespuestaSimple($request,$num) );                
         break;
         case 'eae1': 
            return(Tomador::getRespuestaDoble($request,$num) );                
         break;
         case 'razonamientoverbal ':              
            return(Tomador::getRespuestaSimple($request,$num) );                
         break;
         case 'razonamientoabstracto':              
            return(Tomador::getRespuestaSimple($request,$num) );                
         break;
         case 'razonamientonumerico':              
            return(Tomador::getRespuestaSimple($request,$num) );                
         break;
         case 'raven':              
            return(Tomador::getRespuestaSimple($request,$num) );                
         break;
         case 'analogiasverbales':              
            return(Tomador::getRespuestaSimple($request,$num) );                
         break;
         case 'seriesnumericas':              
            return(Tomador::getRespuestaSimple($request,$num) );                
         break;
         case 'matriceslogicas':              
            return(Tomador::getRespuestaSimple($request,$num) );                
         break;
         case 'completaroraciones':              
            return(Tomador::getRespuestaSimple($request,$num) );                
         break;
         case 'encajarfiguras':              
            return(Tomador::getRespuestaSimple($request,$num) );                
         break;
         case 'problemasnumericos':              
            return(Tomador::getRespuestaSimple($request,$num) );                
         break;
     
         case 'monedas':              
            return(Tomador::getRespuestaSimple($request,$num) );                
         break;
     
         case 'millon':              
            return(Tomador::getRespuestaSimple($request,$num) );                
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
    
    
    public static function getRespuestaSimple(sfWebRequest $request,$num) 
    {   
        $resultado = $request->getParameter('valor'.$num);  // resultado total   
        
        return($resultado);
    }
    
    public static function getRespuestaDoble(sfWebRequest $request,$num) 
    {   
        $resultado1 = $request->getParameter('valor'.$num);  
        $resultado2 = $request->getParameter('valor2'.$num); 
        $resultado = $resultado1.'/'.$resultado2;
        return($resultado);
    }

    
}

?>
