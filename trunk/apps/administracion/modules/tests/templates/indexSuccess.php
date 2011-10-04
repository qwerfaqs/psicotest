<h1>Tests List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Titulo</th>
      <th>Historia</th>
      <th>Enunciado</th>
      <th>Imagen</th>
      <th>Duracion</th>
      <th>Tipoopcion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($Tests as $Test): ?>
    <tr>
      <td><a href="<?php echo url_for('tests/show?id='.$Test->getId()) ?>"><?php echo $Test->getId() ?></a></td>
      <td><?php echo $Test->getTitulo() ?></td>
      <td><?php echo $Test->getHistoria() ?></td>
      <td><?php echo $Test->getEnunciado() ?></td>
      <td><?php echo $Test->getImagen() ?></td>
      <td><?php echo $Test->getDuracion() ?></td>
      <td><?php echo $Test->getTipoopcionId() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('tests/new') ?>">New</a>
