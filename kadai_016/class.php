<?php

class Food {
    private $name;
    private $price;

    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }

    public function show_price() {
        echo $this->price . '<br>';
        
    }
}

class Animal {
    private $name;
    private $height;
    private $weight;

    public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->weight = $weight;
        $this->height = $height;
    }

    public function show_height() {
        echo $this->height . '<br>';
    }
}

$food = new Food('potato', 250);
print_r($food);

$animal = new Animal('dog', 60, 5000);
print_r($food);

$food->show_price(250);
$animal->show_height(60);
