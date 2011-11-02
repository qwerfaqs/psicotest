<?php

/**
 * Description of test
 *
 * @author potich
 */
class test {

    public static function calcularDomino($respuestas) {
        $puntaje = 0;

        foreach ($respuestas as $resultado) {
            $pregunta = $resultado->getPreguntas();
            $estado = sfConfig::get('app_activo');
            $respuesta = RespuestasPeer::getRespuesta($pregunta->getId(), $estado);

            if ($resultado->getOpciones()->getTexto() == $respuesta->getOpciones()->getTexto()) {
                $puntaje = $puntaje + 2.857142857142857;
            }
        }
        /*
         * Si al tipo se le acabo el tiempo y no respondio nada tira error porque no existe el indice 0
         */
        Test::grabarPuntaje($puntaje, $respuestas[0]->getPruebas(), $respuestas[0]->getAspirantesId());
    }

    public static function aprobacion($prueba, $puntaje) {
        $aprobacion = $prueba->getTests()->getPuntajeAprobacion();

        if ($puntaje >= $aprobacion) {
            $estado = sfConfig::get('app_resultado_apto');
            return($estado);
        } else {
            $estado = sfConfig::get('app_resultado_noapto');
            return($estado);
        }
    }

    public static function calcularig2($respuestas) {
        $puntaje = 0;

        foreach ($respuestas as $resultado) {
            $pregunta = $resultado->getPreguntas();
            $estado = sfConfig::get('app_activo');
            $respuesta = RespuestasPeer::getRespuesta($pregunta->getId(), $estado);
            if ($resultado->getOpciones()->getTexto() == $respuesta->getOpciones()->getTexto()) {
                $puntaje = $puntaje + 1;
            }
        }

        $percentil = PercentilesPeer::getPercentil($respuestas[0]->getPruebas()->getTests()->getId(), $puntaje);
        Test::grabarPuntaje($percentil[0]->getPercentil(), $respuestas[0]->getPruebas(), $respuestas[0]->getAspirantesId());
    }

    public static function calcularbarsit($respuestas) {
        Test::calcularig2($respuestas);
    }

    /*
     * Calcula los resultados del test 16pf
     * $respuestas son Resultadosparciales
     */

    public static function calcular16pf($resultadosParciales) {
        $Escalas = array(); // arreglo para guardar los objetos Escalas
        $resultadosEscalas = array(); // arreglo para guardar los resultados por cada Objeto Escala
//     $r = new Resultadosparciales();
        $prueba = $resultadosParciales[0]->getPruebas(); // la prueba actual
        $aspirante = $resultadosParciales[0]->getAspirantes(); // el aspirante actual
        $aspirantes_id = $aspirante->getId(); // el id de aspirante
        $pruebas_id = $prueba->getId(); // el id de la prueba
        $perfil = $prueba->getEvaluaciones()->getPerfil(); // el perfil en el cual se esta evaluando
        $criteria = new Criteria(); // creo una nueva consulta 
        $criteria->add(ResultadosPeer::ASPIRANTES_ID, $aspirantes_id);
        $criteria->add(ResultadosPeer::PRUEBAS_ID, $pruebas_id);
        $resultado = ResultadosPeer::doSelectOne($criteria); // me traigo el Resultado para
        foreach ($resultadosParciales as $resultadoParcial) { // por cada resultado parcial obtengo la respuesta
//          $respuesta = new Respuestas();
//          $resultadoParcial = new Resultadosparciales();
            $preguntas_id = $resultadoParcial->getPreguntasId();
            $opciones_id = $resultadoParcial->getOpcionesId();
            $criteria = new Criteria();
            $criteria->add(RespuestasPeer::PREGUNTAS_ID, $preguntas_id);
            $criteria->add(RespuestasPeer::OPCIONES_ID, $opciones_id);
            $respuesta = RespuestasPeer::doSelectOne($criteria); 

            $Respuestasescalas = $respuesta->getRespuestasescalass();  //cuando ya tengo la respuestas le pido las RespuestasEscalas
//          echo $Respuestasescalas[0];
//          die();

            foreach ($Respuestasescalas as $Respuestaescala) { // por cada Respuesta escala
//              $Respuestaescala = new Respuestasescalas();
//              var_dump($Respuestaescala->getEscalas());
                //die();
                $Escalas[$Respuestaescala->getEscalas()->getId()] = $Respuestaescala->getEscalas(); // Guardo la escala en el arreglo
                //
                $resultadosEscalas[$Respuestaescala->getEscalas()->getId()] = (isset($resultadosEscalas[$Respuestaescala->getEscalas()->getId()]) ? $resultadosEscalas[$Respuestaescala->getEscalas()->getId()] : 0) + $Respuestaescala->getValor();
            }
//            die();
        }
//      $percentiles_por_escala = array();
        $aprobado_general = true;

        foreach ($resultadosEscalas as $EscalaId => $valor) {
            $Escala = $Escalas[$EscalaId];
            $Resultadosescalas = new Resultadosescalas();
            $Resultadosescalas->setEscalas($Escala);
            $Resultadosescalas->setResultados($resultado);
            //$Resultadosescalas->setValor($valor);
            $percentil = PercentilesPeer::getPercentilPorEscala($Escala, $valor);
//          $percentil = new Percentiles();
//          $percentil->getPercentil();
//          $percentiles_por_escala[$Escala] = $percentil->getPercentil();
            $Resultadosescalas->setValor($percentil->getPercentil());
            $Resultadosescalas->save();
            $aprobado = PercentilesPeer::evaluarValorEsperado($perfil, $percentil); // devuelve true si aprobo, sino false
            if ($aprobado === false) {
                $aprobado_general = false;
            }
        }
        if ($aprobado_general === true) {
//            $prueba = new Tests();
            $result = ResultadosPeer::getResultado($prueba->getTestsId(), $aspirante);
            $result->setEstadosresultadosId(sfConfig::get('app_resultado_apto'));
            $result->save();
        }
    }

    /*
     * Calcula los resultados para 1 sola Escala del 16pf
     */

    public static function calcularPorEscala16pf($respuestas, $escala) {
        foreach ($respuestas as $respuesta) {
//          $respuesta = new Respuestas();
            $Respuestasescalas = $respuesta->getRespuestasescalassJoinEscalas();
            foreach ($Respuestasescalas as $Respuestaescala) {
//              $Respuestaescala = new Respuestasescalas();
                $Respuestaescala->getEscalas();
            }
        }
    }

    public static function calculareae1($intensidades) {
        $puntaje = 0;
        $sumaint = 0;
        foreach ($intensidades as $intensidad) {
            $pregunta = $intensidad->getResultadosparciales()->getPreguntas();
            $estado = sfConfig::get('app_activo');

            $respuesta = RespuestasPeer::getRespuesta($pregunta->getId(), $estado);

            if ($intensidad->getResultadosparciales()->getOpciones()->getTexto() == $respuesta->getOpciones()->getTexto()) {
                $puntaje = $puntaje + 1;
            }
            $sumaint = $sumaint + $intensidad->getOpciones()->getTexto();
        }
        $puntaje = $puntaje + $sumaint;
        $percentil = PercentilesPeer::getPercentil($intensidades[0]->getResultadosparciales()->getPruebas()->getTests()->getId(), $puntaje);

        Test::grabarPuntaje($percentil[0]->getPercentil(), $intensidades[0]->getResultadosparciales()->getPruebas(), $intensidades[0]->getResultadosparciales()->getAspirantesId());
    }

    public static function calcularrazonamientoverbal($respuestas) {
        Test::calcularrazonamientoabstracto($respuestas);
    }

    public static function calcularrazonamientoabstracto($respuestas) {
        $puntaje = 0;
        foreach ($respuestas as $resultado) {
            $pregunta = $resultado->getPreguntas();
            $estado = sfConfig::get('app_activo');
            $respuesta = RespuestasPeer::getRespuesta($pregunta->getId(), $estado);
            if ($resultado->getOpciones()->getTexto() == $respuesta->getOpciones()->getTexto()) {
                $puntaje = $puntaje + 0.44;
            }
        }
        Test::grabarPuntaje($puntaje, $respuestas[0]->getPruebas(), $respuestas[0]->getAspirantesId());
    }

    public static function calcularrazonamientonumerico($respuestas) {
        Test::calcularrazonamientoabstracto($respuestas);
    }

    public static function calcularraven($respuestas) {
        Test::calcularig2($respuestas);
    }

    public static function calcularmonedas($respuestas) {
        $puntaje = 0;

        foreach ($respuestas as $resultado) {
            $pregunta = $resultado->getPreguntas();
            $estado = sfConfig::get('app_activo');
            $respuesta = RespuestasPeer::getRespuesta($pregunta->getId(), $estado);

            if ($resultado->getOpciones()->getTexto() == $respuesta->getOpciones()->getTexto()) {
                $puntaje = $puntaje + 1;
            }
        }
        $puntaje = ($puntaje * 100) / 40;
        Test::grabarPuntaje($puntaje, $respuestas[0]->getPruebas(), $respuestas[0]->getAspirantesId());
    }

    public static function calcularanalogiasverbales($respuestas) {
        Test::calcularbabybase($respuestas);
    }

    public static function calcularcompletaroraciones($respuestas) {
        Test::calcularbabybase($respuestas);
    }

    public static function calcularencajarfiguras($respuestas) {
        Test::calcularbabybase($respuestas);
    }

    public static function calcularmatriceslogicas($respuestas) {

        Test::calcularbabybase($respuestas);
    }

    public static function calcularseriesnumericas($respuestas) {
        Test::calcularbabybase($respuestas);
        // Como es el ultimo test le pongo aprobado o desaprobado
        $resultado = ResultadosPeer::getResultado($respuestas[0]->getPruebas()->getId(), $respuestas[0]->getAspirantes()->getId());
        $resultadosescalas = ResultadosescalasPeer::getResultados($resultado->getId());
        $aprobado = 0;
        foreach ($resultadosescalas as $resultadoe) {
            if ($resultadoe->getValor() >= $resultadoe->getEscalas()->getTests()->getPuntajeaprobacion()) {
                $aprobado++;
            }
        }
        if ($aprobado == 6) {
            $resultado->setEstadosresultadosId(1);
            $resultado->save();
        }
    }

    public static function calcularproblemasnumericos($respuestas) {
        Test::calcularbabybase($respuestas);
    }

    public static function calcularbabybase($respuestas) {
        $puntaje = 0;

        foreach ($respuestas as $resultado) {
            $pregunta = $resultado->getPreguntas();
            $estado = sfConfig::get('app_activo');
            $respuesta = RespuestasPeer::getRespuesta($pregunta->getId(), $estado);

            if ($resultado->getOpciones()->getTexto() == $respuesta->getOpciones()->getTexto()) {
                $puntaje = $puntaje + 1;
            }
        }
        $percentil = PercentilesPeer::getPercentil($respuestas[0]->getPreguntas()->getTests()->getId(), $puntaje);
        $resultado = ResultadosPeer::getResultado($respuestas[0]->getPruebas()->getId(), $respuestas[0]->getAspirantes()->getId());
        $result = new Resultadosescalas();
        $result->setResultados($resultado);
        $result->setEscalas($percentil[0]->getEscalas());
        $result->setValor($percentil[0]->getPercentil());
        $result->save();
    }

    public static function grabarPuntaje($puntaje, $prueba, $aspirante) {
        $result = ResultadosPeer::getResultado($prueba->getId(), $aspirante);
        $puntaje = $puntaje + $result->getPuntaje();
        $result->setPuntaje($puntaje);
        $result->setEstadosresultadosId(Test::aprobacion($prueba, $puntaje));
        $result->save();
    }

    public static function calcularmillon($resultadosParciales) 
    {
    
        $respuestas = array();
        foreach ($resultadosParciales as $resultado) 
        {
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
    }  
        
        
   
}

?>