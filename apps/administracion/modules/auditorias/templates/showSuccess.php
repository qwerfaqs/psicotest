<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Auditorias->getId() ?></td>
    </tr>
    <tr>
      <th>Objeto:</th>
      <td><?php echo $Auditorias->getObjeto() ?></td>
    </tr>
    <tr>
      <th>Tipooperacion:</th>
      <td><?php echo $Auditorias->getTipooperacion() ?></td>
    </tr>
    <tr>
      <th>Created at:</th>
      <td><?php echo $Auditorias->getCreatedAt() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $Auditorias->getDescripcion() ?></td>
    </tr>
    <tr>
      <th>Administradores:</th>
      <td><?php echo $Auditorias->getAdministradores()->getUsuario() ?></td>
    </tr>
    
       <tr>
      <th>Nombre y apellido del administrador :</th>
      <td><?php echo $Auditorias->getAdministradores()->getNombre().' '.$Auditorias->getAdministradores()->getApellido(); ?></td>
    </tr>
    
    
  </tbody>
</table>

<hr />


