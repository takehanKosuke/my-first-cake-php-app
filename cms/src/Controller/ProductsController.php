<?php

  namespace App\Controller;


  class ProductsController extends AppController
  {
    public function index()
    {
      // ↓レイアウトファイルを指定するファイル
      $this->viewBuilder()->layout('my_application');
      $products = $this->products->find('all');

      return debug($products); 
                  // ->order(['title' => 'DESC'])
                  // ->limit(2)
                  // ->where(['title like' => '%理学']);
      $this->set(compact('products'));
    }

    // railsで言うところのshowアクション
    public function view($id = null)
    {
      $this->viewBuilder()->layout('my_application');
      $lesson = $this->products->get($id);
      $this->set(compact('lesson'));
    }

    public function add()
    {
      $this->viewBuilder()->layout('my_application');
      // ↓newEntityが【@lesson = Lesson.new】的なやつだと思う。
      $lesson = $this->products->newEntity();
      // もしpostメソッドだったら以下のコードを実行してね
      if ($this->request->is('post')){
        $lesson = $this->products->patchEntity($lesson, $this->request->data);
        $this->products->save($lesson);
        // リダイレクト処理↓
        return $this->redirect(['action'=>'index']);
      }
      $this->set(compact('lesson'));
    }
  }
