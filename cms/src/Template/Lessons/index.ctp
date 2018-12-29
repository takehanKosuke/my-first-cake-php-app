<!-- ↓タイトル設定 -->
<?php
  $this->assign('title', 'Lesson一覧');
 ?>
<h1>Lessons一覧</h1>
<ul>
  <?php foreach ($lessons as $lesson) : ?>
    <li>
      <!-- ↓railsでいうlink_to的なやつ！ -->
      <?= $this->Html->link($lesson->title, ['action'=>'view', $lesson->id]); ?>
    </li>
  <?php endforeach; ?>
</ul>
