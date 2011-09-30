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
      'usuario'  => new sfWidgetFormFilterInput(),
      'password' => new sfWidgetFormFilterInput(),
      'nombre'   => new sfWidgetFormFilterInput(),
      'apellido' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'usuario'  => new sfValidatorPass(array('required' => false)),
      'password' => new sfValidatorPass(array('required' => false)),
      'nombre'   => new sfValidatorPass(array('required' => false)),
      'apellido' => new sfValidatorPass(array('required' => false)),
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
      'id'       => 'Number',
      'usuario'  => 'Text',
      'password' => 'Text',
      'nombre'   => 'Text',
      'apellido' => 'Text',
    );
  }
}
