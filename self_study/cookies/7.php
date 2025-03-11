<?php
// Если форма отправлена, обновляем куку
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $theme_value = $_POST['theme'];
    setcookie('theme', $theme_value, time() + (86400), '/'); // Срок действия 1 день
    // Перезагружаем страницу, чтобы увидеть изменения
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}

// Получаем текущую тему из куки (по умолчанию light)
$theme = isset($_COOKIE['theme']) ? $_COOKIE['theme'] : 'light';
?>
<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            background-color: <?php echo $theme == 'dark' ? '#333' : '#fff'; ?>;
            color: <?php echo $theme == 'dark' ? '#fff' : '#000'; ?>;
        }
    </style>
</head>
<body>
    <h2>Текущая тема: <?php echo $theme; ?></h2>
    <form method="post">
        <label>Выберите тему:</label>
        <select name="theme">
            <option value="light" <?php if ($theme == 'light') echo 'selected'; ?>>Light</option>
            <option value="dark" <?php if ($theme == 'dark') echo 'selected'; ?>>Dark</option>
        </select>
        <input type="submit" value="Изменить тему">
    </form>
</body>
</html>

