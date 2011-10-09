<?php

/**
 * Escalas filter form base class.
 *
 * @package    psicotest
 * @subpackage filter
 * @author     Psicotest
 */
abstract class BaseEscalasFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'tests_id'    => new sfWidgetFormPropelChoice(array('model' => 'Tests', 'add_empty' => true)),
      'nombre'      => new sfWidgetFormFilterInput(),
      'nombreLargo' => new sfWidgetFormFilterInput(),
      'descripcion' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'tests_id'    => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Tests', 'column' => 'id')),
      'nombre'      => new sfValidatorPass(array('required' => false)),
      'nombreLargo' => new sfValidatorPass(array('required' => false)),
      'descripcion' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('escalas_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Escalas';
  }

  public function getFields()
  {
    return array(
      'id'          => 'Number',
      'tests_id'    => 'ForeignKey',
      'nombre'      => 'Text',
      'nombreLargo' => 'Text',
      'descripcion' => 'Text',
    );
  }
}
