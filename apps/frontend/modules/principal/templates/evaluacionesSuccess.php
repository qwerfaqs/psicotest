<?php
$evaluacion = $asistencia->getEvaluaciones();
  ?>
<a href="<?php echo url_for('evaluacion',$evaluacion) ?>" ><?php echo $evaluacion->getNombre(); ?></a>



 

