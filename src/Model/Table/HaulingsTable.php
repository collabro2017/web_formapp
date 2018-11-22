<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Haulings Model
 *
 * @property \App\Model\Table\SitesTable|\Cake\ORM\Association\BelongsTo $Sites
 *
 * @method \App\Model\Entity\Hauling get($primaryKey, $options = [])
 * @method \App\Model\Entity\Hauling newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Hauling[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Hauling|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Hauling|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Hauling patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Hauling[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Hauling findOrCreate($search, callable $callback = null, $options = [])
 */
class HaulingsTable extends Table
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

        $this->setTable('haulings');
        $this->setDisplayField('hauling_id');
        $this->setPrimaryKey('hauling_id');

        $this->belongsTo('Sites', [
            'foreignKey' => 'site_id'
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
            ->integer('hauling_id')
            ->allowEmpty('hauling_id', 'create');

        $validator
            ->date('hauling_date')
            ->requirePresence('hauling_date', 'create')
            ->notEmpty('hauling_date');

        $validator
            ->integer('landscape_debris')
            ->allowEmpty('landscape_debris');

        $validator
            ->integer('residual_waste')
            ->allowEmpty('residual_waste');

        $validator
            ->integer('tree_pruning_debris')
            ->allowEmpty('tree_pruning_debris');

        $validator
            ->integer('hazardois_waste')
            ->allowEmpty('hazardois_waste');

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

        return $rules;
    }
}
