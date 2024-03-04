<?php

class Item {
    private $category;
    private $brand;
    private $model;
    private $serial;
    private $ean;

    function __construct($category,$brand,$model,$serial,$ean) {
        $this->checkCategory($category);
        $this->brand = $brand;
        $this->model = $model;
        $this->serial = $serial;
        $this->ean = $ean;
    }

    private function checkCategory($category) {
        if($category === 1) {
            $this->category = 'Celular';
        }elseif($category === 2){
            $this->category = 'Computador';
        }else {
            echo('A categoria precisa ser Celular ou Computador.');
            exit();
        }
    }
}