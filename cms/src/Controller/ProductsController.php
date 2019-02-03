<?php

  namespace App\Controller;


  class ProductsController extends AppController
  {
    public function index()
    {
      // ↓レイアウトファイルを指定するファイル
      $this->viewBuilder()->layout('my_application');
      $products = $this->Products->find('all');

                  // ->order(['title' => 'DESC'])
                  // ->limit(2)
                  // ->where(['title like' => '%理学']);
      $this->set(compact('products'));
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
        $this->Products->save($product);
        // リダイレクト処理↓
        return $this->redirect(['action'=>'index']);
      }
      $this->set(compact('product'));
    }
  }
