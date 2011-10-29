<?php

/**
 * Description of BaseHojaMillon
 *
 * @author QwerfaqS
 */
class BaseHojaMillon {

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

    public function sum($celdas) {
        if (is_array($celdas))
            $valor = array_sum($celdas);

        else
            throw new sfException("El parametro no es un arreglo: " . $celdas);
        return $valor;
    }

    public function sumBeetwen($hoja, $desde, $hasta) {
        if (is_array($hoja)) {
            $desde = array_search($desde, array_keys($hoja));
            $hasta = array_search($hasta, array_keys($hoja)) + 1;
            $hoja = array_slice($hoja, $desde, $hasta);
            $valor = array_sum($hoja);
        }
        else
            throw new sfException("El parametro no es un arreglo: " . $celdas);
        return $valor;
    }
    /*
     * Compara cada valor de $columna con $valor(y sea un elemento o un arreglo)
     * En caso positivo retorna $si o $no
     * tanto $valor, $si y $no pueden ser array() o valores simples
     * si son arreglos deberan estar todos ordenados u alineados por su clave
     */
    public function SiesIgualValorColumnas($columna, $valor, $si, $no){
        $resultado = array();
        foreach ($columna as $key => $value) { 
            
            if(is_array($valor)){
                if ($value == $valor[$key]){
                    if(is_array($si)){
                        $resultado[$key] = $si[$key];
                    }else {
                        $resultado[$key] = $si;
                    }
                }else {
                    if(is_array($no)){
                        $resultado[$key] = $no[$key];
                    }else {
                        $resultado[$key] = $no;
                    }
                }
            }else {
                if ($value == $valor){
                    if(is_array($si)){
                        $resultado[$key] = $si[$key];
                    }else {
                        $resultado[$key] = $si;
                    }
                }else {
                    if(is_array($no)){
                        $resultado[$key] = $no[$key];
                    }else {
                        $resultado[$key] = $no;
                    }
                }
            }
            
        }
        
        return $resultado;
    }

}

?>
