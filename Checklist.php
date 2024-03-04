<?php 

class Checklist {
    private $items = [];

    public function addItem($key, $value) {
        $this->items[$key] = $value;
    }
}