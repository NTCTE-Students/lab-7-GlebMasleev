<?php
session_start();

if (!isset($_SESSION['first_visit_time'])) {
    $_SESSION['first_visit_time'] = date('Y-m-d H:i:s');
}

$_SESSION['last_visit_time'] = date('Y-m-d H:i:s');
?>

<!DOCTYPE html>
<html>
<body>
    <h2>Информация о посещениях</h2>
    <p>Первое посещение: <?php echo $_SESSION['first_visit_time']; ?></p>
    <p>Последнее посещение: <?php echo $_SESSION['last_visit_time']; ?></p>
</body>
</html>
