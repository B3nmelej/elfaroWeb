<?php
use Johnn\ElFaroPhpProject\controllers\Login;
use Johnn\ElFaroPhpProject\controllers\Signup;
use Johnn\ElFaroPhpProject\controllers\Home;
use Johnn\ElFaroPhpProject\controllers\Profile;
use Johnn\ElFaroPhpProject\controllers\Actions;

$router = new \Bramus\Router\Router();

session_start();

$user = unserialize($_SESSION['user']);
$dotenv = Dotenv::createInmutable(_DIR_ . '/../config/')

$router->before('GET', '/', function() { 

    if(isset($_SESSION['user'])){
        //$user = unserialize($_SESSION['user']);
        header('location: home');
    }else{
        header('location: login');
        //exit();
    }
});

$router->get('/', function() { 
    $controller = new Home;
    $controller->render('home/index')
});

$router->get('/login', function() {
    $controller = new Login;
    $controller->render('login/index');
});

$router->post('/auth', function() {
    $controller = new Login;
    $controller->auth($_POST);
});
$router->post('/contacto', function() {
    $controller = new Contacto;
    $controller->render('contactanos/index');
});

$router->get('/signup', function() { 
    $controller = new Signup;
    $controller->render('signup/index');
});

$router->post('/register', function() { 
    $controller = new Signup;
    $controller->register($_POST);
});

$router->post('/comentarios', function() { 
    $controller = new Comentario;
    $controller->index()($_POST);
});


$router->get('/singout', function() { 
  global $user;
  $controller = new Profile($user);
  $controller->index();
  
});

$router ->run();