<?php

use BeeJeejob\Controllers\TaskController;


$root = dirname(__FILE__, 2);
$public = __DIR__;
require_once ($root . '/bootstrap.php');
try {
    $controller = new TaskController($root, $public, $pdo);
    $controller->start();
} catch (\Throwable $e) {
    $errorHelper->dispatch($e);
}