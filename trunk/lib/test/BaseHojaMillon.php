<?php
/**
 * Description of BaseHojaMillon
 *
 * @author QwerfaqS
 */
class BaseHojaMillon  {

    var $nombre = 'Hoja';
    var $hoja;
    static $hojas;
    
    public function __construct() {
        self::setHoja($this);
    }
    public function getNombre() {
        $this->nombre;
    }

    public function getHoja($nombre) {
        return self::$hoja[$nombre];
    }

    public static function setHoja(BaseHojaMillon $hoja) {
        if (!is_array(self::$hojas)) {
            self::$hojas = array();
        }
        self::$hojas[$hoja->getNombre()] = $hoja;
    }

    public function getValor($celda) {
        if (!isset($this->hoja[$celda])) {
            throw new sfException("No hay valor cargado para la celda: " . $celda);
        }
        return $this->hoja[$celda];
    }

}

?>
