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
      'titulo'    => new sfWidgetFormFilterInput(),
      'historia'  => new sfWidgetFormFilterInput(),
      'enunciado' => new sfWidgetFormFilterInput(),
      'imagen'    => new sfWidgetFormFilterInput(),
      'duracion'  => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'titulo'    => new sfValidatorPass(array('required' => false)),
      'historia'  => new sfValidatorPass(array('required' => false)),
      'enunciado' => new sfValidatorPass(array('required' => false)),
      'imagen'    => new sfValidatorPass(array('required' => false)),
      'duracion'  => new sfValidatorPass(array('required' => false)),
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
      'id'        => 'Number',
      'titulo'    => 'Text',
      'historia'  => 'Text',
      'enunciado' => 'Text',
      'imagen'    => 'Text',
      'duracion'  => 'Text',
    );
  }
}
