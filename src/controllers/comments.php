<?php

namespace Johnn\ElFaroPhpProject\controllers;

use Johnn\ElFaroPhpProject\lib\Controller;

class ComentariosController extends Controller {

  public function index() {
      // Obtener comentarios de la base de datos
      $comentarios = Comment::getCommentsForPost($post_id); // Reemplaza $post_id por el ID del post relacionado

      // Cargar la vista de comentarios y pasar los datos
      $this->view('comentarios/index', ['comentarios' => $comentarios]);
  }
}