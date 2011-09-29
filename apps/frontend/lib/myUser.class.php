<?php

class myUser extends sfBasicSecurityUser
{
  
  public function paginatePruebas($num=0) // listado de pruebas de una evaluacion
  {       
    $pruebas = $this->getPruebas(); 
    if(isset($pruebas[$num]))
      return($pruebas[$num]);
  }
  
  public function setPruebas($pruebas) // listado de pruebas de una evaluacion
  {       
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
  
  public function getEvaluacion()
  {       
   return($this->getAttribute('evaluacion'));  
  }  
  
    
}
