<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HojaRespuestasMillon
 *
 * @author QwerfaqS
 */
class HojaRespuestasMillon {
    var $hoja;
//    public function __construct($respuestas) {
//        if(!is_array($respuestas)){
//            throw new sfException("Debe crearse con un array");
//        }
//        $this->hoja = $respuestas;
//    }
    /*
     * Constructor, inicializa el arreglo interno de celdas, con los resultados parciales pasados por parametros
     */
    public function __construct($resultadosParciales) {
        $respuestas = array();
        foreach ($resultadosParciales as $resultado) {
//            $resultado = new Resultadosparciales();
            $preguntas_id = $resultado->getPreguntasId();
            $opciones_id = $resultado->getOpcionesId();
            $criteria = new Criteria();
            $criteria->add(RespuestasPeer::PREGUNTAS_ID, $preguntas_id);
            $criteria->add(RespuestasPeer::OPCIONES_ID, $opciones_id);
            $respuesta = RespuestasPeer::doSelectOne($criteria);
            $celda = $respuesta->getCelda();
            $respuestas[$celda] = 1;
        }
        $this->hoja = $respuestas;
    }
    public function getValor($celda){
        if(!isset($this->hoja[$celda])){
            throw new sfException("No hay valor cargado para la celda: ".$celda);
        }
        return $this->hoja[$celda];
    }
}

?>
