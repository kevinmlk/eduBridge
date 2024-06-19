<?php

session_start();
$_SESSION['loggedin'] = true;
$_SESSION['results'] = 'positive';
header('Location: ./../dashboard/simulator-results.php');
exit;