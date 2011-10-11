<table summary="Submitted table designs">
<caption>
<h3>Buscar aspirantes</h3>
</caption>
</table>



<form action="/administracion_dev.php/evaluaciones/create" method="post">
  <table>
    <tfoot>
      <tr>
        <td colspan="2">          
            <a type="submit" value="" class="link">Buscar</a>
        </td>
      </tr>
    </tfoot>
    <tbody>
    
      

  
<tr>
  <th><label for="aspirantes_cedula">cedula</label></th>
  <td><input type="text" name="cedula" id=""></td>
</tr>
<tr>
  <th><label for="aspirantes_nombre">Nombre</label></th>
  <td><input type="text" name="cedula" id=""></td>
</tr>
<tr>
  <th><label for="aspirantes_apellido">apellido</label></th>
  <td><input type="text" name="" id=""></td>
</tr>

    </tbody>
  </table>
</form>

      

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
<a href="<?php echo url_for("evaluaciones/aspirantesList?id=". $Evaluacion->getId()) ?>" class="link" >Volver a Listado Aspirantes</a>