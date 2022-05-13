<?php
  require 'private/classes/Product.php';
  require 'private/initialize.php';

  // Get product information
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

  /*** Product CLASS INSTANCES
  public function setDvd {
    # code...
    if ($type=="DVD")
    $dvd = new DVD();
    $dvd->set_sku($sku);
    $dvd->set_name($name);
    $dvd->set_price($price);
    $dvd->set_type($type);
    $dvd->set_size($size);
    $dvd->set_description($description);
  } 
  elseif ($type=="Furniture") {
    # code...
    $furniture = new Furniture();
    $furniture->set_sku($sku);
    $furniture->set_name($name);
    $furniture->set_price($price);
    $furniture->set_dimensions($height,$width,$length);
    $furniture->set_type($type);
    $furniture->set_description($description);
  } 
  elseif ($type=="Book"){
    # code...
    $book = new Book();
    $book->set_sku($sku);
    $book->set_name($name);
    $book->set_price($price);
    $book->set_weight_kg($weight_kg);
    $book->set_type($type);
    $book->set_description($description);
  }
  
  function insert_DVD($dvd) {
  escape($db, $dvd[$dvd->sku()]) . "',";
    $sql .= "'" . db_escape($db, $dvd[$dvd->name()]) . "',";
    $sql .= "'" . db_escape($db, $dvd[$dvd->price()]) . "'";
    $sql .= "'" . db_escape($db, $dvd[$dvd->prod_type()]) . "'";
    $sql .= "'" . db_escape($db, $dvd[$dvd->size()]) . "'";
    $sql .= "'" . db_escape($db, $dvd[$dvd->description()]) . "'";
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

  **/
  
?>