<?php

/**
 * Preguntas filter form base class.
 *
 * @package    psicotest
 * @subpackage filter
 * @author     Psicotest
 */
abstract class BasePreguntasFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'imagen'   => new sfWidgetFormFilterInput(),
      'tests_id' => new sfWidgetFormPropelChoice(array('model' => 'Tests', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'imagen'   => new sfValidatorPass(array('required' => false)),
      'tests_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Tests', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('preguntas_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Preguntas';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'imagen'   => 'Text',
      'tests_id' => 'ForeignKey',
    );
  }
}
