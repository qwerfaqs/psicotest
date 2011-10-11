<?php

/**
 * Resultados filter form base class.
 *
 * @package    psicotest
 * @subpackage filter
 * @author     Psicotest
 */
abstract class BaseResultadosFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'pruebas_id'           => new sfWidgetFormPropelChoice(array('model' => 'Pruebas', 'add_empty' => true)),
      'aspirantes_id'        => new sfWidgetFormPropelChoice(array('model' => 'Aspirantes', 'add_empty' => true)),
      'duracion'             => new sfWidgetFormFilterInput(),
      'puntaje'              => new sfWidgetFormFilterInput(),
      'estadosresultados_id' => new sfWidgetFormPropelChoice(array('model' => 'Estadosresultados', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'pruebas_id'           => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Pruebas', 'column' => 'id')),
      'aspirantes_id'        => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Aspirantes', 'column' => 'id')),
      'duracion'             => new sfValidatorPass(array('required' => false)),
      'puntaje'              => new sfValidatorPass(array('required' => false)),
      'estadosresultados_id' => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Estadosresultados', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('resultados_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Resultados';
  }

  public function getFields()
  {
    return array(
      'id'                   => 'Number',
      'pruebas_id'           => 'ForeignKey',
      'aspirantes_id'        => 'ForeignKey',
      'duracion'             => 'Text',
      'puntaje'              => 'Text',
      'estadosresultados_id' => 'ForeignKey',
    );
  }
}
