<?php


  // この辺はカーゴ・カルトプログラミングしてるｗ
  namespace App\Model\Table;

  use Cake\ORM\Table;
  // ↓バリデーションかけるのに必要らしい
  use Cake\Validation\Validator;

  class UsersTable extends Table
  {
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
        $this->belongsToMany('Products', [
          'joinTable' => 'carts',
        ]);
        // $this->HasMany($Carts);
    }

    public function validationDefault(Validator $validator)
    {
      $validator
        // 空文字を許可しない
        ->notEmpty('user_name')
        ->requirePresence('user_name');
      return $validator;
    }
  };
