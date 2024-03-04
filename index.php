<?php

include('User.php');
include('Checklist.php');
include('Item.php');

$celular = new Item(1,'Apple','Iphone 13 Pro','123456789','abc1234');

print_r($celular);