<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EmployeesSites Model
 *
 * @property \App\Model\Table\EmployeesTable|\Cake\ORM\Association\BelongsTo $Employees
 * @property \App\Model\Table\SitesTable|\Cake\ORM\Association\BelongsTo $Sites
 *
 * @method \App\Model\Entity\EmployeesSite get($primaryKey, $options = [])
 * @method \App\Model\Entity\EmployeesSite newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EmployeesSite[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EmployeesSite|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EmployeesSite|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EmployeesSite patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EmployeesSite[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EmployeesSite findOrCreate($search, callable $callback = null, $options = [])
 */
class EmployeesSitesTable extends Table
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

        $this->setTable('employees_sites');
        $this->setDisplayField('employee_id');
        $this->setPrimaryKey(['employee_id', 'site_id']);

        $this->belongsTo('Employees', [
            'foreignKey' => 'employee_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Sites', [
            'foreignKey' => 'site_id',
            'joinType' => 'INNER'
        ]);
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
        $rules->add($rules->existsIn(['employee_id'], 'Employees'));
        $rules->add($rules->existsIn(['site_id'], 'Sites'));

        return $rules;
    }
}
