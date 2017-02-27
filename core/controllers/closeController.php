<?php

session_destroy();

unset($_SESSION['user_id']);
unset($users);
unset($_COOKIE['user_id']);

$users_F = false;

header('location: index.php');

exit;

?>
