<?php 
if(!isset($opciones))
    $opciones = null;
 include_partial($test,array('preguntas'=>$preguntas,'pagina'=>$pagina,'opciones'=>$opciones,'test'=>$test));

?>