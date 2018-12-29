<!-- ↓タイトル設定 -->
<?php
  $this->assign('title', 'Lessonの作成');
 ?>
<h1>Lessonの作成</h1>
<p><?= $this->Html->link('Back', ['action'=>'index']); ?></p>


<!-- ↓フォームタグの作成 -->
<?= $this->Form->create($lesson); ?>
<?= $this->Form->input('title'); ?>
<?= $this->Form->button('ADD'); ?>
<?= $this->Form->end(); ?>
