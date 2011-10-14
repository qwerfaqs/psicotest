<?php


/**
 * This class defines the structure of the 'opciones' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * 10/14/11 19:34:00
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class OpcionesTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.OpcionesTableMap';

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
		$this->setName('opciones');
		$this->setPhpName('Opciones');
		$this->setClassname('Opciones');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 11, null);
		$this->addForeignKey('TIPOOPCION_ID', 'TipoopcionId', 'INTEGER', 'tipoopcion', 'ID', true, 11, null);
		$this->addColumn('TEXTO', 'Texto', 'CHAR', false, 50, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Tipoopcion', 'Tipoopcion', RelationMap::MANY_TO_ONE, array('tipoopcion_id' => 'id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('Intensidades', 'Intensidades', RelationMap::ONE_TO_MANY, array('id' => 'opciones_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('Respuestas', 'Respuestas', RelationMap::ONE_TO_MANY, array('id' => 'opciones_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('Resultadosparciales', 'Resultadosparciales', RelationMap::ONE_TO_MANY, array('id' => 'opciones_id', ), 'RESTRICT', 'RESTRICT');
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

} // OpcionesTableMap
