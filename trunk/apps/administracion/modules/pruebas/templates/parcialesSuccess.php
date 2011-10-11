<table summary="Submitted table designs">
    <caption><h3>Respuestas parciales </h3></caption>
    <thead>
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Prueba</th>                        
            <th scope="col">Texto de pregunta</th>
            <th scope="col">Imagen de pregunta</th>
            <th scope="col">Respuesta</th>            
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th scope="row">Total</th>
            <td colspan="4"><?php echo count($resultados) ?> respuestas</td>
        </tr>
    </tfoot>
    <tbody>
    <?php foreach ($resultados as $i =>$resultado): ?>
    <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
      <td><?php echo $resultado->getId() ?></a></td>      
        <td><?php echo $resultado->getPruebas()->getTests()->getTitulo() ?></td>
        <td><?php echo $resultado->getPreguntas()->getDescripcion()?></td>
        <td><img width="100px" src="/images/tests/<?php echo $resultado->getPreguntas()->getImagen()?>"/></td>
        <td><?php echo $resultado->getOpciones()->getTexto() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  
