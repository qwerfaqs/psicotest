<ul class="listado">
    <?php echo count($preguntas); ?>
    <form  action="<?php echo url_for('principal/check') ?>" method="post">
    <?php foreach ($preguntas as $n=>$pregunta) : ?>
          <li>
           <p><?php echo $pregunta->getDescripcion()  ?> <br />
            
           </p>
            
             <label for="">La respuesta correcta es</label> 
             <select  name="valor<?php echo $n; ?>" >
                 <option value="Si" >Si</option>
                 <option value="No" >No</option>

             </select>
             
             <select  name="valor2<?php echo $n; ?>" >
                 <option value="0" >0</option>
                 <option value="1" >1</option>
                 <option value="2" >2</option>
                 <option value="3" >3</option>                 
             </select>
             
                 <input type="hidden" name="pagina" value="<?php echo $pagina; ?>" />
        <input type="hidden" name="pregunta<?php echo $n; ?>" value="<?php echo $pregunta->getId() ?>" />
                              
           </li>     
            <?php endforeach; ?>
              <input type="hidden" name="cantidad" value="<?php echo count($preguntas); ?>" />
              <input type="submit" value="Continuar" />
            </form> 
       </ul>