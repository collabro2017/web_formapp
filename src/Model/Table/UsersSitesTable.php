<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * UsersSites Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\SitesTable|\Cake\ORM\Association\BelongsTo $Sites
 *
 * @method \App\Model\Entity\UsersSite get($primaryKey, $options = [])
 * @method \App\Model\Entity\UsersSite newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\UsersSite[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\UsersSite|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UsersSite|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\UsersSite patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\UsersSite[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\UsersSite findOrCreate($search, callable $callback = null, $options = [])
 */
class UsersSitesTable extends Table
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

        $this->setTable('users_sites');
        $this->setDisplayField('user_id');
        $this->setPrimaryKey(['user_id', 'site_id']);

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
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
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['site_id'], 'Sites'));

        return $rules;
    }
}
