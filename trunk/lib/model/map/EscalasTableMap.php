<?php


/**
 * This class defines the structure of the 'escalas' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * 10/26/11 00:54:42
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class EscalasTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.EscalasTableMap';

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
		$this->setName('escalas');
		$this->setPhpName('Escalas');
		$this->setClassname('Escalas');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 11, null);
		$this->addForeignKey('TESTS_ID', 'TestsId', 'INTEGER', 'tests', 'ID', true, 11, null);
		$this->addColumn('NOMBRE', 'Nombre', 'VARCHAR', false, 50, null);
		$this->addColumn('NOMBRELARGO', 'Nombrelargo', 'VARCHAR', false, 20, null);
		$this->addColumn('DESCRIPCION', 'Descripcion', 'LONGVARCHAR', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Tests', 'Tests', RelationMap::MANY_TO_ONE, array('tests_id' => 'id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('Percentiles', 'Percentiles', RelationMap::ONE_TO_MANY, array('id' => 'escalas_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('Respuestasescalas', 'Respuestasescalas', RelationMap::ONE_TO_MANY, array('id' => 'escalas_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('Resultadosescalas', 'Resultadosescalas', RelationMap::ONE_TO_MANY, array('id' => 'escalas_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('Valoresperado', 'Valoresperado', RelationMap::ONE_TO_MANY, array('id' => 'escalas_id', ), 'RESTRICT', 'RESTRICT');
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

} // EscalasTableMap
