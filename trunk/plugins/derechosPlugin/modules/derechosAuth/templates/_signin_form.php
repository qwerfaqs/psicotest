
<form action="<?php echo url_for('@derechos_signin') ?>" class="cmxform" style="display: block; " method="post">

    <fieldset>
        <ol>
            <li>
                <?php echo $form["username"]->renderLabel() ?>
                <?php echo $form["username"]->render() ?>
            </li>
            <li>
                <?php echo $form["password"]->renderLabel() ?>
                <?php echo $form["password"]->render() ?>
            </li>
            <?php echo $form->renderHiddenFields() ?>
            <p id="forgetpass"><a href="<?php echo url_for('aspirantes/new'); ?>">Regístrese</a> - <a>Olvido su Contraseña?</a></p>
            <p><input type="image" value="Enviar" id="boton_enviar" src="/images/contactformsend.png" alt="Enviar"></p>
        </ol>
    </fieldset>
    <?php     echo $form->renderGlobalErrors() ?>
</form>