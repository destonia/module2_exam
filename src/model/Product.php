<?php


namespace Model;

class Product
{
    public $id;
    public $name;
    public $category;
    public $price;
    public $quantity;
    public $createdDate;
    public $info;

    public function __construct($name,
                                $category,
                                $price,
                                $quantity,
                                $createdDate,
                                $info)
    {
        $this->name = $name;
        $this->category = $category;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->info = $info;
        $this->createdDate = $createdDate;
    }
}