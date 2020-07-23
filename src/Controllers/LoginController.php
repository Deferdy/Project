<?php
namespace BeeJeejob\Controllers;


use BeeJeejob\Models\UserMapper;


class LoginController extends PageController
{
    private $root;
    private $pdo;
    private $is_logged;
    function __construct($root, $pdo)
    {
        parent::__construct();
        $this->root = $root;
        $this->pdo = $pdo;
    }
    
    function start()
    {
        $mapper    = new UserMapper($this->pdo);;
        
        if ($userID !== false ) {
            $loginMan->persistLogin($userID);
        }
        
        $this->redirect('list.php');
    }
    
    function logout()
    {
        $mapper    = new UserMapper($this->pdo);;
        $loginMan  = $mapper ->logout();
       
    }
}