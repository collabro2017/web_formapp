<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sites Model
 *
 * @property \App\Model\Table\EmployeesTable|\Cake\ORM\Association\BelongsToMany $Employees
 * @property \App\Model\Table\EquipmentsTable|\Cake\ORM\Association\BelongsToMany $Equipments
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsToMany $Users
 *
 * @method \App\Model\Entity\Site get($primaryKey, $options = [])
 * @method \App\Model\Entity\Site newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Site[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Site|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Site|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Site patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Site[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Site findOrCreate($search, callable $callback = null, $options = [])
 */
class SitesTable extends Table
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

        $this->setTable('sites');
        $this->setDisplayField('site_id');
        $this->setPrimaryKey('site_id');

        $this->belongsToMany('Employees', [
            'foreignKey' => 'site_id',
            'targetForeignKey' => 'employee_id',
            'joinTable' => 'employees_sites'
        ]);
        $this->belongsToMany('Equipments', [
            'foreignKey' => 'site_id',
            'targetForeignKey' => 'equipment_id',
            'joinTable' => 'equipments_sites'
        ]);
        $this->belongsToMany('Users', [
            'foreignKey' => 'site_id',
            'targetForeignKey' => 'user_id',
            'joinTable' => 'users_sites'
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
            ->integer('site_id')
            ->allowEmpty('site_id', 'create');

        $validator
            ->scalar('site_name')
            ->maxLength('site_name', 40)
            ->requirePresence('site_name', 'create')
            ->notEmpty('site_name');

        $validator
            ->scalar('address')
            ->maxLength('address', 40)
            ->allowEmpty('address');

        $validator
            ->scalar('city')
            ->maxLength('city', 40)
            ->allowEmpty('city');

        return $validator;
    }
}
