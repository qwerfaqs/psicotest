<?php

/**
 * Asistencias form base class.
 *
 * @method Asistencias getObject() Returns the current form's model object
 *
 * @package    psicotest
 * @subpackage form
 * @author     Psicotest
 */
abstract class BaseAsistenciasForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'              => new sfWidgetFormInputHidden(),
      'evaluaciones_id' => new sfWidgetFormPropelChoice(array('model' => 'Evaluaciones', 'add_empty' => false)),
      'aspirantes_id'   => new sfWidgetFormPropelChoice(array('model' => 'Aspirantes', 'add_empty' => false)),
      'created_at'      => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'              => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'evaluaciones_id' => new sfValidatorPropelChoice(array('model' => 'Evaluaciones', 'column' => 'id')),
      'aspirantes_id'   => new sfValidatorPropelChoice(array('model' => 'Aspirantes', 'column' => 'id')),
      'created_at'      => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('asistencias[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Asistencias';
  }


}
