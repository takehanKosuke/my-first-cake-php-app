<!-- ↓タイトル設定 -->
<?php
  $this->assign('title', 'Lesson一覧');
 ?>
<h1>products一覧</h1>
<p><?= $this->Html->link('new product', ['action'=>'add']); ?></p>
<h1><?= $user ?></h1>
<?php foreach ($products as $product) : ?>
  <div class="product-list">
    <div class="uk-card uk-background-muted uk-card-hover uk-card-body">
        <h3 class="uk-card-title"><?= $this->Html->link($product->name, ['action'=>'view', $product->id]); ?></h3>
        <p><?= $this->Html->link('[Edit]', ['action'=>'edit', $product->id]); ?></p>
        <?=
          $this->Form->postLink(
            '[x]',
            ['action'=>'delete', $product->id],
            ['confirm'=>'Are you sure?']
          )
        ?>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    </div>
  </div>
  <button class="uk-button uk-button-primary">
    <?= $this->Form->create(null, [
        'url' => ['controller'=>'Carts', 'action'=>'buy']
      ]); ?>
    <?= $this->Form->hiddun('user_id', ['value'=>$user->id]); ?>
    <?= $this->Form->hiddun('product_id', ['value'=>$product->id]); ?>
    <?= $this->Form->button('カートに入れる'); ?>
    <?= $this->Form->end(); ?>
  </button>
<?php endforeach; ?>
