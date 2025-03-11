<?php
$cookie_name = 'visited';
if (isset($_COOKIE[$cookie_name])) {
    $visited_count = $_COOKIE[$cookie_name] + 1;
} else {
    $visited_count = 1;
}

setcookie($cookie_name, $visited_count, time() + (86400), '/'); // 1 день
?>
<!DOCTYPE html>
<html>
<body>
    <?php
        echo "Вы посетили эту страницу {$visited_count} раз(а).";
    ?>
</body>
</html>
