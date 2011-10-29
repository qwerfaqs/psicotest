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
            case "F12":  $valor = self::getHoja("Respuestas")->getValor("C63");
                break;
            case "F14":  
                break;
            case "F17":
            case "F18":
                break;
            case "F19":
                $valor = "X";
            default:
                $valor = parent::getValor($celda);
                break;
        }
        return $valor;
        
    }

}

?>
