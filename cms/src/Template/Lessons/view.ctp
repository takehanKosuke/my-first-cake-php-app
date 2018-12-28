<!-- ↓タイトル設定 -->
<?php
  $this->assign('title', 'Lesson詳細');
 ?>
<h1><?= ($lesson->title); ?></h1>
<p><?= $this->Html->link('Back', ['action'=>'index']); ?></p>
