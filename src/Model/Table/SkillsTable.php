<?php
namespace App\Model\Table;

use App\Model\Entity\Skill;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Skills Model
 *
 * @property \Cake\ORM\Association\HasMany $Projects
 */
class SkillsTable extends Table
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

        $this->table('skills');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('Projects', [
            'foreignKey' => 'skill_id'
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
            ->dateTime('create')
            ->requirePresence('create', 'create')
            ->notEmpty('create');

        $validator
            ->dateTime('update')
            ->requirePresence('update', 'create')
            ->notEmpty('update');

        return $validator;
    }
}
