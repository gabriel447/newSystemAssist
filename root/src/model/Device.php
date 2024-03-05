<?php

namespace root\src\model;

class Device {
    private $category;
    private $brand;
    private $model;
    private $serial;
    private $ean;
    private $checklist;

    function __construct($category,$brand,$model,$serial,$ean) {
        $this->category = $this->getCategory($category);
        $this->checklist = $this->getChecklist($category);
        $this->brand = $brand;
        $this->model = $model;
        $this->serial = $serial;
        $this->ean = $ean;
    }

    private function getCategory($category){
        if ($category == 1) {
            return $this->category = "Celular";
        } elseif($category == 2) {
            return $this->category = "Computador";
        }
    }

    private function getChecklist($category){
        if ($category == 1) {
            return new Checklist("Celular");
        } elseif ($category == 2) {
            return new Checklist("Computador");
        } else {
            echo "Invalid Category.";
            exit();
        }
    }   
}