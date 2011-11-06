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
      'id'              => new sfWidgetFormInputHidden(),
      'nombre'          => new sfWidgetFormInputText(),
      'apellido'        => new sfWidgetFormInputText(),
      'cedula'          => new sfWidgetFormInputText(),
      'sexo'            => new sfWidgetFormInputText(),
      'fechanacimiento' => new sfWidgetFormDate(),
      'password'        => new sfWidgetFormInputText(),
      'created_at'      => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'nombre'          => new sfValidatorString(array('max_length' => 60)),
      'apellido'        => new sfValidatorString(array('max_length' => 60)),
      'cedula'          => new sfValidatorString(array('max_length' => 30)),
      'sexo'            => new sfValidatorString(array('max_length' => 1)),
      'fechanacimiento' => new sfValidatorDate(),
      'password'        => new sfValidatorString(array('max_length' => 20)),
      'created_at'      => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorPropelUnique(array('model' => 'Aspirantes', 'column' => array('cedula')))
    );

    $this->widgetSchema->setNameFormat('aspirantes[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Aspirantes';
  }


}
