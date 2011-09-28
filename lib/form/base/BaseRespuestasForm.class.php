<?php

/**
 * Respuestas form base class.
 *
 * @method Respuestas getObject() Returns the current form's model object
 *
 * @package    psicotest
 * @subpackage form
 * @author     Psicotest
 */
abstract class BaseRespuestasForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'texto'         => new sfWidgetFormInputText(),
      'respuestas_id' => new sfWidgetFormPropelChoice(array('model' => 'Preguntas', 'add_empty' => false)),
      'estados_id'    => new sfWidgetFormPropelChoice(array('model' => 'Valoresdeverdad', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'texto'         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'respuestas_id' => new sfValidatorPropelChoice(array('model' => 'Preguntas', 'column' => 'id')),
      'estados_id'    => new sfValidatorPropelChoice(array('model' => 'Valoresdeverdad', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('respuestas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Respuestas';
  }


}
