<?php
  require 'private/classes/Product.php';
  require 'private/initialize.php';

  global $db;

  if(isset($_POST['product_form'])) {
    echo "Save Button is selected";
  }
  if(isset($_POST['cancel'])) {
      echo "Cancel is selected";
  }

  // Get product information
  public function getProduct(){
    $sku = htmlspecialchars($_POST['sku']);
    $name = htmlspecialchars($_POST['name']);
    $price  = htmlspecialchars($_POST['price']);
    $type = htmlspecialchars($_POST['prodtype']);
    $size = htmlspecialchars($_POST['size']);
    $height = htmlspecialchars($_POST['height']);
    $width = htmlspecialchars($_POST['width']);
    $length = htmlspecialchars($_POST['length']);
    $weight_kg = htmlspecialchars($_POST['weight']);
    $description = htmlspecialchars($_POST['description']);
  }

  // Product CLASS INSTANCES
  public function saveProducts() {
    $product = new Product();
    $product->set_sku($sku);
    $product->set_name($name);
    $product->set_price($price);
    $product->set_type($type);
    $product->set_description($description);

    // Save product information to Database
    $sql = "INSERT INTO products ";
    $sql .= "(sku, name, price, typeName, description) ";
    $sql .= "VALUES (";
    $sql .= "'" . db_escape($db, $item[$item->sku()]) . "',";
    $sql .= "'" . db_escape($db, $item[$item->name()]) . "',";
    $sql .= "'" . db_escape($db, $item[$item->price()]) . "'";
    $sql .= "'" . db_escape($db, $item[$item->prod_type()]) . "'";
    $sql .= "'" . db_escape($db, $item[$item->description()]) . "'";
    $sql .= ")";
    $result = mysqli_query($db, $sql);
    
    // For INSERT statements, $result is true/false
    if($result) {
      return true;
    } else {
      // INSERT failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  } 

  public function setDVD() {
    $dvd = new DVD();
    $dvd->set_sku($sku);
    $dvd->set_size($size);

    // Save dvd information to Database
    $sql = "INSERT INTO dvd ";
    $sql .= "(sku, size) ";
    $sql .= "VALUES (";
    $sql .= "'" . db_escape($db, $dvd[$dvd->sku()]) . "',";
    $sql .= "'" . db_escape($db, $dvd[$dvd->size()]) . "'";
    $sql .= ")";
    $result = mysqli_query($db, $sql);
    
    // For INSERT statements, $result is true/false
    if($result) {
      return true;
    } else {
      // INSERT failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  } 
  public function setFurniture() {
    $furniture = new Furniture();
    $furniture->set_sku($sku);
    $furniture->set_dimensions($height,$width,$length);

    // Save Furniture information to Database
    $sql = "INSERT INTO furniture ";
    $sql .= "(sku, dimensions) ";
    $sql .= "VALUES (";
    $sql .= "'" . db_escape($db, $furniture[$furniture->sku()]) . "',";
    $sql .= "'" . db_escape($db, $furniture[$furniture->dimensions()]) . "'";
    $sql .= ")";
    $result = mysqli_query($db, $sql);
    
    // For INSERT statements, $result is true/false
    if($result) {
      return true;
    } else {
      // INSERT failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  } 
  public function saveBook() {
    $book = new Book();
    $book->set_sku($sku);
    $book->set_weight_kg($weight_kg);

    // Save Book information to Database
    $sql = "INSERT INTO book ";
    $sql .= "(sku, weight) ";
    $sql .= "VALUES (";
    $sql .= "'" . db_escape($db, $item[$item->sku()]) . "',";
    $sql .= "'" . db_escape($db, $item[$item->weight_kg()]) . "'";
    $sql .= ")";
    $result = mysqli_query($db, $sql);
    
    // For INSERT statements, $result is true/false
    if($result) {
      return true;
    } else {
      // INSERT failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  }

  
?>