<li><?php  echo $pregunta->getDescripcion() ?>
    <form action="<?php echo url_for('principal/check') ?>" method="post" >
        <?php 
             foreach ($opciones as $opcion) :
        ?>
        <input type="radio" name="group1" value="<?php  echo $opcion->getOpciones()->getTexto(); ?>"> 
            <?php echo $opcion->getDescripcion(); 
            endforeach;?>                       

        <input type="hidden" name="pagina" value="<?php echo $pagina; ?>" />
        <input type="hidden" name="pregunta" value="<?php echo $pregunta->getId() ?>" />
        <input type="submit" name="ir" value="Continuar" />
    </form>                      
</li>