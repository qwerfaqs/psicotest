<?php

/**
 * Asistencias filter form base class.
 *
 * @package    psicotest
 * @subpackage filter
 * @author     Psicotest
 */
abstract class BaseAsistenciasFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'evaluaciones_id' => new sfWidgetFormPropelChoice(array('model' => 'Evaluaciones', 'add_empty' => true)),
      'aspirantes_id'   => new sfWidgetFormPropelChoice(array('model' => 'Aspirantes', 'add_empty' => true)),
      'created_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'evaluaciones_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Evaluaciones', 'column' => 'id')),
      'aspirantes_id'   => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Aspirantes', 'column' => 'id')),
      'created_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('asistencias_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Asistencias';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'evaluaciones_id' => 'ForeignKey',
      'aspirantes_id'   => 'ForeignKey',
      'created_at'      => 'Date',
    );
  }
}
