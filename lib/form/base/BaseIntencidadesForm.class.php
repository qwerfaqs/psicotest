<?php

/**
 * Intencidades form base class.
 *
 * @method Intencidades getObject() Returns the current form's model object
 *
 * @package    psicotest
 * @subpackage form
 * @author     Psicotest
 */
abstract class BaseIntencidadesForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'opciones_id'   => new sfWidgetFormPropelChoice(array('model' => 'Opciones', 'add_empty' => false)),
      'respuestas_id' => new sfWidgetFormPropelChoice(array('model' => 'Respuestas', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'opciones_id'   => new sfValidatorPropelChoice(array('model' => 'Opciones', 'column' => 'id')),
      'respuestas_id' => new sfValidatorPropelChoice(array('model' => 'Respuestas', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('intencidades[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Intencidades';
  }


}
