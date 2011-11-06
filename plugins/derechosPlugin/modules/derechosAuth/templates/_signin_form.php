
  
   
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
            <?php foreach ($form->getGlobalErrors() as $name => $error): ?>
            <li class="error_list">
                <?php echo $error ?>
            </li>
            <?php endforeach; ?>
            <p id="forgetpass">
                <a href="<?php echo url_for('@registracion'); ?>">Regístrese</a>
                <input type="image" value="Enviar" id="boton_enviar" src="/images/contactformsend.png" alt="Enviar" />
            </p>
 
        </ol>
    </fieldset>
    <?php     //echo $form->renderGlobalErrors(); //echo getGlobalErrors() ?>

</form>

