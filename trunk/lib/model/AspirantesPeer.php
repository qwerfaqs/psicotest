<?php
/**
 * Skeleton subclass for performing query and update operations on the 'aspirantes' table.
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
class AspirantesPeer extends BaseAspirantesPeer 
{
    
    public static function login($username, $password) {
        $result = null;
        $criteria = new Criteria();
        $criteria->add(self::CEDULA, $username);
        $criteria->add(self::PASSWORD, $password);
        $result = self::doSelectOne($criteria);
        return $result;
    }
    
  public static function getAspirantesdisponibles($evaluacion) {
        $query = 'SELECT * FROM ASPIRANTES 
LEFT JOIN 
(SELECT aspirantes_id FROM ASISTENCIAS 
INNER JOIN EVALUACIONES 
ON ASISTENCIAS.EVALUACIONES_ID = EVALUACIONES.ID
WHERE EVALUACIONES.ID = '.$evaluacion.')  O ON
ASPIRANTES.ID = O.ASPIRANTES_ID
WHERE O.aspirantes_id IS NULL ' ;

        $connection = Propel::getConnection(self::DATABASE_NAME);
        $statement = $connection->prepare($query);
        $statement->execute();
        return self::populateObjects($statement, $connection);
    }
    
    public static function count($evaluacion) 
    {
        $criteria = new Criteria();
        $criteria->add(AsistenciasPeer::EVALUACIONES_ID,$evaluacion,  Criteria::EQUAL);
        return(AsistenciasPeer::doCount($criteria));
    }
} // AspirantesPeer