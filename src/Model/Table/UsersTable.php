<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 */
class UsersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('users');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->belongsTo('Schools', [
            'foreignKey' => 'school_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Addresses', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Contacts', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Emergencies', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Students', [
            'foreignKey' => 'user_id'
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
            ->requirePresence('username', 'create')
            ->notEmpty('username')
            ->requirePresence('password', 'create')
            ->notEmpty('password')
            ->allowEmpty('first_name')
            ->requirePresence('last_name', 'create')
            ->notEmpty('last_name')
            ->add('DOB', 'valid', ['rule' => 'date'])
            ->requirePresence('DOB', 'create')
            ->notEmpty('DOB')
            ->allowEmpty('POB')
            ->add('gender', 'valid', ['rule' => 'boolean'])
            ->allowEmpty('gender')
            ->allowEmpty('image_path')
            ->allowEmpty('role');

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
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->existsIn(['school_id'], 'Schools'));
        return $rules;
    }
}
