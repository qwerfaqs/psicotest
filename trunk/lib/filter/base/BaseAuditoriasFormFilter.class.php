<?php

/**
 * Auditorias filter form base class.
 *
 * @package    psicotest
 * @subpackage filter
 * @author     Psicotest
 */
abstract class BaseAuditoriasFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'objeto'             => new sfWidgetFormFilterInput(),
      'tipooperacion'      => new sfWidgetFormFilterInput(),
      'created_at'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'descripcion'        => new sfWidgetFormFilterInput(),
      'administradores_id' => new sfWidgetFormPropelChoice(array('model' => 'Administradores', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'objeto'             => new sfValidatorPass(array('required' => false)),
      'tipooperacion'      => new sfValidatorPass(array('required' => false)),
      'created_at'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'descripcion'        => new sfValidatorPass(array('required' => false)),
      'administradores_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Administradores', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('auditorias_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Auditorias';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'objeto'             => 'Text',
      'tipooperacion'      => 'Text',
      'created_at'         => 'Date',
      'descripcion'        => 'Text',
      'administradores_id' => 'ForeignKey',
    );
  }
}
