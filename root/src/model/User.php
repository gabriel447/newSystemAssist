<?php

namespace root\src\model;

class User {
    private $name;
    private $cpf;
    private $type;
    private $login;
    private $password;
    
    public function __construct($name,$cpf,$login,$password) {
        $this->name = $name;
        $this->cpf = $cpf;
        $this->type = 'Administrador';
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