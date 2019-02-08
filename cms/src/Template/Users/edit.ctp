<!-- ↓タイトル設定 -->
<?php
  $this->assign('title', 'productの作成');
 ?>
<h1>productの編集</h1>
<p><?= $this->Html->link('Back', ['action'=>'index']); ?></p>


<!-- ↓フォームタグの作成 -->
<?= $this->Form->create($product); ?>
<?= $this->Form->input('name'); ?>
<?= $this->Form->input('price'); ?>
<?= $this->Form->button('update'); ?>
<?= $this->Form->end(); ?>
