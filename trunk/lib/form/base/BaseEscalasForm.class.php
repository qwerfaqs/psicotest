<?php

/**
 * Escalas form base class.
 *
 * @method Escalas getObject() Returns the current form's model object
 *
 * @package    psicotest
 * @subpackage form
 * @author     Psicotest
 */
abstract class BaseEscalasForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'          => new sfWidgetFormInputHidden(),
      'tests_id'    => new sfWidgetFormPropelChoice(array('model' => 'Tests', 'add_empty' => false)),
      'nombre'      => new sfWidgetFormInputText(),
      'nombreLargo' => new sfWidgetFormInputText(),
      'descripcion' => new sfWidgetFormTextarea(),
    ));

    $this->setValidators(array(
      'id'          => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'tests_id'    => new sfValidatorPropelChoice(array('model' => 'Tests', 'column' => 'id')),
      'nombre'      => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'nombreLargo' => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'descripcion' => new sfValidatorString(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('escalas[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Escalas';
  }


}
