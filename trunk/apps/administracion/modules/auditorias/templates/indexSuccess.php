<table summary="Submitted table designs">
    <caption><h3>Auditorias (Libro de transacciones)</h3></caption>
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

