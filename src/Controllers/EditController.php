<?php
namespace BeeJeejob\Controllers;


use BeeJeejob\Models\TaskMapper;
use BeeJeejob\Models\UserMapper;
use BeeJeejob\Input\NewTaskValidator;
use BeeJeejob\Views\update;

class EditController extends PageController
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
        
        $taskmapper = new TaskMapper($this->pdo);
        
        $userMapper = new UserMapper($this->pdo);
       
    
        $isAdmin = $loginMan->isAdmin();
        if ($authorized AND $isAdmin) {
            $statusChanged = $this->checkAndChangeStatus($_POST, $taskmapper);
    
            $taskID = $this->checkTaskID($_POST);
            $editResult = $this->checkAndChangeNewText($_POST, $taskmapper);
    
            if ($editResult) {
                $this->redirect('list.php');
            } else {
        
                $taskText = $taskmapper->getTask($taskID)->getText();
               
                $view->render([
                    'authorized' => $authorized,
                    'task_id' => $taskID,
                    'task_text' => $taskText
                ]);
            }
        }
    }
    
    function checkAndChangeStatus($input, TaskMapper $taskmapper)
    {
        $result = false;
        if (array_key_exists('fulfilled', $input) AND $input['fulfilled'] === '1') {
            if (array_key_exists('task_id', $input)) {
                $result = $taskmapper->changeStatus((int)$input['task_id'], true);
            }
        }
        return $result;
    }
    
    function checkTaskID($input)
    {
        if (array_key_exists('task_id', $input)) {
            return (int)$input['task_id'];
        } else throw new \Exception('errors');
    }
    
    function checkAndChangeNewText($input, TaskMapper $taskmapper )
    {
    
        if (array_key_exists('edit_form_sent', $input)
              AND
            $input['edit_form_sent'] === '1'
              AND
            $taskID = $this->checkTaskID($input)
        ) {
            $validator = new NewTaskValidator();
            $newText = $validator->checkTaskText($input);
            $result = $taskmapper->changeText($taskID, $newText);
        } else $result = false;
        return $result;
    }
}