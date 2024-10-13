<?php

namespace Johnn\ElFaroPhpProject\models;

use Johnn\ElFaroPhpProject\lib\Database;
use Johnn\ElFaroPhpProject\lib\Model;
use PDO;
use PDOException;


class Article extends Models  {

private string $id;
private string $user_id;
private string $category_id;
private string $title;
private string $publication_date;
private string $content;
private string $image;

public function __construct($user_id, $category_id, $title, $publication_date, $content, $image) {
    $this->user_id = $user_id;
    $this->category_id = $category_id;
    $this->title = $title;
    $this->publication_date = $publication_date;
    $this->content = $content;
    $this->image = $image;
}

// Agrega los métodos necesarios para interactuar con la base de datos, como guardar, obtener todos los artículos, obtener por ID, etc.

public static function getAll() {
    try {
        $db = new Database();
        $query = $db->connect()->query('SELECT * FROM articles');
        $articulos = $query->fetchAll(PDO::FETCH_ASSOC);
        $items = [];

        foreach ($articulos as $articulo) {
            $item = new Article(
                $articulo['user_id'],
                $articulo['category_id'],
                $articulo['title'],
                $articulo['publication_date'],
                $articulo['content'],
                $articulo['image']
            );

            $item->setId($articulo['id']);
            array_push($items, $item);
        }

        return $items;

    } catch (PDOException $e) {
        // Maneja el error
    }
}

// Agrega los demás métodos necesarios para interactuar con los artículos en la base de datos.

public function getId() {
    return $this->id;
}

// Agrega los métodos getters y setters para los otros campos si es necesario.
}