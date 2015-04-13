<?php
namespace App\Model\Table;

use App\Model\Entity\Subject;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Subjects Model
 */
class SubjectsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('subjects');
        $this->displayField('name');
        $this->primaryKey('id');
        $this->belongsTo('Kilasies', [
            'foreignKey' => 'kilasy_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Grades', [
            'foreignKey' => 'subject_id'
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
            ->add('teacher', 'valid', ['rule' => 'numeric'])
            ->requirePresence('teacher', 'create')
            ->notEmpty('teacher')
            ->add('coefficient', 'valid', ['rule' => 'numeric'])
            ->requirePresence('coefficient', 'create')
            ->notEmpty('coefficient');

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
        $rules->add($rules->existsIn(['kilasy_id'], 'Kilasies'));
        return $rules;
    }
}
