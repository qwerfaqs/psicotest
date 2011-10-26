<?php

/**
 * Pruebas form.
 *
 * @package    psicotest
 * @subpackage form
 * @author     Psicotest
 */
class PruebasForm extends BasePruebasForm
{
  public function configure()
  {
      unset(
      $this['created_at']
    );
  }
}
