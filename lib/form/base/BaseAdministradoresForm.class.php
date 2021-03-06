<?php

/**
 * Administradores form base class.
 *
 * @method Administradores getObject() Returns the current form's model object
 *
 * @package    psicotest
 * @subpackage form
 * @author     Psicotest
 */
abstract class BaseAdministradoresForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'usuario'    => new sfWidgetFormInputText(),
      'password'   => new sfWidgetFormInputText(),
      'nombre'     => new sfWidgetFormInputText(),
      'apellido'   => new sfWidgetFormInputText(),
      'created_at' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'usuario'    => new sfValidatorString(array('max_length' => 50)),
      'password'   => new sfValidatorString(array('max_length' => 50)),
      'nombre'     => new sfValidatorString(array('max_length' => 50)),
      'apellido'   => new sfValidatorString(array('max_length' => 20)),
      'created_at' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Administradores', 'column' => array('usuario')))
    );

    $this->widgetSchema->setNameFormat('administradores[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Administradores';
  }


}
