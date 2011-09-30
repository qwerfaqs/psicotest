<?php

/**
 * Opciones filter form base class.
 *
 * @package    psicotest
 * @subpackage filter
 * @author     Psicotest
 */
abstract class BaseOpcionesFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'texto'         => new sfWidgetFormFilterInput(),
      'tipoopcion_id' => new sfWidgetFormPropelChoice(array('model' => 'Tipoopcion', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'texto'         => new sfValidatorPass(array('required' => false)),
      'tipoopcion_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Tipoopcion', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('opciones_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Opciones';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'texto'         => 'Text',
      'tipoopcion_id' => 'ForeignKey',
    );
  }
}
