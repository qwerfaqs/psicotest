<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>


<form  action="<?php echo url_for('evaluaciones/' . ($form->getObject()->isNew() ? 'create' : 'update') . (!$form->getObject()->isNew() ? '?id=' . $form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?> class="cmxform" style="display: block;">
    <?php if (!$form->getObject()->isNew()): ?>
        <input type="hidden" name="sf_method" value="put" />
    <?php endif; ?>
        <table>
            <tfoot>
                <tr>
                    <td colspan="2">
                        &nbsp;<a href="<?php echo url_for('evaluaciones/index') ?>">Volver a la lista</a>
                    <?php if (!$form->getObject()->isNew()): ?>
                        &nbsp;<?php echo link_to('Eliminar', 'evaluaciones/delete?id=' . $form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Esta seguro de eliminar?')) ?>
                    <?php endif; ?>
                        <input type="submit" value="Guardar" />
                    </td>
                </tr>
            </tfoot>
            <tbody>
            <?php echo $form->renderHiddenFields() // ESTO IMPRIME TODOS LOS CAMPOS HIDDEN?>
            <?php echo $form["cantidad"]->renderLabel() ?>
            <?php echo $form["cantidad"]->render(array('class'=>"shorttxt")) ?> <br/>
            <?php echo $form["fecha"]->renderLabel() ?>
            <?php echo $form["fecha"]->render() ?><br/>
            <?php echo $form["nombre"]->renderLabel() ?>
            <?php echo $form["nombre"]->render(array('class'=>"shorttxt")) ?><br/>
            <?php echo $form["estadosevaluaciones_id"]->renderLabel() ?>
            <?php echo $form["estadosevaluaciones_id"]->render() ?><br/>
            <?php echo $form["perfil_id"]->renderLabel() ?>
            <?php echo $form["perfil_id"]->render() ?>    <br/>           
             <?php echo $form["id"]->render() ?> 
             <?php echo $form['_csrf_token']->render() ?>
        </tbody>
    </table>
</form>
