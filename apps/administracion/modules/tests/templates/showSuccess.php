<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Test->getId() ?></td>
    </tr>
    <tr>
      <th>Titulo:</th>
      <td><?php echo $Test->getTitulo() ?></td>
    </tr>
    <tr>
      <th>Historia:</th>
      <td><?php echo $Test->getHistoria() ?></td>
    </tr>
    <tr>
      <th>Enunciado:</th>
      <td><?php echo $Test->getEnunciado() ?></td>
    </tr>
    <tr>
      <th>Imagen:</th>
      <td><?php echo $Test->getImagen() ?></td>
    </tr>
    <tr>
      <th>Duracion:</th>
      <td><?php echo $Test->getDuracion() ?></td>
    </tr>
    <tr>
      <th>Tipoopcion:</th>
      <td><?php echo $Test->getTipoopcionId() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('tests/edit?id='.$Test->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('tests/index') ?>">List</a>
