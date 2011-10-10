<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<form action="#" class="cmxform" style="display: block; ">
                        
                        <fieldset>
                            <legend><h2>Crear Evaluación</h2></legend>
                            <ol>
                            <li>
                            <label for="surname"><span>Cantidad de Aspirantes<em>*</em></span></label>
                            <input id="surname" class="shorttxt">
                            </li>
                                                        <li>
                            <label for="evaluaciones_fecha">                                  Fecha</label>
                            <select name="evaluaciones[fecha][month]" id="evaluaciones_fecha_month" >
                                     
                            <option value="" selected="selected"></option>
                                     
                                    <option value="1">01</option>
                                     
                                    <option value="2">02</option>
                                     
                                    <option value="3">03</option>
                                     
                                    <option value="4">04</option>
                                     
                                    <option value="5">05</option>
                                     
                                    <option value="6">06</option>
                                     
                                    <option value="7">07</option>
                                     
                                    <option value="8">08</option>
                                     
                                    <option value="9">09</option>
                                     
                                    <option value="10">10</option>
                                     
                                    <option value="11">11</option>
                                     
                                    <option value="12">12</option>
                                     
                                  </select>
                                  /
                                  <select name="evaluaciones[fecha][day]" id="evaluaciones_fecha_day">
                                     
                                    <option value="" selected="selected"></option>
                                     
                                    <option value="1">01</option>
                                     
                                    <option value="2">02</option>
                                     
                                    <option value="3">03</option>
                                     
                                    <option value="4">04</option>
                                     
                                    <option value="5">05</option>
                                     
                                    <option value="6">06</option>
                                     
                                    <option value="7">07</option>
                                     
                                    <option value="8">08</option>
                                     
                                    <option value="9">09</option>
                                     
                                    <option value="10">10</option>
                                     
                                    <option value="11">11</option>
                                     
                                    <option value="12">12</option>
                                     
                                    <option value="13">13</option>
                                     
                                    <option value="14">14</option>
                                     
                                    <option value="15">15</option>
                                     
                                    <option value="16">16</option>
                                     
                                    <option value="17">17</option>
                                     
                                    <option value="18">18</option>
                                     
                                    <option value="19">19</option>
                                     
                                    <option value="20">20</option>
                                     
                                    <option value="21">21</option>
                                     
                                    <option value="22">22</option>
                                     
                                    <option value="23">23</option>
                                     
                                    <option value="24">24</option>
                                     
                                    <option value="25">25</option>
                                     
                                    <option value="26">26</option>
                                     
                                    <option value="27">27</option>
                                     
                                    <option value="28">28</option>
                                     
                                    <option value="29">29</option>
                                     
                                    <option value="30">30</option>
                                     
                                    <option value="31">31</option>
                                     
                                  </select>
                                  /
                                  <select name="evaluaciones[fecha][year]" id="evaluaciones_fecha_year">
                                     
                                    <option value="" selected="selected"></option>
                                     
                                    <option value="2006">2006</option>
                                     
                                    <option value="2007">2007</option>
                                     
                                    <option value="2008">2008</option>
                                     
                                    <option value="2009">2009</option>
                                     
                                    <option value="2010">2010</option>
                                     
                                    <option value="2011">2011</option>
                                     
                                    <option value="2012">2012</option>
                                     
                                    <option value="2013">2013</option>
                                     
                                    <option value="2014">2014</option>
                                     
                                    <option value="2015">2015</option>
                                     
                                    <option value="2016">2016</option>
                                     
                                  </select>
                                  </li>
                            	  <li>
                                  <label for="evaluaciones_nombre">Nombre</label>
                                  <input type="text" name="evaluaciones[nombre]" id="evaluaciones_nombre" class="txt" />
                                  </li>
                            	  <li>
                                  <label for="evaluaciones_estadosevaluaciones_id">Estado</label>
                                  <select name="evaluaciones[estadosevaluaciones_id]" id="evaluaciones_estadosevaluaciones_id">
                                     
                                    <option value="1">Activa</option>
                                     
                                    <option value="2">Inactiva</option>
                                     
                                  </select>
                                  </li>
                            	  <li>
                                  <label for="evaluaciones_perfil_id">Perfil</label>
                                  <select name="evaluaciones[perfil_id]" id="evaluaciones_perfil_id">
                                     
                                    <option value="" selected="selected"></option>
                                     
                                    <option value="1">Infante</option>
                                     
                                    <option value="2">Oficial</option>
                                     
                                    <option value="3">Grumete</option>
                                     
                                  </select>
                               	</li> 
                            	<li>
                                <p>
                                  <input type="image" value="Enviar" id="boton_enviar" src="images/btnsiguiente.png" alt="Enviar">
                                  <!--<input type="submit" value="Enviar" id="boton_enviar">-->
                                </p>
                            </ol>
          </fieldset>                        
                    </form>
<form action="<?php echo url_for('evaluaciones/' . ($form->getObject()->isNew() ? 'create' : 'update') . (!$form->getObject()->isNew() ? '?id=' . $form->getObject()->getId() : '')) ?>" method="post" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?>>
    <?php if (!$form->getObject()->isNew()): ?>
        <input type="hidden" name="sf_method" value="put" />
    <?php endif; ?>
        <table>
            <tfoot>
                <tr>
                    <td colspan="2">
                        &nbsp;<a href="<?php echo url_for('evaluaciones/index') ?>">Back to list</a>
                    <?php if (!$form->getObject()->isNew()): ?>
                        &nbsp;<?php echo link_to('Delete', 'evaluaciones/delete?id=' . $form->getObject()->getId(), array('method' => 'delete', 'confirm' => 'Are you sure?')) ?>
                    <?php endif; ?>
                        <input type="submit" value="Save" />
                    </td>
                </tr>
            </tfoot>
            <tbody>
            <?php echo $form->renderHiddenFields() // ESTO IMPRIME TODOS LOS CAMPOS HIDDEN?>
            <?php echo $form["cantidad"]->renderLabel() ?>
            <?php echo $form["cantidad"]->render() ?>
            <?php echo $form["fecha"]->renderLabel() ?>
            <?php echo $form["fecha"]->render() ?>
            <?php echo $form["nombre"]->renderLabel() ?>
            <?php echo $form["nombre"]->render() ?>
            <?php echo $form["estadosevaluaciones_id"]->renderLabel() ?>
            <?php echo $form["estadosevaluaciones_id"]->render() ?>
            <?php echo $form["perfil_id"]->renderLabel() ?>
            <?php echo $form["perfil_id"]->render() ?>
        </tbody>
    </table>
</form>
