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
      'id'                   => new sfWidgetFormInputHidden(),
      'pruebas_id'           => new sfWidgetFormPropelChoice(array('model' => 'Pruebas', 'add_empty' => false)),
      'aspirantes_id'        => new sfWidgetFormPropelChoice(array('model' => 'Aspirantes', 'add_empty' => false)),
      'duracion'             => new sfWidgetFormInputText(),
      'puntaje'              => new sfWidgetFormInputText(),
      'estadosresultados_id' => new sfWidgetFormPropelChoice(array('model' => 'Estadosresultados', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'pruebas_id'           => new sfValidatorPropelChoice(array('model' => 'Pruebas', 'column' => 'id')),
      'aspirantes_id'        => new sfValidatorPropelChoice(array('model' => 'Aspirantes', 'column' => 'id')),
      'duracion'             => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'puntaje'              => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'estadosresultados_id' => new sfValidatorPropelChoice(array('model' => 'Estadosresultados', 'column' => 'id', 'required' => false)),
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
