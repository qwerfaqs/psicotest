<?php
/**
 * Description of BaseHojaMillon
 *
 * @author QwerfaqS
 */
class BaseHojaMillon  {

    var $nombre = 'Hoja';
    var $hoja;
    public static $hojas;
    
    public function __construct() {
        self::setHoja($this);
    }
    public function getNombre() {
        $this->nombre;
    }

    public function getHoja($nombre) {
        return self::$hojas[$nombre];
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
    
    public function sum($celdas) 
    {
        if (is_array($celdas)) 
          $valor = array_sum($celdas);
       
        else 
            throw new sfException("El parametro no es un arreglo: " . $celdas);
        return $valor;
    }
    
    public function sumBeetwen($hoja,$desde,$hasta) 
    {        
       if (is_array($hoja)) 
        {            
            $desde = array_search($desde, array_keys($hoja));
            $hasta = array_search($hasta, array_keys($hoja))+1;           
            $hoja = array_slice($hoja,$desde,$hasta);         
            $valor = array_sum($hoja);
        }
        else 
            throw new sfException("El parametro no es un arreglo: " . $celdas);
        return $valor;
       
    }

}

?>
