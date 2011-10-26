<?php


/**
 * Skeleton subclass for representing a row from the 'administradores' table.
 *
 * 
 *
 * This class was autogenerated by Propel sfContext::getInstance()-getUser()-getAttribute('usuarioId').4.2 on:
 *
 * 09/29/sfContext::getInstance()-getUser()-getAttribute('usuarioId')sfContext::getInstance()-getUser()-getAttribute('usuarioId') 23:43:32
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    lib.model
 */
class Administradores extends BaseAdministradores 
{
 public function postInsert(PropelPDO $con = null)
     {
             $auditoria = new Auditorias();
             //sfContext::getInstance()-getUser()-getAttribute('usuarioId')
             $auditoria->setAdministradoresId(sfContext::getInstance()-getUser()-getAttribute('usuarioId'));
             $auditoria->setObjeto('Administradores');
             $auditoria->setDescripcion(' Nombre : '.$this->getNombre().' Apellido : '.$this->getApellido().' Usuario: '.$this->getUsuario());
             $auditoria->setTipooperacion('Alta de administrador');
             $auditoria->save();             
     }
     
      public function postUpdate(PropelPDO $con = null)
     {
             $auditoria = new Auditorias();
             //sfContext::getInstance()-getUser()-getAttribute('usuarioId')
             $auditoria->setAdministradoresId(sfContext::getInstance()-getUser()-getAttribute('usuarioId'));
             $auditoria->setObjeto('Administradores');
             $auditoria->setDescripcion(' Nombre : '.$this->getNombre().' Apellido : '.$this->getApellido().' Usuario: '.$this->getUsuario());
             $auditoria->setTipooperacion('Modificación de administrador');
             $auditoria->save();   
     }
     
     
     public function postDelete(PropelPDO $con = null)
     {
             $auditoria = new Auditorias();
             //sfContext::getInstance()-getUser()-getAttribute('usuarioId')
             $auditoria->setAdministradoresId(sfContext::getInstance()-getUser()-getAttribute('usuarioId'));
             $auditoria->setObjeto('Administradores');
             $auditoria->setDescripcion(' Nombre : '.$this->getNombre().' Apellido : '.$this->getApellido().' Usuario: '.$this->getUsuario());
             $auditoria->setTipooperacion('Eliminación de administrador');
             $auditoria->save();          
     }
} // Administradores
