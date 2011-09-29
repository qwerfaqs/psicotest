<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Aspirante->getId() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $Aspirante->getNombre() ?></td>
    </tr>
    <tr>
      <th>Apellido:</th>
      <td><?php echo $Aspirante->getApellido() ?></td>
    </tr>
    <tr>
      <th>Cedula:</th>
      <td><?php echo $Aspirante->getCedula() ?></td>
    </tr>
    <tr>
      <th>Password:</th>
      <td><?php echo $Aspirante->getPassword() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('aspirantes/edit?id='.$Aspirante->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('aspirantes/index') ?>">List</a>
