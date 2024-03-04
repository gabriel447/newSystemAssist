<?php 

class Checklist {
    private static $id = 0;
    private $items;


    public function __construct() {
        self::$id++;
        $this->items = [];
    }

    private static function getNextId($id) {
        return Checklist::$id;
    }
      
    function addItem($item) {
        $this->items[] = $item;
    }
      
    function getItems() {
        return $this->items;
    }
    
}