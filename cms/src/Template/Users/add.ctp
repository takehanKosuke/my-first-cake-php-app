<!-- ↓タイトル設定 -->
<?php
  $this->assign('title', 'ユーザーの新規登録');
 ?>
<h1>新規登録</h1>
<p><?= $this->Html->link('Back', ['action'=>'index']); ?></p>


<!-- ↓フォームタグの作成 -->
<?= $this->Form->create($user); ?>
<?= $this->Form->input('user_name'); ?>
<?= $this->Form->input('password'); ?>
<?= $this->Form->button('新規作成'); ?>
<?= $this->Form->end(); ?>
