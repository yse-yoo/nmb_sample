<?php
require_once 'app.php';
require_once 'lib/Category.php';

$categories = Category::list();
$select_category = "All";
if (isset($_GET['category'])) {
    $select_category = $categories[$_GET['category']];
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Crispy Kitchen - Bootstrap 5 HTML Template</title>

    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/tooplate-crispy-kitchen.css" rel="stylesheet">

    <link rel="stylesheet" href="css/menu.css">
    <script src="js/menu.js" defer></script>
</head>

<body>

    <?php
    include('components/nav.php')
    ?>

    <?php if ($select_category): ?>
        <h2><?= $select_category ?></h2>
    <?php endif ?>
    <div id="menu"></div>

    <div id="orderSummary" class="order-summary">
        <h2>注文内容</h2>
        <ul id="orderList"></ul>
        <p id="totalPrice">合計金額: 0円</p>
        <button id="proceedToPersonalInfo">注文確認</button>
    </div>
    <div id="personalInfo" class="personal-info hidden">
        <h1>注文確認</h1>
        <form id="personal-info-form">
            <label for="name">名前:</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="email">メールアドレス:</label>
            <input type="email" id="email" name="email" required>
            <button type="submit">注文を送信</button>
        </form>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>