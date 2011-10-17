<div class="mainbar">
     <ul class="listado">
          <?php foreach ($preguntas as $pregunta) : ?>
         <li>
           <?php echo '<img height="400px" width="300px" src="/images/tests/'.$pregunta->getTests()->getTitulo().'/'.$pregunta->getImagen().'" />';                 
            ?>
             
          <form  action="<?php echo url_for('principal/check') ?>" method="post">
             <label for="">La respuesta correcta es</label> 
             <select  name="valor" >
                 <option value="1" >1</option>
                 <option value="2" >2</option>
                 <option value="3" >3</option>
                 <option value="4" >4</option>
                 <option value="5" >5</option>
                 <option value="6" >6</option>
                 <option value="7" >7</option>
                 <option value="8" >8</option>
             </select>
                 <input type="hidden" name="pagina" value="<?php echo $pagina; ?>" />
        <input type="hidden" name="pregunta" value="<?php echo $pregunta->getId() ?>" />
             <input type="submit" value="Continuar" />
            </form>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>