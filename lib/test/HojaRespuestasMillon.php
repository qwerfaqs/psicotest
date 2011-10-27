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
class HojaRespuestasMillon extends BaseHojaMillon{
    var $nombre = 'Respuestas';
    

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
        parent::__construct();
    }

  
}

?>
