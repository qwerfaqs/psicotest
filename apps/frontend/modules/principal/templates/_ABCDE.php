<div class="main">
    <div class="content">
        <div class="content_resize">
            <div class="mainbar">
<ul class="listado">
    
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
              <p style="text-align:center">&nbsp;</p>
            </div>
            <div class="clr"></div>
        </div>
    </div>

</div>