<ul class="listado">
    <?php echo count($preguntas); ?>
    <form  action="<?php echo url_for('principal/check') ?>" method="post">
    <?php foreach ($preguntas as $n=>$pregunta) : ?>
          <li>
           <p><?php echo $pregunta->getDescripcion()  ?> <br />
            <?php if ($pregunta->getImagen()!=NULL)
                    echo '<img height="100px" width="350px" src="/images/tests/'.$pregunta->getTests()->getTitulo().'/'.$pregunta->getImagen().'" />';
                  else
                  {
                    foreach ($opciones as $opcion) :
                      echo '<strong>'. $opcion->getOpciones()->getTexto().') '.$opcion->getDescripcion().'</strong><br/>            ' ;
                    endforeach;
                  }
            ?>
           </p>
            
             <label for="">La respuesta correcta es</label> 
             <select  name="valor<?php echo $n; ?>" >
                 <option value="A" >A</option>
                 <option value="B" >B</option>
                 <option value="C" >C</option>
                 <option value="D" >D</option>
                 <option value="E" >E</option>
             </select>
                 <input type="hidden" name="pagina" value="<?php echo $pagina; ?>" />
               <input type="hidden" name="pregunta<?php echo $n; ?>" value="<?php echo $pregunta->getId() ?>" />                                               
                                
           </li>     
            <?php endforeach; ?>
              <input type="hidden" name="cantidad" value="<?php echo count($preguntas); ?>" />
            <input type="submit" value="Continuar" />
            </form>  
       </ul>