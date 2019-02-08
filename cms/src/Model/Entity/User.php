<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher; // この行を追加
use Cake\ORM\Entity;

class User extends Entity
{
    // bake のコード
    // このメソッドの追加
    protected function _setPassword($value)
    {
        if (strlen($value)) {
            $hasher = new DefaultPasswordHasher();

            return $hasher->hash($value);
        }
    }
}
