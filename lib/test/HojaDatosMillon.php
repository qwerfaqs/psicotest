<?php
/**
 * Description of hojaDatosMillon
 *
 * @author QwerfaqS
 */
class HojaDatosMillon extends BaseHojaMillon {
    var $nombre = 'Datos';
    public function getValor($celda) {
        $valor = null;
        switch ($celda) {
            case "F12": // aca retorno Género:  "M" o "F"               
                break;
            case "F14": // Edad
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
