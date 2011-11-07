<?php


/**
 * This class defines the structure of the 'aspirantes' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * 11/07/11 01:33:54
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class AspirantesTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.AspirantesTableMap';

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
		$this->setName('aspirantes');
		$this->setPhpName('Aspirantes');
		$this->setClassname('Aspirantes');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 11, null);
		$this->addColumn('NOMBRE', 'Nombre', 'VARCHAR', true, 60, null);
		$this->addColumn('APELLIDO', 'Apellido', 'VARCHAR', true, 60, null);
		$this->addColumn('CEDULA', 'Cedula', 'CHAR', true, 30, null);
		$this->addColumn('SEXO', 'Sexo', 'CHAR', true, 1, null);
		$this->addColumn('FECHANACIMIENTO', 'Fechanacimiento', 'DATE', true, null, null);
		$this->addColumn('PASSWORD', 'Password', 'CHAR', true, 20, null);
		$this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Asistencias', 'Asistencias', RelationMap::ONE_TO_MANY, array('id' => 'aspirantes_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('Resultados', 'Resultados', RelationMap::ONE_TO_MANY, array('id' => 'aspirantes_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('Resultadosparciales', 'Resultadosparciales', RelationMap::ONE_TO_MANY, array('id' => 'aspirantes_id', ), 'RESTRICT', 'RESTRICT');
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
			'symfony_timestampable' => array('create_column' => 'created_at', ),
		);
	} // getBehaviors()

} // AspirantesTableMap
