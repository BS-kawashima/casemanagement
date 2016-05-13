<?php
namespace App\Model\Table;

use App\Model\Entity\Project;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projects Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Agents
 * @property \Cake\ORM\Association\BelongsTo $Clients
 * @property \Cake\ORM\Association\BelongsTo $Skills
 * @property \Cake\ORM\Association\HasMany $Enginners
 */
class ProjectsTable extends Table
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

        $this->table('projects');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->belongsTo('Agents', [
            'foreignKey' => 'agent_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Skills', [
            'foreignKey' => 'skill_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Enginners', [
            'foreignKey' => 'project_id'
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
            ->integer('name')
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->integer('staffs_ number')
            ->requirePresence('staffs_ number', 'create')
            ->notEmpty('staffs_ number');

        $validator
            ->dateTime('from_date')
            ->requirePresence('from_date', 'create')
            ->notEmpty('from_date');

        $validator
            ->dateTime('to_date')
            ->requirePresence('to_date', 'create')
            ->notEmpty('to_date');

        $validator
            ->integer('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        $validator
            ->requirePresence('memo', 'create')
            ->notEmpty('memo');

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
        $rules->add($rules->existsIn(['client_id'], 'Clients'));
        $rules->add($rules->existsIn(['skill_id'], 'Skills'));
        return $rules;
    }
}
