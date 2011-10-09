<table summary="Submitted table designs"><caption>
        <h3>Aspirantes</h3>
    </caption>
    <thead>
        <tr>
            <th scope="col">cedula</th>
            <th scope="col">nombre</th>
            <th scope="col">apellido</th>
            <th scope="col">agregar a la evaluación</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th scope="row">Total</th>
            <td colspan="3"><?php echo count($Aspirantes) ?> aspirantes</td>
            
        </tr>
    </tfoot>
    <tbody>
        <?php foreach ($Aspirantes as $i => $Aspirante): ?>
            <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
                <th scope="row" id="<?php echo $Aspirante->getId() ?>">
                    <a href="<?php echo url_for('aspirantes/show?id=' . $Aspirante->getId()) ?>">
                            <?php echo $Aspirante->getCedula() ?>
                    </a>
                </th>
                <td>
                    <?php echo $Aspirante->getNombre() ?>
                </td>
                <td>
                    <?php echo $Aspirante->getApellido() ?>
                </td>
                <td>
                    <a href="<?php echo url_for('evaluaciones/agregarAspirante?id=' . $Evaluacion->getId() . '&aspirantes_id=' . $Aspirante->getId() )?>">
                        <input type="image" src="/images/btnagregar.png" />
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<a href="<?php echo url_for("evaluaciones/aspirantesList?id=". $Evaluacion->getId()) ?>" >Volver a Listado Aspirantes</a>