<?php

/**
 * Valores form base class.
 *
 * @method Valores getObject() Returns the current form's model object
 *
 * @package    psicotest
 * @subpackage form
 * @author     Psicotest
 */
abstract class BaseValoresForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'       => new sfWidgetFormInputHidden(),
      'celda'    => new sfWidgetFormInputText(),
      'valor'    => new sfWidgetFormInputText(),
      'hojas_id' => new sfWidgetFormPropelChoice(array('model' => 'Hojas', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'       => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'celda'    => new sfValidatorString(array('max_length' => 10, 'required' => false)),
      'valor'    => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'hojas_id' => new sfValidatorPropelChoice(array('model' => 'Hojas', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('valores[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Valores';
  }


}
