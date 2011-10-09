<?php

/**
 * Valoresperado filter form base class.
 *
 * @package    psicotest
 * @subpackage filter
 * @author     Psicotest
 */
abstract class BaseValoresperadoFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'perfil_id'  => new sfWidgetFormPropelChoice(array('model' => 'Perfil', 'add_empty' => true)),
      'escalas_id' => new sfWidgetFormPropelChoice(array('model' => 'Escalas', 'add_empty' => true)),
      'mayorque'   => new sfWidgetFormFilterInput(),
      'menorque'   => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'perfil_id'  => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Perfil', 'column' => 'id')),
      'escalas_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Escalas', 'column' => 'id')),
      'mayorque'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'menorque'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('valoresperado_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Valoresperado';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'perfil_id'  => 'ForeignKey',
      'escalas_id' => 'ForeignKey',
      'mayorque'   => 'Number',
      'menorque'   => 'Number',
    );
  }
}
