<?php

  namespace App\Controller;


  class ProductsController extends AppController
  {
    public function index()
    {
      // ↓レイアウトファイルを指定するファイル
      $this->viewBuilder()->layout('my_application');
      $products = $this->Products->find('all');
      $user = $this->Auth->user();

                  // ->order(['title' => 'DESC'])
                  // ->limit(2)
                  // ->where(['title like' => '%理学']);
      $this->set(compact('products'));
      $this->set(compact('user'));
    }

    // railsで言うところのshowアクション
    public function view($id = null)
    {
      $product = $this->Products->get($id);
      $this->set(compact('product'));
    }

    public function add()
    {
      // ↓newEntityが【@product = Product.new】的なやつだと思う。
      $product = $this->Products->newEntity();
      // もしpostメソッドだったら以下のコードを実行してね
      if ($this->request->is('post')){
        $product = $this->Products->patchEntity($product, $this->request->data);
        if ($this->Products->save($product)){
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
      // ↓newEntityが【@product = Product.new】的なやつだと思う。
      $product = $this->Products->get($id);
      // もしpostメソッドだったら以下のコードを実行してね
      if ($this->request->is(['post', 'patch', 'put'])){
        $product = $this->Products->patchEntity($product, $this->request->data);
        if ($this->Products->save($product)){
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
      // ↓newEntityが【@product = Product.new】的なやつだと思う。
      $product = $this->Products->get($id);
      if ($this->Products->delete($product)){
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
