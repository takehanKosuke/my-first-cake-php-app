<?php

  namespace App\Controller;


  class CartsController extends AppController
  {
    public function index()
    {
      // ↓レイアウトファイルを指定するファイル
      $this->viewBuilder()->layout('my_application');
      $carts = $this->Carts->find('all');

                  // ->order(['title' => 'DESC'])
                  // ->limit(2)
                  // ->where(['title like' => '%理学']);
      $this->set(compact('carts'));
    }

    // railsで言うところのshowアクション
    public function view($id = null)
    {
      $cart = $this->Carts->get($id);
      $this->set(compact('cart'));
    }

    public function add()
    {
      // ↓newEntityが【@cart = Cart.new】的なやつだと思う。
      $cart = $this->Carts->newEntity();
      // もしpostメソッドだったら以下のコードを実行してね
      if ($this->request->is('post')){
        $cart = $this->Carts->patchEntity($cart, $this->request->data);
        if ($this->Carts->save($cart)){
          // flashメッセージの作成
          $this->Flash->success('Add Sucseds!');
          // リダイレクト処理↓
          return $this->redirect(['action'=>'index']);
        } else {
          $this->Flash->error('Add Error!');
        }
      }
      $this->set(compact('cart'));
    }

    public function edit($id = null)
    {
      // ↓newEntityが【@cart = Cart.new】的なやつだと思う。
      $cart = $this->Carts->get($id);
      // もしpostメソッドだったら以下のコードを実行してね
      if ($this->request->is(['post', 'patch', 'put'])){
        $cart = $this->Carts->patchEntity($cart, $this->request->data);
        if ($this->Carts->save($cart)){
          // flashメッセージの作成
          $this->Flash->success('Edit Sucseds!');
          // リダイレクト処理↓
          return $this->redirect(['action'=>'index']);
        } else {
          $this->Flash->error('Edit Error!');
        }
      }
      $this->set(compact('cart'));
    }

    public function delete($id = null)
    {
      $this->request->allowMethod(['post', 'delete']);
      // ↓newEntityが【@cart = Cart.new】的なやつだと思う。
      $cart = $this->Carts->get($id);
      if ($this->Carts->delete($cart)){
        // flashメッセージの作成
        $this->Flash->success('delete Sucseds!');
        // リダイレクト処理↓
        return $this->redirect(['action'=>'index']);
      } else {
        $this->Flash->error('delete Error!');
      }
      $this->set(compact('cart'));
    }
  }
