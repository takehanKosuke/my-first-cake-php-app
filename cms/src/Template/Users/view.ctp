<!-- ↓タイトル設定 -->
<?php
  $this->assign('title', 'Product詳細');
 ?>
<h1><?= ($product->name); ?></h1>
<h3><?= ($product->price); ?></h3>
<p><?= $this->Html->link('Back', ['action'=>'index']); ?></p>
