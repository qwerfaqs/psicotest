<?php
/**
 * Skeleton subclass for performing query and update operations on the 'administradores' table.
 *
 * 
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * 09/29/11 23:43:32
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    lib.model
 */
class AdministradoresPeer extends BaseAdministradoresPeer {
    public static function login($username, $password) {
        $result = null;
        $criteria = new Criteria();
        $criteria->add(self::USUARIO, $username);
        $criteria->add(self::PASSWORD, $password);
        $result = self::doSelectOne($criteria);
        return $result;
    }
} // AdministradoresPeer