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
      'tipoopcion_id' => new sfWidgetFormPropelChoice(array('model' => 'Tipoopcion', 'add_empty' => true)),
      'texto'         => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'tipoopcion_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Tipoopcion', 'column' => 'id')),
      'texto'         => new sfValidatorPass(array('required' => false)),
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
      'tipoopcion_id' => 'ForeignKey',
      'texto'         => 'Text',
    );
  }
}
