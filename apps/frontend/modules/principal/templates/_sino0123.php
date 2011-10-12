<ul class="listado">
    <?php echo count($preguntas); ?>
    <?php foreach ($preguntas as $pregunta) : ?>
          <li>
           <p><?php echo $pregunta->getDescripcion()  ?> <br />
            <?php if ($pregunta->getImagen()!=NULL)
                    echo '<img width="150px" src="/images/tests/d1.png" />';
                  else
                  {
                    foreach ($opciones as $opcion) :
                      echo '<strong>'. $opcion->getOpciones()->getTexto().') '.$opcion->getDescripcion().'</strong><br/>            ' ;
                    endforeach;
                  }
            ?>
           </p>
            <form  action="<?php echo url_for('principal/check') ?>" method="post">
             <label for="">La respuesta correcta es</label> 
             <select  name="valor" >
                 <option value="A" >Si</option>
                 <option value="B" >No</option>

             </select>
             
             <select  name="valor2" >
                 <option value="A" >0</option>
                 <option value="B" >1</option>
                 <option value="C" >2</option>
                 <option value="D" >3</option>                 
             </select>
             
                 <input type="hidden" name="pagina" value="<?php echo $pagina; ?>" />
        <input type="hidden" name="pregunta" value="<?php echo $pregunta->getId() ?>" />
             <input type="submit" value="Continuar" />
            </form>                      
           </li>     
            <?php endforeach; ?>
       </ul>