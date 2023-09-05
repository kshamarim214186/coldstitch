<?php
namespace App\Model\Table;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\Rule\IsUnique;

class ProductsTable extends Table{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        $this->setTable('products');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
            'joinType' => 'LEFT'
        ]);
        $this->belongsTo('Sizes', [
            'foreignKey' => 'size_id',
            'joinType' => 'LEFT'
        ]);
    }

   
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->requirePresence('name', 'create')
            ->notEmptyString('name')
            ->requirePresence('specification', 'create')
            ->notEmptyString('specification')
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmptyString('id', 'create');

        return $validator;
    }
}
