<?php 

class Checklist {
    private static $id = 0;
    private $category;
    private $procedure;

    public function __construct($category,$procedure) {
        self::$id++;
        $this->category = $category;
        $this->procedure = $procedure; 
    }

    private static function getNextId() {
        return Checklist::$id;
    }
}