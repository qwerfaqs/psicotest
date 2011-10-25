<?php

/**
 * Administradores filter form base class.
 *
 * @package    psicotest
 * @subpackage filter
 * @author     Psicotest
 */
abstract class BaseAdministradoresFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'usuario'    => new sfWidgetFormFilterInput(),
      'password'   => new sfWidgetFormFilterInput(),
      'nombre'     => new sfWidgetFormFilterInput(),
      'apellido'   => new sfWidgetFormFilterInput(),
      'created_at' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'usuario'    => new sfValidatorPass(array('required' => false)),
      'password'   => new sfValidatorPass(array('required' => false)),
      'nombre'     => new sfValidatorPass(array('required' => false)),
      'apellido'   => new sfValidatorPass(array('required' => false)),
      'created_at' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDate(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('administradores_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Administradores';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'usuario'    => 'Text',
      'password'   => 'Text',
      'nombre'     => 'Text',
      'apellido'   => 'Text',
      'created_at' => 'Date',
    );
  }
}
