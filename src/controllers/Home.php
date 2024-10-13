<?php
namespace Johnn\ElFaroPhpProject\controllers;
use Johnn\ElFaroPhpProject\lib\Controller;
use Johnn\ElFaroPhpProject\models\User;
use Johnn\ElFaroPhpProject\models\Comments;

class Home extends Controller{

  function __construct()
  {
      parent::__construct();
  }

  public function index(){
    $postsComments = Comments::getComments();
    $this->render('home/index', ['user' => $this->user, 'posts' => $posts]);
}

}