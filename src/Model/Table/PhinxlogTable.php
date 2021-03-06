<?php
namespace App\Model\Table;

use App\Model\Entity\Phinxlog;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Phinxlog Model
 *
 */
class PhinxlogTable extends Table
{

	/**
	 * Initialize method
	 *
	 * @param array $config The configuration for the Table.
	 * @return void
	 */
	public function initialize(array $config)
	{
		parent::initialize($config);

		$this->table('phinxlog');
		$this->displayField('version');
		$this->primaryKey('version');
	}

	/**
	 * Default validation rules.
	 *
	 * @param \Cake\Validation\Validator $validator Validator instance.
	 * @return \Cake\Validation\Validator
	 */
	public function validationDefault(Validator $validator)
	{
		$validator
			->allowEmpty('version', 'create');

		$validator
			->allowEmpty('migration_name');

		$validator
			->dateTime('start_time')
			->requirePresence('start_time', 'create')
			->notEmpty('start_time');

		$validator
			->dateTime('end_time')
			->requirePresence('end_time', 'create')
			->notEmpty('end_time');

		return $validator;
	}
}
