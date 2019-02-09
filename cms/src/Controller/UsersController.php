<?php

  namespace App\Controller;


  class UsersController extends AppController
  {
    public function index()
    {
      {
          $users = $this->paginate($this->Users);

          $this->set(compact('users'));
          $this->set('_serialize', ['users']);
      }
      // ↓レイアウトファイルを指定するファイル
      $this->viewBuilder()->layout('my_application');
      $users = $this->Users->find('all');

                  // ->order(['title' => 'DESC'])
                  // ->limit(2)
                  // ->where(['title like' => '%理学']);
      $this->set(compact('users'));
    }

    // railsで言うところのshowアクション
    public function view($id = null)
    {
      $user = $this->Users->get($id);
      $this->set(compact('user', [
          'contain' => 'Products'
        ]));
      // $carts = $this->Carts->find('all');
      // $this->set(compact('carts'));
      // $carts = $this->Carts->where(['user_id' => $this->$user->$id]);
    }

    public function add()
    {
      // ↓newEntityが【@user = User.new】的なやつだと思う。
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
      $this->set(compact('user'));
    }

    public function edit($id = null)
    {
      // ↓newEntityが【@user = User.new】的なやつだと思う。
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
      $this->set(compact('user'));
    }

    public function delete($id = null)
    {
      $this->request->allowMethod(['post', 'delete']);
      // ↓newEntityが【@user = User.new】的なやつだと思う。
      $user = $this->Users->get($id);
      if ($this->Users->delete($user)){
        // flashメッセージの作成
        $this->Flash->success('delete Sucseds!');
        // リダイレクト処理↓
        return $this->redirect(['action'=>'index']);
      } else {
        $this->Flash->error('delete Error!');
      }
      $this->set(compact('user'));
    }



    // ログイン系のコード
    public function login()
    {
      if ($this->request->is('post')) {
        $user = $this->Auth->identify();
        if ($user) {
          $this->Auth->setUser($user);
          return $this->redirect($this->Auth->redirectUrl());
        }
        $this->Flash->error('ユーザー名またはパスワードが不正です。');
      }
    }

    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['logout']);
        // 許可アクションリストに 'add' アクションを追加
        $this->Auth->allow(['logout', 'add']);
    }

    public function logout()
    {
        $this->Flash->success('ログアウトしました。');
        return $this->redirect($this->Auth->logout());
    }
  }
