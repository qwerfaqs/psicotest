<?php

/**
 * Resultadosparciales filter form base class.
 *
 * @package    psicotest
 * @subpackage filter
 * @author     Psicotest
 */
abstract class BaseResultadosparcialesFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'aspirantes_id' => new sfWidgetFormPropelChoice(array('model' => 'Aspirantes', 'add_empty' => true)),
      'pruebas_id'    => new sfWidgetFormPropelChoice(array('model' => 'Pruebas', 'add_empty' => true)),
      'preguntas_id'  => new sfWidgetFormPropelChoice(array('model' => 'Preguntas', 'add_empty' => true)),
      'opciones_id'   => new sfWidgetFormPropelChoice(array('model' => 'Opciones', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'aspirantes_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Aspirantes', 'column' => 'id')),
      'pruebas_id'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Pruebas', 'column' => 'id')),
      'preguntas_id'  => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Preguntas', 'column' => 'id')),
      'opciones_id'   => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Opciones', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('resultadosparciales_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Resultadosparciales';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'aspirantes_id' => 'ForeignKey',
      'pruebas_id'    => 'ForeignKey',
      'preguntas_id'  => 'ForeignKey',
      'opciones_id'   => 'ForeignKey',
    );
  }
}
