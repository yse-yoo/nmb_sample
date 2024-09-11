<?php
require_once '../../app.php';
require_once '../../lib/DB.php';
require_once '../../lib/File.php';

try {
    $posts = $_POST;
    $posts['image'] = ($_FILES['image']) ? basename($_FILES['image']['name']) : "";

    $db = new DB();
    $sql = "UPDATE menu_items 
        SET 
        name = :name, 
        price = :price, 
        category = :category,
        image = :image
        
        WHERE id = :id";

    $stmt = $db->pdo->prepare($sql);
    $stmt->execute($posts);

    // upload image
    File::uploadImage($_FILES['image'], $posts['category']);

    header('Location: index.php');
} catch (\Throwable $th) {
    var_dump($th);
    exit;
    header("Location: edit.php?id={$posts['id']}");
}
