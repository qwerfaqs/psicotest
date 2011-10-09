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
      'preguntas_id' => new sfWidgetFormPropelChoice(array('model' => 'Preguntas', 'add_empty' => true)),
      'estados_id'   => new sfWidgetFormPropelChoice(array('model' => 'Valoresdeverdad', 'add_empty' => true)),
      'opciones_id'  => new sfWidgetFormPropelChoice(array('model' => 'Opciones', 'add_empty' => true)),
      'descripcion'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'preguntas_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Preguntas', 'column' => 'id')),
      'estados_id'   => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Valoresdeverdad', 'column' => 'id')),
      'opciones_id'  => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Opciones', 'column' => 'id')),
      'descripcion'  => new sfValidatorPass(array('required' => false)),
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
      'id'           => 'Number',
      'preguntas_id' => 'ForeignKey',
      'estados_id'   => 'ForeignKey',
      'opciones_id'  => 'ForeignKey',
      'descripcion'  => 'Text',
    );
  }
}
