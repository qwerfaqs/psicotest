<?php


/**
 * Skeleton subclass for representing a row from the 'estadosevaluaciones' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * 09/28/11 17:10:08
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    lib.model
 */
class Estadosevaluaciones extends BaseEstadosevaluaciones {
public function __toString() {
    return $this->getNombre();
}
} // Estadosevaluaciones
