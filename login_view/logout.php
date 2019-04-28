<?php

SESSION_START();

session_destroy();

$current = 'logout';
header('Location: ../view/login_index.php');

?>
