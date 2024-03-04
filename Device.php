<?php

class Item {
    private $category;
    private $brand;
    private $model;
    private $serial;
    private $ean;
    private $checklist;

    function __construct($category,$brand,$model,$serial,$ean) {
        $this->checkCategory($category);
        $this->brand = $brand;
        $this->model = $model;
        $this->serial = $serial;
        $this->ean = $ean;
        $this->assignChecklist();
    }

    private function checkCategory($category) {
        if($category != 1) {
            echo('Categoria inválida.');
            exit();
        }
            $this->category = $category;
    }

    private function assignChecklist() {
        if ($this->category == 1) {
            $this->checklist = new Checklist();
            $this->checklist->addItem("Damage");
            $this->checklist->addItem("Screen");
            $this->checklist->addItem("System");
            $this->checklist->addItem("Usb");
            $this->checklist->addItem("Battery");
            $this->checklist->addItem("Camera");
            $this->checklist->addItem("Sensors");
            $this->checklist->addItem("Bluetooth");
            $this->checklist->addItem("Wifi");
            $this->checklist->addItem("Call");
            $this->checklist->addItem("Mobile Data");
        } 
    }
}
