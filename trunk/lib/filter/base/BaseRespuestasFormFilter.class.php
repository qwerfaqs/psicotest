<?php

/**
 * Respuestas filter form base class.
 *
 * @package    psicotest
 * @subpackage filter
 * @author     Psicotest
 */
abstract class BaseRespuestasFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'texto'         => new sfWidgetFormFilterInput(),
      'respuestas_id' => new sfWidgetFormPropelChoice(array('model' => 'Preguntas', 'add_empty' => true)),
      'estados_id'    => new sfWidgetFormPropelChoice(array('model' => 'Valoresdeverdad', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'texto'         => new sfValidatorPass(array('required' => false)),
      'respuestas_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Preguntas', 'column' => 'id')),
      'estados_id'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Valoresdeverdad', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('respuestas_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Respuestas';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'texto'         => 'Text',
      'respuestas_id' => 'ForeignKey',
      'estados_id'    => 'ForeignKey',
    );
  }
}
