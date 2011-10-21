<div class="mainbar">
     <ul class="listado">
        <form  action="<?php echo url_for('principal/check') ?>" method="post">
         <?php 
         $pregs = $preguntas->getResult();
         $cantidad = count($pregs);
         ?>   
          <?php for ($n=0;$n<$cantidad;$n++) : ?>
         <li>
             <?php $pregunta = $pregs[$n]; ?>
           <?php echo '<img height="'.$alto.'" width="'.$ancho.'" src="/images/tests/'.$pregunta->getTests()->getTitulo().'/'.$pregunta->getImagen().'" />';                 
            ?>           
         
             <label for="">La respuesta correcta es</label> 
             <select  name="valor<?php echo $n; ?>" >
                 <option value="A" >A</option>
                 <option value="B" >B</option>
                 <option value="C" >C</option>
                 <option value="D" >D</option>
                 <option value="E" >E</option>
             </select>
      
        
        <label for="">La respuesta correcta es</label> 
             <select  name="valor<?php echo $n+1; ?>" >
                 <option value="A" >A</option>
                 <option value="B" >B</option>
                 <option value="C" >C</option>
                 <option value="D" >D</option>
                 <option value="E" >E</option>
             </select>
                                
        <input type="hidden" name="pregunta<?php echo $n+1; ?>" value="<?php echo $pregunta->getId() ?>" />
             
            </li>
            
            <?php  $n = $n+1; 
             endfor; ?>
            
            <?php foreach ($preguntas as $n=>$pregunta) :?>
              <input type="hidden" name="pregunta<?php echo $n; ?>" value="<?php echo $pregunta->getId() ?>" />     
            <?php endforeach;?>
            <input type="hidden" name="cantidad" value="<?php echo count($pregs); ?>" />
            <input type="hidden" name="pagina" value="<?php echo $pagina; ?>" />
            <input type="submit" value="Continuar" />
            </form>
        </ul>
    </div>

