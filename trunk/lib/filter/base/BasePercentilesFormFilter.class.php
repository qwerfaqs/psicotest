<?php

/**
 * Percentiles filter form base class.
 *
 * @package    psicotest
 * @subpackage filter
 * @author     Psicotest
 */
abstract class BasePercentilesFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'escalas_id' => new sfWidgetFormPropelChoice(array('model' => 'Escalas', 'add_empty' => true)),
      'percentil'  => new sfWidgetFormFilterInput(),
      'desde'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'hasta'      => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'escalas_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Escalas', 'column' => 'id')),
      'percentil'  => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'desde'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'hasta'      => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('percentiles_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Percentiles';
  }

  public function getFields()
  {
    return array(
      'id'         => 'Number',
      'escalas_id' => 'ForeignKey',
      'percentil'  => 'Number',
      'desde'      => 'Number',
      'hasta'      => 'Number',
    );
  }
}
