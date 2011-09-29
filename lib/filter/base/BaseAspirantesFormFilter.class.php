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
      'nombre'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'apellido' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cedula'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'password' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'nombre'   => new sfValidatorPass(array('required' => false)),
      'apellido' => new sfValidatorPass(array('required' => false)),
      'cedula'   => new sfValidatorPass(array('required' => false)),
      'password' => new sfValidatorPass(array('required' => false)),
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
      'id'       => 'Number',
      'nombre'   => 'Text',
      'apellido' => 'Text',
      'cedula'   => 'Text',
      'password' => 'Text',
    );
  }
}
