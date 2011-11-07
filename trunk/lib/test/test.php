<?php

/**
 * Description of test
 *
 * @author potich
 */
class test {

    public static function calcularDomino($respuestas) {
        $puntaje = 0;

        foreach ($respuestas as $resultado) 
        {
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
            $percentil = PercentilesPeer::getPercentilPorEscala($EscalaId, $valor);
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

    public static function calcularmillon($resultadosParciales) {
        $resultados = Test::cargarResultadosExcel($resultadosParciales);
        $aspirante = $resultadosParciales[0]->getAspirantes();
//        $aspirante = new Aspirantes();
        $edad = $aspirante->getEdad();
        $sexo = $aspirante->getSexo();
        $datos = array("G12" => $sexo, "G14" => $edad);
        $idAspirante = $aspirante->getId();
        $resultado = ResultadosPeer::getResultado($resultadosParciales[0]->getPruebas()->getId(), $aspirante->getId());
        $resultadoMillon = test::procesarMillon($resultados, $datos, $idAspirante); // esto me devuelve un arreglo con las escalas y sus valores
        $aprobado = true; // inicializo un marcador de aprobacion del test
//        var_dump($resultadoMillon); die();
        foreach ($resultadoMillon as $escala => $valor) {
            // Busco en la base de datos la escala correspondiente por nombre
            $criteria = new Criteria();
            $criteria->add(EscalasPeer::NOMBRE, $escala);
            $Escala = EscalasPeer::doSelectOne($criteria);
            // Creo el Resultadosescalas
            $result = new Resultadosescalas();
            $result->setEscalas($Escala); // le seteo la Escala
            $result->setValor($valor); // le seteo el valor
            $result->setResultados($resultado); // la asocio a el resultado general del test
            $result->save(); // lo guardo
            if($escala== "V" and $valor != 0){ // si saca algo distito a 0(cero) en la escala de validez, queda afuera
                $aprobado = false;
            }
            if($escala!= "V" and $valor > 70){ // si saca mas de 70 en cualquier otra escala, queda afuera
                $aprobado = false;
            }
            
        }
            // segun aprobado le sereo el estado del resultado Aprobacion o NO
            $resultado->setEstadosresultadosId($aprobado == true ? 1 : 2); // TODO: manopleado??
            $resultado->save(); // guardo el resultado
            
        // no me quedaria nada mas por hacer ya estaria todo guardado.
    }

    public static function procesarMillon($resultados, $datos, $idArchivoTemporal) {
        //pone el copiar archivo  copy ( string $source , string $dest [, resource $context ] )
        // el excel que anda bien es el que esta en C:\development\sfprojects\psicotest\lib\phpexel\php\baby.xlsx
        $dir = sfConfig::get("sf_lib_dir") . "/phpexel/php/"; // obtengo la ruta a donde estan alojados los xlsx
        $source = $dir . "baby.xls"; //ruta al archivo maestro  o base, mas conocido como "el original"
        $dest = $dir . "temp$idArchivoTemporal.xls"; //ruta al archivo copia de uso exclusivo de este usuario
        copy($source, $dest); //generero una nueva copia, si existia ya una antes, va a ser pisada, igualmente se lo va a eliminar luego de obtener los resultados
        $ex = new Excel(); // creamos el objeto para operar con el xlsx
        $obj = $ex->writeCells($datos, $dest, 0); //llena el excel con los datos personales y lo guarda
        $obj = $ex->writeCells($resultados, $obj, 1); // llena el excel con las respuestas y lo guarda para luego ser leido
        // Arreglo de las celdas a leer los resultados
        $celdas = array("V" => "D3", // Validez
//                        "X" => "M4", // Sinceridad
//                        "Y" => "M5", // Deseabilidad Social
//                        "Z" => "M6", // Autodescalificación
                        "1" => "M10", // Esquizoide
                        "2" => "M11", // Evitativo
                        "3" => "M12", // Dependiente
                        "4" => "M13", // Histriónico
                        "5" => "M14", // Narcisita
                        "6A" => "M15", // Antisocial
                        "6B" => "M16", // Agresivo-sádico
                        "7" => "M17", // Compulsivo
                        "8A" => "M18", // Pasivo-agresivo
                        "8B" => "M19", // Autoderrotista
                        "S" => "M22", // Esquizotípico
                        "C" => "M23", // Borderline
                        "P" => "M24", // Paranoide
                        "A" => "M27", // Ansiedad
                        "H" => "M28", // Somatoformo
                        "N" => "M29", // Bipolar
                        "D" => "M30", // Distimia
                        "B" => "M31", // Dependencia de alcohol
                        "T" => "M32", // Dependencia de drogas
                        "SS" => "M35", // Desorden del pensamiento
                        "CC" => "M36", // Depresión mayor
                        "PP" => "M37", // Desorden delusional
        );
        $finales = $ex->readCells($obj, $celdas, 3); // devuelve los resultados desde el xlsx copiado
        unlink($dest);
        return $finales;
    }

    public static function cargarResultadosExcel($resultadosParciales) {
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
        return($respuestas);
    }

}

?>