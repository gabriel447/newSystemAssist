<?php 

Class Laptop {
    private $brand;
    private $model;
    private $serial;
    private $ean;
    
    public function __construct($brand, $model, $serial, $ean) {
        $this->brand = $brand;
        $this->model = $model;
        $this->serial = $serial;
        $this->ean = $ean;
    }
}