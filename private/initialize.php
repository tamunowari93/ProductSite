<?php
  ob_start(); // output buffering is turned on

  // Assign file paths to PHP constants
  // __FILE__ returns the current path to this file
  // dirname() returns the path to the parent directory
  define("PRIVATE_PATH", dirname(__FILE__));
  define("PROJECT_PATH", dirname(PRIVATE_PATH));
  define("PUBLIC_PATH", PROJECT_PATH . '/public');
  define("CLASS_PATH", PRIVATE_PATH . '/classes');

  // Assign the root URL to a PHP constant
  // * Do not need to include the domain
  // * Use same document root as webserver
  // * Can set a hardcoded value:
  // define("WWW_ROOT", '/~root/productsite/public');
  // define("WWW_ROOT", '');
  // * Can dynamically find everything in URL up to "/public"
  $public_end = strpos($_SERVER['SCRIPT_NAME'], '/public') + 7;
  $doc_root = substr($_SERVER['SCRIPT_NAME'], 0, $public_end);
  define("WWW_ROOT", $doc_root);

  require('functions.php');
  require('database.php');


  function insert_DVDItem($item) {
    global $db;
    $sql = "INSERT INTO dvd ";
    $sql .= "(sku, name, price, typeName, size, description) ";
    $sql .= "VALUES (";
    $sql .= "'" . db_escape($db, $item[$item->sku()]) . "',";
    $sql .= "'" . db_escape($db, $item[$item->name()]) . "',";
    $sql .= "'" . db_escape($db, $item[$item->price()]) . "'";
    $sql .= "'" . db_escape($db, $item[$item->prod_type()]) . "'";
    $sql .= "'" . db_escape($db, $item[$item->size()]) . "'";
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
  function insert_BookItem($item) {
    global $db;
    $sql = "INSERT INTO book ";
    $sql .= "(sku, name, price, typeName, weight, description) ";
    $sql .= "VALUES (";
    $sql .= "'" . db_escape($db, $item[$item->sku()]) . "',";
    $sql .= "'" . db_escape($db, $item[$item->name()]) . "',";
    $sql .= "'" . db_escape($db, $item[$item->price()]) . "'";
    $sql .= "'" . db_escape($db, $item[$item->prod_type()]) . "'";
    $sql .= "'" . db_escape($db, $item[$item->weight_kg()]) . "'";
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
  function insert_FurnitureItem($item) {
    global $db;
    $sql = "INSERT INTO furniture ";
    $sql .= "(sku, name, price, typeName, dimensions, description) ";
    $sql .= "VALUES (";
    $sql .= "'" . db_escape($db, $item[$item->sku()]) . "',";
    $sql .= "'" . db_escape($db, $item[$item->name()]) . "',";
    $sql .= "'" . db_escape($db, $item[$item->price()]) . "'";
    $sql .= "'" . db_escape($db, $item[$item->prod_type()]) . "'";
    $sql .= "'" . db_escape($db, $item[$item->dimensions()]) . "'";
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




  $db = db_connect();
  $errors = [];

?>
