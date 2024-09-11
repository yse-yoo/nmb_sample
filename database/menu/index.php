<?php 
require_once '../../lib/DB.php';

$db = new DB();
$sql = "SELECT * FROM menu_items";
$stmt = $db->pdo->query($sql);
$menu_items = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <a href="create.php" class="btn btn-primary mb-3">New</a>
        <h2 class="h2">Items Registration</h2>
        <?php if ($menu_items): ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Created At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($menu_items as $item): ?>
                        <tr>
                            <td><?= $item['id'] ?></td>
                            <td><?= $item['name'] ?></td>
                            <td><?= $item['category'] ?></td>
                            <td><?= $item['price'] ?></td>
                            <td><img src="../../images/<?= $item['category'] ?>/<?= $item['image'] ?>" alt="<?= $item['name'] ?>" width="50"></td>
                            <td><?= $item['created_at'] ?></td>
                            <td>
                                <a href="edit.php?id=<?= $item['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>No menu items found.</p>
        <?php endif; ?>
    </div>
</body>

</html>