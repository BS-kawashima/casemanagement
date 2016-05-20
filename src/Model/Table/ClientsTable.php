<?php
namespace App\Model\Table;

use App\Model\Entity\Client;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clients Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Agents
 * @property \Cake\ORM\Association\HasMany $Projects
 */
class ClientsTable extends Table
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

		$this->table('clients');
		$this->displayField('name');
		$this->primaryKey('id');

		$this->belongsTo('Agents', [
			'foreignKey' => 'agent_id',
			'joinType' => 'INNER'
		]);
		$this->hasMany('Projects', [
			'foreignKey' => 'client_id'
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
			->integer('id')
			->allowEmpty('id', 'create');

		$validator
			->requirePresence('name', 'create')
			->notEmpty('name');

		$validator
			->requirePresence('phonetic', 'create')
			->notEmpty('phonetic');

		$validator
			->integer('status')
			->requirePresence('status', 'create')
			->notEmpty('status');

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
		$rules->add($rules->existsIn(['agent_id'], 'Agents'));
		return $rules;
	}
}
