<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Prueba->getId() ?></td>
    </tr>
    <tr>
      <th>Tests:</th>
      <td><?php echo $Prueba->getTestsId() ?></td>
    </tr>
    <tr>
      <th>Evaluaciones:</th>
      <td><?php echo $Prueba->getEvaluacionesId() ?></td>
    </tr>
    <tr>
      <th>Estadopruebas:</th>
      <td><?php echo $Prueba->getEstadopruebasId() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('pruebas/edit?id='.$Prueba->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('pruebas/index') ?>">List</a>
