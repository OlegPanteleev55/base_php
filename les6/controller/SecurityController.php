<?php

require_once 'model/UserProvider.php';

$error = null;

if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    unset($_SESSION['user']);
    header('Location: /');
    die();
}

if (isset($_POST['username'], $_POST['password'])) {
    ['username' => $username, 'password' => $password] = $_POST; 

    $userProvider = new UserProvider();
    $user = $userProvider->getByUsernameAndPassword($username, $password);

    if ($user === null) {
        $error = 'Пользователь с такими данными не найден';
    } else {
        $_SESSION['user'] = $user;
    }
}


if (isset($_SESSION['user'])) { 
    header('Location: /'); 
    die();
}

require_once 'view/signin.php';