<div class="main">
    <div class="content">
        <div class="content_resize">
            <div class="mainbar">
                <span id="contador"></span>
<ul class="listado">
    <ul class="listado"> 
        <form  action="<?php echo url_for('principal/check') ?>" method="post">
         <?php 
         $pregs = $preguntas->getResult();
         $cantidad = count($pregs);
         $i = 0;
         ?>   
          <?php for ($n=0;$n<$cantidad/2;$n++) : ?>
         <li>
             <?php $pregunta = $pregs[$n]; ?>
           <?php echo '<img height="'.$alto.'" width="'.$ancho.'" src="/images/tests/'.$pregunta->getTests()->getTitulo().'/'.$pregunta->getImagen().'" />';                 
            ?>           
             <br/>
             <label for="">La respuesta para la pregunta <?php echo $i+1; ?> correcta es</label> 
             <select  name="valor<?php echo $i; ?>" >
                 <option value="1" >1</option>
                 <option value="2" >2</option>
                 <option value="3" >3</option>
                 <option value="4" >4</option>                 
             </select>
      
        
        <label for="">La respuesta correcta para la pregunta <?php echo $i+2; ?> es</label> 
             <select  name="valor<?php echo $i+1; ?>" >
                 <option value="1" >1</option>
                 <option value="2" >2</option>
                 <option value="3" >3</option>
                 <option value="4" >4</option>                 
             </select>
                                
        <input type="hidden" name="pregunta<?php echo $n+1; ?>" value="<?php echo $pregunta->getId() ?>" />
             
            </li>
            
            <?php  
                      $i = $i+2;
                      
             endfor; ?>
            
            <?php foreach ($preguntas as $n=>$pregunta) :?>
              <input type="hidden" name="pregunta<?php echo $n; ?>" value="<?php echo $pregunta->getId() ?>" />     
            <?php endforeach;?>
            <input type="hidden" name="cantidad" value="<?php echo count($pregs); ?>" />
            <input type="hidden" name="pagina" value="<?php echo $pagina; ?>" />
            <input type="submit" value="Continuar" />
            </form>
        </ul>
       </ul>           
              <p style="text-align:center">&nbsp;</p>
            </div>
            <div class="clr"></div>
        </div>
    </div>

</div>

