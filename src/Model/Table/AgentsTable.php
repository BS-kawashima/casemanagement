<?php
namespace App\Model\Table;

use App\Model\Entity\Agent;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Agents Model
 *
 * @property \Cake\ORM\Association\HasMany $Clients
 * @property \Cake\ORM\Association\HasMany $Projects
 */
class AgentsTable extends Table
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

		$this->table('agents');
		$this->displayField('name');
		$this->primaryKey('id');

		$this->hasMany('Clients', [
			'foreignKey' => 'agent_id'
		]);
		$this->hasMany('Projects', [
			'foreignKey' => 'agent_id'
		]);
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
			->allowEmpty('id', 'create');

		$validator
			->requirePresence('password', 'create')
			->notEmpty('password')
			->add('password', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

		$validator
			->email('email')
			->requirePresence('email', 'create')
			->notEmpty('email')
			->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

		$validator
			->requirePresence('name', 'create')
			->notEmpty('name')
			->add('name', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

		$validator
			->requirePresence('phonetic', 'create')
			->notEmpty('phonetic')
			->add('phonetic', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

		$validator
			->integer('role')
			->requirePresence('role', 'create')
			->notEmpty('role');

		$validator
			->integer('delete_flg')
			->requirePresence('delete_flg', 'create')
			->notEmpty('delete_flg');

		$validator
			->dateTime('create')
			->requirePresence('create', 'create')
			->notEmpty('create');

		$validator
			->dateTime('update')
			->requirePresence('update', 'create')
			->notEmpty('update');

		return $validator;
	}

	/**
	 * Returns a rules checker object that will be used for validating
	 * application integrity.
	 *
	 * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
	 * @return \Cake\ORM\RulesChecker
	 */
	public function buildRules(RulesChecker $rules)
	{
		$rules->add($rules->isUnique(['email']));
		$rules->add($rules->isUnique(['password']));
		$rules->add($rules->isUnique(['name']));
		$rules->add($rules->isUnique(['phonetic']));
		return $rules;
	}
}
