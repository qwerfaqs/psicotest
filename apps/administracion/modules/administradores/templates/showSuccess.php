<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Administradores->getId() ?></td>
    </tr>
    <tr>
      <th>Usuario:</th>
      <td><?php echo $Administradores->getUsuario() ?></td>
    </tr>
    <tr>
      <th>Password:</th>
      <td><?php echo $Administradores->getPassword() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $Administradores->getNombre() ?></td>
    </tr>
    <tr>
      <th>Apellido:</th>
      <td><?php echo $Administradores->getApellido() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a class="link"  href="<?php echo url_for('administradores/edit?id='.$Administradores->getId()) ?>">Editar</a>
&nbsp;
<a class="link" href="<?php echo url_for('administradores/index') ?>">Listado</a>
