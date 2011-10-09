<?php

/**
 * Perfil filter form base class.
 *
 * @package    psicotest
 * @subpackage filter
 * @author     Psicotest
 */
abstract class BasePerfilFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'nombre'      => new sfWidgetFormFilterInput(),
      'descripcion' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'nombre'      => new sfValidatorPass(array('required' => false)),
      'descripcion' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('perfil_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Perfil';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'nombre'      => 'Text',
      'descripcion' => 'Text',
    );
  }
}
