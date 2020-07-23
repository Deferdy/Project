<?php
namespace BeeJeejob\Models;


use BeeJeejob\views\espace;
use BeeJeejob\User;

class UserMapper
{
    private $pdo;
    
    /**
     * UserMapper constructor.
     * @param \PDO $pdo
     */
    function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    
    /**
     * @param $id
     * @return User|bool
     * @throws \Exception
     */
    function getUser($id)
    {
        try {
            $sql = 'SELECT `name` FROM `admin` WHERE `id` = :id';
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':id', $id, \PDO::PARAM_INT);
            $result = $stmt->execute();
            if ($result !== false) {
                $assoc = $stmt->fetch(\PDO::FETCH_ASSOC);
                $result = new User($id, $assoc['name']);
            }
        } catch (\PDOException $e) {
            throw new \Exception('Ошибка', 0, $e);
        }
        return $result;
    }
    
    /**
     * @param $name
     * @return User|bool
     * @throws \Exception
     */
    function getUserByName($name)
    {
        try {
            $sql = 'SELECT `id`, `name` FROM `admin` WHERE `name` = :name';
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':name', $name, \PDO::PARAM_INT);
            $result = $stmt->execute();
            if ($result !== false) {
                $assoc = $stmt->fetch(\PDO::FETCH_ASSOC);
                $result = new User($assoc['id'], $assoc['name']);
            }
        } catch (\PDOException $e) {
            throw new \Exception('Ошибка', 0, $e);
        }
        return $result;
    }
    
    /**
     * @param $name
     * @return string|bool
     * @throws \Exception
     */
    function getIdFromName($name)
    {
        try {
            $sql = 'SELECT `id` FROM `admin` WHERE `name` = :name';
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':name', $name);
            $result = $stmt->execute();
            if ($result !== false) {
                $assoc = $stmt->fetch(\PDO::FETCH_ASSOC);
                $result = $assoc['id'];
            }
        } catch (\PDOException $e) {
            throw new \Exception('Ошибка', 0, $e);
        }
        return $result;
    }
    

   
    
    public function doesExist($username)
    {
        try {
            $sql = 'SELECT `id` FROM `admin` WHERE `name` = :name';
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':name', $username);
            $result = $stmt->execute();
            if ($result !== false) {
                $assoc = $stmt->fetch(\PDO::FETCH_ASSOC);
                $result = empty($assoc) ? false : true;
            }
        } catch (\PDOException $e) {
            throw new \Exception('Ошибка о Введенных доступах', 0, $e);
        }
        return $result;
    }
    /**
     * @param $userID
     * @return bool|string
     * @throws \Exception
     */
    function getHashFromUser($userID)
    {
        try {
            $sql = 'SELECT `hash` FROM `admin` WHERE `id` = :id';
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':id', $userID, \PDO::PARAM_INT);
            $result = $stmt->execute();
            if ($result !== false) {
                $assoc = $stmt->fetch(\PDO::FETCH_ASSOC);
                if (array_key_exists('hash', $assoc)) {
                    $result = $assoc['hash'];
                } else $result = false;
            }
        } catch (\PDOException $e) {
            throw new \Exception('Ошибка о Введенных доступах', 0, $e);
        }
        return $result;
    }
    
    /**
     * @param $username
     * @return bool
     * @throws \Exception
     */
    function getHashByName($username)
    {
        try {
            $sql = 'SELECT `hash` FROM `admin` WHERE `name` = :name';
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam(':name', $username);
            $result = $stmt->execute();
            if ($result !== false) {
                $assoc = $stmt->fetch(\PDO::FETCH_ASSOC);
                if (array_key_exists('hash', $assoc)) {
                    $result = $assoc['hash'];
                } else $result = false;
            }
        } catch (\PDOException $e) {
            throw new \Exception('Введенные данные не верные!', 0, $e);
        }
        return $result;
    }
    
      
  
  }