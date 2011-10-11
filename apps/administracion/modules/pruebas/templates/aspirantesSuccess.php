<table summary="Submitted table designs">
    <caption><h3>Puntajes por aspirante </h3></caption>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Cedula</th>                        
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">Puntaje obtenido</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th scope="row">Total</th>
            <td colspan="4"><?php echo count($resultados) ?> aspirantes</td>
        </tr>
    </tfoot>
    <tbody>
    <?php foreach ($resultados as $i =>$resultado): ?>
    <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
      <td><?php echo $resultado->getId() ?></a></td>
        <th scope="row" id="<?php echo $resultado->getId() ?>"><a href="<?php echo url_for('pruebas/parciales?prueba='.$resultado->getPruebas()->getId().'&&id=' . $resultado->getId()) ?>"><?php echo $resultado->getAspirantes()->getCedula() ?></a></th>      
        <td><?php echo $resultado->getAspirantes()->getNombre() ?></td>
        <td><?php echo $resultado->getAspirantes()->getApellido()?></td>
        <td><?php echo $resultado->getPuntaje() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  
