<ul class="listado">
    <?php echo count($preguntas); ?>
    <?php foreach ($preguntas as $pregunta) : ?>
          <li>
           <p><?php echo $pregunta->getDescripcion()  ?> <br />
            
           </p>
            <form  action="<?php echo url_for('principal/check') ?>" method="post">
             <label for="">La respuesta correcta es</label> 
             <select  name="valor" >
                 <option value="Si" >Si</option>
                 <option value="No" >No</option>

             </select>
             
             <select  name="valor2" >
                 <option value="0" >0</option>
                 <option value="1" >1</option>
                 <option value="2" >2</option>
                 <option value="3" >3</option>                 
             </select>
             
                 <input type="hidden" name="pagina" value="<?php echo $pagina; ?>" />
        <input type="hidden" name="pregunta" value="<?php echo $pregunta->getId() ?>" />
             <input type="submit" value="Continuar" />
            </form>                      
           </li>     
            <?php endforeach; ?>
       </ul>