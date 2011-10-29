<?php
/**
 * Description of hojaResultadosMillon
 *
 * @author QwerfaqS
 */
class HojaResultadosMillon extends BaseHojaMillon {
    var $nombre = 'Resultados';
    
     public function getValor($celda) {
        $valor = null;
        
        switch ($celda) 
        {
            case "D2": 
                    $celdas = array( $this->getHoja("Respuestas")->getValor("C63"),
                                     $this->getHoja("Respuestas")->getValor("C91"),
                                     $this->getHoja("Respuestas")->getValor("C153"),
                                     $this->getHoja("Respuestas")->getValor("C170"));
                    $this->hoja["D2"]  = $this->sum($celdas);
                    
            break;
            case "D9": 
                    $celdas = array( $this->getHoja("Respuestas")->getValor("C2")*3,
                                     $this->getHoja("Respuestas")->getValor("C11")*2,
                                     $this->getHoja("Respuestas")->getValor("C14")*3,
                                     $this->getHoja("Respuestas")->getValor("D15"),
                                     $this->getHoja("Respuestas")->getValor("C17"),
                                     $this->getHoja("Respuestas")->getValor("C20")*3,
                                     $this->getHoja("Respuestas")->getValor("D21")*2,
                                     $this->getHoja("Respuestas")->getValor("C23"),
                                     $this->getHoja("Respuestas")->getValor("C26"),
                                     $this->getHoja("Respuestas")->getValor("D29"),
                                     $this->getHoja("Respuestas")->getValor("C34")*2,
                                     $this->getHoja("Respuestas")->getValor("C35")*3,
                                     $this->getHoja("Respuestas")->getValor("C47"),
                                     $this->getHoja("Respuestas")->getValor("C48")*2,
                                     $this->getHoja("Respuestas")->getValor("D49")*2,
                                     $this->getHoja("Respuestas")->getValor("C54"),                       
                                     $this->getHoja("Respuestas")->getValor("D61"),                       
                                     $this->getHoja("Respuestas")->getValor("D79"),                                               
                                     $this->getHoja("Respuestas")->getValor("C82")*3,                       
                                     $this->getHoja("Respuestas")->getValor("C84")*2,                       
                                     $this->getHoja("Respuestas")->getValor("C86"),                                               
                                     $this->getHoja("Respuestas")->getValor("D96"),                       
                                     $this->getHoja("Respuestas")->getValor("D104"),                       
                                     $this->getHoja("Respuestas")->getValor("C107")*2,                                               
                                     $this->getHoja("Respuestas")->getValor("C109"),                       
                                     $this->getHoja("Respuestas")->getValor("D112"),                       
                                     $this->getHoja("Respuestas")->getValor("C125")*2,                                               
                                     $this->getHoja("Respuestas")->getValor("D126"),
                                     $this->getHoja("Respuestas")->getValor("C142"),                                     
                                     $this->getHoja("Respuestas")->getValor("C143"),                                     
                                     $this->getHoja("Respuestas")->getValor("C144")*3,                                     
                                     $this->getHoja("Respuestas")->getValor("C151")*2,                                     
                                     $this->getHoja("Respuestas")->getValor("C160"),                                     
                                     $this->getHoja("Respuestas")->getValor("C161"),                                     
                                     $this->getHoja("Respuestas")->getValor("C162")*3,                                                                                                                                
                    );
                    $this->hoja["D9"]  = $this->sum($celdas);
                    
            break;
        
        
        

            default:
                $valor = $this->getValor($celda);
                break;
        }
        return $valor;
        
    }

}

?>
