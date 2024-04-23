<?php
// Su dung tu khoa Intanceof
class Fruit {
    // Properties
    public $name;
    public $color;

    // Method
    function set_name($name) {
        $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }
}

$apple = new Fruit();
var_dump($apple instanceof Fruit);