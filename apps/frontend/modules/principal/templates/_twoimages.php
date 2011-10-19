<div class="mainbar">
     <ul class="listado">
          <?php foreach ($preguntas as $pregunta) : ?>
         <li>
           <?php echo '<img height="'.$alto.'" width="'.$ancho.'" src="/images/tests/'.$pregunta->getTests()->getTitulo().'/'.$pregunta->getImagen().'" />';                 
            ?>
             
          <form  action="<?php echo url_for('principal/check') ?>" method="post">
             <label for="">La respuesta correcta es</label> 
             <select  name="valor" >
                 <option value="A" >A</option>
                 <option value="B" >B</option>
                 <option value="C" >C</option>
                 <option value="D" >D</option>
                 <option value="E" >E</option>
             </select>
                 <input type="hidden" name="pagina" value="<?php echo $pagina; ?>" />
        <input type="hidden" name="pregunta" value="<?php echo $pregunta->getId() ?>" />
             <input type="submit" value="Continuar" />
            </form>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>

