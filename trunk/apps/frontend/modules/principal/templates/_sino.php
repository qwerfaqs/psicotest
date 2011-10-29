<div class="main">
    <div class="content">
        <div class="content_resize">
            <div class="mainbar">
                <span id="contador"></span>
<ul class="listado">
    
    <form  action="<?php echo url_for('principal/check') ?>" method="post">
    <?php foreach ($preguntas as $n=>$pregunta) : ?>
          <li>
           <p><?php echo $pregunta->getDescripcion()  ?> <br />
               
            <br/>
             <label for="">La respuesta correcta es</label> 
             <select  name="valor<?php echo $n; ?>" >
                 <option value="Verdadero" >Si</option>
                 <option value="Falso" >No</option>

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