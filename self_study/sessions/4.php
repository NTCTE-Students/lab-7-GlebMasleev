<?php
session_start();

// Если корзина еще не существует, создаем её как пустой массив
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Обработка добавления товара
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];
    $item = $_POST['item'];

    if ($action == 'add' && !empty($item)) {
        $_SESSION['cart'][] = $item;
    } elseif ($action == 'remove' && in_array($item, $_SESSION['cart'])) {
        $_SESSION['cart'] = array_diff($_SESSION['cart'], [$item]);
    }
}
?>

<!DOCTYPE html>
<html>
<body>
    <h2>Корзина</h2>
    
    <!-- Форма добавления товара -->
    <form method="post">
        <input type="text" name="item" placeholder="Название товара" required><br>
        <input type="submit" name="action" value="add"> Добавить товар
        <input type="submit" name="action" value="remove"> Удалить товар
    </form>

    <p><a href="view_cart.php">Посмотреть корзину</a></p>
</body>
</html>
