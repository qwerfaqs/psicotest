<?php

/**
 * Intencidades filter form base class.
 *
 * @package    psicotest
 * @subpackage filter
 * @author     Psicotest
 */
abstract class BaseIntencidadesFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'opciones_id'   => new sfWidgetFormPropelChoice(array('model' => 'Opciones', 'add_empty' => true)),
      'respuestas_id' => new sfWidgetFormPropelChoice(array('model' => 'Respuestas', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'opciones_id'   => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Opciones', 'column' => 'id')),
      'respuestas_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Respuestas', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('intencidades_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Intencidades';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'opciones_id'   => 'ForeignKey',
      'respuestas_id' => 'ForeignKey',
    );
  }
}
