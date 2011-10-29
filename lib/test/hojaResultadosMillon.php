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

            default:
                $valor = parent::getValor($celda);
                break;
        }
        return $valor;
        
    }

}

?>
