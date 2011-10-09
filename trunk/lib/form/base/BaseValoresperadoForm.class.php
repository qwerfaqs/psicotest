<?php

/**
 * Valoresperado form base class.
 *
 * @method Valoresperado getObject() Returns the current form's model object
 *
 * @package    psicotest
 * @subpackage form
 * @author     Psicotest
 */
abstract class BaseValoresperadoForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'         => new sfWidgetFormInputHidden(),
      'perfil_id'  => new sfWidgetFormPropelChoice(array('model' => 'Perfil', 'add_empty' => false)),
      'escalas_id' => new sfWidgetFormPropelChoice(array('model' => 'Escalas', 'add_empty' => false)),
      'mayorque'   => new sfWidgetFormInputText(),
      'menorque'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'         => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'perfil_id'  => new sfValidatorPropelChoice(array('model' => 'Perfil', 'column' => 'id')),
      'escalas_id' => new sfValidatorPropelChoice(array('model' => 'Escalas', 'column' => 'id')),
      'mayorque'   => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
      'menorque'   => new sfValidatorInteger(array('min' => -2147483648, 'max' => 2147483647, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('valoresperado[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Valoresperado';
  }


}
