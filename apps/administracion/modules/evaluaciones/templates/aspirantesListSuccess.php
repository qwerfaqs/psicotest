<table summary="Submitted table designs"><caption>
        <h3>Aspirantes</h3>
    </caption>
    <thead>
        <tr>
            <th scope="col">cedula</th>
            <th scope="col">nombre</th>
            <th scope="col">apellido</th>
            <th scope="col">quitar de la evaluación</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th scope="row">Total</th>
            <td colspan="3"><?php echo count($Asistencias) ?> aspirantes</td>
            
        </tr>
    </tfoot>
    <tbody>
        <?php foreach ($Asistencias as $i => $Asistencia): ?>
            <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">
                <th scope="row" id="<?php echo $Asistencia->getAspirantes()->getId() ?>">
                    <a href="<?php echo url_for('aspirantes/show?id=' . $Asistencia->getAspirantes()->getId()) ?>">
                            <?php echo $Asistencia->getAspirantes()->getCedula() ?>
                    </a>
                </th>
                <td>
                    <a href="#">
                        <?php echo $Asistencia->getAspirantes()->getNombre() ?>
                    </a>
                </td>
                <td>
                    <?php echo $Asistencia->getAspirantes()->getApellido() ?>
                </td>
                <td>
                    <a href="<?php echo url_for('evaluaciones/quitarAspirante?id=' . $Evaluacion->getId() . '&asistencias_id=' . $Asistencia->getId() )?>">
                        <input type="image" src="/images/btnquitar.png" />
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<a href="<?php echo url_for("evaluaciones/show?id=". $Evaluacion->getId()) ?>" class="link"  >Volver</a>
<a href="<?php echo url_for("evaluaciones/aspirantesAgregando?id=". $Evaluacion->getId()) ?>" class="link"  >Agregar Aspirantes</a>