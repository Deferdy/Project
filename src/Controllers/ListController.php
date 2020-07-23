<?php
namespace BeeJeejob\Controllers;

use BeeJeejob\Models\TaskMapper;
use BeeJeejob\Models\UserMapper;
use BeeJeejob\Input\SearchQueryValidator;
use BeeJeejob\Pager;
use BeeJeejob\SearchData;


class ListController extends PageController
{
    private $root;
    private $pdo;
    
    function __construct($root, $pdo)
    {
        parent::__construct();
        $this->root = $root;
        $this->pdo = $pdo;
    }
    
    function start()
    {
        $this->execute();
        $this->listPage($this->root, $this->pdo);
    }
    
    protected function listPage($root, \PDO $pdo)
    {
        $mapper    = new TaskMapper($pdo);
        $validator = new SearchQueryValidator();
        $pager     = new Pager();
        $messages  = array();
        
       
        
        
        //проверяем логин пользователя (если есть)
        $authorized = $loginMan->isLogged();
        //админ ли?
        $isAdmin = $loginMan->isAdmin();
        //если залогинены - запоминаем имя
        if ($authorized === true) {
            $usernameDisplayed = $loginMan->getLoggedName();
        } else {
            $usernameDisplayed = '';
        }
        
        //получаем данные для db query
        $searchData = $validator->genSearchData($_GET);
        try {
            $pdo->beginTransaction();
            $tasks = $mapper->getTasks($searchData);
        } catch (\Throwable $e) {
            //если ошибка - откатываемся и передаём наверх
            $pdo->rollBack();
            throw new \Exception('Ошибка ', 0, $e);
        }
    
        
        
    }
    
    
}