<a href="<?php echo url_for('evaluacion', $evaluacion); ?>">
    <li>
        <img alt="imagen de evaluacion"  src="/images/listadoimgbackground.png" />
        <label><?php echo $evaluacion->getNombre(); ?></label>
    </li>
</a>