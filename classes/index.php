<?php

class ShopProduct {
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;
    
    public function __construct($title, $producerMainName, $producerFirstName, $price) {
        $this->title = $title;
        $this->producerMainName = $producerMainName;
        $this->producerFirstName = $producerFirstName;
        $this->price = $price;
    }
    public function getProducerName() {
        return $this->producerFirstName . ' ' .$this->producerMainName;
    }
}

// Constructor Promotion
class ShopProduct2  {
    public function __construct (public $title, public $producerMainName = ' ', public $producerFirstName = ' ', public $price = 0) {
    }

}

class ShopProductWriter
 {

    public function write($shopProduct) : string
    {
        $str = $shopProduct->title. ": " . $shopProduct->getProducerName() . '(' . $shopProduct->price . ')';

        return $str;
    }
}


// Objects
$product1 = new ShopProduct('Nataraj Pencil', 'Prince', 'Asiedu', 1);

$product2 = new ShopProduct('Oneplus Nord 5', 'OnePlus', 'Inc.', 4500);

$product3 = new ShopProduct2('RR', price: 234);

$productWriter = new ShopProductWriter();

$productWriter->write($product1);

print $product3->price;

// $product1->title = 'Nataraj pencil';
// $product2->title = 'almanac';

// $product1->producerMainName = "Asiedu";
// $product1->producerFirstName = 'Prince';

print "author: {$product1->getProducerName()}\n";

print $product1->title;

// var_dump($product1);
// var_dump($product2);

class Car {
    public $brand;
    public $year;
    public $model;
    public $price;

    public function __construct($brand, $year, $model, $price) {
        $this->brand = $brand;
        $this->year = $year;
        $this->model = $model;
        $this->price = $price;
    }

    public function getInfo(): string
    {
        $dollarFormat = new NumberFormatter('en-US', NumberFormatter::CURRENCY);

        return <<< CarInfo
        Brand: {$this->brand} \n
        Year : {$this->year}  \n
        Model: {$this->model} \n
        Price: {$dollarFormat->format($this->price)} \n
        CarInfo;

    }

}

$car1 = new Car('Lexus', 2021, 'FLA', 200000);

print "{$car1->getInfo()}";


class Storage
 {
    public function add(string $key, string|bool $value)
     { // Union types
        // do something
    }
}