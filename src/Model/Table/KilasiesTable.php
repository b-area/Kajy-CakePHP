<?php
namespace App\Model\Table;

use App\Model\Entity\Kilasy;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Kilasies Model
 */
class KilasiesTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        $this->table('kilasies');
        $this->displayField('id');
        $this->primaryKey('id');
        $this->hasMany('Students', [
            'foreignKey' => 'kilasy_id'
        ]);
        $this->hasMany('Subjects', [
            'foreignKey' => 'kilasy_id'
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
            ->allowEmpty('section')
            ->add('level', 'valid', ['rule' => 'numeric'])
            ->requirePresence('level', 'create')
            ->notEmpty('level')
            ->add('teacher_responsible', 'valid', ['rule' => 'numeric'])
            ->requirePresence('teacher_responsible', 'create')
            ->notEmpty('teacher_responsible');

        return $validator;
    }
}
