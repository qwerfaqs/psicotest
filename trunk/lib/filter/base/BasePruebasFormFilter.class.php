<?php

/**
 * Pruebas filter form base class.
 *
 * @package    psicotest
 * @subpackage filter
 * @author     Psicotest
 */
abstract class BasePruebasFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'tests_id'         => new sfWidgetFormPropelChoice(array('model' => 'Tests', 'add_empty' => true)),
      'evaluaciones_id'  => new sfWidgetFormPropelChoice(array('model' => 'Evaluaciones', 'add_empty' => true)),
      'estadopruebas_id' => new sfWidgetFormPropelChoice(array('model' => 'Estadopruebas', 'add_empty' => true)),
      'created_at'       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'tests_id'         => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Tests', 'column' => 'id')),
      'evaluaciones_id'  => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Evaluaciones', 'column' => 'id')),
      'estadopruebas_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Estadopruebas', 'column' => 'id')),
      'created_at'       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('pruebas_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Pruebas';
  }

  public function getFields()
  {
    return array(
      'id'               => 'Number',
      'tests_id'         => 'ForeignKey',
      'evaluaciones_id'  => 'ForeignKey',
      'estadopruebas_id' => 'ForeignKey',
      'created_at'       => 'Date',
    );
  }
}
