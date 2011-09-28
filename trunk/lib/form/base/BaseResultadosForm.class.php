<?php

/**
 * Resultados form base class.
 *
 * @method Resultados getObject() Returns the current form's model object
 *
 * @package    psicotest
 * @subpackage form
 * @author     Psicotest
 */
abstract class BaseResultadosForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'duracion'      => new sfWidgetFormInputText(),
      'puntaje'       => new sfWidgetFormInputText(),
      'pruebas_id'    => new sfWidgetFormPropelChoice(array('model' => 'Pruebas', 'add_empty' => false)),
      'aspirantes_id' => new sfWidgetFormPropelChoice(array('model' => 'Aspirantes', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'duracion'      => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'puntaje'       => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'pruebas_id'    => new sfValidatorPropelChoice(array('model' => 'Pruebas', 'column' => 'id')),
      'aspirantes_id' => new sfValidatorPropelChoice(array('model' => 'Aspirantes', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('resultados[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Resultados';
  }


}
