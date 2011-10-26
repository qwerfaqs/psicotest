<?php

/**
 * Auditorias form base class.
 *
 * @method Auditorias getObject() Returns the current form's model object
 *
 * @package    psicotest
 * @subpackage form
 * @author     Psicotest
 */
abstract class BaseAuditoriasForm extends BaseFormPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'objeto'             => new sfWidgetFormInputText(),
      'tipooperacion'      => new sfWidgetFormInputText(),
      'created_at'         => new sfWidgetFormDateTime(),
      'descripcion'        => new sfWidgetFormTextarea(),
      'administradores_id' => new sfWidgetFormPropelChoice(array('model' => 'Administradores', 'add_empty' => false)),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->getId()), 'empty_value' => $this->getObject()->getId(), 'required' => false)),
      'objeto'             => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'tipooperacion'      => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'created_at'         => new sfValidatorDateTime(array('required' => false)),
      'descripcion'        => new sfValidatorString(array('required' => false)),
      'administradores_id' => new sfValidatorPropelChoice(array('model' => 'Administradores', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('auditorias[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Auditorias';
  }


}
