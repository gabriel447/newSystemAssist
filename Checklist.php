<?php 

class Checklist {
    private static $id = 1;
    private $categories;
    private $procedures;

    public function __construct($id, $categories, $procedures) {
        self::$id++;
        $this->categories = $categories;
        $this->procedures = $procedures;
    }

    private  static function getNextId() {
        return Checklist::$id;
    }
}