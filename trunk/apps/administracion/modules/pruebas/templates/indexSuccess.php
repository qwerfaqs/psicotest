<h1>Pruebas List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Tests</th>
      <th>Evaluaciones</th>
      <th>Estadopruebas</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Pruebas as $Prueba): ?>
    <tr>
      <td><a href="<?php echo url_for('pruebas/show?id='.$Prueba->getId()) ?>"><?php echo $Prueba->getId() ?></a></td>
      <td><?php echo $Prueba->getTestsId() ?></td>
      <td><?php echo $Prueba->getEvaluacionesId() ?></td>
      <td><?php echo $Prueba->getEstadopruebasId() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('pruebas/new') ?>">New</a>
