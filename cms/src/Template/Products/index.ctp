<!-- ↓タイトル設定 -->
<?php
  $this->assign('title', 'Lesson一覧');
 ?>
<h1>products一覧</h1>
<p><?= $this->Html->link('new product', ['action'=>'add']); ?></p>
<ul>
  <?php foreach ($products as $product) : ?>
    <li>
      <!-- ↓railsでいうlink_to的なやつ！ -->
      <?= $this->Html->link($product->name, ['action'=>'view', $product->id]); ?>
    </li>
  <?php endforeach; ?>
</ul>
