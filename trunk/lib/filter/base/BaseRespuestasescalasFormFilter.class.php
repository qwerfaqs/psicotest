<?php

/**
 * Respuestasescalas filter form base class.
 *
 * @package    psicotest
 * @subpackage filter
 * @author     Psicotest
 */
abstract class BaseRespuestasescalasFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'respuestas_id' => new sfWidgetFormPropelChoice(array('model' => 'Respuestas', 'add_empty' => true)),
      'escalas_id'    => new sfWidgetFormPropelChoice(array('model' => 'Escalas', 'add_empty' => true)),
      'valor'         => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'respuestas_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Respuestas', 'column' => 'id')),
      'escalas_id'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Escalas', 'column' => 'id')),
      'valor'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('respuestasescalas_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Respuestasescalas';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'respuestas_id' => 'ForeignKey',
      'escalas_id'    => 'ForeignKey',
      'valor'         => 'Number',
    );
  }
}
