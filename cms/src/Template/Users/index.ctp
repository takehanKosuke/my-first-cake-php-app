<!-- ↓タイトル設定 -->
<?php
  $this->assign('title', 'User一覧');
 ?>
<h1>users一覧</h1>
<p><?= $this->Html->link('new user', ['action'=>'add']); ?></p>


<?php foreach ($users as $user) : ?>
  <div class="user-list">
    <div class="uk-card uk-background-muted uk-card-hover uk-card-body">
        <h3 class="uk-card-title"><?= $this->Html->link($user->user_name, ['action'=>'view', $user->id]); ?></h3>
        <p><?= $this->Html->link('[Edit]', ['action'=>'edit', $user->id]); ?></p>
        <?=
          $this->Form->postLink(
            '[x]',
            ['action'=>'delete', $user->id],
            ['confirm'=>'Are you sure?']
          )
        ?>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
    </div>
  </div>
<?php endforeach; ?>
