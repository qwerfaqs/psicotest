<table summary="Submitted table designs">
    <caption><h3>Auditorias (Libro de transacciones)</h3></caption>
</table>

<form action="<?php echo url_for('auditorias/index') ?>" method="post">
  <table>
    <tfoot>
      <tr>
        <td colspan="2">          
            <input type="submit" value="Buscar" class="link">
        </td>
      </tr>
    </tfoot>
    <tbody>
    
      

<th><label for="evaluaciones_fecha">Fecha</label></th>
<td><select name="day" id="evaluaciones_fecha_day">
<option value="<?php echo $dia; ?>" selected="selected"></option>
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
</select>/<select name="month" id="evaluaciones_fecha_month">
<option value="<?php echo $mes; ?>" selected="selected"></option>
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
</select>/<select name="year" id="evaluaciones_fecha_year">
<option value="<?php echo $año; ?>" selected="selected"></option>
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

    </tbody>
  </table>
</form>

<table summary="Submitted table designs">    
    <thead>
        <tr>
      <th scope="col">Objeto</th>
      <th scope="col">Tipooperacion</th>
      <th scope="col">Fecha de registro</th>      
      <th scope="col">Administrador</th>           
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th scope="row">Total</th>
            <td colspan="4"><?php echo count($Auditorias) ?> Auditorias</td>
        </tr>
    </tfoot>
    <tbody>
        <?php foreach ($Auditorias as $i => $Auditoria): ?>
            <tr class="<?php echo fmod($i, 2) ? 'even' : 'odd' ?>">               
                <td><a href="<?php echo url_for('auditorias/show?id='.$Auditoria->getId()) ?>"><?php echo $Auditoria->getObjeto() ?></a></td>
                <td><?php echo $Auditoria->getTipooperacion() ?></td>
                <td><?php echo $Auditoria->getCreatedat() ?></td>
                <td><?php echo $Auditoria->getAdministradores()->getUsuario() ?></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

<?php if (!$Auditorias->atFirstPage()): ?> 
  <!-- Links for first and previous pages -->
 <a href="/administracion_dev.php/auditorias/index?&&year=<?php echo $año; ?>&&month=<?php echo $mes; ?>&&day=<?php echo $dia; ?>&&pagina=<?php echo $Auditorias->getFirstPage(); ?>">Primero</a>
  <a href="/administracion_dev.php/auditorias/index?&&year=<?php echo $año; ?>&&month=<?php echo $mes; ?>&&day=<?php echo $dia; ?>&&pagina=<?php echo $Auditorias->getPrev(); ?> ">Anterior</a>
<?php endif; ?>

<!-- Links to the 3 previous pages -->
<?php foreach ($Auditorias->getPrevLinks(20) as $link): ?>
   <a href="/administracion_dev.php/auditorias/index?&&year=<?php echo $año; ?>&&month=<?php echo $mes; ?>&&day=<?php echo $dia; ?>&&pagina=<?php echo $link; ?> ">
     <?php echo $link ?>
   </a>
<?php endforeach; ?>

<!-- Current page -->
<?php echo $Auditorias->getPage(); ?>

<!-- Links to the next 3 pages -->
<?php foreach ($Auditorias->getNextLinks(20) as $link): ?>
  <a href="/administracion_dev.php/auditorias/index? &&year=<?php echo $año; ?>&&month=<?php echo $mes; ?>&&day=<?php echo $dia; ?>&&pagina=<?php echo $link; ?> ">
       <?php echo $link; ?></a>
<?php endforeach; ?>

<?php if (!$Auditorias->atLastPage()): ?> 
  <!-- Links for next and last pages -->
  <a href="/administracion_dev.php/auditorias/index? &&year=<?php echo $año; ?>&&month=<?php echo $mes; ?>&&day=<?php echo $dia; ?>&&pagina=<?php echo $Auditorias->getNext(); ?> ">Siguiente</a>
  <a href="/administracion_dev.php/auditorias/index? &&year=<?php echo $año; ?>&&month=<?php echo $mes; ?>&&day=<?php echo $dia; ?>&&pagina=<?php echo $Auditorias->getLastPage(); ?> ">Ultimo</a>
<?php endif; ?>            