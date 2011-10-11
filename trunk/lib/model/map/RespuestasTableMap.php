<?php


/**
 * This class defines the structure of the 'respuestas' table.
 *
 *
 * This class was autogenerated by Propel 1.4.2 on:
 *
 * 10/11/11 16:15:21
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    lib.model.map
 */
class RespuestasTableMap extends TableMap {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = 'lib.model.map.RespuestasTableMap';

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
		$this->setName('respuestas');
		$this->setPhpName('Respuestas');
		$this->setClassname('Respuestas');
		$this->setPackage('lib.model');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, 11, null);
		$this->addForeignKey('PREGUNTAS_ID', 'PreguntasId', 'INTEGER', 'preguntas', 'ID', true, 11, null);
		$this->addForeignKey('ESTADOS_ID', 'EstadosId', 'INTEGER', 'valoresdeverdad', 'ID', true, 11, null);
		$this->addForeignKey('OPCIONES_ID', 'OpcionesId', 'INTEGER', 'opciones', 'ID', true, 11, null);
		$this->addColumn('DESCRIPCION', 'Descripcion', 'LONGVARCHAR', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
    $this->addRelation('Preguntas', 'Preguntas', RelationMap::MANY_TO_ONE, array('preguntas_id' => 'id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('Valoresdeverdad', 'Valoresdeverdad', RelationMap::MANY_TO_ONE, array('estados_id' => 'id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('Opciones', 'Opciones', RelationMap::MANY_TO_ONE, array('opciones_id' => 'id', ), 'RESTRICT', 'RESTRICT');
    $this->addRelation('Respuestasescalas', 'Respuestasescalas', RelationMap::ONE_TO_MANY, array('id' => 'respuestas_id', ), 'RESTRICT', 'RESTRICT');
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

} // RespuestasTableMap
