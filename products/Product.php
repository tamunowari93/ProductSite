<?php
class Product {
  public $sku;
  public $name;
  public $price;
  private $description;

  public function __construct($args=[]) {
    $this->sku = $args['SKU'] ?? '';
    $this->name = $args['Name'] ?? '';
    $this->price = $args['Price'] ?? '';
    $this->description = $args['Description'] ?? '';
  }

  public function sku() {
    return ($this->sku);
  }
  public function name() {
    return ($this->name);
  }
  public function price() {
    return ($this->price);
  }
  public function prod_type() {
    return ($this->prod_type);
  }
  public function set_sku($value) {
    $this->sku = ($value);
  }
  public function set_name($value) {
    $this->name = ($value);
  }
  public function set_price($value) {
    $this->price = ($value);
  }
  public function set_prod_type($value) {
    $this->prod_type = ($value);
  }

}

  class Book extends Product {
    protected $weight_kg;
    protected $prod_type = "Book";

    function __construct($args=[]) {
      parent::__construct();
      $this->weight_kg = $args['Weight (kg)'] ?? '';
      $this->prod_type = $args['Type'] ?? '';
    }

    public function weight_kg() {
      return number_format($this->weight_kg) . ' kg';
    }
    public function type() {
      return ($this->type);
    }
    public function description() {
      return ($this->description);
    }
    
    public function set_weight_kg($value) {
      $this->weight_kg = floatval($value);
    }
    public function set_type($value) {
      $this->weight_kg = floatval($value);
    }

}

$manga = new Book();
$manga->set_sku('PB010012');
$manga->set_name('Kaijutsu Kaisen');
$manga->set_price('20');
$manga->set_weight_kg('3');

echo $manga->sku()."\n";
echo $manga->name()."\n";
echo $manga->price()."\n";
echo $manga->prod_type()."\n";
echo $manga->weight_kg();

?>




