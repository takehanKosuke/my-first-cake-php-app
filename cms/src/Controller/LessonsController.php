<?php

  namespace App\Controller;

  class LessonsController extends AppController
  {
    public function index()
    {
      // ↓レイアウトファイルを指定するファイル
      $this->viewBuilder()->layout('my_application');
      $lessons = $this->Lessons->find('all')
                  ->order(['title' => 'DESC'])
                  ->limit(2)
                  ->where(['title like' => '%理学']);
      $this->set(compact('lessons'));
    }

    // railsで言うところのshowアクション
    public function view($id = null)
    {
      $this->viewBuilder()->layout('my_application');
      $lesson = $this->Lessons->get($id);
      $this->set(compact('lesson'));
    }

  }
