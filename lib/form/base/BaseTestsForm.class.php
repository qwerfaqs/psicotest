<?php

/**
 * Tests form base class.
 *
 * @method Tests getObject() Returns the current form's model object
 *
 * @package    psicotest
 * @subpackage form
 * @author     Psicotest
 */
abstract class BaseTestsForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'titulo'             => new sfWidgetFormInputText(),
      'historia'           => new sfWidgetFormTextarea(),
      'enunciado'          => new sfWidgetFormTextarea(),
      'imagen'             => new sfWidgetFormInputText(),
      'duracion'           => new sfWidgetFormInputText(),
      'puntaje_aprobacion' => new sfWidgetFormInputText(),
      'tipoopcion_id'      => new sfWidgetFormPropelChoice(array('model' => 'Tipoopcion', 'add_empty' => false)),
      'tests_id'           => new sfWidgetFormPropelChoice(array('model' => 'Tests', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'titulo'             => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'historia'           => new sfValidatorString(array('required' => false)),
      'enunciado'          => new sfValidatorString(array('required' => false)),
      'imagen'             => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'duracion'           => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'puntaje_aprobacion' => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'tipoopcion_id'      => new sfValidatorPropelChoice(array('model' => 'Tipoopcion', 'column' => 'id')),
      'tests_id'           => new sfValidatorPropelChoice(array('model' => 'Tests', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('tests[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tests';
  }


}
