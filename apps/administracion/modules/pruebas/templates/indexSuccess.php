<table summary="Submitted table designs">
    <caption><h3>Pruebas de la evaluacion </h3></caption>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Test</th>                        
            <th scope="col">Estado</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th scope="row">Total</th>
            <td colspan="4"><?php echo count($Pruebas) ?> pruebas</td>
        </tr>
    </tfoot>
    <tbody>
    <?php foreach ($Pruebas as $i =>$Prueba): ?>
    <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
      <td><?php echo $Prueba->getId() ?></a></td>
        <th scope="row" id="<?php echo $Prueba->getId() ?>"><a href="<?php echo url_for('pruebas/aspirantes?id=' . $Prueba->getId()) ?>"><?php echo $Prueba->getTests()->getTitulo() ?></a></th>
      <td><?php echo $Prueba->getEstadopruebas()->getNombre() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>


