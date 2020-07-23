<?php
use BeeJeejob\Controllers\LoginController;


$root = dirname(__FILE__, 2);

require_once ($root . '/database.php');


try {
    $controller = new LoginController($root, $pdo);
    if (array_key_exists('logout', $_POST)) {
        $controller->logout();
    }
    $controller->redirect('list.php');
    
} catch (\Throwable $e) {
    $errorHelper->dispatch($e);
}