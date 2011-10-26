<?php

/**
 * Asistencias form.
 *
 * @package    psicotest
 * @subpackage form
 * @author     Psicotest
 */
class AsistenciasForm extends BaseAsistenciasForm
{
  public function configure()
  {
        unset(
      $this['created_at']
    );
  }
}
