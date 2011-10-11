<table summary="Submitted table designs">
    <caption><h3>Administradores</h3></caption>
    <thead>
        <tr>            
            <th scope="col">Usuario</th>
            <th scope="col">Password</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th scope="row">Total</th>
            <td colspan="4"><?php echo count($Administradoress) ?> administradores</td>
        </tr>
    </tfoot>
    <tbody>
    <?php foreach ($Administradoress as $i => $Administradores): ?>
     <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">      
      <th scope="row" id="<?php echo $Administradores->getId() ?>"><a href="<?php echo url_for('administradores/show?id=' . $Administradores->getId()) ?>"><?php echo $Administradores->getUsuario() ?></a></th>
      <td><?php echo $Administradores->getPassword() ?></td>
      <td><?php echo $Administradores->getNombre() ?></td>
      <td><?php echo $Administradores->getApellido() ?></td>
    </tr>
    <?php endforeach; ?>
   </tbody>
    </table>

    <a href="<?php echo url_for('administradores/new') ?>" class="link">Crear Nuevo administrador</a>
