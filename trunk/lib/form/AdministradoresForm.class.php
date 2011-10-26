<?php

/**
 * Administradores form.
 *
 * @package    psicotest
 * @subpackage form
 * @author     Psicotest
 */
class AdministradoresForm extends BaseAdministradoresForm
{
  public function configure()
  {
      unset(
      $this['created_at']
    );
  }
}
