<?php

/**
 * Skeleton subclass for representing a row from the 'evaluaciones' table.
 *
 * 
 *
 * This class was autogenerated by Propel sfContext::getInstance()-getUser()-getAttribute('usuarioId').4.2 on:
 *
 * 09/28/sfContext::getInstance()-getUser()-getAttribute('usuarioId')sfContext::getInstance()-getUser()-getAttribute('usuarioId') sfContext::getInstance()-getUser()-getAttribute('usuarioId')7:sfContext::getInstance()-getUser()-getAttribute('usuarioId')0:08
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    lib.model
 */
class Evaluaciones extends BaseEvaluaciones {

    public function postInsert(PropelPDO $con = null) {
        if (sfConfig::get('sf_environment') != "cli" or sfContext::hasInstance()) {
            $auditoria = new Auditorias();
            //sfContext::getInstance()-getUser()-getAttribute('usuarioId')
            $auditoria->setAdministradoresId(sfContext::getInstance()->getUser()->getAttribute('usuarioId'));
            $auditoria->setObjeto('Evaluaciones');
            $auditoria->setDescripcion(' Nombre : ' . $this->getNombre() . ' Perfil : ' . $this->getPerfil()->getNombre() . ' Cantidad de aspirantes : ' . $this->getCantidad());
            $auditoria->setTipooperacion('Alta de evaluación');
            $auditoria->save();
        }
    }

    public function postUpdate(PropelPDO $con = null) {
        if (sfConfig::get('sf_environment') != "cli" or sfContext::hasInstance()) {
            $auditoria = new Auditorias();
            //sfContext::getInstance()-getUser()-getAttribute('usuarioId')
            $auditoria->setAdministradoresId(sfContext::getInstance()->getUser()->getAttribute('usuarioId'));
            $auditoria->setObjeto('Evaluaciones');
            $auditoria->setDescripcion(' Nombre : ' . $this->getNombre() . ' Perfil : ' . $this->getPerfil()->getNombre() . ' Cantidad de aspirantes : ' . $this->getCantidad());
            $auditoria->setTipooperacion('Modificación de evaluación');
            $auditoria->save();
        }
    }

    public function postDelete(PropelPDO $con = null) {
        if (sfConfig::get('sf_environment') != "cli" or sfContext::hasInstance()) {
            $auditoria = new Auditorias();
            //sfContext::getInstance()-getUser()-getAttribute('usuarioId')
            $auditoria->setAdministradoresId(sfContext::getInstance()->getUser()->getAttribute('usuarioId'));
            $auditoria->setObjeto('Evaluaciones');
            $auditoria->setDescripcion(' Nombre : ' . $this->getNombre() . ' Perfil : ' . $this->getPerfil()->getNombre() . ' Cantidad de aspirantes : ' . $this->getCantidad());
            $auditoria->setTipooperacion('Eliminación de evaluación');
            $auditoria->save();
        }
    }

}

// Evaluaciones
