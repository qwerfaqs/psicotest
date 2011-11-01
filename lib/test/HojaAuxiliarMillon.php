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
              
              case "F73": $this->hoja["F73"] = $this->getHoja("Auxiliar")->getValor("C73")=='Verdadero' ? $this->getHoja("Resultados")->getValor("F18")-$this->getHoja("Auxiliar")->getValor("D72") : 0   ;           break;
              case "F74": $this->hoja["F74"] = $this->getHoja("Auxiliar")->getValor("C74")=='Verdadero' ? $this->getHoja("Resultados")->getValor("F18")-$this->getHoja("Auxiliar")->getValor("D72")/2 : 0   ;           break;
              case "F75": $this->hoja["F75"] = $this->getHoja("Auxiliar")->getValor("C75")=='Verdadero' ? $this->getHoja("Resultados")->getValor("F18")-$this->getHoja("Auxiliar")->getValor("D72")/4 : 0   ;           break;
              case "F76": $this->hoja["F76"] = round($this->getHoja("Auxiliar")->getValor("F74") ) ;           break;
              case "F77": $resultado = $this->sumBetween($this->hoja, 'F73', 'F75');
                          $this->hoja["F77"] = $resultado;              break;
              case "F78": $this->hoja["F78"] = round($this->getHoja("Auxiliar")->getValor("F77"));   break;
          
          
              case "G73": $this->hoja["G73"] = $this->getHoja("Auxiliar")->getValor("D73")=='Verdadero' ? $this->getHoja("Resultados")->getValor("G22")-$this->getHoja("Auxiliar")->getValor("D72") : 0   ;           break;
              case "G74": $this->hoja["G74"] = $this->getHoja("Auxiliar")->getValor("D74")=='Verdadero' ? $this->getHoja("Resultados")->getValor("G22")-$this->getHoja("Auxiliar")->getValor("D72")*3/2 : 0   ;           break;
              case "G75": $this->hoja["G75"] = $this->getHoja("Auxiliar")->getValor("D75")=='Verdadero' ? $this->getHoja("Resultados")->getValor("G22")-$this->getHoja("Auxiliar")->getValor("D72")/2 : 0   ;           break;              
              case "G77": $resultado = $this->sumBetween($this->hoja, 'G73', 'G75');
                          $this->hoja["G77"] = $resultado;              break;
              case "G78": $this->hoja["G78"] = round($this->getHoja("Auxiliar")->getValor("G77"));   break;
          
              //DD
            case "C80": $this->hoja["C80"] = ($this->getHoja("Resultados")->getValor("D4")-$this->getHoja("Resultados")->getValor("D5") ) /10;   break;
            case "C81": $this->hoja["C81"] = round($this->getHoja("Auxiliar")->getValor("C80"));     break;
              
          // DC1
         
          case "C83": $this->hoja["C83"] = $this->getHoja("Resultados")->getValor("F12")>$this->getHoja("Resultados")->getValor("F9") && $this->getHoja("Resultados")->getValor("F12")>$this->getHoja("Resultados")->getValor("H10")&&$this->getHoja("Resultados")->getValor("F12")>$this->getHoja("Resultados")->getValor("F11")&&$this->getHoja("Resultados")->getValor("F12")>$this->getHoja("Resultados")->getValor("F13")&&$this->getHoja("Resultados")->getValor("F12")>$this->getHoja("Resultados")->getValor("F14")&&$this->getHoja("Resultados")->getValor("F12")>$this->getHoja("Resultados")->getValor("F15")&&$this->getHoja("Resultados")->getValor("F12")>$this->getHoja("Resultados")->getValor("F16")&&$this->getHoja("Resultados")->getValor("F12")>$this->getHoja("Resultados")->getValor("F17")&&$this->getHoja("Resultados")->getValor("F12")>$this->getHoja("Resultados")->getValor("H18")  ? 'Verdadero' : 'Falso'   ;         break;
          case "C84": $this->hoja["C84"] =   $this->getHoja("Resultados")->getValor("F16")>$this->getHoja("Resultados")->getValor("F9") ? 1 : 0;
          case "C85": $this->hoja["C85"] =   $this->getHoja("Auxiliar")->getValor("L84")>7 ? 'Si' : 'No';
          case "C86": $this->hoja["C86"] =   $this->getHoja("Auxiliar")->getValor("E83")=='Verdadero' ||  $this->getHoja("Auxiliar")->getValor("C85")=='Si' ? 'Verdadero' : 'Falso';                       
          case "D83": $this->hoja["D83"] = $this->getHoja("Resultados")->getValor("F13")>$this->getHoja("Resultados")->getValor("F9") && $this->getHoja("Resultados")->getValor("F13")>$this->getHoja("Resultados")->getValor("H10")&&$this->getHoja("Resultados")->getValor("F13")>$this->getHoja("Resultados")->getValor("F11")&&$this->getHoja("Resultados")->getValor("F13")>$this->getHoja("Resultados")->getValor("F12")&&$this->getHoja("Resultados")->getValor("F13")>$this->getHoja("Resultados")->getValor("F14")&&$this->getHoja("Resultados")->getValor("F13")>$this->getHoja("Resultados")->getValor("F15")&&$this->getHoja("Resultados")->getValor("F13")>$this->getHoja("Resultados")->getValor("F16")&&$this->getHoja("Resultados")->getValor("F13")>$this->getHoja("Resultados")->getValor("F17")&&$this->getHoja("Resultados")->getValor("F13")>$this->getHoja("Resultados")->getValor("H18")  ? 'Verdadero' : 'Falso'   ;         break;                  
          case "D84": $this->hoja["D84"] =   $this->getHoja("Resultados")->getValor("F16")>$this->getHoja("Resultados")->getValor("H10") ? 1 : 0;
        
          case "E83": $this->hoja["E83"] = $this->getHoja("Resultados")->getValor("C83")=='Verdadero' || $this->getHoja("Resultados")->getValor("D83")=='Verdadero' ? 'Verdadero' : 'Falso'   ;         break;          
         
          case "E84": $this->hoja["E84"] = $this->getHoja("Resultados")->getValor("F16")>$this->getHoja("Resultados")->getValor("F11") ? 1: 0   ;         break;          

          case "F84": $this->hoja["F84"] = $this->getHoja("Resultados")->getValor("F16")>$this->getHoja("Resultados")->getValor("F12") ? 1: 0   ;         break;          

          case "G84": $this->hoja["F84"] = $this->getHoja("Resultados")->getValor("F16")>$this->getHoja("Resultados")->getValor("F13") ? 1: 0   ;         break;          

          case "H84": $this->hoja["F84"] = $this->getHoja("Resultados")->getValor("F16")>$this->getHoja("Resultados")->getValor("F14") ? 1: 0   ;         break;          
          
          case "I84": $this->hoja["I84"] = $this->getHoja("Resultados")->getValor("F16")>$this->getHoja("Resultados")->getValor("F15") ? 1: 0   ;         break;          
          
          case "J84": $this->hoja["J84"] = $this->getHoja("Resultados")->getValor("F16")>$this->getHoja("Resultados")->getValor("F17") ? 1: 0   ;         break;          
          
          case "K84": $this->hoja["K84"] = $this->getHoja("Resultados")->getValor("F16")>$this->getHoja("Resultados")->getValor("H18") ? 1: 0   ;         break;          
          
         case "L84": $this->hoja["L84"] = $resultado = $this->sumBetween($this->hoja, 'C84', 'K84');
                          $this->hoja["L84"] = $resultado;              break;
                 
        //DC II
                      
          case "C88": $this->hoja["C88"] = $this->getHoja("Resultados")->getValor("H18")>$this->getHoja("Resultados")->getValor("F9") && $this->getHoja("Resultados")->getValor("H18")>$this->getHoja("Resultados")->getValor("H10")&&$this->getHoja("Resultados")->getValor("H18")>$this->getHoja("Resultados")->getValor("F11")&&$this->getHoja("Resultados")->getValor("H18")>$this->getHoja("Resultados")->getValor("F13")&&$this->getHoja("Resultados")->getValor("H18")>$this->getHoja("Resultados")->getValor("F14")&&$this->getHoja("Resultados")->getValor("H18")>$this->getHoja("Resultados")->getValor("F15")&&$this->getHoja("Resultados")->getValor("H18")>$this->getHoja("Resultados")->getValor("F16")&&$this->getHoja("Resultados")->getValor("H18")>$this->getHoja("Resultados")->getValor("F17")&&$this->getHoja("Resultados")->getValor("H18")>$this->getHoja("Resultados")->getValor("H18")  ? 'Verdadero' : 'Falso'   ;         break;
          
          case "C89": $this->hoja["C89"] =   $this->getHoja("Resultados")->getValor("H10")>$this->getHoja("Resultados")->getValor("F9") ? 1 : 0;
         
          case "C90": $this->hoja["C90"] =   $this->getHoja("Auxiliar")->getValor("L89")>7 ? 'Si' : 'No';
        
          case "C91": $this->hoja["C91"] =   $this->getHoja("Auxiliar")->getValor("C88")=='Verdadero' ||  $this->getHoja("Auxiliar")->getValor("C90")=='Si' ? 'Verdadero' : 'Falso';                       
         
          
          case "D89": $this->hoja["D89"] =   $this->getHoja("Resultados")->getValor("H10")>$this->getHoja("Resultados")->getValor("F11") ? 1 : 0;
        
          case "E89": $this->hoja["E89"] = $this->getHoja("Resultados")->getValor("H10") >$this->getHoja("Resultados")->getValor("F12") ? 1 : 0   ;         break;          
         
          case "F89": $this->hoja["F89"] = $this->getHoja("Resultados")->getValor("H10")>$this->getHoja("Resultados")->getValor("F13") ? 1: 0   ;         break;          

          case "G89": $this->hoja["G89"] = $this->getHoja("Resultados")->getValor("H10")>$this->getHoja("Resultados")->getValor("F14") ? 1: 0   ;         break;          
      
          case "H89": $this->hoja["H89"] = $this->getHoja("Resultados")->getValor("H10")>$this->getHoja("Resultados")->getValor("F15") ? 1: 0   ;         break;          
                    
          case "I89": $this->hoja["I89"] = $this->getHoja("Resultados")->getValor("H10")>$this->getHoja("Resultados")->getValor("F16") ? 1: 0   ;         break;          
          
          case "J89": $this->hoja["J89"] = $this->getHoja("Resultados")->getValor("H10")>$this->getHoja("Resultados")->getValor("F17") ? 1: 0   ;         break;          
          
          case "K89": $this->hoja["K89"] = $this->getHoja("Resultados")->getValor("H10")>$this->getHoja("Resultados")->getValor("H18") ? 1: 0   ;         break;          
                                 
          case "L89":  $resultado = $this->sumBetween($this->hoja, 'C89', 'K89  ');
                          $this->hoja["L89"] = $resultado;              break;
                                
            // DP             
          case "C93": $this->hoja["C93"] = $this->getHoja("Datos")->getValor("F17")=='X' ? 'Si': 'No'   ;         break;                       
          case "C94": $this->hoja["C94"] = $this->getHoja("Datos")->getValor("F18")=='X' ? 'Si': 'No'   ;         break;                         
          case "D93": $this->hoja["D93"] = $this->getHoja("Auxiliar")->getValor("C93")=='Si' ? 8: 0  ;         break;                          
          case "D94": $this->hoja["D94"] = $this->getHoja("Auxiliar")->getValor("C94")=='Si' ? 5: 0  ;         break;                           
          case "D95":  $resultado = $this->sumBetween($this->hoja, 'D93', 'D94  ');
                          $this->hoja["D95"] = $resultado;              break;
                      
          case "E93": $this->hoja["E93"] = $this->getHoja("Auxiliar")->getValor("C93")=='Si' ? 10: 0  ;         break;                          
          case "E94": $this->hoja["E94"] = $this->getHoja("Auxiliar")->getValor("C94")=='Si' ? 7: 0  ;         break;                           
          case "E95":  $resultado = $this->sumBetween($this->hoja, 'E93', 'E94  ');
                          $this->hoja["E95"] = $resultado;              break;            
          
       case "F93": $this->hoja["F93"] = $this->getHoja("Auxiliar")->getValor("C93")=='Si' ? 4: 0  ;         break;                              
        case "F94": $this->hoja["F94"] = $this->getHoja("Auxiliar")->getValor("C94")=='Si' ? 2: 0  ;         break;                              
     
     case "F95":  $resultado = $this->sumBetween($this->hoja, 'F93', 'F94  ');
                          $this->hoja["F95"] = $resultado;              break;    
    
    // YESSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS TERMINE ESTA MIERDA
    
    }
            
            
            
        }               
        
      }
}

?>
