<?php
class Product
{
    public $id, $name, $price;

    public function __construct($id, $name, $price)
    {
        $this->id    = $id;
        $this->name  = $name;
        $this->price = $price;
    }

    function getFormattedPrice()
    {
        return "- Price: $" . number_format($this->price, 2);
    }

    function showDetails()
    {
        echo "Product Details:<br>";
        echo "- ID: {$this->id}<br>";
        echo "- Name: {$this->name}<br>";
        echo $this->getFormattedPrice();
    }
}

$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();
