<?php
App::uses('AppModel', 'Model');
/**
 * Activationstatus Model
 *
 */
class Activationstatus extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'activationstatus';

/**
 * Primary key field
 *
 * @var string
 */
	public $primaryKey = 'idActivationStatus';

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'Description';

}
