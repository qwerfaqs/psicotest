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
      'tests_id'    => new sfWidgetFormPropelChoice(array('model' => 'Tests', 'add_empty' => true)),
      'imagen'      => new sfWidgetFormFilterInput(),
      'descripcion' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'tests_id'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Tests', 'column' => 'id')),
      'imagen'      => new sfValidatorPass(array('required' => false)),
      'descripcion' => new sfValidatorPass(array('required' => false)),
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
      'id'          => 'Number',
      'tests_id'    => 'ForeignKey',
      'imagen'      => 'Text',
      'descripcion' => 'Text',
    );
  }
}
