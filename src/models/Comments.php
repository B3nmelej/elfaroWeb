<?php

namespace Johnn\ElFaroPhpProject\models;

use Johnn\ElFaroPhpProject\lib\Database;
use Johnn\ElFaroPhpProject\lib\Model;
use PDO;
use PDOException;

class Comment extends Model {

private string $id;

public function __construct(
    private string $user_id,
    private string $comment_date,
    private string $comment,
    private string $modification_date
) {
    parent::__construct();
}

public function save() {
    try {
        $query = $this->prepare('INSERT INTO comment (user_id, comment_date, comment, modification_date) VALUES(:user_id, :comment_date, :comment, :modification_date)');
        $query->execute([
            'user_id'          => $this->user_id,
            'comment_date'     => $this->comment_date,
            'comment'          => $this->comment,
            'modification_date' => $this->modification_date,
        ]);
        return true;
    } catch (PDOException $e) {
        error_log($e->getMessage());
        return false;
    }
}

public static function getCommentsForPost($post_id) {
    $comments = [];

    try {
        $db = new Database();
        $query = $db->connect()->prepare('SELECT * FROM comment WHERE user_id = :user_id');
        $query->execute(['user_id' => $post_id]);

        while ($commentData = $query->fetch(PDO::FETCH_ASSOC)) {
            $comment = new Comment(
                $commentData['user_id'],
                $commentData['comment_date'],
                $commentData['comment'],
                $commentData['modification_date']
            );
            $comment->setId($commentData['id']);
            array_push($comments, $comment);
        }

        return $comments;
    } catch (PDOException $e) {
        error_log($e->getMessage());
        return [];
    }
}


public function getId(): string {
    return $this->id;
}

public function setId(string $value) {
    $this->id = $value;
}

public function getUserId() {
    return $this->user_id;
}

public function getCommentDate() {
    return $this->comment_date;
}

public function getComment() {
    return $this->comment;
}

public function getModificationDate() {
    return $this->modification_date;
}
}