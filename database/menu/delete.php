<?php
require_once '../../lib/DB.php';

try {
    $posts = $_POST;

    $db = new DB();
    $sql = "DELETE FROM menu_items WHERE id = :id";

    $stmt = $db->pdo->prepare($sql);
    $stmt->execute($posts);
    header('Location: index.php');
} catch (\Throwable $th) {
    var_dump($th);
    header("Location: edit.php?id={$posts['id']}");
}
