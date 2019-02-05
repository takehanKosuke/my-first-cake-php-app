<!-- ↓タイトル設定 -->
<?php
  $this->assign('title', 'Lesson一覧');
 ?>
<h1>products一覧</h1>
<p><?= $this->Html->link('new product', ['action'=>'add']); ?></p>


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
<?php endforeach; ?>



<p uk-margin>
  <button class="uk-button uk-button-default">Default</button>
  <button class="uk-button uk-button-primary">Primary</button>
  <button class="uk-button uk-button-secondary">Secondary</button>
  <button class="uk-button uk-button-danger">Danger</button>
  <button class="uk-button uk-button-text">Text</button>
  <button class="uk-button uk-button-link">Link</button>
</p>
