<?php

/*
 * This file is part of the symfony package.
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 *
 * @package    symfony
 * @subpackage plugin
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id: sfGuardValidatorUser.class.php 25546 2009-12-17 23:27:55Z Jonathan.Wage $
 */
class derechosValidatorUser extends sfValidatorBase {
    public function configure($options = array(), $messages = array()) {
        $this->addOption('username_field', 'username');
        $this->addOption('password_field', 'password');
        $this->addOption('throw_global_error', true);

        $this->setMessage('invalid', 'El Usuario y/o la Clave son Inválidos.');
    }
     protected function doClean($values) {
         
        $username = isset($values[$this->getOption('username_field')]) ? $values[$this->getOption('username_field')] : '';
        $password = isset($values[$this->getOption('password_field')]) ? $values[$this->getOption('password_field')] : '';

        if ($username && $password) {
            $function =  new ReflectionClass(sfConfig::get('app_derechos_plugin_modelo').'Peer');
            $name = $function->newInstanceArgs();
            $user = $name->login($username,$password);
            // existe?
            if($user) {
                //validaciones adicionales o carga de credenciales segun
                return array_merge($values, array('user' => $user, 'credencial' => sfConfig::get('app_derechos_plugin_modelo'), 'passDB' => $password));
            }else {
                 $this->setMessage('invalid', 'Login Incorrecto');
            }
        }else {
            $this->setMessage('invalid', 'Debe Ingresar Nombre de Usuario y Contraseña');
        }
        if ($this->getOption('throw_global_error')) {
            throw new sfValidatorError($this, 'invalid');
        }
        throw new sfValidatorErrorSchema($this, array($this->getOption('username_field') => new sfValidatorError($this, 'invalid')));
    }
}