<table summary="Submitted table designs"><caption>
        <h3>Tests</h3>
    </caption>
    <thead>
        <tr>
            <th scope="col">nombre</th>
            <th scope="col">duracion</th>
            <th scope="col">enunciado</th>
            <th scope="col">cantidad de preguntas</th>
            <th scope="col">incluir a la evaluación</th>
            <th scope="col">quitar de la evaluación</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th scope="row">Total</th>
            <td colspan="3"><?php echo $cant_tests ?> tests</td>
            <td><a href="#" title="emma"><?php echo $cant_tests_incluidos ?> Incluidos</a></td>
            <td><a href="#" title="emma"><?php echo $cant_tests - $cant_tests_incluidos ?> no incluidos</a>
                <a href="#" title="emma"></a></td>
        </tr>
    </tfoot>
    <tbody>
        <?php foreach ($Tests as $i => $Test): ?>
            <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
                <th scope="row" id="<?php echo $Test->getId() ?>"><a href="<?php echo url_for('tests/show?id=' . $Test->getId()) ?>"><?php echo $Test->getTitulo() ?></a></th>
                <td><a href="#"><?php echo $Test->getDuracion() ?> min</a></td>
                <td><?php echo $Test->getEnunciado() ?></td>
                <td><?php echo count($Test->getPreguntass()) ?></td>
                <td><?php echo isset($testsIncluidos[$Test->getId()]) ?
                        'Incluido</td><td><input type="image" src="images/btnquitar.png" />' :
                        '<td><input type="image" src="images/btnagregar.png" /></td>
                                    <td>No Incluido'?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>