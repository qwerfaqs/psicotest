<?php

/**
 * Percentiles form base class.
 *
 * @method Percentiles getObject() Returns the current form's model object
 *
 * @package    psicotest
 * @subpackage form
 * @author     Psicotest
 */
abstract class BasePercentilesForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'escalas_id' => new sfWidgetFormPropelChoice(array('model' => 'Escalas', 'add_empty' => false)),
      'percentil'  => new sfWidgetFormInputText(),
      'desde'      => new sfWidgetFormInputText(),
      'hasta'      => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'escalas_id' => new sfValidatorPropelChoice(array('model' => 'Escalas', 'column' => 'id')),
      'percentil'  => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'desde'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647)),
      'hasta'      => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('percentiles[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Percentiles';
  }


}
