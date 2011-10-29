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
                    $celdas = array( self::getHoja("Respuestas")->getValor("C63"),
                                     self::getHoja("Respuestas")->getValor("C91"),
                                     self::getHoja("Respuestas")->getValor("C153"),
                                     self::getHoja("Respuestas")->getValor("C170"));
                    $this->hoja["D2"]  = parent::sum($celdas);
            break;
            case "D9": 
                    $celdas = array( self::getHoja("Respuestas")->getValor("C2")*3,
                                     self::getHoja("Respuestas")->getValor("C11")*2,
                                     self::getHoja("Respuestas")->getValor("C14")*3,
                                     self::getHoja("Respuestas")->getValor("D15"),
                                     self::getHoja("Respuestas")->getValor("C17"),
                                     self::getHoja("Respuestas")->getValor("C20")*3,
                                     self::getHoja("Respuestas")->getValor("D21")*2,
                                     self::getHoja("Respuestas")->getValor("C23"),
                                     self::getHoja("Respuestas")->getValor("C26"),
                                     self::getHoja("Respuestas")->getValor("D29"),
                                     self::getHoja("Respuestas")->getValor("C34")*2,
                                     self::getHoja("Respuestas")->getValor("C35")*3,
                                     self::getHoja("Respuestas")->getValor("C47"),
                                     self::getHoja("Respuestas")->getValor("C48")*2,
                                     self::getHoja("Respuestas")->getValor("D49")*2,
                                     self::getHoja("Respuestas")->getValor("C54"),                       
                                     self::getHoja("Respuestas")->getValor("D61"),                       
                                     self::getHoja("Respuestas")->getValor("D79"),                                               
                                     self::getHoja("Respuestas")->getValor("C82")*3,                       
                                     self::getHoja("Respuestas")->getValor("C84")*2,                       
                                     self::getHoja("Respuestas")->getValor("C86"),                                               
                                     self::getHoja("Respuestas")->getValor("D96"),                       
                                     self::getHoja("Respuestas")->getValor("D104"),                       
                                     self::getHoja("Respuestas")->getValor("C107")*2,                                               
                                     self::getHoja("Respuestas")->getValor("C109"),                       
                                     self::getHoja("Respuestas")->getValor("D112"),                       
                                     self::getHoja("Respuestas")->getValor("C125")*2,                                               
                                     self::getHoja("Respuestas")->getValor("D126"),
                                     self::getHoja("Respuestas")->getValor("C142"),                                     
                                     self::getHoja("Respuestas")->getValor("C143"),                                     
                                     self::getHoja("Respuestas")->getValor("C144")*3,                                     
                                     self::getHoja("Respuestas")->getValor("C151")*2,                                     
                                     self::getHoja("Respuestas")->getValor("C160"),                                     
                                     self::getHoja("Respuestas")->getValor("C161"),                                     
                                     self::getHoja("Respuestas")->getValor("C162")*3,                                                                                                                                
                    );
                    $this->hoja["D9"]  = parent::sum($celdas);
            break;
        

            default:
                $valor = parent::getValor($celda);
                break;
        }
        return $valor;
        
    }

}

?>
