<?php

use BeeJeejob\Controllers\EditController;


$root = dirname(__FILE__, 2);
require_once ($root . '/database.php');

try {
    $controller = new EditController($root, $pdo);
    $controller->start();
    
} catch (\Throwable $e) {
    $errorHelper->dispatch($e);
}