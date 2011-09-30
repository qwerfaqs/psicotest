<?php

/**
 * Opciones form base class.
 *
 * @method Opciones getObject() Returns the current form's model object
 *
 * @package    psicotest
 * @subpackage form
 * @author     Psicotest
 */
abstract class BaseOpcionesForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'texto'         => new sfWidgetFormInputText(),
      'tipoopcion_id' => new sfWidgetFormPropelChoice(array('model' => 'Tipoopcion', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'texto'         => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'tipoopcion_id' => new sfValidatorPropelChoice(array('model' => 'Tipoopcion', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('opciones[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Opciones';
  }


}
