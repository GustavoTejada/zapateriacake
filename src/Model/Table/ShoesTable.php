<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Shoes Model
 *
 * @property \App\Model\Table\SalesTable|\Cake\ORM\Association\HasMany $Sales
 *
 * @method \App\Model\Entity\Shoe get($primaryKey, $options = [])
 * @method \App\Model\Entity\Shoe newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Shoe[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Shoe|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Shoe|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Shoe patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Shoe[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Shoe findOrCreate($search, callable $callback = null, $options = [])
 */
class ShoesTable extends Table
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

        $this->setTable('shoes');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Sales', [
            'foreignKey' => 'shoe_id'
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->numeric('price')
            ->requirePresence('price', 'create')
            ->notEmpty('price');

        return $validator;
    }
}
