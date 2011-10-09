<?php

/**
 * Evaluaciones form base class.
 *
 * @method Evaluaciones getObject() Returns the current form's model object
 *
 * @package    psicotest
 * @subpackage form
 * @author     Psicotest
 */
abstract class BaseEvaluacionesForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(),
      'estadosevaluaciones_id' => new sfWidgetFormPropelChoice(array('model' => 'Estadosevaluaciones', 'add_empty' => false)),
      'cantidad'               => new sfWidgetFormInputText(),
      'fecha'                  => new sfWidgetFormDate(),
      'nombre'                 => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                     => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'estadosevaluaciones_id' => new sfValidatorPropelChoice(array('model' => 'Estadosevaluaciones', 'column' => 'id')),
      'cantidad'               => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'fecha'                  => new sfValidatorDate(array('required' => false)),
      'nombre'                 => new sfValidatorString(array('max_length' => 50, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('evaluaciones[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Evaluaciones';
  }


}
