<?php

/**
 * Aspirantes form.
 *
 * @package    psicotest
 * @subpackage form
 * @author     Psicotest
 */
class AspirantesForm extends BaseAspirantesForm
{
  public function configure()
  {
    $this->widgetSchema['password']= new sfWidgetFormInputPassword();
    $this->widgetSchema['password_check']= new sfWidgetFormInputPassword();     
    $this->validatorSchema['password'] = new sfValidatorString(array('required' => true, 'min_length' => 4, 'max_length' => 20));
    $this->validatorSchema['password_check'] = new sfValidatorString(array('required' => true, 'min_length' => 4, 'max_length' => 20));
   $this->validatorSchema->setPostValidator(new sfValidatorAnd(array(
    new sfValidatorSchemaCompare('password', '==', 'password_check', array('throw_global_error' => true), array('invalid' => 'La contraseña es Invalida')),
)));
  }
}
