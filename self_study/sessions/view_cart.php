<?php
session_start();

// Если корзина пуста
if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    echo "Ваша корзина пуста.";
    exit();
}
?>

<!DOCTYPE html>
<html>
<body>
    <h2>Содержимое корзины:</h2>
    <ul>
        <?php
        // Выводим товары в корзине
        foreach ($_SESSION['cart'] as $item) {
            echo "<li>" . htmlspecialchars($item) . "</li>";
        }
        ?>
    </ul>
    <p><a href="4.php">Вернуться в корзину</a></p>
</body>
</html>
