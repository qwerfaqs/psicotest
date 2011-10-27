<div class="mainbar">
    <span id="contador"></span>
     <ul class="listado">
     <form  action="<?php echo url_for('principal/check') ?>" method="post">    
      <?php foreach ($preguntas as $n=>$pregunta) : ?>
         <li>
           <?php echo '<img height="400px" width="300px" src="/images/tests/'.$pregunta->getTests()->getTitulo().'/'.$pregunta->getImagen().'" />';                 
            ?>
             
             <br/>
             <label for="">La respuesta correcta es</label> 
             <select  name="valor<?php echo $n;  ?>" >
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
                <input type="hidden" name="pregunta<?php echo $n;  ?>" value="<?php echo $pregunta->getId() ?>" />
         
            </li>
            <?php endforeach; ?>
                <input type="hidden" name="cantidad" value="<?php echo count($preguntas); ?>" />
                <input type="submit" value="Continuar" />
            </form>
        </ul>
    </div>