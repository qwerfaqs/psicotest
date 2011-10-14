<?php


/**
 * This class defines the structure of the 'tests' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * 10/14/11 19:34:04
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class TestsTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.TestsTableMap';

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
		$this->setName('tests');
		$this->setPhpName('Tests');
		$this->setClassname('Tests');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 11, null);
		$this->addColumn('TITULO', 'Titulo', 'VARCHAR', false, 80, null);
		$this->addColumn('HISTORIA', 'Historia', 'LONGVARCHAR', false, null, null);
		$this->addColumn('ENUNCIADO', 'Enunciado', 'LONGVARCHAR', false, null, null);
		$this->addColumn('IMAGEN', 'Imagen', 'CHAR', false, 100, null);
		$this->addColumn('DURACION', 'Duracion', 'CHAR', false, 30, null);
		$this->addColumn('PUNTAJE_APROBACION', 'PuntajeAprobacion', 'CHAR', false, 20, null);
		$this->addForeignKey('TIPOOPCION_ID', 'TipoopcionId', 'INTEGER', 'tipoopcion', 'ID', true, 11, null);
		$this->addForeignKey('TESTS_ID', 'TestsId', 'INTEGER', 'tests', 'ID', true, 11, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Tipoopcion', 'Tipoopcion', RelationMap::MANY_TO_ONE, array('tipoopcion_id' => 'id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('TestsRelatedByTestsId', 'Tests', RelationMap::MANY_TO_ONE, array('tests_id' => 'id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('Escalas', 'Escalas', RelationMap::ONE_TO_MANY, array('id' => 'tests_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('Preguntas', 'Preguntas', RelationMap::ONE_TO_MANY, array('id' => 'tests_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('Pruebas', 'Pruebas', RelationMap::ONE_TO_MANY, array('id' => 'tests_id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('TestsRelatedByTestsId', 'Tests', RelationMap::ONE_TO_MANY, array('id' => 'tests_id', ), 'RESTRICT', 'RESTRICT');
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

} // TestsTableMap
