<?php

/**
 * Aspirantes filter form base class.
 *
 * @package    psicotest
 * @subpackage filter
 * @author     Psicotest
 */
abstract class BaseAspirantesFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'          => new sfWidgetFormFilterInput(),
      'apellido'        => new sfWidgetFormFilterInput(),
      'cedula'          => new sfWidgetFormFilterInput(),
      'sexo'            => new sfWidgetFormFilterInput(),
      'fechanacimiento' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'password'        => new sfWidgetFormFilterInput(),
      'created_at'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'nombre'          => new sfValidatorPass(array('required' => false)),
      'apellido'        => new sfValidatorPass(array('required' => false)),
      'cedula'          => new sfValidatorPass(array('required' => false)),
      'sexo'            => new sfValidatorPass(array('required' => false)),
      'fechanacimiento' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
      'password'        => new sfValidatorPass(array('required' => false)),
      'created_at'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('aspirantes_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Aspirantes';
  }

  public function getFields()
  {
    return array(
      'id'              => 'Number',
      'nombre'          => 'Text',
      'apellido'        => 'Text',
      'cedula'          => 'Text',
      'sexo'            => 'Text',
      'fechanacimiento' => 'Date',
      'password'        => 'Text',
      'created_at'      => 'Date',
    );
  }
}
