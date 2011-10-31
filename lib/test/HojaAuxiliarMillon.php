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
            
            switch ($celda) 
            {
                case "C4": $this->hoja["C4"] = $this->getHoja("Resultados")->getValor("D2")==1 ? 'Cuestionable' : 'Valido'  ;           break;
                case "C5": $this->hoja["C5"] = $this->getHoja("Resultados")->getValor("D3")>144 && $this->getHoja("Resultados")->getValor("D3")<591 ? ' Verdadero' : 'Falso'  ;               break;
                case "D4": $this->hoja["D4"] = $this->getHoja("Resultados")->getValor("D2")>1 ? 'Invalido   ' : 'Valido'  ;                  break;
                case "E4": $this->hoja["E4"] = $this->getHoja("Auxiliar")->getValor("C4")=='Valido' && $this->getHoja("Auxiliar")->getValor("D4")=='Valido' ? 'Verdadero' : 'Falso'  ;                              break;
                case "F4": $this->hoja["F4"] = $this->getHoja("Auxiliar")->getValor("C4")=='Cuestionable' && $this->getHoja("Auxiliar")->getValor("D4")=='Valido' ? 'Verdadero' : 'Falso'  ;                              break;
               
                case "B96": $this->hoja["B96"] = $this->getHoja("Resultados")->getValor("M3");      break; 
                case "B97": $this->hoja["B97"] = $this->getHoja("Resultados")->getValor("M4");      break; 
                case "B98": $this->hoja["B98"] = $this->getHoja("Resultados")->getValor("M5");      break; 
                case "B99": $this->hoja["B99"] = $this->getHoja("Resultados")->getValor("M9");      break; 
                case "B100": $this->hoja["B100"] = $this->getHoja("Resultados")->getValor("M10");      break; 
                case "B101": $this->hoja["B101"] = $this->getHoja("Resultados")->getValor("M11");      break;     
                case "B102": $this->hoja["B102"] = $this->getHoja("Resultados")->getValor("M12");      break; 
                case "B103": $this->hoja["B103"] = $this->getHoja("Resultados")->getValor("M13");      break; 
                case "B104": $this->hoja["B104"] = $this->getHoja("Resultados")->getValor("M14");      break; 
                case "B105": $this->hoja["B105"] = $this->getHoja("Resultados")->getValor("M15");      break; 
                case "B106": $this->hoja["B106"] = $this->getHoja("Resultados")->getValor("M16");      break; 
                case "B107": $this->hoja["B107"] = $this->getHoja("Resultados")->getValor("M17");      break; 
                case "B108": $this->hoja["B108"] = $this->getHoja("Resultados")->getValor("M18");      break; 
                case "B109": $this->hoja["B109"] = $this->getHoja("Resultados")->getValor("M21");      break;  
                case "B110": $this->hoja["B110"] = $this->getHoja("Resultados")->getValor("M22");      break;  
                case "B111": $this->hoja["B111"] = $this->getHoja("Resultados")->getValor("M23");      break; 
                case "B112": $this->hoja["B112"] = $this->getHoja("Resultados")->getValor("M26");      break;  
                case "B113": $this->hoja["B113"] = $this->getHoja("Resultados")->getValor("M27");      break; 
                case "B114": $this->hoja["B114"] = $this->getHoja("Resultados")->getValor("M28");      break; 
                case "B115": $this->hoja["B115"] = $this->getHoja("Resultados")->getValor("M29");      break; 
                case "B116": $this->hoja["B116"] = $this->getHoja("Resultados")->getValor("M30");      break; 
                case "B117": $this->hoja["B117"] = $this->getHoja("Resultados")->getValor("M31");      break; 
                case "B118": $this->hoja["B118"] = $this->getHoja("Resultados")->getValor("M34");      break;                           
                case "B119": $this->hoja["B119"] = $this->getHoja("Resultados")->getValor("M35");      break; 
                case "B120": $this->hoja["B120"] = $this->getHoja("Resultados")->getValor("M36");      break; 
            
              // parte de abajo
              case "C68": $this->hoja["C68"] = $this->getHoja("Resultados")->getValor("F29")<85 ? 'No' : 'Si'  ;           break;
              case "C69": $this->hoja["C69"] = $this->getHoja("Resultados")->getValor("F26")<85 ? 'Si' : 'No'  ;           break;
              case "C70": $this->hoja["C70"] = $this->getHoja("Auxiliar")->getValor("C68")=='Si' && $this->getHoja("Auxiliar")->getValor("C69")=='Si' ? 'Verdadero' : 'Falso'  ;           break;
              case "C71": $this->hoja["C71"] = $this->getHoja("Auxiliar")->getValor("C68")=='Si' && $this->getHoja("Auxiliar")->getValor("C69")=='No' ? 'Verdadero' : 'Falso'   ;           break;
              case "C73": $this->hoja["C73"] = $this->getHoja("Datos")->getValor("F17")=='X' && $this->getHoja("Auxiliar")->getValor("D72")<26 ? 'Verdadero' : 'Falso'   ;           break;
              case "C74": $this->hoja["C74"] = $this->getHoja("Datos")->getValor("F18")=='X' && $this->getHoja("Auxiliar")->getValor("D72")<16 ? 'Verdadero' : 'Falso'   ;           break;
              case "C75": $this->hoja["C75"] = $this->getHoja("Datos")->getValor("F19")=='X' && $this->getHoja("Auxiliar")->getValor("D72")<16 ? 'Verdadero' : 'Falso'   ;           break;
              case "D70": $this->hoja["D70"] = $this->getHoja("Auxiliar")->getValor("C70")=='Verdadero' ? $this->getHoja("Resultados")->getValor("F29")-85 : 0   ;           break;
              case "D71": $this->hoja["D71"] = $this->getHoja("Auxiliar")->getValor("C71")=='Verdadero' ? $this->getHoja("Resultados")->getValor("F29")+$this->getHoja("Resultados")->getValor("F26")-170 : 0   ;           break;
              case "D72": $this->hoja["D72"] = $this->getHoja("Auxiliar")->getValor("D70")+ $this->getHoja("Auxiliar")->getValor("D71") ;    break;
              case "C73": $this->hoja["C73"] = $this->getHoja("Datos")->getValor("F17")=='X' && $this->getHoja("Auxiliar")->getValor("D72")<21 ? 'Verdadero' : 'Falso'   ;           break;
              case "C75": $this->hoja["C75"] = $this->getHoja("Datos")->getValor("F19")=='X' && $this->getHoja("Auxiliar")->getValor("D72")<11 ? 'Verdadero' : 'Falso'   ;           break;
              case "E73": $this->hoja["E73"] = $this->getHoja("Auxiliar")->getValor("C73")=='Verdadero' ? $this->getHoja("Resultados")->getValor("F10")-$this->getHoja("Auxiliar")->getValor("D72") : 0  ;           break;
              case "E74": $this->hoja["E74"] = $this->getHoja("Auxiliar")->getValor("C74")=='Verdadero' ? ($this->getHoja("Resultados")->getValor("F10")-$this->getHoja("Auxiliar")->getValor("D72") )/2 : 0  ;           break;
              case "E75": $this->hoja["E75"] = $this->getHoja("Auxiliar")->getValor("C75")=='Verdadero' ? $this->getHoja("Resultados")->getValor("F10")-$this->getHoja("Auxiliar")->getValor("D72") /4 : 0  ;           break;
              case "E76": $this->hoja["E76"] = round($this->getHoja("Auxiliar")->getValor("E74"));   break;
              case "E77": $resultado = $this->sumBetween($this->hoja, 'E73', 'E75');
                          $this->hoja["E77"] = $resultado;   
              break;
              case "E78": $this->hoja["E78"] = round($this->getHoja("Auxiliar")->getValor("E77"));   break;
          }
            
            
            
        }               
        
      }
}

?>
