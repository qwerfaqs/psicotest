<h1>Aspirantes List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Apellido</th>
      <th>Cedula</th>
      <th>Password</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Aspirantes as $Aspirante): ?>
    <tr>
      <td><a href="<?php echo url_for('aspirantes/show?id='.$Aspirante->getId()) ?>"><?php echo $Aspirante->getId() ?></a></td>
      <td><?php echo $Aspirante->getNombre() ?></td>
      <td><?php echo $Aspirante->getApellido() ?></td>
      <td><?php echo $Aspirante->getCedula() ?></td>
      <td><?php echo $Aspirante->getPassword() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('aspirantes/new') ?>">New</a>
