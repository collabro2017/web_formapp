<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ppes Model
 *
 * @property \App\Model\Table\SitesTable|\Cake\ORM\Association\BelongsTo $Sites
 * @property \App\Model\Table\EmployeesTable|\Cake\ORM\Association\BelongsTo $Employees
 *
 * @method \App\Model\Entity\Ppe get($primaryKey, $options = [])
 * @method \App\Model\Entity\Ppe newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Ppe[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Ppe|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ppe|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Ppe patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Ppe[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Ppe findOrCreate($search, callable $callback = null, $options = [])
 */
class PpesTable extends Table
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

        $this->setTable('ppes');
        $this->setDisplayField('employee_id');
        $this->setPrimaryKey(['employee_id', 'site_id', 'ppes_date']);

        $this->belongsTo('Sites', [
            'foreignKey' => 'site_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Employees', [
            'foreignKey' => 'employee_id',
            'joinType' => 'INNER'
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
            ->date('ppes_date')
            ->allowEmpty('ppes_date', 'create');

        $validator
            ->scalar('face_mask')
            ->allowEmpty('face_mask');

        $validator
            ->scalar('rain_boots')
            ->allowEmpty('rain_boots');

        $validator
            ->scalar('safety_shoes')
            ->allowEmpty('safety_shoes');

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
        $rules->add($rules->existsIn(['site_id'], 'Sites'));
        $rules->add($rules->existsIn(['employee_id'], 'Employees'));

        return $rules;
    }
}
