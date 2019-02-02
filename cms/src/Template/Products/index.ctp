<!-- ↓タイトル設定 -->
<?php
  $this->assign('title', 'Lesson一覧');
 ?>
<h1>products一覧</h1>
<p><?= $this->Html->link('new lesson', ['action'=>'add']); ?></p>
<ul>
  <?php foreach ($products as $lesson) : ?>
    <li>
      <!-- ↓railsでいうlink_to的なやつ！ -->
      <?= $this->Html->link($lesson->title, ['action'=>'view', $lesson->id]); ?>
    </li>
  <?php endforeach; ?>
</ul>
