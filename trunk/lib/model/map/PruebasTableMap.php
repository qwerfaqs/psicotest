<?php


/**
 * This class defines the structure of the 'pruebas' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * 10/25/11 20:25:33
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class PruebasTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.PruebasTableMap';

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
		$this->setName('pruebas');
		$this->setPhpName('Pruebas');
		$this->setClassname('Pruebas');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 11, null);
		$this->addForeignKey('TESTS_ID', 'TestsId', 'INTEGER', 'tests', 'ID', true, 11, null);
		$this->addForeignKey('EVALUACIONES_ID', 'EvaluacionesId', 'INTEGER', 'evaluaciones', 'ID', true, 11, null);
		$this->addForeignKey('ESTADOPRUEBAS_ID', 'EstadopruebasId', 'INTEGER', 'estadopruebas', 'ID', true, 11, null);
		$this->addColumn('CREATED_AT', 'CreatedAt', 'TIMESTAMP', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Tests', 'Tests', RelationMap::MANY_TO_ONE, array('tests_id' => 'id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('Evaluaciones', 'Evaluaciones', RelationMap::MANY_TO_ONE, array('evaluaciones_id' => 'id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('Estadopruebas', 'Estadopruebas', RelationMap::MANY_TO_ONE, array('estadopruebas_id' => 'id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('Resultados', 'Resultados', RelationMap::ONE_TO_MANY, array('id' => 'pruebas_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('Resultadosparciales', 'Resultadosparciales', RelationMap::ONE_TO_MANY, array('id' => 'pruebas_id', ), 'RESTRICT', 'RESTRICT');
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

} // PruebasTableMap
