<?php

class User {
    private $name;
    private $type;
    private $login;
    private $password;
    
    public function __construct($name,$login,$password) {
        $this->name = $name;
        $this->type = 2;
        $this->login = $login;
        $this->checkLength($password);
    }

    private function checkLength($password)
    {
        if (strlen($password < 8)) {
            echo('A senha precisa ter no minimo oito caracteres.');
            exit();
        }
            $this->password = $password;
    }

}