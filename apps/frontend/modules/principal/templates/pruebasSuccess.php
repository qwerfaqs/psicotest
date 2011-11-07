<div class="content">
    <div class="content_resize">
        <div class="mainbar">
            <?php   foreach ($pruebas as $prueba) : ?>
            <?php       include_partial('prueba', array('prueba' => $prueba)); ?>
            <?php   endforeach; ?>
            <a href="<?php echo url_for('principal/evaluaciones') ?>"> <input  type="image" src="/images/atras.gif" /></a>
            <a href="<?php echo url_for('principal/asistencia') ?>?evaluacion=<?php echo $evaluacion->getId() ?>"  ><input  type="image" src="/images/sig.gif" id="btncomenzar" /></a> 
        </div>
        <div class="sidebar">
            <div class="gadget">
                <h2 class="star"><span>Opciones</span></h2>
                <div class="clr"></div>
                <ul class="sb_menu">
                    <li><a href="<?php echo url_for("@derechos_signout") ?>">Cerrar Sesión</a></li>
                </ul>
            </div>
        </div>
        <div class="clr"></div>
    </div>
</div>
<br/><br/><br/>
