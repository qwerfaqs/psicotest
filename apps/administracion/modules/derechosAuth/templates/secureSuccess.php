<?php use_helper('I18N') ?>

<h2><?php echo ('Oops! No tiene los Permisos Necesarios para ingresar a la página solicitada.') ?></h2>

<p><?php echo sfContext::getInstance()->getRequest()->getUri() ?></p>

<h3><?php echo ('Ingrese para tener acceso') ?></h3>

<?php echo get_component('derechosAuth', 'signin_form') ?>