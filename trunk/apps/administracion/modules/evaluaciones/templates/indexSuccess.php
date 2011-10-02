<h1>Evaluaciones List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Cantidad</th>
      <th>Fecha</th>
      <th>Nombre</th>
      <th>Estadosevaluaciones</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Evaluaciones as $Evaluacion): ?>
    <tr>
      <td><a href="<?php echo url_for('evaluaciones/show?id='.$Evaluacion->getId()) ?>"><?php echo $Evaluacion->getId() ?></a></td>
      <td><?php echo $Evaluacion->getCantidad() ?></td>
      <td><?php echo $Evaluacion->getFecha() ?></td>
      <td><?php echo $Evaluacion->getNombre() ?></td>
      <td><?php echo $Evaluacion->getEstadosevaluacionesId() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('evaluaciones/new') ?>">New</a>
