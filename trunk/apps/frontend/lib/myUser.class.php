<?php

class myUser extends derechosSecurityUser
{
  
  public function paginatePruebas($num=0) // listado de pruebas de una evaluacion
  {       
    $pruebas = $this->getPruebas(); 
    if(isset($pruebas[$num]))
      return($pruebas[$num]);
 
  }
  
  public function setPruebas() // listado de pruebas de una evaluacion
  {       
   $pruebas = PruebasPeer::getPruebas($this->getAttribute('evaluacion')->getId()); 
   $this->setAttribute('pruebas', $pruebas);      
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
   $this->setAttribute('currentprueba',$numero++);
   return($numero);
   
  }  
  
  public function getCurrentprueba() 
  {             
   return($this->getAttribute('currentprueba'));   
  }  
  
  public function getEvaluacion()
  {       
   return($this->getAttribute('evaluacion'));  
  }  
  
    
}
