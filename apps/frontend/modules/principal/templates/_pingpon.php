<li><?php  echo $pregunta->getDescripcion() ?>
    <form action="<?php echo url_for('principal/check') ?>" method="post" >
        <?php foreach ($opciones as $opcion) : ?>
            <input type="radio" name="<?php echo $opcion->getTipoopcion()->getNombre(); ?>" value="<?php  echo $opcion->getOpciones()->getTexto(); ?>"/> 
            <?php echo $opcion->getDescripcion(); ?>
        <?php endforeach;?>             
        <input type="hidden" name="pagina" value="<?php echo $pagina ?>" />
        <input type="hidden" name="pregunta" value="<?php echo $pregunta->getId() ?>" />
        <input type="submit" name="ir" value="Continuar" />
    </form>                      
</li>