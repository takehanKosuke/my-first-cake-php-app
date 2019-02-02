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

      $lesson = $this->products->get($id);
      $this->set(compact('lesson'));
    }

    public function add()
    {
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
