<?php
$cookie_name = 'country';
$cookie_value = 'Russia';

setcookie($cookie_name, $cookie_value, time() + (86400), '/'); // 1 день
?>
<!DOCTYPE html>
<html>
<body>
    <?php
        if (isset($_COOKIE[$cookie_name])) {
            echo "Привет, пользователь из " . $_COOKIE[$cookie_name] . "!";
        } else {
            echo "Кука для страны не установлена.";
        }
    ?>
</body>
</html>
