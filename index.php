<?php

include('User.php');
include('Device.php');
include('Checklist.php');

$device = new Device(1,'Apple','Iphone 13 Pro','123456789','abc1234');

print_r($device);