<?php

  namespace App\Controller;

  class LessonsController extends AppController
  {
    public function index()
    {
      $lessons = $this->Lessons->find('all');
      $this->set(compact('lessons'));
    }
  }
