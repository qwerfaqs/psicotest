<?php


/**
 * This class defines the structure of the 'resultadosescalas' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * 11/05/11 21:14:52
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class ResultadosescalasTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.ResultadosescalasTableMap';

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
		$this->setName('resultadosescalas');
		$this->setPhpName('Resultadosescalas');
		$this->setClassname('Resultadosescalas');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 11, null);
		$this->addForeignKey('RESULTADOS_ID', 'ResultadosId', 'INTEGER', 'resultados', 'ID', true, 11, null);
		$this->addForeignKey('ESCALAS_ID', 'EscalasId', 'INTEGER', 'escalas', 'ID', true, 11, null);
		$this->addColumn('VALOR', 'Valor', 'CHAR', false, 5, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Resultados', 'Resultados', RelationMap::MANY_TO_ONE, array('resultados_id' => 'id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('Escalas', 'Escalas', RelationMap::MANY_TO_ONE, array('escalas_id' => 'id', ), 'RESTRICT', 'RESTRICT');
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

} // ResultadosescalasTableMap
