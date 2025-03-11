<?php
if (!isset($_COOKIE['loggedin'])) {
    header('Location: login.php'); // Перенаправление на страницу login.php, если кука не установлена
    exit();
}
?>
<!DOCTYPE html>
<html>
<body>
    <h2>Добро пожаловать!</h2>
    <p>Вы авторизованы!</p>
</body>
</html>
