<?php

use BeeJeejob\Controllers\ListController;


$root = dirname(__FILE__, 2);
require_once ($root . '/database.php'); 

try { 
    $controller = new ListController($root, $pdo);
   
    $controller->get('taskAdded', function ($key, $value, ListController $c) {
        $c->addMessage('задача успешно добавлена');
    });
    $controller->start();
    
} catch (\Throwable $e) {
    $errorHelper->dispatch($e);
}