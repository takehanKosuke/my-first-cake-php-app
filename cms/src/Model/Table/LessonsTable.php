<?php


// この辺はカーゴ・カルトプログラミングしてるｗ
namespace App\Model\Table;

use Cake\ORM\Table;

class lessonsTable extends Table
{
  public function initialize(array $config)
  {
      $this->addBehavior('Timestamp');
  }
}
?>
