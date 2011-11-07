<?php


/**
 * This class defines the structure of the 'intensidades' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * 11/07/11 21:30:13
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class IntensidadesTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.IntensidadesTableMap';

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
		$this->setName('intensidades');
		$this->setPhpName('Intensidades');
		$this->setClassname('Intensidades');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 11, null);
		$this->addForeignKey('RESULTADOSPARCIALES_ID', 'ResultadosparcialesId', 'INTEGER', 'resultadosparciales', 'ID', true, 11, null);
		$this->addForeignKey('OPCIONES_ID', 'OpcionesId', 'INTEGER', 'opciones', 'ID', true, 11, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Resultadosparciales', 'Resultadosparciales', RelationMap::MANY_TO_ONE, array('resultadosparciales_id' => 'id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('Opciones', 'Opciones', RelationMap::MANY_TO_ONE, array('opciones_id' => 'id', ), 'RESTRICT', 'RESTRICT');
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

} // IntensidadesTableMap
