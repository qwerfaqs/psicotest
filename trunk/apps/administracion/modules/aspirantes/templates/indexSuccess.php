<table summary="Submitted table designs">
    <caption><h3>Aspirantes</h3></caption>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Cedula</th>
            <th scope="col">Password</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th scope="row">Total</th>
            <td colspan="4"><?php echo count($Aspirantess) ?> aspirantes</td>
        </tr>
    </tfoot>
    <tbody>
    <?php foreach ($Aspirantess as $i=>$Aspirantes): ?>
    
       <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">  
      <td><a href="<?php echo url_for('aspirantes/show?id='.$Aspirantes->getId()) ?>"><?php echo $Aspirantes->getId() ?></a></td>
        <th scope="row" id="<?php echo $Aspirantes->getId() ?>"><a href="<?php echo url_for('aspirantes/show?id=' . $Aspirantes->getId()) ?>"><?php echo $Aspirantes->getNombre() ?></a></th>
      <td><?php echo $Aspirantes->getApellido() ?></td>
      <td><?php echo $Aspirantes->getCedula() ?></td>
      <td><?php echo $Aspirantes->getPassword() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a class="link" href="<?php echo url_for('aspirantes/new') ?>">Nuevo</a>
