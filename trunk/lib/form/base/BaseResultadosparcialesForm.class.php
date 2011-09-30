<?php

/**
 * Resultadosparciales form base class.
 *
 * @method Resultadosparciales getObject() Returns the current form's model object
 *
 * @package    psicotest
 * @subpackage form
 * @author     Psicotest
 */
abstract class BaseResultadosparcialesForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'opciones_id'   => new sfWidgetFormPropelChoice(array('model' => 'Opciones', 'add_empty' => false)),
      'preguntas_id'  => new sfWidgetFormPropelChoice(array('model' => 'Preguntas', 'add_empty' => false)),
      'aspirantes_id' => new sfWidgetFormPropelChoice(array('model' => 'Aspirantes', 'add_empty' => false)),
      'pruebas_id'    => new sfWidgetFormPropelChoice(array('model' => 'Pruebas', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'opciones_id'   => new sfValidatorPropelChoice(array('model' => 'Opciones', 'column' => 'id')),
      'preguntas_id'  => new sfValidatorPropelChoice(array('model' => 'Preguntas', 'column' => 'id')),
      'aspirantes_id' => new sfValidatorPropelChoice(array('model' => 'Aspirantes', 'column' => 'id')),
      'pruebas_id'    => new sfValidatorPropelChoice(array('model' => 'Pruebas', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('resultadosparciales[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Resultadosparciales';
  }


}
