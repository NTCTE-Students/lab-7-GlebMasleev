<?php
$cookie_name = 'language';
$cookie_value = 'English';

setcookie($cookie_name, $cookie_value, time() + (2 * 3600), '/'); // 2 часа

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
