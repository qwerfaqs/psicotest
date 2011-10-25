<?php

/**
 * Valores filter form base class.
 *
 * @package    psicotest
 * @subpackage filter
 * @author     Psicotest
 */
abstract class BaseValoresFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'celda'    => new sfWidgetFormFilterInput(),
      'valor'    => new sfWidgetFormFilterInput(),
      'hojas_id' => new sfWidgetFormPropelChoice(array('model' => 'Hojas', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'celda'    => new sfValidatorPass(array('required' => false)),
      'valor'    => new sfValidatorPass(array('required' => false)),
      'hojas_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Hojas', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('valores_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Valores';
  }

  public function getFields()
  {
    return array(
      'id'       => 'Number',
      'celda'    => 'Text',
      'valor'    => 'Text',
      'hojas_id' => 'ForeignKey',
    );
  }
}
