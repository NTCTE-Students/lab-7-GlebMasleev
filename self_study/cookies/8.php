<?php
setcookie('font_size', '16px', time() + (86400), '/');
setcookie('layout', 'grid', time() + (86400), '/');
?>
<!DOCTYPE html>
<html>
<body>
    <h2>Настройки:</h2>
    <p>Размер шрифта: <?php echo isset($_COOKIE['font_size']) ? $_COOKIE['font_size'] : 'Не установлен'; ?></p>
    <p>Макет: <?php echo isset($_COOKIE['layout']) ? $_COOKIE['layout'] : 'Не установлен'; ?></p>
</body>
</html>