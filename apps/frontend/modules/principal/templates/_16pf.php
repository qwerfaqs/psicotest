<?php include_partial('enunciado'.$test,array("pagina"=>$pagina)); ?>
<div class="main">
    <div class="content">
        <div class="content_resize">
            <div class="mainbar">
                <ul class="listado">
                    <form  action="<?php echo url_for('principal/check') ?>" method="post">
                    <?php
                    foreach ($preguntas as $n=>$pregunta)
                        include_partial('ABC', array(   'pregunta'  => $pregunta, 
                                                        'pagina'    => $pagina, 
                                                        'respuestas' => $opciones,
                                                        'n'=>$n     ));
                    ?>
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
<?php include_partial('relojito'); ?>