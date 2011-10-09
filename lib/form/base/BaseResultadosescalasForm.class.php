<?php

/**
 * Resultadosescalas form base class.
 *
 * @method Resultadosescalas getObject() Returns the current form's model object
 *
 * @package    psicotest
 * @subpackage form
 * @author     Psicotest
 */
abstract class BaseResultadosescalasForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'resultados_id' => new sfWidgetFormPropelChoice(array('model' => 'Resultados', 'add_empty' => false)),
      'escalas_id'    => new sfWidgetFormPropelChoice(array('model' => 'Escalas', 'add_empty' => false)),
      'valor'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'resultados_id' => new sfValidatorPropelChoice(array('model' => 'Resultados', 'column' => 'id')),
      'escalas_id'    => new sfValidatorPropelChoice(array('model' => 'Escalas', 'column' => 'id')),
      'valor'         => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('resultadosescalas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Resultadosescalas';
  }


}
