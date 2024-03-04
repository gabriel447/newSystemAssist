<?php

include('User.php');
include('Device.php');
include('Checklist.php');

$user = new User('Gabriel dos Anjos','gabriel@gmail.com','Gabe2024123$');
print_r($user);

$celular = new Item(1,'Apple','Iphone 13 Pro','123456789','abc1234');
print_r($celular);