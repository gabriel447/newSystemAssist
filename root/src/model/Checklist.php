<?php

namespace root\src\model;

class Checklist {
    private static $id = 0;
    private $category;
    private $items = [];
    private $checklistId;

    public function __construct($category) {
        //aqui gera o id no construtor
        self::$id++;
        //aqui atribui esse id a checkListId e mostra;
        $this->checklistId = self::$id;

        $this->category = $category;
        $this->addChecklist();
    }
    
    private function addChecklist() {
        if ($this->category === 'Celular') {
            $this->items[] = [
                'Damage' => 'ok',
                'Screen' => 'ok',
                'Board' => 'ok',
                'System' => 'ok',
                'Usb' => 'ok',
                'Battery' => 'ok',
                'Camera' => 'ok',
                'Sensors' => 'ok',
                'Bluetooth' => 'ok',
                'Wifi' => 'ok',
                'Call' => 'ok',
                'MobileData' => 'ok'
            ];
        } elseif ($this->category === 'Computador') {
            $this->items[] = [
                'Damage' => 'ok',
                'PowerSupply' => 'ok',
                'MotherBoard' => 'ok',
                'CPU' => 'ok',  
                'RAM' => 'ok',
                'HD' => 'ok',
                'OperationalSystem' => 'ok', 
                'GraphicsOnboard' => 'ok', 
                'GraphicsOffboard' => 'ok', 
                'Sound' => 'ok',
                'Cleanned' => 'ok',
                'ThermalPaste' => 'ok',
                'Fans/Coolers' => 'ok',
                'Screen' => 'ok',
                'Ports' => 'ok',
                'Usb' => 'ok',
                'Keyboard' => 'ok',
                'Touchpad' => 'ok',
                'Cables' => 'ok'
            ];
        }
    
        return $this->items;
    }
}
