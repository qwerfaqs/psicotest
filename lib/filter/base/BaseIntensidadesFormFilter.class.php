<?php

/**
 * Intensidades filter form base class.
 *
 * @package    psicotest
 * @subpackage filter
 * @author     Psicotest
 */
abstract class BaseIntensidadesFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'resultadosparciales_id' => new sfWidgetFormPropelChoice(array('model' => 'Resultadosparciales', 'add_empty' => true)),
      'opciones_id'            => new sfWidgetFormPropelChoice(array('model' => 'Opciones', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'resultadosparciales_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Resultadosparciales', 'column' => 'id')),
      'opciones_id'            => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Opciones', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('intensidades_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Intensidades';
  }

  public function getFields()
  {
    return array(
      'id'                     => 'Number',
      'resultadosparciales_id' => 'ForeignKey',
      'opciones_id'            => 'ForeignKey',
    );
  }
}
