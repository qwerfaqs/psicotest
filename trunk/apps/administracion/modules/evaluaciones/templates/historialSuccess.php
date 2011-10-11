<table summary="Submitted table designs">
    <caption><h3>Historial de evaluaciones</h3></caption>
    <thead>
        <tr>
            <th scope="col">nombre</th>
            <th scope="col">fecha</th>
            <th scope="col">Cantidad de aspirantes</th>
            <th scope="col">descripcion</th>
            <th scope="col">estado</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th scope="row">Total</th>
            <td colspan="4"><?php echo count($Evaluaciones) ?> evaluaciones</td>
        </tr>
    </tfoot>
    <tbody>
        <?php foreach ($Evaluaciones as $i => $Evaluacion): ?>
            <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
                <th scope="row" id="<?php echo $Evaluacion->getId() ?>"><a href="<?php echo url_for('pruebas/index?id=' . $Evaluacion->getId()) ?>"><?php echo $Evaluacion->getNombre() ?></a></th>
                <td><a href=""><?php echo $Evaluacion->getFecha() ?></a></td>
                <td><?php echo $Evaluacion->getCantidad() ?></td>
                <td><?php echo $Evaluacion->getNombre() ?></td>
                <td><?php echo $Evaluacion->getEstadosevaluaciones()->getNombre() ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

    
