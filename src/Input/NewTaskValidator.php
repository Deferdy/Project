<?php
namespace BeeJeejob\Input;

use BeeJeejob\views\insert;

class NewTaskValidator
{
   
    
    /**
     * @param $input
     * @return array|bool
     */
    public function checkInput($input, &$errors)
    {
        //check
        $result = true;
        $email = $this->checkEmail($input);
        $taskText = $this->checkTaskText($input);
        
        
        if ($email === false) {
            $errors[] = 'ошибка';
            $result = false;
        }
        if ($taskText === false) {
            $errors[] = 'ошибка';
            $result = false;
        }
        
        if ($image === false) {
            $errors[] = 'ошибка ';
            $result = false;
        }
        //if there are no errors
        if ($result !== false) {
            $result = ['email' => $email, 'task_text' => $taskText];
        }
        
        return $result;
    }
    
       
    /**
     * @param array $input
     * @return bool|string
     */
    public function checkTaskText($input)
    {
        if (array_key_exists('task_text', $input)) {
            $result = self::checkString($input['task_text'], 1, 2000);
        } else $result = false;
        return $result;
    }
    
    /**
     * @param array $input
     * @return bool|string
     */
    public function checkEmail($input)
    {
        //проверяем наличие почты и её соответствие RFC, иначе - false
        if (array_key_exists('email', $input)) {
            $email = trim($input['email']);
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $result = $email;
            } else $result = false;
        } else $result = false;
        return $result;
    }
    
    /**
     * Checks input to be string, optionally to consist of letters, numbers and '_' sign.
     * @param string $string String to check
     * @param int $minlen Minimal permitted length of string to pass check.
     * @param int $maxlen Maximal permitted length of string to pass check.
     * @param bool $trimWhiteSpaces
     * @param bool $onlyLetters
     * @param bool $startsWithLetter Optional parameter is used,
     * when first meaningful symbol of string (except any white character) must be letter.
     * @return bool|string Returns string if it passes test, else FALSE
     * (be careful, any whitespace character in the begginning and the end are deleted).
     */
    private static function checkString(
        $string,
        $minlen,
        $maxlen,
        $trimWhiteSpaces = false,
        $onlyLetters = false,
        $startsWithLetter = false
    )
    {
        if (is_string($string)) {
            //убираем белые символы, если включена опция
            if ($trimWhiteSpaces === true) {
                $string = trim($string);
            }
        
            if (!is_int($minlen) || !is_int($maxlen)) {
                throw new \UnexpectedValueException('errors');
            }
            
            if ( (mb_strlen($string) >= $minlen
                &&
                mb_strlen($string) <= $maxlen)
            ) {
                $result = $string;
            } else $result = false;
            
            
            if ($onlyLetters === true )
            {
                if (!preg_match('/^\w+$/iu', $string) > 0) {
                    $result = false;
                }
            }
            if ($startsWithLetter === true && !self::startsWithLetter($string)) {
                $result = false;
            }
        } else $result = false;
        
        return $result;
    }
    
    /**
     * Checks whether text variable starts with unicode Letter.
     * @param string $var Variable to test.
     * @return bool TRUE if var starts with letter (case insensitive), else FALSE.
     */
    private static function startsWithLetter($var)
    {
        if ( preg_match('/^\p{L}/iu', $var) ) {
            return true;
        } else return false;
    }
}