<?php
require_once '../../lib/DB.php';

$db = new DB();
$sql = "SELECT * FROM menu_items";

if (!empty($_GET['category'])) {
    $sql.= " WHERE category = '{$_GET['category']}'";
}
$sql.= " ORDER BY category";
//TODO: SQL Injection
$stmt = $db->pdo->query($sql);
$menu_items = $stmt->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($menu_items);

echo $json;
