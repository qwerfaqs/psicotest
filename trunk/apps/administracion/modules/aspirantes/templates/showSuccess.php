<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Aspirantes->getId() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $Aspirantes->getNombre() ?></td>
    </tr>
    <tr>
      <th>Apellido:</th>
      <td><?php echo $Aspirantes->getApellido() ?></td>
    </tr>
    <tr>
      <th>Cedula:</th>
      <td><?php echo $Aspirantes->getCedula() ?></td>
    </tr>
    <tr>
      <th>Password:</th>
      <td><?php echo $Aspirantes->getPassword() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a class="link" href="<?php echo url_for('aspirantes/edit?id='.$Aspirantes->getId()) ?>">Editar</a>
&nbsp;
<a class="link" href="<?php echo url_for('aspirantes/index') ?>">Listado</a>
