<?php
/**
 * Description of HojaAuxiliarMillon
 *
 * @author QwerfaqS
 */
class HojaAuxiliarMillon extends BaseHojaMillon 
{
    var $nombre = 'Auxiliar';
    //put your code here
    
    
     public function getValor($celda) {


        if (!isset($this->hoja[$celda])) // Si no esta guarda la celda
        {
            
            switch ($celda) {
                case "C4": $this->hoja["C4"] = $this->getHoja("Resultados")->getValor("D2")==1 ? 'Cuestionable' : 'Valido'  ;           break;
                case "C5": $this->hoja["C5"] = $this->getHoja("Resultados")->getValor("D3")>144 && $this->getHoja("Resultados")->getValor("D3")<591 ? ' Verdadero' : 'Falso'  ;               break;
                case "D4": $this->hoja["D4"] = $this->getHoja("Resultados")->getValor("D2")>1 ? 'Invalido   ' : 'Valido'  ;                  break;
                case "E4": $this->hoja["E4"] = $this->getHoja("Auxiliar")->getValor("C4")=='Valido' && $this->getHoja("Auxiliar")->getValor("D4")=='Valido' ? 'Verdadero' : 'Falso'  ;                              break;
                case "F4": $this->hoja["F4"] = $this->getHoja("Auxiliar")->getValor("C4")=='Cuestionable' && $this->getHoja("Auxiliar")->getValor("D4")=='Valido' ? 'Verdadero' : 'Falso'  ;                              break;
            
            }
            
            
            
        }               
        
      }
}

?>
