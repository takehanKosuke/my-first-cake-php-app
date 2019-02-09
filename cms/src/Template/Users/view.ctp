<!-- ↓タイトル設定 -->
<?php
  $this->assign('title', 'Product詳細');
 ?>
<h1><?= ($user->user_name); ?></h1>
<p><?= $this->Html->link('Back', ['action'=>'index']); ?></p>

<table class="uk-table uk-table-justify uk-table-divider">
    <thead>
        <tr>
            <th class="uk-width-small">カート一覧</th>
            <th>商品名</th>
            <th>価格</th>
        </tr>
    </thead>
    <tbody>
    <h1><?= ($user->Products) ?></h1>

    <?php foreach ($user->products as $product): ?>
      <tr>
          <td><?= $product->id ?></td>
          <td><?= $product->name ?></td>
          <td><?= $product->price ?></td>
          <td><button class="uk-button uk-button-default" type="button">Button</button></td>
      </tr>
    <?php endforeach; ?>
    </tbody>
</table>
