<?php 

class Checklist {
    private static $id = 0;
    private $category;
    private $procedure;

    public function __construct($category, $procedure) {
        self::$id++;
        // echo "New Checklist created with ID: " . self::$id . PHP_EOL;
        $this->category = $category;
        $this->procedure = $procedure; 
    }

    private static function getNextId() {
        return Checklist::$id;
    }
}