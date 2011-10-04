<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Evaluacion->getId() ?></td>
    </tr>
    <tr>
      <th>Cantidad:</th>
      <td><?php echo $Evaluacion->getCantidad() ?></td>
    </tr>
    <tr>
      <th>Fecha:</th>
      <td><?php echo $Evaluacion->getFecha() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $Evaluacion->getNombre() ?></td>
    </tr>
    <tr>
      <th>Estadosevaluaciones:</th>
      <td><?php echo $Evaluacion->getEstadosevaluacionesId() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('evaluaciones/edit?id='.$Evaluacion->getId()) ?>">Editar</a>
&nbsp;
<a href="<?php echo url_for('evaluaciones/index') ?>">Listado</a>
<a href="<?php echo url_for('evaluaciones/testList?id='.$Evaluacion->getId()) ?>">Ver Pruebas Asignadas</a>
