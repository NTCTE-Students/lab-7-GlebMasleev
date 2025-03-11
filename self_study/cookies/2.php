<?php
$cookie_name = 'user';
$cookie_value = 'guest';

setcookie($cookie_name, $cookie_value, time() + (86400), '/'); // Обновляем куку

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
