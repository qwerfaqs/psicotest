<?php

/**
 * Evaluaciones filter form base class.
 *
 * @package    psicotest
 * @subpackage filter
 * @author     Psicotest
 */
abstract class BaseEvaluacionesFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'perfil_id'              => new sfWidgetFormPropelChoice(array('model' => 'Perfil', 'add_empty' => true)),
      'estadosevaluaciones_id' => new sfWidgetFormPropelChoice(array('model' => 'Estadosevaluaciones', 'add_empty' => true)),
      'cantidad'               => new sfWidgetFormFilterInput(),
      'fecha'                  => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'nombre'                 => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'perfil_id'              => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Perfil', 'column' => 'id')),
      'estadosevaluaciones_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Estadosevaluaciones', 'column' => 'id')),
      'cantidad'               => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'fecha'                  => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'nombre'                 => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('evaluaciones_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Evaluaciones';
  }

  public function getFields()
  {
    return array(
      'id'                     => 'Number',
      'perfil_id'              => 'ForeignKey',
      'estadosevaluaciones_id' => 'ForeignKey',
      'cantidad'               => 'Number',
      'fecha'                  => 'Date',
      'nombre'                 => 'Text',
    );
  }
}
