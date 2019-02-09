<?php


  // この辺はカーゴ・カルトプログラミングしてるｗ
  namespace App\Model\Table;

  use Cake\ORM\Table;
  // ↓バリデーションかけるのに必要らしい
  use Cake\Validation\Validator;

  class ProductsTable extends Table
  {
    public function initialize(array $config)
    {
      $this->addBehavior('Timestamp');
      $this->belongsToMany('Users', [
        'joinTable' => 'carts',
      ]);
      // $this->HasMany($Carts);
    }

    public function validationDefault(Validator $validator)
    {
      $validator
        // 空文字を許可しない
        ->notEmpty('name')
        ->requirePresence('name')
        // 文字の長さを２５文字より大きくさせない
        // ->add('name', ['length' => ['rule' => ['maxLength', 25], 'message' => 'name length must be under 25'] ])
        ->notEmpty('price')
        ->requirePresence('price');

      return $validator;
    }
  };
