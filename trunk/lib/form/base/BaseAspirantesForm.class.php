<?php

/**
 * Aspirantes form base class.
 *
 * @method Aspirantes getObject() Returns the current form's model object
 *
 * @package    psicotest
 * @subpackage form
 * @author     Psicotest
 */
abstract class BaseAspirantesForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'       => new sfWidgetFormInputHidden(),
      'nombre'   => new sfWidgetFormInputText(),
      'apellido' => new sfWidgetFormInputText(),
      'cedula'   => new sfWidgetFormInputText(),
      'password' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'       => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'nombre'   => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'apellido' => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'cedula'   => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'password' => new sfValidatorString(array('max_length' => 20, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('aspirantes[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Aspirantes';
  }


}
