<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Employees Model
 *
 * @property \App\Model\Table\SitesTable|\Cake\ORM\Association\BelongsToMany $Sites
 *
 * @method \App\Model\Entity\Employee get($primaryKey, $options = [])
 * @method \App\Model\Entity\Employee newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Employee[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Employee|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employee|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Employee patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Employee[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Employee findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class EmployeesTable extends Table
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

        $this->setTable('employees');
        $this->setDisplayField('employee_id');
        $this->setPrimaryKey('employee_id');

        $this->addBehavior('Timestamp');

        $this->belongsToMany('Sites', [
            'foreignKey' => 'employee_id',
            'targetForeignKey' => 'site_id',
            'joinTable' => 'employees_sites'
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
            ->integer('employee_id')
            ->allowEmpty('employee_id', 'create');

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 20)
            ->allowEmpty('first_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 20)
            ->allowEmpty('last_name');

        $validator
            ->scalar('second_name')
            ->maxLength('second_name', 30)
            ->allowEmpty('second_name');

        $validator
            ->date('hire_date')
            ->allowEmpty('hire_date');

        $validator
            ->boolean('active')
            ->allowEmpty('active');

        $validator
            ->scalar('phone_number')
            ->maxLength('phone_number', 20)
            ->allowEmpty('phone_number');

        $validator->add('sites', 'custom', [
            'rule' => function($value, $context) {
                return (!empty($value['_ids']) && is_array($value['_ids']));
            },
            'message' => 'Please choose at least one site'
        ]);

        return $validator;
    }
}
