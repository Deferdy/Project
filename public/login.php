<?php

use BeeJeejob\Controllers\LoginController;


$root = dirname(__FILE__, 2);

require_once ($root . '/database.php');

try {
    $controller = new LoginController($root, $pdo);
    $controller->start();
    
} catch (\Throwable $e) {
    $errorHelper->dispatch($e);
}