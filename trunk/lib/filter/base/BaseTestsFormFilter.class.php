<?php

/**
 * Tests filter form base class.
 *
 * @package    psicotest
 * @subpackage filter
 * @author     Psicotest
 */
abstract class BaseTestsFormFilter extends BaseFormFilterPropel
{
  public function setup()
  {
    $this->setWidgets(array(
      'titulo'             => new sfWidgetFormFilterInput(),
      'historia'           => new sfWidgetFormFilterInput(),
      'enunciado'          => new sfWidgetFormFilterInput(),
      'imagen'             => new sfWidgetFormFilterInput(),
      'duracion'           => new sfWidgetFormFilterInput(),
      'puntaje_aprobacion' => new sfWidgetFormFilterInput(),
      'paginacion'         => new sfWidgetFormFilterInput(),
      'tipoopcion_id'      => new sfWidgetFormPropelChoice(array('model' => 'Tipoopcion', 'add_empty' => true)),
      'tests_id'           => new sfWidgetFormPropelChoice(array('model' => 'Tests', 'add_empty' => true)),
    ));

    $this->setValidators(array(
      'titulo'             => new sfValidatorPass(array('required' => false)),
      'historia'           => new sfValidatorPass(array('required' => false)),
      'enunciado'          => new sfValidatorPass(array('required' => false)),
      'imagen'             => new sfValidatorPass(array('required' => false)),
      'duracion'           => new sfValidatorPass(array('required' => false)),
      'puntaje_aprobacion' => new sfValidatorPass(array('required' => false)),
      'paginacion'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'tipoopcion_id'      => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Tipoopcion', 'column' => 'id')),
      'tests_id'           => new sfValidatorPropelChoice(array('required' => false, 'model' => 'Tests', 'column' => 'id')),
    ));

    $this->widgetSchema->setNameFormat('tests_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    parent::setup();
  }

  public function getModelName()
  {
    return 'Tests';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'titulo'             => 'Text',
      'historia'           => 'Text',
      'enunciado'          => 'Text',
      'imagen'             => 'Text',
      'duracion'           => 'Text',
      'puntaje_aprobacion' => 'Text',
      'paginacion'         => 'Number',
      'tipoopcion_id'      => 'ForeignKey',
      'tests_id'           => 'ForeignKey',
    );
  }
}
