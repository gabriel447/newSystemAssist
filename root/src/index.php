<?php

namespace newSystemAssist\root\src;

use root\src\model\User;
use root\src\model\Device;

require_once 'autoload.php';

$user = new User('Gabriel dos Anjos','123.456.759-01','gabriel@gmail.com','Gabe2024@123');
$device = new Device('Celular','Apple','Iphone 13 Pro','123456789','abc1234');

print_r($user);
print_r($device);