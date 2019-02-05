<?php

  namespace App\Controller;


  class UsersController extends AppController
  {
    public function index()
    {
      // ↓レイアウトファイルを指定するファイル
      $this->viewBuilder()->layout('my_application');
      $users = $this->Users->find('all');

                  // ->order(['title' => 'DESC'])
                  // ->limit(2)
                  // ->where(['title like' => '%理学']);
      $this->set(compact('products'));
    }

    // railsで言うところのshowアクション
    public function view($id = null)
    {
      $user = $this->Users->get($id);
      $this->set(compact('product'));
    }

    public function add()
    {
      // ↓newEntityが【@product = User.new】的なやつだと思う。
      $user = $this->Users->newEntity();
      // もしpostメソッドだったら以下のコードを実行してね
      if ($this->request->is('post')){
        $user = $this->Users->patchEntity($user, $this->request->data);
        if ($this->Users->save($user)){
          // flashメッセージの作成
          $this->Flash->success('Add Sucseds!');
          // リダイレクト処理↓
          return $this->redirect(['action'=>'index']);
        } else {
          $this->Flash->error('Add Error!');
        }
      }
      $this->set(compact('product'));
    }

    public function edit($id = null)
    {
      // ↓newEntityが【@product = User.new】的なやつだと思う。
      $user = $this->Users->get($id);
      // もしpostメソッドだったら以下のコードを実行してね
      if ($this->request->is(['post', 'patch', 'put'])){
        $user = $this->Users->patchEntity($user, $this->request->data);
        if ($this->Users->save($user)){
          // flashメッセージの作成
          $this->Flash->success('Edit Sucseds!');
          // リダイレクト処理↓
          return $this->redirect(['action'=>'index']);
        } else {
          $this->Flash->error('Edit Error!');
        }
      }
      $this->set(compact('product'));
    }

    public function delete($id = null)
    {
      $this->request->allowMethod(['post', 'delete']);
      // ↓newEntityが【@product = User.new】的なやつだと思う。
      $user = $this->Users->get($id);
      if ($this->Users->delete($user)){
        // flashメッセージの作成
        $this->Flash->success('delete Sucseds!');
        // リダイレクト処理↓
        return $this->redirect(['action'=>'index']);
      } else {
        $this->Flash->error('delete Error!');
      }
      $this->set(compact('product'));
    }
  }
