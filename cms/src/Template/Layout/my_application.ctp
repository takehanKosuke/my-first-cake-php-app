<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- ↓phpからhtmlを生成するためのやつ -->
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->css('style.css') ?>
</head>
<body>
    <div class="container clearfix">
        <!-- Template/Element配下がrailsの部分テンプレートを書くところ -->
        <!-- 部分テンプレートの呼び出し方は↓ -->
        <?= $this-> element('header') ?>
        <!-- ↓こいつがrailsでいうyeild的なやつ！！！ -->
        <?= $this->fetch('content') ?>
    </div>
</body>
</html>
