
<p>Инкапсуляция означает, что значения переменных объекта не видны извне,это значит, реализуется защита данных от другого кода 

  2  Плюсы

 За счет реализации объектов, содержащих  данные с явным определением связей между объектами, код будет читаемым.
 Объекты, созданные, могут быть использованы множество раз. Программы могут быть построены путем объединения рабочих модулей вместо того, чтобы писать все с нуля. Это экономит время и повышает производительность.

 Объекты имеют собственные данные и функции, вся их структура компактна и сжата, что позволяет легко вносить в код изменения. С помощью обычного процедурного программирования создается код, в котором очень трудно найти точку для внесения изменений. В ООП PHP мы можем добавить новое свойство, а затем добавлять связанные методы для управления этим свойством.</p>





<?php
  class Car{
          public $color;
          private $price;
          protected $model;
          public function getPrice()
    {
          return $this-> price;
    }
          public function setPrice($price)
    {
          $this->price = $price;
    }
          public function changeColor($color) {
        //меняем color
    }
  }

$car1 = new Car();
$car2 = new Car();



class TV{
    public $size;
    public $producer;
    public $discount;
    private $price;
    public function getDiscount()
    {
        return $this->discount;
    }
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getPrice() {
        return $this->price * ((100 - ($this->getDiscount()))*0.01);
    }

  }

$tv1 = new TV();
$tv2 = new TV();


class Pen{
    private $color;
    private $material;
    public function getColor()
    {
        return $this->color;
    }
    public function getMaterial()
    {
        return $this->material;
    }
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function setMaterial($material)
    {
        $this->material = $material;
    }
  }
$pen1 = new Pen();
$pen2 = new Pen();

class duck{
    private $gender;
    private $weight;
    private $wings = 2;
    private $alive = true;
    public function shootWing() {
        $this->wings--;
   }
   public function shoot() {
       $this->alive = false;
    }
   public function __construct($gender, $weight)
   {
       $this->gender = $gender;
       $this->weight = $weight;
   }
}

$duck1 = new Duck('male', 2);
$duck1->shoot();
$duck2 = new Duck('female', 2);
$duck2->shootWing(); 



class Product{
    protected $id           = "ID товара";
    protected $type         = "тип товара";
    protected $name         = "название товара";
    protected $description  = "описание товара";
    protected $price        = "цена товара";

    function __construct($id)
    {
        
        $this->id           =  $id;
        $this->type         =  "книга";
        $this->name         =  "рхр";
        $this->description  =  "Книга в жестком переплете";
        $this->price        =  "500";
    }

    function printProduct()
    {
        echo "
            ID товара: $this->id. Тип товара: $this->type.
            Название: \"$this->name\". Описание: $this->description. Цена: $this->price.";
    }
}

$Product1 = new Product();
$Product2= new Product();
  }





?>