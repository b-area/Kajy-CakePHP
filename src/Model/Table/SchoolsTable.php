<?php
namespace App\Model\Table;

use App\Model\Entity\School;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Schools Model
 */
class SchoolsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('schools');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->hasMany('Users', [
            'foreignKey' => 'school_id'
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create')
            ->allowEmpty('name')
            ->allowEmpty('type')
            ->add('president', 'valid', ['rule' => 'numeric'])
            ->requirePresence('president', 'create')
            ->notEmpty('president')
            ->add('vice_president', 'valid', ['rule' => 'numeric'])
            ->requirePresence('vice_president', 'create')
            ->notEmpty('vice_president')
            ->allowEmpty('full_address')
            ->allowEmpty('primary_phone')
            ->allowEmpty('secondary_phone')
            ->add('email', 'valid', ['rule' => 'email'])
            ->allowEmpty('email');

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
        return $rules;
    }
}
