<?php

  namespace App\Controller;

  class LessonsController extends AppController
  {
    public function index()
    {
      $lessons = $this->Lessons->find('all')
                  ->order(['title' => 'DESC'])
                  ->limit(2)
                  ->where(['title like' => '%理学']);
      $this->set(compact('lessons'));
    }
  }
