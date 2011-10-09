<?php

/**
 * Resultadosescalas filter form base class.
 *
 * @package    psicotest
 * @subpackage filter
 * @author     Psicotest
 */
abstract class BaseResultadosescalasFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'resultados_id' => new sfWidgetFormPropelChoice(array('model' => 'Resultados', 'add_empty' => true)),
      'escalas_id'    => new sfWidgetFormPropelChoice(array('model' => 'Escalas', 'add_empty' => true)),
      'valor'         => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'resultados_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Resultados', 'column' => 'id')),
      'escalas_id'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Escalas', 'column' => 'id')),
      'valor'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('resultadosescalas_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Resultadosescalas';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'resultados_id' => 'ForeignKey',
      'escalas_id'    => 'ForeignKey',
      'valor'         => 'Number',
    );
  }
}
