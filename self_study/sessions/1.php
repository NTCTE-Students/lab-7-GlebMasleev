<?php
session_start();
$_SESSION['username'] = 'student';

echo "Значение переменной сессии username: " . $_SESSION['username'];
?>
