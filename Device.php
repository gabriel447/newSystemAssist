<?php

class Device{
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
        $this->assignCellChecklist();
    }

    private function checkCategory($category) {
        if($category != 1) {
            echo('Categoria inválida.');
            exit();
        }
        $this->category = $category;
    }

    private function assignCellChecklist() {
        if ($this->category == 1) {
            $this->checklist = new Checklist();
            $this->checklist->addItem("Damage", "ok");
            $this->checklist->addItem("Screen", "ok");
            $this->checklist->addItem("System", "ok");
            $this->checklist->addItem("Usb", "ok");
            $this->checklist->addItem("Battery", "ok");
            $this->checklist->addItem("Camera", "ok");
            $this->checklist->addItem("Sensors", "ok");
            $this->checklist->addItem("Bluetooth", "ok");
            $this->checklist->addItem("Wifi", "ok");
            $this->checklist->addItem("Call", "ok");
            $this->checklist->addItem("MobileData", "ok");
        } 
    }
}

