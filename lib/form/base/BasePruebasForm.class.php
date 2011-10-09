<?php

/**
 * Pruebas form base class.
 *
 * @method Pruebas getObject() Returns the current form's model object
 *
 * @package    psicotest
 * @subpackage form
 * @author     Psicotest
 */
abstract class BasePruebasForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'               => new sfWidgetFormInputHidden(),
      'tests_id'         => new sfWidgetFormPropelChoice(array('model' => 'Tests', 'add_empty' => false)),
      'evaluaciones_id'  => new sfWidgetFormPropelChoice(array('model' => 'Evaluaciones', 'add_empty' => false)),
      'estadopruebas_id' => new sfWidgetFormPropelChoice(array('model' => 'Estadopruebas', 'add_empty' => false)),
      'perfil_id'        => new sfWidgetFormPropelChoice(array('model' => 'Perfil', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'id'               => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'tests_id'         => new sfValidatorPropelChoice(array('model' => 'Tests', 'column' => 'id')),
      'evaluaciones_id'  => new sfValidatorPropelChoice(array('model' => 'Evaluaciones', 'column' => 'id')),
      'estadopruebas_id' => new sfValidatorPropelChoice(array('model' => 'Estadopruebas', 'column' => 'id')),
      'perfil_id'        => new sfValidatorPropelChoice(array('model' => 'Perfil', 'column' => 'id', 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('pruebas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Pruebas';
  }


}
