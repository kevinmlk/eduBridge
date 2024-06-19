<?php

session_start();
$_SESSION['loggedin'] = true;

header('Location: ./../dashboard/roadmap.php');
exit;