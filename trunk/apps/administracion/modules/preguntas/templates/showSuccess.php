<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $Pregunta->getId() ?></td>
    </tr>
    <tr>
      <th>Imagen:</th>
      <td><?php echo $Pregunta->getImagen() ?></td>
    </tr>
    <tr>
      <th>Descripcion:</th>
      <td><?php echo $Pregunta->getDescripcion() ?></td>
    </tr>
    <tr>
      <th>Tests:</th>
      <td><?php echo $Pregunta->getTestsId() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('preguntas/edit?id='.$Pregunta->getId()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('preguntas/index') ?>">List</a>
