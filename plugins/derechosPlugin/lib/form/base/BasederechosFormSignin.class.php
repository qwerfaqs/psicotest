<?php

/**
 * BasesfGuardFormSignin
 *
 * @package    sfDoctrineGuardPlugin
 * @subpackage form
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @author     Jonathan H. Wage <jonwage@gmail.com>
 * @version    SVN: $Id: BasesfGuardFormSignin.class.php 25546 2009-12-17 23:27:55Z Jonathan.Wage $
 */
class BasederechosFormSignin extends BaseForm
{
  /**
   * @see sfForm
   */
  public function setup()
  {
    $this->setWidgets(array(
      'username' => new sfWidgetFormInputText(),
      'password' => new sfWidgetFormInputPassword(array('type' => 'password')),
    ));

    $this->setValidators(array(
      'username' => new sfValidatorString(array("required"=>false)),
      'password' => new sfValidatorString(array("required"=>false)),
    ));

    $this->widgetSchema['username']->setLabel('Usuario');
    $this->widgetSchema['password']->setLabel('Clave');
    
    if (sfConfig::get('app_derechos_plugin_allow_login_with_email', false))
    {
      $this->widgetSchema['username']->setLabel('Usuario o E-Mail');
    }

    $this->validatorSchema->setPostValidator(new derechosValidatorUser());

    $this->widgetSchema->setNameFormat('signin[%s]');
  }
}