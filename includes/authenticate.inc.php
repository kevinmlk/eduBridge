<?php

session_start();
$_SESSION['loggedin'] = true;

header('Location: ./../roadmap.php');
exit;