<h1>Lessons一覧</h1>
<ul>
  <?php foreach ($lessons as $lesson) : ?>
    <li><?= h($lesson-> title)?></li>
  <?php endforeach; ?>
</ul>
