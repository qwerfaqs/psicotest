<?php

/**
 * Intensidades form base class.
 *
 * @method Intensidades getObject() Returns the current form's model object
 *
 * @package    psicotest
 * @subpackage form
 * @author     Psicotest
 */
abstract class BaseIntensidadesForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                     => new sfWidgetFormInputHidden(),
      'resultadosparciales_id' => new sfWidgetFormPropelChoice(array('model' => 'Resultadosparciales', 'add_empty' => false)),
      'opciones_id'            => new sfWidgetFormPropelChoice(array('model' => 'Opciones', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'                     => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'resultadosparciales_id' => new sfValidatorPropelChoice(array('model' => 'Resultadosparciales', 'column' => 'id')),
      'opciones_id'            => new sfValidatorPropelChoice(array('model' => 'Opciones', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('intensidades[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Intensidades';
  }


}
