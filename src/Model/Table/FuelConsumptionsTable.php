<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FuelConsumptions Model
 *
 * @property \App\Model\Table\EquipmentsTable|\Cake\ORM\Association\BelongsTo $Equipments
 *
 * @method \App\Model\Entity\FuelConsumption get($primaryKey, $options = [])
 * @method \App\Model\Entity\FuelConsumption newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FuelConsumption[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FuelConsumption|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FuelConsumption|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FuelConsumption patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FuelConsumption[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FuelConsumption findOrCreate($search, callable $callback = null, $options = [])
 */
class FuelConsumptionsTable extends Table
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

        $this->setTable('fuel_consumptions');
        $this->setDisplayField('consumption_id');
        $this->setPrimaryKey('consumption_id');

        $this->belongsTo('Equipments', [
            'foreignKey' => 'equipment_id'
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
            ->integer('consumption_id')
            ->allowEmpty('consumption_id', 'create');

        $validator
            ->date('consumption_date')
            ->requirePresence('consumption_date', 'create')
            ->notEmpty('consumption_date');

        $validator
            ->integer('quantity')
            ->requirePresence('quantity', 'create')
            ->notEmpty('quantity');

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
        $rules->add($rules->existsIn(['equipment_id'], 'Equipments'));

        return $rules;
    }
}
