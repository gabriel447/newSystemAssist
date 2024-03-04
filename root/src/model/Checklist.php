<?php

namespace root\src\model;

class Checklist {
    private $id;
    private $category;
    private $items = [];

    public function __construct($category) {
        $this->category = $category;
        $this->showChecklist();
    }
    
    private function showChecklist() {
        if ($this->category === 'Celular') {
            $this->items['Damage'] = '';
            $this->items['Screen'] = '';
            $this->items['System'] = '';
            $this->items['Usb'] = '';
            $this->items['Battery'] = '';
            $this->items['Camera'] = '';
            $this->items['Sensors'] = '';
            $this->items['Bluetooth'] = '';
            $this->items['Wifi'] = '';
            $this->items['Call'] = '';
            $this->items['MobileData'] = '';
        } elseif ($this->category === 'Computador') {
            // adicione aqui o checklist de computadores
        }
    
        return $this->items;
    }
}
