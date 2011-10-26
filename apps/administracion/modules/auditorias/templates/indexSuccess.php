<h1>Auditoriass List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Objeto</th>
      <th>Tipooperacion</th>
      <th>Created at</th>
      <th>Descripcion</th>
      <th>Administradores</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Auditoriass as $Auditorias): ?>
    <tr>
      <td><a href="<?php echo url_for('auditorias/show?id='.$Auditorias->getId()) ?>"><?php echo $Auditorias->getId() ?></a></td>
      <td><?php echo $Auditorias->getObjeto() ?></td>
      <td><?php echo $Auditorias->getTipooperacion() ?></td>
      <td><?php echo $Auditorias->getCreatedAt() ?></td>
      <td><?php echo $Auditorias->getDescripcion() ?></td>
      <td><?php echo $Auditorias->getAdministradoresId() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('auditorias/new') ?>">New</a>
