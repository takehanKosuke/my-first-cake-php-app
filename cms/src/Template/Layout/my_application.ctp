<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- ↓phpからhtmlを生成するためのやつ -->
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css" />
    <title>
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->css('styles.css') ?>
</head>
<body>
    <div class="container clearfix">
        <!-- Template/Element配下がrailsの部分テンプレートを書くところ -->
        <!-- 部分テンプレートの呼び出し方は↓ -->
        <?= $this-> element('header') ?>
        <!-- ↓こいつがrailsでいうyeild的なやつ！！！ -->
        <?= $this->fetch('content') ?>
    </div>

    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit-icons.min.js"></script>
</body>
</html>
