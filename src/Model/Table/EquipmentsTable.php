<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Equipments Model
 *
 * @property \App\Model\Table\SitesTable|\Cake\ORM\Association\BelongsToMany $Sites
 *
 * @method \App\Model\Entity\Equipment get($primaryKey, $options = [])
 * @method \App\Model\Entity\Equipment newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Equipment[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Equipment|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Equipment|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Equipment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Equipment[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Equipment findOrCreate($search, callable $callback = null, $options = [])
 */
class EquipmentsTable extends Table
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

        $this->setTable('equipments');
        $this->setDisplayField('equipment_id');
        $this->setPrimaryKey('equipment_id');

        $this->belongsToMany('Sites', [
            'foreignKey' => 'equipment_id',
            'targetForeignKey' => 'site_id',
            'joinTable' => 'equipments_sites'
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
            ->integer('equipment_id')
            ->allowEmpty('equipment_id', 'create');

        $validator
            ->scalar('serial_plate_number')
            ->maxLength('serial_plate_number', 40)
            ->requirePresence('serial_plate_number', 'create')
            ->notEmpty('serial_plate_number');

        $validator
            ->scalar('fuel_type')
            ->allowEmpty('fuel_type');

        $validator
            ->scalar('category')
            ->maxLength('category', 45)
            ->requirePresence('category', 'create')
            ->notEmpty('category');

        $validator
            ->scalar('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        return $validator;
    }

    // Return list of sites
    public function equipmentList() {
        return $this->find('list', ['limit' => 200, 'keyField' => 'equipment_id', 'valueField' => 'serial_plate_number']);
    }
}
