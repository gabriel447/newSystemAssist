<?php

namespace root\src\model;

class Device {
    private $category;
    private $brand;
    private $model;
    private $serial;
    private $ean;

    function __construct($category,$brand,$model,$serial,$ean) {
        $this->category = $category;
        $this->brand = $brand;
        $this->model = $model;
        $this->serial = $serial;
        $this->ean = $ean;
    }
}


