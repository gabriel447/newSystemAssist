<?php

namespace newSystemAssist\root\src;

spl_autoload_register(function ($class_name) {
    $file_path = str_replace('newSystemAssist\\root', 'src', $class_name);
    $file_path = str_replace('\\', DIRECTORY_SEPARATOR, $file_path);
    $file_path .= '.php';

    if (file_exists($file_path)) {
        require_once $file_path;
    }
});