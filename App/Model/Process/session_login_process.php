<?php

use EligerBackend\Model\Classes\Connectors\DBConnector;
use EligerBackend\Model\Classes\Users\User;

// start session
session_start();

if (isset($_SESSION['user'])) {
    echo 200;
    exit();
} elseif (isset($_COOKIE['remember_token'])) {
    $user = new User();
    echo $user->loginWithToken(DBConnector::getConnection());
    exit();
} else {
    echo 14;
    exit();
}