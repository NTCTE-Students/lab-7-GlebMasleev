<?php
$cookie_name = 'preferences';
$cookie_value = 'dark_mode';

setcookie($cookie_name, $cookie_value, time() + (7 * 86400), '/'); // 1 неделя

?>
<!DOCTYPE html>
<html>
<body>
    <?php
        if (!isset($_COOKIE[$cookie_name])) {
            echo "Куки '{$cookie_name}' не установлены!";
        } else {
            echo "Куки '{$cookie_name}' установлены!<br>";
            echo 'Значение: ' . $_COOKIE[$cookie_name];
        }
    ?>
</body>
</html>
