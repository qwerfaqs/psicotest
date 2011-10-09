<?php

/**
 * Respuestasescalas form base class.
 *
 * @method Respuestasescalas getObject() Returns the current form's model object
 *
 * @package    psicotest
 * @subpackage form
 * @author     Psicotest
 */
abstract class BaseRespuestasescalasForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'respuestas_id' => new sfWidgetFormPropelChoice(array('model' => 'Respuestas', 'add_empty' => false)),
      'escalas_id'    => new sfWidgetFormPropelChoice(array('model' => 'Escalas', 'add_empty' => false)),
      'valor'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'respuestas_id' => new sfValidatorPropelChoice(array('model' => 'Respuestas', 'column' => 'id')),
      'escalas_id'    => new sfValidatorPropelChoice(array('model' => 'Escalas', 'column' => 'id')),
      'valor'         => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('respuestasescalas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Respuestasescalas';
  }


}
