<?php

namespace BeeJeejob;
use BeeJeejob\views\index;


class Task
{
    private $id;
    private $userid;
    private $username;
    private $email;
    private $text;
  
    
    public function __construct($id, $userid, $username, $email, $text)
    {
        $this->setId($id);
        $this->setUserid($userid);
        $this->setUsername($username);
        $this->setEmail($email);
        $this->setText($text);
        
    }
    
    /**
     * @param int $id
     */
    public function setId($id)
    {
        if (is_int($id)) {
            $this->id = $id;
        } else {
            throw new \Exception('Task errors');
        }
    }
    
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * @param mixed $userid
     */
    public function setUserid($userid)
    {
        if (is_int($userid)) {
            $this->userid = $userid;
        } else {
            throw new \Exception('User id errors');
        }
    }
    
    /**
     * @return mixed
     */
    public function getUserid()
    {
        return $this->userid;
    }
    
    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }
    
    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }
    
    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }
    
    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }
    
    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }
    
    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }
    
    
    /**
     * @return array
     */
    public function getArray()
    {
        $result = array(
            'id'         => $this->getId(),
            'username'   => $this->getUsername(),
            'email'      => $this->getEmail(),
            'text'       => $this->getText(),
                   );
        return $result;
    }
}