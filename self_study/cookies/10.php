<?php
setcookie('session_id', '', time() - 3600, '/'); // Удаляем куку
?>
<!DOCTYPE html>
<html>
<body>
    <h2>Кука "session_id" удалена!</h2>
</body>
</html>
