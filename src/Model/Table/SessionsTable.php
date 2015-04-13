<?php
namespace App\Model\Table;

use App\Model\Entity\Session;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sessions Model
 */
class SessionsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('sessions');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->hasMany('Grades', [
            'foreignKey' => 'session_id'
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
            ->add('start_date', 'valid', ['rule' => 'date'])
            ->allowEmpty('start_date')
            ->add('end_date', 'valid', ['rule' => 'date'])
            ->allowEmpty('end_date')
            ->allowEmpty('school_year');

        return $validator;
    }
}
