<table summary="Submitted table designs">
    <caption><h3>Respuestas parciales </h3></caption>
    <thead>
        <tr>
            <th scope="col">Test</th>
            <th scope="col">Nombre</th>                        
            <th scope="col">Nombre largo</th>
            <th scope="col">Descripción</th>   
            <th scope="col">Puntaje</th>            
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
        <td><?php echo $resultado->getEscalas()->getTests()->getTitulo() ?></td>
        <td><?php echo $resultado->getEscalas()->getNombre() ?></td>
        <td><?php echo $resultado->getEscalas()->getNombrelargo() ?></td>      
        <td><?php echo $resultado->getEscalas()->getDescripcion() ?></td>
        <td><?php echo $resultado->getValor() ?></td>
        
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  
