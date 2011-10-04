<h1>Preguntas List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Imagen</th>
      <th>Descripcion</th>
      <th>Tests</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Preguntas as $Pregunta): ?>
    <tr>
      <td><a href="<?php echo url_for('preguntas/show?id='.$Pregunta->getId()) ?>"><?php echo $Pregunta->getId() ?></a></td>
      <td><?php echo $Pregunta->getImagen() ?></td>
      <td><?php echo $Pregunta->getDescripcion() ?></td>
      <td><?php echo $Pregunta->getTestsId() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('preguntas/new') ?>">New</a>
