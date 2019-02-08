<header>
  <button class="uk-button uk-button-default"><?= $this->Html->link("商品一覧へ",['controller'=>'Products', 'action'=>'index', ]) ?></button>
  <button class="uk-button uk-button-default"><?= $this->Html->link("ユーザー一覧へ",['controller'=>'Users', 'action'=>'index', ]) ?></button>
  <button class="uk-button uk-button-default"><?= $this->Html->link("ユーザーログイン",['controller'=>'Users', 'action'=>'login', ]) ?></button>
  <button class="uk-button uk-button-default"><?= $this->Html->link("ユーザーログアウト",['controller'=>'Users', 'action'=>'logout', ]) ?></button>
</header>
