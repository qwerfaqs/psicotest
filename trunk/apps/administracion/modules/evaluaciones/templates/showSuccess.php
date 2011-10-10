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
      <th>Estado:</th>
      <td><?php echo $Evaluacion->getEstadosevaluaciones()->getNombre() ?></td>
    </tr>
    <tr>
      <th>Perfil:</th>
      <td><?php /* $Evaluacion = new Evaluaciones(); */ echo $Evaluacion->getPerfil()->getNombre()?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('evaluaciones/edit?id='.$Evaluacion->getId()) ?>" class="link">Editar</a>
&nbsp;
<a href="<?php echo url_for('evaluaciones/index') ?>"class="link">Listado</a>
<a href="<?php echo url_for('evaluaciones/testList?id='.$Evaluacion->getId()) ?>" class="link">Ver Pruebas Asignadas</a>
<a href="<?php echo url_for('evaluaciones/aspirantesList?id='.$Evaluacion->getId()) ?>"class="link">Ver Aspirantes Asignados</a>
