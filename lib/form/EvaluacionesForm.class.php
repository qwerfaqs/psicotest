<?php

/**
 * Evaluaciones form.
 *
 * @package    psicotest
 * @subpackage form
 * @author     Psicotest
 */
class EvaluacionesForm extends BaseEvaluacionesForm
{
  public function configure()
  {
       unset(
      $this['fecha']
    );
  }
}
