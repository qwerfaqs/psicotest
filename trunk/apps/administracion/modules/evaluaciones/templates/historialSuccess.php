   <table summary="Submitted table designs">
<caption><h3>Buscar evaluación</h3></caption>
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
    
      

  <th><label for="evaluaciones_fecha">Fecha</label></th>
  <td><select name="evaluaciones[fecha][month]" id="evaluaciones_fecha_month">
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
</select>/<select name="evaluaciones[fecha][day]" id="evaluaciones_fecha_day">
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
</select>/<select name="evaluaciones[fecha][year]" id="evaluaciones_fecha_year">
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
</select></td>
</tr>
<tr>
  <th><label for="evaluaciones_nombre">Nombre</label></th>
  <td><input type="text" name="evaluaciones[nombre]" id="evaluaciones_nombre"></td>
</tr>

    </tbody>
  </table>
</form>
<hr>
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

    
