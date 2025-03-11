<?php
session_start();

if (!isset($_SESSION['username'])) {
    header('Location: 2.php'); // Перенаправление, если пользователь не авторизован
    exit();
}
?>

<!DOCTYPE html>
<html>
<body>
    <h2>Добро пожаловать, <?php echo $_SESSION['username']; ?>!</h2>
    <a href="logout.php">Выйти</a>
</body>
</html>
