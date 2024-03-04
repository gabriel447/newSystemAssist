<?php

include('User.php');
include('Checklist.php');

$user = new User('Gabriel dos Anjos','gabriel@gmail.com','Gabe1234@');

$checklist = new Checklist('Celular','troca de tela');
$checklist2 = new Checklist('Laptop','formatação');

print_r($user);
var_dump($checklist);
var_dump($checklist2);