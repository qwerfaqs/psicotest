<?php

/**
 * Description of BaseHojaMillon
 *
 * @author QwerfaqS
 */
class BaseHojaMillon {
    /**
     * El nombre de la hoja actual
     * @var string
     */
    var $nombre = 'Hoja';
    /**
     *  Almacena las celdas internas de cada hoja
     *
     * @var array
     */
    var $hoja;
    /**
     *  Arreglo estatico que guarda las instancias de las hojas (contexto)
     *
     * @var array BaseHojaMillon[]
     */
    public static $hojas;

    public function __construct() {
        self::setHoja($this);
    }

    public function getNombre() {
        $this->nombre;
    }
    /**
     * Retorna la instancia de otra hoja del contexto
     *
     * @param      string $nombre Nombre de la hoja, es el declarado en el $nombre de cada subclase
     *
     * @return BaseHojaMillon
     */
    public function getHoja($nombre) {
        return self::$hojas[$nombre];
    }

    /**
     *  Metodo estatico para relacionar una hoja al contexto
     *
     * @param BaseHojaMillon $hoja
     */
    public static function setHoja(BaseHojaMillon $hoja) {
        if (!is_array(self::$hojas)) {
            self::$hojas = array();
        }
        self::$hojas[$hoja->getNombre()] = $hoja;
    }
    /**
     *  Retorna el valor para el nombre de celda dada
     *
     * @param string $celda Nombre completo de la celda a consultar
     * @return mixed Valor de la celda consultada
     */
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
    public function sumBetween($hoja, $desde, $hasta) {
        if (is_array($hoja)) {
            $respuesta = array();
            $col = $this->cell2col($desde);
            $filaDesde = $this->cell2row($desde);
            $filaHasta = $this->cell2row($hasta);
            for($i=$desde;$i<=$hasta;$i++){
                $respuesta[] = $hoja[$col.$i];
            }
            return array_sum($respuesta);
        } else
            throw new sfException("El parametro no es un arreglo: " . $celdas);
    }
    public function cell2row($celda){
        return ltrim($cell, "QWERTYUIOPASDFGHJKLÑZXCVBNM");
    }
    public function cell2col($celda){
        return rtrim($cell, "1234567890");
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    /**
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
    
    
    public function setRangoValores($columna,$resultados)
    {
     if(is_array($columna))
     {    
        foreach($resultados as  $key => $resultado) 
        {
           $this->hoja[$columna[$key]] = $resultado;
        }
     }        
    }
    // M9 TOMA EL VALOR DE  => F9
    public function refCelda($celdas,$celdavalores) 
    {
        if (is_array($celdavalores))
        {
            foreach($celdavalores as $key=>$valor)
            {
                $this->hoja[$celdas[$key]] =$this->hoja[$valor];
            }
        }

        else
            throw new sfException("El parametro no es un arreglo: " . $celdas);
        return $valor;
    }
    
    public function sumValores($valores,$constante) 
    {
        if (is_array($valores))
        {
            foreach($valores as $valor)
            {
                $valor = $valor + $constante;
            }
        }

        else
            throw new sfException("El parametro no es un arreglo: " . $celdas);
        return $valor;
    }
    
    /*
     * Devuelve un arreglo con los valores del rango especificado (inclusive)
     * 
     */
    public function getRangoValores($columna, $filadesde, $filahasta){
        $resultado = array();
        for($i = $filadesde;$i<=$filahasta;$i++) {
            $celda = $columna.$i; 
            $resultado[] = $this->getValor($celda);
        }
        return $resultado;
    }

}

?>
