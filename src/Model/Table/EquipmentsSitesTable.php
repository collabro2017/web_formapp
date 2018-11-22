<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EquipmentsSites Model
 *
 * @property \App\Model\Table\SitesTable|\Cake\ORM\Association\BelongsTo $Sites
 * @property \App\Model\Table\EquipmentsTable|\Cake\ORM\Association\BelongsTo $Equipments
 *
 * @method \App\Model\Entity\EquipmentsSite get($primaryKey, $options = [])
 * @method \App\Model\Entity\EquipmentsSite newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\EquipmentsSite[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EquipmentsSite|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EquipmentsSite|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EquipmentsSite patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EquipmentsSite[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\EquipmentsSite findOrCreate($search, callable $callback = null, $options = [])
 */
class EquipmentsSitesTable extends Table
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

        $this->setTable('equipments_sites');
        $this->setDisplayField('site_id');
        $this->setPrimaryKey(['site_id', 'equipment_id']);

        $this->belongsTo('Sites', [
            'foreignKey' => 'site_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Equipments', [
            'foreignKey' => 'equipment_id',
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
        $rules->add($rules->existsIn(['site_id'], 'Sites'));
        $rules->add($rules->existsIn(['equipment_id'], 'Equipments'));

        return $rules;
    }
}
