<?php
namespace App\Controllers;

class Store
{
  private $name = '';
  private $stock = 0;
  private $sales = 0;
  private $refund = 0;
  private $price = 100;

  public function __construct($storeName, $initialStock)
  {
    $this->name = $storeName;
    $this->stock = $initialStock;
  }


  public function sales($soldItems)
  {
    // decrease stock
    $this->stock -= $soldItems;

    // increase sales
    $this->sales += $soldItems * $this->price;
    echo "<p>sales by $soldItems where item price = $this->price</p>";
  }


  public function report()
  {
    $stock = $this->stock;
    $name = $this->name;
    $sales = $this->sales;

    echo "<div>";
    echo "<p>Store $name has $stock items in the stock.</p>";
    echo "<p>Total Sales is $sales.</p>";
    echo "<hr>";
    echo "</div>";
  }

  public function refund($soldItems)
  {
    // decrease stock
    $this->stock += $soldItems;

    // increase sales
    $this->sales -= $soldItems * $this->price;
    echo "<p>Refund by $soldItems where item price = $this->price</p>";
  }

}
