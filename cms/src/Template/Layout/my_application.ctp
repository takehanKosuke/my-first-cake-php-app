<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- ↓phpからhtmlを生成するためのやつ -->
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->css('style.css') ?>
</head>
<body>
    <div class="container clearfix">
        <!-- ↓こいつがrailsでいうyeild的なやつ！！！ -->
        <?= $this->fetch('content') ?>
    </div>
</body>
</html>
