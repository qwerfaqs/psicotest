<?php


/**
 * This class defines the structure of the 'asistencias' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * 10/19/11 11:52:36
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class AsistenciasTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.AsistenciasTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
	  // attributes
		$this->setName('asistencias');
		$this->setPhpName('Asistencias');
		$this->setClassname('Asistencias');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 11, null);
		$this->addForeignKey('EVALUACIONES_ID', 'EvaluacionesId', 'INTEGER', 'evaluaciones', 'ID', true, 11, null);
		$this->addForeignKey('ASPIRANTES_ID', 'AspirantesId', 'INTEGER', 'aspirantes', 'ID', true, 11, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Evaluaciones', 'Evaluaciones', RelationMap::MANY_TO_ONE, array('evaluaciones_id' => 'id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('Aspirantes', 'Aspirantes', RelationMap::MANY_TO_ONE, array('aspirantes_id' => 'id', ), 'RESTRICT', 'RESTRICT');
	} // buildRelations()

	/**
	 * 
	 * Gets the list of behaviors registered for this table
	 * 
	 * @return array Associative array (name => parameters) of behaviors
	 */
	public function getBehaviors()
	{
		return array(
			'symfony' => array('form' => 'true', 'filter' => 'true', ),
			'symfony_behaviors' => array(),
		);
	} // getBehaviors()

} // AsistenciasTableMap
